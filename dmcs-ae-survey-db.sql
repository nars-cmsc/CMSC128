-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 09:39 PM
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
(5915, 17, 3, 'something');

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
  `role_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `token`, `password`, `pass`, `role_id`) VALUES
(2, 'jane@gmail.com', '5e6a6d87aeb4c389a1361cd463856eaf6466cefd82bae5408a94e05d337f319f49e38ccda424e0c1b7e1e376ea6a7e8becc3', '$2y$10$HK2Ellp9/Mw89bckEg9PbeJFwComfd5.4BQjcHAkqRs3Aei.lBbAi', '12345', 1),
(3, 'john@gmail.com', '8478bfb97840a79d6e2ed2b61d8977487a72d685597ed4fd8054cfbbbd833940abf39322c47692ea321d2f85cbd4a3ba5163', '$2y$10$lQOQtTfN4Avsbuy8ROlUOOY.qSr2rz49GSYF..QNCCd2rsJ7bZlLG', '12345', 2),
(4, 'admin@gmail.com', 'bbf073a951128bc7beff931d97845715e08ff3744445f6cd8324d2565f4c32f65c31262cdc54e5abe022e499f34a2248504b', '$2y$10$e45H4/zzpxHEKiEdqPK02eknJKZyXTVGScKHRATLBF5.W8km4vUMy', 'admin', 0),
(5, 'juan@gmail.com', '7c61c8b92cfeb880d8d99b58533e324c07cc461d3e573b17369f2a377ef1f2dbb47629ea4b1511290a91319a6d5f7944cb78', '$2y$10$MiSINz5TurNhGjk0sIbzKu9eaOepd9WkQ0XD/uw3j9hryuTtZYuke', '12345', 3),
(19, 'jen@gmail.com', 'dc336e9090361954f957474bddcccf92dddf0803e981d4ee1c5ef1eec55d522879029272121b17ef55ad5854b372a53aba49', '$2y$10$Rm11WtseEvCDrcE3jTUcI.BbuafzRBzIv70Zr9xTnXH/VzylUQphy', 'h438nerZ', 1),
(20, 'jeff@yahoo.com', '40a8a6ed8135a1ad73ccea596aac8b0258bfacf790b98208eeb3730c00928e25cc7b337bfadd47e95fb73b5f0dffa5da1cc0', '$2y$10$Qj6VMpsMpp1LGsOXarbIA.iI9aPB8dwjzic1w9mxMMwFbBIU3QaYO', 'SRjFUEhn', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alum_survey`
--
ALTER TABLE `alum_survey`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey`
--
ALTER TABLE `emp_survey`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey`
--
ALTER TABLE `emp_survey`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5916;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alum_survey`
--
ALTER TABLE `alum_survey`
  ADD CONSTRAINT `alum_survey_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
