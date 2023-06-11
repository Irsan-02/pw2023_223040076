<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	$bener = 10;
	$nilai = 1;
	$rusak = 4;

	while ($nilai <= $bener - $rusak) {
	echo "angkot no $nilai beroperasi dengan baik <br>";
	
	$nilai++;
	}

	for ($nilai; $nilai <= $bener ; $nilai++) { 
	echo "angkot no $nilai sedang rusak <br>";
	}
	
?>
</body>
</html>
