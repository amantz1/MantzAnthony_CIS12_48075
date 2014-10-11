# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.6.20)
# Database: test
# Generation Time: 2014-10-11 21:21:03 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table entity_assignments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `entity_assignments`;

CREATE TABLE `entity_assignments` (
  `ass_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `points_possible` tinyint(3) DEFAULT NULL,
  `weight` tinyint(3) DEFAULT NULL,
  `description` longtext,
  `start_date` date DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  PRIMARY KEY (`ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `entity_assignments` WRITE;
/*!40000 ALTER TABLE `entity_assignments` DISABLE KEYS */;

INSERT INTO `entity_assignments` (`ass_id`, `name`, `points_possible`, `weight`, `description`, `start_date`, `due_date`)
VALUES
	(1,'Assignment 1',100,NULL,'Ch1 Scripts','2014-08-27','2014-09-03 00:00:00'),
	(2,'Truth Table',100,NULL,'Truth Table','2014-09-03','2014-09-10 00:00:00'),
	(3,'Lab 1',100,NULL,'Codecademy 1-2','2014-09-03','2014-09-10 00:00:00'),
	(4,'Lab 2',100,NULL,'Codecademy 3-4','2014-09-10','2014-09-17 00:00:00'),
	(5,'Assignment 2',100,NULL,'EM Spectrum pt 1','2014-09-10','2014-09-17 00:00:00'),
	(6,'Assignment 3',100,NULL,'Flowcharts','2014-09-19','2014-09-17 00:00:00'),
	(7,'Lab 3',100,NULL,'Codecademy 5-6','2014-09-17','2014-09-24 00:00:00'),
	(8,'Assignment 4',100,NULL,'EM Spectrum pt 2','2014-09-24','2014-09-29 00:00:00'),
	(9,'Lab 4',100,NULL,'Codecademy 7-8','2014-09-29','2014-10-01 00:00:00'),
	(10,'Assignment 5',100,NULL,'Savings Table','2014-10-01','2014-10-03 00:00:00'),
	(11,'Assignment 6',100,NULL,'Gradebook Database','2014-10-03','2014-10-08 00:00:00'),
	(12,'Assignment 1',50,NULL,'Basics','2014-09-04','2014-09-11 00:00:00'),
	(13,'Assignment 2',50,NULL,'Links','2014-09-11','2014-09-18 00:00:00'),
	(14,'Assignment 3',50,NULL,'CSS','2014-09-18','2014-10-02 00:00:00'),
	(15,'Assignment 4',50,NULL,'CSS Layouts','2014-10-02','2014-10-09 00:00:00'),
	(16,'Assignment 5',50,NULL,'Tables','2014-10-09','2014-10-16 00:00:00');

/*!40000 ALTER TABLE `entity_assignments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table entity_class
# ------------------------------------------------------------

DROP TABLE IF EXISTS `entity_class`;

CREATE TABLE `entity_class` (
  `section_id` int(10) NOT NULL,
  `time` time DEFAULT NULL,
  `bldg` tinyint(3) DEFAULT NULL,
  `day_of_Week` tinyint(3) DEFAULT NULL,
  `room` smallint(5) DEFAULT NULL,
  `semester` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `entity_class` WRITE;
/*!40000 ALTER TABLE `entity_class` DISABLE KEYS */;

INSERT INTO `entity_class` (`section_id`, `time`, `bldg`, `day_of_Week`, `room`, `semester`)
VALUES
	(48075,'08:00:00',4,13,200,1),
	(48113,'11:10:00',4,4,200,1);

/*!40000 ALTER TABLE `entity_class` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table entity_course
# ------------------------------------------------------------

DROP TABLE IF EXISTS `entity_course`;

CREATE TABLE `entity_course` (
  `course_id` int(10) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `number` tinyint(3) DEFAULT NULL,
  `series_letter` char(1) DEFAULT NULL,
  `short_description` text,
  `description` mediumtext,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `entity_course` WRITE;
/*!40000 ALTER TABLE `entity_course` DISABLE KEYS */;

INSERT INTO `entity_course` (`course_id`, `name`, `number`, `series_letter`, `short_description`, `description`)
VALUES
	(1,'CIS',76,'B','Intro to Dreamweaver','Introduction to Dreamweaver software'),
	(2,'CIS',12,NULL,'PHP','PHP dynamic web site programming');

/*!40000 ALTER TABLE `entity_course` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table entity_instructor
# ------------------------------------------------------------

DROP TABLE IF EXISTS `entity_instructor`;

CREATE TABLE `entity_instructor` (
  `instructor_id` int(10) NOT NULL COMMENT 'Primary Key',
  `first_name` varchar(15) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `area_code` smallint(5) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `office_bldg_id` tinyint(3) DEFAULT NULL,
  `office_number` smallint(5) DEFAULT NULL,
  `department_id` tinyint(3) DEFAULT NULL,
  `discipline_id` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`instructor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `entity_instructor` WRITE;
/*!40000 ALTER TABLE `entity_instructor` DISABLE KEYS */;

INSERT INTO `entity_instructor` (`instructor_id`, `first_name`, `middle_initial`, `last_name`, `email_address`, `area_code`, `phone_number`, `office_bldg_id`, `office_number`, `department_id`, `discipline_id`)
VALUES
	(1111111,'Jim','J','Jones','jimjones@rcc.edu',951,2228260,12,223,1,1),
	(1111112,'Scott','?','Mcleod','scott.mcleod@rcc.edu',951,2228310,4,220,1,1),
	(1150258,'Mark','E','Lehr','mark.lehr@rcc.edu',951,2228260,4,222,1,2);

/*!40000 ALTER TABLE `entity_instructor` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table entity_student
# ------------------------------------------------------------

DROP TABLE IF EXISTS `entity_student`;

CREATE TABLE `entity_student` (
  `student_id` int(10) NOT NULL COMMENT 'Primary Key',
  `first_name` varchar(15) DEFAULT NULL,
  `middle_initial` char(1) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email_address` varchar(30) DEFAULT NULL,
  `area_code` smallint(5) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `major` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `entity_student` WRITE;
/*!40000 ALTER TABLE `entity_student` DISABLE KEYS */;

INSERT INTO `entity_student` (`student_id`, `first_name`, `middle_initial`, `last_name`, `email_address`, `area_code`, `phone_number`, `major`)
VALUES
	(1346043,'Anthony','J','Mantz','amantz@student.rcc.edu',909,2610416,1);

/*!40000 ALTER TABLE `entity_student` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table enum_bldg
# ------------------------------------------------------------

DROP TABLE IF EXISTS `enum_bldg`;

CREATE TABLE `enum_bldg` (
  `bldg_id` tinyint(3) NOT NULL,
  `building` varchar(20) DEFAULT NULL,
  `mneumonic` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`bldg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `enum_bldg` WRITE;
/*!40000 ALTER TABLE `enum_bldg` DISABLE KEYS */;

INSERT INTO `enum_bldg` (`bldg_id`, `building`, `mneumonic`)
VALUES
	(4,'Business Education','BE'),
	(12,'Math and Science','MAT/SCI');

/*!40000 ALTER TABLE `enum_bldg` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table enum_department
# ------------------------------------------------------------

DROP TABLE IF EXISTS `enum_department`;

CREATE TABLE `enum_department` (
  `dept_id` tinyint(3) NOT NULL,
  `department` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `enum_department` WRITE;
/*!40000 ALTER TABLE `enum_department` DISABLE KEYS */;

INSERT INTO `enum_department` (`dept_id`, `department`)
VALUES
	(1,'Business Info Systems'),
	(2,'English');

/*!40000 ALTER TABLE `enum_department` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table enum_discipline
# ------------------------------------------------------------

DROP TABLE IF EXISTS `enum_discipline`;

CREATE TABLE `enum_discipline` (
  `disc_id` tinyint(3) NOT NULL,
  `discipline` varchar(25) DEFAULT NULL,
  `menumonic` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`disc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `enum_discipline` WRITE;
/*!40000 ALTER TABLE `enum_discipline` DISABLE KEYS */;

INSERT INTO `enum_discipline` (`disc_id`, `discipline`, `menumonic`)
VALUES
	(1,'Computer Science','CSC'),
	(2,'Basket Weaving','BSW');

/*!40000 ALTER TABLE `enum_discipline` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table xref_class_assignments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `xref_class_assignments`;

CREATE TABLE `xref_class_assignments` (
  `xref_class_ass_id` int(10) NOT NULL,
  `class_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_class_ass_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `xref_class_assignments` WRITE;
/*!40000 ALTER TABLE `xref_class_assignments` DISABLE KEYS */;

INSERT INTO `xref_class_assignments` (`xref_class_ass_id`, `class_id`, `assignment_id`)
VALUES
	(1,48075,1),
	(2,48075,2),
	(3,48075,3),
	(4,48075,4),
	(5,48075,5),
	(6,48075,6),
	(7,48075,7),
	(8,48075,8),
	(9,48075,9),
	(10,48075,10),
	(11,48075,11),
	(12,48113,12),
	(13,48113,13),
	(14,48113,14),
	(15,48113,15),
	(16,48113,16);

/*!40000 ALTER TABLE `xref_class_assignments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table xref_class_course
# ------------------------------------------------------------

DROP TABLE IF EXISTS `xref_class_course`;

CREATE TABLE `xref_class_course` (
  `xref_class_course` int(10) NOT NULL,
  `class_id` int(10) DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_class_course`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `xref_class_course` WRITE;
/*!40000 ALTER TABLE `xref_class_course` DISABLE KEYS */;

INSERT INTO `xref_class_course` (`xref_class_course`, `class_id`, `course_id`)
VALUES
	(1,48075,2),
	(2,48113,1);

/*!40000 ALTER TABLE `xref_class_course` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table xref_instr_class
# ------------------------------------------------------------

DROP TABLE IF EXISTS `xref_instr_class`;

CREATE TABLE `xref_instr_class` (
  `xref_instr_class` int(10) NOT NULL,
  `instructor_id` int(10) DEFAULT NULL,
  `class_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`xref_instr_class`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `xref_instr_class` WRITE;
/*!40000 ALTER TABLE `xref_instr_class` DISABLE KEYS */;

INSERT INTO `xref_instr_class` (`xref_instr_class`, `instructor_id`, `class_id`)
VALUES
	(1,1111112,48113),
	(2,1150258,48075);

/*!40000 ALTER TABLE `xref_instr_class` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table xref_student_assignments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `xref_student_assignments`;

CREATE TABLE `xref_student_assignments` (
  `xref_stu_ass` int(10) NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `assignment_id` int(10) DEFAULT NULL,
  `score` tinyint(3) DEFAULT NULL,
  `grade` char(2) DEFAULT NULL,
  `comments` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`xref_stu_ass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `xref_student_assignments` WRITE;
/*!40000 ALTER TABLE `xref_student_assignments` DISABLE KEYS */;

INSERT INTO `xref_student_assignments` (`xref_stu_ass`, `student_id`, `assignment_id`, `score`, `grade`, `comments`)
VALUES
	(1,1346043,1,NULL,NULL,NULL),
	(2,1346043,2,NULL,NULL,NULL),
	(3,1346043,3,NULL,NULL,NULL),
	(4,1346043,4,NULL,NULL,NULL),
	(5,1346043,5,NULL,NULL,NULL),
	(6,1346043,6,NULL,NULL,NULL),
	(7,1346043,7,NULL,NULL,NULL),
	(8,1346043,8,NULL,NULL,NULL),
	(9,1346043,9,NULL,NULL,NULL),
	(10,1346043,10,NULL,NULL,NULL),
	(11,1346043,11,NULL,NULL,NULL),
	(12,1346043,12,47,NULL,NULL),
	(13,1346043,13,50,NULL,NULL),
	(14,1346043,14,49,NULL,NULL),
	(15,1346043,15,NULL,NULL,NULL),
	(16,1346043,16,NULL,NULL,NULL);

/*!40000 ALTER TABLE `xref_student_assignments` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
