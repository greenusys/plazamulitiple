-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2020 at 08:47 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenusyscrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `installer`
--

CREATE TABLE `installer` (
  `id` int(1) NOT NULL,
  `installer_flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `account_id` int(11) NOT NULL,
  `account_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `balance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`account_id`, `account_name`, `description`, `balance`, `permission`) VALUES
(1, 'Test Account', 'Account Created For Testing', '-27150.00', 'all'),
(2, 'ravish_account', 'no desc', '25500.00', 'all'),
(3, 'shubham', 'shubham', '58116.00', 'all'),
(4, 'rahu', 'dvsv', '-654499.00', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_details`
--

CREATE TABLE `tbl_account_details` (
  `account_details_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employment_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'en_US',
  `address` varchar(64) COLLATE utf8_unicode_ci DEFAULT '-',
  `phone` varchar(32) COLLATE utf8_unicode_ci DEFAULT '-',
  `mobile` varchar(32) COLLATE utf8_unicode_ci DEFAULT '',
  `skype` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `language` varchar(40) COLLATE utf8_unicode_ci DEFAULT 'english',
  `designations_id` int(11) DEFAULT 0,
  `avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'uploads/default_avatar.jpg',
  `joining_date` date DEFAULT NULL,
  `present_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maratial_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passport` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direction` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_account_details`
--

INSERT INTO `tbl_account_details` (`account_details_id`, `user_id`, `fullname`, `employment_id`, `company`, `city`, `country`, `locale`, `address`, `phone`, `mobile`, `skype`, `language`, `designations_id`, `avatar`, `joining_date`, `present_address`, `date_of_birth`, `gender`, `maratial_status`, `father_name`, `mother_name`, `passport`, `direction`) VALUES
(2, 2, 'IPSEN', '', '1', NULL, NULL, 'en_US', '-', '-', '', '', 'english', NULL, 'uploads/one.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ltr'),
(3, 3, 'Jonathan Tornil Grasa', '', '3', NULL, NULL, 'fr_FR', '-', '', '', '', 'english', 1, 'uploads/sharepoint_bg.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ltr'),
(4, 4, 'Ivan Corbero', '', '4', NULL, NULL, 'es_ES', '-', '', '', '', 'english', 2, 'uploads/article0_1064x.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ltr'),
(5, 5, 'Bertrand Lagarde', '', '0', NULL, NULL, 'fr_FR', '-', '', '', '', 'english', 3, 'uploads/new.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ltr'),
(6, 6, 'Christelle Saliou', '', '0', NULL, NULL, 'fr_FR', '-', '', '', '', 'english', 7, 'uploads/new.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ltr'),
(8, 8, 'Adminko', NULL, NULL, NULL, NULL, 'en_US', '-', '-', '', '', 'english', 0, 'uploads/default_avatar.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, 'ravish beg', '1234', '5', NULL, NULL, 'en_US', '-', '', '', '', 'english', 1, 'uploads/file2019-11-07-00-59-36.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ltr'),
(15, 15, 'r768k', '77777777777777', '0', NULL, NULL, 'fr_FR', '-', '6545', '+521+5296', 'tyxky62', 'english', 2, 'uploads/pexels-photo-1396122.jpeg', '2020-02-06', '', '2019-06-03', 'male', 'married', 'ravi', 'shree', '', 'ltr'),
(16, 18, 'Piyush Mohan', 'TEMP2', '0', NULL, NULL, 'en_US', '-', '123345', '12345', 'NA', 'english', 7, 'uploads/attendant.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LTR'),
(17, 19, 'Md. Kaif', 'TEMP1', '0', NULL, NULL, 'en_US', '-', '12345', '1234', 'NA', 'english', 7, 'uploads/profile.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LTR'),
(18, 20, 'Shubham Bhatt', 'TEMP3', '0', NULL, NULL, 'en_US', '-', '234234', '3423423', 'NA', 'english', 7, 'uploads/pin.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RTL'),
(19, 21, 'Ravish', 'TEMP4', '0', NULL, NULL, 'en_US', '-', '123113', '343243', 'NA', 'english', 7, 'uploads/consent.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LTR'),
(20, 22, 'Rahul Kumar', 'TEMP5', '0', NULL, NULL, 'en_US', '-', '234234', '234234', 'NA', 'english', 7, 'uploads/linkOne.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RTL'),
(21, 23, 'Shivam Saini', 'TEMP6', '0', NULL, NULL, 'en_US', '-', '123123', '131231', 'NA', 'english', 7, 'uploads/hot_(1).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LTR'),
(22, 24, 'Deepak Nouliya', 'TEMP7', '0', NULL, NULL, 'en_US', '-', '342342', '3223', 'NA', 'english', 7, 'uploads/attendant1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LTR'),
(23, 25, 'Sonali', 'TEMP8', '0', NULL, NULL, 'en_US', '-', '1231', '234234', 'NA', 'english', 7, 'uploads/sun.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LTR'),
(24, 26, 'Vaishali Sharma', 'TEMP9', '0', NULL, NULL, 'en_US', '-', '12312', '234234', 'NA', 'english', 7, 'uploads/temperature.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LTR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE `tbl_activities` (
  `activities_id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `module` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_field_id` int(11) DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activity_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `icon` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'fa-coffee',
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `value2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_activities`
--

INSERT INTO `tbl_activities` (`activities_id`, `user`, `module`, `module_field_id`, `activity`, `activity_date`, `icon`, `link`, `value1`, `value2`, `deleted`) VALUES
(355, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:03', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(356, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:04', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(357, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:04', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(358, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:04', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(359, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:04', 'fa-tasks', 'admin/tasks/view_task_details/5', '0', NULL, 0),
(360, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:04', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(361, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:04', 'fa-tasks', 'admin/tasks/view_task_details/5', '0', NULL, 0),
(362, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:04', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(363, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:04', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(364, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(365, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(366, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(367, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(368, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(369, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(370, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/5', '0', NULL, 0),
(371, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(372, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:05', 'fa-tasks', 'admin/tasks/view_task_details/5', '0', NULL, 0),
(373, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:06', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(374, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:06', 'fa-tasks', 'admin/tasks/view_task_details/5', '0', NULL, 0),
(375, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:06', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(376, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:06', 'fa-tasks', 'admin/tasks/view_task_details/5', '0', NULL, 0),
(377, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:06', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(378, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:24:06', 'fa-tasks', 'admin/tasks/view_task_details/5', '0', NULL, 0),
(379, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:13', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(380, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(381, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(382, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(383, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(384, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(385, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(386, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(387, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(388, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(389, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:14', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(390, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:25', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(391, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:25', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(392, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(393, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(394, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(395, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(396, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(397, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(398, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(399, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(400, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(401, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(402, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:24:26', 'fa-tasks', 'admin/tasks/view_task_details/2', '0', NULL, 0),
(403, 8, 'tasks', 2, 'activity_update_task', '2019-12-24 06:31:20', 'fa-tasks', 'admin/tasks/view_task_details/2', '100', NULL, 0),
(404, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:31:28', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(405, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:31:28', 'fa-tasks', 'admin/tasks/view_task_details/5', '0', NULL, 0),
(406, 8, 'tasks', 5, 'activity_update_task', '2019-12-24 06:31:28', 'fa-tasks', 'admin/tasks/view_task_details/5', '100', NULL, 0),
(407, 8, 'tasks', 7, 'activity_update_task', '2019-12-24 06:31:45', 'fa-tasks', 'admin/tasks/view_task_details/7', '100', NULL, 0),
(408, 8, 'tasks', 1, 'activity_update_task', '2019-12-24 06:32:09', 'fa-tasks', 'admin/tasks/view_task_details/1', 'Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod', NULL, 0),
(409, 8, 'tasks', 1, 'activity_update_task', '2019-12-24 06:32:17', 'fa-tasks', 'admin/tasks/view_task_details/1', '0', NULL, 0),
(410, 8, 'tasks', 13, 'activity_update_task', '2019-12-24 06:37:12', 'fa-tasks', 'admin/tasks/view_task_details/13', '100', NULL, 0),
(411, 8, 'tasks', 13, 'activity_update_task', '2019-12-24 06:37:27', 'fa-tasks', 'admin/tasks/view_task_details/13', '0', NULL, 0),
(416, 8, 'payroll', NULL, 'activity_salary_template_added', '2019-12-24 09:51:31', 'fa-money', 'admin/payroll/view_salary_template/1', 'grade a', NULL, 0),
(417, 8, 'payroll', 1, 'activity_salary_template_update', '2019-12-24 09:52:53', 'fa-money', 'admin/payroll/view_salary_template/1', 'grade b', NULL, 0),
(418, 8, 'payroll', NULL, 'activity_salary_template_added', '2019-12-24 09:53:13', 'fa-money', 'admin/payroll/view_salary_template/2', 'grade a', NULL, 0),
(419, 8, 'settings', 8, 'activity_database_backup', '2019-12-24 10:33:02', 'fa-coffee', NULL, 'BD-backup_2019-12-23_23-33', NULL, 0),
(420, 8, 'tasks', 1, 'activity_tasks_timer_on', '2019-12-24 11:30:06', 'fa-tasks', 'admin/tasks/view_task_details/1/5', 'Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod', NULL, 0),
(421, 8, 'tasks', 1, 'activity_tasks_timer_off', '2019-12-24 11:30:15', 'fa-tasks', 'admin/tasks/view_task_details/1/5', 'Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod', NULL, 0),
(422, 8, 'tasks', 1, 'activity_update_task', '2019-12-30 05:27:37', 'fa-tasks', 'admin/tasks/view_task_details/1', '100', NULL, 0),
(423, 8, 'tasks', 1, 'activity_update_task', '2019-12-30 05:27:39', 'fa-tasks', 'admin/tasks/view_task_details/1', '0', NULL, 0),
(424, 8, 'tasks', 1, 'activity_update_task', '2019-12-30 05:27:39', 'fa-tasks', 'admin/tasks/view_task_details/1', '100', NULL, 0),
(425, 8, 'tasks', 1, 'activity_update_task', '2019-12-30 05:27:39', 'fa-tasks', 'admin/tasks/view_task_details/1', '0', NULL, 0),
(426, 8, 'client', 16, 'activity_update_company', '2020-01-02 11:33:22', 'fa-user', NULL, 'Comany Billing Name', NULL, 0),
(427, 8, 'client', 17, 'activity_update_company', '2020-01-03 05:37:08', 'fa-user', NULL, 'Comany Billing Name', NULL, 0),
(428, 8, 'settings', 1, 'activity_added_a_lead_source', '2020-01-03 07:16:37', 'fa-coffee', NULL, '', NULL, 0),
(429, 8, 'settings', 1, 'activity_delete_a_lead_source', '2020-01-03 07:17:07', 'fa-coffee', NULL, '', NULL, 0),
(430, 8, 'settings', 1, 'activity_added_a_lead_status', '2020-01-03 07:17:26', 'fa-coffee', NULL, '', NULL, 0),
(431, 8, 'settings', 1, 'activity_delete_a_lead_status', '2020-01-03 07:20:07', 'fa-coffee', NULL, '', NULL, 0),
(432, 8, 'settings', 2, 'activity_added_a_lead_source', '2020-01-03 07:20:58', 'fa-coffee', NULL, '', NULL, 0),
(433, 8, 'settings', 3, 'activity_added_a_lead_source', '2020-01-03 07:21:44', 'fa-coffee', NULL, 'h1', NULL, 0),
(434, 8, 'settings', 8, 'activity_update_working_days', '2020-01-03 11:14:45', 'fa-coffee', NULL, 'same_time', NULL, 0),
(435, 8, 'settings', 3, 'activity_added_a_leave_category', '2020-01-03 12:13:29', 'fa-coffee', NULL, '', NULL, 0),
(436, 8, 'settings', 1, 'activity_added_a_income_category', '2020-01-03 12:26:18', 'fa-coffee', NULL, '', NULL, 0),
(437, 8, 'settings', 1, 'activity_delete_a_category', '2020-01-03 12:27:20', 'fa-coffee', NULL, '', NULL, 0),
(438, 8, 'settings', 2, 'activity_added_a_income_category', '2020-01-03 12:27:22', 'fa-coffee', NULL, '', NULL, 0),
(439, 8, 'settings', 1, 'customer_group_added', '2020-01-03 12:28:24', 'fa-coffee', NULL, '', NULL, 0),
(440, 8, 'settings', 1, 'activity_added_a_allowed_ip', '2020-01-03 12:28:34', 'fa-coffee', NULL, '', NULL, 0),
(441, 8, 'projects', 76, 'activity_save_project', '2020-01-06 06:44:22', 'fa-folder-open-o', 'admin/projects/project_details/76', 'rahul', NULL, 0),
(442, 8, 'projects', 77, 'activity_save_project', '2020-01-06 06:46:26', 'fa-folder-open-o', 'admin/projects/project_details/77', 'rahul', NULL, 0),
(443, 8, 'projects', 77, 'activity_update_project', '2020-01-07 11:05:54', 'fa-folder-open-o', 'admin/projects/project_details/77', 'rahul', NULL, 0),
(444, 8, 'projects', 75, 'activity_update_project', '2020-01-07 12:23:40', 'fa-folder-open-o', 'admin/projects/project_details/75', 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )', NULL, 0),
(445, 8, 'projects', 75, 'activity_update_project', '2020-01-07 12:23:49', 'fa-folder-open-o', 'admin/projects/project_details/75', 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )', NULL, 0),
(446, 8, 'tasks', 17, 'activity_update_task', '2020-01-08 06:50:56', 'fa-tasks', 'admin/tasks/view_task_details/17', 'new_task', NULL, 0),
(447, 8, 'tasks', 18, 'activity_update_task', '2020-01-08 06:52:09', 'fa-tasks', 'admin/tasks/view_task_details/18', 'new_task', NULL, 0),
(448, 8, 'tasks', 19, 'activity_update_task', '2020-01-08 06:53:23', 'fa-tasks', 'admin/tasks/view_task_details/19', '54645', NULL, 0),
(449, 8, 'tasks', 20, 'activity_update_task', '2020-01-08 06:54:52', 'fa-tasks', 'admin/tasks/view_task_details/20', '54645', NULL, 0),
(450, 8, 'tasks', 21, 'activity_update_task', '2020-01-08 06:55:59', 'fa-tasks', 'admin/tasks/view_task_details/21', '54645', NULL, 0),
(451, 8, 'tasks', 22, 'activity_update_task', '2020-01-08 06:59:38', 'fa-tasks', 'admin/tasks/view_task_details/22', '54645', NULL, 0),
(452, 8, 'payroll', NULL, 'activity_salary_template_added', '2020-01-10 09:53:48', 'fa-money', 'admin/payroll/view_salary_template/3', 'grade new', NULL, 0),
(453, 8, 'payroll', NULL, 'activity_salary_template_added', '2020-01-13 09:22:31', 'fa-money', 'admin/payroll/view_salary_template/4', 'rahul_grade', NULL, 0),
(454, 8, 'payroll', 4, 'activity_salary_template_delete', '2020-01-13 09:23:31', 'fa-money', NULL, 'rahul_grade', '15000', 0),
(455, 8, 'payroll', NULL, 'activity_salary_template_added', '2020-01-13 09:23:49', 'fa-money', 'admin/payroll/view_salary_template/5', 'vfvggf', NULL, 0),
(456, 8, 'settings', 8, 'activity_backup_delete_success', '2020-01-18 06:35:04', 'fa-coffee', NULL, 'BD-backup_2019-12-23_23-33.zip', NULL, 0),
(457, 8, 'settings', 8, 'activity_save_theme_settings', '2020-01-18 06:37:27', 'fa-coffee', NULL, 'Tester', NULL, 0),
(458, 8, 'payroll', NULL, 'activity_hourly_template_added', '2020-01-18 09:05:59', 'fa-money', NULL, 'hfgh', '777', 0),
(459, 8, 'user', 12, 'activity_added_new_user', '2020-01-18 10:13:58', 'fa-user', NULL, 'ravish3474', NULL, 0),
(460, 8, 'announcements', NULL, 'activity_added_announcements', '2020-01-20 07:04:09', 'fa-ticket', NULL, 'test', NULL, 0),
(461, 8, 'payroll', 5, 'activity_salary_details_update', '2020-01-20 07:06:20', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(462, 8, 'payroll', 5, 'activity_salary_details_update', '2020-01-20 07:08:42', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(463, 8, 'user', 13, 'activity_added_new_user', '2020-01-20 07:39:47', 'fa-user', NULL, 'ravishbeg', NULL, 0),
(464, 8, 'payroll', 6, 'activity_salary_details_update', '2020-01-20 07:40:35', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(465, 8, 'payroll', 11, 'activity_salary_details_update', '2020-01-20 10:46:31', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(466, 8, 'payroll', NULL, 'activity_make_payment', '2020-01-20 11:08:00', 'fa-list-ul', NULL, 'Jonathan Tornil Grasa', 'December 2017', 0),
(467, 8, 'payroll', 1, 'activity_payslip_send', '2020-01-20 11:08:09', 'fa-list-ul', NULL, 'Jonathan Tornil Grasa', 'December 2017', 0),
(468, 8, 'payroll', 11, 'activity_salary_details_update', '2020-01-20 11:47:10', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(469, 8, 'settings', 8, 'activity_update_profile', '2020-01-21 06:57:42', 'fa-coffee', NULL, 'Adminko', NULL, 0),
(470, 8, 'settings', 8, 'activity_update_profile', '2020-01-21 07:42:10', 'fa-coffee', NULL, 'Adminko', NULL, 0),
(471, 8, 'payroll', NULL, 'activity_make_payment', '2020-01-21 09:59:49', 'fa-list-ul', NULL, 'ravish beg', 'February 2020', 0),
(472, 8, 'payroll', 2, 'activity_payslip_send', '2020-01-21 10:30:22', 'fa-list-ul', NULL, 'ravish beg', 'February 2020', 0),
(473, 8, 'payroll', 2, 'activity_payslip_send', '2020-01-21 10:56:57', 'fa-list-ul', NULL, 'ravish beg', 'February 2020', 0),
(474, 8, 'payroll', NULL, 'activity_make_payment', '2020-01-23 07:10:47', 'fa-list-ul', NULL, 'ravish beg', 'January 2020', 0),
(475, 8, 'payroll', 3, 'activity_payslip_send', '2020-01-23 07:10:53', 'fa-list-ul', NULL, 'ravish beg', 'January 2020', 0),
(476, 8, 'settings', 4, 'activity_added_a_leave_category', '2020-01-23 07:58:05', 'fa-coffee', NULL, 'emergency', NULL, 0),
(477, 8, 'payroll', 11, 'activity_salary_details_update', '2020-01-23 09:19:08', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(478, 8, 'payroll', 11, 'activity_salary_details_update', '2020-01-23 09:23:51', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(479, 8, 'account', 1, 'activity_save_account', '2020-01-24 06:09:43', 'fa-circle-o', NULL, 'Test Account', NULL, 0),
(480, 8, 'settings', 1, 'activity_added_a_expense_category', '2020-01-24 06:10:21', 'fa-coffee', NULL, 'Test Category', NULL, 0),
(481, 8, 'account', 2, 'activity_save_account', '2020-01-24 06:12:11', 'fa-circle-o', NULL, 'ravish_account', NULL, 0),
(482, 8, 'transactions', 1, 'activity_new_expense', '2020-01-24 06:18:51', 'fa-building-o', 'admin/transactions/view_details/1', 'Test Account', '2151', 0),
(483, 8, 'job_circular', 1, 'activity_added_job_posted', '2020-01-24 09:11:02', 'fa-ticket', NULL, 'HR[Administrator]', NULL, 0),
(484, 8, 'job_circular', 2, 'activity_added_job_posted', '2020-01-24 09:14:20', 'fa-ticket', NULL, 'Accountant[Head Of Collaborative]', NULL, 0),
(485, 8, 'transactions', 2, 'activity_new_expense', '2020-01-24 09:27:45', 'fa-building-o', 'admin/transactions/view_details/2', 'ravish_account', '0', 0),
(486, 8, 'payroll', NULL, 'activity_make_payment', '2020-01-24 09:27:45', 'fa-list-ul', NULL, 'Jonathan Tornil Grasa', 'February 2020', 0),
(487, 8, 'transactions', 3, 'activity_new_expense', '2020-01-24 09:33:20', 'fa-building-o', 'admin/transactions/view_details/3', 'ravish_account', '24500', 0),
(488, 8, 'payroll', NULL, 'activity_make_payment', '2020-01-24 09:33:20', 'fa-list-ul', NULL, 'ravish beg', 'April 2020', 0),
(489, 8, 'account', 3, 'activity_save_account', '2020-01-24 09:51:38', 'fa-circle-o', NULL, 'shubham', NULL, 0),
(490, 8, 'transactions', 4, 'activity_new_expense', '2020-01-24 09:56:04', 'fa-building-o', 'admin/transactions/view_details/4', 'Test Account', '0', 0),
(491, 8, 'payroll', NULL, 'activity_make_payment', '2020-01-24 09:56:04', 'fa-list-ul', NULL, 'Jonathan Tornil Grasa', 'April 2020', 0),
(492, 8, 'account', 4, 'activity_save_account', '2020-01-24 10:19:42', 'fa-circle-o', NULL, 'rahu', NULL, 0),
(493, 8, 'overtime', 1, 'New Overtime Added', '2020-01-24 11:00:14', 'clock-o', 'admin/utilities/view_overtime/1', '2020-01-25', NULL, 0),
(494, 8, 'settings', 2, 'activity_added_a_expense_category', '2020-01-24 11:14:34', 'fa-coffee', NULL, 'ravish cat', NULL, 0),
(495, 8, 'settings', 15, 'activity_added_a_payment_method', '2020-01-24 12:15:32', 'fa-coffee', NULL, 'testing method', NULL, 0),
(496, 8, 'transactions', 5, 'activity_new_expense', '2020-01-24 12:49:36', 'fa-building-o', 'admin/transactions/view_details/5', 'shubham', '1550', 0),
(497, 8, 'overtime', 2, 'New Overtime Added', '2020-01-24 12:52:43', 'clock-o', 'admin/utilities/view_overtime/2', '2020-01-08', NULL, 0),
(498, 8, 'transactions', 6, 'activity_new_expense', '2020-01-25 05:15:32', 'fa-building-o', 'admin/transactions/view_details/6', 'rahu', '654654', 0),
(499, 8, 'transactions', 7, 'activity_new_expense', '2020-01-25 05:40:08', 'fa-building-o', 'admin/transactions/view_details/7', 'shubham', '789', 0),
(500, 8, 'performance', NULL, 'Performance Indicator Saved', '2020-01-25 05:46:05', 'fa-coffee', NULL, 'VIE', NULL, 0),
(501, 8, 'transactions', 8, 'activity_new_expense', '2020-01-25 06:05:45', 'fa-building-o', 'admin/transactions/view_details/8', 'shubham', '12345', 0),
(502, 8, 'overtime', 1, 'New Overtime Added', '2020-01-25 06:24:33', 'clock-o', 'admin/utilities/view_overtime/1', '2020-01-25', NULL, 0),
(503, 8, 'departments', 1, 'activity_update_a_department', '2020-01-25 06:31:33', 'fa-coffee', NULL, 'IT / Collaborative', NULL, 0),
(504, 8, 'performance', NULL, 'Performance Appraisal Saved', '2020-01-25 06:46:13', 'fa-coffee', NULL, 'Bertrand Lagarde', 'ForDec 2019', 0),
(505, 8, 'transactions', 9, 'activity_new_deposit', '2020-01-27 05:03:00', 'fa-building-o', 'admin/transactions/view_details/9', 'shubham', NULL, 0),
(506, 8, 'performance', NULL, 'Performance Indicator Saved', '2020-01-27 10:33:36', 'fa-coffee', NULL, 'Head Of Collaborative', NULL, 0),
(507, 8, 'transactions', 10, 'activity_new_deposit', '2020-01-27 11:50:18', 'fa-building-o', 'admin/transactions/view_details/10', 'shubham', NULL, 0),
(508, 8, 'performance', NULL, 'Performance Appraisal Saved', '2020-01-27 12:07:48', 'fa-coffee', NULL, 'Jonathan Tornil Grasa', 'ForJan 2020', 0),
(509, 8, 'performance', NULL, 'Performance Appraisal Saved', '2020-01-27 12:09:47', 'fa-coffee', NULL, 'ravish beg', 'ForFeb 2020', 0),
(510, 8, 'transactions', 8, 'activity_delete_expense', '2020-01-29 11:59:04', 'fa-building-o', 'admin/transactions/view_details/8', 'shubham', '12345.00', 0),
(511, 8, 'payroll', 5, 'activity_salary_template_delete', '2020-01-29 12:21:58', 'fa-money', NULL, 'vfvggf', '222', 0),
(512, 8, 'payroll', 5, 'activity_salary_template_delete', '2020-01-29 12:22:27', 'fa-money', NULL, NULL, NULL, 0),
(513, 8, 'payroll', 11, 'activity_salary_details_update', '2020-01-31 06:15:53', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(514, 8, 'payroll', 11, 'activity_salary_details_update', '2020-01-31 06:18:45', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(515, 8, 'payroll', 11, 'activity_salary_details_update', '2020-01-31 09:59:20', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(516, 8, 'payroll', 11, 'activity_salary_details_update', '2020-02-01 06:09:21', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(517, 8, 'payroll', 11, 'activity_salary_details_update', '2020-02-01 06:09:39', 'fa-money', NULL, 'IT / Collaborative', NULL, 0),
(518, 8, 'leave_management', 2, 'activity_leave_deleted', '2020-02-01 07:33:58', 'fa-ticket', NULL, 'Prakhar Abhishek -> Sick', '12.01.2019 TO 12.02.2019', 0),
(519, 8, 'transactions', 11, 'activity_new_expense', '2020-02-03 07:34:31', 'fa-building-o', 'admin/transactions/view_details/11', 'Test Account', '25000', 0),
(520, 8, 'payroll', NULL, 'activity_make_payment', '2020-02-03 07:34:31', 'fa-list-ul', NULL, 'Jonathan Tornil Grasa', 'January 2020', 0),
(521, 8, 'payroll', 7, 'activity_payslip_send', '2020-02-04 06:41:59', 'fa-list-ul', NULL, 'Jonathan Tornil Grasa', 'January 2020', 0),
(522, 8, 'leave_management', 4, 'activity_leave_save', '2020-02-04 07:51:35', 'fa-ticket', NULL, 'Adminko -> Marriage', '02.04.2020 TO 02.05.2020', 0),
(523, 8, 'user', 14, 'activity_added_new_user', '2020-02-04 09:23:23', 'fa-user', NULL, 'rahul3474', NULL, 0),
(524, 8, 'user', 13, 'activity_change_status', '2020-02-04 09:25:14', 'fa-user', NULL, 'ravishbeg Deactive', NULL, 0),
(525, 8, 'user', 13, 'activity_change_status', '2020-02-04 09:25:19', 'fa-user', NULL, 'ravishbeg Active', NULL, 0),
(526, 8, 'settings', 8, 'activity_save_cronjob', '2020-02-04 09:29:16', 'fa-coffee', NULL, 'on', NULL, 0),
(527, 8, 'user', 11, 'activity_change_status', '2020-02-04 09:51:28', 'fa-user', NULL, 'green Active', NULL, 0),
(528, 8, 'user', 15, 'activity_added_new_user', '2020-02-05 09:33:06', 'fa-user', NULL, 'lflf', NULL, 0),
(529, 8, 'user', 3, 'activity_new_user_bank', '2020-02-05 10:06:22', 'fa-user', NULL, 'r768k', NULL, 0),
(530, 8, 'user', 15, 'activity_update_user', '2020-02-05 10:17:35', 'fa-user', NULL, 'r768k', NULL, 0),
(531, 8, 'user', 15, 'activity_update_user', '2020-02-05 10:21:48', 'fa-user', NULL, 'r768k', NULL, 0),
(532, 8, 'tasks', 1, 'activity_update_task', '2020-02-06 06:14:27', 'fa-tasks', 'admin/tasks/view_task_details/1', 'Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod', NULL, 0),
(533, 8, 'tasks', 1, 'activity_update_task', '2020-02-06 06:15:27', 'fa-tasks', 'admin/tasks/view_task_details/1', 'Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod', NULL, 0),
(534, 8, 'tasks', 1, 'activity_update_task', '2020-02-06 06:16:02', 'fa-tasks', 'admin/tasks/view_task_details/1', 'Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod', NULL, 0),
(535, 8, 'tasks', 1, 'activity_update_task', '2020-02-06 06:16:34', 'fa-tasks', 'admin/tasks/view_task_details/1', '100', NULL, 0),
(536, 8, 'tasks', 6, 'activity_update_task', '2020-02-06 06:16:46', 'fa-tasks', 'admin/tasks/view_task_details/6', '100', NULL, 0),
(537, 8, 'tasks', 6, 'activity_update_task', '2020-02-06 06:16:46', 'fa-tasks', 'admin/tasks/view_task_details/6', '0', NULL, 0),
(538, 8, 'tasks', 6, 'activity_update_task', '2020-02-06 06:16:46', 'fa-tasks', 'admin/tasks/view_task_details/6', '100', NULL, 0),
(539, 8, 'overtime', 1, 'New Overtime Added', '2020-02-06 06:46:31', 'clock-o', 'admin/utilities/view_overtime/1', '2020-01-25', NULL, 0),
(540, 8, 'overtime', 1, 'New Overtime Added', '2020-02-06 06:46:35', 'clock-o', 'admin/utilities/view_overtime/1', '2020-01-25', NULL, 0),
(541, 8, 'tasks', 9, 'activity_update_task', '2020-02-06 09:31:36', 'fa-tasks', 'admin/tasks/view_task_details/9', 'Script to interface Ipeople & Ad groups ', NULL, 0),
(542, 8, 'tasks', 8, 'activity_update_task', '2020-02-06 09:36:27', 'fa-tasks', 'admin/tasks/view_task_details/8', 'Setting Up IAM Process', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advance_salary`
--

CREATE TABLE `tbl_advance_salary` (
  `advance_salary_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `advance_amount` varchar(200) NOT NULL,
  `deduct_month` varchar(30) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 =pending,1=accpect , 2 = reject and 3 = paid',
  `approve_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_allowed_ip`
--

CREATE TABLE `tbl_allowed_ip` (
  `allowed_ip_id` int(11) NOT NULL,
  `allowed_ip` varchar(100) NOT NULL,
  `status` enum('active','reject','pending') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_allowed_ip`
--

INSERT INTO `tbl_allowed_ip` (`allowed_ip_id`, `allowed_ip`, `status`) VALUES
(1, '', 'reject');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE `tbl_announcements` (
  `announcements_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('published','unpublished') NOT NULL DEFAULT 'unpublished' COMMENT '0 = unpublished, 1 = published',
  `view_status` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Read 2=Unread',
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `all_client` varchar(20) DEFAULT NULL,
  `attachment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_announcements`
--

INSERT INTO `tbl_announcements` (`announcements_id`, `title`, `description`, `user_id`, `created_date`, `status`, `view_status`, `start_date`, `end_date`, `all_client`, `attachment`) VALUES
(2, 'Create an external account for vendors ( Best Practise ) ', '<a href=\"https://web-nostromo.com/BIA/admin/knowledgebase/details/articles/3\">https://web-nostromo.com/BIA/admin/knowledgebase/details/articles/3</a>', 1, '2019-07-31 05:49:31', 'published', 1, '2019-08-31', '2019-08-31', NULL, NULL),
(3, 'test', 'sdfs', 8, '2020-01-20 07:04:09', 'published', 1, '2020-01-02', '2020-01-31', '1', '[{\"fileName\":\"login.png\",\"path\":\"uploads\\/login.png\",\"fullPath\":\"\\/home\\/kvtaf1utdxk1\\/public_html\\/plazacrm.com\\/uploads\\/login.png\",\"ext\":\".png\",\"size\":804.55,\"is_image\":1}]');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign_item`
--

CREATE TABLE `tbl_assign_item` (
  `assign_item_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `assign_inventory` int(5) NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attendance_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `leave_application_id` int(11) DEFAULT 0,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `attendance_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'status 0=absent 1=present 3 = onleave',
  `clocking_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attendance_id`, `user_id`, `leave_application_id`, `date_in`, `date_out`, `attendance_status`, `clocking_status`) VALUES
(1, 1, 0, '2019-07-26', '2019-07-26', 1, 0),
(2, 1, 0, '2019-07-28', '2019-07-29', 1, 0),
(3, 1, 0, '2019-08-02', '2019-08-02', 1, 0),
(4, 1, 0, '2019-08-23', '2019-08-23', 1, 0),
(5, 8, 0, '2019-12-18', '2020-02-08', 1, 0),
(6, 1, 0, '2019-12-23', '2019-12-23', 1, 0),
(7, 8, 0, '2019-12-23', '2020-02-08', 1, 0),
(8, 8, 0, '2020-01-03', '2020-02-08', 1, 0),
(9, 8, 0, '2020-01-17', '2020-02-08', 1, 0),
(10, 8, 0, '2020-01-24', '2020-02-08', 1, 0),
(11, 8, 0, '2020-02-02', '2020-02-08', 1, 0),
(12, 8, 0, '2020-02-04', '2020-02-08', 1, 0),
(13, 22, 0, '2020-02-07', '2020-02-08', 1, 0),
(14, 22, 0, '2020-02-08', '2020-02-08', 1, 0),
(15, 22, 0, '2020-02-11', '2020-02-11', 1, 0),
(16, 22, 0, '2020-02-12', '2020-02-12', 1, 0),
(17, 13, 0, '2020-02-14', '2020-02-14', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bug`
--

CREATE TABLE `tbl_bug` (
  `bug_id` int(11) NOT NULL,
  `issue_no` varchar(50) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `task_id` int(11) NOT NULL DEFAULT 0,
  `bug_title` varchar(200) NOT NULL,
  `bug_description` text NOT NULL,
  `bug_status` varchar(30) DEFAULT NULL,
  `notes` text NOT NULL,
  `priority` varchar(20) NOT NULL,
  `severity` varchar(20) DEFAULT NULL,
  `reproducibility` text DEFAULT NULL,
  `reporter` int(11) DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permission` text DEFAULT NULL,
  `client_visible` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bug`
--

INSERT INTO `tbl_bug` (`bug_id`, `issue_no`, `project_id`, `opportunities_id`, `task_id`, `bug_title`, `bug_description`, `bug_status`, `notes`, `priority`, `severity`, `reproducibility`, `reporter`, `created_time`, `update_time`, `permission`, `client_visible`) VALUES
(1, 'R&D1', 31, NULL, 0, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )', '<p>Not on every env. This is an exeption.</p>\n', 'resolved', '', 'ok', 'minor', '<p><br></p>', 1, '2019-07-30 21:30:27', '2019-08-01 07:26:16', '{\"1\":[\"view\"]}', NULL),
(2, 'R&D2', 31, NULL, 0, 'External users cant access with externals email', '', 'in_progress', '', 'ok', 'minor', '<p><br></p>', 1, '2019-07-30 21:31:27', '2019-08-12 21:56:50', '{\"1\":[\"view\"],\"3\":[\"view\"],\"5\":[\"view\"]}', NULL),
(3, 'R&D3', 31, NULL, 0, 'Visual bug on google chrome ( Julie Hutchison site )', '<p>https://ipsengroup.sharepoint.com/sites/IPN10360rBoNTE/Commercial WS/Forms/AllItems.aspx</p>\n\n<p> </p>\n\n<p>Hi Marco</p>\n\n<p> </p>\n\n<p>We uninstalled and reinstalled Google Chrome (I didn’t, IT did it for me) and it had no effect.  The problem is still visible.</p>\n\n<p> </p>\n\n<p>Kind regards</p>\n\n<p> </p>\n\n<p>Julie</p>\n\n<p> </p>\n\n<p><strong>From:</strong> Marco DELPIANO<br>\n<strong>Sent:</strong> 01 August 2019 11:30<br>\n<strong>To:</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>>; Moez BOUATTOUR &lt;<a href=\"mailto:moez.bouattour@ineat-conseil.fr\">moez.bouattour@ineat-conseil.fr</a>>; Zied FEHRI &lt;<a href=\"mailto:zied.fehri@ineat-conseil.fr\">zied.fehri@ineat-conseil.fr</a>><br>\n<strong>Cc:</strong> Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>><br>\n<strong>Subject:</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>Dear Julie,</p>\n\n<p> </p>\n\n<p>We analyzed your issue with <a href=\"mailto:zied.fehri@ineat-conseil.fr\">@Zied FEHRI</a> and we could not succeed into reproducing the bug on our end.</p>\n\n<p> </p>\n\n<p><a href=\"mailto:zied.fehri@ineat-conseil.fr\">@Zied FEHRI</a> suggested an uninstall / re install of the Google Chrome Browser.</p>\n\n<p> </p>\n\n<p>Could you please try that ?</p>\n\n<p> </p>\n\n<p>If you need any help. Please contact me or Service Desk.</p>\n\n<p> </p>\n\n<p>Kind regards,</p>\n\n<p><a href=\"https://eur01.safelinks.protection.outlook.com/?url=https://htmlsig.com/t/000001BZZNJV&data=02|01|marco.delpiano@ipsen.com|6acfeddb5eef44b3370608d716928613|9e776b6aa6cc4fafa054a502153beb01|0|0|637002690882039301&sdata=y0ZZUTYJ/p4qXEoPlev4qGzfkK130HBmMBy7IDEHO4U=&reserved=0\"><img alt=\"Ipsen Limited ltd\" src=\"https://htmlsigs.s3.amazonaws.com/logos/files/000/654/990/landscape/logo-ipsen.gif\"></a></p>\n\n<p><strong>Marco DELPIANO</strong> | Project Manager – Application Expert (O365 – SharePoint)<br>\n<a href=\"mailto:Marco.delpiano@ipsen.com\">Marco.delpiano@ipsen.com</a> /  +33 6 99 60 77 76</p>\n\n<p><strong>Boulogne Billancourt, 92100</strong></p>\n\n<p> </p>\n\n<p><strong>De :</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>><br>\n<strong>Envoyé :</strong> Wednesday, July 31, 2019 9:05 AM<br>\n<strong>À :</strong> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>>; Virginie BARI &lt;<a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a>>; Moez BOUATTOUR &lt;<a href=\"mailto:moez.bouattour@ineat-conseil.fr\">moez.bouattour@ineat-conseil.fr</a>><br>\n<strong>Cc :</strong> Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>><br>\n<strong>Objet :</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>Hi Marco</p>\n\n<p> </p>\n\n<p>The problem below is still occurring with Sharepoint.  Do I need to send the request through the new IT portal to be resolved?</p>\n\n<p> </p>\n\n<p>Many thanks</p>\n\n<p> </p>\n\n<p>Julie</p>\n\n<p> </p>\n\n<p><strong>From:</strong> Marco DELPIANO<br>\n<strong>Sent:</strong> 01 July 2019 13:42<br>\n<strong>To:</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>>; Virginie BARI &lt;<a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a>>; Moez BOUATTOUR &lt;<a href=\"mailto:moez.bouattour@ineat-conseil.fr\">moez.bouattour@ineat-conseil.fr</a>><br>\n<strong>Cc:</strong> Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>><br>\n<strong>Subject:</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>Dear Julie,</p>\n\n<p> </p>\n\n<p>I agree.</p>\n\n<p> </p>\n\n<p><a href=\"mailto:moez.bouattour@ineat-conseil.fr\">@Moez</a> will investigate this issue as soon as possible.</p>\n\n<p> </p>\n\n<p>Kr</p>\n\n<p><a href=\"https://eur01.safelinks.protection.outlook.com/?url=https://htmlsig.com/t/000001BZZNJV&data=02|01|marco.delpiano@ipsen.com|6acfeddb5eef44b3370608d716928613|9e776b6aa6cc4fafa054a502153beb01|0|0|637002690882039301&sdata=y0ZZUTYJ/p4qXEoPlev4qGzfkK130HBmMBy7IDEHO4U=&reserved=0\"><img alt=\"Ipsen Limited ltd\" src=\"https://htmlsigs.s3.amazonaws.com/logos/files/000/654/990/landscape/logo-ipsen.gif\"></a></p>\n\n<p><strong>Marco DELPIANO</strong> | Project Manager – Application Expert (O365 – SharePoint)<br>\n<a href=\"mailto:Marco.delpiano@ipsen.com\">Marco.delpiano@ipsen.com</a> /  +33 6 99 60 77 76</p>\n\n<p><strong>Boulogne Billancourt, 92100</strong></p>\n\n<p> </p>\n\n<p><strong>De :</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>><br>\n<strong>Envoyé :</strong> Monday, July 1, 2019 2:40 PM<br>\n<strong>À :</strong> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>>; Virginie BARI &lt;<a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a>><br>\n<strong>Cc :</strong> Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>>; Moez BOUATTOUR &lt;<a href=\"mailto:moez.bouattour@ineat-conseil.fr\">moez.bouattour@ineat-conseil.fr</a>><br>\n<strong>Objet :</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>Hi</p>\n\n<p> </p>\n\n<p>Yes, I can see the whole page using Internet Explorer.  However, this glitch should be sorted – has it occurred with any other new Sharepoint sites being rolled out?   How should I get this escalated for investigation? I don’t want to have to open both  Explorer and Chrome all the time for this one site.</p>\n\n<p> </p>\n\n<p>Many thanks</p>\n\n<p> </p>\n\n<p>Julie</p>\n\n<p> </p>\n\n<p><strong>From:</strong> Marco DELPIANO<br>\n<strong>Sent:</strong> 01 July 2019 13:30<br>\n<strong>To:</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>>; Virginie BARI &lt;<a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a>><br>\n<strong>Cc:</strong> Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>>; Moez BOUATTOUR &lt;<a href=\"mailto:moez.bouattour@ineat-conseil.fr\">moez.bouattour@ineat-conseil.fr</a>><br>\n<strong>Subject:</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>Virginie had the same problem… but as I cant replicate on my end I have no idea why this is happening.</p>\n\n<p> </p>\n\n<p>Using internet explorer should solve the problem but I will have a look again to see what is going wrong.</p>\n\n<p> </p>\n\n<p><strong>De :</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>><br>\n<strong>Envoyé :</strong> Monday, July 1, 2019 2:26 PM<br>\n<strong>À :</strong> Virginie BARI &lt;<a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a>>; Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<strong>Cc :</strong> Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>><br>\n<strong>Objet :</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>Hi</p>\n\n<p> </p>\n\n<p>I have one further issue with the new Sharepoint for rBoNT-E – when I open it, it appears off-centre and I cant see or scroll across to the left (see screen shot).  Can you please help.  I don’t think it is my settings, all other Sharepoints are fine.</p>\n\n<p> </p>\n\n<p><img alt=\"cid:image001.jpg@01D54861.9B12DD30\" src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image001.jpg\"></p>\n\n<p>Many thanks</p>\n\n<p> </p>\n\n<p>Julie</p>\n\n<p> </p>\n\n<p><strong>From:</strong> Julie HUTCHISON<br>\n<strong>Sent:</strong> 01 July 2019 13:03<br>\n<strong>To:</strong> Virginie BARI &lt;<a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a>>; Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<strong>Cc:</strong> Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>><br>\n<strong>Subject:</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>Yes, thanks Marco</p>\n\n<p> </p>\n\n<p>Kind regards</p>\n\n<p> </p>\n\n<p>Julie</p>\n\n<p> </p>\n\n<p><strong>From:</strong> Virginie BARI<br>\n<strong>Sent:</strong> 01 July 2019 12:14<br>\n<strong>To:</strong> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<strong>Cc:</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>>; Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>><br>\n<strong>Subject:</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>You’re a star, thank you Marco !!</p>\n\n<p> </p>\n\n<p><strong>From:</strong> Marco DELPIANO<br>\n<strong>Sent:</strong> Monday, July 01, 2019 1:08 PM<br>\n<strong>To:</strong> Virginie BARI &lt;<a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a>><br>\n<strong>Cc:</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>>; Floriane MOTTET &lt;<a href=\"mailto:floriane.mottet@ipsen.com\">floriane.mottet@ipsen.com</a>><br>\n<strong>Subject:</strong> RE: IPN10360 share point</p>\n\n<p> </p>\n\n<p>Dear Julie,</p>\n\n<p> </p>\n\n<p>Those modifications has been  completed like specified in Virginie email.</p>\n\n<p> </p>\n\n<p>Kr,</p>\n\n<p><a href=\"https://eur01.safelinks.protection.outlook.com/?url=https://htmlsig.com/t/000001BZZNJV&data=02|01|marco.delpiano@ipsen.com|6acfeddb5eef44b3370608d716928613|9e776b6aa6cc4fafa054a502153beb01|0|0|637002690882049295&sdata=fmOoSD7D6gGzjYJk2fYEsBx+UZZI/eJzoUTl64tLfdk=&reserved=0\"><img alt=\"Ipsen Limited ltd\" src=\"https://htmlsigs.s3.amazonaws.com/logos/files/000/654/990/landscape/logo-ipsen.gif\"></a></p>\n\n<p><strong>Marco DELPIANO</strong> | Project Manager – Application Expert (O365 – SharePoint)<br>\n<a href=\"mailto:Marco.delpiano@ipsen.com\">Marco.delpiano@ipsen.com</a> /  +33 6 99 60 77 76</p>\n\n<p><strong>Boulogne Billancourt, 92100</strong></p>\n\n<p><strong>De :</strong> Virginie BARI &lt;<a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a>><br>\n<strong>Envoyé :</strong> Friday, June 28, 2019 3:27 PM<br>\n<strong>À :</strong> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<strong>Cc :</strong> Julie HUTCHISON &lt;<a href=\"mailto:julie.hutchison@ipsen.com\">julie.hutchison@ipsen.com</a>><br>\n<strong>Objet :</strong> IPN10360 share point</p>\n\n<p> </p>\n\n<p>HI Marco,</p>\n\n<p> </p>\n\n<p>I can see you’re OOO today and I won’t be working on Monday anymore.</p>\n\n<p>In my IPN10360 share point website, could you please :</p>\n\n<ul>\n <li>Why, when I click on “scenario” , the page cannot be found ? (I created It correctly I think) and then, cannot see the folder when I click on the “glabellar lines” link</li>\n</ul>\n\n<p><img src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image003.gif\"><img alt=\"cid:image006.jpg@01D53010.653EC480\" src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image004.jpg\"></p>\n\n<p> </p>\n\n<p>If you manage to correct this, would you mind moving the 2 folders that are called “UFL” and “ultra fast plan GL” into this folder “scenario” , please</p>\n\n<p> </p>\n\n<p><img alt=\"cid:image007.jpg@01D53010.653EC480\" src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image005.jpg\"></p>\n\n<p>Please inform Julie when done</p>\n\n<p> </p>\n\n<p>Thanks a lot,</p>\n\n<p>Virginie</p>\n\n<p> </p>\n\n<p> </p>\n\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n <tbody>\n  <tr>\n   <td>\n   <p> </p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p><strong>Virginie BARI</strong></p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p> </p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>Global R&D Project Manager</p>\n   </td>\n  </tr>\n  <tr>\n   <td> </td>\n  </tr>\n  <tr>\n   <td>\n   <p>GRDO</p>\n   </td>\n  </tr>\n  <tr>\n   <td> </td>\n  </tr>\n  <tr>\n   <td>\n   <hr></td>\n  </tr>\n  <tr>\n   <td> </td>\n  </tr>\n  <tr>\n   <td>\n   <p>+33 6 44 17 52 70  (cell phone)</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p>+33 1 60 92 70 37 (fixed phone)</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p><a href=\"mailto:virginie.bari@ipsen.com\">virginie.bari@ipsen.com</a></p>\n   </td>\n  </tr>\n  <tr>\n   <td> </td>\n  </tr>\n  <tr>\n   <td>\n   <p>Ipsen Innovation</p>\n   </td>\n  </tr>\n  <tr>\n   <td> </td>\n  </tr>\n  <tr>\n   <td>\n   <p>5 avenue du Canada</p>\n\n   <p>91940 LES ULIS</p>\n\n   <p>FRANCE</p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p> </p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p><a href=\"https://eur01.safelinks.protection.outlook.com/?url=http://www.ipsen.com/&data=02|01|marco.delpiano@ipsen.com|6acfeddb5eef44b3370608d716928613|9e776b6aa6cc4fafa054a502153beb01|0|0|637002690882049295&sdata=ieFAzUHvGRr4S+OtsfY7aThkLAdvv7RL9pynNOIgDCE=&reserved=0\" target=\"_blank\">www.ipsen.com</a></p>\n   </td>\n  </tr>\n  <tr>\n   <td> </td>\n  </tr>\n  <tr>\n   <td>\n   <p><img alt=\"Logo Ipsen\" src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image007.gif\"></p>\n   </td>\n  </tr>\n  <tr>\n   <td>\n   <p> </p>\n   </td>\n  </tr>\n </tbody>\n</table>\n\n<p> </p>\n\n<p> </p>\n\n<p> </p>\n\n<p> </p>\n', 'in_progress', '', 'ok', 'minor', '<p>Cant reproduce...</p>', 1, '2019-07-30 21:34:08', '2019-08-13 00:41:20', 'all', NULL),
(4, 'R&D4', 31, NULL, 0, 'Upcoming Events widget not always displaying all the events of the day', '', 'resolved', '', 'ok', 'minor', '<p><br></p>', 1, '2019-07-30 21:40:17', '2019-08-13 00:40:00', 'all', NULL),
(5, 'R&D4', 31, NULL, 0, 'Visitors group not providing access to website', '', 'resolved', '', 'ok', 'minor', '<p><br></p>', 1, '2019-08-01 05:37:14', '2019-08-13 01:42:00', 'all', NULL),
(6, 'R&D5', 31, NULL, 0, 'Edit mode not displaying all the item', '', 'resolved', '', 'ok', 'minor', '<p><br></p>', 1, '2019-08-01 07:13:15', '2019-08-13 00:39:16', '{\"1\":[\"view\"]}', NULL),
(7, 'R&D6', 31, NULL, 0, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>', '', 'resolved', '', 'ok', 'minor', '<p><br></p>', 1, '2019-08-01 07:25:09', '2019-08-12 19:03:53', 'all', NULL),
(8, 'R&D7', 31, NULL, 0, 'Problem reported by Anne concerning the Team Member Access Group', '<p>Seem to be solved</p>\n', 'unconfirmed', '', 'ok', 'minor', '<p><br></p>', 1, '2019-08-01 07:29:03', '2019-08-13 00:37:28', 'all', NULL),
(9, 'R&D8', 31, NULL, 0, 'Visual Bug on document libraries & list ( White frame )', '', 'resolved', '', 'ok', 'minor', '<p><br></p>', 1, '2019-08-01 07:30:45', '2019-08-13 00:38:34', 'all', NULL),
(10, 'R&D10', 31, NULL, 0, 'Upcoming event not all showing on floriane site ( to take actions to correct on all sites & model)', '<p>Hello Zied,</p>\n\n<p> </p>\n\n<p>Encore un petit soucis avec le upcoming event.</p>\n\n<p> </p>\n\n<p>Je t’ai donné le droits sur le site ci-dessous.</p>\n\n<p> </p>\n\n<p><a href=\"https://ipsengroup.sharepoint.com/sites/OnivydeRDGPT\">https://ipsengroup.sharepoint.com/sites/OnivydeRDGPT</a></p>\n\n<p> </p>\n\n<p>Il y a deux événement pour Aout qui ne s’affiche ( Total 6 normalement ) alors que pour septembre tout s’affiche par exemple ( 8 évènements au total )</p>\n\n<p> </p>\n\n<p>Bien à toi,</p>\n', 'confirmed', '', 'ok', 'major', '<p><br></p>', 1, '2019-08-12 21:50:15', '2019-08-12 21:51:25', '{\"1\":[\"view\"]}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calls`
--

CREATE TABLE `tbl_calls` (
  `calls_id` int(11) NOT NULL,
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` varchar(20) CHARACTER SET latin1 NOT NULL,
  `call_summary` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checklists`
--

CREATE TABLE `tbl_checklists` (
  `checklist_id` int(11) NOT NULL,
  `module` varchar(32) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `finished` int(11) DEFAULT 0,
  `create_datetime` datetime DEFAULT NULL,
  `added_from` int(11) DEFAULT NULL,
  `finished_from` int(11) DEFAULT NULL,
  `list_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` int(11) NOT NULL,
  `primary_contact` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `currency` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `skype_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hosting_company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hostname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_status` tinyint(1) NOT NULL COMMENT '1 = person and 2 = company',
  `profile_photo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `leads_id` int(11) NOT NULL,
  `latitude` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_group_id` int(11) DEFAULT NULL,
  `active` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sms_notification` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`client_id`, `primary_contact`, `name`, `email`, `short_note`, `website`, `phone`, `mobile`, `fax`, `address`, `city`, `zipcode`, `currency`, `skype_id`, `linkedin`, `facebook`, `twitter`, `language`, `country`, `vat`, `hosting_company`, `hostname`, `port`, `password`, `username`, `client_status`, `profile_photo`, `date_added`, `leads_id`, `latitude`, `longitude`, `customer_group_id`, `active`, `sms_notification`) VALUES
(1, 0, 'GMAP', 'admin@admin.com', '', '', '', '', '', '', '', '', 'EUR', '', '', '', '', 'english', 'France', '', '', '', '', NULL, '', 0, NULL, '2019-07-23 19:04:37', 0, '', '', NULL, '', NULL),
(2, NULL, 'HR', 'admin@admin.com', '', '', '', '', '', '', '', '', 'EUR', '', '', '', '', 'english', 'France', '', '', '', '', NULL, '', 0, NULL, '2019-07-30 00:37:57', 0, '', '', NULL, '', NULL),
(3, NULL, 'IT', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-07-31 06:38:31', 0, '', '', NULL, '', NULL),
(4, NULL, 'BI', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-07-31 07:00:57', 0, '', '', NULL, '', NULL),
(5, NULL, 'Marketing ( Uro-Onco)', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-07-31 07:01:48', 0, '', '', NULL, '', NULL),
(6, NULL, 'R&D', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-07-31 07:09:13', 0, '', '', NULL, '', NULL),
(7, NULL, 'Communication', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-07-31 07:30:42', 0, '', '', NULL, '', NULL),
(8, NULL, 'Global', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-07-31 07:51:50', 0, '', '', NULL, '', NULL),
(9, NULL, 'Medical', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-08-01 08:35:51', 0, '', '', NULL, '', NULL),
(10, NULL, 'Entreprise Excellence', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-08-27 22:55:30', 0, '', '', NULL, '', NULL),
(11, NULL, 'BI&A', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-08-27 22:55:57', 0, '', '', NULL, '', NULL),
(12, NULL, 'Regulatory', 'admin@admin.com', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-08-27 23:01:10', 0, '', '', NULL, '', NULL),
(13, NULL, 'Purchasing', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', NULL, 'France', '', '', '', '', NULL, '', 0, NULL, '2019-08-27 23:10:15', 0, '', '', NULL, '', NULL),
(14, 0, 'ali', 'op.net2net@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD', NULL, NULL, NULL, NULL, 'english', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-12-20 07:56:55', 0, NULL, NULL, NULL, '', NULL),
(15, 0, 'gree', 'pandeygreen5@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'USD', NULL, NULL, NULL, NULL, 'english', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2019-12-30 05:18:06', 0, NULL, NULL, NULL, '', NULL),
(16, NULL, 'Comany Billing Name', 'admin@admin.com', '', '', '', '', '', '', '', '', 'EUR', '', '', '', '', 'english', 'Egypt', 'Comany Billing Name', '', '', '', NULL, '', 0, NULL, '2020-01-02 11:33:22', 0, '', '', NULL, '', NULL),
(17, NULL, 'Comany Billing Name', 'dpknouliya@gmail.com', '', '', '', '', '', '', '', '', 'EUR', '', '', '', '', 'english', 'France', '', '', '', '', NULL, '', 0, NULL, '2020-01-03 05:37:08', 0, '', '', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_menu`
--

CREATE TABLE `tbl_client_menu` (
  `menu_id` int(11) NOT NULL,
  `label` varchar(20) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `icon` varchar(50) NOT NULL,
  `parent` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_client_menu`
--

INSERT INTO `tbl_client_menu` (`menu_id`, `label`, `link`, `icon`, `parent`, `time`, `sort`, `status`) VALUES
(1, 'projects', 'client/projects', 'fa fa-folder-open-o', 0, '2017-04-19 03:18:26', 3, 0),
(2, 'bugs', 'client/bugs', 'fa fa-bug', 0, '2017-04-19 03:18:39', 4, 0),
(3, 'invoices', 'client/invoice/manage_invoice', 'fa fa-shopping-cart', 0, '2017-04-19 03:18:42', 5, 0),
(4, 'estimates', 'client/estimates', 'fa fa-tachometer', 0, '2017-04-19 03:18:45', 6, 0),
(5, 'payments', 'client/invoice/all_payments', 'fa fa-money', 0, '2017-04-19 03:18:48', 7, 0),
(6, 'tickets', 'client/tickets', 'fa fa-ticket', 0, '2017-06-11 17:11:21', 8, 0),
(7, 'quotations', 'client/quotations', 'fa fa-paste', 0, '2017-04-19 03:18:56', 9, 0),
(8, 'users', 'client/user/user_list', 'fa fa-users', 0, '2017-04-19 03:18:59', 10, 0),
(9, 'settings', 'client/settings', 'fa fa-cogs', 0, '2017-04-19 03:19:03', 11, 0),
(12, 'answered', 'client/tickets/answered', 'fa fa-circle-o', 6, '2017-04-19 03:12:34', 1, 0),
(17, 'dashboard', 'client/dashboard', 'icon-speedometer', 0, '2017-04-19 03:17:21', 1, 0),
(18, 'mailbox', 'client/mailbox', 'fa fa-envelope', 0, '2017-04-19 03:17:21', 2, 0),
(19, 'private_chat', 'chat/conversations', 'fa fa-envelope', 0, '2017-12-09 06:03:43', 12, 0),
(20, 'filemanager', 'client/filemanager', 'fa fa-file', 0, '2017-06-02 15:08:23', 2, 1),
(21, 'proposals', 'client/proposals', 'fa fa-leaf', 0, '2017-07-20 14:21:08', 7, 1),
(22, 'knowledgebase', 'knowledgebase', 'fa fa-question-circle', 0, '2017-11-08 12:04:12', 12, 1),
(23, 'refund_items', 'client/invoice/refund_itemslist', 'icon-share-alt', 0, '2019-10-04 06:44:46', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_role`
--

CREATE TABLE `tbl_client_role` (
  `client_role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_client_role`
--

INSERT INTO `tbl_client_role` (`client_role_id`, `user_id`, `menu_id`) VALUES
(13, 2, 1),
(14, 2, 2),
(15, 2, 3),
(16, 2, 4),
(17, 2, 5),
(18, 2, 6),
(19, 2, 7),
(20, 2, 17),
(21, 2, 18),
(22, 2, 20),
(23, 2, 21),
(24, 2, 22),
(25, 10, 17),
(26, 10, 18),
(27, 10, 20),
(28, 10, 1),
(29, 10, 2),
(30, 10, 3),
(31, 10, 4),
(32, 10, 5),
(33, 10, 21),
(34, 10, 6),
(35, 10, 7),
(36, 10, 22),
(37, 11, 17),
(38, 11, 18),
(39, 11, 20),
(40, 11, 1),
(41, 11, 2),
(42, 11, 3),
(43, 11, 4),
(44, 11, 5),
(45, 11, 21),
(46, 11, 6),
(47, 11, 7),
(48, 11, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clock`
--

CREATE TABLE `tbl_clock` (
  `clock_id` int(11) NOT NULL,
  `attendance_id` int(11) NOT NULL,
  `clockin_time` time DEFAULT NULL,
  `clockout_time` time DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `clocking_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1= clockin_time',
  `ip_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_clock`
--

INSERT INTO `tbl_clock` (`clock_id`, `attendance_id`, `clockin_time`, `clockout_time`, `comments`, `clocking_status`, `ip_address`) VALUES
(1, 1, '01:00:51', '01:01:01', NULL, 0, '176.175.132.33'),
(2, 2, '10:45:06', '01:40:51', NULL, 0, '194.98.14.73'),
(3, 3, '10:51:02', '12:06:36', NULL, 0, '176.175.132.33'),
(4, 4, '12:48:54', '12:49:23', NULL, 0, '176.175.132.33'),
(5, 5, '12:14:51', '12:14:56', NULL, 0, '103.99.15.182'),
(6, 5, '08:24:43', '08:24:47', NULL, 0, '103.99.15.182'),
(7, 5, '08:24:52', '08:25:10', NULL, 0, '103.99.15.182'),
(8, 6, '10:44:14', '10:44:21', NULL, 0, '103.99.15.182'),
(9, 6, '10:44:25', '10:59:26', NULL, 0, '103.99.15.182'),
(10, 7, '10:47:54', '10:55:28', NULL, 0, '103.99.15.182'),
(11, 7, '10:55:32', '06:17:14', NULL, 0, '103.99.15.182'),
(12, 6, '10:59:37', '10:59:40', NULL, 0, '103.99.15.182'),
(13, 8, '08:30:37', '08:31:15', NULL, 0, '103.99.15.182'),
(14, 8, '08:31:33', '10:15:40', NULL, 0, '103.99.15.182'),
(15, 9, '11:05:35', '11:05:38', NULL, 0, '103.99.15.182'),
(16, 10, '08:21:30', '08:21:35', NULL, 0, '103.99.15.182'),
(17, 10, '08:21:48', '08:21:58', NULL, 0, '103.99.15.182'),
(18, 11, '05:49:25', '06:30:10', NULL, 0, '103.99.15.182'),
(19, 12, '08:15:59', '08:16:04', NULL, 0, '109.161.172.38'),
(20, 12, '10:34:03', '10:37:01', NULL, 0, '103.99.15.182'),
(21, 13, '13:13:10', NULL, NULL, 0, '103.99.15.182'),
(22, 14, '12:44:14', '12:44:16', NULL, 0, '171.48.41.89'),
(23, 14, '12:44:27', '12:44:28', NULL, 0, '171.48.41.89'),
(24, 14, '12:44:29', NULL, NULL, 0, '171.48.41.89'),
(25, 15, '00:00:00', NULL, NULL, 0, '103.99.15.182'),
(26, 16, '12:46:38', '07:16:38', NULL, 0, '103.99.15.182'),
(27, 16, '12:47:53', '12:53:30', NULL, 0, '103.99.15.182'),
(28, 16, '12:56:03', '13:05:50', NULL, 0, '103.99.15.182'),
(29, 16, '13:19:07', '13:19:08', NULL, 0, '103.99.15.182'),
(30, 16, '13:19:09', '14:53:06', NULL, 0, '103.99.15.182'),
(31, 16, '15:10:30', '20:33:17', NULL, 0, '103.99.15.182'),
(32, 16, '00:00:00', '20:33:35', NULL, 0, '42.108.10.179'),
(33, 17, '12:50:00', '12:50:00', NULL, 0, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clock_history`
--

CREATE TABLE `tbl_clock_history` (
  `clock_history_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `clock_id` int(11) NOT NULL,
  `clockin_edit` time NOT NULL,
  `clockout_edit` time DEFAULT NULL,
  `reason` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=pending and 2 = accept  3= reject',
  `notify_me` tinyint(4) NOT NULL DEFAULT 1,
  `view_status` tinyint(4) NOT NULL DEFAULT 2,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `config_key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`config_key`, `value`) VALUES
('2checkout_private_key', 'CE6B7C6E-CDC4-404A-80D7-08F40CC0C65D'),
('2checkout_publishable_key', 'D188F8DC-3B8A-408E-A479-15A54113C461'),
('2checkout_seller_id', '901386312'),
('2checkout_status', 'deactive'),
('absent_color', 'rgba(247,23,36,0.92)'),
('absent_on_calendar', 'on'),
('accounting_snapshot', '0'),
('active_background', '#1c7086'),
('active_color', '#c1c1c1'),
('active_cronjob', 'on'),
('active_custom_color', '0'),
('active_pre_loader', '1'),
('advance_salary', 'true'),
('advance_salary_email', '1'),
('aim_api_login_id', '7F6eJh7uFyD'),
('aim_authorize_live ', 'FALSE'),
('aim_authorize_status', 'deactive'),
('aim_authorize_transaction_key', '64uhZ93mqH6c3MWf'),
('allowed_files', 'gif|png|jpeg|jpg|pdf|doc|txt|docx|xls|zip|rar|xls|mp4|ico|xlsx|pptx'),
('allow_apply_job_from_login', 'TRUE'),
('allow_client_project', 'TRUE'),
('allow_client_registration', 'TRUE'),
('allow_customer_edit_amount', 'No'),
('allow_multiple_client_in_project', NULL),
('allow_sub_tasks', 'TRUE'),
('amount_to_words_lowercase', 'No'),
('announcements_email', '1'),
('api_signature', 'AZxbwZ9bPVPFFf7hCCNemacLJwlCAqoMULHXAenCuJAwtzfjGbkbaIhV'),
('aside-collapsed', NULL),
('aside-float', NULL),
('attendance_report', '1'),
('authorize', 'login id'),
('authorize_status', 'active'),
('authorize_transaction_key', 'transfer key'),
('automatic_database_backup', 'on'),
('automatic_email_on_recur', 'TRUE'),
('auto_check_for_new_notifications', '0'),
('auto_close_ticket', '72'),
('award_email', '1'),
('bank_cash', '0'),
('bitcoin_address', NULL),
('bitcoin_status', 'active'),
('body_background', 'rgba(229,252,252,0.81)'),
('braintree_default_account', NULL),
('braintree_live_or_sandbox', 'TRUE'),
('braintree_merchant_id', '9m2qzhrptx7wyccy'),
('braintree_private_key', 'aa804bc269d4a9c8d8170ab8aed353b3'),
('braintree_public_key', '62grv2dnvfpg599v'),
('braintree_status', 'active'),
('bugs_color', '#1f3d1c'),
('bugs_on_calendar', 'on'),
('build', '0'),
('ccavenue_access_code', 'AVEB75FA40AM89BEMA'),
('ccavenue_enable_test_mode', 'TRUE'),
('ccavenue_key', '201F5203749670E18D664192B594B74E'),
('ccavenue_merchant_id', '161761'),
('ccavenue_status', 'active'),
('client_default_menu', 'a:1:{s:19:\"client_default_menu\";a:12:{i:0;s:2:\"17\";i:1;s:2:\"18\";i:2;s:2:\"20\";i:3;s:1:\"1\";i:4;s:1:\"2\";i:5;s:1:\"3\";i:6;s:1:\"4\";i:7;s:1:\"5\";i:8;s:2:\"21\";i:9;s:1:\"6\";i:10;s:1:\"7\";i:11;s:2:\"22\";}}'),
('company_address', '/'),
('company_city', 'Paris'),
('company_country', 'France'),
('company_domain', ''),
('company_email', 'info@greenusys.com'),
('company_legal_name', 'Tester'),
('company_logo', 'uploads/default_logo.png'),
('company_name', 'Tester'),
('company_phone', ''),
('company_phone_2', ''),
('company_vat', ''),
('company_zip_code', '75'),
('config_additional_flag', '/novalidate-cert'),
('config_host', 'mail.coderitems.com'),
('config_imap', '0'),
('config_imap_or_pop', 'on'),
('config_mailbox', 'INBOX'),
('config_password', '1c896e7d0fcbf64bb0921dd4bec18c947d34a5397472bb13b9f9ed95e4fd10dea45f365dde644233b2eef83f34e67cfd2fcc29b99c2835b89e8ecde5cdf233081hQfQaY72VtMiijV4wlVI6nmPwdsrMgJHALC3GCDw8E='),
('config_pop3', '0'),
('config_port', '993'),
('config_ssl', 'on'),
('config_username', 'support@coderitems.com'),
('contact_person', 'Tester'),
('contract_expiration_reminder', ''),
('copyright_name', 'Uniquecoder'),
('copyright_url', 'https://codecanyon.net/user/unique_coder'),
('country', '0'),
('cron_key', '34WI2L12L87I1A65M90M9A42N41D08A26I'),
('currency_position', '1'),
('date_format', '%m.%d.%Y'),
('date_php_format', 'Y.m.d'),
('date_picker_format', 'yyyy.mm.dd'),
('decimal_separator', '2'),
('default_account', '1'),
('default_currency', 'EUR'),
('default_currency_symbol', '$'),
('default_department', '2'),
('default_language', 'english'),
('default_leads_source', '1'),
('default_lead_permission', 'all'),
('default_lead_status', '1'),
('default_priority', 'ok'),
('default_status', 'closed'),
('default_tax', 'N;'),
('default_terms', 'Thank you for <span style=\"font-weight: bold;\">your</span> busasiness. Please process this invoice within the due date.'),
('delete_mail_after_import', NULL),
('demo_mode', 'FALSE'),
('deposit_email', '1'),
('desktop_notifications', '1'),
('developer', 'ig63Yd/+yuA8127gEyTz9TY4pnoeKq8dtocVP44+BJvtlRp8Vqcetwjk51dhSB6Rx8aVIKOPfUmNyKGWK7C/gg=='),
('display_estimate_badge', '0'),
('display_invoice_badge', 'FALSE'),
('email_account_details', 'TRUE'),
('email_estimate_message', 'Hi {CLIENT}<br>Thanks for your business inquiry. <br>The estimate EST {REF} is attached with this email. <br>Estimate Overview:<br>Estimate # : EST {REF}<br>Amount: {CURRENCY} {AMOUNT}<br> You can view the estimate online at:<br>{LINK}<br>Best Regards,<br>{COMPANY}'),
('email_invoice_message', 'Hello {CLIENT}<br>Here is the invoice of {CURRENCY} {AMOUNT}<br>You can view the invoice online at:<br>{LINK}<br>Best Regards,<br>{COMPANY}'),
('email_staff_tickets', 'TRUE'),
('enable_languages', 'TRUE'),
('encryption', 'ssl'),
('estimate_color', 'rgba(160,29,171,1)'),
('estimate_footer', '<span style=\"font-weight: bold; line-height: 21.4px; text-align: right;\">Estimate&nbsp;</span>was created on a computer and is valid without the signature and seal'),
('estimate_language', 'en'),
('estimate_number_format', '[INV]-[yyyy]-[mm]-[dd]-[number]'),
('estimate_on_calendar', 'on'),
('estimate_prefix', 'EST'),
('estimate_start_no', '1'),
('estimate_state', 'block'),
('estimate_terms', 'Hey Looking forward to doing business with you.'),
('expense_email', '1'),
('favicon', 'uploads/favicon.ico'),
('file_max_size', '80000'),
('for_invoice', '0'),
('for_leads', NULL),
('for_tickets', NULL),
('gcal_api_key', 'AIzaSyBXcmmcboEyAgtoUtXjKXe4TfpsnEtoUDQ'),
('gcal_id', 'kla83orf1u7hrj6p0u5gdmpji4@group.calendar.google.com'),
('goal_tracking_color', '#537015'),
('goal_tracking_on_calendar', 'on'),
('google_api_key', 'AIzaSyDH0Cn1U4RGzExl3IySE9X_ZlXKpyxj2Z4'),
('gst_state', 'AN'),
('holiday_on_calendar', 'on'),
('imap_search', '0'),
('imap_search_for_leads', NULL),
('imap_search_for_tickets', NULL),
('increment_estimate_number', 'TRUE'),
('increment_invoice_number', 'TRUE'),
('increment_proposal_number', 'TRUE'),
('installed', 'TRUE'),
('invoices_due_after', '5'),
('invoice_color', '#53b567'),
('invoice_footer', 'Invoice was created on a computer and is valid without the signature and seal'),
('invoice_language', 'en'),
('invoice_logo', 'uploads/thumnail.png'),
('invoice_number_format', '[INV]-[yyyy]-[mm]-[dd]-[number]'),
('invoice_on_calendar', 'on'),
('invoice_prefix', 'INV'),
('invoice_start_no', '1'),
('invoice_state', 'block'),
('invoice_view', '0'),
('item_total_qty_alert', 'No'),
('job_circular_email', '1'),
('language', 'english'),
('languages', 'spanish'),
('last_autobackup', '1515398440'),
('last_check', '1436363002'),
('last_cronjob_run', '1515398438'),
('last_postmaster_run', '1532751856'),
('last_seen_activities', '0'),
('last_tickets_postmaster_run', '1532750363'),
('layout-boxed', NULL),
('layout-fixed', 'layout-fixed'),
('layout-h', NULL),
('leads_color', '#783131'),
('leads_keyword', NULL),
('leads_on_calendar', 'on'),
('leave_email', '1'),
('locale', 'fr_FR'),
('login_background', 'uploads/p3.jpg'),
('login_bg', 'bg-login.jpg'),
('login_position', 'left'),
('logofile', '0'),
('logo_or_icon', 'logo_title'),
('mark_attendance_from_login', 'Yes'),
('max_file_size', '5000'),
('milestone_color', '#a86495'),
('milestone_on_calendar', 'on'),
('mollie_api_key', 'test_tkjFqFF6fP92FDSwBDHpeCzBRMBQBD'),
('mollie_partner_id', '3106644'),
('mollie_status', 'active'),
('money_format', '2'),
('navbar_logo_background', 'rgba(104,155,162,0.95)'),
('notified_user', '[\"1\"]'),
('notify_bug_assignment', 'TRUE'),
('notify_bug_comments', 'TRUE'),
('notify_bug_status', 'TRUE'),
('notify_message_received', 'TRUE'),
('notify_project_assignments', 'TRUE'),
('notify_project_comments', 'TRUE'),
('notify_project_files', 'TRUE'),
('notify_task_assignments', 'TRUE'),
('notify_ticket_reopened', 'TRUE'),
('office_hours', '8'),
('office_time', 'same_time'),
('only_allowed_ip_can_clock', NULL),
('on_leave_color', '#bd1a10'),
('on_leave_on_calendar', 'on'),
('opportunities_color', '#349685'),
('opportunities_on_calendar', 'on'),
('overtime_email', '1'),
('payments_color', '#7f21c9'),
('payments_on_calendar', 'on'),
('paypal_api_password', 'e64448f3fd988dda8ad7e0b1ba21a14c3e59a959008623d9c8bcfca8ca8f73677a82bc6d14075614ea192a98fa0494259859dd0e229ff831c1cdd7751f440cb0cS8v4CPtSoiC4rDwMliNLKtf35DXaZih8pZ7W6mRM9UJg9jYeKg0wwsnFA5Kqywv'),
('paypal_api_username', 'billing_api1.itsolidity.com'),
('paypal_cancel_url', 'paypal/cancel'),
('paypal_email', 'billing@coderitems.com'),
('paypal_ipn_url', 'paypal/t_ipn/ipn'),
('paypal_live', 'TRUE'),
('paypal_status', 'active'),
('paypal_success_url', 'paypal/success'),
('payslip_email', '1'),
('payumoney_enable_test_mode', NULL),
('payumoney_key', 'etzFvcmV'),
('payumoney_salt', 'Q3AbuWZ05e'),
('payumoney_status', 'active'),
('pdf_engine', 'invoicr'),
('performance_email', '1'),
('postmark_api_key', ''),
('postmark_from_address', ''),
('project_color', '#e61755'),
('project_details_view', '1'),
('project_on_calendar', 'on'),
('project_prefix', 'PRO'),
('proposal_footer', '<span style=\"font-weight: 700; text-align: right;\">This Proposal&nbsp;</span>was created on a computer and is valid without the signature and seal'),
('proposal_number_format', '[INV]-[yyyy]-[mm]-[dd]-[number]'),
('proposal_prefix', 'PRO-'),
('proposal_start_no', '1'),
('proposal_terms', 'Hey Looking forward to doing business with you.'),
('protocol', 'mail'),
('purchase_code', ''),
('purchase_number_format', '[INV]-[yyyy]-[mm]-[dd]-[number]'),
('purchase_prefix', 'PUR'),
('purchase_start_no', '1'),
('pusher_app_id', '401479'),
('pusher_app_key', '4cf88668659dc9c987c3'),
('pusher_app_secret', '6fce183b214d17c20dd5'),
('pusher_cluster', 'ap2'),
('qty_calculation_from_items', 'Yes'),
('realtime_notification', '0'),
('recaptcha_secret_key', ''),
('recaptcha_site_key', ''),
('recurring_invoice', '0'),
('reminder_message', 'Hello {CLIENT}<br>This is a friendly reminder to pay your invoice of {CURRENCY} {AMOUNT}<br>You can view the invoice online at:<br>{LINK}<br>Best Regards,<br>{COMPANY}'),
('reset_key', '34WI2L12L87I1A65M90M9A42N41D08A26I'),
('return_stock_number_format', '[INV]-[yyyy]-[mm]-[dd]-[number]'),
('return_stock_prefix', 'R'),
('return_stock_start_no', '1'),
('rows_per_table', '25'),
('RTL', '0'),
('security_token', '5027133599'),
('send_email_when_recur', 'TRUE'),
('settings', 'theme'),
('show-scrollbar', NULL),
('show_estimate_tax', 'TRUE'),
('show_invoice_tax', 'TRUE'),
('show_item_tax', '0'),
('show_login_image', 'TRUE'),
('show_only_logo', 'FALSE'),
('show_proposal_tax', 'TRUE'),
('sidebar_active_background', '#0f778e'),
('sidebar_active_color', '#b3b8cb'),
('sidebar_background', 'rgba(2,53,60,0.95)'),
('sidebar_color', '#fffafa'),
('sidebar_theme', 'bg-info'),
('site_appleicon', 'logo.png'),
('site_author', 'William M.'),
('site_desc', 'Ultimate Project Manager CRM Pro is a Web based PHP application for Freelancers - buy it on Codecanyon'),
('site_favicon', 'logo.png'),
('site_icon', 'fa-flask'),
('smtp_encryption', 'tls'),
('smtp_host', 'smtp.gmail.com'),
('smtp_pass', 'UUJxb1Fubk9pUlNkUWpidHJJd05EQT09'),
('smtp_port', '587'),
('smtp_user', 'smtp@admin.com'),
('stripe_private_key', 'sk_test_g7PUZTcwwFnxdlHrWSOicHfu'),
('stripe_public_key', 'pk_test_x9as1c9jBDpODI7IbC7D0MEB'),
('stripe_status', 'active'),
('submenu_open_background', '#227f85'),
('system_font', 'roboto_condensed'),
('tables_pagination_limit', '50'),
('tasks_color', '#0239c7'),
('tasks_on_calendar', 'on'),
('task_details_view', '1'),
('thousand_separator', ','),
('tickets_keyword', NULL),
('timezone', 'Pacific/Niue'),
('time_format', 'H:i'),
('top_bar_background', '#1f9494'),
('top_bar_color', '#d9d9d9'),
('training_email', '1'),
('two_checkout_live ', 'FALSE'),
('unread_email', 'on'),
('use_gravatar', 'TRUE'),
('use_postmark', 'FALSE'),
('valid_license', 'TRUE'),
('version', '1.4.3'),
('webmaster_email', 'support@example.com'),
('website_name', 'Tester');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contract_type`
--

CREATE TABLE `tbl_contract_type` (
  `contract_type_id` int(11) NOT NULL,
  `contract_type` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(500) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(6) NOT NULL,
  `value` varchar(250) CHARACTER SET latin1 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `value`) VALUES
(1, 'Afghanistan'),
(2, 'Aringland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bosnia and Herzegovina'),
(29, 'Botswana'),
(30, 'Bouvet Island'),
(31, 'Brazil'),
(32, 'British Indian Ocean territory'),
(33, 'Brunei Darussalam'),
(34, 'Bulgaria'),
(35, 'Burkina Faso'),
(36, 'Burundi'),
(37, 'Cambodia'),
(38, 'Cameroon'),
(39, 'Canada'),
(40, 'Cape Verde'),
(41, 'Cayman Islands'),
(42, 'Central African Republic'),
(43, 'Chad'),
(44, 'Chile'),
(45, 'China'),
(46, 'Christmas Island'),
(47, 'Cocos (Keeling) Islands'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Congo'),
(51, 'Congo'),
(52, ' Democratic Republic'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Ivory Coast (Ivory Coast)'),
(56, 'Croatia (Hrvatska)'),
(57, 'Cuba'),
(58, 'Cyprus'),
(59, 'Czech Republic'),
(60, 'Denmark'),
(61, 'Djibouti'),
(62, 'Dominica'),
(63, 'Dominican Republic'),
(64, 'East Timor'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guinea'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'Haiti'),
(96, 'Heard and McDonald Islands'),
(97, 'Honduras'),
(98, 'Hong Kong'),
(99, 'Hungary'),
(100, 'Iceland'),
(101, 'India'),
(102, 'Indonesia'),
(103, 'Iran'),
(104, 'Iraq'),
(105, 'Ireland'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Japan'),
(110, 'Jordan'),
(111, 'Kazakhstan'),
(112, 'Kenya'),
(113, 'Kiribati'),
(114, 'Korea (north)'),
(115, 'Korea (south)'),
(116, 'Kuwait'),
(117, 'Kyrgyzstan'),
(118, 'Lao People\'s Democratic Republic'),
(119, 'Latvia'),
(120, 'Lebanon'),
(121, 'Lesotho'),
(122, 'Liberia'),
(123, 'Libyan Arab Jamahiriya'),
(124, 'Liechtenstein'),
(125, 'Lithuania'),
(126, 'Luxembourg'),
(127, 'Macao'),
(128, 'Macedonia'),
(129, 'Madagascar'),
(130, 'Malawi'),
(131, 'Malaysia'),
(132, 'Maldives'),
(133, 'Mali'),
(134, 'Malta'),
(135, 'Marshall Islands'),
(136, 'Martinique'),
(137, 'Mauritania'),
(138, 'Mauritius'),
(139, 'Mayotte'),
(140, 'Mexico'),
(141, 'Micronesia'),
(142, 'Moldova'),
(143, 'Monaco'),
(144, 'Mongolia'),
(145, 'Montserrat'),
(146, 'Morocco'),
(147, 'Mozambique'),
(148, 'Myanmar'),
(149, 'Namibia'),
(150, 'Nauru'),
(151, 'Nepal'),
(152, 'Netherlands'),
(153, 'Netherlands Antilles'),
(154, 'New Caledonia'),
(155, 'New Zealand'),
(156, 'Nicaragua'),
(157, 'Niger'),
(158, 'Nigeria'),
(159, 'Niue'),
(160, 'Norfolk Island'),
(161, 'Northern Mariana Islands'),
(162, 'Norway'),
(163, 'Oman'),
(164, 'Pakistan'),
(165, 'Palau'),
(166, 'Palestinian Territories'),
(167, 'Panama'),
(168, 'Papua New Guinea'),
(169, 'Paraguay'),
(170, 'Peru'),
(171, 'Philippines'),
(172, 'Pitcairn'),
(173, 'Poland'),
(174, 'Portugal'),
(175, 'Puerto Rico'),
(176, 'Qatar'),
(177, 'Runion'),
(178, 'Romania'),
(179, 'Russian Federation'),
(180, 'Rwanda'),
(181, 'Saint Helena'),
(182, 'Saint Kitts and Nevis'),
(183, 'Saint Lucia'),
(184, 'Saint Pierre and Miquelon'),
(185, 'Saint Vincent and the Grenadines'),
(186, 'Samoa'),
(187, 'San Marino'),
(188, 'Sao Tome and Principe'),
(189, 'Saudi Arabia'),
(190, 'Senegal'),
(191, 'Serbia and Montenegro'),
(192, 'Seychelles'),
(193, 'Sierra Leone'),
(194, 'Singapore'),
(195, 'Slovakia'),
(196, 'Slovenia'),
(197, 'Solomon Islands'),
(198, 'Somalia'),
(199, 'South Africa'),
(200, 'South Georgia and the South Sandwich Islands'),
(201, 'Spain'),
(202, 'Sri Lanka'),
(203, 'Sudan'),
(204, 'Suriname'),
(205, 'Svalbard and Jan Mayen Islands'),
(206, 'Swaziland'),
(207, 'Sweden'),
(208, 'Switzerland'),
(209, 'Syria'),
(210, 'Taiwan'),
(211, 'Tajikistan'),
(212, 'Tanzania'),
(213, 'Thailand'),
(214, 'Togo'),
(215, 'Tokelau'),
(216, 'Tonga'),
(217, 'Trinidad and Tobago'),
(218, 'Tunisia'),
(219, 'Turkey'),
(220, 'Turkmenistan'),
(221, 'Turks and Caicos Islands'),
(222, 'Tuvalu'),
(223, 'Uganda'),
(224, 'Ukraine'),
(225, 'United Arab Emirates'),
(226, 'United Kingdom'),
(227, 'United States of America'),
(228, 'Uruguay'),
(229, 'Uzbekistan'),
(230, 'Vanuatu'),
(231, 'Vatican City'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Virgin Islands (British)'),
(235, 'Virgin Islands (US)'),
(236, 'Wallis and Futuna Islands'),
(237, 'Western Sahara'),
(238, 'Yemen'),
(239, 'Zaire'),
(240, 'Zambia'),
(241, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currencies`
--

CREATE TABLE `tbl_currencies` (
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `symbol` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xrate` decimal(12,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_currencies`
--

INSERT INTO `tbl_currencies` (`code`, `name`, `symbol`, `xrate`) VALUES
('AUD', 'Australian Dollar', '$', NULL),
('BAN', 'Bangladesh', 'BDT', NULL),
('BRL', 'Brazilian Real', 'R$', NULL),
('CAD', 'Canadian Dollar', '$', NULL),
('CHF', 'Swiss Franc', 'Fr', NULL),
('CLP', 'Chilean Peso', '$', NULL),
('CNY', 'Chinese Yuan', 'Â¥', NULL),
('CZK', 'Czech Koruna', 'KÄ', NULL),
('DKK', 'Danish Krone', 'kr', NULL),
('EUR', 'Euro', 'â‚¬', NULL),
('GBP', 'British Pound', 'Â£', NULL),
('HKD', 'Hong Kong Dollar', '$', NULL),
('HUF', 'Hungarian Forint', 'Ft', NULL),
('IDR', 'Indonesian Rupiah', 'Rp', NULL),
('ILS', 'Israeli New Shekel', 'â‚ª', NULL),
('INR', 'Indian Rupee', 'à¤°', NULL),
('JPY', 'Japanese Yen', 'Â¥', NULL),
('KRW', 'Korean Won', 'â‚©', NULL),
('MXN', 'Mexican Peso', '$', NULL),
('MYR', 'Malaysian Ringgit', 'RM', NULL),
('NOK', 'Norwegian Krone', 'kr', NULL),
('NZD', 'New Zealand Dollar', '$', NULL),
('PHP', 'Philippine Peso', 'â‚±', NULL),
('PKR', 'Pakistan Rupee', 'PKR', NULL),
('PLN', 'Polish Zloty', 'zl', NULL),
('RUB', 'Russian Ruble', ' RUB', NULL),
('SEK', 'Swedish Krona', 'kr', NULL),
('SGD', 'Singapore Dollar', 'S$', NULL),
('THB', 'Thai Baht', 'à¸¿', NULL),
('TRY', 'Turkish Lira', ' TRY', NULL),
('TWD', 'Taiwan Dollar', 'NT$', NULL),
('USD', 'US Dollar', '$', '1.00000'),
('VEF', 'Bol?var Fuerte', 'Bs.', NULL),
('ZAR', 'South African Rand', 'R', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_group`
--

CREATE TABLE `tbl_customer_group` (
  `customer_group_id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL COMMENT 'customer group,item group',
  `customer_group` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer_group`
--

INSERT INTO `tbl_customer_group` (`customer_group_id`, `type`, `customer_group`, `description`) VALUES
(1, 'client', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custom_field`
--

CREATE TABLE `tbl_custom_field` (
  `custom_field_id` int(11) NOT NULL,
  `form_id` int(11) DEFAULT NULL,
  `field_label` varchar(100) NOT NULL,
  `default_value` text DEFAULT NULL,
  `help_text` varchar(200) NOT NULL,
  `field_type` enum('text','textarea','dropdown','date','checkbox','numeric','url','email') NOT NULL,
  `required` varchar(5) NOT NULL DEFAULT 'false',
  `status` enum('active','deactive') NOT NULL DEFAULT 'deactive',
  `show_on_table` varchar(5) DEFAULT NULL,
  `visible_for_admin` varchar(5) DEFAULT NULL,
  `show_on_details` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dashboard`
--

CREATE TABLE `tbl_dashboard` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `col` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `order_no` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `report` tinyint(1) NOT NULL DEFAULT 0,
  `for_staff` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dashboard`
--

INSERT INTO `tbl_dashboard` (`id`, `name`, `col`, `order_no`, `status`, `report`, `for_staff`) VALUES
(1, 'income_expenses_report', 'col-sm-8', 1, 2, 1, 1),
(2, 'invoice_payment_report', 'col-sm-4', 3, 2, 1, 1),
(3, 'ticket_tasks_report', 'col-sm-12', 1, 1, 1, 1),
(5, 'goal_report', 'col-md-6 ', 9, 0, 0, 1),
(6, 'overdue_report', 'col-md-12', 1, 1, 0, 1),
(11, 'my_project', 'col-md-6', 15, 0, 0, 1),
(12, 'my_tasks', 'col-md-6', 9, 0, 0, 1),
(14, 'announcements', 'col-md-6', 9, 1, 0, 1),
(15, 'payments_report', 'col-md-6', 47, 2, 0, 1),
(16, 'income_expense', 'col-md-6', 23, 2, 0, 1),
(17, 'income_report', 'col-md-6', 50, 2, 0, 1),
(18, 'expense_report', 'col-md-6', 17, 1, 0, 1),
(19, 'recently_paid_invoices', 'col-md-6', 29, 2, 0, 1),
(20, 'recent_activities', 'col-md-6', 15, 1, 0, 1),
(21, 'finance_overview', 'col-md-6', 17, 2, 0, 1),
(22, 'todo_list', 'col-md-6', 11, 1, 0, 1),
(23, 'paid_amount', 'col-md-3', 2, 1, 2, 1),
(24, 'due_amount', 'col-md-3', 4, 1, 2, 1),
(25, 'invoice_amount', 'col-md-3', 1, 2, 2, 1),
(26, 'paid_percentage', 'col-md-3', 3, 1, 2, 1),
(27, 'recently_paid_invoices', 'col-sm-6', 2, 1, 3, 1),
(28, 'payments', 'col-sm-6', 1, 1, 3, 1),
(29, 'recent_invoice', 'col-sm-6', 3, 1, 3, 1),
(30, 'recent_projects', 'col-sm-6', 4, 1, 3, 1),
(31, 'recent_emails', 'col-sm-4', 5, 1, 3, 1),
(32, 'recent_activities', 'col-sm-4', 6, 1, 3, 1),
(33, 'announcements', 'col-sm-4', 7, 1, 3, 1),
(34, 'my_calendar', 'col-md-6', 22, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

CREATE TABLE `tbl_days` (
  `day_id` int(5) NOT NULL,
  `day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_days`
--

INSERT INTO `tbl_days` (`day_id`, `day`) VALUES
(1, 'Saturday'),
(2, 'Sunday'),
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `departments_id` int(10) NOT NULL,
  `deptname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_head_id` int(11) DEFAULT NULL COMMENT 'department_head_id == user_id',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `encryption` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `host` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `mailbox` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `unread_email` tinyint(1) NOT NULL DEFAULT 0,
  `delete_mail_after_import` tinyint(1) NOT NULL DEFAULT 0,
  `last_postmaster_run` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`departments_id`, `deptname`, `department_head_id`, `email`, `encryption`, `host`, `username`, `password`, `mailbox`, `unread_email`, `delete_mail_after_import`, `last_postmaster_run`) VALUES
(1, 'IT / Collaborative', 3, NULL, '', '', '', '', '', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE `tbl_designations` (
  `designations_id` int(5) NOT NULL,
  `departments_id` int(11) NOT NULL,
  `designations` varchar(100) NOT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_designations`
--

INSERT INTO `tbl_designations` (`designations_id`, `departments_id`, `designations`, `permission`) VALUES
(1, 1, 'Head Of Collaborative', NULL),
(2, 1, 'Administrator', NULL),
(3, 1, 'VIE', NULL),
(7, 1, 'Coordinator', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discipline`
--

CREATE TABLE `tbl_discipline` (
  `discipline_id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `offence_id` int(5) NOT NULL,
  `penalty_id` int(5) NOT NULL,
  `discipline_break_date` varchar(100) NOT NULL,
  `discipline_action_date` varchar(100) NOT NULL,
  `discipline_remarks` varchar(200) NOT NULL,
  `discipline_comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_draft`
--

CREATE TABLE `tbl_draft` (
  `draft_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to` text NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` text DEFAULT NULL,
  `attach_file_path` text DEFAULT NULL,
  `attach_filename` text DEFAULT NULL,
  `message_time` datetime NOT NULL,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_templates`
--

CREATE TABLE `tbl_email_templates` (
  `email_templates_id` int(11) NOT NULL,
  `email_group` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template_body` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_email_templates`
--

INSERT INTO `tbl_email_templates` (`email_templates_id`, `email_group`, `subject`, `template_body`) VALUES
(1, 'registration', 'Registration successful', '<div style=\"height: 7px; background-color: #535353;\"></div><div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Welcome to {SITE_NAME}</div><div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\">Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.<br>To open your {SITE_NAME} homepage, please follow this link:<br><big><b><a href=\"{SITE_URL}\">{SITE_NAME} Account!</a></b></big><br>Link doesn\'t work? Copy the following link to your browser address bar:<br><a href=\"{SITE_URL}\">{SITE_URL}</a><br>Your username: {USERNAME}<br>Your email address: {EMAIL}<br>Your password: {PASSWORD}<br>Have fun!<br>The {SITE_NAME} Team.<br><br></div></div>'),
(2, 'forgot_password', 'Forgot Password', '        <div style=\"height: 7px; background-color: #535353;\"></div><div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">New Password</div><div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\">Forgot your password, huh? No big deal.<br>To create a new password, just follow this link:<br><br><big><b><a href=\"{PASS_KEY_URL}\">Create a new password</a></b></big><br>Link doesn\'t work? Copy the following link to your browser address bar:<br><a href=\"{PASS_KEY_URL}\">{PASS_KEY_URL}</a><br><br><br>You received this email, because it was requested by a <a href=\"{SITE_URL}\">{SITE_NAME}</a> user. <p></p><p>This is part of the procedure to create a new password on the system. If you DID NOT request a new password then please ignore this email and your password will remain the same.</p><br>Thank you,<br>The {SITE_NAME} Team</div></div>'),
(3, 'change_email', 'Change Email', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">New email address on {SITE_NAME}</div>\r\n\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\">You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br><big><b><a href=\"{NEW_EMAIL_KEY_URL}\">Confirm your new email</a></b></big><br>Link doesn\'t work? Copy the following link to your browser address bar:<br><a href=\"{NEW_EMAIL_KEY_URL}\">{NEW_EMAIL_KEY_URL}</a><br><br>Your email address: {NEW_EMAIL}<br><br>You received this email, because it was requested by a <a href=\"{SITE_URL}\">{SITE_NAME}</a> user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br>Thank you,<br>The {SITE_NAME} Team</div>\r\n\r\n</div>'),
(4, 'activate_account', 'Activate Account', '<p>Welcome to {SITE_NAME}!</p>\r\n\r\n<p>Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.</p>\r\n\r\n<p>To verify your email address, please follow this link:<br />\r\n<big><strong><a href=\"{ACTIVATE_URL}\">Finish your registration...</a></strong></big><br />\r\nLink doesn&#39;t work? Copy the following link to your browser address bar:<br />\r\n<a href=\"{ACTIVATE_URL}\">{ACTIVATE_URL}</a></p>\r\n\r\n<p><br />\r\n<br />\r\nPlease verify your email within {ACTIVATION_PERIOD} hours, otherwise your registration will become invalid and you will have to register again.<br />\r\n<br />\r\n<br />\r\nYour username: {USERNAME}<br />\r\nYour email address: {EMAIL}<br />\r\nYour password: {PASSWORD}<br />\r\n<br />\r\nHave fun!<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(5, 'reset_password', 'Reset Password', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">New password on {SITE_NAME}</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>You have changed your password.<br>Please, keep it in your records so you don\'t forget it.<br></p>\r\nYour username: {USERNAME}<br>Your email address: {EMAIL}<br>Your new password: {NEW_PASSWORD}<br><br>Thank you,<br>The {SITE_NAME} Team</div>\r\n</div>'),
(6, 'bug_assigned', 'New Bug Assigned', '<p>Hi there,</p>\r\n\r\n<p>A new bug &nbsp;{BUG_TITLE} &nbsp;has been assigned to you by {ASSIGNED_BY}.</p>\r\n\r\n<p>You can view this bug by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{BUG_URL}\">View Bug</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(7, 'bug_updated', 'Bug status changed', '<p>Hi there,</p>\r\n\r\n<p>Bug {BUG_TITLE} has been marked as {STATUS} by {MARKED_BY}.</p>\r\n\r\n<p>You can view this bug by logging in to the portal using the link below.</p>\r\n\r\n<p><big><strong><a href=\"{BUG_URL}\">View Bug</a></strong></big><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(8, 'bug_comments', 'New Bug Comment Received', '<p>Hi there,</p>\r\n\r\n<p>A new comment has been posted by {POSTED_BY} to bug {BUG_TITLE}.</p>\r\n\r\n<p>You can view the comment using the link below.</p>\r\n\r\n<p><em>{COMMENT_MESSAGE}</em></p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{COMMENT_URL}\">View Comment</a></strong></big><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(9, 'bug_attachment', 'New bug attachment', '<p>Hi there,</p>\r\n\r\n<p>A new attachment&nbsp;has been uploaded by {UPLOADED_BY} to issue {BUG_TITLE}.</p>\r\n\r\n<p>You can view the bug using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{BUG_URL}\">View Bug</a></strong></big></p>\r\n\r\n<p><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(10, 'bug_reported', 'New bug Reported', '<p>Hi there,</p>\r\n\r\n<p>A new bug ({BUG_TITLE}) has been reported by {ADDED_BY}.</p>\r\n\r\n<p>You can view the Bug using the Dashboard Page.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{BUG_URL}\">View Bug</a></strong></big></p>\r\n\r\n<p><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(13, 'refund_confirmation', 'Refund Confirmation', '<p>Refund Confirmation</p>\r\n\r\n<p>Hello {CLIENT}</p>\r\n\r\n<p>This is confirmation that a refund has been processed for Invoice&nbsp; of {CURRENCY} {AMOUNT}&nbsp;sent on {INVOICE_DATE}.<br />\r\nYou can view the invoice online at:<br />\r\n<big><strong><a href=\"{INVOICE_LINK}\">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(14, 'payment_confirmation', 'Payment Confirmation', '<p>Payment Confirmation</p>\r\n\r\n<p>Hello {CLIENT}</p>\r\n\r\n<p>This is a payment receipt for your invoice of {CURRENCY} {AMOUNT}&nbsp;sent on {INVOICE_DATE}.<br />\r\nYou can view the invoice online at:<br />\r\n<big><strong><a href=\"{INVOICE_LINK}\">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(15, 'payment_email', 'Payment Received', '<div style=\"height: 7px; background-color: #535353;\"></div>\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Payment Received</div>\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Dear Customer</p>\n<p>We have received your payment of {INVOICE_CURRENCY} {PAID_AMOUNT}. </p>\n<p>Thank you for your Payment and business. We look forward to working with you again.</p>\n--------------------------<br>Regards<br>The {SITE_NAME} Team</div>\n</div>'),
(16, 'invoice_overdue_email', 'Invoice Overdue Notice', '<p>Invoice Overdue</p>\r\n\r\n<p>INVOICE {REF}</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your invoice overdue.&nbsp;The invoice {CURRENCY} {AMOUNT}. and Due Date: {DUE_DATE}</p>\r\n\r\n<p>You can view the invoice online at:<br />\r\n<big><strong><a href=\"{INVOICE_LINK}\">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(17, 'invoice_message', 'New Invoice', '<div style=\"height: 7px; background-color: #535353;\"></div><div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">INVOICE {REF}</div><div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><span class=\"style1\"><span style=\"font-weight:bold;\">Hello {CLIENT}</span></span><br><br>Here is the invoice of {CURRENCY} {AMOUNT}.<br><br>You can view the invoice online at:<br><big><b><a href=\"{INVOICE_LINK}\">View Invoice</a></b></big><br><br>Best Regards<br><br>The {SITE_NAME} Team</div></div>'),
(18, 'invoice_reminder', 'Invoice Reminder', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Invoice Reminder</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Hello {CLIENT}</p>\r\n<br><p>This is a friendly reminder to pay your invoice of {CURRENCY} {AMOUNT}<br>You can view the invoice online at:<br><big><b><a href=\"{INVOICE_LINK}\">View Invoice</a></b></big><br><br>Best Regards,<br>The {SITE_NAME} Team</p>\r\n</div>\r\n</div>'),
(19, 'message_received', 'Message Received', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Message Received</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Hi {RECIPIENT},</p>\r\n<p>You have received a message from {SENDER}. </p>\r\n------------------------------------------------------------------<br><blockquote>\r\n{MESSAGE}</blockquote>\r\n<big><b><a href=\"{SITE_URL}\">Go to Account</a></b></big><br><br>Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(20, 'estimate_email', 'New Estimate', '<p>Estimate {ESTIMATE_REF}</p>\r\n\r\n<p>Hi {CLIENT}</p>\r\n\r\n<p>Thanks for your business inquiry.</p>\r\n\r\n<p>The estimate {ESTIMATE_REF} is attached with this email.<br />\r\nEstimate Overview:<br />\r\nEstimate # : {ESTIMATE_REF}<br />\r\nAmount: {CURRENCY} {AMOUNT}<br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href=\"{ESTIMATE_LINK}\">View Estimate</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(21, 'ticket_staff_email', 'New Ticket [TICKET_CODE]', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">New Ticket</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Ticket #{TICKET_CODE} has been created by the client.</p>\r\n<p>You may view the ticket by clicking on the following link <br><br>  Client Email : {REPORTER_EMAIL}<br><br> <big><b><a href=\"{TICKET_LINK}\">View Ticket</a></b></big> <br><br>Regards<br><br>{SITE_NAME}</p>\r\n</div>\r\n</div>'),
(22, 'ticket_client_email', 'Ticket [TICKET_CODE] Opened', '<p>Ticket Opened</p>\r\n\r\n<p>Hello {CLIENT_EMAIL},</p>\r\n\r\n<p>Your ticket has been opened with us.<br />\r\n<br />\r\nTicket # {TICKET_CODE}<br />\r\nStatus : Open<br />\r\n<br />\r\nClick on the below link to see the ticket details and post additional comments.<br />\r\n<br />\r\n<big><strong><a href=\"{TICKET_LINK}\">View Ticket</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(23, 'ticket_reply_email', 'Ticket [TICKET_CODE] Response', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Ticket Response</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>A new response has been added to Ticket #{TICKET_CODE}<br><br> Ticket : #{TICKET_CODE} <br>Status : {TICKET_STATUS} <br><br></p>\r\nTo see the response and post additional comments, click on the link below.<br><br>         <big><b><a href=\"{TICKET_LINK}\">View Reply</a> </b></big><br><br>          Note: Do not reply to this email as this email is not monitored.<br><br>     Regards<br>The {SITE_NAME} Team<br></div>\r\n</div>'),
(24, 'ticket_closed_email', 'Ticket [TICKET_CODE] Closed', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Ticket Closed</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\">Hi {REPORTER_EMAIL}<br><br>Ticket #{TICKET_CODE} has been closed by {STAFF_USERNAME} <br><br>          Ticket : #{TICKET_CODE} <br>     Status : {TICKET_STATUS}<br><br>Replies : {NO_OF_REPLIES}<br><br>          To see the responses or open the ticket, click on the link below.<br><br>          <big><b><a href=\"{TICKET_LINK}\">View Ticket</a></b></big> <br><br>          Note: Do not reply to this email as this email is not monitored.<br><br>    Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(26, 'task_updated', 'Task updated', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Task updated</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Hi there,</p>\r\n<p>{TASK_NAME} in {PROJECT_TITLE} has been updated by {ASSIGNED_BY}.</p>\r\n<p>You can view this project by logging in to the portal using the link below.</p>\r\n-----------------------------------<br><big><b><a href=\"{PROJECT_URL}\">View Project</a></b></big><br><br>Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(27, 'quotations_form', 'Your Quotation Request', '<p>QUOTATION</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>Thank you for you for filling in our Quotation Request Form.<br />\r\n<br />\r\nPlease find below are our quotation:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellpadding=\"8\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Quotation Date</td>\r\n			<td><strong>{DATE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Our Quotation</td>\r\n			<td><strong>{CURRENCY} {AMOUNT}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Addtitional Comments</td>\r\n			<td><strong>{NOTES}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href=\"{QUOTATION LINK}\">View Quotation</a></strong></big></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nThank you and we look forward to working with you.<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(28, 'client_notification', 'New project created', '<p>Hello, <strong>{CLIENT_NAME}</strong>,<br />\r\nwe have created a new project with your account.<br />\r\n<br />\r\nProject name : <strong>{PROJECT_NAME}</strong><br />\r\nYou can login to see the status of your project by using this link:<br />\r\n<big><a href=\"{PROJECT_LINK}\"><strong>View Project</strong></a></big></p>\r\n\r\n<p><br />\r\nBest Regards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(29, 'assigned_project', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> {PROJECT_NAME}</strong> has been assigned by <strong>{ASSIGNED_BY} </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"{PROJECT_URL}\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(30, 'complete_projects', 'Project Completed', '<p>Hi <strong>{CLIENT_NAME}</strong>,</p>\r\n\r\n<p>Project : <strong>{PROJECT_NAME}</strong> &nbsp;has been completed.<br />\r\nYou can view the project by logging into your portal Account:<br />\r\n<big><a href=\"{PROJECT_LINK}\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(31, 'project_comments', 'New Project Comment Received', '<p>Hi There,</p>\r\n\r\n<p>A new comment has been posted by <strong>{POSTED_BY}</strong> to project <strong>{PROJECT_NAME}</strong>.</p>\r\n\r\n<p>You can view the comment using the link below:<br />\r\n<big><a href=\"{COMMENT_URL}\"><strong>View Project</strong></a></big><br />\r\n<br />\r\n<em>{COMMENT_MESSAGE}</em><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(32, 'project_attachment', 'New Project  Attachment', '<p>Hi There,</p>\r\n\r\n<p>A new file has been uploaded by <strong>{UPLOADED_BY}</strong> to project <strong>{PROJECT_NAME}</strong>.<br />\r\nYou can view the Project using the link below:<br />\r\n<big><a href=\"{PROJECT_URL}\"><strong>View Project</strong></a></big><br />\r\n<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(33, 'responsible_milestone', 'Responsible for a Milestone', '<p>Hi There,</p>\r\n\r\n<p>You are a responsible&nbsp;for a project milestone&nbsp;<strong>{MILESTONE_NAME}</strong>&nbsp; assigned to you by <strong>{ASSIGNED_BY}</strong> in project <strong>{PROJECT_NAME}</strong>.</p>\r\n\r\n<p>You can view this Milestone&nbsp;by logging in to the portal using the link below:<br />\r\n<big><strong><a href=\"{PROJECT_URL}\">View Project</a></strong></big><br />\r\n<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(34, 'task_assigned', 'Task assigned', '<p>Hi there,</p>\r\n\r\n<p>A new task <strong>{TASK_NAME}</strong> &nbsp;has been assigned to you by <strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this task by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{TASK_URL}\">View Task</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(35, 'tasks_comments', 'New Task Comment Received', '<p>Hi There,</p>\r\n\r\n<p>A new comment has been posted by <strong>{POSTED_BY}</strong> to <strong>{TASK_NAME}</strong>.</p>\r\n\r\n<p>You can view the comment using the link below:<br />\r\n<big><strong><a href=\"{COMMENT_URL}\">View Comment</a></strong></big><br />\r\n<br />\r\n<em>{COMMENT_MESSAGE}</em><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(36, 'tasks_attachment', 'New Tasks Attachment', '<p>Hi There,</p>\r\n\r\n<p>A new file has been uploaded by <strong>{UPLOADED_BY} </strong>to Task <strong>{TASK_NAME}</strong>.<br />\r\nYou can view the Task&nbsp;using the link below:</p>\r\n\r\n<p><br />\r\n<big><a href=\"{TASK_URL}\"><strong>View Task</strong></a></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(37, 'tasks_updated', 'Task updated', '<p>Hi there,</p>\r\n\r\n<p><strong>{TASK_NAME}</strong> has been updated by <strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this Task by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{TASK_URL}\">View Task</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(38, 'goal_not_achieve', 'Not Achieve Goal', '<p><strong>Unfortunately!</strong> We failed to achieve goal!</p>\r\n\r\n<p><strong>Here is a Goal Details</strong></p>\r\n\r\n<p>Goal Type :&nbsp;<strong>{Goal_Type}</strong><br />\r\nTarget Achievement:&nbsp;<strong>{achievement}</strong><br />\r\nTotal Achievement:&nbsp;<strong>{total_achievement}</strong><br />\r\nStart Date:&nbsp;<strong>{start_date}</strong><br />\r\nEnd Date:&nbsp;<strong>{End_date}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(39, 'goal_achieve', 'Achieve Goal', '<p><strong>Congratulation!</strong> We achieved new goal.</p>\r\n\r\n<p><strong>Here is a Goal Details</strong></p>\r\n\r\n<p>Goal Type :<strong>{Goal_Type}</strong><br />\r\nTarget Achievement:<strong>{achievement}</strong><br />\r\nTotal Achievement:<strong>{total_achievement}</strong><br />\r\nStart Date:<strong>{start_date}</strong><br />\r\nEnd Date:<strong>{End_date}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(40, 'leave_request_email', 'A Leave Request from you', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong> &nbsp;Want to leave from you.</p>\r\n\r\n<p>You can view this leave request by logging in to the portal using the link below<br />\r\n<big><strong><a href=\"{APPLICATION_LINK}\">View Application</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(41, 'leave_approve_email', 'Your leave request has been approved', '<h1>Your leave request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong> Your leave request from <strong>{START_DATE}</strong> to <strong>{END_DATE}</strong> has been approved by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(42, 'leave_reject_email', 'Your leave request has been Rejected', '<h1>Your leave request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately !</strong>&nbsp;Your leave request from&nbsp;<strong>{START_DATE}</strong>&nbsp;to&nbsp;<strong>{END_DATE}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(43, 'overtime_request_email', 'Overtime Request', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong>&nbsp;&nbsp;to do an overtime.<br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(44, 'overtime_approved_email', 'Your overtime request has been approved', '<h1>Your leave request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your overtime&nbsp;request at&nbsp;<strong>{DATE}</strong>&nbsp;and&nbsp;<strong>{HOUR}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(45, 'overtime_reject_email', 'Your Overtime request has been Rejected', '<h1>Your leave request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately&nbsp;!</strong>&nbsp;Your overtime&nbsp;request at&nbsp;<strong>{DATE}</strong>&nbsp;and&nbsp;<strong>{HOUR}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(46, 'wellcome_email', 'Welcome Email ', '<p>Hello <strong>{NAME}</strong>,</p>\r\n\r\n<p>Welcome to <strong>{COMPANY_NAME}</strong> .Thanks for joining <strong>{COMPANY_NAME}</strong>.</p>\r\n\r\n<p>We just wanted to say welcome.</p>\r\n\r\n<p>Please contact us if you need any help.</p>\r\n\r\n<p>Click here to view your profile: <strong>{COMPANY_URL}</strong></p>\r\n\r\n<p><br />\r\nHave fun!<br />\r\nThe <strong>{COMPANY_NAME}</strong> Team.</p>\r\n'),
(47, 'payslip_generated_email', 'Payslip generated', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>Your payslip generated for the month <strong>{MONTH_YEAR} .</strong></p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(48, 'advance_salary_email', 'Advance Salary Reqeust', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong>&nbsp;&nbsp;Want to Advance Salary from you.</p>\r\n\r\n<p>You can view this Advance Salary by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href=\"{LINK}\">View Advance Salary</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(49, 'advance_salary_approve_email', 'Your advance salary request has been approved', '<h1>Your advance salary request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your advance salary&nbsp;requested &nbsp;<strong>{AMOUNT}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>This advance amount will deduct the next <strong>{DEDUCT_MOTNH}</strong> .</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(50, 'advance_salary_reject_email', 'Your advance salary request has been Rejected', '<h1>Your advance salary request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately !</strong>&nbsp;Your advance salary requested&nbsp;<strong>{AMOUNT}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(51, 'award_email', 'Award Received', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>You have been&nbsp;awarded <strong>{AWARD_NAME} </strong>for this<strong> {MONTH} .</strong></p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(52, 'new_job_application_email', 'New job application submitted', '<p>Hi there,</p>\r\n\r\n<p>&nbsp;<strong>{NAME}&nbsp;</strong>has submitted the job application</p>\r\n\r\n<p>Please find below are job application Details:</p>\r\n\r\n<table cellpadding=\"8\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Job Title</td>\r\n			<td><strong>{JOB_TITLE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Email</td>\r\n			<td><strong>{EMAIL}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mobile</td>\r\n			<td><strong>{MOBILE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cover Latter</td>\r\n			<td><strong>{COVER_LETTER}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nYou can view the Job Application online at:<br />\r\n<br />\r\n<big><strong><a href=\"{LINK}\">View Job Application</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(53, 'new_notice_published', 'New Notice published', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>New Notice Published&nbsp;<strong>{TITLE}</strong></p>\r\n\r\n<p><br />\r\nYou can view the Notice online at:<br />\r\n<br />\r\n<big><strong><a href=\"{LINK}\">View Notice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(54, 'new_training_email', 'Training  Assigned ', '<p>Hi there,</p>\r\n\r\n<p>A new Training  &nbsp;<strong>{TRAINING_NAME}</strong>&nbsp;&nbsp;has been assigned to you by&nbsp;<strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this Training  by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{LINK}\">View Training</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(55, 'performance_appraisal_email', 'New Performance Appraisal', ''),
(56, 'expense_request_email', 'A New Expense Request have been Recieved', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong> &nbsp;Create a New Expense The Amount is <strong>{AMOUNT}</strong></p>\r\n\r\n<p>You can view this expense by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href=\"{URL}\">View Expense</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards,<br />\r\n<br />\r\nThe <strong>{SITE_NAME}</strong> Team</p>\r\n'),
(57, 'expense_approved_email', 'Expense Approved', '<p>Dear&nbsp;<strong>{NAME} ,</strong></p>\r\n\r\n<h1>Your Expense request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your Expense request from&nbsp;<strong>{AMOUNT}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>Please Contact&nbsp;with our Accountant for collect the amount.</p>\r\n\r\n<p><br />\r\nRegards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(58, 'expense_paid_email', 'Expense have been Paid', '<p>Hi there,</p>\r\n\r\n<p>The&nbsp;<strong>{NAME}</strong>&nbsp;expense&nbsp;<strong>{AMOUNT}&nbsp;</strong>has been paid by <strong>{PAID_BY}.</strong></p>\r\n\r\n<p>You can view this expense by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href=\"{URL}\">View Expense</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards,<br />\r\n<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(59, 'auto_close_ticket', 'Ticket Auto Closed', '<p>Ticket Closed</p>\r\n\r\n<p>Hello <strong>{REPORTER_EMAIL}</strong>,</p>\r\n\r\n<p>Ticket&nbsp;<strong>{SUBJECT}</strong>&nbsp;has been auto closed due to inactivity.&nbsp;<br />\r\n<br />\r\nTicket # <strong>{TICKET_CODE}</strong><br />\r\nStatus : &nbsp;<strong>{TICKET_STATUS}</strong><br />\r\n<br />\r\nTo see the responses or open the ticket, click on the link below:ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬ÃƒÂ¢Ã¢â‚¬Å¾Ã‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã‚Â¦ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¹<br />\r\n<br />\r\n<big><strong><a href=\"{TICKET_LINK}\">View Ticket</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe <strong>{SITE_NAME}</strong> Team</p>\r\n'),
(60, 'proposal_email', 'New Proposal', '<p>Proposal <strong>{PROPOSAL_REF}</strong></p> <p>Hi <strong>{CLIENT}</strong></p> <p>Thanks for your business inquiry.</p> <p>The Proposal <strong>{PROPOSAL_REF} </strong>is attached with this email.<br /> Proposal&nbsp;Overview:<br /> Proposal&nbsp;# :<strong> {PROPOSAL_REF}</strong><br /> Amount: <strong>{CURRENCY} {AMOUNT}</strong><br /> <br /> You can view the estimate online at:<br /> <big><strong><a href=\"{PROPOSAL_LINK}\">View Proposal</a></strong></big><br /> <br /> Best Regards,<br /> The <strong>{SITE_NAME}</strong> Team</p> '),
(61, 'project_overdue_email', 'Project Overdue Notice', '<p>Project Overdue</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your project overdue.&nbsp;<br />\r\n<br />\r\nProject name : <strong>{PROJECT_NAME}</strong><br />\r\nDue date : <strong>{DUE_DATE}</strong><br />\r\nYou can login to see the status of your project by using this link:<br />\r\n<big><a href=\"{PROJECT_LINK}\"><strong>View Project</strong></a></big></p>\r\n\r\n<p><br />\r\nBest Regards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(62, 'estimate_overdue_email', 'Estimate Overdue Notice', '<p>Estimate {ESTIMATE_REF}</p>\r\n\r\n<p>Hi {CLIENT}</p>\r\n\r\n<p>This is the notice that your Estimate&nbsp;overdue.&nbsp;ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Â¹<br />\r\n<br />\r\nEstimate Overview:<br />\r\nEstimate # : {ESTIMATE_REF}<br />\r\nAmount: {DUE_DATE}<br />\r\nAmount: {CURRENCY} {AMOUNT}<br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href=\"{ESTIMATE_LINK}\">View Estimate</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(63, 'proposal_overdue_email', 'New Estimate', '<p>Proposal&nbsp;<strong>{PROPOSAL_REF}</strong></p>\r\n\r\n<p>Hi&nbsp;<strong>{CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your Proposal&nbsp;overdue.&nbsp;<br />\r\n<br />\r\nProposal&nbsp;Overview:<br />\r\nProposal&nbsp;# :<strong>&nbsp;{PROPOSAL_REF}</strong><br />\r\nDue Date: <strong>{DUE_DATE}</strong>ÃƒÂ¢Ã¢â€šÂ¬Ã¢â‚¬Â¹<br />\r\nAmount:&nbsp;<strong>{CURRENCY} {AMOUNT}</strong><br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href=\"{PROPOSAL_LINK}\">View Proposal</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(64, 'call_for_interview', 'You have an interview offer!!!', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>You have an interview offer for you.please see the details.&nbsp;<br />\r\n<br />\r\n<strong>Job Summary</strong>:<br />\r\nJob Title # :<strong>&nbsp;{JOB_TITLE}</strong><br />\r\nDesignation # :<strong>&nbsp;{DESIGNATION}</strong><br />\r\nInterview Date: <strong>{DATE}</strong></p>\r\n\r\n<p><strong>Postal Address</strong><br />\r\nPO Box 16122 Collins Street West<br />\r\nVictoria 8007 Australia<br />\r\n121 King Street, Melbourne<br />\r\nVictoria 3000 Australia &ndash;&nbsp;<a href=\"https://www.google.com.au/maps/place/Envato/@-37.8173306,144.9534631,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad65d4c2b349649:0xb6899234e561db11\" target=\"_blank\">Map</a></p>\r\n\r\n<p><br />\r\nYou can view the circular details online at:<br />\r\n<big><strong><a href=\"{LINK}\">View Job Circular</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(65, 'ticket_reopened_email', 'Ticket [SUBJECT] reopened', '<p>Ticket re-opened</p>\r\n\r\n<p>Hi {RECIPIENT},</p>\r\n\r\n<p>Ticket&nbsp;<strong>{SUBJECT}</strong>&nbsp;was re-opened by&nbsp;<strong>{USER}</strong>.<br />\r\nStatus :&nbsp;Open<br />\r\nClick on the below link to see the ticket details and post replies:&nbsp;<br />\r\n<a href=\"{TICKET_LINK}\"><strong>View Ticket</strong></a><br />\r\n<br />\r\n<br />\r\nBest Regards,<br />\r\n{SITE_NAME}</p>\r\n'),
(66, 'deposit_email', 'A deposit have been Received', '<p>Hi there,</p> <p>The&nbsp;<strong>{NAME}</strong>&nbsp;of deposit&nbsp;<strong>{AMOUNT}&nbsp;</strong>has been Deposit into <strong>{ACCOUNT}</strong> the new balance is <strong>{BALANCE}</strong></p> <p>You can view this deposit by logging in to the portal using the link below.<br /> <br /> <big><strong><a href=\"{URL}\">View Deposit</a></strong></big><br /> <br /> <br /> Regards,<br /> <br /> The&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>'),
(67, 'clock_in_email', 'The {NAME} Just clock in', '<p>Hi there,</p>\r\n\r\n<p>TheÂ <strong>{NAME}</strong> justÂ Clock In by using The IP. The IP is:Â <strong>{IP}</strong> and the time is: Â <strong>{TIME}</strong><strong> </strong></p>\r\n\r\n<p>You can view this attendance by logging in to the portal using the link below.<br>\r\n<br>\r\n<big><strong><a href=\"{URL}\">View Details</a></strong></big><br>\r\n<br>\r\n<br>\r\nRegards,<br>\r\n<br>\r\nTheÂ <strong>{SITE_NAME}</strong>Â Team</p>\r\n'),
(68, 'trying_clock_email', 'The {NAME} Trying to clock', '<p>Hi there,</p>\r\n\r\n<p>TheÂ <strong>{NAME} </strong> Trying to clockÂ in by Unknown IP.The IP is: <strong>{IP}</strong> and the time is: <strong>{TIME}</strong></p>\r\n\r\n<p>You can view this IP by logging in to the portal using the link below.<br>\r\n<br>\r\n<big><strong><a href=\"{URL}\">View Details</a></strong></big><br>\r\n<br>\r\n<br>\r\nRegards,<br>\r\n<br>\r\nTheÂ <strong>{SITE_NAME}</strong>Â Team</p>\r\n'),
(69, 'clock_out_email', 'The {NAME} Just clock Out', '<p>Hi there,</p>\r\n\r\n<p>TheÂ <strong>{NAME}</strong>Â justÂ Clock Out by using The IP. The IP is:Â <strong>{IP}</strong>Â and the time is: Â <strong>{TIME}</strong></p>\r\n\r\n<p>You can view this attendance by logging in to the portal using the link below.<br>\r\n<br>\r\n<big><strong><a href=\"{URL}\">View Details</a></strong></big><br>\r\n<br>\r\n<br>\r\nRegards,<br>\r\n<br>\r\nTheÂ <strong>{SITE_NAME}</strong>Â Team</p>\r\n'),
(70, 'invoice_item_refund_request', 'A new Refunded request recived for Invoice {REF}', '<p><strong>Hello </strong><br> <br> A new item refunded request received for Invoice {REF}.<br> <br> You can view the invoice online at:<br> <big><strong><a href=\"{LINK}\">View Refund Stock </a></strong></big><br> <br> Best Regards<br> <br> The {SITE_NAME} Team</p> ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_award`
--

CREATE TABLE `tbl_employee_award` (
  `employee_award_id` int(11) NOT NULL,
  `award_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gift_item` varchar(300) NOT NULL,
  `award_amount` int(5) NOT NULL,
  `award_date` varchar(10) NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Read 2=Unread',
  `given_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_bank`
--

CREATE TABLE `tbl_employee_bank` (
  `employee_bank_id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(300) NOT NULL,
  `branch_name` varchar(300) NOT NULL,
  `account_name` varchar(300) NOT NULL,
  `account_number` varchar(300) NOT NULL,
  `routing_number` varchar(50) DEFAULT NULL,
  `type_of_account` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_employee_bank`
--

INSERT INTO `tbl_employee_bank` (`employee_bank_id`, `user_id`, `bank_name`, `branch_name`, `account_name`, `account_number`, `routing_number`, `type_of_account`) VALUES
(1, 14, 'sbi', 'bhaniyawala', 'shubham', '4782456955565', '0011202332', 'saving'),
(3, 15, 'shubham', '', 'shubham bhatt', '723001500001649', '7894561230', 'savings');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_document`
--

CREATE TABLE `tbl_employee_document` (
  `document_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resume` text DEFAULT NULL,
  `resume_path` text DEFAULT NULL,
  `resume_filename` text DEFAULT NULL,
  `offer_letter` text DEFAULT NULL,
  `offer_letter_filename` text DEFAULT NULL,
  `offer_letter_path` text DEFAULT NULL,
  `joining_letter` text DEFAULT NULL,
  `joining_letter_filename` text DEFAULT NULL,
  `joining_letter_path` text DEFAULT NULL,
  `contract_paper` text DEFAULT NULL,
  `contract_paper_filename` text DEFAULT NULL,
  `contract_paper_path` text DEFAULT NULL,
  `id_proff` text DEFAULT NULL,
  `id_proff_filename` text DEFAULT NULL,
  `id_proff_path` text DEFAULT NULL,
  `other_document` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_payroll`
--

CREATE TABLE `tbl_employee_payroll` (
  `payroll_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `salary_template_id` int(11) DEFAULT NULL,
  `hourly_rate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_employee_payroll`
--

INSERT INTO `tbl_employee_payroll` (`payroll_id`, `user_id`, `salary_template_id`, `hourly_rate_id`) VALUES
(7, 3, 2, NULL),
(8, 13, 1, NULL),
(9, 4, NULL, NULL),
(10, 5, NULL, NULL),
(11, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estimates`
--

CREATE TABLE `tbl_estimates` (
  `estimates_id` int(11) NOT NULL,
  `reference_no` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT 0,
  `estimate_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimate_month` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimate_year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `due_date` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT 0,
  `currency` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `discount_percent` int(2) DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` int(11) NOT NULL DEFAULT 0,
  `total_tax` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `date_sent` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `est_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `invoiced` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `invoices_id` int(11) NOT NULL DEFAULT 0,
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_visible` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT 'sales agent',
  `adjustment` decimal(18,2) NOT NULL DEFAULT 0.00,
  `discount_total` decimal(18,2) NOT NULL DEFAULT 0.00,
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estimate_items`
--

CREATE TABLE `tbl_estimate_items` (
  `estimate_items_id` int(11) NOT NULL,
  `estimates_id` int(11) NOT NULL,
  `saved_items_id` int(11) DEFAULT 0,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `quantity` decimal(10,2) DEFAULT 0.00,
  `item_tax_total` decimal(10,2) DEFAULT 0.00,
  `total_cost` decimal(10,2) DEFAULT 0.00,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense_category`
--

CREATE TABLE `tbl_expense_category` (
  `expense_category_id` int(11) NOT NULL,
  `expense_category` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_expense_category`
--

INSERT INTO `tbl_expense_category` (`expense_category_id`, `expense_category`, `description`) VALUES
(1, 'Test Category', 'Test Category'),
(2, 'ravish cat', 'eeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `files_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `uploaded_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE `tbl_form` (
  `form_id` int(11) NOT NULL,
  `form_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tbl_name` varchar(25) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_form`
--

INSERT INTO `tbl_form` (`form_id`, `form_name`, `tbl_name`) VALUES
(1, 'deposit', 'tbl_transactions'),
(2, 'expense', 'tbl_transactions'),
(3, 'tasks', 'tbl_task'),
(4, 'project', 'tbl_project'),
(5, 'leads', 'tbl_leads'),
(6, 'bugs', 'tbl_bug'),
(7, 'tickets', 'tbl_tickets'),
(8, 'opportunities', 'tbl_opportunities'),
(9, 'invoice', 'tbl_invoices'),
(10, 'estimates', 'tbl_estimates'),
(11, 'proposal', 'tbl_proposals'),
(12, 'client', 'tbl_client'),
(13, 'users', 'tbl_account_details'),
(14, 'job_circular', 'tbl_job_circular'),
(15, 'training', 'tbl_training'),
(16, 'announcements', 'tbl_announcements'),
(17, 'leave_management', 'tbl_leave_application');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_goal_tracking`
--

CREATE TABLE `tbl_goal_tracking` (
  `goal_tracking_id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `goal_type_id` int(11) NOT NULL,
  `achievement` int(10) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `account_id` int(11) DEFAULT 0,
  `description` mediumtext NOT NULL,
  `notify_goal_achive` varchar(5) DEFAULT NULL,
  `notify_goal_not_achive` varchar(5) DEFAULT NULL,
  `permission` mediumtext DEFAULT NULL,
  `email_send` varchar(5) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_goal_type`
--

CREATE TABLE `tbl_goal_type` (
  `goal_type_id` int(11) NOT NULL,
  `type_name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `tbl_name` varchar(200) NOT NULL,
  `query` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_goal_type`
--

INSERT INTO `tbl_goal_type` (`goal_type_id`, `type_name`, `description`, `tbl_name`, `query`) VALUES
(1, 'achive_total_income', 'to get total income report from this start and end date and notify user. ', 'tbl_transactions', 'Income'),
(2, 'achive_total_income_by_bank', 'to get total income report from this start and end date and notify user. ', 'tbl_transactions', 'Income'),
(3, 'achieve_total_expense', 'to get total expense report from this start and end date and notify user. ', 'tbl_transactions', 'Expense'),
(4, 'achive_total_expense_by_bank', 'to get total expense report from this start and end date and notify user. ', 'tbl_transactions', 'Expense'),
(5, 'make_invoice', 'to get targeted invoice from this start and end date and notify user. ', 'tbl_invoices', NULL),
(6, 'make_estimate', 'to get targeted estimate from this start and end date and notify user.', 'tbl_estimates', NULL),
(7, 'goal_payment', 'to get total payment report from this start and end date and notify user. ', 'tbl_payments', NULL),
(8, 'task_done', 'to get total done tasks report from this start and end date and notify user. ', 'tbl_task', NULL),
(9, 'resolved_bugs', 'to get total resolve bugs report from this start and end date and notify user. ', 'tbl_bug', NULL),
(10, 'convert_leads_to_client', 'to get total Convert leads to client report from this start and end date and notify user. ', 'tbl_client', NULL),
(11, 'direct_client', 'to get total client report from this start and end date and notify user. ', 'tbl_client', NULL),
(12, 'complete_project_goal', 'to get total complete project report from this start and end date and notify user. ', 'tbl_project', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE `tbl_holiday` (
  `holiday_id` int(11) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hourly_rate`
--

CREATE TABLE `tbl_hourly_rate` (
  `hourly_rate_id` int(11) NOT NULL,
  `hourly_grade` varchar(200) NOT NULL,
  `hourly_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_hourly_rate`
--

INSERT INTO `tbl_hourly_rate` (`hourly_rate_id`, `hourly_grade`, `hourly_rate`) VALUES
(1, 'hfgh', '777');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` text DEFAULT NULL,
  `attach_file_path` text DEFAULT NULL,
  `attach_filename` text DEFAULT NULL,
  `message_time` datetime NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Read 2=Unread',
  `favourites` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= no 1=yes',
  `notify_me` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=on 0=off',
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income_category`
--

CREATE TABLE `tbl_income_category` (
  `income_category_id` int(11) NOT NULL,
  `income_category` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_income_category`
--

INSERT INTO `tbl_income_category` (`income_category_id`, `income_category`, `description`) VALUES
(2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices`
--

CREATE TABLE `tbl_invoices` (
  `invoices_id` int(11) NOT NULL,
  `recur_start_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `recur_end_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `reference_no` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `invoice_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_month` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `due_date` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT 0,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `tax` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_tax` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_percent` int(2) DEFAULT NULL,
  `recurring` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `recuring_frequency` int(11) NOT NULL DEFAULT 31,
  `recur_frequency` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recur_next_date` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USD',
  `status` enum('Cancelled','Unpaid','Paid','draft','partially_paid') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unpaid',
  `archived` int(11) DEFAULT 0,
  `date_sent` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inv_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `viewed` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_paypal` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `allow_stripe` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `allow_2checkout` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `allow_authorize` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_ccavenue` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_braintree` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_mollie` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `allow_payumoney` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `allow_tapPayment` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'Yes',
  `allow_razorpay` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_visible` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT 'sales agent',
  `adjustment` decimal(18,2) NOT NULL DEFAULT 0.00,
  `discount_total` decimal(18,2) NOT NULL DEFAULT 0.00,
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `items_id` int(11) NOT NULL,
  `invoices_id` int(11) NOT NULL,
  `item_tax_rate` decimal(18,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_total` decimal(18,2) NOT NULL DEFAULT 0.00,
  `quantity` decimal(18,2) DEFAULT 0.00,
  `total_cost` decimal(18,2) DEFAULT 0.00,
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` decimal(18,2) DEFAULT 0.00,
  `order` int(11) DEFAULT 0,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_history`
--

CREATE TABLE `tbl_item_history` (
  `item_history_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `inventory` int(5) NOT NULL,
  `purchase_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_appliactions`
--

CREATE TABLE `tbl_job_appliactions` (
  `job_appliactions_id` int(11) NOT NULL,
  `job_circular_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `cover_letter` text NOT NULL,
  `resume` text NOT NULL,
  `application_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=pending 1=accept 2 = reject',
  `apply_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `send_email` varchar(20) DEFAULT NULL,
  `interview_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_circular`
--

CREATE TABLE `tbl_job_circular` (
  `job_circular_id` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `designations_id` int(11) NOT NULL,
  `vacancy_no` varchar(50) NOT NULL,
  `posted_date` date NOT NULL,
  `employment_type` enum('contractual','full_time','part_time') NOT NULL DEFAULT 'full_time',
  `experience` varchar(200) DEFAULT NULL,
  `age` varchar(200) DEFAULT NULL,
  `salary_range` varchar(200) DEFAULT NULL,
  `last_date` date NOT NULL,
  `description` text NOT NULL,
  `status` enum('published','unpublished') NOT NULL DEFAULT 'unpublished' COMMENT '1=publish 2=unpublish',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_job_circular`
--

INSERT INTO `tbl_job_circular` (`job_circular_id`, `job_title`, `designations_id`, `vacancy_no`, `posted_date`, `employment_type`, `experience`, `age`, `salary_range`, `last_date`, `description`, `status`, `created_date`, `permission`) VALUES
(1, 'HR', 2, '2', '2020-01-24', 'full_time', '2', '34', '1000', '2020-01-25', '', 'published', '2020-01-24 09:11:02', 'all'),
(2, 'Accountant', 1, '2', '2020-01-24', 'contractual', '3', '24', '500', '2020-01-30', '', 'published', '2020-01-24 09:14:20', '{\"1\":[\"view\"],\"8\":[\"view\"]}');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kb_category`
--

CREATE TABLE `tbl_kb_category` (
  `kb_category_id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` longtext DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `sort` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kb_category`
--

INSERT INTO `tbl_kb_category` (`kb_category_id`, `category`, `description`, `type`, `sort`, `status`) VALUES
(1, 'Project Management - Scoping', '', 'kb', 0, 1),
(2, 'SaaS', '', 'kb', 0, 1),
(3, 'Project Management - Coordination', '', 'kb', 0, 1),
(4, 'Sharepoint Dev - REST API', '', 'kb', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_knowledgebase`
--

CREATE TABLE `tbl_knowledgebase` (
  `kb_id` int(11) NOT NULL,
  `kb_category_id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `attachments` text DEFAULT NULL,
  `for_all` enum('Yes','No') DEFAULT 'No',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `total_view` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `sort` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_knowledgebase`
--

INSERT INTO `tbl_knowledgebase` (`kb_id`, `kb_category_id`, `title`, `slug`, `description`, `attachments`, `for_all`, `status`, `total_view`, `created_by`, `created_at`, `sort`) VALUES
(1, 1, 'Question to be asked to vendors proposing custom solutions', 'question_to_be_asked_to_vendors_proposing_custom_solutions', '<p class=\"MsoNormal\">From a technical perspective:  <o></o></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>Security is also\n     something to consider ( please find attached the security questionnaire we\n     ask vendors to fulfill during RFP)<span xss=removed>è</span>, how secured is the application and ipsen data in the\n     data center … <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>Do we deal with data\n     privacy hear? ( are we intending to store any information about\n     individuals including employee)<o></o></li>\n <ul xss=removed type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=removed>If yes how do the\n      vendor’s application answers compliance requirements on these fields?<o></o></li>\n </ul>\n <li class=\"MsoListParagraph\" xss=removed>Will they be any patient\n     data ? <o></o></li>\n <ul xss=removed type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=removed>If yes how do the\n      vendor’s application answers compliance requirements on these fields?<o></o></li>\n </ul>\n</ul>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>Is the application\n     supported by all browser ( as we ask it to be webbased)  ( Safari,\n     internet explorer- what level-, Chrome ect..) <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>Can it be used from any\n     device ( Ipad, mobile phones, mac, PC) the satisfaction on the answer will\n     depend on what we want of course <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>What is the maturity of\n     the tool and its roadmap? How often do they propose releases ( minor and\n     major) what impact the release have on their customer<o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>Where is the application\n     hosted ( geographical + name of the hosting company) <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>For SAAS solution is\n     that private Saas or public SAAS ( this to understand if we are always on\n     their lastest version or if we need to decide to migrate to it. (\n     preference is public SAAS )<o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>Do they propose out of\n     box functions (standard functionalities) or does it require coding ( this\n     is to understand how complicated the maintenance can get. The more\n     standard the less issues in maintenance) <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>Do they propose SSO (\n     single sign on) ( this allow people to use their corporate user and\n     password to access the application <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>Do they propose auto\n     provisioning ( ability to understand the users profil at connection and\n     provide proper level of access in the tool ) <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>What kind of support (\n     bug fixing and change request) once the application is life at their\n     customer ( and to what cost) <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>Are they just editors (\n     IP of the solution) or do they also do the implementation ( if just editor\n     of solution what are the partners they usually work with for this) <o></o></li>\n <li class=\"MsoListParagraph\" xss=removed>What does the cost of\n     licenses stands for ( maintenance, hosting ect..) <o></o></li>\n</ul>\n\n<p class=\"MsoNormal\" xss=removed><o> </o></p>', '', 'No', 1, 2, 1, '2019-07-26 09:46:50', 0),
(2, 1, 'IT SaaS/PaaS Supplier Security Questionnaire', 'it_saas_paas_supplier_security_questionnaire', '', '[{\"fileName\":\"IT-SaaS-Supplier-Security-Questionnaire-template.docx\",\"path\":\"uploads\\/IT-SaaS-Supplier-Security-Questionnaire-template.docx\",\"fullPath\":\"\\/homepages\\/44\\/d747836972\\/htdocs\\/BIA\\/uploads\\/IT-SaaS-Supplier-Security-Questionnaire-template.docx\",\"size\":\"125.09\",\"is_image\":\"0\"}]', 'No', 1, 2, 1, '2019-07-26 09:51:19', 0),
(3, 3, 'How to create an external access for vendors ( With MDP included in the notification email )', 'how_to_create_an_external_access_for_vendors_with_mdp_included_in_the_notification_email', '<p class=\"MsoNormal\"><span lang=\"FR\">Bonjour Marc</span> vais déjà vous\nrappeler deux points à respecter lors de la création d’un compte externe dans\nIAM, si ces points ont été respectés, je vous prierai de me donner des cas\nconcrets pour les personnes n’ayant pas reçu leur ID ou leur mot de passe.</p><p class=\"MsoNormal\"><span lang=\"FR\">\nLors de la création d’une personne externe dans Identity Management, il faut impérativement\nrenseigner un mail de l’externe.  <br>\n<br>\nIl faut également essayer dans le meilleur des cas de créer l’externe avant sa\ndate d’arrivée. Les notifications sont liées à la date de création de compte\ndans IAM et à la date d’arrivée.</span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Je vais prendre un\nexemple très simple, mon compte. Il a été créé le 30 Octobre 2017 dans IAM, et\nj’ai reçu le lendemain, les notifications pour signer  « IS term of\nuse » et « Code of Ethical Conduct » :</span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Puis le jour de\nma date d’arrivée, le 2 novembre 2017, j’ai reçu l’ensemble des informations de\nmon compte, ainsi que mon mot de passe : <o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span>Cette\nnotification est envoyé à la date d’arrivée, si par exemple, la personne est\ncréée le jour de son arrivée, l’ensemble des ces notifications sont reportées\nau lendemain.</p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span>En espérant avoir\npu vous aider et n’hésitez pas à revenir vers moi.</p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span>Cordialement,</p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span>Clément Mirando.</p>', '', 'Yes', 1, 1, 1, '2019-07-31 05:43:28', 0),
(4, 4, 'Remove Null Results in Sharepoint Rest API', 'remove_null_results_in_sharepoint_rest_api', '<p xss=removed>You can use it as <code xss=removed>value.Department ? value.Department : \"\"</code> which is a JS ternary operator.</p><p xss=removed>Basically it acts like an if condition as below:</p><pre class=\"default prettyprint prettyprinted\" xss=removed><code xss=removed><span class=\"kwd\" xss=removed>if</span><span class=\"pun\" xss=removed>(</span><span class=\"pln\" xss=removed>value</span><span class=\"pun\" xss=removed>.</span><span class=\"typ\" xss=removed>Department</span><span class=\"pun\" xss=removed>){</span><span class=\"pln\" xss=removed>\n    value</span><span class=\"pun\" xss=removed>.</span><span class=\"typ\" xss=removed>Department</span><span class=\"pln\" xss=removed> </span><span class=\"pun\" xss=removed>=</span><span class=\"pln\" xss=removed> value</span><span class=\"pun\" xss=removed>.</span><span class=\"typ\" xss=removed>Department</span><span class=\"pun\" xss=removed>;</span><span class=\"pln\" xss=removed>\n</span><span class=\"pun\" xss=removed>}</span><span class=\"kwd\" xss=removed>else</span><span class=\"pun\" xss=removed>{</span><span class=\"pln\" xss=removed>\n    value</span><span class=\"pun\" xss=removed>.</span><span class=\"typ\" xss=removed>Department</span><span class=\"pln\" xss=removed> </span><span class=\"pun\" xss=removed>=</span><span class=\"pln\" xss=removed> </span><span class=\"str\" xss=removed>\"\"</span><span class=\"pun\" xss=removed>;</span><span class=\"pln\" xss=removed>\n</span><span class=\"pun\" xss=removed>}</span></code></pre><p xss=removed>You need to do this for other fields as well to check for undefined or null values and convert them to empty string.</p>', '', 'No', 1, 0, 1, '2019-08-27 11:20:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE `tbl_languages` (
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`code`, `name`, `icon`, `active`) VALUES
('ar', 'arabic', 'ae', 0),
('cs', 'czech', 'cs', 0),
('da', 'danish', 'dk', 0),
('de', 'german', 'de', 0),
('el', 'greek', 'gr', 0),
('en', 'english', 'us', 1),
('es', 'spanish', 'es', 0),
('fr', 'french', 'fr', 0),
('gu', 'gujarati', 'in', 0),
('hi', 'hindi', 'in', 0),
('id', 'indonesian', 'id', 0),
('it', 'italian', 'it', 0),
('ja', 'japanese', 'jp', 0),
('nl', 'dutch', 'nl', 0),
('no', 'norwegian', 'no', 0),
('pl', 'polish', 'pl', 0),
('pt', 'portuguese', 'pt', 0),
('ro', 'romanian', 'ro', 0),
('ru', 'russian', 'ru', 0),
('tr', 'turkish', 'tr', 0),
('vi', 'vietnamese', 'vn', 0),
('zh', 'chinese', 'cn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads`
--

CREATE TABLE `tbl_leads` (
  `leads_id` int(11) NOT NULL,
  `lead_name` varchar(50) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `organization` varchar(50) NOT NULL,
  `lead_status_id` int(11) DEFAULT NULL,
  `lead_source_id` int(11) DEFAULT NULL,
  `imported_from_email` tinyint(1) DEFAULT 0,
  `email_integration_uid` varchar(30) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `facebook` varchar(32) NOT NULL,
  `notes` text NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `skype` varchar(200) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `permission` text DEFAULT NULL,
  `converted_client_id` int(11) NOT NULL DEFAULT 0,
  `index_no` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_source`
--

CREATE TABLE `tbl_lead_source` (
  `lead_source_id` int(11) NOT NULL,
  `lead_source` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_lead_source`
--

INSERT INTO `tbl_lead_source` (`lead_source_id`, `lead_source`) VALUES
(2, ''),
(3, 'h1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_status`
--

CREATE TABLE `tbl_lead_status` (
  `lead_status_id` int(11) NOT NULL,
  `lead_status` varchar(50) NOT NULL,
  `lead_type` varchar(20) DEFAULT NULL,
  `order_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `application_status` int(2) NOT NULL DEFAULT 1 COMMENT '1=pending,2=accepted 3=rejected',
  `view_status` tinyint(1) NOT NULL DEFAULT 2,
  `application_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attachment` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `approve_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_leave_application`
--

INSERT INTO `tbl_leave_application` (`leave_application_id`, `user_id`, `leave_category_id`, `reason`, `leave_type`, `hours`, `leave_start_date`, `leave_end_date`, `application_status`, `view_status`, `application_date`, `attachment`, `comments`, `approve_by`) VALUES
(3, 8, 1, 'sdfa', 'single_day', NULL, '2019-12-02', NULL, 1, 2, '2019-12-24 09:30:12', NULL, NULL, NULL),
(4, 8, 2, 'hospital emergency ', 'multiple_days', NULL, '2020-02-04', '2020-02-05', 1, 2, '2020-02-04 07:51:35', '[{\"fileName\":\"indexs.jpeg\",\"path\":\"uploads\\/indexs.jpeg\",\"fullPath\":\"\\/home\\/kvtaf1utdxk1\\/public_html\\/plazacrm.com\\/uploads\\/indexs.jpeg\",\"ext\":\".jpeg\",\"size\":8.48,\"is_image\":1}]', NULL, NULL);

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
(2, 'Marriage', 3),
(3, '', 0),
(4, 'emergency', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locales`
--

CREATE TABLE `tbl_locales` (
  `locale` varchar(10) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `icon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_locales`
--

INSERT INTO `tbl_locales` (`locale`, `code`, `language`, `name`, `icon`) VALUES
('aa_DJ', 'aa', 'afar', 'Afar (Djibouti)', 'dj'),
('aa_ER', 'aa', 'afar', 'Afar (Eritrea)', 'dj'),
('aa_ET', 'aa', 'afar', 'Afar (Ethiopia)', 'dj'),
('af_ZA', 'af', 'afrikaans', 'Afrikaans (South Africa)', 'za'),
('am_ET', 'am', 'amharic', 'Amharic (Ethiopia)', 'et'),
('an_ES', 'an', 'aragonese', 'Aragonese (Spain)', 'es'),
('ar_AE', 'ar', 'arabic', 'Arabic (United Arab Emirates)', 'es'),
('ar_BH', 'ar', 'arabic', 'Arabic (Bahrain)', NULL),
('ar_DZ', 'ar', 'arabic', 'Arabic (Algeria)', NULL),
('ar_EG', 'ar', 'arabic', 'Arabic (Egypt)', NULL),
('ar_IN', 'ar', 'arabic', 'Arabic (India)', NULL),
('ar_IQ', 'ar', 'arabic', 'Arabic (Iraq)', NULL),
('ar_JO', 'ar', 'arabic', 'Arabic (Jordan)', NULL),
('ar_KW', 'ar', 'arabic', 'Arabic (Kuwait)', NULL),
('ar_LB', 'ar', 'arabic', 'Arabic (Lebanon)', NULL),
('ar_LY', 'ar', 'arabic', 'Arabic (Libya)', NULL),
('ar_MA', 'ar', 'arabic', 'Arabic (Morocco)', NULL),
('ar_OM', 'ar', 'arabic', 'Arabic (Oman)', NULL),
('ar_QA', 'ar', 'arabic', 'Arabic (Qatar)', NULL),
('ar_SA', 'ar', 'arabic', 'Arabic (Saudi Arabia)', NULL),
('ar_SD', 'ar', 'arabic', 'Arabic (Sudan)', NULL),
('ar_SY', 'ar', 'arabic', 'Arabic (Syria)', NULL),
('ar_TN', 'ar', 'arabic', 'Arabic (Tunisia)', NULL),
('ar_YE', 'ar', 'arabic', 'Arabic (Yemen)', NULL),
('ast_ES', 'ast', 'asturian', 'Asturian (Spain)', NULL),
('as_IN', 'as', 'assamese', 'Assamese (India)', NULL),
('az_AZ', 'az', 'azerbaijani', 'Azerbaijani (Azerbaijan)', NULL),
('az_TR', 'az', 'azerbaijani', 'Azerbaijani (Turkey)', NULL),
('bem_ZM', 'bem', 'bemba', 'Bemba (Zambia)', NULL),
('ber_DZ', 'ber', 'berber', 'Berber (Algeria)', NULL),
('ber_MA', 'ber', 'berber', 'Berber (Morocco)', NULL),
('be_BY', 'be', 'belarusian', 'Belarusian (Belarus)', NULL),
('bg_BG', 'bg', 'bulgarian', 'Bulgarian (Bulgaria)', NULL),
('bn_BD', 'bn', 'bengali', 'Bengali (Bangladesh)', NULL),
('bn_IN', 'bn', 'bengali', 'Bengali (India)', NULL),
('bo_CN', 'bo', 'tibetan', 'Tibetan (China)', NULL),
('bo_IN', 'bo', 'tibetan', 'Tibetan (India)', NULL),
('br_FR', 'br', 'breton', 'Breton (France)', NULL),
('bs_BA', 'bs', 'bosnian', 'Bosnian (Bosnia and Herzegovina)', NULL),
('byn_ER', 'byn', 'blin', 'Blin (Eritrea)', NULL),
('ca_AD', 'ca', 'catalan', 'Catalan (Andorra)', NULL),
('ca_ES', 'ca', 'catalan', 'Catalan (Spain)', NULL),
('ca_FR', 'ca', 'catalan', 'Catalan (France)', NULL),
('ca_IT', 'ca', 'catalan', 'Catalan (Italy)', NULL),
('crh_UA', 'crh', 'crimean turkish', 'Crimean Turkish (Ukraine)', NULL),
('csb_PL', 'csb', 'kashubian', 'Kashubian (Poland)', NULL),
('cs_CZ', 'cs', 'czech', 'Czech (Czech Republic)', NULL),
('cv_RU', 'cv', 'chuvash', 'Chuvash (Russia)', NULL),
('cy_GB', 'cy', 'welsh', 'Welsh (United Kingdom)', NULL),
('da_DK', 'da', 'danish', 'Danish (Denmark)', NULL),
('de_AT', 'de', 'german', 'German (Austria)', NULL),
('de_BE', 'de', 'german', 'German (Belgium)', NULL),
('de_CH', 'de', 'german', 'German (Switzerland)', NULL),
('de_DE', 'de', 'german', 'German (Germany)', NULL),
('de_LI', 'de', 'german', 'German (Liechtenstein)', NULL),
('de_LU', 'de', 'german', 'German (Luxembourg)', NULL),
('dv_MV', 'dv', 'divehi', 'Divehi (Maldives)', NULL),
('dz_BT', 'dz', 'dzongkha', 'Dzongkha (Bhutan)', NULL),
('ee_GH', 'ee', 'ewe', 'Ewe (Ghana)', NULL),
('el_CY', 'el', 'greek', 'Greek (Cyprus)', NULL),
('el_GR', 'el', 'greek', 'Greek (Greece)', NULL),
('en_AG', 'en', 'english', 'English (Antigua and Barbuda)', NULL),
('en_AS', 'en', 'english', 'English (American Samoa)', NULL),
('en_AU', 'en', 'english', 'English (Australia)', NULL),
('en_BW', 'en', 'english', 'English (Botswana)', NULL),
('en_CA', 'en', 'english', 'English (Canada)', NULL),
('en_DK', 'en', 'english', 'English (Denmark)', NULL),
('en_GB', 'en', 'english', 'English (United Kingdom)', NULL),
('en_GU', 'en', 'english', 'English (Guam)', NULL),
('en_HK', 'en', 'english', 'English (Hong Kong SAR China)', NULL),
('en_IE', 'en', 'english', 'English (Ireland)', NULL),
('en_IN', 'en', 'english', 'English (India)', NULL),
('en_JM', 'en', 'english', 'English (Jamaica)', NULL),
('en_MH', 'en', 'english', 'English (Marshall Islands)', NULL),
('en_MP', 'en', 'english', 'English (Northern Mariana Islands)', NULL),
('en_MU', 'en', 'english', 'English (Mauritius)', NULL),
('en_NG', 'en', 'english', 'English (Nigeria)', NULL),
('en_NZ', 'en', 'english', 'English (New Zealand)', NULL),
('en_PH', 'en', 'english', 'English (Philippines)', NULL),
('en_SG', 'en', 'english', 'English (Singapore)', NULL),
('en_TT', 'en', 'english', 'English (Trinidad and Tobago)', NULL),
('en_US', 'en', 'english', 'English (United States)', NULL),
('en_VI', 'en', 'english', 'English (Virgin Islands)', NULL),
('en_ZA', 'en', 'english', 'English (South Africa)', NULL),
('en_ZM', 'en', 'english', 'English (Zambia)', NULL),
('en_ZW', 'en', 'english', 'English (Zimbabwe)', NULL),
('eo', 'eo', 'esperanto', 'Esperanto', NULL),
('es_AR', 'es', 'spanish', 'Spanish (Argentina)', NULL),
('es_BO', 'es', 'spanish', 'Spanish (Bolivia)', NULL),
('es_CL', 'es', 'spanish', 'Spanish (Chile)', NULL),
('es_CO', 'es', 'spanish', 'Spanish (Colombia)', NULL),
('es_CR', 'es', 'spanish', 'Spanish (Costa Rica)', NULL),
('es_DO', 'es', 'spanish', 'Spanish (Dominican Republic)', NULL),
('es_EC', 'es', 'spanish', 'Spanish (Ecuador)', NULL),
('es_ES', 'es', 'spanish', 'Spanish (Spain)', NULL),
('es_GT', 'es', 'spanish', 'Spanish (Guatemala)', NULL),
('es_HN', 'es', 'spanish', 'Spanish (Honduras)', NULL),
('es_MX', 'es', 'spanish', 'Spanish (Mexico)', NULL),
('es_NI', 'es', 'spanish', 'Spanish (Nicaragua)', NULL),
('es_PA', 'es', 'spanish', 'Spanish (Panama)', NULL),
('es_PE', 'es', 'spanish', 'Spanish (Peru)', NULL),
('es_PR', 'es', 'spanish', 'Spanish (Puerto Rico)', NULL),
('es_PY', 'es', 'spanish', 'Spanish (Paraguay)', NULL),
('es_SV', 'es', 'spanish', 'Spanish (El Salvador)', NULL),
('es_US', 'es', 'spanish', 'Spanish (United States)', NULL),
('es_UY', 'es', 'spanish', 'Spanish (Uruguay)', NULL),
('es_VE', 'es', 'spanish', 'Spanish (Venezuela)', NULL),
('et_EE', 'et', 'estonian', 'Estonian (Estonia)', NULL),
('eu_ES', 'eu', 'basque', 'Basque (Spain)', NULL),
('eu_FR', 'eu', 'basque', 'Basque (France)', NULL),
('fa_AF', 'fa', 'persian', 'Persian (Afghanistan)', NULL),
('fa_IR', 'fa', 'persian', 'Persian (Iran)', NULL),
('ff_SN', 'ff', 'fulah', 'Fulah (Senegal)', NULL),
('fil_PH', 'fil', 'filipino', 'Filipino (Philippines)', NULL),
('fi_FI', 'fi', 'finnish', 'Finnish (Finland)', NULL),
('fo_FO', 'fo', 'faroese', 'Faroese (Faroe Islands)', NULL),
('fr_BE', 'fr', 'french', 'French (Belgium)', NULL),
('fr_BF', 'fr', 'french', 'French (Burkina Faso)', NULL),
('fr_BI', 'fr', 'french', 'French (Burundi)', NULL),
('fr_BJ', 'fr', 'french', 'French (Benin)', NULL),
('fr_CA', 'fr', 'french', 'French (Canada)', NULL),
('fr_CF', 'fr', 'french', 'French (Central African Republic)', NULL),
('fr_CG', 'fr', 'french', 'French (Congo)', NULL),
('fr_CH', 'fr', 'french', 'French (Switzerland)', NULL),
('fr_CM', 'fr', 'french', 'French (Cameroon)', NULL),
('fr_FR', 'fr', 'french', 'French (France)', NULL),
('fr_GA', 'fr', 'french', 'French (Gabon)', NULL),
('fr_GN', 'fr', 'french', 'French (Guinea)', NULL),
('fr_GP', 'fr', 'french', 'French (Guadeloupe)', NULL),
('fr_GQ', 'fr', 'french', 'French (Equatorial Guinea)', NULL),
('fr_KM', 'fr', 'french', 'French (Comoros)', NULL),
('fr_LU', 'fr', 'french', 'French (Luxembourg)', NULL),
('fr_MC', 'fr', 'french', 'French (Monaco)', NULL),
('fr_MG', 'fr', 'french', 'French (Madagascar)', NULL),
('fr_ML', 'fr', 'french', 'French (Mali)', NULL),
('fr_MQ', 'fr', 'french', 'French (Martinique)', NULL),
('fr_NE', 'fr', 'french', 'French (Niger)', NULL),
('fr_SN', 'fr', 'french', 'French (Senegal)', NULL),
('fr_TD', 'fr', 'french', 'French (Chad)', NULL),
('fr_TG', 'fr', 'french', 'French (Togo)', NULL),
('fur_IT', 'fur', 'friulian', 'Friulian (Italy)', NULL),
('fy_DE', 'fy', 'western frisian', 'Western Frisian (Germany)', NULL),
('fy_NL', 'fy', 'western frisian', 'Western Frisian (Netherlands)', NULL),
('ga_IE', 'ga', 'irish', 'Irish (Ireland)', NULL),
('gd_GB', 'gd', 'scottish gaelic', 'Scottish Gaelic (United Kingdom)', NULL),
('gez_ER', 'gez', 'geez', 'Geez (Eritrea)', NULL),
('gez_ET', 'gez', 'geez', 'Geez (Ethiopia)', NULL),
('gl_ES', 'gl', 'galician', 'Galician (Spain)', NULL),
('gu_IN', 'gu', 'gujarati', 'Gujarati (India)', NULL),
('gv_GB', 'gv', 'manx', 'Manx (United Kingdom)', NULL),
('ha_NG', 'ha', 'hausa', 'Hausa (Nigeria)', NULL),
('he_IL', 'he', 'hebrew', 'Hebrew (Israel)', NULL),
('hi_IN', 'hi', 'hindi', 'Hindi (India)', NULL),
('hr_HR', 'hr', 'croatian', 'Croatian (Croatia)', NULL),
('hsb_DE', 'hsb', 'upper sorbian', 'Upper Sorbian (Germany)', NULL),
('ht_HT', 'ht', 'haitian', 'Haitian (Haiti)', NULL),
('hu_HU', 'hu', 'hungarian', 'Hungarian (Hungary)', NULL),
('hy_AM', 'hy', 'armenian', 'Armenian (Armenia)', NULL),
('ia', 'ia', 'interlingua', 'Interlingua', NULL),
('id_ID', 'id', 'indonesian', 'Indonesian (Indonesia)', NULL),
('ig_NG', 'ig', 'igbo', 'Igbo (Nigeria)', NULL),
('ik_CA', 'ik', 'inupiaq', 'Inupiaq (Canada)', NULL),
('is_IS', 'is', 'icelandic', 'Icelandic (Iceland)', NULL),
('it_CH', 'it', 'italian', 'Italian (Switzerland)', NULL),
('it_IT', 'it', 'italian', 'Italian (Italy)', NULL),
('iu_CA', 'iu', 'inuktitut', 'Inuktitut (Canada)', NULL),
('ja_JP', 'ja', 'japanese', 'Japanese (Japan)', NULL),
('ka_GE', 'ka', 'georgian', 'Georgian (Georgia)', NULL),
('kk_KZ', 'kk', 'kazakh', 'Kazakh (Kazakhstan)', NULL),
('kl_GL', 'kl', 'kalaallisut', 'Kalaallisut (Greenland)', NULL),
('km_KH', 'km', 'khmer', 'Khmer (Cambodia)', NULL),
('kn_IN', 'kn', 'kannada', 'Kannada (India)', NULL),
('kok_IN', 'kok', 'konkani', 'Konkani (India)', NULL),
('ko_KR', 'ko', 'korean', 'Korean (South Korea)', NULL),
('ks_IN', 'ks', 'kashmiri', 'Kashmiri (India)', NULL),
('ku_TR', 'ku', 'kurdish', 'Kurdish (Turkey)', NULL),
('kw_GB', 'kw', 'cornish', 'Cornish (United Kingdom)', NULL),
('ky_KG', 'ky', 'kirghiz', 'Kirghiz (Kyrgyzstan)', NULL),
('lg_UG', 'lg', 'ganda', 'Ganda (Uganda)', NULL),
('li_BE', 'li', 'limburgish', 'Limburgish (Belgium)', NULL),
('li_NL', 'li', 'limburgish', 'Limburgish (Netherlands)', NULL),
('lo_LA', 'lo', 'lao', 'Lao (Laos)', NULL),
('lt_LT', 'lt', 'lithuanian', 'Lithuanian (Lithuania)', NULL),
('lv_LV', 'lv', 'latvian', 'Latvian (Latvia)', NULL),
('mai_IN', 'mai', 'maithili', 'Maithili (India)', NULL),
('mg_MG', 'mg', 'malagasy', 'Malagasy (Madagascar)', NULL),
('mi_NZ', 'mi', 'maori', 'Maori (New Zealand)', NULL),
('mk_MK', 'mk', 'macedonian', 'Macedonian (Macedonia)', NULL),
('ml_IN', 'ml', 'malayalam', 'Malayalam (India)', NULL),
('mn_MN', 'mn', 'mongolian', 'Mongolian (Mongolia)', NULL),
('mr_IN', 'mr', 'marathi', 'Marathi (India)', NULL),
('ms_BN', 'ms', 'malay', 'Malay (Brunei)', NULL),
('ms_MY', 'ms', 'malay', 'Malay (Malaysia)', NULL),
('mt_MT', 'mt', 'maltese', 'Maltese (Malta)', NULL),
('my_MM', 'my', 'burmese', 'Burmese (Myanmar)', NULL),
('naq_NA', 'naq', 'namibia', 'Namibia', NULL),
('nb_NO', 'nb', 'norwegian bokm?l', 'Norwegian Bokm?l (Norway)', NULL),
('nds_DE', 'nds', 'low german', 'Low German (Germany)', NULL),
('nds_NL', 'nds', 'low german', 'Low German (Netherlands)', NULL),
('ne_NP', 'ne', 'nepali', 'Nepali (Nepal)', NULL),
('nl_AW', 'nl', 'dutch', 'Dutch (Aruba)', NULL),
('nl_BE', 'nl', 'dutch', 'Dutch (Belgium)', NULL),
('nl_NL', 'nl', 'dutch', 'Dutch (Netherlands)', NULL),
('nn_NO', 'nn', 'norwegian nynorsk', 'Norwegian Nynorsk (Norway)', NULL),
('no_NO', 'no', 'norwegian', 'Norwegian (Norway)', NULL),
('nr_ZA', 'nr', 'south ndebele', 'South Ndebele (South Africa)', NULL),
('nso_ZA', 'nso', 'northern sotho', 'Northern Sotho (South Africa)', NULL),
('oc_FR', 'oc', 'occitan', 'Occitan (France)', NULL),
('om_ET', 'om', 'oromo', 'Oromo (Ethiopia)', NULL),
('om_KE', 'om', 'oromo', 'Oromo (Kenya)', NULL),
('or_IN', 'or', 'oriya', 'Oriya (India)', NULL),
('os_RU', 'os', 'ossetic', 'Ossetic (Russia)', NULL),
('pap_AN', 'pap', 'papiamento', 'Papiamento (Netherlands Antilles)', NULL),
('pa_IN', 'pa', 'punjabi', 'Punjabi (India)', NULL),
('pa_PK', 'pa', 'punjabi', 'Punjabi (Pakistan)', NULL),
('pl_PL', 'pl', 'polish', 'Polish (Poland)', NULL),
('ps_AF', 'ps', 'pashto', 'Pashto (Afghanistan)', NULL),
('pt_BR', 'pt', 'portuguese', 'Portuguese (Brazil)', NULL),
('pt_GW', 'pt', 'portuguese', 'Portuguese (Guinea-Bissau)', NULL),
('pt_PT', 'pt', 'portuguese', 'Portuguese (Portugal)', NULL),
('ro_MD', 'ro', 'romanian', 'Romanian (Moldova)', NULL),
('ro_RO', 'ro', 'romanian', 'Romanian (Romania)', NULL),
('ru_RU', 'ru', 'russian', 'Russian (Russia)', NULL),
('ru_UA', 'ru', 'russian', 'Russian (Ukraine)', NULL),
('rw_RW', 'rw', 'kinyarwanda', 'Kinyarwanda (Rwanda)', NULL),
('sa_IN', 'sa', 'sanskrit', 'Sanskrit (India)', NULL),
('sc_IT', 'sc', 'sardinian', 'Sardinian (Italy)', NULL),
('sd_IN', 'sd', 'sindhi', 'Sindhi (India)', NULL),
('seh_MZ', 'seh', 'sena', 'Sena (Mozambique)', NULL),
('se_NO', 'se', 'northern sami', 'Northern Sami (Norway)', NULL),
('sid_ET', 'sid', 'sidamo', 'Sidamo (Ethiopia)', NULL),
('si_LK', 'si', 'sinhala', 'Sinhala (Sri Lanka)', NULL),
('sk_SK', 'sk', 'slovak', 'Slovak (Slovakia)', NULL),
('sl_SI', 'sl', 'slovenian', 'Slovenian (Slovenia)', NULL),
('sn_ZW', 'sn', 'shona', 'Shona (Zimbabwe)', NULL),
('so_DJ', 'so', 'somali', 'Somali (Djibouti)', NULL),
('so_ET', 'so', 'somali', 'Somali (Ethiopia)', NULL),
('so_KE', 'so', 'somali', 'Somali (Kenya)', NULL),
('so_SO', 'so', 'somali', 'Somali (Somalia)', NULL),
('sq_AL', 'sq', 'albanian', 'Albanian (Albania)', NULL),
('sq_MK', 'sq', 'albanian', 'Albanian (Macedonia)', NULL),
('sr_BA', 'sr', 'serbian', 'Serbian (Bosnia and Herzegovina)', NULL),
('sr_ME', 'sr', 'serbian', 'Serbian (Montenegro)', NULL),
('sr_RS', 'sr', 'serbian', 'Serbian (Serbia)', NULL),
('ss_ZA', 'ss', 'swati', 'Swati (South Africa)', NULL),
('st_ZA', 'st', 'southern sotho', 'Southern Sotho (South Africa)', NULL),
('sv_FI', 'sv', 'swedish', 'Swedish (Finland)', NULL),
('sv_SE', 'sv', 'swedish', 'Swedish (Sweden)', NULL),
('sw_KE', 'sw', 'swahili', 'Swahili (Kenya)', NULL),
('sw_TZ', 'sw', 'swahili', 'Swahili (Tanzania)', NULL),
('ta_IN', 'ta', 'tamil', 'Tamil (India)', NULL),
('teo_UG', 'teo', 'teso', 'Teso (Uganda)', NULL),
('te_IN', 'te', 'telugu', 'Telugu (India)', NULL),
('tg_TJ', 'tg', 'tajik', 'Tajik (Tajikistan)', NULL),
('th_TH', 'th', 'thai', 'Thai (Thailand)', NULL),
('tig_ER', 'tig', 'tigre', 'Tigre (Eritrea)', NULL),
('ti_ER', 'ti', 'tigrinya', 'Tigrinya (Eritrea)', NULL),
('ti_ET', 'ti', 'tigrinya', 'Tigrinya (Ethiopia)', NULL),
('tk_TM', 'tk', 'turkmen', 'Turkmen (Turkmenistan)', NULL),
('tl_PH', 'tl', 'tagalog', 'Tagalog (Philippines)', NULL),
('tn_ZA', 'tn', 'tswana', 'Tswana (South Africa)', NULL),
('to_TO', 'to', 'tongan', 'Tongan (Tonga)', NULL),
('tr_CY', 'tr', 'turkish', 'Turkish (Cyprus)', NULL),
('tr_TR', 'tr', 'turkish', 'Turkish (Turkey)', NULL),
('ts_ZA', 'ts', 'tsonga', 'Tsonga (South Africa)', NULL),
('tt_RU', 'tt', 'tatar', 'Tatar (Russia)', NULL),
('ug_CN', 'ug', 'uighur', 'Uighur (China)', NULL),
('uk_UA', 'uk', 'ukrainian', 'Ukrainian (Ukraine)', NULL),
('ur_PK', 'ur', 'urdu', 'Urdu (Pakistan)', NULL),
('uz_UZ', 'uz', 'uzbek', 'Uzbek (Uzbekistan)', NULL),
('ve_ZA', 've', 'venda', 'Venda (South Africa)', NULL),
('vi_VN', 'vi', 'vietnamese', 'Vietnamese (Vietnam)', NULL),
('wa_BE', 'wa', 'walloon', 'Walloon (Belgium)', NULL),
('wo_SN', 'wo', 'wolof', 'Wolof (Senegal)', NULL),
('xh_ZA', 'xh', 'xhosa', 'Xhosa (South Africa)', NULL),
('yi_US', 'yi', 'yiddish', 'Yiddish (United States)', NULL),
('yo_NG', 'yo', 'yoruba', 'Yoruba (Nigeria)', NULL),
('zh_CN', 'zh', 'chinese', 'Chinese (China)', NULL),
('zh_HK', 'zh', 'chinese', 'Chinese (Hong Kong SAR China)', NULL),
('zh_SG', 'zh', 'chinese', 'Chinese (Singapore)', NULL),
('zh_TW', 'zh', 'chinese', 'Chinese (Taiwan)', NULL),
('zu_ZA', 'zu', 'zulu', 'Zulu (South Africa)', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 1 COMMENT '1= active 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `label`, `link`, `icon`, `parent`, `sort`, `time`, `status`) VALUES
(1, 'dashboard', 'admin/dashboard', 'fa fa-dashboard', 0, 0, '2017-04-22 01:09:36', 1),
(2, 'calendar', 'admin/calendar', 'fa fa-calendar', 0, 1, '2017-04-22 19:27:23', 1),
(4, 'client', 'admin/client/manage_client', 'fa fa-users', 0, 14, '2020-02-04 10:00:51', 1),
(5, 'mailbox', 'admin/mailbox', 'fa fa-envelope-o', 0, 2, '2017-06-09 13:46:25', 1),
(6, 'tickets', 'admin/tickets', 'fa fa-ticket', 0, 11, '2020-02-04 10:00:51', 1),
(12, 'sales', '#', 'fa fa-shopping-cart', 0, 10, '2020-02-04 10:00:51', 1),
(13, 'invoice', 'admin/invoice/manage_invoice', 'fa fa-circle-o', 12, 0, '2017-04-22 19:27:23', 1),
(14, 'estimates', 'admin/estimates', 'fa fa-circle-o', 12, 1, '2017-06-09 13:32:05', 1),
(15, 'payments_received', 'admin/invoice/all_payments', 'fa fa-circle-o', 12, 3, '2017-04-22 19:27:24', 1),
(16, 'tax_rates', 'admin/invoice/tax_rates', 'fa fa-circle-o', 12, 5, '2018-01-06 06:35:16', 1),
(21, 'quotations', '#', 'fa fa-paste', 12, 6, '2020-02-04 10:00:51', 1),
(22, 'quotations_list', 'admin/quotations', 'fa fa-circle-o', 21, 0, '2017-05-17 16:19:03', 1),
(23, 'quotations_form', 'admin/quotations/quotations_form', 'fa fa-circle-o', 21, 1, '2016-05-29 08:20:23', 1),
(24, 'user', 'admin/user/user_list', 'fa fa-users', 0, 26, '2020-02-04 10:00:51', 1),
(25, 'settings', 'admin/settings', 'fa fa-cogs', 0, 27, '2020-02-04 10:00:51', 1),
(26, 'database_backup', 'admin/settings/database_backup', 'fa fa-database', 0, 28, '2020-02-04 10:00:51', 1),
(29, 'transactions_menu', '#', 'fa fa-building-o', 0, 13, '2020-02-04 10:00:51', 1),
(30, 'deposit', 'admin/transactions/deposit', 'fa fa-circle-o', 29, 1, '2018-05-12 11:58:33', 1),
(31, 'expense', 'admin/transactions/expense', 'fa fa-circle-o', 29, 0, '2018-05-12 11:58:37', 1),
(32, 'transfer', 'admin/transactions/transfer', 'fa fa-circle-o', 29, 2, '2018-05-12 11:58:40', 1),
(33, 'transactions_report', 'admin/transactions/transactions_report', 'fa fa-circle-o', 29, 3, '2018-05-12 11:58:44', 1),
(34, 'balance_sheet', 'admin/transactions/balance_sheet', 'fa fa-circle-o', 29, 5, '2018-05-12 11:58:47', 1),
(36, 'bank_cash', 'admin/account/manage_account', 'fa fa-money', 29, 6, '2018-05-12 11:58:51', 1),
(39, 'items', 'admin/items/items_list', 'fa fa-cube', 150, 0, '2019-05-03 18:19:50', 1),
(42, 'report', '#', 'fa fa-bar-chart', 0, 25, '2020-02-04 10:00:51', 1),
(43, 'account_statement', 'admin/report/account_statement', 'fa fa-circle-o', 146, 0, '2018-01-06 06:35:17', 1),
(44, 'income_report', 'admin/report/income_report', 'fa fa-circle-o', 146, 2, '2018-01-06 06:35:17', 1),
(45, 'expense_report', 'admin/report/expense_report', 'fa fa-circle-o', 146, 1, '2018-01-06 06:35:17', 1),
(46, 'income_expense', 'admin/report/income_expense', 'fa fa-circle-o', 146, 3, '2018-01-06 06:35:18', 1),
(47, 'date_wise_report', 'admin/report/date_wise_report', 'fa fa-circle-o', 146, 4, '2018-01-06 06:35:18', 1),
(48, 'all_income', 'admin/report/all_income', 'fa fa-circle-o', 146, 6, '2018-01-06 06:35:18', 1),
(49, 'all_expense', 'admin/report/all_expense', 'fa fa-circle-o', 146, 7, '2018-01-06 06:35:18', 1),
(50, 'all_transaction', 'admin/report/all_transaction', 'fa fa-circle-o', 146, 8, '2018-01-06 06:35:18', 1),
(51, 'recurring_invoice', 'admin/invoice/recurring_invoice', 'fa fa-circle-o', 12, 2, '2017-06-09 13:32:05', 1),
(52, 'transfer_report', 'admin/transactions/transfer_report', 'fa fa-circle-o', 29, 4, '2018-05-12 11:58:59', 1),
(53, 'report_by_month', 'admin/report/report_by_month', 'fa fa-circle-o', 146, 5, '2018-01-06 06:35:18', 1),
(54, 'tasks', 'admin/tasks/all_task', 'fa fa-tasks', 0, 5, '2017-06-09 13:46:25', 1),
(55, 'leads', 'admin/leads', 'fa fa-rocket', 0, 8, '2017-06-09 13:46:25', 1),
(56, 'opportunities', 'admin/opportunities', 'fa fa-filter', 0, 7, '2017-06-09 13:46:25', 1),
(57, 'projects', 'admin/projects', 'fa fa-folder-open-o', 0, 4, '2017-06-09 13:46:25', 1),
(58, 'bugs', 'admin/bugs', 'fa fa-bug', 0, 6, '2017-06-09 13:46:25', 1),
(59, 'project', '#', 'fa fa-folder-open-o', 42, 2, '2018-01-06 06:39:39', 1),
(60, 'tasks_report', 'admin/report/tasks_report', 'fa fa-circle-o', 42, 3, '2018-01-06 06:39:39', 1),
(61, 'bugs_report', 'admin/report/bugs_report', 'fa fa-circle-o', 42, 4, '2018-01-06 06:39:39', 1),
(62, 'tickets_report', 'admin/report/tickets_report', 'fa fa-circle-o', 42, 5, '2018-01-06 06:39:39', 1),
(63, 'client_report', 'admin/report/client_report', 'fa fa-circle-o', 42, 6, '2018-01-06 06:39:40', 1),
(66, 'tasks_assignment', 'admin/report/tasks_assignment', 'fa fa-dot-circle-o', 59, 0, '2016-05-29 08:25:02', 1),
(67, 'bugs_assignment', 'admin/report/bugs_assignment', 'fa fa-dot-circle-o', 59, 1, '2016-05-29 08:25:02', 1),
(68, 'project_report', 'admin/report/project_report', 'fa fa-dot-circle-o', 59, 2, '2016-05-29 08:25:02', 1),
(69, 'goal_tracking', 'admin/goal_tracking', 'fa fa-shield', 73, 1, '2017-06-09 13:35:47', 1),
(70, 'departments', 'admin/departments', 'fa fa-user-secret', 0, 15, '2020-02-04 10:00:51', 1),
(71, 'holiday', 'admin/holiday', 'fa fa-calendar-plus-o', 73, 0, '2017-06-09 13:35:47', 1),
(72, 'leave_management', 'admin/leave_management', 'fa fa-plane', 0, 21, '2020-02-04 10:00:51', 1),
(73, 'utilities', '#', 'fa fa-gift', 0, 24, '2020-02-04 10:00:51', 1),
(74, 'overtime', 'admin/utilities/overtime', 'fa fa-clock-o', 89, 9, '2017-06-09 13:34:23', 1),
(75, 'office_stock', '#', 'fa fa-codepen', 0, 16, '2020-02-04 10:00:51', 1),
(76, 'stock_category', 'admin/stock/stock_category', 'fa fa-sliders', 75, 0, '2016-05-29 08:20:23', 1),
(77, 'manage_stock', '#', 'fa fa-archive', 75, 2, '2017-04-25 15:41:10', 1),
(78, 'assign_stock', '#', 'fa fa-align-left', 75, 3, '2017-04-25 15:41:10', 1),
(79, 'stock_report', 'admin/stock/report', 'fa fa-line-chart', 75, 4, '2017-04-24 18:18:25', 1),
(81, 'stock_list', 'admin/stock/stock_list', 'fa fa-stack-exchange', 75, 1, '2017-04-25 15:41:10', 1),
(82, 'assign_stock', 'admin/stock/assign_stock', 'fa fa-align-left', 78, 0, '2016-05-29 08:25:02', 1),
(83, 'assign_stock_report', 'admin/stock/assign_stock_report', 'fa fa-bar-chart', 78, 1, '2016-05-29 08:25:02', 1),
(84, 'stock_history', 'admin/stock/stock_history', 'fa fa-file-text-o', 77, 0, '2016-05-29 08:25:02', 1),
(85, 'performance', '#', 'fa fa-dribbble', 0, 20, '2020-02-04 10:00:51', 1),
(86, 'performance_indicator', 'admin/performance/performance_indicator', 'fa fa-random', 85, 0, '2016-05-29 08:20:23', 1),
(87, 'performance_report', 'admin/performance/performance_report', 'fa fa-calendar-o', 85, 2, '2016-05-29 08:20:23', 1),
(88, 'give_appraisal', 'admin/performance/give_performance_appraisal', 'fa fa-plus', 85, 1, '2016-05-29 08:20:23', 1),
(89, 'payroll', '#', 'fa fa-usd', 0, 19, '2020-02-04 10:00:51', 1),
(90, 'manage_salary_details', 'admin/payroll/manage_salary_details', 'fa fa-usd', 89, 2, '2017-04-22 07:36:37', 1),
(91, 'employee_salary_list', 'admin/payroll/employee_salary_list', 'fa fa-user-secret', 89, 3, '2017-04-22 07:36:37', 1),
(92, 'make_payment', 'admin/payroll/make_payment', 'fa fa-tasks', 89, 4, '2017-04-22 07:36:37', 1),
(93, 'generate_payslip', 'admin/payroll/generate_payslip', 'fa fa-list-ul', 89, 5, '2017-04-22 07:36:37', 1),
(94, 'salary_template', 'admin/payroll/salary_template', 'fa fa-money', 89, 0, '2017-04-22 07:36:37', 1),
(95, 'hourly_rate', 'admin/payroll/hourly_rate', 'fa fa-clock-o', 89, 1, '2017-04-22 07:36:37', 1),
(96, 'payroll_summary', 'admin/payroll/payroll_summary', 'fa fa-camera-retro', 89, 6, '2017-04-22 07:36:37', 1),
(97, 'provident_fund', 'admin/payroll/provident_fund', 'fa fa-briefcase', 89, 8, '2017-06-09 13:34:23', 1),
(98, 'advance_salary', 'admin/payroll/advance_salary', 'fa fa-cc-mastercard', 89, 7, '2017-06-09 13:34:23', 1),
(99, 'employee_award', 'admin/award', 'fa fa-trophy', 89, 10, '2017-06-09 13:35:47', 1),
(100, 'announcements', 'admin/announcements', 'fa fa-bullhorn icon', 0, 23, '2020-02-04 10:00:51', 1),
(101, 'training', 'admin/training', 'fa fa-suitcase', 0, 22, '2020-02-04 10:00:51', 1),
(102, 'job_circular', '#', 'fa fa-globe', 0, 18, '2020-02-04 10:00:51', 1),
(103, 'jobs_posted', 'admin/job_circular/jobs_posted', 'fa fa-ticket', 102, 0, '2016-05-29 08:20:21', 1),
(104, 'jobs_applications', 'admin/job_circular/jobs_applications', 'fa fa-compass', 102, 1, '2016-05-29 08:20:21', 1),
(105, 'attendance', '#', 'fa fa-file-text', 0, 17, '2020-02-04 10:00:51', 1),
(106, 'timechange_request', 'admin/attendance/timechange_request', 'fa fa-calendar-o', 105, 1, '2016-05-29 08:20:21', 1),
(107, 'attendance_report', 'admin/attendance/attendance_report', 'fa fa-file-text', 105, 2, '2016-05-29 08:20:21', 1),
(108, 'time_history', 'admin/attendance/time_history', 'fa fa-clock-o', 105, 0, '2016-05-29 08:20:21', 1),
(109, 'pull-down', '', '', 0, 0, '2016-05-30 12:13:20', 0),
(110, 'filemanager', 'admin/filemanager', 'fa fa-file', 0, 3, '2017-06-09 13:46:25', 1),
(111, 'company_details', 'admin/settings', 'fa fa-fw fa-info-circle', 25, 1, '2017-04-24 16:38:46', 2),
(112, 'system_settings', 'admin/settings/system', 'fa fa-fw fa-desktop', 25, 2, '2017-04-24 16:38:46', 2),
(113, 'email_settings', 'admin/settings/email', 'fa fa-fw fa-envelope', 25, 3, '2017-04-24 16:38:46', 2),
(114, 'email_templates', 'admin/settings/templates', 'fa fa-fw fa-pencil-square', 25, 4, '2017-04-24 16:38:46', 2),
(115, 'email_integration', 'admin/settings/email_integration', 'fa fa-fw fa-envelope-o', 25, 5, '2017-04-24 16:38:46', 2),
(116, 'payment_settings', 'admin/settings/payments', 'fa fa-fw fa-dollar', 25, 6, '2017-04-24 16:38:46', 2),
(117, 'invoice_settings', 'admin/settings/invoice', 'fa fa-fw fa-money', 25, 0, '2017-04-24 16:38:46', 2),
(118, 'estimate_settings', 'admin/settings/estimate', 'fa fa-fw fa-file-o', 25, 0, '2017-04-24 16:38:46', 2),
(119, 'tickets_leads_settings', 'admin/settings/tickets', 'fa fa-fw fa-ticket', 25, 0, '2017-04-24 16:38:46', 2),
(120, 'theme_settings', 'admin/settings/theme', 'fa fa-fw fa-code', 25, 0, '2017-04-24 16:38:46', 2),
(121, 'working_days', 'admin/settings/working_days', 'fa fa-fw fa-calendar', 25, 0, '2017-04-24 16:43:41', 2),
(122, 'leave_category', 'admin/settings/leave_category', 'fa fa-fw fa-pagelines', 25, 0, '2017-04-24 16:43:41', 2),
(123, 'income_category', 'admin/settings/income_category', 'fa fa-fw fa-certificate', 25, 0, '2017-04-24 16:43:41', 2),
(124, 'expense_category', 'admin/settings/expense_category', 'fa fa-fw fa-tasks', 25, 0, '2017-04-24 16:43:41', 2),
(125, 'customer_group', 'admin/settings/customer_group', 'fa fa-fw fa-users', 25, 0, '2017-04-24 16:43:41', 2),
(126, 'contract_type', 'admin/settings/contract_type', 'fa fa-fw fa-file-o', 25, 0, '2017-04-24 16:43:41', 2),
(127, 'lead_status', 'admin/settings/lead_status', 'fa fa-fw fa-list-ul', 25, 0, '2017-04-24 16:43:41', 2),
(128, 'lead_source', 'admin/settings/lead_source', 'fa fa-fw fa-arrow-down', 25, 0, '2017-04-24 16:43:41', 2),
(129, 'opportunities_state_reason', 'admin/settings/opportunities_state_reason', 'fa fa-fw fa-dot-circle-o', 25, 0, '2017-04-24 16:43:41', 2),
(130, 'custom_field', 'admin/settings/custom_field', 'fa fa-fw fa-star-o', 25, 0, '2017-04-24 16:43:41', 2),
(131, 'payment_method', 'admin/settings/payment_method', 'fa fa-fw fa-money', 25, 0, '2017-04-24 16:43:41', 2),
(132, 'cronjob', 'admin/settings/cronjob', 'fa fa-fw fa-contao', 25, 0, '2017-04-24 16:46:20', 2),
(133, 'menu_allocation', 'admin/settings/menu_allocation', 'fa fa-fw fa fa-compass', 25, 0, '2017-04-24 16:46:20', 2),
(134, 'notification', 'admin/settings/notification', 'fa fa-fw fa-bell-o', 25, 0, '2017-04-24 16:46:20', 2),
(135, 'email_notification', 'admin/settings/email_notification', 'fa fa-fw fa-bell-o', 25, 0, '2017-04-24 16:46:20', 2),
(136, 'database_backup', 'admin/settings/database_backup', 'fa fa-fw fa-database', 25, 0, '2017-04-24 16:46:20', 2),
(137, 'translations', 'admin/settings/translations', 'fa fa-fw fa-language', 25, 0, '2017-04-24 16:46:20', 2),
(138, 'system_update', 'admin/settings/system_update', 'fa fa-fw fa-pencil-square-o', 25, 0, '2017-04-24 16:46:20', 2),
(139, 'private_chat', 'chat/conversations', 'fa fa-envelope', 0, 29, '2020-02-04 10:00:51', 1),
(140, 'proposals', 'admin/proposals', 'fa fa-circle-o', 12, 4, '2018-01-06 06:35:16', 1),
(141, 'knowledgebase', '#', 'fa fa-question-circle', 0, 12, '2020-02-04 10:00:51', 1),
(142, 'categories', 'admin/knowledgebase/categories', 'fa fa-circle-o', 141, 2, '2018-01-06 06:35:17', 1),
(143, 'articles', 'admin/knowledgebase/articles', 'fa fa-circle-o', 141, 1, '2018-01-06 06:35:17', 1),
(144, 'knowledgebase', 'admin/knowledgebase', 'fa fa-circle-o', 141, 0, '2018-01-06 06:35:17', 1),
(145, 'dashboard_settings', 'admin/settings/dashboard', 'fa fa-fw fa-dashboard', 25, 11, '2017-04-24 16:38:46', 2),
(146, 'transactions_reports', '#', 'fa fa-building-o', 42, 1, '2018-05-12 11:59:51', 1),
(147, 'sales', 'admin/report/sales_report', 'fa fa-shopping-cart', 42, 0, '2018-01-06 00:42:23', 1),
(148, 'mark_attendance', 'admin/mark_attendance', 'fa fa-file-text', 105, 3, '2020-02-04 10:00:51', 1),
(149, 'allowed_ip', 'admin/settings/allowed_ip', 'fa fa-server', 25, 1, '2018-11-14 09:22:20', 2),
(150, 'stock', '#', 'icon-layers', 0, 9, '2020-02-04 10:00:51', 1),
(151, 'supplier', 'admin/supplier', 'icon-briefcase', 150, 1, '2019-04-30 17:40:52', 1),
(152, '', 'admin/purchase', 'icon-handbag', 150, 2, '2019-04-30 17:40:52', 1),
(153, 'return_stock', 'admin/return_stock', 'icon-share-alt', 150, 3, '2019-05-04 15:49:30', 1),
(154, 'purchase_payment', 'admin/purchase/all_payments', 'icon-credit-card', 150, 4, '2019-05-04 13:23:11', 1),
(155, 'purchase_settings', 'admin/settings/purchase', 'fa-fw icon-handbag', 25, 0, '2017-04-24 22:38:46', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mettings`
--

CREATE TABLE `tbl_mettings` (
  `mettings_id` int(11) NOT NULL,
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `meeting_subject` varchar(200) NOT NULL,
  `attendees` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migrations`
--

CREATE TABLE `tbl_migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_migrations`
--

INSERT INTO `tbl_migrations` (`version`) VALUES
(143);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_milestones`
--

CREATE TABLE `tbl_milestones` (
  `milestones_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `milestone_name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `client_visible` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes`
--

CREATE TABLE `tbl_notes` (
  `notes_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_client` enum('Yes','No') NOT NULL DEFAULT 'No',
  `notes` mediumtext DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE `tbl_notifications` (
  `notifications_id` int(11) NOT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `read_inline` tinyint(1) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  `from_user_id` int(11) NOT NULL DEFAULT 0,
  `to_user_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(200) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `icon` varchar(200) DEFAULT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_notifications`
--

INSERT INTO `tbl_notifications` (`notifications_id`, `read`, `read_inline`, `date`, `description`, `from_user_id`, `to_user_id`, `name`, `link`, `icon`, `value`) VALUES
(1, 0, 0, '2019-07-28 22:59:35', 'assign_to_you_the_project', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/58', NULL, 'Formulation Sharepoint'),
(2, 0, 0, '2019-07-30 15:41:46', 'assign_to_you_the_project', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(3, 0, 0, '2019-07-30 15:41:46', 'assign_to_you_the_project', 1, 4, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(4, 0, 0, '2019-07-30 16:19:12', 'assign_to_you_the_project', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/6', NULL, 'Visual Management HR RECRU'),
(5, 0, 0, '2019-07-31 13:30:28', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/1', NULL, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )'),
(6, 0, 0, '2019-07-31 13:30:28', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/1', NULL, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )'),
(7, 0, 0, '2019-07-31 13:31:29', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/2', NULL, 'External users need to access with externals email'),
(8, 0, 0, '2019-07-31 13:31:30', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/2', NULL, 'External users need to access with externals email'),
(9, 0, 0, '2019-07-31 13:34:10', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(10, 0, 0, '2019-07-31 13:34:10', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(11, 0, 0, '2019-07-31 13:34:30', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(12, 0, 0, '2019-07-31 13:34:30', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(13, 0, 0, '2019-07-31 13:38:47', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/1', NULL, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )'),
(14, 0, 0, '2019-07-31 13:38:47', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/1', NULL, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )'),
(15, 0, 0, '2019-07-31 13:40:19', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(16, 0, 0, '2019-07-31 13:40:19', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(17, 0, 0, '2019-07-31 13:40:39', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(18, 0, 0, '2019-07-31 13:40:39', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(19, 0, 0, '2019-07-31 21:49:32', 'not_new_notice', 0, 3, NULL, 'admin/announcements/view_announcements_details/2', 'bullhorn', 'Create an external account ( Best Practise )'),
(20, 0, 0, '2019-07-31 21:49:32', 'not_new_notice', 0, 4, NULL, 'admin/announcements/view_announcements_details/2', 'bullhorn', 'Create an external account ( Best Practise )'),
(21, 0, 0, '2019-07-31 21:49:32', 'not_new_notice', 0, 3, NULL, 'admin/announcements/view_announcements_details/1', 'bullhorn', 'Create an external account ( Best Practise )'),
(22, 0, 0, '2019-07-31 21:49:33', 'not_new_notice', 0, 4, NULL, 'admin/announcements/view_announcements_details/1', 'bullhorn', 'Create an external account ( Best Practise )'),
(23, 0, 0, '2019-07-31 22:09:30', 'assign_to_you_the_project', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/22', NULL, 'SharePoint Algeria'),
(24, 0, 0, '2019-07-31 22:33:30', 'assign_to_you_the_project', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(25, 0, 0, '2019-07-31 22:33:30', 'assign_to_you_the_project', 1, 4, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(26, 0, 0, '2019-07-31 22:33:31', 'assign_to_you_the_project', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(27, 0, 0, '2019-07-31 22:33:43', 'assign_to_you_the_project', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(28, 0, 0, '2019-07-31 22:33:44', 'assign_to_you_the_project', 1, 4, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(29, 0, 0, '2019-07-31 22:33:44', 'assign_to_you_the_project', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(30, 0, 0, '2019-07-31 22:33:44', 'assign_to_you_the_project', 1, 6, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Self Service V2'),
(31, 0, 0, '2019-07-31 22:34:50', 'not_changed_status', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Status : In Progress to On Hold'),
(32, 0, 0, '2019-07-31 22:34:50', 'not_changed_status', 1, 4, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Status : In Progress to On Hold'),
(33, 0, 0, '2019-07-31 22:34:50', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Status : In Progress to On Hold'),
(34, 0, 0, '2019-07-31 22:34:51', 'not_changed_status', 1, 6, 'Marco Delpiano', 'admin/projects/project_details/24', NULL, 'Status : In Progress to On Hold'),
(35, 0, 0, '2019-07-31 23:49:45', 'not_changed_status', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/46', NULL, 'Status : Completed to In Progress'),
(36, 0, 0, '2019-07-31 23:49:45', 'not_changed_status', 1, 4, 'Marco Delpiano', 'admin/projects/project_details/46', NULL, 'Status : Completed to In Progress'),
(37, 0, 0, '2019-07-31 23:49:45', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/46', NULL, 'Status : Completed to In Progress'),
(38, 0, 0, '2019-07-31 23:49:45', 'not_changed_status', 1, 6, 'Marco Delpiano', 'admin/projects/project_details/46', NULL, 'Status : Completed to In Progress'),
(39, 0, 0, '2019-07-31 23:50:05', 'assign_to_you_the_project', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/46', NULL, 'Ipsen Planet'),
(40, 0, 0, '2019-07-31 23:50:05', 'assign_to_you_the_project', 1, 4, 'Marco Delpiano', 'admin/projects/project_details/46', NULL, 'Ipsen Planet'),
(41, 0, 0, '2019-08-01 21:37:14', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(42, 0, 0, '2019-08-01 21:37:15', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(43, 0, 0, '2019-08-01 21:37:15', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(44, 0, 0, '2019-08-01 21:37:15', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(45, 0, 0, '2019-08-01 21:37:43', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(46, 0, 0, '2019-08-01 21:37:43', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(47, 0, 0, '2019-08-01 21:37:43', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(48, 0, 0, '2019-08-01 21:37:43', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(49, 0, 0, '2019-08-01 21:37:56', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(50, 0, 0, '2019-08-01 21:37:56', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(51, 0, 0, '2019-08-01 21:37:56', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(52, 0, 0, '2019-08-01 21:37:56', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(53, 0, 0, '2019-08-01 22:18:53', 'not_changed_status', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/1', NULL, 'Status : not_started to in_progress'),
(54, 0, 0, '2019-08-01 22:18:53', 'not_changed_status', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/1', NULL, 'Status : not_started to in_progress'),
(55, 0, 0, '2019-08-01 22:18:53', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/1', NULL, 'Status : not_started to in_progress'),
(56, 0, 0, '2019-08-01 22:18:53', 'not_changed_status', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/1', NULL, 'Status : not_started to in_progress'),
(57, 0, 0, '2019-08-01 22:25:07', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/3', NULL, 'Task Build design model for Olivier based on a web template ( Envato )'),
(58, 0, 0, '2019-08-01 22:25:07', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/3', NULL, 'Task Build design model for Olivier based on a web template ( Envato )'),
(59, 0, 0, '2019-08-01 22:25:07', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/3', NULL, 'Task Build design model for Olivier based on a web template ( Envato )'),
(60, 0, 0, '2019-08-01 22:25:07', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/3', NULL, 'Task Build design model for Olivier based on a web template ( Envato )'),
(61, 0, 0, '2019-08-01 22:32:19', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/5', NULL, 'Task Very Last wave of changes : Please make sure that IS will do everything before mid august'),
(62, 0, 0, '2019-08-01 22:32:19', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/5', NULL, 'Task Very Last wave of changes : Please make sure that IS will do everything before mid august'),
(63, 0, 0, '2019-08-01 22:32:19', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/5', NULL, 'Task Very Last wave of changes : Please make sure that IS will do everything before mid august'),
(64, 0, 0, '2019-08-01 22:32:19', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/5', NULL, 'Task Very Last wave of changes : Please make sure that IS will do everything before mid august'),
(65, 0, 0, '2019-08-01 22:32:57', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/6', NULL, 'Task Project Launch Communication'),
(66, 0, 0, '2019-08-01 22:32:57', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/6', NULL, 'Task Project Launch Communication'),
(67, 0, 0, '2019-08-01 22:32:57', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/6', NULL, 'Task Project Launch Communication'),
(68, 0, 0, '2019-08-01 22:32:57', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/6', NULL, 'Task Project Launch Communication'),
(69, 0, 0, '2019-08-01 22:34:12', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/7', NULL, 'Task Setting Up AD groups'),
(70, 0, 0, '2019-08-01 22:34:12', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/7', NULL, 'Task Setting Up AD groups'),
(71, 0, 0, '2019-08-01 22:34:12', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/7', NULL, 'Task Setting Up AD groups'),
(72, 0, 0, '2019-08-01 22:34:13', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/7', NULL, 'Task Setting Up AD groups'),
(73, 0, 0, '2019-08-01 22:34:45', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/8', NULL, 'Task Setting Up IAM Process'),
(74, 0, 0, '2019-08-01 22:34:45', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/8', NULL, 'Task Setting Up IAM Process'),
(75, 0, 0, '2019-08-01 22:34:45', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/8', NULL, 'Task Setting Up IAM Process'),
(76, 0, 0, '2019-08-01 22:34:45', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/8', NULL, 'Task Setting Up IAM Process'),
(77, 0, 0, '2019-08-01 22:35:53', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/9', NULL, 'Task Script to interface Ipeople & Ad groups '),
(78, 0, 0, '2019-08-01 22:35:53', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/9', NULL, 'Task Script to interface Ipeople & Ad groups '),
(79, 0, 0, '2019-08-01 22:35:53', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/9', NULL, 'Task Script to interface Ipeople & Ad groups '),
(80, 0, 0, '2019-08-01 22:35:53', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/9', NULL, 'Task Script to interface Ipeople & Ad groups '),
(81, 0, 0, '2019-08-01 22:37:14', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/9', NULL, 'Task Script to interface Ipeople & Ad groups '),
(82, 0, 0, '2019-08-01 22:37:14', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/9', NULL, 'Task Script to interface Ipeople & Ad groups '),
(83, 0, 0, '2019-08-01 22:37:14', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/9', NULL, 'Task Script to interface Ipeople & Ad groups '),
(84, 0, 0, '2019-08-01 22:37:15', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/9', NULL, 'Task Script to interface Ipeople & Ad groups '),
(85, 0, 0, '2019-08-01 22:38:33', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/10', NULL, 'Task Setting up SharePoint Security Groups'),
(86, 0, 0, '2019-08-01 22:38:33', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/10', NULL, 'Task Setting up SharePoint Security Groups'),
(87, 0, 0, '2019-08-01 22:38:33', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/10', NULL, 'Task Setting up SharePoint Security Groups'),
(88, 0, 0, '2019-08-01 22:38:34', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/10', NULL, 'Task Setting up SharePoint Security Groups'),
(89, 0, 0, '2019-08-01 22:47:50', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/12', NULL, 'Task Helping the CI department into setting up the CI plateform PH1'),
(90, 0, 0, '2019-08-01 22:47:50', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/12', NULL, 'Task Helping the CI department into setting up the CI plateform PH1'),
(91, 0, 0, '2019-08-01 22:47:50', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/12', NULL, 'Task Helping the CI department into setting up the CI plateform PH1'),
(92, 0, 0, '2019-08-01 22:47:51', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/12', NULL, 'Task Helping the CI department into setting up the CI plateform PH1'),
(93, 0, 0, '2019-08-01 23:09:30', 'assign_to_you_the_project', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/31', NULL, 'R&D PMO'),
(94, 0, 0, '2019-08-01 23:09:31', 'assign_to_you_the_project', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/31', NULL, 'R&D PMO'),
(95, 0, 0, '2019-08-01 23:09:52', 'assign_to_you_the_tasks', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/13', NULL, 'Task Ensure that the last bugs are corrected. Sign off with Ineat.'),
(96, 0, 0, '2019-08-01 23:09:53', 'assign_to_you_the_tasks', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/13', NULL, 'Task Ensure that the last bugs are corrected. Sign off with Ineat.'),
(97, 0, 0, '2019-08-01 23:10:51', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/1', NULL, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )'),
(98, 0, 0, '2019-08-01 23:10:52', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/1', NULL, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )'),
(99, 0, 0, '2019-08-01 23:10:57', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/1', NULL, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )'),
(100, 0, 0, '2019-08-01 23:10:57', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/1', NULL, 'New button not displayed on Internet Explorer ( Meetings / Navigation Lists )'),
(101, 0, 0, '2019-08-01 23:11:06', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/2', NULL, 'External users need to access with externals email'),
(102, 0, 0, '2019-08-01 23:11:06', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/2', NULL, 'External users need to access with externals email'),
(103, 0, 0, '2019-08-01 23:14:40', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(104, 0, 0, '2019-08-01 23:14:40', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(105, 0, 0, '2019-08-01 23:14:40', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(106, 0, 0, '2019-08-01 23:14:40', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(107, 0, 0, '2019-08-01 23:16:46', 'not_uploaded_attachment', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/13/3', NULL, 'Task Ensure that the last bugs are corrected. Sign off with Ineat.'),
(108, 0, 0, '2019-08-01 23:16:46', 'not_uploaded_attachment', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/13/3', NULL, 'Task Ensure that the last bugs are corrected. Sign off with Ineat.'),
(109, 0, 0, '2019-08-01 23:20:10', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/14', NULL, 'Task Build Landing page for Beatrice Hacher'),
(110, 0, 0, '2019-08-01 23:20:11', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/14', NULL, 'Task Build Landing page for Beatrice Hacher'),
(111, 0, 0, '2019-08-01 23:20:11', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/14', NULL, 'Task Build Landing page for Beatrice Hacher'),
(112, 0, 0, '2019-08-01 23:20:11', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/14', NULL, 'Task Build Landing page for Beatrice Hacher'),
(113, 0, 0, '2019-08-01 23:23:18', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/2', NULL, 'External users cant access with externals email'),
(114, 0, 0, '2019-08-01 23:23:18', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/2', NULL, 'External users cant access with externals email'),
(115, 0, 0, '2019-08-01 23:25:09', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(116, 0, 0, '2019-08-01 23:25:10', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(117, 0, 0, '2019-08-01 23:25:10', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(118, 0, 0, '2019-08-01 23:25:10', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(119, 0, 0, '2019-08-01 23:25:27', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(120, 0, 0, '2019-08-01 23:25:27', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(121, 0, 0, '2019-08-01 23:25:27', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(122, 0, 0, '2019-08-01 23:25:27', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(123, 0, 0, '2019-08-01 23:26:49', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(124, 0, 0, '2019-08-01 23:26:50', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(125, 0, 0, '2019-08-01 23:26:50', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(126, 0, 0, '2019-08-01 23:26:50', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(127, 0, 0, '2019-08-01 23:27:09', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(128, 0, 0, '2019-08-01 23:27:09', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(129, 0, 0, '2019-08-01 23:27:09', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(130, 0, 0, '2019-08-01 23:27:09', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(131, 0, 0, '2019-08-01 23:29:04', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problème d’Anne concernant la difficulté des team members.'),
(132, 0, 0, '2019-08-01 23:29:04', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problème d’Anne concernant la difficulté des team members.'),
(133, 0, 0, '2019-08-01 23:29:04', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problème d’Anne concernant la difficulté des team members.'),
(134, 0, 0, '2019-08-01 23:29:04', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problème d’Anne concernant la difficulté des team members.'),
(135, 0, 0, '2019-08-01 23:29:28', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problème d’Anne concernant la difficulté des team members'),
(136, 0, 0, '2019-08-01 23:29:28', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problème d’Anne concernant la difficulté des team members'),
(137, 0, 0, '2019-08-01 23:29:28', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problème d’Anne concernant la difficulté des team members'),
(138, 0, 0, '2019-08-01 23:29:29', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problème d’Anne concernant la difficulté des team members'),
(139, 0, 0, '2019-08-01 23:30:46', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(140, 0, 0, '2019-08-01 23:30:46', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(141, 0, 0, '2019-08-01 23:30:46', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(142, 0, 0, '2019-08-01 23:30:47', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(143, 0, 0, '2019-08-01 23:30:59', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(144, 0, 0, '2019-08-01 23:30:59', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(145, 0, 0, '2019-08-01 23:30:59', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(146, 0, 0, '2019-08-01 23:30:59', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(147, 0, 0, '2019-08-01 23:31:20', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(148, 0, 0, '2019-08-01 23:31:20', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(149, 0, 0, '2019-08-01 23:31:20', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(150, 0, 0, '2019-08-01 23:31:20', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(151, 0, 0, '2019-08-01 23:31:54', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(152, 0, 0, '2019-08-01 23:31:54', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(153, 0, 0, '2019-08-01 23:31:54', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(154, 0, 0, '2019-08-01 23:31:54', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(155, 0, 0, '2019-08-01 23:32:14', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(156, 0, 0, '2019-08-01 23:32:14', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(157, 0, 0, '2019-08-01 23:32:14', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(158, 0, 0, '2019-08-01 23:32:14', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(159, 0, 0, '2019-08-01 23:32:42', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(160, 0, 0, '2019-08-01 23:32:42', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(161, 0, 0, '2019-08-01 23:32:42', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(162, 0, 0, '2019-08-01 23:32:43', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Probléme d\'affichage sur Google Chrome ( Julie Hutchison site )'),
(163, 0, 0, '2019-08-02 00:35:58', 'assign_to_you_the_project', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/74', NULL, 'Patient Centricity Update'),
(164, 0, 0, '2019-08-02 00:37:35', 'not_uploaded_attachment', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/74/4', NULL, 'Projects Patient Centricity Update'),
(165, 0, 0, '2019-08-02 00:43:20', 'assign_to_you_the_project', 1, 3, 'Marco Delpiano', 'admin/projects/project_details/75', NULL, 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )'),
(166, 0, 0, '2019-08-02 00:43:20', 'assign_to_you_the_project', 1, 4, 'Marco Delpiano', 'admin/projects/project_details/75', NULL, 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )'),
(167, 0, 0, '2019-08-02 00:43:20', 'assign_to_you_the_project', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/75', NULL, 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )'),
(168, 0, 0, '2019-08-02 00:43:20', 'assign_to_you_the_project', 1, 6, 'Marco Delpiano', 'admin/projects/project_details/75', NULL, 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )'),
(169, 0, 0, '2019-08-02 00:58:06', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/15', NULL, 'Task US & Canada pages updates'),
(170, 0, 0, '2019-08-02 00:58:06', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/15', NULL, 'Task US & Canada pages updates'),
(171, 0, 0, '2019-08-02 00:58:06', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/15', NULL, 'Task US & Canada pages updates'),
(172, 0, 0, '2019-08-02 00:58:06', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/15', NULL, 'Task US & Canada pages updates'),
(173, 0, 0, '2019-08-02 11:30:24', 'not_task_update', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/10', NULL, 'Task Setting up SharePoint Security Groups'),
(174, 0, 0, '2019-08-02 11:30:24', 'not_task_update', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/10', NULL, 'Task Setting up SharePoint Security Groups'),
(175, 0, 0, '2019-08-02 11:30:25', 'not_task_update', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/10', NULL, 'Task Setting up SharePoint Security Groups'),
(176, 0, 0, '2019-08-02 11:30:25', 'not_task_update', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/10', NULL, 'Task Setting up SharePoint Security Groups'),
(177, 0, 0, '2019-08-13 10:57:17', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(178, 0, 0, '2019-08-13 10:57:17', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(179, 0, 0, '2019-08-13 10:57:17', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(180, 0, 0, '2019-08-13 10:57:17', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Bug affichage menu document libraries & list ( Détécté avec Zied ) ( rectangle blanc )'),
(181, 0, 0, '2019-08-13 11:03:53', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(182, 0, 0, '2019-08-13 11:03:53', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(183, 0, 0, '2019-08-13 11:03:53', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(184, 0, 0, '2019-08-13 11:03:53', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/7', NULL, 'When nothing is specified in the URL field of an a Upcoming event item, then there should be no link <a></a>'),
(185, 0, 0, '2019-08-13 13:50:16', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/10', NULL, 'Upcoming event not all showing on floriane site ( to take actions to correct on all sites & model)'),
(186, 0, 0, '2019-08-13 13:50:16', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/10', NULL, 'Upcoming event not all showing on floriane site ( to take actions to correct on all sites & model)'),
(187, 0, 0, '2019-08-13 13:50:16', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/10', NULL, 'Upcoming event not all showing on floriane site ( to take actions to correct on all sites & model)'),
(188, 0, 0, '2019-08-13 13:50:16', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/10', NULL, 'Upcoming event not all showing on floriane site ( to take actions to correct on all sites & model)'),
(189, 0, 0, '2019-08-13 13:55:10', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(190, 0, 0, '2019-08-13 13:55:10', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(191, 0, 0, '2019-08-13 13:55:10', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(192, 0, 0, '2019-08-13 13:55:10', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events Widget not always displaying all the events of the day'),
(193, 0, 0, '2019-08-13 13:56:51', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/2', NULL, 'External users cant access with externals email'),
(194, 0, 0, '2019-08-13 13:56:51', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/2', NULL, 'External users cant access with externals email'),
(195, 0, 0, '2019-08-13 16:37:28', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problem reported by Anne concerning the Team Member Access Group'),
(196, 0, 0, '2019-08-13 16:37:29', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problem reported by Anne concerning the Team Member Access Group'),
(197, 0, 0, '2019-08-13 16:37:29', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problem reported by Anne concerning the Team Member Access Group'),
(198, 0, 0, '2019-08-13 16:37:29', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/8', NULL, 'Problem reported by Anne concerning the Team Member Access Group'),
(199, 0, 0, '2019-08-13 16:38:22', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Visual Bug on document library & list ( White frame )'),
(200, 0, 0, '2019-08-13 16:38:22', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Visual Bug on document library & list ( White frame )'),
(201, 0, 0, '2019-08-13 16:38:22', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Visual Bug on document library & list ( White frame )'),
(202, 0, 0, '2019-08-13 16:38:22', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Visual Bug on document library & list ( White frame )'),
(203, 0, 0, '2019-08-13 16:38:34', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Visual Bug on document libraries & list ( White frame )'),
(204, 0, 0, '2019-08-13 16:38:34', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Visual Bug on document libraries & list ( White frame )'),
(205, 0, 0, '2019-08-13 16:38:34', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Visual Bug on document libraries & list ( White frame )'),
(206, 0, 0, '2019-08-13 16:38:34', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/9', NULL, 'Visual Bug on document libraries & list ( White frame )'),
(207, 0, 0, '2019-08-13 16:40:01', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events widget not always displaying all the events of the day'),
(208, 0, 0, '2019-08-13 16:40:01', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events widget not always displaying all the events of the day'),
(209, 0, 0, '2019-08-13 16:40:02', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events widget not always displaying all the events of the day'),
(210, 0, 0, '2019-08-13 16:40:03', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/4', NULL, 'Upcoming Events widget not always displaying all the events of the day'),
(211, 0, 0, '2019-08-13 16:41:20', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Visual bug on google chrome ( Julie Hutchison site )'),
(212, 0, 0, '2019-08-13 16:41:21', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Visual bug on google chrome ( Julie Hutchison site )'),
(213, 0, 0, '2019-08-13 16:41:21', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Visual bug on google chrome ( Julie Hutchison site )'),
(214, 0, 0, '2019-08-13 16:41:21', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/3', NULL, 'Visual bug on google chrome ( Julie Hutchison site )'),
(215, 0, 0, '2019-08-13 17:42:00', 'assign_to_you_the_bugs', 1, 3, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(216, 0, 0, '2019-08-13 17:42:00', 'assign_to_you_the_bugs', 1, 4, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(217, 0, 0, '2019-08-13 17:42:00', 'assign_to_you_the_bugs', 1, 5, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(218, 0, 0, '2019-08-13 17:42:00', 'assign_to_you_the_bugs', 1, 6, 'Marco Delpiano', 'admin/bugs/view_bug_details/5', NULL, 'Visitors group not providing access to website'),
(219, 0, 0, '2019-08-16 19:37:16', 'not_uploaded_attachment', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/74/4', NULL, 'Projects Patient Centricity Update'),
(220, 0, 0, '2019-08-28 17:11:20', 'not_changed_status', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/3', NULL, 'Status : not_started to completed'),
(221, 0, 0, '2019-08-28 17:11:20', 'not_changed_status', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/3', NULL, 'Status : not_started to completed'),
(222, 0, 0, '2019-08-28 17:11:20', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/3', NULL, 'Status : not_started to completed'),
(223, 0, 0, '2019-08-28 17:11:20', 'not_changed_status', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/3', NULL, 'Status : not_started to completed'),
(224, 0, 0, '2019-08-28 17:11:44', 'not_changed_status', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/14', NULL, 'Status : not_started to completed'),
(225, 0, 0, '2019-08-28 17:11:44', 'not_changed_status', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/14', NULL, 'Status : not_started to completed'),
(226, 0, 0, '2019-08-28 17:11:44', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/14', NULL, 'Status : not_started to completed'),
(227, 0, 0, '2019-08-28 17:11:44', 'not_changed_status', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/14', NULL, 'Status : not_started to completed'),
(228, 0, 0, '2019-08-28 17:14:26', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/projects/project_details/74', NULL, 'Status : Started to In Progress'),
(229, 0, 0, '2019-08-28 19:18:17', 'not_changed_status', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/15', NULL, 'Status : not_started to in_progress'),
(230, 0, 0, '2019-08-28 19:18:17', 'not_changed_status', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/15', NULL, 'Status : not_started to in_progress'),
(231, 0, 0, '2019-08-28 19:18:17', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/15', NULL, 'Status : not_started to in_progress'),
(232, 0, 0, '2019-08-28 19:18:17', 'not_changed_status', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/15', NULL, 'Status : not_started to in_progress'),
(233, 0, 0, '2019-08-28 19:18:27', 'not_changed_status', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/13', NULL, 'Status : not_started to in_progress'),
(234, 0, 0, '2019-08-28 19:18:27', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/13', NULL, 'Status : not_started to in_progress'),
(235, 0, 0, '2019-08-28 19:19:28', 'not_changed_status', 1, 3, 'Marco Delpiano', 'admin/tasks/view_task_details/5', NULL, 'Status : not_started to in_progress'),
(236, 0, 0, '2019-08-28 19:19:28', 'not_changed_status', 1, 4, 'Marco Delpiano', 'admin/tasks/view_task_details/5', NULL, 'Status : not_started to in_progress'),
(237, 0, 0, '2019-08-28 19:19:28', 'not_changed_status', 1, 5, 'Marco Delpiano', 'admin/tasks/view_task_details/5', NULL, 'Status : not_started to in_progress'),
(238, 0, 0, '2019-08-28 19:19:28', 'not_changed_status', 1, 6, 'Marco Delpiano', 'admin/tasks/view_task_details/5', NULL, 'Status : not_started to in_progress'),
(239, 0, 0, '2019-12-17 20:21:24', 'not_changed_status', 8, 1, 'Adminko', 'admin/projects/project_details/74', NULL, 'Status : In Progress to In Progress'),
(240, 0, 0, '2019-12-23 19:32:09', 'not_changed_status', 8, 1, 'Adminko', 'admin/tasks/view_task_details/1', NULL, 'Status : completed to in_progress'),
(241, 0, 0, '2019-12-24 00:30:07', 'not_timer_start', 8, 1, 'Adminko', 'admin/tasks/view_task_details/1/5', NULL, 'Task Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod'),
(242, 0, 0, '2019-12-24 00:30:15', 'not_timer_stop', 8, 1, 'Adminko', 'admin/tasks/view_task_details/1/5', NULL, 'Task Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod'),
(243, 0, 0, '2020-01-05 19:44:21', 'assign_to_you_the_project', 8, 1, 'Adminko', 'admin/projects/project_details/76', NULL, 'rahul'),
(244, 0, 0, '2020-01-05 19:46:26', 'assign_to_you_the_project', 8, 1, 'Adminko', 'admin/projects/project_details/77', NULL, 'rahul'),
(245, 0, 0, '2020-01-07 00:05:54', 'assign_to_you_the_project', 8, 1, 'Adminko', 'admin/projects/project_details/77', NULL, 'rahul'),
(246, 0, 0, '2020-01-07 01:23:39', 'assign_to_you_the_project', 8, 1, 'Adminko', 'admin/projects/project_details/75', NULL, 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )'),
(247, 0, 0, '2020-01-07 01:23:49', 'assign_to_you_the_project', 8, 1, 'Adminko', 'admin/projects/project_details/75', NULL, 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )'),
(248, 0, 0, '2020-01-07 19:50:56', 'not_task_update', 8, 1, 'Adminko', 'admin/tasks/view_task_details/17', NULL, 'Task new_task'),
(249, 0, 0, '2020-01-07 19:52:09', 'not_task_update', 8, 1, 'Adminko', 'admin/tasks/view_task_details/18', NULL, 'Task new_task'),
(250, 0, 0, '2020-01-07 19:53:23', 'not_task_update', 8, 1, 'Adminko', 'admin/tasks/view_task_details/19', NULL, 'Task 54645'),
(251, 0, 0, '2020-01-07 19:54:52', 'not_task_update', 8, 1, 'Adminko', 'admin/tasks/view_task_details/20', NULL, 'Task 54645'),
(252, 0, 0, '2020-01-07 19:55:59', 'not_task_update', 8, 1, 'Adminko', 'admin/tasks/view_task_details/21', NULL, 'Task 54645'),
(253, 0, 0, '2020-01-07 19:59:38', 'not_task_update', 8, 1, 'Adminko', 'admin/tasks/view_task_details/22', NULL, 'Task 54645'),
(254, 0, 0, '2020-01-19 20:04:09', 'not_new_notice', 0, 1, NULL, 'admin/announcements/view_announcements_details/3', 'bullhorn', 'test'),
(255, 0, 0, '2020-01-19 20:04:09', 'not_new_notice', 0, 10, NULL, 'client/announcements/view_announcements_details/3', 'bullhorn', 'test'),
(256, 0, 0, '2020-01-19 20:04:09', 'not_new_notice', 0, 12, NULL, 'admin/announcements/view_announcements_details/3', 'bullhorn', 'test'),
(257, 0, 0, '2020-01-23 19:18:51', 'not_expense_saved', 0, 1, NULL, 'admin/transactions/view_details/1', 'building-o', 'Accounts: Test Account Amount:  2.151,00'),
(258, 0, 0, '2020-01-24 01:49:36', 'not_expense_saved', 0, 1, NULL, 'admin/transactions/view_details/5', 'building-o', 'Accounts: shubham Amount:  1.550,00'),
(259, 0, 0, '2020-01-24 18:15:32', 'not_expense_saved', 0, 1, NULL, 'admin/transactions/view_details/6', 'building-o', 'Accounts: rahu Amount:  654.654,00'),
(260, 0, 0, '2020-01-24 18:40:08', 'not_expense_saved', 0, 1, NULL, 'admin/transactions/view_details/7', 'building-o', 'Accounts: shubham Amount:  789,00'),
(261, 0, 0, '2020-01-24 19:05:45', 'not_expense_saved', 0, 1, NULL, 'admin/transactions/view_details/8', 'building-o', 'Accounts: shubham Amount:  12.345,00'),
(262, 0, 0, '2020-01-24 19:24:33', 'not_overtime_request_reject', 0, 13, NULL, 'admin/utilities/view_overtime/1', 'clock-o', 'By Adminko'),
(263, 0, 0, '2020-01-26 18:03:00', 'not_deposit_saved', 0, 1, NULL, 'admin/transactions/view_details/9', 'building-o', 'Accounts shubham Amount  47.859,00'),
(264, 0, 0, '2020-01-27 00:50:18', 'not_deposit_saved', 0, 1, NULL, 'admin/transactions/view_details/10', 'building-o', 'Accounts shubham Amount  240,00'),
(265, 1, 0, '2020-02-05 19:15:27', 'assign_to_you_the_tasks', 8, 14, 'Adminko', 'admin/tasks/view_task_details/1', NULL, 'Task Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod'),
(266, 0, 0, '2020-02-05 19:16:02', 'assign_to_you_the_tasks', 8, 15, 'Adminko', 'admin/tasks/view_task_details/1', NULL, 'Task Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod'),
(267, 1, 0, '2020-02-05 19:16:02', 'assign_to_you_the_tasks', 8, 14, 'Adminko', 'admin/tasks/view_task_details/1', NULL, 'Task Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod'),
(268, 0, 0, '2020-02-05 19:46:31', 'not_overtime_request_approve', 0, 13, NULL, 'admin/utilities/view_overtime/1', 'clock-o', 'By Adminko'),
(269, 0, 0, '2020-02-05 19:46:35', 'not_overtime_request_reject', 0, 13, NULL, 'admin/utilities/view_overtime/1', 'clock-o', 'By Adminko'),
(270, 0, 0, '2020-02-05 22:31:36', 'not_changed_status', 8, 15, 'Adminko', 'admin/tasks/view_task_details/9', NULL, 'Status : not_started to waiting_for_someone'),
(271, 1, 0, '2020-02-05 22:31:36', 'not_changed_status', 8, 14, 'Adminko', 'admin/tasks/view_task_details/9', NULL, 'Status : not_started to waiting_for_someone'),
(272, 1, 0, '2020-02-05 22:36:27', 'assign_to_you_the_tasks', 8, 14, 'Adminko', 'admin/tasks/view_task_details/8', NULL, 'Task Setting Up IAM Process');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offence_category`
--

CREATE TABLE `tbl_offence_category` (
  `offence_id` int(2) NOT NULL,
  `offence_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online_payment`
--

CREATE TABLE `tbl_online_payment` (
  `online_payment_id` int(11) NOT NULL,
  `gateway_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `icon` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_online_payment`
--

INSERT INTO `tbl_online_payment` (`online_payment_id`, `gateway_name`, `icon`) VALUES
(1, 'paypal', 'paypal.png'),
(2, 'Stripe', 'stripe.jpg'),
(3, '2checkout', '2checkout.jpg'),
(4, 'Authorize.net', 'Authorizenet.png'),
(5, 'CCAvenue', 'CCAvenue.jpg'),
(6, 'Braintree', 'Braintree.png'),
(7, 'Mollie', 'ideal_mollie.png'),
(8, 'PayUmoney', 'payumoney.jpg'),
(9, 'Razorpay', 'razorpay.png'),
(10, 'TapPayment', 'tappayment.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opportunities`
--

CREATE TABLE `tbl_opportunities` (
  `opportunities_id` int(11) NOT NULL,
  `opportunity_name` varchar(100) NOT NULL,
  `stages` varchar(20) NOT NULL,
  `probability` varchar(20) NOT NULL,
  `close_date` varchar(20) NOT NULL,
  `opportunities_state_reason_id` int(2) NOT NULL,
  `expected_revenue` decimal(10,2) NOT NULL,
  `new_link` varchar(20) NOT NULL,
  `next_action` varchar(100) NOT NULL,
  `next_action_date` varchar(20) NOT NULL,
  `notes` text DEFAULT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opportunities_state_reason`
--

CREATE TABLE `tbl_opportunities_state_reason` (
  `opportunities_state_reason_id` int(2) NOT NULL,
  `opportunities_state` varchar(20) NOT NULL,
  `opportunities_state_reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outgoing_emails`
--

CREATE TABLE `tbl_outgoing_emails` (
  `id` int(11) UNSIGNED NOT NULL,
  `sent_to` varchar(64) DEFAULT NULL,
  `sent_from` varchar(64) DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `date_sent` timestamp NULL DEFAULT current_timestamp(),
  `delivered` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_outgoing_emails`
--

INSERT INTO `tbl_outgoing_emails` (`id`, `sent_to`, `sent_from`, `subject`, `message`, `date_sent`, `delivered`) VALUES
(1, 'hr@hotmail.fr', 'admin@admin.com OURSELF', '[ OURSELF ] Activate Account', '<p>Welcome to OURSELF!</p>\r\n\r\n<p>Thanks for joining OURSELF. We listed your sign in details below, make sure you keep them safe.</p>\r\n\r\n<p>To verify your email address, please follow this link:<br />\r\n<big><strong><a href=\"https://web-nostromo.com/BIA/login/activate/2/85f41fdc0366935f0e0bf1c9b6157e03\">Finish your registration...</a></strong></big><br />\r\nLink doesn&#39;t work? Copy the following link to your browser address bar:<br />\r\n<a href=\"https://web-nostromo.com/BIA/login/activate/2/85f41fdc0366935f0e0bf1c9b6157e03\">https://web-nostromo.com/BIA/login/activate/2/85f41fdc0366935f0e0bf1c9b6157e03</a></p>\r\n\r\n<p><br />\r\n<br />\r\nPlease verify your email within 48 hours, otherwise your registration will become invalid and you will have to register again.<br />\r\n<br />\r\n<br />\r\nYour username: root<br />\r\nYour email address: hr@hotmail.fr<br />\r\nYour password: poupou22<br />\r\n<br />\r\nHave fun!<br />\r\nThe OURSELF Team</p>\r\n', '2019-07-23 19:05:07', 0),
(2, 'admin@admin.com', 'admin@admin.com OURSELF', '[ OURSELF ] The Marco Delpiano() Just clock in', '<p>Hi there,</p>\r\n\r\n<p>TheÂ <strong>Marco Delpiano()</strong> justÂ Clock In by using The IP. The IP is:Â <strong>176.175.132.33</strong> and the time is: Â <strong>07.26.2019 13:00</strong><strong> </strong></p>\r\n\r\n<p>You can view this attendance by logging in to the portal using the link below.<br>\r\n<br>\r\n<big><strong><a href=\"https://web-nostromo.com/BIA/admin/attendance/time_history\">View Details</a></strong></big><br>\r\n<br>\r\n<br>\r\nRegards,<br>\r\n<br>\r\nTheÂ <strong>OURSELF</strong>Â Team</p>\r\n', '2019-07-26 10:00:52', 0),
(3, 'admin@admin.com', 'admin@admin.com OURSELF', '[ OURSELF ] The Marco Delpiano() Just clock Out', '<p>Hi there,</p>\r\n\r\n<p>TheÂ <strong>Marco Delpiano()</strong>Â justÂ Clock Out by using The IP. The IP is:Â <strong>176.175.132.33</strong>Â and the time is: Â <strong>07.26.2019 13:01</strong></p>\r\n\r\n<p>You can view this attendance by logging in to the portal using the link below.<br>\r\n<br>\r\n<big><strong><a href=\"https://web-nostromo.com/BIA/admin/attendance/time_history\">View Details</a></strong></big><br>\r\n<br>\r\n<br>\r\nRegards,<br>\r\n<br>\r\nTheÂ <strong>OURSELF</strong>Â Team</p>\r\n', '2019-07-26 10:01:01', 0),
(4, 'admin@admin.com', 'admin@admin.com OURSELF', 'Task updated', '<p>Hi there,</p>\r\n\r\n<p><strong>Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod</strong> has been updated by <strong>Marco Delpiano</strong>.</p>\r\n\r\n<p>You can view this Task by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"https://web-nostromo.com/BIA/admin/tasks/view_task_details/1\">View Task</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe OURSELF Team</p>\r\n', '2019-07-26 10:02:51', 0),
(5, 'admin@admin.com', 'admin@admin.com OURSELF', '[ OURSELF ] The Marco Delpiano() Just clock in', '<p>Hi there,</p>\r\n\r\n<p>TheÂ <strong>Marco Delpiano()</strong> justÂ Clock In by using The IP. The IP is:Â <strong>194.98.14.73</strong> and the time is: Â <strong>07.28.2019 22:45</strong><strong> </strong></p>\r\n\r\n<p>You can view this attendance by logging in to the portal using the link below.<br>\r\n<br>\r\n<big><strong><a href=\"http://web-nostromo.com/BIA/admin/attendance/time_history\">View Details</a></strong></big><br>\r\n<br>\r\n<br>\r\nRegards,<br>\r\n<br>\r\nTheÂ <strong>OURSELF</strong>Â Team</p>\r\n', '2019-07-28 19:45:06', 0),
(6, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Cabometyx GVP V2</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/72\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 19:58:52', 0),
(7, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> CI Plateform PH1 - PH2</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/68\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 19:59:01', 0),
(8, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Decapeptyl Prime</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/65\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 19:59:13', 0),
(9, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Decapeptyl Project Market Place</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/64\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 19:59:20', 0),
(10, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Digital R&D Book</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/62\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 19:59:29', 0),
(11, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Formulation Sharepoint</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/58\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 19:59:35', 0),
(12, 'jonathan.tornil-grasa@ipsen.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Formulation Sharepoint</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/58\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 19:59:35', 0),
(13, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Formulation Sharepoint</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/58\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 19:59:43', 0),
(14, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Global Public Affairs</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/54\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:05:11', 0),
(15, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> IT News Channel</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/43\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:05:17', 0),
(16, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> LEAP - Ipsen Launch Excellence</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/42\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:05:22', 0),
(17, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> One stop Shop R&D</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/41\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:05:29', 0),
(18, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> OnePage SharePoint VIP Self Service</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/40\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:05:43', 0),
(19, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> R&D PMO</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/31\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:06:07', 0),
(20, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> RA Team Site</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/30\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:06:16', 0),
(21, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Refonte Intranet 2020</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/28\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:06:23', 0),
(22, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> SCCO Digitalization</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/26\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:06:31', 0),
(23, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Self Service V2</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/24\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:06:38', 0),
(24, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> SharePoint PMO</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/18\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:06:46', 0),
(25, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> SharePoint R&D Information</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/14\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:07:07', 0),
(26, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> SharePoint Projects Supported By C2S ( Sarah / Melissa )</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/16\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:07:20', 0),
(27, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> SharePoint WellBeing</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/13\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:07:29', 0),
(28, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Validation Website</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/9\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:07:40', 0),
(29, 'admin@admin.com', 'admin@admin.com OURSELF', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Visual Management for Managers (UK & Ireland)</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/8\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe OURSELF Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:07:48', 0),
(30, 'admin@admin.com', 'admin@admin.com Ipsen', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Visual Management HR UK</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/4\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe Ipsen Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:10:57', 0),
(31, 'admin@admin.com', 'admin@admin.com Ipsen', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Webfactory Dashboard SharePoint</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/1\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe Ipsen Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 20:11:06', 0),
(32, 'admin@admin.com', 'admin@admin.com Ipsen', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> BDP Group Process and Delivery</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/73\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe Ipsen Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 21:57:02', 0),
(33, 'admin@admin.com', 'admin@admin.com Ipsen', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Cabommunity</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/70\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe Ipsen Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 21:57:11', 0),
(34, 'admin@admin.com', 'admin@admin.com Ipsen', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> Decapeptyl Price & Access PaTH</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/66\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe Ipsen Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 21:57:23', 0),
(35, 'admin@admin.com', 'admin@admin.com Ipsen', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> DVP Cabometyx</strong> has been assigned by <strong>Marco Delpiano </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"http://web-nostromo.com/BIA/admin/projects/project_details/60\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe Ipsen Team</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-07-28 21:57:40', 0),
(36, '', 'smtp@admin.com Ipsen', 'Project Completed', '<p>Hi <strong>Purchasing</strong>,</p>\r\n\r\n<p>Project : <strong>Purchasing Project Tool</strong> &nbsp;has been completed.<br />\r\nYou can view the project by logging into your portal Account:<br />\r\n<big><a href=\"https://web-nostromo.com/BIA/admin/projects/project_details/35\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe Ipsen Team</p>\r\n', '2019-08-27 23:10:21', 0),
(37, NULL, 'info@greenusys.com Tester', 'Payslip generated', '<p>Hello&nbsp;<strong>Jonathan Tornil Grasa</strong>,</p>\r\n\r\n<p>Your payslip generated for the month <strong>December  2017 .</strong></p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe Tester Team</p>\r\n', '2020-01-20 11:08:09', 0),
(38, NULL, 'info@greenusys.com Tester', 'Overtime Request', '<p>Hi there,</p>\r\n\r\n<p><strong>ravish beg</strong>&nbsp;&nbsp;to do an overtime.<br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe Tester Team</p>\r\n', '2020-01-24 11:00:14', 0),
(39, NULL, 'info@greenusys.com Tester', 'Overtime Request', '<p>Hi there,</p>\r\n\r\n<p><strong>ravish beg</strong>&nbsp;&nbsp;to do an overtime.<br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe Tester Team</p>\r\n', '2020-01-24 12:52:43', 0),
(40, NULL, 'info@greenusys.com Tester', 'Payslip generated', '<p>Hello&nbsp;<strong>Jonathan Tornil Grasa</strong>,</p>\r\n\r\n<p>Your payslip generated for the month <strong>January  2020 .</strong></p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe Tester Team</p>\r\n', '2020-02-04 06:41:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_overtime`
--

CREATE TABLE `tbl_overtime` (
  `overtime_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `overtime_date` date NOT NULL,
  `overtime_hours` varchar(20) NOT NULL,
  `notes` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_overtime`
--

INSERT INTO `tbl_overtime` (`overtime_id`, `user_id`, `overtime_date`, `overtime_hours`, `notes`, `status`) VALUES
(1, 13, '2020-01-25', '4:06', '1233', 'rejected'),
(2, 13, '2020-01-08', '2:06', 'fdgfdg', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `payments_id` int(11) NOT NULL,
  `invoices_id` int(11) NOT NULL,
  `trans_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `month_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `account_id` int(11) NOT NULL DEFAULT 0 COMMENT 'account_id means tracking deposit from which account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_methods`
--

CREATE TABLE `tbl_payment_methods` (
  `payment_methods_id` int(11) NOT NULL,
  `method_name` varchar(64) NOT NULL DEFAULT 'Paypal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment_methods`
--

INSERT INTO `tbl_payment_methods` (`payment_methods_id`, `method_name`) VALUES
(1, 'Online'),
(2, 'PayPal'),
(3, 'Payoneer'),
(4, 'Bank Transfer'),
(5, 'Cash '),
(6, 'NO'),
(7, 'NOa'),
(8, 'a'),
(9, 'by hand'),
(10, 'OKSSSS'),
(11, 'ass'),
(12, 'aaaaa'),
(13, 'asss'),
(14, 'ASE'),
(15, 'testing method');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penalty_category`
--

CREATE TABLE `tbl_penalty_category` (
  `penalty_id` int(2) NOT NULL,
  `penalty_type` varchar(100) NOT NULL,
  `fine_amount` int(11) NOT NULL,
  `penalty_days` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performance_apprisal`
--

CREATE TABLE `tbl_performance_apprisal` (
  `performance_appraisal_id` int(5) NOT NULL,
  `user_id` int(2) NOT NULL,
  `general_remarks` text NOT NULL,
  `appraisal_month` varchar(100) NOT NULL,
  `customer_experiece_management` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `marketing` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `management` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `administration` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `presentation_skill` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `quality_of_work` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `efficiency` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `integrity` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `professionalism` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `team_work` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `critical_thinking` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `conflict_management` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `attendance` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `ability_to_meed_deadline` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_performance_apprisal`
--

INSERT INTO `tbl_performance_apprisal` (`performance_appraisal_id`, `user_id`, `general_remarks`, `appraisal_month`, `customer_experiece_management`, `marketing`, `management`, `administration`, `presentation_skill`, `quality_of_work`, `efficiency`, `integrity`, `professionalism`, `team_work`, `critical_thinking`, `conflict_management`, `attendance`, `ability_to_meed_deadline`) VALUES
(1, 5, 'Test Remark', '2019-12', 1, 2, NULL, NULL, NULL, NULL, NULL, 2, 3, NULL, NULL, NULL, NULL, NULL),
(2, 3, 'good for nothing', '2020-01', 2, 1, 3, 3, 3, 3, 3, 2, 1, 2, 2, 2, 2, 2),
(3, 13, 'Again gud for nothing', '2020-02', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performance_indicator`
--

CREATE TABLE `tbl_performance_indicator` (
  `performance_indicator_id` int(5) NOT NULL,
  `designations_id` int(2) NOT NULL,
  `customer_experiece_management` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `marketing` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `management` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `administration` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `presentation_skill` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `quality_of_work` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `efficiency` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `integrity` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `professionalism` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `team_work` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `critical_thinking` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `conflict_management` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `attendance` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `ability_to_meed_deadline` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_performance_indicator`
--

INSERT INTO `tbl_performance_indicator` (`performance_indicator_id`, `designations_id`, `customer_experiece_management`, `marketing`, `management`, `administration`, `presentation_skill`, `quality_of_work`, `efficiency`, `integrity`, `professionalism`, `team_work`, `critical_thinking`, `conflict_management`, `attendance`, `ability_to_meed_deadline`) VALUES
(1, 3, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
(2, 1, 1, 1, 1, 2, 1, 2, 2, 2, 2, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinaction`
--

CREATE TABLE `tbl_pinaction` (
  `pinaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `module_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_priorities`
--

CREATE TABLE `tbl_priorities` (
  `priority` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_priorities`
--

INSERT INTO `tbl_priorities` (`priority`) VALUES
('High'),
('medium'),
('low');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_priority`
--

CREATE TABLE `tbl_priority` (
  `priority_id` int(11) NOT NULL,
  `priority` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_priority`
--

INSERT INTO `tbl_priority` (`priority_id`, `priority`) VALUES
(1, 'High'),
(2, 'Medium'),
(3, 'Low'),
(4, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_chat`
--

CREATE TABLE `tbl_private_chat` (
  `private_chat_id` int(11) NOT NULL,
  `chat_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_private_chat`
--

INSERT INTO `tbl_private_chat` (`private_chat_id`, `chat_title`, `user_id`, `time`) VALUES
(2, '', 8, '2020-01-18 06:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_chat_messages`
--

CREATE TABLE `tbl_private_chat_messages` (
  `private_chat_messages_id` int(11) NOT NULL,
  `private_chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `message_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `msg_category` int(10) NOT NULL DEFAULT 0 COMMENT '0=message;1=attatchment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_private_chat_messages`
--

INSERT INTO `tbl_private_chat_messages` (`private_chat_messages_id`, `private_chat_id`, `user_id`, `message`, `message_time`, `msg_category`) VALUES
(7, 1, 8, 'hey', '2019-11-07 06:57:45', 0),
(13, 1, 8, 'http://plazacrm.com/assets/uploads/file2019-11-06-22-58-46.php', '2019-11-07 09:58:46', 0),
(15, 1, 8, 'http://plazacrm.com/assets/uploads/file2019-11-06-23-19-02.php', '2019-11-07 10:19:02', 0),
(17, 1, 8, 'http://plazacrm.com/assets/uploads/file2019-11-07-00-59-36.jpg', '2019-11-07 11:59:36', 0),
(18, 1, 8, 'jkhjkhj', '2020-01-18 06:28:19', 0),
(19, 1, 8, 'jkkjljkl', '2020-01-18 06:28:23', 0),
(20, 1, 8, 'bhadu', '2020-01-18 06:28:28', 0),
(21, 1, 8, 'han bhadu', '2020-01-18 06:28:35', 0),
(22, 1, 8, 'tu bada bhadu', '2020-01-18 06:28:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_chat_users`
--

CREATE TABLE `tbl_private_chat_users` (
  `private_chat_users_id` int(11) NOT NULL,
  `private_chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `active` int(11) NOT NULL COMMENT '0 == minimize chat,1 == open chat and  2 == close chat ',
  `unread` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0 COMMENT 'keep last message id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_private_chat_users`
--

INSERT INTO `tbl_private_chat_users` (`private_chat_users_id`, `private_chat_id`, `user_id`, `to_user_id`, `active`, `unread`, `title`, `deleted`) VALUES
(2, 1, 8, 1, 2, 0, ' <strong>Raz0rke</strong>', 16),
(3, 2, 8, 10, 2, 0, ' <strong>ali</strong>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `client_id` text DEFAULT NULL,
  `progress` varchar(50) NOT NULL,
  `calculate_progress` varchar(50) DEFAULT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT 0,
  `project_cost` decimal(18,2) NOT NULL DEFAULT 0.00,
  `demo_url` varchar(100) NOT NULL,
  `project_status` varchar(20) NOT NULL,
  `description` text DEFAULT NULL,
  `notify_client` enum('Yes','No') NOT NULL,
  `timer_status` enum('on','off') DEFAULT NULL,
  `timer_started_by` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `logged_time` int(11) DEFAULT NULL,
  `permission` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hourly_rate` varchar(200) DEFAULT NULL,
  `fixed_rate` varchar(200) DEFAULT NULL,
  `project_settings` text DEFAULT NULL,
  `with_tasks` enum('yes','no') NOT NULL DEFAULT 'no',
  `estimate_hours` varchar(50) DEFAULT NULL,
  `billing_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`project_id`, `project_name`, `client_id`, `progress`, `calculate_progress`, `start_date`, `end_date`, `alert_overdue`, `project_cost`, `demo_url`, `project_status`, `description`, `notify_client`, `timer_status`, `timer_started_by`, `start_time`, `logged_time`, `permission`, `notes`, `created_time`, `hourly_rate`, `fixed_rate`, `project_settings`, `with_tasks`, `estimate_hours`, `billing_type`) VALUES
(2, 'Visual Management Model', '10', '0', NULL, '2018-03-01', '2018-09-30', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', 'off', NULL, 0, 1580889517, '{\"1\":[\"view\"]}', NULL, '2020-02-05 07:58:37', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(4, 'Visual Management Techops HR UK', '2', '0', NULL, '2018-11-01', '2019-06-01', 0, '0.00', 'http:// text.com', 'in_progress', '<a href=\"https://ent.box.com/s/l2f70q9aastmazzr1hpta7j91o25x10y\" target=\"_blank\" xss=\"removed\">https://ent.box.com/s/l2f70q9aastmazzr1hpta7j91o25x10y</a>', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-01 19:30:25', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(6, 'Visual Management HR RECRU', '2', '100', NULL, '2018-04-01', '2018-11-15', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"],\"3\":[\"view\"]}', NULL, '2019-08-27 22:50:54', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(9, 'Validation Website', '6', '0', NULL, '2019-01-01', '2020-01-01', 0, '0.00', 'http:// text.com', 'started', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-01 05:32:35', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(11, 'Somatuline Real World Evidence', '1', '100', NULL, '2018-12-01', '2019-02-28', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 11:25:37', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(14, 'SharePoint R&D Information', '6', '0', NULL, '2019-06-01', '2019-10-01', 0, '0.00', 'http:// text.com', 'started', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-07-31 07:46:54', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(16, 'SharePoint Projects Supported By C2S ( Sarah / Melissa ) - Not a Project', '3', '0', NULL, '2019-01-01', '2019-12-31', 0, '0.00', 'http:// text.com', 'in_progress', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-07-31 07:31:18', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(18, 'SharePoint PMO', '3', '100', NULL, '1969-12-31', '2019-12-31', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-07-31 06:38:39', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(20, 'Sharepoint PED ENDO', '5', '100', NULL, '2018-07-31', '2018-08-31', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:45:18', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(21, 'SharePoint Australia', '1', '100', NULL, '2018-01-01', '2018-05-09', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:58:26', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(22, 'SharePoint Algeria', '1', '100', NULL, '1969-12-31', '2019-03-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"5\":[\"view\"]}', NULL, '2019-08-27 23:01:53', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(24, 'Self Service V2', '3', '100', NULL, '2018-11-30', '2020-01-02', 0, '0.00', 'http:// text.com', 'completed', '<span xss=removed>Self service custom system for support and application sharepoint team </span><br xss=removed><br xss=removed><a href=\"https://ent.box.com/s/llq3knl5dkhb5st7ybcla7a6dnko8o45\" target=\"_blank\" xss=removed>https://ent.box.com/s/llq3knl5dkhb5st7ybcla7a6dnko8o45</a><br>', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"],\"3\":[\"view\"],\"4\":[\"edit\",\"view\"],\"5\":[\"edit\",\"view\"],\"6\":[\"edit\",\"view\"]}', NULL, '2020-02-06 06:46:34', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(28, 'Refonte Intranet 2020', '7', '5', NULL, '2020-01-01', '2020-12-31', 0, '0.00', 'http:// text.com', 'in_progress', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"],\"3\":[\"view\"],\"4\":[\"edit\",\"view\"]}', NULL, '2019-07-31 07:30:45', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(29, 'RA community', '12', '100', NULL, '2018-05-01', '2018-08-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 23:01:16', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(30, 'RA Team Site', '1', '0', NULL, '1969-12-31', '2019-09-30', 0, '0.00', 'http:// text.com', 'in_progress', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-07-31 07:44:33', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(31, 'R&D PMO', '6', '0', NULL, '2019-01-01', '2019-06-01', 0, '0.00', 'https://ipsengroup.sharepoint.com/_layouts/15/sharepoint.aspx', 'in_progress', '<a href=\"https://ent.box.com/s/441xokn168rv6yxgr68gjwi3dk9qgo9u\" target=\"_blank\" xss=\"removed\">https://ent.box.com/s/441xokn168rv6yxgr68gjwi3dk9qgo9u</a>', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"],\"3\":[\"view\"],\"5\":[\"view\"]}', NULL, '2019-08-28 03:18:27', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(33, 'R&D COM\'unity Seminar', '1', '100', NULL, '2018-08-01', '2018-09-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:20:27', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(35, 'Purchasing Project Tool', '13', '100', NULL, '2017-12-01', '2018-03-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 23:10:21', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(36, 'Purchasing Planet', '1', '100', NULL, '2018-05-01', '2018-07-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 23:04:52', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(37, 'Publication HUB 2.0', '1', '100', NULL, '2019-03-01', '2019-06-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:18:41', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(39, 'Patient Centricity', '1', '100', NULL, '2018-05-01', '2018-08-20', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:21:46', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(40, 'OnePage SharePoint VIP Self Service', '1', '100', NULL, '2019-01-01', '2019-03-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:59:10', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(42, 'LEAP - Ipsen Launch Excellence', '1', '100', NULL, '2019-01-01', '2019-05-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:52:51', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(43, 'IT Portal', '3', '95', NULL, '2018-01-01', '2019-09-30', 0, '0.00', 'http:// text.com', 'in_progress', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-28 01:14:05', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(46, 'Ipsen Planet', '8', '0', NULL, '2014-01-01', '2021-01-01', 0, '0.00', 'http:// text.com', 'in_progress', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"],\"3\":[\"view\"],\"4\":[\"view\"]}', NULL, '2019-08-01 08:58:06', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(49, 'GMI Updates', '1', '100', NULL, '2018-09-01', '2018-09-30', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:16:44', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(50, 'GMA Tools & Services Evolutions', '1', '100', NULL, '1969-12-31', '2019-03-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:04:09', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(51, 'GMA Rare Diseases', '1', '100', NULL, '2018-02-01', '2018-05-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:00:58', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(52, 'GMA Neurology', '1', '100', NULL, '2018-04-01', '2018-10-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 21:58:28', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(54, 'Global Public Affairs', '1', '100', NULL, '2019-02-01', '2019-08-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-07-28 21:43:47', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(56, 'Global Medical Affairs V2', '1', '100', NULL, '2019-01-01', '2019-06-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 21:55:16', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(58, 'Formulation Sharepoint - Canceled', '1', '100', NULL, '1969-12-31', '2018-08-31', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 21:52:46', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(59, 'Engineering Toolbox', '1', '100', NULL, '2018-05-01', '2018-07-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 21:50:46', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(60, 'DVP Cabometyx', '1', '100', NULL, '1969-12-31', '2019-04-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-18 06:26:26', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(65, 'Decapeptyl Prime', '5', '10', NULL, '2018-08-27', '2019-10-31', 0, '0.00', 'http:// text.com', 'in_progress', '<p>https://ent.box.com/s/6x16qwuvgqmduipq1whutnaqxdj70ogs</p><p><br></p>', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-28 01:14:18', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(66, 'Decapeptyl Price & Access PaTH', '11', '100', NULL, '2018-05-01', '2018-09-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:55:59', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(68, 'CI Plateform PH1 - PH2', '4', '0', NULL, '2019-01-01', '2020-01-01', 0, '0.00', 'https://ipsengroup.sharepoint.com/sites/Custom/CabometyxRCCLandscape', 'in_progress', '<a href=\"https://ent.box.com/s/n95wr2s9hpd6db9er92hc5m76k06ud8i\" target=\"_blank\" xss=\"removed\">https://ent.box.com/s/n95wr2s9hpd6db9er92hc5m76k06ud8i</a><br>', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-28 03:14:51', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(70, 'Cabommunity', '5', '100', NULL, '2018-05-01', '2018-09-01', 0, '0.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:54:33', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(72, 'Cabometyx GVP V2', '1', '5', NULL, '2019-01-01', '2020-01-01', 0, '0.00', 'http:// text.com', 'started', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-14 01:14:24', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(73, 'BDP Group Process and Delivery', '6', '100', NULL, '2019-01-01', '2019-03-01', 0, '15.00', 'http:// text.com', 'completed', 'This is Description', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2019-08-27 22:54:15', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",null]', 'no', '0:00', 'fixed_rate'),
(74, 'Patient Centricity Update', '9', '80', NULL, '2019-08-01', '2019-09-01', 0, '0.00', 'https://ipsengroup.sharepoint.com/sites/root20/PatientCentricity/SitePages/HomePage.aspx', 'in_progress', '', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"],\"5\":[\"view\"]}', NULL, '2019-08-28 01:14:26', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",\"show_staff_finance_overview\"]', 'no', '5:00', 'fixed_rate'),
(75, 'TECHOPS TRANSFO OFFICE ( Powered by PMO Widget )', '3', '85', NULL, '2019-07-01', '2019-09-30', 0, '0.00', 'https://ipsengroup.sharepoint.com/sites/Custom/TechopsPMO/', 'in_progress', '<p class=\"MsoNormal\"><span lang=\"FR\" xss=\"removed\">Bonjour Marco,</span><span lang=\"FR\"><o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=\"removed\"> </span><span lang=\"FR\"><o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=\"removed\">Comme convenu , voici les modifications à apporter au\nsite TechOps PMO :</span><span lang=\"FR\"><o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=\"removed\"> </span><span lang=\"FR\"><o></o></span></p>\n\n<ul xss=\"removed\" type=\"disc\">\n <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Changer son nom TechOps PMO par\n     TechOps Transfo Office</span><span lang=\"FR\"><o></o></span></li>\n <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Mettre à gauche : </span><span lang=\"FR\"><o></o></span></li>\n <ul xss=\"removed\" type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Capacity to Deliver</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Factory of the Future</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Fucture Manufacturing Footprint</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Fuel the Future</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Service powerHouse</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">One Ipsen</span><span lang=\"FR\"><o></o></span></li>\n </ul>\n <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Définir comme domaines :</span><span lang=\"FR\"><o></o></span></li>\n <ul xss=\"removed\" type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Capex management</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Supply Chain distribution &\n      network</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Factory of the Future</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Footprint</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Manufacturing optimisation</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Quality of Operations</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Procurement</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Information Technology</span><span lang=\"FR\"><o></o></span></li>\n  <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">TecOps organisation</span><span lang=\"FR\"><o></o></span></li>\n </ul>\n <li class=\"MsoListParagraph\" xss=\"removed\"><span lang=\"FR\" xss=\"removed\">Avoir la possibilité de créer des\n     sous-domaines sous chaque domaine </span><span lang=\"FR\"><o></o></span></li>\n</ul>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=\"removed\"> </span><span lang=\"FR\"><o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=\"removed\">D’avance, merci !!</span><span lang=\"FR\"><o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=\"removed\">Corinne</span><span lang=\"FR\"><o></o></span></p>', 'Yes', NULL, NULL, NULL, NULL, '{\"1\":[\"view\"]}', NULL, '2020-01-07 12:23:49', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",\"show_staff_finance_overview\"]', 'no', '0:00', 'fixed_rate'),
(77, 'rahul', '2', '0', 'through_project_hours', '2020-01-07', '2020-01-23', 0, '50.00', 'google.com', 'started', 'dsgdfgfdgdf', 'Yes', NULL, NULL, NULL, NULL, 'all', NULL, '2020-01-07 11:05:53', '0', NULL, '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",\"show_staff_finance_overview\"]', 'no', '5:00', 'fixed_rate'),
(78, 'Test Demo Project One', '15', '37', NULL, '02/18/2020', '02/29/2020', 0, '0.00', 'https://demoUrl.com', 'started', '<p>Test Project Description One</p>\n', 'Yes', NULL, NULL, NULL, NULL, 'all', NULL, '2020-02-13 06:29:56', NULL, '5000', '[\"show_team_members\",\"show_milestones\",\"show_project_tasks\",\"show_project_attachments\",\"show_timesheets\",\"show_project_bugs\",\"show_project_history\",\"show_project_calendar\",\"show_project_comments\",\"show_gantt_chart\",\"show_project_hours\",\"comment_on_project_tasks\",\"show_project_tasks_attachments\",\"show_tasks_hours\",\"show_finance_overview\",\"show_staff_finance_overview\"]', 'no', '100', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_settings`
--

CREATE TABLE `tbl_project_settings` (
  `settings_id` int(11) NOT NULL,
  `settings` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_project_settings`
--

INSERT INTO `tbl_project_settings` (`settings_id`, `settings`, `description`) VALUES
(1, 'show_team_members', 'view team members'),
(2, 'show_milestones', 'view project milestones'),
(5, 'show_project_tasks', 'view project tasks'),
(6, 'show_project_attachments', 'view project attachments'),
(7, 'show_timesheets', 'view project timesheets'),
(8, 'show_project_bugs', 'view project bugs'),
(9, 'show_project_history', 'view project history'),
(10, 'show_project_calendar', 'view project calendars'),
(11, 'show_project_comments', 'view project comments'),
(13, 'show_gantt_chart', 'view Gantt chart'),
(14, 'show_project_hours', 'view project hours'),
(15, 'comment_on_project_tasks', 'access To comment on project tasks'),
(16, 'show_project_tasks_attachments', 'view task attachments'),
(20, 'show_tasks_hours', 'show_tasks_hours'),
(21, 'show_finance_overview', 'show_finance_overview'),
(22, 'show_staff_finance_overview', 'admin and staff can see the price');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proposals`
--

CREATE TABLE `tbl_proposals` (
  `proposals_id` int(11) NOT NULL,
  `reference_no` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_id` int(11) DEFAULT 0,
  `proposal_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proposal_month` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `proposal_year` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `due_date` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alert_overdue` tinyint(1) DEFAULT 0,
  `currency` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `tax` int(11) NOT NULL DEFAULT 0,
  `total_tax` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'draft',
  `date_sent` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proposal_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `convert` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `convert_module` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `convert_module_id` int(11) DEFAULT 0,
  `converted_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_percent` int(2) NOT NULL DEFAULT 0,
  `discount_total` decimal(18,2) NOT NULL DEFAULT 0.00,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `adjustment` decimal(18,2) NOT NULL DEFAULT 0.00,
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allowed_cmments` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proposals_items`
--

CREATE TABLE `tbl_proposals_items` (
  `proposals_items_id` int(11) NOT NULL,
  `proposals_id` int(11) NOT NULL,
  `saved_items_id` int(11) DEFAULT 0,
  `item_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT 0.00,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_total` decimal(10,2) DEFAULT 0.00,
  `total_cost` decimal(10,2) DEFAULT 0.00,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `order` int(11) DEFAULT 0,
  `unit` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchases`
--

CREATE TABLE `tbl_purchases` (
  `purchase_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `reference_no` varchar(100) DEFAULT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `update_stock` enum('Yes','No') DEFAULT 'Yes',
  `status` varchar(20) DEFAULT NULL,
  `emailed` enum('Yes','No') DEFAULT NULL,
  `date_sent` varchar(20) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `discount_type` enum('before_tax','after_tax') DEFAULT NULL,
  `discount_percent` decimal(10,2) DEFAULT NULL,
  `adjustment` decimal(18,2) DEFAULT NULL,
  `discount_total` decimal(18,2) DEFAULT NULL,
  `show_quantity_as` varchar(10) DEFAULT NULL,
  `permission` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_tax` text DEFAULT NULL,
  `tax` decimal(20,2) DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_items`
--

CREATE TABLE `tbl_purchase_items` (
  `items_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `quantity` decimal(10,2) DEFAULT 0.00,
  `total_cost` decimal(10,2) DEFAULT 0.00,
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `order` int(11) DEFAULT 0,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_payments`
--

CREATE TABLE `tbl_purchase_payments` (
  `payments_id` int(11) NOT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `trans_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `month_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_to` int(11) NOT NULL,
  `paid_by` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `account_id` int(11) NOT NULL DEFAULT 0 COMMENT 'account_id means tracking deduct from which account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotationforms`
--

CREATE TABLE `tbl_quotationforms` (
  `quotationforms_id` int(11) NOT NULL,
  `quotationforms_title` varchar(200) NOT NULL,
  `quotationforms_code` text NOT NULL,
  `quotationforms_status` varchar(20) NOT NULL DEFAULT 'enabled' COMMENT 'enabled/disabled',
  `quotations_created_by_id` int(11) NOT NULL,
  `quotationforms_date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotations`
--

CREATE TABLE `tbl_quotations` (
  `quotations_id` int(11) NOT NULL,
  `quotations_form_title` varchar(250) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `quotations_amount` decimal(10,2) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `reviewer_id` int(11) DEFAULT NULL,
  `reviewed_date` date DEFAULT NULL,
  `quotations_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `quotations_status` varchar(15) DEFAULT 'pending' COMMENT 'completed/pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation_details`
--

CREATE TABLE `tbl_quotation_details` (
  `quotation_details_id` int(11) NOT NULL,
  `quotations_id` int(11) NOT NULL,
  `quotation_form_data` text DEFAULT NULL,
  `quotation_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reminders`
--

CREATE TABLE `tbl_reminders` (
  `reminder_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `date` datetime NOT NULL,
  `notified` enum('Yes','No') NOT NULL DEFAULT 'No',
  `module` varchar(200) NOT NULL,
  `module_id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `notify_by_email` enum('Yes','No') NOT NULL DEFAULT 'No',
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_stock`
--

CREATE TABLE `tbl_return_stock` (
  `return_stock_id` int(11) NOT NULL,
  `module` enum('client','supplier') DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `main_status` varchar(200) DEFAULT NULL,
  `invoices_id` int(11) DEFAULT NULL,
  `reference_no` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `update_stock` enum('Yes','No') CHARACTER SET utf8 DEFAULT 'Yes',
  `status` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `emailed` enum('Yes','No') CHARACTER SET utf8 DEFAULT NULL,
  `date_sent` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `return_stock_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `discount_type` enum('before_tax','after_tax') CHARACTER SET utf8 DEFAULT NULL,
  `discount_percent` decimal(10,2) DEFAULT NULL,
  `adjustment` decimal(18,2) DEFAULT NULL,
  `discount_total` decimal(18,2) DEFAULT NULL,
  `show_quantity_as` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `permission` text CHARACTER SET utf8 DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT '2019-05-04 16:00:00',
  `total_tax` text CHARACTER SET utf8 DEFAULT NULL,
  `tax` decimal(20,2) DEFAULT NULL,
  `notes` text CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_stock_items`
--

CREATE TABLE `tbl_return_stock_items` (
  `items_id` int(11) NOT NULL,
  `return_stock_id` int(11) NOT NULL,
  `invoice_items_id` int(11) DEFAULT NULL,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `quantity` decimal(10,2) DEFAULT 0.00,
  `total_cost` decimal(10,2) DEFAULT 0.00,
  `item_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `order` int(11) DEFAULT 0,
  `date_saved` timestamp NOT NULL DEFAULT '2019-05-04 16:00:00',
  `unit` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_stock_payments`
--

CREATE TABLE `tbl_return_stock_payments` (
  `payments_id` int(11) NOT NULL,
  `return_stock_id` int(11) DEFAULT NULL,
  `trans_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `month_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_to` int(11) DEFAULT NULL,
  `paid_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `account_id` int(11) NOT NULL DEFAULT 0 COMMENT 'account_id means tracking deduct from which account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_allowance`
--

CREATE TABLE `tbl_salary_allowance` (
  `salary_allowance_id` int(11) NOT NULL,
  `salary_template_id` int(11) NOT NULL,
  `allowance_label` varchar(200) NOT NULL,
  `allowance_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_salary_allowance`
--

INSERT INTO `tbl_salary_allowance` (`salary_allowance_id`, `salary_template_id`, `allowance_label`, `allowance_value`) VALUES
(1, 1, 'House Rent Allowance', '100'),
(2, 1, 'Medical Allowance', '100'),
(3, 2, 'House Rent Allowance', '100'),
(4, 2, 'Medical Allowance', '100'),
(5, 3, 'House Rent Allowance', '100'),
(6, 3, 'Medical Allowance', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_deduction`
--

CREATE TABLE `tbl_salary_deduction` (
  `salary_deduction_id` int(11) NOT NULL,
  `salary_template_id` int(11) NOT NULL,
  `deduction_label` varchar(200) NOT NULL,
  `deduction_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_salary_deduction`
--

INSERT INTO `tbl_salary_deduction` (`salary_deduction_id`, `salary_template_id`, `deduction_label`, `deduction_value`) VALUES
(1, 1, 'Provident Fund', '100'),
(2, 1, 'Tax Deduction', '100'),
(3, 2, 'Provident Fund', '100'),
(4, 2, 'Tax Deduction', '100'),
(5, 3, 'Provident Fund', '100'),
(6, 3, 'Tax Deduction', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment`
--

CREATE TABLE `tbl_salary_payment` (
  `salary_payment_id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_month` varchar(20) NOT NULL,
  `fine_deduction` varchar(200) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `comments` text DEFAULT NULL,
  `paid_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deduct_from` int(11) NOT NULL DEFAULT 0 COMMENT 'deduct from means tracking deduct from which account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_salary_payment`
--

INSERT INTO `tbl_salary_payment` (`salary_payment_id`, `user_id`, `payment_month`, `fine_deduction`, `payment_type`, `comments`, `paid_date`, `deduct_from`) VALUES
(1, 3, '2017-12', '', '5', '', '2020-01-20 11:08:00', 0),
(2, 13, '2020-02', '', '', '', '2020-01-21 09:59:49', 0),
(3, 13, '2020-01', '', '', '', '2020-01-23 07:10:47', 0),
(4, 3, '2020-02', '', '', '', '2020-01-24 09:27:45', 2),
(5, 13, '2020-04', '500', '5', '', '2020-01-24 09:33:20', 2),
(6, 3, '2020-04', '', '2', '', '2020-01-24 09:56:04', 1),
(7, 3, '2020-01', '', '', '', '2020-02-03 07:34:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_allowance`
--

CREATE TABLE `tbl_salary_payment_allowance` (
  `salary_payment_allowance_id` int(11) NOT NULL,
  `salary_payment_id` int(11) NOT NULL,
  `salary_payment_allowance_label` varchar(200) NOT NULL,
  `salary_payment_allowance_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_salary_payment_allowance`
--

INSERT INTO `tbl_salary_payment_allowance` (`salary_payment_allowance_id`, `salary_payment_id`, `salary_payment_allowance_label`, `salary_payment_allowance_value`) VALUES
(1, 2, 'House Rent Allowance', '100'),
(2, 2, 'Medical Allowance', '100'),
(3, 3, 'House Rent Allowance', '100'),
(4, 3, 'Medical Allowance', '100'),
(5, 5, 'House Rent Allowance', '100'),
(6, 5, 'Medical Allowance', '100'),
(7, 7, 'House Rent Allowance', '100'),
(8, 7, 'Medical Allowance', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_deduction`
--

CREATE TABLE `tbl_salary_payment_deduction` (
  `salary_payment_deduction` int(11) NOT NULL,
  `salary_payment_id` int(11) NOT NULL,
  `salary_payment_deduction_label` varchar(200) NOT NULL,
  `salary_payment_deduction_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_salary_payment_deduction`
--

INSERT INTO `tbl_salary_payment_deduction` (`salary_payment_deduction`, `salary_payment_id`, `salary_payment_deduction_label`, `salary_payment_deduction_value`) VALUES
(1, 2, 'Provident Fund', '100'),
(2, 2, 'Tax Deduction', '100'),
(3, 3, 'Provident Fund', '100'),
(4, 3, 'Tax Deduction', '100'),
(5, 5, 'Provident Fund', '100'),
(6, 5, 'Tax Deduction', '100'),
(7, 7, 'Provident Fund', '100'),
(8, 7, 'Tax Deduction', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_details`
--

CREATE TABLE `tbl_salary_payment_details` (
  `salary_payment_details_id` int(11) NOT NULL,
  `salary_payment_id` int(11) NOT NULL,
  `salary_payment_details_label` varchar(200) NOT NULL,
  `salary_payment_details_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_salary_payment_details`
--

INSERT INTO `tbl_salary_payment_details` (`salary_payment_details_id`, `salary_payment_id`, `salary_payment_details_label`, `salary_payment_details_value`) VALUES
(1, 1, 'Hourly Grade', 'hfgh'),
(2, 1, 'hourly_rates', '777'),
(3, 1, 'Total Hours', '0:0'),
(4, 1, 'Amount', '0'),
(5, 2, 'Salary Grades', 'grade b'),
(6, 2, 'Basic Salary', '25000'),
(7, 2, 'overtime_salary', '200'),
(8, 2, 'Overtime Hour', '0:0'),
(9, 2, 'Overtime Amount', '0'),
(10, 3, 'Salary Grades', 'grade b'),
(11, 3, 'Basic Salary', '25000'),
(12, 3, 'overtime_salary', '200'),
(13, 3, 'Overtime Hour', '0:0'),
(14, 3, 'Overtime Amount', '0'),
(15, 4, 'Hourly Grade', 'hfgh'),
(16, 4, 'hourly_rates', '777'),
(17, 4, 'Total Hours', '0:0'),
(18, 4, 'Amount', '0'),
(19, 5, 'Salary Grades', 'grade b'),
(20, 5, 'Basic Salary', '25000'),
(21, 5, 'overtime_salary', '200'),
(22, 5, 'Overtime Hour', '0:0'),
(23, 5, 'Overtime Amount', '0'),
(24, 6, 'Hourly Grade', 'hfgh'),
(25, 6, 'hourly_rates', '777'),
(26, 6, 'Total Hours', '0:0'),
(27, 6, 'Amount', '0'),
(28, 7, 'Salary Grades', 'grade a'),
(29, 7, 'Basic Salary', '25000'),
(30, 7, 'overtime_salary', '200'),
(31, 7, 'Overtime Hour', '0:0'),
(32, 7, 'Overtime Amount', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payslip`
--

CREATE TABLE `tbl_salary_payslip` (
  `payslip_id` int(5) NOT NULL,
  `payslip_number` varchar(100) DEFAULT NULL,
  `salary_payment_id` int(5) NOT NULL,
  `payslip_generate_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_salary_payslip`
--

INSERT INTO `tbl_salary_payslip` (`payslip_id`, `payslip_number`, `salary_payment_id`, `payslip_generate_date`) VALUES
(1, '2020011', 1, '2020-01-20 11:08:08'),
(2, '2020012', 2, '2020-01-21 10:30:21'),
(3, '2020013', 3, '2020-01-23 07:10:53'),
(4, '2020024', 7, '2020-02-04 06:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_template`
--

CREATE TABLE `tbl_salary_template` (
  `salary_template_id` int(11) NOT NULL,
  `salary_grade` varchar(200) NOT NULL,
  `basic_salary` varchar(200) NOT NULL,
  `overtime_salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_salary_template`
--

INSERT INTO `tbl_salary_template` (`salary_template_id`, `salary_grade`, `basic_salary`, `overtime_salary`) VALUES
(1, 'grade b', '25000', '200'),
(2, 'grade a', '25000', '200'),
(3, 'grade new', '25000', '100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saved_items`
--

CREATE TABLE `tbl_saved_items` (
  `saved_items_id` int(11) NOT NULL,
  `item_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` decimal(18,2) DEFAULT 0.00,
  `customer_group_id` int(11) NOT NULL DEFAULT 0,
  `unit_type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_rates_id` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_rate` decimal(18,2) DEFAULT 0.00,
  `item_tax_total` decimal(18,2) DEFAULT 0.00,
  `quantity` decimal(18,2) DEFAULT 0.00,
  `total_cost` decimal(18,2) DEFAULT 0.00,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sent`
--

CREATE TABLE `tbl_sent` (
  `sent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` text DEFAULT NULL,
  `attach_file_path` text DEFAULT NULL,
  `attach_filename` text DEFAULT NULL,
  `message_time` datetime NOT NULL,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE `tbl_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sessions`
--

INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('9uqqqmjf1njqk8gn0gbql7necss0p3op', '103.99.15.182', 1581057621, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035373139343b6d656e755f6163746976655f69647c613a333a7b693a303b733a333a22313439223b693a313b733a323a223235223b693a323b733a313a2230223b7d75726c7c733a34333a2261646d696e2f73657474696e67732f616c6c6f7765645f69702f656469745f616c6c6f7765645f69702f31223b757365725f726f6c6c7c613a3133353a7b693a303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2231223b733a353a226c6162656c223b733a393a2264617368626f617264223b733a343a226c696e6b223b733a31353a2261646d696e2f64617368626f617264223b733a343a2269636f6e223b733a31353a2266612066612d64617368626f617264223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312031343a30393a3336223b733a363a22737461747573223b733a313a2231223b7d693a313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2232223b733a353a226c6162656c223b733a383a2263616c656e646172223b733a343a226c696e6b223b733a31343a2261646d696e2f63616c656e646172223b733a343a2269636f6e223b733a31343a2266612066612d63616c656e646172223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2234223b733a353a226c6162656c223b733a363a22636c69656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f636c69656e742f6d616e6167655f636c69656e74223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223134223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2235223b733a353a226c6162656c223b733a373a226d61696c626f78223b733a343a226c696e6b223b733a31333a2261646d696e2f6d61696c626f78223b733a343a2269636f6e223b733a31363a2266612066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2236223b733a353a226c6162656c223b733a373a227469636b657473223b733a343a226c696e6b223b733a31333a2261646d696e2f7469636b657473223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223132223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223133223b733a353a226c6162656c223b733a373a22696e766f696365223b733a343a226c696e6b223b733a32383a2261646d696e2f696e766f6963652f6d616e6167655f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223134223b733a353a226c6162656c223b733a393a22657374696d61746573223b733a343a226c696e6b223b733a31353a2261646d696e2f657374696d61746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223135223b733a353a226c6162656c223b733a31373a227061796d656e74735f7265636569766564223b733a343a226c696e6b223b733a32363a2261646d696e2f696e766f6963652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3234223b733a363a22737461747573223b733a313a2231223b7d693a393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223136223b733a353a226c6162656c223b733a393a227461785f7261746573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f7461785f7261746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a31303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223231223b733a353a226c6162656c223b733a31303a2271756f746174696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d7061737465223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223232223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f6c697374223b733a343a226c696e6b223b733a31363a2261646d696e2f71756f746174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30352d31372030353a31393a3033223b733a363a22737461747573223b733a313a2231223b7d693a31323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223233223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f666f726d223b733a343a226c696e6b223b733a33323a2261646d696e2f71756f746174696f6e732f71756f746174696f6e735f666f726d223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a31333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223234223b733a353a226c6162656c223b733a343a2275736572223b733a343a226c696e6b223b733a32303a2261646d696e2f757365722f757365725f6c697374223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223235223b733a353a226c6162656c223b733a383a2273657474696e6773223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a31303a2266612066612d636f6773223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223237223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223236223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a31343a2266612066612d6461746162617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223238223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223239223b733a353a226c6162656c223b733a31373a227472616e73616374696f6e735f6d656e75223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223133223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223330223b733a353a226c6162656c223b733a373a226465706f736974223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f6465706f736974223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3333223b733a363a22737461747573223b733a313a2231223b7d693a31383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223331223b733a353a226c6162656c223b733a373a22657870656e7365223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3337223b733a363a22737461747573223b733a313a2231223b7d693a31393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223332223b733a353a226c6162656c223b733a383a227472616e73666572223b733a343a226c696e6b223b733a32373a2261646d696e2f7472616e73616374696f6e732f7472616e73666572223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3430223b733a363a22737461747573223b733a313a2231223b7d693a32303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223333223b733a353a226c6162656c223b733a31393a227472616e73616374696f6e735f7265706f7274223b733a343a226c696e6b223b733a33383a2261646d696e2f7472616e73616374696f6e732f7472616e73616374696f6e735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3434223b733a363a22737461747573223b733a313a2231223b7d693a32313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223334223b733a353a226c6162656c223b733a31333a2262616c616e63655f7368656574223b733a343a226c696e6b223b733a33323a2261646d696e2f7472616e73616374696f6e732f62616c616e63655f7368656574223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3437223b733a363a22737461747573223b733a313a2231223b7d693a32323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223336223b733a353a226c6162656c223b733a393a2262616e6b5f63617368223b733a343a226c696e6b223b733a32383a2261646d696e2f6163636f756e742f6d616e6167655f6163636f756e74223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3531223b733a363a22737461747573223b733a313a2231223b7d693a32333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223339223b733a353a226c6162656c223b733a353a226974656d73223b733a343a226c696e6b223b733a32323a2261646d696e2f6974656d732f6974656d735f6c697374223b733a343a2269636f6e223b733a31303a2266612066612d63756265223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031392d30352d30332030373a31393a3530223b733a363a22737461747573223b733a313a2231223b7d693a32343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223432223b733a353a226c6162656c223b733a363a227265706f7274223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223235223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a32353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223433223b733a353a226c6162656c223b733a31373a226163636f756e745f73746174656d656e74223b733a343a226c696e6b223b733a33303a2261646d696e2f7265706f72742f6163636f756e745f73746174656d656e74223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223434223b733a353a226c6162656c223b733a31333a22696e636f6d655f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f696e636f6d655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223435223b733a353a226c6162656c223b733a31343a22657870656e73655f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f657870656e73655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223436223b733a353a226c6162656c223b733a31343a22696e636f6d655f657870656e7365223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f696e636f6d655f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a32393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223437223b733a353a226c6162656c223b733a31363a22646174655f776973655f7265706f7274223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f646174655f776973655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223438223b733a353a226c6162656c223b733a31303a22616c6c5f696e636f6d65223b733a343a226c696e6b223b733a32333a2261646d696e2f7265706f72742f616c6c5f696e636f6d65223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223439223b733a353a226c6162656c223b733a31313a22616c6c5f657870656e7365223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f616c6c5f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223530223b733a353a226c6162656c223b733a31353a22616c6c5f7472616e73616374696f6e223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f616c6c5f7472616e73616374696f6e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223531223b733a353a226c6162656c223b733a31373a22726563757272696e675f696e766f696365223b733a343a226c696e6b223b733a33313a2261646d696e2f696e766f6963652f726563757272696e675f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a33343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223532223b733a353a226c6162656c223b733a31353a227472616e736665725f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f7472616e73616374696f6e732f7472616e736665725f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3539223b733a363a22737461747573223b733a313a2231223b7d693a33353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223533223b733a353a226c6162656c223b733a31353a227265706f72745f62795f6d6f6e7468223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f7265706f72745f62795f6d6f6e7468223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223534223b733a353a226c6162656c223b733a353a227461736b73223b733a343a226c696e6b223b733a32303a2261646d696e2f7461736b732f616c6c5f7461736b223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223535223b733a353a226c6162656c223b733a353a226c65616473223b733a343a226c696e6b223b733a31313a2261646d696e2f6c65616473223b733a343a2269636f6e223b733a31323a2266612066612d726f636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223536223b733a353a226c6162656c223b733a31333a226f70706f7274756e6974696573223b733a343a226c696e6b223b733a31393a2261646d696e2f6f70706f7274756e6974696573223b733a343a2269636f6e223b733a31323a2266612066612d66696c746572223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223537223b733a353a226c6162656c223b733a383a2270726f6a65637473223b733a343a226c696e6b223b733a31343a2261646d696e2f70726f6a65637473223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223538223b733a353a226c6162656c223b733a343a2262756773223b733a343a226c696e6b223b733a31303a2261646d696e2f62756773223b733a343a2269636f6e223b733a393a2266612066612d627567223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223539223b733a353a226c6162656c223b733a373a2270726f6a656374223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223630223b733a353a226c6162656c223b733a31323a227461736b735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f7461736b735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223631223b733a353a226c6162656c223b733a31313a22627567735f7265706f7274223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f627567735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223632223b733a353a226c6162656c223b733a31343a227469636b6574735f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f7469636b6574735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223633223b733a353a226c6162656c223b733a31333a22636c69656e745f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f636c69656e745f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3430223b733a363a22737461747573223b733a313a2231223b7d693a34363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223636223b733a353a226c6162656c223b733a31363a227461736b735f61737369676e6d656e74223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f7461736b735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223637223b733a353a226c6162656c223b733a31353a22627567735f61737369676e6d656e74223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f627567735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223638223b733a353a226c6162656c223b733a31343a2270726f6a6563745f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f70726f6a6563745f7265706f7274223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223639223b733a353a226c6162656c223b733a31333a22676f616c5f747261636b696e67223b733a343a226c696e6b223b733a31393a2261646d696e2f676f616c5f747261636b696e67223b733a343a2269636f6e223b733a31323a2266612066612d736869656c64223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223730223b733a353a226c6162656c223b733a31313a226465706172746d656e7473223b733a343a226c696e6b223b733a31373a2261646d696e2f6465706172746d656e7473223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223135223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223731223b733a353a226c6162656c223b733a373a22686f6c69646179223b733a343a226c696e6b223b733a31333a2261646d696e2f686f6c69646179223b733a343a2269636f6e223b733a32313a2266612066612d63616c656e6461722d706c75732d6f223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223732223b733a353a226c6162656c223b733a31363a226c656176655f6d616e6167656d656e74223b733a343a226c696e6b223b733a32323a2261646d696e2f6c656176655f6d616e6167656d656e74223b733a343a2269636f6e223b733a31313a2266612066612d706c616e65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223231223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223733223b733a353a226c6162656c223b733a393a227574696c6974696573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223234223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223734223b733a353a226c6162656c223b733a383a226f76657274696d65223b733a343a226c696e6b223b733a32343a2261646d696e2f7574696c69746965732f6f76657274696d65223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a35353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223735223b733a353a226c6162656c223b733a31323a226f66666963655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d636f646570656e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223136223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223736223b733a353a226c6162656c223b733a31343a2273746f636b5f63617465676f7279223b733a343a226c696e6b223b733a32363a2261646d696e2f73746f636b2f73746f636b5f63617465676f7279223b733a343a2269636f6e223b733a31333a2266612066612d736c6964657273223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a35373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223737223b733a353a226c6162656c223b733a31323a226d616e6167655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223738223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223739223b733a353a226c6162656c223b733a31323a2273746f636b5f7265706f7274223b733a343a226c696e6b223b733a31383a2261646d696e2f73746f636b2f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d6c696e652d6368617274223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030373a31383a3235223b733a363a22737461747573223b733a313a2231223b7d693a36303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223831223b733a353a226c6162656c223b733a31303a2273746f636b5f6c697374223b733a343a226c696e6b223b733a32323a2261646d696e2f73746f636b2f73746f636b5f6c697374223b733a343a2269636f6e223b733a32303a2266612066612d737461636b2d65786368616e6765223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a36313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223832223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a32343a2261646d696e2f73746f636b2f61737369676e5f73746f636b223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223833223b733a353a226c6162656c223b733a31393a2261737369676e5f73746f636b5f7265706f7274223b733a343a226c696e6b223b733a33313a2261646d696e2f73746f636b2f61737369676e5f73746f636b5f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223834223b733a353a226c6162656c223b733a31333a2273746f636b5f686973746f7279223b733a343a226c696e6b223b733a32353a2261646d696e2f73746f636b2f73746f636b5f686973746f7279223b733a343a2269636f6e223b733a31373a2266612066612d66696c652d746578742d6f223b733a363a22706172656e74223b733a323a223737223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223835223b733a353a226c6162656c223b733a31313a22706572666f726d616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31343a2266612066612d6472696262626c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223230223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223836223b733a353a226c6162656c223b733a32313a22706572666f726d616e63655f696e64696361746f72223b733a343a226c696e6b223b733a33393a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f696e64696361746f72223b733a343a2269636f6e223b733a31323a2266612066612d72616e646f6d223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223837223b733a353a226c6162656c223b733a31383a22706572666f726d616e63655f7265706f7274223b733a343a226c696e6b223b733a33363a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223838223b733a353a226c6162656c223b733a31343a22676976655f61707072616973616c223b733a343a226c696e6b223b733a34343a2261646d696e2f706572666f726d616e63652f676976655f706572666f726d616e63655f61707072616973616c223b733a343a2269636f6e223b733a31303a2266612066612d706c7573223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223839223b733a353a226c6162656c223b733a373a22706179726f6c6c223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223139223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223930223b733a353a226c6162656c223b733a32313a226d616e6167655f73616c6172795f64657461696c73223b733a343a226c696e6b223b733a33353a2261646d696e2f706179726f6c6c2f6d616e6167655f73616c6172795f64657461696c73223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223931223b733a353a226c6162656c223b733a32303a22656d706c6f7965655f73616c6172795f6c697374223b733a343a226c696e6b223b733a33343a2261646d696e2f706179726f6c6c2f656d706c6f7965655f73616c6172795f6c697374223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223932223b733a353a226c6162656c223b733a31323a226d616b655f7061796d656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f706179726f6c6c2f6d616b655f7061796d656e74223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223933223b733a353a226c6162656c223b733a31363a2267656e65726174655f706179736c6970223b733a343a226c696e6b223b733a33303a2261646d696e2f706179726f6c6c2f67656e65726174655f706179736c6970223b733a343a2269636f6e223b733a31333a2266612066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223934223b733a353a226c6162656c223b733a31353a2273616c6172795f74656d706c617465223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f73616c6172795f74656d706c617465223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223935223b733a353a226c6162656c223b733a31313a22686f75726c795f72617465223b733a343a226c696e6b223b733a32353a2261646d696e2f706179726f6c6c2f686f75726c795f72617465223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223936223b733a353a226c6162656c223b733a31353a22706179726f6c6c5f73756d6d617279223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f706179726f6c6c5f73756d6d617279223b733a343a2269636f6e223b733a31383a2266612066612d63616d6572612d726574726f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223937223b733a353a226c6162656c223b733a31343a2270726f766964656e745f66756e64223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f70726f766964656e745f66756e64223b733a343a2269636f6e223b733a31353a2266612066612d627269656663617365223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223938223b733a353a226c6162656c223b733a31343a22616476616e63655f73616c617279223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f616476616e63655f73616c617279223b733a343a2269636f6e223b733a31393a2266612066612d63632d6d617374657263617264223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223939223b733a353a226c6162656c223b733a31343a22656d706c6f7965655f6177617264223b733a343a226c696e6b223b733a31313a2261646d696e2f6177617264223b733a343a2269636f6e223b733a31323a2266612066612d74726f706879223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a37393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313030223b733a353a226c6162656c223b733a31333a22616e6e6f756e63656d656e7473223b733a343a226c696e6b223b733a31393a2261646d696e2f616e6e6f756e63656d656e7473223b733a343a2269636f6e223b733a31393a2266612066612d62756c6c686f726e2069636f6e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313031223b733a353a226c6162656c223b733a383a22747261696e696e67223b733a343a226c696e6b223b733a31343a2261646d696e2f747261696e696e67223b733a343a2269636f6e223b733a31343a2266612066612d7375697463617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223232223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313032223b733a353a226c6162656c223b733a31323a226a6f625f63697263756c6172223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d676c6f6265223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223138223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313033223b733a353a226c6162656c223b733a31313a226a6f62735f706f73746564223b733a343a226c696e6b223b733a33303a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f706f73746564223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313034223b733a353a226c6162656c223b733a31373a226a6f62735f6170706c69636174696f6e73223b733a343a226c696e6b223b733a33363a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f6170706c69636174696f6e73223b733a343a2269636f6e223b733a31333a2266612066612d636f6d70617373223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313035223b733a353a226c6162656c223b733a31303a22617474656e64616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223137223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313036223b733a353a226c6162656c223b733a31383a2274696d656368616e67655f72657175657374223b733a343a226c696e6b223b733a33353a2261646d696e2f617474656e64616e63652f74696d656368616e67655f72657175657374223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313037223b733a353a226c6162656c223b733a31373a22617474656e64616e63655f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f617474656e64616e63652f617474656e64616e63655f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313038223b733a353a226c6162656c223b733a31323a2274696d655f686973746f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f617474656e64616e63652f74696d655f686973746f7279223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313039223b733a353a226c6162656c223b733a393a2270756c6c2d646f776e223b733a343a226c696e6b223b733a303a22223b733a343a2269636f6e223b733a303a22223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d33302030313a31333a3230223b733a363a22737461747573223b733a313a2230223b7d693a38393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313130223b733a353a226c6162656c223b733a31313a2266696c656d616e61676572223b733a343a226c696e6b223b733a31373a2261646d696e2f66696c656d616e61676572223b733a343a2269636f6e223b733a31303a2266612066612d66696c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a39303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313131223b733a353a226c6162656c223b733a31353a22636f6d70616e795f64657461696c73223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d696e666f2d636972636c65223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313132223b733a353a226c6162656c223b733a31353a2273797374656d5f73657474696e6773223b733a343a226c696e6b223b733a32313a2261646d696e2f73657474696e67732f73797374656d223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6465736b746f70223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313133223b733a353a226c6162656c223b733a31343a22656d61696c5f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f656d61696c223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d656e76656c6f7065223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313134223b733a353a226c6162656c223b733a31353a22656d61696c5f74656d706c61746573223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f74656d706c61746573223b733a343a2269636f6e223b733a32353a2266612066612d66772066612d70656e63696c2d737175617265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313135223b733a353a226c6162656c223b733a31373a22656d61696c5f696e746567726174696f6e223b733a343a226c696e6b223b733a33323a2261646d696e2f73657474696e67732f656d61696c5f696e746567726174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313136223b733a353a226c6162656c223b733a31363a227061796d656e745f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7061796d656e7473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d646f6c6c6172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313137223b733a353a226c6162656c223b733a31363a22696e766f6963655f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f696e766f696365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313138223b733a353a226c6162656c223b733a31373a22657374696d6174655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f657374696d617465223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313139223b733a353a226c6162656c223b733a32323a227469636b6574735f6c656164735f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f7469636b657473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d7469636b6574223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313230223b733a353a226c6162656c223b733a31343a227468656d655f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f7468656d65223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d636f6465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313231223b733a353a226c6162656c223b733a31323a22776f726b696e675f64617973223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f776f726b696e675f64617973223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d63616c656e646172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313232223b733a353a226c6162656c223b733a31343a226c656176655f63617465676f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f6c656176655f63617465676f7279223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d706167656c696e6573223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313233223b733a353a226c6162656c223b733a31353a22696e636f6d655f63617465676f7279223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f696e636f6d655f63617465676f7279223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d6365727469666963617465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313234223b733a353a226c6162656c223b733a31363a22657870656e73655f63617465676f7279223b733a343a226c696e6b223b733a33313a2261646d696e2f73657474696e67732f657870656e73655f63617465676f7279223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7461736b73223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313235223b733a353a226c6162656c223b733a31343a22637573746f6d65725f67726f7570223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f637573746f6d65725f67726f7570223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7573657273223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313236223b733a353a226c6162656c223b733a31333a22636f6e74726163745f74797065223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f636f6e74726163745f74797065223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313237223b733a353a226c6162656c223b733a31313a226c6561645f737461747573223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313238223b733a353a226c6162656c223b733a31313a226c6561645f736f75726365223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f736f75726365223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d6172726f772d646f776e223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313239223b733a353a226c6162656c223b733a32363a226f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a226c696e6b223b733a34313a2261646d696e2f73657474696e67732f6f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a2269636f6e223b733a32343a2266612066612d66772066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313330223b733a353a226c6162656c223b733a31323a22637573746f6d5f6669656c64223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f637573746f6d5f6669656c64223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d737461722d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313331223b733a353a226c6162656c223b733a31343a227061796d656e745f6d6574686f64223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f7061796d656e745f6d6574686f64223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313332223b733a353a226c6162656c223b733a373a2263726f6e6a6f62223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f63726f6e6a6f62223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d636f6e74616f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313333223b733a353a226c6162656c223b733a31353a226d656e755f616c6c6f636174696f6e223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f6d656e755f616c6c6f636174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612066612d636f6d70617373223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313334223b733a353a226c6162656c223b733a31323a226e6f74696669636174696f6e223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313335223b733a353a226c6162656c223b733a31383a22656d61696c5f6e6f74696669636174696f6e223b733a343a226c696e6b223b733a33333a2261646d696e2f73657474696e67732f656d61696c5f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313336223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6461746162617365223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313337223b733a353a226c6162656c223b733a31323a227472616e736c6174696f6e73223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f7472616e736c6174696f6e73223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6c616e6775616765223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313338223b733a353a226c6162656c223b733a31333a2273797374656d5f757064617465223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f73797374656d5f757064617465223b733a343a2269636f6e223b733a32373a2266612066612d66772066612d70656e63696c2d7371756172652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313339223b733a353a226c6162656c223b733a31323a22707269766174655f63686174223b733a343a226c696e6b223b733a31383a22636861742f636f6e766572736174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d656e76656c6f7065223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3131393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313430223b733a353a226c6162656c223b733a393a2270726f706f73616c73223b733a343a226c696e6b223b733a31353a2261646d696e2f70726f706f73616c73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a3132303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313431223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a32313a2266612066612d7175657374696f6e2d636972636c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223132223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313432223b733a353a226c6162656c223b733a31303a2263617465676f72696573223b733a343a226c696e6b223b733a33303a2261646d696e2f6b6e6f776c65646765626173652f63617465676f72696573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313433223b733a353a226c6162656c223b733a383a2261727469636c6573223b733a343a226c696e6b223b733a32383a2261646d696e2f6b6e6f776c65646765626173652f61727469636c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313434223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a31393a2261646d696e2f6b6e6f776c6564676562617365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313435223b733a353a226c6162656c223b733a31383a2264617368626f6172645f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f64617368626f617264223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d64617368626f617264223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3132353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313436223b733a353a226c6162656c223b733a32303a227472616e73616374696f6e735f7265706f727473223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35393a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313437223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f73616c65735f7265706f7274223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031333a34323a3233223b733a363a22737461747573223b733a313a2231223b7d693a3132373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313438223b733a353a226c6162656c223b733a31353a226d61726b5f617474656e64616e6365223b733a343a226c696e6b223b733a32313a2261646d696e2f6d61726b5f617474656e64616e6365223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313439223b733a353a226c6162656c223b733a31303a22616c6c6f7765645f6970223b733a343a226c696e6b223b733a32353a2261646d696e2f73657474696e67732f616c6c6f7765645f6970223b733a343a2269636f6e223b733a31323a2266612066612d736572766572223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d31332032323a32323a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313530223b733a353a226c6162656c223b733a353a2273746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2269636f6e2d6c6179657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3133303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313531223b733a353a226c6162656c223b733a383a22737570706c696572223b733a343a226c696e6b223b733a31343a2261646d696e2f737570706c696572223b733a343a2269636f6e223b733a31343a2269636f6e2d627269656663617365223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313532223b733a353a226c6162656c223b733a303a22223b733a343a226c696e6b223b733a31343a2261646d696e2f7075726368617365223b733a343a2269636f6e223b733a31323a2269636f6e2d68616e64626167223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313533223b733a353a226c6162656c223b733a31323a2272657475726e5f73746f636b223b733a343a226c696e6b223b733a31383a2261646d696e2f72657475726e5f73746f636b223b733a343a2269636f6e223b733a31343a2269636f6e2d73686172652d616c74223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031392d30352d30342030343a34393a3330223b733a363a22737461747573223b733a313a2231223b7d693a3133333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313534223b733a353a226c6162656c223b733a31363a2270757263686173655f7061796d656e74223b733a343a226c696e6b223b733a32373a2261646d696e2f70757263686173652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31363a2269636f6e2d6372656469742d63617264223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031392d30352d30342030323a32333a3131223b733a363a22737461747573223b733a313a2231223b7d693a3133343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313535223b733a353a226c6162656c223b733a31373a2270757263686173655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7075726368617365223b733a343a2269636f6e223b733a31383a2266612d66772069636f6e2d68616e64626167223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342031313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d7d757365725f6e616d657c733a373a2261646d696e6b6f223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6e616d657c733a373a2241646d696e6b6f223b70686f746f7c733a32363a2275706c6f6164732f64656661756c745f6176617461722e6a7067223b64657369676e6174696f6e735f69647c733a313a2230223b757365725f69647c733a313a2238223b6c6173745f6c6f67696e7c733a31393a22323032302d30322d30352032323a33373a3031223b6f6e6c696e655f74696d657c693a313538313035323539373b6c6f67676564696e7c623a313b757365725f747970657c733a313a2231223b757365725f666c61677c693a313b646972656374696f6e7c733a333a226c7472223b);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('a239gauvimgv9g3mbqbfo8mh7b3i0hd6', '103.99.15.182', 1581056166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035343236383b6d656e755f6163746976655f69647c613a333a7b693a303b733a333a22313439223b693a313b733a323a223235223b693a323b733a313a2230223b7d75726c7c733a34333a2261646d696e2f73657474696e67732f616c6c6f7765645f69702f656469745f616c6c6f7765645f69702f31223b757365725f726f6c6c7c613a3133353a7b693a303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2231223b733a353a226c6162656c223b733a393a2264617368626f617264223b733a343a226c696e6b223b733a31353a2261646d696e2f64617368626f617264223b733a343a2269636f6e223b733a31353a2266612066612d64617368626f617264223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312031343a30393a3336223b733a363a22737461747573223b733a313a2231223b7d693a313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2232223b733a353a226c6162656c223b733a383a2263616c656e646172223b733a343a226c696e6b223b733a31343a2261646d696e2f63616c656e646172223b733a343a2269636f6e223b733a31343a2266612066612d63616c656e646172223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2234223b733a353a226c6162656c223b733a363a22636c69656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f636c69656e742f6d616e6167655f636c69656e74223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223134223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2235223b733a353a226c6162656c223b733a373a226d61696c626f78223b733a343a226c696e6b223b733a31333a2261646d696e2f6d61696c626f78223b733a343a2269636f6e223b733a31363a2266612066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2236223b733a353a226c6162656c223b733a373a227469636b657473223b733a343a226c696e6b223b733a31333a2261646d696e2f7469636b657473223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223132223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223133223b733a353a226c6162656c223b733a373a22696e766f696365223b733a343a226c696e6b223b733a32383a2261646d696e2f696e766f6963652f6d616e6167655f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223134223b733a353a226c6162656c223b733a393a22657374696d61746573223b733a343a226c696e6b223b733a31353a2261646d696e2f657374696d61746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223135223b733a353a226c6162656c223b733a31373a227061796d656e74735f7265636569766564223b733a343a226c696e6b223b733a32363a2261646d696e2f696e766f6963652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3234223b733a363a22737461747573223b733a313a2231223b7d693a393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223136223b733a353a226c6162656c223b733a393a227461785f7261746573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f7461785f7261746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a31303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223231223b733a353a226c6162656c223b733a31303a2271756f746174696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d7061737465223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223232223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f6c697374223b733a343a226c696e6b223b733a31363a2261646d696e2f71756f746174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30352d31372030353a31393a3033223b733a363a22737461747573223b733a313a2231223b7d693a31323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223233223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f666f726d223b733a343a226c696e6b223b733a33323a2261646d696e2f71756f746174696f6e732f71756f746174696f6e735f666f726d223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a31333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223234223b733a353a226c6162656c223b733a343a2275736572223b733a343a226c696e6b223b733a32303a2261646d696e2f757365722f757365725f6c697374223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223235223b733a353a226c6162656c223b733a383a2273657474696e6773223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a31303a2266612066612d636f6773223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223237223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223236223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a31343a2266612066612d6461746162617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223238223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223239223b733a353a226c6162656c223b733a31373a227472616e73616374696f6e735f6d656e75223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223133223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223330223b733a353a226c6162656c223b733a373a226465706f736974223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f6465706f736974223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3333223b733a363a22737461747573223b733a313a2231223b7d693a31383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223331223b733a353a226c6162656c223b733a373a22657870656e7365223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3337223b733a363a22737461747573223b733a313a2231223b7d693a31393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223332223b733a353a226c6162656c223b733a383a227472616e73666572223b733a343a226c696e6b223b733a32373a2261646d696e2f7472616e73616374696f6e732f7472616e73666572223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3430223b733a363a22737461747573223b733a313a2231223b7d693a32303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223333223b733a353a226c6162656c223b733a31393a227472616e73616374696f6e735f7265706f7274223b733a343a226c696e6b223b733a33383a2261646d696e2f7472616e73616374696f6e732f7472616e73616374696f6e735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3434223b733a363a22737461747573223b733a313a2231223b7d693a32313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223334223b733a353a226c6162656c223b733a31333a2262616c616e63655f7368656574223b733a343a226c696e6b223b733a33323a2261646d696e2f7472616e73616374696f6e732f62616c616e63655f7368656574223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3437223b733a363a22737461747573223b733a313a2231223b7d693a32323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223336223b733a353a226c6162656c223b733a393a2262616e6b5f63617368223b733a343a226c696e6b223b733a32383a2261646d696e2f6163636f756e742f6d616e6167655f6163636f756e74223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3531223b733a363a22737461747573223b733a313a2231223b7d693a32333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223339223b733a353a226c6162656c223b733a353a226974656d73223b733a343a226c696e6b223b733a32323a2261646d696e2f6974656d732f6974656d735f6c697374223b733a343a2269636f6e223b733a31303a2266612066612d63756265223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031392d30352d30332030373a31393a3530223b733a363a22737461747573223b733a313a2231223b7d693a32343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223432223b733a353a226c6162656c223b733a363a227265706f7274223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223235223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a32353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223433223b733a353a226c6162656c223b733a31373a226163636f756e745f73746174656d656e74223b733a343a226c696e6b223b733a33303a2261646d696e2f7265706f72742f6163636f756e745f73746174656d656e74223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223434223b733a353a226c6162656c223b733a31333a22696e636f6d655f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f696e636f6d655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223435223b733a353a226c6162656c223b733a31343a22657870656e73655f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f657870656e73655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223436223b733a353a226c6162656c223b733a31343a22696e636f6d655f657870656e7365223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f696e636f6d655f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a32393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223437223b733a353a226c6162656c223b733a31363a22646174655f776973655f7265706f7274223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f646174655f776973655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223438223b733a353a226c6162656c223b733a31303a22616c6c5f696e636f6d65223b733a343a226c696e6b223b733a32333a2261646d696e2f7265706f72742f616c6c5f696e636f6d65223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223439223b733a353a226c6162656c223b733a31313a22616c6c5f657870656e7365223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f616c6c5f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223530223b733a353a226c6162656c223b733a31353a22616c6c5f7472616e73616374696f6e223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f616c6c5f7472616e73616374696f6e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223531223b733a353a226c6162656c223b733a31373a22726563757272696e675f696e766f696365223b733a343a226c696e6b223b733a33313a2261646d696e2f696e766f6963652f726563757272696e675f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a33343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223532223b733a353a226c6162656c223b733a31353a227472616e736665725f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f7472616e73616374696f6e732f7472616e736665725f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3539223b733a363a22737461747573223b733a313a2231223b7d693a33353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223533223b733a353a226c6162656c223b733a31353a227265706f72745f62795f6d6f6e7468223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f7265706f72745f62795f6d6f6e7468223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223534223b733a353a226c6162656c223b733a353a227461736b73223b733a343a226c696e6b223b733a32303a2261646d696e2f7461736b732f616c6c5f7461736b223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223535223b733a353a226c6162656c223b733a353a226c65616473223b733a343a226c696e6b223b733a31313a2261646d696e2f6c65616473223b733a343a2269636f6e223b733a31323a2266612066612d726f636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223536223b733a353a226c6162656c223b733a31333a226f70706f7274756e6974696573223b733a343a226c696e6b223b733a31393a2261646d696e2f6f70706f7274756e6974696573223b733a343a2269636f6e223b733a31323a2266612066612d66696c746572223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223537223b733a353a226c6162656c223b733a383a2270726f6a65637473223b733a343a226c696e6b223b733a31343a2261646d696e2f70726f6a65637473223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223538223b733a353a226c6162656c223b733a343a2262756773223b733a343a226c696e6b223b733a31303a2261646d696e2f62756773223b733a343a2269636f6e223b733a393a2266612066612d627567223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223539223b733a353a226c6162656c223b733a373a2270726f6a656374223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223630223b733a353a226c6162656c223b733a31323a227461736b735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f7461736b735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223631223b733a353a226c6162656c223b733a31313a22627567735f7265706f7274223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f627567735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223632223b733a353a226c6162656c223b733a31343a227469636b6574735f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f7469636b6574735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223633223b733a353a226c6162656c223b733a31333a22636c69656e745f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f636c69656e745f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3430223b733a363a22737461747573223b733a313a2231223b7d693a34363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223636223b733a353a226c6162656c223b733a31363a227461736b735f61737369676e6d656e74223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f7461736b735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223637223b733a353a226c6162656c223b733a31353a22627567735f61737369676e6d656e74223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f627567735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223638223b733a353a226c6162656c223b733a31343a2270726f6a6563745f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f70726f6a6563745f7265706f7274223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223639223b733a353a226c6162656c223b733a31333a22676f616c5f747261636b696e67223b733a343a226c696e6b223b733a31393a2261646d696e2f676f616c5f747261636b696e67223b733a343a2269636f6e223b733a31323a2266612066612d736869656c64223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223730223b733a353a226c6162656c223b733a31313a226465706172746d656e7473223b733a343a226c696e6b223b733a31373a2261646d696e2f6465706172746d656e7473223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223135223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223731223b733a353a226c6162656c223b733a373a22686f6c69646179223b733a343a226c696e6b223b733a31333a2261646d696e2f686f6c69646179223b733a343a2269636f6e223b733a32313a2266612066612d63616c656e6461722d706c75732d6f223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223732223b733a353a226c6162656c223b733a31363a226c656176655f6d616e6167656d656e74223b733a343a226c696e6b223b733a32323a2261646d696e2f6c656176655f6d616e6167656d656e74223b733a343a2269636f6e223b733a31313a2266612066612d706c616e65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223231223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223733223b733a353a226c6162656c223b733a393a227574696c6974696573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223234223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223734223b733a353a226c6162656c223b733a383a226f76657274696d65223b733a343a226c696e6b223b733a32343a2261646d696e2f7574696c69746965732f6f76657274696d65223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a35353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223735223b733a353a226c6162656c223b733a31323a226f66666963655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d636f646570656e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223136223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223736223b733a353a226c6162656c223b733a31343a2273746f636b5f63617465676f7279223b733a343a226c696e6b223b733a32363a2261646d696e2f73746f636b2f73746f636b5f63617465676f7279223b733a343a2269636f6e223b733a31333a2266612066612d736c6964657273223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a35373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223737223b733a353a226c6162656c223b733a31323a226d616e6167655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223738223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223739223b733a353a226c6162656c223b733a31323a2273746f636b5f7265706f7274223b733a343a226c696e6b223b733a31383a2261646d696e2f73746f636b2f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d6c696e652d6368617274223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030373a31383a3235223b733a363a22737461747573223b733a313a2231223b7d693a36303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223831223b733a353a226c6162656c223b733a31303a2273746f636b5f6c697374223b733a343a226c696e6b223b733a32323a2261646d696e2f73746f636b2f73746f636b5f6c697374223b733a343a2269636f6e223b733a32303a2266612066612d737461636b2d65786368616e6765223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a36313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223832223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a32343a2261646d696e2f73746f636b2f61737369676e5f73746f636b223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223833223b733a353a226c6162656c223b733a31393a2261737369676e5f73746f636b5f7265706f7274223b733a343a226c696e6b223b733a33313a2261646d696e2f73746f636b2f61737369676e5f73746f636b5f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223834223b733a353a226c6162656c223b733a31333a2273746f636b5f686973746f7279223b733a343a226c696e6b223b733a32353a2261646d696e2f73746f636b2f73746f636b5f686973746f7279223b733a343a2269636f6e223b733a31373a2266612066612d66696c652d746578742d6f223b733a363a22706172656e74223b733a323a223737223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223835223b733a353a226c6162656c223b733a31313a22706572666f726d616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31343a2266612066612d6472696262626c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223230223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223836223b733a353a226c6162656c223b733a32313a22706572666f726d616e63655f696e64696361746f72223b733a343a226c696e6b223b733a33393a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f696e64696361746f72223b733a343a2269636f6e223b733a31323a2266612066612d72616e646f6d223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223837223b733a353a226c6162656c223b733a31383a22706572666f726d616e63655f7265706f7274223b733a343a226c696e6b223b733a33363a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223838223b733a353a226c6162656c223b733a31343a22676976655f61707072616973616c223b733a343a226c696e6b223b733a34343a2261646d696e2f706572666f726d616e63652f676976655f706572666f726d616e63655f61707072616973616c223b733a343a2269636f6e223b733a31303a2266612066612d706c7573223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223839223b733a353a226c6162656c223b733a373a22706179726f6c6c223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223139223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223930223b733a353a226c6162656c223b733a32313a226d616e6167655f73616c6172795f64657461696c73223b733a343a226c696e6b223b733a33353a2261646d696e2f706179726f6c6c2f6d616e6167655f73616c6172795f64657461696c73223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223931223b733a353a226c6162656c223b733a32303a22656d706c6f7965655f73616c6172795f6c697374223b733a343a226c696e6b223b733a33343a2261646d696e2f706179726f6c6c2f656d706c6f7965655f73616c6172795f6c697374223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223932223b733a353a226c6162656c223b733a31323a226d616b655f7061796d656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f706179726f6c6c2f6d616b655f7061796d656e74223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223933223b733a353a226c6162656c223b733a31363a2267656e65726174655f706179736c6970223b733a343a226c696e6b223b733a33303a2261646d696e2f706179726f6c6c2f67656e65726174655f706179736c6970223b733a343a2269636f6e223b733a31333a2266612066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223934223b733a353a226c6162656c223b733a31353a2273616c6172795f74656d706c617465223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f73616c6172795f74656d706c617465223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223935223b733a353a226c6162656c223b733a31313a22686f75726c795f72617465223b733a343a226c696e6b223b733a32353a2261646d696e2f706179726f6c6c2f686f75726c795f72617465223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223936223b733a353a226c6162656c223b733a31353a22706179726f6c6c5f73756d6d617279223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f706179726f6c6c5f73756d6d617279223b733a343a2269636f6e223b733a31383a2266612066612d63616d6572612d726574726f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223937223b733a353a226c6162656c223b733a31343a2270726f766964656e745f66756e64223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f70726f766964656e745f66756e64223b733a343a2269636f6e223b733a31353a2266612066612d627269656663617365223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223938223b733a353a226c6162656c223b733a31343a22616476616e63655f73616c617279223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f616476616e63655f73616c617279223b733a343a2269636f6e223b733a31393a2266612066612d63632d6d617374657263617264223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223939223b733a353a226c6162656c223b733a31343a22656d706c6f7965655f6177617264223b733a343a226c696e6b223b733a31313a2261646d696e2f6177617264223b733a343a2269636f6e223b733a31323a2266612066612d74726f706879223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a37393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313030223b733a353a226c6162656c223b733a31333a22616e6e6f756e63656d656e7473223b733a343a226c696e6b223b733a31393a2261646d696e2f616e6e6f756e63656d656e7473223b733a343a2269636f6e223b733a31393a2266612066612d62756c6c686f726e2069636f6e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313031223b733a353a226c6162656c223b733a383a22747261696e696e67223b733a343a226c696e6b223b733a31343a2261646d696e2f747261696e696e67223b733a343a2269636f6e223b733a31343a2266612066612d7375697463617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223232223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313032223b733a353a226c6162656c223b733a31323a226a6f625f63697263756c6172223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d676c6f6265223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223138223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313033223b733a353a226c6162656c223b733a31313a226a6f62735f706f73746564223b733a343a226c696e6b223b733a33303a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f706f73746564223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313034223b733a353a226c6162656c223b733a31373a226a6f62735f6170706c69636174696f6e73223b733a343a226c696e6b223b733a33363a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f6170706c69636174696f6e73223b733a343a2269636f6e223b733a31333a2266612066612d636f6d70617373223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313035223b733a353a226c6162656c223b733a31303a22617474656e64616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223137223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313036223b733a353a226c6162656c223b733a31383a2274696d656368616e67655f72657175657374223b733a343a226c696e6b223b733a33353a2261646d696e2f617474656e64616e63652f74696d656368616e67655f72657175657374223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313037223b733a353a226c6162656c223b733a31373a22617474656e64616e63655f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f617474656e64616e63652f617474656e64616e63655f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313038223b733a353a226c6162656c223b733a31323a2274696d655f686973746f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f617474656e64616e63652f74696d655f686973746f7279223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313039223b733a353a226c6162656c223b733a393a2270756c6c2d646f776e223b733a343a226c696e6b223b733a303a22223b733a343a2269636f6e223b733a303a22223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d33302030313a31333a3230223b733a363a22737461747573223b733a313a2230223b7d693a38393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313130223b733a353a226c6162656c223b733a31313a2266696c656d616e61676572223b733a343a226c696e6b223b733a31373a2261646d696e2f66696c656d616e61676572223b733a343a2269636f6e223b733a31303a2266612066612d66696c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a39303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313131223b733a353a226c6162656c223b733a31353a22636f6d70616e795f64657461696c73223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d696e666f2d636972636c65223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313132223b733a353a226c6162656c223b733a31353a2273797374656d5f73657474696e6773223b733a343a226c696e6b223b733a32313a2261646d696e2f73657474696e67732f73797374656d223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6465736b746f70223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313133223b733a353a226c6162656c223b733a31343a22656d61696c5f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f656d61696c223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d656e76656c6f7065223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313134223b733a353a226c6162656c223b733a31353a22656d61696c5f74656d706c61746573223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f74656d706c61746573223b733a343a2269636f6e223b733a32353a2266612066612d66772066612d70656e63696c2d737175617265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313135223b733a353a226c6162656c223b733a31373a22656d61696c5f696e746567726174696f6e223b733a343a226c696e6b223b733a33323a2261646d696e2f73657474696e67732f656d61696c5f696e746567726174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313136223b733a353a226c6162656c223b733a31363a227061796d656e745f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7061796d656e7473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d646f6c6c6172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313137223b733a353a226c6162656c223b733a31363a22696e766f6963655f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f696e766f696365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313138223b733a353a226c6162656c223b733a31373a22657374696d6174655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f657374696d617465223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313139223b733a353a226c6162656c223b733a32323a227469636b6574735f6c656164735f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f7469636b657473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d7469636b6574223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313230223b733a353a226c6162656c223b733a31343a227468656d655f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f7468656d65223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d636f6465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313231223b733a353a226c6162656c223b733a31323a22776f726b696e675f64617973223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f776f726b696e675f64617973223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d63616c656e646172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313232223b733a353a226c6162656c223b733a31343a226c656176655f63617465676f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f6c656176655f63617465676f7279223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d706167656c696e6573223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313233223b733a353a226c6162656c223b733a31353a22696e636f6d655f63617465676f7279223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f696e636f6d655f63617465676f7279223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d6365727469666963617465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313234223b733a353a226c6162656c223b733a31363a22657870656e73655f63617465676f7279223b733a343a226c696e6b223b733a33313a2261646d696e2f73657474696e67732f657870656e73655f63617465676f7279223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7461736b73223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313235223b733a353a226c6162656c223b733a31343a22637573746f6d65725f67726f7570223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f637573746f6d65725f67726f7570223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7573657273223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313236223b733a353a226c6162656c223b733a31333a22636f6e74726163745f74797065223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f636f6e74726163745f74797065223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313237223b733a353a226c6162656c223b733a31313a226c6561645f737461747573223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313238223b733a353a226c6162656c223b733a31313a226c6561645f736f75726365223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f736f75726365223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d6172726f772d646f776e223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313239223b733a353a226c6162656c223b733a32363a226f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a226c696e6b223b733a34313a2261646d696e2f73657474696e67732f6f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a2269636f6e223b733a32343a2266612066612d66772066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313330223b733a353a226c6162656c223b733a31323a22637573746f6d5f6669656c64223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f637573746f6d5f6669656c64223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d737461722d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313331223b733a353a226c6162656c223b733a31343a227061796d656e745f6d6574686f64223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f7061796d656e745f6d6574686f64223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313332223b733a353a226c6162656c223b733a373a2263726f6e6a6f62223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f63726f6e6a6f62223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d636f6e74616f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313333223b733a353a226c6162656c223b733a31353a226d656e755f616c6c6f636174696f6e223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f6d656e755f616c6c6f636174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612066612d636f6d70617373223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313334223b733a353a226c6162656c223b733a31323a226e6f74696669636174696f6e223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313335223b733a353a226c6162656c223b733a31383a22656d61696c5f6e6f74696669636174696f6e223b733a343a226c696e6b223b733a33333a2261646d696e2f73657474696e67732f656d61696c5f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313336223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6461746162617365223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313337223b733a353a226c6162656c223b733a31323a227472616e736c6174696f6e73223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f7472616e736c6174696f6e73223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6c616e6775616765223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313338223b733a353a226c6162656c223b733a31333a2273797374656d5f757064617465223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f73797374656d5f757064617465223b733a343a2269636f6e223b733a32373a2266612066612d66772066612d70656e63696c2d7371756172652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313339223b733a353a226c6162656c223b733a31323a22707269766174655f63686174223b733a343a226c696e6b223b733a31383a22636861742f636f6e766572736174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d656e76656c6f7065223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3131393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313430223b733a353a226c6162656c223b733a393a2270726f706f73616c73223b733a343a226c696e6b223b733a31353a2261646d696e2f70726f706f73616c73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a3132303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313431223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a32313a2266612066612d7175657374696f6e2d636972636c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223132223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313432223b733a353a226c6162656c223b733a31303a2263617465676f72696573223b733a343a226c696e6b223b733a33303a2261646d696e2f6b6e6f776c65646765626173652f63617465676f72696573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313433223b733a353a226c6162656c223b733a383a2261727469636c6573223b733a343a226c696e6b223b733a32383a2261646d696e2f6b6e6f776c65646765626173652f61727469636c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313434223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a31393a2261646d696e2f6b6e6f776c6564676562617365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313435223b733a353a226c6162656c223b733a31383a2264617368626f6172645f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f64617368626f617264223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d64617368626f617264223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3132353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313436223b733a353a226c6162656c223b733a32303a227472616e73616374696f6e735f7265706f727473223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35393a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313437223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f73616c65735f7265706f7274223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031333a34323a3233223b733a363a22737461747573223b733a313a2231223b7d693a3132373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313438223b733a353a226c6162656c223b733a31353a226d61726b5f617474656e64616e6365223b733a343a226c696e6b223b733a32313a2261646d696e2f6d61726b5f617474656e64616e6365223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313439223b733a353a226c6162656c223b733a31303a22616c6c6f7765645f6970223b733a343a226c696e6b223b733a32353a2261646d696e2f73657474696e67732f616c6c6f7765645f6970223b733a343a2269636f6e223b733a31323a2266612066612d736572766572223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d31332032323a32323a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313530223b733a353a226c6162656c223b733a353a2273746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2269636f6e2d6c6179657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3133303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313531223b733a353a226c6162656c223b733a383a22737570706c696572223b733a343a226c696e6b223b733a31343a2261646d696e2f737570706c696572223b733a343a2269636f6e223b733a31343a2269636f6e2d627269656663617365223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313532223b733a353a226c6162656c223b733a303a22223b733a343a226c696e6b223b733a31343a2261646d696e2f7075726368617365223b733a343a2269636f6e223b733a31323a2269636f6e2d68616e64626167223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313533223b733a353a226c6162656c223b733a31323a2272657475726e5f73746f636b223b733a343a226c696e6b223b733a31383a2261646d696e2f72657475726e5f73746f636b223b733a343a2269636f6e223b733a31343a2269636f6e2d73686172652d616c74223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031392d30352d30342030343a34393a3330223b733a363a22737461747573223b733a313a2231223b7d693a3133333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313534223b733a353a226c6162656c223b733a31363a2270757263686173655f7061796d656e74223b733a343a226c696e6b223b733a32373a2261646d696e2f70757263686173652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31363a2269636f6e2d6372656469742d63617264223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031392d30352d30342030323a32333a3131223b733a363a22737461747573223b733a313a2231223b7d693a3133343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313535223b733a353a226c6162656c223b733a31373a2270757263686173655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7075726368617365223b733a343a2269636f6e223b733a31383a2266612d66772069636f6e2d68616e64626167223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342031313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d7d757365725f6e616d657c733a373a2261646d696e6b6f223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6e616d657c733a373a2241646d696e6b6f223b70686f746f7c733a32363a2275706c6f6164732f64656661756c745f6176617461722e6a7067223b64657369676e6174696f6e735f69647c733a313a2230223b757365725f69647c733a313a2238223b6c6173745f6c6f67696e7c733a31393a22323032302d30322d30352032323a33373a3031223b6f6e6c696e655f74696d657c693a313538313035323539373b6c6f67676564696e7c623a313b757365725f747970657c733a313a2231223b757365725f666c61677c693a313b646972656374696f6e7c733a333a226c7472223b);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('hju4vi1c5mdk5nerajtl0phjitloc4bu', '103.99.15.182', 1581058350, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035373632323b6d656e755f6163746976655f69647c613a333a7b693a303b733a333a22313230223b693a313b733a323a223235223b693a323b733a313a2230223b7d75726c7c733a32303a2261646d696e2f73657474696e67732f7468656d65223b757365725f726f6c6c7c613a3133353a7b693a303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2231223b733a353a226c6162656c223b733a393a2264617368626f617264223b733a343a226c696e6b223b733a31353a2261646d696e2f64617368626f617264223b733a343a2269636f6e223b733a31353a2266612066612d64617368626f617264223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312031343a30393a3336223b733a363a22737461747573223b733a313a2231223b7d693a313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2232223b733a353a226c6162656c223b733a383a2263616c656e646172223b733a343a226c696e6b223b733a31343a2261646d696e2f63616c656e646172223b733a343a2269636f6e223b733a31343a2266612066612d63616c656e646172223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2234223b733a353a226c6162656c223b733a363a22636c69656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f636c69656e742f6d616e6167655f636c69656e74223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223134223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2235223b733a353a226c6162656c223b733a373a226d61696c626f78223b733a343a226c696e6b223b733a31333a2261646d696e2f6d61696c626f78223b733a343a2269636f6e223b733a31363a2266612066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2236223b733a353a226c6162656c223b733a373a227469636b657473223b733a343a226c696e6b223b733a31333a2261646d696e2f7469636b657473223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223132223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223133223b733a353a226c6162656c223b733a373a22696e766f696365223b733a343a226c696e6b223b733a32383a2261646d696e2f696e766f6963652f6d616e6167655f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223134223b733a353a226c6162656c223b733a393a22657374696d61746573223b733a343a226c696e6b223b733a31353a2261646d696e2f657374696d61746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223135223b733a353a226c6162656c223b733a31373a227061796d656e74735f7265636569766564223b733a343a226c696e6b223b733a32363a2261646d696e2f696e766f6963652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3234223b733a363a22737461747573223b733a313a2231223b7d693a393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223136223b733a353a226c6162656c223b733a393a227461785f7261746573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f7461785f7261746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a31303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223231223b733a353a226c6162656c223b733a31303a2271756f746174696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d7061737465223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223232223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f6c697374223b733a343a226c696e6b223b733a31363a2261646d696e2f71756f746174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30352d31372030353a31393a3033223b733a363a22737461747573223b733a313a2231223b7d693a31323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223233223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f666f726d223b733a343a226c696e6b223b733a33323a2261646d696e2f71756f746174696f6e732f71756f746174696f6e735f666f726d223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a31333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223234223b733a353a226c6162656c223b733a343a2275736572223b733a343a226c696e6b223b733a32303a2261646d696e2f757365722f757365725f6c697374223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223235223b733a353a226c6162656c223b733a383a2273657474696e6773223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a31303a2266612066612d636f6773223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223237223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223236223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a31343a2266612066612d6461746162617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223238223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223239223b733a353a226c6162656c223b733a31373a227472616e73616374696f6e735f6d656e75223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223133223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223330223b733a353a226c6162656c223b733a373a226465706f736974223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f6465706f736974223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3333223b733a363a22737461747573223b733a313a2231223b7d693a31383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223331223b733a353a226c6162656c223b733a373a22657870656e7365223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3337223b733a363a22737461747573223b733a313a2231223b7d693a31393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223332223b733a353a226c6162656c223b733a383a227472616e73666572223b733a343a226c696e6b223b733a32373a2261646d696e2f7472616e73616374696f6e732f7472616e73666572223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3430223b733a363a22737461747573223b733a313a2231223b7d693a32303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223333223b733a353a226c6162656c223b733a31393a227472616e73616374696f6e735f7265706f7274223b733a343a226c696e6b223b733a33383a2261646d696e2f7472616e73616374696f6e732f7472616e73616374696f6e735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3434223b733a363a22737461747573223b733a313a2231223b7d693a32313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223334223b733a353a226c6162656c223b733a31333a2262616c616e63655f7368656574223b733a343a226c696e6b223b733a33323a2261646d696e2f7472616e73616374696f6e732f62616c616e63655f7368656574223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3437223b733a363a22737461747573223b733a313a2231223b7d693a32323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223336223b733a353a226c6162656c223b733a393a2262616e6b5f63617368223b733a343a226c696e6b223b733a32383a2261646d696e2f6163636f756e742f6d616e6167655f6163636f756e74223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3531223b733a363a22737461747573223b733a313a2231223b7d693a32333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223339223b733a353a226c6162656c223b733a353a226974656d73223b733a343a226c696e6b223b733a32323a2261646d696e2f6974656d732f6974656d735f6c697374223b733a343a2269636f6e223b733a31303a2266612066612d63756265223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031392d30352d30332030373a31393a3530223b733a363a22737461747573223b733a313a2231223b7d693a32343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223432223b733a353a226c6162656c223b733a363a227265706f7274223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223235223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a32353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223433223b733a353a226c6162656c223b733a31373a226163636f756e745f73746174656d656e74223b733a343a226c696e6b223b733a33303a2261646d696e2f7265706f72742f6163636f756e745f73746174656d656e74223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223434223b733a353a226c6162656c223b733a31333a22696e636f6d655f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f696e636f6d655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223435223b733a353a226c6162656c223b733a31343a22657870656e73655f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f657870656e73655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223436223b733a353a226c6162656c223b733a31343a22696e636f6d655f657870656e7365223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f696e636f6d655f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a32393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223437223b733a353a226c6162656c223b733a31363a22646174655f776973655f7265706f7274223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f646174655f776973655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223438223b733a353a226c6162656c223b733a31303a22616c6c5f696e636f6d65223b733a343a226c696e6b223b733a32333a2261646d696e2f7265706f72742f616c6c5f696e636f6d65223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223439223b733a353a226c6162656c223b733a31313a22616c6c5f657870656e7365223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f616c6c5f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223530223b733a353a226c6162656c223b733a31353a22616c6c5f7472616e73616374696f6e223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f616c6c5f7472616e73616374696f6e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223531223b733a353a226c6162656c223b733a31373a22726563757272696e675f696e766f696365223b733a343a226c696e6b223b733a33313a2261646d696e2f696e766f6963652f726563757272696e675f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a33343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223532223b733a353a226c6162656c223b733a31353a227472616e736665725f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f7472616e73616374696f6e732f7472616e736665725f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3539223b733a363a22737461747573223b733a313a2231223b7d693a33353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223533223b733a353a226c6162656c223b733a31353a227265706f72745f62795f6d6f6e7468223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f7265706f72745f62795f6d6f6e7468223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223534223b733a353a226c6162656c223b733a353a227461736b73223b733a343a226c696e6b223b733a32303a2261646d696e2f7461736b732f616c6c5f7461736b223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223535223b733a353a226c6162656c223b733a353a226c65616473223b733a343a226c696e6b223b733a31313a2261646d696e2f6c65616473223b733a343a2269636f6e223b733a31323a2266612066612d726f636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223536223b733a353a226c6162656c223b733a31333a226f70706f7274756e6974696573223b733a343a226c696e6b223b733a31393a2261646d696e2f6f70706f7274756e6974696573223b733a343a2269636f6e223b733a31323a2266612066612d66696c746572223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223537223b733a353a226c6162656c223b733a383a2270726f6a65637473223b733a343a226c696e6b223b733a31343a2261646d696e2f70726f6a65637473223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223538223b733a353a226c6162656c223b733a343a2262756773223b733a343a226c696e6b223b733a31303a2261646d696e2f62756773223b733a343a2269636f6e223b733a393a2266612066612d627567223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223539223b733a353a226c6162656c223b733a373a2270726f6a656374223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223630223b733a353a226c6162656c223b733a31323a227461736b735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f7461736b735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223631223b733a353a226c6162656c223b733a31313a22627567735f7265706f7274223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f627567735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223632223b733a353a226c6162656c223b733a31343a227469636b6574735f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f7469636b6574735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223633223b733a353a226c6162656c223b733a31333a22636c69656e745f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f636c69656e745f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3430223b733a363a22737461747573223b733a313a2231223b7d693a34363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223636223b733a353a226c6162656c223b733a31363a227461736b735f61737369676e6d656e74223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f7461736b735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223637223b733a353a226c6162656c223b733a31353a22627567735f61737369676e6d656e74223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f627567735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223638223b733a353a226c6162656c223b733a31343a2270726f6a6563745f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f70726f6a6563745f7265706f7274223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223639223b733a353a226c6162656c223b733a31333a22676f616c5f747261636b696e67223b733a343a226c696e6b223b733a31393a2261646d696e2f676f616c5f747261636b696e67223b733a343a2269636f6e223b733a31323a2266612066612d736869656c64223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223730223b733a353a226c6162656c223b733a31313a226465706172746d656e7473223b733a343a226c696e6b223b733a31373a2261646d696e2f6465706172746d656e7473223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223135223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223731223b733a353a226c6162656c223b733a373a22686f6c69646179223b733a343a226c696e6b223b733a31333a2261646d696e2f686f6c69646179223b733a343a2269636f6e223b733a32313a2266612066612d63616c656e6461722d706c75732d6f223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223732223b733a353a226c6162656c223b733a31363a226c656176655f6d616e6167656d656e74223b733a343a226c696e6b223b733a32323a2261646d696e2f6c656176655f6d616e6167656d656e74223b733a343a2269636f6e223b733a31313a2266612066612d706c616e65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223231223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223733223b733a353a226c6162656c223b733a393a227574696c6974696573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223234223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223734223b733a353a226c6162656c223b733a383a226f76657274696d65223b733a343a226c696e6b223b733a32343a2261646d696e2f7574696c69746965732f6f76657274696d65223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a35353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223735223b733a353a226c6162656c223b733a31323a226f66666963655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d636f646570656e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223136223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223736223b733a353a226c6162656c223b733a31343a2273746f636b5f63617465676f7279223b733a343a226c696e6b223b733a32363a2261646d696e2f73746f636b2f73746f636b5f63617465676f7279223b733a343a2269636f6e223b733a31333a2266612066612d736c6964657273223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a35373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223737223b733a353a226c6162656c223b733a31323a226d616e6167655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223738223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223739223b733a353a226c6162656c223b733a31323a2273746f636b5f7265706f7274223b733a343a226c696e6b223b733a31383a2261646d696e2f73746f636b2f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d6c696e652d6368617274223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030373a31383a3235223b733a363a22737461747573223b733a313a2231223b7d693a36303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223831223b733a353a226c6162656c223b733a31303a2273746f636b5f6c697374223b733a343a226c696e6b223b733a32323a2261646d696e2f73746f636b2f73746f636b5f6c697374223b733a343a2269636f6e223b733a32303a2266612066612d737461636b2d65786368616e6765223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a36313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223832223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a32343a2261646d696e2f73746f636b2f61737369676e5f73746f636b223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223833223b733a353a226c6162656c223b733a31393a2261737369676e5f73746f636b5f7265706f7274223b733a343a226c696e6b223b733a33313a2261646d696e2f73746f636b2f61737369676e5f73746f636b5f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223834223b733a353a226c6162656c223b733a31333a2273746f636b5f686973746f7279223b733a343a226c696e6b223b733a32353a2261646d696e2f73746f636b2f73746f636b5f686973746f7279223b733a343a2269636f6e223b733a31373a2266612066612d66696c652d746578742d6f223b733a363a22706172656e74223b733a323a223737223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223835223b733a353a226c6162656c223b733a31313a22706572666f726d616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31343a2266612066612d6472696262626c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223230223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223836223b733a353a226c6162656c223b733a32313a22706572666f726d616e63655f696e64696361746f72223b733a343a226c696e6b223b733a33393a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f696e64696361746f72223b733a343a2269636f6e223b733a31323a2266612066612d72616e646f6d223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223837223b733a353a226c6162656c223b733a31383a22706572666f726d616e63655f7265706f7274223b733a343a226c696e6b223b733a33363a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223838223b733a353a226c6162656c223b733a31343a22676976655f61707072616973616c223b733a343a226c696e6b223b733a34343a2261646d696e2f706572666f726d616e63652f676976655f706572666f726d616e63655f61707072616973616c223b733a343a2269636f6e223b733a31303a2266612066612d706c7573223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223839223b733a353a226c6162656c223b733a373a22706179726f6c6c223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223139223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223930223b733a353a226c6162656c223b733a32313a226d616e6167655f73616c6172795f64657461696c73223b733a343a226c696e6b223b733a33353a2261646d696e2f706179726f6c6c2f6d616e6167655f73616c6172795f64657461696c73223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223931223b733a353a226c6162656c223b733a32303a22656d706c6f7965655f73616c6172795f6c697374223b733a343a226c696e6b223b733a33343a2261646d696e2f706179726f6c6c2f656d706c6f7965655f73616c6172795f6c697374223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223932223b733a353a226c6162656c223b733a31323a226d616b655f7061796d656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f706179726f6c6c2f6d616b655f7061796d656e74223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223933223b733a353a226c6162656c223b733a31363a2267656e65726174655f706179736c6970223b733a343a226c696e6b223b733a33303a2261646d696e2f706179726f6c6c2f67656e65726174655f706179736c6970223b733a343a2269636f6e223b733a31333a2266612066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223934223b733a353a226c6162656c223b733a31353a2273616c6172795f74656d706c617465223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f73616c6172795f74656d706c617465223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223935223b733a353a226c6162656c223b733a31313a22686f75726c795f72617465223b733a343a226c696e6b223b733a32353a2261646d696e2f706179726f6c6c2f686f75726c795f72617465223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223936223b733a353a226c6162656c223b733a31353a22706179726f6c6c5f73756d6d617279223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f706179726f6c6c5f73756d6d617279223b733a343a2269636f6e223b733a31383a2266612066612d63616d6572612d726574726f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223937223b733a353a226c6162656c223b733a31343a2270726f766964656e745f66756e64223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f70726f766964656e745f66756e64223b733a343a2269636f6e223b733a31353a2266612066612d627269656663617365223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223938223b733a353a226c6162656c223b733a31343a22616476616e63655f73616c617279223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f616476616e63655f73616c617279223b733a343a2269636f6e223b733a31393a2266612066612d63632d6d617374657263617264223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223939223b733a353a226c6162656c223b733a31343a22656d706c6f7965655f6177617264223b733a343a226c696e6b223b733a31313a2261646d696e2f6177617264223b733a343a2269636f6e223b733a31323a2266612066612d74726f706879223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a37393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313030223b733a353a226c6162656c223b733a31333a22616e6e6f756e63656d656e7473223b733a343a226c696e6b223b733a31393a2261646d696e2f616e6e6f756e63656d656e7473223b733a343a2269636f6e223b733a31393a2266612066612d62756c6c686f726e2069636f6e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313031223b733a353a226c6162656c223b733a383a22747261696e696e67223b733a343a226c696e6b223b733a31343a2261646d696e2f747261696e696e67223b733a343a2269636f6e223b733a31343a2266612066612d7375697463617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223232223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313032223b733a353a226c6162656c223b733a31323a226a6f625f63697263756c6172223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d676c6f6265223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223138223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313033223b733a353a226c6162656c223b733a31313a226a6f62735f706f73746564223b733a343a226c696e6b223b733a33303a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f706f73746564223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313034223b733a353a226c6162656c223b733a31373a226a6f62735f6170706c69636174696f6e73223b733a343a226c696e6b223b733a33363a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f6170706c69636174696f6e73223b733a343a2269636f6e223b733a31333a2266612066612d636f6d70617373223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313035223b733a353a226c6162656c223b733a31303a22617474656e64616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223137223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313036223b733a353a226c6162656c223b733a31383a2274696d656368616e67655f72657175657374223b733a343a226c696e6b223b733a33353a2261646d696e2f617474656e64616e63652f74696d656368616e67655f72657175657374223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313037223b733a353a226c6162656c223b733a31373a22617474656e64616e63655f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f617474656e64616e63652f617474656e64616e63655f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313038223b733a353a226c6162656c223b733a31323a2274696d655f686973746f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f617474656e64616e63652f74696d655f686973746f7279223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313039223b733a353a226c6162656c223b733a393a2270756c6c2d646f776e223b733a343a226c696e6b223b733a303a22223b733a343a2269636f6e223b733a303a22223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d33302030313a31333a3230223b733a363a22737461747573223b733a313a2230223b7d693a38393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313130223b733a353a226c6162656c223b733a31313a2266696c656d616e61676572223b733a343a226c696e6b223b733a31373a2261646d696e2f66696c656d616e61676572223b733a343a2269636f6e223b733a31303a2266612066612d66696c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a39303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313131223b733a353a226c6162656c223b733a31353a22636f6d70616e795f64657461696c73223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d696e666f2d636972636c65223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313132223b733a353a226c6162656c223b733a31353a2273797374656d5f73657474696e6773223b733a343a226c696e6b223b733a32313a2261646d696e2f73657474696e67732f73797374656d223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6465736b746f70223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313133223b733a353a226c6162656c223b733a31343a22656d61696c5f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f656d61696c223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d656e76656c6f7065223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313134223b733a353a226c6162656c223b733a31353a22656d61696c5f74656d706c61746573223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f74656d706c61746573223b733a343a2269636f6e223b733a32353a2266612066612d66772066612d70656e63696c2d737175617265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313135223b733a353a226c6162656c223b733a31373a22656d61696c5f696e746567726174696f6e223b733a343a226c696e6b223b733a33323a2261646d696e2f73657474696e67732f656d61696c5f696e746567726174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313136223b733a353a226c6162656c223b733a31363a227061796d656e745f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7061796d656e7473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d646f6c6c6172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313137223b733a353a226c6162656c223b733a31363a22696e766f6963655f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f696e766f696365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313138223b733a353a226c6162656c223b733a31373a22657374696d6174655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f657374696d617465223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313139223b733a353a226c6162656c223b733a32323a227469636b6574735f6c656164735f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f7469636b657473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d7469636b6574223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313230223b733a353a226c6162656c223b733a31343a227468656d655f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f7468656d65223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d636f6465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313231223b733a353a226c6162656c223b733a31323a22776f726b696e675f64617973223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f776f726b696e675f64617973223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d63616c656e646172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313232223b733a353a226c6162656c223b733a31343a226c656176655f63617465676f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f6c656176655f63617465676f7279223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d706167656c696e6573223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313233223b733a353a226c6162656c223b733a31353a22696e636f6d655f63617465676f7279223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f696e636f6d655f63617465676f7279223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d6365727469666963617465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313234223b733a353a226c6162656c223b733a31363a22657870656e73655f63617465676f7279223b733a343a226c696e6b223b733a33313a2261646d696e2f73657474696e67732f657870656e73655f63617465676f7279223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7461736b73223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313235223b733a353a226c6162656c223b733a31343a22637573746f6d65725f67726f7570223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f637573746f6d65725f67726f7570223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7573657273223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313236223b733a353a226c6162656c223b733a31333a22636f6e74726163745f74797065223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f636f6e74726163745f74797065223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313237223b733a353a226c6162656c223b733a31313a226c6561645f737461747573223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313238223b733a353a226c6162656c223b733a31313a226c6561645f736f75726365223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f736f75726365223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d6172726f772d646f776e223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313239223b733a353a226c6162656c223b733a32363a226f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a226c696e6b223b733a34313a2261646d696e2f73657474696e67732f6f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a2269636f6e223b733a32343a2266612066612d66772066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313330223b733a353a226c6162656c223b733a31323a22637573746f6d5f6669656c64223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f637573746f6d5f6669656c64223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d737461722d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313331223b733a353a226c6162656c223b733a31343a227061796d656e745f6d6574686f64223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f7061796d656e745f6d6574686f64223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313332223b733a353a226c6162656c223b733a373a2263726f6e6a6f62223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f63726f6e6a6f62223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d636f6e74616f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313333223b733a353a226c6162656c223b733a31353a226d656e755f616c6c6f636174696f6e223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f6d656e755f616c6c6f636174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612066612d636f6d70617373223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313334223b733a353a226c6162656c223b733a31323a226e6f74696669636174696f6e223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313335223b733a353a226c6162656c223b733a31383a22656d61696c5f6e6f74696669636174696f6e223b733a343a226c696e6b223b733a33333a2261646d696e2f73657474696e67732f656d61696c5f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313336223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6461746162617365223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313337223b733a353a226c6162656c223b733a31323a227472616e736c6174696f6e73223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f7472616e736c6174696f6e73223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6c616e6775616765223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313338223b733a353a226c6162656c223b733a31333a2273797374656d5f757064617465223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f73797374656d5f757064617465223b733a343a2269636f6e223b733a32373a2266612066612d66772066612d70656e63696c2d7371756172652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313339223b733a353a226c6162656c223b733a31323a22707269766174655f63686174223b733a343a226c696e6b223b733a31383a22636861742f636f6e766572736174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d656e76656c6f7065223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3131393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313430223b733a353a226c6162656c223b733a393a2270726f706f73616c73223b733a343a226c696e6b223b733a31353a2261646d696e2f70726f706f73616c73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a3132303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313431223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a32313a2266612066612d7175657374696f6e2d636972636c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223132223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313432223b733a353a226c6162656c223b733a31303a2263617465676f72696573223b733a343a226c696e6b223b733a33303a2261646d696e2f6b6e6f776c65646765626173652f63617465676f72696573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313433223b733a353a226c6162656c223b733a383a2261727469636c6573223b733a343a226c696e6b223b733a32383a2261646d696e2f6b6e6f776c65646765626173652f61727469636c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313434223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a31393a2261646d696e2f6b6e6f776c6564676562617365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313435223b733a353a226c6162656c223b733a31383a2264617368626f6172645f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f64617368626f617264223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d64617368626f617264223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3132353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313436223b733a353a226c6162656c223b733a32303a227472616e73616374696f6e735f7265706f727473223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35393a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313437223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f73616c65735f7265706f7274223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031333a34323a3233223b733a363a22737461747573223b733a313a2231223b7d693a3132373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313438223b733a353a226c6162656c223b733a31353a226d61726b5f617474656e64616e6365223b733a343a226c696e6b223b733a32313a2261646d696e2f6d61726b5f617474656e64616e6365223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313439223b733a353a226c6162656c223b733a31303a22616c6c6f7765645f6970223b733a343a226c696e6b223b733a32353a2261646d696e2f73657474696e67732f616c6c6f7765645f6970223b733a343a2269636f6e223b733a31323a2266612066612d736572766572223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d31332032323a32323a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313530223b733a353a226c6162656c223b733a353a2273746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2269636f6e2d6c6179657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3133303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313531223b733a353a226c6162656c223b733a383a22737570706c696572223b733a343a226c696e6b223b733a31343a2261646d696e2f737570706c696572223b733a343a2269636f6e223b733a31343a2269636f6e2d627269656663617365223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313532223b733a353a226c6162656c223b733a303a22223b733a343a226c696e6b223b733a31343a2261646d696e2f7075726368617365223b733a343a2269636f6e223b733a31323a2269636f6e2d68616e64626167223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313533223b733a353a226c6162656c223b733a31323a2272657475726e5f73746f636b223b733a343a226c696e6b223b733a31383a2261646d696e2f72657475726e5f73746f636b223b733a343a2269636f6e223b733a31343a2269636f6e2d73686172652d616c74223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031392d30352d30342030343a34393a3330223b733a363a22737461747573223b733a313a2231223b7d693a3133333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313534223b733a353a226c6162656c223b733a31363a2270757263686173655f7061796d656e74223b733a343a226c696e6b223b733a32373a2261646d696e2f70757263686173652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31363a2269636f6e2d6372656469742d63617264223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031392d30352d30342030323a32333a3131223b733a363a22737461747573223b733a313a2231223b7d693a3133343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313535223b733a353a226c6162656c223b733a31373a2270757263686173655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7075726368617365223b733a343a2269636f6e223b733a31383a2266612d66772069636f6e2d68616e64626167223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342031313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d7d757365725f6e616d657c733a373a2261646d696e6b6f223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6e616d657c733a373a2241646d696e6b6f223b70686f746f7c733a32363a2275706c6f6164732f64656661756c745f6176617461722e6a7067223b64657369676e6174696f6e735f69647c733a313a2230223b757365725f69647c733a313a2238223b6c6173745f6c6f67696e7c733a31393a22323032302d30322d30352032323a33373a3031223b6f6e6c696e655f74696d657c693a313538313035323539373b6c6f67676564696e7c623a313b757365725f747970657c733a313a2231223b757365725f666c61677c693a313b646972656374696f6e7c733a333a226c7472223b);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('i8da5e6g3p6l8mv3sbqkj5kkeuaurg4j', '103.99.15.182', 1581060312, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035383334393b6d656e755f6163746976655f69647c613a333a7b693a303b733a333a22313230223b693a313b733a323a223235223b693a323b733a313a2230223b7d75726c7c733a32303a2261646d696e2f73657474696e67732f7468656d65223b757365725f726f6c6c7c613a3133353a7b693a303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2231223b733a353a226c6162656c223b733a393a2264617368626f617264223b733a343a226c696e6b223b733a31353a2261646d696e2f64617368626f617264223b733a343a2269636f6e223b733a31353a2266612066612d64617368626f617264223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312031343a30393a3336223b733a363a22737461747573223b733a313a2231223b7d693a313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2232223b733a353a226c6162656c223b733a383a2263616c656e646172223b733a343a226c696e6b223b733a31343a2261646d696e2f63616c656e646172223b733a343a2269636f6e223b733a31343a2266612066612d63616c656e646172223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2234223b733a353a226c6162656c223b733a363a22636c69656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f636c69656e742f6d616e6167655f636c69656e74223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223134223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2235223b733a353a226c6162656c223b733a373a226d61696c626f78223b733a343a226c696e6b223b733a31333a2261646d696e2f6d61696c626f78223b733a343a2269636f6e223b733a31363a2266612066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2236223b733a353a226c6162656c223b733a373a227469636b657473223b733a343a226c696e6b223b733a31333a2261646d696e2f7469636b657473223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223132223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223133223b733a353a226c6162656c223b733a373a22696e766f696365223b733a343a226c696e6b223b733a32383a2261646d696e2f696e766f6963652f6d616e6167655f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223134223b733a353a226c6162656c223b733a393a22657374696d61746573223b733a343a226c696e6b223b733a31353a2261646d696e2f657374696d61746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223135223b733a353a226c6162656c223b733a31373a227061796d656e74735f7265636569766564223b733a343a226c696e6b223b733a32363a2261646d696e2f696e766f6963652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3234223b733a363a22737461747573223b733a313a2231223b7d693a393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223136223b733a353a226c6162656c223b733a393a227461785f7261746573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f7461785f7261746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a31303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223231223b733a353a226c6162656c223b733a31303a2271756f746174696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d7061737465223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223232223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f6c697374223b733a343a226c696e6b223b733a31363a2261646d696e2f71756f746174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30352d31372030353a31393a3033223b733a363a22737461747573223b733a313a2231223b7d693a31323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223233223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f666f726d223b733a343a226c696e6b223b733a33323a2261646d696e2f71756f746174696f6e732f71756f746174696f6e735f666f726d223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a31333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223234223b733a353a226c6162656c223b733a343a2275736572223b733a343a226c696e6b223b733a32303a2261646d696e2f757365722f757365725f6c697374223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223235223b733a353a226c6162656c223b733a383a2273657474696e6773223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a31303a2266612066612d636f6773223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223237223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223236223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a31343a2266612066612d6461746162617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223238223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223239223b733a353a226c6162656c223b733a31373a227472616e73616374696f6e735f6d656e75223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223133223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223330223b733a353a226c6162656c223b733a373a226465706f736974223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f6465706f736974223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3333223b733a363a22737461747573223b733a313a2231223b7d693a31383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223331223b733a353a226c6162656c223b733a373a22657870656e7365223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3337223b733a363a22737461747573223b733a313a2231223b7d693a31393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223332223b733a353a226c6162656c223b733a383a227472616e73666572223b733a343a226c696e6b223b733a32373a2261646d696e2f7472616e73616374696f6e732f7472616e73666572223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3430223b733a363a22737461747573223b733a313a2231223b7d693a32303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223333223b733a353a226c6162656c223b733a31393a227472616e73616374696f6e735f7265706f7274223b733a343a226c696e6b223b733a33383a2261646d696e2f7472616e73616374696f6e732f7472616e73616374696f6e735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3434223b733a363a22737461747573223b733a313a2231223b7d693a32313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223334223b733a353a226c6162656c223b733a31333a2262616c616e63655f7368656574223b733a343a226c696e6b223b733a33323a2261646d696e2f7472616e73616374696f6e732f62616c616e63655f7368656574223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3437223b733a363a22737461747573223b733a313a2231223b7d693a32323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223336223b733a353a226c6162656c223b733a393a2262616e6b5f63617368223b733a343a226c696e6b223b733a32383a2261646d696e2f6163636f756e742f6d616e6167655f6163636f756e74223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3531223b733a363a22737461747573223b733a313a2231223b7d693a32333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223339223b733a353a226c6162656c223b733a353a226974656d73223b733a343a226c696e6b223b733a32323a2261646d696e2f6974656d732f6974656d735f6c697374223b733a343a2269636f6e223b733a31303a2266612066612d63756265223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031392d30352d30332030373a31393a3530223b733a363a22737461747573223b733a313a2231223b7d693a32343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223432223b733a353a226c6162656c223b733a363a227265706f7274223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223235223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a32353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223433223b733a353a226c6162656c223b733a31373a226163636f756e745f73746174656d656e74223b733a343a226c696e6b223b733a33303a2261646d696e2f7265706f72742f6163636f756e745f73746174656d656e74223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223434223b733a353a226c6162656c223b733a31333a22696e636f6d655f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f696e636f6d655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223435223b733a353a226c6162656c223b733a31343a22657870656e73655f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f657870656e73655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223436223b733a353a226c6162656c223b733a31343a22696e636f6d655f657870656e7365223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f696e636f6d655f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a32393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223437223b733a353a226c6162656c223b733a31363a22646174655f776973655f7265706f7274223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f646174655f776973655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223438223b733a353a226c6162656c223b733a31303a22616c6c5f696e636f6d65223b733a343a226c696e6b223b733a32333a2261646d696e2f7265706f72742f616c6c5f696e636f6d65223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223439223b733a353a226c6162656c223b733a31313a22616c6c5f657870656e7365223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f616c6c5f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223530223b733a353a226c6162656c223b733a31353a22616c6c5f7472616e73616374696f6e223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f616c6c5f7472616e73616374696f6e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223531223b733a353a226c6162656c223b733a31373a22726563757272696e675f696e766f696365223b733a343a226c696e6b223b733a33313a2261646d696e2f696e766f6963652f726563757272696e675f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a33343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223532223b733a353a226c6162656c223b733a31353a227472616e736665725f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f7472616e73616374696f6e732f7472616e736665725f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3539223b733a363a22737461747573223b733a313a2231223b7d693a33353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223533223b733a353a226c6162656c223b733a31353a227265706f72745f62795f6d6f6e7468223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f7265706f72745f62795f6d6f6e7468223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223534223b733a353a226c6162656c223b733a353a227461736b73223b733a343a226c696e6b223b733a32303a2261646d696e2f7461736b732f616c6c5f7461736b223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223535223b733a353a226c6162656c223b733a353a226c65616473223b733a343a226c696e6b223b733a31313a2261646d696e2f6c65616473223b733a343a2269636f6e223b733a31323a2266612066612d726f636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223536223b733a353a226c6162656c223b733a31333a226f70706f7274756e6974696573223b733a343a226c696e6b223b733a31393a2261646d696e2f6f70706f7274756e6974696573223b733a343a2269636f6e223b733a31323a2266612066612d66696c746572223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223537223b733a353a226c6162656c223b733a383a2270726f6a65637473223b733a343a226c696e6b223b733a31343a2261646d696e2f70726f6a65637473223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223538223b733a353a226c6162656c223b733a343a2262756773223b733a343a226c696e6b223b733a31303a2261646d696e2f62756773223b733a343a2269636f6e223b733a393a2266612066612d627567223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223539223b733a353a226c6162656c223b733a373a2270726f6a656374223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223630223b733a353a226c6162656c223b733a31323a227461736b735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f7461736b735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223631223b733a353a226c6162656c223b733a31313a22627567735f7265706f7274223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f627567735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223632223b733a353a226c6162656c223b733a31343a227469636b6574735f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f7469636b6574735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223633223b733a353a226c6162656c223b733a31333a22636c69656e745f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f636c69656e745f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3430223b733a363a22737461747573223b733a313a2231223b7d693a34363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223636223b733a353a226c6162656c223b733a31363a227461736b735f61737369676e6d656e74223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f7461736b735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223637223b733a353a226c6162656c223b733a31353a22627567735f61737369676e6d656e74223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f627567735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223638223b733a353a226c6162656c223b733a31343a2270726f6a6563745f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f70726f6a6563745f7265706f7274223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223639223b733a353a226c6162656c223b733a31333a22676f616c5f747261636b696e67223b733a343a226c696e6b223b733a31393a2261646d696e2f676f616c5f747261636b696e67223b733a343a2269636f6e223b733a31323a2266612066612d736869656c64223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223730223b733a353a226c6162656c223b733a31313a226465706172746d656e7473223b733a343a226c696e6b223b733a31373a2261646d696e2f6465706172746d656e7473223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223135223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223731223b733a353a226c6162656c223b733a373a22686f6c69646179223b733a343a226c696e6b223b733a31333a2261646d696e2f686f6c69646179223b733a343a2269636f6e223b733a32313a2266612066612d63616c656e6461722d706c75732d6f223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223732223b733a353a226c6162656c223b733a31363a226c656176655f6d616e6167656d656e74223b733a343a226c696e6b223b733a32323a2261646d696e2f6c656176655f6d616e6167656d656e74223b733a343a2269636f6e223b733a31313a2266612066612d706c616e65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223231223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223733223b733a353a226c6162656c223b733a393a227574696c6974696573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223234223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223734223b733a353a226c6162656c223b733a383a226f76657274696d65223b733a343a226c696e6b223b733a32343a2261646d696e2f7574696c69746965732f6f76657274696d65223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a35353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223735223b733a353a226c6162656c223b733a31323a226f66666963655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d636f646570656e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223136223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223736223b733a353a226c6162656c223b733a31343a2273746f636b5f63617465676f7279223b733a343a226c696e6b223b733a32363a2261646d696e2f73746f636b2f73746f636b5f63617465676f7279223b733a343a2269636f6e223b733a31333a2266612066612d736c6964657273223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a35373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223737223b733a353a226c6162656c223b733a31323a226d616e6167655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223738223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223739223b733a353a226c6162656c223b733a31323a2273746f636b5f7265706f7274223b733a343a226c696e6b223b733a31383a2261646d696e2f73746f636b2f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d6c696e652d6368617274223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030373a31383a3235223b733a363a22737461747573223b733a313a2231223b7d693a36303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223831223b733a353a226c6162656c223b733a31303a2273746f636b5f6c697374223b733a343a226c696e6b223b733a32323a2261646d696e2f73746f636b2f73746f636b5f6c697374223b733a343a2269636f6e223b733a32303a2266612066612d737461636b2d65786368616e6765223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a36313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223832223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a32343a2261646d696e2f73746f636b2f61737369676e5f73746f636b223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223833223b733a353a226c6162656c223b733a31393a2261737369676e5f73746f636b5f7265706f7274223b733a343a226c696e6b223b733a33313a2261646d696e2f73746f636b2f61737369676e5f73746f636b5f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223834223b733a353a226c6162656c223b733a31333a2273746f636b5f686973746f7279223b733a343a226c696e6b223b733a32353a2261646d696e2f73746f636b2f73746f636b5f686973746f7279223b733a343a2269636f6e223b733a31373a2266612066612d66696c652d746578742d6f223b733a363a22706172656e74223b733a323a223737223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223835223b733a353a226c6162656c223b733a31313a22706572666f726d616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31343a2266612066612d6472696262626c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223230223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223836223b733a353a226c6162656c223b733a32313a22706572666f726d616e63655f696e64696361746f72223b733a343a226c696e6b223b733a33393a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f696e64696361746f72223b733a343a2269636f6e223b733a31323a2266612066612d72616e646f6d223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223837223b733a353a226c6162656c223b733a31383a22706572666f726d616e63655f7265706f7274223b733a343a226c696e6b223b733a33363a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223838223b733a353a226c6162656c223b733a31343a22676976655f61707072616973616c223b733a343a226c696e6b223b733a34343a2261646d696e2f706572666f726d616e63652f676976655f706572666f726d616e63655f61707072616973616c223b733a343a2269636f6e223b733a31303a2266612066612d706c7573223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223839223b733a353a226c6162656c223b733a373a22706179726f6c6c223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223139223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223930223b733a353a226c6162656c223b733a32313a226d616e6167655f73616c6172795f64657461696c73223b733a343a226c696e6b223b733a33353a2261646d696e2f706179726f6c6c2f6d616e6167655f73616c6172795f64657461696c73223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223931223b733a353a226c6162656c223b733a32303a22656d706c6f7965655f73616c6172795f6c697374223b733a343a226c696e6b223b733a33343a2261646d696e2f706179726f6c6c2f656d706c6f7965655f73616c6172795f6c697374223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223932223b733a353a226c6162656c223b733a31323a226d616b655f7061796d656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f706179726f6c6c2f6d616b655f7061796d656e74223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223933223b733a353a226c6162656c223b733a31363a2267656e65726174655f706179736c6970223b733a343a226c696e6b223b733a33303a2261646d696e2f706179726f6c6c2f67656e65726174655f706179736c6970223b733a343a2269636f6e223b733a31333a2266612066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223934223b733a353a226c6162656c223b733a31353a2273616c6172795f74656d706c617465223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f73616c6172795f74656d706c617465223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223935223b733a353a226c6162656c223b733a31313a22686f75726c795f72617465223b733a343a226c696e6b223b733a32353a2261646d696e2f706179726f6c6c2f686f75726c795f72617465223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223936223b733a353a226c6162656c223b733a31353a22706179726f6c6c5f73756d6d617279223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f706179726f6c6c5f73756d6d617279223b733a343a2269636f6e223b733a31383a2266612066612d63616d6572612d726574726f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223937223b733a353a226c6162656c223b733a31343a2270726f766964656e745f66756e64223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f70726f766964656e745f66756e64223b733a343a2269636f6e223b733a31353a2266612066612d627269656663617365223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223938223b733a353a226c6162656c223b733a31343a22616476616e63655f73616c617279223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f616476616e63655f73616c617279223b733a343a2269636f6e223b733a31393a2266612066612d63632d6d617374657263617264223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223939223b733a353a226c6162656c223b733a31343a22656d706c6f7965655f6177617264223b733a343a226c696e6b223b733a31313a2261646d696e2f6177617264223b733a343a2269636f6e223b733a31323a2266612066612d74726f706879223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a37393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313030223b733a353a226c6162656c223b733a31333a22616e6e6f756e63656d656e7473223b733a343a226c696e6b223b733a31393a2261646d696e2f616e6e6f756e63656d656e7473223b733a343a2269636f6e223b733a31393a2266612066612d62756c6c686f726e2069636f6e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313031223b733a353a226c6162656c223b733a383a22747261696e696e67223b733a343a226c696e6b223b733a31343a2261646d696e2f747261696e696e67223b733a343a2269636f6e223b733a31343a2266612066612d7375697463617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223232223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313032223b733a353a226c6162656c223b733a31323a226a6f625f63697263756c6172223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d676c6f6265223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223138223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313033223b733a353a226c6162656c223b733a31313a226a6f62735f706f73746564223b733a343a226c696e6b223b733a33303a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f706f73746564223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313034223b733a353a226c6162656c223b733a31373a226a6f62735f6170706c69636174696f6e73223b733a343a226c696e6b223b733a33363a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f6170706c69636174696f6e73223b733a343a2269636f6e223b733a31333a2266612066612d636f6d70617373223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313035223b733a353a226c6162656c223b733a31303a22617474656e64616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223137223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313036223b733a353a226c6162656c223b733a31383a2274696d656368616e67655f72657175657374223b733a343a226c696e6b223b733a33353a2261646d696e2f617474656e64616e63652f74696d656368616e67655f72657175657374223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313037223b733a353a226c6162656c223b733a31373a22617474656e64616e63655f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f617474656e64616e63652f617474656e64616e63655f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313038223b733a353a226c6162656c223b733a31323a2274696d655f686973746f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f617474656e64616e63652f74696d655f686973746f7279223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313039223b733a353a226c6162656c223b733a393a2270756c6c2d646f776e223b733a343a226c696e6b223b733a303a22223b733a343a2269636f6e223b733a303a22223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d33302030313a31333a3230223b733a363a22737461747573223b733a313a2230223b7d693a38393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313130223b733a353a226c6162656c223b733a31313a2266696c656d616e61676572223b733a343a226c696e6b223b733a31373a2261646d696e2f66696c656d616e61676572223b733a343a2269636f6e223b733a31303a2266612066612d66696c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a39303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313131223b733a353a226c6162656c223b733a31353a22636f6d70616e795f64657461696c73223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d696e666f2d636972636c65223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313132223b733a353a226c6162656c223b733a31353a2273797374656d5f73657474696e6773223b733a343a226c696e6b223b733a32313a2261646d696e2f73657474696e67732f73797374656d223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6465736b746f70223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313133223b733a353a226c6162656c223b733a31343a22656d61696c5f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f656d61696c223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d656e76656c6f7065223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313134223b733a353a226c6162656c223b733a31353a22656d61696c5f74656d706c61746573223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f74656d706c61746573223b733a343a2269636f6e223b733a32353a2266612066612d66772066612d70656e63696c2d737175617265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313135223b733a353a226c6162656c223b733a31373a22656d61696c5f696e746567726174696f6e223b733a343a226c696e6b223b733a33323a2261646d696e2f73657474696e67732f656d61696c5f696e746567726174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313136223b733a353a226c6162656c223b733a31363a227061796d656e745f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7061796d656e7473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d646f6c6c6172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313137223b733a353a226c6162656c223b733a31363a22696e766f6963655f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f696e766f696365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313138223b733a353a226c6162656c223b733a31373a22657374696d6174655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f657374696d617465223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313139223b733a353a226c6162656c223b733a32323a227469636b6574735f6c656164735f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f7469636b657473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d7469636b6574223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313230223b733a353a226c6162656c223b733a31343a227468656d655f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f7468656d65223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d636f6465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313231223b733a353a226c6162656c223b733a31323a22776f726b696e675f64617973223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f776f726b696e675f64617973223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d63616c656e646172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313232223b733a353a226c6162656c223b733a31343a226c656176655f63617465676f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f6c656176655f63617465676f7279223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d706167656c696e6573223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313233223b733a353a226c6162656c223b733a31353a22696e636f6d655f63617465676f7279223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f696e636f6d655f63617465676f7279223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d6365727469666963617465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313234223b733a353a226c6162656c223b733a31363a22657870656e73655f63617465676f7279223b733a343a226c696e6b223b733a33313a2261646d696e2f73657474696e67732f657870656e73655f63617465676f7279223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7461736b73223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313235223b733a353a226c6162656c223b733a31343a22637573746f6d65725f67726f7570223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f637573746f6d65725f67726f7570223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7573657273223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313236223b733a353a226c6162656c223b733a31333a22636f6e74726163745f74797065223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f636f6e74726163745f74797065223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313237223b733a353a226c6162656c223b733a31313a226c6561645f737461747573223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313238223b733a353a226c6162656c223b733a31313a226c6561645f736f75726365223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f736f75726365223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d6172726f772d646f776e223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313239223b733a353a226c6162656c223b733a32363a226f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a226c696e6b223b733a34313a2261646d696e2f73657474696e67732f6f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a2269636f6e223b733a32343a2266612066612d66772066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313330223b733a353a226c6162656c223b733a31323a22637573746f6d5f6669656c64223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f637573746f6d5f6669656c64223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d737461722d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313331223b733a353a226c6162656c223b733a31343a227061796d656e745f6d6574686f64223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f7061796d656e745f6d6574686f64223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313332223b733a353a226c6162656c223b733a373a2263726f6e6a6f62223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f63726f6e6a6f62223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d636f6e74616f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313333223b733a353a226c6162656c223b733a31353a226d656e755f616c6c6f636174696f6e223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f6d656e755f616c6c6f636174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612066612d636f6d70617373223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313334223b733a353a226c6162656c223b733a31323a226e6f74696669636174696f6e223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313335223b733a353a226c6162656c223b733a31383a22656d61696c5f6e6f74696669636174696f6e223b733a343a226c696e6b223b733a33333a2261646d696e2f73657474696e67732f656d61696c5f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313336223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6461746162617365223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313337223b733a353a226c6162656c223b733a31323a227472616e736c6174696f6e73223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f7472616e736c6174696f6e73223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6c616e6775616765223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313338223b733a353a226c6162656c223b733a31333a2273797374656d5f757064617465223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f73797374656d5f757064617465223b733a343a2269636f6e223b733a32373a2266612066612d66772066612d70656e63696c2d7371756172652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313339223b733a353a226c6162656c223b733a31323a22707269766174655f63686174223b733a343a226c696e6b223b733a31383a22636861742f636f6e766572736174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d656e76656c6f7065223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3131393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313430223b733a353a226c6162656c223b733a393a2270726f706f73616c73223b733a343a226c696e6b223b733a31353a2261646d696e2f70726f706f73616c73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a3132303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313431223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a32313a2266612066612d7175657374696f6e2d636972636c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223132223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313432223b733a353a226c6162656c223b733a31303a2263617465676f72696573223b733a343a226c696e6b223b733a33303a2261646d696e2f6b6e6f776c65646765626173652f63617465676f72696573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313433223b733a353a226c6162656c223b733a383a2261727469636c6573223b733a343a226c696e6b223b733a32383a2261646d696e2f6b6e6f776c65646765626173652f61727469636c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313434223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a31393a2261646d696e2f6b6e6f776c6564676562617365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313435223b733a353a226c6162656c223b733a31383a2264617368626f6172645f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f64617368626f617264223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d64617368626f617264223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3132353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313436223b733a353a226c6162656c223b733a32303a227472616e73616374696f6e735f7265706f727473223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35393a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313437223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f73616c65735f7265706f7274223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031333a34323a3233223b733a363a22737461747573223b733a313a2231223b7d693a3132373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313438223b733a353a226c6162656c223b733a31353a226d61726b5f617474656e64616e6365223b733a343a226c696e6b223b733a32313a2261646d696e2f6d61726b5f617474656e64616e6365223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313439223b733a353a226c6162656c223b733a31303a22616c6c6f7765645f6970223b733a343a226c696e6b223b733a32353a2261646d696e2f73657474696e67732f616c6c6f7765645f6970223b733a343a2269636f6e223b733a31323a2266612066612d736572766572223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d31332032323a32323a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313530223b733a353a226c6162656c223b733a353a2273746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2269636f6e2d6c6179657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3133303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313531223b733a353a226c6162656c223b733a383a22737570706c696572223b733a343a226c696e6b223b733a31343a2261646d696e2f737570706c696572223b733a343a2269636f6e223b733a31343a2269636f6e2d627269656663617365223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313532223b733a353a226c6162656c223b733a303a22223b733a343a226c696e6b223b733a31343a2261646d696e2f7075726368617365223b733a343a2269636f6e223b733a31323a2269636f6e2d68616e64626167223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313533223b733a353a226c6162656c223b733a31323a2272657475726e5f73746f636b223b733a343a226c696e6b223b733a31383a2261646d696e2f72657475726e5f73746f636b223b733a343a2269636f6e223b733a31343a2269636f6e2d73686172652d616c74223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031392d30352d30342030343a34393a3330223b733a363a22737461747573223b733a313a2231223b7d693a3133333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313534223b733a353a226c6162656c223b733a31363a2270757263686173655f7061796d656e74223b733a343a226c696e6b223b733a32373a2261646d696e2f70757263686173652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31363a2269636f6e2d6372656469742d63617264223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031392d30352d30342030323a32333a3131223b733a363a22737461747573223b733a313a2231223b7d693a3133343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313535223b733a353a226c6162656c223b733a31373a2270757263686173655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7075726368617365223b733a343a2269636f6e223b733a31383a2266612d66772069636f6e2d68616e64626167223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342031313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d7d757365725f6e616d657c733a373a2261646d696e6b6f223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6e616d657c733a373a2241646d696e6b6f223b70686f746f7c733a32363a2275706c6f6164732f64656661756c745f6176617461722e6a7067223b64657369676e6174696f6e735f69647c733a313a2230223b757365725f69647c733a313a2238223b6c6173745f6c6f67696e7c733a31393a22323032302d30322d30352032323a33373a3031223b6f6e6c696e655f74696d657c693a313538313035323539373b6c6f67676564696e7c623a313b757365725f747970657c733a313a2231223b757365725f666c61677c693a313b646972656374696f6e7c733a333a226c7472223b);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('m8rhsdt1s5vsd3kob8fupnv49ll9lcsa', '103.99.15.182', 1581057194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035363136373b6d656e755f6163746976655f69647c613a333a7b693a303b733a333a22313439223b693a313b733a323a223235223b693a323b733a313a2230223b7d75726c7c733a34333a2261646d696e2f73657474696e67732f616c6c6f7765645f69702f656469745f616c6c6f7765645f69702f31223b757365725f726f6c6c7c613a3133353a7b693a303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2231223b733a353a226c6162656c223b733a393a2264617368626f617264223b733a343a226c696e6b223b733a31353a2261646d696e2f64617368626f617264223b733a343a2269636f6e223b733a31353a2266612066612d64617368626f617264223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312031343a30393a3336223b733a363a22737461747573223b733a313a2231223b7d693a313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2232223b733a353a226c6162656c223b733a383a2263616c656e646172223b733a343a226c696e6b223b733a31343a2261646d696e2f63616c656e646172223b733a343a2269636f6e223b733a31343a2266612066612d63616c656e646172223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2234223b733a353a226c6162656c223b733a363a22636c69656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f636c69656e742f6d616e6167655f636c69656e74223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223134223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2235223b733a353a226c6162656c223b733a373a226d61696c626f78223b733a343a226c696e6b223b733a31333a2261646d696e2f6d61696c626f78223b733a343a2269636f6e223b733a31363a2266612066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2236223b733a353a226c6162656c223b733a373a227469636b657473223b733a343a226c696e6b223b733a31333a2261646d696e2f7469636b657473223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223132223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223133223b733a353a226c6162656c223b733a373a22696e766f696365223b733a343a226c696e6b223b733a32383a2261646d696e2f696e766f6963652f6d616e6167655f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223134223b733a353a226c6162656c223b733a393a22657374696d61746573223b733a343a226c696e6b223b733a31353a2261646d696e2f657374696d61746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223135223b733a353a226c6162656c223b733a31373a227061796d656e74735f7265636569766564223b733a343a226c696e6b223b733a32363a2261646d696e2f696e766f6963652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3234223b733a363a22737461747573223b733a313a2231223b7d693a393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223136223b733a353a226c6162656c223b733a393a227461785f7261746573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f7461785f7261746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a31303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223231223b733a353a226c6162656c223b733a31303a2271756f746174696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d7061737465223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223232223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f6c697374223b733a343a226c696e6b223b733a31363a2261646d696e2f71756f746174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30352d31372030353a31393a3033223b733a363a22737461747573223b733a313a2231223b7d693a31323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223233223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f666f726d223b733a343a226c696e6b223b733a33323a2261646d696e2f71756f746174696f6e732f71756f746174696f6e735f666f726d223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a31333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223234223b733a353a226c6162656c223b733a343a2275736572223b733a343a226c696e6b223b733a32303a2261646d696e2f757365722f757365725f6c697374223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223235223b733a353a226c6162656c223b733a383a2273657474696e6773223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a31303a2266612066612d636f6773223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223237223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223236223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a31343a2266612066612d6461746162617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223238223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223239223b733a353a226c6162656c223b733a31373a227472616e73616374696f6e735f6d656e75223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223133223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223330223b733a353a226c6162656c223b733a373a226465706f736974223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f6465706f736974223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3333223b733a363a22737461747573223b733a313a2231223b7d693a31383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223331223b733a353a226c6162656c223b733a373a22657870656e7365223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3337223b733a363a22737461747573223b733a313a2231223b7d693a31393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223332223b733a353a226c6162656c223b733a383a227472616e73666572223b733a343a226c696e6b223b733a32373a2261646d696e2f7472616e73616374696f6e732f7472616e73666572223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3430223b733a363a22737461747573223b733a313a2231223b7d693a32303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223333223b733a353a226c6162656c223b733a31393a227472616e73616374696f6e735f7265706f7274223b733a343a226c696e6b223b733a33383a2261646d696e2f7472616e73616374696f6e732f7472616e73616374696f6e735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3434223b733a363a22737461747573223b733a313a2231223b7d693a32313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223334223b733a353a226c6162656c223b733a31333a2262616c616e63655f7368656574223b733a343a226c696e6b223b733a33323a2261646d696e2f7472616e73616374696f6e732f62616c616e63655f7368656574223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3437223b733a363a22737461747573223b733a313a2231223b7d693a32323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223336223b733a353a226c6162656c223b733a393a2262616e6b5f63617368223b733a343a226c696e6b223b733a32383a2261646d696e2f6163636f756e742f6d616e6167655f6163636f756e74223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3531223b733a363a22737461747573223b733a313a2231223b7d693a32333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223339223b733a353a226c6162656c223b733a353a226974656d73223b733a343a226c696e6b223b733a32323a2261646d696e2f6974656d732f6974656d735f6c697374223b733a343a2269636f6e223b733a31303a2266612066612d63756265223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031392d30352d30332030373a31393a3530223b733a363a22737461747573223b733a313a2231223b7d693a32343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223432223b733a353a226c6162656c223b733a363a227265706f7274223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223235223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a32353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223433223b733a353a226c6162656c223b733a31373a226163636f756e745f73746174656d656e74223b733a343a226c696e6b223b733a33303a2261646d696e2f7265706f72742f6163636f756e745f73746174656d656e74223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223434223b733a353a226c6162656c223b733a31333a22696e636f6d655f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f696e636f6d655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223435223b733a353a226c6162656c223b733a31343a22657870656e73655f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f657870656e73655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223436223b733a353a226c6162656c223b733a31343a22696e636f6d655f657870656e7365223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f696e636f6d655f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a32393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223437223b733a353a226c6162656c223b733a31363a22646174655f776973655f7265706f7274223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f646174655f776973655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223438223b733a353a226c6162656c223b733a31303a22616c6c5f696e636f6d65223b733a343a226c696e6b223b733a32333a2261646d696e2f7265706f72742f616c6c5f696e636f6d65223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223439223b733a353a226c6162656c223b733a31313a22616c6c5f657870656e7365223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f616c6c5f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223530223b733a353a226c6162656c223b733a31353a22616c6c5f7472616e73616374696f6e223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f616c6c5f7472616e73616374696f6e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223531223b733a353a226c6162656c223b733a31373a22726563757272696e675f696e766f696365223b733a343a226c696e6b223b733a33313a2261646d696e2f696e766f6963652f726563757272696e675f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a33343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223532223b733a353a226c6162656c223b733a31353a227472616e736665725f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f7472616e73616374696f6e732f7472616e736665725f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3539223b733a363a22737461747573223b733a313a2231223b7d693a33353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223533223b733a353a226c6162656c223b733a31353a227265706f72745f62795f6d6f6e7468223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f7265706f72745f62795f6d6f6e7468223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223534223b733a353a226c6162656c223b733a353a227461736b73223b733a343a226c696e6b223b733a32303a2261646d696e2f7461736b732f616c6c5f7461736b223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223535223b733a353a226c6162656c223b733a353a226c65616473223b733a343a226c696e6b223b733a31313a2261646d696e2f6c65616473223b733a343a2269636f6e223b733a31323a2266612066612d726f636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223536223b733a353a226c6162656c223b733a31333a226f70706f7274756e6974696573223b733a343a226c696e6b223b733a31393a2261646d696e2f6f70706f7274756e6974696573223b733a343a2269636f6e223b733a31323a2266612066612d66696c746572223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223537223b733a353a226c6162656c223b733a383a2270726f6a65637473223b733a343a226c696e6b223b733a31343a2261646d696e2f70726f6a65637473223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223538223b733a353a226c6162656c223b733a343a2262756773223b733a343a226c696e6b223b733a31303a2261646d696e2f62756773223b733a343a2269636f6e223b733a393a2266612066612d627567223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223539223b733a353a226c6162656c223b733a373a2270726f6a656374223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223630223b733a353a226c6162656c223b733a31323a227461736b735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f7461736b735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223631223b733a353a226c6162656c223b733a31313a22627567735f7265706f7274223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f627567735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223632223b733a353a226c6162656c223b733a31343a227469636b6574735f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f7469636b6574735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223633223b733a353a226c6162656c223b733a31333a22636c69656e745f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f636c69656e745f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3430223b733a363a22737461747573223b733a313a2231223b7d693a34363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223636223b733a353a226c6162656c223b733a31363a227461736b735f61737369676e6d656e74223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f7461736b735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223637223b733a353a226c6162656c223b733a31353a22627567735f61737369676e6d656e74223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f627567735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223638223b733a353a226c6162656c223b733a31343a2270726f6a6563745f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f70726f6a6563745f7265706f7274223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223639223b733a353a226c6162656c223b733a31333a22676f616c5f747261636b696e67223b733a343a226c696e6b223b733a31393a2261646d696e2f676f616c5f747261636b696e67223b733a343a2269636f6e223b733a31323a2266612066612d736869656c64223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223730223b733a353a226c6162656c223b733a31313a226465706172746d656e7473223b733a343a226c696e6b223b733a31373a2261646d696e2f6465706172746d656e7473223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223135223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223731223b733a353a226c6162656c223b733a373a22686f6c69646179223b733a343a226c696e6b223b733a31333a2261646d696e2f686f6c69646179223b733a343a2269636f6e223b733a32313a2266612066612d63616c656e6461722d706c75732d6f223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223732223b733a353a226c6162656c223b733a31363a226c656176655f6d616e6167656d656e74223b733a343a226c696e6b223b733a32323a2261646d696e2f6c656176655f6d616e6167656d656e74223b733a343a2269636f6e223b733a31313a2266612066612d706c616e65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223231223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223733223b733a353a226c6162656c223b733a393a227574696c6974696573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223234223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223734223b733a353a226c6162656c223b733a383a226f76657274696d65223b733a343a226c696e6b223b733a32343a2261646d696e2f7574696c69746965732f6f76657274696d65223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a35353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223735223b733a353a226c6162656c223b733a31323a226f66666963655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d636f646570656e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223136223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223736223b733a353a226c6162656c223b733a31343a2273746f636b5f63617465676f7279223b733a343a226c696e6b223b733a32363a2261646d696e2f73746f636b2f73746f636b5f63617465676f7279223b733a343a2269636f6e223b733a31333a2266612066612d736c6964657273223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a35373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223737223b733a353a226c6162656c223b733a31323a226d616e6167655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223738223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223739223b733a353a226c6162656c223b733a31323a2273746f636b5f7265706f7274223b733a343a226c696e6b223b733a31383a2261646d696e2f73746f636b2f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d6c696e652d6368617274223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030373a31383a3235223b733a363a22737461747573223b733a313a2231223b7d693a36303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223831223b733a353a226c6162656c223b733a31303a2273746f636b5f6c697374223b733a343a226c696e6b223b733a32323a2261646d696e2f73746f636b2f73746f636b5f6c697374223b733a343a2269636f6e223b733a32303a2266612066612d737461636b2d65786368616e6765223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a36313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223832223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a32343a2261646d696e2f73746f636b2f61737369676e5f73746f636b223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223833223b733a353a226c6162656c223b733a31393a2261737369676e5f73746f636b5f7265706f7274223b733a343a226c696e6b223b733a33313a2261646d696e2f73746f636b2f61737369676e5f73746f636b5f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223834223b733a353a226c6162656c223b733a31333a2273746f636b5f686973746f7279223b733a343a226c696e6b223b733a32353a2261646d696e2f73746f636b2f73746f636b5f686973746f7279223b733a343a2269636f6e223b733a31373a2266612066612d66696c652d746578742d6f223b733a363a22706172656e74223b733a323a223737223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223835223b733a353a226c6162656c223b733a31313a22706572666f726d616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31343a2266612066612d6472696262626c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223230223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223836223b733a353a226c6162656c223b733a32313a22706572666f726d616e63655f696e64696361746f72223b733a343a226c696e6b223b733a33393a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f696e64696361746f72223b733a343a2269636f6e223b733a31323a2266612066612d72616e646f6d223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223837223b733a353a226c6162656c223b733a31383a22706572666f726d616e63655f7265706f7274223b733a343a226c696e6b223b733a33363a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223838223b733a353a226c6162656c223b733a31343a22676976655f61707072616973616c223b733a343a226c696e6b223b733a34343a2261646d696e2f706572666f726d616e63652f676976655f706572666f726d616e63655f61707072616973616c223b733a343a2269636f6e223b733a31303a2266612066612d706c7573223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223839223b733a353a226c6162656c223b733a373a22706179726f6c6c223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223139223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223930223b733a353a226c6162656c223b733a32313a226d616e6167655f73616c6172795f64657461696c73223b733a343a226c696e6b223b733a33353a2261646d696e2f706179726f6c6c2f6d616e6167655f73616c6172795f64657461696c73223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223931223b733a353a226c6162656c223b733a32303a22656d706c6f7965655f73616c6172795f6c697374223b733a343a226c696e6b223b733a33343a2261646d696e2f706179726f6c6c2f656d706c6f7965655f73616c6172795f6c697374223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223932223b733a353a226c6162656c223b733a31323a226d616b655f7061796d656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f706179726f6c6c2f6d616b655f7061796d656e74223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223933223b733a353a226c6162656c223b733a31363a2267656e65726174655f706179736c6970223b733a343a226c696e6b223b733a33303a2261646d696e2f706179726f6c6c2f67656e65726174655f706179736c6970223b733a343a2269636f6e223b733a31333a2266612066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223934223b733a353a226c6162656c223b733a31353a2273616c6172795f74656d706c617465223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f73616c6172795f74656d706c617465223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223935223b733a353a226c6162656c223b733a31313a22686f75726c795f72617465223b733a343a226c696e6b223b733a32353a2261646d696e2f706179726f6c6c2f686f75726c795f72617465223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223936223b733a353a226c6162656c223b733a31353a22706179726f6c6c5f73756d6d617279223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f706179726f6c6c5f73756d6d617279223b733a343a2269636f6e223b733a31383a2266612066612d63616d6572612d726574726f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223937223b733a353a226c6162656c223b733a31343a2270726f766964656e745f66756e64223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f70726f766964656e745f66756e64223b733a343a2269636f6e223b733a31353a2266612066612d627269656663617365223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223938223b733a353a226c6162656c223b733a31343a22616476616e63655f73616c617279223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f616476616e63655f73616c617279223b733a343a2269636f6e223b733a31393a2266612066612d63632d6d617374657263617264223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223939223b733a353a226c6162656c223b733a31343a22656d706c6f7965655f6177617264223b733a343a226c696e6b223b733a31313a2261646d696e2f6177617264223b733a343a2269636f6e223b733a31323a2266612066612d74726f706879223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a37393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313030223b733a353a226c6162656c223b733a31333a22616e6e6f756e63656d656e7473223b733a343a226c696e6b223b733a31393a2261646d696e2f616e6e6f756e63656d656e7473223b733a343a2269636f6e223b733a31393a2266612066612d62756c6c686f726e2069636f6e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313031223b733a353a226c6162656c223b733a383a22747261696e696e67223b733a343a226c696e6b223b733a31343a2261646d696e2f747261696e696e67223b733a343a2269636f6e223b733a31343a2266612066612d7375697463617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223232223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313032223b733a353a226c6162656c223b733a31323a226a6f625f63697263756c6172223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d676c6f6265223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223138223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313033223b733a353a226c6162656c223b733a31313a226a6f62735f706f73746564223b733a343a226c696e6b223b733a33303a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f706f73746564223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313034223b733a353a226c6162656c223b733a31373a226a6f62735f6170706c69636174696f6e73223b733a343a226c696e6b223b733a33363a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f6170706c69636174696f6e73223b733a343a2269636f6e223b733a31333a2266612066612d636f6d70617373223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313035223b733a353a226c6162656c223b733a31303a22617474656e64616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223137223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313036223b733a353a226c6162656c223b733a31383a2274696d656368616e67655f72657175657374223b733a343a226c696e6b223b733a33353a2261646d696e2f617474656e64616e63652f74696d656368616e67655f72657175657374223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313037223b733a353a226c6162656c223b733a31373a22617474656e64616e63655f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f617474656e64616e63652f617474656e64616e63655f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313038223b733a353a226c6162656c223b733a31323a2274696d655f686973746f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f617474656e64616e63652f74696d655f686973746f7279223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313039223b733a353a226c6162656c223b733a393a2270756c6c2d646f776e223b733a343a226c696e6b223b733a303a22223b733a343a2269636f6e223b733a303a22223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d33302030313a31333a3230223b733a363a22737461747573223b733a313a2230223b7d693a38393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313130223b733a353a226c6162656c223b733a31313a2266696c656d616e61676572223b733a343a226c696e6b223b733a31373a2261646d696e2f66696c656d616e61676572223b733a343a2269636f6e223b733a31303a2266612066612d66696c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a39303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313131223b733a353a226c6162656c223b733a31353a22636f6d70616e795f64657461696c73223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d696e666f2d636972636c65223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313132223b733a353a226c6162656c223b733a31353a2273797374656d5f73657474696e6773223b733a343a226c696e6b223b733a32313a2261646d696e2f73657474696e67732f73797374656d223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6465736b746f70223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313133223b733a353a226c6162656c223b733a31343a22656d61696c5f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f656d61696c223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d656e76656c6f7065223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313134223b733a353a226c6162656c223b733a31353a22656d61696c5f74656d706c61746573223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f74656d706c61746573223b733a343a2269636f6e223b733a32353a2266612066612d66772066612d70656e63696c2d737175617265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313135223b733a353a226c6162656c223b733a31373a22656d61696c5f696e746567726174696f6e223b733a343a226c696e6b223b733a33323a2261646d696e2f73657474696e67732f656d61696c5f696e746567726174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313136223b733a353a226c6162656c223b733a31363a227061796d656e745f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7061796d656e7473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d646f6c6c6172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313137223b733a353a226c6162656c223b733a31363a22696e766f6963655f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f696e766f696365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313138223b733a353a226c6162656c223b733a31373a22657374696d6174655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f657374696d617465223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313139223b733a353a226c6162656c223b733a32323a227469636b6574735f6c656164735f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f7469636b657473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d7469636b6574223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313230223b733a353a226c6162656c223b733a31343a227468656d655f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f7468656d65223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d636f6465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313231223b733a353a226c6162656c223b733a31323a22776f726b696e675f64617973223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f776f726b696e675f64617973223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d63616c656e646172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313232223b733a353a226c6162656c223b733a31343a226c656176655f63617465676f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f6c656176655f63617465676f7279223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d706167656c696e6573223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313233223b733a353a226c6162656c223b733a31353a22696e636f6d655f63617465676f7279223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f696e636f6d655f63617465676f7279223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d6365727469666963617465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313234223b733a353a226c6162656c223b733a31363a22657870656e73655f63617465676f7279223b733a343a226c696e6b223b733a33313a2261646d696e2f73657474696e67732f657870656e73655f63617465676f7279223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7461736b73223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313235223b733a353a226c6162656c223b733a31343a22637573746f6d65725f67726f7570223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f637573746f6d65725f67726f7570223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7573657273223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313236223b733a353a226c6162656c223b733a31333a22636f6e74726163745f74797065223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f636f6e74726163745f74797065223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313237223b733a353a226c6162656c223b733a31313a226c6561645f737461747573223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313238223b733a353a226c6162656c223b733a31313a226c6561645f736f75726365223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f736f75726365223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d6172726f772d646f776e223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313239223b733a353a226c6162656c223b733a32363a226f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a226c696e6b223b733a34313a2261646d696e2f73657474696e67732f6f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a2269636f6e223b733a32343a2266612066612d66772066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313330223b733a353a226c6162656c223b733a31323a22637573746f6d5f6669656c64223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f637573746f6d5f6669656c64223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d737461722d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313331223b733a353a226c6162656c223b733a31343a227061796d656e745f6d6574686f64223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f7061796d656e745f6d6574686f64223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313332223b733a353a226c6162656c223b733a373a2263726f6e6a6f62223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f63726f6e6a6f62223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d636f6e74616f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313333223b733a353a226c6162656c223b733a31353a226d656e755f616c6c6f636174696f6e223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f6d656e755f616c6c6f636174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612066612d636f6d70617373223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313334223b733a353a226c6162656c223b733a31323a226e6f74696669636174696f6e223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313335223b733a353a226c6162656c223b733a31383a22656d61696c5f6e6f74696669636174696f6e223b733a343a226c696e6b223b733a33333a2261646d696e2f73657474696e67732f656d61696c5f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313336223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6461746162617365223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313337223b733a353a226c6162656c223b733a31323a227472616e736c6174696f6e73223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f7472616e736c6174696f6e73223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6c616e6775616765223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313338223b733a353a226c6162656c223b733a31333a2273797374656d5f757064617465223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f73797374656d5f757064617465223b733a343a2269636f6e223b733a32373a2266612066612d66772066612d70656e63696c2d7371756172652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313339223b733a353a226c6162656c223b733a31323a22707269766174655f63686174223b733a343a226c696e6b223b733a31383a22636861742f636f6e766572736174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d656e76656c6f7065223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3131393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313430223b733a353a226c6162656c223b733a393a2270726f706f73616c73223b733a343a226c696e6b223b733a31353a2261646d696e2f70726f706f73616c73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a3132303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313431223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a32313a2266612066612d7175657374696f6e2d636972636c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223132223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313432223b733a353a226c6162656c223b733a31303a2263617465676f72696573223b733a343a226c696e6b223b733a33303a2261646d696e2f6b6e6f776c65646765626173652f63617465676f72696573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313433223b733a353a226c6162656c223b733a383a2261727469636c6573223b733a343a226c696e6b223b733a32383a2261646d696e2f6b6e6f776c65646765626173652f61727469636c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313434223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a31393a2261646d696e2f6b6e6f776c6564676562617365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313435223b733a353a226c6162656c223b733a31383a2264617368626f6172645f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f64617368626f617264223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d64617368626f617264223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3132353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313436223b733a353a226c6162656c223b733a32303a227472616e73616374696f6e735f7265706f727473223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35393a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313437223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f73616c65735f7265706f7274223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031333a34323a3233223b733a363a22737461747573223b733a313a2231223b7d693a3132373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313438223b733a353a226c6162656c223b733a31353a226d61726b5f617474656e64616e6365223b733a343a226c696e6b223b733a32313a2261646d696e2f6d61726b5f617474656e64616e6365223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313439223b733a353a226c6162656c223b733a31303a22616c6c6f7765645f6970223b733a343a226c696e6b223b733a32353a2261646d696e2f73657474696e67732f616c6c6f7765645f6970223b733a343a2269636f6e223b733a31323a2266612066612d736572766572223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d31332032323a32323a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313530223b733a353a226c6162656c223b733a353a2273746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2269636f6e2d6c6179657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3133303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313531223b733a353a226c6162656c223b733a383a22737570706c696572223b733a343a226c696e6b223b733a31343a2261646d696e2f737570706c696572223b733a343a2269636f6e223b733a31343a2269636f6e2d627269656663617365223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313532223b733a353a226c6162656c223b733a303a22223b733a343a226c696e6b223b733a31343a2261646d696e2f7075726368617365223b733a343a2269636f6e223b733a31323a2269636f6e2d68616e64626167223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313533223b733a353a226c6162656c223b733a31323a2272657475726e5f73746f636b223b733a343a226c696e6b223b733a31383a2261646d696e2f72657475726e5f73746f636b223b733a343a2269636f6e223b733a31343a2269636f6e2d73686172652d616c74223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031392d30352d30342030343a34393a3330223b733a363a22737461747573223b733a313a2231223b7d693a3133333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313534223b733a353a226c6162656c223b733a31363a2270757263686173655f7061796d656e74223b733a343a226c696e6b223b733a32373a2261646d696e2f70757263686173652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31363a2269636f6e2d6372656469742d63617264223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031392d30352d30342030323a32333a3131223b733a363a22737461747573223b733a313a2231223b7d693a3133343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313535223b733a353a226c6162656c223b733a31373a2270757263686173655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7075726368617365223b733a343a2269636f6e223b733a31383a2266612d66772069636f6e2d68616e64626167223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342031313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d7d757365725f6e616d657c733a373a2261646d696e6b6f223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6e616d657c733a373a2241646d696e6b6f223b70686f746f7c733a32363a2275706c6f6164732f64656661756c745f6176617461722e6a7067223b64657369676e6174696f6e735f69647c733a313a2230223b757365725f69647c733a313a2238223b6c6173745f6c6f67696e7c733a31393a22323032302d30322d30352032323a33373a3031223b6f6e6c696e655f74696d657c693a313538313035323539373b6c6f67676564696e7c623a313b757365725f747970657c733a313a2231223b757365725f666c61677c693a313b646972656374696f6e7c733a333a226c7472223b);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('nltrdk4ev1b0mmmt9r8p59u2p3mom8j6', '213.159.213.236', 1581059459, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035393435393b6d656e755f6163746976655f69647c613a323a7b693a303b733a333a22313039223b693a313b733a313a2230223b7d);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('p35p5hpr3rrnfp97ql73lfie58atde98', '103.99.15.182', 1581054268, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035323534363b6d656e755f6163746976655f69647c613a333a7b693a303b733a333a22313237223b693a313b733a323a223235223b693a323b733a313a2230223b7d75726c7c733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b757365725f726f6c6c7c613a3133353a7b693a303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2231223b733a353a226c6162656c223b733a393a2264617368626f617264223b733a343a226c696e6b223b733a31353a2261646d696e2f64617368626f617264223b733a343a2269636f6e223b733a31353a2266612066612d64617368626f617264223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312031343a30393a3336223b733a363a22737461747573223b733a313a2231223b7d693a313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2232223b733a353a226c6162656c223b733a383a2263616c656e646172223b733a343a226c696e6b223b733a31343a2261646d696e2f63616c656e646172223b733a343a2269636f6e223b733a31343a2266612066612d63616c656e646172223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2234223b733a353a226c6162656c223b733a363a22636c69656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f636c69656e742f6d616e6167655f636c69656e74223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223134223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2235223b733a353a226c6162656c223b733a373a226d61696c626f78223b733a343a226c696e6b223b733a31333a2261646d696e2f6d61696c626f78223b733a343a2269636f6e223b733a31363a2266612066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a313a2236223b733a353a226c6162656c223b733a373a227469636b657473223b733a343a226c696e6b223b733a31333a2261646d696e2f7469636b657473223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223132223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223133223b733a353a226c6162656c223b733a373a22696e766f696365223b733a343a226c696e6b223b733a32383a2261646d696e2f696e766f6963652f6d616e6167655f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3233223b733a363a22737461747573223b733a313a2231223b7d693a373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223134223b733a353a226c6162656c223b733a393a22657374696d61746573223b733a343a226c696e6b223b733a31353a2261646d696e2f657374696d61746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223135223b733a353a226c6162656c223b733a31373a227061796d656e74735f7265636569766564223b733a343a226c696e6b223b733a32363a2261646d696e2f696e766f6963652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32322030383a32373a3234223b733a363a22737461747573223b733a313a2231223b7d693a393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223136223b733a353a226c6162656c223b733a393a227461785f7261746573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f7461785f7261746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a31303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223231223b733a353a226c6162656c223b733a31303a2271756f746174696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d7061737465223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223232223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f6c697374223b733a343a226c696e6b223b733a31363a2261646d696e2f71756f746174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30352d31372030353a31393a3033223b733a363a22737461747573223b733a313a2231223b7d693a31323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223233223b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f666f726d223b733a343a226c696e6b223b733a33323a2261646d696e2f71756f746174696f6e732f71756f746174696f6e735f666f726d223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a31333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223234223b733a353a226c6162656c223b733a343a2275736572223b733a343a226c696e6b223b733a32303a2261646d696e2f757365722f757365725f6c697374223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223236223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223235223b733a353a226c6162656c223b733a383a2273657474696e6773223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a31303a2266612066612d636f6773223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223237223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223236223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a31343a2266612066612d6461746162617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223238223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223239223b733a353a226c6162656c223b733a31373a227472616e73616374696f6e735f6d656e75223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223133223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a31373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223330223b733a353a226c6162656c223b733a373a226465706f736974223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f6465706f736974223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3333223b733a363a22737461747573223b733a313a2231223b7d693a31383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223331223b733a353a226c6162656c223b733a373a22657870656e7365223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3337223b733a363a22737461747573223b733a313a2231223b7d693a31393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223332223b733a353a226c6162656c223b733a383a227472616e73666572223b733a343a226c696e6b223b733a32373a2261646d696e2f7472616e73616374696f6e732f7472616e73666572223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3430223b733a363a22737461747573223b733a313a2231223b7d693a32303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223333223b733a353a226c6162656c223b733a31393a227472616e73616374696f6e735f7265706f7274223b733a343a226c696e6b223b733a33383a2261646d696e2f7472616e73616374696f6e732f7472616e73616374696f6e735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3434223b733a363a22737461747573223b733a313a2231223b7d693a32313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223334223b733a353a226c6162656c223b733a31333a2262616c616e63655f7368656574223b733a343a226c696e6b223b733a33323a2261646d696e2f7472616e73616374696f6e732f62616c616e63655f7368656574223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3437223b733a363a22737461747573223b733a313a2231223b7d693a32323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223336223b733a353a226c6162656c223b733a393a2262616e6b5f63617368223b733a343a226c696e6b223b733a32383a2261646d696e2f6163636f756e742f6d616e6167655f6163636f756e74223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3531223b733a363a22737461747573223b733a313a2231223b7d693a32333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223339223b733a353a226c6162656c223b733a353a226974656d73223b733a343a226c696e6b223b733a32323a2261646d696e2f6974656d732f6974656d735f6c697374223b733a343a2269636f6e223b733a31303a2266612066612d63756265223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031392d30352d30332030373a31393a3530223b733a363a22737461747573223b733a313a2231223b7d693a32343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223432223b733a353a226c6162656c223b733a363a227265706f7274223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223235223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a32353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223433223b733a353a226c6162656c223b733a31373a226163636f756e745f73746174656d656e74223b733a343a226c696e6b223b733a33303a2261646d696e2f7265706f72742f6163636f756e745f73746174656d656e74223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223434223b733a353a226c6162656c223b733a31333a22696e636f6d655f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f696e636f6d655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223435223b733a353a226c6162656c223b733a31343a22657870656e73655f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f657870656e73655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a32383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223436223b733a353a226c6162656c223b733a31343a22696e636f6d655f657870656e7365223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f696e636f6d655f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a32393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223437223b733a353a226c6162656c223b733a31363a22646174655f776973655f7265706f7274223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f646174655f776973655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223438223b733a353a226c6162656c223b733a31303a22616c6c5f696e636f6d65223b733a343a226c696e6b223b733a32333a2261646d696e2f7265706f72742f616c6c5f696e636f6d65223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223439223b733a353a226c6162656c223b733a31313a22616c6c5f657870656e7365223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f616c6c5f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223530223b733a353a226c6162656c223b733a31353a22616c6c5f7472616e73616374696f6e223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f616c6c5f7472616e73616374696f6e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223531223b733a353a226c6162656c223b733a31373a22726563757272696e675f696e766f696365223b733a343a226c696e6b223b733a33313a2261646d696e2f696e766f6963652f726563757272696e675f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33323a3035223b733a363a22737461747573223b733a313a2231223b7d693a33343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223532223b733a353a226c6162656c223b733a31353a227472616e736665725f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f7472616e73616374696f6e732f7472616e736665725f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35383a3539223b733a363a22737461747573223b733a313a2231223b7d693a33353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223533223b733a353a226c6162656c223b733a31353a227265706f72745f62795f6d6f6e7468223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f7265706f72745f62795f6d6f6e7468223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3138223b733a363a22737461747573223b733a313a2231223b7d693a33363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223534223b733a353a226c6162656c223b733a353a227461736b73223b733a343a226c696e6b223b733a32303a2261646d696e2f7461736b732f616c6c5f7461736b223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223535223b733a353a226c6162656c223b733a353a226c65616473223b733a343a226c696e6b223b733a31313a2261646d696e2f6c65616473223b733a343a2269636f6e223b733a31323a2266612066612d726f636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223536223b733a353a226c6162656c223b733a31333a226f70706f7274756e6974696573223b733a343a226c696e6b223b733a31393a2261646d696e2f6f70706f7274756e6974696573223b733a343a2269636f6e223b733a31323a2266612066612d66696c746572223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a33393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223537223b733a353a226c6162656c223b733a383a2270726f6a65637473223b733a343a226c696e6b223b733a31343a2261646d696e2f70726f6a65637473223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223538223b733a353a226c6162656c223b733a343a2262756773223b733a343a226c696e6b223b733a31303a2261646d696e2f62756773223b733a343a2269636f6e223b733a393a2266612066612d627567223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a34313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223539223b733a353a226c6162656c223b733a373a2270726f6a656374223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223630223b733a353a226c6162656c223b733a31323a227461736b735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f7461736b735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223631223b733a353a226c6162656c223b733a31313a22627567735f7265706f7274223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f627567735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223632223b733a353a226c6162656c223b733a31343a227469636b6574735f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f7469636b6574735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3339223b733a363a22737461747573223b733a313a2231223b7d693a34353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223633223b733a353a226c6162656c223b733a31333a22636c69656e745f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f636c69656e745f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33393a3430223b733a363a22737461747573223b733a313a2231223b7d693a34363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223636223b733a353a226c6162656c223b733a31363a227461736b735f61737369676e6d656e74223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f7461736b735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223637223b733a353a226c6162656c223b733a31353a22627567735f61737369676e6d656e74223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f627567735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223638223b733a353a226c6162656c223b733a31343a2270726f6a6563745f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f70726f6a6563745f7265706f7274223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a34393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223639223b733a353a226c6162656c223b733a31333a22676f616c5f747261636b696e67223b733a343a226c696e6b223b733a31393a2261646d696e2f676f616c5f747261636b696e67223b733a343a2269636f6e223b733a31323a2266612066612d736869656c64223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223730223b733a353a226c6162656c223b733a31313a226465706172746d656e7473223b733a343a226c696e6b223b733a31373a2261646d696e2f6465706172746d656e7473223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223135223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223731223b733a353a226c6162656c223b733a373a22686f6c69646179223b733a343a226c696e6b223b733a31333a2261646d696e2f686f6c69646179223b733a343a2269636f6e223b733a32313a2266612066612d63616c656e6461722d706c75732d6f223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a35323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223732223b733a353a226c6162656c223b733a31363a226c656176655f6d616e6167656d656e74223b733a343a226c696e6b223b733a32323a2261646d696e2f6c656176655f6d616e6167656d656e74223b733a343a2269636f6e223b733a31313a2266612066612d706c616e65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223231223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223733223b733a353a226c6162656c223b733a393a227574696c6974696573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223234223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223734223b733a353a226c6162656c223b733a383a226f76657274696d65223b733a343a226c696e6b223b733a32343a2261646d696e2f7574696c69746965732f6f76657274696d65223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a35353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223735223b733a353a226c6162656c223b733a31323a226f66666963655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d636f646570656e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223136223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a35363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223736223b733a353a226c6162656c223b733a31343a2273746f636b5f63617465676f7279223b733a343a226c696e6b223b733a32363a2261646d696e2f73746f636b2f73746f636b5f63617465676f7279223b733a343a2269636f6e223b733a31333a2266612066612d736c6964657273223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a35373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223737223b733a353a226c6162656c223b733a31323a226d616e6167655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223738223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a35393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223739223b733a353a226c6162656c223b733a31323a2273746f636b5f7265706f7274223b733a343a226c696e6b223b733a31383a2261646d696e2f73746f636b2f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d6c696e652d6368617274223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030373a31383a3235223b733a363a22737461747573223b733a313a2231223b7d693a36303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223831223b733a353a226c6162656c223b733a31303a2273746f636b5f6c697374223b733a343a226c696e6b223b733a32323a2261646d696e2f73746f636b2f73746f636b5f6c697374223b733a343a2269636f6e223b733a32303a2266612066612d737461636b2d65786368616e6765223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32352030343a34313a3130223b733a363a22737461747573223b733a313a2231223b7d693a36313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223832223b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a32343a2261646d696e2f73746f636b2f61737369676e5f73746f636b223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223833223b733a353a226c6162656c223b733a31393a2261737369676e5f73746f636b5f7265706f7274223b733a343a226c696e6b223b733a33313a2261646d696e2f73746f636b2f61737369676e5f73746f636b5f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223834223b733a353a226c6162656c223b733a31333a2273746f636b5f686973746f7279223b733a343a226c696e6b223b733a32353a2261646d696e2f73746f636b2f73746f636b5f686973746f7279223b733a343a2269636f6e223b733a31373a2266612066612d66696c652d746578742d6f223b733a363a22706172656e74223b733a323a223737223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32353a3032223b733a363a22737461747573223b733a313a2231223b7d693a36343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223835223b733a353a226c6162656c223b733a31313a22706572666f726d616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31343a2266612066612d6472696262626c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223230223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223836223b733a353a226c6162656c223b733a32313a22706572666f726d616e63655f696e64696361746f72223b733a343a226c696e6b223b733a33393a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f696e64696361746f72223b733a343a2269636f6e223b733a31323a2266612066612d72616e646f6d223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223837223b733a353a226c6162656c223b733a31383a22706572666f726d616e63655f7265706f7274223b733a343a226c696e6b223b733a33363a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223838223b733a353a226c6162656c223b733a31343a22676976655f61707072616973616c223b733a343a226c696e6b223b733a34343a2261646d696e2f706572666f726d616e63652f676976655f706572666f726d616e63655f61707072616973616c223b733a343a2269636f6e223b733a31303a2266612066612d706c7573223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a36383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223839223b733a353a226c6162656c223b733a373a22706179726f6c6c223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223139223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a36393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223930223b733a353a226c6162656c223b733a32313a226d616e6167655f73616c6172795f64657461696c73223b733a343a226c696e6b223b733a33353a2261646d696e2f706179726f6c6c2f6d616e6167655f73616c6172795f64657461696c73223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223931223b733a353a226c6162656c223b733a32303a22656d706c6f7965655f73616c6172795f6c697374223b733a343a226c696e6b223b733a33343a2261646d696e2f706179726f6c6c2f656d706c6f7965655f73616c6172795f6c697374223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223932223b733a353a226c6162656c223b733a31323a226d616b655f7061796d656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f706179726f6c6c2f6d616b655f7061796d656e74223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223933223b733a353a226c6162656c223b733a31363a2267656e65726174655f706179736c6970223b733a343a226c696e6b223b733a33303a2261646d696e2f706179726f6c6c2f67656e65726174655f706179736c6970223b733a343a2269636f6e223b733a31333a2266612066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223934223b733a353a226c6162656c223b733a31353a2273616c6172795f74656d706c617465223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f73616c6172795f74656d706c617465223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223935223b733a353a226c6162656c223b733a31313a22686f75726c795f72617465223b733a343a226c696e6b223b733a32353a2261646d696e2f706179726f6c6c2f686f75726c795f72617465223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223936223b733a353a226c6162656c223b733a31353a22706179726f6c6c5f73756d6d617279223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f706179726f6c6c5f73756d6d617279223b733a343a2269636f6e223b733a31383a2266612066612d63616d6572612d726574726f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32312032303a33363a3337223b733a363a22737461747573223b733a313a2231223b7d693a37363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223937223b733a353a226c6162656c223b733a31343a2270726f766964656e745f66756e64223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f70726f766964656e745f66756e64223b733a343a2269636f6e223b733a31353a2266612066612d627269656663617365223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223938223b733a353a226c6162656c223b733a31343a22616476616e63655f73616c617279223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f616476616e63655f73616c617279223b733a343a2269636f6e223b733a31393a2266612066612d63632d6d617374657263617264223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33343a3233223b733a363a22737461747573223b733a313a2231223b7d693a37383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a323a223939223b733a353a226c6162656c223b733a31343a22656d706c6f7965655f6177617264223b733a343a226c696e6b223b733a31313a2261646d696e2f6177617264223b733a343a2269636f6e223b733a31323a2266612066612d74726f706879223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a33353a3437223b733a363a22737461747573223b733a313a2231223b7d693a37393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313030223b733a353a226c6162656c223b733a31333a22616e6e6f756e63656d656e7473223b733a343a226c696e6b223b733a31393a2261646d696e2f616e6e6f756e63656d656e7473223b733a343a2269636f6e223b733a31393a2266612066612d62756c6c686f726e2069636f6e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313031223b733a353a226c6162656c223b733a383a22747261696e696e67223b733a343a226c696e6b223b733a31343a2261646d696e2f747261696e696e67223b733a343a2269636f6e223b733a31343a2266612066612d7375697463617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223232223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313032223b733a353a226c6162656c223b733a31323a226a6f625f63697263756c6172223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d676c6f6265223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223138223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313033223b733a353a226c6162656c223b733a31313a226a6f62735f706f73746564223b733a343a226c696e6b223b733a33303a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f706f73746564223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313034223b733a353a226c6162656c223b733a31373a226a6f62735f6170706c69636174696f6e73223b733a343a226c696e6b223b733a33363a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f6170706c69636174696f6e73223b733a343a2269636f6e223b733a31333a2266612066612d636f6d70617373223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313035223b733a353a226c6162656c223b733a31303a22617474656e64616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223137223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a38353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313036223b733a353a226c6162656c223b733a31383a2274696d656368616e67655f72657175657374223b733a343a226c696e6b223b733a33353a2261646d696e2f617474656e64616e63652f74696d656368616e67655f72657175657374223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313037223b733a353a226c6162656c223b733a31373a22617474656e64616e63655f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f617474656e64616e63652f617474656e64616e63655f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313038223b733a353a226c6162656c223b733a31323a2274696d655f686973746f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f617474656e64616e63652f74696d655f686973746f7279223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d32382032313a32303a3231223b733a363a22737461747573223b733a313a2231223b7d693a38383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313039223b733a353a226c6162656c223b733a393a2270756c6c2d646f776e223b733a343a226c696e6b223b733a303a22223b733a343a2269636f6e223b733a303a22223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031362d30352d33302030313a31333a3230223b733a363a22737461747573223b733a313a2230223b7d693a38393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313130223b733a353a226c6162656c223b733a31313a2266696c656d616e61676572223b733a343a226c696e6b223b733a31373a2261646d696e2f66696c656d616e61676572223b733a343a2269636f6e223b733a31303a2266612066612d66696c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30362d30392030323a34363a3235223b733a363a22737461747573223b733a313a2231223b7d693a39303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313131223b733a353a226c6162656c223b733a31353a22636f6d70616e795f64657461696c73223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d696e666f2d636972636c65223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313132223b733a353a226c6162656c223b733a31353a2273797374656d5f73657474696e6773223b733a343a226c696e6b223b733a32313a2261646d696e2f73657474696e67732f73797374656d223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6465736b746f70223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313133223b733a353a226c6162656c223b733a31343a22656d61696c5f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f656d61696c223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d656e76656c6f7065223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313134223b733a353a226c6162656c223b733a31353a22656d61696c5f74656d706c61746573223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f74656d706c61746573223b733a343a2269636f6e223b733a32353a2266612066612d66772066612d70656e63696c2d737175617265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313135223b733a353a226c6162656c223b733a31373a22656d61696c5f696e746567726174696f6e223b733a343a226c696e6b223b733a33323a2261646d696e2f73657474696e67732f656d61696c5f696e746567726174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313136223b733a353a226c6162656c223b733a31363a227061796d656e745f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7061796d656e7473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d646f6c6c6172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313137223b733a353a226c6162656c223b733a31363a22696e766f6963655f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f696e766f696365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313138223b733a353a226c6162656c223b733a31373a22657374696d6174655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f657374696d617465223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313139223b733a353a226c6162656c223b733a32323a227469636b6574735f6c656164735f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f7469636b657473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d7469636b6574223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313230223b733a353a226c6162656c223b733a31343a227468656d655f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f7468656d65223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d636f6465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313231223b733a353a226c6162656c223b733a31323a22776f726b696e675f64617973223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f776f726b696e675f64617973223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d63616c656e646172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313232223b733a353a226c6162656c223b733a31343a226c656176655f63617465676f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f6c656176655f63617465676f7279223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d706167656c696e6573223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313233223b733a353a226c6162656c223b733a31353a22696e636f6d655f63617465676f7279223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f696e636f6d655f63617465676f7279223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d6365727469666963617465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313234223b733a353a226c6162656c223b733a31363a22657870656e73655f63617465676f7279223b733a343a226c696e6b223b733a33313a2261646d696e2f73657474696e67732f657870656e73655f63617465676f7279223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7461736b73223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313235223b733a353a226c6162656c223b733a31343a22637573746f6d65725f67726f7570223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f637573746f6d65725f67726f7570223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7573657273223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313236223b733a353a226c6162656c223b733a31333a22636f6e74726163745f74797065223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f636f6e74726163745f74797065223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313237223b733a353a226c6162656c223b733a31313a226c6561645f737461747573223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313238223b733a353a226c6162656c223b733a31313a226c6561645f736f75726365223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f736f75726365223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d6172726f772d646f776e223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313239223b733a353a226c6162656c223b733a32363a226f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a226c696e6b223b733a34313a2261646d696e2f73657474696e67732f6f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a2269636f6e223b733a32343a2266612066612d66772066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313330223b733a353a226c6162656c223b733a31323a22637573746f6d5f6669656c64223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f637573746f6d5f6669656c64223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d737461722d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313331223b733a353a226c6162656c223b733a31343a227061796d656e745f6d6574686f64223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f7061796d656e745f6d6574686f64223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313332223b733a353a226c6162656c223b733a373a2263726f6e6a6f62223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f63726f6e6a6f62223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d636f6e74616f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313333223b733a353a226c6162656c223b733a31353a226d656e755f616c6c6f636174696f6e223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f6d656e755f616c6c6f636174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612066612d636f6d70617373223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313334223b733a353a226c6162656c223b733a31323a226e6f74696669636174696f6e223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313335223b733a353a226c6162656c223b733a31383a22656d61696c5f6e6f74696669636174696f6e223b733a343a226c696e6b223b733a33333a2261646d696e2f73657474696e67732f656d61696c5f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313336223b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6461746162617365223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313337223b733a353a226c6162656c223b733a31323a227472616e736c6174696f6e73223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f7472616e736c6174696f6e73223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6c616e6775616765223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313338223b733a353a226c6162656c223b733a31333a2273797374656d5f757064617465223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f73797374656d5f757064617465223b733a343a2269636f6e223b733a32373a2266612066612d66772066612d70656e63696c2d7371756172652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313339223b733a353a226c6162656c223b733a31323a22707269766174655f63686174223b733a343a226c696e6b223b733a31383a22636861742f636f6e766572736174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d656e76656c6f7065223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3131393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313430223b733a353a226c6162656c223b733a393a2270726f706f73616c73223b733a343a226c696e6b223b733a31353a2261646d696e2f70726f706f73616c73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3136223b733a363a22737461747573223b733a313a2231223b7d693a3132303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313431223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a32313a2266612066612d7175657374696f6e2d636972636c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223132223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313432223b733a353a226c6162656c223b733a31303a2263617465676f72696573223b733a343a226c696e6b223b733a33303a2261646d696e2f6b6e6f776c65646765626173652f63617465676f72696573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313433223b733a353a226c6162656c223b733a383a2261727469636c6573223b733a343a226c696e6b223b733a32383a2261646d696e2f6b6e6f776c65646765626173652f61727469636c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313434223b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a31393a2261646d696e2f6b6e6f776c6564676562617365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031393a33353a3137223b733a363a22737461747573223b733a313a2231223b7d693a3132343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313435223b733a353a226c6162656c223b733a31383a2264617368626f6172645f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f64617368626f617264223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d64617368626f617264223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031372d30342d32342030353a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3132353b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313436223b733a353a226c6162656c223b733a32303a227472616e73616374696f6e735f7265706f727473223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d30352d31322030303a35393a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132363b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313437223b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f73616c65735f7265706f7274223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d30312d30352031333a34323a3233223b733a363a22737461747573223b733a313a2231223b7d693a3132373b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313438223b733a353a226c6162656c223b733a31353a226d61726b5f617474656e64616e6365223b733a343a226c696e6b223b733a32313a2261646d696e2f6d61726b5f617474656e64616e6365223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3132383b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313439223b733a353a226c6162656c223b733a31303a22616c6c6f7765645f6970223b733a343a226c696e6b223b733a32353a2261646d696e2f73657474696e67732f616c6c6f7765645f6970223b733a343a2269636f6e223b733a31323a2266612066612d736572766572223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d31332032323a32323a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132393b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313530223b733a353a226c6162656c223b733a353a2273746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2269636f6e2d6c6179657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323032302d30322d30332032333a30303a3531223b733a363a22737461747573223b733a313a2231223b7d693a3133303b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313531223b733a353a226c6162656c223b733a383a22737570706c696572223b733a343a226c696e6b223b733a31343a2261646d696e2f737570706c696572223b733a343a2269636f6e223b733a31343a2269636f6e2d627269656663617365223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133313b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313532223b733a353a226c6162656c223b733a303a22223b733a343a226c696e6b223b733a31343a2261646d696e2f7075726368617365223b733a343a2269636f6e223b733a31323a2269636f6e2d68616e64626167223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031392d30342d33302030363a34303a3532223b733a363a22737461747573223b733a313a2231223b7d693a3133323b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313533223b733a353a226c6162656c223b733a31323a2272657475726e5f73746f636b223b733a343a226c696e6b223b733a31383a2261646d696e2f72657475726e5f73746f636b223b733a343a2269636f6e223b733a31343a2269636f6e2d73686172652d616c74223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031392d30352d30342030343a34393a3330223b733a363a22737461747573223b733a313a2231223b7d693a3133333b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313534223b733a353a226c6162656c223b733a31363a2270757263686173655f7061796d656e74223b733a343a226c696e6b223b733a32373a2261646d696e2f70757263686173652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31363a2269636f6e2d6372656469742d63617264223b733a363a22706172656e74223b733a333a22313530223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031392d30352d30342030323a32333a3131223b733a363a22737461747573223b733a313a2231223b7d693a3133343b4f3a383a22737464436c617373223a383a7b733a373a226d656e755f6964223b733a333a22313535223b733a353a226c6162656c223b733a31373a2270757263686173655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7075726368617365223b733a343a2269636f6e223b733a31383a2266612d66772069636f6e2d68616e64626167223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32342031313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d7d757365725f6e616d657c733a373a2261646d696e6b6f223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6e616d657c733a373a2241646d696e6b6f223b70686f746f7c733a32363a2275706c6f6164732f64656661756c745f6176617461722e6a7067223b64657369676e6174696f6e735f69647c733a313a2230223b757365725f69647c733a313a2238223b6c6173745f6c6f67696e7c733a31393a22323032302d30322d30352032323a33373a3031223b6f6e6c696e655f74696d657c693a313538313035323539373b6c6f67676564696e7c623a313b757365725f747970657c733a313a2231223b757365725f666c61677c693a313b646972656374696f6e7c733a333a226c7472223b);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('r14bk52pms4veccvfkk1ef49s0j83nhn', '93.158.161.122', 1581056036, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035363033363b),
('t5iboqoh5n4adonul9ssuq83qb80chns', '106.215.34.6', 1581055761, 0x5f5f63695f6c6173745f726567656e65726174657c693a313538313035353736313b6d656e755f6163746976655f69647c613a323a7b693a303b733a333a22313039223b693a313b733a313a2230223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status`) VALUES
(1, 'answered'),
(2, 'closed'),
(3, 'open'),
(5, 'in_progress');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_sub_category_id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `total_stock` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_category`
--

CREATE TABLE `tbl_stock_category` (
  `stock_category_id` int(11) NOT NULL,
  `stock_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_sub_category`
--

CREATE TABLE `tbl_stock_sub_category` (
  `stock_sub_category_id` int(11) NOT NULL,
  `stock_category_id` int(11) NOT NULL,
  `stock_sub_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suppliers`
--

CREATE TABLE `tbl_suppliers` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `task_id` int(5) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `milestones_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `goal_tracking_id` int(11) DEFAULT NULL,
  `sub_task_id` int(11) DEFAULT NULL,
  `task_name` varchar(200) NOT NULL,
  `task_description` text NOT NULL,
  `task_start_date` date NOT NULL,
  `due_date` date NOT NULL,
  `task_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `task_status` varchar(30) DEFAULT NULL,
  `task_progress` int(2) NOT NULL,
  `calculate_progress` varchar(200) DEFAULT NULL,
  `task_hour` varchar(10) NOT NULL,
  `tasks_notes` text DEFAULT NULL,
  `timer_status` enum('on','off') NOT NULL DEFAULT 'off',
  `timer_started_by` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `logged_time` int(11) NOT NULL DEFAULT 0,
  `leads_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `permission` text DEFAULT NULL,
  `client_visible` varchar(5) DEFAULT NULL,
  `custom_date` text DEFAULT NULL,
  `hourly_rate` decimal(18,2) DEFAULT 0.00,
  `billable` varchar(20) NOT NULL DEFAULT 'No',
  `index_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`task_id`, `project_id`, `milestones_id`, `opportunities_id`, `goal_tracking_id`, `sub_task_id`, `task_name`, `task_description`, `task_start_date`, `due_date`, `task_created_date`, `task_status`, `task_progress`, `calculate_progress`, `task_hour`, `tasks_notes`, `timer_status`, `timer_started_by`, `start_time`, `logged_time`, `leads_id`, `bug_id`, `created_by`, `permission`, `client_visible`, `custom_date`, `hourly_rate`, `billable`, `index_no`) VALUES
(1, 68, 0, NULL, NULL, NULL, 'Hire a consultant to assist me into the scoping of the KIQ - PMR - Com / Prod', '', '2019-07-27', '2019-08-19', '2020-02-06 09:37:01', 'completed', 100, NULL, '0:00', NULL, 'off', 8, 0, 1580981830, NULL, NULL, 1, '{\"15\":[\"view\"],\"14\":[\"edit\",\"delete\",\"view\"]}', NULL, NULL, '0.00', 'No', 1),
(2, 68, 0, NULL, NULL, NULL, 'PH1 Finalization', '', '2019-06-01', '2019-09-01', '2020-02-05 07:58:37', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, 0, 1580889517, NULL, NULL, 1, '{\"1\":[\"view\"]}', NULL, NULL, '0.00', 'No', 2),
(3, 43, 0, NULL, NULL, NULL, 'Build design model for Olivier based on a web template (  )', '', '2019-07-01', '2019-08-05', '2019-08-28 01:11:20', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 3),
(4, 4, 0, NULL, NULL, NULL, 'Sign Off with Nicola & Aline', '<p class=\"MsoNormal\"><span lang=\"FR\">Je viens de faire\nle sign off avec Nicola :</span></p>\n\n<p class=\"MsoNormal\" xss=removed><b><span lang=\"FR\">Voici les toutes dernières\nremarques ( Aline et Nicola compilées ) : <o></o></span></b></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>“Overall L&D PRG”\n      <span lang=\"EN\">Remove the “%” in the title before “completed vs\n     registered”<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"EN\">Can the Overall L&D  Programs Rolling display the latest 3\n     quarters of the previous year when Q1 ( This graph should be always\n     displaying the actual quarter and the latest 3, if data exist )<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"EN\">Remove the numbers ( displayed by default in the graph ) from the new\n     Overall L&D PRG Rolling. Aline wants to have the data displayed only\n     on hover.<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"EN\">Change \"purchasing\" to \"procurement\" global\n     functions & tables<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"EN\">Global Functions : Headcount Tech ops actual vs budget : budget dark\n     bar to be switched to green.<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed>Please can you make sure\n     that all labels are displayed on the talent successor readiness as not all\n     are showing. Also we need more space between bars as it looks like one big\n     block.</li></ul>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>Nicole has asked if you\n     can switch the colors of talent successor readiness to be the blue color\n     and the not ready to be the pink color as she said the pink color is too\n     close to red which implies not ready.<o></o></li>\n</ul>', '2019-08-01', '2019-08-01', '2019-08-01 06:30:52', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, '{\"1\":[\"view\"]}', NULL, NULL, '0.00', 'No', 4),
(5, 4, 0, NULL, NULL, NULL, 'Very Last wave of changes : Please make sure that IS will do everything before mid august', '<p class=\"MsoNormal\"><br></p>\n\n<p class=\"MsoNormal\" xss=removed><b><span lang=\"FR\">Voici les toutes dernières\nremarques ( Aline et Nicola compilées ) : <o></o></span></b></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>“Overall l&d prg.”\n      <span lang=\"EN\">Remove the “%” in the title before “completed vs\n     registered”<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"EN\">Can the Overall L&D  Programs Rolling display the latest 3\n     quarters of the previous year when Q1 ( This graph should be always\n     displaying the actual quarter and the latest 3, if data exist ) <b><span xss=removed>A discuter si besoin.</span></b><o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"EN\">Remove the numbers ( displayed by default in the graph ) from the new\n     Overall L&D PRG Rolling. Aline wants to have the data displayed only\n     on hover.<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"EN\">Change \"purchasing\" to \"procurement\" global\n     functions & tables<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"EN\">Global Functions : Headcount Tech ops actual vs budget : budget dark\n     bar to be switched to green.<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed>Please can you make sure\n     that all labels are displayed on the talent successor readiness as not all\n     are showing. Also we need more space between bars as it looks like one big\n     block.</li></ul>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>Nicole has asked if you\n     can switch the colors of talent successor readiness to be the blue color\n     and the not ready to be the pink color as she said the pink color is too\n     close to red which implies not ready.<o></o></li>\n</ul>', '2019-08-01', '2019-08-12', '2019-12-24 06:31:28', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 5),
(6, 4, 0, NULL, NULL, NULL, 'Project Launch Communication', '', '2019-08-12', '2019-09-01', '2020-02-06 06:16:46', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 6),
(7, 4, 0, NULL, NULL, NULL, 'Setting Up AD groups', '', '2019-08-12', '2019-08-31', '2019-12-24 06:31:45', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 7),
(8, 4, 0, NULL, NULL, NULL, 'Setting Up IAM Process', '', '2019-08-12', '2019-08-31', '2020-02-06 09:36:27', 'not_started', 0, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, '{\"14\":[\"edit\",\"delete\",\"view\"]}', NULL, NULL, '0.00', 'No', 8),
(9, 4, 0, NULL, NULL, NULL, 'Script to interface Ipeople & Ad groups ', '<p>Please Set up a meeting with Najib ( Ipeople it ) & Julien Barreau. </p><p>I already did but julien need a technical reminder on Ipeople capabilities.</p>', '2019-08-12', '2019-08-31', '2020-02-06 09:31:36', 'waiting_for_someone', 0, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 9),
(10, 4, 0, NULL, NULL, NULL, 'Setting up SharePoint Security Groups', '', '2019-08-12', '2019-08-31', '2019-08-01 19:30:24', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 10),
(11, 68, 0, NULL, NULL, NULL, 'Testing and challenging PH1 first delivery', '', '2019-08-05', '2019-08-19', '2019-08-28 03:18:44', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, '{\"1\":[\"view\"]}', NULL, NULL, '0.00', 'No', 11),
(12, 68, 0, NULL, NULL, NULL, 'Helping the CI department into setting up the CI plateform PH1', '', '2019-08-12', '2019-08-31', '2019-08-01 06:47:50', 'not_started', 0, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 12),
(13, 31, 0, NULL, NULL, NULL, 'Ensure that the last bugs are corrected. Sign off with Ineat.', '', '2019-08-05', '2019-08-12', '2019-12-24 06:37:27', 'not_started', 0, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, '{\"1\":[\"view\"],\"3\":[\"view\"],\"5\":[\"view\"]}', NULL, NULL, '0.00', 'No', 13),
(14, 31, 0, NULL, NULL, NULL, 'Build Landing page for Beatrice Hacher', '<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed>Re-bonjour\nMarco,<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed>Voici\nles 2 sites à relier à la Font page :<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed><a href=\"https://ipsengroup.sharepoint.com/sites/SomatulineAcromegalyChinaRDGPT\">https://ipsengroup.sharepoint.com/sites/SomatulineAcromegalyChinaRDGPT</a><o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed><a href=\"https://ipsengroup.sharepoint.com/sites/SomatulineGEP-NETChinaRDGPT2\">https://ipsengroup.sharepoint.com/sites/SomatulineGEP-NETChinaRDGPT2</a><o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed>(pourrais-tu\nm’envoyer la lanterne verte pour ce 2<sup>ème</sup> site ?)<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed> </span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed>MERCI\npour ton aide.<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed>Amicalement,<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\" xss=removed> </span></p><p class=\"MsoNormal\"><span lang=\"FR\" xss=removed>Site a dupliquer pour repondre au besoin : </span><a href=\"https://ipsengroup.sharepoint.com/sites/Custom/Communication/SitePages/Homepage.aspx\" xss=removed>https://ipsengroup.sharepoint.com/sites/Custom/Communication/SitePages/Homepage.aspx</a></p>', '2019-08-01', '2019-08-31', '2019-08-28 01:11:44', 'completed', 100, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 14),
(15, 46, 0, NULL, NULL, NULL, 'US & Canada pages updates', '<p class=\"MsoNormal\"><span lang=\"FR\">Dear Emily,<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<p class=\"MsoNormal\">Melissa will leave the office this evening for the holidays.\nUntil September. <o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\">For the next round and from tomorrow I will personally take\nthe proper actions with more or less delay depending on my workload.<o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\">I hope this will be completed by the end of the week as I\nwill leave the office as well for 10 days of vacations.<o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\">Kind regards,<o></o></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<table class=\"MsoNormalTable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n <tbody><tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\" xss=removed><span xss=removed> </span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><b><span xss=removed>Marco DELPIANO</span><o></o></b></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\" xss=removed><span xss=removed> </span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Project Manager ( O365 SharePoint ) / MS Application Expert</span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Support & Application – IT</span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td width=\"420\" valign=\"top\" xss=removed>\n  <div class=\"MsoNormal\"><span xss=removed>\n  <hr size=\"1\" width=\"55\" xss=removed noshade=\"\" align=\"left\">\n  </span></div>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Office : +33 1 58 33 57 29<o></o></span></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Mobile : +33 6 (0699607776)</span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Ipsen Boulogne</span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>65 Quai Georges Gorse</span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Boulogne</span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\" xss=removed><span xss=removed> </span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed><a href=\"http://www.ipsen.com/\" target=\"_blank\"><span xss=removed>www.ipsen.com</span></a>\n  </span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td width=\"420\" valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>&lt;!--[if gte vml 1]><v id=\"_x0000_t75\" coordsize=\"21600,21600\" o:spt=\"75\" o:preferrelative=\"t\" path=\"m@4@5l@4@11@9@11@9@5xe\" filled=\"f\" stroked=\"f\">\n   <v joinstyle=\"miter\">\n   <v>\n    <v eqn=\"if lineDrawn pixelLineWidth 0\">\n    <v eqn=\"sum @0 1 0\">\n    <v eqn=\"sum 0 0 @1\">\n    <v eqn=\"prod @2 1 2\">\n    <v eqn=\"prod @3 21600 pixelWidth\">\n    <v eqn=\"prod @3 21600 pixelHeight\">\n    <v eqn=\"sum @0 0 1\">\n    <v eqn=\"prod @6 1 2\">\n    <v eqn=\"prod @7 21600 pixelWidth\">\n    <v eqn=\"sum @8 21600 0\">\n    <v eqn=\"prod @7 21600 pixelHeight\">\n    <v eqn=\"sum @10 21600 0\">\n   </v>\n   <v o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\">\n   <o v:ext=\"edit\" aspectratio=\"t\">\n  </v><v id=\"Image_x0020_2\" o:spid=\"_x0000_i1026\" type=\"#_x0000_t75\" alt=\"Logo Ipsen\" xss=removed>\n   <v src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image001.png\" o:href=\"cid:image001.png@01D54632.A3909B90\">\n  </v>&lt;![endif]--&gt;&lt;!--[if !vml]--&gt;<img border=\"0\" width=\"154\" height=\"44\" src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image002.gif\" xss=removed alt=\"Logo Ipsen\" shapes=\"Image_x0020_2\">&lt;!--[endif]--&gt;</span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\" xss=removed><span xss=removed> </span><o></o></p>\n  </td>\n </tr>\n</tbody></table>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><b><span lang=\"FR\">De :</span></b><span lang=\"FR\"> Emily CORREIA <br>\n<b>Envoyé :</b> lundi 29 juillet 2019 16:43<br>\n<b>À :</b> MISSAKIAN, Mélissa (C2S) &lt;<a href=\"mailto:mmissakian@c2s.fr\">mmissakian@c2s.fr</a>><br>\n<b>Cc :</b> Paul MURASKO &lt;<a href=\"mailto:paul.murasko@ipsen.com\">paul.murasko@ipsen.com</a>>;\nMarco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<b>Objet :</b> RE: Changes to the landing page for the US & Canada<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Hi Mélissa, <o></o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed><o> </o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Thank you\nfor this initial round of edits.<o></o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed><o> </o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed>On the\nlanding page, the first section of blocks should read “People” “Patients”\n“Business”, instead of “NA Home” “People” “Key Resources”.<o></o></span></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Please\n     move the “NA Home” and “Key Resources” boxes to the bottom set of boxes <o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Please\n     correct the spelling of the word <b>Resources </b>on the box and the\n     corresponding page<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Replace\n     the pink background on the current “People” box with the photo used in the\n     bottom navigation <o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Remove\n     the duplicate “People” from the bottom menu<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Move\n     the “Patients” block from the bottom menu to the top section<o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Add\n     in a “Business” page/block like the “People” and “Patients” in the top\n     section <o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Change\n     “US Commercial Regulatory Affairs” to read “Commercial Regulatory Affairs”<o></o></span></li>\n</ul>\n\n<p class=\"MsoNormal\"><span xss=removed><o> </o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Looking\nforward to seeing the next round!<o></o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed><o> </o></span></p>\n\n<p class=\"MsoNormal\"><b>From:</b> MISSAKIAN, Mélissa\n(C2S) &lt;<a href=\"mailto:mmissakian@c2s.fr\">mmissakian@c2s.fr</a>> <br>\n<b>Sent:</b> Monday, July 29, 2019 10:22 AM<br>\n<b>To:</b> Emily CORREIA &lt;<a href=\"mailto:emily.correia@ipsen.com\">emily.correia@ipsen.com</a>><br>\n<b>Cc:</b> Paul MURASKO &lt;<a href=\"mailto:paul.murasko@ipsen.com\">paul.murasko@ipsen.com</a>>;\nMarco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<b>Subject:</b> RE: Changes to the landing page for the US & Canada<o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Emily, <o></o></span></p>\n\n<p class=\"MsoNormal\">Changes are available. <o></o></p>\n\n<p class=\"MsoNormal\">Could you check them? <o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\">Thank you, <o></o></p>\n\n<p class=\"MsoNormal\">Mélissa.<o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><b><span lang=\"FR\">De :</span></b><span lang=\"FR\"> Emily CORREIA &lt;<a href=\"mailto:emily.correia@ipsen.com\">emily.correia@ipsen.com</a>> <br>\n<b>Envoyé :</b> lundi 29 juillet 2019 14:25<br>\n<b>À :</b> MISSAKIAN, Mélissa (C2S) &lt;<a href=\"mailto:mmissakian@c2s.fr\">mmissakian@c2s.fr</a>><br>\n<b>Cc :</b> Paul MURASKO &lt;<a href=\"mailto:paul.murasko@ipsen.com\">paul.murasko@ipsen.com</a>>;\n<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a><br>\n<b>Objet :</b> RE: Changes to the landing page for the US & Canada<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Hi\nMelissa,<o></o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed><o> </o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Please\nsee my answers below in red.<o></o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed><o> </o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Please\nlet me know if you have any questions.<o></o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed><o> </o></span></p>\n\n<p class=\"MsoNormal\"><b>From:</b> MISSAKIAN, Mélissa\n(C2S) &lt;<a href=\"mailto:mmissakian@c2s.fr\">mmissakian@c2s.fr</a>> <br>\n<b>Sent:</b> Monday, July 29, 2019 5:07 AM<br>\n<b>To:</b> Emily CORREIA &lt;<a href=\"mailto:emily.correia@ipsen.com\">emily.correia@ipsen.com</a>><br>\n<b>Cc:</b> Paul MURASKO &lt;<a href=\"mailto:paul.murasko@ipsen.com\">paul.murasko@ipsen.com</a>>;\nMarco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<b>Subject:</b> RE: Changes to the landing page for the US & Canada<o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Hi Emily, <o></o></span></p>\n\n<p class=\"MsoNormal\"><span xss=removed><o> </o></span></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Consolidate\n     to three boxes:</span><o></o></li>\n <ul xss=removed type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>People\n      (use “People” image attached)</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Patients\n      (use “Patients” image attached)</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Business\n      (use ”Business” image attached)</span><o></o></li>\n </ul>\n</ul>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>What\n     would be the links for these boxes ? <span xss=removed> </span><span xss=removed>We need to create separate pages for each of\n     these three sections.</span><o></o></li>\n</ul>\n\n<p class=\"MsoNormal\"><span xss=removed> </span></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Is\n     it possible to have the calendar automatically feed from an Outlook\n     calendar? (I’ve attached the .ics file here for the initial pull, but\n     please let me know if it is possible to have this done automatically)</span><o></o></li>\n</ul>\n\n<p class=\"MsoNormal\"><span xss=removed> </span></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>We\n     will provide you a documented process to achieve that<span xss=removed> </span><span xss=removed>Thank you</span><o></o></li>\n</ul>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Create\n     two columns on each sub page for US and Canada (for now, the content can\n     remain the same while we work with each function to determine the\n     appropriate resources for each country:</span><o></o></li>\n <ul xss=removed type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Ethics\n      & Compliance</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Finance</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>HR</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Medical\n      Affairs</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Patient\n      Safety</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>PRC</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Commercial\n      and Reg Affairs</span><o></o></li>\n </ul>\n</ul>\n\n<p class=\"MsoListParagraph\" xss=removed><o> </o></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed>Not\n     sure to understand where do you want to create those column exactly <span xss=removed>On each of the\n     specific pages, instead of having one column with the resources, we would\n     like two identical columns. One that says “U.S. resources” and one that\n     says “Canada Resources.” We’ll provide the updated content for each column\n     once we have a better view of the landing page. </span><o></o></li>\n</ul>\n\n<p class=\"MsoNormal\"><span xss=removed> </span></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\">Kind regards, <o></o></p>\n\n<p class=\"MsoNormal\">Mélissa Missakian. <o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><b><span lang=\"FR\">De :</span></b><span lang=\"FR\"> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>> <br>\n<b>Envoyé :</b> vendredi 26 juillet 2019 14:56<br>\n<b>À :</b> Emily CORREIA &lt;<a href=\"mailto:emily.correia@ipsen.com\">emily.correia@ipsen.com</a>><br>\n<b>Cc :</b> MISSAKIAN, Mélissa (C2S) &lt;<a href=\"mailto:mmissakian@c2s.fr\">mmissakian@c2s.fr</a>>;\nPaul MURASKO &lt;<a href=\"mailto:paul.murasko@ipsen.com\">paul.murasko@ipsen.com</a>><br>\n<b>Objet :</b> RE: Changes to the landing page for the US & Canada<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<p class=\"MsoNormal\">I will have a call with Melissa at the end of the day and\nwill told you if we can make it.<o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\">Kind regards,<o></o></p>\n\n<p class=\"MsoNormal\" xss=removed><a href=\"https://eur01.safelinks.protection.outlook.com/?url=https://htmlsig.com/t/000001BZZNJV&data=02|01|emily.correia@ipsen.com|50b801806a15486db86708d714302f1c|9e776b6aa6cc4fafa054a502153beb01|0|0|637000069532436904&sdata=aj2V/1c0QNKgNVoJWxGfUlJX6M9OHZx8mweudkVF+Xk=&reserved=0\"><span lang=\"EN-GB\" xss=removed><img border=\"0\" width=\"80\" height=\"25\" id=\"_x0000_i1027\" src=\"https://htmlsigs.s3.amazonaws.com/logos/files/000/654/990/landscape/logo-ipsen.gif\" xss=removed alt=\"Ipsen Limited ltd\"></span></a><span lang=\"FR\" xss=removed><o></o></span></p>\n\n<p class=\"MsoNormal\" xss=removed><b><span xss=removed>Marco DELPIANO</span></b><span xss=removed> | Project Manager –\nApplication Expert (O365 – SharePoint)<br>\n<a href=\"mailto:Marco.delpiano@ipsen.com\"><span xss=removed>Marco.delpiano@ipsen.com</span></a>\n/  +33 6 99 60 77 76 </span><span lang=\"FR\" xss=removed><o></o></span></p>\n\n<p class=\"MsoNormal\" xss=removed><b><span lang=\"EN-GB\" xss=removed>Boulogne Billancourt, 92100</span></b><span lang=\"FR\" xss=removed><o></o></span></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><b><span lang=\"FR\">De :</span></b><span lang=\"FR\"> Emily CORREIA &lt;<a href=\"mailto:emily.correia@ipsen.com\">emily.correia@ipsen.com</a>> <br>\n<b>Envoyé :</b> Friday, July 26, 2019 1:52 PM<br>\n<b>À :</b> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<b>Cc :</b> MISSAKIAN, Mélissa (C2S) &lt;<a href=\"mailto:mmissakian@c2s.fr\">mmissakian@c2s.fr</a>>;\nPaul MURASKO &lt;<a href=\"mailto:paul.murasko@ipsen.com\">paul.murasko@ipsen.com</a>><br>\n<b>Objet :</b> Re: Changes to the landing page for the US & Canada<o></o></span></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\" xss=removed>Can we aim for the end of your\nbusiness day on Tuesday, or is that timeline too tight? <o></o></p>\n\n<p class=\"MsoNormal\">Sent from my iPhone<o></o></p>\n\n<p class=\"MsoNormal\" xss=removed><br>\nOn Jul 26, 2019, at 5:24 AM, Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>> wrote:<o></o></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Dear Emily, </span><o></o></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span><o></o></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Got you. </span><o></o></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span><o></o></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"><a id=\"OWAAM4C8C0780FB56424F9A490664781089A1\" href=\"mailto:mmissakian@c2s.fr\"><span lang=\"EN-US\" xss=removed>@MISSAKIAN, Mélissa</span></a> </span>is\nhere today to take a look at those changes. <o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\">I will notify you when this will be over.<o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\">I hope this can be done by the middle of next week. This\nwould be ok ? <o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\">Kind regards,<o></o></p>\n\n<p class=\"MsoNormal\" xss=removed><a href=\"https://eur01.safelinks.protection.outlook.com/?url=https://htmlsig.com/t/000001BZZNJV&data=02|01|emily.correia@ipsen.com|50b801806a15486db86708d714302f1c|9e776b6aa6cc4fafa054a502153beb01|0|0|637000069532436904&sdata=aj2V/1c0QNKgNVoJWxGfUlJX6M9OHZx8mweudkVF+Xk=&reserved=0\"><span lang=\"EN-GB\" xss=removed><img border=\"0\" width=\"80\" height=\"25\" id=\"_x0000_i1028\" src=\"https://htmlsigs.s3.amazonaws.com/logos/files/000/654/990/landscape/logo-ipsen.gif\" xss=removed alt=\"Ipsen Limited ltd\"></span></a><o></o></p>\n\n<p class=\"MsoNormal\" xss=removed><b><span xss=removed>Marco DELPIANO</span></b><span xss=removed> | Project Manager –\nApplication Expert (O365 – SharePoint)<br>\n<a href=\"mailto:Marco.delpiano@ipsen.com\"><span xss=removed>Marco.delpiano@ipsen.com</span></a>\n/  +33 6 99 60 77 76 </span><o></o></p>\n\n<p class=\"MsoNormal\" xss=removed><b><span lang=\"EN-GB\" xss=removed>Boulogne Billancourt, 92100</span></b><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><b>De :</b> Emily CORREIA\n&lt;<a href=\"mailto:emily.correia@ipsen.com\">emily.correia@ipsen.com</a>> <br>\n<b>Envoyé :</b> Thursday, July 25, 2019 5:40 PM<br>\n<b>À :</b> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<b>Cc :</b> Paul MURASKO &lt;<a href=\"mailto:paul.murasko@ipsen.com\">paul.murasko@ipsen.com</a>><br>\n<b>Objet :</b> RE: Changes to the landing page for the US & Canada<o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Hi Marco,</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>One more\nsmall addition, can you please use the attached image as a placeholder for the\n“Patients” box?</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Thanks</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><b>From:</b> Emily CORREIA <br>\n<b>Sent:</b> Thursday, July 25, 2019 9:47 AM<br>\n<b>To:</b> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<b>Cc:</b> Paul MURASKO &lt;<a href=\"mailto:paul.murasko@ipsen.com\">paul.murasko@ipsen.com</a>><br>\n<b>Subject:</b> Changes to the landing page for the US & Canada<o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Hi Marco,</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>We have a\nfew preliminary requests that we are hoping you’re able to make for us on the\nUS/Canada Ipsen Planet Page.</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Can you let\nus know how long these changes will take? We are hoping to be able to share the\nspecific pages with each function area to get you the correct links, but will\nneed to see the updated staging pages first.</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>We are happy\nto get on the phone if you need any additional information from us while you’re\nworking on these updates.</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Thanks!</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>***</span><o></o></p>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>Landing\nPage:</span><o></o></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Change\n     to: “Welcome to North America”</span><o></o></li>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Consolidate\n     to three boxes:</span><o></o></li>\n <ul xss=removed type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>People\n      (use “People” image attached)</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Patients\n      (use “Patients” image attached)</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Business\n      (use ”Business” image attached)</span><o></o></li>\n </ul>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Calendar</span><o></o></li>\n <ul xss=removed type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Is\n      it possible to have the calendar automatically feed from an Outlook\n      calendar? (I’ve attached the .ics file here for the initial pull, but\n      please let me know if it is possible to have this done automatically)</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Change\n      link from “View Calendar” to “View OIC Calendar”</span><o></o></li>\n </ul>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Keep\n     news feed and the right-hand news panes the same</span><o></o></li>\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Move\n     “Leadership Corner” box down next to the calendar</span><o></o></li>\n</ul>\n\n<p class=\"MsoNormal\"><span xss=removed>Subpages</span><o></o></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Create\n     two columns on each sub page for US and Canada (for now, the content can\n     remain the same while we work with each function to determine the\n     appropriate resources for each country:</span><o></o></li>\n <ul xss=removed type=\"circle\">\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Ethics\n      & Compliance</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Finance</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>HR</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Medical\n      Affairs</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Patient\n      Safety</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>PRC</span><o></o></li>\n  <li class=\"MsoListParagraph\" xss=removed><span xss=removed>Commercial\n      and Reg Affairs</span><o></o></li>\n </ul>\n</ul>\n\n<p class=\"MsoNormal\"> <o></o></p>\n\n<p class=\"MsoNormal\"><span xss=removed>###</span><o></o></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p xss=removed><span xss=removed>This\nemail (including any attachment) is intended only for the use by the recipients\nnamed above and contains proprietary information that may be confidential,\ncopyrighted and/or privileged. Unauthorized disclosure, use or copying is\nprohibited. If this email was sent to you in error or if you are not an\nintended recipient, please notify the sender immediately and delete this e-mail\nfrom your systems. Thank you<o></o></span></p>', '2019-07-01', '2019-09-01', '2019-08-28 03:18:17', 'in_progress', 65, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, 'all', NULL, NULL, '0.00', 'No', 15),
(16, 46, 0, NULL, NULL, NULL, 'Techops Page update', '<p class=\"MsoNormal\"><b><span lang=\"FR\">De :</span></b><span lang=\"FR\"> Agnes LAVALLART &lt;<a href=\"mailto:agnes.lavallart@ipsen.com\">agnes.lavallart@ipsen.com</a>> <br>\n<b>Envoyé :</b> Friday, July 19, 2019 5:47 PM<br>\n<b>À :</b> Marco DELPIANO &lt;<a href=\"mailto:marco.delpiano@ipsen.com\">marco.delpiano@ipsen.com</a>><br>\n<b>Objet :</b> TechOps page <o></o></span></p>\n\n<p class=\"MsoNormal\"><o> </o></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Hello Marco, <o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">La journée a été\ndense, je te fais suivre les infos que j’ai si tu peux commencer à migrer les\npages, je te mets également les éléments que j’ai dans les différentes box\naccessible <a href=\"https://ent.box.com/s/hqz9yb6rt2hiu4qflgfslqsw9ndb6571\">ICI</a>\n<o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">En slide 13 du\nppt tu as les noms des pages manquantes, ils ne sont pas au clair sur ce qu’il\nfaut mettre dedans mais si tu peux déjà créer les pages et les raccorder à\nTechOps sans les publier ce serait déjà chouette à savoir : <o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<ul xss=removed type=\"disc\">\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"FR\">Welcome TechOps (qui existe déjà) <o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"FR\">Therapeutical areas (à créer et où on doit mettre le body patient à\n     cliquer dans BOX <o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"FR\">TechOps Strategy – Game Changers (à creer, j’ajouterais les contenus à\n     mon retour) <o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"FR\">Technical Leadership teams – TOLT (c’est la page équipe actuelle qui\n     est à renommer si plus facile pour toi à recreer et j’updaterai les\n     contenus à mon retour) <o></o></span></li>\n <li class=\"MsoListParagraph\" xss=removed><span lang=\"FR\">TechOps People section (page à créer, les éléments qui seront dedans\n     sont sur BOX, mais bon ils ont mit un max de photo, faut que je créer un\n     pele mele et que j’ajoute les videos. <o></o></span></li>\n</ul>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Si tu peux faire\ndéjà le masque vide et j’ajouterais les contenus à mon retour, si besoin Nicola\nGeorge que tu connais peut t’aider sur les contenus des pages <o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Merci encore je\nrentre le 19 aout au matin. <o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Bien\ncordialement. <o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\">Agnes <o></o></span></p>\n\n<p class=\"MsoNormal\"><span lang=\"FR\"> </span></p>\n\n<table class=\"MsoNormalTable\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n <tbody><tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\" xss=removed><span xss=removed> </span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><b><span xss=removed>Agnès LAVALLART</span></b><b><o></o></b></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\" xss=removed><span xss=removed> </span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Responsable communication Technical\n  Operations<br>\n  Communication Manager Technical Operations</span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Global Communications</span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td width=\"420\" valign=\"top\" xss=removed>\n  <div class=\"MsoNormal\"><span xss=removed>\n  <hr size=\"1\" width=\"55\" xss=removed noshade=\"\" align=\"left\">\n  </span></div>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>+33 6 (74 08 89 72)</span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>+33 1 (58 33 59 45)</span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed><a href=\"mailto:agnes.lavallart@ipsen.com\">agnes.lavallart@ipsen.com</a> </span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>Ipsen </span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>65 Quai Georges Gorse</span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>92650 Boulogne-Billancourt Cedex,\n  France</span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\" xss=removed><span xss=removed> </span><o></o></p>\n  </td>\n </tr>\n <tr>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed><a href=\"http://www.ipsen.com/\" target=\"_blank\"><span xss=removed>www.ipsen.com</span></a> </span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed></td>\n </tr>\n <tr>\n  <td width=\"420\" valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\"><span xss=removed>&lt;!--[if gte vml 1]><v id=\"_x0000_t75\" coordsize=\"21600,21600\" o:spt=\"75\" o:preferrelative=\"t\" path=\"m@4@5l@4@11@9@11@9@5xe\" filled=\"f\" stroked=\"f\">\n   <v joinstyle=\"miter\">\n   <v>\n    <v eqn=\"if lineDrawn pixelLineWidth 0\">\n    <v eqn=\"sum @0 1 0\">\n    <v eqn=\"sum 0 0 @1\">\n    <v eqn=\"prod @2 1 2\">\n    <v eqn=\"prod @3 21600 pixelWidth\">\n    <v eqn=\"prod @3 21600 pixelHeight\">\n    <v eqn=\"sum @0 0 1\">\n    <v eqn=\"prod @6 1 2\">\n    <v eqn=\"prod @7 21600 pixelWidth\">\n    <v eqn=\"sum @8 21600 0\">\n    <v eqn=\"prod @7 21600 pixelHeight\">\n    <v eqn=\"sum @10 21600 0\">\n   </v>\n   <v o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\">\n   <o v:ext=\"edit\" aspectratio=\"t\">\n  </v><v id=\"Image_x0020_2\" o:spid=\"_x0000_i1026\" type=\"#_x0000_t75\" alt=\"Logo Ipsen\" xss=removed>\n   <v src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image001.png\" o:href=\"cid:image001.png@01D53E51.7A18DAE0\">\n  </v>&lt;![endif]--&gt;&lt;!--[if !vml]--&gt;<img border=\"0\" width=\"154\" height=\"44\" src=\"file:///C:/Users/Master/AppData/Local/Temp/msohtmlclip1/01/clip_image002.gif\" xss=removed alt=\"Logo Ipsen\" shapes=\"Image_x0020_2\">&lt;!--[endif]--&gt;</span><o></o></p>\n  </td>\n </tr>\n <tr xss=removed>\n  <td valign=\"top\" xss=removed>\n  <p class=\"MsoNormal\" xss=removed><span xss=removed> </span><o></o></p>\n  </td>\n </tr>\n</tbody></table>', '2019-07-01', '2019-09-30', '2019-08-01 09:02:37', 'not_started', 0, NULL, '0:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 1, '{\"1\":[\"view\"]}', NULL, NULL, '0.00', 'No', 16),
(17, 2, NULL, NULL, NULL, NULL, 'new_task', 'yuyuyuyt', '2020-01-08', '2020-01-16', '2020-01-08 06:50:56', 'completed', 100, NULL, '50:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 8, '{\"1\":[\"view\"],\"8\":[\"view\"]}', NULL, NULL, '10.00', 'Yes', 17),
(18, NULL, NULL, NULL, NULL, NULL, 'new_task', 'fhjhgj', '2020-01-08', '2020-01-16', '2020-01-08 06:52:09', 'completed', 100, NULL, '50:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 8, '{\"1\":[\"view\"],\"8\":[\"view\"]}', NULL, NULL, '10.00', 'Yes', 18),
(19, NULL, NULL, NULL, NULL, NULL, '54645', 'trtre', '2020-01-07', '2020-01-15', '2020-01-08 06:53:23', 'deferred', 0, NULL, '454:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 8, 'all', NULL, NULL, '10.00', 'No', 19),
(20, 2, NULL, NULL, NULL, NULL, '54645', '422545', '2020-01-08', '2020-01-08', '2020-01-08 06:54:52', 'completed', 100, NULL, '11:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 8, 'all', NULL, NULL, '10.00', 'No', 20),
(21, NULL, NULL, NULL, NULL, NULL, '54645', '', '2020-01-08', '2020-01-08', '2020-01-08 06:55:59', 'completed', 100, NULL, '11:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 8, 'all', NULL, NULL, '10.00', 'No', 21),
(22, NULL, NULL, NULL, NULL, 1, '54645', '555', '2020-01-15', '2020-01-23', '2020-01-08 06:59:38', 'deferred', 0, NULL, '855:00', NULL, 'off', NULL, NULL, 0, NULL, NULL, 8, 'all', NULL, NULL, '10.00', 'No', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tasks_timer`
--

CREATE TABLE `tbl_tasks_timer` (
  `tasks_timer_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `timer_status` enum('on','off') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'off',
  `start_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_timed` timestamp NOT NULL DEFAULT current_timestamp(),
  `reason` text CHARACTER SET utf8 DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tasks_timer`
--

INSERT INTO `tbl_tasks_timer` (`tasks_timer_id`, `task_id`, `user_id`, `timer_status`, `start_time`, `end_time`, `date_timed`, `reason`, `edited_by`, `project_id`) VALUES
(1, 0, 1, 'off', '1565960400', '1565974800', '2019-08-16 03:38:27', 'Worked 4 hours', 1, 74),
(2, 1, NULL, 'off', NULL, '1573106076', '2019-11-07 05:54:36', NULL, NULL, NULL),
(3, 0, NULL, 'off', NULL, '1573106076', '2019-11-07 05:54:36', NULL, NULL, 2),
(4, 1, NULL, 'off', '0', '1576740440', '2019-12-19 07:27:20', NULL, NULL, NULL),
(5, 0, NULL, 'off', '0', '1576740440', '2019-12-19 07:27:20', NULL, NULL, 2),
(6, 1, NULL, 'off', '0', '1576864923', '2019-12-20 18:02:03', NULL, NULL, NULL),
(7, 0, NULL, 'off', '0', '1576864923', '2019-12-20 18:02:03', NULL, NULL, 2),
(8, 1, 8, 'off', '1577187006', '1577187015', '2019-12-24 11:30:06', NULL, NULL, NULL),
(9, 1, 8, 'off', '0', '1577683034', '2019-12-30 05:17:14', NULL, NULL, NULL),
(10, 1, 8, 'off', '0', '1579697592', '2020-01-22 12:53:12', NULL, NULL, NULL),
(11, 1, 8, 'off', '0', '1579784091', '2020-01-23 12:54:51', NULL, NULL, NULL),
(12, 1, 8, 'off', '0', '1580880610', '2020-02-05 05:30:10', NULL, NULL, NULL),
(13, 1, 8, 'off', '0', '1580889517', '2020-02-05 07:58:37', NULL, NULL, NULL),
(14, 2, NULL, 'off', NULL, '1580889517', '2020-02-05 07:58:37', NULL, NULL, NULL),
(15, 0, NULL, 'off', '0', '1580889517', '2020-02-05 07:58:37', NULL, NULL, 2),
(16, 1, 8, 'off', '0', '1580893626', '2020-02-05 09:07:06', NULL, NULL, NULL),
(17, 1, 8, 'off', '0', '1580981821', '2020-02-06 09:37:01', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_attachment`
--

CREATE TABLE `tbl_task_attachment` (
  `task_attachment_id` int(5) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `upload_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_task_attachment`
--

INSERT INTO `tbl_task_attachment` (`task_attachment_id`, `task_id`, `user_id`, `title`, `description`, `upload_time`, `leads_id`, `opportunities_id`, `project_id`, `bug_id`) VALUES
(2, 2, 1, '', '', '2019-08-01 06:22:06', NULL, NULL, NULL, NULL),
(3, 13, 1, '', '', '2019-08-01 07:16:46', NULL, NULL, NULL, NULL),
(4, NULL, 1, '', '', '2019-08-01 08:37:34', NULL, NULL, 74, NULL),
(5, NULL, 1, '', '', '2019-08-01 08:45:30', NULL, NULL, 72, NULL),
(6, 16, 1, '', '', '2019-08-01 09:04:50', NULL, NULL, NULL, NULL),
(7, NULL, 1, '', '', '2019-08-16 03:37:15', NULL, NULL, 74, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_comment`
--

CREATE TABLE `tbl_task_comment` (
  `task_comment_id` int(5) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comments_attachment` text DEFAULT NULL,
  `comment_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL,
  `goal_tracking_id` int(11) DEFAULT NULL,
  `task_attachment_id` int(11) DEFAULT 0,
  `uploaded_files_id` int(11) DEFAULT 0,
  `comments_reply_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_task_comment`
--

INSERT INTO `tbl_task_comment` (`task_comment_id`, `task_id`, `user_id`, `comment`, `comments_attachment`, `comment_datetime`, `leads_id`, `opportunities_id`, `project_id`, `bug_id`, `goal_tracking_id`, `task_attachment_id`, `uploaded_files_id`, `comments_reply_id`) VALUES
(2, 2, 1, '', NULL, '2019-08-01 06:22:07', NULL, NULL, NULL, NULL, NULL, 0, 2, 0),
(3, 2, 1, '', NULL, '2019-08-01 06:22:07', NULL, NULL, NULL, NULL, NULL, 0, 3, 0),
(4, 2, 1, '', NULL, '2019-08-01 06:22:07', NULL, NULL, NULL, NULL, NULL, 0, 4, 0),
(5, NULL, 1, 'https://ent.box.com/s/n95wr2s9hpd6db9er92hc5m76k06ud8i', NULL, '2019-08-01 07:02:23', NULL, NULL, 68, NULL, NULL, 0, 0, 0),
(6, 13, 1, '', NULL, '2019-08-01 07:16:46', NULL, NULL, NULL, NULL, NULL, 0, 5, 0),
(7, NULL, 1, '', NULL, '2019-08-01 08:37:34', NULL, NULL, 74, NULL, NULL, 0, 6, 0),
(8, NULL, 1, '', NULL, '2019-08-01 08:45:30', NULL, NULL, 72, NULL, NULL, 0, 7, 0),
(9, 16, 1, '', NULL, '2019-08-01 09:04:50', NULL, NULL, NULL, NULL, NULL, 0, 8, 0),
(10, NULL, 1, '', NULL, '2019-08-16 03:37:15', NULL, NULL, 74, NULL, NULL, 0, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_uploaded_files`
--

CREATE TABLE `tbl_task_uploaded_files` (
  `uploaded_files_id` int(11) NOT NULL,
  `task_attachment_id` int(11) NOT NULL,
  `files` text NOT NULL,
  `uploaded_path` text NOT NULL,
  `file_name` text NOT NULL,
  `size` int(10) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `is_image` int(2) NOT NULL,
  `image_width` int(5) NOT NULL,
  `image_height` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_task_uploaded_files`
--

INSERT INTO `tbl_task_uploaded_files` (`uploaded_files_id`, `task_attachment_id`, `files`, `uploaded_path`, `file_name`, `size`, `ext`, `is_image`, `image_width`, `image_height`) VALUES
(2, 2, 'uploads/Final-Specifications-Landing-Page-V1.docx', '/homepages/44/d747836972/htdocs/BIA/uploads/Final-Specifications-Landing-Page-V1.docx', 'Final-Specifications-Landing-Page-V1.docx', 1581273, 'docx', 0, 0, 0),
(3, 2, 'uploads/Initial-Specifications-Landscapes-V1.doc', '/homepages/44/d747836972/htdocs/BIA/uploads/Initial-Specifications-Landscapes-V1.doc', 'Initial-Specifications-Landscapes-V1.doc', 2044928, 'doc', 0, 0, 0),
(4, 2, 'uploads/Final-Specifications-Evolutions-Landscapes-V2.doc', '/homepages/44/d747836972/htdocs/BIA/uploads/Final-Specifications-Evolutions-Landscapes-V2.doc', 'Final-Specifications-Evolutions-Landscapes-V2.doc', 432640, 'doc', 0, 0, 0),
(5, 3, 'uploads/IPSEN-PMO-Corrections-des-sites-existants.docx', '/homepages/44/d747836972/htdocs/BIA/uploads/IPSEN-PMO-Corrections-des-sites-existants.docx', 'IPSEN-PMO-Corrections-des-sites-existants.docx', 5195373, 'docx', 0, 0, 0),
(6, 4, 'uploads/Copie-de-Copy-of-Patient-Centricity-SharePoint-Updates_For-Marco_010819_v1.xlsx', '/homepages/44/d747836972/htdocs/BIA/uploads/Copie-de-Copy-of-Patient-Centricity-SharePoint-Updates_For-Marco_010819_v1.xlsx', 'Copie-de-Copy-of-Patient-Centricity-SharePoint-Updates_For-Marco_010819_v1.xlsx', 23289, 'xlsx', 0, 0, 0),
(7, 5, 'uploads/RFP-iGVP_19June19v1.doc', '/homepages/44/d747836972/htdocs/BIA/uploads/RFP-iGVP_19June19v1.doc', 'RFP-iGVP_19June19v1.doc', 246272, 'doc', 0, 0, 0),
(8, 6, 'uploads/TechOps-Ipsen-Planet-update-page-New-structure.pptx', '/homepages/44/d747836972/htdocs/BIA/uploads/TechOps-Ipsen-Planet-update-page-New-structure.pptx', 'TechOps-Ipsen-Planet-update-page-New-structure.pptx', 32700835, 'pptx', 0, 0, 0),
(9, 7, 'uploads/Copie-de-Copy-of-Patient-Centricity-SharePoint-Updates_For-Marco_010819_v1-1.xlsx', '/homepages/44/d747836972/htdocs/BIA/uploads/Copie-de-Copy-of-Patient-Centricity-SharePoint-Updates_For-Marco_010819_v1-1.xlsx', 'Copie-de-Copy-of-Patient-Centricity-SharePoint-Updates_For-Marco_010819_v1-1.xlsx', 23539, 'xlsx', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax_rates`
--

CREATE TABLE `tbl_tax_rates` (
  `tax_rates_id` int(11) NOT NULL,
  `tax_rate_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `tax_rate_percent` decimal(10,2) NOT NULL DEFAULT 0.00,
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tickets`
--

CREATE TABLE `tbl_tickets` (
  `tickets_id` int(10) NOT NULL,
  `project_id` int(11) DEFAULT 0,
  `ticket_code` varchar(32) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `departments_id` int(11) DEFAULT NULL,
  `reporter` int(10) DEFAULT 0,
  `priority` varchar(50) DEFAULT NULL,
  `upload_file` text DEFAULT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `permission` text DEFAULT NULL,
  `last_reply` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tickets_replies`
--

CREATE TABLE `tbl_tickets_replies` (
  `tickets_replies_id` int(10) NOT NULL,
  `tickets_id` bigint(10) DEFAULT NULL,
  `ticket_reply_id` int(11) DEFAULT 0,
  `body` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `replier` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `replierid` int(10) DEFAULT NULL,
  `attachment` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE `tbl_todo` (
  `todo_id` int(11) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `due_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1= in_progress 2= on hold 3= done',
  `assigned` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_todo`
--

INSERT INTO `tbl_todo` (`todo_id`, `title`, `user_id`, `created_date`, `due_date`, `status`, `assigned`, `order`) VALUES
(1, 'Finish Oliviers Site & Create a modern site', '1', '2019-08-23 01:58:30', '2019-08-23', 3, 0, 1),
(2, 'Prepare HR KPI Launch', '1', '2019-08-23 01:59:04', '2019-08-26', 0, 0, 1),
(3, 'Review Assist Tickets', '1', '2019-08-23 01:59:22', '2019-08-23', 0, 0, 1),
(4, 'Review BI&A Deliverables', '1', '2019-08-23 02:07:42', '2019-08-23', 3, 0, 1),
(5, 'Ask Ipeople feedback to \n\nFlorence Marteau / Marion Feuilly\nChristina Chan / Brigitte Deschamps\nNicole Launay / Nicolas George\n', '1', '2019-08-27 23:15:02', '2019-08-31', 0, 0, 1),
(6, 'dssdf sf s', '8', '2019-12-19 11:42:23', '2019-12-27', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE `tbl_training` (
  `training_id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `assigned_by` int(11) NOT NULL,
  `training_name` varchar(100) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `finish_date` date NOT NULL,
  `training_cost` varchar(300) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1 = started, 2 = completed, 3 = terminated',
  `performance` tinyint(1) DEFAULT 0 COMMENT '0 = not concluded, 1 = satisfactory, 2 = average, 3 = poor, 4 = excellent',
  `remarks` text NOT NULL,
  `upload_file` text DEFAULT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `transactions_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `account_id` int(11) NOT NULL,
  `invoices_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(200) DEFAULT NULL,
  `type` enum('Income','Expense','Transfer') NOT NULL,
  `category_id` int(11) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `paid_by` int(11) NOT NULL DEFAULT 0,
  `payment_methods_id` int(11) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `status` enum('non_approved','paid','unpaid') DEFAULT 'non_approved',
  `notes` text NOT NULL,
  `tags` text NOT NULL,
  `tax` decimal(18,2) NOT NULL DEFAULT 0.00,
  `date` date NOT NULL,
  `debit` decimal(18,2) NOT NULL DEFAULT 0.00,
  `credit` decimal(18,2) NOT NULL DEFAULT 0.00,
  `total_balance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `transfer_id` int(11) NOT NULL DEFAULT 0,
  `permission` text DEFAULT NULL,
  `attachement` text DEFAULT NULL,
  `client_visible` enum('Yes','No') NOT NULL DEFAULT 'No',
  `added_by` int(11) NOT NULL DEFAULT 0,
  `paid` int(11) NOT NULL DEFAULT 0,
  `billable` enum('Yes','No') NOT NULL DEFAULT 'No',
  `deposit` text DEFAULT NULL,
  `deposit_2` text DEFAULT NULL,
  `under_55` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_transactions`
--

INSERT INTO `tbl_transactions` (`transactions_id`, `project_id`, `account_id`, `invoices_id`, `name`, `type`, `category_id`, `amount`, `paid_by`, `payment_methods_id`, `reference`, `status`, `notes`, `tags`, `tax`, `date`, `debit`, `credit`, `total_balance`, `transfer_id`, `permission`, `attachement`, `client_visible`, `added_by`, `paid`, `billable`, `deposit`, `deposit_2`, `under_55`) VALUES
(1, NULL, 1, 0, 'shubham', 'Expense', 1, '2151.00', 4, 5, 'rahul', 'paid', 'cdzfdx', '', '0.00', '2020-01-23', '2151.00', '0.00', '-2150.00', 0, 'all', '[{\"fileName\":\"index.jpeg\",\"path\":\"uploads\\/index.jpeg\",\"fullPath\":\"\\/home\\/kvtaf1utdxk1\\/public_html\\/plazacrm.com\\/uploads\\/index.jpeg\",\"ext\":\".jpeg\",\"size\":9.2,\"is_image\":1}]', 'No', 8, 0, 'No', NULL, NULL, NULL),
(2, NULL, 2, 0, 'Salary Payment For Jonathan Tornil Grasa', 'Expense', 0, '0.00', 0, 0, 'Salary Month 2020-02', 'non_approved', 'This Expense from monthly salary payment.The Reference is Salary Month : February 2020 Salary Payment For Jonathan Tornil Grasa and Comments: ', '', '0.00', '2020-01-23', '0.00', '0.00', '50000.00', 0, 'all', NULL, 'No', 0, 0, 'No', NULL, NULL, NULL),
(3, NULL, 2, 0, 'Salary Payment For ravish beg', 'Expense', 0, '24500.00', 0, 5, 'Salary Month 2020-04', 'non_approved', 'This Expense from monthly salary payment.The Reference is Salary Month : April 2020 Salary Payment For ravish beg and Comments: ', '', '0.00', '2020-01-23', '24500.00', '0.00', '25500.00', 0, 'all', NULL, 'No', 0, 0, 'No', NULL, NULL, NULL),
(4, NULL, 1, 0, 'Salary Payment For Jonathan Tornil Grasa', 'Expense', 0, '0.00', 0, 2, 'Salary Month 2020-04', 'non_approved', 'This Expense from monthly salary payment.The Reference is Salary Month : April 2020 Salary Payment For Jonathan Tornil Grasa and Comments: ', '', '0.00', '2020-01-23', '0.00', '0.00', '-2150.00', 0, 'all', NULL, 'No', 0, 0, 'No', NULL, NULL, NULL),
(5, NULL, 3, 0, 'aef', 'Expense', 2, '1550.00', 2, 4, 'erww', 'paid', 'eg', '', '0.00', '2020-01-24', '1550.00', '0.00', '10806.00', 0, 'all', '[{\"fileName\":\"index-1.jpeg\",\"path\":\"uploads\\/index-1.jpeg\",\"fullPath\":\"\\/home\\/kvtaf1utdxk1\\/public_html\\/plazacrm.com\\/uploads\\/index-1.jpeg\",\"ext\":\".jpeg\",\"size\":9.2,\"is_image\":1}]', 'No', 8, 0, 'No', NULL, NULL, NULL),
(6, NULL, 4, 0, 'new entry', 'Expense', 2, '654654.00', 3, 14, 'ewggwg', 'paid', 'evgwge', '', '0.00', '2020-01-24', '654654.00', '0.00', '-654499.00', 0, 'all', '[{\"fileName\":\"iundex.jpeg\",\"path\":\"uploads\\/iundex.jpeg\",\"fullPath\":\"\\/home\\/kvtaf1utdxk1\\/public_html\\/plazacrm.com\\/uploads\\/iundex.jpeg\",\"ext\":\".jpeg\",\"size\":8.82,\"is_image\":1}]', 'No', 8, 0, 'No', NULL, NULL, NULL),
(7, NULL, 3, 0, 'again ', 'Expense', 1, '789.00', 2, 15, 'hyfhfh', 'paid', 'notes', '', '0.00', '2020-01-31', '789.00', '0.00', '10017.00', 0, 'all', '[{\"fileName\":\"index-2.jpeg\",\"path\":\"uploads\\/index-2.jpeg\",\"fullPath\":\"\\/home\\/kvtaf1utdxk1\\/public_html\\/plazacrm.com\\/uploads\\/index-2.jpeg\",\"ext\":\".jpeg\",\"size\":9.2,\"is_image\":1}]', 'No', 8, 0, 'No', NULL, NULL, NULL),
(9, NULL, 3, 0, 'shubham deposit', 'Income', 1, '47859.00', 2, 2, 'shubham reference ', 'non_approved', 'shubham deposit', '', '0.00', '2020-01-26', '0.00', '47859.00', '45531.00', 0, 'all', '[{\"fileName\":\"index-3.jpeg\",\"path\":\"uploads\\/index-3.jpeg\",\"fullPath\":\"\\/home\\/kvtaf1utdxk1\\/public_html\\/plazacrm.com\\/uploads\\/index-3.jpeg\",\"ext\":\".jpeg\",\"size\":9.2,\"is_image\":1}]', 'No', 0, 0, 'No', NULL, NULL, NULL),
(10, NULL, 3, 0, 'new depo', 'Income', 1, '240.00', 2, 15, 'as', 'non_approved', 'dfvb', '', '0.00', '2020-01-27', '0.00', '240.00', '45771.00', 0, 'all', '[{\"fileName\":\"iundex-2.jpeg\",\"path\":\"uploads\\/iundex-2.jpeg\",\"fullPath\":\"\\/home\\/kvtaf1utdxk1\\/public_html\\/plazacrm.com\\/uploads\\/iundex-2.jpeg\",\"ext\":\".jpeg\",\"size\":8.82,\"is_image\":1}]', 'No', 0, 0, 'No', NULL, NULL, NULL),
(11, NULL, 1, 0, 'Salary Payment For Jonathan Tornil Grasa', 'Expense', 0, '25000.00', 0, 0, 'Salary Month 2020-01', 'non_approved', 'This Expense from monthly salary payment.The Reference is Salary Month : January 2020 Salary Payment For Jonathan Tornil Grasa and Comments: ', '', '0.00', '2020-02-02', '25000.00', '0.00', '-27150.00', 0, 'all', NULL, 'No', 0, 0, 'No', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfer`
--

CREATE TABLE `tbl_transfer` (
  `transfer_id` int(11) NOT NULL,
  `to_account_id` int(11) NOT NULL,
  `from_account_id` int(11) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `payment_methods_id` int(11) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `status` enum('Cleared','Uncleared','Reconciled','Void') NOT NULL DEFAULT 'Cleared',
  `notes` text NOT NULL,
  `date` date NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'Transfer',
  `permission` mediumtext DEFAULT NULL,
  `attachement` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_transfer`
--

INSERT INTO `tbl_transfer` (`transfer_id`, `to_account_id`, `from_account_id`, `amount`, `payment_methods_id`, `reference`, `status`, `notes`, `date`, `type`, `permission`, `attachement`) VALUES
(1, 2, 1, '415.00', 1, '6j5j', 'Cleared', 'tyk', '2020-02-06', 'Transfer', 'all', 'transfer-image2020-02-11-11-17-240.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploaded_files`
--

CREATE TABLE `tbl_uploaded_files` (
  `uploaded_files_id` int(11) NOT NULL,
  `files_id` int(11) NOT NULL,
  `files` text NOT NULL,
  `uploaded_path` text NOT NULL,
  `file_name` text NOT NULL,
  `size` int(10) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `is_image` int(2) NOT NULL,
  `image_width` int(5) NOT NULL,
  `image_height` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(4) NOT NULL DEFAULT 0,
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `online_time` int(32) NOT NULL DEFAULT 0 COMMENT '1 = online 0 = offline ',
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `active_email` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_email_type` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_encription` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_action` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_host_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_additional_flag` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_postmaster_run` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_path_slug` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `full_name`, `password`, `email`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `online_time`, `permission`, `active_email`, `smtp_email_type`, `smtp_encription`, `smtp_action`, `smtp_host_name`, `smtp_username`, `smtp_password`, `smtp_port`, `smtp_additional_flag`, `last_postmaster_run`, `media_path_slug`) VALUES
(8, 'adminko', 'Lohn', '123456', 'admin@admin.com', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-05 22:37:01', '2019-10-04 09:41:35', '2020-02-07 07:47:01', 1581058349, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'ravishbeg', NULL, 'dca29b5f9649b6547b51bd5814f7390e55e724cea2367dbe67a89f96b6407e080baba48524485595cda0eb09db4c2103ce3f0ccd194471e9099a9dec75633b37', 'ravish3474@gmail.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, '103.99.15.182', NULL, NULL, '2020-02-04 09:25:19', 0, 'all', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'shubham', '7777', 'abc6548ebd8967e04dfcc817aeed72f2dd8c851e14eb2e3efb74bc5fcff0d3c6e64569e5ce702ca7619cf2c4289bfa749472c4ca71c30b0ca4923f1443b2d8fd', 'ty@gmail.com', 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '103.99.15.182', NULL, NULL, '2020-02-05 10:26:02', 0, 'all', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'piyush@123', 'Piyush Mohan', 'piyush@123', 'piyushmohan@gmail.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:27:52', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'kaif@123', 'Md. Kaif', 'kaif@123', 'kaif@amdin.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:29:44', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'shubham@123', 'Shubham Bhatt', 'shubh@123', 'shub@add.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:31:24', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'ravish@123', 'Ravish', 'ravish@123', 'ravish@ad.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:32:24', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'rahul@123', 'Rahul Kumar', 'rahul@123', 'rahsd@asd.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:33:20', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'shivam@123', 'Shivam Saini', 'shivam@123', 'shivam@ad.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:34:39', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'deepak@123', 'Deepak Nouliya', 'deepak@123', 'ded@sd.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:36:08', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'sonali@123', 'Sonali', 'sonali@123', 'sonali@asd.com', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:37:11', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'vaishali@123', 'Vaishali Sharma', 'valishali@123', 'asdf@sd.v', 3, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-02-14 07:38:17', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `user_role_id` int(11) NOT NULL,
  `designations_id` int(11) DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `view` int(11) DEFAULT 0,
  `created` int(11) DEFAULT 0,
  `edited` int(11) DEFAULT 0,
  `deleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_role`
--

INSERT INTO `tbl_user_role` (`user_role_id`, `designations_id`, `menu_id`, `view`, `created`, `edited`, `deleted`) VALUES
(135, 2, 1, 1, 0, 0, 0),
(136, 2, 2, 2, 0, 0, 0),
(137, 2, 5, 5, 0, 0, 0),
(138, 2, 110, 110, 0, 0, 0),
(139, 2, 57, 57, 57, 57, 0),
(140, 2, 54, 54, 54, 54, 0),
(141, 2, 58, 58, 58, 58, 0),
(142, 2, 56, 56, 56, 56, 0),
(143, 2, 55, 55, 55, 55, 0),
(144, 2, 150, 150, 150, 150, 0),
(145, 2, 39, 39, 39, 39, 0),
(146, 2, 151, 151, 151, 151, 0),
(147, 2, 152, 152, 152, 152, 0),
(148, 2, 153, 153, 153, 153, 0),
(149, 2, 154, 154, 154, 154, 0),
(150, 2, 12, 12, 12, 12, 0),
(151, 2, 13, 13, 13, 13, 0),
(152, 2, 14, 14, 14, 14, 0),
(153, 2, 51, 51, 51, 51, 0),
(154, 2, 15, 15, 15, 15, 0),
(155, 2, 140, 140, 140, 140, 0),
(156, 2, 16, 16, 16, 16, 0),
(157, 2, 21, 0, 0, 0, 0),
(158, 2, 22, 22, 0, 0, 0),
(159, 2, 23, 23, 23, 23, 0),
(160, 2, 6, 6, 6, 6, 0),
(161, 2, 141, 141, 141, 141, 0),
(162, 2, 144, 144, 0, 0, 0),
(163, 2, 143, 143, 143, 143, 0),
(164, 2, 142, 142, 142, 142, 0),
(165, 2, 29, 29, 29, 29, 0),
(166, 2, 31, 31, 31, 31, 0),
(167, 2, 30, 30, 30, 30, 0),
(168, 2, 32, 32, 32, 32, 0),
(169, 2, 33, 33, 0, 0, 0),
(170, 2, 52, 52, 0, 0, 0),
(171, 2, 34, 34, 0, 0, 0),
(172, 2, 36, 36, 36, 36, 0),
(173, 2, 4, 4, 4, 4, 0),
(174, 2, 70, 70, 70, 70, 0),
(175, 2, 75, 75, 75, 75, 0),
(176, 2, 76, 76, 76, 76, 0),
(177, 2, 81, 81, 81, 81, 0),
(178, 2, 77, 0, 0, 0, 0),
(179, 2, 84, 84, 0, 0, 0),
(180, 2, 78, 0, 0, 0, 0),
(181, 2, 82, 82, 82, 82, 0),
(182, 2, 83, 83, 0, 0, 0),
(183, 2, 79, 79, 0, 0, 0),
(184, 2, 105, 105, 105, 105, 0),
(185, 2, 108, 108, 0, 0, 0),
(186, 2, 106, 106, 0, 0, 0),
(187, 2, 107, 107, 0, 0, 0),
(188, 2, 148, 148, 148, 148, 0),
(189, 2, 102, 102, 102, 102, 0),
(190, 2, 103, 103, 103, 103, 0),
(191, 2, 104, 104, 0, 0, 0),
(192, 2, 89, 89, 89, 89, 0),
(193, 2, 94, 94, 94, 94, 0),
(194, 2, 95, 95, 95, 95, 0),
(195, 2, 90, 90, 0, 0, 0),
(196, 2, 91, 91, 0, 0, 0),
(197, 2, 92, 92, 0, 0, 0),
(198, 2, 93, 93, 0, 0, 0),
(199, 2, 96, 96, 0, 0, 0),
(200, 2, 98, 98, 0, 0, 0),
(201, 2, 97, 97, 0, 0, 0),
(202, 2, 74, 74, 0, 0, 0),
(203, 2, 99, 99, 99, 99, 0),
(204, 2, 85, 85, 85, 85, 0),
(205, 2, 86, 86, 86, 86, 0),
(206, 2, 88, 88, 88, 88, 0),
(207, 2, 87, 87, 0, 0, 0),
(208, 2, 72, 72, 0, 0, 0),
(209, 2, 101, 101, 101, 101, 0),
(210, 2, 100, 100, 100, 100, 0),
(211, 2, 73, 73, 73, 73, 0),
(212, 2, 71, 71, 71, 71, 0),
(213, 2, 69, 69, 69, 69, 0),
(214, 2, 42, 42, 42, 42, 0),
(215, 2, 147, 147, 147, 147, 0),
(216, 2, 146, 0, 0, 0, 0),
(217, 2, 43, 43, 0, 0, 0),
(218, 2, 45, 45, 0, 0, 0),
(219, 2, 44, 44, 0, 0, 0),
(220, 2, 46, 46, 0, 0, 0),
(221, 2, 47, 47, 0, 0, 0),
(222, 2, 53, 53, 0, 0, 0),
(223, 2, 48, 48, 0, 0, 0),
(224, 2, 49, 49, 0, 0, 0),
(225, 2, 50, 50, 0, 0, 0),
(226, 2, 59, 0, 0, 0, 0),
(227, 2, 66, 66, 0, 0, 0),
(228, 2, 67, 67, 0, 0, 0),
(229, 2, 68, 68, 0, 0, 0),
(230, 2, 60, 60, 0, 0, 0),
(231, 2, 61, 61, 0, 0, 0),
(232, 2, 62, 62, 0, 0, 0),
(233, 2, 63, 63, 0, 0, 0),
(234, 2, 24, 24, 24, 24, 0),
(235, 2, 25, 25, 25, 25, 0),
(236, 2, 117, 117, 0, 0, 0),
(237, 2, 118, 118, 0, 0, 0),
(238, 2, 119, 119, 0, 0, 0),
(239, 2, 120, 120, 0, 0, 0),
(240, 2, 121, 121, 0, 0, 0),
(241, 2, 122, 122, 122, 122, 0),
(242, 2, 123, 123, 123, 123, 0),
(243, 2, 124, 124, 124, 124, 0),
(244, 2, 125, 125, 125, 125, 0),
(245, 2, 126, 126, 126, 126, 0),
(246, 2, 127, 127, 127, 127, 0),
(247, 2, 128, 128, 128, 128, 0),
(248, 2, 129, 129, 129, 129, 0),
(249, 2, 130, 130, 130, 130, 0),
(250, 2, 131, 131, 0, 0, 0),
(251, 2, 132, 132, 0, 0, 0),
(252, 2, 133, 133, 0, 0, 0),
(253, 2, 134, 134, 0, 0, 0),
(254, 2, 135, 135, 0, 0, 0),
(255, 2, 136, 136, 0, 0, 0),
(256, 2, 137, 137, 0, 0, 0),
(257, 2, 138, 138, 0, 0, 0),
(258, 2, 155, 155, 155, 155, 0),
(259, 2, 111, 111, 0, 0, 0),
(260, 2, 149, 149, 149, 149, 0),
(261, 2, 112, 112, 0, 0, 0),
(262, 2, 113, 113, 0, 0, 0),
(263, 2, 114, 114, 0, 0, 0),
(264, 2, 115, 115, 0, 0, 0),
(265, 2, 116, 116, 0, 0, 0),
(266, 2, 145, 145, 0, 0, 0),
(267, 2, 26, 26, 0, 0, 0),
(268, 2, 139, 139, 0, 0, 0),
(269, 3, 1, 1, 0, 0, 0),
(270, 3, 2, 2, 0, 0, 0),
(271, 3, 5, 5, 0, 0, 0),
(272, 3, 110, 110, 0, 0, 0),
(273, 3, 57, 57, 57, 57, 57),
(274, 3, 54, 54, 54, 54, 54),
(275, 3, 58, 58, 58, 58, 58),
(276, 3, 56, 56, 56, 56, 56),
(277, 3, 55, 55, 55, 55, 55),
(278, 3, 150, 150, 150, 150, 150),
(279, 3, 39, 39, 39, 39, 39),
(280, 3, 151, 151, 151, 151, 151),
(281, 3, 152, 152, 152, 152, 152),
(282, 3, 153, 153, 153, 153, 153),
(283, 3, 154, 154, 154, 154, 154),
(284, 3, 12, 12, 12, 12, 12),
(285, 3, 13, 13, 13, 13, 13),
(286, 3, 14, 14, 14, 14, 14),
(287, 3, 51, 51, 51, 51, 51),
(288, 3, 15, 15, 15, 15, 15),
(289, 3, 140, 140, 140, 140, 140),
(290, 3, 16, 16, 16, 16, 16),
(291, 3, 21, 0, 0, 0, 0),
(292, 3, 22, 22, 0, 0, 0),
(293, 3, 23, 23, 23, 23, 23),
(294, 3, 6, 6, 6, 6, 6),
(295, 3, 141, 141, 141, 141, 141),
(296, 3, 144, 144, 0, 0, 0),
(297, 3, 143, 143, 143, 143, 143),
(298, 3, 142, 142, 142, 142, 142),
(299, 3, 29, 29, 29, 29, 29),
(300, 3, 31, 31, 31, 31, 31),
(301, 3, 30, 30, 30, 30, 30),
(302, 3, 32, 32, 32, 32, 32),
(303, 3, 33, 33, 0, 0, 0),
(304, 3, 52, 52, 0, 0, 0),
(305, 3, 34, 34, 0, 0, 0),
(306, 3, 36, 36, 36, 36, 36),
(307, 3, 4, 4, 4, 4, 4),
(308, 3, 70, 70, 70, 70, 70),
(309, 3, 75, 75, 75, 75, 75),
(310, 3, 76, 76, 76, 76, 76),
(311, 3, 81, 81, 81, 81, 81),
(312, 3, 77, 0, 0, 0, 0),
(313, 3, 84, 84, 0, 0, 0),
(314, 3, 78, 0, 0, 0, 0),
(315, 3, 82, 82, 82, 82, 82),
(316, 3, 83, 83, 0, 0, 0),
(317, 3, 79, 79, 0, 0, 0),
(318, 3, 105, 105, 105, 105, 105),
(319, 3, 108, 108, 0, 0, 0),
(320, 3, 106, 106, 0, 0, 0),
(321, 3, 107, 107, 0, 0, 0),
(322, 3, 148, 148, 148, 148, 148),
(323, 3, 102, 102, 102, 102, 102),
(324, 3, 103, 103, 103, 103, 103),
(325, 3, 104, 104, 0, 0, 0),
(326, 3, 89, 89, 89, 89, 89),
(327, 3, 94, 94, 94, 94, 94),
(328, 3, 95, 95, 95, 95, 95),
(329, 3, 90, 90, 0, 0, 0),
(330, 3, 91, 91, 0, 0, 0),
(331, 3, 92, 92, 0, 0, 0),
(332, 3, 93, 93, 0, 0, 0),
(333, 3, 96, 96, 0, 0, 0),
(334, 3, 98, 98, 0, 0, 0),
(335, 3, 97, 97, 0, 0, 0),
(336, 3, 74, 74, 0, 0, 0),
(337, 3, 99, 99, 99, 99, 99),
(338, 3, 85, 85, 85, 85, 85),
(339, 3, 86, 86, 86, 86, 0),
(340, 3, 88, 88, 88, 88, 0),
(341, 3, 87, 87, 0, 0, 0),
(342, 3, 72, 72, 0, 0, 0),
(343, 3, 101, 101, 101, 101, 101),
(344, 3, 100, 100, 100, 100, 100),
(345, 3, 73, 73, 73, 73, 73),
(346, 3, 71, 71, 71, 71, 71),
(347, 3, 69, 69, 69, 69, 69),
(348, 3, 42, 42, 42, 42, 42),
(349, 3, 147, 147, 147, 147, 147),
(350, 3, 146, 0, 0, 0, 0),
(351, 3, 43, 43, 0, 0, 0),
(352, 3, 45, 45, 0, 0, 0),
(353, 3, 44, 44, 0, 0, 0),
(354, 3, 46, 46, 0, 0, 0),
(355, 3, 47, 47, 0, 0, 0),
(356, 3, 53, 53, 0, 0, 0),
(357, 3, 48, 48, 0, 0, 0),
(358, 3, 49, 49, 0, 0, 0),
(359, 3, 50, 50, 0, 0, 0),
(360, 3, 59, 0, 0, 0, 0),
(361, 3, 66, 66, 0, 0, 0),
(362, 3, 67, 67, 0, 0, 0),
(363, 3, 68, 68, 0, 0, 0),
(364, 3, 60, 60, 0, 0, 0),
(365, 3, 61, 61, 0, 0, 0),
(366, 3, 62, 62, 0, 0, 0),
(367, 3, 63, 63, 0, 0, 0),
(368, 3, 24, 24, 24, 24, 24),
(369, 3, 25, 25, 25, 25, 25),
(370, 3, 117, 117, 0, 0, 0),
(371, 3, 118, 118, 0, 0, 0),
(372, 3, 119, 119, 0, 0, 0),
(373, 3, 120, 120, 0, 0, 0),
(374, 3, 121, 121, 0, 0, 0),
(375, 3, 122, 122, 122, 122, 122),
(376, 3, 123, 123, 123, 123, 123),
(377, 3, 124, 124, 124, 124, 124),
(378, 3, 125, 125, 125, 125, 125),
(379, 3, 126, 126, 126, 126, 126),
(380, 3, 127, 127, 127, 127, 127),
(381, 3, 128, 128, 128, 128, 128),
(382, 3, 129, 129, 129, 129, 129),
(383, 3, 130, 130, 130, 130, 130),
(384, 3, 131, 131, 0, 0, 0),
(385, 3, 132, 132, 0, 0, 0),
(386, 3, 133, 133, 0, 0, 0),
(387, 3, 134, 134, 0, 0, 0),
(388, 3, 135, 135, 0, 0, 0),
(389, 3, 136, 136, 0, 0, 0),
(390, 3, 137, 137, 0, 0, 0),
(391, 3, 138, 138, 0, 0, 0),
(392, 3, 155, 155, 155, 155, 155),
(393, 3, 111, 111, 0, 0, 0),
(394, 3, 149, 149, 149, 149, 149),
(395, 3, 112, 112, 0, 0, 0),
(396, 3, 113, 113, 0, 0, 0),
(397, 3, 114, 114, 0, 0, 0),
(398, 3, 115, 115, 0, 0, 0),
(399, 3, 116, 116, 0, 0, 0),
(400, 3, 145, 145, 0, 0, 0),
(401, 3, 26, 26, 0, 0, 0),
(402, 3, 139, 139, 0, 0, 0),
(403, 4, 1, 1, 0, 0, 0),
(404, 4, 2, 2, 0, 0, 0),
(405, 4, 5, 5, 0, 0, 0),
(406, 4, 110, 110, 0, 0, 0),
(407, 4, 57, 57, 57, 57, 0),
(408, 4, 54, 54, 54, 54, 0),
(409, 4, 58, 58, 58, 58, 0),
(410, 4, 56, 56, 56, 56, 0),
(411, 4, 55, 55, 55, 55, 0),
(412, 4, 150, 150, 150, 150, 0),
(413, 4, 39, 39, 39, 39, 0),
(414, 4, 151, 151, 151, 151, 0),
(415, 4, 152, 152, 152, 152, 0),
(416, 4, 153, 153, 153, 153, 0),
(417, 4, 154, 154, 154, 154, 0),
(418, 4, 12, 12, 12, 12, 0),
(419, 4, 13, 13, 13, 13, 0),
(420, 4, 14, 14, 14, 14, 0),
(421, 4, 51, 51, 51, 51, 0),
(422, 4, 15, 15, 15, 15, 0),
(423, 4, 140, 140, 140, 140, 0),
(424, 4, 16, 16, 16, 16, 0),
(425, 4, 21, 0, 0, 0, 0),
(426, 4, 22, 22, 0, 0, 0),
(427, 4, 23, 23, 23, 23, 0),
(428, 4, 6, 6, 6, 6, 0),
(429, 4, 141, 141, 141, 141, 0),
(430, 4, 144, 144, 0, 0, 0),
(431, 4, 143, 143, 143, 143, 0),
(432, 4, 142, 142, 142, 142, 0),
(433, 4, 29, 29, 29, 29, 0),
(434, 4, 31, 31, 31, 31, 0),
(435, 4, 30, 30, 30, 30, 0),
(436, 4, 32, 32, 32, 32, 0),
(437, 4, 33, 33, 0, 0, 0),
(438, 4, 52, 52, 0, 0, 0),
(439, 4, 34, 34, 0, 0, 0),
(440, 4, 36, 36, 36, 36, 0),
(441, 4, 4, 4, 4, 4, 0),
(442, 4, 70, 70, 70, 70, 0),
(443, 4, 75, 75, 75, 75, 0),
(444, 4, 76, 76, 76, 76, 0),
(445, 4, 81, 81, 81, 81, 0),
(446, 4, 77, 0, 0, 0, 0),
(447, 4, 84, 84, 0, 0, 0),
(448, 4, 78, 0, 0, 0, 0),
(449, 4, 82, 82, 82, 82, 0),
(450, 4, 83, 83, 0, 0, 0),
(451, 4, 79, 79, 0, 0, 0),
(452, 4, 105, 105, 105, 105, 0),
(453, 4, 108, 108, 0, 0, 0),
(454, 4, 106, 106, 0, 0, 0),
(455, 4, 107, 107, 0, 0, 0),
(456, 4, 148, 148, 148, 148, 0),
(457, 4, 102, 102, 102, 102, 0),
(458, 4, 103, 103, 103, 103, 0),
(459, 4, 104, 104, 0, 0, 0),
(460, 4, 89, 89, 89, 89, 0),
(461, 4, 94, 94, 94, 94, 0),
(462, 4, 95, 95, 95, 95, 0),
(463, 4, 90, 90, 0, 0, 0),
(464, 4, 91, 91, 0, 0, 0),
(465, 4, 92, 92, 0, 0, 0),
(466, 4, 93, 93, 0, 0, 0),
(467, 4, 96, 96, 0, 0, 0),
(468, 4, 98, 98, 0, 0, 0),
(469, 4, 97, 97, 0, 0, 0),
(470, 4, 74, 74, 0, 0, 0),
(471, 4, 99, 99, 99, 99, 0),
(472, 4, 85, 85, 85, 85, 0),
(473, 4, 86, 86, 86, 86, 0),
(474, 4, 88, 88, 88, 88, 0),
(475, 4, 87, 87, 0, 0, 0),
(476, 4, 72, 72, 0, 0, 0),
(477, 4, 101, 101, 101, 101, 0),
(478, 4, 100, 100, 100, 100, 0),
(479, 4, 73, 73, 73, 73, 0),
(480, 4, 71, 71, 71, 71, 0),
(481, 4, 69, 69, 69, 69, 0),
(482, 4, 42, 42, 42, 42, 0),
(483, 4, 147, 147, 147, 147, 0),
(484, 4, 146, 0, 0, 0, 0),
(485, 4, 43, 43, 0, 0, 0),
(486, 4, 45, 45, 0, 0, 0),
(487, 4, 44, 44, 0, 0, 0),
(488, 4, 46, 46, 0, 0, 0),
(489, 4, 47, 47, 0, 0, 0),
(490, 4, 53, 53, 0, 0, 0),
(491, 4, 48, 48, 0, 0, 0),
(492, 4, 49, 49, 0, 0, 0),
(493, 4, 50, 50, 0, 0, 0),
(494, 4, 59, 0, 0, 0, 0),
(495, 4, 66, 66, 0, 0, 0),
(496, 4, 67, 67, 0, 0, 0),
(497, 4, 68, 68, 0, 0, 0),
(498, 4, 60, 60, 0, 0, 0),
(499, 4, 61, 61, 0, 0, 0),
(500, 4, 62, 62, 0, 0, 0),
(501, 4, 63, 63, 0, 0, 0),
(502, 4, 24, 24, 24, 24, 0),
(503, 4, 25, 25, 25, 25, 0),
(504, 4, 117, 117, 0, 0, 0),
(505, 4, 118, 118, 0, 0, 0),
(506, 4, 119, 119, 0, 0, 0),
(507, 4, 120, 120, 0, 0, 0),
(508, 4, 121, 121, 0, 0, 0),
(509, 4, 122, 122, 122, 122, 0),
(510, 4, 123, 123, 123, 123, 0),
(511, 4, 124, 124, 124, 124, 0),
(512, 4, 125, 125, 125, 125, 0),
(513, 4, 126, 126, 126, 126, 0),
(514, 4, 127, 127, 127, 127, 0),
(515, 4, 128, 128, 128, 128, 0),
(516, 4, 129, 129, 129, 129, 0),
(517, 4, 130, 130, 130, 130, 0),
(518, 4, 131, 131, 0, 0, 0),
(519, 4, 132, 132, 0, 0, 0),
(520, 4, 133, 133, 0, 0, 0),
(521, 4, 134, 134, 0, 0, 0),
(522, 4, 135, 135, 0, 0, 0),
(523, 4, 136, 136, 0, 0, 0),
(524, 4, 137, 137, 0, 0, 0),
(525, 4, 138, 138, 0, 0, 0),
(526, 4, 155, 155, 155, 155, 0),
(527, 4, 111, 111, 0, 0, 0),
(528, 4, 149, 149, 149, 149, 0),
(529, 4, 112, 112, 0, 0, 0),
(530, 4, 113, 113, 0, 0, 0),
(531, 4, 114, 114, 0, 0, 0),
(532, 4, 115, 115, 0, 0, 0),
(533, 4, 116, 116, 0, 0, 0),
(534, 4, 145, 145, 0, 0, 0),
(535, 4, 26, 26, 0, 0, 0),
(536, 4, 139, 139, 0, 0, 0),
(537, 5, 1, 1, 0, 0, 0),
(538, 5, 2, 2, 0, 0, 0),
(539, 5, 5, 5, 0, 0, 0),
(540, 5, 110, 110, 0, 0, 0),
(541, 5, 57, 57, 57, 57, 0),
(542, 5, 54, 54, 54, 54, 0),
(543, 5, 58, 58, 58, 58, 0),
(544, 5, 56, 56, 56, 56, 0),
(545, 5, 55, 55, 55, 55, 0),
(546, 5, 150, 150, 150, 150, 0),
(547, 5, 39, 39, 39, 39, 0),
(548, 5, 151, 151, 151, 151, 0),
(549, 5, 152, 152, 152, 152, 0),
(550, 5, 153, 153, 153, 153, 0),
(551, 5, 154, 154, 154, 154, 0),
(552, 5, 12, 12, 12, 12, 0),
(553, 5, 13, 13, 13, 13, 0),
(554, 5, 14, 14, 14, 14, 0),
(555, 5, 51, 51, 51, 51, 0),
(556, 5, 15, 15, 15, 15, 0),
(557, 5, 140, 140, 140, 140, 0),
(558, 5, 16, 16, 16, 16, 0),
(559, 5, 21, 0, 0, 0, 0),
(560, 5, 22, 22, 0, 0, 0),
(561, 5, 23, 23, 23, 23, 0),
(562, 5, 6, 6, 6, 6, 0),
(563, 5, 141, 141, 141, 141, 0),
(564, 5, 144, 144, 0, 0, 0),
(565, 5, 143, 143, 143, 143, 0),
(566, 5, 142, 142, 142, 142, 0),
(567, 5, 29, 29, 29, 29, 0),
(568, 5, 31, 31, 31, 31, 0),
(569, 5, 30, 30, 30, 30, 0),
(570, 5, 32, 32, 32, 32, 0),
(571, 5, 33, 33, 0, 0, 0),
(572, 5, 52, 52, 0, 0, 0),
(573, 5, 34, 34, 0, 0, 0),
(574, 5, 36, 36, 36, 36, 0),
(575, 5, 4, 4, 4, 4, 0),
(576, 5, 70, 70, 70, 70, 0),
(577, 5, 75, 75, 75, 75, 0),
(578, 5, 76, 76, 76, 76, 0),
(579, 5, 81, 81, 81, 81, 0),
(580, 5, 77, 0, 0, 0, 0),
(581, 5, 84, 84, 0, 0, 0),
(582, 5, 78, 0, 0, 0, 0),
(583, 5, 82, 82, 82, 82, 0),
(584, 5, 83, 83, 0, 0, 0),
(585, 5, 79, 79, 0, 0, 0),
(586, 5, 105, 105, 105, 105, 0),
(587, 5, 108, 108, 0, 0, 0),
(588, 5, 106, 106, 0, 0, 0),
(589, 5, 107, 107, 0, 0, 0),
(590, 5, 148, 148, 148, 148, 0),
(591, 5, 102, 102, 102, 102, 0),
(592, 5, 103, 103, 103, 103, 0),
(593, 5, 104, 104, 0, 0, 0),
(594, 5, 89, 89, 89, 89, 0),
(595, 5, 94, 94, 94, 94, 0),
(596, 5, 95, 95, 95, 95, 0),
(597, 5, 90, 90, 0, 0, 0),
(598, 5, 91, 91, 0, 0, 0),
(599, 5, 92, 92, 0, 0, 0),
(600, 5, 93, 93, 0, 0, 0),
(601, 5, 96, 96, 0, 0, 0),
(602, 5, 98, 98, 0, 0, 0),
(603, 5, 97, 97, 0, 0, 0),
(604, 5, 74, 74, 0, 0, 0),
(605, 5, 99, 99, 99, 99, 0),
(606, 5, 85, 85, 85, 85, 0),
(607, 5, 86, 86, 86, 86, 0),
(608, 5, 88, 88, 88, 88, 0),
(609, 5, 87, 87, 0, 0, 0),
(610, 5, 72, 72, 0, 0, 0),
(611, 5, 101, 101, 101, 101, 0),
(612, 5, 100, 100, 100, 100, 0),
(613, 5, 73, 73, 73, 73, 0),
(614, 5, 71, 71, 71, 71, 0),
(615, 5, 69, 69, 69, 69, 0),
(616, 5, 42, 42, 42, 42, 0),
(617, 5, 147, 147, 147, 147, 0),
(618, 5, 146, 0, 0, 0, 0),
(619, 5, 43, 43, 0, 0, 0),
(620, 5, 45, 45, 0, 0, 0),
(621, 5, 44, 44, 0, 0, 0),
(622, 5, 46, 46, 0, 0, 0),
(623, 5, 47, 47, 0, 0, 0),
(624, 5, 53, 53, 0, 0, 0),
(625, 5, 48, 48, 0, 0, 0),
(626, 5, 49, 49, 0, 0, 0),
(627, 5, 50, 50, 0, 0, 0),
(628, 5, 59, 0, 0, 0, 0),
(629, 5, 66, 66, 0, 0, 0),
(630, 5, 67, 67, 0, 0, 0),
(631, 5, 68, 68, 0, 0, 0),
(632, 5, 60, 60, 0, 0, 0),
(633, 5, 61, 61, 0, 0, 0),
(634, 5, 62, 62, 0, 0, 0),
(635, 5, 63, 63, 0, 0, 0),
(636, 5, 24, 24, 24, 24, 0),
(637, 5, 25, 25, 25, 25, 0),
(638, 5, 117, 117, 0, 0, 0),
(639, 5, 118, 118, 0, 0, 0),
(640, 5, 119, 119, 0, 0, 0),
(641, 5, 120, 120, 0, 0, 0),
(642, 5, 121, 121, 0, 0, 0),
(643, 5, 122, 122, 122, 122, 0),
(644, 5, 123, 123, 123, 123, 0),
(645, 5, 124, 124, 124, 124, 0),
(646, 5, 125, 125, 125, 125, 0),
(647, 5, 126, 126, 126, 126, 0),
(648, 5, 127, 127, 127, 127, 0),
(649, 5, 128, 128, 128, 128, 0),
(650, 5, 129, 129, 129, 129, 0),
(651, 5, 130, 130, 130, 130, 0),
(652, 5, 131, 131, 0, 0, 0),
(653, 5, 132, 132, 0, 0, 0),
(654, 5, 133, 133, 0, 0, 0),
(655, 5, 134, 134, 0, 0, 0),
(656, 5, 135, 135, 0, 0, 0),
(657, 5, 136, 136, 0, 0, 0),
(658, 5, 137, 137, 0, 0, 0),
(659, 5, 138, 138, 0, 0, 0),
(660, 5, 155, 155, 155, 155, 0),
(661, 5, 111, 111, 0, 0, 0),
(662, 5, 149, 149, 149, 149, 0),
(663, 5, 112, 112, 0, 0, 0),
(664, 5, 113, 113, 0, 0, 0),
(665, 5, 114, 114, 0, 0, 0),
(666, 5, 115, 115, 0, 0, 0),
(667, 5, 116, 116, 0, 0, 0),
(668, 5, 145, 145, 0, 0, 0),
(669, 5, 26, 26, 0, 0, 0),
(670, 5, 139, 139, 0, 0, 0),
(671, 6, 1, 1, 0, 0, 0),
(672, 6, 2, 2, 0, 0, 0),
(673, 6, 5, 5, 0, 0, 0),
(674, 6, 110, 110, 0, 0, 0),
(675, 6, 57, 57, 57, 57, 0),
(676, 6, 54, 54, 54, 54, 0),
(677, 6, 58, 58, 58, 58, 0),
(678, 6, 56, 56, 56, 56, 0),
(679, 6, 55, 55, 55, 55, 0),
(680, 6, 150, 150, 150, 150, 0),
(681, 6, 39, 39, 39, 39, 0),
(682, 6, 151, 151, 151, 151, 0),
(683, 6, 152, 152, 152, 152, 0),
(684, 6, 153, 153, 153, 153, 0),
(685, 6, 154, 154, 154, 154, 0),
(686, 6, 12, 12, 12, 12, 0),
(687, 6, 13, 13, 13, 13, 0),
(688, 6, 14, 14, 14, 14, 0),
(689, 6, 51, 51, 51, 51, 0),
(690, 6, 15, 15, 15, 15, 0),
(691, 6, 140, 140, 140, 140, 0),
(692, 6, 16, 16, 16, 16, 0),
(693, 6, 21, 0, 0, 0, 0),
(694, 6, 22, 22, 0, 0, 0),
(695, 6, 23, 23, 23, 23, 0),
(696, 6, 6, 6, 6, 6, 0),
(697, 6, 141, 141, 141, 141, 0),
(698, 6, 144, 144, 0, 0, 0),
(699, 6, 143, 143, 143, 143, 0),
(700, 6, 142, 142, 142, 142, 0),
(701, 6, 29, 29, 29, 29, 0),
(702, 6, 31, 31, 31, 31, 0),
(703, 6, 30, 30, 30, 30, 0),
(704, 6, 32, 32, 32, 32, 0),
(705, 6, 33, 33, 0, 0, 0),
(706, 6, 52, 52, 0, 0, 0),
(707, 6, 34, 34, 0, 0, 0),
(708, 6, 36, 36, 36, 36, 0),
(709, 6, 4, 4, 4, 4, 0),
(710, 6, 70, 70, 70, 70, 0),
(711, 6, 75, 75, 75, 75, 0),
(712, 6, 76, 76, 76, 76, 0),
(713, 6, 81, 81, 81, 81, 0),
(714, 6, 77, 0, 0, 0, 0),
(715, 6, 84, 84, 0, 0, 0),
(716, 6, 78, 0, 0, 0, 0),
(717, 6, 82, 82, 82, 82, 0),
(718, 6, 83, 83, 0, 0, 0),
(719, 6, 79, 79, 0, 0, 0),
(720, 6, 105, 105, 105, 105, 0),
(721, 6, 108, 108, 0, 0, 0),
(722, 6, 106, 106, 0, 0, 0),
(723, 6, 107, 107, 0, 0, 0),
(724, 6, 148, 148, 148, 148, 0),
(725, 6, 102, 102, 102, 102, 0),
(726, 6, 103, 103, 103, 103, 0),
(727, 6, 104, 104, 0, 0, 0),
(728, 6, 89, 89, 89, 89, 0),
(729, 6, 94, 94, 94, 94, 0),
(730, 6, 95, 95, 95, 95, 0),
(731, 6, 90, 90, 0, 0, 0),
(732, 6, 91, 91, 0, 0, 0),
(733, 6, 92, 92, 0, 0, 0),
(734, 6, 93, 93, 0, 0, 0),
(735, 6, 96, 96, 0, 0, 0),
(736, 6, 98, 98, 0, 0, 0),
(737, 6, 97, 97, 0, 0, 0),
(738, 6, 74, 74, 0, 0, 0),
(739, 6, 99, 99, 99, 99, 0),
(740, 6, 85, 85, 85, 85, 0),
(741, 6, 86, 86, 86, 86, 0),
(742, 6, 88, 88, 88, 88, 0),
(743, 6, 87, 87, 0, 0, 0),
(744, 6, 72, 72, 0, 0, 0),
(745, 6, 101, 101, 101, 101, 0),
(746, 6, 100, 100, 100, 100, 0),
(747, 6, 73, 73, 73, 73, 0),
(748, 6, 71, 71, 71, 71, 0),
(749, 6, 69, 69, 69, 69, 0),
(750, 6, 42, 42, 42, 42, 0),
(751, 6, 147, 147, 147, 147, 0),
(752, 6, 146, 0, 0, 0, 0),
(753, 6, 43, 43, 0, 0, 0),
(754, 6, 45, 45, 0, 0, 0),
(755, 6, 44, 44, 0, 0, 0),
(756, 6, 46, 46, 0, 0, 0),
(757, 6, 47, 47, 0, 0, 0),
(758, 6, 53, 53, 0, 0, 0),
(759, 6, 48, 48, 0, 0, 0),
(760, 6, 49, 49, 0, 0, 0),
(761, 6, 50, 50, 0, 0, 0),
(762, 6, 59, 0, 0, 0, 0),
(763, 6, 66, 66, 0, 0, 0),
(764, 6, 67, 67, 0, 0, 0),
(765, 6, 68, 68, 0, 0, 0),
(766, 6, 60, 60, 0, 0, 0),
(767, 6, 61, 61, 0, 0, 0),
(768, 6, 62, 62, 0, 0, 0),
(769, 6, 63, 63, 0, 0, 0),
(770, 6, 24, 24, 24, 24, 0),
(771, 6, 25, 25, 25, 25, 0),
(772, 6, 117, 117, 0, 0, 0),
(773, 6, 118, 118, 0, 0, 0),
(774, 6, 119, 119, 0, 0, 0),
(775, 6, 120, 120, 0, 0, 0),
(776, 6, 121, 121, 0, 0, 0),
(777, 6, 122, 122, 122, 122, 0),
(778, 6, 123, 123, 123, 123, 0),
(779, 6, 124, 124, 124, 124, 0),
(780, 6, 125, 125, 125, 125, 0),
(781, 6, 126, 126, 126, 126, 0),
(782, 6, 127, 127, 127, 127, 0),
(783, 6, 128, 128, 128, 128, 0),
(784, 6, 129, 129, 129, 129, 0),
(785, 6, 130, 130, 130, 130, 0),
(786, 6, 131, 131, 0, 0, 0),
(787, 6, 132, 132, 0, 0, 0),
(788, 6, 133, 133, 0, 0, 0),
(789, 6, 134, 134, 0, 0, 0),
(790, 6, 135, 135, 0, 0, 0),
(791, 6, 136, 136, 0, 0, 0),
(792, 6, 137, 137, 0, 0, 0),
(793, 6, 138, 138, 0, 0, 0),
(794, 6, 155, 155, 155, 155, 0),
(795, 6, 111, 111, 0, 0, 0),
(796, 6, 149, 149, 149, 149, 0),
(797, 6, 112, 112, 0, 0, 0),
(798, 6, 113, 113, 0, 0, 0),
(799, 6, 114, 114, 0, 0, 0),
(800, 6, 115, 115, 0, 0, 0),
(801, 6, 116, 116, 0, 0, 0),
(802, 6, 145, 145, 0, 0, 0),
(803, 6, 26, 26, 0, 0, 0),
(804, 6, 139, 139, 0, 0, 0),
(805, 7, 1, 1, 0, 0, 0),
(806, 7, 2, 2, 0, 0, 0),
(807, 7, 5, 5, 0, 0, 0),
(808, 7, 110, 110, 0, 0, 0),
(809, 7, 57, 57, 57, 57, 0),
(810, 7, 54, 54, 54, 54, 0),
(811, 7, 58, 58, 58, 58, 0),
(812, 7, 56, 56, 56, 56, 0),
(813, 7, 55, 55, 55, 55, 0),
(814, 7, 150, 150, 150, 150, 0),
(815, 7, 39, 39, 39, 39, 0),
(816, 7, 151, 151, 151, 151, 0),
(817, 7, 152, 152, 152, 152, 0),
(818, 7, 153, 153, 153, 153, 0),
(819, 7, 154, 154, 154, 154, 0),
(820, 7, 12, 12, 12, 12, 0),
(821, 7, 13, 13, 13, 13, 0),
(822, 7, 14, 14, 14, 14, 0),
(823, 7, 51, 51, 51, 51, 0),
(824, 7, 15, 15, 15, 15, 0),
(825, 7, 140, 140, 140, 140, 0),
(826, 7, 16, 16, 16, 16, 0),
(827, 7, 21, 0, 0, 0, 0),
(828, 7, 22, 22, 0, 0, 0),
(829, 7, 23, 23, 23, 23, 0),
(830, 7, 6, 6, 6, 6, 0),
(831, 7, 141, 141, 141, 141, 0),
(832, 7, 144, 144, 0, 0, 0),
(833, 7, 143, 143, 143, 143, 0),
(834, 7, 142, 142, 142, 142, 0),
(835, 7, 29, 29, 29, 29, 0),
(836, 7, 31, 31, 31, 31, 0),
(837, 7, 30, 30, 30, 30, 0),
(838, 7, 32, 32, 32, 32, 0),
(839, 7, 33, 33, 0, 0, 0),
(840, 7, 52, 52, 0, 0, 0),
(841, 7, 34, 34, 0, 0, 0),
(842, 7, 36, 36, 36, 36, 0),
(843, 7, 4, 4, 4, 4, 0),
(844, 7, 70, 70, 70, 70, 0),
(845, 7, 75, 75, 75, 75, 0),
(846, 7, 76, 76, 76, 76, 0),
(847, 7, 81, 81, 81, 81, 0),
(848, 7, 77, 0, 0, 0, 0),
(849, 7, 84, 84, 0, 0, 0),
(850, 7, 78, 0, 0, 0, 0),
(851, 7, 82, 82, 82, 82, 0),
(852, 7, 83, 83, 0, 0, 0),
(853, 7, 79, 79, 0, 0, 0),
(854, 7, 105, 105, 105, 105, 0),
(855, 7, 108, 108, 0, 0, 0),
(856, 7, 106, 106, 0, 0, 0),
(857, 7, 107, 107, 0, 0, 0),
(858, 7, 148, 148, 148, 148, 0),
(859, 7, 102, 102, 102, 102, 0),
(860, 7, 103, 103, 103, 103, 0),
(861, 7, 104, 104, 0, 0, 0),
(862, 7, 89, 89, 89, 89, 0),
(863, 7, 94, 94, 94, 94, 0),
(864, 7, 95, 95, 95, 95, 0),
(865, 7, 90, 90, 0, 0, 0),
(866, 7, 91, 91, 0, 0, 0),
(867, 7, 92, 92, 0, 0, 0),
(868, 7, 93, 93, 0, 0, 0),
(869, 7, 96, 96, 0, 0, 0),
(870, 7, 98, 98, 0, 0, 0),
(871, 7, 97, 97, 0, 0, 0),
(872, 7, 74, 74, 0, 0, 0),
(873, 7, 99, 99, 99, 99, 0),
(874, 7, 85, 85, 85, 85, 0),
(875, 7, 86, 86, 86, 86, 0),
(876, 7, 88, 88, 88, 88, 0),
(877, 7, 87, 87, 0, 0, 0),
(878, 7, 72, 72, 0, 0, 0),
(879, 7, 101, 101, 101, 101, 0),
(880, 7, 100, 100, 100, 100, 0),
(881, 7, 73, 73, 73, 73, 0),
(882, 7, 71, 71, 71, 71, 0),
(883, 7, 69, 69, 69, 69, 0),
(884, 7, 42, 42, 42, 42, 0),
(885, 7, 147, 147, 147, 147, 0),
(886, 7, 146, 0, 0, 0, 0),
(887, 7, 43, 43, 0, 0, 0),
(888, 7, 45, 45, 0, 0, 0),
(889, 7, 44, 44, 0, 0, 0),
(890, 7, 46, 46, 0, 0, 0),
(891, 7, 47, 47, 0, 0, 0),
(892, 7, 53, 53, 0, 0, 0),
(893, 7, 48, 48, 0, 0, 0),
(894, 7, 49, 49, 0, 0, 0),
(895, 7, 50, 50, 0, 0, 0),
(896, 7, 59, 0, 0, 0, 0),
(897, 7, 66, 66, 0, 0, 0),
(898, 7, 67, 67, 0, 0, 0),
(899, 7, 68, 68, 0, 0, 0),
(900, 7, 60, 60, 0, 0, 0),
(901, 7, 61, 61, 0, 0, 0),
(902, 7, 62, 62, 0, 0, 0),
(903, 7, 63, 63, 0, 0, 0),
(904, 7, 24, 24, 24, 24, 0),
(905, 7, 25, 25, 25, 25, 0),
(906, 7, 117, 117, 0, 0, 0),
(907, 7, 118, 118, 0, 0, 0),
(908, 7, 119, 119, 0, 0, 0),
(909, 7, 120, 120, 0, 0, 0),
(910, 7, 121, 121, 0, 0, 0),
(911, 7, 122, 122, 122, 122, 0),
(912, 7, 123, 123, 123, 123, 0),
(913, 7, 124, 124, 124, 124, 0),
(914, 7, 125, 125, 125, 125, 0),
(915, 7, 126, 126, 126, 126, 0),
(916, 7, 127, 127, 127, 127, 0),
(917, 7, 128, 128, 128, 128, 0),
(918, 7, 129, 129, 129, 129, 0),
(919, 7, 130, 130, 130, 130, 0),
(920, 7, 131, 131, 0, 0, 0),
(921, 7, 132, 132, 0, 0, 0),
(922, 7, 133, 133, 0, 0, 0),
(923, 7, 134, 134, 0, 0, 0),
(924, 7, 135, 135, 0, 0, 0),
(925, 7, 136, 136, 0, 0, 0),
(926, 7, 137, 137, 0, 0, 0),
(927, 7, 138, 138, 0, 0, 0),
(928, 7, 155, 155, 155, 155, 0),
(929, 7, 111, 111, 0, 0, 0),
(930, 7, 149, 149, 149, 149, 0),
(931, 7, 112, 112, 0, 0, 0),
(932, 7, 113, 113, 0, 0, 0),
(933, 7, 114, 114, 0, 0, 0),
(934, 7, 115, 115, 0, 0, 0),
(935, 7, 116, 116, 0, 0, 0),
(936, 7, 145, 145, 0, 0, 0),
(937, 7, 26, 26, 0, 0, 0),
(938, 7, 139, 139, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_working_days`
--

CREATE TABLE `tbl_working_days` (
  `working_days_id` int(11) NOT NULL,
  `day_id` int(5) NOT NULL,
  `start_hours` varchar(20) NOT NULL,
  `end_hours` varchar(20) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_working_days`
--

INSERT INTO `tbl_working_days` (`working_days_id`, `day_id`, `start_hours`, `end_hours`, `flag`) VALUES
(1, 1, '16:45', '16:45', 1),
(2, 2, '16:45', '16:45', 1),
(3, 3, '16:45', '16:45', 1),
(4, 4, '16:45', '16:45', 1),
(5, 5, '16:45', '16:45', 1),
(6, 6, '16:45', '16:45', 1),
(7, 7, '16:45', '16:45', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `installer`
--
ALTER TABLE `installer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tbl_account_details`
--
ALTER TABLE `tbl_account_details`
  ADD PRIMARY KEY (`account_details_id`);

--
-- Indexes for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  ADD PRIMARY KEY (`activities_id`);

--
-- Indexes for table `tbl_advance_salary`
--
ALTER TABLE `tbl_advance_salary`
  ADD PRIMARY KEY (`advance_salary_id`);

--
-- Indexes for table `tbl_allowed_ip`
--
ALTER TABLE `tbl_allowed_ip`
  ADD PRIMARY KEY (`allowed_ip_id`);

--
-- Indexes for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  ADD PRIMARY KEY (`announcements_id`);

--
-- Indexes for table `tbl_assign_item`
--
ALTER TABLE `tbl_assign_item`
  ADD PRIMARY KEY (`assign_item_id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `tbl_bug`
--
ALTER TABLE `tbl_bug`
  ADD PRIMARY KEY (`bug_id`);

--
-- Indexes for table `tbl_calls`
--
ALTER TABLE `tbl_calls`
  ADD PRIMARY KEY (`calls_id`);

--
-- Indexes for table `tbl_checklists`
--
ALTER TABLE `tbl_checklists`
  ADD PRIMARY KEY (`checklist_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_client_menu`
--
ALTER TABLE `tbl_client_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_client_role`
--
ALTER TABLE `tbl_client_role`
  ADD PRIMARY KEY (`client_role_id`);

--
-- Indexes for table `tbl_clock`
--
ALTER TABLE `tbl_clock`
  ADD PRIMARY KEY (`clock_id`);

--
-- Indexes for table `tbl_clock_history`
--
ALTER TABLE `tbl_clock_history`
  ADD PRIMARY KEY (`clock_history_id`);

--
-- Indexes for table `tbl_config`
--
ALTER TABLE `tbl_config`
  ADD PRIMARY KEY (`config_key`);

--
-- Indexes for table `tbl_contract_type`
--
ALTER TABLE `tbl_contract_type`
  ADD PRIMARY KEY (`contract_type_id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_currencies`
--
ALTER TABLE `tbl_currencies`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tbl_customer_group`
--
ALTER TABLE `tbl_customer_group`
  ADD PRIMARY KEY (`customer_group_id`);

--
-- Indexes for table `tbl_custom_field`
--
ALTER TABLE `tbl_custom_field`
  ADD PRIMARY KEY (`custom_field_id`);

--
-- Indexes for table `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_days`
--
ALTER TABLE `tbl_days`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`departments_id`);

--
-- Indexes for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  ADD PRIMARY KEY (`designations_id`);

--
-- Indexes for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD PRIMARY KEY (`discipline_id`);

--
-- Indexes for table `tbl_draft`
--
ALTER TABLE `tbl_draft`
  ADD PRIMARY KEY (`draft_id`);

--
-- Indexes for table `tbl_email_templates`
--
ALTER TABLE `tbl_email_templates`
  ADD PRIMARY KEY (`email_templates_id`);

--
-- Indexes for table `tbl_employee_award`
--
ALTER TABLE `tbl_employee_award`
  ADD PRIMARY KEY (`employee_award_id`);

--
-- Indexes for table `tbl_employee_bank`
--
ALTER TABLE `tbl_employee_bank`
  ADD PRIMARY KEY (`employee_bank_id`);

--
-- Indexes for table `tbl_employee_document`
--
ALTER TABLE `tbl_employee_document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `tbl_employee_payroll`
--
ALTER TABLE `tbl_employee_payroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `tbl_estimates`
--
ALTER TABLE `tbl_estimates`
  ADD PRIMARY KEY (`estimates_id`),
  ADD UNIQUE KEY `reference_no` (`reference_no`);

--
-- Indexes for table `tbl_estimate_items`
--
ALTER TABLE `tbl_estimate_items`
  ADD PRIMARY KEY (`estimate_items_id`);

--
-- Indexes for table `tbl_expense_category`
--
ALTER TABLE `tbl_expense_category`
  ADD PRIMARY KEY (`expense_category_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`files_id`);

--
-- Indexes for table `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `tbl_goal_tracking`
--
ALTER TABLE `tbl_goal_tracking`
  ADD PRIMARY KEY (`goal_tracking_id`);

--
-- Indexes for table `tbl_goal_type`
--
ALTER TABLE `tbl_goal_type`
  ADD PRIMARY KEY (`goal_type_id`);

--
-- Indexes for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  ADD PRIMARY KEY (`holiday_id`);

--
-- Indexes for table `tbl_hourly_rate`
--
ALTER TABLE `tbl_hourly_rate`
  ADD PRIMARY KEY (`hourly_rate_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_income_category`
--
ALTER TABLE `tbl_income_category`
  ADD PRIMARY KEY (`income_category_id`);

--
-- Indexes for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD PRIMARY KEY (`invoices_id`),
  ADD UNIQUE KEY `reference_no` (`reference_no`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `tbl_item_history`
--
ALTER TABLE `tbl_item_history`
  ADD PRIMARY KEY (`item_history_id`);

--
-- Indexes for table `tbl_job_appliactions`
--
ALTER TABLE `tbl_job_appliactions`
  ADD PRIMARY KEY (`job_appliactions_id`);

--
-- Indexes for table `tbl_job_circular`
--
ALTER TABLE `tbl_job_circular`
  ADD PRIMARY KEY (`job_circular_id`);

--
-- Indexes for table `tbl_kb_category`
--
ALTER TABLE `tbl_kb_category`
  ADD PRIMARY KEY (`kb_category_id`);

--
-- Indexes for table `tbl_knowledgebase`
--
ALTER TABLE `tbl_knowledgebase`
  ADD PRIMARY KEY (`kb_id`);

--
-- Indexes for table `tbl_languages`
--
ALTER TABLE `tbl_languages`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  ADD PRIMARY KEY (`leads_id`);

--
-- Indexes for table `tbl_lead_source`
--
ALTER TABLE `tbl_lead_source`
  ADD PRIMARY KEY (`lead_source_id`);

--
-- Indexes for table `tbl_lead_status`
--
ALTER TABLE `tbl_lead_status`
  ADD PRIMARY KEY (`lead_status_id`);

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
-- Indexes for table `tbl_locales`
--
ALTER TABLE `tbl_locales`
  ADD PRIMARY KEY (`locale`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_mettings`
--
ALTER TABLE `tbl_mettings`
  ADD PRIMARY KEY (`mettings_id`);

--
-- Indexes for table `tbl_milestones`
--
ALTER TABLE `tbl_milestones`
  ADD PRIMARY KEY (`milestones_id`);

--
-- Indexes for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  ADD PRIMARY KEY (`notifications_id`);

--
-- Indexes for table `tbl_offence_category`
--
ALTER TABLE `tbl_offence_category`
  ADD PRIMARY KEY (`offence_id`);

--
-- Indexes for table `tbl_online_payment`
--
ALTER TABLE `tbl_online_payment`
  ADD PRIMARY KEY (`online_payment_id`);

--
-- Indexes for table `tbl_opportunities`
--
ALTER TABLE `tbl_opportunities`
  ADD PRIMARY KEY (`opportunities_id`);

--
-- Indexes for table `tbl_opportunities_state_reason`
--
ALTER TABLE `tbl_opportunities_state_reason`
  ADD PRIMARY KEY (`opportunities_state_reason_id`);

--
-- Indexes for table `tbl_outgoing_emails`
--
ALTER TABLE `tbl_outgoing_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  ADD PRIMARY KEY (`overtime_id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `tbl_payment_methods`
--
ALTER TABLE `tbl_payment_methods`
  ADD PRIMARY KEY (`payment_methods_id`);

--
-- Indexes for table `tbl_penalty_category`
--
ALTER TABLE `tbl_penalty_category`
  ADD PRIMARY KEY (`penalty_id`);

--
-- Indexes for table `tbl_performance_apprisal`
--
ALTER TABLE `tbl_performance_apprisal`
  ADD PRIMARY KEY (`performance_appraisal_id`);

--
-- Indexes for table `tbl_performance_indicator`
--
ALTER TABLE `tbl_performance_indicator`
  ADD PRIMARY KEY (`performance_indicator_id`);

--
-- Indexes for table `tbl_pinaction`
--
ALTER TABLE `tbl_pinaction`
  ADD PRIMARY KEY (`pinaction_id`);

--
-- Indexes for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
  ADD PRIMARY KEY (`priority_id`);

--
-- Indexes for table `tbl_private_chat`
--
ALTER TABLE `tbl_private_chat`
  ADD PRIMARY KEY (`private_chat_id`);

--
-- Indexes for table `tbl_private_chat_messages`
--
ALTER TABLE `tbl_private_chat_messages`
  ADD PRIMARY KEY (`private_chat_messages_id`);

--
-- Indexes for table `tbl_private_chat_users`
--
ALTER TABLE `tbl_private_chat_users`
  ADD PRIMARY KEY (`private_chat_users_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tbl_project_settings`
--
ALTER TABLE `tbl_project_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `tbl_proposals`
--
ALTER TABLE `tbl_proposals`
  ADD PRIMARY KEY (`proposals_id`),
  ADD UNIQUE KEY `reference_no` (`reference_no`);

--
-- Indexes for table `tbl_proposals_items`
--
ALTER TABLE `tbl_proposals_items`
  ADD PRIMARY KEY (`proposals_items_id`);

--
-- Indexes for table `tbl_purchases`
--
ALTER TABLE `tbl_purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `tbl_purchase_items`
--
ALTER TABLE `tbl_purchase_items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `tbl_purchase_payments`
--
ALTER TABLE `tbl_purchase_payments`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `tbl_quotationforms`
--
ALTER TABLE `tbl_quotationforms`
  ADD PRIMARY KEY (`quotationforms_id`);

--
-- Indexes for table `tbl_quotations`
--
ALTER TABLE `tbl_quotations`
  ADD PRIMARY KEY (`quotations_id`);

--
-- Indexes for table `tbl_quotation_details`
--
ALTER TABLE `tbl_quotation_details`
  ADD PRIMARY KEY (`quotation_details_id`);

--
-- Indexes for table `tbl_reminders`
--
ALTER TABLE `tbl_reminders`
  ADD PRIMARY KEY (`reminder_id`),
  ADD KEY `rel_id` (`module`),
  ADD KEY `rel_type` (`user_id`);

--
-- Indexes for table `tbl_return_stock`
--
ALTER TABLE `tbl_return_stock`
  ADD PRIMARY KEY (`return_stock_id`);

--
-- Indexes for table `tbl_return_stock_items`
--
ALTER TABLE `tbl_return_stock_items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `tbl_return_stock_payments`
--
ALTER TABLE `tbl_return_stock_payments`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `tbl_salary_allowance`
--
ALTER TABLE `tbl_salary_allowance`
  ADD PRIMARY KEY (`salary_allowance_id`);

--
-- Indexes for table `tbl_salary_deduction`
--
ALTER TABLE `tbl_salary_deduction`
  ADD PRIMARY KEY (`salary_deduction_id`);

--
-- Indexes for table `tbl_salary_payment`
--
ALTER TABLE `tbl_salary_payment`
  ADD PRIMARY KEY (`salary_payment_id`);

--
-- Indexes for table `tbl_salary_payment_allowance`
--
ALTER TABLE `tbl_salary_payment_allowance`
  ADD PRIMARY KEY (`salary_payment_allowance_id`);

--
-- Indexes for table `tbl_salary_payment_deduction`
--
ALTER TABLE `tbl_salary_payment_deduction`
  ADD PRIMARY KEY (`salary_payment_deduction`);

--
-- Indexes for table `tbl_salary_payment_details`
--
ALTER TABLE `tbl_salary_payment_details`
  ADD PRIMARY KEY (`salary_payment_details_id`);

--
-- Indexes for table `tbl_salary_payslip`
--
ALTER TABLE `tbl_salary_payslip`
  ADD PRIMARY KEY (`payslip_id`);

--
-- Indexes for table `tbl_salary_template`
--
ALTER TABLE `tbl_salary_template`
  ADD PRIMARY KEY (`salary_template_id`);

--
-- Indexes for table `tbl_saved_items`
--
ALTER TABLE `tbl_saved_items`
  ADD PRIMARY KEY (`saved_items_id`);

--
-- Indexes for table `tbl_sent`
--
ALTER TABLE `tbl_sent`
  ADD PRIMARY KEY (`sent_id`);

--
-- Indexes for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_stock_category`
--
ALTER TABLE `tbl_stock_category`
  ADD PRIMARY KEY (`stock_category_id`);

--
-- Indexes for table `tbl_stock_sub_category`
--
ALTER TABLE `tbl_stock_sub_category`
  ADD PRIMARY KEY (`stock_sub_category_id`);

--
-- Indexes for table `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `tbl_tasks_timer`
--
ALTER TABLE `tbl_tasks_timer`
  ADD PRIMARY KEY (`tasks_timer_id`);

--
-- Indexes for table `tbl_task_attachment`
--
ALTER TABLE `tbl_task_attachment`
  ADD PRIMARY KEY (`task_attachment_id`);

--
-- Indexes for table `tbl_task_comment`
--
ALTER TABLE `tbl_task_comment`
  ADD PRIMARY KEY (`task_comment_id`);

--
-- Indexes for table `tbl_task_uploaded_files`
--
ALTER TABLE `tbl_task_uploaded_files`
  ADD PRIMARY KEY (`uploaded_files_id`);

--
-- Indexes for table `tbl_tax_rates`
--
ALTER TABLE `tbl_tax_rates`
  ADD KEY `Index 1` (`tax_rates_id`);

--
-- Indexes for table `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  ADD PRIMARY KEY (`tickets_id`);

--
-- Indexes for table `tbl_tickets_replies`
--
ALTER TABLE `tbl_tickets_replies`
  ADD PRIMARY KEY (`tickets_replies_id`);

--
-- Indexes for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`transactions_id`);

--
-- Indexes for table `tbl_transfer`
--
ALTER TABLE `tbl_transfer`
  ADD PRIMARY KEY (`transfer_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- Indexes for table `tbl_working_days`
--
ALTER TABLE `tbl_working_days`
  ADD PRIMARY KEY (`working_days_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_account_details`
--
ALTER TABLE `tbl_account_details`
  MODIFY `account_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  MODIFY `activities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=543;

--
-- AUTO_INCREMENT for table `tbl_advance_salary`
--
ALTER TABLE `tbl_advance_salary`
  MODIFY `advance_salary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_allowed_ip`
--
ALTER TABLE `tbl_allowed_ip`
  MODIFY `allowed_ip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  MODIFY `announcements_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_assign_item`
--
ALTER TABLE `tbl_assign_item`
  MODIFY `assign_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_bug`
--
ALTER TABLE `tbl_bug`
  MODIFY `bug_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_calls`
--
ALTER TABLE `tbl_calls`
  MODIFY `calls_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_checklists`
--
ALTER TABLE `tbl_checklists`
  MODIFY `checklist_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_client_menu`
--
ALTER TABLE `tbl_client_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_client_role`
--
ALTER TABLE `tbl_client_role`
  MODIFY `client_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_clock`
--
ALTER TABLE `tbl_clock`
  MODIFY `clock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_clock_history`
--
ALTER TABLE `tbl_clock_history`
  MODIFY `clock_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contract_type`
--
ALTER TABLE `tbl_contract_type`
  MODIFY `contract_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `tbl_customer_group`
--
ALTER TABLE `tbl_customer_group`
  MODIFY `customer_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_custom_field`
--
ALTER TABLE `tbl_custom_field`
  MODIFY `custom_field_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_days`
--
ALTER TABLE `tbl_days`
  MODIFY `day_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `departments_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `designations_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  MODIFY `discipline_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_draft`
--
ALTER TABLE `tbl_draft`
  MODIFY `draft_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_email_templates`
--
ALTER TABLE `tbl_email_templates`
  MODIFY `email_templates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_employee_award`
--
ALTER TABLE `tbl_employee_award`
  MODIFY `employee_award_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employee_bank`
--
ALTER TABLE `tbl_employee_bank`
  MODIFY `employee_bank_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_employee_document`
--
ALTER TABLE `tbl_employee_document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_employee_payroll`
--
ALTER TABLE `tbl_employee_payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_estimates`
--
ALTER TABLE `tbl_estimates`
  MODIFY `estimates_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_estimate_items`
--
ALTER TABLE `tbl_estimate_items`
  MODIFY `estimate_items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_expense_category`
--
ALTER TABLE `tbl_expense_category`
  MODIFY `expense_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_form`
--
ALTER TABLE `tbl_form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_goal_tracking`
--
ALTER TABLE `tbl_goal_tracking`
  MODIFY `goal_tracking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_goal_type`
--
ALTER TABLE `tbl_goal_type`
  MODIFY `goal_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hourly_rate`
--
ALTER TABLE `tbl_hourly_rate`
  MODIFY `hourly_rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_income_category`
--
ALTER TABLE `tbl_income_category`
  MODIFY `income_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  MODIFY `invoices_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_item_history`
--
ALTER TABLE `tbl_item_history`
  MODIFY `item_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_appliactions`
--
ALTER TABLE `tbl_job_appliactions`
  MODIFY `job_appliactions_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_circular`
--
ALTER TABLE `tbl_job_circular`
  MODIFY `job_circular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kb_category`
--
ALTER TABLE `tbl_kb_category`
  MODIFY `kb_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_knowledgebase`
--
ALTER TABLE `tbl_knowledgebase`
  MODIFY `kb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  MODIFY `leads_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lead_source`
--
ALTER TABLE `tbl_lead_source`
  MODIFY `lead_source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_lead_status`
--
ALTER TABLE `tbl_lead_status`
  MODIFY `lead_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_leave_application`
--
ALTER TABLE `tbl_leave_application`
  MODIFY `leave_application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_leave_category`
--
ALTER TABLE `tbl_leave_category`
  MODIFY `leave_category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `tbl_mettings`
--
ALTER TABLE `tbl_mettings`
  MODIFY `mettings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_milestones`
--
ALTER TABLE `tbl_milestones`
  MODIFY `milestones_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `notes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  MODIFY `notifications_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT for table `tbl_offence_category`
--
ALTER TABLE `tbl_offence_category`
  MODIFY `offence_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_online_payment`
--
ALTER TABLE `tbl_online_payment`
  MODIFY `online_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_opportunities`
--
ALTER TABLE `tbl_opportunities`
  MODIFY `opportunities_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_opportunities_state_reason`
--
ALTER TABLE `tbl_opportunities_state_reason`
  MODIFY `opportunities_state_reason_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_outgoing_emails`
--
ALTER TABLE `tbl_outgoing_emails`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  MODIFY `overtime_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `payments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment_methods`
--
ALTER TABLE `tbl_payment_methods`
  MODIFY `payment_methods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_penalty_category`
--
ALTER TABLE `tbl_penalty_category`
  MODIFY `penalty_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_performance_apprisal`
--
ALTER TABLE `tbl_performance_apprisal`
  MODIFY `performance_appraisal_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_performance_indicator`
--
ALTER TABLE `tbl_performance_indicator`
  MODIFY `performance_indicator_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pinaction`
--
ALTER TABLE `tbl_pinaction`
  MODIFY `pinaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
  MODIFY `priority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_private_chat`
--
ALTER TABLE `tbl_private_chat`
  MODIFY `private_chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_private_chat_messages`
--
ALTER TABLE `tbl_private_chat_messages`
  MODIFY `private_chat_messages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_private_chat_users`
--
ALTER TABLE `tbl_private_chat_users`
  MODIFY `private_chat_users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_project_settings`
--
ALTER TABLE `tbl_project_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_proposals`
--
ALTER TABLE `tbl_proposals`
  MODIFY `proposals_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_proposals_items`
--
ALTER TABLE `tbl_proposals_items`
  MODIFY `proposals_items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchases`
--
ALTER TABLE `tbl_purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchase_items`
--
ALTER TABLE `tbl_purchase_items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchase_payments`
--
ALTER TABLE `tbl_purchase_payments`
  MODIFY `payments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quotationforms`
--
ALTER TABLE `tbl_quotationforms`
  MODIFY `quotationforms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quotations`
--
ALTER TABLE `tbl_quotations`
  MODIFY `quotations_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quotation_details`
--
ALTER TABLE `tbl_quotation_details`
  MODIFY `quotation_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reminders`
--
ALTER TABLE `tbl_reminders`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_return_stock`
--
ALTER TABLE `tbl_return_stock`
  MODIFY `return_stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_return_stock_items`
--
ALTER TABLE `tbl_return_stock_items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_return_stock_payments`
--
ALTER TABLE `tbl_return_stock_payments`
  MODIFY `payments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_allowance`
--
ALTER TABLE `tbl_salary_allowance`
  MODIFY `salary_allowance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_salary_deduction`
--
ALTER TABLE `tbl_salary_deduction`
  MODIFY `salary_deduction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_salary_payment`
--
ALTER TABLE `tbl_salary_payment`
  MODIFY `salary_payment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_salary_payment_allowance`
--
ALTER TABLE `tbl_salary_payment_allowance`
  MODIFY `salary_payment_allowance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_salary_payment_deduction`
--
ALTER TABLE `tbl_salary_payment_deduction`
  MODIFY `salary_payment_deduction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_salary_payment_details`
--
ALTER TABLE `tbl_salary_payment_details`
  MODIFY `salary_payment_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_salary_payslip`
--
ALTER TABLE `tbl_salary_payslip`
  MODIFY `payslip_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_salary_template`
--
ALTER TABLE `tbl_salary_template`
  MODIFY `salary_template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_saved_items`
--
ALTER TABLE `tbl_saved_items`
  MODIFY `saved_items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sent`
--
ALTER TABLE `tbl_sent`
  MODIFY `sent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stock_category`
--
ALTER TABLE `tbl_stock_category`
  MODIFY `stock_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stock_sub_category`
--
ALTER TABLE `tbl_stock_sub_category`
  MODIFY `stock_sub_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `task_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_tasks_timer`
--
ALTER TABLE `tbl_tasks_timer`
  MODIFY `tasks_timer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_task_attachment`
--
ALTER TABLE `tbl_task_attachment`
  MODIFY `task_attachment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_task_comment`
--
ALTER TABLE `tbl_task_comment`
  MODIFY `task_comment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_task_uploaded_files`
--
ALTER TABLE `tbl_task_uploaded_files`
  MODIFY `uploaded_files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_tax_rates`
--
ALTER TABLE `tbl_tax_rates`
  MODIFY `tax_rates_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  MODIFY `tickets_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tickets_replies`
--
ALTER TABLE `tbl_tickets_replies`
  MODIFY `tickets_replies_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `training_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `transactions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_transfer`
--
ALTER TABLE `tbl_transfer`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=939;

--
-- AUTO_INCREMENT for table `tbl_working_days`
--
ALTER TABLE `tbl_working_days`
  MODIFY `working_days_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
