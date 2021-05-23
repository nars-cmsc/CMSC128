-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 08:26 AM
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

--
-- Dumping data for table `emp_survey`
--

INSERT INTO `emp_survey` (`answer_id`, `question_num`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 1, 6, 'Private', '2021-05-21'),
(2, 2, 6, 'Philippines', '2021-05-21'),
(3, 3, 6, 'Information Technology', '2021-05-21'),
(4, 4, 6, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21'),
(5, 5, 6, '3', '2021-05-21'),
(6, 6, 6, 'Agree', '2021-05-21'),
(7, 7, 6, 'Very Important', '2021-05-21'),
(8, 7, 6, 'Important', '2021-05-21'),
(9, 7, 6, 'Important', '2021-05-21'),
(10, 7, 6, 'Important', '2021-05-21'),
(11, 7, 6, 'Important', '2021-05-21'),
(12, 7, 6, 'Important', '2021-05-21'),
(13, 7, 6, 'Very Important', '2021-05-21'),
(14, 7, 6, 'Very Important', '2021-05-21'),
(15, 7, 6, 'Important', '2021-05-21'),
(16, 7, 6, 'Very Important', '2021-05-21'),
(17, 7, 6, 'Important', '2021-05-21'),
(18, 7, 6, 'Important', '2021-05-21'),
(19, 7, 6, 'Important', '2021-05-21'),
(20, 7, 6, 'Very Important', '2021-05-21'),
(21, 7, 6, 'Very Important', '2021-05-21'),
(22, 7, 6, 'Important', '2021-05-21'),
(23, 7, 6, 'Very Important', '2021-05-21'),
(24, 8, 6, 'Satisfied', '2021-05-21'),
(25, 8, 6, 'Satisfied', '2021-05-21'),
(26, 8, 6, 'Satisfied', '2021-05-21'),
(27, 8, 6, 'Satisfied', '2021-05-21'),
(28, 8, 6, 'Satisfied', '2021-05-21'),
(29, 8, 6, 'Satisfied', '2021-05-21'),
(30, 8, 6, 'Satisfied', '2021-05-21'),
(31, 8, 6, 'Satisfied', '2021-05-21'),
(32, 8, 6, 'Satisfied', '2021-05-21'),
(33, 8, 6, 'Satisfied', '2021-05-21'),
(34, 8, 6, 'Satisfied', '2021-05-21'),
(35, 8, 6, 'Satisfied', '2021-05-21'),
(36, 8, 6, 'Satisfied', '2021-05-21'),
(37, 8, 6, 'Satisfied', '2021-05-21'),
(38, 8, 6, 'Satisfied', '2021-05-21'),
(39, 8, 6, 'Satisfied', '2021-05-21'),
(40, 8, 6, 'Satisfied', '2021-05-21'),
(41, 9, 6, 'Likely', '2021-05-21'),
(42, 10, 6, 'Likely', '2021-05-21'),
(43, 11, 6, 'Important', '2021-05-21'),
(44, 11, 6, 'Important', '2021-05-21'),
(45, 11, 6, 'Important', '2021-05-21'),
(46, 11, 6, 'Important', '2021-05-21'),
(47, 11, 6, 'Very Important', '2021-05-21'),
(48, 11, 6, 'Very Important', '2021-05-21'),
(49, 11, 6, 'Important', '2021-05-21'),
(50, 11, 6, 'Important', '2021-05-21'),
(51, 11, 6, 'Very Important', '2021-05-21'),
(52, 11, 6, 'Very Important', '2021-05-21'),
(53, 11, 6, 'Very Important', '2021-05-21'),
(54, 12, 6, 'Satisfied', '2021-05-21'),
(55, 12, 6, 'Satisfied', '2021-05-21'),
(56, 12, 6, 'Satisfied', '2021-05-21'),
(57, 12, 6, 'Satisfied', '2021-05-21'),
(58, 12, 6, 'Satisfied', '2021-05-21'),
(59, 12, 6, 'Satisfied', '2021-05-21'),
(60, 12, 6, 'Satisfied', '2021-05-21'),
(61, 12, 6, 'Satisfied', '2021-05-21'),
(62, 12, 6, 'Satisfied', '2021-05-21'),
(63, 12, 6, 'Satisfied', '2021-05-21'),
(64, 12, 6, 'Satisfied', '2021-05-21'),
(65, 13, 6, 'Include practical experience as part of the academic programs; Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-21'),
(66, 14, 6, 'Important', '2021-05-21'),
(67, 15, 6, 'No', '2021-05-21'),
(68, 16, 6, 'No', '2021-05-21'),
(69, 17, 6, 'No', '2021-05-21'),
(70, 1, 3, 'Public', '2021-05-21'),
(71, 2, 3, 'Philippines', '2021-05-21'),
(72, 3, 3, 'Education', '2021-05-21'),
(73, 4, 3, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21'),
(74, 5, 3, '2', '2021-05-21'),
(75, 6, 3, 'Strongly Agree', '2021-05-21'),
(76, 7, 3, 'Important', '2021-05-21'),
(77, 7, 3, 'Important', '2021-05-21'),
(78, 7, 3, 'Important', '2021-05-21'),
(79, 7, 3, 'Important', '2021-05-21'),
(80, 7, 3, 'Important', '2021-05-21'),
(81, 7, 3, 'Important', '2021-05-21'),
(82, 7, 3, 'Important', '2021-05-21'),
(83, 7, 3, 'Important', '2021-05-21'),
(84, 7, 3, 'Important', '2021-05-21'),
(85, 7, 3, 'Important', '2021-05-21'),
(86, 7, 3, 'Important', '2021-05-21'),
(87, 7, 3, 'Important', '2021-05-21'),
(88, 7, 3, 'Important', '2021-05-21'),
(89, 7, 3, 'Important', '2021-05-21'),
(90, 7, 3, 'Important', '2021-05-21'),
(91, 7, 3, 'Important', '2021-05-21'),
(92, 7, 3, 'Important', '2021-05-21'),
(93, 8, 3, 'Very Satisfied', '2021-05-21'),
(94, 8, 3, 'Satisfied', '2021-05-21'),
(95, 8, 3, 'Satisfied', '2021-05-21'),
(96, 8, 3, 'Very Satisfied', '2021-05-21'),
(97, 8, 3, 'Very Satisfied', '2021-05-21'),
(98, 8, 3, 'Satisfied', '2021-05-21'),
(99, 8, 3, 'Very Satisfied', '2021-05-21'),
(100, 8, 3, 'Satisfied', '2021-05-21'),
(101, 8, 3, 'Very Satisfied', '2021-05-21'),
(102, 8, 3, 'Satisfied', '2021-05-21'),
(103, 8, 3, 'Satisfied', '2021-05-21'),
(104, 8, 3, 'Satisfied', '2021-05-21'),
(105, 8, 3, 'Very Satisfied', '2021-05-21'),
(106, 8, 3, 'Satisfied', '2021-05-21'),
(107, 8, 3, 'Very Satisfied', '2021-05-21'),
(108, 8, 3, 'Very Satisfied', '2021-05-21'),
(109, 8, 3, 'Very Satisfied', '2021-05-21'),
(110, 9, 3, 'Very Likely', '2021-05-21'),
(111, 10, 3, 'Very Likely', '2021-05-21'),
(112, 11, 3, 'Important', '2021-05-21'),
(113, 11, 3, 'Very Important', '2021-05-21'),
(114, 11, 3, 'Important', '2021-05-21'),
(115, 11, 3, 'Very Important', '2021-05-21'),
(116, 11, 3, 'Important', '2021-05-21'),
(117, 11, 3, 'Very Important', '2021-05-21'),
(118, 11, 3, 'Important', '2021-05-21'),
(119, 11, 3, 'Very Important', '2021-05-21'),
(120, 11, 3, 'Important', '2021-05-21'),
(121, 11, 3, 'Very Important', '2021-05-21'),
(122, 11, 3, 'Important', '2021-05-21'),
(123, 12, 3, 'Satisfied', '2021-05-21'),
(124, 12, 3, 'Satisfied', '2021-05-21'),
(125, 12, 3, 'Very Satisfied', '2021-05-21'),
(126, 12, 3, 'Very Satisfied', '2021-05-21'),
(127, 12, 3, 'Very Satisfied', '2021-05-21'),
(128, 12, 3, 'Very Satisfied', '2021-05-21'),
(129, 12, 3, 'Very Satisfied', '2021-05-21'),
(130, 12, 3, 'Very Satisfied', '2021-05-21'),
(131, 12, 3, 'Very Satisfied', '2021-05-21'),
(132, 12, 3, 'Very Satisfied', '2021-05-21'),
(133, 12, 3, 'Very Satisfied', '2021-05-21'),
(134, 13, 3, 'Design courses that are more relevant to the needs of employers; Include practical experience as part of the academic programs; Include sector specific job placements as an integral part of the degree program; Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-21'),
(135, 14, 3, 'Important', '2021-05-21'),
(136, 15, 3, 'No', '2021-05-21'),
(137, 16, 3, 'No', '2021-05-21'),
(138, 17, 3, 'No', '2021-05-21'),
(139, 1, 5, 'Private', '2021-05-21'),
(140, 2, 5, 'Abroad', '2021-05-21'),
(141, 2, 5, 'America_Central America', '2021-05-21'),
(142, 3, 5, 'Media and Communication', '2021-05-21'),
(143, 4, 5, 'Chief level – General Manager/President/CEO', '2021-05-21'),
(144, 5, 5, '5', '2021-05-21'),
(145, 6, 5, 'Agree', '2021-05-21'),
(146, 7, 5, 'Important', '2021-05-21'),
(147, 7, 5, 'Important', '2021-05-21'),
(148, 7, 5, 'Important', '2021-05-21'),
(149, 7, 5, 'Very Important', '2021-05-21'),
(150, 7, 5, 'Very Important', '2021-05-21'),
(151, 7, 5, 'Very Important', '2021-05-21'),
(152, 7, 5, 'Very Important', '2021-05-21'),
(153, 7, 5, 'Important', '2021-05-21'),
(154, 7, 5, 'Very Important', '2021-05-21'),
(155, 7, 5, 'Important', '2021-05-21'),
(156, 7, 5, 'Very Important', '2021-05-21'),
(157, 7, 5, 'Important', '2021-05-21'),
(158, 7, 5, 'Very Important', '2021-05-21'),
(159, 7, 5, 'Important', '2021-05-21'),
(160, 7, 5, 'Very Important', '2021-05-21'),
(161, 7, 5, 'Important', '2021-05-21'),
(162, 7, 5, 'Very Important', '2021-05-21'),
(163, 8, 5, 'Satisfied', '2021-05-21'),
(164, 8, 5, 'Very Satisfied', '2021-05-21'),
(165, 8, 5, 'Satisfied', '2021-05-21'),
(166, 8, 5, 'Very Satisfied', '2021-05-21'),
(167, 8, 5, 'Satisfied', '2021-05-21'),
(168, 8, 5, 'Very Satisfied', '2021-05-21'),
(169, 8, 5, 'Satisfied', '2021-05-21'),
(170, 8, 5, 'Very Satisfied', '2021-05-21'),
(171, 8, 5, 'Satisfied', '2021-05-21'),
(172, 8, 5, 'Very Satisfied', '2021-05-21'),
(173, 8, 5, 'Satisfied', '2021-05-21'),
(174, 8, 5, 'Very Satisfied', '2021-05-21'),
(175, 8, 5, 'Satisfied', '2021-05-21'),
(176, 8, 5, 'Very Satisfied', '2021-05-21'),
(177, 8, 5, 'Satisfied', '2021-05-21'),
(178, 8, 5, 'Very Satisfied', '2021-05-21'),
(179, 8, 5, 'Satisfied', '2021-05-21'),
(180, 9, 5, 'Likely', '2021-05-21'),
(181, 10, 5, 'Likely', '2021-05-21'),
(182, 11, 5, 'Of Little Importance', '2021-05-21'),
(183, 11, 5, 'Important', '2021-05-21'),
(184, 11, 5, 'Important', '2021-05-21'),
(185, 11, 5, 'Important', '2021-05-21'),
(186, 11, 5, 'Important', '2021-05-21'),
(187, 11, 5, 'Important', '2021-05-21'),
(188, 11, 5, 'Important', '2021-05-21'),
(189, 11, 5, 'Important', '2021-05-21'),
(190, 11, 5, 'Very Important', '2021-05-21'),
(191, 11, 5, 'Important', '2021-05-21'),
(192, 11, 5, 'Important', '2021-05-21'),
(193, 12, 5, 'Satisfied', '2021-05-21'),
(194, 12, 5, 'Satisfied', '2021-05-21'),
(195, 12, 5, 'Satisfied', '2021-05-21'),
(196, 12, 5, 'Satisfied', '2021-05-21'),
(197, 12, 5, 'Satisfied', '2021-05-21'),
(198, 12, 5, 'Satisfied', '2021-05-21'),
(199, 12, 5, 'Very Satisfied', '2021-05-21'),
(200, 12, 5, 'Satisfied', '2021-05-21'),
(201, 12, 5, 'Very Satisfied', '2021-05-21'),
(202, 12, 5, 'Satisfied', '2021-05-21'),
(203, 12, 5, 'Very Satisfied', '2021-05-21'),
(204, 13, 5, 'Include practical experience as part of the academic programs; Include sector specific job placements as an integral part of the degree program; Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-21'),
(205, 14, 5, 'Moderately part Important', '2021-05-21'),
(206, 15, 5, 'No', '2021-05-21'),
(207, 16, 5, 'No', '2021-05-21'),
(208, 17, 5, 'No', '2021-05-21'),
(209, 1, 8, 'Public', '2021-05-21'),
(210, 2, 8, 'Philippines', '2021-05-21'),
(211, 3, 8, 'Public Administration and Defense; Compulsory Social Security', '2021-05-21'),
(212, 4, 8, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21'),
(213, 5, 8, '6', '2021-05-21'),
(214, 6, 8, 'Strongly Agree', '2021-05-21'),
(215, 7, 8, 'Very Important', '2021-05-21'),
(216, 7, 8, 'Important', '2021-05-21'),
(217, 7, 8, 'Important', '2021-05-21'),
(218, 7, 8, 'Important', '2021-05-21'),
(219, 7, 8, 'Important', '2021-05-21'),
(220, 7, 8, 'Important', '2021-05-21'),
(221, 7, 8, 'Very Important', '2021-05-21'),
(222, 7, 8, 'Very Important', '2021-05-21'),
(223, 7, 8, 'Of Little Importance', '2021-05-21'),
(224, 7, 8, 'Important', '2021-05-21'),
(225, 7, 8, 'Of Little Importance', '2021-05-21'),
(226, 7, 8, 'Of Little Importance', '2021-05-21'),
(227, 7, 8, 'Of Little Importance', '2021-05-21'),
(228, 7, 8, 'Important', '2021-05-21'),
(229, 7, 8, 'Important', '2021-05-21'),
(230, 7, 8, 'Important', '2021-05-21'),
(231, 7, 8, 'Important', '2021-05-21'),
(232, 8, 8, 'Satisfied', '2021-05-21'),
(233, 8, 8, 'Satisfied', '2021-05-21'),
(234, 8, 8, 'Satisfied', '2021-05-21'),
(235, 8, 8, 'Satisfied', '2021-05-21'),
(236, 8, 8, 'Satisfied', '2021-05-21'),
(237, 8, 8, 'Satisfied', '2021-05-21'),
(238, 8, 8, 'Satisfied', '2021-05-21'),
(239, 8, 8, 'Satisfied', '2021-05-21'),
(240, 8, 8, 'Unsatisfied', '2021-05-21'),
(241, 8, 8, 'Satisfied', '2021-05-21'),
(242, 8, 8, 'Satisfied', '2021-05-21'),
(243, 8, 8, 'Unsatisfied', '2021-05-21'),
(244, 8, 8, 'Satisfied', '2021-05-21'),
(245, 8, 8, 'Unsatisfied', '2021-05-21'),
(246, 8, 8, 'Satisfied', '2021-05-21'),
(247, 8, 8, 'Satisfied', '2021-05-21'),
(248, 8, 8, 'Satisfied', '2021-05-21'),
(249, 9, 8, 'Likely', '2021-05-21'),
(250, 10, 8, 'Likely', '2021-05-21'),
(251, 11, 8, 'Of Little Importance', '2021-05-21'),
(252, 11, 8, 'Important', '2021-05-21'),
(253, 11, 8, 'Important', '2021-05-21'),
(254, 11, 8, 'Important', '2021-05-21'),
(255, 11, 8, 'Important', '2021-05-21'),
(256, 11, 8, 'Important', '2021-05-21'),
(257, 11, 8, 'Of Little Importance', '2021-05-21'),
(258, 11, 8, 'Of Little Importance', '2021-05-21'),
(259, 11, 8, 'Very Important', '2021-05-21'),
(260, 11, 8, 'Very Important', '2021-05-21'),
(261, 11, 8, 'Very Important', '2021-05-21'),
(262, 12, 8, 'Satisfied', '2021-05-21'),
(263, 12, 8, 'Satisfied', '2021-05-21'),
(264, 12, 8, 'Satisfied', '2021-05-21'),
(265, 12, 8, 'Unsatisfied', '2021-05-21'),
(266, 12, 8, 'Satisfied', '2021-05-21'),
(267, 12, 8, 'Satisfied', '2021-05-21'),
(268, 12, 8, 'Satisfied', '2021-05-21'),
(269, 12, 8, 'Unsatisfied', '2021-05-21'),
(270, 12, 8, 'Very Satisfied', '2021-05-21'),
(271, 12, 8, 'Satisfied', '2021-05-21'),
(272, 12, 8, 'Unsatisfied', '2021-05-21'),
(273, 13, 8, 'Include practical experience as part of the academic programs', '2021-05-21'),
(274, 14, 8, 'Of Little Importance', '2021-05-21'),
(275, 15, 8, 'No', '2021-05-21'),
(276, 16, 8, 'No', '2021-05-21'),
(277, 17, 8, 'No', '2021-05-21'),
(278, 1, 10, 'Public', '2021-05-21'),
(279, 2, 10, 'Abroad', '2021-05-21'),
(280, 2, 10, 'Asia_Southeast Asia', '2021-05-21'),
(281, 3, 10, 'Finance, Banks, and Insurance', '2021-05-21'),
(282, 4, 10, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21'),
(283, 5, 10, '4', '2021-05-21'),
(284, 6, 10, 'Agree', '2021-05-21'),
(285, 7, 10, 'Important', '2021-05-21'),
(286, 7, 10, 'Important', '2021-05-21'),
(287, 7, 10, 'Important', '2021-05-21'),
(288, 7, 10, 'Important', '2021-05-21'),
(289, 7, 10, 'Important', '2021-05-21'),
(290, 7, 10, 'Important', '2021-05-21'),
(291, 7, 10, 'Important', '2021-05-21'),
(292, 7, 10, 'Important', '2021-05-21'),
(293, 7, 10, 'Important', '2021-05-21'),
(294, 7, 10, 'Important', '2021-05-21'),
(295, 7, 10, 'Important', '2021-05-21'),
(296, 7, 10, 'Important', '2021-05-21'),
(297, 7, 10, 'Important', '2021-05-21'),
(298, 7, 10, 'Important', '2021-05-21'),
(299, 7, 10, 'Important', '2021-05-21'),
(300, 7, 10, 'Important', '2021-05-21'),
(301, 7, 10, 'Important', '2021-05-21'),
(302, 8, 10, 'Satisfied', '2021-05-21'),
(303, 8, 10, 'Satisfied', '2021-05-21'),
(304, 8, 10, 'Satisfied', '2021-05-21'),
(305, 8, 10, 'Satisfied', '2021-05-21'),
(306, 8, 10, 'Satisfied', '2021-05-21'),
(307, 8, 10, 'Satisfied', '2021-05-21'),
(308, 8, 10, 'Satisfied', '2021-05-21'),
(309, 8, 10, 'Satisfied', '2021-05-21'),
(310, 8, 10, 'Satisfied', '2021-05-21'),
(311, 8, 10, 'Satisfied', '2021-05-21'),
(312, 8, 10, 'Satisfied', '2021-05-21'),
(313, 8, 10, 'Satisfied', '2021-05-21'),
(314, 8, 10, 'Satisfied', '2021-05-21'),
(315, 8, 10, 'Satisfied', '2021-05-21'),
(316, 8, 10, 'Satisfied', '2021-05-21'),
(317, 8, 10, 'Satisfied', '2021-05-21'),
(318, 8, 10, 'Satisfied', '2021-05-21'),
(319, 9, 10, 'Likely', '2021-05-21'),
(320, 10, 10, 'Likely', '2021-05-21'),
(321, 11, 10, 'Important', '2021-05-21'),
(322, 11, 10, 'Important', '2021-05-21'),
(323, 11, 10, 'Important', '2021-05-21'),
(324, 11, 10, 'Important', '2021-05-21'),
(325, 11, 10, 'Important', '2021-05-21'),
(326, 11, 10, 'Important', '2021-05-21'),
(327, 11, 10, 'Important', '2021-05-21'),
(328, 11, 10, 'Important', '2021-05-21'),
(329, 11, 10, 'Important', '2021-05-21'),
(330, 11, 10, 'Important', '2021-05-21'),
(331, 11, 10, 'Important', '2021-05-21'),
(332, 12, 10, 'Satisfied', '2021-05-21'),
(333, 12, 10, 'Satisfied', '2021-05-21'),
(334, 12, 10, 'Satisfied', '2021-05-21'),
(335, 12, 10, 'Satisfied', '2021-05-21'),
(336, 12, 10, 'Satisfied', '2021-05-21'),
(337, 12, 10, 'Satisfied', '2021-05-21'),
(338, 12, 10, 'Satisfied', '2021-05-21'),
(339, 12, 10, 'Satisfied', '2021-05-21'),
(340, 12, 10, 'Satisfied', '2021-05-21'),
(341, 12, 10, 'Satisfied', '2021-05-21'),
(342, 12, 10, 'Satisfied', '2021-05-21'),
(343, 13, 10, 'Design courses that are more relevant to the needs of employers; Include practical experience as part of the academic programs; Include sector specific job placements as an integral part of the degree program; Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-21'),
(344, 14, 10, 'Moderately part Important', '2021-05-21'),
(345, 15, 10, 'No', '2021-05-21'),
(346, 16, 10, 'No', '2021-05-21'),
(347, 17, 10, 'No', '2021-05-21'),
(348, 1, 13, 'Private', '2021-05-22'),
(349, 2, 13, 'Philippines', '2021-05-22'),
(350, 3, 13, 'Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use', '2021-05-22'),
(351, 4, 13, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-22'),
(352, 5, 13, '5', '2021-05-22'),
(353, 6, 13, 'Agree', '2021-05-22'),
(354, 7, 13, 'Important', '2021-05-22'),
(355, 7, 13, 'Very Important', '2021-05-22'),
(356, 7, 13, 'Of Little Importance', '2021-05-22'),
(357, 7, 13, 'Very Important', '2021-05-22'),
(358, 7, 13, 'Important', '2021-05-22'),
(359, 7, 13, 'Important', '2021-05-22'),
(360, 7, 13, 'Important', '2021-05-22'),
(361, 7, 13, 'Important', '2021-05-22'),
(362, 7, 13, 'Important', '2021-05-22'),
(363, 7, 13, 'Very Important', '2021-05-22'),
(364, 7, 13, 'Important', '2021-05-22'),
(365, 7, 13, 'Of Little Importance', '2021-05-22'),
(366, 7, 13, 'Important', '2021-05-22'),
(367, 7, 13, 'Of Little Importance', '2021-05-22'),
(368, 7, 13, 'Important', '2021-05-22'),
(369, 7, 13, 'Important', '2021-05-22'),
(370, 7, 13, 'Important', '2021-05-22'),
(371, 8, 13, 'Satisfied', '2021-05-22'),
(372, 8, 13, 'Very Satisfied', '2021-05-22'),
(373, 8, 13, 'Very Satisfied', '2021-05-22'),
(374, 8, 13, 'Satisfied', '2021-05-22'),
(375, 8, 13, 'Satisfied', '2021-05-22'),
(376, 8, 13, 'Satisfied', '2021-05-22'),
(377, 8, 13, 'Satisfied', '2021-05-22'),
(378, 8, 13, 'Very Satisfied', '2021-05-22'),
(379, 8, 13, 'Very Satisfied', '2021-05-22'),
(380, 8, 13, 'Satisfied', '2021-05-22'),
(381, 8, 13, 'Satisfied', '2021-05-22'),
(382, 8, 13, 'Very Satisfied', '2021-05-22'),
(383, 8, 13, 'Very Satisfied', '2021-05-22'),
(384, 8, 13, 'Unsatisfied', '2021-05-22'),
(385, 8, 13, 'Satisfied', '2021-05-22'),
(386, 8, 13, 'Satisfied', '2021-05-22'),
(387, 8, 13, 'Very Satisfied', '2021-05-22'),
(388, 9, 13, 'Likely', '2021-05-22'),
(389, 10, 13, 'Likely', '2021-05-22'),
(390, 11, 13, 'Important', '2021-05-22'),
(391, 11, 13, 'Important', '2021-05-22'),
(392, 11, 13, 'Very Important', '2021-05-22'),
(393, 11, 13, 'Important', '2021-05-22'),
(394, 11, 13, 'Very Important', '2021-05-22'),
(395, 11, 13, 'Very Important', '2021-05-22'),
(396, 11, 13, 'Important', '2021-05-22'),
(397, 11, 13, 'Of Little Importance', '2021-05-22'),
(398, 11, 13, 'Important', '2021-05-22'),
(399, 11, 13, 'Important', '2021-05-22'),
(400, 11, 13, 'Very Important', '2021-05-22'),
(401, 12, 13, 'Very Satisfied', '2021-05-22'),
(402, 12, 13, 'Satisfied', '2021-05-22'),
(403, 12, 13, 'Very Satisfied', '2021-05-22'),
(404, 12, 13, 'Satisfied', '2021-05-22'),
(405, 12, 13, 'Satisfied', '2021-05-22'),
(406, 12, 13, 'Very Satisfied', '2021-05-22'),
(407, 12, 13, 'Very Satisfied', '2021-05-22'),
(408, 12, 13, 'Unsatisfied', '2021-05-22'),
(409, 12, 13, 'Satisfied', '2021-05-22'),
(410, 12, 13, 'Satisfied', '2021-05-22'),
(411, 12, 13, 'Unsatisfied', '2021-05-22'),
(412, 13, 13, 'Include practical experience as part of the academic programs; Include sector specific job placements as an integral part of the degree program; Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-22'),
(413, 14, 13, 'Moderately part Important', '2021-05-22'),
(414, 15, 13, 'No', '2021-05-22'),
(415, 16, 13, 'No', '2021-05-22'),
(416, 17, 13, 'No', '2021-05-22'),
(417, 1, 14, 'Public', '2021-05-22'),
(418, 2, 14, 'Abroad', '2021-05-22'),
(419, 2, 14, 'America_North America', '2021-05-22'),
(420, 3, 14, 'Education', '2021-05-22'),
(421, 4, 14, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-22'),
(422, 5, 14, '2', '2021-05-22'),
(423, 6, 14, 'Agree', '2021-05-22'),
(424, 7, 14, 'Important', '2021-05-22'),
(425, 7, 14, 'Important', '2021-05-22'),
(426, 7, 14, 'Very Important', '2021-05-22'),
(427, 7, 14, 'Of Little Importance', '2021-05-22'),
(428, 7, 14, 'Of Little Importance', '2021-05-22'),
(429, 7, 14, 'Of Little Importance', '2021-05-22'),
(430, 7, 14, 'Unimportant', '2021-05-22'),
(431, 7, 14, 'Unimportant', '2021-05-22'),
(432, 7, 14, 'Of Little Importance', '2021-05-22'),
(433, 7, 14, 'Important', '2021-05-22'),
(434, 7, 14, 'Important', '2021-05-22'),
(435, 7, 14, 'Of Little Importance', '2021-05-22'),
(436, 7, 14, 'Of Little Importance', '2021-05-22'),
(437, 7, 14, 'Important', '2021-05-22'),
(438, 7, 14, 'Important', '2021-05-22'),
(439, 7, 14, 'Very Important', '2021-05-22'),
(440, 7, 14, 'Of Little Importance', '2021-05-22'),
(441, 8, 14, 'Satisfied', '2021-05-22'),
(442, 8, 14, 'Satisfied', '2021-05-22'),
(443, 8, 14, 'Unsatisfied', '2021-05-22'),
(444, 8, 14, 'Unsatisfied', '2021-05-22'),
(445, 8, 14, 'Very Satisfied', '2021-05-22'),
(446, 8, 14, 'Unsatisfied', '2021-05-22'),
(447, 8, 14, 'Satisfied', '2021-05-22'),
(448, 8, 14, 'Very Satisfied', '2021-05-22'),
(449, 8, 14, 'Satisfied', '2021-05-22'),
(450, 8, 14, 'Unsatisfied', '2021-05-22'),
(451, 8, 14, 'Unsatisfied', '2021-05-22'),
(452, 8, 14, 'Satisfied', '2021-05-22'),
(453, 8, 14, 'Very Satisfied', '2021-05-22'),
(454, 8, 14, 'Unsatisfied', '2021-05-22'),
(455, 8, 14, 'Satisfied', '2021-05-22'),
(456, 8, 14, 'Satisfied', '2021-05-22'),
(457, 8, 14, 'Unsatisfied', '2021-05-22'),
(458, 9, 14, 'Likely', '2021-05-22'),
(459, 10, 14, 'Likely', '2021-05-22'),
(460, 11, 14, 'Important', '2021-05-22'),
(461, 11, 14, 'Very Important', '2021-05-22'),
(462, 11, 14, 'Of Little Importance', '2021-05-22'),
(463, 11, 14, 'Important', '2021-05-22'),
(464, 11, 14, 'Very Important', '2021-05-22'),
(465, 11, 14, 'Of Little Importance', '2021-05-22'),
(466, 11, 14, 'Of Little Importance', '2021-05-22'),
(467, 11, 14, 'Very Important', '2021-05-22'),
(468, 11, 14, 'Very Important', '2021-05-22'),
(469, 11, 14, 'Important', '2021-05-22'),
(470, 11, 14, 'Of Little Importance', '2021-05-22'),
(471, 12, 14, 'Unsatisfied', '2021-05-22'),
(472, 12, 14, 'Very Satisfied', '2021-05-22'),
(473, 12, 14, 'Satisfied', '2021-05-22'),
(474, 12, 14, 'Satisfied', '2021-05-22'),
(475, 12, 14, 'Unsatisfied', '2021-05-22'),
(476, 12, 14, 'Satisfied', '2021-05-22'),
(477, 12, 14, 'Unsatisfied', '2021-05-22'),
(478, 12, 14, 'Satisfied', '2021-05-22'),
(479, 12, 14, 'Satisfied', '2021-05-22'),
(480, 12, 14, 'Very Satisfied', '2021-05-22'),
(481, 12, 14, 'Very Satisfied', '2021-05-22'),
(482, 13, 14, 'Design courses that are more relevant to the needs of employers; Include sector specific job placements as an integral part of the degree program', '2021-05-22'),
(483, 14, 14, 'Moderately part Important', '2021-05-22'),
(484, 15, 14, 'No', '2021-05-22'),
(485, 16, 14, 'No', '2021-05-22'),
(486, 17, 14, 'No', '2021-05-22'),
(487, 1, 15, 'Private', '2021-05-22'),
(488, 2, 15, 'Abroad', '2021-05-22'),
(489, 2, 15, 'Europe_Northern Europe', '2021-05-22'),
(490, 3, 15, 'Hotel/Accommodation, and Restaurant and Food Service', '2021-05-22'),
(491, 4, 15, 'Rank and file', '2021-05-22'),
(492, 5, 15, '1', '2021-05-22'),
(493, 6, 15, 'Agree', '2021-05-22'),
(494, 7, 15, 'Of Little Importance', '2021-05-22'),
(495, 7, 15, 'Of Little Importance', '2021-05-22'),
(496, 7, 15, 'Of Little Importance', '2021-05-22'),
(497, 7, 15, 'Important', '2021-05-22'),
(498, 7, 15, 'Important', '2021-05-22'),
(499, 7, 15, 'Very Important', '2021-05-22'),
(500, 7, 15, 'Important', '2021-05-22'),
(501, 7, 15, 'Of Little Importance', '2021-05-22'),
(502, 7, 15, 'Important', '2021-05-22'),
(503, 7, 15, 'Very Important', '2021-05-22'),
(504, 7, 15, 'Very Important', '2021-05-22'),
(505, 7, 15, 'Important', '2021-05-22'),
(506, 7, 15, 'Important', '2021-05-22'),
(507, 7, 15, 'Of Little Importance', '2021-05-22'),
(508, 7, 15, 'Important', '2021-05-22'),
(509, 7, 15, 'Of Little Importance', '2021-05-22'),
(510, 7, 15, 'Of Little Importance', '2021-05-22'),
(511, 8, 15, 'Very Satisfied', '2021-05-22'),
(512, 8, 15, 'Unsatisfied', '2021-05-22'),
(513, 8, 15, 'Satisfied', '2021-05-22'),
(514, 8, 15, 'Satisfied', '2021-05-22'),
(515, 8, 15, 'Very Satisfied', '2021-05-22'),
(516, 8, 15, 'Very Satisfied', '2021-05-22'),
(517, 8, 15, 'Unsatisfied', '2021-05-22'),
(518, 8, 15, 'Satisfied', '2021-05-22'),
(519, 8, 15, 'Unsatisfied', '2021-05-22'),
(520, 8, 15, 'Unsatisfied', '2021-05-22'),
(521, 8, 15, 'Unsatisfied', '2021-05-22'),
(522, 8, 15, 'Satisfied', '2021-05-22'),
(523, 8, 15, 'Satisfied', '2021-05-22'),
(524, 8, 15, 'Very Satisfied', '2021-05-22'),
(525, 8, 15, 'Satisfied', '2021-05-22'),
(526, 8, 15, 'Satisfied', '2021-05-22'),
(527, 8, 15, 'Very Satisfied', '2021-05-22'),
(528, 9, 15, 'Unlikely', '2021-05-22'),
(529, 10, 15, 'Likely', '2021-05-22'),
(530, 11, 15, 'Very Important', '2021-05-22'),
(531, 11, 15, 'Important', '2021-05-22'),
(532, 11, 15, 'Important', '2021-05-22'),
(533, 11, 15, 'Of Little Importance', '2021-05-22'),
(534, 11, 15, 'Very Important', '2021-05-22'),
(535, 11, 15, 'Important', '2021-05-22'),
(536, 11, 15, 'Of Little Importance', '2021-05-22'),
(537, 11, 15, 'Very Important', '2021-05-22'),
(538, 11, 15, 'Of Little Importance', '2021-05-22'),
(539, 11, 15, 'Important', '2021-05-22'),
(540, 11, 15, 'Of Little Importance', '2021-05-22'),
(541, 12, 15, 'Unsatisfied', '2021-05-22'),
(542, 12, 15, 'Unsatisfied', '2021-05-22'),
(543, 12, 15, 'Satisfied', '2021-05-22'),
(544, 12, 15, 'Satisfied', '2021-05-22'),
(545, 12, 15, 'Satisfied', '2021-05-22'),
(546, 12, 15, 'Very Satisfied', '2021-05-22'),
(547, 12, 15, 'Very Satisfied', '2021-05-22'),
(548, 12, 15, 'Satisfied', '2021-05-22'),
(549, 12, 15, 'Unsatisfied', '2021-05-22'),
(550, 12, 15, 'Satisfied', '2021-05-22'),
(551, 12, 15, 'Very Satisfied', '2021-05-22'),
(552, 13, 15, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-22'),
(553, 14, 15, 'Moderately part Important', '2021-05-22'),
(554, 15, 15, 'No', '2021-05-22'),
(555, 16, 15, 'No', '2021-05-22'),
(556, 17, 15, 'No', '2021-05-22'),
(557, 1, 16, 'Private', '2021-05-22'),
(558, 2, 16, 'Philippines', '2021-05-22'),
(559, 3, 16, 'Arts, Entertainment and Recreation', '2021-05-22'),
(560, 4, 16, 'Chief level – General Manager/President/CEO', '2021-05-22'),
(561, 5, 16, '10', '2021-05-22'),
(562, 6, 16, 'Agree', '2021-05-22'),
(563, 7, 16, 'Important', '2021-05-22'),
(564, 7, 16, 'Very Important', '2021-05-22'),
(565, 7, 16, 'Very Important', '2021-05-22'),
(566, 7, 16, 'Very Important', '2021-05-22'),
(567, 7, 16, 'Very Important', '2021-05-22'),
(568, 7, 16, 'Important', '2021-05-22'),
(569, 7, 16, 'Important', '2021-05-22'),
(570, 7, 16, 'Very Important', '2021-05-22'),
(571, 7, 16, 'Important', '2021-05-22'),
(572, 7, 16, 'Important', '2021-05-22'),
(573, 7, 16, 'Very Important', '2021-05-22'),
(574, 7, 16, 'Very Important', '2021-05-22'),
(575, 7, 16, 'Very Important', '2021-05-22'),
(576, 7, 16, 'Important', '2021-05-22'),
(577, 7, 16, 'Important', '2021-05-22'),
(578, 7, 16, 'Very Important', '2021-05-22'),
(579, 7, 16, 'Important', '2021-05-22'),
(580, 8, 16, 'Very Satisfied', '2021-05-22'),
(581, 8, 16, 'Very Satisfied', '2021-05-22'),
(582, 8, 16, 'Satisfied', '2021-05-22'),
(583, 8, 16, 'Satisfied', '2021-05-22'),
(584, 8, 16, 'Very Satisfied', '2021-05-22'),
(585, 8, 16, 'Very Satisfied', '2021-05-22'),
(586, 8, 16, 'Very Satisfied', '2021-05-22'),
(587, 8, 16, 'Very Satisfied', '2021-05-22'),
(588, 8, 16, 'Satisfied', '2021-05-22'),
(589, 8, 16, 'Satisfied', '2021-05-22'),
(590, 8, 16, 'Very Satisfied', '2021-05-22'),
(591, 8, 16, 'Satisfied', '2021-05-22'),
(592, 8, 16, 'Very Satisfied', '2021-05-22'),
(593, 8, 16, 'Satisfied', '2021-05-22'),
(594, 8, 16, 'Satisfied', '2021-05-22'),
(595, 8, 16, 'Very Satisfied', '2021-05-22'),
(596, 8, 16, 'Very Satisfied', '2021-05-22'),
(597, 9, 16, 'Very Likely', '2021-05-22'),
(598, 10, 16, 'Very Likely', '2021-05-22'),
(599, 11, 16, 'Important', '2021-05-22'),
(600, 11, 16, 'Important', '2021-05-22'),
(601, 11, 16, 'Important', '2021-05-22'),
(602, 11, 16, 'Important', '2021-05-22'),
(603, 11, 16, 'Very Important', '2021-05-22'),
(604, 11, 16, 'Very Important', '2021-05-22'),
(605, 11, 16, 'Very Important', '2021-05-22'),
(606, 11, 16, 'Important', '2021-05-22'),
(607, 11, 16, 'Important', '2021-05-22'),
(608, 11, 16, 'Important', '2021-05-22'),
(609, 11, 16, 'Very Important', '2021-05-22'),
(610, 12, 16, 'Satisfied', '2021-05-22'),
(611, 12, 16, 'Very Satisfied', '2021-05-22'),
(612, 12, 16, 'Satisfied', '2021-05-22'),
(613, 12, 16, 'Very Satisfied', '2021-05-22'),
(614, 12, 16, 'Satisfied', '2021-05-22'),
(615, 12, 16, 'Satisfied', '2021-05-22'),
(616, 12, 16, 'Very Satisfied', '2021-05-22'),
(617, 12, 16, 'Satisfied', '2021-05-22'),
(618, 12, 16, 'Very Satisfied', '2021-05-22'),
(619, 12, 16, 'Very Satisfied', '2021-05-22'),
(620, 12, 16, 'Satisfied', '2021-05-22'),
(621, 13, 16, 'Include practical experience as part of the academic programs', '2021-05-22'),
(622, 14, 16, 'Moderately part Important', '2021-05-22'),
(623, 15, 16, 'No', '2021-05-22'),
(624, 16, 16, 'No', '2021-05-22'),
(625, 17, 16, 'No', '2021-05-22'),
(626, 1, 17, 'Public', '2021-05-22'),
(627, 2, 17, 'Philippines', '2021-05-22'),
(628, 3, 17, 'Media and Communication', '2021-05-22'),
(629, 4, 17, 'Rank and file', '2021-05-22'),
(630, 5, 17, '5', '2021-05-22'),
(631, 6, 17, 'Agree', '2021-05-22'),
(632, 7, 17, 'Important', '2021-05-22'),
(633, 7, 17, 'Very Important', '2021-05-22'),
(634, 7, 17, 'Very Important', '2021-05-22'),
(635, 7, 17, 'Important', '2021-05-22'),
(636, 7, 17, 'Of Little Importance', '2021-05-22'),
(637, 7, 17, 'Important', '2021-05-22'),
(638, 7, 17, 'Of Little Importance', '2021-05-22'),
(639, 7, 17, 'Unimportant', '2021-05-22'),
(640, 7, 17, 'Important', '2021-05-22'),
(641, 7, 17, 'Unimportant', '2021-05-22'),
(642, 7, 17, 'Very Important', '2021-05-22'),
(643, 7, 17, 'Of Little Importance', '2021-05-22'),
(644, 7, 17, 'Unimportant', '2021-05-22'),
(645, 7, 17, 'Of Little Importance', '2021-05-22'),
(646, 7, 17, 'Of Little Importance', '2021-05-22'),
(647, 7, 17, 'Important', '2021-05-22'),
(648, 7, 17, 'Of Little Importance', '2021-05-22'),
(649, 8, 17, 'Satisfied', '2021-05-22'),
(650, 8, 17, 'Very Satisfied', '2021-05-22'),
(651, 8, 17, 'Satisfied', '2021-05-22'),
(652, 8, 17, 'Very Satisfied', '2021-05-22'),
(653, 8, 17, 'Satisfied', '2021-05-22'),
(654, 8, 17, 'Unsatisfied', '2021-05-22'),
(655, 8, 17, 'Unsatisfied', '2021-05-22'),
(656, 8, 17, 'Unsatisfied', '2021-05-22'),
(657, 8, 17, 'Very Unsatisfied', '2021-05-22'),
(658, 8, 17, 'Satisfied', '2021-05-22'),
(659, 8, 17, 'Very Satisfied', '2021-05-22'),
(660, 8, 17, 'Satisfied', '2021-05-22'),
(661, 8, 17, 'Satisfied', '2021-05-22'),
(662, 8, 17, 'Unsatisfied', '2021-05-22'),
(663, 8, 17, 'Very Satisfied', '2021-05-22'),
(664, 8, 17, 'Unsatisfied', '2021-05-22'),
(665, 8, 17, 'Very Satisfied', '2021-05-22'),
(666, 9, 17, 'Unlikely', '2021-05-22'),
(667, 10, 17, 'Very Unlikely', '2021-05-22'),
(668, 11, 17, 'Unimportant', '2021-05-22'),
(669, 11, 17, 'Of Little Importance', '2021-05-22'),
(670, 11, 17, 'Of Little Importance', '2021-05-22'),
(671, 11, 17, 'Important', '2021-05-22'),
(672, 11, 17, 'Of Little Importance', '2021-05-22'),
(673, 11, 17, 'Unimportant', '2021-05-22'),
(674, 11, 17, 'Of Little Importance', '2021-05-22'),
(675, 11, 17, 'Important', '2021-05-22'),
(676, 11, 17, 'Important', '2021-05-22'),
(677, 11, 17, 'Of Little Importance', '2021-05-22'),
(678, 11, 17, 'Of Little Importance', '2021-05-22'),
(679, 12, 17, 'Satisfied', '2021-05-22'),
(680, 12, 17, 'Satisfied', '2021-05-22'),
(681, 12, 17, 'Unsatisfied', '2021-05-22'),
(682, 12, 17, 'Unsatisfied', '2021-05-22'),
(683, 12, 17, 'Unsatisfied', '2021-05-22'),
(684, 12, 17, 'Satisfied', '2021-05-22'),
(685, 12, 17, 'Unsatisfied', '2021-05-22'),
(686, 12, 17, 'Satisfied', '2021-05-22'),
(687, 12, 17, 'Very Satisfied', '2021-05-22'),
(688, 12, 17, 'Unsatisfied', '2021-05-22'),
(689, 12, 17, 'Unsatisfied', '2021-05-22'),
(690, 13, 17, 'Include sector specific job placements as an integral part of the degree program; Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '2021-05-22'),
(691, 14, 17, 'Of Little Importance', '2021-05-22'),
(692, 15, 17, 'No', '2021-05-22'),
(693, 16, 17, 'No', '2021-05-22'),
(694, 17, 17, 'No', '2021-05-22'),
(695, 1, 33, 'other_Semi private', '2021-05-22'),
(696, 2, 33, 'Philippines', '2021-05-22'),
(697, 3, 33, 'other_Own business', '2021-05-22'),
(698, 4, 33, 'Rank and file', '2021-05-22'),
(699, 5, 33, '7', '2021-05-22'),
(700, 6, 33, 'Strongly Disagree', '2021-05-22'),
(701, 7, 33, 'Unimportant', '2021-05-22'),
(702, 7, 33, 'Unimportant', '2021-05-22'),
(703, 7, 33, 'Of Little Importance', '2021-05-22'),
(704, 7, 33, 'Of Little Importance', '2021-05-22'),
(705, 7, 33, 'Unimportant', '2021-05-22'),
(706, 7, 33, 'Unimportant', '2021-05-22'),
(707, 7, 33, 'Of Little Importance', '2021-05-22'),
(708, 7, 33, 'Of Little Importance', '2021-05-22'),
(709, 7, 33, 'Unimportant', '2021-05-22'),
(710, 7, 33, 'Unimportant', '2021-05-22'),
(711, 7, 33, 'Unimportant', '2021-05-22'),
(712, 7, 33, 'Of Little Importance', '2021-05-22'),
(713, 7, 33, 'Unimportant', '2021-05-22'),
(714, 7, 33, 'Of Little Importance', '2021-05-22'),
(715, 7, 33, 'Unimportant', '2021-05-22'),
(716, 7, 33, 'Of Little Importance', '2021-05-22'),
(717, 7, 33, 'Unimportant', '2021-05-22'),
(718, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(719, 8, 33, 'Unsatisfied', '2021-05-22'),
(720, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(721, 8, 33, 'Unsatisfied', '2021-05-22'),
(722, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(723, 8, 33, 'Unsatisfied', '2021-05-22'),
(724, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(725, 8, 33, 'Unsatisfied', '2021-05-22'),
(726, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(727, 8, 33, 'Unsatisfied', '2021-05-22'),
(728, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(729, 8, 33, 'Unsatisfied', '2021-05-22'),
(730, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(731, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(732, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(733, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(734, 8, 33, 'Very Unsatisfied', '2021-05-22'),
(735, 9, 33, 'Very Unlikely', '2021-05-22'),
(736, 10, 33, 'Unlikely', '2021-05-22'),
(737, 11, 33, 'Unimportant', '2021-05-22'),
(738, 11, 33, 'Of Little Importance', '2021-05-22'),
(739, 11, 33, 'Unimportant', '2021-05-22'),
(740, 11, 33, 'Of Little Importance', '2021-05-22'),
(741, 11, 33, 'Unimportant', '2021-05-22'),
(742, 11, 33, 'Unimportant', '2021-05-22'),
(743, 11, 33, 'Unimportant', '2021-05-22'),
(744, 11, 33, 'Unimportant', '2021-05-22'),
(745, 11, 33, 'Unimportant', '2021-05-22'),
(746, 11, 33, 'Of Little Importance', '2021-05-22'),
(747, 11, 33, 'Unimportant', '2021-05-22'),
(748, 12, 33, 'Very Unsatisfied', '2021-05-22'),
(749, 12, 33, 'Unsatisfied', '2021-05-22'),
(750, 12, 33, 'Very Unsatisfied', '2021-05-22'),
(751, 12, 33, 'Unsatisfied', '2021-05-22'),
(752, 12, 33, 'Very Unsatisfied', '2021-05-22'),
(753, 12, 33, 'Very Unsatisfied', '2021-05-22'),
(754, 12, 33, 'Very Unsatisfied', '2021-05-22'),
(755, 12, 33, 'Very Unsatisfied', '2021-05-22'),
(756, 12, 33, 'Unsatisfied', '2021-05-22'),
(757, 12, 33, 'Very Unsatisfied', '2021-05-22'),
(758, 12, 33, 'Very Unsatisfied', '2021-05-22'),
(759, 13, 33, 'other_Something here', '2021-05-22'),
(760, 14, 33, 'Unimportant', '2021-05-22'),
(761, 15, 33, 'Nothing really', '2021-05-22'),
(762, 16, 33, 'Just testing', '2021-05-22'),
(763, 17, 33, 'Very strong', '2021-05-22'),
(764, 1, 34, 'other_Semi private', '2021-05-22'),
(765, 2, 34, 'Philippines', '2021-05-22'),
(766, 3, 34, 'Transportation and Storage', '2021-05-22'),
(767, 4, 34, 'Chief level – General Manager/President/CEO', '2021-05-22'),
(768, 5, 34, '20', '2021-05-22'),
(769, 6, 34, 'Strongly Disagree', '2021-05-22'),
(770, 7, 34, 'Unimportant', '2021-05-22'),
(771, 7, 34, 'Of Little Importance', '2021-05-22'),
(772, 7, 34, 'Unimportant', '2021-05-22'),
(773, 7, 34, 'Of Little Importance', '2021-05-22'),
(774, 7, 34, 'Unimportant', '2021-05-22'),
(775, 7, 34, 'Of Little Importance', '2021-05-22'),
(776, 7, 34, 'Unimportant', '2021-05-22'),
(777, 7, 34, 'Of Little Importance', '2021-05-22'),
(778, 7, 34, 'Unimportant', '2021-05-22'),
(779, 7, 34, 'Of Little Importance', '2021-05-22'),
(780, 7, 34, 'Unimportant', '2021-05-22'),
(781, 7, 34, 'Important', '2021-05-22'),
(782, 7, 34, 'Very Important', '2021-05-22'),
(783, 7, 34, 'Of Little Importance', '2021-05-22'),
(784, 7, 34, 'Important', '2021-05-22'),
(785, 7, 34, 'Important', '2021-05-22'),
(786, 7, 34, 'Of Little Importance', '2021-05-22'),
(787, 8, 34, 'Very Unsatisfied', '2021-05-22'),
(788, 8, 34, 'Very Unsatisfied', '2021-05-22'),
(789, 8, 34, 'Very Unsatisfied', '2021-05-22'),
(790, 8, 34, 'Very Unsatisfied', '2021-05-22'),
(791, 8, 34, 'Unsatisfied', '2021-05-22'),
(792, 8, 34, 'Unsatisfied', '2021-05-22'),
(793, 8, 34, 'Unsatisfied', '2021-05-22'),
(794, 8, 34, 'Unsatisfied', '2021-05-22'),
(795, 8, 34, 'Unsatisfied', '2021-05-22'),
(796, 8, 34, 'Satisfied', '2021-05-22'),
(797, 8, 34, 'Satisfied', '2021-05-22'),
(798, 8, 34, 'Satisfied', '2021-05-22'),
(799, 8, 34, 'Satisfied', '2021-05-22'),
(800, 8, 34, 'Very Satisfied', '2021-05-22'),
(801, 8, 34, 'Very Satisfied', '2021-05-22'),
(802, 8, 34, 'Very Satisfied', '2021-05-22'),
(803, 8, 34, 'Very Satisfied', '2021-05-22'),
(804, 9, 34, 'Likely', '2021-05-22'),
(805, 10, 34, 'Unlikely', '2021-05-22'),
(806, 11, 34, 'Very Important', '2021-05-22'),
(807, 11, 34, 'Important', '2021-05-22'),
(808, 11, 34, 'Of Little Importance', '2021-05-22'),
(809, 11, 34, 'Unimportant', '2021-05-22'),
(810, 11, 34, 'Unimportant', '2021-05-22'),
(811, 11, 34, 'Of Little Importance', '2021-05-22'),
(812, 11, 34, 'Important', '2021-05-22'),
(813, 11, 34, 'Very Important', '2021-05-22'),
(814, 11, 34, 'Important', '2021-05-22'),
(815, 11, 34, 'Of Little Importance', '2021-05-22'),
(816, 11, 34, 'Unimportant', '2021-05-22'),
(817, 12, 34, 'Very Unsatisfied', '2021-05-22'),
(818, 12, 34, 'Very Unsatisfied', '2021-05-22'),
(819, 12, 34, 'Unsatisfied', '2021-05-22'),
(820, 12, 34, 'Unsatisfied', '2021-05-22'),
(821, 12, 34, 'Unsatisfied', '2021-05-22'),
(822, 12, 34, 'Unsatisfied', '2021-05-22'),
(823, 12, 34, 'Very Unsatisfied', '2021-05-22'),
(824, 12, 34, 'Unsatisfied', '2021-05-22'),
(825, 12, 34, 'Very Unsatisfied', '2021-05-22'),
(826, 12, 34, 'Unsatisfied', '2021-05-22'),
(827, 12, 34, 'Very Unsatisfied', '2021-05-22'),
(828, 13, 34, 'Design courses that are more relevant to the needs of employers; Include practical experience as part of the academic programs; Include sector specific job placements as an integral part of the degree program; Provide better post-graduation support (facilitate relations between graduates and companies/organizations); other_Apply something', '2021-05-22'),
(829, 14, 34, 'Unimportant', '2021-05-22'),
(830, 15, 34, 'No', '2021-05-22'),
(831, 16, 34, 'So lazy', '2021-05-22'),
(832, 17, 34, 'No', '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q1`
--

CREATE TABLE `emp_survey_q1` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_others` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q1`
--

INSERT INTO `emp_survey_q1` (`answer_id`, `user_id`, `answer_body`, `answer_others`, `date_response`) VALUES
(1, 6, 'Private', '', '2021-05-21'),
(2, 3, 'Public', '', '2021-05-21'),
(3, 5, 'Private', '', '2021-05-21'),
(4, 8, 'Public', '', '2021-05-21'),
(5, 10, 'Public', '', '2021-05-21'),
(6, 13, 'Private', '', '2021-05-22'),
(7, 14, 'Public', '', '2021-05-22'),
(8, 15, 'Private', '', '2021-05-22'),
(9, 16, 'Private', '', '2021-05-22'),
(10, 17, 'Public', '', '2021-05-22'),
(11, 33, 'Other', 'Semi private', '2021-05-22'),
(13, 34, 'Other', 'Semi private', '2021-05-22');

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

--
-- Dumping data for table `emp_survey_q2`
--

INSERT INTO `emp_survey_q2` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Philippines', '2021-05-21'),
(2, 3, 'Philippines', '2021-05-21'),
(3, 5, 'Abroad', '2021-05-21'),
(4, 8, 'Philippines', '2021-05-21'),
(5, 10, 'Abroad', '2021-05-21'),
(6, 13, 'Philippines', '2021-05-22'),
(7, 14, 'Abroad', '2021-05-22'),
(8, 15, 'Abroad', '2021-05-22'),
(9, 16, 'Philippines', '2021-05-22'),
(10, 17, 'Philippines', '2021-05-22'),
(11, 33, 'Philippines', '2021-05-22'),
(12, 34, 'Philippines', '2021-05-22');

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

--
-- Dumping data for table `emp_survey_q2_1`
--

INSERT INTO `emp_survey_q2_1` (`answer_id`, `user_id`, `region`, `subregion`, `date_response`) VALUES
(1, 5, 'America', 'Central America', '2021-05-21'),
(2, 10, 'Asia', 'Southeast Asia', '2021-05-21'),
(3, 14, 'America', 'North America', '2021-05-22'),
(4, 15, 'Europe', 'Northern Europe', '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q3`
--

CREATE TABLE `emp_survey_q3` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_others` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q3`
--

INSERT INTO `emp_survey_q3` (`answer_id`, `user_id`, `answer_body`, `answer_others`, `date_response`) VALUES
(1, 6, 'Information Technology', '', '2021-05-21'),
(2, 3, 'Education', '', '2021-05-21'),
(3, 5, 'Media and Communication', '', '2021-05-21'),
(4, 8, 'Public Administration and Defense; Compulsory Social Security', '', '2021-05-21'),
(5, 10, 'Finance, Banks, and Insurance', '', '2021-05-21'),
(6, 13, 'Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use', '', '2021-05-22'),
(7, 14, 'Education', '', '2021-05-22'),
(8, 15, 'Hotel/Accommodation, and Restaurant and Food Service', '', '2021-05-22'),
(9, 16, 'Arts, Entertainment and Recreation', '', '2021-05-22'),
(10, 17, 'Media and Communication', '', '2021-05-22'),
(11, 33, 'other', 'Own business', '2021-05-22'),
(13, 34, 'Transportation and Storage', '', '2021-05-22');

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
(5, 10, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-21'),
(6, 13, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-22'),
(7, 14, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-22'),
(8, 15, 'Rank and file', '2021-05-22'),
(9, 16, 'Chief level – General Manager/President/CEO', '2021-05-22'),
(10, 17, 'Rank and file', '2021-05-22'),
(11, 33, 'Rank and file', '2021-05-22'),
(12, 34, 'Chief level – General Manager/President/CEO', '2021-05-22');

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
(5, 10, 4, '2021-05-21'),
(6, 13, 5, '2021-05-22'),
(7, 14, 2, '2021-05-22'),
(8, 15, 1, '2021-05-22'),
(9, 16, 10, '2021-05-22'),
(10, 17, 5, '2021-05-22'),
(11, 33, 7, '2021-05-22'),
(12, 34, 20, '2021-05-22');

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
(5, 10, 'Agree', '2021-05-21'),
(6, 13, 'Agree', '2021-05-22'),
(7, 14, 'Agree', '2021-05-22'),
(8, 15, 'Agree', '2021-05-22'),
(9, 16, 'Agree', '2021-05-22'),
(10, 17, 'Agree', '2021-05-22'),
(11, 33, 'Strongly Disagree', '2021-05-22'),
(12, 34, 'Strongly Disagree', '2021-05-22');

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
(85, 10, 'Systems Analysis and Evaluation', 'Important', '2021-05-21'),
(86, 13, 'Reading Comprehension', 'Important', '2021-05-22'),
(87, 13, 'Active Listening', 'Very Important', '2021-05-22'),
(88, 13, 'Writing Skills', 'Of Little Importance', '2021-05-22'),
(89, 13, 'Verbal Communication', 'Very Important', '2021-05-22'),
(90, 13, 'Mathematics Skills', 'Important', '2021-05-22'),
(91, 13, 'Scientific Literacy', 'Important', '2021-05-22'),
(92, 13, 'Digital Literacy', 'Important', '2021-05-22'),
(93, 13, 'Critical Thinking', 'Important', '2021-05-22'),
(94, 13, 'Participatory Learning', 'Important', '2021-05-22'),
(95, 13, 'Creative and Innovation', 'Very Important', '2021-05-22'),
(96, 13, 'Leadership Skills', 'Important', '2021-05-22'),
(97, 13, 'Social Awareness', 'Of Little Importance', '2021-05-22'),
(98, 13, 'Service Orientation', 'Important', '2021-05-22'),
(99, 13, 'Time Management', 'Of Little Importance', '2021-05-22'),
(100, 13, 'Complex Problem Solving Skills', 'Important', '2021-05-22'),
(101, 13, 'Judgment and Decision Making', 'Important', '2021-05-22'),
(102, 13, 'Systems Analysis and Evaluation', 'Important', '2021-05-22'),
(103, 14, 'Reading Comprehension', 'Important', '2021-05-22'),
(104, 14, 'Active Listening', 'Important', '2021-05-22'),
(105, 14, 'Writing Skills', 'Very Important', '2021-05-22'),
(106, 14, 'Verbal Communication', 'Of Little Importance', '2021-05-22'),
(107, 14, 'Mathematics Skills', 'Of Little Importance', '2021-05-22'),
(108, 14, 'Scientific Literacy', 'Of Little Importance', '2021-05-22'),
(109, 14, 'Digital Literacy', 'Unimportant', '2021-05-22'),
(110, 14, 'Critical Thinking', 'Unimportant', '2021-05-22'),
(111, 14, 'Participatory Learning', 'Of Little Importance', '2021-05-22'),
(112, 14, 'Creative and Innovation', 'Important', '2021-05-22'),
(113, 14, 'Leadership Skills', 'Important', '2021-05-22'),
(114, 14, 'Social Awareness', 'Of Little Importance', '2021-05-22'),
(115, 14, 'Service Orientation', 'Of Little Importance', '2021-05-22'),
(116, 14, 'Time Management', 'Important', '2021-05-22'),
(117, 14, 'Complex Problem Solving Skills', 'Important', '2021-05-22'),
(118, 14, 'Judgment and Decision Making', 'Very Important', '2021-05-22'),
(119, 14, 'Systems Analysis and Evaluation', 'Of Little Importance', '2021-05-22'),
(120, 15, 'Reading Comprehension', 'Of Little Importance', '2021-05-22'),
(121, 15, 'Active Listening', 'Of Little Importance', '2021-05-22'),
(122, 15, 'Writing Skills', 'Of Little Importance', '2021-05-22'),
(123, 15, 'Verbal Communication', 'Important', '2021-05-22'),
(124, 15, 'Mathematics Skills', 'Important', '2021-05-22'),
(125, 15, 'Scientific Literacy', 'Very Important', '2021-05-22'),
(126, 15, 'Digital Literacy', 'Important', '2021-05-22'),
(127, 15, 'Critical Thinking', 'Of Little Importance', '2021-05-22'),
(128, 15, 'Participatory Learning', 'Important', '2021-05-22'),
(129, 15, 'Creative and Innovation', 'Very Important', '2021-05-22'),
(130, 15, 'Leadership Skills', 'Very Important', '2021-05-22'),
(131, 15, 'Social Awareness', 'Important', '2021-05-22'),
(132, 15, 'Service Orientation', 'Important', '2021-05-22'),
(133, 15, 'Time Management', 'Of Little Importance', '2021-05-22'),
(134, 15, 'Complex Problem Solving Skills', 'Important', '2021-05-22'),
(135, 15, 'Judgment and Decision Making', 'Of Little Importance', '2021-05-22'),
(136, 15, 'Systems Analysis and Evaluation', 'Of Little Importance', '2021-05-22'),
(137, 16, 'Reading Comprehension', 'Important', '2021-05-22'),
(138, 16, 'Active Listening', 'Very Important', '2021-05-22'),
(139, 16, 'Writing Skills', 'Very Important', '2021-05-22'),
(140, 16, 'Verbal Communication', 'Very Important', '2021-05-22'),
(141, 16, 'Mathematics Skills', 'Very Important', '2021-05-22'),
(142, 16, 'Scientific Literacy', 'Important', '2021-05-22'),
(143, 16, 'Digital Literacy', 'Important', '2021-05-22'),
(144, 16, 'Critical Thinking', 'Very Important', '2021-05-22'),
(145, 16, 'Participatory Learning', 'Important', '2021-05-22'),
(146, 16, 'Creative and Innovation', 'Important', '2021-05-22'),
(147, 16, 'Leadership Skills', 'Very Important', '2021-05-22'),
(148, 16, 'Social Awareness', 'Very Important', '2021-05-22'),
(149, 16, 'Service Orientation', 'Very Important', '2021-05-22'),
(150, 16, 'Time Management', 'Important', '2021-05-22'),
(151, 16, 'Complex Problem Solving Skills', 'Important', '2021-05-22'),
(152, 16, 'Judgment and Decision Making', 'Very Important', '2021-05-22'),
(153, 16, 'Systems Analysis and Evaluation', 'Important', '2021-05-22'),
(154, 17, 'Reading Comprehension', 'Important', '2021-05-22'),
(155, 17, 'Active Listening', 'Very Important', '2021-05-22'),
(156, 17, 'Writing Skills', 'Very Important', '2021-05-22'),
(157, 17, 'Verbal Communication', 'Important', '2021-05-22'),
(158, 17, 'Mathematics Skills', 'Of Little Importance', '2021-05-22'),
(159, 17, 'Scientific Literacy', 'Important', '2021-05-22'),
(160, 17, 'Digital Literacy', 'Of Little Importance', '2021-05-22'),
(161, 17, 'Critical Thinking', 'Unimportant', '2021-05-22'),
(162, 17, 'Participatory Learning', 'Important', '2021-05-22'),
(163, 17, 'Creative and Innovation', 'Unimportant', '2021-05-22'),
(164, 17, 'Leadership Skills', 'Very Important', '2021-05-22'),
(165, 17, 'Social Awareness', 'Of Little Importance', '2021-05-22'),
(166, 17, 'Service Orientation', 'Unimportant', '2021-05-22'),
(167, 17, 'Time Management', 'Of Little Importance', '2021-05-22'),
(168, 17, 'Complex Problem Solving Skills', 'Of Little Importance', '2021-05-22'),
(169, 17, 'Judgment and Decision Making', 'Important', '2021-05-22'),
(170, 17, 'Systems Analysis and Evaluation', 'Of Little Importance', '2021-05-22'),
(171, 33, 'Reading Comprehension', 'Unimportant', '2021-05-22'),
(172, 33, 'Active Listening', 'Unimportant', '2021-05-22'),
(173, 33, 'Writing Skills', 'Of Little Importance', '2021-05-22'),
(174, 33, 'Verbal Communication', 'Of Little Importance', '2021-05-22'),
(175, 33, 'Mathematics Skills', 'Unimportant', '2021-05-22'),
(176, 33, 'Scientific Literacy', 'Unimportant', '2021-05-22'),
(177, 33, 'Digital Literacy', 'Of Little Importance', '2021-05-22'),
(178, 33, 'Critical Thinking', 'Of Little Importance', '2021-05-22'),
(179, 33, 'Participatory Learning', 'Unimportant', '2021-05-22'),
(180, 33, 'Creative and Innovation', 'Unimportant', '2021-05-22'),
(181, 33, 'Leadership Skills', 'Unimportant', '2021-05-22'),
(182, 33, 'Social Awareness', 'Of Little Importance', '2021-05-22'),
(183, 33, 'Service Orientation', 'Unimportant', '2021-05-22'),
(184, 33, 'Time Management', 'Of Little Importance', '2021-05-22'),
(185, 33, 'Complex Problem Solving Skills', 'Unimportant', '2021-05-22'),
(186, 33, 'Judgment and Decision Making', 'Of Little Importance', '2021-05-22'),
(187, 33, 'Systems Analysis and Evaluation', 'Unimportant', '2021-05-22'),
(188, 34, 'Reading Comprehension', 'Unimportant', '2021-05-22'),
(189, 34, 'Active Listening', 'Of Little Importance', '2021-05-22'),
(190, 34, 'Writing Skills', 'Unimportant', '2021-05-22'),
(191, 34, 'Verbal Communication', 'Of Little Importance', '2021-05-22'),
(192, 34, 'Mathematics Skills', 'Unimportant', '2021-05-22'),
(193, 34, 'Scientific Literacy', 'Of Little Importance', '2021-05-22'),
(194, 34, 'Digital Literacy', 'Unimportant', '2021-05-22'),
(195, 34, 'Critical Thinking', 'Of Little Importance', '2021-05-22'),
(196, 34, 'Participatory Learning', 'Unimportant', '2021-05-22'),
(197, 34, 'Creative and Innovation', 'Of Little Importance', '2021-05-22'),
(198, 34, 'Leadership Skills', 'Unimportant', '2021-05-22'),
(199, 34, 'Social Awareness', 'Important', '2021-05-22'),
(200, 34, 'Service Orientation', 'Very Important', '2021-05-22'),
(201, 34, 'Time Management', 'Of Little Importance', '2021-05-22'),
(202, 34, 'Complex Problem Solving Skills', 'Important', '2021-05-22'),
(203, 34, 'Judgment and Decision Making', 'Important', '2021-05-22'),
(204, 34, 'Systems Analysis and Evaluation', 'Of Little Importance', '2021-05-22');

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
(85, 10, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-21'),
(86, 13, 'Reading Comprehension', 'Satisfied', '2021-05-22'),
(87, 13, 'Active Listening', 'Very Satisfied', '2021-05-22'),
(88, 13, 'Writing Skills', 'Very Satisfied', '2021-05-22'),
(89, 13, 'Verbal Communication', 'Satisfied', '2021-05-22'),
(90, 13, 'Mathematics Skills', 'Satisfied', '2021-05-22'),
(91, 13, 'Scientific Literacy', 'Satisfied', '2021-05-22'),
(92, 13, 'Digital Literacy', 'Satisfied', '2021-05-22'),
(93, 13, 'Critical Thinking', 'Very Satisfied', '2021-05-22'),
(94, 13, 'Participatory Learning', 'Very Satisfied', '2021-05-22'),
(95, 13, 'Creative and Innovation', 'Satisfied', '2021-05-22'),
(96, 13, 'Leadership Skills', 'Satisfied', '2021-05-22'),
(97, 13, 'Social Awareness', 'Very Satisfied', '2021-05-22'),
(98, 13, 'Service Orientation', 'Very Satisfied', '2021-05-22'),
(99, 13, 'Time Management', 'Unsatisfied', '2021-05-22'),
(100, 13, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-22'),
(101, 13, 'Judgment and Decision Making', 'Satisfied', '2021-05-22'),
(102, 13, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-22'),
(103, 14, 'Reading Comprehension', 'Satisfied', '2021-05-22'),
(104, 14, 'Active Listening', 'Satisfied', '2021-05-22'),
(105, 14, 'Writing Skills', 'Unsatisfied', '2021-05-22'),
(106, 14, 'Verbal Communication', 'Unsatisfied', '2021-05-22'),
(107, 14, 'Mathematics Skills', 'Very Satisfied', '2021-05-22'),
(108, 14, 'Scientific Literacy', 'Unsatisfied', '2021-05-22'),
(109, 14, 'Digital Literacy', 'Satisfied', '2021-05-22'),
(110, 14, 'Critical Thinking', 'Very Satisfied', '2021-05-22'),
(111, 14, 'Participatory Learning', 'Satisfied', '2021-05-22'),
(112, 14, 'Creative and Innovation', 'Unsatisfied', '2021-05-22'),
(113, 14, 'Leadership Skills', 'Unsatisfied', '2021-05-22'),
(114, 14, 'Social Awareness', 'Satisfied', '2021-05-22'),
(115, 14, 'Service Orientation', 'Very Satisfied', '2021-05-22'),
(116, 14, 'Time Management', 'Unsatisfied', '2021-05-22'),
(117, 14, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-22'),
(118, 14, 'Judgment and Decision Making', 'Satisfied', '2021-05-22'),
(119, 14, 'Systems Analysis and Evaluation', 'Unsatisfied', '2021-05-22'),
(120, 15, 'Reading Comprehension', 'Very Satisfied', '2021-05-22'),
(121, 15, 'Active Listening', 'Unsatisfied', '2021-05-22'),
(122, 15, 'Writing Skills', 'Satisfied', '2021-05-22'),
(123, 15, 'Verbal Communication', 'Satisfied', '2021-05-22'),
(124, 15, 'Mathematics Skills', 'Very Satisfied', '2021-05-22'),
(125, 15, 'Scientific Literacy', 'Very Satisfied', '2021-05-22'),
(126, 15, 'Digital Literacy', 'Unsatisfied', '2021-05-22'),
(127, 15, 'Critical Thinking', 'Satisfied', '2021-05-22'),
(128, 15, 'Participatory Learning', 'Unsatisfied', '2021-05-22'),
(129, 15, 'Creative and Innovation', 'Unsatisfied', '2021-05-22'),
(130, 15, 'Leadership Skills', 'Unsatisfied', '2021-05-22'),
(131, 15, 'Social Awareness', 'Satisfied', '2021-05-22'),
(132, 15, 'Service Orientation', 'Satisfied', '2021-05-22'),
(133, 15, 'Time Management', 'Very Satisfied', '2021-05-22'),
(134, 15, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-22'),
(135, 15, 'Judgment and Decision Making', 'Satisfied', '2021-05-22'),
(136, 15, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-22'),
(137, 16, 'Reading Comprehension', 'Very Satisfied', '2021-05-22'),
(138, 16, 'Active Listening', 'Very Satisfied', '2021-05-22'),
(139, 16, 'Writing Skills', 'Satisfied', '2021-05-22'),
(140, 16, 'Verbal Communication', 'Satisfied', '2021-05-22'),
(141, 16, 'Mathematics Skills', 'Very Satisfied', '2021-05-22'),
(142, 16, 'Scientific Literacy', 'Very Satisfied', '2021-05-22'),
(143, 16, 'Digital Literacy', 'Very Satisfied', '2021-05-22'),
(144, 16, 'Critical Thinking', 'Very Satisfied', '2021-05-22'),
(145, 16, 'Participatory Learning', 'Satisfied', '2021-05-22'),
(146, 16, 'Creative and Innovation', 'Satisfied', '2021-05-22'),
(147, 16, 'Leadership Skills', 'Very Satisfied', '2021-05-22'),
(148, 16, 'Social Awareness', 'Satisfied', '2021-05-22'),
(149, 16, 'Service Orientation', 'Very Satisfied', '2021-05-22'),
(150, 16, 'Time Management', 'Satisfied', '2021-05-22'),
(151, 16, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-22'),
(152, 16, 'Judgment and Decision Making', 'Very Satisfied', '2021-05-22'),
(153, 16, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-22'),
(154, 17, 'Reading Comprehension', 'Satisfied', '2021-05-22'),
(155, 17, 'Active Listening', 'Very Satisfied', '2021-05-22'),
(156, 17, 'Writing Skills', 'Satisfied', '2021-05-22'),
(157, 17, 'Verbal Communication', 'Very Satisfied', '2021-05-22'),
(158, 17, 'Mathematics Skills', 'Satisfied', '2021-05-22'),
(159, 17, 'Scientific Literacy', 'Unsatisfied', '2021-05-22'),
(160, 17, 'Digital Literacy', 'Unsatisfied', '2021-05-22'),
(161, 17, 'Critical Thinking', 'Unsatisfied', '2021-05-22'),
(162, 17, 'Participatory Learning', 'Very Unsatisfied', '2021-05-22'),
(163, 17, 'Creative and Innovation', 'Satisfied', '2021-05-22'),
(164, 17, 'Leadership Skills', 'Very Satisfied', '2021-05-22'),
(165, 17, 'Social Awareness', 'Satisfied', '2021-05-22'),
(166, 17, 'Service Orientation', 'Satisfied', '2021-05-22'),
(167, 17, 'Time Management', 'Unsatisfied', '2021-05-22'),
(168, 17, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-05-22'),
(169, 17, 'Judgment and Decision Making', 'Unsatisfied', '2021-05-22'),
(170, 17, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-22'),
(171, 33, 'Reading Comprehension', 'Very Unsatisfied', '2021-05-22'),
(172, 33, 'Active Listening', 'Unsatisfied', '2021-05-22'),
(173, 33, 'Writing Skills', 'Very Unsatisfied', '2021-05-22'),
(174, 33, 'Verbal Communication', 'Unsatisfied', '2021-05-22'),
(175, 33, 'Mathematics Skills', 'Very Unsatisfied', '2021-05-22'),
(176, 33, 'Scientific Literacy', 'Unsatisfied', '2021-05-22'),
(177, 33, 'Digital Literacy', 'Very Unsatisfied', '2021-05-22'),
(178, 33, 'Critical Thinking', 'Unsatisfied', '2021-05-22'),
(179, 33, 'Participatory Learning', 'Very Unsatisfied', '2021-05-22'),
(180, 33, 'Creative and Innovation', 'Unsatisfied', '2021-05-22'),
(181, 33, 'Leadership Skills', 'Very Unsatisfied', '2021-05-22'),
(182, 33, 'Social Awareness', 'Unsatisfied', '2021-05-22'),
(183, 33, 'Service Orientation', 'Very Unsatisfied', '2021-05-22'),
(184, 33, 'Time Management', 'Very Unsatisfied', '2021-05-22'),
(185, 33, 'Complex Problem Solving Skills', 'Very Unsatisfied', '2021-05-22'),
(186, 33, 'Judgment and Decision Making', 'Very Unsatisfied', '2021-05-22'),
(187, 33, 'Systems Analysis and Evaluation', 'Very Unsatisfied', '2021-05-22'),
(188, 34, 'Reading Comprehension', 'Very Unsatisfied', '2021-05-22'),
(189, 34, 'Active Listening', 'Very Unsatisfied', '2021-05-22'),
(190, 34, 'Writing Skills', 'Very Unsatisfied', '2021-05-22'),
(191, 34, 'Verbal Communication', 'Very Unsatisfied', '2021-05-22'),
(192, 34, 'Mathematics Skills', 'Unsatisfied', '2021-05-22'),
(193, 34, 'Scientific Literacy', 'Unsatisfied', '2021-05-22'),
(194, 34, 'Digital Literacy', 'Unsatisfied', '2021-05-22'),
(195, 34, 'Critical Thinking', 'Unsatisfied', '2021-05-22'),
(196, 34, 'Participatory Learning', 'Unsatisfied', '2021-05-22'),
(197, 34, 'Creative and Innovation', 'Satisfied', '2021-05-22'),
(198, 34, 'Leadership Skills', 'Satisfied', '2021-05-22'),
(199, 34, 'Social Awareness', 'Satisfied', '2021-05-22'),
(200, 34, 'Service Orientation', 'Satisfied', '2021-05-22'),
(201, 34, 'Time Management', 'Very Satisfied', '2021-05-22'),
(202, 34, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-05-22'),
(203, 34, 'Judgment and Decision Making', 'Very Satisfied', '2021-05-22'),
(204, 34, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-22');

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
(5, 10, 'Likely', '2021-05-21'),
(6, 13, 'Likely', '2021-05-22'),
(7, 14, 'Likely', '2021-05-22'),
(8, 15, 'Unlikely', '2021-05-22'),
(9, 16, 'Very Likely', '2021-05-22'),
(10, 17, 'Unlikely', '2021-05-22'),
(11, 33, 'Very Unlikely', '2021-05-22'),
(12, 34, 'Likely', '2021-05-22');

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
(5, 10, 'Likely', '2021-05-21'),
(6, 13, 'Likely', '2021-05-22'),
(7, 14, 'Likely', '2021-05-22'),
(8, 15, 'Likely', '2021-05-22'),
(9, 16, 'Very Likely', '2021-05-22'),
(10, 17, 'Very Unlikely', '2021-05-22'),
(11, 33, 'Unlikely', '2021-05-22'),
(12, 34, 'Unlikely', '2021-05-22');

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
(55, 10, 'Able to provide innovative ideas to the company', 'Important', '2021-05-21'),
(56, 13, 'Willing to undergo training and/or further education', 'Important', '2021-05-22'),
(57, 13, 'Has strong and professional work ethic', 'Important', '2021-05-22'),
(58, 13, 'Willing to share knowledge and expertise within the company and/or community', 'Very Important', '2021-05-22'),
(59, 13, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-22'),
(60, 13, 'Is able to learn quickly the basic company operations', 'Very Important', '2021-05-22'),
(61, 13, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-22'),
(62, 13, 'Is able to master company operations', 'Important', '2021-05-22'),
(63, 13, 'Effective in both oral and written communication', 'Of Little Importance', '2021-05-22'),
(64, 13, 'Computer and Technical Literate', 'Important', '2021-05-22'),
(65, 13, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-22'),
(66, 13, 'Able to provide innovative ideas to the company', 'Very Important', '2021-05-22'),
(67, 14, 'Willing to undergo training and/or further education', 'Important', '2021-05-22'),
(68, 14, 'Has strong and professional work ethic', 'Very Important', '2021-05-22'),
(69, 14, 'Willing to share knowledge and expertise within the company and/or community', 'Of Little Importance', '2021-05-22'),
(70, 14, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-22'),
(71, 14, 'Is able to learn quickly the basic company operations', 'Very Important', '2021-05-22'),
(72, 14, 'Is able to provide solutions and contribute to the growth of the company', 'Of Little Importance', '2021-05-22'),
(73, 14, 'Is able to master company operations', 'Of Little Importance', '2021-05-22'),
(74, 14, 'Effective in both oral and written communication', 'Very Important', '2021-05-22'),
(75, 14, 'Computer and Technical Literate', 'Very Important', '2021-05-22'),
(76, 14, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-22'),
(77, 14, 'Able to provide innovative ideas to the company', 'Of Little Importance', '2021-05-22'),
(78, 15, 'Willing to undergo training and/or further education', 'Very Important', '2021-05-22'),
(79, 15, 'Has strong and professional work ethic', 'Important', '2021-05-22'),
(80, 15, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-22'),
(81, 15, 'Willing and has a positive attitude towards working with others', 'Of Little Importance', '2021-05-22'),
(82, 15, 'Is able to learn quickly the basic company operations', 'Very Important', '2021-05-22'),
(83, 15, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-05-22'),
(84, 15, 'Is able to master company operations', 'Of Little Importance', '2021-05-22'),
(85, 15, 'Effective in both oral and written communication', 'Very Important', '2021-05-22'),
(86, 15, 'Computer and Technical Literate', 'Of Little Importance', '2021-05-22'),
(87, 15, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-22'),
(88, 15, 'Able to provide innovative ideas to the company', 'Of Little Importance', '2021-05-22'),
(89, 16, 'Willing to undergo training and/or further education', 'Important', '2021-05-22'),
(90, 16, 'Has strong and professional work ethic', 'Important', '2021-05-22'),
(91, 16, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-22'),
(92, 16, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-22'),
(93, 16, 'Is able to learn quickly the basic company operations', 'Very Important', '2021-05-22'),
(94, 16, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-22'),
(95, 16, 'Is able to master company operations', 'Very Important', '2021-05-22'),
(96, 16, 'Effective in both oral and written communication', 'Important', '2021-05-22'),
(97, 16, 'Computer and Technical Literate', 'Important', '2021-05-22'),
(98, 16, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-22'),
(99, 16, 'Able to provide innovative ideas to the company', 'Very Important', '2021-05-22'),
(100, 17, 'Willing to undergo training and/or further education', 'Unimportant', '2021-05-22'),
(101, 17, 'Has strong and professional work ethic', 'Of Little Importance', '2021-05-22'),
(102, 17, 'Willing to share knowledge and expertise within the company and/or community', 'Of Little Importance', '2021-05-22'),
(103, 17, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-22'),
(104, 17, 'Is able to learn quickly the basic company operations', 'Of Little Importance', '2021-05-22'),
(105, 17, 'Is able to provide solutions and contribute to the growth of the company', 'Unimportant', '2021-05-22'),
(106, 17, 'Is able to master company operations', 'Of Little Importance', '2021-05-22'),
(107, 17, 'Effective in both oral and written communication', 'Important', '2021-05-22'),
(108, 17, 'Computer and Technical Literate', 'Important', '2021-05-22'),
(109, 17, 'Effective and efficient in accomplishing tasks', 'Of Little Importance', '2021-05-22'),
(110, 17, 'Able to provide innovative ideas to the company', 'Of Little Importance', '2021-05-22'),
(111, 33, 'Willing to undergo training and/or further education', 'Unimportant', '2021-05-22'),
(112, 33, 'Has strong and professional work ethic', 'Of Little Importance', '2021-05-22'),
(113, 33, 'Willing to share knowledge and expertise within the company and/or community', 'Unimportant', '2021-05-22'),
(114, 33, 'Willing and has a positive attitude towards working with others', 'Of Little Importance', '2021-05-22'),
(115, 33, 'Is able to learn quickly the basic company operations', 'Unimportant', '2021-05-22'),
(116, 33, 'Is able to provide solutions and contribute to the growth of the company', 'Unimportant', '2021-05-22'),
(117, 33, 'Is able to master company operations', 'Unimportant', '2021-05-22'),
(118, 33, 'Effective in both oral and written communication', 'Unimportant', '2021-05-22'),
(119, 33, 'Computer and Technical Literate', 'Unimportant', '2021-05-22'),
(120, 33, 'Effective and efficient in accomplishing tasks', 'Of Little Importance', '2021-05-22'),
(121, 33, 'Able to provide innovative ideas to the company', 'Unimportant', '2021-05-22'),
(122, 34, 'Willing to undergo training and/or further education', 'Very Important', '2021-05-22'),
(123, 34, 'Has strong and professional work ethic', 'Important', '2021-05-22'),
(124, 34, 'Willing to share knowledge and expertise within the company and/or community', 'Of Little Importance', '2021-05-22'),
(125, 34, 'Willing and has a positive attitude towards working with others', 'Unimportant', '2021-05-22'),
(126, 34, 'Is able to learn quickly the basic company operations', 'Unimportant', '2021-05-22'),
(127, 34, 'Is able to provide solutions and contribute to the growth of the company', 'Of Little Importance', '2021-05-22'),
(128, 34, 'Is able to master company operations', 'Important', '2021-05-22'),
(129, 34, 'Effective in both oral and written communication', 'Very Important', '2021-05-22'),
(130, 34, 'Computer and Technical Literate', 'Important', '2021-05-22'),
(131, 34, 'Effective and efficient in accomplishing tasks', 'Of Little Importance', '2021-05-22'),
(132, 34, 'Able to provide innovative ideas to the company', 'Unimportant', '2021-05-22');

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
(55, 10, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-21'),
(56, 13, 'Willing to undergo training and/or further education', 'Very Satisfied', '2021-05-22'),
(57, 13, 'Has strong and professional work ethic', 'Satisfied', '2021-05-22'),
(58, 13, 'Willing to share knowledge and expertise within the company and/or community', 'Very Satisfied', '2021-05-22'),
(59, 13, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-22'),
(60, 13, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-22'),
(61, 13, 'Is able to provide solutions and contribute to the growth of the company', 'Very Satisfied', '2021-05-22'),
(62, 13, 'Is able to master company operations', 'Very Satisfied', '2021-05-22'),
(63, 13, 'Effective in both oral and written communication', 'Unsatisfied', '2021-05-22'),
(64, 13, 'Computer and Technical Literate', 'Satisfied', '2021-05-22'),
(65, 13, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-22'),
(66, 13, 'Able to provide innovative ideas to the company', 'Unsatisfied', '2021-05-22'),
(67, 14, 'Willing to undergo training and/or further education', 'Unsatisfied', '2021-05-22'),
(68, 14, 'Has strong and professional work ethic', 'Very Satisfied', '2021-05-22'),
(69, 14, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-22'),
(70, 14, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-22'),
(71, 14, 'Is able to learn quickly the basic company operations', 'Unsatisfied', '2021-05-22'),
(72, 14, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-22'),
(73, 14, 'Is able to master company operations', 'Unsatisfied', '2021-05-22'),
(74, 14, 'Effective in both oral and written communication', 'Satisfied', '2021-05-22'),
(75, 14, 'Computer and Technical Literate', 'Satisfied', '2021-05-22'),
(76, 14, 'Effective and efficient in accomplishing tasks', 'Very Satisfied', '2021-05-22'),
(77, 14, 'Able to provide innovative ideas to the company', 'Very Satisfied', '2021-05-22'),
(78, 15, 'Willing to undergo training and/or further education', 'Unsatisfied', '2021-05-22'),
(79, 15, 'Has strong and professional work ethic', 'Unsatisfied', '2021-05-22'),
(80, 15, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-22'),
(81, 15, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-22'),
(82, 15, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-22'),
(83, 15, 'Is able to provide solutions and contribute to the growth of the company', 'Very Satisfied', '2021-05-22'),
(84, 15, 'Is able to master company operations', 'Very Satisfied', '2021-05-22'),
(85, 15, 'Effective in both oral and written communication', 'Satisfied', '2021-05-22'),
(86, 15, 'Computer and Technical Literate', 'Unsatisfied', '2021-05-22'),
(87, 15, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-22'),
(88, 15, 'Able to provide innovative ideas to the company', 'Very Satisfied', '2021-05-22'),
(89, 16, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-22'),
(90, 16, 'Has strong and professional work ethic', 'Very Satisfied', '2021-05-22'),
(91, 16, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-22'),
(92, 16, 'Willing and has a positive attitude towards working with others', 'Very Satisfied', '2021-05-22'),
(93, 16, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-22'),
(94, 16, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-22'),
(95, 16, 'Is able to master company operations', 'Very Satisfied', '2021-05-22'),
(96, 16, 'Effective in both oral and written communication', 'Satisfied', '2021-05-22'),
(97, 16, 'Computer and Technical Literate', 'Very Satisfied', '2021-05-22'),
(98, 16, 'Effective and efficient in accomplishing tasks', 'Very Satisfied', '2021-05-22'),
(99, 16, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-22'),
(100, 17, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-22'),
(101, 17, 'Has strong and professional work ethic', 'Satisfied', '2021-05-22'),
(102, 17, 'Willing to share knowledge and expertise within the company and/or community', 'Unsatisfied', '2021-05-22'),
(103, 17, 'Willing and has a positive attitude towards working with others', 'Unsatisfied', '2021-05-22'),
(104, 17, 'Is able to learn quickly the basic company operations', 'Unsatisfied', '2021-05-22'),
(105, 17, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-22'),
(106, 17, 'Is able to master company operations', 'Unsatisfied', '2021-05-22'),
(107, 17, 'Effective in both oral and written communication', 'Satisfied', '2021-05-22'),
(108, 17, 'Computer and Technical Literate', 'Very Satisfied', '2021-05-22'),
(109, 17, 'Effective and efficient in accomplishing tasks', 'Unsatisfied', '2021-05-22'),
(110, 17, 'Able to provide innovative ideas to the company', 'Unsatisfied', '2021-05-22'),
(111, 33, 'Willing to undergo training and/or further education', 'Very Unsatisfied', '2021-05-22'),
(112, 33, 'Has strong and professional work ethic', 'Unsatisfied', '2021-05-22'),
(113, 33, 'Willing to share knowledge and expertise within the company and/or community', 'Very Unsatisfied', '2021-05-22'),
(114, 33, 'Willing and has a positive attitude towards working with others', 'Unsatisfied', '2021-05-22'),
(115, 33, 'Is able to learn quickly the basic company operations', 'Very Unsatisfied', '2021-05-22'),
(116, 33, 'Is able to provide solutions and contribute to the growth of the company', 'Very Unsatisfied', '2021-05-22'),
(117, 33, 'Is able to master company operations', 'Very Unsatisfied', '2021-05-22'),
(118, 33, 'Effective in both oral and written communication', 'Very Unsatisfied', '2021-05-22'),
(119, 33, 'Computer and Technical Literate', 'Unsatisfied', '2021-05-22'),
(120, 33, 'Effective and efficient in accomplishing tasks', 'Very Unsatisfied', '2021-05-22'),
(121, 33, 'Able to provide innovative ideas to the company', 'Very Unsatisfied', '2021-05-22'),
(122, 34, 'Willing to undergo training and/or further education', 'Very Unsatisfied', '2021-05-22'),
(123, 34, 'Has strong and professional work ethic', 'Very Unsatisfied', '2021-05-22'),
(124, 34, 'Willing to share knowledge and expertise within the company and/or community', 'Unsatisfied', '2021-05-22'),
(125, 34, 'Willing and has a positive attitude towards working with others', 'Unsatisfied', '2021-05-22'),
(126, 34, 'Is able to learn quickly the basic company operations', 'Unsatisfied', '2021-05-22'),
(127, 34, 'Is able to provide solutions and contribute to the growth of the company', 'Unsatisfied', '2021-05-22'),
(128, 34, 'Is able to master company operations', 'Very Unsatisfied', '2021-05-22'),
(129, 34, 'Effective in both oral and written communication', 'Unsatisfied', '2021-05-22'),
(130, 34, 'Computer and Technical Literate', 'Very Unsatisfied', '2021-05-22'),
(131, 34, 'Effective and efficient in accomplishing tasks', 'Unsatisfied', '2021-05-22'),
(132, 34, 'Able to provide innovative ideas to the company', 'Very Unsatisfied', '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q13`
--

CREATE TABLE `emp_survey_q13` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_others` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q13`
--

INSERT INTO `emp_survey_q13` (`answer_id`, `user_id`, `answer_body`, `answer_others`, `date_response`) VALUES
(1, 6, 'Include practical experience as part of the academic programs', '', '2021-05-21'),
(2, 6, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-21'),
(3, 3, 'Design courses that are more relevant to the needs of employers', '', '2021-05-21'),
(4, 3, 'Include practical experience as part of the academic programs', '', '2021-05-21'),
(5, 3, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-21'),
(6, 3, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-21'),
(7, 5, 'Include practical experience as part of the academic programs', '', '2021-05-21'),
(8, 5, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-21'),
(9, 5, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-21'),
(10, 8, 'Include practical experience as part of the academic programs', '', '2021-05-21'),
(11, 10, 'Design courses that are more relevant to the needs of employers', '', '2021-05-21'),
(12, 10, 'Include practical experience as part of the academic programs', '', '2021-05-21'),
(13, 10, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-21'),
(14, 10, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-21'),
(15, 13, 'Include practical experience as part of the academic programs', '', '2021-05-22'),
(16, 13, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-22'),
(17, 13, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-22'),
(18, 14, 'Design courses that are more relevant to the needs of employers', '', '2021-05-22'),
(19, 14, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-22'),
(20, 15, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-22'),
(21, 16, 'Include practical experience as part of the academic programs', '', '2021-05-22'),
(22, 17, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-22'),
(23, 17, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-22'),
(24, 33, 'other', 'Something here', '2021-05-22'),
(26, 34, 'other', 'Apply something', '2021-05-22');

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
(5, 10, 'Moderately part Important', '2021-05-21'),
(6, 13, 'Moderately part Important', '2021-05-22'),
(7, 14, 'Moderately part Important', '2021-05-22'),
(8, 15, 'Moderately part Important', '2021-05-22'),
(9, 16, 'Moderately part Important', '2021-05-22'),
(10, 17, 'Of Little Importance', '2021-05-22'),
(11, 33, 'Unimportant', '2021-05-22'),
(12, 34, 'Unimportant', '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q15`
--

CREATE TABLE `emp_survey_q15` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_yes` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q15`
--

INSERT INTO `emp_survey_q15` (`answer_id`, `user_id`, `answer_body`, `answer_yes`, `date_response`) VALUES
(1, 33, 'Yes', 'Nothing really', '2021-05-22'),
(3, 34, 'No', '', '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q16`
--

CREATE TABLE `emp_survey_q16` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_yes` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q16`
--

INSERT INTO `emp_survey_q16` (`answer_id`, `user_id`, `answer_body`, `answer_yes`, `date_response`) VALUES
(1, 33, 'Yes', 'Just testing', '2021-05-22'),
(3, 34, 'Yes', 'So lazy', '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q17`
--

CREATE TABLE `emp_survey_q17` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_yes` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_survey_q17`
--

INSERT INTO `emp_survey_q17` (`answer_id`, `user_id`, `answer_body`, `answer_yes`, `date_response`) VALUES
(1, 33, 'Yes', 'Very strong', '2021-05-22'),
(3, 34, 'No', '', '2021-05-22');

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
(2, 'jane@gmail.com', '5e6a6d87aeb4c389a1361cd463856eaf6466cefd82bae5408a94e05d337f319f49e38ccda424e0c1b7e1e376ea6a7e8becc3', '$2y$10$HK2Ellp9/Mw89bckEg9PbeJFwComfd5.4BQjcHAkqRs3Aei.lBbAi', '12345', 1, '2021-05-20 09:51:01', '2021-05-22 09:51:56'),
(3, 'john@gmail.com', '8478bfb97840a79d6e2ed2b61d8977487a72d685597ed4fd8054cfbbbd833940abf39322c47692ea321d2f85cbd4a3ba5163', '$2y$10$lQOQtTfN4Avsbuy8ROlUOOY.qSr2rz49GSYF..QNCCd2rsJ7bZlLG', '12345', 2, '2021-05-20 09:51:01', '2021-05-22 18:18:17'),
(4, 'admin@gmail.com', 'bbf073a951128bc7beff931d97845715e08ff3744445f6cd8324d2565f4c32f65c31262cdc54e5abe022e499f34a2248504b', '$2y$10$e45H4/zzpxHEKiEdqPK02eknJKZyXTVGScKHRATLBF5.W8km4vUMy', 'admin', 0, '2021-05-20 09:51:01', '2021-05-23 12:50:25'),
(5, 'juan@gmail.com', '7c61c8b92cfeb880d8d99b58533e324c07cc461d3e573b17369f2a377ef1f2dbb47629ea4b1511290a91319a6d5f7944cb78', '$2y$10$MiSINz5TurNhGjk0sIbzKu9eaOepd9WkQ0XD/uw3j9hryuTtZYuke', '12345', 3, '2021-05-20 09:51:01', '2021-05-21 09:04:27'),
(6, 'jen@gmail.com', 'e81e1502f327062b08945aa5be675c4488af8a411baedd922657ef346d1e73dee7aa19618a4572c0e898107677eeb64f72a8', '$2y$10$qTvg/EBRTtcpi.aHX5tFyegP/C3BO.b.y3HAvt.herwmej3URnK.q', 'ZDxyt3kL', 2, '2021-05-21 06:43:37', '2021-05-21 06:50:57'),
(7, 'admin2@mail.com', '26c1731abfdaa3d0c9efe3a99af10d1de301119324548f3707149281a3eb21ca1517321df1945b15de4d1e8eddf454a5875d', '$2y$10$nCAYW6LBthx9kBH8ropAreufnByt/O6AC02iMDAUHCqCaByN2WG.G', 'HE1nKkNg', 0, '2021-05-21 06:44:13', '2021-05-21 06:44:13'),
(8, 'jiji@mail.com', 'acb0d136743deda5472f6d450f2576bd4827af42b55b86c7a74326ca1bc1e1ef413354ff3f91914faeea31c3c49be91d24b5', '$2y$10$/obFaBBGMHAq.mv2xSgMUuSn23a2rFhfAKX3bxrfU45VchTzTlX2a', '15VkWCFg', 3, '2021-05-21 06:44:46', '2021-05-21 09:07:54'),
(9, 'jj@mail.com', '7e514e8836b1af412dfbbc5723b09f9d9fada2124e9790f369006eeb8459c5b0776cd8511f00052363889f56690c9bb7abc5', '$2y$10$yo8YoqxoQje3FAYYAFX8hOEiyynwqaPf0iTvo.AfrMuum7aZDFsAK', '72bD8ekW', 1, '2021-05-21 06:45:03', '2021-05-21 06:45:03'),
(10, 'jon@mail.com', 'a4a36353b3de1d0c67830c919c322eb3c5ac8b3314c7a5c28bf78b2da17ca83373dfdc81e2c6ace045a6554ef8b6f321658a', '$2y$10$XPMpNskyE4DW86y/fIzAMO5ZjpRjvWI30JWFRrLTYPwSbmcJN5Cum', 'xVgyLp3w', 2, '2021-05-21 06:45:18', '2021-05-21 09:10:43'),
(13, 'kd1@mail.com', '72aa0d32cf00552ef3fedbc37ca613763bd3426e155981ed94220c493c157e13868537578d3446b952bc27ddb74937a741eb', '$2y$10$rD6Tds256I3BKMxd.x5E5uOCdVXVPOuR8yr8WqwaBR4Dk0GTzU2VS', '12345', 2, '2021-05-22 08:27:10', '2021-05-22 14:51:00'),
(14, 'kd2@mail.com', 'b421b9bfb52ea099d716e15d5266fd39a38a9931d7a4e75681321d09519bfda76c7e2af6b08819b2992835795ca604d3c000', '$2y$10$5hFyAf4O1v80ELZHi6U/Ee/Edbo5C1NSkvrfOqbHu0xSsYUc33v5u', '12345', 2, '2021-05-22 08:27:37', '2021-05-22 15:00:05'),
(15, 'kd3@mail.com', '273241dbd3730cecf3cd44c377269801e6f477673b2d139631dab8883e534c919b3d63554307e496f1a7e7a3a5c2dc673bf8', '$2y$10$KiA9GAFBPMFWQEyV3BuuUOM6ykV9RhQU8H9vGy26QDtJX1nz2W7tK', '12345', 2, '2021-05-22 08:28:15', '2021-05-22 15:05:51'),
(16, 'kd4@mail.com', '3c3b94dfcc4f2477e4272857d6e6ff9314715fad9d4e43140013b3857d77fb1174c1c13beafe4c1e7ee91eb66d0ff73578ba', '$2y$10$4z7RoxzWyzhyIg/zuEPRn.aNUgzwvAQHC0fm7pKZ4QvwzzBCF./J6', '12345', 2, '2021-05-22 08:28:27', '2021-05-22 15:13:45'),
(17, 'kd5@mail.com', '36168d796a39c88e35fdbcef61ba5137035f8766c3729ac3854cdc074f9a3c260ca4ce80e7afbe6a7429ce8a45e5e8bab4df', '$2y$10$FgmZInozU3KC1mj4zWDxM.jf4vxg.mXL1bHKk78uvWJBxyeG9RKF2', '12345', 2, '2021-05-22 08:28:38', '2021-05-22 15:18:50'),
(18, 'kd6@mail.com', '73522e1aa73cc0115e6ae80f441b29d9ceac004a7ec31d0b7ec1c2ba91d639d7a742cdf80e99d38835de826fc3b662188158', '$2y$10$0p9ngNG.RL/BFg4S3UftTusnNwpMgJooJG1AFkZJ7wyLiHdN9flOy', '12345', 2, '2021-05-22 08:28:50', '2021-05-22 08:28:50'),
(19, 'kd7@mail.com', '3746b137c4b664c0426d6f2837f97b6bd6d14b2d548d287be8b93254fe7a5a26410b5293b257cda2674b15bdc8e63df6a661', '$2y$10$vSbJg.J8TETxYQTenRuzaOWL5.KBwAYsneDz8TgUy1.6RTnG52.pi', '12345', 2, '2021-05-22 08:29:10', '2021-05-22 08:29:10'),
(20, 'kd8@mail.com', '71f299d0cbf3aedef04bb61049ab56b5d8ee672b5c56f974d49589986ce0664862a3d79605bc499e3c0ab237adb125d43d0e', '$2y$10$9QQWdLHY2pM8C53S44YdouEj/sehlBUyZ4iq.zrWzOScPD.CAHKf2', '12345', 2, '2021-05-22 08:29:35', '2021-05-22 08:29:35'),
(21, 'kd9@mail.com', 'c52da94d90a15ee5027c958bd8e739a856a19c5393fda9b6f55c7acbb1b6ddc1e9b05c17b6692575d8727bc7770527e418c1', '$2y$10$V6gujOKyHlyBeDW3hhiqBe9QZSbj4x8siIeFgEVfpZgiPs8w9N3D6', '12345', 2, '2021-05-22 08:29:58', '2021-05-22 08:29:58'),
(22, 'kd10@mail.com', '77253c73ea9e059ef2e6ed266bdef59239a1b52529cf4426c19fc3385725987a8f55670fd52605c1002beb9902bb6d7fec21', '$2y$10$L/LG5Fa1lgFsMXKT2wZFBOvPWwOMikOORTGt/r1bKuxSyuuI9fy96', '12345', 2, '2021-05-22 08:30:13', '2021-05-22 08:30:13'),
(23, 'kd11@mail.com', '726708c74d251b834ecc3e0c6fbfcf1735abb2f703d139d6b2a17e3a49b7e520d8c9b0f567c41dd0c55ea6ecddd2d6d0fd7a', '$2y$10$R0ug1GyPQ73hladUBnX6l.KfJ7FRwe0diUXVVnXUD9VJZNHw.9t7S', '12345', 2, '2021-05-22 08:30:24', '2021-05-22 08:30:24'),
(24, 'kd12@mail.com', 'b9c92d2cdeb6d895ce9c653825897299517eed578e96bbc5a0d67b2c55583168001d6fad82f0ed0a646ef9bd1dd05c69f256', '$2y$10$Vl2wo5Rc3xqYEjCYJJL8reKVLoGBT/atOfXfWmGbpYDdhrTTW4c7a', '12345', 2, '2021-05-22 08:30:33', '2021-05-22 08:30:33'),
(25, 'kd13@mail.com', '1b45856431044e7f07a096c4a2c694b85f2710fabde7132ea7499bb63d853fa530c5e6203d45f2d8fe1298f430e3869c6cde', '$2y$10$BXZxd/GwpURhSsvS2ljotOD4Won0sYbFEvTuhsn3tZfu75yEFY286', '12345', 2, '2021-05-22 08:30:45', '2021-05-22 08:30:45'),
(26, 'kd14@mail.com', '93ebc97649ce58bf8483a1ad4c135543b2ef6138f51471aee35c6b4c4c6310117586f487b83a74b985385f786dac1ef17429', '$2y$10$f0wcVDgGJJVRTfCXH8ZPZOQ9jQqyAnNinPA8Bm5sRoerMfYexBaFq', '12345', 2, '2021-05-22 08:30:55', '2021-05-22 08:30:55'),
(27, 'kd15@mail.com', 'fb06dd08690fc86033af2b0b515c1560e8c356a615c36a8dbcaea5da7b5544d9f30d1d5f8d27a7a79de10d41f33e9445eed0', '$2y$10$AKY9NL9np.fbOCChKOe/g.V/NjzVqhCI1Cn3c/SRCJxXaP46NZQh.', '12345', 2, '2021-05-22 08:31:06', '2021-05-22 08:31:06'),
(28, 'kd16@mail.com', 'd3f5c55f3581b6810b602bacd41256c574098b59c5b735d833a7fe6b23f50a74997bc5b2147d7a90b58912ca183b29d71112', '$2y$10$jAW.s84iwc2k8fwwcX8C3uwp11hpW2LrGednY1B3wWQenxM2ryvkW', '12345', 2, '2021-05-22 08:31:21', '2021-05-22 08:31:21'),
(29, 'kd17@mail.com', '0ce330a58171d1e50f3f40bb56e4d170b72593a8cc8a4e7e11377f1e747616ff6b4a1c5c3fbef6100a824857e3438b6db64f', '$2y$10$C2pN33bA.HeQWM90rZBzducPjOEvdZ99VGMMyo3SyMPj11sCjKCSy', '12345', 2, '2021-05-22 08:31:33', '2021-05-22 08:31:33'),
(30, 'kd18@mail.com', 'f336571c308cf49328b62067254f3b660ab89db34e244cc3218705c9c7c8b3027b8af09ad9523ebf0adc86cbab735745fafc', '$2y$10$vXU9PfTxbAQDUjHLU5ubEe31VK3CHEuiFbSmJau2P08HhLz7JJUSi', '12345', 2, '2021-05-22 08:31:46', '2021-05-22 08:31:46'),
(31, 'kd19@mail.com', '3515e31837a2e02ca19f556db887511daf536d21f1d02e8619c3fa656a4ea45646f85a27076634e6ed7445706a80a991bb05', '$2y$10$W7lVgO4jOCTZhzbmgKl9b.kcfcc5ABEiUWhlqvcV18kwt2J.AX6Ty', '12345', 2, '2021-05-22 08:31:56', '2021-05-22 08:31:56'),
(32, 'kd20@mail.com', 'a2b60f6bd6c3098cf1b5024a8ce90761f9e7edd70f77c7641bee8e2ab5b60bbc624c27e483f20a08ccb4ef58d1a723801305', '$2y$10$fcW0oTJ5g8Aj0XDU2x.6EOPFsGGDZVw2M1zblygHo84JrLUFr/Ype', '12345', 2, '2021-05-22 08:32:11', '2021-05-22 08:32:11'),
(33, 'sample@mail.com', 'd192585d48cbafcee364feb909f149a1a386562a6b4145841e8c7186c3f81d360772dafe1ad4656ca5b6eeba0d353502ea68', '$2y$10$LbE8eajC2QJDC19XXA9GHu35nS5E2173qhvG7IWepau8AKtEq.mEu', '12345', 3, '2021-05-22 19:36:54', '2021-05-22 19:37:16'),
(34, 'sample2@mail.com', 'eee5827e326b01e9ac189788e74b2d3a0b9cc315936f769e8dbb3d745616f7fc2823296d1be323e5db8ae197862893234076', '$2y$10$H7LrDReGUU0J.v6EJe8/xuJDsM4qZkx5TkU9tRTd1SDT8kB07eRKq', 'klhFLXV1', 3, '2021-05-22 19:45:19', '2021-05-22 19:45:34');

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=833;

--
-- AUTO_INCREMENT for table `emp_survey_q1`
--
ALTER TABLE `emp_survey_q1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q2`
--
ALTER TABLE `emp_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_survey_q2_1`
--
ALTER TABLE `emp_survey_q2_1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_survey_q3`
--
ALTER TABLE `emp_survey_q3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `emp_survey_q4`
--
ALTER TABLE `emp_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_survey_q5`
--
ALTER TABLE `emp_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_survey_q6`
--
ALTER TABLE `emp_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_survey_q7`
--
ALTER TABLE `emp_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `emp_survey_q8`
--
ALTER TABLE `emp_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `emp_survey_q9`
--
ALTER TABLE `emp_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_survey_q10`
--
ALTER TABLE `emp_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_survey_q11`
--
ALTER TABLE `emp_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `emp_survey_q12`
--
ALTER TABLE `emp_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `emp_survey_q13`
--
ALTER TABLE `emp_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `emp_survey_q14`
--
ALTER TABLE `emp_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emp_survey_q15`
--
ALTER TABLE `emp_survey_q15`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp_survey_q16`
--
ALTER TABLE `emp_survey_q16`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_survey_q17`
--
ALTER TABLE `emp_survey_q17`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
