<?php
require('config/koneksi.php');

session_start();

if(isset($_POST['submit'])) {
  $user = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `login` WHERE `username` = '{$user}' AND `password` = '{$password}'";
  $query = mysqli_query($conn, $sql);

  if($query->num_rows > 0) {
      $user = mysqli_fetch_array($query);
      $_SESSION['id_user']  = $user['id_user'];
      $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
      $_SESSION['username']    = $user['username'];
      $_SESSION['level']      = $user['level'];
      echo "<script>alert('Login Berhasil!');</script>";

      if($user['level'] == 'admin'){
          echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
      } else {
          echo "<meta http-equiv='refresh' content='0; url=user/user.php'>";
      }
  } else {
      echo "<script type='text/javascript'>alert('username dan password salah!');</script>";
      echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
  }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="./css/style-login.css">
    <title>JAPANESE TRIP | Login</title>
</head>
<body>
    <header>
    <div class="container-nav">
      <h1><a href="index.php">JAPANESE TRIP</a></h1>    
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="index.php #about">ABOUT</a></li>
        <li><a href="index.php #service">SERVICE</a></li>
        <li><a href="index.php #gallery">GALLERY</a></li>
        <li><a href="destinasi.php">DESTINATION</a></li>
        <li class="li-login"><a href="form-login.php" class="a-login">LOGIN</a></li>
      </ul>
    </div>
  </header>
   <div class="box">
    <div class="container">
        <form action="" method="post">
        <div class="top">
            <span></span>
            <div class="login">Login</div>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" name="username" autocomplete="off" required="" autofocus>
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" placeholder="Password" name="password" autocomplete="off" required="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Login" name="submit">
        </div>

        <div class="two-col">
            <div class="one">
               <label>Belum Punya Akun ? <a href="form-register.php">Registras  Terlebih Dahulu</a></label>
            </div>
        </div>
        </form>
    </div>
</div>

<footer>
    <div class="container-nav">
      <small>Copyright &copy; 2023 - Japanese Trip. All Rights Reserved.</small>
    </div>
  </footer>
</body>
</html>