<?php

require_once 'koneksicrud.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id_tugas'];
  $n_tugas = $_POST['nama_tugas'];
  $deskripsi = $_POST['deskripsi'];
  $linkurl = $_POST['linkurl'];
  $linkdocument = $_POST['linkdocument'];
  $q = $conn->query("UPDATE daftar_tugas_paw SET nama_tugas = '$n_tugas', deskripsi = '$deskripsi', linkurl = '$linkurl', linkdocument = '$linkdocument' WHERE id_tugas = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data tugas berhasil diubah'); window.location.href='daftar_tugas_paw.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data tugas gagal diubah'); window.location.href='daftar_tugas_paw.php'</script>";
  }
} else {
  header('Location: daftar_tugas_paw.php');
}
