-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2024 at 08:33 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house_rent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `phone_no`) VALUES
(1, 'KESTHER', 'ogbukesther@gmail.com', 'LINKERS123', '08103416893');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

DROP TABLE IF EXISTS `receipts`;
CREATE TABLE IF NOT EXISTS `receipts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `ref_id` int(100) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_address` text NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `pmtd` varchar(120) NOT NULL,
  `pur_pose` text NOT NULL,
  `total_amt` text NOT NULL,
  `amt_paid` text NOT NULL,
  `amt_rem` text NOT NULL,
  `writer_name` varchar(200) NOT NULL,
  `fullDay` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `ref_id`, `customer_name`, `customer_address`, `phone_no`, `pmtd`, `pur_pose`, `total_amt`, `amt_paid`, `amt_rem`, `writer_name`, `fullDay`, `date`, `time`) VALUES
(2, 122115129, 'OGBU BRIAN CHIDUMEBI', 'NO. 1 PAUL IGANGA AVENUE, FEDERAL LOWCOST HOUSING', '08103416893', 'Bank Transfer', 'HOUSE RENT', '1000000', '1000000', '0', 'OGBU KESTHER KENECHUKWU', 'Sat 03rd Feb,2024', '03/02/2024', '3:12:12.pm'),
(3, 582783538, 'OJIKE CHIDERA ANSLEM', 'GODFREY OKOYE UNIVERSITY, THINKERS CORNER', '08103416893', 'Bank Transfer', 'HOUSE RENT', '1000000', '800000', '200000', 'OGBU KESTHER KENECHUKWU', 'Sat 03rd Feb,2024', '03/02/2024', '3:13:55.pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
