-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 08:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(39, 2, 1, 1, 2, 0),
(40, 3, 1, 2, 2, 1),
(41, 6, 1, 1, 4, 0),
(42, 7, 1, 1, 1, 1),
(43, 2, 3, 1, 2, 0),
(44, 3, 3, 2, 2, 1),
(45, 6, 3, 2, 0, 0),
(46, 7, 3, 1, 1, 1),
(47, 0, 3, 0, 0, 1),
(48, 0, 3, 0, 0, 1),
(49, 2, 0, 1, 2, 0),
(50, 3, 0, 2, 2, 1),
(51, 6, 0, 3, 0, 0),
(52, 7, 0, 2, 1, 0),
(53, 0, 3, 0, 0, 1),
(54, 2, 0, 1, 2, 0),
(55, 3, 0, 2, 2, 1),
(56, 6, 0, 3, 0, 0),
(57, 7, 0, 2, 1, 0),
(58, 2, 0, 1, 2, 0),
(59, 3, 0, 2, 2, 1),
(60, 6, 0, 3, 0, 0),
(61, 7, 0, 2, 1, 0),
(62, 2, 0, 1, 2, 0),
(63, 3, 0, 2, 2, 1),
(64, 6, 0, 3, 0, 0),
(65, 7, 0, 2, 1, 0),
(66, 2, 1, 1, 2, 0),
(67, 3, 1, 2, 2, 1),
(68, 6, 1, 3, 0, 0),
(69, 7, 1, 2, 1, 0),
(70, 2, 1, 1, 2, 0),
(71, 3, 1, 1, 2, 0),
(72, 6, 1, 4, 0, 0),
(73, 7, 1, 2, 1, 0),
(74, 2, 1, 1, 2, 0),
(75, 3, 1, 2, 2, 1),
(76, 6, 1, 4, 4, 1),
(77, 7, 1, 2, 1, 0),
(78, 2, 1, 1, 2, 0),
(79, 3, 1, 2, 2, 1),
(80, 6, 1, 4, 4, 1),
(81, 7, 1, 2, 1, 0),
(82, 2, 1, 1, 2, 0),
(83, 3, 1, 2, 2, 1),
(84, 6, 1, 4, 4, 1),
(85, 7, 1, 2, 1, 0);

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
  `cflag` int(11) NOT NULL DEFAULT 0,
  `tflag` int(11) NOT NULL DEFAULT 0,
  `aflag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapter_master`
--

INSERT INTO `chapter_master` (`id`, `subject_id`, `class_id`, `number`, `name`, `cflag`, `tflag`, `aflag`) VALUES
(1, 1, 3, 1, 'Introduction to Physics', 1, 0, 0),
(2, 1, 3, 2, 'Force', 0, 0, 0),
(3, 2, 3, 1, 'Water', 0, 0, 0),
(4, 2, 3, 2, 'Atoms and Molecules', 0, 0, 0),
(5, 3, 3, 1, 'Gandhi and Nattu', 0, 0, 0),
(6, 4, 3, 1, 'C, C++, Java', 0, 0, 0),
(7, 5, 3, 1, 'Drawing', 0, 0, 0),
(8, 6, 3, 1, 'Earth and India', 0, 0, 0),
(9, 7, 3, 1, 'Kitchen King', 0, 0, 0),
(10, 8, 3, 1, 'Number System', 0, 0, 0);

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
(8, 1, 0, '1', '4'),
(9, 1, 0, '1', '4'),
(10, 1, 0, '1', '4'),
(11, 1, 1, '1', '4'),
(12, 1, 1, '0', '4'),
(13, 1, 1, '2', '4'),
(14, 1, 1, '2', '4'),
(15, 1, 1, '2', '4'),
(16, 1, 1, '2', '4');

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
(1, 'Physics', '1550326702.png'),
(2, 'Chemistry', '1550326712.png'),
(3, 'History', '1550326731.png'),
(4, 'Information Technology', '1550326753.png'),
(5, 'Arts', '1550326770.png'),
(6, 'Geography', '1550326810.png'),
(7, 'Home Science', '1550326826.png'),
(8, 'Maths', '1550326838.png');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
