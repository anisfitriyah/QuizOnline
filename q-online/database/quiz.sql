-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 31, 2015 at 09:47 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `Kode_soal` int(11) NOT NULL AUTO_INCREMENT,
  `Matkul` text NOT NULL,
  `Pertanyaan` text NOT NULL,
  `Pilihan1` text NOT NULL,
  `Pilihan2` text NOT NULL,
  `Pilihan3` text NOT NULL,
  `Pilihan4` text NOT NULL,
  `Jawaban` text NOT NULL,
  `Bobot` int(11) NOT NULL,
  PRIMARY KEY (`Kode_soal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `create_quiz`
--

INSERT INTO `create_quiz` (`Kode_soal`, `Matkul`, `Pertanyaan`, `Pilihan1`, `Pilihan2`, `Pilihan3`, `Pilihan4`, `Jawaban`, `Bobot`) VALUES
(1, 'web', 'wqwq', 'j', 'o', 'u', 'k', 'lk', 5),
(2, 'web', 'OP', 'io', 'PKJK', 'kjk', 'm', 'l', 15),
(3, 'web', 'lk', 'oi', 'p', '-', 'h', 'kj', 15),
(4, 'web', 'qqw', 'qwq', 'wqw', 'wqw', 'qw', 'qw', 5),
(5, 'web', 'wqw', 'ww', 'wew', 'ds', 'sd', 'sds', 10),
(6, 'web', 'wds', 'sds', 'xcx', 'cxc', 'xcx', 'dsds', 20);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(200) NOT NULL,
  `file_gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Username` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Username`, `Name`, `Password`) VALUES
('eee', 'qqqq', '$2a$10$tes1tes1tes1$$$$$$$$$.AHDRtLPWIy.v049z3x3omF.yXA8ckzC'),
('qq', 'qwqw', '$2a$10$tes1tes1tes1$$$$$$$$$.o8/jqu5vjJgpCYY.YUe/bFplvjDIar.'),
('qwq', 'wqwqw', '$2a$10$tes1tes1tes1$$$$$$$$$.AHDRtLPWIy.v049z3x3omF.yXA8ckzC'),
('qwqwqwqwqw', 'qwqw', '$2a$10$tes1tes1tes1$$$$$$$$$.AHDRtLPWIy.v049z3x3omF.yXA8ckzC'),
('wewww', 'wewewew', '$2a$10$tes1tes1tes1$$$$$$$$$.AHDRtLPWIy.v049z3x3omF.yXA8ckzC'),
('yogasny', 'Prayoga Septo Nur Yurianto', '$2a$10$tes1tes1tes1$$$$$$$$$.5u8bQDIECmg6/VEvemQ0NpiSRSEWAh.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
