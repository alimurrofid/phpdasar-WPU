<?php 
// cek apakah tidak ada data di $_GET
//isset() adalah fungsi untuk mengecek apakah sebuah variabel sudah dibuat atau belum
//jika tidak ada data di $_GET maka akan di redirect ke halaman latihan1.php

if( !isset($_GET["identity"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["image"]) ) {
    // redirect
    header("Location: latihan1.php");
    // exit digunakan agar script di bawahnya tidak dijalankan
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail mahasiswa</title>
</head>
<body>
    <h1>Detail mahasiswa</h1>
    <ul>
    
        <li><img src="img/<?= $_GET["image"]?>"></li>
        <li>Nama :<?= $_GET["identity"]?></li>
        <li>NRP : <?= $_GET["nim"] ?></li>
        <li>Email : <?= $_GET["email"]?></li>
        <li>Jurusan : <?= $_GET["jurusan"]?></li>
    </ul>
<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
</body>
</html>