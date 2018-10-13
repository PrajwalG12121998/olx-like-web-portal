-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: olx_schema
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `Advertisement`
--

DROP TABLE IF EXISTS `Advertisement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Advertisement` (
  `advt_id` int(100) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) DEFAULT NULL,
  `item_type` varchar(255) DEFAULT NULL,
  `date_of_init` varchar(255) DEFAULT NULL,
  `date_of_exp` varchar(255) DEFAULT NULL,
  `owner_id` varchar(255) DEFAULT NULL,
  `buyer_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`advt_id`),
  KEY `owner_id` (`owner_id`),
  KEY `buyer_id` (`buyer_id`),
  CONSTRAINT `Advertisement_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `Users` (`Nitc_email_id`),
  CONSTRAINT `Advertisement_ibfk_2` FOREIGN KEY (`buyer_id`) REFERENCES `Users` (`Nitc_email_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Advertisement`
--

LOCK TABLES `Advertisement` WRITE;
/*!40000 ALTER TABLE `Advertisement` DISABLE KEYS */;
INSERT INTO `Advertisement` VALUES (1,'Hp Probook 4420','Laptop','2018-10-07','2018-10-17','kenil@gmail.com','vinod@gmail.com'),(2,'Dell Vostro','Laptop','2018-10-07','2018-10-17','praj12121998@gmail.com','kenil@gmail.com'),(3,'Lenovo think pad','Laptop','2018-10-07','2018-10-17','praj12121998@gmail.com','surabh@gmail.com'),(4,'IPHONE TEN !! 256Gb Fresh Condition So Dont Miss','Mobile','2018-10-07','2018-10-17','praj12121998@gmail.com',NULL),(5,'J7 prime 32gb new condition,negotiable','Mobile','2018-10-07','2018-10-17','surabh@gmail.com','praj12121998@gmail.com'),(6,' Redmi 4 3gb ram, 32gb internal','Mobile','2018-10-07','2018-10-17','surabh@gmail.com',NULL),(7,'System Software  3rd','Book','2018-10-07','2018-10-17','surabh@gmail.com',NULL),(8,'Computers as components ','Book','2018-10-07','2018-10-17','surabh@gmail.com','praj12121998@gmail.com'),(9,'Operating system concept-8th edition','Book','2018-10-07','2018-10-17','vinod@gmail.com',NULL),(10,'HP 6510 ','Laptop','2018-10-07','2018-10-17','vinod@gmail.com',NULL),(11,'Dell Inspiron','Laptop','2018-10-07','2018-10-17','vinod@gmail.com',NULL);
/*!40000 ALTER TABLE `Advertisement` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-09  4:39:03
