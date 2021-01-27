<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Akun</title>
  <style>
    body{
      background: rgb(2,0,36);
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(93,248,217,1) 0%, rgba(231,255,242,1) 100%);
    }
    .form {
     margin: 10% 0 0 25%;
     float: left;
     width: 60%;
    }
    .input {
     padding: 1%;
     color: #777777;
     font-size: 14pt;
     float: left;
     width: 80%;
     margin-bottom: 1%;
    }
    .input2 {
     padding: 1%;
     color: #777777;
     font-size: 14pt;
     float: center;
     width: 82.4%;
     margin-bottom: 1%;
    }
    .submit {
     padding: 1%;
     color: #fff;
     background-color: #11b022;
     font-size: 16pt;
     font-family: Times New Roman;
     float: left;
     width: 40%;
    }
    .welcome {
     color: black;
     font-size: 25pt;
     font-weight: 900;
     font-family: Centaur;
    }
  </style>
</head>
<body>
<div class="form">
<span class="welcome">Daftar Akun</span>
 <form action="" method="post">
  <input class="input" type="text" name="nama" placeholder="Nama" required="required"><br>
  <input class="input" type="text" name="username" placeholder="Username" required="required"><br>
  <input class="input" type="password" name="password" placeholder="Password" required="required"><br>
  <select class="input2" name="level" required="required">
    <option value="">--Level Akses--</option>
    <option value="user">user</option>
  </select>
  </br></br>
  <input class="submit" type="submit" value="Daftar" name="simpan">
<br><br>
<br><br><br>
<br><br>
 </form>
</div>
</body>
</html>
<?php
include 'koneksi.php';
if (@$_POST['simpan']) {
  $n_user = @$_POST['nama'];
  $username = @$_POST['username'];
  $password = @$_POST['password'];
  $level = @$_POST['level'];
  mysqli_query($koneksi, "INSERT INTO user (nama, username, password, level) VALUES ('$n_user', '$username', '$password', '$level')");

?>
<script type="text/javascript">
  alert("Akun Berhasil Dibuat");
  window.location.href="login.php"
</script>
<?php }
 ?>