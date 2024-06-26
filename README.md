# SolarPulse App

<p align="center">
  <img src="logo.png" width="200" height="200" alt="Logo Proyek">
</p>

SolarPulse adalah sebuah aplikasi untuk memantau semua perangkat secara real-time dan memberikan pemberitahuan suara dan visual saat terjadi penurunan tegangan.

## Deskripsi

SolarPulse App memungkinkan Anda untuk memantau semua perangkat terhubung secara real-time, memberikan notifikasi suara dan visual ketika terjadi penurunan tegangan. Dengan fitur ini, Anda dapat dengan cepat mengidentifikasi masalah potensial dan mengambil tindakan yang diperlukan untuk menjaga kinerja sistem energi surya Anda.

SolarPulse memungkinkan pengguna untuk memantau dan mengelola sistem energi surya mereka dengan mudah. Aplikasi ini menggunakan protokol Modbus untuk berkomunikasi dengan perangkat-perangkat di dalam sistem, seperti inverter dan pengontrol MPPT (Maximum Power Point Tracker). Data yang dikumpulkan dari perangkat-perangkat ini kemudian diproses dan ditampilkan kepada pengguna melalui antarmuka pengguna yang ramah. Node.js digunakan untuk mengembangkan backend aplikasi, yang bertugas mengatur komunikasi dengan perangkat-perangkat Modbus, memproses data, dan menyediakan layanan API untuk interaksi antara frontend dan backend. PHP digunakan untuk pengembangan fitur-fitur tambahan, seperti operasi CRUD (Create, Read, Update, Delete) ke database untuk menyimpan konfigurasi sistem dan riwayat pemantauan.

## Fitur Utama

- **Pemantauan Real-Time**: Monitor semua perangkat terhubung secara real-time untuk mengawasi kinerja sistem energi surya Anda.
- **Pemberitahuan**: Terima notifikasi suara dan visual saat terjadi penurunan tegangan atau masalah lainnya.
- **Warna dan Suara Kustom**: Atur warna dan suara yang ingin digunakan untuk notifikasi agar sesuai dengan preferensi Anda.

## Instalasi

Langkah-langkah instalasi:

MPPT Morningstar :

1. Setting IP MPPT

![Tangkapan Layar Folder Assets](assets/msview.png)

Server web:

1. Clone repositori ini ke sistem lokal Anda.
2. Buka aplikasi di lingkungan pengembangan Anda.
3. Install semua dependensi dengan menjalankan perintah `npm install`.
4. Masukkan MySql Databases di dalam folder Databases.
5. Install & jalankan apache2.
6. Jalankan aplikasi dengan perintah `node server_multi.js`.

## Pengaturan IP dalam Kode Sumber

Jika Anda perlu mengubah alamat IP yang terdaftar dalam kode sumber aplikasi, berikut langkah-langkahnya:

### File `server_multi.js`

1. Buka file `server_multi.js` dalam editor teks atau IDE Anda.
2. Cari baris kode yang menetapkan alamat IP, mungkin terlihat seperti ini:

   ```javascript
   const serverIP = "192.168.1.100";
   ```

   Ganti `'192.168.1.100'` dengan alamat IP yang sesuai dengan lingkungan jaringan Anda.

3. Simpan perubahan yang Anda buat dalam file.

4. Jalankan kembali aplikasi Anda dengan menggunakan perintah:

   ```bash
   node server_multi.js
   ```

### File `php/application/config/databases.php`

1. Buka file `databases.php` dalam editor teks atau IDE Anda, yang biasanya berada di direktori `php/config`.
2. Cari baris kode yang menetapkan alamat IP untuk koneksi ke database, mungkin terlihat seperti ini:

   ```php
   'hostname' => 'localhost',
   ```

   Ganti `'192.168.1.100'` dengan alamat IP yang sesuai dengan lingkungan jaringan Anda.

3. Simpan perubahan yang Anda buat dalam file.

Dengan cara ini, Anda dapat dengan mudah mengubah alamat IP yang digunakan dalam kedua file tersebut sesuai kebutuhan Anda.

## Penggunaan

Untuk menggunakan SolarPulse App:

1. Buka aplikasi.
2. Lihat pemantauan real-time dari semua perangkat Anda.
3. Amati pemberitahuan suara dan visual saat terjadi penurunan tegangan atau masalah lainnya.
4. Ambil tindakan yang diperlukan untuk menjaga kinerja sistem energi surya Anda.

## Pengembangan Selanjutnya

- Integrasi dengan sistem monitoring lainnya.
- Penambahan fitur notifikasi melalui email atau pesan teks.

## Kontribusi

Anda dapat berkontribusi pada pengembangan SolarPulse App dengan mengirimkan pull request. Pastikan untuk membuat deskripsi yang jelas tentang perubahan yang Anda usulkan.

---

© 2024 | Dibuat oleh Eddy Adha Saputra
