<?php
include "koneksi.php";
$username = $_POST['username'];
$jurusan = $_POST['jurusan'];

$query = mysqli_prepare(
    $conn,
    "INSERT INTO mahasiswa (username, jurusan)
     VALUES (?, ?)"
);

mysqli_stmt_bind_param(
    $query,
    "ss",
    $username,
    $jurusan
);

if (mysqli_stmt_execute($query)) {
    echo "Data Berhasil disimpan!";
    echo "<br>selamat datang, ";
    echo htmlspecialchars($username);
    echo "<br>Jurusan :";
    echo htmlspecialchars($jurusan);
    echo "<br> <a href='index.php'>lihat data</a>";
} else echo "Gagal Menyimpan data";
