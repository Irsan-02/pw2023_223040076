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
<header>
    <div class="container">
      <h1><a href="index.php">JAPANESE TRIP</a></h1>    
      <ul>
        <li><a href="user.php">HOME</a></li>
        <li><a href="user.php #about">ABOUT</a></li>
        <li><a href="user.php #service">SERVICE</a></li>
        <li><a href="user.php #gallery">GALLERY</a></li>
        <li><a href="destinasi.user.php">DESTINATION</a></li>
        <li class="li-login" style="margin-top: 15px;"><a href="profile.user.php" class="a-login">PROFILE</a></li>
      </ul>
    </div>
  </header>
     <?php 
        $data= mysqli_query($conn, "SELECT * FROM destinasi");
         while ($hasil= mysqli_fetch_array($data)){
      ?>
  <section class="des-sec" id="<?php echo $hasil ['nama_destinasi']; ?>">
    <div class="container">
    <h2><?php echo $hasil ['nama_destinasi']; ?></h2>
  	<img src="../img/<?php echo $hasil ['gambar_destinasi']; ?>">
    <p>
      <?php echo $hasil ['detail_destinasi']; ?>
    </p>
    </div>
  </section>
     <?php } ?>
</body>
</html>