<?php 
require('../config/koneksi.php'); 
require('../config/session.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Japanese Trip | User</title>
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
        <li class="li-login" style="margin-top: 15px;"><a href="profile.user.php" class="a-login">PROFILE</a></li>
      </ul>
    </div>
  </header>

  <!-- Banner -->
  <section class="banner" id="index">
    <h2>WELCOME <?php echo $_SESSION['nama_lengkap'] ?></h2>
  </section>

  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <h3>ABOUT</h3>
      <p>Japanese Trip Merupakan Website yang Memberikan Layanan Liburan ke Jepang dan Memberikan Sebuah Informasi Seputar Beberapa Tempat-Tempat Wisata yang Populer di Setiap Kotanya. Kami Bisa Membantu Anda Untuk Berlibur di Jepang Dengan Biaya yang Terjangkau dan Pelayanan yang Memuaskan.
      </p>
    </div>
  </section>

  <!-- Service -->
  <section class="service" id="service">
    <div class="container">
      <h3>SERVICE</h3>
      <div class="box">
        <div class="col-4">
          <div class="icon"><i class="fas fa-hotel"></i></div>
          <h4>HOTEL</h4>
          <p>Menginap di Hotel yang Nyanman dan Berkelas</p>
        </div>
        <div class="col-4">
          <div class="icon"><i class="fas fa-bus"></i></div>
          <h4>TRANSPORTATION</h4>
          <p>Bebas Dari Biaya Transportasi Umum</p>
        </div>
        <div class="col-4">
          <div class="icon"><i class="fas fa-users"></i></div>
          <h4>TOUR GUIDE</h4>
          <p>Dipandu Oleh Pemandu yang Profesional</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  
  <section class="gallery" id="gallery">
    <div class="container">
      <h3>GALLERY</h3>
      <?php 
        $data= mysqli_query($conn, "SELECT * FROM destinasi");
         while ($hasil= mysqli_fetch_array($data)){
      ?>
      <div class="box">
        <div class="col-5">
          <h4><?php echo $hasil ['nama_destinasi']; ?></h4>
          <div class="gambar"><img src="../img/<?php echo $hasil ['gambar_destinasi']; ?>"></div>
          <p><?php echo $hasil ['ringkas_destinasi']; ?></p>
          <a href="destinasi.user.php #<?php echo $hasil ['nama_destinasi']; ?>">
          <div class="more">Selengkapnya</div></a>
        </div>
      <?php } ?>
      </div>
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
      document.location.href="config/logout.php";
      }else{
      }
      }
    </script>
</body>
</html>