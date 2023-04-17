<?php
//variabel scope / lingkup variabel
// $x = 10;
// function tampilX() {
//     global $x;
//     echo $x;
// }
// tampilX();

//SUPERGLOBALS
//variabel global milik PHP
//merupakan Array Associative
//$_GET
//$_POST
//$_REQUEST
//$_SESSION
//$_COOKIE
//$_SERVER
//$_ENV
//$_FILES

//data yang dikirimkan melalui metode request GET akan di tangkap oleh variabel superglobal $_GET

//metode request GET adalah metode pengiriman data melalui URL dan data tersebut bisa diambil/ditangkap oleh variabel superglobal $_GET

//$_GET
$mahasiswa = [
    [
        "nama" => "Rofid",
        "nrp" => "203040001",
        "email" => "rofid@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "user1.png",
    ],
    [
        "nama" => "Doddy",
        "nrp" => "203040002",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "user2.png",
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?identity=<?= $mhs["nama"] ?>
                &&nim=<?= $mhs["nrp"] ?>
                &&email=<?= $mhs["email"] ?>
                &&jurusan=<?= $mhs["jurusan"] ?>
                &&image=<?= $mhs["gambar"] ?>
                "> <?= $mhs["nama"] ?> </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>