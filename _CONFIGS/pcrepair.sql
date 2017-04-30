-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2016 at 08:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pcrepair`
--


-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(1025) NOT NULL,
  `password` varchar(1025) NOT NULL,
  `name` varchar(1025) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(9, 'Admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE IF NOT EXISTS `manufacturers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `active`) VALUES
(6, 'Acer', 'Active'),
(7, 'Apple', 'Active'),
(8, 'Asus', 'Active'),
(9, 'Dell', 'Active'),
(10, 'Hp', 'Active'),
(11, 'Lenovo', 'Active'),
(12, 'Toshiba', 'Active'),
(13, 'Advent', 'Active'),
(14, 'Aorus', 'Active'),
(15, 'Axioo', 'Active'),
(16, 'Clevo', 'Active'),
(17, 'Digital Storm', 'Active'),
(18, 'Doel', 'Active'),
(19, 'Elitegroup Computer Systems', 'Active'),
(20, 'Everex', 'Active'),
(21, 'Falcon Northwest', 'Active'),
(22, 'Founder', 'Active'),
(23, 'Fujitsu', 'Active'),
(24, 'Getac', 'Active'),
(25, 'Gigabyte Technology', 'Active'),
(26, 'Gradiente', 'Active'),
(27, 'Grundig', 'Active'),
(28, 'Hasee', 'Active'),
(29, 'HCL', 'Active'),
(30, 'Itautec', 'Active'),
(31, 'Koncar', 'Active'),
(32, 'Lanix', 'Active'),
(33, 'Lemote', 'Active'),
(34, 'LG', 'Active'),
(35, 'Maingear', 'Active'),
(36, 'MDG Computers', 'Active'),
(37, 'Medion', 'Active'),
(38, 'Meebox', 'Active'),
(39, 'MicroStar Intl', 'Active'),
(40, 'NEC', 'Active'),
(41, 'Olivetti', 'Active'),
(42, 'Onkyo', 'Active'),
(43, 'Origin PC', 'Active'),
(44, 'Panasonic', 'Active'),
(45, 'Positivo', 'Active'),
(46, 'Acer', 'Active'),
(47, 'Apple', 'Active'),
(48, 'Asus', 'Active'),
(49, 'Dell', 'Active'),
(50, 'Hp', 'Active'),
(51, 'Lenovo', 'Active'),
(52, 'Toshiba', 'Active'),
(53, 'Advent', 'Active'),
(54, 'Aorus', 'Active'),
(55, 'Axioo', 'Active'),
(56, 'Clevo', 'Active'),
(57, 'Digital Storm', 'Active'),
(58, 'Doel', 'Active'),
(59, 'Elitegroup Computer Systems', 'Active'),
(60, 'Everex', 'Active'),
(61, 'Falcon Northwest', 'Active'),
(62, 'Founder', 'Active'),
(63, 'Fujitsu', 'Active'),
(64, 'Getac', 'Active'),
(65, 'Gigabyte Technology', 'Active'),
(66, 'Gradiente', 'Active'),
(67, 'Grundig', 'Active'),
(68, 'Hasee', 'Active'),
(69, 'HCL', 'Active'),
(70, 'Itautec', 'Active'),
(71, 'Koncar', 'Active'),
(72, 'Lanix', 'Active'),
(73, 'Lemote', 'Active'),
(74, 'LG', 'Active'),
(75, 'Maingear', 'Active'),
(76, 'MDG Computers', 'Active'),
(77, 'Medion', 'Active'),
(78, 'Meebox', 'Active'),
(79, 'MicroStar Intl', 'Active'),
(80, 'NEC', 'Active'),
(81, 'Olivetti', 'Active'),
(82, 'Onkyo', 'Active'),
(83, 'Origin PC', 'Active'),
(84, 'Panasonic', 'Active'),
(85, 'Positivo', 'Active'),
(86, 'Pravetz', 'Active'),
(87, 'Razer', 'Active'),
(88, 'Samsung', 'Active'),
(89, 'Sharp', 'Active'),
(90, 'Siragon', 'Active'),
(91, 'System76', 'Active'),
(92, 'Tongfang', 'Active'),
(93, 'TriGem', 'Active'),
(94, 'Vestel', 'Active'),
(95, 'VIA', 'Active'),
(96, 'Wipro', 'Active'),
(97, 'Wortmann', 'Active'),
(98, 'Zenith', 'Active'),
(99, 'BenQ', 'Defunct'),
(100, 'Acorn', 'Defunct'),
(101, 'Compaq', 'Defunct'),
(102, 'eMachines', 'Defunct'),
(103, 'Everex', 'Defunct'),
(104, 'Fujitsu Siemens', 'Defunct'),
(105, 'Gericom', 'Defunct'),
(106, 'HTC', 'Defunct'),
(107, 'Hyundai', 'Defunct'),
(108, 'Maxdata', 'Defunct'),
(109, 'OQO', 'Defunct'),
(110, 'PC Club', 'Defunct'),
(111, 'Philips', 'Defunct'),
(112, 'Sony', 'Defunct'),
(113, 'Vigor Gaming', 'Defunct'),
(114, 'Voodoo PC', 'Defunct'),
(115, 'Zepto', 'Defunct'),
(116, 'Pravetz', 'Active'),
(117, 'Razer', 'Active'),
(118, 'Samsung', 'Active'),
(119, 'Sharp', 'Active'),
(120, 'Siragon', 'Active'),
(121, 'System76', 'Active'),
(122, 'Tongfang', 'Active'),
(123, 'TriGem', 'Active'),
(124, 'Vestel', 'Active'),
(125, 'VIA', 'Active'),
(126, 'Wipro', 'Active'),
(127, 'Wortmann', 'Active'),
(128, 'Zenith', 'Active'),
(129, 'BenQ', 'Defunct'),
(130, 'Acorn', 'Defunct'),
(131, 'Compaq', 'Defunct'),
(132, 'eMachines', 'Defunct'),
(133, 'Everex', 'Defunct'),
(134, 'Fujitsu Siemens', 'Defunct'),
(135, 'Gericom', 'Defunct'),
(136, 'HTC', 'Defunct'),
(137, 'Hyundai', 'Defunct'),
(138, 'Maxdata', 'Defunct'),
(139, 'OQO', 'Defunct'),
(140, 'PC Club', 'Defunct'),
(141, 'Philips', 'Defunct'),
(142, 'Sony', 'Defunct'),
(143, 'Vigor Gaming', 'Defunct'),
(144, 'Voodoo PC', 'Defunct'),
(145, 'Zepto', 'Defunct'),
(146, 'Other', 'Active'),
(149, 'RaspberryPi', 'Active'),
(150, 'Unknown', 'Unkown'),
(151, '+', '+');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `item` varchar(32) NOT NULL,
  `modelno` varchar(255) NOT NULL,
  `required1` varchar(255) NOT NULL,
  `required2` varchar(1025) DEFAULT 'ALL',
  `description` varchar(255) NOT NULL,
  `priority` varchar(32) NOT NULL DEFAULT 'Low',
  `supplier` varchar(1025) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `item`, `modelno`, `required1`, `required2`, `description`, `priority`, `supplier`) VALUES
(1, 'Testing', '+', 'Testing', 'ALL', 'ALL', 'For Testing Purposes', 'Testing', 'http://www.ebuyer.com/search?q='),
(2, 'Test2', 'Acer', 'Test2', '7&quot; Screen Replacement', '7&quot; Screen Replacement', 'Test', 'High', 'http://www.amazon.co.uk/s/ref=nb_sb_noss?url=search-alias%3Daps&amp;field-keywords='),
(4, 'Test3', 'Acer', 'Test3', '7&quot; Screen Replacement', '7&quot; Screen Replacement', 'Test', 'Medium', 'http://www.amazon.co.uk/s/ref=nb_sb_noss?url=search-alias%3Daps&amp;field-keywords=');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE IF NOT EXISTS `parts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `type`, `active`) VALUES
(3, '7" Screen Replacement', 'Screen', 'Active'),
(4, '9" Screen Replacement', 'Screen', 'Active'),
(5, '11" Screen Replacement', 'Screen', 'Active'),
(6, '15" Screen Replacement', 'Screen', 'Active'),
(7, 'Screen Replacement', 'Screen', 'Active'),
(23, '2.5" SATA HDD', 'Hard Drive', 'Active'),
(24, '3.5" SATA HDD', 'Hard Drive', 'Active'),
(25, '2.5" IDE HDD', 'Hard Drive', 'Active'),
(26, '3.5" IDE HDD', 'Hard Drive', 'Active'),
(27, 'Motherboard', 'Motherboard', 'Active'),
(28, 'Casing', 'Case', 'Active'),
(29, 'Casing', 'Case', 'Active'),
(30, 'Disk Drive', 'Disk Drive', 'Active'),
(31, 'Disk Drive', 'Disk Drive', 'Active'),
(32, 'Floppy Disc Drive', 'Floppy Disc Drive', 'Legacy'),
(33, 'DDR1 RAM', 'RAM', 'Legacy'),
(34, 'DDR2 RAM', 'RAM', 'Active'),
(35, 'DDR3 RAM', 'RAM', 'Active'),
(36, 'RAM', 'RAM', 'Active'),
(37, 'Graphics Card', 'Graphics Card', 'Active'),
(39, 'Keyboard', 'Keyboard', 'Active'),
(41, 'Battery', 'Battery', 'Active'),
(42, 'Charger', 'Charger', 'Active'),
(43, '.', '.', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `website` varchar(1024) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `website`, `active`) VALUES
(1, 'Amazon', 'http://www.amazon.co.uk/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords=', 'Active'),
(2, 'EbayUK', 'http://www.ebay.co.uk/sch/i.html?_nkw=', 'Active'),
(3, 'Ebuyer', 'http://www.ebuyer.com/search?q=', 'Active'),
(4, 'SCANUK', 'https://www.scan.co.uk/search.aspx?q=', 'Testing'),
(5, 'OverclockersUK', 'https://www.overclockers.co.uk/search?sSearch=', 'Testing'),
(6, 'Novatech', 'http://www.novatech.co.uk/search.html?s=', 'Active'),
(7, 'LaptopBitsUK', 'http://laptopbits.co.uk/index.php?route=product/search&amp;filter_name=', 'Active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
