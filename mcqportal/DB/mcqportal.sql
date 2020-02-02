-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 08:35 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '09552259961');

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
(158, 8, 12, 3, 3, 1),
(159, 8, 13, 0, 3, 0),
(160, 8, 13, 0, 3, 0),
(161, 8, 13, 0, 3, 0),
(162, 8, 13, 2, 3, 0),
(163, 8, 13, 1, 3, 0),
(164, 8, 13, 1, 3, 0),
(165, 8, 13, 1, 3, 0),
(166, 8, 13, 2, 3, 0),
(167, 8, 13, 2, 3, 0),
(168, 2, 13, 1, 2, 0),
(169, 3, 13, 2, 2, 1),
(170, 6, 13, 4, 4, 1),
(171, 7, 13, 1, 1, 1),
(172, 8, 13, 2, 3, 0),
(173, 10, 1, 2, 2, 1),
(174, 10, 1, 2, 2, 1),
(175, 10, 1, 2, 2, 1),
(176, 8, 13, 2, 3, 0),
(177, 0, 1, 0, 0, 1),
(178, 0, 1, 0, 0, 1),
(179, 0, 1, 0, 0, 1),
(180, 10, 1, 2, 2, 1),
(181, 10, 1, 1, 2, 0),
(182, 8, 13, 2, 3, 0),
(183, 10, 8, 2, 2, 1),
(184, 10, 9, 2, 2, 1),
(185, 2, 26, 2, 2, 1),
(186, 3, 26, 2, 2, 1),
(187, 6, 26, 4, 4, 1),
(188, 7, 26, 1, 1, 1),
(189, 2, 13, 2, 2, 1),
(190, 3, 13, 2, 2, 1),
(191, 6, 13, 4, 4, 1),
(192, 7, 13, 1, 1, 1),
(193, 10, 10, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `final_test`
--

CREATE TABLE `final_test` (
  `test_id` int(50) NOT NULL,
  `school` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_test`
--

INSERT INTO `final_test` (`test_id`, `school`, `name`, `email`, `phone`, `subject_id`) VALUES
(2, 'SIT', 'Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', '+919552259961', 1),
(9, 'SIT', 'sham', 'sham@gmail.com', '12346', 1),
(10, 'SIT', 'test', 'test@gmail.com', '1234567890', 1);

-- --------------------------------------------------------

--
-- Table structure for table `key_table`
--

CREATE TABLE `key_table` (
  `key_id` int(50) NOT NULL,
  `test_key` varchar(500) NOT NULL,
  `school` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `key_table`
--

INSERT INTO `key_table` (`key_id`, `test_key`, `school`) VALUES
(1, '1234', 'SIT'),
(3, '4444', 'Indo public school');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_test`
--

CREATE TABLE `mcq_test` (
  `question_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `answer` int(11) NOT NULL,
  `test_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq_test`
--

INSERT INTO `mcq_test` (`question_id`, `subject_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `test_type`) VALUES
(2, 1, 'Which instrument is used to measure depth of ocean ?\r\n', 'Galvanometer\r\n', 'Fluxmeter\r\n', 'Endoscope\r\n', 'Fathometer\r\n', 2, 0),
(3, 1, 'Name of the instrument to measure atomspheric pressure ?\r\n', 'Barometer\r\n', 'Barograph\r\n', 'Bolometer\r\n', 'Callipers\r\n', 2, 0),
(6, 1, 'Which planet is close to earth?', 'Mercury', 'Jupiter', 'Neptune', 'Venus', 4, 0),
(7, 1, 'Who is strongest?', 'Thor', 'Iron-Man', 'Hulk', 'Thanos', 1, 0),
(8, 2, 'question of c++', 'option 1', 'option 2', 'option 3', 'option 4', 3, 0),
(9, 3, 'question of java ti so simple', 'option 1', 'option 1', 'option 3', 'option 4', 1, 0),
(10, 1, 'this is final test quetion', '1', '2', '3', '3', 2, 1),
(11, 2, 'this is final test quetion of c++', 'c', 'c++', 'java', 'python', 2, 1),
(12, 3, 'java question', 'java', 'bskdjhv', 'vkjhv', 'kjhv', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `student_id` int(50) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `school` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`student_id`, `name`, `phone`, `email`, `school`) VALUES
(12, 'aksahy', '1234567890', 'akshay@akshay.com', 'Sit'),
(13, 'Akshay kurhekar', '0955225996', 'akshay.kurhekar1014662@gmail.com', 'SIT'),
(14, 'Akshay kurhekar', '0955225996', 'akshay.kurhekar1014662@gmail.com', 'SIT'),
(15, 'Akshay kurhekar', '24', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(16, 'Akshay kurhekar', '2474', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(17, 'Akshay kurhekar', '2474', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(18, 'fvrgvcfsdcccef', '145156', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(19, 'fvrgvcfsdcccef', '145156', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(20, 'Akshay kurhekar', '65146851', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(21, 'Akshay kurhekar', '5687465321', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(22, 'Akshay kurhekar', '09552259961', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(23, 'Akshay kurhekar', '09552259961', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(24, 'Akshay kurhekar', '09552259961', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(25, 'Akshay kurhekar', '09552259961', 'akshay.kurhekar1014662@gmail.com', 'Indo public school'),
(26, 'sham', '1234665', 'sham@gmail.com', 'sppu'),
(27, 'test', '123456923', 'akshay.kurhekar1014662@gmail.com', 'Indo public school');

-- --------------------------------------------------------

--
-- Table structure for table `student_mcq_test`
--

CREATE TABLE `student_mcq_test` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `scored` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_mcq_test`
--

INSERT INTO `student_mcq_test` (`id`, `subject_id`, `user_id`, `scored`, `total`) VALUES
(2, 1, 1, '2', '4'),
(3, 1, 3, '2', '4'),
(4, 3, 3, '1', '1'),
(5, 2, 3, '1', '1'),
(6, 1, 4, '1', '4'),
(7, 2, 3, '1', '1'),
(27, 1, 1, '4', '4'),
(28, 1, 1, '4', '4'),
(29, 1, 1, '0', '4'),
(30, 2, 1, '0', '1'),
(31, 1, 1, '4', '4'),
(32, 1, 5, '3', '4'),
(33, 2, 5, '0', '1'),
(34, 3, 1, '0', '1'),
(35, 3, 1, '0', '1'),
(36, 2, 5, '0', '1'),
(37, 3, 9, '0', '1'),
(38, 3, 9, '0', '1'),
(39, 3, 9, '0', '1'),
(40, 3, 9, '0', '1'),
(41, 3, 9, '0', '1'),
(42, 1, 10, '3', '4'),
(43, 1, 11, '0', '4'),
(44, 2, 12, '1', '1'),
(45, 0, 13, '0', '1'),
(46, 2, 13, '0', '1'),
(47, 2, 13, '0', '1'),
(48, 2, 13, '0', '1'),
(49, 2, 13, '0', '1'),
(50, 1, 13, '3', '4'),
(51, 2, 13, '0', '1'),
(52, 1, 1, '1', '1'),
(53, 1, 1, '1', '1'),
(54, 1, 1, '1', '1'),
(55, 2, 13, '0', '1'),
(56, 2, 1, '1', '1'),
(57, 2, 1, '1', '1'),
(58, 3, 1, '1', '1'),
(59, 1, 1, '1', '1'),
(60, 1, 1, '0', '1'),
(61, 2, 13, '0', '1'),
(62, 1, 8, '1', '1'),
(63, 1, 9, '1', '1'),
(64, 1, 26, '4', '4'),
(65, 1, 13, '4', '4'),
(66, 1, 10, '1', '1');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_test`
--
ALTER TABLE `final_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `key_table`
--
ALTER TABLE `key_table`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `mcq_test`
--
ALTER TABLE `mcq_test`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`student_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;
--
-- AUTO_INCREMENT for table `final_test`
--
ALTER TABLE `final_test`
  MODIFY `test_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `key_table`
--
ALTER TABLE `key_table`
  MODIFY `key_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mcq_test`
--
ALTER TABLE `mcq_test`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `student_mcq_test`
--
ALTER TABLE `student_mcq_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
