<?php
// ngecek apakah tombol sudah ditekan atau belum ditekan
if (isset($_POST["login"])) {

    // ngecek username dan password
    if ($_POST["text"] == "kirik" && $_POST["password"] == "kopok") {

        // jika benar akan di redirect(alihakn) ke page selanjutnya
        header("Location: admin.php");
        exit;
    } else {
        //jika salah, maka akan memunculkan pesan kesalahan
        $error = true;
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <style>
        * {
            text-decoration: none;
            font-family: sans-serif;
            list-style-type: none;
        }
    </style>

    <?php if (isset($error)) : ?>
        <p style="color:red; font-style:italic;">Error boy, inputkan usename dan password yang bener</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">

            <li>
                <label for="text">Email</label>
                <input type="text" name="text" id="text">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>

        </form>
    </ul>
</body>

</html>