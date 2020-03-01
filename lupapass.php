<?php
    session_start();
    if(isset($_SESSION['username'])) 
    {
      header('location:welcome.php'); 
    }
   include ("koneksi/koneksi.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Lupa password</title>
	</head>
		<body>
			<form action="resetpass.php" method="POST">
			<div>Lupa Password?</div>
			<br>
			<br>
			<div>Tulis Username Anda</div>
			<br>
			<input type="text" name="username" id="username">
			<br>
			<div>Reset Password Anda Dibawah Ini</div>
			<br>
			<input type="text" name="lupapass" id="lupapass">
			<br>
			<br>
			<div>
				 <button type="submit" class="btn btn-primary" style="width: 250px">Confirm</button>
			</div>
			</form>
		</body>
</html>