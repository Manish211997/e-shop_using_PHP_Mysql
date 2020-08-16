-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2008 at 11:36 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `book_name` varchar(20) NOT NULL,
  `book_rate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`book_name`, `book_rate`) VALUES
('Steve jobs', '312'),
('Steve jobs', '312'),
('Steve jobs', '312'),
('Steve jobs', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('', '312'),
('.Ashoka.', '312'),
('.Ashoka.', '312'),
('.G.K..', '312'),
('.G.K..', '312'),
('.Ashoka.', '312'),
('', '312'),
('', '312'),
('Ashoka', '312'),
('G.K.?rate=100', '312'),
('G.K.?rate=100', ''),
('G.K.?rate=100', ''),
('G.K.?rate=100', ''),
('G.K.?rate=100', ''),
('G.K./?rate=100', ''),
('G.K.', '100'),
('Ashoka', '50'),
('Ashoka ', '50'),
('Ashoka ', '50'),
('Ashoka', '50'),
('Ashoka ', '50'),
('Ashoka', ''),
('Ashoka', '50'),
('Ashoka', '50'),
('Ashoka', '50'),
('G.K.', 'name'),
('G.K.', 'name'),
('G.K.', ''),
('G.K.', '100'),
('G.K.', '100');
