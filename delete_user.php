<?php
require_once 'koneksicrud.php';
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $z = $conn->query("DELETE FROM user WHERE id = '$id'");
  if ($z) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='daftar_user.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data berhasil dihapus'); window.location.href='daftar_user.php'</script>";
  }
} else {
  header('Location:daftar_user.php');
}