<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

//mengetahui 100 hari kedepan
// echo date("l", time()+60*60*24*100);

//mengetahui 100 hari kebelakang
// echo date("d M Y", time()-60*60*24*100);

//mktime
//membuat sendiri detik
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun
echo date("l", mktime(0,0,0,7,7,2002));

//strtotime
echo date("l", strtotime("7 jul 2002"));


// String
// strlen() //menghitung panjang string
// strcmp() //membandingkan 2 buah string
// explode() //memecah string menjadi array -> seperti nama file dan extensinya
// htmlspecialchars() //menjadikan string menjadi html 

// Utility
// var_dump() //menampilkan isi variabel, array, objek
// isset() //mengecek apakah sebuah variabel sudah dibuat atau belum
// empty() //mengecek apakah sebuah variabel kosong atau tidak
// die() //memberhentikan program
// sleep() //memberhentikan sementara

?>