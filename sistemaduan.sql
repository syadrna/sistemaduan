-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 03:07 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Elisya Adriana Binti Ahmad Jamil', 'admin', '1234');

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
(2, 0, 'Hal Ehwal Pelajar', 'Pelajar datang lambat ke sekolah', '        Pelajar datang pukul 710    ', '        kolej    ', 'Syahirul Imam', 'Ibu Bapa', '2018-10-01', 'Tindakan Diambil'),
(10, 0, 'Pentadbiran Kolej', 'HEY ', '        HSBDH    ', '        HEDHDB    ', 'Amirah Fakhira', 'Pelawat', '2018-10-02', 'Tindakan Diambil'),
(11, 0, 'Pentadbiran Kolej', 'mjsn', '            uhsxwjhx    ', '            nxsjha    ', 'uhdehw', 'Pelawat', '2018-10-02', ''),
(13, 0, 'Hal Ehwal Pelajar', 'eee', '            ebbe    ', '            ee    ', 'hfewh', 'Ibu Bapa', '2018-10-02', ''),
(14, 0, 'Pentadbiran Kolej', 'ggdggd', '            uhdhd    ', '            jdjd    ', 'Siti', 'Ibu Bapa', '2018-10-05', ''),
(15, 0, 'Hal Ehwal Pelajar', 'Slow', '            pengurusan slow    ', '            Office    ', 'Farid', 'Pelawat', '2018-10-29', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `noic` varchar(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `Type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `noic`, `nama`, `username`, `pass`, `Type`) VALUES
(1, '991124106000', 'ELISYA ADRIANA BINTI AHMAD JAMIL', 'admin', '1234', 1),
(3, '991113035331', 'Ammar Azahar', 'zoork', 'ammar', 2),
(5, '991215105338', 'Siti Nur Amira', 'mirazail', 'amira123', 2),
(6, '200311034565', 'Siti Nabilah', 'belle', 'belle', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`idaduan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `idaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;


ALTER TABLE `aduan`
  ADD CONSTRAINT `aduan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

--
-- Constraints for table `aduan`
--
ALTER TABLE `aduan`
  ADD CONSTRAINT `aduan_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
