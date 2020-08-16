-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql205.epizy.com
-- Generation Time: Feb 08, 2019 at 07:16 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_22354816_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `book_name` varchar(50) NOT NULL,
  `book_rate` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Name`) VALUES
('Biography'),
('History'),
('Spirituality'),
('Education'),
('Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `Email` varchar(50) NOT NULL,
  `total` varchar(20) NOT NULL,
  `count` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Email`, `total`, `count`) VALUES
('manisingh8004@gmail.com', '50', '1'),
('josephsamuel211997@gmail.com', '200', '1'),
('krmanishsharma21@gmail.com', '0', '0'),
('prakhar@gmail.com', '0', '0'),
('sushantkadu1861@gmail.com', '150', '1'),
('manishsharma@gmail.com', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Zip` varchar(15) NOT NULL,
  `Telephone` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Rate` varchar(12) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Name`, `Rate`, `Author`, `Category`, `Quantity`) VALUES
('ASHOKA4', 'Ashoka', '123', 'charles allen', 'history', '30'),
('WHYIAMHINDU6', 'Why i am hindu', '200', 'Shashi tharoor', 'spirituality', '200'),
('INDIA5', 'India', '50', 'majid husain', 'history', '23'),
('GEN3', 'G.K.', '30', 'manohar pandey', 'education', '120'),
('INDIANECONOMY3', 'Indian Economy', '100', 'Arihant Publications', 'Education', '23'),
('THISISNOTYOURSTORY', 'This is not your story', '150', 'Savi sharma', 'Fiction', '100'),
('WINGSOFFIRE1', 'Wings of fire', '120', 'A.P.J. Abdul Kalam', 'Biography', '50'),
('STEVE2', 'Steve jobs', '130', 'Steve jobs', 'Biography', '100'),
('PHYSICS2', 'Physics', '60', 'S.chand', 'Education', '12'),
('CHEMISTRY', 'Chemistry', '230', 'Arihant Publications', 'Education', '100');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Phone`, `Gender`, `Password`, `DOB`) VALUES
('manish sharma', 'manisingh8004@gmail.com', '9415011982', 'male', '123', '1947-08-15'),
('manish sharma', 'josephsamuel211997@gmail.com', '08004885304', 'male', '123', '1947-08-15'),
('prakhar sri', 'prakhar@gmail.com', '8048853044', 'male', '123', '1947-08-30'),
('manish sharma', 'krmanishsharma21@gmail.com', '8004885304', 'male', '123', '1947-08-15'),
('sushant kadu', 'sushantkadu1861@gmail.com', '8208608129', 'male', '410401', '1995-08-15'),
('manish sharma', 'manishsharma@gmail.com', '8004885304', 'male', '123', '1997-08-12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
