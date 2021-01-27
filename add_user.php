 <?php
require_once 'koneksicrud.php';
if (isset($_POST['submit'])) {
  $n_user = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level = $_POST['level'];
  $z = $conn->query("INSERT INTO user VALUES ('', '$n_user', '$username', '$password', '$level')");
  if ($z) {
    echo "<script>alert('Data User berhasil ditambahkan'); window.location.href='daftar_user.php'</script>";
  } else {
    echo "<script>alert('Data User gagal ditambahkan'); window.location.href='daftar_user.php'</script>";
  }
} else {
  header('Location: daftar_user.php');
}