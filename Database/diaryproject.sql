-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 02, 2013 at 10:55 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diaryproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'administrator', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `username` varchar(50) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `emailaddress` varchar(100) DEFAULT NULL,
  `postaladdress` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `workat` varchar(100) DEFAULT NULL,
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`username`, `firstname`, `lastname`, `emailaddress`, `postaladdress`, `password`, `qualification`, `workat`) VALUES
('rehan199149', 'rehan', 'lastname', 'aaaaooo na ggvv', 'ddfffffffbggg', '202cb962ac59075b964b07152d234b70', 'dsdsds', 'dddd klhh'),
('admin', 'administrator', 'admin', 'raj124', 'dgfsf', '0192023a7bbd73250516f069df18b500', 'hdfgd', 'gdfgf');

-- --------------------------------------------------------

--
-- Table structure for table `userdiary`
--

CREATE TABLE IF NOT EXISTS `userdiary` (
  `username` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `field1` varchar(100) DEFAULT NULL,
  `field2` varchar(100) DEFAULT NULL,
  `field3` varchar(100) DEFAULT NULL,
  `field4` varchar(100) DEFAULT NULL,
  `field5` varchar(100) DEFAULT NULL,
  `field6` varchar(100) DEFAULT NULL,
  `field7` varchar(100) DEFAULT NULL,
  `field8` varchar(100) DEFAULT NULL,
  `field9` varchar(100) DEFAULT NULL,
  `field10` varchar(100) DEFAULT NULL,
  `field11` varchar(100) DEFAULT NULL,
  `field12` varchar(100) DEFAULT NULL,
  `field13` varchar(100) DEFAULT NULL,
  `field14` varchar(100) DEFAULT NULL,
  `field15` varchar(100) DEFAULT NULL,
  `field16` varchar(100) DEFAULT NULL,
  `field17` varchar(100) DEFAULT NULL,
  `field18` varchar(100) DEFAULT NULL,
  `field19` varchar(100) DEFAULT NULL,
  `field20` varchar(100) DEFAULT NULL,
  `field21` varchar(100) DEFAULT NULL,
  `field22` varchar(100) DEFAULT NULL,
  `field23` varchar(100) DEFAULT NULL,
  `field24` varchar(100) DEFAULT NULL,
  `field25` varchar(100) DEFAULT NULL,
  `field26` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`username`,`date`),
  KEY `date` (`date`),
  KEY `date_2` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdiary`
--

INSERT INTO `userdiary` (`username`, `date`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `field10`, `field11`, `field12`, `field13`, `field14`, `field15`, `field16`, `field17`, `field18`, `field19`, `field20`, `field21`, `field22`, `field23`, `field24`, `field25`, `field26`) VALUES
('rehan199149', '02/02/2013', '  dddd', ' ', '', 'fgds ffff', ' ', ' ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`) VALUES
('admin', '0192023a7bbd73250516f069df18b500'),
('rehan199149', '202cb962ac59075b964b07152d234b70');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userlogin` (`username`);

--
-- Constraints for table `userdiary`
--
ALTER TABLE `userdiary`
  ADD CONSTRAINT `fk_PK_Userlogin` FOREIGN KEY (`username`) REFERENCES `userlogin` (`username`);
