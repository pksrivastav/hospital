-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jul 03, 2009 at 07:04 AM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `hospital`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `adminlogin`
-- 

CREATE TABLE `adminlogin` (
  `adminId` int(11) NOT NULL auto_increment,
  `userName` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY  (`adminId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- 
-- Dumping data for table `adminlogin`
-- 

INSERT INTO `adminlogin` (`adminId`, `userName`, `password`) VALUES 
(1, 'admin', 'admin'),
(13, 'Ram', 'Sita'),
(14, 'abhishek', 'amrita'),
(15, 'abhishek', 'amrita'),
(16, 'abhishek', 'amrita'),
(17, 'amit ', 'ragni'),
(18, 'wwwww', 'eeee'),
(19, 'qq', 'abhishek'),
(20, 'ramesh', 'ramesh'),
(21, 'sdastdyt', 'gsdghasd'),
(22, 'pksrivastav_mca@yahoomail.com', 'abhishek'),
(23, 'pksrivastav_mca@yahoomail.com', 'abhishek'),
(24, 'pksrivastav_mca@yahoomail.com', 'abhishek'),
(25, 'deepak_verma154@yahoo.com', 'ram'),
(26, 'deepak_verma154@yahoo.com', 'asdasd'),
(27, 'qq', 'ddd'),
(28, 'asdasd', 'asdasd'),
(29, 'nnnnn', 'mmmm');
