-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 12:42 PM
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
(2, 'jane@gmail.com', '5e6a6d87aeb4c389a1361cd463856eaf6466cefd82bae5408a94e05d337f319f49e38ccda424e0c1b7e1e376ea6a7e8becc3', '$2y$10$HK2Ellp9/Mw89bckEg9PbeJFwComfd5.4BQjcHAkqRs3Aei.lBbAi', '12345', 1, '2021-05-20 09:51:01', '2021-05-20 09:24:02'),
(3, 'john@gmail.com', '8478bfb97840a79d6e2ed2b61d8977487a72d685597ed4fd8054cfbbbd833940abf39322c47692ea321d2f85cbd4a3ba5163', '$2y$10$lQOQtTfN4Avsbuy8ROlUOOY.qSr2rz49GSYF..QNCCd2rsJ7bZlLG', '12345', 2, '2021-05-20 09:51:01', '2021-05-20 18:26:21'),
(4, 'admin@gmail.com', 'bbf073a951128bc7beff931d97845715e08ff3744445f6cd8324d2565f4c32f65c31262cdc54e5abe022e499f34a2248504b', '$2y$10$e45H4/zzpxHEKiEdqPK02eknJKZyXTVGScKHRATLBF5.W8km4vUMy', 'admin', 0, '2021-05-20 09:51:01', '2021-05-20 17:10:28'),
(5, 'juan@gmail.com', '7c61c8b92cfeb880d8d99b58533e324c07cc461d3e573b17369f2a377ef1f2dbb47629ea4b1511290a91319a6d5f7944cb78', '$2y$10$MiSINz5TurNhGjk0sIbzKu9eaOepd9WkQ0XD/uw3j9hryuTtZYuke', '12345', 3, '2021-05-20 09:51:01', '2021-05-20 18:02:05'),
(21, 'jen@gmail.com', 'ba043b8d5412de0530b66bc305051f93969e49b1ecf5fab552ceae7207a4c4254bc9b944bc01605c7fb34b0760eb8452d3aa', '$2y$10$2QwwQ4JTezO312gm7cg6nOWY2uSDis1bJnar38Aqx8Kp1o7xRg0Iy', 'zrqUxpi5', 1, '2021-05-20 09:51:01', '2021-05-20 09:14:19'),
(22, 'jack@gmail.com', 'd56d55f8c4e42cde911b9751d92cbc487e4144a05ebe5fed90ee86ea8ae9aa842603aa67997b0a8aa5eba48431613207b42b', '$2y$10$2IBG3zWP0Bm3uW75x2L6I.wgmbYfw8U59PY9jWNs5ZcFwbn2038Dq', '8FZLhGVW', 1, '2021-05-20 09:51:01', '2021-05-20 09:14:19'),
(26, 'alum@mail.com', '91a4e14ebad7110bd7cffb26609e84dc458da2faf370ffd34bee103ba12f58b7b14651a57ddb0dc3276cfc66c5e144659505', '$2y$10$m/zXL77DQ1SJHCB7JzEdMuZtoH/J22/b7iWmxZG3J3NIxuMJtJqne', 'h6oqsVpy', 1, '2021-05-20 09:51:39', '2021-05-20 09:55:01'),
(34, 'jj@mail.com', 'e35417d6e6bc589c6fddb6df8c4b5a148cf8e11616894390d1711e72cbddf833d0f7dec739203223cc5e229f51132c7fcfa2', '$2y$10$KqhzgaIr0NkxIbxxNjBJ/ul/T7CotD4OlgI7i8wRuYMCjnipS9Ahm', 'jpaMxXG7', 2, '2021-05-20 14:44:53', '2021-05-20 17:10:39');

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
-- Indexes for table `emp_survey_q1`
--
ALTER TABLE `emp_survey_q1`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q2`
--
ALTER TABLE `emp_survey_q2`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q3`
--
ALTER TABLE `emp_survey_q3`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q4`
--
ALTER TABLE `emp_survey_q4`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q5`
--
ALTER TABLE `emp_survey_q5`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q6`
--
ALTER TABLE `emp_survey_q6`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q7`
--
ALTER TABLE `emp_survey_q7`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q9`
--
ALTER TABLE `emp_survey_q9`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q10`
--
ALTER TABLE `emp_survey_q10`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q14`
--
ALTER TABLE `emp_survey_q14`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q15`
--
ALTER TABLE `emp_survey_q15`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q16`
--
ALTER TABLE `emp_survey_q16`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q17`
--
ALTER TABLE `emp_survey_q17`
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
