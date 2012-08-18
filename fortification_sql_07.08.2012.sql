-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2012 at 11:49 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `accesslog`
--
DROP fortification; CREATE DATABASE fortification; USE fortification;
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
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `externalfortifiedb1`
--

INSERT INTO `externalfortifiedb1` (`transactionNumber`, `dates`, `factoryName`, `publicHealthOfficer`, `name`, `position`, `signature`, `opening`, `closing`) VALUES
(7, '2012-06-07', 'Salt Iod', 'Nicodemus Maingi', 'merlin', 'manager', 'm', 'yes', 'yes');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `externalfortifiedb2`
--

INSERT INTO `externalfortifiedb2` (`transactionNumber`, `dates`, `publicHealthOfficer`, `factoryName`, `productionArea`, `packageArea`, `warehouse`, `staffFacilities`, `hygiene`, `protectiveGear`, `trainingInTasks`, `receiptStoragePremix`, `premixDilution`, `feederVerification`, `QCSaltSampling`, `iodineTest`, `iodineCompoundUptoDate`, `COAPerLot`, `iodineStorageAdequate`, `FIFOSystem`, `iodineCompoundHandling`, `premixPreparation`, `premixStorageHandling`, `feederSprayerRecord`, `feederLevelAdequate`, `saltProductionPremixRecords`, `saltSamplingEachShift`, `saltProductionPremixRight`, `iodineResultLess40MgPerKg`, `internalTest`, `externalTest`, `dailyCompositeSamples`, `last30SamplesAvailable`, `labelingSpecifications`, `fortifiedSaltStoredAdequate`, `recommendations`, `correctiveActions`, `assessmentOfCorrectiveAction`, `comments`, `nonCompliances`, `suggestionsForImprovement`, `premixType`, `idComposite`, `iodineMgPerKg0`, `refIodine`, `iodineMgPerKg1`, `idOther`, `iodineMgPerKg2`, `supervisorName`) VALUES
(1, '2012-05-30', 'Liam', 'Ken Iodization I', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'n/a', 'yes', 'n/a', 'yes', 'yes', 'yes', 'yes', 'na', 'na', 0, 'na', 'na', 'na', 'Iodine', 'A102', '3', 'ert', '5', 'A1040', '5', 'Kamau Mark');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `externalfortifiedb3`
--

INSERT INTO `externalfortifiedb3` (`transcationNumber`, `inspectionRegistry`, `dateOfInspection`, `factoryName`, `factoryRepresentative`, `areasVisited`, `nonCompliances`, `suggestionsForImprovement`, `publicHealthOfficer`, `receivedBy`, `inspectorDate`, `receivedDate`, `supervisorName`) VALUES
(1, 're', '2012-05-07', 'Kensalt', 'wr', 'packaging,rm_salt_warehouse,other,', 'w', 'r', 'w', 'r', '2012-05-28', '2012-05-21', 'w'),
(2, 'A124T', '2012-05-22', 'Ken Iodization I', 'Tom', 'packaging,fortification_site,rm_salt_warehouse,', 'na', 'na', 'Mutono', 'Lililian', '2012-05-30', '2012-05-30', 'Lupe');

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
  `nonCompliances` varchar(255) NOT NULL DEFAULT 'none',
  `suggestionsForImprovement` varchar(255) NOT NULL DEFAULT 'none',
  `receivedBy` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `externaliodizationb1`
--

INSERT INTO `externaliodizationb1` (`transactionNumber`, `factoryName`, `dates`, `inspector`, `inventoryUpToDate`, `sufficientIodine3Months`, `adequateStorage`, `potassiumIodateAmounts`, `premixRecords`, `FIFOSystem`, `saltVsPremix`, `iodizedSaltUpToDate`, `saltPerKgAdequate`, `sampleNumber`, `iodineContent0`, `sampleReprocessed`, `iodineContent1`, `nonCompliances`, `suggestionsForImprovement`, `receivedBy`, `supervisorName`) VALUES
(5, 'Bidco Main', '2012-05-30', 'Josh', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', 'ty56', '5', '56yu', '5', 'none observed', 'n/a', 'Pete', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`factoryNumber`, `factoryName`, `location`, `address`, `phoneNumber`, `manufacturerFortName`) VALUES
(1, 'Kensalt', 'Nairobi', 'uiu', '1212', 'Kensalt'),
(2, 'Salt Iod', NULL, NULL, NULL, 'Kensalt'),
(3, 'Ken Iodization I', 'Pwani', '678', '4567898', 'Kensalt'),
(4, 'Nzoia Plant', 'Nzoia', '9877 ', '56789', 'Mumias Sugar'),
(5, 'Bidco Main', 'Thika', '9876 GH', '654', 'Bidco Oil Ltd'),
(6, 'Unga Mill I', 'Kitale', 'PO BOX 4568-998', '4567', 'Unga Limited'),
(7, 'Wheat Mill I', 'Nakuru', 'PO BOX 34-54', '78654', 'Ngano Millers Limited');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `internalfortifieda1`
--

INSERT INTO `internalfortifieda1` (`receiptNumber`, `productType`, `manufacturerCompName`, `inspectedBy`, `purchaseOrderNumber`, `dates`, `quantity`, `integrityObservation`, `lotNumber`, `lotObservation`, `productionDate`, `productObservation`, `expiryDate`, `expirationObservation`, `contentClaimedLabel`, `contentObservation`, `certificateOfAnalysis`, `certificateObservation`, `other`, `otherObservation`, `accepted`, `reasonsForRejection`, `receivedBy`) VALUES
(1, 'Iodine', 'Salt Iod', 'Port Official', '8YUI0', '2012-05-26', 34, 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'none', 'n/a', 1, 'passed integrity test', 'Marcella'),
(2, 'Iodine', 'TeraChloro Inc.', 'Quality Manager', 'ERW56', '2012-05-29', 89, 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'none', 'n/a', 1, 'ok', 'Lililian'),
(3, 'Iodine', 'Kensalt', 'Port Official', 'ERW56', '2012-05-29', 67, 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'none', 'n/a', 1, 'ok', 'Lililian');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `internalfortifieda2`
--

INSERT INTO `internalfortifieda2` (`transactionNumber`, `dates`, `supplierCOA`, `noOfDrums`, `lotId`, `expiryDate`, `transactedBy`, `dateOfReporting`, `manufacturerCompName`) VALUES
(1, '2012-05-22', '54', 56, '6', '2012-05-08', '5', '2012-05-20', 'Salt Iod'),
(2, '2012-06-05', 'qwe334', 44, 'er34', '2012-11-21', 'kilo', '2012-06-05', 'TeraChloro Inc.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `internalfortifiedb1`
--

INSERT INTO `internalfortifiedb1` (`transactionNumber`, `dates`, `fillerWeight`, `iodineWeight`, `finalPremixWeight1`, `startTime`, `endTime`, `finalPremixWeight`, `transactedBy`, `factoryName`) VALUES
(9, '2012-07-22', 1222, 12121, 1212, '12:35 AM', '03:35 AM', 1212, 'Anna', 'Ken Iodization I'),
(10, '2012-07-22', 2323, 23232, 2323, '12:36 AM', '05:36 AM', 2323, 'Maria', 'Ken Iodization I'),
(11, '2012-07-22', 2323, 2323, 2323, '12:36 AM', '12:36 AM', 2323, 'Shanel', 'Ken Iodization I'),
(12, '2012-07-24', 56565, 5656, 65656, '05:59 AM', '10:00 AM', 65655, 'Tono', 'Ken Iodization I'),
(13, '2012-07-19', 2345, 22, 2367, '06:23 AM', '08:35 AM', 2365, 'Lin', 'Ken Iodization I'),
(14, '2012-07-18', 567, 32, 598, '08:23 AM', '10:29 AM', 590, 'Julie', 'Ken Iodization I'),
(15, '2012-07-10', 565, 34, 598, '10:23 AM', '11:23 AM', 591, 'Mark', 'Ken Iodization I'),
(16, '2012-07-02', 433, 34, 477, '12:23 PM', '01:23 PM', 476, 'Jude', 'Ken Iodization I');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `internalfortifiedb2`
--

INSERT INTO `internalfortifiedb2` (`checkNumber`, `dates`, `deviceCondition`, `observations`, `checkedBy`, `deviceCompNumber`, `manufacturerCompName`) VALUES
(8, '2012-05-30', 1, 'ok', 'Asala QA', '7865432', 'Ken Iodization I'),
(9, '2012-05-30', 1, 'ok', 'Asala QA', '6754321', 'Ken Iodization I'),
(10, '2012-05-30', 1, 'ok', 'Asala QA', '6754327', 'Ken Iodization I'),
(11, '2012-05-30', 1, 'ok', 'Asala QA', '6754320', 'Ken Iodization I'),
(12, '2012-05-30', 1, 'ok', 'Asala QA', '6754351', 'Ken Iodization I');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `internalfortifiedc1`
--

INSERT INTO `internalfortifiedc1` (`transactionNumber`, `dates`, `shiftTime`, `saltProducedMT`, `premixUsed`, `saltFortVsPremixUsed`, `notes`, `comments`, `transactedBy`, `factoryName`) VALUES
(7, '2012-05-30', '12:12 PM', 9, 90000, 0.1, 'pk', 'ok', 'lupe', 'Bidco Main'),
(8, '2012-05-30', '12:14 PM', 8, 80000, 0.1, 'ok', 'ok', 'lupe', 'Bidco Main');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `maize_externalfortb1`
--

INSERT INTO `maize_externalfortb1` (`maize_externalfortB1ID`, `dates`, `factoryName`, `publicHealthOfficer`, `name`, `position`, `signature`, `opening`, `closing`) VALUES
(4, '2012-06-08', 'Unga Mill I', 'Mutono', 'Lean', 'QM', 'LM', 'Yes', 'No'),
(5, '2012-06-08', 'Unga Mill I', 'Mutono', 'Mark', 'TH', 'JK', 'No', 'Yes');

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
  `staffFacilities` varchar(45) NOT NULL,
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
  `factoryEstimatesIronMgPerKg` decimal(10,0) DEFAULT NULL,
  `labResultsIronMgPerKg` decimal(10,0) DEFAULT NULL,
  `inspectionVitaminMgPerKg0` decimal(10,0) DEFAULT NULL,
  `IDOther` varchar(45) DEFAULT NULL,
  `ironMgPerKg2` decimal(10,0) DEFAULT NULL,
  `vitaminAMgPerKg1` decimal(10,0) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`maize_externalfortb2ID`),
  KEY `maize_externalfortb2_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `maize_externalfortb2`
--

INSERT INTO `maize_externalfortb2` (`maize_externalfortb2ID`, `inspectionRegistry`, `dates`, `publicHealthOfficer`, `factoryName`, `productionArea`, `packagingArea`, `warehouse`, `staffFacilities`, `hygiene`, `protectiveClothing`, `trainnedInTasks`, `receiptAndStorage`, `premixDilution`, `feederVerification`, `samplingOfMaize`, `ironSpotTest`, `premixInventory`, `COAReceived`, `premixStored`, `premixHandledWell`, `premixDilutionApplicable`, `homogeneityAssessed`, `adequateStorage`, `recordsOfFeeder`, `premixLevel`, `recordsOfFlour`, `flourSamplesTaken`, `ratioMaizeProduced`, `ironContent`, `spotTest`, `quantitativeMethodIron`, `quantitativeMethodVitamin`, `dailyCompositeSamples`, `last30Samples`, `labelingMeetsSpecifications`, `fortifiedMaizeFlour`, `FIFOSystemFlour`, `FIFOSystemPremix`, `recommendations`, `correctiveActions`, `assessmentOfCorrectiveAction`, `comments`, `nonCompliances`, `suggestionsForImprovement`, `premixType`, `compositeID`, `factoryEstimatesIronMgPerKg`, `labResultsIronMgPerKg`, `inspectionVitaminMgPerKg0`, `IDOther`, `ironMgPerKg2`, `vitaminAMgPerKg1`, `supervisorName`, `supervisorDate`) VALUES
(3, 'TR56', '2012-06-09', 'Hellen', 'Unga Mill I', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'n/a', 'yes', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'Warehouse needs an upgrade', 'FIFO system adhered to', 'Adequate', 'Corrective action taken adequately', 'None', 'Records for fortification to be updated regul', 'Iodine', 'WE34', '11', '2', '6', 'WE67', '3', '6', 'Allain', '2012-06-09');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `maize_externalfortb3`
--

INSERT INTO `maize_externalfortb3` (`maize_externalfortb3ID`, `inspectionRegistry`, `dateOfInspection`, `factoryName`, `factoryRepresentative`, `areasVisited`, `nonCompliances`, `suggestionsForImprovement`, `publicHealthOfficer`, `receivedBy`, `inspectorDate`, `receivedDate`, `supervisorName`, `supervisorDate`) VALUES
(9, 'PL897', '2012-06-08', 'Unga Mill I', 'Tom', 'production,packaging,maizeWarehouse,', 'None', 'n/a', 'Mutono', 'Lililian', '2012-06-09', '2012-06-09', 'Anna', '2012-06-09');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `maize_internalforta1`
--

INSERT INTO `maize_internalforta1` (`maize_internalforta1ID`, `productType`, `manufacturerCompName`, `inspectedBy`, `dates`, `quantity`, `integrityObservation`, `lotNumber`, `lotObservation`, `productionDate`, `productionObservation`, `expiryDate`, `expiryObservation`, `micronutrientLevels`, `micronutrientObservation`, `certificateOfAnalysis`, `certificateOfAnalysisObservation`, `other`, `otherObservation`, `accepted`, `reasonsForRejection`, `receivedBy`, `receivedDate`) VALUES
(7, 'Vitamins and mineral premix', 'TeraChloro Inc.', 'Port Official', '2012-06-05', '4', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'none', 'n/a', 1, 'Accepted. ', 'Ashwaf', '2012-06-05');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `maize_internalforta2`
--

INSERT INTO `maize_internalforta2` (`maize_internalforta2ID`, `dates`, `shiftTime`, `quantityReceived`, `lotID`, `expiryDate`, `dispatchedQuantity`, `reportingDate`, `signature`, `manufacturerCompName`) VALUES
(5, '2012-06-03', '04:14 PM', 12, 'er43', '2012-10-24', 2, '2012-06-05', 'QS', 'TeraChloro Inc.');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `maize_internalfortb1`
--

INSERT INTO `maize_internalfortb1` (`maize_internalfortb1ID`, `factoryName`, `dates`, `shiftTime`, `productionRate`, `theoreticFeederFlow`, `feederFlow1`, `feederFlow2`, `feederFlow3`, `CV`, `adjusted`, `observations`, `responsible`) VALUES
(9, 'Unga Mill I', '2012-06-03', '04:31 PM', 12, 200, 13, 13, 12, '1', 'Yes', 'ok', 'Darel'),
(10, 'Unga Mill I', '2012-06-05', '04:31 PM', 11, 183.33, 1, 1, 1, '1', 'Yes', 'ok', 'Darel');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `maize_internalfortb2`
--

INSERT INTO `maize_internalfortb2` (`maize_internalfortb2ID`, `factoryName`, `dates`, `shiftTime`, `flourProducedMT`, `lotID`, `premixUsed`, `observations`, `responsible`) VALUES
(3, 'Unga Mill I', '2012-05-29', '04:35 PM', 12, 'wer', 12, 'ok', 'Steph'),
(4, 'Unga Mill I', '2012-05-29', '04:37 PM', 34, '2w', 33, 'ok', 'Steph'),
(5, 'Unga Mill I', '2012-05-29', '05:35 PM', 21, '4e', 44, 'ok', 'Steph'),
(6, 'Unga Mill I', '2012-05-29', '06:35 PM', 22, '2w', 44, 'ok', 'Steph'),
(7, 'Unga Mill I', '2012-05-29', '07:35 PM', 11, 'w2', 5555, 'ok', 'Steph'),
(8, 'Unga Mill I', '2012-05-29', '08:35 PM', 45, '3e', 333333, 'ok', 'Steph'),
(9, 'Unga Mill I', '2012-06-05', '10:37 AM', 34, 'AW23', 11, 'all was fine', 'Keri'),
(10, 'Unga Mill I', '2012-06-05', '10:41 AM', 45, 'SD34', 12, 'ok', 'Keri');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `maize_internalfortc1`
--

INSERT INTO `maize_internalfortc1` (`maize_internalfortc1ID`, `dates`, `shiftTime`, `maizeFlourProduced`, `premixUsed`, `maizeFlourVSPremix`, `notes`, `compositeSample`, `transactedBy`, `factoryName`) VALUES
(7, '2012-06-07', '11:19 AM', 4, 30000, 0.13, 'ok', 'AW23', 'Adams', 'Unga Mill I'),
(8, '2012-06-07', '12:19 PM', 5, 40000, 0.13, 'ok', 'E45', 'Adams', 'Unga Mill I'),
(9, '2012-06-07', '01:19 PM', 5, 50000, 0.1, 'ok', 'FG56', 'Adams', 'Unga Mill I');

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
('Bidco Main', '6754321', 'Good'),
('Bidco Main', '6754327', 'Good'),
('Bidco Main', '76465', 'Good'),
('Bidco Main', '7865432', 'Good'),
('Bidco Main', '89899', 'Good'),
('Bidco Main', '93431', 'Good'),
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
  `vehicleName` varchar(100) NOT NULL,
  PRIMARY KEY (`manufacturerFortId`),
  UNIQUE KEY `Manufactuer_FName_UNIQUE` (`manufactuerFortName`),
  KEY `vehicleName` (`vehicleName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `manufacturerfortified`
--

INSERT INTO `manufacturerfortified` (`manufacturerFortId`, `manufactuerFortName`, `address`, `location`, `phoneNumber`, `vehicleName`) VALUES
(1, 'Kensalt', 'vbvb', 'Magadi', '5454', 'Salt'),
(2, 'Mumias Sugar', 'PO BOX 4567', 'Mumias', '3445', 'Sugar'),
(3, 'Bidco Oil Ltd', '887 JK', 'Thika', '987654', 'Oil'),
(4, 'Unga Limited', 'PO BOX 4567-998', 'Kitale', '2345567', 'Maize'),
(5, 'Ngano Millers Limited', 'PO BOX 980-778', 'Nakuru', '23478', 'Wheat');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `oil_tablea1`
--

INSERT INTO `oil_tablea1` (`fortifiedOilA1ID`, `dates`, `supplierCOANumber`, `numberOfCans`, `lotID`, `expirationDate`, `dispatchedLotID`, `transactedBy`, `factoryName`) VALUES
(4, '2012-06-01', 'ty65', 777, 'yty77', '2013-06-26', '600', 'aq', 'Bidco Main');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `oil_tableb1`
--

INSERT INTO `oil_tableb1` (`fortifiedoilb1ID`, `dates`, `batchNumber`, `batchSize`, `vitaminAAmount`, `premixStart`, `premixEnd`, `transactedBy`, `factoryName`) VALUES
(2, '2012-06-02', 'hy67', 56, 5, '03:40 PM', '06:40 PM', '', 'Bidco Main');

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
  KEY `deviceCompNumber` (`deviceCompNumber`),
  KEY `manufacturerCompName` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `oil_tableb2`
--

INSERT INTO `oil_tableb2` (`fortifiedoilb2ID`, `dates`, `deviceCondition`, `observations`, `checkedBy`, `deviceCompNumber`, `manufacturerCompName`) VALUES
(39, '2012-05-30', 1, 'ok', 'Tango', '7865432', 'Bidco Main'),
(40, '2012-05-30', 1, 'ok', 'Tango', '6754321', 'Bidco Main'),
(41, '2012-05-30', 1, 'ok', 'Tango', '6754327', 'Bidco Main'),
(42, '2012-05-30', 1, 'ok', 'Tango', '89899', 'Bidco Main'),
(43, '2012-05-30', 1, 'ok', 'Tango', '76465', 'Bidco Main'),
(44, '2012-05-30', 1, 'ok', 'Tango', '93431', 'Bidco Main');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `oil_tablec1`
--

INSERT INTO `oil_tablec1` (`fortifiedOilC1ID`, `shiftTime`, `oilProduced`, `premixUsed`, `oilFortified`, `notes`, `comments`, `dates`, `responsible`, `factoryName`) VALUES
(4, '03:43 PM', 222, 222, 1000, 'ok', 'no comment', '2012-06-02', 'mimi', 'Bidco Main'),
(5, '03:43 PM', 45454, 555, 81899.1, 'ok', 'ok', '2012-06-02', 'mimi', 'Bidco Main');

-- --------------------------------------------------------

--
-- Table structure for table `premixtype`
--

CREATE TABLE IF NOT EXISTS `premixtype` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`productId`),
  UNIQUE KEY `ProdName_UNIQUE` (`productName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `premixtype`
--

INSERT INTO `premixtype` (`productId`, `productName`) VALUES
(2, 'Iodate'),
(1, 'Iodine'),
(3, 'Vitamins and mineral premix');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `smallscalea1`
--

INSERT INTO `smallscalea1` (`transactionNumber`, `dates`, `manufacturerCompName`, `weightKg`, `lotNumber`, `contentOfIodine`, `amountUsed`) VALUES
(2, '2012-05-29', 'Oxfirm', 5, 'rtt', 2, 1),
(3, '2012-05-29', 'Salt Iod', 5, 'rt', 2, 2),
(4, '2012-05-29', 'Oxfirm', 5, 'rtr', 2, 3),
(5, '2012-05-30', 'TeraChloro Inc.', 5, 'rtrt', 2, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `smallscalea2`
--

INSERT INTO `smallscalea2` (`transcationNumber`, `dates`, `manufacturerCompName`, `weightKg`, `lotNumber`, `contentOfIodine`, `amountUsed`) VALUES
(2, '2012-05-14', 'Kensalt', 13, '4', 1, 3),
(3, '2012-05-14', 'Oxfirm', 45, 'er4', 4, 44),
(4, '2012-05-06', 'Salt Iod', 67, 'r4r4', 4, 44),
(5, '2012-05-14', 'TeraChloro Inc.', 23, '45tr', 4, 44),
(6, '2012-05-21', 'Kensalt', 32, 't54', 4, 44),
(7, '2012-05-28', 'Salt Iod', 23, 'tr454', 4, 44);

-- --------------------------------------------------------

--
-- Table structure for table `sugar_externalfortb1`
--

CREATE TABLE IF NOT EXISTS `sugar_externalfortb1` (
  `sugar_externalfortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL,
  `signature` varchar(45) DEFAULT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_externalfortB1ID`),
  KEY `sugar_externalfortB1_factories` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sugar_externalfortb1`
--

INSERT INTO `sugar_externalfortb1` (`sugar_externalfortB1ID`, `dates`, `factoryName`, `publicHealthOfficer`, `name`, `position`, `signature`, `opening`, `closing`) VALUES
(1, 'Object', 'Kensalt', '1', 'bvvbv', 'vx', 'trt', '12', '23'),
(2, '2012-05-28', 'Kensalt', '1', 'bvvbv', 'vx', 'trt', '12', '23'),
(3, '2012-05-28', 'Kensalt', '1', 'bvvbv', 'vx', 'trt', '12', '23');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_externalfortb2`
--

CREATE TABLE IF NOT EXISTS `sugar_externalfortb2` (
  `sugar_externalfortB2ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `trainedInTasks` varchar(45) DEFAULT NULL,
  `receiptAndStorage` varchar(45) DEFAULT NULL,
  `feederVerification` varchar(45) DEFAULT NULL,
  `sugarSampling` varchar(45) DEFAULT NULL,
  `vitaminAAssay` varchar(45) DEFAULT NULL,
  `premixInventory` varchar(45) DEFAULT NULL,
  `adequateStorage` varchar(45) DEFAULT NULL,
  `FIFOSystem` varchar(45) DEFAULT NULL,
  `deliveredAdequately` varchar(45) DEFAULT NULL,
  `retinolLevels` varchar(45) DEFAULT NULL,
  `feederFlow` varchar(45) DEFAULT NULL,
  `feederRecords` varchar(45) DEFAULT NULL,
  `feederAdjusted` varchar(45) DEFAULT NULL,
  `premixLevelAdequate` varchar(45) DEFAULT NULL,
  `maintenanceEvidence` varchar(45) DEFAULT NULL,
  `sugarRecords` varchar(45) DEFAULT NULL,
  `sugarSamples` varchar(45) DEFAULT NULL,
  `sugarRatio` varchar(45) DEFAULT NULL,
  `retinolResults` varchar(45) DEFAULT NULL,
  `semiQuantitativeMethod` varchar(45) DEFAULT NULL,
  `internalLab` varchar(45) DEFAULT NULL,
  `externalLab` varchar(45) DEFAULT NULL,
  `dailySamples` varchar(45) DEFAULT NULL,
  `last30Samples` varchar(45) DEFAULT NULL,
  `labelingSpecifications` varchar(45) DEFAULT NULL,
  `fortifiedSugar` varchar(45) DEFAULT NULL,
  `FIFOSystemDispatch` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActions` varchar(45) DEFAULT NULL,
  `assessment` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestions` varchar(45) DEFAULT NULL,
  `premixType` varchar(45) DEFAULT NULL,
  `IDSamples` varchar(45) DEFAULT NULL,
  `estimatedAverage0` varchar(45) DEFAULT NULL,
  `inspectionResults0` varchar(45) DEFAULT NULL,
  `IDOtherSamples` varchar(45) DEFAULT NULL,
  `estimatedAverage1` varchar(45) DEFAULT NULL,
  `inspectionResults1` varchar(45) DEFAULT NULL,
  `officerName` varchar(45) DEFAULT NULL,
  `officerSignature` varchar(45) DEFAULT NULL,
  `officerDate` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorSignature` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_externalfortB2ID`),
  KEY `sugar_externalfortB2_factories` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sugar_externalfortb2`
--

INSERT INTO `sugar_externalfortb2` (`sugar_externalfortB2ID`, `inspectionRegistry`, `dates`, `publicHealthOfficer`, `factoryName`, `productionArea`, `packagingArea`, `warehouse`, `staffFacilities`, `hygiene`, `protectiveClothing`, `trainedInTasks`, `receiptAndStorage`, `feederVerification`, `sugarSampling`, `vitaminAAssay`, `premixInventory`, `adequateStorage`, `FIFOSystem`, `deliveredAdequately`, `retinolLevels`, `feederFlow`, `feederRecords`, `feederAdjusted`, `premixLevelAdequate`, `maintenanceEvidence`, `sugarRecords`, `sugarSamples`, `sugarRatio`, `retinolResults`, `semiQuantitativeMethod`, `internalLab`, `externalLab`, `dailySamples`, `last30Samples`, `labelingSpecifications`, `fortifiedSugar`, `FIFOSystemDispatch`, `recommendations`, `correctiveActions`, `assessment`, `comments`, `nonCompliances`, `suggestions`, `premixType`, `IDSamples`, `estimatedAverage0`, `inspectionResults0`, `IDOtherSamples`, `estimatedAverage1`, `inspectionResults1`, `officerName`, `officerSignature`, `officerDate`, `supervisorName`, `supervisorSignature`, `supervisorDate`) VALUES
(1, 'fghfghf', 'Object', 'nbmbnmb', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'n/a', 'no', 'yes', 'no', 'yes', 'no', NULL, 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', NULL, 'yes', 'bvvb', 'bvbv', 'Inadequate', 'bvbv', 'bvb', 'bvbvbv', 'bvbv', '12312', '6', '4', '3', '3', '1', NULL, NULL, NULL, NULL, NULL, 'Object'),
(2, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'n/a', 'no', 'yes', 'no', 'yes', 'no', NULL, 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'bvvb', 'bvbv', 'Inadequate', 'bvbv', 'bvb', 'bvbvbv', 'bvbv', '12312', '6', '4', '3', '3', '1', NULL, NULL, NULL, NULL, NULL, 'Object'),
(3, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'n/a', 'no', 'yes', 'no', 'yes', 'no', NULL, 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'bvvb', 'bvbv', 'Inadequate', 'bvbv', 'bvb', 'bvbvbv', 'bvbv', '12312', '6', '4', '3', '3', '1', NULL, NULL, NULL, NULL, NULL, '2012-05-31'),
(4, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'n/a', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'bvvb', 'bvbv', 'Inadequate', 'bvbv', 'bvb', 'bvbvbv', 'bvbv', '12312', '6', '4', '3', '3', '1', NULL, NULL, NULL, NULL, NULL, '2012-05-31'),
(5, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'n/a', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'bvvb', 'bvbv', 'Inadequate', 'bvbv', 'bvb', 'bvbvbv', 'bvbv', '12312', '6', '4', '3', '3', '1', NULL, NULL, NULL, NULL, NULL, '2012-05-31'),
(6, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'n/a', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'bvvb', 'bvbv', 'Inadequate', 'bvbv', 'bvb', 'bvbvbv', 'bvbv', '12312', '6', '4', '3', '3', '1', NULL, NULL, NULL, 'mm', NULL, '2012-05-31'),
(7, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'n/a', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'bvvb', 'bvbv', 'Inadequate', 'bvbv', 'bvb', 'bvbvbv', 'bvbv', '12312', '6', '4', '3', '3', '1', NULL, NULL, NULL, 'mm', NULL, '2012-05-31'),
(8, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'n/a', 'yes', 'yes', NULL, 'n/a', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'no', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'mbn', 'mbnmb', 'Inadequate', 'mbm', 'mbm', 'mbbm', 'bmb', 'bm', 'mbm', 'bm', 'mb', 'mb', 'mbm', NULL, NULL, NULL, 'mb', NULL, '2012-05-31'),
(9, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'n/a', 'yes', 'yes', NULL, 'n/a', 'no', 'yes', 'yes', 'no', 'yes', 'yes', NULL, 'yes', 'no', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', NULL, 'no', 'n/a', 'no', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'mbn', 'mbnmb', 'Inadequate', 'mbm', 'mbm', 'mbbm', 'bmb', 'bm', 'mbm', 'bm', 'mb', 'mb', 'mbm', NULL, NULL, NULL, 'mb', NULL, '2012-05-31'),
(10, 'fghfghf', '2012-05-31', 'nbmbnmb', 'Kensalt', 'yes', 'yes', 'yes', NULL, 'n/a', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'yes', NULL, 'no', 'n/a', 'n/a', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'yes', 'yes', 'cv', 'cv', 'Adequate', 'cv', 'vc', 'vcxcxsad', 'awdawd', '12312', '6', '4', '3', '3', '1', NULL, NULL, NULL, 'mb', NULL, '2012-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_externalfortb3`
--

CREATE TABLE IF NOT EXISTS `sugar_externalfortb3` (
  `sugar_externalfortB3ID` int(11) NOT NULL AUTO_INCREMENT,
  `inspectionRegistry` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `areasVisited` varchar(100) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `inspectorDate` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_externalfortB3ID`),
  KEY `sugar_externalfortB3_factories` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sugar_externalfortb3`
--

INSERT INTO `sugar_externalfortb3` (`sugar_externalfortB3ID`, `inspectionRegistry`, `factoryName`, `dates`, `areasVisited`, `nonCompliances`, `suggestionsForImprovement`, `publicHealthOfficer`, `receivedBy`, `inspectorDate`, `receivedDate`, `supervisorName`, `supervisorDate`) VALUES
(1, 'fghfghf', 'Kensalt', '2012-05-08', NULL, 'bvv', 'bvbv', 'bv', 'bvb', '2012-05-29', '2012-05-20', 'hjhjh', NULL),
(2, NULL, 'Kensalt', '2012-05-09', NULL, 'vbnv', 'vnbvn', 'bv', 'bvb', '2012-05-30', '2012-05-28', 'mb', '2012-05-27'),
(3, '4324234', 'Kensalt', '2012-05-08', NULL, 'vcb', 'bcvb', 'bc', 'bc', '2012-05-30', '2012-05-28', 'mb', '2012-05-27'),
(4, '4324234', 'Kensalt', '2012-05-08', NULL, 'vcb', 'bcvb', 'bc', 'bc', '2012-05-30', '2012-05-28', 'mb', '2012-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalforta1`
--

CREATE TABLE IF NOT EXISTS `sugar_internalforta1` (
  `sugar_internalfortA1ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `clean` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `reportingDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortA1ID`),
  KEY `sugar_internalfortA1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `sugar_internalforta1`
--

INSERT INTO `sugar_internalforta1` (`sugar_internalfortA1ID`, `dates`, `clean`, `observations`, `responsible`, `reportingDate`, `manufacturerCompName`) VALUES
(1, NULL, 'Yes', NULL, NULL, 'Object', 'Salt Iod'),
(2, '2012-05-08', 'Yes', 'bvbv', 'vbvb', '2012-05-28', 'Salt Iod'),
(3, '2012-05-08', 'Yes', 'bvbv', 'vbvb', '2012-05-28', 'Salt Iod'),
(4, NULL, 'Yes', 'bvbv', 'vbvb', '2012-05-28', 'Salt Iod'),
(5, NULL, 'Yes', 'bvbv', 'vbvb', '2012-05-28', 'Salt Iod'),
(6, NULL, 'Yes', NULL, NULL, '2012-05-28', 'Salt Iod'),
(7, '2012-05-01', 'Yes', '12', NULL, '2012-05-28', 'Salt Iod'),
(8, '2012-05-02', 'Yes', '3', 'vbvb', '2012-05-28', 'Salt Iod'),
(9, NULL, 'Yes', NULL, NULL, '2012-06-21', 'Salt Iod'),
(10, NULL, 'Yes', NULL, NULL, '2012-07-05', 'Salt Iod');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalforta2`
--

CREATE TABLE IF NOT EXISTS `sugar_internalforta2` (
  `sugar_internalfortA2ID` int(11) NOT NULL AUTO_INCREMENT,
  `generalCleanUp` varchar(45) DEFAULT NULL,
  `generalCleanUpCondition` varchar(45) DEFAULT NULL,
  `generalCleanUpObservation` varchar(45) DEFAULT NULL,
  `lubrication` varchar(45) DEFAULT NULL,
  `lubricationCondition` varchar(45) DEFAULT NULL,
  `lubricationObservation` varchar(45) DEFAULT NULL,
  `oilAspertion` varchar(45) DEFAULT NULL,
  `oilAspertionCondition` varchar(45) DEFAULT NULL,
  `oilAspertionObservation` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherCondition` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) DEFAULT NULL,
  `scalesCleanUp` varchar(45) DEFAULT NULL,
  `scalesCleanUpCondition` varchar(45) DEFAULT NULL,
  `scalesCleanUpObservation` varchar(45) DEFAULT NULL,
  `scalesCalibrated` varchar(45) DEFAULT NULL,
  `scalesCalibratedCondition` varchar(45) DEFAULT NULL,
  `scalesCalibratedObservation` varchar(45) DEFAULT NULL,
  `bathCleanUp` varchar(45) DEFAULT NULL,
  `bathCleanUpCondition` varchar(45) DEFAULT NULL,
  `bathCleanUpObservation` varchar(45) DEFAULT NULL,
  `bathTemperature` varchar(45) DEFAULT NULL,
  `bathTemperatureCondition` varchar(45) DEFAULT NULL,
  `bathTemperatureObservation` varchar(45) DEFAULT NULL,
  `stirrerPerformance` varchar(45) DEFAULT NULL,
  `stirrerPerformanceCondition` varchar(45) DEFAULT NULL,
  `stirrerPerformaneObservation` varchar(45) DEFAULT NULL,
  `nitrogenPerformance` varchar(45) DEFAULT NULL,
  `nitrogenPerformanceCondition` varchar(45) DEFAULT NULL,
  `nitrogenPerformanceObservation` varchar(45) DEFAULT NULL,
  `cartsCleanUp` varchar(45) DEFAULT NULL,
  `cartsCleanUpCondition` varchar(45) DEFAULT NULL,
  `cartsCleanUpObservation` varchar(45) DEFAULT NULL,
  `mobility` varchar(45) DEFAULT NULL,
  `mobilityCondition` varchar(45) DEFAULT NULL,
  `mobilityObservation` varchar(45) DEFAULT NULL,
  `integrity` varchar(45) DEFAULT NULL,
  `integrityCondition` varchar(45) DEFAULT NULL,
  `integrityObservation` varchar(45) DEFAULT NULL,
  `sewingPerformance` varchar(45) DEFAULT NULL,
  `sewingPerformanceCondition` varchar(45) DEFAULT NULL,
  `sewingPerformanceObservation` varchar(45) DEFAULT NULL,
  `cylinderCleanUp` varchar(45) DEFAULT NULL,
  `cylinderCleanUpCondition` varchar(45) DEFAULT NULL,
  `cylinderCleanUpObservation` varchar(45) DEFAULT NULL,
  `flaskCleanUp` varchar(45) DEFAULT NULL,
  `flaskCleanUpCondition` varchar(45) DEFAULT NULL,
  `flaskCleanUpObservation` varchar(45) DEFAULT NULL,
  `spatulaCleanUp` varchar(45) DEFAULT NULL,
  `spatulaCleanUpCondition` varchar(45) DEFAULT NULL,
  `spatulaCleanUpObservation` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortA2ID`),
  KEY `sugar_internalfortA2_ibfk_1` (`deviceCompNumber`),
  KEY `sugar_internalfortA2_ibfk_2` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sugar_internalforta2`
--


-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalforta3`
--

CREATE TABLE IF NOT EXISTS `sugar_internalforta3` (
  `sugar_internalfortA3ID` int(11) NOT NULL AUTO_INCREMENT,
  `blenderDate` varchar(45) DEFAULT NULL,
  `blenderMaintenance` varchar(45) DEFAULT NULL,
  `blenderCalibration` varchar(45) DEFAULT NULL,
  `benderObservation` varchar(45) DEFAULT NULL,
  `blenderNextCalibration` varchar(45) DEFAULT NULL,
  `scalesDate` varchar(45) DEFAULT NULL,
  `scalesMaintenance` varchar(45) DEFAULT NULL,
  `scalesCalibration` varchar(45) DEFAULT NULL,
  `scalesObservation` varchar(45) DEFAULT NULL,
  `scalesNextCalibration` varchar(45) DEFAULT NULL,
  `balanceDate` varchar(45) DEFAULT NULL,
  `balanceMaintenance` varchar(45) DEFAULT NULL,
  `balanceCalibration` varchar(45) DEFAULT NULL,
  `balanceObservation` varchar(45) DEFAULT NULL,
  `balanceNextCalibration` varchar(45) DEFAULT NULL,
  `heatingBathDate` varchar(45) DEFAULT NULL,
  `heatingBathMaintenance` varchar(45) DEFAULT NULL,
  `heatingBathCalibration` varchar(45) DEFAULT NULL,
  `heatingBathObservation` varchar(45) DEFAULT NULL,
  `heatingBathNextCalibration` varchar(45) DEFAULT NULL,
  `electricStirrerDate` varchar(45) DEFAULT NULL,
  `electricStirrerMaintenance` varchar(45) DEFAULT NULL,
  `electricStirrerCalibration` varchar(45) DEFAULT NULL,
  `electricStirrerObservation` varchar(45) DEFAULT NULL,
  `electricStirrerNextCalibration` varchar(45) DEFAULT NULL,
  `nitrogenDeviceDate` varchar(45) DEFAULT NULL,
  `nitrogenDeviceMaintenance` varchar(45) DEFAULT NULL,
  `nitrogenDeviceCalibration` varchar(45) DEFAULT NULL,
  `nitrogenDeviceObservation` varchar(45) DEFAULT NULL,
  `nitrogenDeviceNextCalibration` varchar(45) DEFAULT NULL,
  `cartsDate` varchar(45) DEFAULT NULL,
  `cartsMaintenance` varchar(45) DEFAULT NULL,
  `cartsCalibration` varchar(45) DEFAULT NULL,
  `cartsObservation` varchar(45) DEFAULT NULL,
  `cartsNextCalibration` varchar(45) DEFAULT NULL,
  `sewingMachineDate` varchar(45) DEFAULT NULL,
  `sewingMachineMaintenance` varchar(45) DEFAULT NULL,
  `sewingMachineCalibration` varchar(45) DEFAULT NULL,
  `sewingMachineObservation` varchar(45) DEFAULT NULL,
  `sewingMachineNextCalibration` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortA3ID`),
  KEY `sugar_internalfortA3_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sugar_internalforta3`
--


-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortb1`
--

CREATE TABLE IF NOT EXISTS `sugar_internalfortb1` (
  `sugar_internalfortB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `harvestYear` varchar(45) DEFAULT NULL,
  `premixQuantity` double DEFAULT NULL,
  `sugarProduction` double DEFAULT NULL,
  `sugarInventory` double DEFAULT NULL,
  `sugarCost` double DEFAULT NULL,
  `vitaminAInventory` double DEFAULT NULL,
  `vitaminACost` double DEFAULT NULL,
  `antioxidantInventory` double DEFAULT NULL,
  `antioxidantCost` double DEFAULT NULL,
  `vegetableOilInventory` double DEFAULT NULL,
  `vegetableOilCost` double DEFAULT NULL,
  `polythyleneInventory` double DEFAULT NULL,
  `polythyleneCost` double DEFAULT NULL,
  `polypropyleneInventory` double DEFAULT NULL,
  `polypropyleneCost` double DEFAULT NULL,
  `nitrogenInventory` double DEFAULT NULL,
  `nitrogenCost` double DEFAULT NULL,
  `preparedBy` varchar(45) DEFAULT NULL,
  `preparedDate` varchar(45) DEFAULT NULL,
  `approvedBy` varchar(45) DEFAULT NULL,
  `approvedDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortB1ID`),
  KEY `sugar_internalfortB1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sugar_internalfortb1`
--

INSERT INTO `sugar_internalfortb1` (`sugar_internalfortB1ID`, `harvestYear`, `premixQuantity`, `sugarProduction`, `sugarInventory`, `sugarCost`, `vitaminAInventory`, `vitaminACost`, `antioxidantInventory`, `antioxidantCost`, `vegetableOilInventory`, `vegetableOilCost`, `polythyleneInventory`, `polythyleneCost`, `polypropyleneInventory`, `polypropyleneCost`, `nitrogenInventory`, `nitrogenCost`, `preparedBy`, `preparedDate`, `approvedBy`, `approvedDate`, `manufacturerCompName`) VALUES
(1, '232', 1, 3, 2124, 1, 3, 2, 2, 3, NULL, 3, 42, 1, 1, NULL, 14, 2, 'Me', '2012-09-12', 'bvbv', '2012-09-12', 'Kensalt'),
(2, '232', 1, 3, 2, 1, 3, 2, 4, 6, 6, 8, 6, 1, 6, 4, 4, 6, '422', '2012-09-12', 'bvbv', '2012-09-12', 'Kensalt'),
(3, '232', 1, 3, 2, 1, 3, 2, 4, 6, 6, 8, 6, 1, 6, 4, 4, 6, '422', '2012-09-12', 'bvbv', '2012-09-12', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortc1`
--

CREATE TABLE IF NOT EXISTS `sugar_internalfortc1` (
  `sugar_internalfortC1ID` int(11) NOT NULL AUTO_INCREMENT,
  `premixType` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `expirationDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `COA` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortC1ID`),
  KEY `sugar_intenalfortC1_ibfk_1` (`manufacturerCompName`),
  KEY `sugar_internalfortC1_ibfk_2` (`premixType`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sugar_internalfortc1`
--

INSERT INTO `sugar_internalfortc1` (`sugar_internalfortC1ID`, `premixType`, `dates`, `quantity`, `lotNumber`, `expirationDate`, `manufacturerCompName`, `COA`, `observations`, `receivedBy`) VALUES
(1, NULL, '2012-07-14', 23, '234', '2012-07-14', 'Salt Iod', NULL, 'bvbv', 'nbnbn'),
(2, 'Iodine', '2012-07-14', 23, '234', '2012-05-29', 'Salt Iod', 'hfh', 'bvbv', 'nbnbn');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortc2`
--

CREATE TABLE IF NOT EXISTS `sugar_internalfortc2` (
  `sugar_internalfortB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `vitaminABalance` double DEFAULT NULL,
  `vitaminAReceived` double DEFAULT NULL,
  `vitaminA1` double DEFAULT NULL,
  `vitaminA2` double DEFAULT NULL,
  `vitaminA3` double DEFAULT NULL,
  `vitaminA4` double DEFAULT NULL,
  `vitaminA5` double DEFAULT NULL,
  `vitaminA6` double DEFAULT NULL,
  `sugarBalance` double DEFAULT NULL,
  `sugarReceived` double DEFAULT NULL,
  `sugar1` double DEFAULT NULL,
  `sugar2` double DEFAULT NULL,
  `sugar3` double DEFAULT NULL,
  `sugar4` double DEFAULT NULL,
  `sugar5` double DEFAULT NULL,
  `sugar6` double DEFAULT NULL,
  `vegetableOilBalance` double DEFAULT NULL,
  `vegetableOilReceived` double DEFAULT NULL,
  `vegetableOil1` double DEFAULT NULL,
  `vegetableOil2` double DEFAULT NULL,
  `vegetableOil3` double DEFAULT NULL,
  `vegetableOil4` double DEFAULT NULL,
  `vegetableOil5` double DEFAULT NULL,
  `vegetableOil6` double DEFAULT NULL,
  `ronoxanBalance` double DEFAULT NULL,
  `ronoxanReceived` double DEFAULT NULL,
  `ronoxan1` double DEFAULT NULL,
  `ronoxan2` double DEFAULT NULL,
  `ronoxan3` double DEFAULT NULL,
  `ronoxan4` double DEFAULT NULL,
  `ronoxan5` double DEFAULT NULL,
  `ronoxan6` double DEFAULT NULL,
  `nitrogenBalance` double DEFAULT NULL,
  `nitrogenReceived` double DEFAULT NULL,
  `nitrogen1` double DEFAULT NULL,
  `nitrogen2` double DEFAULT NULL,
  `nitrogen3` double DEFAULT NULL,
  `nitrogen4` double DEFAULT NULL,
  `nitrogen5` double DEFAULT NULL,
  `nitrogen6` double DEFAULT NULL,
  `polythyleneBalance` double DEFAULT NULL,
  `polythyleneReceived` double DEFAULT NULL,
  `polythylene1` double DEFAULT NULL,
  `polythylene2` double DEFAULT NULL,
  `polythylene3` double DEFAULT NULL,
  `polythylene4` double DEFAULT NULL,
  `polythylene5` double DEFAULT NULL,
  `polythylene6` double DEFAULT NULL,
  `polypropyleneBalance` double DEFAULT NULL,
  `polypropyleneReceived` double DEFAULT NULL,
  `polypropylene1` double DEFAULT NULL,
  `polypropylene2` double DEFAULT NULL,
  `polypropylene3` double DEFAULT NULL,
  `polypropylene4` double DEFAULT NULL,
  `polypropylene5` double DEFAULT NULL,
  `polypropylene6` double DEFAULT NULL,
  `sewingThreadBalance` double DEFAULT NULL,
  `sewingThreadReceived` double DEFAULT NULL,
  `sewingThread1` double DEFAULT NULL,
  `sewingThread2` double DEFAULT NULL,
  `sewingThread3` double DEFAULT NULL,
  `sewingThread4` double DEFAULT NULL,
  `sewingThread5` double DEFAULT NULL,
  `sewingThread6` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortB2ID`),
  KEY `sugar_internalfortC2_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sugar_internalfortc2`
--


-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortc3`
--

CREATE TABLE IF NOT EXISTS `sugar_internalfortc3` (
  `sugar_internalfortC3ID` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `lotID` double DEFAULT NULL,
  `bagsProduced` double DEFAULT NULL,
  `deliveryNumber` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  `dispatchedLotID` double DEFAULT NULL,
  `dispatchedBags` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `transactionDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortC3ID`),
  KEY `sugar_internalfortC3_factories` (`factoryName`),
  KEY `sugar_internalfortC3_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `sugar_internalfortc3`
--


-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalfortd1`
--

CREATE TABLE IF NOT EXISTS `sugar_internalfortd1` (
  `sugar_internalfortD1ID` int(11) NOT NULL AUTO_INCREMENT,
  `lotsID` double DEFAULT NULL,
  `productionDate` varchar(45) DEFAULT NULL,
  `samplesDate` varchar(45) DEFAULT NULL,
  `laboratoryReport` varchar(45) DEFAULT NULL,
  `reportDate` varchar(45) DEFAULT NULL,
  `vitaminA` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalfortD1ID`),
  KEY `sugar_internalfortD1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sugar_internalfortd1`
--

INSERT INTO `sugar_internalfortd1` (`sugar_internalfortD1ID`, `lotsID`, `productionDate`, `samplesDate`, `laboratoryReport`, `reportDate`, `vitaminA`, `observations`, `transactedBy`, `manufacturerCompName`) VALUES
(1, NULL, '2012-05-01', '2012-05-02', '5656', '2012-05-24', 12, NULL, NULL, 'Salt Iod'),
(2, NULL, '2012-05-01', '2012-05-02', '5656', '2012-05-24', 12, NULL, NULL, 'Salt Iod'),
(3, 1, '2012-05-01', '2012-05-13', '434', '2012-05-15', 434, NULL, NULL, 'Salt Iod'),
(4, 324334, '2012-05-02', '2012-05-07', '5656', '2012-05-01', 5656, NULL, NULL, 'Salt Iod');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalqca1`
--

CREATE TABLE IF NOT EXISTS `sugar_internalqca1` (
  `sugar_internalQCA1ID` int(11) NOT NULL AUTO_INCREMENT,
  `harvestYear` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `numberOfBags` double DEFAULT NULL,
  `lotID0` double DEFAULT NULL,
  `productionDate` varchar(45) DEFAULT NULL,
  `dispatchedBags` double DEFAULT NULL,
  `lotID1` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `receivedDate` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalQCA1ID`),
  KEY `sugar_internalQCA1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sugar_internalqca1`
--

INSERT INTO `sugar_internalqca1` (`sugar_internalQCA1ID`, `harvestYear`, `dates`, `shiftTime`, `numberOfBags`, `lotID0`, `productionDate`, `dispatchedBags`, `lotID1`, `observations`, `receivedBy`, `receivedDate`, `manufacturerCompName`) VALUES
(1, '2012', '2012-05-28', '12.00', 23, 213, '2012-05-01', 2, 1, '3', 'vbntfhrdgse', '2012-05-07', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalqcb1`
--

CREATE TABLE IF NOT EXISTS `sugar_internalqcb1` (
  `sugar_internalQCB1ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `harvestYear` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `productionRate` double DEFAULT NULL,
  `theoreticalFeederFlow` double DEFAULT NULL,
  `feederFlow1` double DEFAULT NULL,
  `feederFlow2` double DEFAULT NULL,
  `feederFlow3` double DEFAULT NULL,
  `adjusted` varchar(45) DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalQCB1ID`),
  KEY `sugar_internalQCB1_factories` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sugar_internalqcb1`
--

INSERT INTO `sugar_internalqcb1` (`sugar_internalQCB1ID`, `factoryName`, `harvestYear`, `dates`, `shiftTime`, `productionRate`, `theoreticalFeederFlow`, `feederFlow1`, `feederFlow2`, `feederFlow3`, `adjusted`, `observations`, `responsible`) VALUES
(1, 'Kensalt', '2012', 'Object', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, ''),
(2, 'Kensalt', '2012', '2012-05-31', '12:00', 1, 2, 12, 32, 12, 'Yes', 'bnbn', 'n gcgngn'),
(3, 'Kensalt', '2012', '2012-05-31', '12:00', 1, 2, 12, 32, 12, 'Yes', 'bnbn', 'n gcgngn'),
(4, 'Kensalt', '2012', '2012-05-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fghfh');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalqcb2`
--

CREATE TABLE IF NOT EXISTS `sugar_internalqcb2` (
  `sugar_internalQCB2ID` int(11) NOT NULL AUTO_INCREMENT,
  `factoryName` varchar(45) DEFAULT NULL,
  `harvestYear` varchar(45) DEFAULT NULL,
  `shiftTime` varchar(45) DEFAULT NULL,
  `sugarProduced` double DEFAULT NULL,
  `bagNumbers` double DEFAULT NULL,
  `lotID` varchar(45) DEFAULT NULL,
  `sugarPremixRatio` double DEFAULT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalQCB2ID`),
  KEY `sugar_internalQCB2_factories` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sugar_internalqcb2`
--

INSERT INTO `sugar_internalqcb2` (`sugar_internalQCB2ID`, `factoryName`, `harvestYear`, `shiftTime`, `sugarProduced`, `bagNumbers`, `lotID`, `sugarPremixRatio`, `observations`, `responsible`) VALUES
(1, 'Kensalt', '2012', '12:00', 56, 34, NULL, 4, 'nmnm', 'fghfh'),
(2, 'Kensalt', '2012', '12:00', 56, 34, '2', 4, 'nmnm', 'fghfh');

-- --------------------------------------------------------

--
-- Table structure for table `sugar_internalqcc1`
--

CREATE TABLE IF NOT EXISTS `sugar_internalqcc1` (
  `sugar_internalQCC1ID` int(11) NOT NULL AUTO_INCREMENT,
  `shiftTime` varchar(45) DEFAULT NULL,
  `sugarProduced` double DEFAULT NULL,
  `premixUsed0` double DEFAULT NULL,
  `fortifiedSugar` varchar(45) DEFAULT NULL,
  `premixUsed1` double DEFAULT NULL,
  `sugarPremix` double DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `dates` varchar(45) DEFAULT NULL,
  `responsible` varchar(45) DEFAULT NULL,
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`sugar_internalQCC1ID`),
  KEY `sugar_internalQCC1_factories` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sugar_internalqcc1`
--

INSERT INTO `sugar_internalqcc1` (`sugar_internalQCC1ID`, `shiftTime`, `sugarProduced`, `premixUsed0`, `fortifiedSugar`, `premixUsed1`, `sugarPremix`, `comments`, `dates`, `responsible`, `factoryName`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Object', '', 'Kensalt'),
(2, '11:45 PM', 12, 11, NULL, 56, 54, '64', '2012-05-31', '', 'Kensalt'),
(3, '11:45 PM', 12, 11, '15', 56, 54, '64', '2012-05-31', '', 'Kensalt');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `userName`, `userPassword`, `userRights`, `affiliation`) VALUES
(1, 'MOPHS', '1234', 1, 'MOPHS'),
(2, 'admin', 'admin', 1, NULL),
(3, 'kebs', '1234', 2, 'KEBS'),
(7, 'nutrition', '123456', 4, 'Ken Iodization I'),
(8, 'mumias', '123456', 3, 'Nzoia Plant'),
(9, 'bidco', '123456', 3, 'Bidco Main'),
(10, 'maize', '123456', 3, 'Unga Mill I'),
(11, 'wheat', '123456', 3, 'Wheat Mill I');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE IF NOT EXISTS `vehicle_type` (
  `vehicleId` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleName` varchar(100) NOT NULL,
  PRIMARY KEY (`vehicleId`),
  KEY `vehicleName` (`vehicleName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`vehicleId`, `vehicleName`) VALUES
(2, 'Maize'),
(4, 'Oil'),
(1, 'Salt'),
(5, 'Sugar'),
(3, 'Wheat');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wheat_externalfortb1`
--

INSERT INTO `wheat_externalfortb1` (`wheat_externalFortB1ID`, `dates`, `factoryName`, `publicHealthOfficer`, `name`, `position`, `signature`, `opening`, `closing`) VALUES
(6, '2012-06-15', 'Wheat Mill I', 'Mutono', 'Lean', 'QM', 'LM', 'Yes', 'No');

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
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActionsTaken` varchar(45) DEFAULT NULL,
  `assessment` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestions` varchar(45) DEFAULT NULL,
  `typeOfIron` varchar(45) DEFAULT NULL,
  `compositeID` varchar(45) DEFAULT NULL,
  `factoryEstimatesIronMgPerKg` double DEFAULT NULL,
  `labResultsIronMgPerKg` double DEFAULT NULL,
  `inspectionVitaminMgPerKg0` double DEFAULT NULL,
  `IDOtherSamples` varchar(45) DEFAULT NULL,
  `ironMgPerKg2` double DEFAULT NULL,
  `vitaminAMgPerKg1` double DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  `supervisorDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_externalFortB2ID`),
  KEY `factoryName` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `wheat_externalfortb2`
--

INSERT INTO `wheat_externalfortb2` (`wheat_externalFortB2ID`, `inspectionRegistry`, `dates`, `publicHealthOfficer`, `factoryName`, `productionArea`, `packagingArea`, `warehouse`, `staffFacilities`, `hygiene`, `wearingProtective`, `trainnedInTasks`, `receiptAndStorage`, `premixDilutionApplicable`, `feederVerification`, `samplingOfWheatFlour`, `ironSpotTest`, `premixInventory`, `COAReceived`, `premixStored`, `FIFOSystemPremix`, `FIFOSystemFlour`, `premixHandledWell`, `premixDilution`, `homogeneityAssessed`, `adequateStorage`, `recordsOfFeeder`, `premixLevel`, `recordsOfFlour`, `flourSamples`, `ratioWheatProduced`, `ironContent`, `spotTestIron`, `quantitativeMethodIron`, `quantitativeMethodVitaminA`, `dailyCompositeSamples`, `labellingMeetsSpecifications`, `fortifiedWheatFlour`, `recommendations`, `correctiveActionsTaken`, `assessment`, `comments`, `nonCompliances`, `suggestions`, `typeOfIron`, `compositeID`, `factoryEstimatesIronMgPerKg`, `labResultsIronMgPerKg`, `inspectionVitaminMgPerKg0`, `IDOtherSamples`, `ironMgPerKg2`, `vitaminAMgPerKg1`, `supervisorName`, `supervisorDate`) VALUES
(17, 'TR56', '2012-06-15', 'Hellen', 'Wheat Mill I', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'n/a', 'yes', 'n/a', 'n/a', 'yes', 'yes', 'yes', 'Recommendations ', 'Corrective actions taken ', 'Adequate', 'Assessment of corrective action(2) ', 'Non-compliances ', 'Suggestions for improvement ', 'Iodine', 'WE34', 11.01, 2.34, 5.66, 'WE67', 2.58, 5.55, 'Allain', '2012-06-15');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `wheat_externalfortb3`
--

INSERT INTO `wheat_externalfortb3` (`wheat_externalFortB3ID`, `inspectionRegistry`, `factoryName`, `dateOfInspection`, `factoryRepresentative`, `areasVisited`, `nonCompliances`, `suggestionsForImprovement`, `publicHealthOfficer`, `receivedBy`, `inspectorDate`, `receivedDate`, `supervisorName`, `supervisorDate`) VALUES
(11, 'TR56', 'Wheat Mill I', '2012-06-15', 'Jack', 'production,packaging,rmWheatWarehouse,', 'List of the non-compliances found ', 'Suggestions for Improvement', 'Kellerman', 'Sussy', '2012-06-15', '2012-06-15', 'Allain', '2012-06-15');

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
  `coaObservation` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherObservation` varchar(45) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT NULL,
  `reasonsForRejection` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortA1ID`),
  KEY `wheat_internalFortA1_premixType` (`productType`),
  KEY `wheat_internalFortA1_manufacturercompound` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wheat_internalforta1`
--

INSERT INTO `wheat_internalforta1` (`wheat_internalFortA1ID`, `productType`, `manufacturerCompName`, `inspectedBy`, `purchaseOrderNumber`, `dates`, `quantity`, `integrityObservation`, `lotNumber`, `lotObservation`, `productionDate`, `productionObservation`, `expiryDate`, `expiryObservation`, `micronutrientLevelsInLabel`, `micronutrientObservation`, `certificateOfAnalysis`, `coaObservation`, `other`, `otherObservation`, `accepted`, `reasonsForRejection`, `receivedBy`) VALUES
(1, 'Iodate', 'Oxfirm', 'Quality Manager', '58SW', '2012-06-11', 67, 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'none', 'n/a', 1, 'passed', 'lima'),
(2, 'Iodate', 'Oxfirm', 'Quality Manager', '58SW67', '2012-06-11', 67, 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'yes', 'ok', 'none', 'n/a', 1, 'passed', 'mao');

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
  `reportingDate` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortA2ID`),
  KEY `wheat_internalFortA2_ibfk_1` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `wheat_internalforta2`
--

INSERT INTO `wheat_internalforta2` (`wheat_internalFortA2ID`, `dates`, `shiftTime`, `quantity`, `lotID0`, `expiryDate`, `dispatchedQuantity`, `lotID1`, `reportingDate`, `transactedBy`, `manufacturerCompName`) VALUES
(9, '2012-06-12', '01:29 PM', 45, 'AQ23', '2012-11-30', 22, 'AQ23', '2012-06-12', 'QS', 'TeraChloro Inc.');

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
  `observations` varchar(45) DEFAULT NULL,
  `transactedBy` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortB1ID`),
  KEY `wheat_internalFortB1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `wheat_internalfortb1`
--

INSERT INTO `wheat_internalfortb1` (`wheat_internalFortB1ID`, `factoryName`, `dates`, `shiftTime`, `productionRate`, `theoreticalFeederFlow`, `feederFlow1`, `feederFlow2`, `feederFlow3`, `adjusted`, `observations`, `transactedBy`) VALUES
(10, 'Wheat Mill I', '2012-06-14', '11:40 AM', 3, 50, 5, 7, 5, 'Yes', 'good', 'Darel'),
(11, 'Wheat Mill I', '2012-06-13', '01:16 PM', 5, 83.33, 6, 8, 5, 'Yes', 'ok', 'Darel'),
(12, 'Wheat Mill I', '2012-06-12', '02:16 PM', 14, 233.33, 4, 9, 5, 'Yes', 'ok', 'Darel'),
(13, 'Wheat Mill I', '2012-06-11', '04:16 PM', 34, 566.67, 3, 2, 5, 'No', 'ok', 'Darel'),
(14, 'Wheat Mill I', '2012-06-10', '10:16 AM', 34, 566.67, 2, 4, 2, 'No', 'ok', 'Darel');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `wheat_internalfortb2`
--

INSERT INTO `wheat_internalfortb2` (`wheat_internalFortB2ID`, `factoryName`, `shiftTime`, `flourProduced`, `lotID`, `premixUsed`, `responsible`, `observations`, `dates`) VALUES
(6, 'Wheat Mill I', '12:23 PM', 44, 'AW23', 400000, 'Keri', 'all was fine', '2012-06-14'),
(7, 'Wheat Mill I', '12:23 PM', 33, 'DS34', 400000, 'Keri', 'ok', '2012-06-14'),
(8, 'Wheat Mill I', '12:24 PM', 7, 'VB54', 65432, 'Keri', 'great', '2012-06-14'),
(9, 'Wheat Mill I', '12:40 PM', 45, 'NH6', 54678, 'Keri', 'ok', '2012-06-14');

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
  `factoryName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`wheat_internalFortC1ID`),
  KEY `wheat_internalFortC1_iodizationcenters` (`factoryName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wheat_internalfortc1`
--

INSERT INTO `wheat_internalfortc1` (`wheat_internalFortC1ID`, `shiftTime`, `wheatProduced`, `premixUsed`, `wheatFlourVSPremix`, `notes`, `comments`, `dates`, `responsible`, `factoryName`) VALUES
(5, '01:30 PM', 12, 23000, 0.52, 'good', 'none', '2012-06-14', 'lupe', 'Wheat Mill I'),
(6, '02:30 PM', 41, 12000, 3.42, 'ok', 'ok', '2012-06-14', 'lupe', 'Wheat Mill I');

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
  ADD CONSTRAINT `externalfortifiedb1_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`);

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
  ADD CONSTRAINT `externaliodizationb1_ibfk_1` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`);

--
-- Constraints for table `factories`
--
ALTER TABLE `factories`
  ADD CONSTRAINT `factories_ibfk_1` FOREIGN KEY (`manufacturerFortName`) REFERENCES `manufacturerfortified` (`manufactuerFortName`);

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
-- Constraints for table `manufacturerfortified`
--
ALTER TABLE `manufacturerfortified`
  ADD CONSTRAINT `manufacturerfortified_ibfk_1` FOREIGN KEY (`vehicleName`) REFERENCES `vehicle_type` (`vehicleName`);

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
  ADD CONSTRAINT `oil_tableb2_ibfk_1` FOREIGN KEY (`deviceCompNumber`) REFERENCES `manucdevices` (`deviceCompNumber`),
  ADD CONSTRAINT `oil_tableb2_ibfk_2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manucdevices` (`manufacturerCompName`);

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
-- Constraints for table `sugar_externalfortb1`
--
ALTER TABLE `sugar_externalfortb1`
  ADD CONSTRAINT `sugar_externalfortB1_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_externalfortb2`
--
ALTER TABLE `sugar_externalfortb2`
  ADD CONSTRAINT `sugar_externalfortB2_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_externalfortb3`
--
ALTER TABLE `sugar_externalfortb3`
  ADD CONSTRAINT `sugar_externalfortB3_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalforta1`
--
ALTER TABLE `sugar_internalforta1`
  ADD CONSTRAINT `sugar_internalfortA1_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalforta2`
--
ALTER TABLE `sugar_internalforta2`
  ADD CONSTRAINT `sugar_internalfortA2_ibfk_1` FOREIGN KEY (`deviceCompNumber`) REFERENCES `manucdevices` (`deviceCompNumber`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sugar_internalfortA2_ibfk_2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manucdevices` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalforta3`
--
ALTER TABLE `sugar_internalforta3`
  ADD CONSTRAINT `sugar_internalfortA3_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalfortb1`
--
ALTER TABLE `sugar_internalfortb1`
  ADD CONSTRAINT `sugar_internalfortB1_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalfortc1`
--
ALTER TABLE `sugar_internalfortc1`
  ADD CONSTRAINT `sugar_intenalfortC1_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sugar_internalfortC1_ibfk_2` FOREIGN KEY (`premixType`) REFERENCES `premixtype` (`productName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalfortc2`
--
ALTER TABLE `sugar_internalfortc2`
  ADD CONSTRAINT `sugar_internalfortC2_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalfortc3`
--
ALTER TABLE `sugar_internalfortc3`
  ADD CONSTRAINT `sugar_internalfortC3_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sugar_internalfortC3_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalfortd1`
--
ALTER TABLE `sugar_internalfortd1`
  ADD CONSTRAINT `sugar_internalfortD1_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalqca1`
--
ALTER TABLE `sugar_internalqca1`
  ADD CONSTRAINT `sugar_internalQCA1_manufacturercompound` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalqcb1`
--
ALTER TABLE `sugar_internalqcb1`
  ADD CONSTRAINT `sugar_internalQCB1_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalqcb2`
--
ALTER TABLE `sugar_internalqcb2`
  ADD CONSTRAINT `sugar_internalQCB2_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sugar_internalqcc1`
--
ALTER TABLE `sugar_internalqcc1`
  ADD CONSTRAINT `sugar_internalQCC1_factories` FOREIGN KEY (`factoryName`) REFERENCES `factories` (`factoryName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
