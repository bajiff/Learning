<?php 

require "functions.php";
if(isset($_POST["signIn"])){
    // Menamgkan username dan password dari POST nya
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check username yang ada di dalam db apakah sama dengan yang di inputkan
    $result = mysqli_query($conn_cs, "SELECT * FROM users WHERE username = '$username'");

    // * mysqli_num_rows() digunakan untuk menghitung username yang ada di db kalau ada outpunya 1 kalau tidak maka 0
    if(mysqli_num_rows($result) === 1) {
        // Check Passwordnya
        $row = mysqli_fetch_assoc($result);
        // Verifikasi apakah pw yang di input user itu sama dengan pw yang ada di dalam db 
        if( password_verify($password, $row["password"])) {
            echo "<script>alert('Berhasil Login'); document.location.href = 'index.php'</script>";
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
        <h1>Sign In</h1>
        <?php if(isset($error)) : ?>
            <h1 style="color: red; font-size: 50px; font-style: italic;">Yang bener inputnya!!!</h1>
            <?php endif; ?>
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="signIn">Sign In</button>
            </li>
        </ul>
    </form>
</body>

</html>