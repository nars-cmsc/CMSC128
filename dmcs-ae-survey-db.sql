-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 12:53 PM
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
(347, 17, 10, 'No', '2021-05-21');

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

--
-- Dumping data for table `emp_survey_q1`
--

INSERT INTO `emp_survey_q1` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 6, 'Private', '2021-05-21'),
(2, 3, 'Public', '2021-05-21'),
(3, 5, 'Private', '2021-05-21'),
(4, 8, 'Public', '2021-05-21'),
(5, 10, 'Public', '2021-05-21');

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
(5, 10, 'Abroad', '2021-05-21');

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
(2, 10, 'Asia', 'Southeast Asia', '2021-05-21');

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `emp_survey_q1`
--
ALTER TABLE `emp_survey_q1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q2`
--
ALTER TABLE `emp_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q2_1`
--
ALTER TABLE `emp_survey_q2_1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
