<?php
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin") {
        setcookie("username", "admin", time() + 5, "/");
        session_regenerate_id(true);

        $_SESSION['login'] = true;

        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
        //header("Location:dashboard.php");
        //exit;

    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>login</h2>

    <?php if (isset($_COOKIE["username"])) {
        echo "Selamat Datang, " . htmlspecialchars($_COOKIE["username"]);
    } else {
        echo "Cookie belum tersedia";
    } ?>
    <br><br>
    <?php

    if (isset($_SESSION["login"])) {
        echo "Selamat Datang,  session " . htmlspecialchars($_SESSION["username"]);
    } else {
        echo "Cookie belum tersedia";
    } ?>

    <form action="" method="POST">
        <label for="">username</label>
        <input type="text" name="username" required>
        <br><br>

        <label for="">Password</label>
        <input type="text" name="password" required>
        <br><br>

        <button type="submit" name="login">login</button>
    </form>
</body>

</html>