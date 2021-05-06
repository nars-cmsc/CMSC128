-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 12:50 AM
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

--
-- Dumping data for table `alum_survey`
--

INSERT INTO `alum_survey` (`answer_id`, `question_num`, `user_id`, `answer_body`) VALUES
(1, 1, 2, 'Female'),
(2, 2, 2, 'Philippines'),
(3, 3, 2, 'Very Dissatisfied'),
(4, 4, 2, 'I got a job while still in college'),
(5, 6, 2, 'Bachelor’s degree_Computer Science'),
(6, 7, 2, 'Bachelor’s degree_Computer Science'),
(7, 8, 2, 'Technicians and Associate Professionals'),
(8, 9, 2, 'No, it is not related'),
(9, 11, 2, 'No'),
(10, 12, 2, 'No experience_Something'),
(11, 13, 2, 'Very well'),
(12, 14, 2, 'Entry-level'),
(13, 15, 2, 'None at all'),
(14, 16, 2, 'Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.'),
(15, 17, 2, 'Generally satisfied'),
(16, 18, 2, 'Possess the skills and mindset to improve human life_Very well'),
(17, 18, 2, 'Commit to the freedom and welfare of all_Very well'),
(18, 18, 2, 'Demonstrate mastery of knowledge in your specific discipline_Very well'),
(19, 18, 2, 'Possess breadth of mind_Very well'),
(20, 18, 2, 'Possess strength of character_Very well'),
(21, 18, 2, 'Possess generosity of spirit_Very well'),
(22, 18, 2, 'Inclusively engage with society and the world at large_Very well'),
(23, 18, 2, 'Be mindful of the needs and capabilities of people_Very well'),
(24, 18, 2, 'Be sensitive to the challenges and opportunities of national development and global change_Very well'),
(25, 18, 2, 'Think critically_Very well'),
(26, 18, 2, 'Demonstrate discernment_Very well'),
(27, 19, 2, 'No');

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

--
-- Dumping data for table `contactemp_ques`
--

INSERT INTO `contactemp_ques` (`answer_id`, `question_num`, `user_id`, `answer_body`) VALUES
(1, 0, 2, 'No'),
(2, 0, 2, 'No'),
(3, 0, 2, 'No'),
(4, 0, 2, 'No'),
(5, 0, 5, 'No'),
(6, 0, 5, 'No'),
(7, 0, 5, 'No'),
(8, 0, 5, 'No'),
(9, 0, 21, 'No'),
(10, 0, 21, 'No'),
(11, 0, 21, 'No'),
(12, 0, 21, 'No'),
(13, 0, 22, 'Letters'),
(14, 0, 22, 'Jam'),
(15, 0, 22, 'NA'),
(16, 0, 22, 'NA');

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
(21, 'jen@gmail.com', 'ba043b8d5412de0530b66bc305051f93969e49b1ecf5fab552ceae7207a4c4254bc9b944bc01605c7fb34b0760eb8452d3aa', '$2y$10$2QwwQ4JTezO312gm7cg6nOWY2uSDis1bJnar38Aqx8Kp1o7xRg0Iy', 'zrqUxpi5', 1),
(22, 'jack@gmail.com', 'd56d55f8c4e42cde911b9751d92cbc487e4144a05ebe5fed90ee86ea8ae9aa842603aa67997b0a8aa5eba48431613207b42b', '$2y$10$2IBG3zWP0Bm3uW75x2L6I.wgmbYfw8U59PY9jWNs5ZcFwbn2038Dq', '8FZLhGVW', 1),
(23, 'jj@gmail.com', '960e6da01b983d40ad8eb88e45b9554c7cf83b7d913686a4ab9f4c0a6ebe2fac9ffe0dd28ff26ff8187f6d93ec2ff5fc101a', '$2y$10$Ki4wrS8D.mct.gcH56Kp2eJ/qt40gztEMcik7DhN1OO7HohNHdUBi', 'rIniZMB3', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alum_survey`
--
ALTER TABLE `alum_survey`
  ADD PRIMARY KEY (`answer_id`);

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contactemp_ques`
--
ALTER TABLE `contactemp_ques`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `emp_survey`
--
ALTER TABLE `emp_survey`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5986;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
