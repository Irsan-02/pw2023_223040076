<?php 
require('../config/koneksi.php'); 
require('../config/session.php');
$sql ="SELECT login.id_user, login.nama_lengkap, login.username, login.email, login.no_telp FROM login WHERE login.id_user = {$_SESSION['id_user']}";
  
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Japanese Trip</title>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="container">
      <h1><a href="user.php">JAPANESE TRIP</a></h1>    
      <ul>
        <li><a href="user.php">HOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#service">SERVICE</a></li>
        <li><a href="#gallery">GALLERY</a></li>
        <li><a href="destinasi.user.php">DESTINATION</a></li>
        <li class="li-login" style="margin-top: 15px;"><a href="#" class="a-login" onclick="konfirmasiKeluar()">LOGOUT</a></li>
      </ul>
    </div>
  </header>
  
  <section style="height: 400px;">
    <div class="container">
     <center>
      <table class="isi-table" style="margin:10% 0;">
        <tr>
          <th style="width: 140px; text-align: left;">Nama Lengkap</th>
          <td>:</td>
          <td> <?php echo $user ['nama_lengkap']; ?> </td>
        </tr>
        <tr>
          <th style="width: 140px; text-align: left;">Username</th>
          <td>:</td>
          <td> <?php echo $user ['username']; ?></td>
        </tr>
        <tr >
          <th style="width: 140px; text-align: left;">Email</th>
          <td>:</td>
          <td> <?php echo $user ['email']; ?></td>
        </tr>
        <tr>
          <th style="width: 140px; text-align: left;">No. Telp</th>
          <td>:</td>
          <td> <?php echo $user ['no_telp']; ?></td>
        </tr>
      </table>
      </center> 
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <small>Copyright &copy; 2023 - Japanese Trip. All Rights Reserved.</small>
    </div>
  </footer>
  <script>
      function konfirmasiKeluar(){
      var tanya = confirm("Apakah Anda Ingin Keluar ?");
      
      if(tanya === true){
      document.location.href="../config/logout.php";
      }else{
      }
      }
    </script>
</body>
</html>