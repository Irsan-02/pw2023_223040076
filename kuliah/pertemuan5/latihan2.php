<?php 
	$hewan = ['🦊', '🐺', '🐼', '🐱', '🐰'];
	$makanan = ['🍟', '🍿', '🍣', '🍦', '🍙'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Latihan 2</title>

</head>
<body>
	<h2>Daftar Binatang</h2>
	<ul>
		<?php for($i = 0; $i < count($hewan); $i++){ ?>
			<li><?= $hewan[$i]; ?></li> <!-- artinya tag php (<? ?>) dan echo (=)-->
		<?php } ?>
	</ul>
<hr>
	<h2>Daftar Makanan</h2>
	<ul>
		<?php for($i = 0; $i < count($makanan); $i++){ ?>
			<li><?= $makanan[$i]; ?></li>
		<?php } ?>
	</ul>
<hr>
	<h2>Daftar Binatang</h2>
	<ol>
		<?php foreach ($hewan as $i => $hwn) { ?>
			<li><?php echo $hwn; ?></li>
		<?php } ?>
	</ol>
</body>
</html>