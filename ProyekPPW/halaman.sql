-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 08:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `kutipan` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(17, 'Ekiden infiknit hijau hijau neon putih', 'Rp405.000', '<p><img src=\"../gambar/b73ce398c39f506af761d2277d853a92.png\" style=\"width: 247px;\"><br></p>', '2023-06-22 03:05:01'),
(21, 'Geist ekiden putih biru royal', 'Rp400.0000', '<p><img src=\"../gambar/d1f491a404d6854880943e5c3cd9ca25.png\" style=\"width: 247px;\"><br></p>', '2023-06-22 03:16:45'),
(22, 'Haze vision biru muda putih merah', 'Rp365.000', '<p><img src=\"../gambar/a8f15eda80c50adb0e71943adc8015cf.png\" style=\"width: 247px;\"><br></p>', '2023-06-22 03:19:43'),
(23, 'Yuza evo hitam burgundy abu ash', 'Rp365.000', '<p><img src=\"../gambar/5fd0b37cd7dbbb00f97ba6ce92bf5add.png\" style=\"width: 247px;\"><br></p>', '2023-06-22 03:21:20'),
(25, 'merk hoka', 'logo hoka', '<p><img src=\"../gambar/0f28b5d49b3020afeecd95b4009adf4c.png\" style=\"width: 638px;\"><br></p>', '2023-06-22 03:24:55'),
(26, 'merk 910', 'logo 910', '<p><img src=\"../gambar/96da2f590cd7246bbde0051047b0d6f7.png\" style=\"width: 1054.4px;\"><br></p>', '2023-06-22 03:25:20'),
(27, 'merk nike', 'logo nike', '<p><img src=\"../gambar/0aa1883c6411f7873cb83dacb17b0afc.png\" style=\"width: 1054.4px;\"><br></p>', '2023-06-22 03:25:44'),
(28, 'merk asics', 'logo asics', '<p><img src=\"../gambar/76dc611d6ebaafc66cc0879c71b5db5c.png\" style=\"width: 500px;\"><br></p>', '2023-06-22 03:26:06'),
(29, 'product', 'product', 'product', '2023-06-22 04:15:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
