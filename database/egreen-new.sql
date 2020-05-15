CREATE DATABASE  IF NOT EXISTS `egreen-new` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `egreen-new`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: localhost    Database: egreen-new
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.8-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `crops`
--

DROP TABLE IF EXISTS `crops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crops` (
  `crop_id` int(11) NOT NULL AUTO_INCREMENT,
  `cropname` varchar(45) NOT NULL,
  `timeline_id` int(11) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`crop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crops`
--

LOCK TABLES `crops` WRITE;
/*!40000 ALTER TABLE `crops` DISABLE KEYS */;
INSERT INTO `crops` VALUES (1,'Tomato',1,1),(2,'Chilli',2,1),(3,'Potato',3,1),(4,'Ladies Fingers',4,1),(5,'Brinjol',5,1),(6,'Banana',6,1),(7,'Long Beans',9,1),(8,'Papaw',0,1),(9,'Mango',8,1),(10,'Avacado',0,1),(11,'Spinach',0,1),(12,'Test',7,1),(13,'Anona(Sand)',0,1),(14,'Dragon Fruit',0,1),(15,'Ginger',0,1),(16,'Pineapple',0,1),(17,'Bitter Gourd',0,1),(18,'Garlic',0,1);
/*!40000 ALTER TABLE `crops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `districts` (
  `district_id` tinyint(2) NOT NULL AUTO_INCREMENT,
  `dis_name` varchar(20) NOT NULL,
  `province_id` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`district_id`,`province_id`),
  KEY `fk_districts_provinces1_idx` (`province_id`),
  CONSTRAINT `fk_districts_provinces1` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`province_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` VALUES (1,'Matale',1,1),(2,'Kandy',1,1),(3,'Nuwara Eliya ',1,1),(4,'Trincomalee',2,1),(5,'Batticaloa',2,1),(6,'Ampara',2,1),(7,'Jaffna',3,1),(8,'Kilinochchi',3,1),(9,'Mannar',3,1),(10,'Mullaitivu',3,1),(11,'Vavuniya',3,1),(12,'Hambantota',4,1),(13,'Matara',4,1),(14,'Galle',4,1),(15,'Gampaha',5,1),(16,'Colombo',5,1),(17,'Kalutara',5,1),(18,'Puttalam',6,1),(19,'Kurunegala',6,1),(20,'Anuradhapura',7,1),(21,'Polonnaruwa',7,1),(22,'Badulla',8,1),(23,'Monaragala',8,1),(24,'Kegalle',9,1),(25,'Ratnapura',9,1);
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ineedy_posts`
--

DROP TABLE IF EXISTS `ineedy_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ineedy_posts` (
  `inp_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `jentry_id` int(11) NOT NULL,
  PRIMARY KEY (`inp_id`,`jentry_id`),
  KEY `fk_ineedy_posts_journal_entries1_idx` (`jentry_id`),
  CONSTRAINT `fk_ineedy_posts_journal_entries1` FOREIGN KEY (`jentry_id`) REFERENCES `journal_entries` (`jentry_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ineedy_posts`
--

LOCK TABLES `ineedy_posts` WRITE;
/*!40000 ALTER TABLE `ineedy_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `ineedy_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inp_replies`
--

DROP TABLE IF EXISTS `inp_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inp_replies` (
  `inpr_id` int(11) NOT NULL AUTO_INCREMENT,
  `inpr_description` varchar(300) NOT NULL,
  `inpr_image` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `inp_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`inpr_id`,`inp_id`,`user_id`),
  KEY `fk_inp_replies_ineedy_posts1_idx` (`inp_id`),
  KEY `fk_inp_replies_users1_idx` (`user_id`),
  CONSTRAINT `fk_inp_replies_ineedy_posts1` FOREIGN KEY (`inp_id`) REFERENCES `ineedy_posts` (`inp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inp_replies`
--

LOCK TABLES `inp_replies` WRITE;
/*!40000 ALTER TABLE `inp_replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `inp_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_nature`
--

DROP TABLE IF EXISTS `item_nature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_nature` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_nature` varchar(50) NOT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_nature`
--

LOCK TABLES `item_nature` WRITE;
/*!40000 ALTER TABLE `item_nature` DISABLE KEYS */;
INSERT INTO `item_nature` VALUES (1,'Seed Packet'),(2,'Plant/Herb'),(3,'Branch'),(4,'Trunk'),(5,'Leave'),(6,'Root'),(7,'Capsule');
/*!40000 ALTER TABLE `item_nature` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journal_entries`
--

DROP TABLE IF EXISTS `journal_entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `journal_entries` (
  `jentry_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `noofgermin` tinyint(3) NOT NULL,
  `is_watered` tinyint(1) DEFAULT NULL,
  `is_fertilized` tinyint(1) DEFAULT NULL,
  `je_descript` varchar(300) NOT NULL,
  `je_image` varchar(50) NOT NULL,
  `journal_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `last_updated` datetime NOT NULL,
  `shared_as_np` tinyint(1) NOT NULL DEFAULT '0',
  `shared_as_inp` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jentry_id`,`journal_id`),
  KEY `fk_journal_entries_journals1_idx` (`journal_id`),
  CONSTRAINT `fk_journal_entries_journals1` FOREIGN KEY (`journal_id`) REFERENCES `journals` (`journal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journal_entries`
--

LOCK TABLES `journal_entries` WRITE;
/*!40000 ALTER TABLE `journal_entries` DISABLE KEYS */;
INSERT INTO `journal_entries` VALUES (1,'2019-03-03 12:21:49',5,1,1,'I water the plants-j','../images/jrnimg/Screenshot (989).png',3,1,'2019-03-04 08:57:50',1,0),(2,'2019-03-16 11:50:40',8,1,1,'I put 8 seeds to be soaked.','../images/jrnimg/author-img1.jpg',5,1,'0000-00-00 00:00:00',1,0),(3,'2019-03-24 11:15:32',7,1,0,'bbgvrfvdcd','../images/jrnimg/author-img1.jpg',6,1,'0000-00-00 00:00:00',1,0),(4,'2019-06-16 11:03:09',5,1,0,'hghggggutut','../images/jrnimg/author-img1.jpg',7,1,'0000-00-00 00:00:00',1,0),(5,'2019-10-14 13:31:25',2,1,1,'This is a test des1','../images/jrnimg/Screenshot (1148).png',4,1,'0000-00-00 00:00:00',0,0),(6,'2020-02-23 17:55:05',10,1,1,'10 polythene bags created for 10 seeds. Buried each one per bag.','../images/jrnimg/author-img1.jpg',8,1,'0000-00-00 00:00:00',0,0);
/*!40000 ALTER TABLE `journal_entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journals`
--

DROP TABLE IF EXISTS `journals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `journals` (
  `journal_id` int(11) NOT NULL AUTO_INCREMENT,
  `journal_name` varchar(45) NOT NULL,
  `start_date` datetime NOT NULL,
  `is_closed` tinyint(1) NOT NULL DEFAULT '0',
  `noofgermi` tinyint(3) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `crop_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`journal_id`,`user_id`,`crop_id`,`region_id`),
  KEY `fk_journals_crops1_idx` (`crop_id`),
  KEY `fk_journals_regions1_idx` (`region_id`),
  KEY `fk_journals_users1_idx` (`user_id`),
  CONSTRAINT `fk_journals_crops1` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`crop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_journals_regions1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journals`
--

LOCK TABLES `journals` WRITE;
/*!40000 ALTER TABLE `journals` DISABLE KEYS */;
INSERT INTO `journals` VALUES (3,'My first','2019-03-18 11:26:25',0,5,1,1,1,1),(4,'My second','2019-03-19 11:27:11',0,6,1,2,2,1),(5,'My tomato 1','2019-03-20 11:41:06',0,8,9,1,4,1),(6,'fdffgg','2019-03-24 11:13:44',0,7,2,3,1,1),(7,'test123','2019-06-16 10:59:36',0,5,2,12,6,1),(8,'Long Bean 2020','2020-02-23 17:48:34',0,10,1,7,1,1),(9,'LongBean2','2020-05-12 17:29:34',0,26,1,7,1,1);
/*!40000 ALTER TABLE `journals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `normal_posts`
--

DROP TABLE IF EXISTS `normal_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `normal_posts` (
  `np_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_date` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `jentry_id` int(11) NOT NULL,
  PRIMARY KEY (`np_id`,`jentry_id`),
  KEY `fk_normal_posts_journal_entries1_idx` (`jentry_id`),
  CONSTRAINT `fk_normal_posts_journal_entries1` FOREIGN KEY (`jentry_id`) REFERENCES `journal_entries` (`jentry_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `normal_posts`
--

LOCK TABLES `normal_posts` WRITE;
/*!40000 ALTER TABLE `normal_posts` DISABLE KEYS */;
INSERT INTO `normal_posts` VALUES (1,'2019-03-14 18:20:31',1,1),(2,'2019-03-16 11:51:02',1,2),(3,'2019-03-24 11:15:49',1,3),(4,'2019-06-16 11:03:37',1,4);
/*!40000 ALTER TABLE `normal_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `journal_id` int(11) NOT NULL,
  `tle_id` int(11) NOT NULL,
  PRIMARY KEY (`notification_id`,`journal_id`,`tle_id`),
  KEY `fk_notifications_journals1_idx` (`journal_id`),
  KEY `fk_notifications_timeline_entries1_idx` (`tle_id`),
  CONSTRAINT `fk_notifications_journals1` FOREIGN KEY (`journal_id`) REFERENCES `journals` (`journal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_notifications_timeline_entries1` FOREIGN KEY (`tle_id`) REFERENCES `timeline_entries` (`tle_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES (1,1,3,3),(2,1,3,15),(3,1,3,2),(4,1,3,1),(5,1,4,26),(6,1,4,25),(7,1,4,24),(8,1,6,34),(9,1,3,7),(10,1,3,6),(11,1,3,5),(12,1,3,4),(13,1,4,28),(14,1,4,27),(15,1,6,38),(16,1,6,37),(17,1,6,36),(18,1,6,35),(19,0,3,19),(20,0,3,14),(21,0,3,13),(22,1,4,30),(23,1,4,29),(24,0,3,10),(25,1,4,32),(26,1,4,31),(27,0,3,12),(28,0,3,11),(29,0,3,9),(30,0,3,20),(31,0,3,23),(32,0,3,16),(33,0,3,22),(34,0,3,21),(35,0,3,18),(36,0,3,17),(37,1,4,33),(38,1,7,50),(39,0,8,51),(40,0,8,52),(41,0,9,51);
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `np_replies`
--

DROP TABLE IF EXISTS `np_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `np_replies` (
  `npr_id` int(11) NOT NULL AUTO_INCREMENT,
  `npr_description` varchar(300) NOT NULL,
  `npr_image` varchar(45) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `np_id` int(11) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`npr_id`,`np_id`,`user_id`),
  KEY `fk_np_replies_normal_posts1_idx` (`np_id`),
  KEY `fk_np_replies_users1_idx` (`user_id`),
  CONSTRAINT `fk_np_replies_normal_posts1` FOREIGN KEY (`np_id`) REFERENCES `normal_posts` (`np_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `np_replies`
--

LOCK TABLES `np_replies` WRITE;
/*!40000 ALTER TABLE `np_replies` DISABLE KEYS */;
INSERT INTO `np_replies` VALUES (1,'Good. I like it.','',1,1,1),(2,'How do you make compost?',NULL,1,1,1),(3,'What a nice tomato.',NULL,1,1,1),(4,'Like to visit your garden','../images/npcimg/Screenshot (1107).png',1,2,1),(5,'Very good',NULL,1,2,1),(6,'Please send me some seeds.',NULL,1,2,14),(7,'It is nice to see.',NULL,1,1,14),(8,'hhcfgfgfgfc',NULL,1,4,2),(9,'It is a good attempt..!',NULL,1,4,1);
/*!40000 ALTER TABLE `np_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `provinces`
--

DROP TABLE IF EXISTS `provinces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provinces` (
  `province_id` tinyint(1) NOT NULL,
  `pro_name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`province_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `provinces`
--

LOCK TABLES `provinces` WRITE;
/*!40000 ALTER TABLE `provinces` DISABLE KEYS */;
INSERT INTO `provinces` VALUES (1,'Central',1),(2,'Eastern',1),(3,'Northern',1),(4,'Southern',1),(5,'Western',1),(6,'North Western',1),(7,'North Central',1),(8,'Uva Province',1),(9,'Sabaragamuwa',1);
/*!40000 ALTER TABLE `provinces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL AUTO_INCREMENT,
  `town` varchar(45) NOT NULL,
  `district_id` tinyint(2) NOT NULL,
  `province_id` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`region_id`,`district_id`,`province_id`),
  KEY `fk_regions_districts1_idx` (`district_id`,`province_id`),
  CONSTRAINT `fk_regions_districts1` FOREIGN KEY (`district_id`, `province_id`) REFERENCES `districts` (`district_id`, `province_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regions`
--

LOCK TABLES `regions` WRITE;
/*!40000 ALTER TABLE `regions` DISABLE KEYS */;
INSERT INTO `regions` VALUES (1,'Moratuwa',16,5,1),(2,'Panadura',17,5,1),(3,'Malwana',15,5,1),(4,'Awiththawa',17,5,1),(5,'Piliyandala',16,5,1),(6,'Galle',14,4,1);
/*!40000 ALTER TABLE `regions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_type`
--

DROP TABLE IF EXISTS `role_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_type` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(50) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_type`
--

LOCK TABLES `role_type` WRITE;
/*!40000 ALTER TABLE `role_type` DISABLE KEYS */;
INSERT INTO `role_type` VALUES (1,'Administrator'),(2,'Planter'),(3,'Instructor'),(4,'Shopkeeper'),(5,'Helper'),(6,'Planter+Instructor'),(7,'Planter+Shopkeeper'),(8,'Planter+Helper'),(9,'Instructor+Shopkeeper'),(10,'Instructor+Helper'),(11,'Shopkeeper+Helper'),(12,'Planter+Instructor+Shopkeeper'),(13,'Planter+Instructor+Helper'),(14,'Planter+Shopkeeper+Helper'),(15,'Instructor+Shopkeeper+Helper'),(16,'Planter+Instructor+Shopkeeper+Helper');
/*!40000 ALTER TABLE `role_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_item`
--

DROP TABLE IF EXISTS `shop_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shop_item` (
  `si_id` int(11) NOT NULL AUTO_INCREMENT,
  `si_image` varchar(50) NOT NULL,
  `si_sell_meth` varchar(50) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `crop_id` int(11) NOT NULL,
  `in_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  PRIMARY KEY (`si_id`,`crop_id`,`in_id`,`shop_id`),
  KEY `fk_shop_item_crops1_idx` (`crop_id`),
  KEY `fk_shop_item_item_nature1_idx` (`in_id`),
  KEY `fk_shop_item_shops1_idx` (`shop_id`),
  CONSTRAINT `fk_shop_item_crops1` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`crop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_shop_item_item_nature1` FOREIGN KEY (`in_id`) REFERENCES `item_nature` (`in_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_shop_item_shops1` FOREIGN KEY (`shop_id`) REFERENCES `shops` (`shop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_item`
--

LOCK TABLES `shop_item` WRITE;
/*!40000 ALTER TABLE `shop_item` DISABLE KEYS */;
INSERT INTO `shop_item` VALUES (1,'../images/itemimg/Screenshot (989).png','Rs.10.00/pckt',1,1,1,1,1),(2,'../images/itemimg/Screenshot (1009).png','Rs.15.00/plant',1,1,1,2,1);
/*!40000 ALTER TABLE `shop_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shops`
--

DROP TABLE IF EXISTS `shops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shops` (
  `shop_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `shop_name` varchar(45) NOT NULL,
  `shop_address` varchar(120) NOT NULL,
  `telephone` tinytext,
  `is_closed` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`shop_id`,`user_id`),
  KEY `fk_shops_users1_idx` (`user_id`),
  CONSTRAINT `fk_shops_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shops`
--

LOCK TABLES `shops` WRITE;
/*!40000 ALTER TABLE `shops` DISABLE KEYS */;
INSERT INTO `shops` VALUES (1,1,'Seed Hut','No. 10, Galle Road, Moratuwa','0773333333',0,1),(2,1,'My little veg','No. 15, Galle Road, Panadura','0382569878',0,1);
/*!40000 ALTER TABLE `shops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timeline_entries`
--

DROP TABLE IF EXISTS `timeline_entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timeline_entries` (
  `tle_id` int(11) NOT NULL AUTO_INCREMENT,
  `day_no` smallint(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `last_update` datetime NOT NULL,
  `timeline_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tle_id`,`timeline_id`),
  KEY `fk_timeline_entries_timelines1_idx` (`timeline_id`),
  CONSTRAINT `fk_timeline_entries_timelines1` FOREIGN KEY (`timeline_id`) REFERENCES `timelines` (`timeline_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timeline_entries`
--

LOCK TABLES `timeline_entries` WRITE;
/*!40000 ALTER TABLE `timeline_entries` DISABLE KEYS */;
INSERT INTO `timeline_entries` VALUES (1,1,'../images/tlimg/T1.JPG','Put seeds to be soaked.','2019-03-11 09:18:52','2019-03-19 07:28:54',1,1),(2,2,'../images/tlimg/author-img1.jpg','After at least 12-15 hours put seeds to a nursery.','2019-03-12 09:18:52','2019-03-19 07:34:46',1,1),(3,6,'../images/tlimg/author-img1.jpg','Put some water to the nursery. If needed put compost.','2019-03-14 09:18:52','2019-03-19 07:40:32',1,1),(4,10,'../images/tlimg/transplanting-tomatoes.jpg','Plant the little plants in pots or land.','2019-03-04 09:18:52','2019-03-19 07:49:39',1,1),(5,11,'../images/tlimg/author-img1.jpg','Put sufficient water and compost to each plant.','2019-03-04 09:18:52','2019-03-19 07:51:58',1,1),(6,15,'../images/tlimg/propagat.jpg','Now average height is between12-18 cm.','2019-03-04 09:18:52','2019-03-19 07:55:24',1,1),(7,16,'../images/tlimg/author-img1.jpg','Water the plants. They are growing now.','2019-03-04 09:18:52','2019-03-19 07:57:38',1,1),(9,35,'../images/tlimg/author-img1.jpg','You know now, how to water and fertilize the plants. Care about them.','2019-03-04 09:18:52','2019-03-19 08:09:23',1,1),(10,30,'../images/tlimg/tomato-buds-MNFX3J.jpg','Buds have blossomed. They are yellow in color.','2019-03-04 09:18:52','2019-03-19 08:07:14',1,1),(11,36,'../images/tlimg/author-img1.jpg','Little fruits can be seen. Yellow-green in color.','2019-03-04 09:18:52','2019-03-19 08:10:32',1,1),(12,38,'../images/tlimg/tomato20110503_45z.jpg','Fruits are growing. Color is changing to pink.','2019-03-04 09:18:52','2019-03-19 08:13:07',1,1),(13,20,'../images/tlimg/author-img1.jpg','Water. Height 20-25 cm. Ready to inflorescence.','2019-03-04 09:18:52','2019-03-19 08:00:06',1,1),(14,25,'../images/tlimg/buds-MT9A33.jpg','You can see some little buds.','2019-03-04 09:18:52','2019-03-19 08:02:50',1,1),(15,5,'../images/tlimg/nursery-tomato.jpg','Now you can see germination of seeds. (1-2cm)','2019-03-13 09:18:52','2019-03-19 07:37:29',1,1),(16,48,'../images/tlimg/Screenshot (1384).png','Awe der hyt','2019-03-04 09:18:52','2019-03-19 08:25:54',1,1),(17,42,'../images/tlimg/author-img1.jpg','Fruits changing their color from pink to red.','2019-03-04 09:18:52','2019-03-19 08:18:47',1,1),(18,45,'../images/tlimg/index.jpg','Now you are ready to first harvesting.','2019-03-04 09:18:52','2019-03-19 08:23:06',1,1),(19,26,'../images/tlimg/author-img1.jpg','Put water and sufficient compost.','2019-03-04 09:18:52','2019-03-19 08:04:25',1,1),(20,50,'../images/tlimg/Screenshot (1364).png','This is the perfect update','2019-02-24 20:20:10','2019-03-19 08:27:32',1,1),(21,46,'../images/tlimg/author-img1.jpg','WcmrjjaRxQyyyyyuuuuuuuuuuuuu','2019-03-04 09:18:52','2019-03-19 08:24:24',1,1),(22,47,'../images/tlimg/author-img1.jpg','ffffffffffffffffffffffffffff','2019-03-04 09:18:52','2019-03-19 08:25:34',1,1),(23,49,'../images/tlimg/author-img1.jpg','2 is the identity ','2019-03-04 09:18:52','2019-03-19 08:26:54',1,1),(24,1,'../images/tlimg/Screenshot (989).png','Soak the seeds. Prepare the land.','2019-03-19 08:29:42','0000-00-00 00:00:00',2,1),(25,2,'../images/tlimg/Screenshot (1009).png','Put seed to a nursery.','2019-03-19 09:02:42','0000-00-00 00:00:00',2,1),(26,5,'../images/tlimg/author-img1.jpg','Put some water.','2019-03-19 10:48:52','0000-00-00 00:00:00',2,1),(27,9,'../images/tlimg/author-img1.jpg','Two little green leaves can be seen.','2019-03-19 10:55:31','0000-00-00 00:00:00',2,1),(28,14,'../images/tlimg/Screenshot (1087).png','Replant the little plants in the field. (land or pots)','2019-03-19 10:56:43','0000-00-00 00:00:00',2,1),(29,20,'../images/tlimg/author-img1.jpg','Water and fertilize well to the plants. Height 10cm.','2019-03-19 10:58:44','0000-00-00 00:00:00',2,1),(30,25,'../images/tlimg/author-img1.jpg','Flowers can be seen.','2019-03-19 10:59:13','0000-00-00 00:00:00',2,1),(31,30,'../images/tlimg/Screenshot (1107).png','You can see little capsules. Height 30cm','2019-03-19 11:01:54','0000-00-00 00:00:00',2,1),(32,32,'../images/tlimg/author-img1.jpg','Water once per two days and put compost as needed.','2019-03-19 11:02:45','0000-00-00 00:00:00',2,1),(33,40,'../images/tlimg/author-img1.jpg','You can get your first harvest.','2019-03-19 11:03:14','0000-00-00 00:00:00',2,1),(34,1,'../images/tlimg/author-img1.jpg','Put seeds to be soaked.','2019-03-19 11:07:01','0000-00-00 00:00:00',3,1),(35,2,'../images/tlimg/Screenshot (1108).png','Put seeds to a nursery.','2019-03-19 11:07:38','0000-00-00 00:00:00',3,1),(36,5,'../images/tlimg/author-img1.jpg','Water well. Put compost.','2019-03-19 11:08:02','0000-00-00 00:00:00',3,1),(37,10,'../images/tlimg/Screenshot (1126).png','Flowers can be seen.','2019-03-19 11:08:33','0000-00-00 00:00:00',3,1),(38,15,'../images/tlimg/author-img1.jpg','Get your first harvest.','2019-03-19 11:08:56','0000-00-00 00:00:00',3,1),(39,1,'../images/tlimg/author-img1.jpg','Put seeds to be soaked.','2019-03-19 11:11:46','0000-00-00 00:00:00',4,1),(40,2,'../images/tlimg/author-img1.jpg','Put seeds in to a nursery.','2019-03-19 11:12:10','0000-00-00 00:00:00',4,1),(41,5,'../images/tlimg/author-img1.jpg','Water and fertilize.','2019-03-19 11:12:43','0000-00-00 00:00:00',4,1),(42,10,'../images/tlimg/Screenshot (1141).png','Water and fertilize.','2019-03-19 11:13:48','0000-00-00 00:00:00',4,1),(43,15,'../images/tlimg/Screenshot (1142).png','Get the first harvest to the home.','2019-03-19 11:14:22','0000-00-00 00:00:00',4,1),(44,1,'../images/tlimg/Screenshot (1143).png','Soak the seeds for 12 hours.','2019-03-19 11:15:30','0000-00-00 00:00:00',5,1),(45,3,'../images/tlimg/author-img1.jpg','Plants the seeds in the nursery.','2019-03-19 11:15:58','0000-00-00 00:00:00',5,1),(46,6,'../images/tlimg/Screenshot (1149).png','You can see little green leaves.','2019-03-19 11:18:52','0000-00-00 00:00:00',5,1),(47,10,'../images/tlimg/author-img1.jpg','Plant them in the field.','2019-03-19 11:19:14','0000-00-00 00:00:00',5,1),(48,16,'../images/tlimg/Screenshot (1151).png','You can see flowers.','2019-03-19 11:20:15','0000-00-00 00:00:00',5,1),(49,20,'../images/tlimg/Screenshot (1152).png','Get the first harvest.','2019-03-19 11:20:52','0000-00-00 00:00:00',5,1),(50,1,'../images/tlimg/egreendfd.jpg','ffgfggfg','2019-06-16 10:55:26','0000-00-00 00:00:00',7,1),(51,1,'../images/tlimg/author-img1.jpg','Put seeds to be soaked. Create a nursery with compost fertilizers.','2020-02-23 17:43:54','2020-02-23 17:44:15',9,1),(52,3,'../images/tlimg/author-img1.jpg','Two halves can be seen from every seed or some of them.','2020-02-23 17:47:15','0000-00-00 00:00:00',9,1);
/*!40000 ALTER TABLE `timeline_entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timelines`
--

DROP TABLE IF EXISTS `timelines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timelines` (
  `timeline_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `crop_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`timeline_id`,`crop_id`),
  KEY `fk_timelines_crops1_idx` (`crop_id`),
  CONSTRAINT `fk_timelines_crops1` FOREIGN KEY (`crop_id`) REFERENCES `crops` (`crop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timelines`
--

LOCK TABLES `timelines` WRITE;
/*!40000 ALTER TABLE `timelines` DISABLE KEYS */;
INSERT INTO `timelines` VALUES (1,1,'2019-02-19 22:51:15',1,1),(2,1,'2019-02-19 22:51:56',2,1),(3,13,'2019-02-19 22:53:42',3,1),(4,13,'2019-02-28 08:08:48',4,1),(5,14,'2019-02-28 08:16:33',5,1),(6,1,'2019-03-24 11:04:53',6,1),(7,1,'2019-06-16 10:53:21',12,1),(8,3,'2019-08-24 20:16:55',9,1),(9,1,'2020-02-23 17:38:19',7,1);
/*!40000 ALTER TABLE `timelines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(10) unsigned NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(70) NOT NULL,
  `passwd_salt` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `last_logged_date` datetime NOT NULL,
  `profile_image` varchar(45) DEFAULT NULL,
  `ins_experience` tinyint(2) DEFAULT NULL,
  `ins_certificate` varchar(45) DEFAULT NULL,
  `shop_experience` tinyint(2) DEFAULT NULL,
  `shop_certificate` varchar(45) DEFAULT NULL,
  `help_experience` tinyint(2) DEFAULT NULL,
  `help_certificate` varchar(45) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_approved` varchar(45) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_users_role_type1_idx` (`role_id`),
  CONSTRAINT `fk_users_role_type1` FOREIGN KEY (`role_id`) REFERENCES `role_type` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Kalyan','Chamarika','kal123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2020-05-12 17:16:03','images/user.png',0,'',0,'',0,'',1,1,'1',1),(2,'Imali','Upsala','ima123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2019-08-24 15:12:45','images/user.png',0,'',0,'',0,'',2,1,'1',NULL),(3,'Nadeera','Lakshan','nad123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2019-08-24 20:04:33','images/user.png',6,'images/inscert/Screenshot (1128).png',0,'',0,'',3,1,'1',NULL),(4,'Rukmal','Kasun','ruk123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2019-08-24 20:53:10','images/user.png',0,'',7,'images/shocert/Screenshot (1126).png',0,'',4,1,'1',NULL),(5,'Randil','Dilshan','ran123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2019-08-24 20:54:03','images/user.png',0,'',0,'',7,'images/helcert/Screenshot (1126).png',5,1,'1',NULL),(6,'Jayana','Prashadini','jay123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2019-08-24 21:11:26','images/user.png',2,'images/inscert/Screenshot (1145).png',3,'images/shocert/Screenshot (1146).png',4,'images/helcert/Screenshot (1147).png',16,1,'1',NULL),(7,'Sahan','Dilshan','sah123','16c95c159a667573552fb5c57fe6a246d43ea0d66997020a8b6b3f055585656a','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',0,'',0,'',0,'',2,1,'0',NULL),(8,'Chandima','Lakshani','chan123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',0,'',0,'',0,'',2,1,'0',NULL),(9,'Chathura','Vimukthi','cha123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2019-03-28 20:20:55','images/user.png',0,'',0,'',0,'',2,1,'1',NULL),(10,'Narmada','Gunasekara','nar123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',9,'images/inscert/Screenshot (989).png',0,'',0,'',6,1,'0',NULL),(11,'Deelaka','Lakna','dee123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',0,'',3,'images/shocert/Screenshot (1009).png',0,'',7,1,'0',NULL),(12,'Oshan','Chamupathi','osh123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',0,'',0,'',1,'images/helcert/Screenshot (1107).png',8,1,'0',NULL),(13,'Achala','Meddegama','ach123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2019-04-04 15:03:10','images/user.png',12,'images/inscert/Screenshot (1087).png',7,'images/shocert/Screenshot (1130).png',0,'',9,1,'1',NULL),(14,'Lakshika','Abeykoon','lak123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'2019-03-23 16:05:22','images/user.png',2,'images/inscert/Screenshot (1144).png',0,'',3,'images/helcert/Screenshot (1198).png',10,1,'1',NULL),(15,'Prabodha','Dissanayake','pra123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',0,'',1,'images/shocert/Screenshot (1224).png',0,'images/helcert/Screenshot (1223).png',11,1,'1',NULL),(16,'Malith','Chamara','mal123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',5,'images/inscert/Screenshot (1198).png',6,'images/shocert/Screenshot (1334).png',0,'',12,1,'0',NULL),(17,'Charith','Dhanushka','char123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',4,'images/inscert/Screenshot (1153).png',0,'',3,'images/helcert/Screenshot (1195).png',13,1,'0',NULL),(18,'Suvini','Dulanga','suv123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',0,'',3,'images/shocert/Screenshot (1328).png',0,'images/helcert/Screenshot (1334).png',14,1,'0',NULL),(19,'Lahiru','Nuwansara','lah123','e828298c4bfe7959b039fbff04361134453fbb00c88bb8a910100ed49f6987ac','',NULL,NULL,'0000-00-00 00:00:00','images/user.png',4,'images/inscert/Screenshot (1148).png',5,'images/shocert/Screenshot (1197).png',3,'images/helcert/Screenshot (1336).png',15,1,'0',NULL),(20,'Isuru','Gihan','isu123','$2a$05$xbOahUrrQc63ZdRY5ZJKZ.qLiS.rIAEpNgr7vqiR9qa2e.A.fGK22','xbOahUrrQc63ZdRY5ZJKZ',NULL,NULL,'2019-06-15 09:24:01','images/user.png',0,'',0,'',0,'',2,1,'1',NULL),(21,'llll','kkkk','isu123','$2a$05$kTa37WOZa51/kPsbLFLJR.nsrd7JbH.JLiu1FXwMG8mRCYemsd8F.','kTa37WOZa51/kPsbLFLJR',NULL,NULL,'0000-00-00 00:00:00','images/user.png',0,'',0,'',0,'',2,1,'0',NULL),(22,'fytfyfy','ctdyty','lah123','$2a$05$5XpFIs6sSvRoZuU5oy4Ic.5.2mLsZg70MEGxCByw8HgJLNGkiUojS','5XpFIs6sSvRoZuU5oy4Ic',NULL,NULL,'0000-00-00 00:00:00','images/user.png',0,'',0,'',0,'',2,1,'0',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-15 13:26:49
