-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 06:23 PM
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
-- Database: `dmcs-ae-survey-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey`
--

CREATE TABLE `emp_survey` (
  `answer_id` int(11) NOT NULL,
  `question_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey`
--

INSERT INTO `emp_survey` (`answer_id`, `question_num`, `user_id`, `answer_body`) VALUES
(5847, 1, 3, 'private'),
(5848, 2, 3, 'philippines'),
(5849, 3, 3, 'Construction'),
(5850, 4, 3, 'Supervisory – Director/Managing Director/Supervisor'),
(5851, 5, 3, '20'),
(5852, 6, 3, 'Strongly Agree'),
(5853, 7, 3, 'Reading Comprehension_Very Important'),
(5854, 7, 3, 'Active Listening_Very Important'),
(5855, 7, 3, 'Writing Skills_Very Important'),
(5856, 7, 3, 'Verbal Communication_Very Important'),
(5857, 7, 3, 'Mathematics Skills_Very Important'),
(5858, 7, 3, 'Scientific Literacy_Very Important'),
(5859, 7, 3, 'Digital Literacy_Very Important'),
(5860, 7, 3, 'Critical Thinking_Very Important'),
(5861, 7, 3, 'Participatory Learning_Very Important'),
(5862, 7, 3, 'Creative and Innovation_Very Important'),
(5863, 7, 3, 'Leadership Skills_Very Important'),
(5864, 7, 3, 'Social Awareness_Very Important'),
(5865, 7, 3, 'Service Orientation_Very Important'),
(5866, 7, 3, 'Time Management_Very Important'),
(5867, 7, 3, 'Complex Problem Solving Skills_Very Important'),
(5868, 7, 3, 'Judgment and Decision Making_Very Important'),
(5869, 7, 3, 'Systems Analysis and Evaluation_Very Important'),
(5870, 8, 3, 'Reading Comprehension_Satisfied'),
(5871, 8, 3, 'Active Listening_Very Satisfied'),
(5872, 8, 3, 'Writing Skills_Very Satisfied'),
(5873, 8, 3, 'Verbal Communication_Satisfied'),
(5874, 8, 3, 'Mathematics Skills_Very Satisfied'),
(5875, 8, 3, 'Scientific Literacy_Very Satisfied'),
(5876, 8, 3, 'Digital Literacy_Very Satisfied'),
(5877, 8, 3, 'Critical Thinking_Very Satisfied'),
(5878, 8, 3, 'Participatory Learning_Very Satisfied'),
(5879, 8, 3, 'Creative and Innovation_Very Satisfied'),
(5880, 8, 3, 'Leadership Skills_Very Satisfied'),
(5881, 8, 3, 'Social Awareness_Very Satisfied'),
(5882, 8, 3, 'Service Orientation_Very Satisfied'),
(5883, 8, 3, 'Time Management_Very Satisfied'),
(5884, 8, 3, 'Complex Problem Solving Skills_Very Satisfied'),
(5885, 8, 3, 'Judgment and Decision Making_Very Satisfied'),
(5886, 8, 3, 'Systems Analysis and Evaluation_Very Satisfied'),
(5887, 9, 3, 'Very Likely'),
(5888, 10, 3, 'Very Likely'),
(5889, 11, 3, 'Willing to undergo training and/or further education_Very Important'),
(5890, 11, 3, 'Has strong and professional work ethic_Very Important'),
(5891, 11, 3, 'Willing to share knowledge and expertise within the company and/or community_Very Important'),
(5892, 11, 3, 'Willing and has a positive attitude towards working with others_Very Important'),
(5893, 11, 3, 'Is able to learn quickly the basic company operations_Very Important'),
(5894, 11, 3, 'Is able to provide solutions and contribute to the growth of the company_Very Important'),
(5895, 11, 3, 'Is able to master company operations_Very Important'),
(5896, 11, 3, 'Effective in both oral and written communication_Very Important'),
(5897, 11, 3, 'Computer and Technical Literate_Very Important'),
(5898, 11, 3, 'Effective and efficient in accomplishing tasks_Very Important'),
(5899, 11, 3, 'Able to provide innovative ideas to the company_Very Important'),
(5900, 12, 3, 'Willing to undergo training and/or further education_Very Satisfied'),
(5901, 12, 3, 'Has strong and professional work ethic_Very Satisfied'),
(5902, 12, 3, 'Willing to share knowledge and expertise within the company and/or community_Very Satisfied'),
(5903, 12, 3, 'Willing and has a positive attitude towards working with others_Very Satisfied'),
(5904, 12, 3, 'Is able to learn quickly the basic company operations_Very Satisfied'),
(5905, 12, 3, 'Is able to provide solutions and contribute to the growth of the company_Very Satisfied'),
(5906, 12, 3, 'Is able to master company operations_Very Satisfied'),
(5907, 12, 3, 'Effective in both oral and written communication_Very Satisfied'),
(5908, 12, 3, 'Computer and Technical Literate_Very Satisfied'),
(5909, 12, 3, 'Effective and efficient in accomplishing tasks_Very Satisfied'),
(5910, 12, 3, 'Able to provide innovative ideas to the company_Very Satisfied'),
(5911, 13, 3, 'Include practical experience as part of the academic programs; Include sector specific job placements as an integral part of the degree program; Provide better post-graduation support (facilitate relations between graduates and companies/organizations)'),
(5912, 14, 3, 'Important'),
(5913, 15, 3, 'No'),
(5914, 16, 3, 'No'),
(5915, 17, 3, 'something'),
(5916, 1, 5, 'other_Semi private'),
(5917, 2, 5, 'abroad'),
(5918, 2, 5, 'Africa_Northern Africa'),
(5919, 3, 5, 'Professional, Scientific and Technical Activities'),
(5920, 4, 5, 'Rank and file'),
(5921, 5, 5, '20'),
(5922, 6, 5, 'Strongly Disagree'),
(5923, 7, 5, 'Reading Comprehension_Important'),
(5924, 7, 5, 'Active Listening_Important'),
(5925, 7, 5, 'Writing Skills_Important'),
(5926, 7, 5, 'Verbal Communication_Important'),
(5927, 7, 5, 'Mathematics Skills_Important'),
(5928, 7, 5, 'Scientific Literacy_Important'),
(5929, 7, 5, 'Digital Literacy_Important'),
(5930, 7, 5, 'Critical Thinking_Important'),
(5931, 7, 5, 'Participatory Learning_Important'),
(5932, 7, 5, 'Creative and Innovation_Important'),
(5933, 7, 5, 'Leadership Skills_Important'),
(5934, 7, 5, 'Social Awareness_Important'),
(5935, 7, 5, 'Service Orientation_Important'),
(5936, 7, 5, 'Time Management_Important'),
(5937, 7, 5, 'Complex Problem Solving Skills_Important'),
(5938, 7, 5, 'Judgment and Decision Making_Important'),
(5939, 7, 5, 'Systems Analysis and Evaluation_Important'),
(5940, 8, 5, 'Reading Comprehension_Satisfied'),
(5941, 8, 5, 'Active Listening_Satisfied'),
(5942, 8, 5, 'Writing Skills_Satisfied'),
(5943, 8, 5, 'Verbal Communication_Satisfied'),
(5944, 8, 5, 'Mathematics Skills_Satisfied'),
(5945, 8, 5, 'Scientific Literacy_Satisfied'),
(5946, 8, 5, 'Digital Literacy_Satisfied'),
(5947, 8, 5, 'Critical Thinking_Satisfied'),
(5948, 8, 5, 'Participatory Learning_Satisfied'),
(5949, 8, 5, 'Creative and Innovation_Satisfied'),
(5950, 8, 5, 'Leadership Skills_Satisfied'),
(5951, 8, 5, 'Social Awareness_Satisfied'),
(5952, 8, 5, 'Service Orientation_Satisfied'),
(5953, 8, 5, 'Time Management_Satisfied'),
(5954, 8, 5, 'Complex Problem Solving Skills_Satisfied'),
(5955, 8, 5, 'Judgment and Decision Making_Satisfied'),
(5956, 8, 5, 'Systems Analysis and Evaluation_Satisfied'),
(5957, 9, 5, 'Very Likely'),
(5958, 10, 5, 'Very Likely'),
(5959, 11, 5, 'Willing to undergo training and/or further education_Important'),
(5960, 11, 5, 'Has strong and professional work ethic_Important'),
(5961, 11, 5, 'Willing to share knowledge and expertise within the company and/or community_Very Important'),
(5962, 11, 5, 'Willing and has a positive attitude towards working with others_Very Important'),
(5963, 11, 5, 'Is able to learn quickly the basic company operations_Very Important'),
(5964, 11, 5, 'Is able to provide solutions and contribute to the growth of the company_Very Important'),
(5965, 11, 5, 'Is able to master company operations_Very Important'),
(5966, 11, 5, 'Effective in both oral and written communication_Very Important'),
(5967, 11, 5, 'Computer and Technical Literate_Very Important'),
(5968, 11, 5, 'Effective and efficient in accomplishing tasks_Very Important'),
(5969, 11, 5, 'Able to provide innovative ideas to the company_Very Important'),
(5970, 12, 5, 'Willing to undergo training and/or further education_Unsatisfied'),
(5971, 12, 5, 'Has strong and professional work ethic_Satisfied'),
(5972, 12, 5, 'Willing to share knowledge and expertise within the company and/or community_Satisfied'),
(5973, 12, 5, 'Willing and has a positive attitude towards working with others_Unsatisfied'),
(5974, 12, 5, 'Is able to learn quickly the basic company operations_Unsatisfied'),
(5975, 12, 5, 'Is able to provide solutions and contribute to the growth of the company_Satisfied'),
(5976, 12, 5, 'Is able to master company operations_Unsatisfied'),
(5977, 12, 5, 'Effective in both oral and written communication_Satisfied'),
(5978, 12, 5, 'Computer and Technical Literate_Unsatisfied'),
(5979, 12, 5, 'Effective and efficient in accomplishing tasks_Satisfied'),
(5980, 12, 5, 'Able to provide innovative ideas to the company_Unsatisfied'),
(5981, 13, 5, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)'),
(5982, 14, 5, 'Unimportant'),
(5983, 15, 5, 'No'),
(5984, 16, 5, 'i dont know'),
(5985, 17, 5, 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_survey`
--
ALTER TABLE `emp_survey`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_survey`
--
ALTER TABLE `emp_survey`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5986;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
