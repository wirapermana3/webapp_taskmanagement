 <?php

require_once 'koneksicrud.php';

if (isset($_POST['submit'])) {
  $n_tugas = $_POST['nama_tugas'];
  $deskripsi = $_POST['deskripsi'];
  $linkurl = $_POST['linkurl'];
  $linkdocument = $_POST['linkdocument'];

  // id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO daftar_tugas VALUES ('', '$n_tugas', '$deskripsi', '$linkurl', '$linkdocument')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Tugas berhasil ditambahkan'); window.location.href='halaman_admin.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Tugas gagal ditambahkan'); window.location.href='halaman_admin.php'</script>";
  }
} else {
  header('Location: halaman_admin.php');
}