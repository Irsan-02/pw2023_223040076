<?php 
require('config/session.php');
require('config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title></title>
</head>
<body>
<header>
    <div class="container">
      <h1><a href="#">JAPANESE TRIP ADMIN</a></h1>    
      <ul>
          <li class="li-login" style="margin-top: 15px;"><a href="#" class="a-login" onclick="konfirmasiKeluar()">LOGOUT</a></li>
      </ul>
    </div>
  </header>
  <section class="admin">
    <div class="container">
      <h1>Selamat Datang <?php echo $_SESSION['nama_lengkap'] ?> </h1>
      <div class="tambah">
        <a href="config/tambah.php" style="font-size:15px;"><button><i class="fas fa-plus"></i>  Tambah</button></a>
      <form method="" action="get">
        <input type="search" class="form-control" placeholder="Cari Data..." name="keyword" id="keyword" autofocus autocomplete="off">
      </form>
      </div>
      <div id="search-table">
        <table border="1" cellspacing="0">
        	<thead>
          <tr class="isi-table">
            <th>No</th>
            <th style="width: 130px;">Nama Destinasi</th>
            <th style="width: 140px;">Ringkas Destinasi</th>
            <th style="width: 500px;">Detail Destinasi</th>
            <th>Gambar Destinasi</th>
            <th colspan="2" style="width:100px;">Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php 
             $no =1;
                    $data= mysqli_query($conn, "SELECT * FROM destinasi");
                    while ($hasil= mysqli_fetch_array($data)){
                      ?>
            <tr class="isi-table">
            	<td style="padding: 5px 20px"><p><?php echo $no++; ?></p></td>
            	<td><p><?php echo $hasil ['nama_destinasi']; ?></p></td>
              <td><p><?php echo $hasil ['ringkas_destinasi']; ?></p></td>
            	<td><textarea readonly><?php echo $hasil ['detail_destinasi']; ?></textarea></td>
              <td><img src="img/<?php echo $hasil ['gambar_destinasi']; ?>"> </td>
              <td><a href="config/edit.php?id=<?php echo $hasil ['id_destinasi']; ?>"><button style="background-color: orange; opacity: 0.9;"><i class="fas fa-pencil-alt"></i>  EDIT</button></a></td>
              <td><a href="config/hapus.php?id=<?php echo $hasil ['id_destinasi']; ?>" onclick="return confirm('Apa Anda Yakin Ingin Menghapus Data Ini?');"><button style="background-color: red; opacity: 0.9;"><i class="fas fa-trash"></i>  HAPUS</button></a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
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
    <script src="js/script.js"></script>
</body>
</html>