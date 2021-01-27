<?php
require_once 'koneksicrud.php';
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = $conn->query("DELETE FROM daftar_tugas WHERE id_tugas = '$id'");
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='halaman_admin.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data berhasil dihapus'); window.location.href='halaman_admin.php'</script>";
  }
} else {
  header('Location:halaman_admin.php');
}