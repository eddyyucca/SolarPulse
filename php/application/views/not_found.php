<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SafetyAlertPro</title>

  <!-- icon -->
    <link rel="shortcut icon" href=" <?= base_url('assets/') ?>icon.ico">
<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
  }
  
  .container {
    text-align: center;
  }
  
  h1 {
    font-size: 6em;
    color: #333;
    margin-bottom: 20px;
    position: relative;
    animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both infinite;
    text-shadow: 3px 3px 5px rgba(0,0,0,0.2); /* Bayangan */
  }
  
  @keyframes shake {
    10%, 90% {
      transform: translate3d(-1px, 0, 0);
    }
    
    20%, 80% {
      transform: translate3d(2px, 0, 0);
    }
  
    30%, 50%, 70% {
      transform: translate3d(-4px, 0, 0);
    }
  
    40%, 60% {
      transform: translate3d(4px, 0, 0);
    }
  }
  
  p {
    font-size: 1.5em;
    color: #666;
    margin-top: 0;
  }
  
  a {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
  }
  
  a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
<div class="container">
  <h1>404</h1>
  <p>Halaman yang Anda cari tidak ditemukan.</p>
  <p>Kembali ke <a href="<?= base_url('login') ?>">Beranda</a>.</p>
</div>
</body>
</html>
