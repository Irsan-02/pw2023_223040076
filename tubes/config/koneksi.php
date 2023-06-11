<?php 
 $DATABASE_HOST = 'localhost';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = '';
 $DATABASE_NAME = 'tubes_pw23'; 

 $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 if (!$conn) {
 	 die("Gagal terhubung database;" . mysqli_connect_error());
 }
?>