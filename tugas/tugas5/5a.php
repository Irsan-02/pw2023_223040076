<?php
$mahasiswa = [
  [
    "nrp" => "223040076",
    "nama" => "Irsan Moch. Taufik Febrian",
    "email" => "irsan@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/irsan.png"
  ],
  [
    "nrp" => "223040077",
    "nama" => "Eula Lawrence",
    "email" => "eula@gmain.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/eula.png"
  ],
  [
    "nrp" => "223040078",
    "nama" => "Sangonomiya Kokomi",
    "email" => "kokomi@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/kokomi.jpg"
  ],
  [
    "nrp" => "223040079",
    "nama" => "Shikanoin Heizou",
    "email" => "heizou@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/heizou.jpg"
  ],
  [
    "nrp" => "223040080",
    "nama" => "Hu Tao",
    "email" => "hutao@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/hutao.jpg"
  ],
  [
    "nrp" => "223040081",
    "nama" => "Xiao",
    "email" => "xiao@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/xiao.jpg"
  ],
  [
    "nrp" => "223040082",
    "nama" => "Diluc Ragnvindr",
    "email" => "diluc@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/diluc.jpg"
  ],
  [
    "nrp" => "223040083",
    "nama" => "Tartaglia Childe",
    "email" => "childe@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/childe.jpg"
  ],
  [
    "nrp" => "223040084",
    "nama" => "Noelle",
    "email" => "noelle@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/noelle.jpg"
  ],
  [
    "nrp" => "223040085",
    "nama" => "Layla",
    "email" => "layla@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "img/layla.png"
  ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta nama="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 5a</title>
  <style>
    img {
      aspect-ratio: 1;
      width: 256px;
      object-fit: cover;
    }
  </style>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li><img src=" <?= $mhs["gambar"] ?>" alt="profile pic"></li>
      <li>NRP: <?= $mhs["nrp"] ?></li>
      <li>Nama: <?= $mhs["nama"] ?></li>
      <li>Email: <?= $mhs["email"] ?></li>
      <li>Jurusan: <?= $mhs["jurusan"] ?></li>
    </ul>
  <?php endforeach ?>
</body>

</html>