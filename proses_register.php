<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

    if (mysqli_query($koneksi, $query)) {
        // Arahkan pengguna ke halaman login setelah registrasi berhasil
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>
