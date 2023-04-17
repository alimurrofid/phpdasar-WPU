<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//fungsi untuk menampilkan data dari database
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk menambahkan data ke database
function tambah($data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi untuk menghapus data dari database
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

//fungsi untuk mengubah data dari database
function ubah($data){
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    //query insert data
    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
