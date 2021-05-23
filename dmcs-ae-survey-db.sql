-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 05:41 PM
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

--
-- Dumping data for table `alum_survey_q1`
--

INSERT INTO `alum_survey_q1` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Female', '2021-05-23'),
(2, 13, 'Female', '2021-05-23'),
(3, 14, 'Male', '2021-05-23'),
(4, 15, 'Male', '2021-05-23'),
(5, 16, 'Male', '2021-05-23'),
(6, 17, 'Female', '2021-05-23'),
(7, 18, 'Female', '2021-05-23'),
(8, 19, 'Male', '2021-05-23'),
(9, 20, 'Male', '2021-05-23'),
(10, 21, 'Female', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q2`
--

INSERT INTO `alum_survey_q2` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Arendelle', '2021-05-23'),
(2, 13, 'Gryffindor', '2021-05-23'),
(3, 14, 'Slytherin', '2021-05-23'),
(4, 15, 'Huffypuffy', '2021-05-23'),
(5, 16, 'Strawberries', '2021-05-23'),
(6, 17, 'RavencllaAaaAwWw', '2021-05-23'),
(7, 18, 'Vilaggereyy', '2021-05-23'),
(8, 19, 'Hogwarts', '2021-05-23'),
(9, 20, 'Swwwwiizzerrrlond', '2021-05-23'),
(10, 21, 'Philippines', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q3`
--

INSERT INTO `alum_survey_q3` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Very Dissatisfied', '2021-05-23'),
(2, 13, 'Generally Dissatisfied', '2021-05-23'),
(3, 14, 'Generally Satisfied', '2021-05-23'),
(4, 15, 'Very Satisfied', '2021-05-23'),
(5, 16, 'Very Dissatisfied', '2021-05-23'),
(6, 17, 'Generally Satisfied', '2021-05-23'),
(7, 18, 'Generally Dissatisfied', '2021-05-23'),
(8, 19, 'Very Satisfied', '2021-05-23'),
(9, 20, 'Generally Satisfied', '2021-05-23'),
(10, 21, 'Generally Dissatisfied', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q4`
--

INSERT INTO `alum_survey_q4` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'I got a job while still in college', '2021-05-23'),
(2, 13, '2 months or less', '2021-05-23'),
(3, 14, '3 to 6 months', '2021-05-23'),
(4, 15, '7 months to 1 year', '2021-05-23'),
(5, 16, '1 to 2 years', '2021-05-23'),
(6, 17, 'More than 2 years', '2021-05-23'),
(7, 18, 'I am not sure', '2021-05-23'),
(8, 19, 'I got a job while still in college', '2021-05-23'),
(9, 20, '3 to 6 months', '2021-05-23'),
(10, 21, '1 to 2 years', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q5`
--

CREATE TABLE `alum_survey_q5` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Employed` mediumtext NOT NULL,
  `Characterized` mediumtext NOT NULL,
  `Industry` mediumtext NOT NULL,
  `Applying` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alum_survey_q5`
--

INSERT INTO `alum_survey_q5` (`answer_id`, `user_id`, `Employed`, `Characterized`, `Industry`, `Applying`, `date_response`) VALUES
(1, 12, 'Yes', 'Full time (40 hours/week)', 'Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use', 'NA', '2021-05-23'),
(2, 13, 'Yes', 'Part time', 'Activities of International Organizations and Bodies', 'NA', '2021-05-23'),
(3, 14, 'No', 'NA', 'NA', 'No', '2021-05-23'),
(4, 15, 'Yes', 'Self-employed', 'Information Technology', 'NA', '2021-05-23'),
(5, 16, 'Yes', 'Full time (40 hours/week)', 'Professional, Scientific and Technical Activities', 'NA', '2021-05-23'),
(6, 17, 'Yes', 'Full time (40 hours/week)', 'Charooooots', 'NA', '2021-05-23'),
(7, 18, 'Yes', 'Part time', 'Mining and Quarrying', 'NA', '2021-05-23'),
(8, 19, 'Yes', 'Full time (40 hours/week)', 'Real Estate Activities', 'NA', '2021-05-23'),
(9, 20, 'No', 'NA', 'NA', 'Yes', '2021-05-23'),
(10, 21, 'No', 'NA', 'NA', 'Yes', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q6`
--

CREATE TABLE `alum_survey_q6` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Level` mediumtext NOT NULL,
  `Field` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alum_survey_q6`
--

INSERT INTO `alum_survey_q6` (`answer_id`, `user_id`, `Level`, `Field`, `date_response`) VALUES
(1, 12, 'High school', 'NA', '2021-05-23'),
(2, 13, 'Some college', 'NA', '2021-05-23'),
(3, 14, 'Associate’s degree', 'Sleeping', '2021-05-23'),
(4, 15, 'Bachelor’s degree', 'Computer Sayang', '2021-05-23'),
(5, 16, 'Master’s degree', 'And cigarettes', '2021-05-23'),
(6, 17, 'Other', 'idlihchikdc', '2021-05-23'),
(7, 18, 'High school', 'NA', '2021-05-23'),
(8, 19, 'Some college', 'NA', '2021-05-23'),
(9, 20, 'Associate’s degree', 'Xerffcv', '2021-05-23'),
(10, 21, 'Master’s degree', 'KNLSNL', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q7`
--

CREATE TABLE `alum_survey_q7` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Level` mediumtext NOT NULL,
  `Field` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alum_survey_q7`
--

INSERT INTO `alum_survey_q7` (`answer_id`, `user_id`, `Level`, `Field`, `date_response`) VALUES
(1, 12, 'High school', 'NA', '2021-05-23'),
(2, 13, 'Some college', 'NA', '2021-05-23'),
(3, 14, 'Associate’s degree', 'Sitting', '2021-05-23'),
(4, 15, 'Bachelor’s degree', 'Computer Sayang', '2021-05-23'),
(5, 16, 'Master’s degree', 'Always taste like you', '2021-05-23'),
(6, 17, 'Other', 'uhaeihsusdu', '2021-05-23'),
(7, 18, 'Master’s degree', 'Dentistry', '2021-05-23'),
(8, 19, 'Other', 'asdxsxaa', '2021-05-23'),
(9, 20, 'Master’s degree', 'Swddefr', '2021-05-23'),
(10, 21, 'High school', 'NA', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q8`
--

INSERT INTO `alum_survey_q8` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Armed Forces Occupations', '2021-05-23'),
(2, 13, 'Clerical Support Workers', '2021-05-23'),
(3, 14, 'Craft and Related Trade Workers', '2021-05-23'),
(4, 15, 'Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)', '2021-05-23'),
(5, 16, 'Managers', '2021-05-23'),
(6, 17, 'Professionals', '2021-05-23'),
(7, 18, 'Technicians and Associate Professionals', '2021-05-23'),
(8, 19, 'Professionals', '2021-05-23'),
(9, 20, 'Plant and Machine Operators, and Assemblers', '2021-05-23'),
(10, 21, 'Managers', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q9`
--

INSERT INTO `alum_survey_q9` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Yes, it is the same field as my major/s', '2021-05-23'),
(2, 13, 'Yes, it is related to my major/s', '2021-05-23'),
(3, 14, 'No, it is not related', '2021-05-23'),
(4, 15, 'Yes, it is the same field as my major/s', '2021-05-23'),
(5, 16, 'Yes, it is related to my major/s', '2021-05-23'),
(6, 17, 'Yes, it is related to my major/s', '2021-05-23'),
(7, 18, 'Yes, it is related to my major/s', '2021-05-23'),
(8, 19, 'No, it is not related', '2021-05-23'),
(9, 20, 'No, it is not related', '2021-05-23'),
(10, 21, 'Yes, it is related to my major/s', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q10`
--

CREATE TABLE `alum_survey_q10` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Job` mediumtext NOT NULL,
  `Percent` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alum_survey_q10`
--

INSERT INTO `alum_survey_q10` (`answer_id`, `user_id`, `Job`, `Percent`, `date_response`) VALUES
(1, 12, 'Qqqq', '20', '2021-05-23'),
(2, 12, 'Wwww', '10', '2021-05-23'),
(3, 12, 'Eeee', '10', '2021-05-23'),
(4, 12, 'Rrrr', '30', '2021-05-23'),
(5, 12, 'Tttt', '10', '2021-05-23'),
(6, 13, 'Ffff', '10', '2021-05-23'),
(7, 13, 'Yyyy', '20', '2021-05-23'),
(8, 13, 'Tttt', '10', '2021-05-23'),
(9, 13, 'Uuuu', '20', '2021-05-23'),
(10, 13, 'Iiii', '10', '2021-05-23'),
(11, 14, 'Zzzz', '20', '2021-05-23'),
(12, 14, 'Xxxx', '20', '2021-05-23'),
(13, 14, 'Cccc', '20', '2021-05-23'),
(14, 14, 'Vvvv', '20', '2021-05-23'),
(15, 14, 'Bbbb', '20', '2021-05-23'),
(16, 15, 'Nnnn', '10', '2021-05-23'),
(17, 15, 'Mmmm', '20', '2021-05-23'),
(18, 15, 'Llll', '10', '2021-05-23'),
(19, 15, 'Kkkk', '10', '2021-05-23'),
(20, 15, 'Jjjj', '30', '2021-05-23'),
(21, 16, 'Hhhh', '20', '2021-05-23'),
(22, 16, 'Ffff', '10', '2021-05-23'),
(23, 16, 'Dddd', '30', '2021-05-23'),
(24, 16, 'Ssss', '10', '2021-05-23'),
(25, 16, 'Aaaa', '10', '2021-05-23'),
(26, 17, 'Llll', '20', '2021-05-23'),
(27, 17, 'Kkkk', '10', '2021-05-23'),
(28, 17, 'Ssss', '20', '2021-05-23'),
(29, 17, 'Oooo', '10', '2021-05-23'),
(30, 17, 'Yyyy', '20', '2021-05-23'),
(31, 18, 'Gggg', '30', '2021-05-23'),
(32, 18, 'Aaaa', '20', '2021-05-23'),
(33, 18, 'Pppp', '10', '2021-05-23'),
(34, 18, 'Oooo', '20', '2021-05-23'),
(35, 18, 'Qqqq', '10', '2021-05-23'),
(36, 19, 'Dddd', '20', '2021-05-23'),
(37, 19, 'Ssss', '10', '2021-05-23'),
(38, 19, 'Vvvv', '20', '2021-05-23'),
(39, 19, 'Nnnn', '20', '2021-05-23'),
(40, 19, 'Mmmm', '20', '2021-05-23'),
(41, 20, 'Dddd', '20', '2021-05-23'),
(42, 20, 'Wwww', '20', '2021-05-23'),
(43, 20, 'Rrrr', '20', '2021-05-23'),
(44, 20, 'Tttt', '20', '2021-05-23'),
(45, 20, 'Qqqq', '20', '2021-05-23'),
(46, 21, 'Llll', '20', '2021-05-23'),
(47, 21, 'Mmmm', '20', '2021-05-23'),
(48, 21, 'Ssss', '10', '2021-05-23'),
(49, 21, 'Qqqq', '30', '2021-05-23'),
(50, 21, 'Tttt', '10', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q11`
--

CREATE TABLE `alum_survey_q11` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Volunteer` mediumtext NOT NULL,
  `Characterized` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alum_survey_q11`
--

INSERT INTO `alum_survey_q11` (`answer_id`, `user_id`, `Volunteer`, `Characterized`, `date_response`) VALUES
(1, 12, 'Yes', 'Full time (40 hours/week)', '2021-05-23'),
(2, 13, 'Yes', 'Part time', '2021-05-23'),
(3, 14, 'No', 'NA', '2021-05-23'),
(4, 15, '', 'NA', '2021-05-23'),
(5, 16, 'No', 'NA', '2021-05-23'),
(6, 17, 'No', 'NA', '2021-05-23'),
(7, 18, 'Yes', 'Full time (40 hours/week)', '2021-05-23'),
(8, 19, 'No', 'NA', '2021-05-23'),
(9, 20, 'Yes', 'Full time (40 hours/week)', '2021-05-23'),
(10, 21, 'No', 'NA', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q12`
--

CREATE TABLE `alum_survey_q12` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Experience` mediumtext NOT NULL,
  `Necessity` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alum_survey_q12`
--

INSERT INTO `alum_survey_q12` (`answer_id`, `user_id`, `Experience`, `Necessity`, `date_response`) VALUES
(1, 12, 'No experience', 'Qksdwed', '2021-05-23'),
(2, 13, 'Less than one (1) year', 'wdqaefnafefe', '2021-05-23'),
(3, 14, 'One (1) to three (3) years', 'Butterfliiiiesss', '2021-05-23'),
(4, 15, 'Three (3) to six (6) years', 'My youth is yours', '2021-05-23'),
(5, 16, 'More than six (6+) years', 'jaacsnklcdkjbu', '2021-05-23'),
(6, 17, 'One (1) to three (3) years', 'hfyvjyh', '2021-05-23'),
(7, 18, 'Less than one (1) year', 'Cesdrfsdvxc', '2021-05-23'),
(8, 19, 'Three (3) to six (6) years', 'aasassadsa', '2021-05-23'),
(9, 20, 'More than six (6+) years', 'fdrgergeger', '2021-05-23'),
(10, 21, 'Three (3) to six (6) years', 'adasxas', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q13`
--

INSERT INTO `alum_survey_q13` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Very Poorly', '2021-05-23'),
(2, 13, 'Less than adequately', '2021-05-23'),
(3, 14, 'More than adequately', '2021-05-23'),
(4, 15, 'Very well', '2021-05-23'),
(5, 16, 'Very Poorly', '2021-05-23'),
(6, 17, 'More than adequately', '2021-05-23'),
(7, 18, 'Very well', '2021-05-23'),
(8, 19, 'Very well', '2021-05-23'),
(9, 20, 'Less than adequately', '2021-05-23'),
(10, 21, 'Very well', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q14`
--

INSERT INTO `alum_survey_q14` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Entry-level', '2021-05-23'),
(2, 13, 'Supervisory', '2021-05-23'),
(3, 14, 'Executive level (except Chief Executive)', '2021-05-23'),
(4, 15, 'Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)', '2021-05-23'),
(5, 16, 'Entry-level', '2021-05-23'),
(6, 17, 'Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)', '2021-05-23'),
(7, 18, 'Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)', '2021-05-23'),
(8, 19, 'Executive level (except Chief Executive)', '2021-05-23'),
(9, 20, 'Supervisory', '2021-05-23'),
(10, 21, 'Executive level (except Chief Executive)', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q15`
--

INSERT INTO `alum_survey_q15` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'None at all', '2021-05-23'),
(2, 13, 'Some of my time (up to 25% of my time)', '2021-05-23'),
(3, 14, 'Half my time (50%)', '2021-05-23'),
(4, 15, 'Most of my time (75% of my time)', '2021-05-23'),
(5, 16, 'None at all', '2021-05-23'),
(6, 17, 'Half my time (50%)', '2021-05-23'),
(7, 18, 'Half my time (50%)', '2021-05-23'),
(8, 19, 'Half my time (50%)', '2021-05-23'),
(9, 20, 'Some of my time (up to 25% of my time)', '2021-05-23'),
(10, 21, 'Half my time (50%)', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q16`
--

INSERT INTO `alum_survey_q16` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'No supervisory or lead responsibilities.', '2021-05-23'),
(2, 13, 'Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.', '2021-05-23'),
(3, 14, 'Direct supervision of one or more people.', '2021-05-23'),
(4, 15, 'Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.', '2021-05-23'),
(5, 16, 'No supervisory or lead responsibilities.', '2021-05-23'),
(6, 17, 'Direct supervision of one or more people.', '2021-05-23'),
(7, 18, 'Direct supervision of one or more people.', '2021-05-23'),
(8, 19, 'Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.', '2021-05-23'),
(9, 20, 'Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.', '2021-05-23'),
(10, 21, 'No supervisory or lead responsibilities.', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q17`
--

INSERT INTO `alum_survey_q17` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Very dissatisfied ', '2021-05-23'),
(2, 13, 'Generally dissatisfied', '2021-05-23'),
(3, 14, 'Generally satisfied', '2021-05-23'),
(4, 15, 'Very satisfied', '2021-05-23'),
(5, 16, 'Very dissatisfied ', '2021-05-23'),
(6, 17, 'Generally satisfied', '2021-05-23'),
(7, 18, 'Generally satisfied', '2021-05-23'),
(8, 19, 'Generally satisfied', '2021-05-23'),
(9, 20, 'Very satisfied', '2021-05-23'),
(10, 21, 'Very dissatisfied ', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q18`
--

INSERT INTO `alum_survey_q18` (`answer_id`, `user_id`, `ques18_arr`, `answer_body`, `date_response`) VALUES
(1, 12, 'Possess the skills and mindset to improve human life', 'Very poorly', '2021-05-23'),
(2, 12, 'Commit to the freedom and welfare of all', 'Less than adequately', '2021-05-23'),
(3, 12, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-05-23'),
(4, 12, 'Possess breadth of mind', 'Very well', '2021-05-23'),
(5, 12, 'Possess strength of character', 'More than adequately', '2021-05-23'),
(6, 12, 'Possess generosity of spirit', 'Less than adequately', '2021-05-23'),
(7, 12, 'Inclusively engage with society and the world at large', 'Very poorly', '2021-05-23'),
(8, 12, 'Be mindful of the needs and capabilities of people', 'Less than adequately', '2021-05-23'),
(9, 12, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-05-23'),
(10, 12, 'Think critically', 'Very well', '2021-05-23'),
(11, 12, 'Demonstrate discernment', 'More than adequately', '2021-05-23'),
(12, 13, 'Possess the skills and mindset to improve human life', 'Less than adequately', '2021-05-23'),
(13, 13, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-05-23'),
(14, 13, 'Demonstrate mastery of knowledge in your specific discipline', 'Very well', '2021-05-23'),
(15, 13, 'Possess breadth of mind', 'More than adequately', '2021-05-23'),
(16, 13, 'Possess strength of character', 'Less than adequately', '2021-05-23'),
(17, 13, 'Possess generosity of spirit', 'Very poorly', '2021-05-23'),
(18, 13, 'Inclusively engage with society and the world at large', 'Less than adequately', '2021-05-23'),
(19, 13, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-05-23'),
(20, 13, 'Be sensitive to the challenges and opportunities of national development and global change', 'Very well', '2021-05-23'),
(21, 13, 'Think critically', 'More than adequately', '2021-05-23'),
(22, 13, 'Demonstrate discernment', 'Less than adequately', '2021-05-23'),
(23, 14, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-05-23'),
(24, 14, 'Commit to the freedom and welfare of all', 'Very well', '2021-05-23'),
(25, 14, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-05-23'),
(26, 14, 'Possess breadth of mind', 'Less than adequately', '2021-05-23'),
(27, 14, 'Possess strength of character', 'Very poorly', '2021-05-23'),
(28, 14, 'Possess generosity of spirit', 'Less than adequately', '2021-05-23'),
(29, 14, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-05-23'),
(30, 14, 'Be mindful of the needs and capabilities of people', 'Very well', '2021-05-23'),
(31, 14, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-05-23'),
(32, 14, 'Think critically', 'Less than adequately', '2021-05-23'),
(33, 14, 'Demonstrate discernment', 'Very poorly', '2021-05-23'),
(34, 15, 'Possess the skills and mindset to improve human life', 'Very well', '2021-05-23'),
(35, 15, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-05-23'),
(36, 15, 'Demonstrate mastery of knowledge in your specific discipline', 'Less than adequately', '2021-05-23'),
(37, 15, 'Possess breadth of mind', 'Very poorly', '2021-05-23'),
(38, 15, 'Possess strength of character', 'Less than adequately', '2021-05-23'),
(39, 15, 'Possess generosity of spirit', 'More than adequately', '2021-05-23'),
(40, 15, 'Inclusively engage with society and the world at large', 'Very well', '2021-05-23'),
(41, 15, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-05-23'),
(42, 15, 'Be sensitive to the challenges and opportunities of national development and global change', 'Less than adequately', '2021-05-23'),
(43, 15, 'Think critically', 'Very poorly', '2021-05-23'),
(44, 15, 'Demonstrate discernment', 'Less than adequately', '2021-05-23'),
(45, 16, 'Possess the skills and mindset to improve human life', 'Very poorly', '2021-05-23'),
(46, 16, 'Commit to the freedom and welfare of all', 'Very poorly', '2021-05-23'),
(47, 16, 'Demonstrate mastery of knowledge in your specific discipline', 'Very poorly', '2021-05-23'),
(48, 16, 'Possess breadth of mind', 'Very poorly', '2021-05-23'),
(49, 16, 'Possess strength of character', 'Very poorly', '2021-05-23'),
(50, 16, 'Possess generosity of spirit', 'Very poorly', '2021-05-23'),
(51, 16, 'Inclusively engage with society and the world at large', 'Very poorly', '2021-05-23'),
(52, 16, 'Be mindful of the needs and capabilities of people', 'Very poorly', '2021-05-23'),
(53, 16, 'Be sensitive to the challenges and opportunities of national development and global change', 'Very poorly', '2021-05-23'),
(54, 16, 'Think critically', 'Very poorly', '2021-05-23'),
(55, 16, 'Demonstrate discernment', 'Very poorly', '2021-05-23'),
(56, 17, 'Possess the skills and mindset to improve human life', 'Less than adequately', '2021-05-23'),
(57, 17, 'Commit to the freedom and welfare of all', 'Less than adequately', '2021-05-23'),
(58, 17, 'Demonstrate mastery of knowledge in your specific discipline', 'Less than adequately', '2021-05-23'),
(59, 17, 'Possess breadth of mind', 'Less than adequately', '2021-05-23'),
(60, 17, 'Possess strength of character', 'Less than adequately', '2021-05-23'),
(61, 17, 'Possess generosity of spirit', 'Less than adequately', '2021-05-23'),
(62, 17, 'Inclusively engage with society and the world at large', 'Less than adequately', '2021-05-23'),
(63, 17, 'Be mindful of the needs and capabilities of people', 'Less than adequately', '2021-05-23'),
(64, 17, 'Be sensitive to the challenges and opportunities of national development and global change', 'Less than adequately', '2021-05-23'),
(65, 17, 'Think critically', 'Less than adequately', '2021-05-23'),
(66, 17, 'Demonstrate discernment', 'Less than adequately', '2021-05-23'),
(67, 18, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-05-23'),
(68, 18, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-05-23'),
(69, 18, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-05-23'),
(70, 18, 'Possess breadth of mind', 'More than adequately', '2021-05-23'),
(71, 18, 'Possess strength of character', 'More than adequately', '2021-05-23'),
(72, 18, 'Possess generosity of spirit', 'More than adequately', '2021-05-23'),
(73, 18, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-05-23'),
(74, 18, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-05-23'),
(75, 18, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-05-23'),
(76, 18, 'Think critically', 'More than adequately', '2021-05-23'),
(77, 18, 'Demonstrate discernment', 'More than adequately', '2021-05-23'),
(78, 19, 'Possess the skills and mindset to improve human life', 'Very well', '2021-05-23'),
(79, 19, 'Commit to the freedom and welfare of all', 'Very well', '2021-05-23'),
(80, 19, 'Demonstrate mastery of knowledge in your specific discipline', 'Very well', '2021-05-23'),
(81, 19, 'Possess breadth of mind', 'Very well', '2021-05-23'),
(82, 19, 'Possess strength of character', 'Very well', '2021-05-23'),
(83, 19, 'Possess generosity of spirit', 'Very well', '2021-05-23'),
(84, 19, 'Inclusively engage with society and the world at large', 'Very well', '2021-05-23'),
(85, 19, 'Be mindful of the needs and capabilities of people', 'Very well', '2021-05-23'),
(86, 19, 'Be sensitive to the challenges and opportunities of national development and global change', 'Very well', '2021-05-23'),
(87, 19, 'Think critically', 'Very well', '2021-05-23'),
(88, 19, 'Demonstrate discernment', 'Very well', '2021-05-23'),
(89, 20, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-05-23'),
(90, 20, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-05-23'),
(91, 20, 'Demonstrate mastery of knowledge in your specific discipline', 'Less than adequately', '2021-05-23'),
(92, 20, 'Possess breadth of mind', 'Less than adequately', '2021-05-23'),
(93, 20, 'Possess strength of character', 'Very poorly', '2021-05-23'),
(94, 20, 'Possess generosity of spirit', 'Very poorly', '2021-05-23'),
(95, 20, 'Inclusively engage with society and the world at large', 'Very well', '2021-05-23'),
(96, 20, 'Be mindful of the needs and capabilities of people', 'Very well', '2021-05-23'),
(97, 20, 'Be sensitive to the challenges and opportunities of national development and global change', 'Very poorly', '2021-05-23'),
(98, 20, 'Think critically', 'Very poorly', '2021-05-23'),
(99, 20, 'Demonstrate discernment', 'Very well', '2021-05-23'),
(100, 21, 'Possess the skills and mindset to improve human life', 'Very poorly', '2021-05-23'),
(101, 21, 'Commit to the freedom and welfare of all', 'Very poorly', '2021-05-23'),
(102, 21, 'Demonstrate mastery of knowledge in your specific discipline', 'Very well', '2021-05-23'),
(103, 21, 'Possess breadth of mind', 'Very well', '2021-05-23'),
(104, 21, 'Possess strength of character', 'More than adequately', '2021-05-23'),
(105, 21, 'Possess generosity of spirit', 'More than adequately', '2021-05-23'),
(106, 21, 'Inclusively engage with society and the world at large', 'Less than adequately', '2021-05-23'),
(107, 21, 'Be mindful of the needs and capabilities of people', 'Less than adequately', '2021-05-23'),
(108, 21, 'Be sensitive to the challenges and opportunities of national development and global change', 'Very poorly', '2021-05-23'),
(109, 21, 'Think critically', 'Very poorly', '2021-05-23'),
(110, 21, 'Demonstrate discernment', 'Less than adequately', '2021-05-23');

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

--
-- Dumping data for table `alum_survey_q19`
--

INSERT INTO `alum_survey_q19` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'eaasdadjnfdankcda', '2021-05-23'),
(2, 13, 'Into the unknooooown', '2021-05-23'),
(3, 14, 'No', '2021-05-23'),
(4, 15, 'Trippin on skies ', '2021-05-23'),
(5, 16, 'sjnnrksiljfifd', '2021-05-23'),
(6, 17, 'No', '2021-05-23'),
(7, 18, 'Bcksbhxjbkacd', '2021-05-23'),
(8, 19, 'No', '2021-05-23'),
(9, 20, 'No', '2021-05-23'),
(10, 21, 'sxaxsxasxasx', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `contactemp_ques`
--

CREATE TABLE `contactemp_ques` (
  `answer_id` int(11) NOT NULL,
  `contact_info_ques` varchar(20) NOT NULL,
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
(2, 'jane@gmail.com', '5e6a6d87aeb4c389a1361cd463856eaf6466cefd82bae5408a94e05d337f319f49e38ccda424e0c1b7e1e376ea6a7e8becc3', '$2y$10$HK2Ellp9/Mw89bckEg9PbeJFwComfd5.4BQjcHAkqRs3Aei.lBbAi', '12345', 1, '2021-05-20 09:51:01', '2021-05-23 16:05:17'),
(3, 'john@gmail.com', '8478bfb97840a79d6e2ed2b61d8977487a72d685597ed4fd8054cfbbbd833940abf39322c47692ea321d2f85cbd4a3ba5163', '$2y$10$lQOQtTfN4Avsbuy8ROlUOOY.qSr2rz49GSYF..QNCCd2rsJ7bZlLG', '12345', 2, '2021-05-20 09:51:01', '2021-05-23 16:05:45'),
(4, 'admin@gmail.com', 'bbf073a951128bc7beff931d97845715e08ff3744445f6cd8324d2565f4c32f65c31262cdc54e5abe022e499f34a2248504b', '$2y$10$e45H4/zzpxHEKiEdqPK02eknJKZyXTVGScKHRATLBF5.W8km4vUMy', 'admin', 0, '2021-05-20 09:51:01', '2021-05-23 21:27:17'),
(5, 'juan@gmail.com', '7c61c8b92cfeb880d8d99b58533e324c07cc461d3e573b17369f2a377ef1f2dbb47629ea4b1511290a91319a6d5f7944cb78', '$2y$10$MiSINz5TurNhGjk0sIbzKu9eaOepd9WkQ0XD/uw3j9hryuTtZYuke', '12345', 3, '2021-05-20 09:51:01', '2021-05-21 09:04:27'),
(6, 'jen@gmail.com', 'e81e1502f327062b08945aa5be675c4488af8a411baedd922657ef346d1e73dee7aa19618a4572c0e898107677eeb64f72a8', '$2y$10$qTvg/EBRTtcpi.aHX5tFyegP/C3BO.b.y3HAvt.herwmej3URnK.q', 'ZDxyt3kL', 2, '2021-05-21 06:43:37', '2021-05-21 06:50:57'),
(7, 'admin2@mail.com', '26c1731abfdaa3d0c9efe3a99af10d1de301119324548f3707149281a3eb21ca1517321df1945b15de4d1e8eddf454a5875d', '$2y$10$nCAYW6LBthx9kBH8ropAreufnByt/O6AC02iMDAUHCqCaByN2WG.G', 'HE1nKkNg', 0, '2021-05-21 06:44:13', '2021-05-21 06:44:13'),
(8, 'jiji@mail.com', 'acb0d136743deda5472f6d450f2576bd4827af42b55b86c7a74326ca1bc1e1ef413354ff3f91914faeea31c3c49be91d24b5', '$2y$10$/obFaBBGMHAq.mv2xSgMUuSn23a2rFhfAKX3bxrfU45VchTzTlX2a', '15VkWCFg', 3, '2021-05-21 06:44:46', '2021-05-21 09:07:54'),
(9, 'jj@mail.com', '7e514e8836b1af412dfbbc5723b09f9d9fada2124e9790f369006eeb8459c5b0776cd8511f00052363889f56690c9bb7abc5', '$2y$10$yo8YoqxoQje3FAYYAFX8hOEiyynwqaPf0iTvo.AfrMuum7aZDFsAK', '72bD8ekW', 1, '2021-05-21 06:45:03', '2021-05-21 06:45:03'),
(10, 'jon@mail.com', 'a4a36353b3de1d0c67830c919c322eb3c5ac8b3314c7a5c28bf78b2da17ca83373dfdc81e2c6ace045a6554ef8b6f321658a', '$2y$10$XPMpNskyE4DW86y/fIzAMO5ZjpRjvWI30JWFRrLTYPwSbmcJN5Cum', 'xVgyLp3w', 2, '2021-05-21 06:45:18', '2021-05-21 09:10:43'),
(12, 'alumni_uno@gmail.com', '8d4a2fd0ccc964b32712bebc38abfe2fb2ca539720799964b9713043bf65acf971abb7a0065a68e1a7387e8cfc906f9eae36', '$2y$10$C/p1SEuPT/uw/6tro2xlLOBle/SGsFj5ZOggkJrKGh3.iw2AbE162', 'alumni1', 1, '2021-05-23 21:33:51', '2021-05-23 22:22:15'),
(13, 'alumni_dos@gmail.com', 'caf0047c10fc6ef99d9ad6be4c752219b69080eb78fd04f1adb3d67962cf41ad8315d13310aa0627aa489fe6b1e2de33bc28', '$2y$10$y2bs0mR.OjrbiLAMYNSc0ePTuo0mrTWdJc5nx2ZmeQRL8LSS.RLNa', 'alumni2', 1, '2021-05-23 21:34:55', '2021-05-23 22:26:19'),
(14, 'alumni_tres@gmail.com', '3045a6ce643cea3dbe55e4c7427de53ec9a7393d2ed75b1c9ff2f6b6aac79c9cb1ca74d862f9df14d50be2476f539fe922a3', '$2y$10$ru6YwKWZzjaJ0fWoMIUB.OBjLYePTL94eIlj/Bx/jo4F3LLX/Nanm', 'alumni3', 1, '2021-05-23 21:35:17', '2021-05-23 22:28:37'),
(15, 'alumni_cuatro@gmail.com', '929124360a3db51dcc83ae4a5849fd1e6c2012fb5aa6f04b1facaeac75332b1682cde7a29ec6596fc528ffc8ecc894dd84ee', '$2y$10$hEEN8gWPSjmGmEHd0nW75.ko7qJOdE0cHD/ZnLyQBngLodlPE7pDm', 'alumni4', 1, '2021-05-23 21:35:39', '2021-05-23 22:30:39'),
(16, 'alumni_cinco@gmail.com', '58cdc262d348c8f295ad5612ad60b8438d2b53df60b37e03e7d01b5f1bf94c81516ae5c2fa10aec7f33e48ea567cde4684c5', '$2y$10$mYyhrJa4iZ.MDDRA/bu70eDpRIUOm1xzLta1HYfhFIO4CuKTEW81m', 'alumni5', 1, '2021-05-23 21:36:03', '2021-05-23 22:35:24'),
(17, 'alumni_seis@gmail.com', '8ad66622d7555db7361c364dc553abbabd7914dff7e929782a0e172d23f27ced737c741e6e463fe147161fb8777e8840cb09', '$2y$10$zDofRdoe/binIk8nGTUsQ.gaKb3L3p/ps9WHGJIIVaU0aYswYI6u6', 'alumni6', 1, '2021-05-23 21:36:20', '2021-05-23 22:38:03'),
(18, 'alumni_siete@gmail.com', 'c18c1e1c100d836156e36423172c0efb5b9b3a156d9b7eea72b4c87329cedff9d25e8425067285182858c5992caacfe09349', '$2y$10$tUwflgCzuxLdeJ42XxHwcuZn8bu7HFLz2VobDz8RwhLkkHo8/LIc6', 'alumni7', 1, '2021-05-23 21:36:46', '2021-05-23 22:59:56'),
(19, 'alumni_ocho@gmail.com', 'a2ca6b09a219e57c2ec09bcd45067df216264cd85eec9ee8e4fa3094af33db3d022cb452e81b65e515931a8990095718f0a7', '$2y$10$SWFDsk3zVD417SrEYUGlzuA8pjI2XKaUu8BfYDStqhzuaw9BLlBlm', 'alumni8', 1, '2021-05-23 21:37:37', '2021-05-23 23:08:49'),
(20, 'alumni_nueve@gmail.com', 'd5d2626f1db74a2cd200bb8deed29268d7f7de61404eeca9283f3b11631ab578ecc77affdf790959bae04eb91ac29742fd72', '$2y$10$ovb1HldVUUFBsSDzxBRiBOpGXzsyH3G2ZQvrNvSz0qC8G/sIE0HZq', 'alumni9', 1, '2021-05-23 21:38:05', '2021-05-23 23:11:48'),
(21, 'alumni_diez@gmail.com', '49904e95686861d4462b7acf2fa104d8db8a12217b69f095b4d387d4a7bf6fc48ada97d45de3dbb06eb06ae9d18a65d5edd1', '$2y$10$/CXlyrCics8.1D45t3o6D.IqS8oFGa9IbYfesQyMt8ZtzyhaHAWcC', 'alumni10', 1, '2021-05-23 21:38:26', '2021-05-23 23:39:29'),
(24, 'employer_uno@gmail.com', 'ccf7c5c792535fc3f932b76aad54baf9103a9ef952bb4b67b89f9c93fdca504bc324fb5c899c32aff9ef4f1262c7598b6e5a', '$2y$10$.nyv1dRDglYBuZo7LrObYe/3E/n0YMPMNWEYS7hB5.2NvNrLhEdhW', 'emp1', 2, '2021-05-23 21:40:12', '2021-05-23 21:40:12'),
(25, 'employer_dos@gmail.com', 'bc443931cf2dce4706ae4b22fbcc93ee95639ad5625366d2dd29e228d41869db171c75f29cf8347b0944a582b0b8f9992dd1', '$2y$10$RJkBUzsFlPQv/uDuDj24zu0wHGWJHLjEvZSoAQGdX78lXSI6MF7HO', 'emp2', 2, '2021-05-23 21:40:39', '2021-05-23 21:40:39'),
(26, 'employer_tres@gmail.com', '242b46ccc38769507fbd36ef52b8297d5344ecd93a7b509bc1bb4eaad977e9d1414bb26315cb4da1d8838cc552b80fb38e61', '$2y$10$JaPr5fe0ZRTsQStJVvOMV.bhqst9.Vx/J9vm49.XjHXkEKb0ZkCOG', 'emp3', 2, '2021-05-23 21:40:56', '2021-05-23 21:40:56'),
(27, 'employer_cuatro@gmail.com', '2067593993e9a1d56b30f34f97fe11b1b2535f44bab2884032345fc440cfaf6f10c955e0d5f6b5d73c723829efa1932dc340', '$2y$10$VODjPDxkYKdNEQhe03fRtOphqAgE3E2gbrxOZY5rdJ69S5psZgSRy', 'emp4', 2, '2021-05-23 21:41:13', '2021-05-23 21:41:13'),
(28, 'employer_cinco@gmail.com', '1388827c75ecdc6eccec45f16d559b55bd41b059a3511a1c1021134a7754469ec669c5f3282bedb60b338a0092fa0ec12687', '$2y$10$kCwtQI0/OPEsmZat3WI4re9SIaqrgvJ1miZBRf8cCFYbg07/L1E5W', 'emp5', 2, '2021-05-23 21:42:56', '2021-05-23 21:42:56'),
(29, 'employer_seis@gmail.com', '7fe276fc33223b4660cb3a185780db9750f981afa13f52c849fbdca27e6cf2c7b6819ab8b85a399831bd43651c29c4f427b7', '$2y$10$.ICdv7u11bYRkebXGzrhEep5B/4NKVKHOknanHIqqlevql/tWL6y2', 'emp6', 2, '2021-05-23 21:43:22', '2021-05-23 21:43:22'),
(31, 'employer_siete@gmail.com', 'd4c2065311c6c9a46b68f0862f999b0b00bee75fb52b9cc1351a53929067187fc1e40b9e976d86ab294bd1b2936da537ebac', '$2y$10$34d2YeXfdOpaAJOvLqwX/OfksUl21nILQFDp2gr4xx41JUB9KbCZe', 'emp7', 2, '2021-05-23 21:44:26', '2021-05-23 21:44:26'),
(32, 'employer_ocho@gmail.com', 'e13be7b69f4d2de928b00ce707f639758fac95b6dfe59491d0823317ef91ef933449f29953259d866fdf52eebaee4460e7a6', '$2y$10$zK563wUsbOiVoKU7rkpMs.F/GN1eB6GJuTn90ftGa8W0bkmSLxNgu', 'emp8', 2, '2021-05-23 21:44:49', '2021-05-23 21:44:49'),
(33, 'employer_nueve@gmail.com', 'da5646599de973b0868c4a7c4e83a38aa57d0c5959d7d787707e9e636178316fe66c1ab75e430d6755ea72da2772bd97c906', '$2y$10$7MS3eTmw9liv/2UYBORiMeLWR35RzaQT2/GszYyThUUb8319qlkS2', 'emp9', 2, '2021-05-23 21:45:14', '2021-05-23 21:45:14'),
(34, 'employer_diez@gmail.com', 'a78349451bf5637c2a3c5da4a5182c18ce4b0a80c7aec670ba4cfee4354dc35ff328680659db718e106413a558eb254703e9', '$2y$10$h1fuD0NPsOr2gxXdl6tVU.wE1mxuc1zwu6Eaa4kK0X9cv5gZVcvk6', 'emp10', 2, '2021-05-23 21:45:49', '2021-05-23 21:45:49');

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q2`
--
ALTER TABLE `alum_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q3`
--
ALTER TABLE `alum_survey_q3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q4`
--
ALTER TABLE `alum_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q5`
--
ALTER TABLE `alum_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q6`
--
ALTER TABLE `alum_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q7`
--
ALTER TABLE `alum_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q8`
--
ALTER TABLE `alum_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q9`
--
ALTER TABLE `alum_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q10`
--
ALTER TABLE `alum_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `alum_survey_q11`
--
ALTER TABLE `alum_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q12`
--
ALTER TABLE `alum_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q13`
--
ALTER TABLE `alum_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q14`
--
ALTER TABLE `alum_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q15`
--
ALTER TABLE `alum_survey_q15`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q16`
--
ALTER TABLE `alum_survey_q16`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q17`
--
ALTER TABLE `alum_survey_q17`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `alum_survey_q18`
--
ALTER TABLE `alum_survey_q18`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `alum_survey_q19`
--
ALTER TABLE `alum_survey_q19`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contactemp_ques`
--
ALTER TABLE `contactemp_ques`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q4`
--
ALTER TABLE `emp_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q5`
--
ALTER TABLE `emp_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q6`
--
ALTER TABLE `emp_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q7`
--
ALTER TABLE `emp_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q8`
--
ALTER TABLE `emp_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q9`
--
ALTER TABLE `emp_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q10`
--
ALTER TABLE `emp_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q11`
--
ALTER TABLE `emp_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q12`
--
ALTER TABLE `emp_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q13`
--
ALTER TABLE `emp_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q14`
--
ALTER TABLE `emp_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
