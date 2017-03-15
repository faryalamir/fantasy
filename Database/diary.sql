/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.28-log : Database - diaryproject
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`diaryproject` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `diaryproject`;

/*Table structure for table `profiles` */

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `username` varchar(50) NOT NULL,
  `field1` varchar(100) DEFAULT NULL,
  `field2` varchar(100) DEFAULT NULL,
  `field3` varchar(100) DEFAULT NULL,
  `field4` varchar(100) DEFAULT NULL,
  `field5` varchar(100) DEFAULT NULL,
  `field6` varchar(100) DEFAULT NULL,
  `field7` varchar(100) DEFAULT NULL,
  KEY `username` (`username`),
  CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`username`) REFERENCES `userlogin` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `profiles` */

/*Table structure for table `userdiary` */

DROP TABLE IF EXISTS `userdiary`;

CREATE TABLE `userdiary` (
  `username` varchar(50) NOT NULL,
  `date` date NOT NULL,
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
  CONSTRAINT `fk_PK_Userlogin` FOREIGN KEY (`username`) REFERENCES `userlogin` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `userdiary` */

/*Table structure for table `userlogin` */

DROP TABLE IF EXISTS `userlogin`;

CREATE TABLE `userlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `userlogin` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
