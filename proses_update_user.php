<?php

require_once 'koneksicrud.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $n_user = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $z = $conn->query("UPDATE user SET nama = '$n_user', username = '$username', password = '$password', level = '$level' WHERE id = '$id'");

  if ($z) {
    // pesan jika data berubah
    echo "<script>alert('Data User berhasil diubah'); window.location.href='daftar_user.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data User gagal diubah'); window.location.href='daftar_user.php'</script>";
  }
} else {
  header('Location: daftar_user.php');
}
