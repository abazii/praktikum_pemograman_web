<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>

<body>
    <h2>Input Data Mahasiswa</h2>

    <form action="simpan.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" required>
        <br><br>
        <label for="">Jurusan</label>
        <input type="text" name="jurusan" required>
        <button type="submit">kirim</button>

    </form>
</body>

</html>