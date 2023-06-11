<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 2d</title>
	<style type="text/css">
		.td-1{
			height: 100px;
			width: 100px;
			background-color: #000;
		}
		.td-2{
			height: 100px;
			width: 100px;
			background-color: #fff;
		}
	</style>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<?php for ($line=1; $line <= 5 ; $line++) { 
			echo "<tr>";
			for ($kolom=1; $kolom <= 5 ; $kolom++) { 
				$box = $line + $kolom;
				if ($box%2 == 0) {
					echo "<td class='td-1'></td>";
				}else{
					echo "<td class='td-2'></td>";
				}
			}
			echo "</tr>";
		} 
		?>
	</table>
</body>
</html>