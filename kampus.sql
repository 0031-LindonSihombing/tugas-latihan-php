-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 05:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemrogramanweb4tia`
--

CREATE TABLE `pemrogramanweb4tia` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nilaiTugas` int(5) NOT NULL,
  `nilaiUts` int(5) NOT NULL,
  `nilaiUas` int(5) NOT NULL,
  `nilaiAkhir` float NOT NULL,
  `nilaiHuruf` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemrogramanweb4tia`
--

INSERT INTO `pemrogramanweb4tia` (`nim`, `nama`, `nilaiTugas`, `nilaiUts`, `nilaiUas`, `nilaiAkhir`, `nilaiHuruf`) VALUES
('221510031', 'Lindon Baynes Jhonson S', 96, 95, 90, 93.9, 'A'),
('221510032', 'Baynes', 90, 90, 90, 90, 'A'),
('221510033', 'Jhonson', 90, 85, 100, 91, 'A'),
('2431', '321r2', 67, 85, 96, 81.1, 'B'),
('2431w', '321r2', 67, 85, 96, 81.1, 'B'),
('2431ww', '321r2', 67, 85, 96, 81.1, 'B'),
('w54', 'poltak', 75, 70, 79, 74.7, 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemrogramanweb4tia`
--
ALTER TABLE `pemrogramanweb4tia`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
