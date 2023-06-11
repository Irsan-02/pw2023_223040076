<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
<?php 
	$nilai = 10; 

	echo "Mulai <br>";
	while ($nilai > 0) {
	echo "Hello World $nilai <br>";
	
	$nilai --;
	}
	echo "Selesai";

	echo "<hr>";

	echo "Mulai <br>";
	for ($nilai=1; $nilai <= 10 ; $nilai++) { 
	echo "Hello World $nilai <br>";
	}
	echo "Selesai";
?>
</body>
</html>
