<?php
require "functions.php";
if(isset($_POST["signUp"])){
    if(regist($_POST) > 0){
        echo "<script>alert('Berhasil Ditambahkan'); document.location.href = 'regist.php'</script>";
    } else{
        echo mysqli_error($conn_cs);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username" autofocus required>
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password" autofocus required>
            </li>
            <li>
                <label for="password2">Confirm Password : </label>
                <input type="password" name="password2" id="password2" autofocus required>
            </li>
            <li>
                <button type="submit" name="signUp" onclick="return confirm('Yakin?');">Sign Up</button>
            </li>
        </ul>
    </form>
</body>

</html>