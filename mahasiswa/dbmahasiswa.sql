-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2025 at 06:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmhs`
--

CREATE TABLE `tblmhs` (
  `npm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jns_kel` char(2) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `beasiswa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmhs`
--

INSERT INTO `tblmhs` (`npm`, `nama`, `jns_kel`, `prodi`, `foto`, `beasiswa`) VALUES
('2225110014', 'totti', 'LK', 'Manajemen Informatika', 'WhatsApp Image 2025-07-15 at 4.22.10 PM.jpeg', 'Ya'),
('2225110015', 'totti', 'PR', 'Manajemen Informatika', 'baru.jpg', 'Ya'),
('2225110019', 'totti', 'LK', 'Manajemen Informatika', 'baru (1).jpg', 'Tidak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmhs`
--
ALTER TABLE `tblmhs`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
