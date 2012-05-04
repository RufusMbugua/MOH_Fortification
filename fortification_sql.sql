-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2012 at 03:22 PM
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


-- --------------------------------------------------------

--
-- Table structure for table `externalfortifiedb1`
--

CREATE TABLE IF NOT EXISTS `externalfortifiedb1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `name` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `signature` varchar(15) NOT NULL,
  `opening` varchar(45) DEFAULT NULL,
  `closing` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableB1(12)_TechAudit_Manufacturer_FCenters1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `externalfortifiedb1`
--


-- --------------------------------------------------------

--
-- Table structure for table `externalfortifiedb2`
--

CREATE TABLE IF NOT EXISTS `externalfortifiedb2` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date DEFAULT NULL,
  `publicHealthOfficer` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `productionArea` varchar(45) DEFAULT NULL,
  `packageArea` varchar(45) DEFAULT NULL,
  `warehouse` varchar(45) DEFAULT NULL,
  `staffFacilities` varchar(45) DEFAULT NULL,
  `hygiene` varchar(45) DEFAULT NULL,
  `protectiveGear` varchar(45) DEFAULT NULL,
  `trainingInTasks` varchar(45) DEFAULT NULL,
  `writtenProcedures` varchar(45) DEFAULT NULL,
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
  `labelingSpecifications` tinyint(1) NOT NULL,
  `fortifiedSaltStoredAdequate` varchar(45) DEFAULT NULL,
  `recommendations` varchar(45) DEFAULT NULL,
  `correctiveActions` varchar(45) DEFAULT NULL,
  `comments` varchar(45) DEFAULT NULL,
  `nonCompliances` varchar(45) DEFAULT NULL,
  `suggestionsForImprovement` varchar(45) DEFAULT NULL,
  `idComposite` varchar(45) DEFAULT NULL,
  `iodineMgPerKg0` varchar(45) DEFAULT NULL,
  `refIodine` varchar(45) DEFAULT NULL,
  `iodineMgPerKg1` varchar(45) DEFAULT NULL,
  `idOther` varchar(45) DEFAULT NULL,
  `iodineMgPerKg2` varchar(45) DEFAULT NULL,
  `iodineMgPerKg3` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableB2(13)_AuditInspect_Manufacturer_FCenters1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `externalfortifiedb2`
--


-- --------------------------------------------------------

--
-- Table structure for table `externaliodizationb1`
--

CREATE TABLE IF NOT EXISTS `externaliodizationb1` (
  `transactionNumber` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
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
  `suggestionForImprovement` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) DEFAULT NULL,
  `supervisorName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableB1(1011)_TechAudit_Manufacturer_FCenters1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `externaliodizationb1`
--


-- --------------------------------------------------------

--
-- Table structure for table `internalfortifieda1`
--

CREATE TABLE IF NOT EXISTS `internalfortifieda1` (
  `receiptNumber` int(11) NOT NULL AUTO_INCREMENT,
  `productType` varchar(10) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `inspectedBy` varchar(45) DEFAULT NULL,
  `purchaseOrderNumber` int(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `integrityObservation` varchar(45) NOT NULL,
  `lotNumber` int(11) DEFAULT NULL,
  `lotObservation` varchar(45) NOT NULL,
  `productionDate` date DEFAULT NULL,
  `productObservation` varchar(45) NOT NULL,
  `expiryDate` date DEFAULT NULL,
  `expirationObservation` varchar(45) NOT NULL,
  `contentClaimedLabel` varchar(45) DEFAULT NULL,
  `contentObservation` varchar(45) NOT NULL,
  `certificateOfAnalysis` varchar(45) DEFAULT NULL,
  `certificateObservation` varchar(45) NOT NULL,
  `other` varchar(45) DEFAULT NULL,
  `otherObseravtion` varchar(45) NOT NULL,
  `accepted` tinyint(1) DEFAULT NULL,
  `reasonsForRejection` varchar(45) DEFAULT NULL,
  `receivedBy` varchar(45) NOT NULL,
  PRIMARY KEY (`receiptNumber`),
  KEY `fk_TableA2(23)_PremixType` (`productType`),
  KEY `fk_TableA2(23)_Manufacturer_Compound1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `internalfortifieda1`
--


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
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableA2(24)_INV_Manufacturer_Compound1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `internalfortifieda2`
--


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
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `manufacturerCompName` (`manufacturerCompName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `internalfortifiedb1`
--

INSERT INTO `internalfortifiedb1` (`transactionNumber`, `dates`, `fillerWeight`, `iodineWeight`, `finalPremixWeight1`, `startTime`, `endTime`, `finalPremixWeight`, `transactedBy`, `manufacturerCompName`) VALUES
(5, '2012-05-04', 11, 4, 13, '0000-00-', '0000-00-', 7, 'mn', 'Kensalt'),
(6, '2012-05-03', 8, 5, 9.9, '0000-00-', '0000-00-', 11, 'bn', 'Kensalt'),
(7, '2012-04-25', 90, 54, 136, '0000-00-', '0000-00-', 130, 'we', 'Kensalt'),
(8, '2012-05-02', 7, 8, 8, '0000-00-', '0000-00-', 6, 'vb', 'Kensalt'),
(9, '2012-05-02', 6, 6, 7, '0000-00-', '0000-00-', 7, 'ds', 'Kensalt'),
(10, '2012-04-03', 55, 54, 5, '0000-00-', '0000-00-', 5, 'ep', 'Kensalt'),
(11, '2012-04-10', 44, 23, 4, '0000-00-', '0000-00-', 8, 'jk', 'Kensalt'),
(12, '2012-05-02', 33, 34, 3, '0000-00-', '0000-00-', 6, 'ty', 'Kensalt'),
(13, '2012-05-02', 22, 21, 4, '0000-00-', '0000-00-', 4, 'ty', 'Kensalt'),
(14, '2012-05-02', 88, 44, 120, '0000-00-', '0000-00-', 119, 'kp', 'Kensalt'),
(15, '2012-05-03', 11, 11, 22, '0000-00-', '0000-00-', 19.9, 'nb', 'Kensalt'),
(16, '2012-04-09', 333, 200, 503, '0000-00-', '0000-00-', 506, 'jh', 'Kensalt'),
(17, '2012-04-18', 33, 55, 55, '0000-00-', '0000-00-', 100, 'gh', 'Kensalt'),
(18, '2012-05-24', 12, 4, 16, '0000-00-', '0000-00-', 16, 'mn', 'Kensalt'),
(19, '2012-05-24', 12, 12, 23, '0000-00-', '0000-00-', 22, 'vc', 'Kensalt'),
(20, '2012-04-27', 42, 12, 54, '0000-00-', '0000-00-', 53, 'bn', 'Kensalt'),
(21, '2012-05-01', 100, 34, 130, '0000-00-', '0000-00-', 129, 'jh', 'Kensalt'),
(22, '2012-05-02', 200, 45, 245, '0000-00-', '0000-00-', 289, 'xz', 'Kensalt'),
(23, '2012-05-02', 100, 99, 199, '0000-00-', '0000-00-', 198, 'ty', 'Kensalt'),
(24, '2012-05-02', 200, 77, 277, '0000-00-', '0000-00-', 275, 'ui', 'Kensalt'),
(25, '2012-05-02', 11, 4, 13, '0000-00-', '0000-00-', 7, 'anna', 'Kensalt'),
(26, '2012-04-30', 11, 4, 13, '0000-00-', '0000-00-', 7, 'tono', 'Kensalt'),
(27, '2012-04-24', 8, 5, 9.9, '0000-00-', '0000-00-', 11, 'lisa', 'Kensalt'),
(28, '2012-05-02', 11, 4, 13, '02:03 PM', '02:04 PM', 7, 'maria', 'Kensalt'),
(29, '2012-05-01', 8, 5, 9.9, '02:03 PM', '02:04 PM', 11, 'cello', 'Kensalt'),
(30, '2012-04-16', 90, 54, 136, '02:03 PM', '02:04 PM', 130, 'luna', 'Kensalt'),
(31, '2012-05-02', 7, 8, 8, '02:03 PM', '02:04 PM', 6, 'limbo', 'Kensalt'),
(32, '2012-04-30', 11, 4, 13, '02:07 PM', '02:07 PM', 7, 'anna', 'Kensalt'),
(33, '2012-05-01', 8, 5, 9.9, '02:07 PM', '02:08 PM', 11, 'lisa', 'Kensalt'),
(34, '2012-05-09', 90, 54, 136, '02:06 PM', '02:08 PM', 130, 'katie', 'Kensalt'),
(35, '2012-04-23', 7, 8, 8, '02:07 PM', '03:08 PM', 6, 'raj', 'Kensalt'),
(36, '2012-04-26', 6, 6, 7, '02:07 PM', '03:08 PM', 7, 'kadir', 'Kensalt'),
(37, '2012-04-03', 55, 54, 5, '02:07 PM', '04:08 PM', 5, 'abdi', 'Kensalt'),
(38, '2012-04-10', 44, 23, 4, '02:07 PM', '03:08 PM', 8, 'abdi', 'Kensalt'),
(39, '2012-04-17', 33, 34, 3, '02:07 PM', '05:09 PM', 6, 'mike', 'Kensalt'),
(40, '2012-04-09', 22, 21, 4, '02:07 PM', '06:09 PM', 4, 'erica', 'Kensalt'),
(41, '2012-05-02', 88, 44, 120, '02:09 PM', '06:10 PM', 119, 'nayla', 'Kensalt'),
(42, '2012-05-03', 11, 11, 22, '12:09 PM', '10:10 PM', 19.9, 'mia', 'Kensalt'),
(43, '2012-04-09', 333, 200, 503, '07:09 AM', '10:10 AM', 506, 'nia', 'Kensalt'),
(44, '2012-04-18', 33, 55, 55, '08:09 AM', '09:10 AM', 100, 'yuri', 'Kensalt'),
(45, '2012-05-24', 12, 4, 16, '02:09 PM', '08:11 PM', 16, 'mogaka', 'Kensalt'),
(46, '2012-05-24', 12, 12, 23, '02:11 PM', '06:20 PM', 22, 'otieno', 'Kensalt'),
(47, '2012-04-27', 42, 12, 54, '02:11 PM', '07:13 PM', 53, 'omusakhulu', 'Kensalt'),
(48, '2012-05-01', 100, 34, 130, '02:12 PM', '04:13 PM', 129, 'wendy', 'Kensalt'),
(49, '2012-05-02', 200, 45, 245, '02:12 PM', '08:13 PM', 289, 'irene', 'Kensalt'),
(50, '2012-05-02', 100, 99, 199, '02:11 PM', '03:13 PM', 198, 'hanna', 'Kensalt'),
(51, '2012-05-02', 200, 77, 277, '02:11 PM', '02:13 PM', 275, 'kinyanjui', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `internalfortifiedb2`
--

CREATE TABLE IF NOT EXISTS `internalfortifiedb2` (
  `checkNumber` int(11) NOT NULL AUTO_INCREMENT,
  `dates` date NOT NULL,
  `condition` tinyint(1) NOT NULL,
  `observations` varchar(45) DEFAULT NULL,
  `checkedBy` varchar(45) DEFAULT NULL,
  `deviceCompNumber` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`checkNumber`),
  KEY `fk_TableB2(26)_WeeklyChk_Manufacturer_Centre_Devices1` (`manufacturerCompName`),
  KEY `fk_TableB2(26)_WeeklyChk_Manufacturer_Centre_Devices2` (`deviceCompNumber`)
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
  `shiftTime` datetime DEFAULT NULL,
  `saltProducedMT` double DEFAULT NULL,
  `premixUsed` double DEFAULT NULL,
  `saltFortVsPremixUsed` double DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `transactedBy` int(11) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_Table(27)_ProdLog_Production_Manufacturer_FCenters1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `internalfortifiedc1`
--


-- --------------------------------------------------------

--
-- Table structure for table `iodizationcenters`
--

CREATE TABLE IF NOT EXISTS `iodizationcenters` (
  `iodizationCentreNumber` int(11) NOT NULL AUTO_INCREMENT,
  `iodizationCentreName` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `manufacturerFortName` varchar(45) NOT NULL,
  PRIMARY KEY (`iodizationCentreNumber`,`manufacturerFortName`),
  UNIQUE KEY `Manufacturer_FCentre_Name_UNIQUE` (`iodizationCentreName`),
  KEY `fk_Manufacturer_FCenters_Manufacturer_Fortifier1` (`manufacturerFortName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `iodizationcenters`
--

INSERT INTO `iodizationcenters` (`iodizationCentreNumber`, `iodizationCentreName`, `location`, `address`, `phoneNumber`, `manufacturerFortName`) VALUES
(1, 'Ken Iodization I', 'Pwani', '678', '4567898', 'Kensalt');

-- --------------------------------------------------------

--
-- Table structure for table `manucdevices`
--

CREATE TABLE IF NOT EXISTS `manucdevices` (
  `manufacturerCompName` varchar(45) NOT NULL,
  `deviceCompNumber` varchar(45) NOT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacturerCompName`,`deviceCompNumber`),
  KEY `fk_Manufacturer_Centre_Devices_Devices1` (`deviceCompNumber`),
  KEY `fk_Manufacturer_Centre_Devices_Manufacturer_FCenters1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manucdevices`
--


-- --------------------------------------------------------

--
-- Table structure for table `manufacturercompound`
--

CREATE TABLE IF NOT EXISTS `manufacturercompound` (
  `manufactuerId` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phoneNumber` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufactuerId`),
  UNIQUE KEY `Manufacturer_Name_UNIQUE` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `manufacturercompound`
--


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
(1, 'Kensalt', '34', 'Malindi', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `premixtype`
--

CREATE TABLE IF NOT EXISTS `premixtype` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`productId`),
  UNIQUE KEY `ProdName_UNIQUE` (`productName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `premixtype`
--


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
  `amountUsed` double DEFAULT NULL,
  PRIMARY KEY (`transactionNumber`),
  KEY `fk_TableA1(5_6)PottasiumIodate_Manufacturer_Compound1` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smallscalea1`
--


-- --------------------------------------------------------

--
-- Table structure for table `smallscalea2`
--

CREATE TABLE IF NOT EXISTS `smallscalea2` (
  `smallScaleId` int(11) NOT NULL AUTO_INCREMENT,
  `dates` varchar(45) DEFAULT NULL,
  `manufacturerCompName` varchar(45) DEFAULT NULL,
  `weightKg` double DEFAULT NULL,
  `lotNumber` varchar(45) DEFAULT NULL,
  `contentOfIodine` double DEFAULT NULL,
  `amountUsed` double DEFAULT NULL,
  PRIMARY KEY (`smallScaleId`),
  KEY `manufacturerCompound_smallScaleA2` (`manufacturerCompName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `smallscalea2`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `usersID` bigint(20) NOT NULL AUTO_INCREMENT,
  `userName` varchar(45) NOT NULL,
  `userPassword` varchar(45) NOT NULL,
  `userRights` tinyint(1) NOT NULL,
  PRIMARY KEY (`usersID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `userName`, `userPassword`, `userRights`) VALUES
(1, 'admin', 'admin', 1),
(2, 'admin@kebs.go.ke', 'admin', 1),
(3, 'mutono@tar.org', '1234', 2),
(4, 'rufus@tar.org', '1234', 3);

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
  ADD CONSTRAINT `fk_TableB1(12)_TechAudit_Manufacturer_FCenters1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `iodizationcenters` (`iodizationCentreName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `externalfortifiedb2`
--
ALTER TABLE `externalfortifiedb2`
  ADD CONSTRAINT `fk_TableB2(13)_AuditInspect_Manufacturer_FCenters1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `iodizationcenters` (`iodizationCentreName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `externaliodizationb1`
--
ALTER TABLE `externaliodizationb1`
  ADD CONSTRAINT `fk_TableB1(1011)_TechAudit_Manufacturer_FCenters1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `iodizationcenters` (`iodizationCentreName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_TableA2(24)_INV_Manufacturer_Compound1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `internalfortifiedb1`
--
ALTER TABLE `internalfortifiedb1`
  ADD CONSTRAINT `internalfortifiedb1_ibfk_1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturerfortified` (`manufactuerFortName`);

--
-- Constraints for table `internalfortifiedb2`
--
ALTER TABLE `internalfortifiedb2`
  ADD CONSTRAINT `fk_TableB2(26)_WeeklyChk_Manufacturer_Centre_Devices1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manucdevices` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TableB2(26)_WeeklyChk_Manufacturer_Centre_Devices2` FOREIGN KEY (`deviceCompNumber`) REFERENCES `manucdevices` (`deviceCompNumber`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `internalfortifiedc1`
--
ALTER TABLE `internalfortifiedc1`
  ADD CONSTRAINT `fk_Table(27)_ProdLog_Production_Manufacturer_FCenters1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `iodizationcenters` (`iodizationCentreName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `iodizationcenters`
--
ALTER TABLE `iodizationcenters`
  ADD CONSTRAINT `fk_Manufacturer_FCenters_Manufacturer_Fortifier1` FOREIGN KEY (`manufacturerFortName`) REFERENCES `manufacturerfortified` (`manufactuerFortName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `manucdevices`
--
ALTER TABLE `manucdevices`
  ADD CONSTRAINT `fk_Manufacturer_Centre_Devices_Devices1` FOREIGN KEY (`deviceCompNumber`) REFERENCES `devices` (`deviceSerialNumber`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Manufacturer_Centre_Devices_Manufacturer_FCenters1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `iodizationcenters` (`iodizationCentreName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `smallscalea1`
--
ALTER TABLE `smallscalea1`
  ADD CONSTRAINT `fk_TableA1(5_6)PottasiumIodate_Manufacturer_Compound1` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `smallscalea2`
--
ALTER TABLE `smallscalea2`
  ADD CONSTRAINT `manufacturerCompound_smallScaleA2` FOREIGN KEY (`manufacturerCompName`) REFERENCES `manufacturercompound` (`manufacturerCompName`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
