-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 11:46 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcqportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `student_answer` int(11) NOT NULL,
  `actual_answer` int(11) NOT NULL,
  `remark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user`, `student_answer`, `actual_answer`, `remark`) VALUES
(124, 2, 1, 2, 2, 1),
(125, 3, 1, 2, 2, 1),
(126, 6, 1, 4, 4, 1),
(127, 7, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chapter_master`
--

CREATE TABLE `chapter_master` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `cflag` int(11) NOT NULL DEFAULT '0',
  `tflag` int(11) NOT NULL DEFAULT '0',
  `aflag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter_master`
--

INSERT INTO `chapter_master` (`id`, `subject_id`, `class_id`, `number`, `name`, `cflag`, `tflag`, `aflag`) VALUES
(1, 1, 3, 1, 'Introduction to Physics', 1, 0, 0),
(2, 1, 3, 2, 'Force', 0, 0, 0),
(3, 2, 3, 1, 'Water', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mcq_test`
--

CREATE TABLE `mcq_test` (
  `question_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq_test`
--

INSERT INTO `mcq_test` (`question_id`, `chapter_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(2, 1, 'Which instrument is used to measure depth of ocean ?\r\n', 'Galvanometer\r\n', 'Fluxmeter\r\n', 'Endoscope\r\n', 'Fathometer\r\n', 2),
(3, 1, 'Name of the instrument to measure atomspheric pressure ?\r\n', 'Barometer\r\n', 'Barograph\r\n', 'Bolometer\r\n', 'Callipers\r\n', 2),
(6, 1, 'Which planet is close to earth?', 'Mercury', 'Jupiter', 'Neptune', 'Venus', 4),
(7, 1, 'Who is strongest?', 'Thor', 'Iron-Man', 'Hulk', 'Thanos', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_mcq_test`
--

CREATE TABLE `student_mcq_test` (
  `id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scored` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_mcq_test`
--

INSERT INTO `student_mcq_test` (`id`, `chapter_id`, `user_id`, `scored`, `total`) VALUES
(2, 1, 1, '2', '4'),
(3, 1, 3, '2', '4'),
(4, 3, 3, '1', '1'),
(5, 2, 3, '1', '1'),
(6, 1, 4, '1', '4'),
(7, 2, 3, '1', '1'),
(27, 1, 1, '4', '4'),
(28, 1, 1, '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_master`
--

INSERT INTO `subject_master` (`id`, `name`, `image`) VALUES
(1, 'C', '1550326702.png'),
(2, 'C++', '1550326712.png'),
(3, 'JAVA', '1550326731.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '09552259961');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapter_master`
--
ALTER TABLE `chapter_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq_test`
--
ALTER TABLE `mcq_test`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student_mcq_test`
--
ALTER TABLE `student_mcq_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
--
-- AUTO_INCREMENT for table `chapter_master`
--
ALTER TABLE `chapter_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mcq_test`
--
ALTER TABLE `mcq_test`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student_mcq_test`
--
ALTER TABLE `student_mcq_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
