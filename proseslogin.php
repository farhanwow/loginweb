<?php
   session_start();
   require_once("koneksi/koneksi.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);

   $sql = "SELECT * FROM user WHERE username = '$username'";

   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();

   if($query->num_rows == 0)
   {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   }
   else
   {
     if($pass != $hasil['password']) 
     {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } 
     else
     {
      if ($hasil['access'] == "admin")
      {
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['access'] = "admin";
        header('location:1.php');
      }
      elseif ($hasil['access'] == "member")
      {
        $_SESSION['username'] = $hasil['username'];
        $_SESSION['access'] = "member";
        header('location:2.php');
      }
      else
      {
        $_SESSION['username'] = $hasil['username'];
        header('location:welcome.php');      
      }
  


      /*$_SESSION['username'] = $hasil['username'];
       header('location:welcome.php');
      if ($hasil2 == ['admin'])
      {
        $_SESSION['username'] = $hasil['username'];
        header('location:1.php');
      } 
      elseif ($hasil2 == ['member']) 
      {
        $_SESSION['username'] = $hasil['username'];
        header('location:2.php');
      }*/
     
     }
    } 
?>