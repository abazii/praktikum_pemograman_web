<?php
$conn = mysqli_connect("localhost", "root", "", "nwind");
if ($conn->connect_error) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>