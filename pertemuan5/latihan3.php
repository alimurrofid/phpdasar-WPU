<?php
$mahasiswa = [
    ["Rofid", "203040001", "Teknik Informatika", "rofid@gmail.com"],
    ["Doddy", "203040002", "Teknik Mesin", "doddy@gmail.com"],
    ["Erik", "203040003", "Teknik Industri", "erik@gmail.com"]
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
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>