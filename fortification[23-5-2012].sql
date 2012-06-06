CREATE DATABASE  IF NOT EXISTS `fortification` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fortification`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: fortification
-- ------------------------------------------------------
-- Server version	5.5.24

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
-- Table structure for table `internalfortifieda1`
--

DROP TABLE IF EXISTS `internalfortifieda1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internalfortifieda1` (
  `receiptNumber` int(11) NOT NULL AUTO_INCREMENT,
  `productType` varchar(10) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `inspectedBy` varchar(45) DEFAULT NULL,
  `purchaseOrderNumber` varchar(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `integrityObservation` varchar(45) NOT NULL,
  `lotNumber` varchar(11) DEFAULT NULL,
  `lotObservation` varchar(45) NOT NULL,
  `productionDate` varchar(11) DEFAULT NULL,
  `productObservation` varchar(45) NOT NULL,
  `expiryDate` varchar(11) DEFAULT NULL,
  `expirationObservation` varchar(45) NOT NULL,
  `contentClaimedLabel` varchar(45) DEFAULT NULL,
  `contentObservation` varchar(45) NOT NULL,
  `certificateOfAnalysis` varchar(45) DEFAULT NULL,
  `certificateObservation` varchar(45) NOT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) NOT NULL,
  `accepted` tinyint(1) DEFAULT '1' COMMENT '1-accepted, 0-rejected',
  `reasonsForRejection` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) NOT NULL,
  PRIMARY KEY (`receiptNumber`),
  KEY `fk_TableA2(23)_PremixType` (`productType`),
  KEY `fk_TableA2(23)_Manufacturer_Compound1` (`manufacturerCompName`),
  CONSTRAINT `fk_TableA2(23)_Manufacturer_Compound1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_TableA2(23)_PremixType` FOREIGN KEY (`productType`) REFERENCES `premixtype` (`productName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internalfortifieda1`
--

LOCK TABLES `internalfortifieda1` WRITE;
/*!40000 ALTER TABLE `internalfortifieda1` DISABLE KEYS */;
/*!40000 ALTER TABLE `internalfortifieda1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `externaliodizationb1`
--

DROP TABLE IF EXISTS `externaliodizationb1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `externaliodizationb1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `inspector` varchar(45) DEFAULT NULL,
  `inventoryUpToDate` varchar(45) DEFAULT NULL,
  `sufficientIodine3Months` varchar(45) DEFAULT NULL,
  `adequateStorage` varchar(45) DEFAULT NULL,
  `potassiumIodateAmounts` varchar(45) DEFAULT NULL,
  `premixRecords` varchar(45) DEFAULT NULL,
  `FIFOSystem` varchar(45) DEFAULT NULL,
  `saltVsPremix` varchar(45) DEFAULT NULL,
  `iodizedSaltUpToDate` varchar(45) DEFAULT NULL,
  `saltPerKgAdequate` varchar(45) DEFAULT NULL,
  `sampleNumber` varchar(45) DEFAULT NULL,
  `iodineContent0` varchar(45) DEFAULT NULL,
  `sampleReprocessed` varchar(45) DEFAULT NULL,
  `iodineContent1` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableB1(1011)_TechAudit_Manufacturer_FCenters1` (`factoryName`),
  CONSTRAINT `fk_TableB1(1011)_TechAudit_Manufacturer_FCenters1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `externaliodizationb1`
--

LOCK TABLES `externaliodizationb1` WRITE;
/*!40000 ALTER TABLE `externaliodizationb1` DISABLE KEYS */;
INSERT INTO `externaliodizationb1` VALUES (1,'Kensalt','2012-05-20','e','n/a','on','on','on','on','on','on','on','on','21','45','12','43','1',NULL,NULL,'e');
/*!40000 ALTER TABLE `externaliodizationb1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devices` (
  `deviceSerialNumber` varchar(50) NOT NULL,
  `deviceType` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`deviceSerialNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maize_internalforta1`
--

DROP TABLE IF EXISTS `maize_internalforta1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maize_internalforta1` (
  `maize_internalforta1ID` int(11) NOT NULL AUTO_INCREMENT,
  `productType` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `inspectedBy` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `integrityOfBoxes` varchar(10) DEFAULT NULL,
  `integrityObservation` varchar(45) DEFAULT NULL,
  `lotNumber` varchar(10) DEFAULT NULL,
  `lotObservation` varchar(45) DEFAULT NULL,
  `productionDate` varchar(10) DEFAULT NULL,
  `productionObservation` varchar(45) DEFAULT NULL,
  `expiryDate` varchar(10) DEFAULT NULL,
  `expiryObservation` varchar(45) DEFAULT NULL,
  `micronutrientLevels` varchar(10) DEFAULT NULL,
  `micronutrientObservation` varchar(45) DEFAULT NULL,
  `certificateOfAnalysis` varchar(10) DEFAULT NULL,
  `certificateOfAnalysisObservation` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT NULL,
  `reasonsForRejection` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalforta1ID`),
  KEY `maize_internalforta1_premixtype` (`productType`),
  KEY `maize_internalforta1_manufacturercompound` (`manufacturerCompName`),
  CONSTRAINT `maize_internalforta1_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `maize_internalforta1_premixtype` FOREIGN KEY (`productType`) REFERENCES `premixtype` (`productName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maize_internalforta1`
--

LOCK TABLES `maize_internalforta1` WRITE;
/*!40000 ALTER TABLE `maize_internalforta1` DISABLE KEYS */;
INSERT INTO `maize_internalforta1` VALUES (1,'Iodine','Salt Iod','1','2012-05-20','vc',NULL,'cvc','on','vc','on','vc','on','vc','on','vc','on','vcv','vcv','vcv',1,'vccv','vcv',NULL),(2,'Iodine','Salt Iod','1','2012-05-20','vc',NULL,'cvc','on','vc','on','vc','on','vc','on','vc','on','vcv','vcv','vcv',1,'vccv','vcv',NULL);
/*!40000 ALTER TABLE `maize_internalforta1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oil_tablea1`
--

DROP TABLE IF EXISTS `oil_tablea1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oil_tablea1` (
  `fortifiedOilA1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `supplierCOANumber` varchar(45) DEFAULT NULL,
  `numberOfCans` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `expirationDate` varchar(45) DEFAULT NULL,
  `dispatchedLotID` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedOilA1ID`),
  KEY `fortifiedOilA1_manufacturerfortified` (`factoryName`),
  CONSTRAINT `fortifiedOilA1_manufacturerfortified` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oil_tablea1`
--

LOCK TABLES `oil_tablea1` WRITE;
/*!40000 ALTER TABLE `oil_tablea1` DISABLE KEYS */;
INSERT INTO `oil_tablea1` VALUES (1,'2012-05-02','12',321,'3','2012-05-02','3','13','Kensalt');
/*!40000 ALTER TABLE `oil_tablea1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheat_internalforta2`
--

DROP TABLE IF EXISTS `wheat_internalforta2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheat_internalforta2` (
  `wheat_internalFortA2ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `lotID0` varchar(45) DEFAULT NULL,
  `expiryDate` varchar(45) DEFAULT NULL,
  `dispatchedQuantity` double DEFAULT NULL,
  `lotID1` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `reportingDate` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortA2ID`),
  KEY `wheat_internalFortA2_ibfk_1` (`manufacturerCompName`),
  CONSTRAINT `wheat_internalFortA2_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheat_internalforta2`
--

LOCK TABLES `wheat_internalforta2` WRITE;
/*!40000 ALTER TABLE `wheat_internalforta2` DISABLE KEYS */;
INSERT INTO `wheat_internalforta2` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Object',NULL,'Salt Iod'),(2,'2012-05-16','12:00',12,'89','2012-05-07',21,'1',NULL,'Object','1','Salt Iod'),(3,'2012-05-03','12:00',5,'4','2012-05-09',3,'3',NULL,'Object','5','Salt Iod'),(4,'2012-05-03','12:00',5,'4','2012-05-09',3,'3',NULL,'2012-05-21','5','Salt Iod'),(5,'2012-05-03','12:00',5,'4','2012-05-09',3,'3',NULL,'2012-05-21','5','Salt Iod'),(6,'2012-05-03','12:00',5,'4','2012-05-09',3,'3',NULL,'2012-05-21','5','Salt Iod'),(7,'2012-05-03','12:00',5,'4','2012-05-09',3,'3',NULL,'2012-05-21','5','Salt Iod'),(8,'2012-05-03','12:00',5,'4','2012-05-09',3,'3',NULL,'2012-05-21','5','Salt Iod');
/*!40000 ALTER TABLE `wheat_internalforta2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheat_internalforta1`
--

DROP TABLE IF EXISTS `wheat_internalforta1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheat_internalforta1` (
  `wheat_internalFortA1ID` int(11) NOT NULL AUTO_INCREMENT,
  `productType` varchar(10) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `inspectedBy` varchar(45) DEFAULT NULL,
  `purchaseOrderNumber` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `integrityOfBoxes` varchar(10) DEFAULT NULL,
  `integrityObservation` varchar(45) DEFAULT NULL,
  `lotNumber` varchar(10) DEFAULT NULL,
  `lotObservation` varchar(45) DEFAULT NULL,
  `productionDate` varchar(10) DEFAULT NULL,
  `productionObservation` varchar(45) DEFAULT NULL,
  `expiryDate` varchar(10) DEFAULT NULL,
  `expiryObservation` varchar(45) DEFAULT NULL,
  `micronutrientLevelsInLabel` varchar(10) DEFAULT NULL,
  `micronutrientObservation` varchar(45) DEFAULT NULL,
  `certificateOfAnalysis` varchar(10) DEFAULT NULL,
  `certifcateOfAnalysisObservation` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT NULL,
  `reasonsForRejection` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortA1ID`),
  KEY `wheat_internalFortA1_premixType` (`productType`),
  KEY `wheat_internalFortA1_manufacturercompound` (`manufacturerCompName`),
  CONSTRAINT `wheat_internalFortA1_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `wheat_internalFortA1_premixType` FOREIGN KEY (`productType`) REFERENCES `premixtype` (`productName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheat_internalforta1`
--

LOCK TABLES `wheat_internalforta1` WRITE;
/*!40000 ALTER TABLE `wheat_internalforta1` DISABLE KEYS */;
/*!40000 ALTER TABLE `wheat_internalforta1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smallscalea2`
--

DROP TABLE IF EXISTS `smallscalea2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smallscalea2` (
  `transcationNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `weightKg` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `contentOfIodine` double DEFAULT NULL,
  `amountUsed` double DEFAULT NULL,
  PRIMARY KEY (`transcationNumber`),
  KEY `manufacturerCompound_smallScaleA2` (`manufacturerCompName`),
  CONSTRAINT `manufacturerCompound_smallScaleA2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smallscalea2`
--

LOCK TABLES `smallscalea2` WRITE;
/*!40000 ALTER TABLE `smallscalea2` DISABLE KEYS */;
INSERT INTO `smallscalea2` VALUES (2,'2012-05-14','Kensalt',13,'4',1,3);
/*!40000 ALTER TABLE `smallscalea2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `smallscalea1`
--

DROP TABLE IF EXISTS `smallscalea1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `smallscalea1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `weightKg` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `contentOfIodine` double NOT NULL,
  `amountUsed` double DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `manufacturerCompName` (`manufacturerCompName`),
  CONSTRAINT `smallscalea1_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `smallscalea1`
--

LOCK TABLES `smallscalea1` WRITE;
/*!40000 ALTER TABLE `smallscalea1` DISABLE KEYS */;
/*!40000 ALTER TABLE `smallscalea1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accesslog`
--

DROP TABLE IF EXISTS `accesslog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accesslog` (
  `accessLogID` bigint(20) NOT NULL AUTO_INCREMENT,
  `usersID` bigint(20) NOT NULL,
  `logOnstamp` timestamp NULL DEFAULT NULL,
  `logOffstamp` timestamp NULL DEFAULT NULL,
  `remoteIP` varchar(45) NOT NULL,
  PRIMARY KEY (`accessLogID`),
  KEY `users_accessLog` (`usersID`),
  CONSTRAINT `users_accessLog` FOREIGN KEY (`usersID`) REFERENCES `users` (`usersID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesslog`
--

LOCK TABLES `accesslog` WRITE;
/*!40000 ALTER TABLE `accesslog` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesslog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheat_internalfortb2`
--

DROP TABLE IF EXISTS `wheat_internalfortb2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheat_internalfortb2` (
  `wheat_internalFortB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `flourProduced` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortB2ID`),
  KEY `wheat_internalFortB2_iodizationCenter` (`factoryName`),
  CONSTRAINT `wheat_internalFortB2_iodizationCenter` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheat_internalfortb2`
--

LOCK TABLES `wheat_internalfortb2` WRITE;
/*!40000 ALTER TABLE `wheat_internalfortb2` DISABLE KEYS */;
INSERT INTO `wheat_internalfortb2` VALUES (1,'Salt Iod',NULL,NULL,NULL,NULL,'',NULL,''),(2,'Salt Iod','1221',1,'2',45,'21','v',''),(3,'Salt Iod','1221',1,'2',45,'21','v','2012-05-21'),(4,'Salt Iod','1221',1,'2',45,'nm','biii','2012-05-21'),(5,'Salt Iod','1221',1,'2',45,'nm','biii','2012-05-21');
/*!40000 ALTER TABLE `wheat_internalfortb2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `premixtype`
--

DROP TABLE IF EXISTS `premixtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `premixtype` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`productId`),
  UNIQUE KEY `ProdName_UNIQUE` (`productName`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `premixtype`
--

LOCK TABLES `premixtype` WRITE;
/*!40000 ALTER TABLE `premixtype` DISABLE KEYS */;
INSERT INTO `premixtype` VALUES (2,'Iodate'),(1,'Iodine');
/*!40000 ALTER TABLE `premixtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oil_tablec1`
--

DROP TABLE IF EXISTS `oil_tablec1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oil_tablec1` (
  `fortifiedOilC1ID` int(11) NOT NULL AUTO_INCREMENT,
  `shiftTime` varchar(8) DEFAULT NULL,
  `oilProduced` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `oilFortified` double DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedOilC1ID`),
  KEY `fortifiedOilC1_iodizationcenters` (`factoryName`),
  CONSTRAINT `fortifiedOilC1_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oil_tablec1`
--

LOCK TABLES `oil_tablec1` WRITE;
/*!40000 ALTER TABLE `oil_tablec1` DISABLE KEYS */;
INSERT INTO `oil_tablec1` VALUES (1,'08:59 PM',32,2,1,'n','v','Object','v','Kensalt'),(2,'09:01 PM',21,3,1,'3','1','Object','3','Kensalt'),(3,'09:02 PM',32,1,31,'41','31','2012-05-20','q','Kensalt');
/*!40000 ALTER TABLE `oil_tablec1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheat_internalfortb1`
--

DROP TABLE IF EXISTS `wheat_internalfortb1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheat_internalfortb1` (
  `wheat_internalFortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `productionRate` double DEFAULT NULL,
  `theoreticalFeederFlow` double DEFAULT NULL,
  `feederFlow1` double DEFAULT NULL,
  `feederFlow2` double DEFAULT NULL,
  `feederFlow3` double DEFAULT NULL,
  `adjusted` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortB1ID`),
  KEY `wheat_internalFortB1_iodizationcenters` (`factoryName`),
  CONSTRAINT `wheat_internalFortB1_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheat_internalfortb1`
--

LOCK TABLES `wheat_internalfortb1` WRITE;
/*!40000 ALTER TABLE `wheat_internalfortb1` DISABLE KEYS */;
INSERT INTO `wheat_internalfortb1` VALUES (1,'Salt Iod',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Yes',NULL,NULL,''),(2,'Salt Iod',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(3,'Salt Iod',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(4,'Salt Iod',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Yes',NULL,NULL,''),(5,'Salt Iod',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(6,'Salt Iod',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,''),(7,'Salt Iod','2012-05-07','12',1,1,1,1,1,'Yes',NULL,'12','212'),(8,'Salt Iod','2012-05-07','12',1,1,1,1,1,'Yes',NULL,'12','212');
/*!40000 ALTER TABLE `wheat_internalfortb1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheat_externalfortb1`
--

DROP TABLE IF EXISTS `wheat_externalfortb1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheat_externalfortb1` (
  `wheat_externalFortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_externalFortB1ID`),
  KEY `wheat_externalFortB1_manufacturerFortified` (`factoryName`),
  CONSTRAINT `wheat_externalFortB1_manufacturerFortified` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheat_externalfortb1`
--

LOCK TABLES `wheat_externalfortb1` WRITE;
/*!40000 ALTER TABLE `wheat_externalfortb1` DISABLE KEYS */;
INSERT INTO `wheat_externalfortb1` VALUES (1,'Object','Kensalt','bb','vb','vb','b','1','2'),(2,'2012-05-22','Kensalt','bb','vb','vb','b','1','2'),(3,'2012-05-22','Kensalt','bb','vb','vb','b','v','2'),(4,'2012-05-22','Kensalt','bb','vb','vb','b','v','2');
/*!40000 ALTER TABLE `wheat_externalfortb1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheat_externalfortb2`
--

DROP TABLE IF EXISTS `wheat_externalfortb2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheat_externalfortb2` (
  `wheat_externalFortB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `productionArea` varchar(45) DEFAULT NULL,
  `packagingArea` varchar(45) DEFAULT NULL,
  `warehouse` varchar(45) DEFAULT NULL,
  `staffFacilities` varchar(45) DEFAULT NULL,
  `hygiene` varchar(45) DEFAULT NULL,
  `wearingProtective` varchar(45) DEFAULT NULL,
  `trainnedInTasks` varchar(45) DEFAULT NULL,
  `receiptAndStorage` varchar(45) DEFAULT NULL,
  `premixDilutionApplicable` varchar(45) DEFAULT NULL,
  `feederVerification` varchar(45) DEFAULT NULL,
  `samplingOfWheatFlour` varchar(45) DEFAULT NULL,
  `ironSpotTest` varchar(45) DEFAULT NULL,
  `premixInventory` varchar(45) DEFAULT NULL,
  `COAReceived` varchar(45) DEFAULT NULL,
  `premixStored` varchar(45) DEFAULT NULL,
  `FIFOSystem` varchar(45) DEFAULT NULL,
  `premixHandledWell` varchar(45) DEFAULT NULL,
  `premixDilution` varchar(45) DEFAULT NULL,
  `homogeneityAssessed` varchar(45) DEFAULT NULL,
  `adequateStorage` varchar(45) DEFAULT NULL,
  `recordsOfFeeder` varchar(45) DEFAULT NULL,
  `premixLevel` varchar(45) DEFAULT NULL,
  `recordsOfFlour` varchar(45) DEFAULT NULL,
  `flourSamples` varchar(45) DEFAULT NULL,
  `ratioWheatProduced` varchar(45) DEFAULT NULL,
  `ironContent` varchar(45) DEFAULT NULL,
  `spotTestIron` varchar(45) DEFAULT NULL,
  `quantitativeMethodIron` varchar(45) DEFAULT NULL,
  `quantitativeMethodVitaminA` varchar(45) DEFAULT NULL,
  `dailyCompositeSamples` varchar(45) DEFAULT NULL,
  `labellingMeetsSpecifications` varchar(45) DEFAULT NULL,
  `fortifiedWheatFlour` varchar(45) DEFAULT NULL,
  `FIFOSystemApplied` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActionsTaken` varchar(45) DEFAULT NULL,
  `assessment` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestions` varchar(45) DEFAULT NULL,
  `typeOfIron` varchar(45) DEFAULT NULL,
  `IDComposite` varchar(45) DEFAULT NULL,
  `factoryEstimation` double DEFAULT NULL,
  `ironMgPerKg0` double DEFAULT NULL,
  `vitaminMgPerKg0` double DEFAULT NULL,
  `IDOtherSamples` varchar(45) DEFAULT NULL,
  `ironMgPerKg1` double DEFAULT NULL,
  `vitaminAMgPerKg1` double DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_externalFortB2ID`),
  KEY `factoryName` (`factoryName`),
  CONSTRAINT `wheat_externalfortb2_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheat_externalfortb2`
--

LOCK TABLES `wheat_externalfortb2` WRITE;
/*!40000 ALTER TABLE `wheat_externalfortb2` DISABLE KEYS */;
INSERT INTO `wheat_externalfortb2` VALUES (8,'cc','2012-05-22','cncn','Kensalt','yes','yes','yes',NULL,'no',NULL,'yes','yes','no','n/a','yes','yes','yes','yes','yes','n/a','yes','yes','yes','yes','yes',NULL,'yes','yes','yes','n/a','yes','yes','yes','yes','yes','yes',NULL,'qe','bgb','Inadequate','bfgb','bdf','bdb',NULL,'12',NULL,1,12,'12',12,21,'12','2012-05-22'),(9,'cc','2012-05-22','cncn','Kensalt','yes','yes','yes',NULL,'no',NULL,'yes','yes','no','n/a','yes','yes','yes','yes','yes','n/a','yes','yes','yes','yes','yes',NULL,'yes','yes','yes','n/a','yes','yes','yes','yes','yes','yes',NULL,'qe','bgb','Inadequate','bfgb','bdf','bdb',NULL,'12',NULL,1,12,'12',12,21,'12','2012-05-22'),(10,'cc','2012-05-22','cncn','Kensalt','yes','yes','yes',NULL,'no',NULL,'yes','yes','no','n/a','yes','yes','yes','yes','yes','n/a','yes','yes','yes','yes','yes',NULL,'yes','yes','yes','n/a','yes','yes','yes','yes','yes','yes',NULL,'qe','bgb','Inadequate','bfgb','bdf','bdb',NULL,'12',NULL,1,12,'12',12,21,'12','2012-05-22'),(11,NULL,'2012-05-22',NULL,'Kensalt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2012-05-22'),(12,NULL,'2012-05-22',NULL,'Kensalt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2012-05-22');
/*!40000 ALTER TABLE `wheat_externalfortb2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheat_externalfortb3`
--

DROP TABLE IF EXISTS `wheat_externalfortb3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheat_externalfortb3` (
  `wheat_externalFortB3ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `dateOfInspection` varchar(45) DEFAULT NULL,
  `factoryRepresentative` varchar(45) DEFAULT NULL,
  `areasVisited` varchar(100) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `inspectorDate` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_externalFortB3ID`),
  KEY `wheat_externalFortB3_factories` (`factoryName`),
  CONSTRAINT `wheat_externalFortB3_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheat_externalfortb3`
--

LOCK TABLES `wheat_externalfortb3` WRITE;
/*!40000 ALTER TABLE `wheat_externalfortb3` DISABLE KEYS */;
INSERT INTO `wheat_externalfortb3` VALUES (1,NULL,'Kensalt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,'Kensalt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,'Kensalt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,NULL,'Kensalt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,NULL,'Kensalt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'vcvcv','Kensalt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'cc','Kensalt','2012-05-01','wr',NULL,' xvxv','vxvxv','vxvx','vxvx','2012-05-01','2012-05-01','vmv',NULL);
/*!40000 ALTER TABLE `wheat_externalfortb3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maize_internalfortc1`
--

DROP TABLE IF EXISTS `maize_internalfortc1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maize_internalfortc1` (
  `maize_internalfortc1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `maizeFlourProduced` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `maizeFlourVSPremix` double DEFAULT NULL,
  `notes` varchar(45) DEFAULT NULL,
  `compositeSample` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalfortc1ID`),
  KEY `maize_internalfortc1_iodizationcenters` (`factoryName`),
  CONSTRAINT `maize_internalfortc1_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maize_internalfortc1`
--

LOCK TABLES `maize_internalfortc1` WRITE;
/*!40000 ALTER TABLE `maize_internalfortc1` DISABLE KEYS */;
INSERT INTO `maize_internalfortc1` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kensalt'),(2,'Object','11:23 PM',12,31,1,'b','v','4','Kensalt'),(3,'2012-05-21','11:23 PM',12,31,1,'b','v','4','Kensalt');
/*!40000 ALTER TABLE `maize_internalfortc1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturercompound`
--

DROP TABLE IF EXISTS `manufacturercompound`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturercompound` (
  `manufacturerId` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerId`),
  UNIQUE KEY `Manufacturer_Name_UNIQUE` (`manufacturerCompName`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturercompound`
--

LOCK TABLES `manufacturercompound` WRITE;
/*!40000 ALTER TABLE `manufacturercompound` DISABLE KEYS */;
INSERT INTO `manufacturercompound` VALUES (1,'Salt Iod','vcv','3434','Kisumu'),(4,'Kensalt','a','d','b');
/*!40000 ALTER TABLE `manufacturercompound` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `usersID` bigint(20) NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) NOT NULL,
  `userPassword` varchar(45) NOT NULL,
  `userRights` tinyint(1) NOT NULL,
  `affiliation` varchar(45) DEFAULT 'n/a',
  PRIMARY KEY (`usersID`),
  KEY `Affiliation` (`affiliation`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Me','1234',3,'Kensalt');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internalfortifiedb2`
--

DROP TABLE IF EXISTS `internalfortifiedb2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internalfortifiedb2` (
  `checkNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `deviceCondition` tinyint(1) NOT NULL DEFAULT '1',
  `observations` varchar(45) DEFAULT NULL,
  `checkedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`checkNumber`),
  KEY `deviceCompNumber` (`deviceCompNumber`,`manufacturerCompName`),
  KEY `manufacturerCompName` (`manufacturerCompName`),
  CONSTRAINT `internalfortifiedb2_ibfk_1` FOREIGN KEY (`deviceCompNumber`) REFERENCES `manucdevices` (`deviceCompNumber`),
  CONSTRAINT `internalfortifiedb2_ibfk_2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manucdevices` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internalfortifiedb2`
--

LOCK TABLES `internalfortifiedb2` WRITE;
/*!40000 ALTER TABLE `internalfortifiedb2` DISABLE KEYS */;
/*!40000 ALTER TABLE `internalfortifiedb2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factories`
--

DROP TABLE IF EXISTS `factories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factories` (
  `factoryNumber` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `manufacturerFortName` varchar(45) NOT NULL,
  PRIMARY KEY (`factoryNumber`,`manufacturerFortName`),
  UNIQUE KEY `Manufacturer_FCentre_Name_UNIQUE` (`factoryName`),
  KEY `fk_Manufacturer_FCenters_Manufacturer_Fortifier1` (`manufacturerFortName`),
  CONSTRAINT `fk_Manufacturer_FCenters_Manufacturer_Fortifier1` FOREIGN KEY (`manufacturerFortName`) REFERENCES `manufacturerfortified` (`manufactuerFortName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factories`
--

LOCK TABLES `factories` WRITE;
/*!40000 ALTER TABLE `factories` DISABLE KEYS */;
INSERT INTO `factories` VALUES (1,'Kensalt','Nairobi','uiu','1212','Kensalt'),(2,'Salt Iod',NULL,NULL,NULL,'Kensalt');
/*!40000 ALTER TABLE `factories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `externalfortifiedb3`
--

DROP TABLE IF EXISTS `externalfortifiedb3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `externalfortifiedb3` (
  `transcationNumber` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(25) NOT NULL,
  `dateOfInspection` date NOT NULL,
  `factoryName` varchar(45) NOT NULL,
  `factoryRepresentative` varchar(45) DEFAULT NULL,
  `areasVisited` varchar(100) NOT NULL COMMENT 'a comma separated list',
  `nonCompliances` text NOT NULL,
  `suggestionsForImprovement` text NOT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(25) NOT NULL,
  `inspectorDate` date NOT NULL,
  `receivedDate` date NOT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transcationNumber`),
  KEY `manufacturerCompName` (`factoryName`),
  CONSTRAINT `externalfortifiedb3_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `externalfortifiedb3`
--

LOCK TABLES `externalfortifiedb3` WRITE;
/*!40000 ALTER TABLE `externalfortifiedb3` DISABLE KEYS */;
INSERT INTO `externalfortifiedb3` VALUES (1,'re','2012-05-07','Kensalt','wr','packaging,rm_salt_warehouse,other,','w','r','w','r','2012-05-28','2012-05-21','w');
/*!40000 ALTER TABLE `externalfortifiedb3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wheat_internalfortc1`
--

DROP TABLE IF EXISTS `wheat_internalfortc1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheat_internalfortc1` (
  `wheat_internalFortC1ID` int(11) NOT NULL AUTO_INCREMENT,
  `shiftTime` varchar(45) DEFAULT NULL,
  `wheatProduced` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `wheatFlourVSPremix` double DEFAULT NULL,
  `notes` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortC1ID`),
  KEY `wheat_internalFortC1_iodizationcenters` (`factoryName`),
  CONSTRAINT `wheat_internalFortC1_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheat_internalfortc1`
--

LOCK TABLES `wheat_internalfortc1` WRITE;
/*!40000 ALTER TABLE `wheat_internalfortc1` DISABLE KEYS */;
INSERT INTO `wheat_internalfortc1` VALUES (1,'02:57 PM',12,12,1,'3','2','2012-05-21','3',NULL,'Kensalt'),(2,'02:57 PM',12,12,1,'3','2','2012-05-21','3',NULL,'Kensalt'),(3,'03:04 PM',1,12,1,'2','2','2012-05-21','1',NULL,'Kensalt'),(4,'05:33 AM',1,2,1,'3','1','2012-05-22','3',NULL,'Kensalt');
/*!40000 ALTER TABLE `wheat_internalfortc1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `externalfortifiedb2`
--

DROP TABLE IF EXISTS `externalfortifiedb2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `externalfortifiedb2` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `productionArea` varchar(45) DEFAULT NULL,
  `packageArea` varchar(45) DEFAULT NULL,
  `warehouse` varchar(45) DEFAULT NULL,
  `staffFacilities` varchar(45) DEFAULT NULL,
  `hygiene` varchar(45) DEFAULT NULL,
  `protectiveGear` varchar(45) DEFAULT NULL,
  `trainingInTasks` varchar(45) DEFAULT NULL,
  `receiptStoragePremix` varchar(45) DEFAULT NULL,
  `premixDilution` varchar(45) DEFAULT NULL,
  `feederVerification` varchar(45) DEFAULT NULL,
  `QCSaltSampling` varchar(45) DEFAULT NULL,
  `iodineTest` varchar(45) DEFAULT NULL,
  `iodineCompoundUptoDate` varchar(45) DEFAULT NULL,
  `COAPerLot` varchar(45) DEFAULT NULL,
  `iodineStorageAdequate` varchar(45) DEFAULT NULL,
  `FIFOSystem` varchar(45) DEFAULT NULL,
  `iodineCompoundHandling` varchar(45) DEFAULT NULL,
  `premixPreparation` varchar(10) NOT NULL,
  `premixStorageHandling` varchar(45) DEFAULT NULL,
  `feederSprayerRecord` varchar(45) DEFAULT NULL,
  `feederLevelAdequate` varchar(45) DEFAULT NULL,
  `saltProductionPremixRecords` varchar(45) DEFAULT NULL,
  `saltSamplingEachShift` varchar(45) DEFAULT NULL,
  `saltProductionPremixRight` varchar(45) DEFAULT NULL,
  `iodineResultLess40MgPerKg` varchar(45) DEFAULT NULL,
  `saltSamplesAnalyzed` varchar(10) NOT NULL,
  `internalTest` varchar(45) DEFAULT NULL,
  `externalTest` varchar(45) DEFAULT NULL,
  `dailyCompositeSamples` varchar(45) DEFAULT NULL,
  `last30SamplesAvailable` varchar(45) DEFAULT NULL,
  `labelingSpecifications` varchar(45) NOT NULL,
  `fortifiedSaltStoredAdequate` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActions` varchar(45) DEFAULT NULL,
  `assessmentOfCorrectiveAction` tinyint(4) DEFAULT NULL COMMENT '1-adequtuate, 0-inadequate',
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `premixType` varchar(45) DEFAULT NULL COMMENT 'iodate/iodine',
  `idComposite` varchar(45) DEFAULT NULL,
  `iodineMgPerKg0` varchar(45) DEFAULT NULL,
  `refIodine` varchar(45) DEFAULT NULL,
  `iodineMgPerKg1` varchar(45) DEFAULT NULL,
  `idOther` varchar(45) DEFAULT NULL,
  `iodineMgPerKg2` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableB2(13)_AuditInspect_Manufacturer_FCenters1` (`factoryName`),
  CONSTRAINT `fk_TableB2(13)_AuditInspect_Manufacturer_FCenters1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `externalfortifiedb2`
--

LOCK TABLES `externalfortifiedb2` WRITE;
/*!40000 ALTER TABLE `externalfortifiedb2` DISABLE KEYS */;
/*!40000 ALTER TABLE `externalfortifiedb2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manucdevices`
--

DROP TABLE IF EXISTS `manucdevices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manucdevices` (
  `manufacturerCompName` varchar(45) NOT NULL,
  `deviceCompNumber` varchar(45) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerCompName`,`deviceCompNumber`),
  KEY `deviceCompNumber` (`deviceCompNumber`),
  CONSTRAINT `manucdevices_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `factories` (`factoryName`),
  CONSTRAINT `manucdevices_ibfk_2` FOREIGN KEY (`deviceCompNumber`) REFERENCES `devices` (`deviceSerialNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manucdevices`
--

LOCK TABLES `manucdevices` WRITE;
/*!40000 ALTER TABLE `manucdevices` DISABLE KEYS */;
/*!40000 ALTER TABLE `manucdevices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oil_tableb2`
--

DROP TABLE IF EXISTS `oil_tableb2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oil_tableb2` (
  `fortifiedoilb2ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) NOT NULL,
  `deviceCondition` tinyint(1) NOT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `checkedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedoilb2ID`),
  KEY `fortifiedoilb2_ibfk_1` (`deviceCompNumber`),
  KEY `fortifiedoilb2_ibfk_2` (`manufacturerCompName`),
  CONSTRAINT `fortifiedoilb2_ibfk_1` FOREIGN KEY (`deviceCompNumber`) REFERENCES `manucdevices` (`deviceCompNumber`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fortifiedoilb2_ibfk_2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manucdevices` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oil_tableb2`
--

LOCK TABLES `oil_tableb2` WRITE;
/*!40000 ALTER TABLE `oil_tableb2` DISABLE KEYS */;
/*!40000 ALTER TABLE `oil_tableb2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `externalfortifiedb1`
--

DROP TABLE IF EXISTS `externalfortifiedb1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `externalfortifiedb1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `signature` varchar(15) NOT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableB1(12)_TechAudit_Manufacturer_FCenters1` (`factoryName`),
  CONSTRAINT `fk_TableB1(12)_TechAudit_Manufacturer_FCenters1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `externalfortifiedb1`
--

LOCK TABLES `externalfortifiedb1` WRITE;
/*!40000 ALTER TABLE `externalfortifiedb1` DISABLE KEYS */;
INSERT INTO `externalfortifiedb1` VALUES (1,'2012-05-20','Kensalt','Adams Opiyo','xv','vx','xv','xv','xv');
/*!40000 ALTER TABLE `externalfortifiedb1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internalfortifiedc1`
--

DROP TABLE IF EXISTS `internalfortifiedc1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internalfortifiedc1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(8) DEFAULT NULL,
  `saltProducedMT` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `saltFortVsPremixUsed` double DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `factoryName` (`factoryName`),
  CONSTRAINT `internalfortifiedc1_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internalfortifiedc1`
--

LOCK TABLES `internalfortifiedc1` WRITE;
/*!40000 ALTER TABLE `internalfortifiedc1` DISABLE KEYS */;
INSERT INTO `internalfortifiedc1` VALUES (4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Kensalt'),(5,'2012-05-20','08:16 PM',34,1,4,'2','4','2','Kensalt'),(6,'2012-05-20','08:16 PM',34,1,4,'2','4','2','Kensalt');
/*!40000 ALTER TABLE `internalfortifiedc1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oil_tableb1`
--

DROP TABLE IF EXISTS `oil_tableb1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oil_tableb1` (
  `fortifiedoilb1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `batchNumber` varchar(45) DEFAULT NULL,
  `batchSize` double DEFAULT NULL,
  `vitaminAAmount` double DEFAULT NULL,
  `premixStart` varchar(8) DEFAULT NULL,
  `premixEnd` varchar(8) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedoilb1ID`),
  KEY `fortifiedoilb1_manufacturerfortified` (`factoryName`),
  CONSTRAINT `fortifiedoilb1_manufacturerfortified` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oil_tableb1`
--

LOCK TABLES `oil_tableb1` WRITE;
/*!40000 ALTER TABLE `oil_tableb1` DISABLE KEYS */;
INSERT INTO `oil_tableb1` VALUES (1,'2012-05-28','32',1,343,'08:56 PM','08:56 PM','','Kensalt');
/*!40000 ALTER TABLE `oil_tableb1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maize_externalfortb3`
--

DROP TABLE IF EXISTS `maize_externalfortb3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maize_externalfortb3` (
  `maize_externalfortb3ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) NOT NULL,
  `dateOfInspection` varchar(45) NOT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `factoryRepresentative` varchar(45) DEFAULT NULL,
  `areasVisited` varchar(100) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `inspectorDate` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_externalfortb3ID`),
  KEY `maize_externalfortb3_iodizationcenters` (`factoryName`),
  CONSTRAINT `maize_externalfortb3_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maize_externalfortb3`
--

LOCK TABLES `maize_externalfortb3` WRITE;
/*!40000 ALTER TABLE `maize_externalfortb3` DISABLE KEYS */;
INSERT INTO `maize_externalfortb3` VALUES (1,'bvb','2012-05-08','Kensalt','wr',NULL,'xcx','cxcx','bb','cmcvv','2012-05-22','2012-05-27','vmv',NULL),(2,'bvb','2012-05-08','Kensalt','wr',NULL,'xcx','cxcx','bb','cmcvv','2012-05-22','2012-05-27','vmv',NULL),(3,'bvb','2012-05-08','Kensalt','wr',NULL,'xcx','cxcx','bb','cmcvv','2012-05-22','2012-05-27','vmv',NULL),(4,'bvb','2012-05-15','Kensalt','t',NULL,'fsf','svbheb','bb','m','2012-05-04','2012-05-02','bngn',NULL);
/*!40000 ALTER TABLE `maize_externalfortb3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maize_externalfortb2`
--

DROP TABLE IF EXISTS `maize_externalfortb2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maize_externalfortb2` (
  `maize_externalfortb2ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `productionArea` varchar(45) DEFAULT NULL,
  `packagingArea` varchar(45) DEFAULT NULL,
  `warehouse` varchar(45) DEFAULT NULL,
  `staffFacilities` varchar(45) DEFAULT NULL,
  `hygiene` varchar(45) DEFAULT NULL,
  `protectiveClothing` varchar(45) DEFAULT NULL,
  `trainnedInTasks` varchar(45) DEFAULT NULL,
  `receiptAndStorage` varchar(45) DEFAULT NULL,
  `premixDilution` varchar(45) DEFAULT NULL,
  `feederVerification` varchar(45) DEFAULT NULL,
  `samplingOfMaize` varchar(45) DEFAULT NULL,
  `ironSpotTest` varchar(45) DEFAULT NULL,
  `premixInventory` varchar(45) DEFAULT NULL,
  `COAReceived` varchar(45) DEFAULT NULL,
  `premixStored` varchar(45) DEFAULT NULL,
  `premixHandledWell` varchar(45) DEFAULT NULL,
  `premixDilutionApplicable` varchar(45) DEFAULT NULL,
  `homogeneityAssessed` varchar(45) DEFAULT NULL,
  `adequateStorage` varchar(45) DEFAULT NULL,
  `recordsOfFeeder` varchar(45) DEFAULT NULL,
  `premixLevel` varchar(45) DEFAULT NULL,
  `recordsOfFlour` varchar(45) DEFAULT NULL,
  `flourSamplesTaken` varchar(45) DEFAULT NULL,
  `ratioMaizeProduced` varchar(45) DEFAULT NULL,
  `ironContent` varchar(45) DEFAULT NULL,
  `spotTest` varchar(45) DEFAULT NULL,
  `quantitativeMethodIron` varchar(45) DEFAULT NULL,
  `quantitativeMethodVitamin` varchar(45) DEFAULT NULL,
  `dailyCompositeSamples` varchar(45) DEFAULT NULL,
  `last30Samples` varchar(45) DEFAULT NULL,
  `labelingMeetsSpecifications` varchar(45) DEFAULT NULL,
  `fortifiedMaizeFlour` varchar(45) DEFAULT NULL,
  `FIFOSystem` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActions` varchar(45) DEFAULT NULL,
  `assessmentOfCorrectiveAction` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `premixType` varchar(45) DEFAULT NULL,
  `compositeID` varchar(45) DEFAULT NULL,
  `ironMgPerKg0` varchar(45) DEFAULT NULL,
  `ironMgPerKg1` varchar(45) DEFAULT NULL,
  `vitaminAMgPerKg0` varchar(45) DEFAULT NULL,
  `IDOther` varchar(45) DEFAULT NULL,
  `ironMgPerKg2` varchar(45) DEFAULT NULL,
  `vitaminAMgPerKg1` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_externalfortb2ID`),
  KEY `maize_externalfortb2_iodizationcenters` (`factoryName`),
  CONSTRAINT `maize_externalfortb2_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maize_externalfortb2`
--

LOCK TABLES `maize_externalfortb2` WRITE;
/*!40000 ALTER TABLE `maize_externalfortb2` DISABLE KEYS */;
INSERT INTO `maize_externalfortb2` VALUES (1,'cc','2012-05-22','cncn','Kensalt','yes','yes','yes',NULL,'no','n/a','yes','yes','no','no','yes','yes','yes','yes','yes','yes','no','yes','yes','yes','no','yes','yes','no','n/a','no','n/a','n/a','yes','yes','yes','yes','no','cv','zsa','Adequate','fw','dv','Vvs',NULL,'121','12','12',NULL,'12',NULL,'21',NULL,'2012-05-22'),(2,'rwr','2012-05-22','rwr','Kensalt','yes','yes','yes',NULL,'no','no','no','yes','n/a','no','yes','yes','yes','yes','yes','yes','no','yes','yes','yes','no','yes','yes','n/a','n/a','no','n/a','n/a','yes','yes','yes','yes','no','vb','vbv','Adequate','zczs','xcx','cxc','Iodine','12','1','1',NULL,'12',NULL,'21','cmcm','2012-05-22'),(3,'rwr','2012-05-22','rwr','Kensalt','yes','yes','yes',NULL,'no','no','no','yes','n/a','no','yes','yes','yes','yes','yes','yes','no','yes','yes','yes','no','yes','yes','n/a','n/a','no','n/a','n/a','yes','yes','yes','yes','no','vb','vbv','Adequate','zczs','xcx','cxc','Iodine','12','1','1',NULL,'12',NULL,'21','cmcm','2012-05-22');
/*!40000 ALTER TABLE `maize_externalfortb2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maize_externalfortb1`
--

DROP TABLE IF EXISTS `maize_externalfortb1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maize_externalfortb1` (
  `maize_externalfortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_externalfortB1ID`),
  KEY `maize_externalfortB1_manufacturerfortified` (`factoryName`),
  CONSTRAINT `maize_externalfortB1_manufacturerfortified` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maize_externalfortb1`
--

LOCK TABLES `maize_externalfortb1` WRITE;
/*!40000 ALTER TABLE `maize_externalfortb1` DISABLE KEYS */;
INSERT INTO `maize_externalfortb1` VALUES (1,'Object','Kensalt','bb',NULL,'vb','12','1','2'),(2,'2012-05-21','Kensalt','cv','b','v','b','v','b'),(3,'2012-05-21','Kensalt','cv','b','v','b','v','b');
/*!40000 ALTER TABLE `maize_externalfortb1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internalfortifieda2`
--

DROP TABLE IF EXISTS `internalfortifieda2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internalfortifieda2` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `supplierCOA` varchar(45) DEFAULT NULL,
  `noOfDrums` int(11) DEFAULT NULL,
  `lotId` varchar(45) DEFAULT NULL,
  `expiryDate` date DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `dateOfReporting` date DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT 'n/a',
  PRIMARY KEY (`transactionNumber`),
  KEY `manufacturerCompName` (`manufacturerCompName`),
  KEY `supplierCOA` (`supplierCOA`),
  KEY `lotId` (`lotId`),
  CONSTRAINT `internalfortifieda2_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internalfortifieda2`
--

LOCK TABLES `internalfortifieda2` WRITE;
/*!40000 ALTER TABLE `internalfortifieda2` DISABLE KEYS */;
INSERT INTO `internalfortifieda2` VALUES (1,'2012-05-22','54',56,'6','2012-05-08','5','2012-05-20','Salt Iod');
/*!40000 ALTER TABLE `internalfortifieda2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maize_internalfortb1`
--

DROP TABLE IF EXISTS `maize_internalfortb1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maize_internalfortb1` (
  `maize_internalfortb1ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `productionRate` double DEFAULT NULL,
  `theoreticFeederFlow` double DEFAULT NULL,
  `feederFlow1` double DEFAULT NULL,
  `feederFlow2` double DEFAULT NULL,
  `feederFlow3` double DEFAULT NULL,
  `CV` varchar(45) DEFAULT NULL,
  `adjusted` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalfortb1ID`),
  KEY `factoryName` (`factoryName`),
  CONSTRAINT `maize_internalfortb1_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maize_internalfortb1`
--

LOCK TABLES `maize_internalfortb1` WRITE;
/*!40000 ALTER TABLE `maize_internalfortb1` DISABLE KEYS */;
INSERT INTO `maize_internalfortb1` VALUES (6,'Salt Iod','2012-05-07','12',1,1,1,1,2,'1','Yes','bvb','21'),(7,'Salt Iod','2012-05-07','12',1,1,1,1,2,'1','Yes','bvb','21'),(8,'Salt Iod','2012-05-07','12',1,1,1,1,2,'1','Yes','bvb','21');
/*!40000 ALTER TABLE `maize_internalfortb1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maize_internalfortb2`
--

DROP TABLE IF EXISTS `maize_internalfortb2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maize_internalfortb2` (
  `maize_internalfortb2ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `flourProducedMT` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalfortb2ID`),
  KEY `maize_internalfortb2_iodizationcenters` (`factoryName`),
  CONSTRAINT `maize_internalfortb2_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maize_internalfortb2`
--

LOCK TABLES `maize_internalfortb2` WRITE;
/*!40000 ALTER TABLE `maize_internalfortb2` DISABLE KEYS */;
INSERT INTO `maize_internalfortb2` VALUES (1,'Salt Iod','2012-05-01','12',1,'2',3,NULL,'z'),(2,'Salt Iod','2012-05-01','12',1,'2',3,'v','z');
/*!40000 ALTER TABLE `maize_internalfortb2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manufacturerfortified`
--

DROP TABLE IF EXISTS `manufacturerfortified`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manufacturerfortified` (
  `manufacturerFortId` int(11) NOT NULL AUTO_INCREMENT,
  `manufactuerFortName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerFortId`),
  UNIQUE KEY `Manufactuer_FName_UNIQUE` (`manufactuerFortName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manufacturerfortified`
--

LOCK TABLES `manufacturerfortified` WRITE;
/*!40000 ALTER TABLE `manufacturerfortified` DISABLE KEYS */;
INSERT INTO `manufacturerfortified` VALUES (1,'Kensalt','vbvb','Magadi','5454');
/*!40000 ALTER TABLE `manufacturerfortified` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `internalfortifiedb1`
--

DROP TABLE IF EXISTS `internalfortifiedb1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internalfortifiedb1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `fillerWeight` double DEFAULT NULL,
  `iodineWeight` double DEFAULT NULL,
  `finalPremixWeight1` double DEFAULT NULL,
  `startTime` varchar(8) DEFAULT NULL,
  `endTime` varchar(8) DEFAULT NULL,
  `finalPremixWeight` double DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `factoryName` (`factoryName`),
  CONSTRAINT `internalfortifiedb1_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internalfortifiedb1`
--

LOCK TABLES `internalfortifiedb1` WRITE;
/*!40000 ALTER TABLE `internalfortifiedb1` DISABLE KEYS */;
INSERT INTO `internalfortifiedb1` VALUES (6,'2012-05-14',1,2,2,'08:10 PM','08:10 PM',2,'3','Kensalt');
/*!40000 ALTER TABLE `internalfortifiedb1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maize_internalforta2`
--

DROP TABLE IF EXISTS `maize_internalforta2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maize_internalforta2` (
  `maize_internalforta2ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `quantityReceived` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `expiryDate` varchar(45) DEFAULT NULL,
  `dispatchedQuantity` double DEFAULT NULL,
  `reportingDate` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_internalforta2ID`),
  KEY `maize_internalforta2_manufacturercompound` (`manufacturerCompName`),
  CONSTRAINT `maize_internalforta2_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maize_internalforta2`
--

LOCK TABLES `maize_internalforta2` WRITE;
/*!40000 ALTER TABLE `maize_internalforta2` DISABLE KEYS */;
INSERT INTO `maize_internalforta2` VALUES (1,'2012-05-16','12:00',12,'2','2012-05-07',NULL,'Object','1','Salt Iod'),(2,'2012-05-16','12:00',12,'2','2012-05-07',NULL,'2012-05-20','1','Salt Iod'),(3,'2012-05-16','12:00',12,'2','2012-05-07',NULL,'2012-05-20','1','Salt Iod');
/*!40000 ALTER TABLE `maize_internalforta2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-05-23 13:10:55
