-- MySQL dump 10.13  Distrib 5.7.12, for osx10.11 (x86_64)
--
-- Host: localhost    Database: easyBid
-- ------------------------------------------------------
-- Server version	5.7.12

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
-- Table structure for table `bids`
--

DROP TABLE IF EXISTS `bids`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bids` (
  `bid_id` int(11) NOT NULL AUTO_INCREMENT,
  `bidder_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `bid_amount` float DEFAULT NULL,
  PRIMARY KEY (`bid_id`),
  KEY `item_id` (`item_id`),
  KEY `bidder_id` (`bidder_id`),
  CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`),
  CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`bidder_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bids`
--

LOCK TABLES `bids` WRITE;
/*!40000 ALTER TABLE `bids` DISABLE KEYS */;
INSERT INTO `bids` VALUES (2,1,3,10),(3,1,3,15),(4,1,3,16);
/*!40000 ALTER TABLE `bids` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `icon_url` varchar(255) DEFAULT NULL,
  `auctioneer_id` int(11) DEFAULT NULL,
  `highest_bid` float DEFAULT NULL,
  `min_price` float DEFAULT NULL,
  `bid_starts` datetime NOT NULL,
  `bid_ends` datetime NOT NULL,
  `item_condition` enum('new','slightlyUsed','collectors') DEFAULT NULL,
  `status` enum('available','inTransit','delivered') DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `auctioneer_id` (`auctioneer_id`),
  CONSTRAINT `items_ibfk_1` FOREIGN KEY (`auctioneer_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Nice Bag','This is a very nice bag','../image/items/nice_bag.jpg',1,30,10,'2017-04-22 13:00:00','2017-04-23 14:00:00','new','available'),(2,'iPhone Something','This is one of the best phones in the world','../image/items/9.jpg',3,0,200,'2017-04-24 07:00:00','2017-04-25 07:00:00','slightlyUsed','available'),(3,'Trousers Man Trousers','They\'re Trousers Man, trousers','../image/items/12.jpg',1,16,10,'2017-04-23 17:00:00','2017-04-25 10:00:00','new','available'),(4,'My Favorite Shirt','This is my favorite shirt','../image/items/2.jpg',2,NULL,25,'2017-04-30 13:00:00','2017-04-30 22:00:00','slightlyUsed','available'),(5,'Green groovy bag','A groovy green bag','../image/items/3.jpg',3,NULL,15,'2017-04-26 09:00:00','2017-04-27 12:00:00','collectors','available'),(6,'Scent Of Africa Perfume','The best perfume in Africa','../image/items/4.jpg',1,NULL,500,'2017-04-25 06:00:00','2017-04-30 06:00:00','new','available'),(7,'Boss Laptop','Boss Laptop Bro. The Best There Is!','../image/items/6.jpg',1,NULL,5000,'2017-04-27 10:00:00','2017-04-28 10:00:00','slightlyUsed','available');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_options`
--

DROP TABLE IF EXISTS `payment_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(50) DEFAULT NULL,
  `subscriber` varchar(100) NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_options`
--

LOCK TABLES `payment_options` WRITE;
/*!40000 ALTER TABLE `payment_options` DISABLE KEYS */;
INSERT INTO `payment_options` VALUES (1,'Mobile Money','Tigo'),(2,'Credit Cards','Mastercard'),(3,'Mobile Money','Airtel'),(4,'Mobile Money','MTN'),(5,'Mobile Money','vodafone'),(6,'Credit Cards','American Express'),(7,'Credit Cards','Paypal'),(8,'Credit Cards','Visa');
/*!40000 ALTER TABLE `payment_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL AUTO_INCREMENT,
  `bidder_id` int(11) DEFAULT NULL,
  `auctioneer_id` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comments` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`rating_id`),
  KEY `bidder_id` (`bidder_id`),
  KEY `auctioneer_id` (`auctioneer_id`),
  CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`bidder_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`auctioneer_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `bidder_id` int(11) DEFAULT NULL,
  `auctioneer_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `transaction_status` set('ongoing','completed') DEFAULT NULL,
  PRIMARY KEY (`transaction_id`),
  KEY `bidder_id` (`bidder_id`),
  KEY `auctioneer_id` (`auctioneer_id`),
  KEY `item_id` (`item_id`),
  CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`bidder_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`auctioneer_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_payment_options`
--

DROP TABLE IF EXISTS `user_payment_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_payment_options` (
  `user_option_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_option_id`),
  KEY `option_id` (`option_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `user_payment_options_ibfk_1` FOREIGN KEY (`option_id`) REFERENCES `payment_options` (`option_id`),
  CONSTRAINT `user_payment_options_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_payment_options`
--

LOCK TABLES `user_payment_options` WRITE;
/*!40000 ALTER TABLE `user_payment_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_payment_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneNum` varchar(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` set('user','admin') DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sensei','Hector','Amoah','hector@easybid.com','233244123456','$2y$10$1kAub8.Cf7gMb1YbbiZIv.jhEUj0P1uxQwH9LHBaGENOMqA/vlPBO','user',1),(2,'userone','User','One','user@one.com','233543210987','$2y$10$cKXJ.SSyBn9M4uJDk9cDnuDUpvzfel.TSSlpgeAdvsdERSWtFgAiy','user',1),(3,'kenneth','Kenneth','Owusu','kenneth.owusu@ashesi.edu.gh','233244277377','$2y$10$USXqslq6Ebx1WDrNNM3l1e7XNUEl8Ck.EQVT2EQzW7atMPbi4/fFC','user',1);
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

-- Dump completed on 2017-04-25 14:54:02
