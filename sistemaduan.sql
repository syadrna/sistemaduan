-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2018 at 02:57 PM
-- Server version: 10.3.10-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemaduan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `idaduan` int(11) NOT NULL,
  `user_id` int(4) NOT NULL,
  `kategoriaduan` varchar(100) NOT NULL,
  `tajukaduan` varchar(100) NOT NULL,
  `butiranaduan` text NOT NULL,
  `lokasiaduan` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kategoripelawat` varchar(40) NOT NULL,
  `tarikh` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`idaduan`, `user_id`, `kategoriaduan`, `tajukaduan`, `butiranaduan`, `lokasiaduan`, `nama`, `kategoripelawat`, `tarikh`, `status`) VALUES
(1, 3, 'Hal Ehwal Pelajar', 'asdasds', '        sadasd        ', '        sdsadsa        ', 'Ammar Azahar', 'Ibu Bapa', '2017-12-01', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`idaduan`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `idaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aduan`
--
ALTER TABLE `aduan`
  ADD CONSTRAINT `aduan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
