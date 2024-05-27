-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2024 at 06:21 PM
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
-- Database: `pw2024_tubes_233040080`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `gambar`, `deskripsi`) VALUES
(1, 'Vivobook S', 'Vivobook S14 Flip.jpg', 'Lakukan pekerjaan kamu bersama laptop ASUS Vivobook S superslim. Hadir dengan desain warna menarik, material yang solid, dan kinerja terbaik.'),
(2, 'Vivobook Pro', 'vivobook pro 16x.jpg', 'Laptop ASUS Vivobook Pro adalah laptop terbaik untuk tugas dengan grafis berat. Mengemas kinerja terbaik di kelasnya, visual yang akurat dan jelas, serta desain kipas ganda yang cerdas.'),
(3, 'ExpertBook Essential', 'expertbook b1.jpg', 'ASUS ExpertBook Essenteial adalah laptop terbaik untuk anggaran Anda. Dengan fleksibilitas tinggi dan dan siap dipakai untuk berbagai skala bisnis. '),
(4, 'ExpertBook Premium', 'experbook premium.jpg', 'Seri ASUS ExpertBook Premium menawarkan laptop terbaik untuk membantu mengendalikan bisnis Anda. Desain ramping dan ringan, dengan masa pakai baterai sepanjang hari serta ketangguhan kelas militer.'),
(5, 'ROG Zephyrus', 'ROG Zephyrus.jpg', 'Laptop gaming terbaik untuk mereka yang ingin menang di semua arena. Dengan inovasi layar, pendingin, dan komponen terbaik, ROG Zephyrus siap menemanimu apapun gamenya.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int NOT NULL,
  `id_kategori` int NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `ukuran` char(8) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `deskripsi` text NOT NULL,
  `deskripsi_2` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_kategori`, `nama_produk`, `ukuran`, `harga`, `deskripsi`, `deskripsi_2`, `image`) VALUES
(22, 1, 'Vivobook S 14 OLED (K3402,12th Gen Intel)', '14\"', 9000000, 'Windows 11 Home - ASUS recommends \r\nWindows 11 Pro for business', 'Up to 12th Intel® Core™ i7 processor,\r\nUp to 16 GB memory,\r\nUp to 1 TB SSD storage,\r\nUp to 14\'\' 2.8K OLED NanoEdge display,\r\nPantone validated', 'vivobook s14 oled.jpg'),
(23, 1, 'Vivobook S 14 Flip (TN3402)', '14\"', 10000000, 'Windows 11 Home - ASUS recommends Windows 11 Pro for business', 'Up to AMD Ryzen™ 7 5800H Mobile Processor,\r\nUp to 16 GB memory,\r\nUp to 1 TB SSD storage,\r\nUp to 14\'\' 3-sided NanoEdge display,\r\n360° hinge convertible laptop', 'Vivobook S14 Flip.jpg'),
(24, 1, 'Vivobook S 14 Flip OLED (TP3402)', '14\"', 14000000, 'Windows 11 Home - ASUS recommends Windows 11 Pro for business', 'Up to 12th Intel® Core™ i7 processor,\r\nUp to 16 GB memory,\r\nUp to 1 TB SSD storage,\r\nUp to 14\'\' 2.8K OLED NanoEdge display,\r\n90 Hz refresh rate', 'vivobook s14 flip oled.jpg'),
(25, 2, 'Vivobook Pro 15 OLED (K6502)', '15.6\"', 14000000, 'Windows 11 Home - ASUS recommends Windows 11 Pro for business', 'Up to 12th gen Intel® Core™ i7 H-series processor,\r\nUp to NVIDIA® GeForce® RTX 3050 Ti,\r\nUp to 15.6’’ 2.8K 120 Hz OLED display,\r\nThunderbolt™ 4 USB-C® port,\r\nUp to 16 GB memory', 'Vivobook S14 Flip.jpg'),
(26, 2, 'ASUS Vivobook Pro 15 OLED (M6500, AMD Ryzen™ 5000 Series Mobile Processor)', '15.6\"', 12000000, 'Windows 11 Home - ASUS recommends Windows 11 Pro for business', 'Up to 12th gen Intel® Core™ i7 processor,\r\nUp to NVIDIA® GeForce® RTX 3050 Ti,\r\nUp to 16 GB memory,\r\nUp to 1 TB PCIe® 3.0 SSD storage,\r\n15.6’’ 2.8K 120 Hz OLED laptop', 'vivobook pro 15.jpg'),
(27, 2, 'ASUS Vivobook Pro 16X OLED (K6604)', '16\"', 30000000, 'Windows 11 Home - ASUS recommends Windows 11 Pro for business', 'Up to AMD Ryzen™ 7 5800H Mobile Processor,\r\nUp to NVIDIA® GeForce® RTX 3050,\r\nUp to 8 GB memory,\r\nUp to 512GB SSD storage,\r\nUp to 14\'\' 2.8K OLED NanoEdge display', 'vivobook pro 16x.jpg'),
(28, 3, 'ASUS P1412(11th Gen Intel)', '14\"', 32000000, 'Windows 11 Home - ASUS recommends Windows 11 Pro for business', 'Up to 11th gen Intel® Core™ i7 processor,\r\nFrom 1.5 kg,\r\n14-inch, FHD (1920 x 1080),\r\nUp to 1 TB SSD storage,\r\nScreen-to-body ratio: 82%', 'expertbook p1412.jpg'),
(29, 3, 'ExpertBook B3 Detachable (B3000)', '10\"', 35000000, 'Windows 11 Home - ASUS recommends Windows 11 Pro for business', 'Powered by Snapdragon 7c Gen 2 Compute Platform,\r\nDetachable full-sized keyboard,\r\nDual-orientation stand cover,\r\nDual cameras and garaged stylus,\r\nNoise reducing camera,', 'expertbook b3.jpg'),
(30, 3, 'ExpertBook B1 (B1402, 12th Gen Intel)', '14\"', 36000000, 'Windows 11 Home - ASUS recommends Windows 11 Pro for business', 'Up to 12th gen Intel® Core™ i7 processor,\r\nUp to Intel® Iris Xᵉ graphics,\r\nUp to 14” HD NanoEdge Display,\r\nOptional fingerprint sensor login,\r\nMIL-STD 810H US military standard', 'expertbook b1.jpg'),
(31, 4, 'ASUS ExpertBook B9 OLED (B9403, Series 1 intel)', '14\"', 51000000, 'Windows 11 Pro - ASUS recommends Windows 11 Pro for business', 'The world’s lightest 14” OLED business laptop, weighing a mere 990g,\r\nUp to Intel® Core™ 7 processor (Series 1),\r\nDedicated Copilot key for more AI exploration,\r\nSustainable across the product lifecycle,\r\nAll-metal premium magnesium-lithium alloy chassis', 'expertbook b1.jpg'),
(32, 4, 'ExpertBook B6 Flip (B6602F, 12th Gen Intel)', '16\"', 48000000, 'Windows 11 Pro - ASUS recommends Windows 11 Pro for business', 'Up to 12th Intel® Core™ i7 processor,\r\nUp to NVIDIA RTX A200 graphic cards,\r\n360° flip design,\r\nUp to 128 GB memory,\r\nUp to 4 TB SSD storage', 'expertbook b1.jpg'),
(33, 5, 'ROG Zephyrus G14 (2024)\r\nGA403UV-R946OL6G-O', '14\"', 34000000, 'Windows 11 Home', 'NVIDIA® GeForce RTX™ 4060 Laptop GPU,\r\nXDNA 16TOPs,\r\nAMD Ryzen™ 9 8945HS Processor,\r\n3K (2880 x 1800) 16:10 120Hz OLED ROG Nebula Display', 'ROG Zephyrus G14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`) VALUES
(32, 'Ikhsan', '4625', 'iksan@gmail.com'),
(33, 'Alil', '12345', 'alil@gmail.com'),
(38, 'dandi', '$2y$10$dBoAPhQCE962MqxyWPV0Ye/uJFnQXQI6VB3ZdWy55kzr.LSG4NjXq', 'dandi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
