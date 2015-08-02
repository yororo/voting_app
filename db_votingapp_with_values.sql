CREATE DATABASE  IF NOT EXISTS `votingapp` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `votingapp`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: votingapp
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `entry_ratings`
--

DROP TABLE IF EXISTS `entry_ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entry_ratings` (
  `identry_ratings` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `rating_total_average` varchar(45) DEFAULT NULL,
  `rating_count` varchar(45) DEFAULT NULL,
  `rating_total_raw` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`identry_ratings`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entry_ratings`
--

LOCK TABLES `entry_ratings` WRITE;
/*!40000 ALTER TABLE `entry_ratings` DISABLE KEYS */;
INSERT INTO `entry_ratings` VALUES (1,'Entry A','3.3333333333333','9','30','Distinctio conubia, corporis nobis, tortor orci, purus nisi reiciendis cupidatat egestas curae. Cubilia quod, montes, sollicitudin voluptate magna semper eros.'),(2,'Entry B','3.125','8','25','Dicta facilisi, ridiculus unde reiciendis erat sunt ea feugiat alias. Quae occaecat blandit? Malesuada exercitationem, quaerat rutrum doloribus luctus blandit.'),(3,'Entry C','4.3846153846154','13','57','Arcu iure voluptatem tellus sem, similique laboris illum doloremque earum morbi hymenaeos, penatibus lobortis? Reiciendis ultricies nobis urna, bibendum proident.');
/*!40000 ALTER TABLE `entry_ratings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-01  2:07:54
