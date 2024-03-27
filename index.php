<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') {
        echo "Username atau password salah!";
    }
    ?>
    <form action="cek_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit" name="submit">Login</button><br>
		<a href="register.php" class="tombol_login" role="button" aria-pressed="true">register</a>
    </form>
</body>
</html>
