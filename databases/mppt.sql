-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 12:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mppt`
--

-- --------------------------------------------------------

--
-- Table structure for table `device_mppt`
--

CREATE TABLE `device_mppt` (
  `id_device` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `device_mppt`
--

INSERT INTO `device_mppt` (`id_device`, `name`, `ip`) VALUES
(1011, 'MT 01', '10.10.25.101'),
(1012, 'MT 02', '10.10.25.102'),
(1013, 'MT 03', '10.10.25.103'),
(1014, 'MT 04', '10.10.25.104'),
(1015, 'MT 05', '10.10.25.105'),
(1016, 'MT 06', '10.10.25.106'),
(1017, 'MT 07', '10.10.25.107'),
(1018, 'MT 08', '10.10.25.108'),
(1019, 'MT 09', '10.10.25.109'),
(1020, 'MT 10', '10.10.25.110'),
(1021, 'MT 11', '10.10.25.111'),
(1022, 'MT 12', '10.10.25.112'),
(1023, 'MT 13', '10.10.25.113'),
(1024, 'MT 14', '10.10.25.114'),
(1025, 'MT 15', '10.10.25.115'),
(1026, 'MT 16', '10.10.25.116'),
(1027, 'MT 17', '10.10.25.117'),
(1028, 'MT 18', '10.10.25.118'),
(1029, 'MT 19', '10.10.25.119'),
(1030, 'MT 20', '10.10.25.120'),
(1031, 'MT 21', '10.10.25.121'),
(1032, 'MT 22', '10.10.25.122'),
(1033, 'MT 23', '10.10.25.123'),
(1034, 'MT 24', '10.10.25.124'),
(1035, 'MT 25', '10.10.25.125'),
(1036, 'MT 26', '10.10.25.126'),
(1037, 'MT 27', '10.10.25.77'),
(1038, 'MT 28', '10.10.25.78'),
(1039, 'MT 29', '10.10.25.79'),
(1040, 'MT 30', '10.10.25.80'),
(1041, 'MT 31', '10.10.25.81'),
(1042, 'MT 32', '10.10.25.82'),
(1043, 'MT 33', '10.10.25.83'),
(1044, 'MT 34', '10.10.25.84'),
(1045, 'MT 35', '10.10.25.85'),
(1046, 'MT 36', '10.10.25.86'),
(1047, 'MT 37', '10.10.25.87'),
(1048, 'MT 38', '10.10.25.88'),
(1049, 'MT 39', '10.10.25.89'),
(1050, 'MT 40', '10.10.25.90'),
(1051, 'MT 41', '10.10.25.91'),
(1052, 'MT 42', '10.10.25.92'),
(1053, 'MT 43', '10.10.25.93'),
(1054, 'MT 44', '10.10.25.94');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `device_mppt`
--
ALTER TABLE `device_mppt`
  ADD PRIMARY KEY (`id_device`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `device_mppt`
--
ALTER TABLE `device_mppt`
  MODIFY `id_device` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1055;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
