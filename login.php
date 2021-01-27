<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1><b>Halaman Login</b></h1>
	<?php  
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert'>Username dan Password salah!</div>";
			}
		}
	?>
	<div class="kotak_login">
		<p class="tulisan_login"><b>Silahkan Login Disini</b></p>
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username .." required="required">
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password .." required="required">
			<input type="submit" class="tombol_login" value="LOGIN">
			</br>
			</br>
			<center>
				<a class="link" href="register.php">Belum Punya Akun? Daftar Disini!</a>
			</center>
			</br>
			<center>
				<a>atau</a> <a class="link" href="index.php">Kembali ke Halaman Daftar Tugas</a>
			</center>
		</form>
	</div>
</body>
</html>