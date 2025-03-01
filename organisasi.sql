-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2025 at 03:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organisasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cahaya_surga`
--

CREATE TABLE `cahaya_surga` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `divisi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cahaya_surga`
--

INSERT INTO `cahaya_surga` (`id`, `nama`, `kelas`, `divisi`, `gambar`) VALUES
(1, 'Habib', '7D', 'Keprak', 'habib.png'),
(2, 'Taufan Aji Prakoso', '9F', 'Vokal', 'taufan.png'),
(3, 'Roy A Nando', '7I', 'Hadroh', 'nando.png'),
(4, 'Muhammad Rofiqul A', '7E', 'Hadroh', 'rofiq.png'),
(6, 'Khaerul Evah', '9A', 'Hadroh', 'evah.png'),
(7, 'Raka Ana Rizqi', '9A', 'Hadroh', 'raka.png'),
(8, 'Muhamad Dimas', '9C', 'Hadroh', 'dimas.png'),
(9, 'Ramdan', '7D', 'Keprak', 'ramdan.png'),
(10, 'Dzaki Muhammad Rizqullah', '9D', 'Keprak', 'dzaki.png'),
(11, 'Andika Aldi Yanto', '7A', 'Darbuka', 'aldi.png'),
(12, 'Marwan Mussyaffa', '7F', 'Bass', 'marwan.png'),
(13, 'Lazuardy Mulya Imani', '7F', 'Hadroh', 'ardy.png'),
(14, 'Rezky', '7D', 'Keprak', 'rezky.png'),
(17, 'Restu Cahyono', '7A', 'Hadroh', 'restu.png'),
(42, 'Andika', '7G', 'Keprak', 'andika.png'),
(47, 'Itut', '7A', 'Hadroh', '67aedf8b080b3.jpg'),
(50, '321', '7E', 'Vokal', '67b40d5583c9c.jpg'),
(51, '223211', '8B', 'Keprak', '67b40dd7ce05e.png'),
(52, '1234123', '7A', 'Hadroh', '67b4102062411.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ilham', '$2y$10$95hKASmpDXG7o0rjPkRHYOXll71IP3asQaCtcAY8GvcludnyTFnE.'),
(2, 'test', '$2y$10$Lf7Wp3n9YqlSNsZk6ZnpuO/9iblPfHuCyfCDN41is36SQhurIhV7u'),
(3, 'alhim', '$2y$10$MUV8w/DP/FzizwFevicsre/JasK3SorQFHwN6OJ4dJMtmdoDZuIeG'),
(4, 'isun', '$2y$10$FPUh8/UanACPdh/vJYOTJe78wwPfsGtELl9VNMYu8XPCfpD1Y.RLi'),
(5, '112233', '$2y$10$WmashaaatrmEEiH7CJZeietd0nkqfVbrrMYwJ/FvL6VY5C.CMFTS2'),
(6, '&lt;marquee&gt;ilham&lt;/marquee&gt;', '$2y$10$SGIQT2UpxSoWRafwxXO3Oud2bW8SvZ7lzOZt4C5NfN2xG24LzKBU2'),
(7, 'info', '$2y$10$uv15/CMwmU5XI/bnMAkJuOW0fAl3mq7pzbewrYdlHpVXSPI0aonhm'),
(8, '123', '$2y$10$cfFqK3MGybl42KhYwp2ywO5FMcK1Co79Qln4CqDeoAd4SVODO473W'),
(9, '321', '$2y$10$WmnrPMkFaARa6kTcbUDCg.mk6vKXnTCX/7hJN1NNJgTNCqGxQ0qZK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cahaya_surga`
--
ALTER TABLE `cahaya_surga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cahaya_surga`
--
ALTER TABLE `cahaya_surga`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
