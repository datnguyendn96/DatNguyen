-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2016 at 03:17 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gio_hang`
--
CREATE DATABASE IF NOT EXISTS `gio_hang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gio_hang`;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten_sanpham` varchar(100) NOT NULL,
  `don_gia` varchar(100) NOT NULL,
  `so_luong` varchar(100) NOT NULL,
  `thanh_tien` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_sanpham`, `don_gia`, `so_luong`, `thanh_tien`) VALUES
(1, 'Mobistart Pirme', '2.990.000', '1', '2.990.000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
