-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2015 at 04:06 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prrs`
--
CREATE DATABASE IF NOT EXISTS `prrs` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prrs`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=224 ;

--
-- Dumping data for table `dtr`
--

INSERT INTO `dtr` (`id`, `fk_userId`, `timein`, `timeout`, `duration`) VALUES
(173, 1, '2015-04-06 05:49:29', '2015-04-06 05:50:32', '00:01:03'),
(174, 1, '2015-04-06 05:50:46', '2015-04-06 05:55:40', '00:04:54'),
(175, 1, '2015-04-06 05:55:45', '2015-04-06 05:56:10', '00:00:25'),
(176, 1, '2015-04-06 05:56:54', '2015-04-06 05:58:37', '00:01:43'),
(177, 1, '2015-04-06 05:58:56', '2015-04-06 06:06:33', '00:07:37'),
(178, 1, '2015-04-06 23:29:24', '2015-04-06 23:29:55', '00:00:31'),
(179, 1, '2015-04-07 21:51:23', '2015-04-07 22:00:43', '00:09:20'),
(180, 1, '2015-04-07 22:00:54', '2015-04-07 22:03:43', '00:02:49'),
(181, 1, '2015-04-07 22:05:00', '2015-04-07 22:13:53', '00:08:53'),
(182, 1, '2015-04-07 22:27:59', '2015-04-07 22:28:25', '00:00:26'),
(183, 1, '2015-04-08 00:23:39', '2015-04-08 00:31:19', '00:07:40'),
(184, 1, '2015-04-08 03:43:56', NULL, NULL),
(185, 1, '2015-04-08 04:00:38', NULL, NULL),
(186, 1, '2015-04-08 04:00:54', '2015-04-08 04:01:34', '00:00:40'),
(187, 1, '2015-04-08 04:05:34', '2015-04-08 04:05:57', '00:00:23'),
(188, 1, '2015-04-08 04:06:09', '2015-04-08 04:06:51', '00:00:42'),
(189, 1, '2015-04-08 05:01:50', '2015-04-08 05:06:13', '00:04:23'),
(190, 9, '2015-04-08 05:06:36', '2015-04-08 05:09:50', '00:03:14'),
(191, 1, '2015-04-08 05:10:06', '2015-04-08 05:57:14', '00:47:08'),
(192, 1, '2015-04-11 02:04:16', NULL, NULL),
(193, 1, '2015-04-28 19:38:25', NULL, NULL),
(194, 1, '2015-04-28 19:59:22', NULL, NULL),
(195, 1, '2015-04-28 21:26:39', NULL, NULL),
(196, 1, '2015-04-28 21:30:20', NULL, NULL),
(197, 1, '2015-04-28 21:32:40', NULL, NULL),
(198, 1, '2015-04-28 21:35:25', NULL, NULL),
(199, 1, '2015-04-28 21:56:29', NULL, NULL),
(200, 1, '2015-04-28 22:23:30', NULL, NULL),
(201, 1, '2015-04-29 00:01:51', NULL, NULL),
(202, 1, '2015-04-29 00:02:58', NULL, NULL),
(203, 1, '2015-04-29 01:42:39', '2015-04-29 02:12:03', '00:29:24'),
(204, 1, '2015-04-29 02:13:13', '2015-04-28 16:05:18', '10:07:55'),
(205, 1, '2015-04-28 12:46:41', NULL, NULL),
(206, 1, '2015-04-28 12:48:01', NULL, NULL),
(207, 1, '2015-04-28 12:53:02', NULL, NULL),
(208, 1, '2015-04-28 13:03:35', NULL, NULL),
(209, 1, '2015-04-28 13:52:28', NULL, NULL),
(210, 1, '2015-04-28 13:56:13', NULL, NULL),
(211, 1, '2015-04-28 13:57:27', NULL, NULL),
(212, 1, '2015-04-28 14:39:51', NULL, NULL),
(213, 1, '2015-04-28 14:40:33', NULL, NULL),
(214, 1, '2015-04-28 15:37:09', NULL, NULL),
(215, 1, '2015-04-28 15:42:53', NULL, NULL),
(216, 1, '2015-04-28 15:44:26', NULL, NULL),
(217, 1, '2015-04-28 15:44:56', NULL, NULL),
(218, 1, '2015-04-28 15:45:51', NULL, NULL),
(219, 1, '2015-04-28 15:46:33', NULL, NULL),
(220, 1, '2015-04-28 15:47:54', NULL, NULL),
(221, 1, '2015-04-28 15:48:34', NULL, NULL),
(222, 1, '2015-04-28 15:49:29', NULL, NULL),
(223, 1, '2015-04-28 15:51:12', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `police_report`
--

CREATE TABLE IF NOT EXISTS `police_report` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_event` text NOT NULL,
  `action_taken` text NOT NULL,
  `summary` text NOT NULL,
  `complainant_id` int(11) NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `police_report`
--

INSERT INTO `police_report` (`pr_id`, `detail_event`, `action_taken`, `summary`, `complainant_id`) VALUES
(9, 'sss', 'fff', 'aaa', 9),
(10, 'asdf', 'fd', 'g', 8),
(11, 'det', 'act', 'sum', 3),
(12, 'g', 'g', 'g', 2),
(13, 'This is the sample detail of event.This is the sample detail of event.This is the sample detail of event.This is the sample detail of event.This is the sample detail of event.This is the sample detail of event.This is the sample detail of event.This is the sample detail of event.This is the sample detail of event.', 'This is the action taken.This is the action taken.This is the action taken.This is the action taken.This is the action taken.This is the action taken.This is the action taken.This is the action taken.This is the action taken.', 'This is the summary.This is the summary.This is the summary.This is the summary.This is the summary.This is the summary.This is the summary.This is the summary.', 4);

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
  `dateRecoreded` datetime NOT NULL,
  `reason` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`complainantName`, `complainantAddress`, `complainantContact`, `email`, `complainantAge`, `complainantGender`, `accusedName`, `accusedAddress`, `accusedContact`, `accusedAge`, `accusedGender`, `eventNmber`, `picture`, `subject`, `natureOfCrime`, `dateCommited`, `placeCommited`, `apprehendingOffier`, `dateRecoreded`, `reason`, `id`, `Status`) VALUES
('cris|L|alfaro|', 'davao', '09123456789', '', 20, 'Male', 'Pakito Diaz A', 'panabo', '0909454654', 22, 'Male', 'BL-0', 'image1.JPG', 'rape', 'life time emprisonment ', '2015-02-11 13:02:27', 'Davao', 'Jane P01', '2015-02-11 13:13:35', 'Drugs', 1, 'Solved'),
('Lolito|Deguia|L|', 'dav', '09123456789', '', 20, 'Male', 'Dick Israel J', 'Sasa', '0909456465', 33, 'Male', 'BL-1', 'image2.jpg', 'thief', 'ala', '2015-02-11 13:14:00', 'Davao', 'Jones P02', '2015-02-11 13:16:28', 'Money', 2, 'Unsolved'),
('Stephen|Caboverde|w|jr', 'dav', '1231231', '', 12, 'Male', 'Max Alvarado B', 'pa', '09094564654', 12, 'Male', 'BL-2', 'image-default.png', 'ad', 'asdf', '2015-03-15 10:15:00', 'Davao', 'John PO3', '2015-03-15 10:15:51', 'Drugs', 3, 'Voided'),
('Gilbert|Cajulao|A|', 'asdf', '12312', '', 12, 'Male', 'Romy Diaz F', 'asdfa', '04567465465', 21, 'Male', 'BL-3', 'image3.png', 'akdlj', 'dkajg', '2015-03-15 17:06:00', 'Davao', 'James PO4', '2015-03-15 17:06:49', 'Drugs', 4, 'Solved');

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
  `date_register` datetime NOT NULL,
  `officer_id_num` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isAdmin` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `age`, `current_address`, `position_officer`, `picture`, `date_register`, `officer_id_num`, `username`, `password`, `id`, `isAdmin`) VALUES
('admin', 'admin', 35, 'davao', 'PO3', 'admin.jpg', '2015-04-05 00:00:00', 1234567, 'admin', 'admin', 1, b'1'),
('demo', 'demo', 25, 'dav', 'PO2', 'demo.jpg', '2015-04-05 20:40:19', 123456, 'demo', 'demo', 8, b'0'),
('feven', 'bautista', 23, 'panabo', 'PO3', 'user.jpg', '2015-04-07 20:06:02', 1276235, 'user', 'user', 9, b'0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
