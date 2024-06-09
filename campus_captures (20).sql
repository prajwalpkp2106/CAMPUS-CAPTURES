-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 05:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus_captures`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sr.no` int(20) NOT NULL,
  `club_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `reg_id` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sr.no`, `club_name`, `username`, `email`, `reg_id`, `password`, `code`, `status`) VALUES
(1, 'Art Circle', 'artcircle_admin', 'prasadac01@gmail.com', 'C2K221104', '$2y$10$lWRufQciKDG9vE9v.bu8DODJPholgwoQG2xd.ONHpoY7X30W3CI2q', 0, ''),
(2, 'Pictoreal', 'pictoreal_admin', 'padoleprajwal2106@gmail.com', 'C2K22129', '$2y$10$0vwHA7Ka2fTa57N0rit1d.qgPuVGifBtxX8JXKzuWvzOJhkqB8WIO', 0, ''),
(4, 'IEEE', 'ieee_admin', 'keziahjohn22@gmail.com', 'C2K221102', '$2y$10$rICqA5C8J78g23G1rOVpHuva63IGzurlfYjzCjP7bNKBzE4IwIjlK', 0, ''),
(5, 'INC', 'inc_admin', 'tanishavikhe@gmail.com', 'E2K22160', '$2y$10$Q3bBRoQxXGWJWy7pkbg91.UL9qY.UCwYDYX0K7VN1eCq4Q7Iu8gTK', 725382, ''),
(6, 'guest', 'guest', 'madhavadhav09@gmail.com', '', 'pass@guest', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `art_circle`
--

CREATE TABLE `art_circle` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `gallery` longblob NOT NULL,
  `details` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `art_circle`
--

INSERT INTO `art_circle` (`id`, `event_date`, `event_name`, `gallery`, `details`) VALUES
(107, '2023-06-09', 'Art Exhibition UP', '', ' vdd f f fssxxxz UP'),
(108, '2023-06-10', 'Test case 1', '', 'bhjhjbhnmm,n'),
(109, '2023-06-07', 'new ', '', 'vfsvfvdfvdd'),
(110, '2023-06-16', 'define', '', 'vsvfvfdfvfd d'),
(111, '2023-06-01', 'test case 2 3 4 5', '', 'dvs d d d hjyjfjfy 5'),
(112, '2023-05-29', 'svvxd n', '', ' d vc cv cv dv '),
(113, '2023-05-31', 'Test case 44', '', 'vdsdfvsddvs'),
(114, '2023-06-06', 'qwer', '', 'cvccs'),
(115, '2023-06-05', 'new session 56', '', ' vf vf fvvfdvdf'),
(116, '2023-06-05', 'new event 3 ', '', 'gbfgbnkngbnbbnbbcbnvk nnnmkmkmmmmmmmmlml'),
(117, '2023-06-20', 'test case 07', '', 'vddcdsvsfbcv cvml cvx'),
(118, '2023-06-03', 'new jghkhk', '', 'jhhkhkkkgh'),
(120, '2023-06-12', 'new', '', 'svvscssvs'),
(121, '2022-02-26', 'vdfvdvdvdcc', '', 'ggkgkjkjhk'),
(123, '2029-11-26', 'dcvv', '', 'sdvfbbbv c'),
(124, '2023-06-05', '8 May Targets', '', 'jhbclmas;AXSJHYUDSGHJIKNHBGVF'),
(125, '2023-06-24', 'new wnww', '', 'kmlkmk'),
(126, '2023-05-30', 'bnvnmb,,m', '', '  bn   '),
(127, '2023-06-30', 'new agent ', '', 'invasion'),
(128, '2023-06-21', 'upload text', '', 'uy yjg hjk'),
(129, '2023-06-20', ' cvx vv vcz c', '', 'jbfbvbxvvxcvvxcvxv'),
(130, '2023-06-07', '  ..mjjj', '', '  ,.,.... .'),
(131, '2023-06-07', 'new test ', '', 'cdvxvv'),
(132, '2023-06-08', 'actual', '', 'nnnmm'),
(133, '2023-06-11', 'added', '', 'vsvcxcxv'),
(134, '2023-07-06', '1 july', '', 'bgbgbcbb'),
(135, '2022-10-27', 'puru', '', 'sxasxcdcd'),
(136, '2022-01-04', ' s ', '', ' ccc'),
(137, '2023-07-05', 'gfgd', '', 'fdvvdfv'),
(138, '2021-05-13', 'date testing 2', '', 'yuhvniorbvniwrfnwefneervnirnvrvnn wrvnwifnweifn'),
(139, '2023-07-18', 'test', '', 'nbiowrnvowgvpq'),
(140, '2023-07-03', 'NEW2 ', '', ' vkwbrkwvn  mqeqmdq'),
(141, '2023-07-16', 'Art Exhibition', '', 'm ,m ,m '),
(142, '2023-07-15', 'puru', '', ' , .'),
(143, '2023-08-04', 'new', '', 'The main aim of Firodiya Karandak Intercollege competition is to give a platform for college students to showcase their artistic musings. Firodiya is more focused on grand scale plays inclusive of dance, live music, different art-forms like sandArt, thread-Art, live painting, shadow Art, UV and many more with acting.');

-- --------------------------------------------------------

--
-- Table structure for table `art_circle_images`
--

CREATE TABLE `art_circle_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `art_circle_images`
--

INSERT INTO `art_circle_images` (`id`, `file_name`, `uploaded_on`, `event_id`) VALUES
(342, 'uploads/art_circle/SamplePhoto_11.jpg', '2023-06-19 17:48:25', 107),
(343, 'uploads/art_circle/SamplePhoto_12.jpg', '2023-06-19 17:48:25', 107),
(344, 'uploads/art_circle/SamplePhoto_13.jpg', '2023-06-19 17:48:25', 107),
(345, 'uploads/art_circle/SamplePhoto_9.jpg', '2023-06-20 17:57:34', 20),
(346, 'uploads/art_circle/SamplePhoto_8.jpg', '2023-06-20 17:58:07', 20),
(347, 'uploads/art_circle/SamplePhoto_8.jpg', '2023-06-20 18:02:58', 20),
(348, 'uploads/art_circle/SamplePhoto_8.jpg', '2023-06-20 18:03:41', 20),
(349, 'uploads/art_circle/SamplePhoto_3.jpg', '2023-06-20 18:59:31', 20),
(350, 'uploads/art_circle/WIN_20230221_18_34_08_Pro.jpg', '2023-06-20 18:59:59', 20),
(351, 'uploads/art_circle/WIN_20230225_15_38_06_Pro.jpg', '2023-06-20 19:00:38', 20),
(352, 'uploads/art_circle/WIN_20230225_15_38_06_Pro.jpg', '2023-06-20 19:01:30', 20),
(353, 'uploads/art_circle/Cat03 - Copy.jpg', '2023-06-20 19:02:36', 108),
(354, 'uploads/art_circle/download.jpg', '2023-06-20 19:02:46', 108),
(355, 'uploads/art_circle/images (1).jpeg', '2023-06-20 19:05:37', 108),
(356, 'uploads/art_circle/images (1).jpeg', '2023-06-20 19:06:00', 108),
(357, 'uploads/art_circle/download.jpeg', '2023-06-20 19:06:33', 0),
(358, 'uploads/art_circle/Farm-structure-by-economic-size-Standard-Output-categories-in-Hungary-Hu-and-Roma', '2023-06-20 19:07:49', 109),
(359, 'uploads/art_circle/images.jpeg', '2023-06-20 19:08:39', 109),
(360, 'uploads/art_circle/images.jpg', '2023-06-20 19:09:58', 109),
(361, 'uploads/art_circle/images.jpg', '2023-06-20 19:10:37', 109),
(362, 'uploads/art_circle/images.jpg', '2023-06-20 19:10:50', 109),
(367, 'uploads/art_circle/jpg_44-2.jpg', '2023-06-20 19:30:03', 0),
(368, 'uploads/art_circle/jpg_44-2.jpg', '2023-06-20 19:31:28', 0),
(369, 'uploads/art_circle/jpg_44-2.jpg', '2023-06-20 19:35:57', 112),
(370, 'uploads/art_circle/download.jpg', '2023-06-20 19:36:26', 113),
(371, 'uploads/art_circle/Farm-structure-by-economic-size-Standard-Output-categories-in-Hungary-Hu-and-Roma', '2023-06-20 19:36:26', 113),
(372, 'uploads/art_circle/images (1).jpeg', '2023-06-20 19:36:26', 113),
(373, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.09.29.jpg', '2023-06-20 19:38:29', 113),
(374, 'uploads/art_circle/tree-736885_1280.jpg', '2023-06-20 19:38:55', 113),
(375, 'uploads/art_circle/Screenshot (1).png', '2023-06-20 19:40:02', 114),
(377, 'uploads/art_circle/Screenshot (3).png', '2023-06-20 19:40:02', 114),
(378, 'uploads/art_circle/Screenshot (6).png', '2023-06-20 19:40:20', 114),
(379, 'uploads/art_circle/Screenshot (7).png', '2023-06-20 19:40:20', 114),
(380, 'uploads/art_circle/Screenshot (8).png', '2023-06-20 19:40:20', 114),
(381, 'uploads/art_circle/Screenshot_20230225_112953.png', '2023-06-20 19:42:16', 115),
(382, 'uploads/art_circle/Screenshot_20230226_034545.png', '2023-06-20 19:42:16', 115),
(383, 'uploads/art_circle/Screenshot_20230227_113427.png', '2023-06-20 19:42:16', 115),
(384, 'uploads/art_circle/Screenshot (8).png', '2023-06-20 19:43:32', 115),
(385, 'uploads/art_circle/Screenshot (8).png', '2023-06-20 19:43:39', 115),
(387, 'uploads/art_circle/Cat03 - Copy.jpg', '2023-06-20 19:53:21', 117),
(388, 'uploads/art_circle/Cat03.jpg', '2023-06-20 19:53:21', 117),
(389, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-06-20 19:53:21', 117),
(390, 'uploads/art_circle/download (1).jpeg', '2023-06-20 19:53:21', 117),
(391, 'uploads/art_circle/download (1).jpg', '2023-06-20 19:53:21', 117),
(392, 'uploads/art_circle/download.jpeg', '2023-06-20 19:53:21', 117),
(393, 'uploads/art_circle/istockphoto-517188688-612x612.jpg', '2023-06-20 19:53:40', 117),
(394, 'uploads/art_circle/jpg_44-2.jpg', '2023-06-20 19:53:40', 117),
(395, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.21.50.jpg', '2023-06-20 19:59:26', 0),
(396, 'uploads/art_circle/Screenshot (9).png', '2023-06-20 20:04:45', 0),
(405, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-06-24 16:04:53', 120),
(406, 'uploads/art_circle/Screenshot (3).png', '2023-06-26 15:52:55', 121),
(407, 'uploads/art_circle/Screenshot (4).png', '2023-06-26 15:52:55', 121),
(408, 'uploads/art_circle/Screenshot (5).png', '2023-06-26 15:52:55', 121),
(409, 'uploads/art_circle/Screenshot (6).png', '2023-06-26 15:52:55', 121),
(410, 'uploads/art_circle/Screenshot (7).png', '2023-06-26 15:52:55', 121),
(414, 'uploads/art_circle/Screenshot (2).png', '2023-06-26 16:06:52', 123),
(415, 'uploads/art_circle/Screenshot (3).png', '2023-06-26 16:06:52', 123),
(416, 'uploads/art_circle/Screenshot (4).png', '2023-06-26 16:06:52', 123),
(417, 'uploads/art_circle/Screenshot (5).png', '2023-06-26 16:06:52', 123),
(418, 'uploads/art_circle/Screenshot (6).png', '2023-06-26 16:06:52', 123),
(420, 'uploads/art_circle/Screenshot (4).png', '2023-06-26 16:10:28', 124),
(422, 'uploads/art_circle/Screenshot (6).png', '2023-06-26 16:10:28', 124),
(423, 'uploads/art_circle/Screenshot (7).png', '2023-06-26 16:10:28', 124),
(428, 'uploads/art_circle/Screenshot (6).png', '2023-06-27 14:24:17', 125),
(433, 'uploads/art_circle/Cat03.jpg', '2023-06-27 20:06:03', 129),
(434, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-06-27 20:06:03', 129),
(435, 'uploads/art_circle/download (1).jpeg', '2023-06-27 20:06:03', 129),
(436, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-06-27 21:04:09', 130),
(437, 'uploads/art_circle/download (1).jpeg', '2023-06-27 21:04:09', 130),
(438, 'uploads/art_circle/download (1).jpg', '2023-06-27 21:04:09', 130),
(439, 'uploads/art_circle/download.jpeg', '2023-06-27 21:04:09', 130),
(440, 'uploads/art_circle/website.jpg', '2023-06-30 22:48:03', 131),
(441, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-06-30 22:48:56', 131),
(442, 'uploads/art_circle/download (1).jpeg', '2023-06-30 22:48:56', 131),
(443, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.09.27.jpg', '2023-06-30 22:52:59', 132),
(444, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.09.29.jpg', '2023-06-30 22:52:59', 132),
(445, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.21.50.jpg', '2023-06-30 22:52:59', 132),
(446, 'uploads/art_circle/Cat03.jpg', '2023-06-30 23:24:13', 133),
(447, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-06-30 23:24:13', 133),
(448, 'uploads/art_circle/images (1).jpeg', '2023-06-30 23:30:03', 0),
(449, 'uploads/art_circle/images (1).jpeg', '2023-06-30 23:30:41', 0),
(450, 'uploads/art_circle/Cat03.jpg', '2023-06-30 23:32:27', 0),
(451, 'uploads/art_circle/Cat03.jpg', '2023-06-30 23:36:10', 0),
(456, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:46:31', 0),
(457, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:46:42', 0),
(458, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:48:10', 0),
(459, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:48:16', 0),
(460, 'uploads/art_circle/download (1).jpeg', '2023-07-01 00:48:42', 0),
(461, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:50:01', 0),
(462, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:50:42', 0),
(463, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:55:37', 115),
(464, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:55:54', 115),
(465, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:56:11', 115),
(466, 'uploads/art_circle/Cat03.jpg', '2023-07-01 00:56:18', 115),
(469, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-07-01 00:57:33', 134),
(470, 'uploads/art_circle/download (1).jpeg', '2023-07-01 00:57:33', 134),
(472, 'uploads/art_circle/download.jpg', '2023-07-01 00:57:58', 134),
(473, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-07-01 01:28:24', 135),
(478, 'uploads/art_circle/download (1).jpg', '2023-07-01 01:39:13', 136),
(479, 'uploads/art_circle/Cat03.jpg', '2023-07-01 14:14:41', 136),
(480, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-07-01 14:14:41', 136),
(481, 'uploads/art_circle/download (1).jpeg', '2023-07-01 14:14:41', 136),
(483, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.09.27.jpg', '2023-07-01 14:58:24', 138),
(484, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.09.29.jpg', '2023-07-01 14:58:24', 138),
(485, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.21.50.jpg', '2023-07-01 14:58:24', 138),
(486, 'uploads/art_circle/download (1) - Copy.jpeg', '2023-07-01 15:14:28', 139),
(487, 'uploads/art_circle/download (1).jpeg', '2023-07-01 15:14:28', 139),
(488, 'uploads/art_circle/download (1).jpg', '2023-07-01 15:14:28', 139),
(489, 'uploads/art_circle/Cat03 - Copy.jpg', '2023-07-01 15:15:24', 140),
(490, 'uploads/art_circle/Cat03.jpg', '2023-07-01 15:15:24', 140),
(491, 'uploads/art_circle/Cat03.jpg', '2023-07-01 23:21:39', 141),
(492, 'uploads/art_circle/download (1).jpeg', '2023-07-01 23:42:43', 142),
(493, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.09.29.jpg', '2023-07-02 12:04:36', 143),
(494, 'uploads/art_circle/WhatsApp Image 2023-06-11 at 22.21.50.jpg', '2023-07-02 12:04:36', 143),
(495, 'uploads/art_circle/images (1).jpeg', '2023-07-03 00:20:41', 138);

-- --------------------------------------------------------

--
-- Table structure for table `ieee`
--

CREATE TABLE `ieee` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `gallery` longblob NOT NULL,
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ieee`
--

INSERT INTO `ieee` (`id`, `event_date`, `event_name`, `gallery`, `details`) VALUES
(1, '2023-01-08', 'CLASH/RC', '', 'CLASH/RC is a c/c++ and python based competitive coding contest held in high regard for conceptual challenges it brings to a coders mind, CLASH beckons all the programmers out there amateur and experienced alike, to participate and enhance their coding skills.'),
(2, '2023-02-08', 'CRETRONIX', '', 'Cretronix is a competition based on electronics theory and electrical components which tests the participants knowledge right from resistors, inductors upto ICs and amplifiers for students from FE to BE.\r\nChallenge your brains to clear a test where you demonstrate your knowledge in the field of electronics, physics, logical ability and build a circuit by interpreting the hints provided.'),
(3, '2023-03-08', 'DataWiz', '', '“I want you to think about data as the next nature resource.“ - Virginia Rometty, IBM CEO\r\nThe only way to mine this resource is to get your hands dirty and dig through thousands of entries in a spreadsheet to find the right attributes.\r\nCredenz presents DataWiz, a data science and machine learning oriented event. Create the most accurate ML model for the given dataset.\r\nDatawiz gives you opportunity to wave your magical wands and become a true wizard of data.'),
(4, '2023-04-02', 'NTH', '', 'An online treasure hunt where players find different pieces of clues on various websites to solve a variety of puzzles. Solve a set of riddles with important clues and get to the finish line before anyone can.\r\nDecrypt the encrypted, go along the trail and race with others to win! This is your chance to know how good you are with web and test your surfing skills.'),
(5, '2023-05-27', 'WebWeaver', '', 'Credenz brings to you WebWeaver, where your potential to integrate technology and creativity will be put to test!\r\nAn aesthetically pleasing and user-friendly website is necessary to keep visitors engaged online. If you think you have the flair to create such a site, WebWeaver is the competition for you!\r\nA perfect integration of technology and creativity will lead you to win this competition.'),
(6, '2023-06-04', 'XOdia ', '', 'Credenz presents XOdia, a free AI coding event in which your algorithms battle it out in a unique game designed for two players!\r\nGain the opportunity to test your programming skills, thinking strategy and coding efficiency.'),
(7, '2023-01-01', 'CREDENZ', '', 'Credenz is the annual technical festival organised by the PICT IEEE Student Branch. Started in 2004, with a view to elicit the best out of each and every one, it has grown to become one of the finest technical events in Pune. Credenz aims not only to infuse a competitive spirit among participants, but also widen their horizons in the ever-changing field of technology via myriad seminars and workshops.'),
(8, '2023-08-17', 'Roboliga ', '', 'Roboliga is all about creative bots and nail-biting matches that will keep you glued to the edge of your seats!\r\nCredenz presents RoboLIGA - A concoction of speed, agility and reflexes. Flex your bot-making and bot-control skills against the best makers in the city. Live your wildest fantasy of two robots juking it out in this blend of brains and brawns.');

-- --------------------------------------------------------

--
-- Table structure for table `ieee_images`
--

CREATE TABLE `ieee_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ieee_images`
--

INSERT INTO `ieee_images` (`id`, `file_name`, `uploaded_on`, `event_id`) VALUES
(1, 'uploads/ieee/clash2-min.jpg', '2023-07-03 23:07:50', 1),
(2, 'uploads/ieee/clash3-min.jpg', '2023-07-03 23:07:50', 1),
(3, 'uploads/ieee/clash4-min.jpg', '2023-07-03 23:07:50', 1),
(4, 'uploads/ieee/clash3-min.jpg', '2023-07-03 23:08:55', 2),
(5, 'uploads/ieee/cretronix2-min.jpg', '2023-07-03 23:08:55', 2),
(6, 'uploads/ieee/cretronix-min.jpg', '2023-07-03 23:08:56', 2),
(7, 'uploads/ieee/datawiz2-min.jpg', '2023-07-03 23:09:37', 3),
(8, 'uploads/ieee/datawiz3-min.jpg', '2023-07-03 23:09:37', 3),
(9, 'uploads/ieee/nth2-min.jpg', '2023-07-03 23:09:37', 3),
(10, 'uploads/ieee/WhatsApp Image 2023-07-03 at 19.20.25.jpg', '2023-07-03 23:11:26', 4),
(11, 'uploads/ieee/WhatsApp Image 2023-07-03 at 19.21.02.jpg', '2023-07-03 23:11:26', 4),
(12, 'uploads/ieee/xodia2-min.jpg', '2023-07-03 23:11:26', 4),
(13, 'uploads/ieee/webweaver-min.jpg', '2023-07-03 23:12:35', 5),
(14, 'uploads/ieee/WhatsApp Image 2023-07-03 at 19.18.28.jpg', '2023-07-03 23:12:35', 5),
(15, 'uploads/ieee/xodia4-min-min.jpg', '2023-07-03 23:12:35', 5),
(16, 'uploads/ieee/datawiz3-min.jpg', '2023-07-03 23:13:51', 6),
(17, 'uploads/ieee/datawiz-min.jpg', '2023-07-03 23:13:51', 6),
(18, 'uploads/ieee/WhatsApp Image 2023-07-03 at 19.17.08.jpg', '2023-07-03 23:13:51', 6),
(19, 'uploads/ieee/xodia5-min.jpg', '2023-07-03 23:13:51', 6),
(20, 'uploads/ieee/credenz.027d8cf4726375a177d8.jpg', '2023-07-03 23:19:28', 7),
(21, 'uploads/ieee/photo_2023-07-03_23-17-04.jpg', '2023-07-03 23:19:28', 7),
(22, 'uploads/ieee/photo_2023-07-03_23-17-13.jpg', '2023-07-03 23:19:28', 7),
(23, 'uploads/ieee/20294479_1621718931180689_5792877313861995944_n.jpg', '2023-07-03 23:22:23', 8),
(24, 'uploads/ieee/22550358_1700523466633568_4719564979399687211_o.jpg', '2023-07-03 23:22:23', 8),
(25, 'uploads/ieee/roboliga3-min.jpg', '2023-07-03 23:22:24', 8),
(26, 'uploads/ieee/roboliga5-min.jpg', '2023-07-03 23:22:24', 8);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `uploaded_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inc`
--

CREATE TABLE `inc` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `gallery` longblob NOT NULL,
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inc`
--

INSERT INTO `inc` (`id`, `event_date`, `event_name`, `gallery`, `details`) VALUES
(25, '2023-06-30', 'new', '', 'Team Pictoreal, in association with NSS, organized a blood donation camp at the PICT campus on 15th February, 2023 in association with the Poona Serological Institute Blood Bank. Unlike every year, we received an excellent response for this flagship event. This event aimed to exercise our duty of giving back to society. 270+ donors donated blood making this event a grand success.');

-- --------------------------------------------------------

--
-- Table structure for table `inc_images`
--

CREATE TABLE `inc_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inc_images`
--

INSERT INTO `inc_images` (`id`, `file_name`, `uploaded_on`, `event_id`) VALUES
(70, 'uploads/inc/Screenshot (1).png', '2023-07-04 08:13:00', 25),
(71, 'uploads/inc/Screenshot (2).png', '2023-07-04 08:13:00', 25),
(72, 'uploads/inc/Screenshot (3).png', '2023-07-04 08:13:00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `pictoreal`
--

CREATE TABLE `pictoreal` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `gallery` longblob NOT NULL,
  `details` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pictoreal`
--

INSERT INTO `pictoreal` (`id`, `event_date`, `event_name`, `gallery`, `details`) VALUES
(1, '2022-02-07', 'MANTHAN', '', 'Let your ideas and thoughts give you inspiration. All creativity comes from your imagination - you first imagine and then you create\". Manthan is a platform that encourages PICTians to express their thoughts and imaginative skills in the form of public speaking.'),
(2, '2021-02-06', 'MANTHAN', '', 'Let your ideas and thoughts give you inspiration. All creativity comes from your imagination - you first imagine and then you create\". Manthan is a platform that encourages PICTians to express their thoughts and imaginative skills in the form of public speaking. Manthan consisted of two rounds which were held on the October 25, 2022.'),
(3, '2020-02-05', 'MANTHAN', '', 'Let your ideas and thoughts give you inspiration. All creativity comes from your imagination - you first imagine and then you create\". Manthan is a platform that encourages PICTians to express their thoughts and imaginative skills in the form of public speaking.'),
(4, '2020-03-11', 'CAREER GUIDANCE', '', 'Team Picto Social successfully conducted the career guidance event of the club on the 6th of January, 2023 in Yashwantrao Chavan Madhyamik Vidyalaya to make the underprivileged students aware of different career options available and upcoming. Inspiring students of the coming generation to follow the work CA path of their life on their own. Around 200+ students of 9th and 10th grade participated.'),
(5, '2021-03-12', 'CAREER GUIDANCE', '', 'Team Picto Social successfully conducted the career guidance event of the club on the 6th of January, 2023 in Yashwantrao Chavan Madhyamik Vidyalaya to make the underprivileged students aware of different career options available and upcoming. Inspiring students of the coming generation to follow the work CA path of their life on their own. Around 200+ students of 9th and 10th grade participated.'),
(6, '2022-03-15', 'CAREER GUIDANCE', '', 'Team Picto Social successfully conducted the career guidance event of the club on the 6th of January, 2023 in Yashwantrao Chavan Madhyamik Vidyalaya to make the underprivileged students aware of different career options available and upcoming. Inspiring students of the coming generation to follow the work CA path of their life on their own. Around 200+ students of 9th and 10th grade participated.'),
(7, '2020-04-15', 'PICS-O-REEL', '', 'A picture is worth a thousand words\". Picsoreel, an art and photography exhibition-cum-competition, organized to provide the students of PICT with a chance to showcase their artistic talents and celebrate their creativity. Conducted on 17th February, 2023 a total of 360+ entries were received this year! The results were announced on 25th February by tallying the votes for all the submissions. The top voted entries were declared as the winners.'),
(8, '2021-04-16', 'PICS-O-REEL', '', 'A picture is worth a thousand words\". Picsoreel, an art and photography exhibition-cum-competition, organized to provide the students of PICT with a chance to showcase their artistic talents and celebrate their creativity. Conducted on 17th February, 2023 a total of 360+ entries were received this year! The results were announced on 25th February by tallying the votes for all the submissions. The top voted entries were declared as the winners.'),
(11, '2020-01-03', 'BLOOD DONATION', '', 'Team Pictoreal, in association with NSS, organized a blood donation camp at the PICT campus on 15th February, 2023 in association with the Poona Serological Institute Blood Bank. Unlike every year, we received an excellent response for this flagship event. This event aimed to exercise our duty of giving back to society. 270+ donors donated blood making this event a grand success.'),
(12, '2021-01-04', 'BLOOD DONATION', '', 'Team Pictoreal, in association with NSS, organized a blood donation camp at the PICT campus on 15th February, 2023 in association with the Poona Serological Institute Blood Bank. Unlike every year, we received an excellent response for this flagship event. This event aimed to exercise our duty of giving back to society. 270+ donors donated blood making this event a grand success.'),
(13, '2022-01-06', 'BLOOD DONATION', '', 'Team Pictoreal, in association with NSS, organized a blood donation camp at the PICT campus on 15th February, 2023 in association with the Poona Serological Institute Blood Bank. Unlike every year, we received an excellent response for this flagship event. This event aimed to exercise our duty of giving back to society. 270+ donors donated blood making this event a grand success.'),
(14, '2022-04-16', 'PICS-O-REEL', '', 'A picture is worth a thousand words\". Picsoreel, an art and photography exhibition-cum-competition, organized to provide the students of PICT with a chance to showcase their artistic talents and celebrate their creativity. Conducted on 17th February, 2023 a total of 360+ entries were received this year! The results were announced on 25th February by tallying the votes for all the submissions. The top voted entries were declared as the winners.'),
(15, '2020-06-21', 'BE PHOTOSHOOT', '', 'The most awaited BE Photoshoot took place on Saturday, April 12th, 2023. Team Pictoreal and eight hundred BE students were on the campus, ready for the photoshoot with the esteemed presence of the faculty and other staff.'),
(16, '2021-06-22', 'BE PHOTOSHOOT', '', 'The most awaited BE Photoshoot took place on Saturday, April 12th, 2023. Team Pictoreal and eight hundred BE students were on the campus, ready for the photoshoot with the esteemed presence of the faculty and other staff.'),
(17, '2022-06-25', 'BE PHOTOSHOOT', '', 'The most awaited BE Photoshoot took place on Saturday, April 12th, 2023. Team Pictoreal and eight hundred BE students were on the campus, ready for the photoshoot with the esteemed presence of the faculty and other staff.'),
(18, '2020-07-21', 'PARICHAY', '', 'Parichay is an Event which is conducted annually by Pictoreal to introduce the club to the new FEs. This year Parichay was conducted on 7th December 2022. Purpose of this event was to convey information about the club to freshers, and encourage them to join the Club and be a part of Pictoreal Family.'),
(19, '2021-07-22', 'PARICHAY', '', 'Parichay is an Event which is conducted annually by Pictoreal to introduce the club to the new FEs. This year Parichay was conducted on 7th December 2022. Purpose of this event was to convey information about the club to freshers, and encourage them to join the Club and be a part of Pictoreal Family.'),
(20, '2022-07-30', 'PARICHAY', '', 'Parichay is an Event which is conducted annually by Pictoreal to introduce the club to the new FEs. This year Parichay was conducted on 7th December 2022. Purpose of this event was to convey information about the club to freshers, and encourage them to join the Club and be a part of Pictoreal Family.'),
(21, '2020-08-06', 'PICTOSOCIAL VISIT', '', 'Ayodha Charitable Trust Visit\r\nOn the 15th of October 2022, a group of 29 volunteers from PictoSocial visited Ayodhya Charitable Trust School for specially-abled students. The purpose of the visit was to participate in the daily activities of the school and interact with the students and staff. The visit lasted for three hours, and the volunteers had a chance to interact with more than 80 specially-abled students of varying age groups.'),
(22, '2021-08-08', 'PICTOSOCIAL VISIT', '', 'Ayodha Charitable Trust Visit\r\nOn the 15th of October 2022, a group of 29 volunteers from PictoSocial visited Ayodhya Charitable Trust School for specially-abled students. The purpose of the visit was to participate in the daily activities of the school and interact with the students and staff. The visit lasted for three hours, and the volunteers had a chance to interact with more than 80 specially-abled students of varying age groups.'),
(23, '2022-08-13', 'PICTOSOCIAL VISIT', '', 'Ayodha Charitable Trust Visit\r\nOn the 15th of October 2022, a group of 29 volunteers from PictoSocial visited Ayodhya Charitable Trust School for specially-abled students. The purpose of the visit was to participate in the daily activities of the school and interact with the students and staff. The visit lasted for three hours, and the volunteers had a chance to interact with more than 80 specially-abled students of varying age groups.'),
(24, '2020-09-04', 'INTERVIEWS', '', 'This year, our first interviewee was Arsh Goyal, a technogeek, famous youtube educator and a Software Engineer at Samsung. This interview was conducted on 30th December 2022. We had our 2nd interview of Retd. Major Gen. Yash Mor. The interview was exceptionally great. It was an amazing experience for us, lot of things to learn from his thoughts, the leadership qualities he has, his strategies, etc.'),
(25, '2023-09-06', 'INTERVIEWS', '', 'This year, our first interviewee was Arsh Goyal, a technogeek, famous youtube educator and a Software Engineer at Samsung. This interview was conducted on 30th December 2022. We had our 2nd interview of Retd. Major Gen. Yash Mor. The interview was exceptionally great. It was an amazing experience for us, lot of things to learn from his thoughts, the leadership qualities he has, his strategies, etc.'),
(26, '2022-09-18', 'INTERVIEWS', '', 'This year, our first interviewee was Arsh Goyal, a technogeek, famous youtube educator and a Software Engineer at Samsung. This interview was conducted on 30th December 2022. We had our 2nd interview of Retd. Major Gen. Yash Mor. The interview was exceptionally great. It was an amazing experience for us, lot of things to learn from his thoughts, the leadership qualities he has, his strategies, etc.'),
(27, '2020-11-19', 'DONATION DRIVE', '', 'To celebrate the joy of giving and play its responsibility towards the underprivileged in society, like every year, Pictoreal organized its Donation Drive for Vol 24. The benefactions received from students and staff alike included monetary donations, clothes, footwear, bags, and books. The colleges generosity was reflected not only in spirit but also in its massive monetary collection. A closing ceremony was held on the 20th of May to distribute the collected donations amongst three beneficiary NGOs.'),
(28, '2021-11-24', 'DONATION DRIVE', '', 'To celebrate the joy of giving and play its responsibility towards the underprivileged in society, like every year, Pictoreal organized its Donation Drive for Vol24. The benefactions received from students and staff alike included monetary donations, clothes, footwear, bags, and books. The colleges generosity was reflected not only in spirit but also in its massive monetary collection. A closing ceremony was held on the 20th of May to distribute the collected donations amongst three beneficiary NGOs.');

-- --------------------------------------------------------

--
-- Table structure for table `pictoreal_images`
--

CREATE TABLE `pictoreal_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pictoreal_images`
--

INSERT INTO `pictoreal_images` (`id`, `file_name`, `uploaded_on`, `event_id`) VALUES
(1, 'uploads/pictoreal/DSC_0245.jpeg', '2023-07-03 18:18:08', 1),
(2, 'uploads/pictoreal/IMG_1643.jpeg', '2023-07-03 18:18:08', 1),
(3, 'uploads/pictoreal/IMG_1703.jpeg', '2023-07-03 18:18:08', 1),
(4, 'uploads/pictoreal/DSC_0418.jpeg', '2023-07-03 18:18:50', 2),
(5, 'uploads/pictoreal/DSC_0472.jpg', '2023-07-03 18:18:50', 2),
(6, 'uploads/pictoreal/IMG_1731.jpeg', '2023-07-03 18:18:50', 2),
(7, 'uploads/pictoreal/DSC_0303.jpeg', '2023-07-03 18:19:29', 3),
(8, 'uploads/pictoreal/DSC_0421.jpeg', '2023-07-03 18:19:29', 3),
(9, 'uploads/pictoreal/DSC_0466.jpeg', '2023-07-03 18:19:29', 3),
(10, 'uploads/pictoreal/IMG20230106111424 (1).jpg', '2023-07-03 18:21:21', 4),
(11, 'uploads/pictoreal/IMG20230106111424.jpg', '2023-07-03 18:21:21', 4),
(12, 'uploads/pictoreal/IMG20230106113615.jpg', '2023-07-03 18:21:21', 4),
(13, 'uploads/pictoreal/IMG_20230106_113454[1].jpg', '2023-07-03 18:22:22', 5),
(14, 'uploads/pictoreal/LRM_20230106_140059 (1).jpg', '2023-07-03 18:22:22', 5),
(15, 'uploads/pictoreal/LRM_20230106_140847 (1).jpg', '2023-07-03 18:22:22', 5),
(16, 'uploads/pictoreal/LRM_20230106_132731 (1).jpg', '2023-07-03 18:23:07', 6),
(17, 'uploads/pictoreal/LRM_20230106_134714 (1) (1).jpg', '2023-07-03 18:23:07', 6),
(18, 'uploads/pictoreal/WhatsApp Image 2020-07-22 at 13.40.33.jpeg', '2023-07-03 18:23:07', 6),
(19, 'uploads/pictoreal/DSC_0325.jpeg', '2023-07-03 18:24:12', 7),
(20, 'uploads/pictoreal/DSC_0344.jpeg', '2023-07-03 18:24:12', 7),
(21, 'uploads/pictoreal/DSC_0370.jpg', '2023-07-03 18:24:12', 7),
(22, 'uploads/pictoreal/DSC_0390.jpeg', '2023-07-03 18:24:12', 7),
(23, 'uploads/pictoreal/DSC_0283.jpeg', '2023-07-03 18:24:56', 8),
(24, 'uploads/pictoreal/DSC_0285.jpeg', '2023-07-03 18:24:56', 8),
(25, 'uploads/pictoreal/DSC_0304.jpeg', '2023-07-03 18:24:56', 8),
(29, 'uploads/pictoreal/DSC_0849.jpeg', '2023-07-03 18:29:38', 11),
(30, 'uploads/pictoreal/DSC_0858.jpg', '2023-07-03 18:29:38', 11),
(32, 'uploads/pictoreal/DSC_0878.jpg', '2023-07-03 18:30:37', 12),
(33, 'uploads/pictoreal/DSC_0949.jpg', '2023-07-03 18:30:37', 12),
(34, 'uploads/pictoreal/WhatsApp Image 2023-07-03 at 17.42.58.jpg', '2023-07-03 18:30:37', 12),
(35, 'uploads/pictoreal/DSC_0842.jpg', '2023-07-03 18:31:15', 13),
(36, 'uploads/pictoreal/DSC_0975.jpg', '2023-07-03 18:31:15', 13),
(37, 'uploads/pictoreal/WhatsApp Image 2023-07-03 at 17.42.59.jpg', '2023-07-03 18:31:15', 13),
(38, 'uploads/pictoreal/DSC_0005.jpeg', '2023-07-03 18:32:30', 14),
(39, 'uploads/pictoreal/DSC_0263.jpeg', '2023-07-03 18:32:30', 14),
(40, 'uploads/pictoreal/DSC_2733.jpeg', '2023-07-03 18:32:30', 14),
(41, 'uploads/pictoreal/IMG_1209.jpg', '2023-07-03 18:46:13', 15),
(42, 'uploads/pictoreal/IMG_1211.jpg', '2023-07-03 18:46:13', 15),
(43, 'uploads/pictoreal/PS1.jpg', '2023-07-03 18:46:13', 15),
(44, 'uploads/pictoreal/IMG_0943.jpg', '2023-07-03 18:47:00', 16),
(45, 'uploads/pictoreal/IMG_0957.jpg', '2023-07-03 18:47:00', 16),
(46, 'uploads/pictoreal/PS2.jpg', '2023-07-03 18:47:00', 16),
(47, 'uploads/pictoreal/1.jpeg', '2023-07-03 18:47:36', 17),
(48, 'uploads/pictoreal/2.jpeg', '2023-07-03 18:47:36', 17),
(49, 'uploads/pictoreal/IMG_1185.jpg', '2023-07-03 18:47:36', 17),
(50, 'uploads/pictoreal/DSC_0041.jpg', '2023-07-03 18:49:01', 18),
(51, 'uploads/pictoreal/DSC_0051.jpg', '2023-07-03 18:49:01', 18),
(52, 'uploads/pictoreal/DSC_0101.jpg', '2023-07-03 18:49:01', 18),
(53, 'uploads/pictoreal/DSC_0105.jpg', '2023-07-03 18:49:39', 19),
(54, 'uploads/pictoreal/IMG20221207163550.jpg', '2023-07-03 18:49:39', 19),
(55, 'uploads/pictoreal/IMG20221207175032.jpg', '2023-07-03 18:49:39', 19),
(56, 'uploads/pictoreal/IMG20221207162019.jpg', '2023-07-03 18:50:20', 20),
(57, 'uploads/pictoreal/IMG20221207170941.jpg', '2023-07-03 18:50:20', 20),
(58, 'uploads/pictoreal/IMG20221207175032.jpg', '2023-07-03 18:50:20', 20),
(59, 'uploads/pictoreal/20221015_160548.jpg', '2023-07-03 18:51:31', 21),
(60, 'uploads/pictoreal/20221015_163551.jpg', '2023-07-03 18:51:31', 21),
(61, 'uploads/pictoreal/DSC_6437.jpg', '2023-07-03 18:51:31', 21),
(62, 'uploads/pictoreal/20221015_160707.jpg', '2023-07-03 18:52:32', 22),
(63, 'uploads/pictoreal/DSC_6454.jpg', '2023-07-03 18:52:32', 22),
(64, 'uploads/pictoreal/IMG_20221015_142855[1].jpg', '2023-07-03 18:52:32', 22),
(65, 'uploads/pictoreal/DSC_6518.jpg', '2023-07-03 18:53:26', 23),
(66, 'uploads/pictoreal/IMG_20221015_150330[1].jpg', '2023-07-03 18:53:26', 23),
(67, 'uploads/pictoreal/IMG_20221015_154733.jpg', '2023-07-03 18:53:26', 23),
(68, 'uploads/pictoreal/2022-12-30 (6).png', '2023-07-03 18:55:32', 24),
(69, 'uploads/pictoreal/2023-02-02 (2).png', '2023-07-03 18:55:32', 24),
(70, 'uploads/pictoreal/s1.png', '2023-07-03 18:55:32', 24),
(71, 'uploads/pictoreal/IMG_20210730_173140.jpg', '2023-07-03 18:56:39', 25),
(72, 'uploads/pictoreal/s2 (1).png', '2023-07-03 18:56:39', 25),
(73, 'uploads/pictoreal/s2.png', '2023-07-03 18:56:39', 25),
(74, 'uploads/pictoreal/s8.png', '2023-07-03 18:57:14', 26),
(75, 'uploads/pictoreal/Screenshot (13).png', '2023-07-03 18:57:14', 26),
(76, 'uploads/pictoreal/Screenshot (209).png', '2023-07-03 18:57:14', 26),
(80, 'uploads/pictoreal/20220504_165536.jpg', '2023-07-03 22:37:51', 27),
(81, 'uploads/pictoreal/20220520_164704.jpg', '2023-07-03 22:37:51', 27),
(82, 'uploads/pictoreal/20220520_170853.jpg', '2023-07-03 22:37:52', 27),
(83, 'uploads/pictoreal/20220520_170857.jpg', '2023-07-03 22:38:53', 28),
(84, 'uploads/pictoreal/IMG_20200311_182618.jpg', '2023-07-03 22:38:53', 28),
(85, 'uploads/pictoreal/IMG-20220323-WA0022.jpg', '2023-07-03 22:38:53', 28),
(92, 'uploads/pictoreal/Screenshot (2).png', '2023-07-04 08:47:03', 11),
(93, 'uploads/pictoreal/Screenshot (3).png', '2023-07-04 08:47:03', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sr.no`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `art_circle`
--
ALTER TABLE `art_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `art_circle_images`
--
ALTER TABLE `art_circle_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ieee`
--
ALTER TABLE `ieee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ieee_images`
--
ALTER TABLE `ieee_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inc`
--
ALTER TABLE `inc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inc_images`
--
ALTER TABLE `inc_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictoreal`
--
ALTER TABLE `pictoreal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictoreal_images`
--
ALTER TABLE `pictoreal_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sr.no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `art_circle`
--
ALTER TABLE `art_circle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `art_circle_images`
--
ALTER TABLE `art_circle_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;

--
-- AUTO_INCREMENT for table `ieee`
--
ALTER TABLE `ieee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ieee_images`
--
ALTER TABLE `ieee_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inc`
--
ALTER TABLE `inc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `inc_images`
--
ALTER TABLE `inc_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `pictoreal`
--
ALTER TABLE `pictoreal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pictoreal_images`
--
ALTER TABLE `pictoreal_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
