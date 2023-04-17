<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <!-- action kosong artinya kita akan mengirimkan data ke halaman yang sama -->
    <!-- method kosong artinya kita akan mengirimkan data menggunakan metode GET -->
    <form action="latihan4.php" method="post">
        Masukan nama:
        <!-- nama disini sebagai key dan value dari key nama adalah apa yang kita inputkan -->
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>

