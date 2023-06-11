<?php 

require('config/koneksi.php');

if(isset($_POST['submit'])) {
  
  $nama_lengkap = $_POST['nama_lengkap'];
  $username     = $_POST['username'];
  $email        = $_POST['email'];
  $no_telp      = $_POST['no_telp'];
  $password     = $_POST['password'];

  $sql = "INSERT INTO login(nama_lengkap, username, email, no_telp, password, level) VALUE('{$nama_lengkap}', '{$username}', '{$email}', '{$no_telp}', '{$password}', 'user')";
  $query = mysqli_query($conn, $sql);

  echo "<script>alert('Register Berhasil!');</script>";
  echo "<meta http-equiv='refresh' content='0; url=form-login.php'>";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/style-login.css">
    <title>JAPANESE TRIP | Register</title>
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
        <form action="  " method="post">
        <div class="top">
            <span></span>
            <div class="login">Register</div>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Nama Lengkap" id="" name="nama_lengkap" autocomplete="off" required="" autofocus>
            <i class='bx bx-id-card'></i>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="Username" id="" name="username" autocomplete="off" required="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="email" class="input" placeholder="Email" id="" name="email" autocomplete="off" required="">
            <i class='bx bx-envelope'></i>
        </div>

        <div class="input-field">
            <input type="text" class="input" placeholder="No. Telpon" id="" name="no_telp" autocomplete="off" pattern="[0-9]*">
            <i class='bx bx-phone'></i>
        </div>

        <div class="input-field">
            <input type="password" class="input" placeholder="Password" id="" name="password" autocomplete="off" required="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" value="Submit" id="" name="submit" required="">
        </div>

        <div class="two-col">
            <div class="one">
               <label><a href="form-login.php">Kembali Ke Login</a></label>
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