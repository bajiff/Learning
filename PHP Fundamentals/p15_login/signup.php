<?php
require "functions.php";
if (isset($_POST["register"])) {
    if(regist($_POST) > 0 ){
        echo "<script>alert('User Berhasil Ditambahkan :D'); document.location.href = 'pendaftaran.php'; </script>";
    } else {
        echo mysqli_error($conn_cs);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <h1 class="textCenter">Sign Up</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <ul class="formUl">
            <li class="formLabel">
                <label for="username" class="formLabel">Username : </label>
                <input type="text" name="username" id="username" required autofocus autocomplete="on" placeholder="Meki Dinquino">
            </li>
            <li class="formLabel">
                <label for="password" class="formLabel">Password : </label>
                <input type="password" name="password" id="password" required placeholder="********">
            </li>
            <li class="formLabel">
                <label for="password2" class="formLabel">Repeat Password : </label>
                <input type="password" name="password2" id="password2" required placeholder="********">
            </li>
            <li class="formLabel">
                <button type="submit" name="register" onclick="return confirm('Yakin?');">Sign Up</button>
            </li>
        </ul>
    </form>
</body>
</html>