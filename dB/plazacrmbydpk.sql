-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 11:13 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plazacrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement_`
--

CREATE TABLE `announcement_` (
  `id` int(11) NOT NULL,
  `title_` varchar(255) DEFAULT NULL,
  `description_` text,
  `start_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  `share_with` varchar(255) NOT NULL,
  `status` enum('Published','Un Published','','') DEFAULT 'Published',
  `attachment_` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state_id` int(11) NOT NULL,
  `state_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state_id`, `state_name`) VALUES
(1, 'Adilabad', 32, 'Telangana'),
(2, 'Agra', 34, 'Uttar Pradesh'),
(3, 'Ahmed Nagar', 21, 'Maharashtra'),
(4, 'Ahmedabad City', 12, 'Gujarat'),
(5, 'Aizawl', 24, 'Mizoram'),
(6, 'Ajmer', 29, 'Rajasthan'),
(7, 'Akola', 21, 'Maharashtra'),
(8, 'Aligarh', 34, 'Uttar Pradesh'),
(9, 'Allahabad', 34, 'Uttar Pradesh'),
(10, 'Alleppey', 18, 'Kerala'),
(11, 'Almora', 35, 'Uttarakhand'),
(12, 'Alwar', 29, 'Rajasthan'),
(13, 'Alwaye', 18, 'Kerala'),
(14, 'Amalapuram', 2, 'Andhra Pradesh'),
(15, 'Ambala', 13, 'Haryana'),
(16, 'Ambedkar Nagar', 34, 'Uttar Pradesh'),
(17, 'Amravati', 21, 'Maharashtra'),
(18, 'Amreli', 12, 'Gujarat'),
(19, 'Amritsar', 28, 'Punjab'),
(20, 'Anakapalle', 2, 'Andhra Pradesh'),
(21, 'Anand', 12, 'Gujarat'),
(22, 'Anantapur', 2, 'Andhra Pradesh'),
(23, 'Ananthnag', 15, 'Jammu & Kashmir'),
(24, 'Anna Road H.O', 31, 'Tamil Nadu'),
(25, 'Arakkonam', 31, 'Tamil Nadu'),
(26, 'Asansol', 36, 'West Bengal'),
(27, 'Aska', 26, 'Odisha'),
(28, 'Auraiya', 34, 'Uttar Pradesh'),
(29, 'Aurangabad', 21, 'Maharashtra'),
(30, 'Aurangabad(Bihar)', 5, 'Bihar'),
(31, 'Azamgarh', 34, 'Uttar Pradesh'),
(32, 'Bagalkot', 17, 'Karnataka'),
(33, 'Bageshwar', 35, 'Uttarakhand'),
(34, 'Bagpat', 34, 'Uttar Pradesh'),
(35, 'Bahraich', 34, 'Uttar Pradesh'),
(36, 'Balaghat', 20, 'Madhya Pradesh'),
(37, 'Balangir', 26, 'Odisha'),
(38, 'Balasore', 26, 'Odisha'),
(39, 'Ballia', 34, 'Uttar Pradesh'),
(40, 'Balrampur', 34, 'Uttar Pradesh'),
(41, 'Banasanktha', 12, 'Gujarat'),
(42, 'Banda', 34, 'Uttar Pradesh'),
(43, 'Bandipur', 15, 'Jammu & Kashmir'),
(44, 'Bankura', 36, 'West Bengal'),
(45, 'Banswara', 29, 'Rajasthan'),
(46, 'Barabanki', 34, 'Uttar Pradesh'),
(47, 'Baramulla', 15, 'Jammu & Kashmir'),
(48, 'Baran', 29, 'Rajasthan'),
(49, 'Bardoli', 12, 'Gujarat'),
(50, 'Bareilly', 34, 'Uttar Pradesh'),
(51, 'Barmer', 29, 'Rajasthan'),
(52, 'Barnala', 28, 'Punjab'),
(53, 'Barpeta', 4, 'Assam'),
(54, 'Bastar', 7, 'Chattisgarh'),
(55, 'Basti', 34, 'Uttar Pradesh'),
(56, 'Bathinda', 28, 'Punjab'),
(57, 'Beed', 21, 'Maharashtra'),
(58, 'Begusarai', 5, 'Bihar'),
(59, 'Belgaum', 17, 'Karnataka'),
(60, 'Bellary', 17, 'Karnataka'),
(61, 'Bengaluru East', 17, 'Karnataka'),
(62, 'Bengaluru South', 17, 'Karnataka'),
(63, 'Bengaluru West', 17, 'Karnataka'),
(64, 'Berhampur', 26, 'Odisha'),
(65, 'Bhadrak', 26, 'Odisha'),
(66, 'Bhagalpur', 5, 'Bihar'),
(67, 'Bhandara', 21, 'Maharashtra'),
(68, 'Bharatpur', 29, 'Rajasthan'),
(69, 'Bharuch', 12, 'Gujarat'),
(70, 'Bhavnagar', 12, 'Gujarat'),
(71, 'Bhilwara', 29, 'Rajasthan'),
(72, 'Bhimavaram', 2, 'Andhra Pradesh'),
(73, 'Bhiwani', 13, 'Haryana'),
(74, 'Bhojpur', 5, 'Bihar'),
(75, 'Bhopal', 20, 'Madhya Pradesh'),
(76, 'Bhubaneswar', 26, 'Odisha'),
(77, 'Bidar', 17, 'Karnataka'),
(78, 'Bijapur', 17, 'Karnataka'),
(79, 'Bijnor', 34, 'Uttar Pradesh'),
(80, 'Bikaner', 29, 'Rajasthan'),
(81, 'Bilaspur', 7, 'Chattisgarh'),
(82, 'Birbhum', 36, 'West Bengal'),
(83, 'Bishnupur', 22, 'Manipur'),
(84, 'Bongaigaon', 4, 'Assam'),
(85, 'Budaun', 34, 'Uttar Pradesh'),
(86, 'Budgam', 15, 'Jammu & Kashmir'),
(87, 'Bulandshahr', 34, 'Uttar Pradesh'),
(88, 'Buldhana', 21, 'Maharashtra'),
(89, 'Bundi', 29, 'Rajasthan'),
(90, 'Burdwan', 36, 'West Bengal'),
(91, 'Cachar', 4, 'Assam'),
(92, 'Calicut', 18, 'Kerala'),
(93, 'Carnicobar', 1, 'Andaman & Nicobar Islands'),
(94, 'Chamba', 14, 'Himachal Pradesh'),
(95, 'Chamoli', 35, 'Uttarakhand'),
(96, 'Champawat', 35, 'Uttarakhand'),
(97, 'Champhai', 24, 'Mizoram'),
(98, 'Chandauli', 34, 'Uttar Pradesh'),
(99, 'Chandel', 22, 'Manipur'),
(100, 'Chandigarh', 6, 'Chandigarh'),
(101, 'Chandrapur', 21, 'Maharashtra'),
(102, 'Changanacherry', 18, 'Kerala'),
(103, 'Changlang', 3, 'Arunachal Pradesh'),
(104, 'Channapatna', 17, 'Karnataka'),
(105, 'Chengalpattu', 31, 'Tamil Nadu'),
(106, 'Chennai City Central', 31, 'Tamil Nadu'),
(107, 'Chennai City North', 31, 'Tamil Nadu'),
(108, 'Chennai City South', 31, 'Tamil Nadu'),
(109, 'Chhatarpur', 20, 'Madhya Pradesh'),
(110, 'Chhindwara', 20, 'Madhya Pradesh'),
(111, 'Chikmagalur', 17, 'Karnataka'),
(112, 'Chikodi', 17, 'Karnataka'),
(113, 'Chitradurga', 17, 'Karnataka'),
(114, 'Chitrakoot', 34, 'Uttar Pradesh'),
(115, 'Chittoor', 2, 'Andhra Pradesh'),
(116, 'Chittorgarh', 29, 'Rajasthan'),
(117, 'Churachandpur', 22, 'Manipur'),
(118, 'Churu', 29, 'Rajasthan'),
(119, 'Coimbatore', 31, 'Tamil Nadu'),
(120, 'Contai', 36, 'West Bengal'),
(121, 'Cooch Behar', 36, 'West Bengal'),
(122, 'Cuddalore', 31, 'Tamil Nadu'),
(123, 'Cuddapah', 2, 'Andhra Pradesh'),
(124, 'Cuttack City', 26, 'Odisha'),
(125, 'Cuttack North', 26, 'Odisha'),
(126, 'Cuttack South', 26, 'Odisha'),
(127, 'Dadra & Nagar Haveli', 8, 'Dadra & Nagar Haveli'),
(128, 'Daman', 9, 'Daman & Diu'),
(129, 'Darbhanga', 5, 'Bihar'),
(130, 'Darjiling', 36, 'West Bengal'),
(131, 'Darrang', 4, 'Assam'),
(132, 'Dausa', 29, 'Rajasthan'),
(133, 'Dehra Gopipur', 14, 'Himachal Pradesh'),
(134, 'Dehradun', 35, 'Uttarakhand'),
(135, 'Delhi', 10, 'Delhi'),
(136, 'Deoria', 34, 'Uttar Pradesh'),
(137, 'Dhalai', 33, 'Tripura'),
(138, 'Dhanbad', 16, 'Jharkhand'),
(139, 'Dharamsala', 14, 'Himachal Pradesh'),
(140, 'Dharmapuri', 31, 'Tamil Nadu'),
(141, 'Dharwad', 17, 'Karnataka'),
(142, 'Dhemaji', 4, 'Assam'),
(143, 'Dhenkanal', 26, 'Odisha'),
(144, 'Dholpur', 29, 'Rajasthan'),
(145, 'Dhubri', 4, 'Assam'),
(146, 'Dhule', 21, 'Maharashtra'),
(147, 'Dibang Valley', 3, 'Arunachal Pradesh'),
(148, 'Dibrugarh', 4, 'Assam'),
(149, 'Diglipur', 1, 'Andaman & Nicobar Islands'),
(150, 'Dimapur', 25, 'Nagaland'),
(151, 'Dindigul', 31, 'Tamil Nadu'),
(152, 'Diu', 9, 'Daman & Diu'),
(153, 'Doda', 15, 'Jammu & Kashmir'),
(154, 'Dungarpur', 29, 'Rajasthan'),
(155, 'Durg', 7, 'Chattisgarh'),
(156, 'East Champaran', 5, 'Bihar'),
(157, 'East Garo Hills', 23, 'Meghalaya'),
(158, 'East Kameng', 3, 'Arunachal Pradesh'),
(159, 'East Khasi Hills', 23, 'Meghalaya'),
(160, 'East Siang', 3, 'Arunachal Pradesh'),
(161, 'East Sikkim', 30, 'Sikkim'),
(162, 'Eluru', 2, 'Andhra Pradesh'),
(163, 'Ernakulam', 18, 'Kerala'),
(164, 'Erode', 31, 'Tamil Nadu'),
(165, 'Etah', 34, 'Uttar Pradesh'),
(166, 'Etawah', 34, 'Uttar Pradesh'),
(167, 'Faizabad', 34, 'Uttar Pradesh'),
(168, 'Faridabad', 13, 'Haryana'),
(169, 'Faridkot', 28, 'Punjab'),
(170, 'Farrukhabad', 34, 'Uttar Pradesh'),
(171, 'Fatehgarh Sahib', 28, 'Punjab'),
(172, 'Fatehpur', 34, 'Uttar Pradesh'),
(173, 'Fazilka', 28, 'Punjab'),
(174, 'Ferrargunj', 1, 'Andaman & Nicobar Islands'),
(175, 'Firozabad', 34, 'Uttar Pradesh'),
(176, 'Firozpur', 28, 'Punjab'),
(177, 'Gadag', 17, 'Karnataka'),
(178, 'Gadchiroli', 21, 'Maharashtra'),
(179, 'Gandhinagar', 12, 'Gujarat'),
(180, 'Ganganagar', 29, 'Rajasthan'),
(181, 'Gautam Buddha Nagar', 34, 'Uttar Pradesh'),
(182, 'Gaya', 5, 'Bihar'),
(183, 'Ghaziabad', 34, 'Uttar Pradesh'),
(184, 'Ghazipur', 34, 'Uttar Pradesh'),
(185, 'Giridih', 16, 'Jharkhand'),
(186, 'Goa', 11, 'Goa'),
(187, 'Goalpara', 4, 'Assam'),
(188, 'Gokak', 17, 'Karnataka'),
(189, 'Golaghat', 4, 'Assam'),
(190, 'Gonda', 34, 'Uttar Pradesh'),
(191, 'Gondal', 12, 'Gujarat'),
(192, 'Gondia', 21, 'Maharashtra'),
(193, 'Gorakhpur', 34, 'Uttar Pradesh'),
(194, 'Gudivada', 2, 'Andhra Pradesh'),
(195, 'Gudur', 2, 'Andhra Pradesh'),
(196, 'Gulbarga', 17, 'Karnataka'),
(197, 'Guna', 20, 'Madhya Pradesh'),
(198, 'Guntur', 2, 'Andhra Pradesh'),
(199, 'Gurdaspur', 28, 'Punjab'),
(200, 'Gurugram', 13, 'Haryana'),
(201, 'Gwalior', 20, 'Madhya Pradesh'),
(202, 'Hailakandi', 4, 'Assam'),
(203, 'Hamirpur (HP)', 14, 'Himachal Pradesh'),
(204, 'Hamirpur (UP)', 34, 'Uttar Pradesh'),
(205, 'Hanamkonda', 32, 'Telangana'),
(206, 'Hanumangarh', 29, 'Rajasthan'),
(207, 'Hardoi', 34, 'Uttar Pradesh'),
(208, 'Haridwar', 35, 'Uttarakhand'),
(209, 'Hassan', 17, 'Karnataka'),
(210, 'Hathras', 34, 'Uttar Pradesh'),
(211, 'Haveri', 17, 'Karnataka'),
(212, 'Hazaribagh', 16, 'Jharkhand'),
(213, 'Hindupur', 2, 'Andhra Pradesh'),
(214, 'Hingoli', 21, 'Maharashtra'),
(215, 'Hissar', 13, 'Haryana'),
(216, 'Hooghly', 36, 'West Bengal'),
(217, 'Hoshangabad', 20, 'Madhya Pradesh'),
(218, 'Hoshiarpur', 28, 'Punjab'),
(219, 'Howrah', 36, 'West Bengal'),
(220, 'Hut Bay', 1, 'Andaman & Nicobar Islands'),
(221, 'Hyderabad City', 32, 'Telangana'),
(222, 'Hyderabad South East', 32, 'Telangana'),
(223, 'Idukki', 18, 'Kerala'),
(224, 'Imphal East', 22, 'Manipur'),
(225, 'Imphal West', 22, 'Manipur'),
(226, 'Indore City', 20, 'Madhya Pradesh'),
(227, 'Indore Moffusil', 20, 'Madhya Pradesh'),
(228, 'Irinjalakuda', 18, 'Kerala'),
(229, 'Jabalpur', 20, 'Madhya Pradesh'),
(230, 'Jaintia Hills', 23, 'Meghalaya'),
(231, 'Jaipur', 29, 'Rajasthan'),
(232, 'Jaisalmer', 29, 'Rajasthan'),
(233, 'Jalandhar', 28, 'Punjab'),
(234, 'Jalaun', 34, 'Uttar Pradesh'),
(235, 'Jalgaon', 21, 'Maharashtra'),
(236, 'Jalna', 21, 'Maharashtra'),
(237, 'Jalor', 29, 'Rajasthan'),
(238, 'Jalpaiguri', 36, 'West Bengal'),
(239, 'Jammu', 15, 'Jammu & Kashmir'),
(240, 'Jamnagar', 12, 'Gujarat'),
(241, 'Jaunpur', 34, 'Uttar Pradesh'),
(242, 'Jhalawar', 29, 'Rajasthan'),
(243, 'Jhansi', 34, 'Uttar Pradesh'),
(244, 'Jhujhunu', 29, 'Rajasthan'),
(245, 'Jodhpur', 29, 'Rajasthan'),
(246, 'Jorhat', 4, 'Assam'),
(247, 'Junagadh', 12, 'Gujarat'),
(248, 'Jyotiba Phule Nagar', 34, 'Uttar Pradesh'),
(249, 'Kakinada', 2, 'Andhra Pradesh'),
(250, 'Kalahandi', 26, 'Odisha'),
(251, 'Kamrup', 4, 'Assam'),
(252, 'Kanchipuram', 31, 'Tamil Nadu'),
(253, 'Kannauj', 34, 'Uttar Pradesh'),
(254, 'Kanniyakumari', 31, 'Tamil Nadu'),
(255, 'Kannur', 18, 'Kerala'),
(256, 'Kanpur Dehat', 34, 'Uttar Pradesh'),
(257, 'Kanpur Nagar', 34, 'Uttar Pradesh'),
(258, 'Kapurthala', 28, 'Punjab'),
(259, 'Karaikal', 27, 'Poducherry'),
(260, 'Karaikudi', 31, 'Tamil Nadu'),
(261, 'Karauli', 29, 'Rajasthan'),
(262, 'Karbi Anglong', 4, 'Assam'),
(263, 'Kargil', 15, 'Jammu & Kashmir'),
(264, 'Karimganj', 4, 'Assam'),
(265, 'Karimnagar', 32, 'Telangana'),
(266, 'Karnal', 13, 'Haryana'),
(267, 'Karur', 31, 'Tamil Nadu'),
(268, 'Karwar', 17, 'Karnataka'),
(269, 'Kasaragod', 18, 'Kerala'),
(270, 'Kathua', 15, 'Jammu & Kashmir'),
(271, 'Kaushambi', 34, 'Uttar Pradesh'),
(272, 'Keonjhar', 26, 'Odisha'),
(273, 'Khammam (AP)', 2, 'Andhra Pradesh'),
(274, 'Khammam (TL)', 32, 'Telangana'),
(275, 'Khandwa', 20, 'Madhya Pradesh'),
(276, 'Kheda', 12, 'Gujarat'),
(277, 'Kheri', 34, 'Uttar Pradesh'),
(278, 'Kiphire', 25, 'Nagaland'),
(279, 'Kodagu', 17, 'Karnataka'),
(280, 'Kohima', 25, 'Nagaland'),
(281, 'Kokrajhar', 4, 'Assam'),
(282, 'Kolar', 17, 'Karnataka'),
(283, 'Kolasib', 24, 'Mizoram'),
(284, 'Kolhapur', 21, 'Maharashtra'),
(285, 'Kolkata', 36, 'West Bengal'),
(286, 'Koraput', 26, 'Odisha'),
(287, 'Kota', 29, 'Rajasthan'),
(288, 'Kottayam', 18, 'Kerala'),
(289, 'Kovilpatti', 31, 'Tamil Nadu'),
(290, 'Krishnagiri', 31, 'Tamil Nadu'),
(291, 'Kulgam', 15, 'Jammu & Kashmir'),
(292, 'Kumbakonam', 31, 'Tamil Nadu'),
(293, 'Kupwara', 15, 'Jammu & Kashmir'),
(294, 'Kurnool', 2, 'Andhra Pradesh'),
(295, 'Kurukshetra', 13, 'Haryana'),
(296, 'Kurung Kumey', 3, 'Arunachal Pradesh'),
(297, 'Kushinagar', 34, 'Uttar Pradesh'),
(298, 'Kutch', 12, 'Gujarat'),
(299, 'Lakhimpur', 4, 'Assam'),
(300, 'Lakshadweep', 19, 'Lakshadweep'),
(301, 'Lalitpur', 34, 'Uttar Pradesh'),
(302, 'Latur', 21, 'Maharashtra'),
(303, 'Lawngtlai', 24, 'Mizoram'),
(304, 'Leh', 15, 'Jammu & Kashmir'),
(305, 'Lohit', 3, 'Arunachal Pradesh'),
(306, 'Longleng', 25, 'Nagaland'),
(307, 'Lower Subansiri', 3, 'Arunachal Pradesh'),
(308, 'Lucknow', 34, 'Uttar Pradesh'),
(309, 'Ludhiana', 28, 'Punjab'),
(310, 'Lunglei', 24, 'Mizoram'),
(311, 'Machilipatnam', 2, 'Andhra Pradesh'),
(312, 'Madhubani', 5, 'Bihar'),
(313, 'Madurai', 31, 'Tamil Nadu'),
(314, 'Mahabubnagar', 32, 'Telangana'),
(315, 'Maharajganj', 34, 'Uttar Pradesh'),
(316, 'Mahesana', 12, 'Gujarat'),
(317, 'Mahoba', 34, 'Uttar Pradesh'),
(318, 'Mainpuri', 34, 'Uttar Pradesh'),
(319, 'Malda', 36, 'West Bengal'),
(320, 'Mammit', 24, 'Mizoram'),
(321, 'Mandi', 14, 'Himachal Pradesh'),
(322, 'Mandsaur', 20, 'Madhya Pradesh'),
(323, 'Mandya', 17, 'Karnataka'),
(324, 'Mangalore', 17, 'Karnataka'),
(325, 'Manjeri', 18, 'Kerala'),
(326, 'Mansa', 28, 'Punjab'),
(327, 'Marigaon', 4, 'Assam'),
(328, 'Mathura', 34, 'Uttar Pradesh'),
(329, 'Mau', 34, 'Uttar Pradesh'),
(330, 'Mavelikara', 18, 'Kerala'),
(331, 'Mayabander', 1, 'Andaman & Nicobar Islands'),
(332, 'Mayiladuthurai', 31, 'Tamil Nadu'),
(333, 'Mayurbhanj', 26, 'Odisha'),
(334, 'Medak', 32, 'Telangana'),
(335, 'Meerut', 34, 'Uttar Pradesh'),
(336, 'Meghalaya', 23, 'Meghalaya'),
(337, 'Midnapore', 36, 'West Bengal'),
(338, 'Mirzapur', 34, 'Uttar Pradesh'),
(339, 'Moga', 28, 'Punjab'),
(340, 'Mohali', 28, 'Punjab'),
(341, 'Mokokchung', 25, 'Nagaland'),
(342, 'Mon', 25, 'Nagaland'),
(343, 'Monghyr', 5, 'Bihar'),
(344, 'Moradabad', 34, 'Uttar Pradesh'),
(345, 'Morena', 20, 'Madhya Pradesh'),
(346, 'Muktsar', 28, 'Punjab'),
(347, 'Mumbai', 21, 'Maharashtra'),
(348, 'Murshidabad', 36, 'West Bengal'),
(349, 'Muzaffarnagar', 34, 'Uttar Pradesh'),
(350, 'Muzaffarpur', 5, 'Bihar'),
(351, 'Mysore', 17, 'Karnataka'),
(352, 'Nadia', 36, 'West Bengal'),
(353, 'Nagaon', 4, 'Assam'),
(354, 'Nagapattinam', 31, 'Tamil Nadu'),
(355, 'Nagaur', 29, 'Rajasthan'),
(356, 'Nagpur', 21, 'Maharashtra'),
(357, 'Nainital', 35, 'Uttarakhand'),
(358, 'Nalanda', 5, 'Bihar'),
(359, 'Nalbari', 4, 'Assam'),
(360, 'Nalgonda', 32, 'Telangana'),
(361, 'Namakkal', 31, 'Tamil Nadu'),
(362, 'Nancorie', 1, 'Andaman & Nicobar Islands'),
(363, 'Nancowrie', 1, 'Andaman & Nicobar Islands'),
(364, 'Nanded', 21, 'Maharashtra'),
(365, 'Nandurbar', 21, 'Maharashtra'),
(366, 'Nandyal', 2, 'Andhra Pradesh'),
(367, 'Nanjangud', 17, 'Karnataka'),
(368, 'Narasaraopet', 2, 'Andhra Pradesh'),
(369, 'Nashik', 21, 'Maharashtra'),
(370, 'Navsari', 12, 'Gujarat'),
(371, 'Nawadha', 5, 'Bihar'),
(372, 'Nawanshahr', 28, 'Punjab'),
(373, 'Nellore', 2, 'Andhra Pradesh'),
(374, 'Nilgiris', 31, 'Tamil Nadu'),
(375, 'Nizamabad', 32, 'Telangana'),
(376, 'North 24 Parganas', 36, 'West Bengal'),
(377, 'North Cachar Hills', 4, 'Assam'),
(378, 'North Dinajpur', 36, 'West Bengal'),
(379, 'North Sikkim', 30, 'Sikkim'),
(380, 'North Tripura', 33, 'Tripura'),
(381, 'Osmanabad', 21, 'Maharashtra'),
(382, 'Ottapalam', 18, 'Kerala'),
(383, 'Palamau', 16, 'Jharkhand'),
(384, 'Palghat', 18, 'Kerala'),
(385, 'Pali', 29, 'Rajasthan'),
(386, 'Panchmahals', 12, 'Gujarat'),
(387, 'Papum Pare', 3, 'Arunachal Pradesh'),
(388, 'Parbhani', 21, 'Maharashtra'),
(389, 'Parvathipuram', 2, 'Andhra Pradesh'),
(390, 'Patan', 12, 'Gujarat'),
(391, 'Pathanamthitta', 18, 'Kerala'),
(392, 'Patiala', 28, 'Punjab'),
(393, 'Patna', 5, 'Bihar'),
(394, 'Pattukottai', 31, 'Tamil Nadu'),
(395, 'Pauri Garhwal', 35, 'Uttarakhand'),
(396, 'Peddapalli', 32, 'Telangana'),
(397, 'Peren', 25, 'Nagaland'),
(398, 'Phek', 25, 'Nagaland'),
(399, 'Phulbani', 26, 'Odisha'),
(400, 'Pilibhit', 34, 'Uttar Pradesh'),
(401, 'Pithoragarh', 35, 'Uttarakhand'),
(402, 'Poducherry (PD)', 27, 'Poducherry'),
(403, 'Poducherry (TN)', 31, 'Tamil Nadu'),
(404, 'Pollachi', 31, 'Tamil Nadu'),
(405, 'Poonch', 15, 'Jammu & Kashmir'),
(406, 'Porbandar', 12, 'Gujarat'),
(407, 'Port Blair', 1, 'Andaman & Nicobar Islands'),
(408, 'Prakasam', 2, 'Andhra Pradesh'),
(409, 'Pratapgarh', 34, 'Uttar Pradesh'),
(410, 'Proddatur', 2, 'Andhra Pradesh'),
(411, 'Pudukkottai', 31, 'Tamil Nadu'),
(412, 'Pulwama', 15, 'Jammu & Kashmir'),
(413, 'Pune', 21, 'Maharashtra'),
(414, 'Puri', 26, 'Odisha'),
(415, 'Purnea', 5, 'Bihar'),
(416, 'Purulia', 36, 'West Bengal'),
(417, 'Puttur', 17, 'Karnataka'),
(418, 'Quilon', 18, 'Kerala'),
(419, 'Raebareli', 34, 'Uttar Pradesh'),
(420, 'Raichur', 17, 'Karnataka'),
(421, 'Raigarh (CT)', 7, 'Chattisgarh'),
(422, 'Raigarh (MH)', 21, 'Maharashtra'),
(423, 'Raipur', 7, 'Chattisgarh'),
(424, 'Rajahmundry', 2, 'Andhra Pradesh'),
(425, 'Rajauri', 15, 'Jammu & Kashmir'),
(426, 'Rajkot', 12, 'Gujarat'),
(427, 'Rajsamand', 29, 'Rajasthan'),
(428, 'Ramanathapuram', 31, 'Tamil Nadu'),
(429, 'Rampur', 34, 'Uttar Pradesh'),
(430, 'Rampur Bushahr', 14, 'Himachal Pradesh'),
(431, 'Ranchi', 16, 'Jharkhand'),
(432, 'Rangat', 1, 'Andaman & Nicobar Islands'),
(433, 'Ratlam', 20, 'Madhya Pradesh'),
(434, 'Ratnagiri', 21, 'Maharashtra'),
(435, 'Reasi', 15, 'Jammu & Kashmir'),
(436, 'Rewa', 20, 'Madhya Pradesh'),
(437, 'Ri Bhoi', 23, 'Meghalaya'),
(438, 'Rohtak', 13, 'Haryana'),
(439, 'Rohtas', 5, 'Bihar'),
(440, 'Ropar', 28, 'Punjab'),
(441, 'Rudraprayag', 35, 'Uttarakhand'),
(442, 'Rupnagar', 28, 'Punjab'),
(443, 'Sabarkantha', 12, 'Gujarat'),
(444, 'Sagar', 20, 'Madhya Pradesh'),
(445, 'Saharanpur', 34, 'Uttar Pradesh'),
(446, 'Saharsa', 5, 'Bihar'),
(447, 'Salem East', 31, 'Tamil Nadu'),
(448, 'Salem West', 31, 'Tamil Nadu'),
(449, 'Samastipur', 5, 'Bihar'),
(450, 'Sambalpur', 26, 'Odisha'),
(451, 'Sangareddy', 32, 'Telangana'),
(452, 'Sangli', 21, 'Maharashtra'),
(453, 'Sangrur', 28, 'Punjab'),
(454, 'Sant Kabir Nagar', 34, 'Uttar Pradesh'),
(455, 'Sant Ravidas Nagar', 34, 'Uttar Pradesh'),
(456, 'Santhal Parganas', 16, 'Jharkhand'),
(457, 'Saran', 5, 'Bihar'),
(458, 'Satara', 21, 'Maharashtra'),
(459, 'Sawai Madhopur', 29, 'Rajasthan'),
(460, 'Secunderabad', 32, 'Telangana'),
(461, 'Sehore', 20, 'Madhya Pradesh'),
(462, 'Senapati', 22, 'Manipur'),
(463, 'Serchhip', 24, 'Mizoram'),
(464, 'Shahdol', 20, 'Madhya Pradesh'),
(465, 'Shahjahanpur', 34, 'Uttar Pradesh'),
(466, 'Shimla', 14, 'Himachal Pradesh'),
(467, 'Shimoga', 17, 'Karnataka'),
(468, 'Shrawasti', 34, 'Uttar Pradesh'),
(469, 'Sibsagar', 4, 'Assam'),
(470, 'Siddharthnagar', 34, 'Uttar Pradesh'),
(471, 'Sikar', 29, 'Rajasthan'),
(472, 'Sindhudurg', 21, 'Maharashtra'),
(473, 'Singhbhum', 16, 'Jharkhand'),
(474, 'Sirohi', 29, 'Rajasthan'),
(475, 'Sirsi', 17, 'Karnataka'),
(476, 'Sitamarhi', 5, 'Bihar'),
(477, 'Sitapur', 34, 'Uttar Pradesh'),
(478, 'Sivaganga', 31, 'Tamil Nadu'),
(479, 'Siwan', 5, 'Bihar'),
(480, 'Solan', 14, 'Himachal Pradesh'),
(481, 'Solapur', 21, 'Maharashtra'),
(482, 'Sonbhadra', 34, 'Uttar Pradesh'),
(483, 'Sonepat', 13, 'Haryana'),
(484, 'Sonitpur', 4, 'Assam'),
(485, 'South 24 Parganas', 36, 'West Bengal'),
(486, 'South Dinajpur', 36, 'West Bengal'),
(487, 'South Garo Hills', 23, 'Meghalaya'),
(488, 'South Sikkim', 30, 'Sikkim'),
(489, 'South Tripura', 33, 'Tripura'),
(490, 'Srikakulam', 2, 'Andhra Pradesh'),
(491, 'Srinagar', 15, 'Jammu & Kashmir'),
(492, 'Srirangam', 31, 'Tamil Nadu'),
(493, 'Sultanpur', 34, 'Uttar Pradesh'),
(494, 'Sundargarh', 26, 'Odisha'),
(495, 'Surat', 12, 'Gujarat'),
(496, 'Surendranagar', 12, 'Gujarat'),
(497, 'Suryapet', 32, 'Telangana'),
(498, 'Tadepalligudem', 2, 'Andhra Pradesh'),
(499, 'Tambaram', 31, 'Tamil Nadu'),
(500, 'Tamenglong', 22, 'Manipur'),
(501, 'Tamluk', 36, 'West Bengal'),
(502, 'Tarn Taran', 28, 'Punjab'),
(503, 'Tawang', 3, 'Arunachal Pradesh'),
(504, 'Tehri Garhwal', 35, 'Uttarakhand'),
(505, 'Tenali', 2, 'Andhra Pradesh'),
(506, 'Thalassery', 18, 'Kerala'),
(507, 'Thane', 21, 'Maharashtra'),
(508, 'Thanjavur', 31, 'Tamil Nadu'),
(509, 'Theni', 31, 'Tamil Nadu'),
(510, 'Thoubal', 22, 'Manipur'),
(511, 'Tinsukia', 4, 'Assam'),
(512, 'Tirap', 3, 'Arunachal Pradesh'),
(513, 'Tiruchirapalli', 31, 'Tamil Nadu'),
(514, 'Tirunelveli', 31, 'Tamil Nadu'),
(515, 'Tirupati', 2, 'Andhra Pradesh'),
(516, 'Tirupattur', 31, 'Tamil Nadu'),
(517, 'Tirupur', 31, 'Tamil Nadu'),
(518, 'Tirur', 18, 'Kerala'),
(519, 'Tiruvalla', 18, 'Kerala'),
(520, 'Tiruvannamalai', 31, 'Tamil Nadu'),
(521, 'Tonk', 29, 'Rajasthan'),
(522, 'Trichur', 18, 'Kerala'),
(523, 'Trivandrum North', 18, 'Kerala'),
(524, 'Trivandrum South', 18, 'Kerala'),
(525, 'Tuensang', 25, 'Nagaland'),
(526, 'Tumkur', 17, 'Karnataka'),
(527, 'Tuticorin', 31, 'Tamil Nadu'),
(528, 'Udaipur', 29, 'Rajasthan'),
(529, 'Udham Singh Nagar', 35, 'Uttarakhand'),
(530, 'Udhampur', 15, 'Jammu & Kashmir'),
(531, 'Udupi', 17, 'Karnataka'),
(532, 'Ujjain', 20, 'Madhya Pradesh'),
(533, 'Ukhrul', 22, 'Manipur'),
(534, 'Una', 14, 'Himachal Pradesh'),
(535, 'Unnao', 34, 'Uttar Pradesh'),
(536, 'Upper Siang', 3, 'Arunachal Pradesh'),
(537, 'Upper Subansiri', 3, 'Arunachal Pradesh'),
(538, 'Uttarkashi', 35, 'Uttarakhand'),
(539, 'Vadakara', 18, 'Kerala'),
(540, 'Vadodara East', 12, 'Gujarat'),
(541, 'Vadodara West', 12, 'Gujarat'),
(542, 'Vaishali', 5, 'Bihar'),
(543, 'Valsad', 12, 'Gujarat'),
(544, 'Varanasi', 34, 'Uttar Pradesh'),
(545, 'Vellore', 31, 'Tamil Nadu'),
(546, 'Vidisha', 20, 'Madhya Pradesh'),
(547, 'Vijayawada', 2, 'Andhra Pradesh'),
(548, 'Virudhunagar', 31, 'Tamil Nadu'),
(549, 'Visakhapatnam', 2, 'Andhra Pradesh'),
(550, 'Vizianagaram', 2, 'Andhra Pradesh'),
(551, 'Vriddhachalam', 31, 'Tamil Nadu'),
(552, 'Wanaparthy', 32, 'Telangana'),
(553, 'Warangal', 32, 'Telangana'),
(554, 'Wardha', 21, 'Maharashtra'),
(555, 'Washim', 21, 'Maharashtra'),
(556, 'West Champaran', 5, 'Bihar'),
(557, 'West Garo Hills', 23, 'Meghalaya'),
(558, 'West Kameng', 3, 'Arunachal Pradesh'),
(559, 'West Khasi Hills', 23, 'Meghalaya'),
(560, 'West Siang', 3, 'Arunachal Pradesh'),
(561, 'West Sikkim', 30, 'Sikkim'),
(562, 'West Tripura', 33, 'Tripura'),
(563, 'Wokha', 25, 'Nagaland'),
(564, 'Yavatmal', 21, 'Maharashtra'),
(565, 'Zunhebotto', 25, 'Nagaland');

-- --------------------------------------------------------

--
-- Table structure for table `client_`
--

CREATE TABLE `client_` (
  `id` int(11) NOT NULL,
  `comp_name` varchar(100) DEFAULT NULL,
  `comp_email` varchar(150) DEFAULT NULL,
  `comp_phone` varchar(20) DEFAULT NULL,
  `comp_mobile` varchar(20) DEFAULT NULL,
  `zip_code` int(11) NOT NULL,
  `company_city` int(11) NOT NULL,
  `company_country` int(11) NOT NULL,
  `comp_address` varchar(255) DEFAULT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `comp_vat` float NOT NULL,
  `customer_group` varchar(255) DEFAULT NULL,
  `language_` int(11) NOT NULL,
  `currency_` int(11) NOT NULL,
  `sms_notification` int(11) NOT NULL DEFAULT '0' COMMENT '0: No, 1:Yes',
  `short_note` text,
  `comp_website` varchar(150) DEFAULT NULL,
  `skype_id` varchar(150) DEFAULT NULL,
  `fb_url` varchar(150) DEFAULT NULL,
  `twitter_url` varchar(150) DEFAULT NULL,
  `linkedin_url` varchar(150) DEFAULT NULL,
  `hosting_company_` varchar(100) DEFAULT NULL,
  `hosting_` varchar(100) DEFAULT NULL,
  `username_` varchar(100) DEFAULT NULL,
  `password_` varchar(20) DEFAULT NULL,
  `port_` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `projects_`
--

CREATE TABLE `projects_` (
  `id` int(11) NOT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  `bill_type` int(11) DEFAULT NULL,
  `fixed_price` float DEFAULT NULL,
  `estimated_hours` int(11) DEFAULT NULL,
  `status` enum('Started','In Progress','On Hold','Cancel') DEFAULT NULL,
  `assigned_to` int(11) NOT NULL,
  `description_` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_`
--

INSERT INTO `projects_` (`id`, `project_name`, `client_id`, `start_date`, `end_date`, `bill_type`, `fixed_price`, `estimated_hours`, `status`, `assigned_to`, `description_`) VALUES
(2, '1', 12, '1233', '2222', 1, 12, 12, 'Started', 11, '22233'),
(3, '122', 12, '1233', '2222', 1, 12, 12, 'Started', 11, '22233');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country_id` bit(1) NOT NULL,
  `country_name` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`, `country_id`, `country_name`) VALUES
(2, 'Andhra Pradesh', b'1', 'India'),
(3, 'Arunachal Pradesh', b'1', 'India'),
(4, 'Assam', b'1', 'India'),
(5, 'Bihar', b'1', 'India'),
(6, 'Chandigarh', b'1', 'India'),
(7, 'Chattisgarh', b'1', 'India'),
(8, 'Dadra & Nagar Haveli', b'1', 'India'),
(9, 'Daman & Diu', b'1', 'India'),
(10, 'Delhi', b'1', 'India'),
(11, 'Goa', b'1', 'India'),
(12, 'Gujarat', b'1', 'India'),
(13, 'Haryana', b'1', 'India'),
(14, 'Himachal Pradesh', b'1', 'India'),
(15, 'Jammu & Kashmir', b'1', 'India'),
(16, 'Jharkhand', b'1', 'India'),
(17, 'Karnataka', b'1', 'India'),
(18, 'Kerala', b'1', 'India'),
(19, 'Lakshadweep', b'1', 'India'),
(20, 'Madhya Pradesh', b'1', 'India'),
(21, 'Maharashtra', b'1', 'India'),
(22, 'Manipur', b'1', 'India'),
(23, 'Meghalaya', b'1', 'India'),
(24, 'Mizoram', b'1', 'India'),
(25, 'Nagaland', b'1', 'India'),
(26, 'Odisha', b'1', 'India'),
(27, 'Poducherry', b'1', 'India'),
(28, 'Punjab', b'1', 'India'),
(29, 'Rajasthan', b'1', 'India'),
(30, 'Sikkim', b'1', 'India'),
(31, 'Tamil Nadu', b'1', 'India'),
(32, 'Telangana', b'1', 'India'),
(33, 'Tripura', b'1', 'India'),
(34, 'Uttar Pradesh', b'1', 'India'),
(35, 'Uttarakhand', b'1', 'India'),
(36, 'West Bengal', b'1', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `tasks_`
--

CREATE TABLE `tasks_` (
  `id` int(11) NOT NULL,
  `task_name` varchar(100) DEFAULT NULL,
  `related_to` int(11) NOT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `due_date` varchar(50) DEFAULT NULL,
  `hourly_rate` float NOT NULL,
  `estimated_hour` int(11) NOT NULL,
  `progress_` int(11) NOT NULL,
  `task_status` enum('Not Started','In Progress','Completed','Deferred','Waiting For Somone') NOT NULL DEFAULT 'Not Started',
  `task_description` text NOT NULL,
  `billable_` int(11) NOT NULL DEFAULT '0' COMMENT '0: No , 1: Yes',
  `assigned_to` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_application`
--

CREATE TABLE `tbl_leave_application` (
  `leave_application_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `leave_category_id` int(2) NOT NULL,
  `reason` text NOT NULL,
  `leave_type` enum('single_day','multiple_days','hours') NOT NULL DEFAULT 'single_day',
  `hours` varchar(20) DEFAULT NULL,
  `leave_start_date` date NOT NULL,
  `leave_end_date` date DEFAULT NULL,
  `application_status` int(2) NOT NULL DEFAULT '1' COMMENT '1=pending,2=accepted 3=rejected',
  `view_status` tinyint(1) NOT NULL DEFAULT '2',
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `attachment` text,
  `comments` text,
  `approve_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_leave_application`
--

INSERT INTO `tbl_leave_application` (`leave_application_id`, `user_id`, `leave_category_id`, `reason`, `leave_type`, `hours`, `leave_start_date`, `leave_end_date`, `application_status`, `view_status`, `application_date`, `attachment`, `comments`, `approve_by`) VALUES
(2, 1, 1, 'dsfsa', 'multiple_days', NULL, '2019-12-01', '2019-12-02', 1, 2, '2019-12-24 09:29:49', NULL, NULL, NULL),
(3, 8, 1, 'sdfa', 'single_day', NULL, '2019-12-02', NULL, 1, 2, '2019-12-24 09:30:12', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_category`
--

CREATE TABLE `tbl_leave_category` (
  `leave_category_id` int(2) NOT NULL,
  `leave_category` varchar(100) NOT NULL,
  `leave_quota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_leave_category`
--

INSERT INTO `tbl_leave_category` (`leave_category_id`, `leave_category`, `leave_quota`) VALUES
(1, 'Sick', 2),
(2, 'Marriage', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `id` int(11) NOT NULL,
  `user_name_` varchar(50) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password_` varchar(50) DEFAULT NULL,
  `email_` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `profile_picture` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_`
--

INSERT INTO `user_` (`id`, `user_name_`, `role`, `password_`, `email_`, `full_name`, `profile_picture`) VALUES
(1, 'admin', 1, 'admin', NULL, 'Williams', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role_`
--

CREATE TABLE `user_role_` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role_`
--

INSERT INTO `user_role_` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_`
--
ALTER TABLE `announcement_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_`
--
ALTER TABLE `client_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_`
--
ALTER TABLE `projects_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks_`
--
ALTER TABLE `tasks_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_leave_application`
--
ALTER TABLE `tbl_leave_application`
  ADD PRIMARY KEY (`leave_application_id`);

--
-- Indexes for table `tbl_leave_category`
--
ALTER TABLE `tbl_leave_category`
  ADD PRIMARY KEY (`leave_category_id`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role_`
--
ALTER TABLE `user_role_`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_`
--
ALTER TABLE `announcement_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_`
--
ALTER TABLE `client_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `projects_`
--
ALTER TABLE `projects_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks_`
--
ALTER TABLE `tasks_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leave_application`
--
ALTER TABLE `tbl_leave_application`
  MODIFY `leave_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_leave_category`
--
ALTER TABLE `tbl_leave_category`
  MODIFY `leave_category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role_`
--
ALTER TABLE `user_role_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
