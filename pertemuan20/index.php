<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

//untuk menghubungkan ke file functions.php
require 'functions.php';

//query adalah sebuah function yang ada di file functions.php
$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari di klik
if (isset($_POST["cari"])) {
    //ketika tombol cari di klik maka isi $mahasiswa akan ditimpa dengan function cari
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 150px;
            position: absolute;
            top: 105px;
            left: 250px;
            z-index: -1;
            display: none;
        }

       </style>
</head>

<body>

    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    
    <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian..." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>
    <img src="img/loader.gif" class="loader">
    </form>
    <br><br>

    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('Yakin Menghapus Data?');">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"] ?>" width="50"></td>
            <td><?= $row["nrp"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
        </tr>
        <?php $i++; ?>
    <?php endforeach; ?>
</table>
    </div>

    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>