<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SolarPulse</title>

  <!-- icon -->
    <link rel="shortcut icon" href=" <?= base_url('assets/') ?>solarplus.ico">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url('assets');?>/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
    body {
      background-image: url(<?= base_url('assets/sunrise-solar.jpg') ?>); /* Ganti dengan path ke gambar Anda */
      background-size: cover; /* Ini akan memastikan gambar menutupi seluruh layar */
      background-position: center; /* Ini akan menempatkan gambar di tengah */
      background-repeat: no-repeat; /* Ini mencegah gambar berulang */
    }
    .login-logo p {
      background-color: rgba(0, 0, 0, 0.5); /* Warna latar belakang semi-transparan */
      color: #fff; /* Warna teks putih */
      padding: 10px; /* Ruang di sekitar teks */
      border-radius: 5px; /* Sudut melengkung */
      display: inline-block; /* Membuat elemen sesuai dengan konten */
    }
  </style>
</head>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
		
			<p>Application Monitoring MPPT Morningstar
<br>
<b>SolarPulse</b>
			</p>
		</div>
		<!-- /.login-logo -->

		<?php if ($this->session->flashdata('login') == "n_login") { ?>
			<div class="alert alert-danger" role="alert">Anda Belum Login!</div>
		<?php } elseif ($this->session->flashdata('login') == "keluar_akun") { ?>
			<div class="alert alert-success" role="alert">Anda Berhasil Keluar!</div>
		<?php } ?>

	<div class="card">
    <div class="card-body login-card-body">
        <div class="text-center mb-4"> <!-- Center the logo -->
            <img src="<?= base_url('assets/logo_buma_tabang.png') ?>" width="70%" alt="Logo">
        </div>
		<hr>
        <p class="login-box-msg">Please Sign In</p>
        <form action="<?=base_url('Device_controller')?>" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
</div>

	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?=base_url('assets');?>/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url('assets');?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url('assets');?>/dist/js/adminlte.min.js"></script>

</body>

</html>
