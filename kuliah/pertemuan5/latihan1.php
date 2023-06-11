<?php 
	//array
$hari = array('Senin','Selasa','Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Irsan', 19, false];
$binatang = ['🦊', '🐺', '🐼', '🐱', '🐰'];

	// mencetak array
	// mencetak 1 elemen di dalam array menggunakan echo
echo $hari[2];
echo "<hr> <br>";

	// mencetak semua isi array
	// var_dump dan print_r
var_dump($hari);
echo "<br> <br>";
print_r($bulan);
echo "<br> <br>";
var_dump($myArray);
echo "<br> <br>";
print_r($binatang);
echo "<hr> <br>";

	// manipulasi array
	// menambahkan elemen menggunakan index
$hari[3] = 'Kamis';
print_r($hari);
echo "<br> <br>";
	// menambahkan elemen di akhir array menggunakan []
$hari[] = "Jum'at";
$hari[] = 'Sabtu';
print_r($hari);
echo "<hr> <br>";
 	// menambahkan elemen array di akhir array menggunakan array_push
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<br> <br>";
	// menambahlan elemen array menggunakan array_unshift
array_unshift($binatang, '🐹', '🐻');
print_r($binatang);
echo "<hr> <br>";

	// menghapus elemen di belakang array dengan array_pop
array_pop($hari);
print_r($hari);
echo "<hr> <br>";

	// menghapus elemen di depan array dengan array_shift
array_shift($bulan);
print_r($bulan);
?>