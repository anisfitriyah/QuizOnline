-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2015 at 06:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `create_quiz`
--

CREATE TABLE IF NOT EXISTS `create_quiz` (
`Kode_soal` int(11) NOT NULL,
  `Pertanyaan` text NOT NULL,
  `Pilihan1` text NOT NULL,
  `Pilihan2` text NOT NULL,
  `Pilihan3` text NOT NULL,
  `Pilihan4` text NOT NULL,
  `Jawaban` text NOT NULL,
  `Bobot` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_quiz`
--

INSERT INTO `create_quiz` (`Kode_soal`, `Pertanyaan`, `Pilihan1`, `Pilihan2`, `Pilihan3`, `Pilihan4`, `Jawaban`, `Bobot`) VALUES
(1, 'qwertyuiop', 'q', 'a', 'z', 'w', 'w', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `create_quiz`
--
ALTER TABLE `create_quiz`
 ADD PRIMARY KEY (`Kode_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `create_quiz`
--
ALTER TABLE `create_quiz`
MODIFY `Kode_soal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
