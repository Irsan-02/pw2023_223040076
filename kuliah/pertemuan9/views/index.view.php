<?php require('modul/header.php'); ?>
<?php require('modul/nav.php'); ?>

 <div class="container">
 	<h1>Halaman Home</h1>
 	<h3>Daftar Mahasiswa</h3>
 	<?php foreach ($students as $student) : ?>
 		<ul>
 			<li>Nama : <?= $student["nama"]; ?></li>
 			<li>Nama : <?= $student["npm"]; ?></li>
 			<li>Nama : <?= $student["email"]; ?></li>
 		</ul>
 	<?php endforeach ?>
 </div>
<?php require('modul/footer.php'); ?>