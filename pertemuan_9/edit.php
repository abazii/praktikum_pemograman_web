<?php
include "koneksi.php";

$id = $_GET["id"];
$stmt = $conn->prepare(
    "SELECT * FROM categories WHERE CategoryID = ?"
);

$stmt->bind_param("i", $id);
$stmt->execute();

$hasil = $stmt->get_result();
$data = $hasil->fetch_assoc();

$stmt->close();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Kategori</title>
</head>

<body>
    <h2>Edit Kategori</h2>
    <form action="update.php" method="pos t">
        <input type="hidden" name="id" value="<?php echo $data['CategoryID']; ?>">
        Nama Kategori :<br>
        <input type="text" name="nama" value="<?php echo
                                                $data['CategoryName']; ?>"><br><br>
        Deskripsi :<br>
        <textarea name="deskripsi"><?php echo
                                    $data['Description']; ?></textarea><br><br>
        <input type="submit" value="Perbarui">
    </form>
</body>

</html>