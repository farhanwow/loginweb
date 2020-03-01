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
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style/style3.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  </head>
<body> 

  <form action="proseslogin.php" method="POST">
    <div class="container" align="center" style="margin-top: 150px">
      <div class="card" align="left" style="width: 400px;border-radius: 25px;padding-left: 50px; padding-right: 50px;">
        <div class="card-body">
          <p class="h2" align="center"><abbr title="Log In">Login</abbr></p>
            <div class="form-group">
              <label for="Username">Username</label>
                <input type="text" class="form-control" placeholder="username" id="username" name="username" required>
            </div>
              <div class="form-group">
                <label for="pwd">Password</label>
                  <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
              </div>
          <div align="center">
            <button type="submit" class="btn btn-primary" style="width: 250px">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
          <div class="container" style="background-color:#f1f1f1" align="center">
            <span class="psw">Forgot <a href="lupapass.php">Password?</a></span>
          </div>
        </div>
      </div>
    </div>
  </form>

</body>
</html>