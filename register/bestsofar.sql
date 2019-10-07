-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2019 at 08:09 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;


--
-- Database: `bestsofar`
--

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

DROP TABLE IF EXISTS `userprofile`;
CREATE TABLE IF NOT EXISTS `userprofile` (
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `contactNumber` varchar(50) NOT NULL,
  `address` varchar(70) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`email`, `name`, `surname`, `contactNumber`, `address`, `password`) VALUES
('andilew.mz@gmail.com', 'gfh', 'fdf', '65', 'hghfg', '45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `trackTitle` varchar(20) NOT NULL,
  `artistName` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `featured` varchar(20) NOT NULL,
  `recordingYear` int(4) NOT NULL,
  `coverArt` varchar(100) DEFAULT NULL,
  `song` varchar(100) DEFAULT NULL,
  `trackType` varchar(20) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `releasetype` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstName`, `lastName`, `email`, `contact`, `trackTitle`, `artistName`, `genre`, `id`, `featured`, `recordingYear`, `coverArt`, `song`, `trackType`, `role`, `releasetype`) VALUES
('Siya', 'Mzobe', 'Andilew.mz@gmail.com', '+27640201724', 'Mboza', 'Mkhize', 'jazz', 87, 'Tyrese', 2015, 'http://www.bestsofar.co.za/index.html', 'http://www.bestsofar.co.za/index.html', 'Remix', 'Producer', 'Singl'),
('Siya', 'Mzobe', 'Andilew.mz@gmail.com', '+27640201724', 'Mboza', 'Mkhize', 'jazz', 88, 'Tyrese', 2015, 'http://www.bestsofar.co.za/index.html', 'http://www.bestsofar.co.za/index.html', 'Remix', 'Producer', 'Single'),
('gfgjfj', 'gfj', 'gf@gmail.com', '+273456445', 'gh', 'g', 'g', 89, 'g', 8, '', 'qmxetc', 'Cover', 'Mixer', 'Album');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
