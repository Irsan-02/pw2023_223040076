<?php 
require ("koneksi.php");
function gambar(){
    $filename = $_FILES['gambar_destinasi']['name'];
    $size     = $_FILES['gambar_destinasi']['size'];
    $error    = $_FILES['gambar_destinasi']['error'];
    $tmpname  = $_FILES['gambar_destinasi']['tmp_name'];


    $EkstensionValidImage = ['jpg', 'jpeg', 'png'];
    $EkstensionImage = explode('.', $filename);
    $EkstensionImage = strtolower(end($EkstensionImage));

    if (!in_array($EkstensionImage, $EkstensionValidImage)) {
        echo "<script>
                alert('Gambar yang anda upload tidak valid!');        
            </script>";
        return false;
    }

    if( $size > 3000000) {
        echo "<script>
                alert('Ukuran gambar tidak bisa diatas 3MB!');        
            </script>";
        return false;
    }

    $newfilename = uniqid();
    $newfilename .= '.';
    $newfilename .= $EkstensionImage; 

    move_uploaded_file($tmpname, '../img/' . $newfilename);

    return $newfilename;

}
if(isset($_POST['submit'])){

// $nama_destinasi itu buat pemanggilan baru dari $_POST['nama_destinasi -> dari name dalam input'];
$nama_destinasi = $_POST['nama_destinasi'];
$ringkas_destinasi = $_POST['ringkas_destinasi'];
$detail_destinasi = $_POST['detail_destinasi'];
$gambar_destinasi = gambar();

//$simpan disini untuk menghubungkan database dengan pemanggilan yang baru di buat di atas
$simpan = "INSERT INTO destinasi (nama_destinasi, ringkas_destinasi, detail_destinasi, gambar_destinasi)VALUES('$nama_destinasi','$ringkas_destinasi','$detail_destinasi','$gambar_destinasi')";

// $result menghubungkan koneksi dengan simpan yang dibuat
$result = mysqli_query($conn,$simpan);

// notif kalau berhasil input
if($result){
  echo "<script>alert('Data Berhasil Ditambahkan');window.location='../admin.php'</script>";
}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
  <section>
    <div class="container">
	<form action="" method="post" enctype="multipart/form-data">
      <h2><center> FORM TAMBAH</center></h2>
        <label><strong>Nama Destinasi</strong></label>
        <input type="text" class="txt" name="nama_destinasi" autocomplete="off">

        <label><strong>Ringkasan</strong></label>
        <input type="text" class="txt" name="ringkas_destinasi" autocomplete="off">

        <label><strong>Deskripsi</strong></label>
        <textarea class="txt-area" name="detail_destinasi" autocomplete="off"></textarea>

        <label><strong>Gambar</strong></label>
        <input type="file" class="txt" name="gambar_destinasi" style="font-size: 20px;" onautocomplete="off">

        <button style="margin-top: 10px; background: #11101D; color:#fff; height: 40px; width:25%;"><a href="#" style="font-size: 20px;" onclick="konfirmasiKembali()"> Back</a></button>
        <input type="submit" name="submit" value="Simpan"style="margin-top: 10px; background: #11101D; color: #fff; height: 40px; width: 25%; font-size: 20px;">
  </form>
  </div>
  </section>
  <script>
      function konfirmasiKembali(){
      var tanya = confirm("Apakah Anda Ingin Kembali ?");
      
      if(tanya === true){
      document.location.href="../admin.php";
      }else{
      }
      }
    </script>
    <script src="js/script.js"></script>
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