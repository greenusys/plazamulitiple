-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2020 at 12:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

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
-- Table structure for table `tbl_leave_policy`
--

CREATE TABLE `tbl_leave_policy` (
  `leave_policy_id` int(10) NOT NULL,
  `lpolicy_department_id` int(50) DEFAULT NULL,
  `lpolicy_designation_id` int(50) DEFAULT NULL,
  `lpolicy_category_id` int(50) DEFAULT NULL,
  `lpolicy_days` int(50) DEFAULT NULL,
  `lpolicy_gender` enum('all','male','female','') DEFAULT NULL,
  `lpolicy_effective_date` varchar(255) DEFAULT NULL,
  `lpolicy_activate` enum('active','deact') NOT NULL,
  `lpolicy_addedon` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave_policy`
--

INSERT INTO `tbl_leave_policy` (`leave_policy_id`, `lpolicy_department_id`, `lpolicy_designation_id`, `lpolicy_category_id`, `lpolicy_days`, `lpolicy_gender`, `lpolicy_effective_date`, `lpolicy_activate`, `lpolicy_addedon`) VALUES
(1, 1, 1, 1, 6, 'all', '2020-02-21', 'active', '2020-02-20 11:40:26'),
(2, 1, 1, 3, 8, 'all', '2020-02-22', 'active', '2020-02-20 11:42:29'),
(3, 1, 1, 4, 10, 'all', '2020-02-24', 'active', '2020-02-20 11:43:19'),
(4, 1, 1, 5, 7, 'all', '2020-02-26', 'active', '2020-02-20 11:44:01'),
(5, 1, 1, 9, 3, 'all', '2020-02-26', 'active', '2020-02-20 12:09:44'),
(7, 1, 2, 1, 4, 'all', '2020-02-21', 'active', '2020-02-20 12:25:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_leave_policy`
--
ALTER TABLE `tbl_leave_policy`
  ADD PRIMARY KEY (`leave_policy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_leave_policy`
--
ALTER TABLE `tbl_leave_policy`
  MODIFY `leave_policy_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
