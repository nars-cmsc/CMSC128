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

-- Table structure for table `alumni survey`
--

CREATE TABLE `alumni survey` (
  `Alumni Survey` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `survey_answers`
--

CREATE TABLE `survey_answers` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` int(11) NOT NULL
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
(1, 1, 'Sex at birth:'),
(2, 1, 'In which country do you presently reside or work for most of the year (more than 6 months)? '),
(3, 1, 'Overall, how satisfied are you with your undergraduate education at UP?'),
(4, 1, 'How long after graduation were you able to get your first job?'),
(5, 1, 'Are you employed right now?'),
(6, 1, 'If you answered Yes, how would you characterize your employment?'),
(7, 1, 'If you answered No, are you looking for employment at this time?	'),
(8, 1, 'If you answered 5.a., which industry best describes your employer or occupation? Drop-down menu of the following choices'),
(9, 1, 'Select the minimum level of education required to perform your job (not necessarily your education level)'),
(10, 1, 'Select the preferred (but not required) level of education or training'),
(11, 1, 'Whether or not you are currently employed, what is your principal occupation category?'),
(12, 1, 'Is your current position related to your undergraduate field(s) of study?'),
(13, 1, 'In the order of importance, list your major job duties and the percentage of time you spend on each. Think back on the past 12 months to make sure you capture all key responsibilities. The total percentage of time spent must not exceed 100 but may be less since you are not to list all duties.'),
(14, 1, 'Do you currently work for a national or local NGO or civic organization, as a paid volunteer for more than 10 hours per week?	'),
(15, 1, 'If you answered Yes, how would you characterize this service of volunteer work?'),
(16, 1, 'Select the minimum total number of years of experience in your field that is required to do your job. Your selection may or may not equate to your personal experience level.'),
(17, 1, 'Why do you feel this level of experience is necessary to perform your job?'),
(18, 1, 'How well did UP prepare for your current career?'),
(19, 1, 'Which of the following best describes your current position?'),
(20, 1, ' How much does your current job involve supervising or managing the work of others?'),
(21, 1, 'This question measures the managerial responsibility (direct and indirect) for achieving results through people. Select the single statement that best describes your job.'),
(22, 1, 'Overall, how satisfied are you with your career thus far?'),
(23, 1, 'Based on what you know now, how well do you think your undergraduate experience at UP DMCS prepared you to…'),
(24, 1, 'Would you like to elaborate on how UP DMCS helped you acquire the competencies you needed?');

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
