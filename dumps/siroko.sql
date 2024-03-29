-- Host: localhost    Database: Siroko
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.17.10.1

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
-- Current Database: `Siroko`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `Siroko` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `Siroko`;

--
-- Table structure for table `product`
--
DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
                           `id` INT AUTO_INCREMENT PRIMARY KEY,
                           `name` varchar(300) NOT NULL,
                           `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `product` (name, price) VALUES ('Camiseta', '59'), ('Pentalon', '40');
--
-- Table structure for table `product`

--
-- Table structure for table `product`
--
DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
                            `id` INT AUTO_INCREMENT PRIMARY KEY,
                            `shoppingCartId` varchar(64) NOT NULL,
                            `product_id` int NOT NULL,
                            `quantity` int NOT NULL,
                            `at_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;