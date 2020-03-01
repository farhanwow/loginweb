<?php
   session_start();
   require_once("koneksi/koneksi.php");
   $username = $_POST['username'];
   $lupapass = md5($_POST['lupapass']);

   $sql = "SELECT * FROM user WHERE username = '$username'";

   $query = $conn->query($sql);
   $hasil = $query->fetch_assoc();

   $sql2 = "UPDATE user set password='$lupapass' WHERE username='$username'";

   $query2 = $conn->query($sql2);