-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2014 at 01:13 PM
-- Server version: 5.5.37
-- PHP Version: 5.5.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pamdes`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE IF NOT EXISTS `golongan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(5) NOT NULL,
  `tarif` int(12) NOT NULL,
  `biaya_administrasi` int(12) NOT NULL,
  `biaya_pemeliharaan` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `nama`, `tarif`, `biaya_administrasi`, `biaya_pemeliharaan`) VALUES
(1, 'A', 100, 1000, 1000),
(2, 'z', 200, 1500, 1500),
(4, 'C', 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` text NOT NULL,
  `golongan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pelanggan_golongan_idx` (`golongan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_hp`, `golongan_id`) VALUES
(1, 'ajis', 'mataran', '081', 1),
(2, 'ajis', 'mat', '081', 1),
(4, 'as', 'asd', '09', 2),
(5, 'wer', 'nb', '098', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE IF NOT EXISTS `tagihan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan_id` int(11) NOT NULL,
  `golongan_id` int(11) NOT NULL,
  `bulan_tahun` text NOT NULL,
  `tarif` int(12) NOT NULL,
  `meter_awal` int(10) NOT NULL,
  `meter_akhir` int(10) NOT NULL,
  `pakai` int(10) NOT NULL,
  `tagihan_air` int(12) NOT NULL,
  `biaya_administrasi` int(12) NOT NULL,
  `biaya_pemeliharaan` int(12) NOT NULL,
  `total_tagihan` int(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tagihan_pelanggan1_idx` (`pelanggan_id`),
  KEY `fk_tagihan_golongan1_idx` (`golongan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `pelanggan_id`, `golongan_id`, `bulan_tahun`, `tarif`, `meter_awal`, `meter_akhir`, `pakai`, `tagihan_air`, `biaya_administrasi`, `biaya_pemeliharaan`, `total_tagihan`) VALUES
(1, 1, 1, 'jan', 100, 10, 15, 5, 500, 1500, 1500, 3500),
(2, 4, 2, 'feb', 10, 10, 10, 10, 10, 10, 10, 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `fk_pelanggan_golongan` FOREIGN KEY (`golongan_id`) REFERENCES `golongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `fk_tagihan_golongan1` FOREIGN KEY (`golongan_id`) REFERENCES `golongan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tagihan_pelanggan1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
