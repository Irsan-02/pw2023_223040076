<?php 
require('../config/koneksi.php');
$keyword = $_GET['keyword'];

?>

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
            $data= mysqli_query($conn, "SELECT * FROM destinasi WHERE nama_destinasi LIKE '%$keyword%'");

        
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

