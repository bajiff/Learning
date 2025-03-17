<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <h1>Tolong Buat Aplikasi Portfolio Sederhana</h1>
    <nav>
        <ul>
            <li><a href="#about">Tentu</a></li>
            <li><a href="#work">Berbagai Projek</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>
</header>

<main class="landing-page">
    <section id="about">
        <h2>About Me</h2>
        <p>Saya adalah seorang web designer yang memiliki kemampuan untuk membuat aplikasi berbasis HTML dan CSS. Berikut adalah beberapa contoh contoh project yang saya buat:</p>
        <ul>
            <li><a href="#project1">Project 1: Web Sederhana dengan Animasi</a></li>
            <li><a href="#project2">Project 2: Sistem Karyawan dengan Animasi</a></li>
            <li><a href="#project3">Project 3: Website Template dengan Animasi</a></li>
        </ul>
    </section>

    <section id="work">
        <h2>Projects</h2>
        <div class="portfolio-item" style="background-color: #f0f0f0; padding: 15px;">
            <img src="image1.jpg" alt="Image 1" style="width: 100%;">
            <h3>Project 1</h3>
            <p>This is the first project I built using HTML and CSS.</p>
        </div>

        <div class="portfolio-item" style="background-color: #fff0f0; padding: 15px;">
            <img src="image2.jpg" alt="Image 2" style="width: 100%;">
            <h3>Project 2</h3>
            <p>This is the second project I built using HTML and CSS.</p>
        </div>

        <div class="portfolio-item" style="background-color: #fff0f0; padding: 15px;">
            <img src="image3.jpg" alt="Image 3" style="width: 100%;">
            <h3>Project 3</h3>
            <p>This is the third project I built using HTML and CSS.</p>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label>
            <textarea id="message" name="message"></textarea><br><br>

            <button type="submit">Submit</button>
        </form>
    </section>

    <!-- Responsive design -->
    <div class="mobile-menu">
        <a href="#about">Tentu</a>
        <a href="#work">Berbagai Projek</a>
        <a href="#contact">Kontak</a>
    </div>

    <script src="script.js"></script>
</body>
</html>