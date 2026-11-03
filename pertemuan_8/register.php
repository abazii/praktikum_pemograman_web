<?php
include"koneksi.php";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //mengubah password menjadi hash
    $hasedPassword = password_hash($password, PASSWORD_DEFAULT);

    //mengecek email apakah sudah digunakan atau belum
    $check = mysqli_prepare(
        $conn,
        "SELECT id FROM USERS WHERE email = ?"
    );

    mysqli_stmt_bind_param($check, "s", $email);
    mysqli_stmt_execute($check);

    $result = mysqli_stmt_get_result($check);

    if (mysqli_num_rows($result) > 0) {
        echo "Email Sudah Terdaftar!";
    } else {
        $query = mysqli_prepare(
            $conn,
            "INSERT INTO USERS (name,email,password) VALUES (?,?,?)"
        );

        mysqli_stmt_bind_param($query, "sss", $name, $email, $hasedPassword);

        if (mysqli_stmt_execute($query)) {
            echo "register berhasil silahkan login";
        } else {
            echo "register gagal!";
        }
    }
}

?>

<h2>register</h2>

<form action="" method="POST">
    <input type="text" name="name" placeholder="Nama Lengkap" required>
    <br><br>

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Password" required>
    <br><br>

    <button type="submit" name="register">Registrasi</button>

    <p>sudah punya akun? <a href="login.php">login disini</a></p>
</form>
