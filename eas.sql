-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2019 at 03:17 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime DEFAULT NULL,
  `user_idfk` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_idfk` (`user_idfk`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstName`, `middleName`, `lastName`, `date_created`, `date_modified`, `user_idfk`) VALUES
(2, '', '', '', '2018-09-12 07:26:00', '2018-09-12 07:26:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `serviceId` varchar(255) NOT NULL,
  `vehicleId` int(255) NOT NULL,
  `personalId` int(11) NOT NULL,
  `otherService` varchar(255) DEFAULT NULL,
  `additionalMessage` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `adminDate` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  `notification` int(1) DEFAULT '1',
  `sms` int(11) DEFAULT '0',
  `threedayssms` int(11) DEFAULT '0',
  `ondaysms` int(11) DEFAULT '0',
  `targetEndDate` datetime DEFAULT NULL,
  `color` varchar(7) DEFAULT NULL,
  `rescheduledate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicleId` (`vehicleId`),
  KEY `personalId` (`personalId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `serviceId`, `vehicleId`, `personalId`, `otherService`, `additionalMessage`, `status`, `date`, `adminDate`, `created`, `modified`, `notification`, `sms`, `threedayssms`, `ondaysms`, `targetEndDate`, `color`, `rescheduledate`) VALUES
(1, 'Change Oil', 1, 1, 'Nothing', 'Please respond please', 'complete', '2019-02-05 00:00:00', NULL, '2019-02-07 18:39:19', '2019-02-07 19:26:41', 1, 0, 0, 0, '2019-02-15 00:00:00', '#0071c5', NULL),
(2, 'Change Oil', 1, 1, '', '', 'In-Progress', '2019-02-09 00:00:00', NULL, '2019-02-07 19:48:02', '2019-02-08 00:00:00', 1, 0, 0, 0, '2019-02-21 00:00:00', '#0071c5', NULL),
(3, 'Change Oil', 1, 1, '', 'test resched admin', 'Rescheduled', '2019-02-27 00:00:00', 'admin', '2019-02-07 22:12:25', NULL, 1, 0, 0, 0, NULL, NULL, '2019-02-28'),
(4, 'Change Oil', 1, 1, '', NULL, 'complete', '2019-02-13 00:00:00', 'client', '2019-02-08 02:58:11', '2019-02-08 03:02:50', 1, 0, 0, 0, '2019-02-15 00:00:00', '#0071c5', NULL),
(5, 'Change Oil', 2, 2, 'reply asap', 'schedule not available pls choose from the choices, tnx', 'Accepted', '2019-02-15 00:00:00', 'admin', '2019-02-11 23:15:20', NULL, 1, 0, 0, 0, '2019-02-15 00:00:00', '#4caf50', '2019-2-14|2019-2-20|2019-2-15'),
(6, 'Change Oil', 1, 1, '', '', 'Pending', '2019-02-14 00:00:00', NULL, '2019-02-11 23:12:01', NULL, 1, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chargeinvoice`
--

DROP TABLE IF EXISTS `chargeinvoice`;
CREATE TABLE IF NOT EXISTS `chargeinvoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appointmentId` int(11) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `sparePartsId` varchar(255) DEFAULT NULL,
  `sparePartsPrice` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TotalPrice` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  `notification` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chargeinvoice`
--

INSERT INTO `chargeinvoice` (`id`, `appointmentId`, `owner`, `sparePartsId`, `sparePartsPrice`, `date`, `TotalPrice`, `created`, `modified`, `notification`) VALUES
(1, 1, 'Leo Evrian Diano', NULL, NULL, '2019-02-07 19:26:40', 9900, '2019-02-07 19:26:40', NULL, 0),
(2, 4, 'Leo Evrian Diano', NULL, NULL, '2019-02-08 03:02:49', 1000, '2019-02-08 03:02:49', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob,
  `img_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `image`, `img_name`, `description`, `date`) VALUES
(13, NULL, 'body_paint', NULL, '2019-02-07 22:31:15'),
(14, NULL, 'body_repair', NULL, '2019-02-07 22:31:15'),
(15, NULL, 'customize', NULL, '2019-02-07 22:31:15'),
(16, NULL, 'electrical', NULL, '2019-02-07 22:31:15'),
(17, NULL, 'maintenance', NULL, '2019-02-07 22:31:16'),
(18, NULL, 'mechanical', NULL, '2019-02-07 22:31:16'),
(19, NULL, 'first', NULL, '2019-02-07 22:31:16'),
(20, NULL, 'second', NULL, '2019-02-07 22:31:16'),
(21, NULL, 'third', NULL, '2019-02-07 22:31:16'),
(22, NULL, 'assi_man', NULL, '2019-02-07 22:31:16'),
(23, NULL, 'manager', NULL, '2019-02-07 22:31:17'),
(24, NULL, 'supervisor', NULL, '2019-02-07 22:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `daterestricted`
--

DROP TABLE IF EXISTS `daterestricted`;
CREATE TABLE IF NOT EXISTS `daterestricted` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daterestricted`
--

INSERT INTO `daterestricted` (`id`, `date`, `status`, `modified`, `created`) VALUES
(1, '2019-02-27', 'Accepted', NULL, '2019-02-07 18:27:05'),
(2, '2019-02-04', 'Accepted', NULL, '2019-02-08 12:52:14'),
(3, '2019-2-21', 'Accepted', NULL, '2019-02-11 23:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `ratingId` int(11) NOT NULL AUTO_INCREMENT,
  `ratingNumber` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock',
  PRIMARY KEY (`ratingId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ratingId`, `ratingNumber`, `name`, `comments`, `created`, `modified`, `status`) VALUES
(1, 5, '', 'Sub to Pewds', '2019-02-07 15:26:37', '2019-02-07 15:26:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `make_series`
--

DROP TABLE IF EXISTS `make_series`;
CREATE TABLE IF NOT EXISTS `make_series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `make` varchar(255) DEFAULT NULL,
  `series` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `make_series`
--

INSERT INTO `make_series` (`id`, `make`, `series`) VALUES
(1, 'toyota', 'vios');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleId` int(11) NOT NULL,
  `personalId` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicleId` (`vehicleId`),
  KEY `personalId` (`personalId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personalinfo`
--

DROP TABLE IF EXISTS `personalinfo`;
CREATE TABLE IF NOT EXISTS `personalinfo` (
  `personalId` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `middleName` varchar(250) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `telephoneNumber` varchar(255) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  `mobileNumber` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`personalId`),
  KEY `userId` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personalinfo`
--

INSERT INTO `personalinfo` (`personalId`, `user_id`, `firstName`, `lastName`, `middleName`, `address`, `telephoneNumber`, `email`, `created`, `modified`, `mobileNumber`) VALUES
(1, 2, 'Leo Evrian', 'Diano', 'Eisma', '#106 Paniclan Inhobol Masinloc Zambales', '', 'evriandiano@gmail.com', '2019-02-07 18:15:02', NULL, '09394011187'),
(2, 5, 'ivy mae', 'palma', 'johnson', 'Tuding, Itogon', NULL, 'ivymaepalma1234@gmail.com', '2019-02-11 23:07:54', NULL, '9268148276');

-- --------------------------------------------------------

--
-- Table structure for table `scope`
--

DROP TABLE IF EXISTS `scope`;
CREATE TABLE IF NOT EXISTS `scope` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scopeWork` varchar(255) NOT NULL,
  `subScope` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scope`
--

INSERT INTO `scope` (`id`, `scopeWork`, `subScope`, `price`, `created`, `modified`) VALUES
(2, 'Mechanical Job', 'Recondition Brake System - Replace Brake Master Repair Kit', 1000, '2019-02-07 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `serviceId` int(11) NOT NULL AUTO_INCREMENT,
  `serviceName` varchar(420) NOT NULL,
  `serviceType` varchar(420) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`serviceId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `serviceName`, `serviceType`, `created`, `modified`) VALUES
(2, 'Change Oil', 'Mechanical', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Check Headlight', 'Electrical', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Simple Retouch', 'Painting', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `spareparts`
--

DROP TABLE IF EXISTS `spareparts`;
CREATE TABLE IF NOT EXISTS `spareparts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Available',
  `remarks` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spareparts`
--

INSERT INTO `spareparts` (`id`, `name`, `description`, `brandName`, `price`, `status`, `remarks`, `created`, `modified`) VALUES
(2, 'Pokeball', 'Standard Pokeball used for capturing pokemon', 'Pokemon Center', 100, 'Available', '', '2019-02-07 17:23:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `appointmentID` int(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'In-Progress',
  `description` varchar(255) NOT NULL,
  `workPrice` int(11) NOT NULL,
  `scope` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `appointmentID` (`appointmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `appointmentID`, `service`, `status`, `description`, `workPrice`, `scope`, `created`, `modified`, `dateStart`, `dateEnd`) VALUES
(4, 1, 'Mechanical Job', 'Done', '', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-07 19:26:19', '2019-02-07 19:26:19', '2019-02-03', NULL),
(6, 2, 'Mechanical Job', 'Done', '', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 01:23:04', '2019-02-08 01:23:04', '2019-02-04', NULL),
(7, 2, 'Mechanical Job', 'In-Progress', '', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 01:23:11', '2019-02-08 01:23:11', NULL, NULL),
(8, 2, 'Mechanical Job', 'In-Progress', 'asdasdsad', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 01:23:22', '2019-02-08 01:23:22', NULL, NULL),
(9, 2, 'Mechanical Job', 'In-Progress', '', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 01:40:05', '2019-02-08 01:40:05', NULL, NULL),
(10, 2, 'Mechanical Job', 'In-Progress', '', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 02:25:25', '2019-02-08 02:25:25', NULL, NULL),
(11, 2, 'Mechanical Job', 'In-Progress', '', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 02:34:19', '2019-02-08 02:34:19', NULL, NULL),
(12, 2, 'Mechanical Job', 'In-Progress', 'asd', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 02:37:19', '2019-02-08 02:37:19', NULL, NULL),
(13, 2, 'Mechanical Job', 'In-Progress', 'asdasd', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 02:37:30', '2019-02-08 02:37:30', NULL, NULL),
(14, 4, 'Mechanical Job', 'Done', 'test 1', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 02:59:25', '2019-02-08 02:59:25', '2019-02-08', '2019-02-08'),
(15, 4, 'Mechanical Job', 'Done', '', 0, 'Recondition Brake System - Replace Brake Master Repair Kit', '2019-02-08 02:59:32', '2019-02-08 02:59:32', '2019-02-08', '2019-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `taskspare`
--

DROP TABLE IF EXISTS `taskspare`;
CREATE TABLE IF NOT EXISTS `taskspare` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `taskID` int(255) NOT NULL,
  `partID` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `partID` (`partID`),
  KEY `taskID` (`taskID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taskspare`
--

INSERT INTO `taskspare` (`id`, `taskID`, `partID`, `remarks`, `quantity`, `total`, `modified`, `created`) VALUES
(1, 4, 2, '', 99, 9900, '0000-00-00 00:00:00', '2019-02-07 19:26:29'),
(2, 15, 2, 'Pwede', 10, 1000, '0000-00-00 00:00:00', '2019-02-08 03:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  `status` varchar(250) DEFAULT 'Active',
  `type` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`, `status`, `type`, `firstName`, `middleName`, `lastName`) VALUES
(1, 'admin', '$2y$10$4M5/qOURNSdyOedsZe3wcu/10nHD0YI1WVzgK9xvf82ajrYRbqvpW', '2018-12-07 14:54:05', NULL, 'Active', 'admin', 'EAS', 'Master ', 'Admin'),
(2, 'Diano187', '$2y$10$8grGQXLJUFpX97fET7iN5.GydIuVkPJ/5kKDRxo/3lwV3mja3nnaS', '2019-02-07 18:16:15', NULL, 'Active', 'client', NULL, NULL, NULL),
(3, 'manager', '$2y$10$MsODqXAW0ROg5yDS1rbXPO.JT.tapxpx4Nt1n4X5aaT9kekHPSHaW', '2019-02-07 18:23:37', NULL, 'Active', 'manager', 'Cardo', 'Dominador', 'Dalisay'),
(4, 'assistant', '$2y$10$1k7QIr00vmkWlW8EmzHAMuj6IC0JT2bEqGBnp6eWpZDMz4Im5jxzy', '2019-02-07 18:25:20', NULL, 'Active', 'assistant', 'Alyana', 'Dominador', 'Dalisay'),
(5, 'Aybi1234', '$2y$10$JXdnFdtxnDvk/tuWyBcbz.gGIOy7g8uZfDQAy1Aocn1.Oflp0UUZi', '2019-02-11 23:07:54', NULL, 'Active', 'client', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personalId` int(11) NOT NULL,
  `plateNumber` varchar(255) NOT NULL,
  `bodyType` varchar(255) DEFAULT NULL,
  `yearModel` varchar(255) NOT NULL,
  `chasisNumber` varchar(255) DEFAULT NULL,
  `engineClassification` varchar(255) DEFAULT NULL,
  `numberOfCylinders` varchar(255) DEFAULT NULL,
  `typeOfDriveTrain` varchar(255) DEFAULT NULL,
  `make` varchar(255) NOT NULL,
  `series` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `engineNumber` varchar(255) DEFAULT NULL,
  `typeOfEngine` varchar(255) DEFAULT NULL,
  `engineDisplacement` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personalId2` (`personalId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `personalId`, `plateNumber`, `bodyType`, `yearModel`, `chasisNumber`, `engineClassification`, `numberOfCylinders`, `typeOfDriveTrain`, `make`, `series`, `color`, `engineNumber`, `typeOfEngine`, `engineDisplacement`, `status`, `created`, `modified`) VALUES
(1, 1, 'LED - 1003', '', '2010', '', '', '', '', '', 'Civic', 'Black', '', '', '', 'Active', '2019-02-07 18:15:38', NULL),
(2, 2, 'aaa 111', NULL, '2015', NULL, NULL, NULL, NULL, 'toyota', 'vios', '123123', NULL, NULL, NULL, 'Active', '2019-02-11 23:07:54', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`vehicleId`) REFERENCES `vehicles` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`personalId`) REFERENCES `personalinfo` (`personalId`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`vehicleId`) REFERENCES `vehicles` (`id`),
  ADD CONSTRAINT `owner_ibfk_2` FOREIGN KEY (`personalId`) REFERENCES `personalinfo` (`personalId`);

--
-- Constraints for table `personalinfo`
--
ALTER TABLE `personalinfo`
  ADD CONSTRAINT `userId` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taskspare`
--
ALTER TABLE `taskspare`
  ADD CONSTRAINT `taskspare_ibfk_2` FOREIGN KEY (`partID`) REFERENCES `spareparts` (`id`),
  ADD CONSTRAINT `taskspare_ibfk_3` FOREIGN KEY (`taskID`) REFERENCES `task` (`id`);

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `personalId2` FOREIGN KEY (`personalId`) REFERENCES `personalinfo` (`personalId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
