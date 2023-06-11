<?php 
define('BASE_URL','/pw2023_223040076/kuliah/pertemuan9/');

function dd($value)
{
 echo "<prev>";
 var_dump($value);
 echo "</prev>";
 die();
}

function uriIs($uri)
{
    return ($_SERVER['REQUEST_URI'] === BASE_URL . $uri) ? 'active' : '';
}

?>