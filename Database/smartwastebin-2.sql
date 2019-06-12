-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 10, 2019 at 08:44 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartwastebin`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accept`
--

CREATE TABLE `Accept` (
  `Id` int(11) NOT NULL,
  `BinId` int(11) NOT NULL,
  `AcceptStatus` int(11) NOT NULL,
  `AcceptedOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accept`
--

INSERT INTO `Accept` (`Id`, `BinId`, `AcceptStatus`, `AcceptedOn`) VALUES
(1, 9, 0, '2019-06-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin@bin.com', 'bin\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bin`
--

CREATE TABLE `bin` (
  `bin_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `bin_lat` varchar(11) NOT NULL,
  `bin_long` varchar(11) NOT NULL,
  `Basket_Number` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bin`
--

INSERT INTO `bin` (`bin_id`, `location`, `bin_lat`, `bin_long`, `Basket_Number`) VALUES
(9, 'Providence College of Engineering, Chengannur', '9.3183', '76.6111', '100'),
(10, 'Kottarakkara', '9.0017', '76.8002', '101'),
(11, 'Kollam', '8.8932', '76.6141', '102'),
(12, 'Pandalam', '9.2251', '76.6785', '103');

-- --------------------------------------------------------

--
-- Table structure for table `binboys`
--

CREATE TABLE `binboys` (
  `Id` int(11) NOT NULL,
  `BoyName` varchar(111) NOT NULL,
  `Username` varchar(111) NOT NULL,
  `Password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `binboys`
--

INSERT INTO `binboys` (`Id`, `BoyName`, `Username`, `Password`) VALUES
(1, 'Rahul', 'rr', 'aa'),
(2, 'Anish', 'aaa', 'bbb'),
(3, 'Anish', 'aaa', 'bbb');

-- --------------------------------------------------------

--
-- Table structure for table `bin_status`
--

CREATE TABLE `bin_status` (
  `bin_status_id` int(11) NOT NULL,
  `bin_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bin_status`
--

INSERT INTO `bin_status` (`bin_status_id`, `bin_id`, `status`) VALUES
(123, 1, '179'),
(124, 1, '179'),
(125, 1, '210'),
(127, 1, '0'),
(128, 1, '141'),
(129, 1, '28'),
(130, 1, '28'),
(131, 1, '28'),
(132, 1, '8'),
(133, 1, '31'),
(134, 1, '31'),
(135, 1, '223'),
(136, 1, '217'),
(137, 1, '219'),
(138, 1, '217'),
(139, 1, '222'),
(140, 1, '0'),
(141, 1, '28'),
(142, 1, '28'),
(143, 1, '28'),
(144, 1, '14'),
(145, 1, '28'),
(146, 1, '28'),
(147, 1, '28'),
(148, 1, '34'),
(149, 1, '34'),
(150, 1, '34'),
(151, 1, '30'),
(152, 1, '31'),
(153, 1, '30'),
(154, 1, '37'),
(155, 1, '34'),
(156, 1, '33'),
(157, 1, '34'),
(158, 1, '34'),
(159, 1, '4'),
(160, 1, '3'),
(161, 1, '4'),
(162, 1, '29'),
(163, 1, '24'),
(164, 1, '17'),
(165, 1, '16'),
(166, 1, '16'),
(167, 1, '8'),
(168, 1, '6'),
(169, 1, '8'),
(170, 1, '7'),
(171, 1, '28'),
(172, 1, '100'),
(173, 1, '100'),
(174, 1, '100'),
(175, 1, '100'),
(176, 1, '100'),
(177, 1, '100'),
(178, 1, '100'),
(179, 1, '100'),
(180, 1, '70'),
(181, 1, '70'),
(182, 1, '95'),
(183, 1, '95'),
(184, 1, '89'),
(185, 1, '80'),
(186, 1, '80'),
(187, 1, '79'),
(188, 1, '79'),
(189, 1, '79'),
(190, 1, '78'),
(191, 1, '77'),
(192, 1, '78'),
(193, 1, '78'),
(194, 1, '78'),
(195, 1, '78'),
(196, 1, '79'),
(197, 1, '78'),
(198, 1, '78'),
(199, 1, '79'),
(200, 1, '79'),
(201, 1, '79'),
(202, 1, '79'),
(203, 1, '79'),
(204, 1, '79'),
(205, 1, '79'),
(206, 1, '79'),
(207, 1, '79'),
(208, 1, '79'),
(209, 1, '79'),
(210, 1, '79'),
(211, 1, '79'),
(212, 1, '79'),
(213, 1, '79'),
(214, 1, '79'),
(215, 1, '79'),
(216, 1, '78'),
(217, 1, '78'),
(218, 1, '78'),
(219, 1, '78'),
(220, 1, '78'),
(221, 1, '78'),
(222, 1, '78'),
(223, 1, '78'),
(224, 1, '83'),
(225, 1, '77'),
(226, 1, '77'),
(227, 1, '77'),
(228, 1, '76'),
(229, 1, '77'),
(230, 1, '77'),
(231, 1, '76'),
(232, 1, '76'),
(233, 1, '77'),
(234, 1, '77'),
(235, 1, '77'),
(236, 1, '78'),
(237, 1, '78'),
(238, 1, '81'),
(239, 1, '82'),
(240, 1, '82'),
(241, 1, '82'),
(242, 1, '82'),
(243, 1, '35.714285714286'),
(244, 1, '39.285714285714'),
(245, 1, '60.714285714286'),
(246, 1, '71.428571428571'),
(247, 1, '75'),
(248, 1, '75'),
(249, 1, '75'),
(250, 1, '78'),
(251, 1, '28'),
(252, 1, '28'),
(253, 1, '28'),
(254, 1, '17'),
(255, 1, '25'),
(256, 1, '28'),
(257, 1, '3'),
(258, 1, '60'),
(259, 1, '60'),
(260, 1, '60'),
(261, 1, '60'),
(262, 1, '64'),
(263, 1, '0'),
(264, 1, '0'),
(265, 1, '0'),
(266, 1, '0'),
(267, 1, '0'),
(268, 1, '0'),
(269, 1, '0'),
(270, 1, '0'),
(271, 1, '0'),
(272, 1, '0'),
(273, 1, '0'),
(274, 1, '0'),
(275, 1, '0'),
(276, 1, '0'),
(277, 1, '0'),
(278, 1, '0'),
(279, 1, '0'),
(280, 1, '0'),
(281, 1, '0'),
(282, 1, '0'),
(283, 1, '0'),
(284, 1, '0'),
(285, 1, '0'),
(286, 1, '-3'),
(287, 1, '0'),
(288, 1, '0'),
(289, 1, '0'),
(290, 1, '0'),
(291, 1, '0'),
(292, 1, '-3'),
(293, 1, '0'),
(294, 1, '0'),
(295, 1, '0'),
(296, 1, '0'),
(297, 1, '0'),
(298, 1, '0'),
(299, 1, '0'),
(300, 1, '0'),
(301, 1, '64'),
(302, 1, '0'),
(303, 1, '64'),
(304, 1, '85'),
(305, 1, '89'),
(306, 1, '89'),
(307, 1, '89'),
(308, 1, '89'),
(309, 1, '0'),
(310, 1, '0'),
(311, 1, '0'),
(312, 1, '0'),
(313, 1, '0'),
(314, 1, '0'),
(315, 1, '0'),
(316, 1, '0'),
(317, 1, '0'),
(318, 1, '0'),
(319, 1, '0'),
(320, 1, '0'),
(321, 1, '0'),
(322, 1, '0'),
(323, 1, '0'),
(324, 1, '0'),
(325, 1, '0'),
(326, 1, '0'),
(327, 1, '0'),
(328, 1, '0'),
(329, 1, '0'),
(330, 1, '0'),
(331, 1, '0'),
(332, 1, '0'),
(333, 1, '0'),
(334, 1, '0'),
(335, 1, '0'),
(336, 1, '0'),
(337, 1, '0'),
(338, 1, '0'),
(339, 1, '0'),
(340, 1, '0'),
(341, 1, '0'),
(342, 1, '0'),
(343, 1, '0'),
(344, 1, '0'),
(345, 1, '0'),
(346, 1, '0'),
(347, 1, '0'),
(348, 1, '0'),
(349, 1, '0'),
(350, 1, '0'),
(351, 1, '0'),
(352, 1, '0'),
(353, 1, '0'),
(354, 1, '0'),
(355, 1, '0'),
(356, 1, '0'),
(357, 1, '0'),
(358, 1, '0'),
(359, 1, '0'),
(360, 1, '0'),
(361, 1, '0'),
(362, 1, '0'),
(363, 1, '0'),
(364, 1, '0'),
(365, 1, '0'),
(366, 1, '0'),
(367, 1, '0'),
(368, 1, '0'),
(369, 1, '0'),
(370, 1, '0'),
(371, 1, '0'),
(372, 1, '0'),
(373, 1, '0'),
(374, 1, '0'),
(375, 1, '0'),
(376, 1, '0'),
(377, 1, '0'),
(378, 1, '0'),
(379, 1, '0'),
(380, 1, '0'),
(381, 1, '0'),
(382, 1, '0'),
(383, 1, '0'),
(384, 1, '0'),
(385, 1, '0'),
(386, 1, '0'),
(387, 1, '0'),
(388, 1, '0'),
(389, 1, '0'),
(390, 1, '0'),
(391, 1, '0'),
(392, 1, '0'),
(393, 1, '0'),
(394, 1, '0'),
(395, 1, '0'),
(396, 1, '0'),
(397, 9, '22'),
(398, 10, '11'),
(399, 11, '22'),
(400, 12, '2'),
(401, 9, '34'),
(402, 9, '34'),
(403, 9, '34'),
(404, 9, '34'),
(405, 9, '-240'),
(406, 9, '70'),
(407, 9, '-240'),
(408, 9, '70'),
(409, 9, '70'),
(410, 9, '70'),
(411, 9, '70'),
(412, 9, '70'),
(413, 9, '70'),
(414, 9, '70'),
(415, 9, '70'),
(416, 9, '70'),
(417, 9, '70'),
(418, 9, '70'),
(419, 9, '70'),
(420, 9, '80'),
(421, 9, '80'),
(422, 9, '10'),
(423, 9, '10'),
(424, 9, '100'),
(425, 9, '100'),
(426, 9, '100'),
(427, 9, '90'),
(428, 9, '90'),
(429, 9, '90'),
(430, 9, '50'),
(431, 9, '50'),
(432, 9, '60'),
(433, 9, '10'),
(434, 9, '60'),
(435, 9, '60'),
(436, 9, '60'),
(437, 9, '70'),
(438, 9, '80'),
(439, 9, '70'),
(440, 9, '80'),
(441, 9, '80'),
(442, 9, '80'),
(443, 9, '80'),
(444, 9, '80'),
(445, 9, '80'),
(446, 9, '80'),
(447, 9, '80'),
(448, 9, '80');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `bin_id` int(11) NOT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smsnotification`
--

CREATE TABLE `smsnotification` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smsnotification`
--

INSERT INTO `smsnotification` (`id`, `date`, `percentage`) VALUES
(7, '2019-03-10', 70),
(8, '2019-03-10', 70),
(9, '2019-03-10', 70),
(10, '2019-03-10', 70);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `mobile`, `email`, `password`) VALUES
(2, 'anju', '987654322', 'anju@gmail.com', 'abcd1234'),
(3, 'appu', '987654321', 'appu@gmail.com', 'ab1234'),
(4, 'ammu', '887654321', 'appu@gmail.com', 'xyz1234'),
(5, 'achu', '2147483647', 'achu@gmail.com', 'qwer1234'),
(6, 'manju', '2147483647', 'manju@gmail.com', 'manju123'),
(15, 'maqw', '27788888', 'mawq@gmail.com', 'asdf1234'),
(16, 'mqew', '27722288', 'mqwe@gmail.com', 'lkmjn'),
(17, 'abhi', '17722288', 'abhi@gmail.com', 'abhi123'),
(18, 'maqw', '27788888', 'mawq@gmail.com', 'asdf1234'),
(19, 'lmn', '9988888', 'lmn.com', 'lmn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accept`
--
ALTER TABLE `Accept`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bin`
--
ALTER TABLE `bin`
  ADD PRIMARY KEY (`bin_id`);

--
-- Indexes for table `binboys`
--
ALTER TABLE `binboys`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bin_status`
--
ALTER TABLE `bin_status`
  ADD PRIMARY KEY (`bin_status_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `smsnotification`
--
ALTER TABLE `smsnotification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Accept`
--
ALTER TABLE `Accept`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bin`
--
ALTER TABLE `bin`
  MODIFY `bin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `binboys`
--
ALTER TABLE `binboys`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bin_status`
--
ALTER TABLE `bin_status`
  MODIFY `bin_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=449;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `smsnotification`
--
ALTER TABLE `smsnotification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
