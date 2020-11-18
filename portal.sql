-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: portal
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.18.04.1

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
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `start_at` datetime NOT NULL,
  `end_at` datetime NOT NULL,
  `phone` varchar(20) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `style` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

LOCK TABLES `info` WRITE;
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` VALUES (1,'Port Place','какая-то бургерная','2018-06-12 10:34:09','2018-06-12 10:34:09','asdqwe','asd','qasd');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,0,'Бургеры',NULL,NULL),(2,0,'Закуски',NULL,NULL),(3,0,'Комплексы',NULL,NULL),(4,0,'Напитки',NULL,NULL),(31,0,'все меню',NULL,NULL);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'2020-11-16 11:38:02','2020-11-16 11:38:02',1,200,'0','m','m@gmail.com','0961921770','qweqwe'),(2,'2020-11-16 11:40:40','2020-11-16 11:40:40',3,300,'0','dfg2','m@gmail.com','0961921770','k'),(3,'2020-11-16 14:25:20','2020-11-16 14:25:20',2,200,'0','w3','m@gmail.com','0961921770','m'),(4,'2020-11-16 14:56:27','2020-11-16 14:56:27',2,500,'0','dfg5','m@gmail.com','0961921770','m'),(5,'2020-11-16 15:15:26','2020-11-16 15:15:26',4,350,'0','qwe6','m@gmail.com','0961921770','w4'),(6,'2020-11-16 15:27:13','2020-11-16 15:27:13',4,350,'0','qwe7','m@gmail.com','0961921770','w5'),(7,'2020-11-16 15:32:12','2020-11-16 15:32:12',1,100,'0','m','egorkonopka93@gmail.com','0961921770','m'),(8,'2020-11-16 15:34:20','2020-11-16 15:34:20',2,200,'0','dfg','1@gmail.com','0961921770','m'),(9,'2020-11-16 15:37:00','2020-11-16 15:37:00',1,100,'0','test','egorkonopka93@gmail.com','0961921770','m'),(10,'2020-11-16 15:51:06','2020-11-16 15:51:06',3,300,'0','2mail','egorkonopka93@gmail.com','0961921770','1'),(11,'2020-11-16 15:53:27','2020-11-16 15:53:27',1,500,'0','2mail2','egorkonopka93d@gmail.com','0961921770','m'),(12,'2020-11-16 15:55:48','2020-11-16 15:55:48',2,400,'0','dfg123','asdasd@gmail.com','0961921770','m'),(13,'2020-11-16 15:56:50','2020-11-16 15:56:50',3,1500,'0','test','1@gmail.com','0961921770','m'),(14,'2020-11-16 16:09:48','2020-11-16 16:09:48',1,50,'0','e2','egorkonopka93d@gmail.com','0961921770','m');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(11) NOT NULL,
  `sum_item` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,2,'Checken',100,2,200),(2,2,1,'Sweet Beaf',100,1,100),(3,2,2,'Checken',100,1,100),(4,2,3,'Mexico',100,1,100),(5,3,1,'Sweet Beaf',100,1,100),(6,3,5,'roduct 5',50,2,100),(7,4,1,'Sweet Beaf',100,2,200),(8,4,2,'Checken',100,1,100),(9,4,3,'Mexico',100,2,200),(10,5,1,'Sweet Beaf',100,1,100),(11,5,2,'Checken',100,1,100),(12,5,3,'Mexico',100,1,100),(13,5,4,'roduct 4',50,1,50),(14,6,1,'Sweet Beaf',100,1,100),(15,6,2,'Checken',100,1,100),(16,6,3,'Mexico',100,1,100),(17,6,4,'roduct 4',50,1,50),(18,7,1,'Sweet Beaf',100,1,100),(19,8,2,'Checken',100,1,100),(20,8,3,'Mexico',100,1,100),(21,9,2,'Checken',100,1,100),(22,10,1,'Sweet Beaf',100,1,100),(23,10,2,'Checken',100,1,100),(24,10,3,'Mexico',100,1,100),(25,11,1,'Sweet Beaf',100,5,500),(26,12,1,'Sweet Beaf',100,2,200),(27,12,2,'Checken',100,2,200),(28,13,1,'Sweet Beaf',100,5,500),(29,13,2,'Checken',100,5,500),(30,13,3,'Mexico',100,5,500),(31,14,4,'roduct 4',50,1,50);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT 'no-image.png',
  `hit` enum('0','1') NOT NULL DEFAULT '0',
  `new` enum('0','1') NOT NULL DEFAULT '0',
  `sale` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,1,'Sweet Beaf','Бургер говяжий 160г котлета',100,'','','sweet.png','1','0','0'),(2,1,'Checken','Бургер куриный, острый',100,'','','chicken.png','0','0','0'),(3,1,'Mexico','Говяжий, 2 сыра, 2 котлеты',100,'','','mexico.png','0','0','0'),(4,2,'roduct 4','test',50,'','','no-image.png','0','0','0'),(5,2,'roduct 5','test',50,'','','no-image.png','0','0','0'),(6,2,'roduct 6','test',50,'','','no-image.png','0','0','0'),(7,2,'roduct 7','test',50,'','','no-image.png','0','0','0'),(8,3,'roduct 8','test',50,'','','no-image.png','0','0','0'),(9,3,'roduct 9','test',50,'','','no-image.png','0','0','0'),(10,3,'roduct 10','test',50,'','','no-image.png','0','0','0'),(11,3,'roduct 11','test',50,'','','no-image.png','0','0','0'),(12,4,'roduct 14','test',50,'','','no-image.png','0','0','0'),(13,4,'roduct 15','test',50,'','','no-image.png','0','0','0');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-16 16:24:25
