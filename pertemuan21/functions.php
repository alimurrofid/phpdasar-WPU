<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//fungsi untuk menampilkan data dari database
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk menambahkan data ke database
function tambah($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    //query insert data
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//fungsi untuk menghapus data dari database
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

//fungsi untuk mengubah data dari database
function ubah($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah user pilih gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


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

//fungsi untuk mencari data dari database
function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
                WHERE
                nrp LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);
}

//fungsi untuk upload gambar
function upload()
{

    //'gambar' di dapat dari name pada input type file di form tambah.php
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    //error = 4 artinya tidak ada gambar yang diupload
    if ($error === 3) {
        echo "
            <script>
                alert('pilih gambar terlebih dahulu!');
            </script>
        ";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    //explode adalah fungsi untuk memecah string menjadi array
    //delimiter bisa berupa karakter atau string
    //explode(delimiter, string) jika dalam suatu string terdapat sebuah karakter dari delimiter maka akan memecahnya menjadi array
    $ekstensiGambar = explode('.', $namaFile);
    //strtolower adalah fungsi untuk mengubah string menjadi huruf kecil
    //end adalah fungsi untuk mengambil elemen terakhir dari sebuah array
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
            <script>
                alert('yang anda upload bukan gambar!');
            </script>
        ";
        return false;
    }

    //cek jika ukurannya terlalu besar
    //1000000 = 1mb
    if ($ukuranFile > 1000000) {
        echo "
            <script>
                alert('ukuran gambar terlalu besar!');
            </script>
        ";
        return false;
    }

    //lolos pengecekan, gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}

//fungsi untuk registrasi
function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "
            <script>
                alert('username sudah terdaftar!');
            </script>
        ";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "
            <script>
                alert('konfirmasi password tidak sesuai!');
            </script>
        ";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    //menghasilkan nilai 1 jika berhasil dan -1 jika gagal
    return mysqli_affected_rows($conn);
}
