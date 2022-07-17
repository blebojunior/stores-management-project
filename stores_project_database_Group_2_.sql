-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2021 at 09:54 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stores_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
CREATE TABLE IF NOT EXISTS `issues` (
  `Issue_ID` int(50) NOT NULL AUTO_INCREMENT,
  `Amount` varchar(50) DEFAULT NULL,
  `Issued_by` varchar(50) DEFAULT NULL,
  `Issued_To` varchar(50) DEFAULT NULL,
  `Approval_check` varchar(50) DEFAULT NULL,
  `issue_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Issue_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`Issue_ID`, `Amount`, `Issued_by`, `Issued_To`, `Approval_check`, `issue_date`) VALUES
(1, '222', 'kweyatey', 'ICT Department', 'yes', '2021-04-29 01:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `Item_ID` int(50) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) DEFAULT NULL,
  `item_quantity` int(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `item_condition` varchar(50) DEFAULT NULL,
  `item_weight` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Item_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_ID`, `item_name`, `item_quantity`, `category`, `item_condition`, `item_weight`) VALUES
(1, 'keyboard', 22, 'electronics', 'New', '3kg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `user_password`) VALUES
('bkweyatey', '$2y$10$KIMtvmKEvV7IcKMuim7OR.Kzxj7/RKtXLm6rJT5si4JIho.5YJYgK');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `ID` int(30) NOT NULL AUTO_INCREMENT,
  `First_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `phone_number` int(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `First_name`, `last_name`, `Email`, `username`, `Department`, `phone_number`) VALUES
(1, 'Kweyatey', 'Blebo ', 'bkweyatey@gmail.com', 'bkweyatey', 'ICT Department', 276908826);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
