/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.0.95-log : Database - exam_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`exam_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `exam_db`;

/*Table structure for table `class1` */

DROP TABLE IF EXISTS `class1`;

CREATE TABLE `class1` (
  `class_id` int(11) NOT NULL default '0',
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `class1` */

/*Table structure for table `class_student` */

DROP TABLE IF EXISTS `class_student`;

CREATE TABLE `class_student` (
  `id` int(11) NOT NULL auto_increment,
  `class_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_student_class_student` (`student_id`),
  KEY `FK_class_class_student` (`class_id`),
  CONSTRAINT `FK_class_class_student` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  CONSTRAINT `FK_student_class_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `class_student` */

insert  into `class_student`(`id`,`class_id`,`student_id`) values (1,3,5),(2,1,5),(4,5,7),(5,3,7),(6,1,2),(7,2,2),(8,3,2),(9,4,2),(10,5,2),(11,2,6),(12,3,6),(13,4,6),(14,1,6),(15,2,9),(16,1,9),(20,5,3),(21,4,3),(22,1,4),(23,2,4),(24,5,4),(25,2,3),(26,5,1),(27,3,1),(28,1,1),(29,2,1);

/*Table structure for table `school` */

DROP TABLE IF EXISTS `school`;

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY  (`school_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `school` */

insert  into `school`(`school_id`,`name`) values (1,'North High School'),(2,'East High School'),(3,'West High School'),(4,'South High School');

/*Table structure for table `school_class` */

DROP TABLE IF EXISTS `school_class`;

CREATE TABLE `school_class` (
  `id` int(11) NOT NULL auto_increment,
  `school_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `FK_school_school_class` (`school_id`),
  KEY `FK_class_school_class` (`class_id`),
  CONSTRAINT `FK_class_school_class` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`),
  CONSTRAINT `FK_school_school_class` FOREIGN KEY (`school_id`) REFERENCES `school` (`school_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `school_class` */

insert  into `school_class`(`id`,`school_id`,`class_id`) values (1,1,5),(2,1,3),(3,1,1),(4,1,2),(5,2,1),(6,2,2),(7,2,3),(8,2,4),(9,2,5),(10,3,3),(11,3,2),(12,3,1),(13,4,5),(14,4,4),(15,4,2),(16,4,1);

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL auto_increment,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `last_login` datetime default NULL,
  `school_id` int(11) NOT NULL,
  PRIMARY KEY  (`student_id`),
  KEY `FK_school_student` (`school_id`),
  CONSTRAINT `FK_school_student` FOREIGN KEY (`school_id`) REFERENCES `school` (`school_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`student_id`,`first_name`,`last_name`,`last_login`,`school_id`) values (1,'Sarah','Geronimo','2012-07-15 12:00:00',1),(2,'Charice','Pempengco','2012-07-12 11:45:00',2),(3,'Regine','Velasquez','2012-07-12 11:45:00',4),(4,'Julie Anne','San Jose','2012-07-18 19:35:00',4),(5,'Jonalyn','Viray','2011-08-30 10:15:00',3),(6,'Daniel','Padilla','2012-06-25 17:12:00',2),(7,'Christian','Bautista','2012-07-03 08:23:00',1),(8,'Gary','Valenciano','2011-12-19 04:30:00',2),(9,'Erik','Santos','2012-07-14 16:19:00',3);

/*Table structure for table `student_list` */

DROP TABLE IF EXISTS `student_list`;

CREATE TABLE `student_list` (
  `student_id` int(11) NOT NULL auto_increment,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date_modified` datetime default NULL,
  PRIMARY KEY  (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `student_list` */

insert  into `student_list`(`student_id`,`first_name`,`last_name`,`date_modified`) values (1,'Sarah','Geronimo','2012-07-15 12:00:00'),(2,'Charice','Pempengco','2012-07-12 11:45:00'),(3,'Regine','Velasquez','2012-07-12 11:45:00'),(4,'Julie Anne','San Jose','2012-07-18 19:35:00'),(5,'Jonalyn','Viray','2011-08-30 10:15:00'),(6,'Daniel','Padilla','2012-06-25 17:12:00'),(7,'Christian','Bautista','2012-07-03 08:23:00'),(8,'Gary','Valenciano','2011-12-19 04:30:00'),(9,'Erik','Santos','2012-07-14 16:19:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
