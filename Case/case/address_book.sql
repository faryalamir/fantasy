/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.1.53-community-log : Database - address_book
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`address_book` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `address_book`;

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `contactid` int(200) NOT NULL AUTO_INCREMENT,
  `chk_ref` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `contactno` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `contacts` */

insert  into `contacts`(`contactid`,`chk_ref`,`fname`,`lname`,`contactno`,`email`,`address`) values (1,'talhajanjua','Ahmed Ashraf','Butt','03226508283','i.ahmedbutt@gmail.co','Ghulshan Colony hafizabad Punjab'),(2,'talhajanjua','Ahmed','Butt','03226508283','ahmed@gmail.com','ghulshan'),(8,'talhajanjua','Muaz','Zubair','03216248933','muazjanjua@yahoo.com','Madina Colony Madrian wala road Hafizbad');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userid` int(50) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) DEFAULT NULL,
  `lastname` varchar(25) DEFAULT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `pass_word` varchar(30) DEFAULT NULL,
  `genderf` varchar(15) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userid`,`firstname`,`lastname`,`user_name`,`pass_word`,`genderf`,`emailid`) values (1,'Talha','Zubair','talhajanjua','123','male','talhajanjua@live.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
