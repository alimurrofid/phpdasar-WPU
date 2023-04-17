<?php
// $mahasiswa = [
//     ["Rofid", "203040001", "Teknik Informatika", "rofid@gmail.com"],
//     ["Doddy", "203040002", "Teknik Mesin", "doddy@gmail.com"],
//     ["Erik", "203040003", "Teknik Industri", "erik@gmail.com"]
// ];

//Array Associative
//Definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
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
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>