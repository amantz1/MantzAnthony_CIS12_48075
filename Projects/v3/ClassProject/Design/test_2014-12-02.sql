# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.6.20)
# Database: test
# Generation Time: 2014-12-03 05:47:39 +0000
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
  `invoice_total` float(9,2) DEFAULT NULL,
  `invoice_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table am1346043_class_xref_invserv
# ------------------------------------------------------------

DROP TABLE IF EXISTS `am1346043_class_xref_invserv`;

CREATE TABLE `am1346043_class_xref_invserv` (
  `invserv_id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_id` mediumint(7) DEFAULT NULL,
  `service_id` smallint(5) DEFAULT NULL,
  `service_qty` mediumint(7) DEFAULT NULL,
  `service_price` float(8,2) DEFAULT NULL,
  PRIMARY KEY (`invserv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
