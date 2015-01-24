-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2015 at 09:52 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `htp`
--
CREATE DATABASE IF NOT EXISTS `htp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `htp`;

-- --------------------------------------------------------

--
-- Table structure for table `astore`
--

CREATE TABLE IF NOT EXISTS `astore` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qaid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `qaid_idx` (`qaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE IF NOT EXISTS `qa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `type` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qaalbum`
--

CREATE TABLE IF NOT EXISTS `qaalbum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auid` int(11) DEFAULT NULL,
  `quid` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `status` tinytext,
  PRIMARY KEY (`id`),
  KEY `asker_idx` (`quid`),
  KEY `answeruser_idx` (`auid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qarelation`
--

CREATE TABLE IF NOT EXISTS `qarelation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) DEFAULT NULL,
  `aid` int(11) DEFAULT NULL,
  `qaaid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `album_idx` (`qaaid`),
  KEY `aid_idx` (`qid`),
  KEY `aid_idx1` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `usename` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `sex` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `astore`
--
ALTER TABLE `astore`
  ADD CONSTRAINT `qaid` FOREIGN KEY (`qaid`) REFERENCES `qa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `qaalbum`
--
ALTER TABLE `qaalbum`
  ADD CONSTRAINT `askeruser` FOREIGN KEY (`quid`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `answeruser` FOREIGN KEY (`auid`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `qarelation`
--
ALTER TABLE `qarelation`
  ADD CONSTRAINT `qid` FOREIGN KEY (`qid`) REFERENCES `qa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `aid` FOREIGN KEY (`aid`) REFERENCES `astore` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `album` FOREIGN KEY (`qaaid`) REFERENCES `qaalbum` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
