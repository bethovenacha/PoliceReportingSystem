-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2014 at 08:25 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `dtr`
--

CREATE TABLE IF NOT EXISTS `dtr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_userId` int(11) NOT NULL,
  `timein` datetime DEFAULT NULL,
  `timeout` datetime DEFAULT NULL,
  `duration` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `dtr`
--

INSERT INTO `dtr` (`id`, `fk_userId`, `timein`, `timeout`, `duration`) VALUES
(39, 1, '2014-07-30 04:08:29', NULL, NULL),
(40, 1, '2014-07-30 04:08:44', NULL, NULL),
(41, 1, '2014-07-30 04:33:09', NULL, NULL),
(42, 1, '2014-07-30 04:33:49', '2014-07-30 04:34:19', '00:00:30'),
(43, 1, '2014-07-30 04:34:25', NULL, NULL),
(44, 1, '2014-07-30 05:38:48', NULL, NULL),
(45, 1, '2014-07-30 05:39:23', NULL, NULL),
(46, 1, '2014-07-30 05:59:03', NULL, NULL),
(47, 1, '2014-07-30 06:00:28', NULL, NULL),
(48, 1, '2014-07-30 06:36:45', NULL, NULL),
(49, 1, '2014-07-30 06:38:59', NULL, NULL),
(50, 1, '2014-07-30 06:40:25', NULL, NULL),
(51, 1, '2014-07-30 06:40:55', NULL, NULL),
(52, 1, '2014-07-30 06:42:51', NULL, NULL),
(53, 1, '2014-07-30 06:47:56', NULL, NULL),
(54, 1, '2014-07-30 06:50:48', NULL, NULL),
(55, 1, '2014-07-30 07:01:48', NULL, NULL),
(56, 1, '2014-08-10 22:26:14', NULL, NULL),
(57, 1, '2014-08-14 05:02:26', '2014-08-14 05:05:46', '00:03:20'),
(58, 1, '2014-08-14 13:55:39', '2014-08-14 16:04:04', '02:08:25'),
(59, 1, '2014-08-15 05:00:14', '2014-08-15 05:41:29', '00:41:15'),
(60, 2, '2014-08-15 05:41:33', NULL, NULL),
(61, 1, '2014-08-15 06:19:58', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `complainantName` varchar(200) NOT NULL,
  `complainantAddress` text NOT NULL,
  `complainantContact` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `complainantAge` int(11) NOT NULL,
  `complainantGender` varchar(200) NOT NULL,
  `accusedName` varchar(200) NOT NULL,
  `accusedAddress` text NOT NULL,
  `accusedContact` varchar(200) NOT NULL,
  `accusedAge` int(11) NOT NULL,
  `accusedGender` varchar(200) NOT NULL,
  `eventNmber` varchar(50) NOT NULL,
  `picture` text,
  `subject` text NOT NULL,
  `natureOfCrime` text NOT NULL,
  `dateCommited` datetime NOT NULL,
  `placeCommited` text NOT NULL,
  `apprehendingOffier` varchar(2000) NOT NULL,
  `dateRecoreded` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reason` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`complainantName`, `complainantAddress`, `complainantContact`, `email`, `complainantAge`, `complainantGender`, `accusedName`, `accusedAddress`, `accusedContact`, `accusedAge`, `accusedGender`, `eventNmber`, `picture`, `subject`, `natureOfCrime`, `dateCommited`, `placeCommited`, `apprehendingOffier`, `dateRecoreded`, `reason`, `id`, `Status`) VALUES
('|||', '', '', '', 0, 'Male', 'tesadasd|asdasdas|dasdasd|asdasd', '', '', 0, 'Male', 'BL-29', '', '', '', '2014-08-14 21:08:06', '', '', '2014-08-14 21:09:14', '', 30, 'Solved'),
('demo|demo|demo|demo', 'demo', 'demo', 'fmolina7070@gmail.com', 22, 'Male', 'demo|demo|demo|demo', 'demo', '', 22, 'Male', 'BL-30', '', 'demo', 'demo', '2014-08-14 21:11:00', 'demo', 'demo', '2014-08-14 21:11:37', 'demo', 31, 'Solved'),
('demo|demo|demo|demo', '', '', '', 0, 'Male', '|||', '', '', 0, 'Male', 'BL-31', '', '', '', '2014-08-14 21:08:59', '', '', '2014-08-14 21:20:05', '', 32, 'Solved'),
('|||', '', '', 'fmolina7070@gmail.com', 0, 'Male', 'demo|demo|demo|demo', '', '', 0, 'Male', 'BL-32', '', '', '', '2014-08-14 21:08:17', '', '', '2014-08-14 21:20:34', '', 33, 'Solved'),
('demo|demo|demo|demo', '', '', 'fmolina7070@gmail.com', 0, 'Male', '|||', '', '', 0, 'Male', 'BL-33', '', '', '', '2014-08-14 21:08:13', '', '', '2014-08-14 21:21:35', '', 34, 'Solved'),
('dem o|demo|demo|demo', '', '', 'fmolina7070@gmail.com', 0, 'Male', '|||', '', '', 0, 'Male', 'BL-34', '', '', '', '2014-08-14 21:24:00', '', '', '2014-08-14 21:28:17', '', 35, 'Solved'),
('demo|demo|demo|demo', '', '', 'fmolina7070@gmail.com', 0, 'Male', 'demo|demo|demo|demo', 'fmolina7070@gmail.com', '', 0, 'Male', 'BL-35', '', '', '', '2014-08-14 21:08:45', '', '', '2014-08-14 21:30:06', '', 36, 'Solved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `current_address` text NOT NULL,
  `position_officer` varchar(200) NOT NULL,
  `picture` varchar(2000) DEFAULT NULL,
  `date_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `officer_id_num` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isAdmin` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `age`, `current_address`, `position_officer`, `picture`, `date_register`, `officer_id_num`, `username`, `password`, `id`, `isAdmin`) VALUES
('admin', 'admin', 12, 'admin', 'P.O. 3', '', '2014-04-07 19:45:40', 12, 'admin', 'admin', 1, b'1'),
('demo', 'demo', 123, 'demo', 'demo', '', '2014-08-14 20:41:27', 123, 'demo', 'demo', 2, b'0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
