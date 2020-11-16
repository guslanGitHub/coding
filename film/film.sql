-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 07:43 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `sutradara` varchar(200) NOT NULL,
  `pemeran_utama` varchar(200) NOT NULL,
  `tgl_terbit` varchar(20) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `judul`, `penulis`, `sutradara`, `pemeran_utama`, `tgl_terbit`, `foto`) VALUES
(1, 'MeloDylan', 'Endik Koeswoyo', 'Fajar Nugros', 'Defano Danendra dan Aisyah Aqilah', '4 April 2019', 'melodylan.jpg'),
(2, 'Si Manis Jembatan Ancol', ' Anggy Umbara, Fajar Umbara, Isman H. Suryaman', ' Anggy Umbara', 'Diah Permatasari', '26 Desember 2019', 'simanis.jpg'),
(3, 'Merantau', ' Gareth Evans', ' Gareth Evans', 'Iko Uwais', '6 Agustus 2009', 'merantau.jpg'),
(4, 'The Social Dilemma', ' Jeff Orlowski, Davis Coombe, Vickie Curtis', ' Jeff Orlowski', 'Kara Hayward', '26 Januari 2020', 'thesosialdilemah.jpg'),
(5, 'John Wick', ' Chad Stahelski', ' Chad Stahelski', 'Keanu Reeves', '13 Oktober 2014', 'jhonwick.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
