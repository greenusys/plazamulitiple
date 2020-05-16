-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2020 at 01:38 PM
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
-- Table structure for table `tbl_leave_yearly`
--

CREATE TABLE `tbl_leave_yearly` (
  `year_leaveid` int(10) NOT NULL,
  `designation_id` int(50) DEFAULT NULL,
  `total_Yearlyleave` int(50) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_leave_yearly`
--

INSERT INTO `tbl_leave_yearly` (`year_leaveid`, `designation_id`, `total_Yearlyleave`, `added_on`) VALUES
(1, 1, 34, '2020-02-20 10:13:31'),
(2, 2, 28, '2020-02-20 10:16:29'),
(3, 3, 26, '2020-02-20 10:16:44'),
(4, 7, 25, '2020-02-20 10:17:03'),
(5, 8, 20, '2020-02-20 10:21:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_leave_yearly`
--
ALTER TABLE `tbl_leave_yearly`
  ADD PRIMARY KEY (`year_leaveid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_leave_yearly`
--
ALTER TABLE `tbl_leave_yearly`
  MODIFY `year_leaveid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
