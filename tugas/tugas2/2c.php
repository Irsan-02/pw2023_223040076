<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 2c</title>
	<style type="text/css">
		td{
			width: 40px;
			height: 40px;
			background-color: #F16767;
			border: 1px solid black;
			text-align: center;
		}
	</style>
</head>
<body>
	<table cellpadding="10" cellspacing="0">
		<?php 
			$line = 1;
			for ($angka=10; $angka >= $line ; $angka--) { 
				echo "<tr>";
				for ($kolom=1; $kolom <= $angka ; $kolom++) { 
					echo "<td>$kolom</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>