-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2020 at 11:15 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

DROP TABLE IF EXISTS `admin_tbl`;
CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `serialNo` int(11) NOT NULL AUTO_INCREMENT,
  `staffId` varchar(30) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`serialNo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`serialNo`, `staffId`, `username`, `password`) VALUES
(1, 'IMT1', 'ali@gmail.com', '123'),
(2, 'IMT2', 'sham@gmail.com', '123'),
(4, 'IMT3', 'abm@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cell`
--

DROP TABLE IF EXISTS `cell`;
CREATE TABLE IF NOT EXISTS `cell` (
  `serialNo` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `name` varchar(17) NOT NULL,
  `capacity` int(11) NOT NULL,
  PRIMARY KEY (`serialNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

DROP TABLE IF EXISTS `prisoner`;
CREATE TABLE IF NOT EXISTS `prisoner` (
  `serialNo` int(11) NOT NULL AUTO_INCREMENT,
  `idNo` varchar(11) NOT NULL,
  `firstName` varchar(17) NOT NULL,
  `lastName` varchar(17) NOT NULL,
  `contactAddress` varchar(77) NOT NULL,
  `nationality` varchar(11) NOT NULL,
  `state` varchar(11) NOT NULL,
  `lga` varchar(11) NOT NULL,
  `maritalStatus` varchar(11) NOT NULL,
  `crimeCommited` varchar(11) NOT NULL,
  `cellNo` varchar(11) NOT NULL,
  `sex` varchar(11) NOT NULL,
  `age` varchar(11) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `dateOfSentence` varchar(11) NOT NULL,
  `timeDuration` float NOT NULL,
  `dischargeDate` varchar(11) NOT NULL,
  `picture` varchar(45) NOT NULL,
  PRIMARY KEY (`serialNo`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`serialNo`, `idNo`, `firstName`, `lastName`, `contactAddress`, `nationality`, `state`, `lga`, `maritalStatus`, `crimeCommited`, `cellNo`, `sex`, `age`, `weight`, `height`, `dateOfSentence`, `timeDuration`, `dischargeDate`, `picture`) VALUES
(1, 'IMT1', 'Dfygy', 'Ghhh', 'hjfgjj', 'hhkkf', '', 'Dass', 'sdt', 'hjj', '34h', 'male', '35', 56, 75, '2019-08-17', 35, '2019-08-16', 'no image'),
(2, 'IMT2', 'Hska', 'Kaolak', 'no 15 bole street', 'nklsoks', '', 'Damban', 'husuhdd', 'huufuf', '2', 'male', '35', 2, 12, '2019-08-22', 35, '2019-08-15', 'no image'),
(3, 'IMT3', 'Hska', 'Kaolak', 'no 15 bole street', 'nklsoks', '', 'Damban', 'husuhdd', 'huufuf', '2', 'male', '35', 2, 12, '2019-08-22', 35, '2019-08-15', 'no image'),
(4, 'IMT4', 'Musa', 'Isa', '76yu', 'nigeria', '', 'Gireri', 'jakka', 'murder', '39n', 'male', '35', 3, 2, '2019-08-21', 35, '2019-08-22', 'no image'),
(5, 'IMT5', 'Musa', 'Sani', '6kjjj', 'hfhffh', '', 'Central', 'noo', 'murder', '89fd', 'male', '35', 2, 7, '2019-08-28', 35, '2019-08-28', 'no image'),
(6, 'IMT6', 'Musa', 'Sani', '6kjjj', 'hfhffh', '', 'Central', 'noo', 'murder', '89fd', 'male', '35', 2, 7, '2019-08-28', 35, '2019-08-28', 'no image'),
(7, 'IMT7', 'Musa', 'Sani', '6kjjj', 'hfhffh', '', 'Central', 'noo', 'murder', '89fd', 'male', '35', 2, 7, '2019-08-28', 35, '2019-08-28', 'no image'),
(8, 'IMT8', 'Anas', 'Ali', 'jambutu', 'nigeria', '', 'Gombe', 'male', 'female', '090', 'male', '35', 45, 67, '2019-08-17', 35, '2019-08-15', 'no image'),
(9, 'IMT9', 'Musa', 'Samaila', 'no534', 'nigeria', 'borno', 'Bama', 'male', 'male', '78ty', 'male', '35', 12, 12, '2019-08-15', 35, '2019-08-27', 'no image'),
(10, 'IMT10', 'Abbakar', 'Sale', 'adamawa', 'nigria', 'adamawa', 'Ganaye', 'male', 'male', '3hn', 'female', '35', 35, 76, '2019-08-16', 35, '2019-08-23', 'no image'),
(11, 'IMT11', 'Sani', 'Nuhu', 'dawaki', 'nig', 'gombe', 'Gombe', 'female', 'female', '36hj', 'male', '35', 56, 76, '2019-08-10', 35, '2019-08-23', 'no image'),
(12, 'IMT12', 'Naja', 'Ali', 'balanga', 'nig', 'gombe', 'Balanga', 'female', 'female', '98', 'female', '35', 45, 56, '2019-08-01', 35, '2019-08-15', 'no image'),
(13, 'IMT13', 'Jamila', 'Ahmad', 'bau', 'niger', 'bauchi', 'Bauchi', 'female', 'male', '67', 'female', '35', 46, 67, '2019-08-15', 35, '2019-08-23', 'no image'),
(14, 'IMT14', 'Ladidi', 'Bllo', 'hj', 'nigr', 'plateau', 'Mangu', 'female', 'male', '56', 'female', '35', 67, 45, '2019-08-23', 35, '2019-08-21', 'no image'),
(15, 'IMT15', 'Aisha', 'Sani', 'jahun', 'niger', 'jigawa', 'Jahun', 'female', 'female', '56', 'female', '35', 45, 78, '2019-08-15', 35, '2019-08-23', 'no image'),
(16, 'IMT16', 'Ali', 'Ali', 'da', 'nig', 'gombe', 'Gombe', 'male', 'female', '334', 'male', '35', 56, 78, '2019-08-15', 35, '2019-08-31', 'no image'),
(17, 'IMT17', 'Ali', 'Sani', 'da', 'nig', 'gombe', 'Funakaye', 'female', 'Rape', '56', 'male', '35', 56, 78, '2019-08-16', 35, '2019-08-29', 'no image'),
(18, 'IMT18', 'Hjhj', 'Gh', 'h', 'hhh', 'gombe', 'Gombe', 'Married', 'Murder', 'h', 'male', '35', 45, 45, '45', 35, '56', 'no image'),
(19, 'IMT19', 'Habu', 'Harun', '', 'Nig', 'gombe', 'Gombe', 'Single', 'Rape', 'A1', 'male', '35', 34, 54, '', 35, '', 'no image');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `serialNo` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(17) NOT NULL,
  `lastName` varchar(17) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `age` int(3) NOT NULL,
  `state` varchar(11) NOT NULL,
  `lga` varchar(11) NOT NULL,
  `staffId` varchar(11) NOT NULL,
  `phoneNo` varchar(11) NOT NULL,
  `email` varchar(53) NOT NULL,
  `status` varchar(2) NOT NULL,
  PRIMARY KEY (`serialNo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`serialNo`, `firstName`, `lastName`, `sex`, `age`, `state`, `lga`, `staffId`, `phoneNo`, `email`, `status`) VALUES
(1, 'sasassa', 'musa', 'male', 34, 'urururu', 'mojj', 'IMT1', '090988889', '343434', '2'),
(2, 'adamu', 'ibrahim', 'male', 34, 'kano', 'demsa', 'IMT2', '090988889', '242332', '1'),
(3, 'Ahmed', 'Ahmed', 'male', 35, 'gombe', 'Gombe', 'IMT3', '090', 'abm@gmail.com', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

