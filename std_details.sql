-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2016 at 11:29 PM
-- Server version: 5.1.32
-- PHP Version: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_details`
--

CREATE TABLE IF NOT EXISTS `std_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `std_details`
--

INSERT INTO `std_details` (`id`, `name`, `roll`, `age`) VALUES
(1, 'saiful', '23', 25),
(2, 'shakib', '63', 25),
(3, 'rakib', '34', 23),
(4, 'shakil', '12', 22),
(9, 'opu', '2', 23),
(10, 'rkdfk', 'kdfkd', 23),
(11, 'shakib', '34', 23);
