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
-- Table structure for table `Laptop`
--

DROP TABLE IF EXISTS `Laptop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Laptop` (
  `product_id` int(100) NOT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `year_of_purchase` varchar(255) DEFAULT NULL,
  `battery_status` varchar(255) DEFAULT NULL,
  `ad_description` varchar(255) DEFAULT NULL,
  `expected_price` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  CONSTRAINT `Laptop_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `Advertisement` (`advt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Laptop`
--

LOCK TABLES `Laptop` WRITE;
/*!40000 ALTER TABLE `Laptop` DISABLE KEYS */;
INSERT INTO `Laptop` VALUES (1,'HP','HPS12/9Q2378256iA2','2017',' 3 hours battery','Hp Probook 4420 i5 / 4 GB / 320 GB / dvd writer/ WiFi /webcam /14.0/ good working condition.','10500',NULL),(2,'DELL','DV1290','2015','2 hours battery','4 GB ram/ 500 GB hard disk/ 15.6 led screen good working condition','9999',NULL),(3,'Lenovo','LT7462/i2329','2010','2 hours battery backup','Lenovo think pad. i3 2nd / 4 gb / 320 gb / 14.0 screen wifi / webcam / good working condition','9500',NULL),(10,'HP','HP9778675','2012',' 3 hours battery','Intel CORE i5 With 1GB Graphic Card ','11000',NULL),(11,'DELL','5559 ','2017','4 hours battery','i3 6100/4gb/1tb/2gb/black ','31000',NULL);
/*!40000 ALTER TABLE `Laptop` ENABLE KEYS */;
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
