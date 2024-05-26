<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me - Eddy Adha Saputra</title>
  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href=" <?= base_url('assets/') ?>solarplus.ico">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .profile-picture {
      border-radius: 50%;
    }
    .about-me {
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="text-center">
         <img src="<?= base_url('assets/') ?>profile-picture.jpeg" class="profile-picture mt-4" alt="Profile Picture" width="150" height="auto">
   
          <h2 class="mt-3">Eddy Adha Saputra</h2>
          <p class="lead">Experienced Web Programmer</p>
          <p>An experienced Web Programmer with expertise in web application development and IT operational systems. Offers skills in utilizing various technologies and frameworks, backed by a diverse background in multiple industries.</p>
        </div>
        <div class="about-me mt-5">
          <h3>About the Application</h3>
          <p>The application I've developed is a monitoring system for MPPT Morningstar. It allows users to monitor and analyze the performance of their solar systems efficiently. The app is designed for the community and is completely free to use.</p>
          <p>Features of the application include real-time monitoring of MPPT parameters, historical data analysis, customizable alerts, and user-friendly dashboard.</p>
          <p>This application aims to empower the community by providing them with a tool to optimize their solar energy systems and contribute to sustainable energy usage.</p>
        </div>
        <div class="social-links mt-4">
          <h3 class="text-center">Connect with Me</h3>
          <div class="text-center">
            <a href="https://community.morningstarcorp.com/member/MuIki0042r" class="btn btn-primary" target="_blank"><i class="fas fa-users"></i> Morningstar Community</a>
            <a href="https://www.linkedin.com/in/eddyyucca/" class="btn btn-info" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>
            <a href="https://github.com/eddyyucca" class="btn btn-dark" target="_blank"><i class="fab fa-github"></i> GitHub</a>
          </div>
        </div>
        <div class="text-center mt-4">
          <a href="<?= base_url('device_controller') ?>" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back</a>
          <br><br>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JS -->
 
<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
</body>
</html>
