-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 01:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmcs-ae-survey-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey`
--

CREATE TABLE `alum_survey` (
  `answer_id` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q1`
--

CREATE TABLE `alum_survey_q1` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q2`
--

CREATE TABLE `alum_survey_q2` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q3`
--

CREATE TABLE `alum_survey_q3` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q4`
--

CREATE TABLE `alum_survey_q4` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q5`
--

CREATE TABLE `alum_survey_q5` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q6`
--

CREATE TABLE `alum_survey_q6` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q7`
--

CREATE TABLE `alum_survey_q7` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q8`
--

CREATE TABLE `alum_survey_q8` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q9`
--

CREATE TABLE `alum_survey_q9` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q10`
--

CREATE TABLE `alum_survey_q10` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q11`
--

CREATE TABLE `alum_survey_q11` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q12`
--

CREATE TABLE `alum_survey_q12` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q13`
--

CREATE TABLE `alum_survey_q13` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q14`
--

CREATE TABLE `alum_survey_q14` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q15`
--

CREATE TABLE `alum_survey_q15` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q16`
--

CREATE TABLE `alum_survey_q16` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q17`
--

CREATE TABLE `alum_survey_q17` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q18`
--

CREATE TABLE `alum_survey_q18` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ques18_arr` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q19`
--

CREATE TABLE `alum_survey_q19` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactemp_ques`
--

CREATE TABLE `contactemp_ques` (
  `answer_id` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey`
--

CREATE TABLE `emp_survey` (
  `answer_id` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q1`
--

CREATE TABLE `emp_survey_q1` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q2`
--

CREATE TABLE `emp_survey_q2` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q2_1`
--

CREATE TABLE `emp_survey_q2_1` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `region` text NOT NULL,
  `subregion` text NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q3`
--

CREATE TABLE `emp_survey_q3` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q3`
--

INSERT INTO `emp_survey_q3` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Information Technology', '2021-05-21'),
(2, 3, 'Education', '2021-05-21'),
(3, 5, 'Media and Communication', '2021-05-21'),
(4, 8, 'Public Administration and Defense; Compulsory Social Security', '2021-05-21'),
(5, 10, 'Finance, Banks, and Insurance', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q4`
--

CREATE TABLE `emp_survey_q4` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q4`
--

INSERT INTO `emp_survey_q4` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21'),
(2, 3, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21'),
(3, 5, 'Chief level – General Manager/President/CEO', '2021-05-21'),
(4, 8, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21'),
(5, 10, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q5`
--

CREATE TABLE `emp_survey_q5` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` int(11) NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q5`
--

INSERT INTO `emp_survey_q5` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 3, '2021-05-21'),
(2, 3, 2, '2021-05-21'),
(3, 5, 5, '2021-05-21'),
(4, 8, 6, '2021-05-21'),
(5, 10, 4, '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q6`
--

CREATE TABLE `emp_survey_q6` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q6`
--

INSERT INTO `emp_survey_q6` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Agree', '2021-05-21'),
(2, 3, 'Strongly Agree', '2021-05-21'),
(3, 5, 'Agree', '2021-05-21'),
(4, 8, 'Strongly Agree', '2021-05-21'),
(5, 10, 'Agree', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q7`
--

CREATE TABLE `emp_survey_q7` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q7`
--

INSERT INTO `emp_survey_q7` (`answer_id`, `user_id`, `skill`, `answer_body`, `date_response`) VALUES
(1, 6, 'Reading Comprehension', 'Very Important', '2021-05-21'),
(2, 6, 'Active Listening', 'Important', '2021-05-21'),
(3, 6, 'Writing Skills', 'Important', '2021-05-21'),
(4, 6, 'Verbal Communication', 'Important', '2021-05-21'),
(5, 6, 'Mathematics Skills', 'Important', '2021-05-21'),
(6, 6, 'Scientific Literacy', 'Important', '2021-05-21'),
(7, 6, 'Digital Literacy', 'Very Important', '2021-05-21'),
(8, 6, 'Critical Thinking', 'Very Important', '2021-05-21'),
(9, 6, 'Participatory Learning', 'Important', '2021-05-21'),
(10, 6, 'Creative and Innovation', 'Very Important', '2021-05-21'),
(11, 6, 'Leadership Skills', 'Important', '2021-05-21'),
(12, 6, 'Social Awareness', 'Important', '2021-05-21'),
(13, 6, 'Service Orientation', 'Important', '2021-05-21'),
(14, 6, 'Time Management', 'Very Important', '2021-05-21'),
(15, 6, 'Complex Problem Solving Skills', 'Very Important', '2021-05-21'),
(16, 6, 'Judgment and Decision Making', 'Important', '2021-05-21'),
(17, 6, 'Systems Analysis and Evaluation', 'Very Important', '2021-05-21'),
(18, 3, 'Reading Comprehension', 'Important', '2021-05-21'),
(19, 3, 'Active Listening', 'Important', '2021-05-21'),
(20, 3, 'Writing Skills', 'Important', '2021-05-21'),
(21, 3, 'Verbal Communication', 'Important', '2021-05-21'),
(22, 3, 'Mathematics Skills', 'Important', '2021-05-21'),
(23, 3, 'Scientific Literacy', 'Important', '2021-05-21'),
(24, 3, 'Digital Literacy', 'Important', '2021-05-21'),
(25, 3, 'Critical Thinking', 'Important', '2021-05-21'),
(26, 3, 'Participatory Learning', 'Important', '2021-05-21'),
(27, 3, 'Creative and Innovation', 'Important', '2021-05-21'),
(28, 3, 'Leadership Skills', 'Important', '2021-05-21'),
(29, 3, 'Social Awareness', 'Important', '2021-05-21'),
(30, 3, 'Service Orientation', 'Important', '2021-05-21'),
(31, 3, 'Time Management', 'Important', '2021-05-21'),
(32, 3, 'Complex Problem Solving Skills', 'Important', '2021-05-21'),
(33, 3, 'Judgment and Decision Making', 'Important', '2021-05-21'),
(34, 3, 'Systems Analysis and Evaluation', 'Important', '2021-05-21'),
(35, 5, 'Reading Comprehension', 'Important', '2021-05-21'),
(36, 5, 'Active Listening', 'Important', '2021-05-21'),
(37, 5, 'Writing Skills', 'Important', '2021-05-21'),
(38, 5, 'Verbal Communication', 'Very Important', '2021-05-21'),
(39, 5, 'Mathematics Skills', 'Very Important', '2021-05-21'),
(40, 5, 'Scientific Literacy', 'Very Important', '2021-05-21'),
(41, 5, 'Digital Literacy', 'Very Important', '2021-05-21'),
(42, 5, 'Critical Thinking', 'Important', '2021-05-21'),
(43, 5, 'Participatory Learning', 'Very Important', '2021-05-21'),
(44, 5, 'Creative and Innovation', 'Important', '2021-05-21'),
(45, 5, 'Leadership Skills', 'Very Important', '2021-05-21'),
(46, 5, 'Social Awareness', 'Important', '2021-05-21'),
(47, 5, 'Service Orientation', 'Very Important', '2021-05-21'),
(48, 5, 'Time Management', 'Important', '2021-05-21'),
(49, 5, 'Complex Problem Solving Skills', 'Very Important', '2021-05-21'),
(50, 5, 'Judgment and Decision Making', 'Important', '2021-05-21'),
(51, 5, 'Systems Analysis and Evaluation', 'Very Important', '2021-05-21'),
(52, 8, 'Reading Comprehension', 'Very Important', '2021-05-21'),
(53, 8, 'Active Listening', 'Important', '2021-05-21'),
(54, 8, 'Writing Skills', 'Important', '2021-05-21'),
(55, 8, 'Verbal Communication', 'Important', '2021-05-21'),
(56, 8, 'Mathematics Skills', 'Important', '2021-05-21'),
(57, 8, 'Scientific Literacy', 'Important', '2021-05-21'),
(58, 8, 'Digital Literacy', 'Very Important', '2021-05-21'),
(59, 8, 'Critical Thinking', 'Very Important', '2021-05-21'),
(60, 8, 'Participatory Learning', 'Of Little Importance', '2021-05-21'),
(61, 8, 'Creative and Innovation', 'Important', '2021-05-21'),
(62, 8, 'Leadership Skills', 'Of Little Importance', '2021-05-21'),
(63, 8, 'Social Awareness', 'Of Little Importance', '2021-05-21'),
(64, 8, 'Service Orientation', 'Of Little Importance', '2021-05-21'),
(65, 8, 'Time Management', 'Important', '2021-05-21'),
(66, 8, 'Complex Problem Solving Skills', 'Important', '2021-05-21'),
(67, 8, 'Judgment and Decision Making', 'Important', '2021-05-21'),
(68, 8, 'Systems Analysis and Evaluation', 'Important', '2021-05-21'),
(69, 10, 'Reading Comprehension', 'Important', '2021-05-21'),
(70, 10, 'Active Listening', 'Important', '2021-05-21'),
(71, 10, 'Writing Skills', 'Important', '2021-05-21'),
(72, 10, 'Verbal Communication', 'Important', '2021-05-21'),
(73, 10, 'Mathematics Skills', 'Important', '2021-05-21'),
(74, 10, 'Scientific Literacy', 'Important', '2021-05-21'),
(75, 10, 'Digital Literacy', 'Important', '2021-05-21'),
(76, 10, 'Critical Thinking', 'Important', '2021-05-21'),
(77, 10, 'Participatory Learning', 'Important', '2021-05-21'),
(78, 10, 'Creative and Innovation', 'Important', '2021-05-21'),
(79, 10, 'Leadership Skills', 'Important', '2021-05-21'),
(80, 10, 'Social Awareness', 'Important', '2021-05-21'),
(81, 10, 'Service Orientation', 'Important', '2021-05-21'),
(82, 10, 'Time Management', 'Important', '2021-05-21'),
(83, 10, 'Complex Problem Solving Skills', 'Important', '2021-05-21'),
(84, 10, 'Judgment and Decision Making', 'Important', '2021-05-21'),
(85, 10, 'Systems Analysis and Evaluation', 'Important', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q8`
--

CREATE TABLE `emp_survey_q8` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q8`
--

INSERT INTO `emp_survey_q8` (`answer_id`, `user_id`, `skill`, `answer_body`, `date_response`) VALUES
(1, 6, 'Reading Comprehension', 'Satisfied', '2021-05-21'),
(2, 6, 'Active Listening', 'Satisfied', '2021-05-21'),
(3, 6, 'Writing Skills', 'Satisfied', '2021-05-21'),
(4, 6, 'Verbal Communication', 'Satisfied', '2021-05-21'),
(5, 6, 'Mathematics Skills', 'Satisfied', '2021-05-21'),
(6, 6, 'Scientific Literacy', 'Satisfied', '2021-05-21'),
(7, 6, 'Digital Literacy', 'Satisfied', '2021-05-21'),
(8, 6, 'Critical Thinking', 'Satisfied', '2021-05-21'),
(9, 6, 'Participatory Learning', 'Satisfied', '2021-05-21'),
(10, 6, 'Creative and Innovation', 'Satisfied', '2021-05-21'),
(11, 6, 'Leadership Skills', 'Satisfied', '2021-05-21'),
(12, 6, 'Social Awareness', 'Satisfied', '2021-05-21'),
(13, 6, 'Service Orientation', 'Satisfied', '2021-05-21'),
(14, 6, 'Time Management', 'Satisfied', '2021-05-21'),
(15, 6, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-21'),
(16, 6, 'Judgment and Decision Making', 'Satisfied', '2021-05-21'),
(17, 6, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-21'),
(18, 3, 'Reading Comprehension', 'Very Satisfied', '2021-05-21'),
(19, 3, 'Active Listening', 'Satisfied', '2021-05-21'),
(20, 3, 'Writing Skills', 'Satisfied', '2021-05-21'),
(21, 3, 'Verbal Communication', 'Very Satisfied', '2021-05-21'),
(22, 3, 'Mathematics Skills', 'Very Satisfied', '2021-05-21'),
(23, 3, 'Scientific Literacy', 'Satisfied', '2021-05-21'),
(24, 3, 'Digital Literacy', 'Very Satisfied', '2021-05-21'),
(25, 3, 'Critical Thinking', 'Satisfied', '2021-05-21'),
(26, 3, 'Participatory Learning', 'Very Satisfied', '2021-05-21'),
(27, 3, 'Creative and Innovation', 'Satisfied', '2021-05-21'),
(28, 3, 'Leadership Skills', 'Satisfied', '2021-05-21'),
(29, 3, 'Social Awareness', 'Satisfied', '2021-05-21'),
(30, 3, 'Service Orientation', 'Very Satisfied', '2021-05-21'),
(31, 3, 'Time Management', 'Satisfied', '2021-05-21'),
(32, 3, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-05-21'),
(33, 3, 'Judgment and Decision Making', 'Very Satisfied', '2021-05-21'),
(34, 3, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-21'),
(35, 5, 'Reading Comprehension', 'Satisfied', '2021-05-21'),
(36, 5, 'Active Listening', 'Very Satisfied', '2021-05-21'),
(37, 5, 'Writing Skills', 'Satisfied', '2021-05-21'),
(38, 5, 'Verbal Communication', 'Very Satisfied', '2021-05-21'),
(39, 5, 'Mathematics Skills', 'Satisfied', '2021-05-21'),
(40, 5, 'Scientific Literacy', 'Very Satisfied', '2021-05-21'),
(41, 5, 'Digital Literacy', 'Satisfied', '2021-05-21'),
(42, 5, 'Critical Thinking', 'Very Satisfied', '2021-05-21'),
(43, 5, 'Participatory Learning', 'Satisfied', '2021-05-21'),
(44, 5, 'Creative and Innovation', 'Very Satisfied', '2021-05-21'),
(45, 5, 'Leadership Skills', 'Satisfied', '2021-05-21'),
(46, 5, 'Social Awareness', 'Very Satisfied', '2021-05-21'),
(47, 5, 'Service Orientation', 'Satisfied', '2021-05-21'),
(48, 5, 'Time Management', 'Very Satisfied', '2021-05-21'),
(49, 5, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-21'),
(50, 5, 'Judgment and Decision Making', 'Very Satisfied', '2021-05-21'),
(51, 5, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-21'),
(52, 8, 'Reading Comprehension', 'Satisfied', '2021-05-21'),
(53, 8, 'Active Listening', 'Satisfied', '2021-05-21'),
(54, 8, 'Writing Skills', 'Satisfied', '2021-05-21'),
(55, 8, 'Verbal Communication', 'Satisfied', '2021-05-21'),
(56, 8, 'Mathematics Skills', 'Satisfied', '2021-05-21'),
(57, 8, 'Scientific Literacy', 'Satisfied', '2021-05-21'),
(58, 8, 'Digital Literacy', 'Satisfied', '2021-05-21'),
(59, 8, 'Critical Thinking', 'Satisfied', '2021-05-21'),
(60, 8, 'Participatory Learning', 'Unsatisfied', '2021-05-21'),
(61, 8, 'Creative and Innovation', 'Satisfied', '2021-05-21'),
(62, 8, 'Leadership Skills', 'Satisfied', '2021-05-21'),
(63, 8, 'Social Awareness', 'Unsatisfied', '2021-05-21'),
(64, 8, 'Service Orientation', 'Satisfied', '2021-05-21'),
(65, 8, 'Time Management', 'Unsatisfied', '2021-05-21'),
(66, 8, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-21'),
(67, 8, 'Judgment and Decision Making', 'Satisfied', '2021-05-21'),
(68, 8, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-21'),
(69, 10, 'Reading Comprehension', 'Satisfied', '2021-05-21'),
(70, 10, 'Active Listening', 'Satisfied', '2021-05-21'),
(71, 10, 'Writing Skills', 'Satisfied', '2021-05-21'),
(72, 10, 'Verbal Communication', 'Satisfied', '2021-05-21'),
(73, 10, 'Mathematics Skills', 'Satisfied', '2021-05-21'),
(74, 10, 'Scientific Literacy', 'Satisfied', '2021-05-21'),
(75, 10, 'Digital Literacy', 'Satisfied', '2021-05-21'),
(76, 10, 'Critical Thinking', 'Satisfied', '2021-05-21'),
(77, 10, 'Participatory Learning', 'Satisfied', '2021-05-21'),
(78, 10, 'Creative and Innovation', 'Satisfied', '2021-05-21'),
(79, 10, 'Leadership Skills', 'Satisfied', '2021-05-21'),
(80, 10, 'Social Awareness', 'Satisfied', '2021-05-21'),
(81, 10, 'Service Orientation', 'Satisfied', '2021-05-21'),
(82, 10, 'Time Management', 'Satisfied', '2021-05-21'),
(83, 10, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-21'),
(84, 10, 'Judgment and Decision Making', 'Satisfied', '2021-05-21'),
(85, 10, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q9`
--

CREATE TABLE `emp_survey_q9` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q9`
--

INSERT INTO `emp_survey_q9` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Likely', '2021-05-21'),
(2, 3, 'Very Likely', '2021-05-21'),
(3, 5, 'Likely', '2021-05-21'),
(4, 8, 'Likely', '2021-05-21'),
(5, 10, 'Likely', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q10`
--

CREATE TABLE `emp_survey_q10` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q10`
--

INSERT INTO `emp_survey_q10` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Likely', '2021-05-21'),
(2, 3, 'Very Likely', '2021-05-21'),
(3, 5, 'Likely', '2021-05-21'),
(4, 8, 'Likely', '2021-05-21'),
(5, 10, 'Likely', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q11`
--

CREATE TABLE `emp_survey_q11` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q11`
--

INSERT INTO `emp_survey_q11` (`answer_id`, `user_id`, `skill`, `answer_body`, `date_response`) VALUES
(1, 6, 'Willing to undergo training and/or further education', 'Important', '2021-05-21'),
(2, 6, 'Has strong and professional work ethic', 'Important', '2021-05-21'),
(3, 6, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-21'),
(4, 6, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-21'),
(5, 6, 'Is able to learn quickly the basic company operations', 'Very Important', '2021-05-21'),
(6, 6, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-21'),
(7, 6, 'Is able to master company operations', 'Important', '2021-05-21'),
(8, 6, 'Effective in both oral and written communication', 'Important', '2021-05-21'),
(9, 6, 'Computer and Technical Literate', 'Very Important', '2021-05-21'),
(10, 6, 'Effective and efficient in accomplishing tasks', 'Very Important', '2021-05-21'),
(11, 6, 'Able to provide innovative ideas to the company', 'Very Important', '2021-05-21'),
(12, 3, 'Willing to undergo training and/or further education', 'Important', '2021-05-21'),
(13, 3, 'Has strong and professional work ethic', 'Very Important', '2021-05-21'),
(14, 3, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-21'),
(15, 3, 'Willing and has a positive attitude towards working with others', 'Very Important', '2021-05-21'),
(16, 3, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-21'),
(17, 3, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-21'),
(18, 3, 'Is able to master company operations', 'Important', '2021-05-21'),
(19, 3, 'Effective in both oral and written communication', 'Very Important', '2021-05-21'),
(20, 3, 'Computer and Technical Literate', 'Important', '2021-05-21'),
(21, 3, 'Effective and efficient in accomplishing tasks', 'Very Important', '2021-05-21'),
(22, 3, 'Able to provide innovative ideas to the company', 'Important', '2021-05-21'),
(23, 5, 'Willing to undergo training and/or further education', 'Of Little Importance', '2021-05-21'),
(24, 5, 'Has strong and professional work ethic', 'Important', '2021-05-21'),
(25, 5, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-21'),
(26, 5, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-21'),
(27, 5, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-21'),
(28, 5, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-05-21'),
(29, 5, 'Is able to master company operations', 'Important', '2021-05-21'),
(30, 5, 'Effective in both oral and written communication', 'Important', '2021-05-21'),
(31, 5, 'Computer and Technical Literate', 'Very Important', '2021-05-21'),
(32, 5, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-21'),
(33, 5, 'Able to provide innovative ideas to the company', 'Important', '2021-05-21'),
(34, 8, 'Willing to undergo training and/or further education', 'Of Little Importance', '2021-05-21'),
(35, 8, 'Has strong and professional work ethic', 'Important', '2021-05-21'),
(36, 8, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-21'),
(37, 8, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-21'),
(38, 8, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-21'),
(39, 8, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-05-21'),
(40, 8, 'Is able to master company operations', 'Of Little Importance', '2021-05-21'),
(41, 8, 'Effective in both oral and written communication', 'Of Little Importance', '2021-05-21'),
(42, 8, 'Computer and Technical Literate', 'Very Important', '2021-05-21'),
(43, 8, 'Effective and efficient in accomplishing tasks', 'Very Important', '2021-05-21'),
(44, 8, 'Able to provide innovative ideas to the company', 'Very Important', '2021-05-21'),
(45, 10, 'Willing to undergo training and/or further education', 'Important', '2021-05-21'),
(46, 10, 'Has strong and professional work ethic', 'Important', '2021-05-21'),
(47, 10, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-21'),
(48, 10, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-21'),
(49, 10, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-21'),
(50, 10, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-05-21'),
(51, 10, 'Is able to master company operations', 'Important', '2021-05-21'),
(52, 10, 'Effective in both oral and written communication', 'Important', '2021-05-21'),
(53, 10, 'Computer and Technical Literate', 'Important', '2021-05-21'),
(54, 10, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-21'),
(55, 10, 'Able to provide innovative ideas to the company', 'Important', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q12`
--

CREATE TABLE `emp_survey_q12` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q12`
--

INSERT INTO `emp_survey_q12` (`answer_id`, `user_id`, `skill`, `answer_body`, `date_response`) VALUES
(1, 6, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-21'),
(2, 6, 'Has strong and professional work ethic', 'Satisfied', '2021-05-21'),
(3, 6, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-21'),
(4, 6, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-21'),
(5, 6, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-21'),
(6, 6, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-21'),
(7, 6, 'Is able to master company operations', 'Satisfied', '2021-05-21'),
(8, 6, 'Effective in both oral and written communication', 'Satisfied', '2021-05-21'),
(9, 6, 'Computer and Technical Literate', 'Satisfied', '2021-05-21'),
(10, 6, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-21'),
(11, 6, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-21'),
(12, 3, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-21'),
(13, 3, 'Has strong and professional work ethic', 'Satisfied', '2021-05-21'),
(14, 3, 'Willing to share knowledge and expertise within the company and/or community', 'Very Satisfied', '2021-05-21'),
(15, 3, 'Willing and has a positive attitude towards working with others', 'Very Satisfied', '2021-05-21'),
(16, 3, 'Is able to learn quickly the basic company operations', 'Very Satisfied', '2021-05-21'),
(17, 3, 'Is able to provide solutions and contribute to the growth of the company', 'Very Satisfied', '2021-05-21'),
(18, 3, 'Is able to master company operations', 'Very Satisfied', '2021-05-21'),
(19, 3, 'Effective in both oral and written communication', 'Very Satisfied', '2021-05-21'),
(20, 3, 'Computer and Technical Literate', 'Very Satisfied', '2021-05-21'),
(21, 3, 'Effective and efficient in accomplishing tasks', 'Very Satisfied', '2021-05-21'),
(22, 3, 'Able to provide innovative ideas to the company', 'Very Satisfied', '2021-05-21'),
(23, 5, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-21'),
(24, 5, 'Has strong and professional work ethic', 'Satisfied', '2021-05-21'),
(25, 5, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-21'),
(26, 5, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-21'),
(27, 5, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-21'),
(28, 5, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-21'),
(29, 5, 'Is able to master company operations', 'Very Satisfied', '2021-05-21'),
(30, 5, 'Effective in both oral and written communication', 'Satisfied', '2021-05-21'),
(31, 5, 'Computer and Technical Literate', 'Very Satisfied', '2021-05-21'),
(32, 5, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-21'),
(33, 5, 'Able to provide innovative ideas to the company', 'Very Satisfied', '2021-05-21'),
(34, 8, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-21'),
(35, 8, 'Has strong and professional work ethic', 'Satisfied', '2021-05-21'),
(36, 8, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-21'),
(37, 8, 'Willing and has a positive attitude towards working with others', 'Unsatisfied', '2021-05-21'),
(38, 8, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-21'),
(39, 8, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-21'),
(40, 8, 'Is able to master company operations', 'Satisfied', '2021-05-21'),
(41, 8, 'Effective in both oral and written communication', 'Unsatisfied', '2021-05-21'),
(42, 8, 'Computer and Technical Literate', 'Very Satisfied', '2021-05-21'),
(43, 8, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-21'),
(44, 8, 'Able to provide innovative ideas to the company', 'Unsatisfied', '2021-05-21'),
(45, 10, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-21'),
(46, 10, 'Has strong and professional work ethic', 'Satisfied', '2021-05-21'),
(47, 10, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-21'),
(48, 10, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-21'),
(49, 10, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-21'),
(50, 10, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-21'),
(51, 10, 'Is able to master company operations', 'Satisfied', '2021-05-21'),
(52, 10, 'Effective in both oral and written communication', 'Satisfied', '2021-05-21'),
(53, 10, 'Computer and Technical Literate', 'Satisfied', '2021-05-21'),
(54, 10, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-21'),
(55, 10, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q13`
--

CREATE TABLE `emp_survey_q13` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q13`
--

INSERT INTO `emp_survey_q13` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Include practical experience as part of the academic programs', '2021-05-21'),
(2, 6, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-21'),
(3, 3, 'Design courses that are more relevant to the needs of employers', '2021-05-21'),
(4, 3, 'Include practical experience as part of the academic programs', '2021-05-21'),
(5, 3, 'Include sector specific job placements as an integral part of the degree program', '2021-05-21'),
(6, 3, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-21'),
(7, 5, 'Include practical experience as part of the academic programs', '2021-05-21'),
(8, 5, 'Include sector specific job placements as an integral part of the degree program', '2021-05-21'),
(9, 5, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-21'),
(10, 8, 'Include practical experience as part of the academic programs', '2021-05-21'),
(11, 10, 'Design courses that are more relevant to the needs of employers', '2021-05-21'),
(12, 10, 'Include practical experience as part of the academic programs', '2021-05-21'),
(13, 10, 'Include sector specific job placements as an integral part of the degree program', '2021-05-21'),
(14, 10, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q14`
--

CREATE TABLE `emp_survey_q14` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` text NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q14`
--

INSERT INTO `emp_survey_q14` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Important', '2021-05-21'),
(2, 3, 'Important', '2021-05-21'),
(3, 5, 'Moderately part Important', '2021-05-21'),
(4, 8, 'Of Little Importance', '2021-05-21'),
(5, 10, 'Moderately part Important', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q15`
--

CREATE TABLE `emp_survey_q15` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q16`
--

CREATE TABLE `emp_survey_q16` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q17`
--

CREATE TABLE `emp_survey_q17` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `time_created` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `token`, `password`, `pass`, `role_id`, `time_created`, `last_login`) VALUES
(2, 'jane@gmail.com', '5e6a6d87aeb4c389a1361cd463856eaf6466cefd82bae5408a94e05d337f319f49e38ccda424e0c1b7e1e376ea6a7e8becc3', '$2y$10$HK2Ellp9/Mw89bckEg9PbeJFwComfd5.4BQjcHAkqRs3Aei.lBbAi', '12345', 1, '2021-05-20 09:51:01', '2021-05-20 09:24:02'),
(3, 'john@gmail.com', '8478bfb97840a79d6e2ed2b61d8977487a72d685597ed4fd8054cfbbbd833940abf39322c47692ea321d2f85cbd4a3ba5163', '$2y$10$lQOQtTfN4Avsbuy8ROlUOOY.qSr2rz49GSYF..QNCCd2rsJ7bZlLG', '12345', 2, '2021-05-20 09:51:01', '2021-05-21 15:50:02'),
(4, 'admin@gmail.com', 'bbf073a951128bc7beff931d97845715e08ff3744445f6cd8324d2565f4c32f65c31262cdc54e5abe022e499f34a2248504b', '$2y$10$e45H4/zzpxHEKiEdqPK02eknJKZyXTVGScKHRATLBF5.W8km4vUMy', 'admin', 0, '2021-05-20 09:51:01', '2021-05-21 17:31:47'),
(5, 'juan@gmail.com', '7c61c8b92cfeb880d8d99b58533e324c07cc461d3e573b17369f2a377ef1f2dbb47629ea4b1511290a91319a6d5f7944cb78', '$2y$10$MiSINz5TurNhGjk0sIbzKu9eaOepd9WkQ0XD/uw3j9hryuTtZYuke', '12345', 3, '2021-05-20 09:51:01', '2021-05-21 09:04:27'),
(6, 'jen@gmail.com', 'e81e1502f327062b08945aa5be675c4488af8a411baedd922657ef346d1e73dee7aa19618a4572c0e898107677eeb64f72a8', '$2y$10$qTvg/EBRTtcpi.aHX5tFyegP/C3BO.b.y3HAvt.herwmej3URnK.q', 'ZDxyt3kL', 2, '2021-05-21 06:43:37', '2021-05-21 06:50:57'),
(7, 'admin2@mail.com', '26c1731abfdaa3d0c9efe3a99af10d1de301119324548f3707149281a3eb21ca1517321df1945b15de4d1e8eddf454a5875d', '$2y$10$nCAYW6LBthx9kBH8ropAreufnByt/O6AC02iMDAUHCqCaByN2WG.G', 'HE1nKkNg', 0, '2021-05-21 06:44:13', '2021-05-21 06:44:13'),
(8, 'jiji@mail.com', 'acb0d136743deda5472f6d450f2576bd4827af42b55b86c7a74326ca1bc1e1ef413354ff3f91914faeea31c3c49be91d24b5', '$2y$10$/obFaBBGMHAq.mv2xSgMUuSn23a2rFhfAKX3bxrfU45VchTzTlX2a', '15VkWCFg', 3, '2021-05-21 06:44:46', '2021-05-21 09:07:54'),
(9, 'jj@mail.com', '7e514e8836b1af412dfbbc5723b09f9d9fada2124e9790f369006eeb8459c5b0776cd8511f00052363889f56690c9bb7abc5', '$2y$10$yo8YoqxoQje3FAYYAFX8hOEiyynwqaPf0iTvo.AfrMuum7aZDFsAK', '72bD8ekW', 1, '2021-05-21 06:45:03', '2021-05-21 06:45:03'),
(10, 'jon@mail.com', 'a4a36353b3de1d0c67830c919c322eb3c5ac8b3314c7a5c28bf78b2da17ca83373dfdc81e2c6ace045a6554ef8b6f321658a', '$2y$10$XPMpNskyE4DW86y/fIzAMO5ZjpRjvWI30JWFRrLTYPwSbmcJN5Cum', 'xVgyLp3w', 2, '2021-05-21 06:45:18', '2021-05-21 09:10:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alum_survey`
--
ALTER TABLE `alum_survey`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `alum_survey_q1`
--
ALTER TABLE `alum_survey_q1`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q2`
--
ALTER TABLE `alum_survey_q2`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q3`
--
ALTER TABLE `alum_survey_q3`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q4`
--
ALTER TABLE `alum_survey_q4`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q5`
--
ALTER TABLE `alum_survey_q5`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q6`
--
ALTER TABLE `alum_survey_q6`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q7`
--
ALTER TABLE `alum_survey_q7`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q8`
--
ALTER TABLE `alum_survey_q8`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q9`
--
ALTER TABLE `alum_survey_q9`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q10`
--
ALTER TABLE `alum_survey_q10`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `alum_survey_q11`
--
ALTER TABLE `alum_survey_q11`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q12`
--
ALTER TABLE `alum_survey_q12`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q13`
--
ALTER TABLE `alum_survey_q13`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q14`
--
ALTER TABLE `alum_survey_q14`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q15`
--
ALTER TABLE `alum_survey_q15`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q16`
--
ALTER TABLE `alum_survey_q16`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q17`
--
ALTER TABLE `alum_survey_q17`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q18`
--
ALTER TABLE `alum_survey_q18`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q19`
--
ALTER TABLE `alum_survey_q19`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `contactemp_ques`
--
ALTER TABLE `contactemp_ques`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `emp_survey`
--
ALTER TABLE `emp_survey`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q1`
--
ALTER TABLE `emp_survey_q1`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q2`
--
ALTER TABLE `emp_survey_q2`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q2_1`
--
ALTER TABLE `emp_survey_q2_1`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q3`
--
ALTER TABLE `emp_survey_q3`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q4`
--
ALTER TABLE `emp_survey_q4`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q5`
--
ALTER TABLE `emp_survey_q5`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q6`
--
ALTER TABLE `emp_survey_q6`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q7`
--
ALTER TABLE `emp_survey_q7`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q8`
--
ALTER TABLE `emp_survey_q8`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q9`
--
ALTER TABLE `emp_survey_q9`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q10`
--
ALTER TABLE `emp_survey_q10`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q11`
--
ALTER TABLE `emp_survey_q11`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q12`
--
ALTER TABLE `emp_survey_q12`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q13`
--
ALTER TABLE `emp_survey_q13`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q14`
--
ALTER TABLE `emp_survey_q14`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q15`
--
ALTER TABLE `emp_survey_q15`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q16`
--
ALTER TABLE `emp_survey_q16`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q17`
--
ALTER TABLE `emp_survey_q17`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alum_survey`
--
ALTER TABLE `alum_survey`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `alum_survey_q1`
--
ALTER TABLE `alum_survey_q1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q2`
--
ALTER TABLE `alum_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q3`
--
ALTER TABLE `alum_survey_q3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q4`
--
ALTER TABLE `alum_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q5`
--
ALTER TABLE `alum_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q6`
--
ALTER TABLE `alum_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q7`
--
ALTER TABLE `alum_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q8`
--
ALTER TABLE `alum_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q9`
--
ALTER TABLE `alum_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q10`
--
ALTER TABLE `alum_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q11`
--
ALTER TABLE `alum_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q12`
--
ALTER TABLE `alum_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q13`
--
ALTER TABLE `alum_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q14`
--
ALTER TABLE `alum_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q15`
--
ALTER TABLE `alum_survey_q15`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q16`
--
ALTER TABLE `alum_survey_q16`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q17`
--
ALTER TABLE `alum_survey_q17`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q18`
--
ALTER TABLE `alum_survey_q18`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q19`
--
ALTER TABLE `alum_survey_q19`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactemp_ques`
--
ALTER TABLE `contactemp_ques`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey`
--
ALTER TABLE `emp_survey`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q1`
--
ALTER TABLE `emp_survey_q1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q2`
--
ALTER TABLE `emp_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q2_1`
--
ALTER TABLE `emp_survey_q2_1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q3`
--
ALTER TABLE `emp_survey_q3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q4`
--
ALTER TABLE `emp_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q5`
--
ALTER TABLE `emp_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q6`
--
ALTER TABLE `emp_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q7`
--
ALTER TABLE `emp_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `emp_survey_q8`
--
ALTER TABLE `emp_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `emp_survey_q9`
--
ALTER TABLE `emp_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q10`
--
ALTER TABLE `emp_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q11`
--
ALTER TABLE `emp_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `emp_survey_q12`
--
ALTER TABLE `emp_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `emp_survey_q13`
--
ALTER TABLE `emp_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q14`
--
ALTER TABLE `emp_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q15`
--
ALTER TABLE `emp_survey_q15`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q16`
--
ALTER TABLE `emp_survey_q16`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q17`
--
ALTER TABLE `emp_survey_q17`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
