<?php 
//pertemuan 2 - php dasar
//sintaks php

//standar output
//echo, print(digunakan untuk mencetak string)
//print_r(digunakan untuk mencetak array)
//var_dump(digunakan untuk mencetak isi variabel)

// echo "Rizky Fauzan";
// print "Rizky Fauzan";
// print_r("Rizky Fauzan");
// var_dump("Rizky Fauzan");

// echo "juma'at";

//penulisan sintaks php
//1. php di dalam html
//2. html di dalam php

//variabel dan tipe data
//variabel
//tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Rizky Fauzan";
// echo "Halo, nama saya $nama";
//dengan menggunakan tanda petik dua, maka variabel akan terbaca atau disebut dengan interpolasi

//operator
//aritmatika
//+ - * / %
// echo 1+1;

// $x = 10;
// $y = 20;
// echo $x + $y;

//penggabung string / concatenation / concat
// .
// $nama_depan = "Rizky";
// $nama_belakang = "Fauzan";
// echo $nama_depan . " " . $nama_belakang;

//assigment(operator penugasan)
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;

// $nama = "Rizky";
// $nama .= " ";
// $nama .= "Fauzan";
// echo $nama;

//perbandingan
//<, >, <=, >=, ==, !=
// var_dump(1 == "1");
//hasilnya true karena hanya membandingkan nilainya saja kalau ingin membandingkan tipe data juga maka gunakan ===

//identitas
//===, !==
// var_dump(1 === "1");

//logika
//&&, ||, !
$x = 30;
var_dump($x < 20 || $x % 2 == 0);
//hasilnya true karena salah satu dari dua kondisi tersebut bernilai true
var_dump($x < 10 && $x % 2 == 0);
//hasilnya false karena dengan menggunakan && maka kedua kondisi harus bernilai true

?>
<!DOCTYPE html>
<html>
<head>
    <title>Belajar PHP</title>
</head>
<body>
    <!-- 1. php di dalam html -->
    <h1>Halo, Selamat Datang <?php echo "Rizky Fauzan"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
    <!-- 2. html di dalam php -->
    <?php
    echo "<h1>Halo, Selamat Datang Rizky Fauzan</h1>";
    ?>
</body>
</html>
