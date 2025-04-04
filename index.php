<?php
session_start();

// Proses login (misalnya, verifikasi username dan password)
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ... (Verifikasi username dan password dari database atau sumber lain) ...

    if ($username == "user" && $password == "pass") { // Contoh sederhana
        $_SESSION['loggedin'] = true;
        header("https://azizstorehost.vercel.app/"); // Ganti dengan URL halaman utama Anda
        exit;
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
