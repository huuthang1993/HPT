-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 08:19 PM
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
(100, 'A1', NULL),
(200, 'A2', NULL),
(300, 'Q3\r\n', NULL);

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
(100, 'Q1\r\n'),
(200, 'Q2'),
(300, 'Q3');

INSERT INTO `qstore` (`id`, `title`) VALUES
(1, 'What ended in the year 1919?'),
(2, 'What is the strongest force in the earth? Rock or Iron?'),
(3, 'Why do some cricket players never sweat?'),
(4, 'Do you know what is the best thing to put on a delicious cake?'),
(5, 'What is the major difference between a bird and a fly?'),
(6, 'What do you say when you find two banana peels together?'),
(7, 'Can you tell me how to make an egg roll?'),
(8, 'Join these two sentences: I was riding to school. I saw a dead body.'),
(9, 'There are innumerable tables of this kind, but there are no legs. What is that?'),
(10, 'There are two elements that always grow up, seeing the sky, and never down. What are they?'),
(11, 'It goes all over the world, but always stays in a corner. What is that?'),
(12, 'Most of the kids love to carry these keys. What are those keys?'),
(13, 'What is the one that is sticky and brown?'),
(14, 'It goes up and comes down, but never move. What it is?'),
(15, 'What is the antonym of DOMINOS?'),
(16, 'A few months have 31 days; a few months have 30 days. How many months have 28 days?'),
(17, 'What is the longest movie ever made and what is the length?'),
(18, 'How do you describe the School? – Question asked in an exam.'),
(19, 'It is equally big as an elephant but weighs nothing. What is that?'),
(20, 'What is the difference between here and there?'),
(21, 'What you can never eat during the lunch or supper? '),
(22, 'What is the most struggling of all subjects? '),
(23, 'Can you make SEVEN an even number?'),
(24, 'What breed of dog can jump higher than buildings? '),
(25, 'I have four legs – but I can’t walk. What Am I? '),
(26, 'Why Mira carried a ladder to her school?'),
(27, 'What are the two animals that live in a polar region?'),
(28, 'I have ocean but no water. Who am I? '),
(29, 'There is a head and there is a tail! But no body – what is it? '),
(30, '5 apples in one hand and 5 apples in other hand. Now what do you have? '),
(31, 'It was the first day at school for Jim. His mother was eagerly waiting for his arrival. He was all smiles when he reached home. His mother was surprised and asked him ‘how was the first day at school?'),
(32, 'Why birds fly to southern parts to incubate? '),
(33, 'Do you know why dogs wag their tail?'),
(34, 'Name any thing that is as big as an elephant but weighs zero! '),
(35, 'You can chop it, punch it, beat it, threw it away. But it won’t get hurt. What it is? '),
(36, 'An old man arrived on Friday to a village for a function. He stayed there for a couple of days and left the village on Friday. How is that possible? '),
(37, 'The boy sprinkled some sugar on the pillows before he went to sleep. Why? '),
(38, 'You have to stop at green and proceed with red. When? '),
(39, 'Can you repair a broken tomato?'),
(40, 'The boy ate his homework note. Why? '),
(41, 'In which battle did the great warrior, Tipu Sultan diet?'),
(42, 'Name any one major reason that causes divorce.'),
(43, 'River Yamuna flows in which state?'),
(44, 'When was Jawaharlal Nehru Born?'),
(45, 'Tell one reason why Sam cannot see anything when he looked into microscope?'),
(46, 'How do you change centimetres into meters?'),
(47, 'What is the reason why you got low marks in history?'),
(48, 'How will you lift an elephant using one hand?'),
(49, 'If 10 men took 50 days to construct a villa, how long will it take for 20 men to do the same work?'),
(50, 'What exactly looks like a half apple?'),
(51, 'What happens if you throw a green stone into the red water?'),
(52, 'How will you share 10 oranges equally among 6 boys?'),
(53, 'What happens to a man if he doesn’t sleep eight days continuously?'),
(54, 'Where did you buy the dress?'),
(55, 'What do you get when you put 50 lawyers in a room with 50 lesbians? '),
(56, 'What is the only way to keep your money from the casinos in Las Vegas?');
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
