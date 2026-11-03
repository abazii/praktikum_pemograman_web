<?php
include"koneksi.php";
session_start();

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    //mengecek email apakah sudah digunakan atau belum
    $query = mysqli_prepare(
        $conn,
        "SELECT * FROM USERS WHERE email = ?"
    );

    mysqli_stmt_bind_param($query, "s", $email);
    mysqli_stmt_execute($query);

    $result = mysqli_stmt_get_result($query);

    if(mysqli_num_rows($result) == 1){
        $user = mysqli_fetch_assoc($result);

        //memeriksa password
        if(password_verify($password, $user['password'])){
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            header("Location: dashboard.php");
            exit;
        } else {
            echo "password salah!";
        }
    } else {
        echo "email tidak ditemukan";
    }
}

?>

<h2>login</h2>

<form action="" method="POST">
    
    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="password" name="password" placeholder="Password" required>
    <br><br>

    <button type="submit" name="login">login</button>
</form>

<p>Belum punya akun? <a href="register.php">register disini</a></p>