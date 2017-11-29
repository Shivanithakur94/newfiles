-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: youtow_mc
-- ------------------------------------------------------
-- Server version	5.7.15-0ubuntu2

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
-- Table structure for table `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_date` int(11) NOT NULL,
  `invoice_amount` decimal(10,0) NOT NULL,
  `invoice_office_id` int(11) NOT NULL,
  `invoice_status` varchar(45) NOT NULL DEFAULT 'open',
  `invoice_paymentdate` datetime DEFAULT NULL,
  `invoice_paymentamount` decimal(10,0) DEFAULT NULL,
  `invoice_bankfee` decimal(10,0) DEFAULT NULL,
  `invoice_office_paymentmethod` varchar(45) DEFAULT NULL,
  `invoice_gateway_ref` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

LOCK TABLES `invoices` WRITE;
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoices_items`
--

DROP TABLE IF EXISTS `invoices_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoices_items` (
  `inv_items_id` int(11) NOT NULL AUTO_INCREMENT,
  `billing_id` int(11) DEFAULT NULL,
  `billing_amount` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`inv_items_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices_items`
--

LOCK TABLES `invoices_items` WRITE;
/*!40000 ALTER TABLE `invoices_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoices_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `members_id` int(11) NOT NULL AUTO_INCREMENT,
  `members_firstname` varchar(45) DEFAULT NULL,
  `members_lastname` varchar(45) DEFAULT NULL,
  `members_email` varchar(128) DEFAULT NULL,
  `members_address_street` varchar(64) DEFAULT NULL,
  `members_address_suite` varchar(45) DEFAULT NULL,
  `members_address_city` varchar(64) DEFAULT NULL,
  `members_address_state` varchar(45) DEFAULT NULL,
  `members_address_postalcode` varchar(45) DEFAULT NULL,
  `members_phone_mobile` varchar(45) DEFAULT NULL,
  `members_phone_other` varchar(45) DEFAULT NULL,
  `members_other_contact` varchar(128) DEFAULT NULL,
  `members_other_contact_phone` varchar(45) DEFAULT NULL,
  `members_other_contact_email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`members_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'Levar','','levar.berry@edrivenvue.com','','','','','','15134031210','','','',''),(2,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','','','',''),(3,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(4,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(5,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(6,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(7,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(8,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(9,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(10,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(11,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(12,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(13,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(14,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(15,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(16,'Levar','Berry2','levar.berry@edrivenvue.com','11635 Pippin RD','','Cincinnati','OH','45231','15134031210','15134031210','','',''),(17,'Robert','Berry','levar.berry@edrivenent.com','11635 Pippin RD','','CINCINNATI','OH','45231','15133181360','15133181360','','',''),(18,'Robert','Berry','levar.berry@edrivenent.com','11635 Pippin RD','','CINCINNATI','OH','45231','15133181360','15133181360','','',''),(19,'Jenaro','Roberts','jenaro@thewinglab.com','111 North Marietta Pkwy','b101','MARIETTA','GA','30060','7702311078','7702311078','','',''),(20,'Natasha','Arrington','natasha@youtow.us','111 N Marietta Pkwy ','','Marietta','GA','30060','6789076847','6789076847','','','');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offices` (
  `office_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_name` varchar(64) NOT NULL,
  `office_address` text NOT NULL,
  `office_website` varchar(255) NOT NULL,
  `office_phone` varchar(24) NOT NULL,
  `office_status` varchar(12) NOT NULL DEFAULT 'active',
  `office_hours` varchar(512) NOT NULL,
  PRIMARY KEY (`office_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offices`
--

LOCK TABLES `offices` WRITE;
/*!40000 ALTER TABLE `offices` DISABLE KEYS */;
INSERT INTO `offices` VALUES (1,'eDriven VUE','1234 Main Street\r\nRichmond VA 23145','http://www.edrivenvue.com','513.318.1360','active','M,W,F: 8am - 5pm T-Th: 2pm - 7pm');
/*!40000 ALTER TABLE `offices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policies`
--

DROP TABLE IF EXISTS `policies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `policies` (
  `policies_id` int(11) NOT NULL AUTO_INCREMENT,
  `policies_member_id` int(11) NOT NULL,
  `policies_office_id` int(11) DEFAULT NULL,
  `policies_user_id` int(11) DEFAULT NULL,
  `policies_createdate` datetime DEFAULT NULL,
  `policies_startdate` date DEFAULT NULL,
  `policies_expirationdate` date DEFAULT NULL,
  `policies_yt_plan_id` int(11) DEFAULT NULL,
  `policies_balance` decimal(10,2) DEFAULT NULL,
  `policies_status` varchar(45) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`policies_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policies`
--

LOCK TABLES `policies` WRITE;
/*!40000 ALTER TABLE `policies` DISABLE KEYS */;
INSERT INTO `policies` VALUES (1,11,1,1,'2017-10-15 21:17:43','2017-10-15','2018-10-15',1,12.95,'Active'),(2,12,1,1,'2017-10-15 21:24:44','2017-10-15','2018-10-15',1,12.95,'Active'),(3,13,1,1,'2017-10-15 21:24:58','2017-10-15','2018-10-15',1,12.95,'Active'),(4,14,1,1,'2017-10-15 21:25:36','2017-10-15','2018-10-15',1,12.95,'Active'),(5,15,1,1,'2017-10-15 21:26:02','2017-10-15','2018-10-15',1,12.95,'Active'),(6,16,1,1,'2017-10-15 21:26:35','2017-10-15','2018-10-15',1,12.95,'Active'),(7,17,1,1,'2017-10-15 21:28:29','2017-10-15','2018-10-15',1,12.95,'Active'),(8,18,1,1,'2017-10-15 21:30:54','2017-10-15','2018-10-15',1,12.95,'Active'),(9,19,1,1,'2017-11-10 21:08:23','2017-11-10','2018-11-10',1,12.95,'Active'),(10,20,1,2,'2017-11-15 16:04:41','2017-11-15','2018-11-15',1,12.95,'Active');
/*!40000 ALTER TABLE `policies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` varchar(255) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_status` varchar(12) NOT NULL DEFAULT 'active',
  `user_phone` varchar(28) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'1','Levar Berry','cc03e747a6afbbcbf8be7668acfebee5','levar.berry@edrivenvue.com','active',NULL),(2,'1','Natasha Arrington','c06db68e819be6ec3d26c6038d8e8d1f','natasha@youtow.us','active',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yt_plans`
--

DROP TABLE IF EXISTS `yt_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yt_plans` (
  `yt_plans_id` int(11) NOT NULL AUTO_INCREMENT,
  `yt_plans_name` varchar(45) DEFAULT NULL,
  `yt_plans_description` varchar(45) DEFAULT NULL,
  `yt_plans_term` int(11) NOT NULL,
  `yt_plans_status` varchar(45) DEFAULT 'Active',
  `yt_plans_office_id` int(11) DEFAULT '0',
  `yt_plans_amount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`yt_plans_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yt_plans`
--

LOCK TABLES `yt_plans` WRITE;
/*!40000 ALTER TABLE `yt_plans` DISABLE KEYS */;
INSERT INTO `yt_plans` VALUES (1,'Plan B - TESTING','This Plan is for Testing Purposes Only',12,'Active',0,12.95);
/*!40000 ALTER TABLE `yt_plans` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-20 10:13:22
