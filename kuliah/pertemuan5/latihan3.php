<?php 
	$hewan = ['🦊', '🐺', '🐼', '🐱', '🐰'];
	$makanan = ['🍟', '🍿', '🍣', '🍦', '🍙'];
	$mahasiswa = ['Irsan', 'Surya', 'Excl', 'Alan', 'Arsyad'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 3</title>
</head>
<body>
	<h2>Daftar Mahasiswa</h2>
	<?php foreach ($mahasiswa as $i => $mhs) {?>
		<ul>
			<li>Nama Mahasiswa : <?= $mahasiswa[$i] ?></li>
			<li>Makanan Favorit : <?= $makanan[$i] ?></li>
			<li>Hewan Peliharaan : <?= $hewan[$i]?></li>
		</ul>
	<?php } ?>
</body>
</html>