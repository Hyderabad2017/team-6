-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 03:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_curve`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_assess`
--

CREATE TABLE `student_assess` (
  `term` int(1) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `school` varchar(20) NOT NULL,
  `q1` int(1) NOT NULL,
  `q2` int(1) NOT NULL,
  `q3` int(1) NOT NULL,
  `q4` int(1) NOT NULL,
  `q5` int(1) NOT NULL,
  `c1` varchar(200) NOT NULL,
  `c2` varchar(200) NOT NULL,
  `c3` varchar(200) NOT NULL,
  `c4` varchar(200) NOT NULL,
  `c5` varchar(200) NOT NULL,
  `avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_assess`
--

INSERT INTO `student_assess` (`term`, `sid`, `school`, `q1`, `q2`, `q3`, `q4`, `q5`, `c1`, `c2`, `c3`, `c4`, `c5`, `avg`) VALUES
(0, '', '', 1, 3, 5, 0, 0, 'abc', 'def', 'ghi', 'jkl', 'mno', 0),
(0, '34', 'awg', 1, 2, 3, 4, 5, '', '', '', '', '', 0),
(0, '35', 'awg', 1, 2, 3, 4, 5, '', '', '', '', '', 0),
(0, '36', 'awg', 1, 2, 3, 4, 5, '', '', '', '', '', 0),
(0, '39', 'afg', 1, 2, 3, 4, 5, '', '', '', '', '', 3),
(0, '42', 'sdfg', 1, 2, 3, 4, 5, '', '', '', '', '', 3),
(0, '89', 'mfw;l', 1, 2, 3, 4, 5, '', '', '', '', '', 3),
(2, '90', 'mfw;l', 1, 2, 3, 4, 5, '', '', '', '', '', 3);

--
-- Triggers `student_assess`
--
DELIMITER $$
CREATE TRIGGER `update temp` AFTER INSERT ON `student_assess` FOR EACH ROW insert into tempstudent_assess (term,sid,school,q1,q2,q3,q4,q5,c1,c2,c3,c4,c5,avg) values
 (NEW.term,NEW.sid,NEW.school,NEW.q1,NEW.q2,NEW.q3,NEW.q4,NEW.q5,NEW.c1,NEW.c2,NEW.c3,NEW.c4,NEW.c5,NEW.avg)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_assess`
--
ALTER TABLE `student_assess`
  ADD PRIMARY KEY (`term`,`sid`,`school`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
