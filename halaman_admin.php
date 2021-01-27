<?php
  session_start();
  // panggil koneksinya
  require_once 'koneksicrud.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Admin</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <script type="text/javascript">
    window.setTimeout("location=('logout.php');",500000);
  </script>
  <style>
    html {scroll-behavior:smooth;}
    .backtoTop {width:50px; height:50px; position:fixed; bottom:50px; right: 10px; z-index:99; cursor:pointer; border-radius:100px; transition:all .5s; background:blue url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}
    .backtoTop:hover {background:blue url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}
  </style>
</head>
<body>
  <?php 
  if (!isset($_SESSION["username"])) {
      echo "<script>alert('Anda Harus Login Terlebih Dahulu!!'); window.location.href='login.php'</script>";
      exit;
  }
	if($_SESSION['level']==""){
		  header("location:login.php?pesan=gagal");
	}
	?>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand"><b>Halo, <?php echo $_SESSION['username']; ?></b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link active" href="halaman_admin.php"><b>Halaman Admin</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftar_user.php"><b>Daftar User</b></a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="daftar_tugas_paw.php"><b>Daftar Tugas PAW</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><b>Logout</b></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	<!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <center><h1><b>Daftar Tugas Praktikum Pengembangan Aplikasi Web</b></h1></center>
      <center><h5>Halo <b><u><?php echo $_SESSION['username']; ?></u></b>, anda telah berhasil login dengan level sebagai <b><?php echo $_SESSION['level']; ?></b>.</h5>
      <br>
      <a href="logout.php" class="btn btn-danger btn-lg">Logout Bisa Disini!</a></center>
    </header>
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">
    <div class="form-group">
      <label for="nama_tugas"><b>Nama Tugas</b></label>
      <input class="form-control" type="text" name="nama_tugas" placeholder="Masukkan Nama Tugas...." required="required">
    </div>
    <div class="form-group">
      <label for="deskripsi"><b>Deskripsi</b></label>
      <textarea class="form-control" type="text" name="deskripsi" placeholder="Isikan Deskripsi Tugas...." required="required"></textarea>
    </div>
    <div class="form-group">
      <label for="linkurl"><b>Link Program</b></label>
      <input class="form-control" type="text" name="linkurl" placeholder="Masukkan Link URL" required="required">
    </div>
    <div class="form-group">
      <label for="linkdocument"><b>Link Dokumentasi Tugas</b></label>
      <input class="form-control" type="text" name="linkdocument" placeholder="Masukkan Link Dokumentasi Tugas" required="required">
    </div>
    <button type="submit"  class="btn btn-primary" name="submit" value="Tambah Data"><b>Tambah Data</b></button>
  </form><br/>
  
  <!-- Read atau menampilkan data dari database -->
  <div class="table-responsive">
  <table class="table table-warning" border="5" width="50%">
    <thead class="thead-dark">
    <tr>
      <th style="text-align: center">No.</th> 
      <th style="text-align: center">&nbsp;&nbsp;Tugas&nbsp;&nbsp;&nbsp;</th>
      <th style="text-align: center">Deskripsi</th>
      <th style="text-align: center">Link Program</th>
      <th style="text-align: center">Link Dokumentasi Tugas</th>
      <th style="text-align: center" colspan="2">Aksi</th>
    </tr>
    </thead>
    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM daftar_tugas");
    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama_tugas'] ?></td>
      <td><?= $dt['deskripsi'] ?></td>
      <td><a href="<?= $dt['linkurl'] ?>" target="_blank"><?= $dt['linkurl'] ?></a></td>
       <td><a href="<?= $dt['linkdocument'] ?>" target="_blank"><?= $dt['linkdocument'] ?></a></td>
      <td><a class="btn btn-primary btn-lg" href="update.php?id=<?= $dt['id_tugas'] ?>">Ubah</a></td>
      <td><a class="btn btn-danger btn-lg" href="delete.php?id=<?= $dt['id_tugas'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
    <?php
    endwhile;
    ?> 
  </table>
  </div>
  </div>
  </br>
  </br>
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