-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 31, 2018 at 04:48 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aarya`
--
CREATE DATABASE IF NOT EXISTS `aarya` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aarya`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_info`
--

DROP TABLE IF EXISTS `admin_login_info`;
CREATE TABLE IF NOT EXISTS `admin_login_info` (
  `loginid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login_info`
--

INSERT INTO `admin_login_info` (`loginid`, `password`) VALUES
('ADMIN', 'PASS');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

DROP TABLE IF EXISTS `market`;
CREATE TABLE IF NOT EXISTS `market` (
  `staff_id` varchar(10) NOT NULL,
  `client_id` int(10) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(20) NOT NULL,
  `client_mob_number` varchar(10) NOT NULL,
  `visit` date NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1024 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`staff_id`, `client_id`, `client_name`, `client_mob_number`, `visit`) VALUES
('AP1801', 1011, 'ABHINAV P', '8892674619', '2018-01-29'),
('AP1802', 1012, 'ANKIT P', '874688248', '2018-01-31'),
('AP1801', 1018, 'BOOM', '9876567808', '2018-01-05'),
('AP1801', 1019, 'gnfg', '6876656', '2018-01-13'),
('AP1801', 1022, 'Abhi', '756667', '2018-01-31'),
('AP1801', 1023, 'an', '75666767', '2018-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `market_customers`
--

DROP TABLE IF EXISTS `market_customers`;
CREATE TABLE IF NOT EXISTS `market_customers` (
  `staff_id` varchar(20) NOT NULL,
  `client_mob_number` varchar(10) NOT NULL,
  `client_name` varchar(20) NOT NULL,
  `visit` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market_customers`
--

INSERT INTO `market_customers` (`staff_id`, `client_mob_number`, `client_name`, `visit`) VALUES
('', '', '', '2018-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `staff_login_info`
--

DROP TABLE IF EXISTS `staff_login_info`;
CREATE TABLE IF NOT EXISTS `staff_login_info` (
  `loginid` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_login_info`
--

INSERT INTO `staff_login_info` (`loginid`, `password`) VALUES
('AP1801', 'p@ssw0rd'),
('AP1802', 'aq'),
('root', 'p@ssw0rd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
