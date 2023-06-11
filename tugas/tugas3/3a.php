<?php 
$r = 10;
$phi = 3.14;

echo "<h4>Menghitung Luas Lingkaran</h4>";
function HitungLuasLingkaran($r, $phi)  {
    $LuasLingkaran = $phi * $r * $r;
    return $LuasLingkaran;
}

echo "Jari-jari = " . $r . " cm.<br>";
echo "Luas lingkaran = " . $luas = HitungLuasLingkaran($r, $phi) . " cm<sup>2</sup> <br> <hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function HitungKelilinglingkaran($phi, $r) {
    $KelilingLingkaran = $phi * $r * $r;
    return $KelilingLingkaran;
}

echo "Jari-jari = " . $r * 2 . " cm<br>";
echo "Keliling Lingkaran = " . $keliling = HitungKelilinglingkaran($phi, $r * 2) . " cm<sup>2</sup> <br> <hr>";

?>