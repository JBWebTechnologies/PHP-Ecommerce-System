-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2011 at 10:01 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `evswebdev49`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(120) NOT NULL,
  `img` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `cname`, `img`) VALUES
(1, 'Neckless', ''),
(2, 'Rings', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE IF NOT EXISTS `tblcustomer` (
  `id` int(10) NOT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbleorderdetail`
--

CREATE TABLE IF NOT EXISTS `tbleorderdetail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `oID` int(11) NOT NULL,
  `pID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float(9,2) NOT NULL,
  `Total` float(11,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tbleorderdetail`
--

INSERT INTO `tbleorderdetail` (`ID`, `oID`, `pID`, `Quantity`, `Price`, `Total`) VALUES
(1, 0, 0, 0, 0.00, 0.00),
(2, 2, 1, 3, 300.00, 900.00),
(3, 2, 2, 5, 500.00, 2500.00),
(4, 3, 1, 3, 300.00, 900.00),
(5, 3, 2, 5, 500.00, 2500.00),
(6, 4, 1, 3, 300.00, 900.00),
(7, 4, 2, 5, 500.00, 2500.00),
(8, 5, 1, 3, 300.00, 900.00),
(9, 5, 2, 5, 500.00, 2500.00),
(10, 6, 1, 3, 300.00, 900.00),
(11, 6, 2, 5, 500.00, 2500.00),
(12, 7, 1, 3, 300.00, 900.00),
(13, 7, 2, 5, 500.00, 2500.00),
(14, 8, 1, 3, 300.00, 900.00),
(15, 8, 2, 5, 500.00, 2500.00),
(16, 9, 1, 3, 300.00, 900.00),
(17, 9, 2, 5, 500.00, 2500.00),
(18, 10, 1, 3, 300.00, 900.00),
(19, 10, 2, 5, 500.00, 2500.00),
(20, 11, 1, 3, 300.00, 900.00),
(21, 11, 2, 5, 500.00, 2500.00),
(22, 12, 1, 3, 300.00, 900.00),
(23, 12, 2, 5, 500.00, 2500.00),
(24, 13, 1, 3, 300.00, 900.00),
(25, 13, 2, 5, 500.00, 2500.00),
(26, 14, 1, 3, 300.00, 900.00),
(27, 14, 2, 5, 500.00, 2500.00),
(28, 15, 1, 10, 300.00, 3000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE IF NOT EXISTS `tblorder` (
  `oID` int(11) NOT NULL AUTO_INCREMENT,
  `sCountry` varchar(200) NOT NULL,
  `orderStatus` char(1) NOT NULL,
  `OrdTotal` float(9,2) NOT NULL,
  `totalQty` int(11) NOT NULL,
  `Fname` varchar(400) NOT NULL,
  `Lname` varchar(400) NOT NULL,
  `Email` text NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `Zip` int(20) NOT NULL,
  `Phone` varchar(400) NOT NULL,
  `sFname` varchar(400) NOT NULL,
  `sLname` varchar(400) NOT NULL,
  `sEmail` text NOT NULL,
  `sAddress` text NOT NULL,
  `sCity` text NOT NULL,
  `sState` text NOT NULL,
  `sZip` int(20) NOT NULL,
  `sPhone` varchar(400) NOT NULL,
  `Country` varchar(400) NOT NULL,
  `Orderdate` datetime NOT NULL,
  PRIMARY KEY (`oID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`oID`, `sCountry`, `orderStatus`, `OrdTotal`, `totalQty`, `Fname`, `Lname`, `Email`, `Address`, `City`, `State`, `Zip`, `Phone`, `sFname`, `sLname`, `sEmail`, `sAddress`, `sCity`, `sState`, `sZip`, `sPhone`, `Country`, `Orderdate`) VALUES
(1, '', '', 0.00, 0, '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00'),
(2, 'Pakistan', 'p', 3400.00, 8, 'Alith Road', '', 'Ali@yahoo.com', 'Rawalpindi, six throad', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Ali', '', 'Ali@yahoo.com', 'Rawalpindi, six throad', 'Rawalpind', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 00:00:00'),
(3, 'Pakistan', 'p', 3400.00, 8, 'Alith Road', '', 'Ali@yahoo.com', 'Rawalpindi, six throad', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Ali', '', 'Ali@yahoo.com', 'Rawalpindi, six throad', 'Rawalpind', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 00:00:00'),
(4, 'Pakistan', 'p', 3400.00, 8, 'Alith Road', '', 'Ali@yahoo.com', 'Rawalpindi, six throad', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Ali', '', 'Ali@yahoo.com', 'Rawalpindi, six throad', 'Rawalpind', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 15:29:34'),
(5, 'Pakistan', 'p', 3400.00, 8, 'Alith Road', '', 'Ali@yahoo.com', 'Rawalpindi, six throad', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Ali', '', 'Ali@yahoo.com', 'Rawalpindi, six throad', 'Rawalpind', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 15:29:38'),
(6, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 15:33:02'),
(7, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 16:08:01'),
(8, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 16:08:09'),
(9, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 16:09:31'),
(10, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 16:10:55'),
(11, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 16:10:57'),
(12, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 16:12:03'),
(13, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 16:12:29'),
(14, 'Pakistan', 'p', 3400.00, 8, 'Faisal Nadeem', '', 'Faisal@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '051-9847662', 'Muhammad Zubair', '', 'Zubair@yahoo.com', 'Rawalpindi', 'Rawalpindi', 'Punjab', 46000, '123445454', 'Pakistan', '2011-01-23 16:47:25'),
(15, 'Pakistan', 'p', 3000.00, 10, 'Alith Road', '', 'abc@yahoo.com', 'Rawalpindi', '123232', 'asnd', 46000, '051-9847662', 'Alith Road', '', 'abc@yahoo.com', 'Rawalpindi', 'Rawalpind', 'Punjab', 46000, '123445454', 'DCHV', '2011-01-29 20:46:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `price` float NOT NULL,
  `colour` varchar(20) NOT NULL,
  `features` text NOT NULL,
  `description` varchar(400) NOT NULL,
  `Image` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `price`, `colour`, `features`, `description`, `Image`) VALUES
(1, 'Nokia N95', 300, 'Black', 'The Nokia N95 (N95-1, internally known as RM-159) is a smartphone produced by Nokia as part of their Nseries line of portable devices. It was released in 2007. The N95 runs Symbian OS v9.2, with a S60 3rd Edition user interface. The phone has a two-way sliding mechanism, which can be used to access either media playback buttons or a numeric keypad. It was first released in silver and later on in black, with limited edition quantities in gold and purple.\r\n\r\nIts capabilities include[1][2]: a Global Positioning System receiver with maps and optional turn-by-turn navigation; a 5 megapixel digital camera with Carl Zeiss optics, flash, video recording and video conferencing; wireless connectivity via HSDPA, IrDA, 802.11x and Bluetooth; a portable media player with the ability to download podcasts over the air; a FM Radio tuner; Composite Video output via included cable; multi-tasking to allow several applications to run simultaneously; a web browser with support for HTML, JavaScript and Adobe Flash; messaging via SMS, MMS and e-mail; Office suite and organizer functions; and the ability to install and run third party Java ME or Symbian mobile applications.', '', 'nokia-n95-00.jpg'),
(2, 'Iphone', 500, 'Black', 'The iPhone (pronounced /?a?fo?n/ EYE-fohn) is a line of Internet and multimedia-enabled smartphones designed and marketed by Apple Inc. The first iPhone was introduced on January 9, 2007.[1]\r\n\r\nAn iPhone functions as a video camera, camera phone with text messaging and visual voicemail, a portable media player, and an Internet client with e-mail, web browsing, and both Wi-Fi and 3G connectivity. The user interface is built around the device''s multi-touch screen, including a virtual keyboard rather than a physical one. Third-party as well as Apple applications are available from the App Store, which launched in mid-2008 and now has well over 300,000[2] "apps" approved by Apple. These apps have diverse functionalities, including games, reference, GPS navigation, social networking, security[3] and advertising for television shows, films, and celebrities.', '', '300px-IPhone_4_in_hand.jpg'),
(3, 'Nokia N95', 400, 'red', 'The Nokia N95 (N95-1, internally known as RM-159) is a smartphone produced by Nokia as part of their Nseries line of portable devices. It was released in 2007. The N95 runs Symbian OS v9.2, with a S60 3rd Edition user interface. The phone has a two-way sliding mechanism, which can be used to access either media playback buttons or a numeric keypad. It was first released in silver and later on in black, with limited edition quantities in gold and purple.\r\n\r\nIts capabilities include[1][2]: a Global Positioning System receiver with maps and optional turn-by-turn navigation; a 5 megapixel digital camera with Carl Zeiss optics, flash, video recording and video conferencing; wireless connectivity via HSDPA, IrDA, 802.11x and Bluetooth; a portable media player with the ability to download podcasts over the air; a FM Radio tuner; Composite Video output via included cable; multi-tasking to allow several applications to run simultaneously; a web browser with support for HTML, JavaScript and Adobe Flash; messaging via SMS, MMS and e-mail; Office suite and organizer functions; and the ability to install and run third party Java ME or Symbian mobile applications.', '', 'nokia-n95-00.jpg');
