const express = require('express');
const http = require('http');
const path = require('path');
const WebSocket = require('ws');
const ModbusRTU = require('modbus-serial');
const mysql = require('mysql');

const app = express();
const server = http.createServer(app);
const wss = new WebSocket.Server({ server });
const connection = mysql.createConnection({
    host: 'localhost',
    port: 3307,
    user: 'root',
    password: '',
    database: 'mppt'
});

// Connect to database
function connectToDatabase() {
    connection.connect((err) => {
        if (err) {
            console.error('Error connecting to database:', err);
            setTimeout(connectToDatabase, 2000); // Reconnect after 2 seconds
            return;
        }
        console.log('Connected to MySQL database');
    });

    // Handle database connection errors
    connection.on('error', function(err) {
        console.error('MySQL error:', err);
        if (err.code === 'PROTOCOL_CONNECTION_LOST') {
            console.log('Connection to MySQL server lost. Attempting to reconnect...');
            connectToDatabase(); // Reconnect
        } else {
            throw err;
        }
    });
}

connectToDatabase(); // Start database connection

// Initialize Modbus clients
const modbusClients = [];

// Load devices from MySQL database
const devices = [];

// Load devices status from database
function loadDevicesStatusFromDatabase() {
    connection.query('SELECT ip, status FROM device_mppt', (err, results) => {
        if (err) {
            console.error('Error querying database:', err);
            return;
        }
        // Send device status to clients
        wss.clients.forEach(client => {
            if (client.readyState === WebSocket.OPEN) {
                client.send(JSON.stringify({ type: 'device_status', data: results }));
            }
        });
    });
}

// Set interval to load devices status periodically
setInterval(loadDevicesStatusFromDatabase, 5000); // Update every 5 seconds

// Query database to get devices
function loadDevicesFromDatabase() {
    connection.query('SELECT ip, name FROM device_mppt ORDER BY ip', (err, results) => {
        if (err) {
            console.error('Error querying database:', err);
            return;
        }
        // Process query results
        devices.length = 0; // Clear devices array before repopulating
        results.forEach((device) => {
            devices.push(device);
        });
        console.log('Loaded device_mppt from MySQL database:', devices);
    });
}

loadDevicesFromDatabase(); // Load devices from database when the application starts

// Handle database operation errors
connection.on('error', function(err) {
    console.error('MySQL error:', err);
});

// Function to read Modbus data from a device
async function readModbusData(ip) {
    try {
        const modbusClient = new ModbusRTU();
        await modbusClient.connectTCP(ip, { port: 502 });

        // Read battery voltage data
        const data = await modbusClient.readHoldingRegisters(0x0018, 1);
        const decimalValue = data.data[0];
        const batteryVoltage = decimalValue * 180 * 0.00003051757;

        // Return IP address, device name, battery voltage, and timestamp
        return {
            ip: ip,
            name: devices.find(device => device.ip === ip).name,
            batteryVoltage: batteryVoltage.toFixed(2),
            timestamp: new Date().toISOString()
        };
    } catch (error) {
        console.error(`Error reading Modbus data from ${ip}:`, error);
        return null;
    }
}

// Function to send Modbus data to all clients
function sendModbusDataToClients() {
    for (const client of modbusClients) {
        for (const device of devices) {
            readModbusData(device.ip)
                .then(data => {
                    if (data !== null) {
                        const modbusData = {
                            ip: data.ip,
                            name: data.name,
                            batteryVoltage: data.batteryVoltage,
                            timestamp: data.timestamp
                        };
                        client.ws.send(JSON.stringify(modbusData)); // Send data to the client as JSON
                    }
                })
                .catch(error => {
                    console.error('Error sending Modbus data to client:', error);
                });
        }
    }
}

// Handle new client connections
wss.on('connection', function connection(ws) {
    console.log('Client connected.');

    // Add client to modbusClients array
    const client = { ws: ws };
    modbusClients.push(client);

    // Send initial data to client
    for (const device of devices) {
        readModbusData(device.ip)
            .then(data => {
                if (data !== null) {
                    client.ws.send(JSON.stringify(data)); // Send data to the client as JSON
                }
            })
            .catch(error => {
                console.error('Error sending initial Modbus data to client:', error);
            });
    }

    // Handle client disconnection
    ws.on('close', function () {
        console.log('Client disconnected.');
        // Remove client from modbusClients array
        const index = modbusClients.findIndex(c => c.ws === ws);
        if (index !== -1) {
            modbusClients.splice(index, 1);
        }
    });
});

// Set interval to send data to clients periodically
setInterval(sendModbusDataToClients, 1000); // Update every 1 second

// Serve static files from the 'public' directory
app.use(express.static(path.join(__dirname, 'public')));

// Redirect requests to root URL to 'index.html'
app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// Start the server
const PORT = process.env.PORT || 1010;
server.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
