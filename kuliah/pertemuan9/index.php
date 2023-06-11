<?php 
require('functions.php');
	$title = 'Home';
	$students = [
	[
		"nama" => "Verres Kovalskia",
		"npm" => "223040076",
		"email" => "verres@gmail.com"
	],
	[
		"nama" => "Kafka Kanaeru",
		"npm" => "223040077",
		"email" => "kafka@gmail.com"
	],
];

// dd($_SERVER["REQUEST_URI"]);
// "/pw2023_223040076/kuliah/pertemuan9/index.php"

require('views/index.view.php');

?>
