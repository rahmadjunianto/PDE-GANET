-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2014 at 09:22 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `produk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategoriku`
--

CREATE TABLE IF NOT EXISTS `kategoriku` (
  `id_kategoriku` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategoriku` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kategoriku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategoriku`
--

INSERT INTO `kategoriku` (`id_kategoriku`, `nama_kategoriku`) VALUES
(1, 'Celana'),
(2, 'Pakaian'),
(3, 'Blus'),
(4, 'Rok');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriku_produk`
--

CREATE TABLE IF NOT EXISTS `kategoriku_produk` (
  `id_kategoriku_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) DEFAULT NULL,
  `id_kategoriku` int(11) DEFAULT NULL,
  `harga` float(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_kategoriku_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `kategoriku_produk`
--

INSERT INTO `kategoriku_produk` (`id_kategoriku_produk`, `nama_produk`, `id_kategoriku`, `harga`) VALUES
(1, 'Kaos Oblong Keren', 1, 80000.00),
(2, 'apa saja', 2, 90000.00),
(4, 'Mau Memulai Pendekatan', 4, 900000.00),
(5, 'Sheila On 7', 3, 500000.00),
(6, 'Jangan Kayaknya Dong', 1, 1000000.00),
(7, '', 0, 0.00);
