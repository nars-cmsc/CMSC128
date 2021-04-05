-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 10:54 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmcs_survey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` mediumint(9) NOT NULL,
  `survey_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `survey_name`) VALUES
(1, 'Employer Satisfaction Survey');

-- --------------------------------------------------------

--
-- Table structure for table `survey_answers`
--

CREATE TABLE `survey_answers` (
  `answer_id` mediumint(9) NOT NULL,
  `question_id` mediumint(9) NOT NULL,
  `user_id` mediumint(9) NOT NULL,
  `answer_body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE `survey_questions` (
  `question_id` mediumint(9) NOT NULL,
  `survey_id` mediumint(9) NOT NULL,
  `question_body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey_questions`
--

INSERT INTO `survey_questions` (`question_id`, `survey_id`, `question_body`) VALUES
(1, 1, 'Which sector of economy does your company/organization belong to?'),
(2, 1, 'Where is your company/organization located?'),
(3, 1, 'If you answered “Abroad”, please specify the region and sub-region based on the United Nations Geographic Regions:'),
(4, 1, 'Which industry and business does your company/organization belong to?'),
(5, 1, 'What is your position in your company/organization?'),
(6, 1, 'How many UP graduates are employed in your company/organization?'),
(7, 1, 'How much do you agree or disagree with this statement: “UP graduates recruited in the last three to five years have the skills to work in my company/organization.”?'),
(8, 1, 'Rate the importance of each skill when hiring new staff. Then rate your satisfaction on how well these are demonstrated by your staff who are UP graduates.'),
(9, 1, 'Based on your experience with the staff, how LIKELY are you to hire other graduates of UP?'),
(10, 1, 'Based on your experience with the staff how likely are you going to keep the UP graduates in your company/organization?'),
(11, 1, 'Rate the importance of each item to the successful performance of the job for which your staff, who are UP graduates, were hired. Then, rate your satisfaction on how well these are demonstrated.'),
(12, 1, 'Which actions should UP take in order to improve the skill and competency set of its graduates? Check all that apply.'),
(13, 1, 'How important is UP cooperation for your company/organization? Please rate the importance of cooperating with UP in the design of curricula and study programs.'),
(14, 1, 'Do you have any other comments or suggestions as to how UP can improve the skill and competency set of its graduates? (Write \"None\" if you don\'t)'),
(15, 1, 'If any, what are specific complaints about the graduates? (Write \"None\" if you don\'t)'),
(16, 1, 'Are specific strengths of the graduates appreciated? If yes, what are these strengths? (Write \"None\" if there is none)'),
(17, 1, 'Would you like to elaborate on any of your answers/ratings above? Please indicate the numbers or items you are discussing. (Write \"No\" if you don\'t want to elaborate)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(9) NOT NULL,
  `user_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`) VALUES
(1, 'jane');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`);

--
-- Indexes for table `survey_answers`
--
ALTER TABLE `survey_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `survey_questions`
--
ALTER TABLE `survey_questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `survey_id` (`survey_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `survey_answers`
--
ALTER TABLE `survey_answers`
  MODIFY `answer_id` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey_questions`
--
ALTER TABLE `survey_questions`
  MODIFY `question_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
