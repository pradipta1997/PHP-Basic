-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 03:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Pradipta Ramadhan', '160442010031', 'pradiptaramadhan1997@gmail.com', 'Informatika Komputer', 'foto0.jpg'),
(2, 'Alex thomas', '160442010112', 'alex@gmail.com', 'Sistem Informasi', 'foto1.png'),
(3, 'Stpheen Stive', '160221012312', 'stivestpheen@yahoo.com', 'Hubungan Internasional', 'foto2.jpg'),
(4, 'William Crouch', '160442010034', 'william@rocketmail.com', 'Sastra Francis', 'foto3.png'),
(5, 'Noura Bress', '160442010111', 'noura@yahoo.com', 'Teknik Pertambangan Internasional', 'foto4.jpg'),
(6, 'Ahmed Nasheed', '160442010040', 'ahmednasheed@gmail.com', 'Pengkajian Pangan', 'foto5.jpg'),
(7, 'Andy Coman', '160442011156', 'andycoman@gmail.com', 'Sosial dan Politik', 'foto6.jpg'),
(8, 'Chemberlain Oxlade', '160442011857', 'chemberlain@gmail.com', 'Medis dan Kesehatan', 'foto7.jpg'),
(9, 'Rahmat Afandi', '160442010001', 'rahmatafandi@gmail.com', 'Sejarah dan Antropologi', 'foto8.png'),
(10, 'Victorien Angban', '160442033461', 'victorienangban@gmail.com', 'Seni dan Budaya', 'foto9.png'),
(12, 'Parle comsa', '160402010155', 'parlecomsa@rocket.mail', 'Ekonomi & Bisnis', 'foto10.jpg'),
(13, 'Xie Guan Fei', '160402010167', 'xieguanfei@gmail.com', 'Kedokteran', 'foto11.png'),
(35, 'Agung Budiman', '160402010168', 'agungbudiman@yahoo.com', 'Manajemen', '5f7cc0b4d0288.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$iwvujbwtuqINZXCdX4RhueyW87F/FpzDn0aw3uBerxFuqHwf/Kzqm'),
(2, 'pradipta', '$2y$10$iE9r9RNEgrr6fv5RJrWSfeKy/SUx50zqeDwZOosiCIaUS1ubesoky'),
(3, 'ramadhan', '$2y$10$D1t6VcjU8xuFgqrAkb26XuGTIXJR7x84c7sKAZpjYc8hy1mjKZZJe'),
(4, 'localhost', '$2y$10$NAEz.gn.zQzgSaFv0AwbsOqyTJj0ldJXP/uReV1/KOlut/hsXQm8G');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
