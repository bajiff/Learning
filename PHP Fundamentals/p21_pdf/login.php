<?php
require "functions.php";
session_start();
if(isset($_COOKIE["id"]) && isset($_COOKIE["key"])){
    $id = $_COOKIE["id"];
    $key = $_COOKIE["key"];

    $result = mysqli_query($conn_cs, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // Check apakah cookie sama dengan username?
    if($key === hash("sha256", $row["username"])) {
        $_SESSION["login"] = true;
    }
}
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
if (isset($_POST["signIn"])) {
    // Menamgkan username dan password dari POST nya
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check username yang ada di dalam db apakah sama dengan yang di inputkan
    $result = mysqli_query($conn_cs, "SELECT * FROM users WHERE username = '$username'");

    // * mysqli_num_rows() digunakan untuk menghitung username yang ada di db kalau ada outpunya 1 kalau tidak maka 0
    if (mysqli_num_rows($result) === 1) {
        // Check Passwordnya
        $row = mysqli_fetch_assoc($result);
        // Verifikasi apakah pw yang di input user itu sama dengan pw yang ada di dalam db 
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            // Check Remember Me
            if (isset($_POST["remember"])) {
                setcookie("id", $row["id"], time() + 60);
                setcookie("key", hash("sha256", $row["username"]), time() + 60);
            }
            header("Location: index.php");
            exit;
        }
    }
    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Login</h1>
        <?php if (isset($error)) : ?>
            <h1 style="color: red; font-size: 50px; font-style: italic;">Yang bener inputnya!!!</h1>
        <?php endif; ?>
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username" autofocus>
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </li>
            <li>
                <button type="submit" name="signIn">Sign In</button>
            </li>
        </ul>
    </form>
</body>

</html>