<?php

require('../config/session.php');
require('../config/koneksi.php');

$id = $_GET['id'];

try {
    $sql = "DELETE FROM destinasi WHERE id_destinasi = '{$id}';";
    $query = mysqli_query($conn, $sql);

    if($query) {
        echo "<script>alert('Data Gagal Dihapus!');</script>";
    } else {
        echo "<script>alert('Data berhasil Dihapus!');</script>";
    }
} catch (\Exception $th) {
    echo "<script>alert('ID Data tidak Ditemukan!');</script>";
}


header('Location: ../admin.php');