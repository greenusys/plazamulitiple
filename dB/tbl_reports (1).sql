-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2020 at 12:54 PM
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
-- Database: `greenusyscrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

CREATE TABLE `tbl_reports` (
  `rpt_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `rpt_employment_id` text NOT NULL,
  `rpt_date` text NOT NULL,
  `rpt_out_time` varchar(100) NOT NULL,
  `rpt_meet_goals` text NOT NULL,
  `rpt_issues` text NOT NULL,
  `rpt_summary` text NOT NULL,
  `rpt_task1` text NOT NULL,
  `rpt_task2` text NOT NULL,
  `rpt_task3` text NOT NULL,
  `rpt_tomorrow_goals` text NOT NULL,
  `rpt_complaints` text NOT NULL,
  `rpt_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reports`
--

INSERT INTO `tbl_reports` (`rpt_id`, `user_id`, `rpt_employment_id`, `rpt_date`, `rpt_out_time`, `rpt_meet_goals`, `rpt_issues`, `rpt_summary`, `rpt_task1`, `rpt_task2`, `rpt_task3`, `rpt_tomorrow_goals`, `rpt_complaints`, `rpt_images`) VALUES
(12, 8, '', '29/12/2015', '17:58', '0', 'weq', 'ewqweq', 'ewqwe', '', 'ewq', 'weq', 'weq', 'report-2020-02-18-10-59-090.jpg,report-2020-02-18-10-59-091.jpg'),
(13, 8, '', '29/12/2015', '16:48', 'Yes', 'bcbc', 'bvcbc', 'bvcb', 'vbc', 'vbcb', 'vbcb', 'bvcbcv', 'report-2020-02-18-12-49-030.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  ADD PRIMARY KEY (`rpt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  MODIFY `rpt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
