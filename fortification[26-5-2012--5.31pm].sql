-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2012 at 06:32 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fortification`
--
CREATE DATABASE `fortification` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fortification`;

-- --------------------------------------------------------

--
-- Table structure for table `accesslog`
--

CREATE TABLE IF NOT EXISTS `accesslog` (
  `accessLogID` bigint(20) NOT NULL AUTO_INCREMENT,
  `usersID` bigint(20) NOT NULL,
  `logOnstamp` timestamp NULL DEFAULT NULL,
  `logOffstamp` timestamp NULL DEFAULT NULL,
  `remoteIP` varchar(45) NOT NULL,
  PRIMARY KEY (`accessLogID`),
  KEY `users_accessLog` (`usersID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `accesslog`
--


-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE IF NOT EXISTS `devices` (
  `deviceSerialNumber` varchar(50) NOT NULL,
  `deviceType` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`deviceSerialNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`deviceSerialNumber`, `deviceType`, `remarks`) VALUES
('6754320', 'Drier', 'In good condition'),
('6754321', 'Balance', 'In good condition'),
('6754327', 'Pump', 'In good condition'),
('6754351', 'Spraying/Drip Equipment', 'In good condition'),
('76465', 'Feeding Tubes', 'In good condition'),
('7865432', 'Blender', 'In good condition'),
('89899', 'Stirrer', 'In good condition'),
('93431', 'Blending Tanks', 'In good condition');

-- --------------------------------------------------------

--
-- Table structure for table `externalfortifiedb1`
--

CREATE TABLE IF NOT EXISTS `externalfortifiedb1` (
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
  KEY `fk_TableB1(12)_TechAudit_Manufacturer_FCenters1` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `externalfortifiedb1`
--

INSERT INTO `externalfortifiedb1` (`transactionNumber`, `dates`, `factoryName`, `publicHealthOfficer`, `name`, `position`, `signature`, `opening`, `closing`) VALUES
(1, '2012-05-20', 'Kensalt', 'Adams Opiyo', 'xv', 'vx', 'xv', 'xv', 'xv');

-- --------------------------------------------------------

--
-- Table structure for table `externalfortifiedb2`
--

CREATE TABLE IF NOT EXISTS `externalfortifiedb2` (
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
  KEY `fk_TableB2(13)_AuditInspect_Manufacturer_FCenters1` (`factoryName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `externalfortifiedb2`
--


-- --------------------------------------------------------

--
-- Table structure for table `externalfortifiedb3`
--

CREATE TABLE IF NOT EXISTS `externalfortifiedb3` (
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
  KEY `manufacturerCompName` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `externalfortifiedb3`
--

INSERT INTO `externalfortifiedb3` (`transcationNumber`, `inspectionRegistry`, `dateOfInspection`, `factoryName`, `factoryRepresentative`, `areasVisited`, `nonCompliances`, `suggestionsForImprovement`, `publicHealthOfficer`, `receivedBy`, `inspectorDate`, `receivedDate`, `supervisorName`) VALUES
(1, 're', '2012-05-07', 'Kensalt', 'wr', 'packaging,rm_salt_warehouse,other,', 'w', 'r', 'w', 'r', '2012-05-28', '2012-05-21', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `externaliodizationb1`
--

CREATE TABLE IF NOT EXISTS `externaliodizationb1` (
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
  KEY `fk_TableB1(1011)_TechAudit_Manufacturer_FCenters1` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `externaliodizationb1`
--

INSERT INTO `externaliodizationb1` (`transactionNumber`, `factoryName`, `dates`, `inspector`, `inventoryUpToDate`, `sufficientIodine3Months`, `adequateStorage`, `potassiumIodateAmounts`, `premixRecords`, `FIFOSystem`, `saltVsPremix`, `iodizedSaltUpToDate`, `saltPerKgAdequate`, `sampleNumber`, `iodineContent0`, `sampleReprocessed`, `iodineContent1`, `nonCompliances`, `suggestionsForImprovement`, `receivedBy`, `supervisorName`) VALUES
(1, 'Kensalt', '2012-05-20', 'e', 'n/a', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', '21', '45', '12', '43', '1', NULL, NULL, 'e');

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE IF NOT EXISTS `factories` (
  `factoryNumber` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `manufacturerFortName` varchar(45) NOT NULL,
  PRIMARY KEY (`factoryNumber`,`manufacturerFortName`),
  UNIQUE KEY `Manufacturer_FCentre_Name_UNIQUE` (`factoryName`),
  KEY `fk_Manufacturer_FCenters_Manufacturer_Fortifier1` (`manufacturerFortName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`factoryNumber`, `factoryName`, `location`, `address`, `phoneNumber`, `manufacturerFortName`) VALUES
(1, 'Kensalt', 'Nairobi', 'uiu', '1212', 'Kensalt'),
(2, 'Salt Iod', NULL, NULL, NULL, 'Kensalt'),
(3, 'Ken Iodization I', 'Pwani', '678', '4567898', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifieda1`
--

CREATE TABLE IF NOT EXISTS `internalfortifieda1` (
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
  KEY `fk_TableA2(23)_Manufacturer_Compound1` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `internalfortifieda1`
--

INSERT INTO `internalfortifieda1` (`receiptNumber`, `productType`, `manufacturerCompName`, `inspectedBy`, `purchaseOrderNumber`, `dates`, `quantity`, `integrityObservation`, `lotNumber`, `lotObservation`, `productionDate`, `productObservation`, `expiryDate`, `expirationObservation`, `contentClaimedLabel`, `contentObservation`, `certificateOfAnalysis`, `certificateObservation`, `other`, `otherObservation`, `accepted`, `reasonsForRejection`, `receivedBy`) VALUES
(1, 'Iodine', 'Salt Iod', 'Port Official', '8YUI0', '2012-05-26', 34, 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'none', 'n/a', 1, 'passed integrity test', 'Marcella');

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifieda2`
--

CREATE TABLE IF NOT EXISTS `internalfortifieda2` (
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
  KEY `lotId` (`lotId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `internalfortifieda2`
--

INSERT INTO `internalfortifieda2` (`transactionNumber`, `dates`, `supplierCOA`, `noOfDrums`, `lotId`, `expiryDate`, `transactedBy`, `dateOfReporting`, `manufacturerCompName`) VALUES
(1, '2012-05-22', '54', 56, '6', '2012-05-08', '5', '2012-05-20', 'Salt Iod');

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifiedb1`
--

CREATE TABLE IF NOT EXISTS `internalfortifiedb1` (
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
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `internalfortifiedb1`
--

INSERT INTO `internalfortifiedb1` (`transactionNumber`, `dates`, `fillerWeight`, `iodineWeight`, `finalPremixWeight1`, `startTime`, `endTime`, `finalPremixWeight`, `transactedBy`, `factoryName`) VALUES
(6, '2012-05-14', 1, 2, 2, '08:10 PM', '08:10 PM', 2, '3', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifiedb2`
--

CREATE TABLE IF NOT EXISTS `internalfortifiedb2` (
  `checkNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `deviceCondition` tinyint(1) NOT NULL DEFAULT '1',
  `observations` varchar(45) DEFAULT NULL,
  `checkedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`checkNumber`),
  KEY `deviceCompNumber` (`deviceCompNumber`,`manufacturerCompName`),
  KEY `manufacturerCompName` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `internalfortifiedb2`
--


-- --------------------------------------------------------

--
-- Table structure for table `internalfortifiedc1`
--

CREATE TABLE IF NOT EXISTS `internalfortifiedc1` (
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
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `internalfortifiedc1`
--

INSERT INTO `internalfortifiedc1` (`transactionNumber`, `dates`, `shiftTime`, `saltProducedMT`, `premixUsed`, `saltFortVsPremixUsed`, `notes`, `comments`, `transactedBy`, `factoryName`) VALUES
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kensalt'),
(5, '2012-05-20', '08:16 PM', 34, 1, 4, '2', '4', '2', 'Kensalt'),
(6, '2012-05-20', '08:16 PM', 34, 1, 4, '2', '4', '2', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `maize_externalfortb1`
--

CREATE TABLE IF NOT EXISTS `maize_externalfortb1` (
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
  KEY `maize_externalfortB1_manufacturerfortified` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maize_externalfortb1`
--

INSERT INTO `maize_externalfortb1` (`maize_externalfortB1ID`, `dates`, `factoryName`, `publicHealthOfficer`, `name`, `position`, `signature`, `opening`, `closing`) VALUES
(1, 'Object', 'Kensalt', 'bb', NULL, 'vb', '12', '1', '2'),
(2, '2012-05-21', 'Kensalt', 'cv', 'b', 'v', 'b', 'v', 'b'),
(3, '2012-05-21', 'Kensalt', 'cv', 'b', 'v', 'b', 'v', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `maize_externalfortb2`
--

CREATE TABLE IF NOT EXISTS `maize_externalfortb2` (
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
  `FIFOSystemFlour` varchar(45) DEFAULT NULL,
  `FIFOSystemPremix` varchar(45) DEFAULT NULL,
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
  KEY `maize_externalfortb2_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `maize_externalfortb2`
--

INSERT INTO `maize_externalfortb2` (`maize_externalfortb2ID`, `inspectionRegistry`, `dates`, `publicHealthOfficer`, `factoryName`, `productionArea`, `packagingArea`, `warehouse`, `staffFacilities`, `hygiene`, `protectiveClothing`, `trainnedInTasks`, `receiptAndStorage`, `premixDilution`, `feederVerification`, `samplingOfMaize`, `ironSpotTest`, `premixInventory`, `COAReceived`, `premixStored`, `premixHandledWell`, `premixDilutionApplicable`, `homogeneityAssessed`, `adequateStorage`, `recordsOfFeeder`, `premixLevel`, `recordsOfFlour`, `flourSamplesTaken`, `ratioMaizeProduced`, `ironContent`, `spotTest`, `quantitativeMethodIron`, `quantitativeMethodVitamin`, `dailyCompositeSamples`, `last30Samples`, `labelingMeetsSpecifications`, `fortifiedMaizeFlour`, `FIFOSystemFlour`, `FIFOSystemPremix`, `recommendations`, `correctiveActions`, `assessmentOfCorrectiveAction`, `comments`, `nonCompliances`, `suggestionsForImprovement`, `premixType`, `compositeID`, `ironMgPerKg0`, `ironMgPerKg1`, `vitaminAMgPerKg0`, `IDOther`, `ironMgPerKg2`, `vitaminAMgPerKg1`, `supervisorName`, `supervisorDate`) VALUES
(1, 'cc', '2012-05-22', 'cncn', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'n/a', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'no', NULL, 'cv', 'zsa', 'Adequate', 'fw', 'dv', 'Vvs', NULL, '121', '12', '12', NULL, '12', NULL, '21', NULL, '2012-05-22'),
(2, 'rwr', '2012-05-22', 'rwr', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'no', 'yes', 'n/a', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'n/a', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'no', NULL, 'vb', 'vbv', 'Adequate', 'zczs', 'xcx', 'cxc', 'Iodine', '12', '1', '1', NULL, '12', NULL, '21', 'cmcm', '2012-05-22'),
(3, 'rwr', '2012-05-22', 'rwr', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'no', 'yes', 'n/a', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'n/a', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'no', NULL, 'vb', 'vbv', 'Adequate', 'zczs', 'xcx', 'cxc', 'Iodine', '12', '1', '1', NULL, '12', NULL, '21', 'cmcm', '2012-05-22'),
(4, 'A124T', '2012-05-26', 'Liam', 'Ken Iodization I', 'yes', 'yes', 'yes', NULL, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'n/a', 'yes', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'w', 'w', 'Adequate', 'w', 'w', 'w', 'Iodine', 'A102', '3', '3.5', NULL, 'A1040', NULL, '33', 'Lupe', '2012-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `maize_externalfortb3`
--

CREATE TABLE IF NOT EXISTS `maize_externalfortb3` (
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
  KEY `maize_externalfortb3_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `maize_externalfortb3`
--

INSERT INTO `maize_externalfortb3` (`maize_externalfortb3ID`, `inspectionRegistry`, `dateOfInspection`, `factoryName`, `factoryRepresentative`, `areasVisited`, `nonCompliances`, `suggestionsForImprovement`, `publicHealthOfficer`, `receivedBy`, `inspectorDate`, `receivedDate`, `supervisorName`, `supervisorDate`) VALUES
(1, 'bvb', '2012-05-08', 'Kensalt', 'wr', NULL, 'xcx', 'cxcx', 'bb', 'cmcvv', '2012-05-22', '2012-05-27', 'vmv', NULL),
(2, 'bvb', '2012-05-08', 'Kensalt', 'wr', NULL, 'xcx', 'cxcx', 'bb', 'cmcvv', '2012-05-22', '2012-05-27', 'vmv', NULL),
(3, 'bvb', '2012-05-08', 'Kensalt', 'wr', NULL, 'xcx', 'cxcx', 'bb', 'cmcvv', '2012-05-22', '2012-05-27', 'vmv', NULL),
(4, 'bvb', '2012-05-15', 'Kensalt', 't', NULL, 'fsf', 'svbheb', 'bb', 'm', '2012-05-04', '2012-05-02', 'bngn', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalforta1`
--

CREATE TABLE IF NOT EXISTS `maize_internalforta1` (
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
  KEY `maize_internalforta1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `maize_internalforta1`
--

INSERT INTO `maize_internalforta1` (`maize_internalforta1ID`, `productType`, `manufacturerCompName`, `inspectedBy`, `dates`, `quantity`, `integrityOfBoxes`, `integrityObservation`, `lotNumber`, `lotObservation`, `productionDate`, `productionObservation`, `expiryDate`, `expiryObservation`, `micronutrientLevels`, `micronutrientObservation`, `certificateOfAnalysis`, `certificateOfAnalysisObservation`, `other`, `otherObservation`, `accepted`, `reasonsForRejection`, `receivedBy`, `receivedDate`) VALUES
(1, 'Iodine', 'Salt Iod', '1', '2012-05-20', 'vc', NULL, 'cvc', 'on', 'vc', 'on', 'vc', 'on', 'vc', 'on', 'vc', 'on', 'vcv', 'vcv', 'vcv', 1, 'vccv', 'vcv', NULL),
(2, 'Iodine', 'Salt Iod', '1', '2012-05-20', 'vc', NULL, 'cvc', 'on', 'vc', 'on', 'vc', 'on', 'vc', 'on', 'vc', 'on', 'vcv', 'vcv', 'vcv', 1, 'vccv', 'vcv', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalforta2`
--

CREATE TABLE IF NOT EXISTS `maize_internalforta2` (
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
  KEY `maize_internalforta2_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maize_internalforta2`
--

INSERT INTO `maize_internalforta2` (`maize_internalforta2ID`, `dates`, `shiftTime`, `quantityReceived`, `lotID`, `expiryDate`, `dispatchedQuantity`, `reportingDate`, `signature`, `manufacturerCompName`) VALUES
(1, '2012-05-16', '12:00', 12, '2', '2012-05-07', NULL, 'Object', '1', 'Salt Iod'),
(2, '2012-05-16', '12:00', 12, '2', '2012-05-07', NULL, '2012-05-20', '1', 'Salt Iod'),
(3, '2012-05-16', '12:00', 12, '2', '2012-05-07', NULL, '2012-05-20', '1', 'Salt Iod');

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalfortb1`
--

CREATE TABLE IF NOT EXISTS `maize_internalfortb1` (
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
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `maize_internalfortb1`
--

INSERT INTO `maize_internalfortb1` (`maize_internalfortb1ID`, `factoryName`, `dates`, `shiftTime`, `productionRate`, `theoreticFeederFlow`, `feederFlow1`, `feederFlow2`, `feederFlow3`, `CV`, `adjusted`, `observations`, `responsible`) VALUES
(6, 'Salt Iod', '2012-05-07', '12', 1, 1, 1, 1, 2, '1', 'Yes', 'bvb', '21'),
(7, 'Salt Iod', '2012-05-07', '12', 1, 1, 1, 1, 2, '1', 'Yes', 'bvb', '21'),
(8, 'Salt Iod', '2012-05-07', '12', 1, 1, 1, 1, 2, '1', 'Yes', 'bvb', '21');

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalfortb2`
--

CREATE TABLE IF NOT EXISTS `maize_internalfortb2` (
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
  KEY `maize_internalfortb2_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `maize_internalfortb2`
--

INSERT INTO `maize_internalfortb2` (`maize_internalfortb2ID`, `factoryName`, `dates`, `shiftTime`, `flourProducedMT`, `lotID`, `premixUsed`, `observations`, `responsible`) VALUES
(1, 'Salt Iod', '2012-05-01', '12', 1, '2', 3, NULL, 'z'),
(2, 'Salt Iod', '2012-05-01', '12', 1, '2', 3, 'v', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `maize_internalfortc1`
--

CREATE TABLE IF NOT EXISTS `maize_internalfortc1` (
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
  KEY `maize_internalfortc1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maize_internalfortc1`
--

INSERT INTO `maize_internalfortc1` (`maize_internalfortc1ID`, `dates`, `shiftTime`, `maizeFlourProduced`, `premixUsed`, `maizeFlourVSPremix`, `notes`, `compositeSample`, `transactedBy`, `factoryName`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Kensalt'),
(2, 'Object', '11:23 PM', 12, 31, 1, 'b', 'v', '4', 'Kensalt'),
(3, '2012-05-21', '11:23 PM', 12, 31, 1, 'b', 'v', '4', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `manucdevices`
--

CREATE TABLE IF NOT EXISTS `manucdevices` (
  `manufacturerCompName` varchar(45) NOT NULL,
  `deviceCompNumber` varchar(45) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerCompName`,`deviceCompNumber`),
  KEY `deviceCompNumber` (`deviceCompNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manucdevices`
--

INSERT INTO `manucdevices` (`manufacturerCompName`, `deviceCompNumber`, `remarks`) VALUES
('Ken Iodization I', '6754320', NULL),
('Ken Iodization I', '6754321', NULL),
('Ken Iodization I', '6754327', NULL),
('Ken Iodization I', '6754351', NULL),
('Ken Iodization I', '7865432', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturercompound`
--

CREATE TABLE IF NOT EXISTS `manufacturercompound` (
  `manufacturerId` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerId`),
  UNIQUE KEY `Manufacturer_Name_UNIQUE` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `manufacturercompound`
--

INSERT INTO `manufacturercompound` (`manufacturerId`, `manufacturerCompName`, `address`, `phoneNumber`, `location`) VALUES
(1, 'Salt Iod', 'vcv', '3434', 'Kisumu'),
(4, 'Kensalt', 'a', 'd', 'b'),
(5, 'Oxfirm', '678 Jakarta', '232323', 'India'),
(6, 'TeraChloro Inc.', 'Pinto St', '8765', 'Singapore');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturerfortified`
--

CREATE TABLE IF NOT EXISTS `manufacturerfortified` (
  `manufacturerFortId` int(11) NOT NULL AUTO_INCREMENT,
  `manufactuerFortName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerFortId`),
  UNIQUE KEY `Manufactuer_FName_UNIQUE` (`manufactuerFortName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manufacturerfortified`
--

INSERT INTO `manufacturerfortified` (`manufacturerFortId`, `manufactuerFortName`, `address`, `location`, `phoneNumber`) VALUES
(1, 'Kensalt', 'vbvb', 'Magadi', '5454');

-- --------------------------------------------------------

--
-- Table structure for table `oil_tablea1`
--

CREATE TABLE IF NOT EXISTS `oil_tablea1` (
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
  KEY `fortifiedOilA1_manufacturerfortified` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `oil_tablea1`
--

INSERT INTO `oil_tablea1` (`fortifiedOilA1ID`, `dates`, `supplierCOANumber`, `numberOfCans`, `lotID`, `expirationDate`, `dispatchedLotID`, `transactedBy`, `factoryName`) VALUES
(1, '2012-05-02', '12', 321, '3', '2012-05-02', '3', '13', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `oil_tableb1`
--

CREATE TABLE IF NOT EXISTS `oil_tableb1` (
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
  KEY `fortifiedoilb1_manufacturerfortified` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `oil_tableb1`
--

INSERT INTO `oil_tableb1` (`fortifiedoilb1ID`, `dates`, `batchNumber`, `batchSize`, `vitaminAAmount`, `premixStart`, `premixEnd`, `transactedBy`, `factoryName`) VALUES
(1, '2012-05-28', '32', 1, 343, '08:56 PM', '08:56 PM', '', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `oil_tableb2`
--

CREATE TABLE IF NOT EXISTS `oil_tableb2` (
  `fortifiedoilb2ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) NOT NULL,
  `deviceCondition` tinyint(1) NOT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `checkedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fortifiedoilb2ID`),
  KEY `fortifiedoilb2_ibfk_1` (`deviceCompNumber`),
  KEY `fortifiedoilb2_ibfk_2` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `oil_tableb2`
--


-- --------------------------------------------------------

--
-- Table structure for table `oil_tablec1`
--

CREATE TABLE IF NOT EXISTS `oil_tablec1` (
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
  KEY `fortifiedOilC1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `oil_tablec1`
--

INSERT INTO `oil_tablec1` (`fortifiedOilC1ID`, `shiftTime`, `oilProduced`, `premixUsed`, `oilFortified`, `notes`, `comments`, `dates`, `responsible`, `factoryName`) VALUES
(1, '08:59 PM', 32, 2, 1, 'n', 'v', 'Object', 'v', 'Kensalt'),
(2, '09:01 PM', 21, 3, 1, '3', '1', 'Object', '3', 'Kensalt'),
(3, '09:02 PM', 32, 1, 31, '41', '31', '2012-05-20', 'q', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `premixtype`
--

CREATE TABLE IF NOT EXISTS `premixtype` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`productId`),
  UNIQUE KEY `ProdName_UNIQUE` (`productName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `premixtype`
--

INSERT INTO `premixtype` (`productId`, `productName`) VALUES
(2, 'Iodate'),
(1, 'Iodine');

-- --------------------------------------------------------

--
-- Table structure for table `smallscalea1`
--

CREATE TABLE IF NOT EXISTS `smallscalea1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `weightKg` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `contentOfIodine` double NOT NULL,
  `amountUsed` double DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `manufacturerCompName` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smallscalea1`
--


-- --------------------------------------------------------

--
-- Table structure for table `smallscalea2`
--

CREATE TABLE IF NOT EXISTS `smallscalea2` (
  `transcationNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `weightKg` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `contentOfIodine` double DEFAULT NULL,
  `amountUsed` double DEFAULT NULL,
  PRIMARY KEY (`transcationNumber`),
  KEY `manufacturerCompound_smallScaleA2` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `smallscalea2`
--

INSERT INTO `smallscalea2` (`transcationNumber`, `dates`, `manufacturerCompName`, `weightKg`, `lotNumber`, `contentOfIodine`, `amountUsed`) VALUES
(2, '2012-05-14', 'Kensalt', 13, '4', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `usersID` bigint(20) NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) NOT NULL,
  `userPassword` varchar(45) NOT NULL,
  `userRights` tinyint(1) NOT NULL,
  `affiliation` varchar(45) DEFAULT 'n/a',
  PRIMARY KEY (`usersID`),
  KEY `Affiliation` (`affiliation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `userName`, `userPassword`, `userRights`, `affiliation`) VALUES
(1, 'Me', '1234', 3, 'Kensalt'),
(2, 'admin', 'admin', 1, NULL),
(3, 'admin@kebs.go.ke', 'admin', 1, 'KEBS'),
(4, 'mutono@tar.org', '1234', 2, 'Ken Iodization I'),
(5, 'rufus@tar.org', '1234', 3, 'Ken Iodization I'),
(6, 'officer@kensalt.org', '1234', 4, 'Ken Iodization I'),
(7, 'nutrition', '123456', 4, 'Ken Iodization I');

-- --------------------------------------------------------

--
-- Table structure for table `wheat_externalfortb1`
--

CREATE TABLE IF NOT EXISTS `wheat_externalfortb1` (
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
  KEY `wheat_externalFortB1_manufacturerFortified` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wheat_externalfortb1`
--

INSERT INTO `wheat_externalfortb1` (`wheat_externalFortB1ID`, `dates`, `factoryName`, `publicHealthOfficer`, `name`, `position`, `signature`, `opening`, `closing`) VALUES
(1, 'Object', 'Kensalt', 'bb', 'vb', 'vb', 'b', '1', '2'),
(2, '2012-05-22', 'Kensalt', 'bb', 'vb', 'vb', 'b', '1', '2'),
(3, '2012-05-22', 'Kensalt', 'bb', 'vb', 'vb', 'b', 'v', '2'),
(4, '2012-05-22', 'Kensalt', 'bb', 'vb', 'vb', 'b', 'v', '2');

-- --------------------------------------------------------

--
-- Table structure for table `wheat_externalfortb2`
--

CREATE TABLE IF NOT EXISTS `wheat_externalfortb2` (
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
  `FIFOSystemPremix` varchar(45) DEFAULT NULL,
  `FIFOSystemFlour` varchar(45) DEFAULT NULL,
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
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `wheat_externalfortb2`
--

INSERT INTO `wheat_externalfortb2` (`wheat_externalFortB2ID`, `inspectionRegistry`, `dates`, `publicHealthOfficer`, `factoryName`, `productionArea`, `packagingArea`, `warehouse`, `staffFacilities`, `hygiene`, `wearingProtective`, `trainnedInTasks`, `receiptAndStorage`, `premixDilutionApplicable`, `feederVerification`, `samplingOfWheatFlour`, `ironSpotTest`, `premixInventory`, `COAReceived`, `premixStored`, `FIFOSystemPremix`, `FIFOSystemFlour`, `premixHandledWell`, `premixDilution`, `homogeneityAssessed`, `adequateStorage`, `recordsOfFeeder`, `premixLevel`, `recordsOfFlour`, `flourSamples`, `ratioWheatProduced`, `ironContent`, `spotTestIron`, `quantitativeMethodIron`, `quantitativeMethodVitaminA`, `dailyCompositeSamples`, `labellingMeetsSpecifications`, `fortifiedWheatFlour`, `FIFOSystemApplied`, `recommendations`, `correctiveActionsTaken`, `assessment`, `comments`, `nonCompliances`, `suggestions`, `typeOfIron`, `IDComposite`, `factoryEstimation`, `ironMgPerKg0`, `vitaminMgPerKg0`, `IDOtherSamples`, `ironMgPerKg1`, `vitaminAMgPerKg1`, `supervisorName`, `supervisorDate`) VALUES
(8, 'cc', '2012-05-22', 'cncn', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', NULL, 'yes', 'yes', 'no', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'n/a', NULL, 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'yes', 'yes', 'yes', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'qe', 'bgb', 'Inadequate', 'bfgb', 'bdf', 'bdb', NULL, '12', NULL, 1, 12, '12', 12, 21, '12', '2012-05-22'),
(9, 'cc', '2012-05-22', 'cncn', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', NULL, 'yes', 'yes', 'no', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'n/a', NULL, 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'yes', 'yes', 'yes', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'qe', 'bgb', 'Inadequate', 'bfgb', 'bdf', 'bdb', NULL, '12', NULL, 1, 12, '12', 12, 21, '12', '2012-05-22'),
(10, 'cc', '2012-05-22', 'cncn', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', NULL, 'yes', 'yes', 'no', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'n/a', NULL, 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'yes', 'yes', 'yes', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', NULL, 'qe', 'bgb', 'Inadequate', 'bfgb', 'bdf', 'bdb', NULL, '12', NULL, 1, 12, '12', 12, 21, '12', '2012-05-22'),
(13, 'ER34', '2012-05-26', 'Quinto Malin', 'Ken Iodization I', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'n/a', 'yes', 'n/a', 'n/a', 'yes', 'yes', 'yes', NULL, 'ty', 'ty', 'Adequate', 'ty', 'ty', 'ty', NULL, 'gtry', NULL, 6, 7, 'sad', 7, 7, 'Kamau Mark', '2012-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `wheat_externalfortb3`
--

CREATE TABLE IF NOT EXISTS `wheat_externalfortb3` (
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
  KEY `wheat_externalFortB3_factories` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wheat_externalfortb3`
--

INSERT INTO `wheat_externalfortb3` (`wheat_externalFortB3ID`, `inspectionRegistry`, `factoryName`, `dateOfInspection`, `factoryRepresentative`, `areasVisited`, `nonCompliances`, `suggestionsForImprovement`, `publicHealthOfficer`, `receivedBy`, `inspectorDate`, `receivedDate`, `supervisorName`, `supervisorDate`) VALUES
(1, NULL, 'Kensalt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'Kensalt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Kensalt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Kensalt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 'Kensalt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'vcvcv', 'Kensalt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'cc', 'Kensalt', '2012-05-01', 'wr', NULL, ' xvxv', 'vxvxv', 'vxvx', 'vxvx', '2012-05-01', '2012-05-01', 'vmv', NULL),
(8, 'A124T', 'Ken Iodization I', '2012-05-16', 'Tom', 'production,packaging,fortification_site,labaratory,wheatWarehouse,rmWheatWarehouse,', 'none', 'none', 'Mutono', 'Tom', '2012-05-25', '2012-05-16', 'Mark', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalforta1`
--

CREATE TABLE IF NOT EXISTS `wheat_internalforta1` (
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
  KEY `wheat_internalFortA1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wheat_internalforta1`
--


-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalforta2`
--

CREATE TABLE IF NOT EXISTS `wheat_internalforta2` (
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
  KEY `wheat_internalFortA2_ibfk_1` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `wheat_internalforta2`
--

INSERT INTO `wheat_internalforta2` (`wheat_internalFortA2ID`, `dates`, `shiftTime`, `quantity`, `lotID0`, `expiryDate`, `dispatchedQuantity`, `lotID1`, `observations`, `reportingDate`, `transactedBy`, `manufacturerCompName`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Object', NULL, 'Salt Iod'),
(2, '2012-05-16', '12:00', 12, '89', '2012-05-07', 21, '1', NULL, 'Object', '1', 'Salt Iod'),
(3, '2012-05-03', '12:00', 5, '4', '2012-05-09', 3, '3', NULL, 'Object', '5', 'Salt Iod'),
(4, '2012-05-03', '12:00', 5, '4', '2012-05-09', 3, '3', NULL, '2012-05-21', '5', 'Salt Iod'),
(5, '2012-05-03', '12:00', 5, '4', '2012-05-09', 3, '3', NULL, '2012-05-21', '5', 'Salt Iod'),
(6, '2012-05-03', '12:00', 5, '4', '2012-05-09', 3, '3', NULL, '2012-05-21', '5', 'Salt Iod'),
(7, '2012-05-03', '12:00', 5, '4', '2012-05-09', 3, '3', NULL, '2012-05-21', '5', 'Salt Iod'),
(8, '2012-05-03', '12:00', 5, '4', '2012-05-09', 3, '3', NULL, '2012-05-21', '5', 'Salt Iod');

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalfortb1`
--

CREATE TABLE IF NOT EXISTS `wheat_internalfortb1` (
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
  KEY `wheat_internalFortB1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `wheat_internalfortb1`
--

INSERT INTO `wheat_internalfortb1` (`wheat_internalFortB1ID`, `factoryName`, `dates`, `shiftTime`, `productionRate`, `theoreticalFeederFlow`, `feederFlow1`, `feederFlow2`, `feederFlow3`, `adjusted`, `responsible`, `observations`, `transactedBy`) VALUES
(1, 'Salt Iod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, ''),
(2, 'Salt Iod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, 'Salt Iod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(4, 'Salt Iod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, ''),
(5, 'Salt Iod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, 'Salt Iod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(7, 'Salt Iod', '2012-05-07', '12', 1, 1, 1, 1, 1, 'Yes', NULL, '12', '212'),
(8, 'Salt Iod', '2012-05-07', '12', 1, 1, 1, 1, 1, 'Yes', NULL, '12', '212'),
(9, 'Salt Iod', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalfortb2`
--

CREATE TABLE IF NOT EXISTS `wheat_internalfortb2` (
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
  KEY `wheat_internalFortB2_iodizationCenter` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wheat_internalfortb2`
--

INSERT INTO `wheat_internalfortb2` (`wheat_internalFortB2ID`, `factoryName`, `shiftTime`, `flourProduced`, `lotID`, `premixUsed`, `responsible`, `observations`, `dates`) VALUES
(1, 'Salt Iod', NULL, NULL, NULL, NULL, '', NULL, ''),
(2, 'Salt Iod', '1221', 1, '2', 45, '21', 'v', ''),
(3, 'Salt Iod', '1221', 1, '2', 45, '21', 'v', '2012-05-21'),
(4, 'Salt Iod', '1221', 1, '2', 45, 'nm', 'biii', '2012-05-21'),
(5, 'Salt Iod', '1221', 1, '2', 45, 'nm', 'biii', '2012-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `wheat_internalfortc1`
--

CREATE TABLE IF NOT EXISTS `wheat_internalfortc1` (
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
  KEY `wheat_internalFortC1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wheat_internalfortc1`
--

INSERT INTO `wheat_internalfortc1` (`wheat_internalFortC1ID`, `shiftTime`, `wheatProduced`, `premixUsed`, `wheatFlourVSPremix`, `notes`, `comments`, `dates`, `responsible`, `signature`, `factoryName`) VALUES
(1, '02:57 PM', 12, 12, 1, '3', '2', '2012-05-21', '3', NULL, 'Kensalt'),
(2, '02:57 PM', 12, 12, 1, '3', '2', '2012-05-21', '3', NULL, 'Kensalt'),
(3, '03:04 PM', 1, 12, 1, '2', '2', '2012-05-21', '1', NULL, 'Kensalt'),
(4, '05:33 AM', 1, 2, 1, '3', '1', '2012-05-22', '3', NULL, 'Kensalt');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accesslog`
--
ALTER TABLE `accesslog`
  ADD CONSTRAINT `users_accessLog` FOREIGN KEY (`usersID`) REFERENCES `users` (`usersID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `externalfortifiedb1`
--
ALTER TABLE `externalfortifiedb1`
  ADD CONSTRAINT `fk_TableB1(12)_TechAudit_Manufacturer_FCenters1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `externalfortifiedb2`
--
ALTER TABLE `externalfortifiedb2`
  ADD CONSTRAINT `fk_TableB2(13)_AuditInspect_Manufacturer_FCenters1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `externalfortifiedb3`
--
ALTER TABLE `externalfortifiedb3`
  ADD CONSTRAINT `externalfortifiedb3_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`);

--
-- Constraints for table `externaliodizationb1`
--
ALTER TABLE `externaliodizationb1`
  ADD CONSTRAINT `fk_TableB1(1011)_TechAudit_Manufacturer_FCenters1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `factories`
--
ALTER TABLE `factories`
  ADD CONSTRAINT `fk_Manufacturer_FCenters_Manufacturer_Fortifier1` FOREIGN KEY (`manufacturerFortName`) REFERENCES `manufacturerfortified` (`manufactuerFortName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `internalfortifieda1`
--
ALTER TABLE `internalfortifieda1`
  ADD CONSTRAINT `fk_TableA2(23)_Manufacturer_Compound1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TableA2(23)_PremixType` FOREIGN KEY (`productType`) REFERENCES `premixtype` (`productName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `internalfortifieda2`
--
ALTER TABLE `internalfortifieda2`
  ADD CONSTRAINT `internalfortifieda2_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`);

--
-- Constraints for table `internalfortifiedb1`
--
ALTER TABLE `internalfortifiedb1`
  ADD CONSTRAINT `internalfortifiedb1_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`);

--
-- Constraints for table `internalfortifiedb2`
--
ALTER TABLE `internalfortifiedb2`
  ADD CONSTRAINT `internalfortifiedb2_ibfk_1` FOREIGN KEY (`deviceCompNumber`) REFERENCES `manucdevices` (`deviceCompNumber`),
  ADD CONSTRAINT `internalfortifiedb2_ibfk_2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manucdevices` (`manufacturerCompName`);

--
-- Constraints for table `internalfortifiedc1`
--
ALTER TABLE `internalfortifiedc1`
  ADD CONSTRAINT `internalfortifiedc1_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`);

--
-- Constraints for table `maize_externalfortb1`
--
ALTER TABLE `maize_externalfortb1`
  ADD CONSTRAINT `maize_externalfortB1_manufacturerfortified` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maize_externalfortb2`
--
ALTER TABLE `maize_externalfortb2`
  ADD CONSTRAINT `maize_externalfortb2_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maize_externalfortb3`
--
ALTER TABLE `maize_externalfortb3`
  ADD CONSTRAINT `maize_externalfortb3_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maize_internalforta1`
--
ALTER TABLE `maize_internalforta1`
  ADD CONSTRAINT `maize_internalforta1_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `maize_internalforta1_premixtype` FOREIGN KEY (`productType`) REFERENCES `premixtype` (`productName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maize_internalforta2`
--
ALTER TABLE `maize_internalforta2`
  ADD CONSTRAINT `maize_internalforta2_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maize_internalfortb1`
--
ALTER TABLE `maize_internalfortb1`
  ADD CONSTRAINT `maize_internalfortb1_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`);

--
-- Constraints for table `maize_internalfortb2`
--
ALTER TABLE `maize_internalfortb2`
  ADD CONSTRAINT `maize_internalfortb2_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `maize_internalfortc1`
--
ALTER TABLE `maize_internalfortc1`
  ADD CONSTRAINT `maize_internalfortc1_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `manucdevices`
--
ALTER TABLE `manucdevices`
  ADD CONSTRAINT `manucdevices_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `factories` (`factoryName`),
  ADD CONSTRAINT `manucdevices_ibfk_2` FOREIGN KEY (`deviceCompNumber`) REFERENCES `devices` (`deviceSerialNumber`);

--
-- Constraints for table `oil_tablea1`
--
ALTER TABLE `oil_tablea1`
  ADD CONSTRAINT `fortifiedOilA1_manufacturerfortified` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `oil_tableb1`
--
ALTER TABLE `oil_tableb1`
  ADD CONSTRAINT `fortifiedoilb1_manufacturerfortified` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `oil_tableb2`
--
ALTER TABLE `oil_tableb2`
  ADD CONSTRAINT `fortifiedoilb2_ibfk_1` FOREIGN KEY (`deviceCompNumber`) REFERENCES `manucdevices` (`deviceCompNumber`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fortifiedoilb2_ibfk_2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manucdevices` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `oil_tablec1`
--
ALTER TABLE `oil_tablec1`
  ADD CONSTRAINT `fortifiedOilC1_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `smallscalea1`
--
ALTER TABLE `smallscalea1`
  ADD CONSTRAINT `smallscalea1_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`);

--
-- Constraints for table `smallscalea2`
--
ALTER TABLE `smallscalea2`
  ADD CONSTRAINT `manufacturerCompound_smallScaleA2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wheat_externalfortb1`
--
ALTER TABLE `wheat_externalfortb1`
  ADD CONSTRAINT `wheat_externalFortB1_manufacturerFortified` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wheat_externalfortb2`
--
ALTER TABLE `wheat_externalfortb2`
  ADD CONSTRAINT `wheat_externalfortb2_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`);

--
-- Constraints for table `wheat_externalfortb3`
--
ALTER TABLE `wheat_externalfortb3`
  ADD CONSTRAINT `wheat_externalFortB3_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wheat_internalforta1`
--
ALTER TABLE `wheat_internalforta1`
  ADD CONSTRAINT `wheat_internalFortA1_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `wheat_internalFortA1_premixType` FOREIGN KEY (`productType`) REFERENCES `premixtype` (`productName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wheat_internalforta2`
--
ALTER TABLE `wheat_internalforta2`
  ADD CONSTRAINT `wheat_internalFortA2_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wheat_internalfortb1`
--
ALTER TABLE `wheat_internalfortb1`
  ADD CONSTRAINT `wheat_internalFortB1_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wheat_internalfortb2`
--
ALTER TABLE `wheat_internalfortb2`
  ADD CONSTRAINT `wheat_internalFortB2_iodizationCenter` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wheat_internalfortc1`
--
ALTER TABLE `wheat_internalfortc1`
  ADD CONSTRAINT `wheat_internalFortC1_iodizationcenters` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
