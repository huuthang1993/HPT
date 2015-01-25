-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 07:18 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `htp`
--

-- --------------------------------------------------------

--
-- Table structure for table `astore`
--

CREATE TABLE IF NOT EXISTS `astore` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `qaid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astore`
--

INSERT INTO `astore` (`id`, `title`, `qaid`) VALUES
(1, 'A1', NULL),
(2, 'A2', NULL),
(3, 'Q3\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qaalbum`
--

CREATE TABLE IF NOT EXISTS `qaalbum` (
`id` int(11) NOT NULL,
  `auid` int(11) DEFAULT NULL,
  `quid` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `status` text
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qaalbum`
--

INSERT INTO `qaalbum` (`id`, `auid`, `quid`, `like`, `status`) VALUES
(1, 1, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `qarelation`
--

CREATE TABLE IF NOT EXISTS `qarelation` (
`id` int(11) NOT NULL,
  `qid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `qaaid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qarelation`
--

INSERT INTO `qarelation` (`id`, `qid`, `aid`, `qaaid`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 1),
(3, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qstore`
--

CREATE TABLE IF NOT EXISTS `qstore` (
`id` int(11) NOT NULL,
  `title` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qstore`
--

INSERT INTO `qstore` (`id`, `title`) VALUES
(1, 'Q1\r\n'),
(2, 'Q2'),
(3, 'Q3');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` text,
  `username` text,
  `password` text,
  `phone` int(11) DEFAULT NULL,
  `mail` text,
  `sex` text,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `phone`, `mail`, `sex`, `birthday`) VALUES
(1, 'Phuc', 'phuc123', 'phuc123', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astore`
--
ALTER TABLE `astore`
 ADD PRIMARY KEY (`id`), ADD KEY `qaid_idx` (`qaid`);

--
-- Indexes for table `qaalbum`
--
ALTER TABLE `qaalbum`
 ADD PRIMARY KEY (`id`), ADD KEY `asker_idx` (`quid`), ADD KEY `answeruser_idx` (`auid`);

--
-- Indexes for table `qarelation`
--
ALTER TABLE `qarelation`
 ADD PRIMARY KEY (`id`), ADD KEY `album_idx` (`qaaid`), ADD KEY `aid_idx` (`qid`), ADD KEY `aid_idx1` (`aid`);

--
-- Indexes for table `qstore`
--
ALTER TABLE `qstore`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `astore`
--
ALTER TABLE `astore`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qaalbum`
--
ALTER TABLE `qaalbum`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `qarelation`
--
ALTER TABLE `qarelation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qstore`
--
ALTER TABLE `qstore`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
