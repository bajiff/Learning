<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Kontak Sederhana</title>
</head>
<body>

<h2>Form Kontak</h2>
<form action="" method="POST">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="message">Pesan:</label>
    <textarea id="message" name="message" required></textarea><br><br>

    <input type="submit" name="submit" value="Kirim">
</form>

<?php
// Cek apakah form sudah dikirim
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Tampilkan hasilnya
    echo "<h3>Hasil Input:</h3>";
    echo "<p><strong>Nama:</strong> $name</p>";
    echo "<p><strong>Pesan:</strong> $message</p>";
}
?>

</body>
</html>
