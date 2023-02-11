-- phpMyAdmin SQL Dump
-- version 2.6.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 23, 2022 at 01:09 PM
-- Server version: 4.1.9
-- PHP Version: 4.3.10
-- 
-- Database: `monics`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `appuser`
-- 

CREATE TABLE `appuser` (
  `IdUser` int(12) NOT NULL auto_increment,
  `Adress` varchar(50) NOT NULL default '',
  `Password` varchar(50) NOT NULL default '',
  `Name` varchar(50) NOT NULL default '',
  `ProfileName` varchar(50) NOT NULL default '',
  `SignupDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `Tel` int(20) NOT NULL default '0',
  `Bio` text NOT NULL,
  `ProfileImgPath` varchar(200) NOT NULL default '',
  `CoverImgPath` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`IdUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `appuser`
-- 

INSERT INTO `appuser` VALUES (1, 'wajihsayes@gmail.com', 'Wajih07D2', 'EssayesMedWajih', 'Wvajih', '2022-12-23 00:00:00', 27553981, 'Photoghrapher CmeraMen Arttiste Developer', '1.jpg', '5.jpg');
INSERT INTO `appuser` VALUES (2, 'wajih-essayes@outlook.fr', 'Wajih2002', 'wajih', 'Wajih Essayes', '2022-12-21 00:00:00', 99248034, '', '5.jpg', '7.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `follower`
-- 

CREATE TABLE `follower` (
  `FollowerUser` int(12) NOT NULL default '0',
  `FollowredUser` int(12) NOT NULL default '0',
  KEY `FollowerUser` (`FollowerUser`,`FollowredUser`),
  KEY `FollowredUser` (`FollowredUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `follower`
-- 

INSERT INTO `follower` VALUES (1, 2);

-- --------------------------------------------------------

-- 
-- Table structure for table `post`
-- 

CREATE TABLE `post` (
  `IdPost` int(50) NOT NULL auto_increment,
  `CreatedBy` int(12) NOT NULL default '0',
  `CreateDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `Caption` varchar(50) NOT NULL default '',
  `PostType` varchar(50) NOT NULL default '',
  `PostDesc` text NOT NULL,
  `FilePath` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`IdPost`),
  KEY `CreatedBy` (`CreatedBy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `post`
-- 

INSERT INTO `post` VALUES (1, 1, '2022-12-23 00:00:00', 'Image By me', 'Post', 'Nikon d3200 Art w dra chnoua', '8.jpg');
INSERT INTO `post` VALUES (2, 1, '2022-12-22 00:00:00', 'Im The Best One', 'Post', 'Nikon d3200 Art w dra chnoua', '9.jpg');
INSERT INTO `post` VALUES (3, 1, '2022-12-21 00:00:00', 'Im the best one', 'Post', 'Nikon d3200 Art w dra chnoua', '10.jpg');
INSERT INTO `post` VALUES (4, 2, '2022-12-15 00:00:00', 'Image By me', 'Post', 'Nikon d3200 Art w dra chnoua', '11.jpg');
INSERT INTO `post` VALUES (5, 2, '2022-12-08 00:00:00', 'Im the best one', 'Post', 'Nikon d3200 Art w dra chnoua', '7.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `reaction`
-- 

CREATE TABLE `reaction` (
  `UserId` int(12) NOT NULL default '0',
  `PostId` int(50) NOT NULL default '0',
  KEY `UserId` (`UserId`,`PostId`),
  KEY `PostId` (`PostId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `reaction`
-- 

INSERT INTO `reaction` VALUES (1, 1);
INSERT INTO `reaction` VALUES (1, 2);
INSERT INTO `reaction` VALUES (1, 4);
INSERT INTO `reaction` VALUES (2, 5);

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `follower`
-- 
ALTER TABLE `follower`
  ADD CONSTRAINT `follower_ibfk_2` FOREIGN KEY (`FollowredUser`) REFERENCES `appuser` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follower_ibfk_1` FOREIGN KEY (`FollowerUser`) REFERENCES `appuser` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `post`
-- 
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`CreatedBy`) REFERENCES `appuser` (`IdUser`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `reaction`
-- 
ALTER TABLE `reaction`
  ADD CONSTRAINT `reaction_ibfk_2` FOREIGN KEY (`PostId`) REFERENCES `post` (`IdPost`),
  ADD CONSTRAINT `reaction_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `appuser` (`IdUser`);
