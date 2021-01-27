<?php
require_once 'koneksicrud.php';
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $q = $conn->query("DELETE FROM daftar_tugas_paw WHERE id_tugas = '$id'");
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='daftar_tugas_paw.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data berhasil dihapus'); window.location.href='daftar_tugas_paw.php'</script>";
  }
} else {
  header('Location:daftar_tugas_paw.php');
}