<?php 
  require_once 'koneksicrud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Satya Wira Permana - Daftar Tugas</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    html {scroll-behavior:smooth;}
    .backtoTop {width:50px; height:50px; position:fixed; bottom:50px; right: 10px; z-index:99; cursor:pointer; border-radius:100px; transition:all .5s; background:blue url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}
    .backtoTop:hover {background:blue url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}
  </style>
</head>

<body>
  <?php
    $q = $conn->query("SELECT * FROM daftar_tugas");
  ?>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand"><b>Daftar Tugas</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><b>Home
              </b><span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tugas_paw.php"><b>Tugas PAW</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php"><b>Login</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1><b>Kumpulan Tugas Praktikum PAW</b></h1>
      <center><h5><i>Website ini berisi Kumpulan Tugas Praktikum Pengembangan Aplikasi Web</i></h5>
      <center><h5><b>Satya Wira Permana (1187050098)</b></h5>
      <br>
      <a href="https://wirapermana3.blogspot.com" class="btn btn-primary btn-lg">My Blog</a></center>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
      <?php  while ($dt = $q->fetch_assoc()) : ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          </br>
          <h4><b><?= $dt['nama_tugas'] ?></b></h4>
          <div class="card-body">
            <h6 class="card-title"><b>Deskripsi</b></h6>
            <p class="card-text"><?= $dt['deskripsi'] ?></p>
          </div>
          <div class="card-footer">
            <a href="<?= $dt['linkurl'] ?>" class="btn btn-success" target="_blank">Link Program</a>
          </div>
          <div class="card-footer">
            <a href="<?= $dt['linkdocument'] ?>" class="btn btn-primary" target="_blank">Link Dokumentasi Tugas</a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="row text-center">
      <?php  
      while ($dt = $q->fetch_assoc()) :
      endwhile; 
      ?>
    </div>
    <div class="row text-center">
      <?php  
      while ($dt = $q->fetch_assoc()) :
      endwhile; 
      ?>
    </div>
  </div>
  <!-- /.container -->
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <h4 class="m-0 text-center text-white"><b>Copyright &copy; Satya Wira Permana 2020</b></h4>
    </div>
    <!-- /.container -->
  </footer>
  <a href="#" class="backtoTop"></a> 
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
