<?php
include"koneksi.php";
session_start();

//cek apakah sudah login
if(!isset ($_SESSION['login']) || ($_SESSION['login']!= true)){
    header("Location: login.php");
    exit();
}

?>

<h1>selamat datang <?= htmlspecialchars($_SESSION['name']) ?></h1>


<a href="logout.php">log out</a>