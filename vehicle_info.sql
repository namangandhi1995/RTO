-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2014 at 07:44 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE IF NOT EXISTS `vehicle_info` (
  `vehicleName` varchar(40) NOT NULL,
  `vehicleNumber` int(20) NOT NULL,
  `vehicleModel` varchar(40) NOT NULL,
  `vehicleWeight` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `website` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `fee` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`vehicleName`, `vehicleNumber`, `vehicleModel`, `vehicleWeight`, `name`, `phone`, `street`, `city`, `country`, `website`, `gender`, `birthday`, `nationality`, `fee`) VALUES
('mbjk', 1234, ' hj', 67, ' jkb', 0, '', '', '', '', '', '0000-00-00', '', 0),
('mbjk', 1234, ' hj', 67, ' jkb', 0, '', '', '', '', '', '0000-00-00', '', 0),
('model', 0, ' jh', 0, 'nidz', 0, '', '', '', '', '', '0000-00-00', '', 0),
('model', 23, 'jnikegf', 67, ' jeg fej', 0, '', '', '', '', '', '0000-00-00', '', 0),
('robot', 12345, 'model1', 45, 'nidz', 0, '', '', '', '', '', '0000-00-00', '', 0),
('xperia', 8989, 'model90', 89, 'niks', 0, '', '', '', '', '', '0000-00-00', '', 0),
('xperia', 8989, 'model90', 89, 'niks', 0, '', '', '', '', '', '0000-00-00', '', 0),
('xperia', 8989, 'model90', 89, 'niks', 0, '', '', '', '', '', '0000-00-00', '', 0),
('bnoror', 4545, 'bnjkt', 89, 'anushree', 0, '', '', '', '', '', '0000-00-00', '', 0);
