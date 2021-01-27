<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Ubah Data Tugas PAW</title>
  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script type="text/javascript">
    window.setTimeout("location=('logout.php');",500000);
  </script>
  <style>
    body{
        background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(93,248,217,1) 0%, rgba(231,255,242,1) 100%);
    }
      form_main {
    width: 100%;
    }
    .form_main h4 {
        font-family: roboto;
        font-size: 20px;
        font-weight: 300;
        margin-bottom: 15px;
        margin-top: 20px;
        text-transform: uppercase;
    }
    .heading {
        border-bottom: 1px solid #fcab0e;
        padding-bottom: 9px;
        position: relative;
    }
    .heading span {
        background: #9e6600 none repeat scroll 0 0;
        bottom: -2px;
        height: 3px;
        left: 0;
        position: absolute;
        width: 75px;
    }   
    .form {
        border-radius: 8px;
        padding: 6px;
    }
    .txt[type="text"] {
        border: 1px solid #ccc;
        margin: 10px 0;
        padding: 10px 0 10px 5px;
        width: 100%;
    }
    .txt_3[type="text"] {
        border: 1px solid #ccc;
        margin: 10px 0 0;
        padding: 10px 0 10px 5px;
        width: 100%;
    }
    .txt2[type="submit"] {
        background: #242424 none repeat scroll 0 0;
        border: 1px solid #4f5c04;
        border-radius: 25px;
        color: #fff;
        font-size: 14px;
        font-style: normal;
        line-height: 35px;
        margin: 10px 0;
        padding: 0;
        text-transform: uppercase;
        width: 30%;
    }
    .txt2:hover {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        color: #5793ef;
        transition: all 0.5s ease 0s;
    }
  </style>
</head>
<body>
<?php
session_start();
require_once 'koneksicrud.php';
 if ($_SESSION['level']!="admin") {
      echo "<script>alert('Akses Ditolak!!'); window.location.href='halaman_user.php'</script>";
      exit;
  }
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $q = $conn->query("SELECT * FROM daftar_tugas_paw WHERE id_tugas = '$id'");

  foreach ($q as $dt) :
  ?>
  <div class="container">
	<div class="row">
    <div class="col-md-4">
	  <div class="form_main">
        <h4 class="heading"><strong>Halaman Ubah Data</strong><span></span></h4>
        <div class="form">
        <form action="proses_update_paw.php" method="post">
        <input type="hidden" name="id_tugas" value="<?= $dt['id_tugas'] ?>">
        <label for="nama_tugas"><b>Nama Tugas</b></label>
        <input type="text" class="txt" name="nama_tugas" value="<?= $dt['nama_tugas'] ?>">
        <label for="deskripsi"><b>Deskripsi</b></label>
        <textarea type="text" class="txt" name="deskripsi"><?= $dt['deskripsi'] ?></textarea>
        <label for="linkurl"><b>Link Program</b></label>
        <input type="text" class="txt_3" name="linkurl" value="<?= $dt['linkurl'] ?>">
        <br><br>
        <label for="linkdocument"><b>Link Dokumentasi Tugas</b></label>
        <input type="text" class="txt_3" name="linkdocument" value="<?= $dt['linkdocument'] ?>">
        <input type="submit" class="txt2" name="submit" value="Ubah Data">
        &nbsp;&nbsp;<button class="btn btn-primary" href="daftar_tugas_paw.php">Kembali</button>
        </form>
        </div>
        </div>
    </div>
    </div>
  </div>
  <?php
  endforeach;
} ?>
</body>
</html>
