<?php
include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$deskripsi = $_POST["deskripsi"];

$stmt = $conn->prepare("UPDATE categories SET CategoryName = ?, Description = ? WHERE CategoryID = ?");
// "ssi" berarti String, String, Integer
$stmt->bind_param("ssi", $nama, $deskripsi, $id);

if ($stmt->execute()) {
    header("Location: tampil.php");
} else {
    echo "Gagal memperbarui data: " . $conn->error;
}

$stmt->close();

?>