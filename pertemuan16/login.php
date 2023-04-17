<?php 
require 'functions.php';
session_start();

//cek session kalo sudah login maka tidak bisa masuk ke halaman login dan diarahkan ke index.php
if (isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek username dan password
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

   
    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {

            // set session
            $_SESSION['login']=true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / password salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">login</button>
            </li>
        </ul>
    </form>
    
</body>
</html>