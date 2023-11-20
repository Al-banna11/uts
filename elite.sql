-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 02:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elite`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `quantity`, `status`) VALUES
(189, 85, 1, 2, 'waiting'),
(190, 85, 2, 5, 'waiting'),
(191, 85, 2, 2, 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text,
  `price` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`product_id`, `product_name`, `image_url`, `description`, `price`, `class`) VALUES
(1, 'Rumah 3 kamar', 'Assets/paket1.png', 'Elite Estates, Menawarkan Hunian Mewah dengan Lokasi Strategis\r\n\r\nSelamat datang di Elite Estates, tempat di mana impian hunian mewah dan lokasi strategis bertemu. Kami dengan bangga mempersembahkan rumah berstandar tinggi yang dibangun dengan cermat, menyatukan keindahan desain dan kenyamanan modern. Dipercayakan kepada tenaga kerja kuli Jawa yang mahir, setiap rumah adalah perwujudan keahlian artisanal yang memukau.\r\n\r\nLokasi kami yang strategis menempatkan Elite Estates sebagai pilihan yang sangat menarik. Terletak hanya beberapa menit dari jalan tol utama, aksesibilitas ke pusat kota dan destinasi penting lainnya menjadi sangat mudah. Ini tidak hanya memberikan kemudahan berpergian, tetapi juga nilai investasi yang menjanjikan.\r\n\r\nTidak hanya itu, Elite Estates juga berkomitmen untuk memberikan pengalaman berbelanja dan hiburan terbaik dengan keberadaan mal-mal terkemuka di sekitarnya. Dengan mal-mal ternama yang dapat dijangkau hanya dalam beberapa langkah, Anda akan menemukan segala kebutuhan belanja, hiburan, dan gaya hidup yang dapat Anda nikmati dengan mudah.\r\n\r\nSetiap rumah di Elite Estates didesain dengan matang, menawarkan luas tanah yang mencakup taman-taman yang indah dan ruang terbuka yang luas. Setiap kamar mandi didesain untuk memberikan pengalaman pribadi yang mewah, sementara kamar tidur yang luas memberikan kenyamanan maksimal untuk keluarga Anda.\r\n\r\nSegera miliki hunian impian Anda di Elite Estates, di mana kualitas bertemu kenyamanan dan lokasi tak tertandingi. Hubungi kami sekarang untuk informasi lebih lanjut dan jadilah bagian dari komunitas istimewa kami. Elite Estates, di sini rumah Anda berada dalam genggaman kesempurnaan.', '200.00.000', 'Beli'),
(2, 'Rumah 3 Kamar', 'Assets/paket2.png', 'Elite Estates, Menawarkan Hunian Mewah dengan Lokasi Strategis\r\n\r\nSelamat datang di Elite Estates, tempat di mana impian hunian mewah dan lokasi strategis bertemu. Kami dengan bangga mempersembahkan rumah berstandar tinggi yang dibangun dengan cermat, menyatukan keindahan desain dan kenyamanan modern. Dipercayakan kepada tenaga kerja kuli Jawa yang mahir, setiap rumah adalah perwujudan keahlian artisanal yang memukau.\r\n\r\nLokasi kami yang strategis menempatkan Elite Estates sebagai pilihan yang sangat menarik. Terletak hanya beberapa menit dari jalan tol utama, aksesibilitas ke pusat kota dan destinasi penting lainnya menjadi sangat mudah. Ini tidak hanya memberikan kemudahan berpergian, tetapi juga nilai investasi yang menjanjikan.\r\n\r\nTidak hanya itu, Elite Estates juga berkomitmen untuk memberikan pengalaman berbelanja dan hiburan terbaik dengan keberadaan mal-mal terkemuka di sekitarnya. Dengan mal-mal ternama yang dapat dijangkau hanya dalam beberapa langkah, Anda akan menemukan segala kebutuhan belanja, hiburan, dan gaya hidup yang dapat Anda nikmati dengan mudah.\r\n\r\nSetiap rumah di Elite Estates didesain dengan matang, menawarkan luas tanah yang mencakup taman-taman yang indah dan ruang terbuka yang luas. Setiap kamar mandi didesain untuk memberikan pengalaman pribadi yang mewah, sementara kamar tidur yang luas memberikan kenyamanan maksimal untuk keluarga Anda.\r\n\r\nSegera miliki hunian impian Anda di Elite Estates, di mana kualitas bertemu kenyamanan dan lokasi tak tertandingi. Hubungi kami sekarang untuk informasi lebih lanjut dan jadilah bagian dari komunitas istimewa kami. Elite Estates, di sini rumah Anda berada dalam genggaman kesempurnaan.', '600.00.000', 'Beli'),
(3, 'Rumah 4 Kamar ', 'Assets/paket3.png', 'Elite Estates, Menawarkan Hunian Mewah dengan Lokasi Strategis\r\n\r\nSelamat datang di Elite Estates, tempat di mana impian hunian mewah dan lokasi strategis bertemu. Kami dengan bangga mempersembahkan rumah berstandar tinggi yang dibangun dengan cermat, menyatukan keindahan desain dan kenyamanan modern. Dipercayakan kepada tenaga kerja kuli Jawa yang mahir, setiap rumah adalah perwujudan keahlian artisanal yang memukau.\r\n\r\nLokasi kami yang strategis menempatkan Elite Estates sebagai pilihan yang sangat menarik. Terletak hanya beberapa menit dari jalan tol utama, aksesibilitas ke pusat kota dan destinasi penting lainnya menjadi sangat mudah. Ini tidak hanya memberikan kemudahan berpergian, tetapi juga nilai investasi yang menjanjikan.\r\n\r\nTidak hanya itu, Elite Estates juga berkomitmen untuk memberikan pengalaman berbelanja dan hiburan terbaik dengan keberadaan mal-mal terkemuka di sekitarnya. Dengan mal-mal ternama yang dapat dijangkau hanya dalam beberapa langkah, Anda akan menemukan segala kebutuhan belanja, hiburan, dan gaya hidup yang dapat Anda nikmati dengan mudah.\r\n\r\nSetiap rumah di Elite Estates didesain dengan matang, menawarkan luas tanah yang mencakup taman-taman yang indah dan ruang terbuka yang luas. Setiap kamar mandi didesain untuk memberikan pengalaman pribadi yang mewah, sementara kamar tidur yang luas memberikan kenyamanan maksimal untuk keluarga Anda.\r\n\r\nSegera miliki hunian impian Anda di Elite Estates, di mana kualitas bertemu kenyamanan dan lokasi tak tertandingi. Hubungi kami sekarang untuk informasi lebih lanjut dan jadilah bagian dari komunitas istimewa kami. Elite Estates, di sini rumah Anda berada dalam genggaman kesempurnaan.', '770.00.000', 'Beli');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int NOT NULL,
  `discount_code` varchar(50) NOT NULL,
  `discount_amount` int NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `discount_code`, `discount_amount`, `start_date`, `end_date`, `status`) VALUES
(3, '7u8i3', 3000, '2023-11-19', '2023-11-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(85, 'aa', 'kamiyakawaii4@gmail.com', '961b6dd3ede3cb8ecbaacbd68de040cd78eb2ed5889130cceb4c49268ea4d506', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_ibfk_1` (`user_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `cart_ibfk_2` (`product_id`) USING BTREE;

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `price` (`price`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `catalog` (`product_id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
