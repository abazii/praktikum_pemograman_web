<?php
    include "koneksi.php";
    $nama = $_POST ["nama"];
    $deskripsi = $_POST ["deskripsi"];

    $stmt = $conn -> prepare(
        "INSERT INTO categories (CategoryName,Description) VALUES (?, ?)"
    );

    $stmt -> bind_param("ss", $nama, $deskripsi);

    if($stmt->execute()){
        header ("Location: tampil.php");
    } else {
        echo "Gagal Menyimpan data: " . $conn->error;
    }
?>