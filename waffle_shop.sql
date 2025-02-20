-- MySQL dump 10.13  Distrib 5.7.44, for Linux (x86_64)
--
-- Host: localhost    Database: waffle_shop
-- ------------------------------------------------------
-- Server version	5.7.44

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
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,6,5,289.00),(2,1,1,1,199.00),(3,1,2,1,249.00),(4,1,4,1,279.00),(5,2,6,5,289.00),(6,2,1,1,199.00),(7,2,2,1,249.00),(8,2,4,1,279.00),(9,3,6,5,289.00),(10,3,1,1,199.00),(11,3,2,1,249.00),(12,3,4,1,279.00),(13,4,6,5,289.00),(14,4,1,1,199.00),(15,4,2,1,249.00),(16,4,4,1,279.00),(17,5,6,5,289.00),(18,5,1,1,199.00),(19,5,2,1,249.00),(20,5,4,1,279.00),(21,6,6,5,289.00),(22,6,1,1,199.00),(23,6,2,1,249.00),(24,6,4,1,279.00),(25,7,6,5,289.00),(26,7,1,1,199.00),(27,7,2,1,249.00),(28,7,4,1,279.00),(29,8,6,5,289.00),(30,8,1,1,199.00),(31,8,2,1,249.00),(32,8,4,1,279.00),(33,9,6,5,289.00),(34,9,1,1,199.00),(35,9,2,1,249.00),(36,9,4,1,279.00),(37,10,6,5,289.00),(38,10,1,1,199.00),(39,10,2,1,249.00),(40,10,4,1,279.00),(41,11,6,5,289.00),(42,11,1,1,199.00),(43,11,2,1,249.00),(44,11,4,1,279.00),(45,12,6,5,289.00),(46,12,1,1,199.00),(47,12,2,1,249.00),(48,12,4,1,279.00),(49,13,6,5,289.00),(50,13,1,1,199.00),(51,13,2,1,249.00),(52,13,4,1,279.00),(53,14,6,5,289.00),(54,14,1,1,199.00),(55,14,2,1,249.00),(56,14,4,1,279.00),(57,15,6,5,289.00),(58,15,1,1,199.00),(59,15,2,1,249.00),(60,15,4,1,279.00),(61,16,6,5,289.00),(62,16,1,1,199.00),(63,16,2,1,249.00),(64,16,4,1,279.00),(65,17,6,5,289.00),(66,17,1,1,199.00),(67,17,2,1,249.00),(68,17,4,1,279.00),(69,18,6,5,289.00),(70,18,1,1,199.00),(71,18,2,1,249.00),(72,18,4,1,279.00),(73,19,6,5,289.00),(74,19,1,1,199.00),(75,19,2,1,249.00),(76,19,4,1,279.00),(77,20,6,5,289.00),(78,20,1,1,199.00),(79,20,2,1,249.00),(80,20,4,1,279.00),(81,21,6,5,289.00),(82,21,1,1,199.00),(83,21,2,1,249.00),(84,21,4,1,279.00),(85,22,4,1,279.00),(86,23,3,8,229.00),(87,23,4,2,279.00),(88,23,5,2,259.00),(89,23,6,12,289.00);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:24'),(2,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:33'),(3,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:33'),(4,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:33'),(5,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:33'),(6,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:42'),(7,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:42'),(8,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:42'),(9,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:42'),(10,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:42'),(11,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:43'),(12,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:46'),(13,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:46'),(14,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:47'),(15,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:47'),(16,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:47'),(17,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:48'),(18,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:55'),(19,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:55'),(20,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:30:55'),(21,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',2172.00,'2025-02-20 21:36:17'),(22,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',279.00,'2025-02-20 21:39:32'),(23,'Ritesh Dadaji Mahale','riteshmahale15@gmail.com','Ambad link road','COD',6376.00,'2025-02-20 21:56:13');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Classic Waffel',199.00),(2,'Chocolate Waffel',249.00),(3,'Strawberry Waffel',229.00),(4,'Nutella Waffel',279.00),(5,'Blueberry Waffel',259.00),(6,'Banana Caramel Waffel',289.00);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-20 22:05:09
