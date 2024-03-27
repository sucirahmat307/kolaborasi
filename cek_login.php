<?php
session_start();
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $_SESSION['username'] = $username;
        // Arahkan pengguna ke halaman dashboard setelah login berhasil
        header("Location: halaman_admin.php");
        exit();
    } else {
        header("Location: index.php?pesan=gagal");
        exit();
    }
}
?>
