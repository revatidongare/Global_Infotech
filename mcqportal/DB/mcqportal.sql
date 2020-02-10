-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2020 at 07:21 PM
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
(1, 'admin', 'admin@gmail.com', 'admin', '09552259961');

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
(201, 11, 14, 2, 2, 1),
(202, 10, 14, 0, 1, 0),
(203, 10, 0, 0, 0, 1),
(204, 12, 14, 1, 1, 1),
(205, 11, 17, 0, 2, 0),
(206, 13, 18, 2, 2, 1),
(207, 12, 20, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `demo_student_data`
--

CREATE TABLE `demo_student_data` (
  `student_id` int(50) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `school` varchar(225) NOT NULL,
  `subject_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `final_student_data`
--

CREATE TABLE `final_student_data` (
  `test_id` int(50) NOT NULL,
  `school` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_student_data`
--

INSERT INTO `final_student_data` (`test_id`, `school`, `name`, `email`, `phone`, `subject_id`) VALUES
(13, 'Indo public school', 'ram', 'ram@ram.com', '13514865', 3),
(14, 'SIT', 'Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', '09552259961', 2),
(15, 'SIT', 'Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', '09552259961', 1),
(16, 'Indo public school', 'Akshay kurhekar', 'akshay.kurhekar1014662@gmail.com', '09552259961', 3),
(17, 'SIT', 'test5', 'test5@gmail.com', '09552259961', 2),
(18, 'SIT', 'test', 'test@test.com', '953846513546', 5),
(19, 'Indo public school', 'ram', 'ram@hg.com', '4684', 1),
(20, 'Indo public school', 'abs', 'hjg@jhg.hg', '1358468', 3);

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
-- Table structure for table `question`
--

CREATE TABLE `question` (
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
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `subject_id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `test_type`) VALUES
(2, 1, 'Which instrument is used to measure depth of ocean ?\r\n', 'Galvanometer\r\n', 'Fluxmeter\r\n', 'Endoscope\r\n', 'Fathometer\r\n', 2, 0),
(3, 1, 'Name of the instrument to measure atomspheric pressure ?\r\n', 'Barometer\r\n', 'Barograph\r\n', 'Bolometer\r\n', 'Callipers\r\n', 2, 0),
(6, 1, 'Which planet is close to earth?', 'Mercury', 'Jupiter', 'Neptune', 'Venus', 4, 0),
(7, 1, 'Who is strongest?', 'Thor', 'Iron-Man', 'Hulk', 'Thanos', 1, 0),
(8, 2, 'question of c++', 'option 1', 'option 2', 'option 3', 'option 4', 3, 0),
(9, 3, 'question of java ti so simple', 'option 1', 'option 1', 'option 3', 'option 4', 1, 0),
(10, 1, 'this is final test quetion', 'C', 'C', 'C++', 'Python', 1, 1),
(11, 2, 'this is final test quetion of c++', 'c', 'c++', 'java', 'python', 2, 1),
(12, 3, 'java question', 'java', '.net', 'PHP', 'node js', 1, 1),
(13, 5, 'test quetion', 'c', 'java', 'python', 'core java', 2, 1);

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
(71, 2, 14, '1', '1'),
(72, 1, 14, '0', '1'),
(73, 1, 0, '1', '1'),
(74, 3, 14, '1', '1'),
(75, 2, 17, '0', '1'),
(76, 5, 18, '1', '1'),
(77, 3, 20, '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_master`
--

INSERT INTO `subject_master` (`id`, `name`) VALUES
(1, 'C'),
(2, 'C++'),
(3, 'JAVA'),
(5, 'test');

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
-- Indexes for table `demo_student_data`
--
ALTER TABLE `demo_student_data`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `final_student_data`
--
ALTER TABLE `final_student_data`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `key_table`
--
ALTER TABLE `key_table`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `demo_student_data`
--
ALTER TABLE `demo_student_data`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `final_student_data`
--
ALTER TABLE `final_student_data`
  MODIFY `test_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `key_table`
--
ALTER TABLE `key_table`
  MODIFY `key_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `student_mcq_test`
--
ALTER TABLE `student_mcq_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
