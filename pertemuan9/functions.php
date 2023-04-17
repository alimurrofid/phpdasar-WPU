<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//parameter $query menangkap query yang dikirimkan dari file index.php yaitu "SELECT * FROM mahasiswa" 
function query($query) {
    //untuk mengambil variabel $conn yang ada di luar function
    global $conn;
    //mysqli_query adalah function yang digunakan untuk menjalankan query
    //mysqli_query membutuhkan 2 parameter yaitu koneksi ke database dan query yang akan dijalankan
    //mysqli_query($conn, $query) adalah parameter yang dikirimkan ke function query
    //$result di analogikan seperti lemari yang menampung baju didalam kamar
    $result = mysqli_query($conn, $query);
    //$rows = []; adalah wadah kosong yang akan menampung isi dari baju/$row
    //$row adalah baju yang di ambil disetiap looping
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    //dikembalikan kotak yang sudah berisi baju yang sudah rapi
    return $rows;
}
?>