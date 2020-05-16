-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2020 at 03:24 AM
-- Server version: 5.6.45-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laneCrowd`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_fav_section`
--

CREATE TABLE `user_fav_section` (
  `id` int(11) NOT NULL,
  `contentType` enum('Post','Photos','Chats','') NOT NULL,
  `album_id` int(10) DEFAULT NULL,
  `post_id` int(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `conversation_id` int(11) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_fav_section`
--

INSERT INTO `user_fav_section` (`id`, `contentType`, `album_id`, `post_id`, `user_id`, `conversation_id`, `added_on`) VALUES
(1, 'Post', NULL, 1, 1, NULL, '2020-02-13 12:50:10'),
(3, 'Photos', 2, NULL, 2, NULL, '2020-02-13 12:54:08'),
(4, 'Chats', NULL, NULL, 3, 3, '2020-02-13 12:55:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_fav_section`
--
ALTER TABLE `user_fav_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_fav_section`
--
ALTER TABLE `user_fav_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
