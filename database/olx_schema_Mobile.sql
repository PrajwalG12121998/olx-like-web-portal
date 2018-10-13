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
-- Table structure for table `Mobile`
--

DROP TABLE IF EXISTS `Mobile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Mobile` (
  `product_id` int(100) NOT NULL,
  `manufacturer` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `year_of_purchase` varchar(255) DEFAULT NULL,
  `ad_description` varchar(255) DEFAULT NULL,
  `expected_price` varchar(255) DEFAULT NULL,
  `image_path` blob,
  PRIMARY KEY (`product_id`),
  CONSTRAINT `Mobile_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `Advertisement` (`advt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mobile`
--

LOCK TABLES `Mobile` WRITE;
/*!40000 ALTER TABLE `Mobile` DISABLE KEYS */;
INSERT INTO `Mobile` VALUES (4,'Apple','IP9248','2018 (recently)','Brand New ','59999',NULL),(5,'Samsung','SJ7070','2018 (recently)','bill box accessories available','7900',NULL),(6,'MI','MIR3872','2017','Good Condition 3gb ram, 32gb internal memory 12mp rear camera 5mp front camera 4000mAh Battery','7000',NULL);
/*!40000 ALTER TABLE `Mobile` ENABLE KEYS */;
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
