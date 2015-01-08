-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2014 at 12:43 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dei`
--
CREATE DATABASE `dei` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dei`;

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE IF NOT EXISTS `curriculum` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `emphasis` int(11) NOT NULL,
  `criativity` int(11) NOT NULL,
  `qb` int(11) NOT NULL,
  `fundamental` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `weightage` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `overall` int(1) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`SN`, `emphasis`, `criativity`, `qb`, `fundamental`, `content`, `weightage`, `subject`, `overall`) VALUES
(1, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `external` int(1) DEFAULT NULL,
  `undertake` int(1) DEFAULT NULL,
  `assignment` int(1) DEFAULT NULL,
  `quizzes` int(1) DEFAULT NULL,
  `planned` int(1) DEFAULT NULL,
  `evaluation` int(1) DEFAULT NULL,
  `testing` int(1) DEFAULT NULL,
  `uniformly` int(1) DEFAULT NULL,
  `focus` int(1) DEFAULT NULL,
  `criteria` int(1) DEFAULT NULL,
  `overall` int(1) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`SN`, `external`, `undertake`, `assignment`, `quizzes`, `planned`, `evaluation`, `testing`, `uniformly`, `focus`, `criteria`, `overall`) VALUES
(1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure`
--

CREATE TABLE IF NOT EXISTS `infrastructure` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `garden` int(1) DEFAULT NULL,
  `sport` int(1) DEFAULT NULL,
  `Canteen` int(1) DEFAULT NULL,
  `toilet` int(1) DEFAULT NULL,
  `room` int(1) DEFAULT NULL,
  `class` int(1) DEFAULT NULL,
  `overall` int(1) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `infrastructure`
--

INSERT INTO `infrastructure` (`SN`, `garden`, `sport`, `Canteen`, `toilet`, `room`, `class`, `overall`) VALUES
(1, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `innovations`
--

CREATE TABLE IF NOT EXISTS `innovations` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `humility` int(1) DEFAULT NULL,
  `dignity` int(1) DEFAULT NULL,
  `sincerity` int(1) DEFAULT NULL,
  `honesty` int(1) DEFAULT NULL,
  `cooperation` int(1) DEFAULT NULL,
  `service` int(1) DEFAULT NULL,
  `reliance` int(1) DEFAULT NULL,
  `integrity` int(1) DEFAULT NULL,
  `work` int(1) DEFAULT NULL,
  `overall` int(1) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `innovations`
--

INSERT INTO `innovations` (`SN`, `humility`, `dignity`, `sincerity`, `honesty`, `cooperation`, `service`, `reliance`, `integrity`, `work`, `overall`) VALUES
(1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `facility` int(1) DEFAULT NULL,
  `timing` int(1) DEFAULT NULL,
  `journal` int(1) DEFAULT NULL,
  `need` int(1) DEFAULT NULL,
  `book` int(1) DEFAULT NULL,
  `overall` int(1) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`SN`, `facility`, `timing`, `journal`, `need`, `book`, `overall`) VALUES
(1, 5, 4, 3, 4, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `other_areas`
--

CREATE TABLE IF NOT EXISTS `other_areas` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `success` int(1) DEFAULT NULL,
  `higher` int(1) DEFAULT NULL,
  `placement` int(1) DEFAULT NULL,
  `efforts` int(1) DEFAULT NULL,
  `selection` int(1) DEFAULT NULL,
  `rated` int(1) DEFAULT NULL,
  `overall` int(1) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `other_areas`
--

INSERT INTO `other_areas` (`SN`, `success`, `higher`, `placement`, `efforts`, `selection`, `rated`, `overall`) VALUES
(1, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Year` int(4) NOT NULL,
  `Company` varchar(200) NOT NULL,
  `Post` varchar(100) NOT NULL,
  `Time` datetime NOT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`SN`, `Name`, `Year`, `Company`, `Post`, `Time`) VALUES
(1, 'ajaykant900@gmail.com', 2010, 'DEI', 'Web Developer', '2014-04-21 12:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `computer` int(1) DEFAULT NULL,
  `lab` int(1) DEFAULT NULL,
  `printing` int(1) DEFAULT NULL,
  `resources` int(1) DEFAULT NULL,
  `overall` int(1) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`SN`, `computer`, `lab`, `printing`, `resources`, `overall`) VALUES
(1, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `SN` int(11) NOT NULL AUTO_INCREMENT,
  `quality` int(1) DEFAULT NULL,
  `motivation` int(1) DEFAULT NULL,
  `feedback` int(1) DEFAULT NULL,
  `material` int(1) DEFAULT NULL,
  `respected` int(1) DEFAULT NULL,
  `prepared` int(1) DEFAULT NULL,
  `impartial` int(1) DEFAULT NULL,
  `tuition` int(1) DEFAULT NULL,
  `doubt` int(1) DEFAULT NULL,
  `punctual` int(1) DEFAULT NULL,
  `practical` int(1) DEFAULT NULL,
  `encourage` int(1) DEFAULT NULL,
  `explain` int(1) DEFAULT NULL,
  `genuine` int(1) DEFAULT NULL,
  `update` int(1) DEFAULT NULL,
  `knowledge` int(1) DEFAULT NULL,
  `overall` int(1) DEFAULT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`SN`, `quality`, `motivation`, `feedback`, `material`, `respected`, `prepared`, `impartial`, `tuition`, `doubt`, `punctual`, `practical`, `encourage`, `explain`, `genuine`, `update`, `knowledge`, `overall`) VALUES
(1, 5, 3, 4, 4, 4, 3, 3, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
