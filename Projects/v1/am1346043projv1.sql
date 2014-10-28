# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.6.20)
# Generation Time: 2014-10-28 04:25:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table am1346043_class_entity_invoice
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_class_entity_invoice`;

CREATE TABLE `am1346043_class_entity_invoice` (
  `invoice_id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(7) DEFAULT NULL,
  `invoice_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_class_entity_invoice` (`invoice_id`, `user_id`, `invoice_time`)
VALUES
	(1,1,'2014-10-27 20:56:50');

# Dump of table am1346043_class_entity_services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_class_entity_services`;

CREATE TABLE `am1346043_class_entity_services` (
  `service_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `service_name` varchar(20) DEFAULT NULL,
  `service_description` varchar(255) DEFAULT NULL,
  `service_rate` float(8,2) DEFAULT NULL,
  `service_uom` varchar(2) DEFAULT NULL,
  `service_image_id` tinyint(3) unsigned DEFAULT NULL,
  `service_catagory` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_class_entity_services` (`service_id`, `service_name`, `service_description`, `service_rate`, `service_uom`, `service_image_id`, `service_catagory`)
VALUES
	(1,'Studio Recording','Capture music performances in a recording studio.',25.00,'hr',1,1);


# Dump of table am1346043_class_entity_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_class_entity_user`;

CREATE TABLE `am1346043_class_entity_user` (
  `user_id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(40) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_firstname` varchar(15) DEFAULT NULL,
  `user_lastname` varchar(20) DEFAULT NULL,
  `user_phone` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_class_entity_user` (`user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_phone`)
VALUES
	(1,'me@mine.com','mypass','me','mine',1111111);



# Dump of table am1346043_class_enum_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_class_enum_category`;

CREATE TABLE `am1346043_class_enum_category` (
  `category_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_class_enum_category` (`category_id`, `category_name`)
VALUES
	(1,'audio'),
	(2,'video'),
	(3,'web');


# Dump of table am1346043_class_enum_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_class_enum_images`;

CREATE TABLE `am1346043_class_enum_images` (
  `image_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `image_url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `am1346043_class_enum_images` (`image_id`, `image_url`)
VALUES
	(1,'http://animage.jpg');


# Dump of table am1346043_class_xref_invserv
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_class_xref_invserv`;

CREATE TABLE `am1346043_class_xref_invserv` (
  `invserv_id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_id` mediumint(7) DEFAULT NULL,
  `service_id` smallint(5) DEFAULT NULL,
  `invserv_qty` int(5) DEFAULT NULL,
  PRIMARY KEY (`invserv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `am1346043_class_xref_invserv` (`invserv_id`, `invoice_id`, `service_id`, `invserv_qty`)
VALUES
	(1,1,1,6);


# Dump of table am1346043_pers_entity_spin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_pers_entity_spin`;

CREATE TABLE `am1346043_pers_entity_spin` (
  `spin_id` int(10) NOT NULL AUTO_INCREMENT,
  `number_id` tinyint(3) DEFAULT NULL,
  `spin_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`spin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_pers_entity_spin` (`spin_id`, `number_id`, `spin_time`)
VALUES
	(1,12,'2014-10-26 19:32:36'),
	(2,17,'2014-10-26 19:32:38'),
	(3,19,'2014-10-26 19:32:39');


# Dump of table am1346043_pers_entity_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_pers_entity_user`;

CREATE TABLE `am1346043_pers_entity_user` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(40) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_firstname` varchar(15) DEFAULT NULL,
  `user_lastname` varchar(20) DEFAULT NULL,
  `user_balance` float(9,2) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_pers_entity_user` (`user_id`, `user_email`, `user_password`, `user_firstname`, `user_lastname`, `user_balance`)
VALUES
	(1,'me@myself.com','mypass','me','myself',100.00);


# Dump of table am1346043_pers_enum_bets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_pers_enum_bets`;

CREATE TABLE `am1346043_pers_enum_bets` (
  `bet_id` mediumint(7) NOT NULL AUTO_INCREMENT,
  `bet_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`bet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_pers_enum_bets` (`bet_id`, `bet_name`)
VALUES
	(1,'su1'),
	(2,'su2'),
	(3,'su3'),
	(4,'su4'),
	(5,'su5'),
	(6,'su6'),
	(7,'su7'),
	(8,'su8'),
	(9,'su9'),
	(10,'su10'),
	(11,'su11'),
	(12,'su12'),
	(13,'su13'),
	(14,'su14'),
	(15,'su15'),
	(16,'su16'),
	(17,'su17'),
	(18,'su18'),
	(19,'su19'),
	(20,'su20'),
	(21,'su21'),
	(22,'su22'),
	(23,'su23'),
	(24,'su24'),
	(25,'su25'),
	(26,'su26'),
	(27,'su27'),
	(28,'su28'),
	(29,'su29'),
	(30,'su30'),
	(31,'su31'),
	(32,'su32'),
	(33,'su33'),
	(34,'su34'),
	(35,'su35'),
	(36,'su36'),
	(37,'su0'),
	(38,'su00'),
	(39,'sp1-2'),
	(40,'sp2-3'),
	(41,'sp4-5'),
	(42,'sp5-6');


# Dump of table am1346043_pers_enum_numbers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_pers_enum_numbers`;

CREATE TABLE `am1346043_pers_enum_numbers` (
  `number_id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `number_name` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`number_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_pers_enum_numbers` (`number_id`, `number_name`)
VALUES
	(1,'1'),
	(2,'2'),
	(3,'3'),
	(4,'4'),
	(5,'5'),
	(6,'6'),
	(7,'7'),
	(8,'8'),
	(9,'9'),
	(10,'10'),
	(11,'11'),
	(12,'12'),
	(13,'13'),
	(14,'14'),
	(15,'15'),
	(16,'16'),
	(17,'17'),
	(18,'18'),
	(19,'19'),
	(20,'20'),
	(21,'21'),
	(22,'22'),
	(23,'23'),
	(24,'24'),
	(25,'25'),
	(26,'26'),
	(27,'27'),
	(28,'28'),
	(29,'29'),
	(30,'30'),
	(31,'31'),
	(32,'32'),
	(33,'33'),
	(34,'34'),
	(35,'35'),
	(36,'36'),
	(37,'0'),
	(38,'00');

# Dump of table am1346043_pers_xref_number_bet
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_pers_xref_number_bet`;

CREATE TABLE `am1346043_pers_xref_number_bet` (
  `betnum_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `number_id` smallint(5) DEFAULT NULL,
  `bet_id` mediumint(7) DEFAULT NULL,
  `payout` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`betnum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `am1346043_pers_xref_number_bet` (`betnum_id`, `number_id`, `bet_id`, `payout`)
VALUES
	(1,1,1,35),
	(2,2,2,35),
	(3,3,3,35),
	(4,4,4,35),
	(5,5,5,35),
	(6,6,6,35),
	(7,7,7,35),
	(8,8,8,35),
	(9,9,9,35),
	(10,10,10,35),
	(11,11,11,35),
	(12,12,12,35),
	(13,13,13,35),
	(14,14,14,35),
	(15,15,15,35),
	(16,16,16,35),
	(17,17,17,35),
	(18,18,18,35),
	(19,19,19,35),
	(20,20,20,35),
	(21,21,21,35),
	(22,22,22,35),
	(23,23,23,35),
	(24,24,24,35),
	(25,25,25,35),
	(26,26,26,35),
	(27,27,27,35),
	(28,28,28,35),
	(29,29,29,35),
	(30,30,30,35),
	(31,31,31,35),
	(32,32,32,35),
	(33,33,33,35),
	(34,34,34,35),
	(35,35,35,35),
	(36,36,36,35),
	(37,37,37,35),
	(38,38,38,35);


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
