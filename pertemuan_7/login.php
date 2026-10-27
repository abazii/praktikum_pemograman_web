<?php
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "farhan" && $password == "12345" ){
        session_regenerate_id(true);

        $_SESSION['username']= $username;

        header("Location:dashboard.php");
        exit;

    }else{
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

    <?php if (isset($error)){ ?>
        <p> <?=htmlspecialchars($error); ?></p>
    <?php } ?>

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