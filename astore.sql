-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 05:17 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qaid` int(11) DEFAULT NULL,
  `title` text,
  PRIMARY KEY (`id`),
  KEY `qaid_idx` (`qaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `astore`
--

INSERT INTO `astore` (`id`, `qaid`, `title`) VALUES
(1, 1, '1918 – yes, the year 1918 ended when the New Year 1919 begins! Isn’t that right?'),
(2, 2, 'And the answer was LOVE!'),
(3, 3, 'Because they have huge fans!'),
(4, 4, 'Your MOUTH! '),
(5, 5, 'A Bird can fly but a fly cannot bird! '),
(6, 6, 'A pair of slipper'),
(7, 7, 'It is very simple. Just push it, It will role! '),
(8, 8, 'I saw a dead body riding to school. '),
(9, 9, 'Multiplication tables and time tables'),
(10, 10, 'Age and your physical growth '),
(11, 11, 'A Stamp!'),
(12, 12, 'Cookies!'),
(13, 13, 'A stick'),
(14, 14, 'Staircase! '),
(15, 15, 'Domi Doesn’t No!'),
(16, 16, 'All months '),
(17, 17, 'It runs for 85 hours and funnily the title is ‘CURE FOR INSOMNIA’'),
(18, 18, 'HELL – answered by a poor / smart kid.'),
(19, 19, 'An Elephant'),
(20, 20, 'The Letter T.'),
(21, 21, 'BREAKFAST'),
(22, 22, 'MATHEMATICS – IT HAS FULL OF PROBLEMS'),
(23, 23, 'YES, REMOVE ‘S’ FROM IT.'),
(24, 24, 'ANYDOG – Because building cannot jump.'),
(25, 25, 'A CHAIR'),
(26, 26, 'BECAUSE SHE IS GOING TO HIGH SCHOOL'),
(27, 27, 'A POLAR BEAR AND ITS WIFE'),
(28, 28, 'A WORLD MAP'),
(29, 29, 'A COIN'),
(30, 30, 'A BIG HAND'),
(31, 31, 'Jim replied with surprise, ‘First day at school? What do you mean? Do you want me to go to school tomorrow also?’'),
(32, 32, 'Because it is too long to walk.'),
(33, 33, 'Because you or me cannot wag the tails.'),
(34, 34, 'An Elephant’s Shadow.'),
(35, 35, 'WATER'),
(36, 36, 'Possible. His reached the village on his horse, its name is FRIDAY.'),
(37, 37, 'Because he can have sweet dreams.'),
(38, 38, 'When you eat watermelons.'),
(39, 39, 'Yes, I will make it into a paste.'),
(40, 40, 'Because the teacher said, homework is like a piece of cake.'),
(41, 41, 'He died in his last war.'),
(42, 42, 'Marriage'),
(43, 43, 'In liquid state'),
(44, 44, 'Jawaharlal Nehru born on his birthday.'),
(45, 45, 'He was blind'),
(46, 46, 'Remove ‘Centi’'),
(47, 47, 'Exams'),
(48, 48, 'You can never lift the elephant with one hand.'),
(49, 49, 'No time required, because the villa is already built.'),
(50, 50, 'The other half apple!'),
(51, 51, 'It will become wet.'),
(52, 52, 'I will make orange juice and serve them equally.'),
(53, 53, 'Nothing will happen as he sleeps at night.'),
(54, 54, 'In the dress shop.'),
(55, 55, 'One hundred people who don''t do dick.'),
(56, 56, 'When you get off the plane, walk into the propellers.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `astore`
--
ALTER TABLE `astore`
  ADD CONSTRAINT `qaid` FOREIGN KEY (`qaid`) REFERENCES `qstore` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
