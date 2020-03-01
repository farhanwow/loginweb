<?php
session_start();
if(!isset($_SESSION['username'])) 
{
   header('location:login.php'); 
} 
else 
{ 
   $username = $_SESSION['username']; 
}
?>

Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a><br>