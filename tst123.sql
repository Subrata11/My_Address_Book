-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2017 at 06:58 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tst123`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `userID` int(8) NOT NULL,
  `name` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `Address` varchar(90) NOT NULL,
  `Phone` varchar(90) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `userID`, `name`, `email`, `Address`, `Phone`) VALUES
(1, 4, 'Shoahag Sarkar', 'shohag@gmail.com', 'bogta', '01637393003'),
(7, 2, 'Rakhi@gmail.com', 'Rakhi@gmail.com', 'Shapaher,Naogaon', '0189932833'),
(5, 5, 'Rakhi Paul', 'Rakhi@gmail.com', 'Rakhi@gmail.com', '01848938943'),
(4, 6, 'shawan khan', 'shawan@gmail.com', 'shawan@gmail.com', '67676587576'),
(6, 5, 'admin111@gmail.com	', 'admin111@gmail.com', 'admin111@gmail.com', '01923894389'),
(8, 9, 'Asfi khan', 'asif@gmail.com', 'Dhaka', '01738989030'),
(9, 2, 'Sunil Chadra Paul', 'sunil@gmail.com', 'sapaher,naogaon', '01728172450');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(5, 'admin admin ', 'admin111@gmail.com', '89015627f9d33db6fdfab57516cb5902'),
(2, 'Rakhi Paul', 'Rakhi@gmail.com', 'dfbf9119d025e44bdbd0537aa1ce20b7'),
(11, 'Nandan Sarkar', 'nandan@gmail.com', '036ab64b7549288492f042d41091e919'),
(6, 'Subrata Paul', 'subrata@gmail.com', 'c50d11f0e2b940b5346fdc34c93164de'),
(7, 'heba A', 'heba@gmail.com', '664f4ae1b7e1ea5e88dab5111e8423b3'),
(8, 'arafat A', 'arafat@gmail.com', '04e8ffde1f7123c8cfe5a6cf340c94f6'),
(9, 'sakor khan', 'sakor@gmail.com', '3cc8db1eb970eaacb22f508b14ea3d0a'),
(10, 'rimty', 'rimty@gmail.com', '31b98a290691bb2a604bccee5eb417d1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
