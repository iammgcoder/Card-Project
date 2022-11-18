-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `card_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `mobile_number` int(13) NOT NULL,
  `phone_number` int(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `website_link` varchar(255) NOT NULL,
  `linkden_link` varchar(255) NOT NULL,
  `youtube_link` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `job_profile` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `background_img` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `heading_p_tag` varchar(255) NOT NULL,
  `text_color` varchar(255) NOT NULL,
  `header_color` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`id`, `first_name`, `last_name`, `mobile_number`, `phone_number`, `email`, `website_link`, `linkden_link`, `youtube_link`, `division`, `job_profile`, `profile_pic`, `background_img`, `color`, `heading_p_tag`, `text_color`, `header_color`, `address`, `date_time`) VALUES
(25, 'Demo Name', 'Demo Last Name', 1111111111, 1111111111, 'gmail@gmail.com', 'google.com', 'linkedin.com', 'youtube.com', 'Demo Division', 'Demo Job Profile', 'Asset Business Card-16.jpg', 'Asset Business Card-12.jpg', '#c55c16', '#f00000', '#8247bd', '#290d68', 'Demo Address', '2022-11-16 13:32:02'),
(26, 'Demo Name', 'Demo Last Name', 1111111111, 1111111111, 'gmail@gmail.com', 'google.com', 'linkedin.com', 'youtube.com', 'Demo Division', 'Demo Job Profile', 'Asset Business Card-17.jpg', 'Asset Business Card-12.jpg', '#ff0000', '#ff0000', '#ff0000', '#ff0000', 'Demo Address', '2022-11-16 13:32:41'),
(27, 'Demo Name', 'Demo Last Name', 1111111111, 1111111111, 'admin@gmail.com', 'google.com', 'linkedin.com', 'youtube.com', 'Demo Division', 'Demo Job Profile', 'Asset Business Card-18.jpg', 'Asset Business Card-12.jpg', '#b3ad00', '#02008f', '#48a357', '#ee501b', 'Demo Address', '2022-11-16 13:33:29'),
(28, 'Demo Name', 'Demo Last Name', 1111111111, 1111111111, 'admin@gmail.com', 'google.com', 'linkedin.com', 'youtube.com', 'Demo Division', 'Demo Job Profile', 'Asset Business Card-21.jpg', 'Asset Business Card-12.jpg', '#fa0000', '#000000', '#fd7777', '#874040', 'Demo Address', '2022-11-17 05:19:36'),
(29, 'Demo Name', 'Demo Last Name', 1111111111, 1111111111, 'admin@gmail.com', 'google.com', 'linkedin.com', 'youtube.com', 'Demo Division', 'Demo Job Profile', 'Asset Business Card-20.jpg', 'Asset Business Card-12.jpg', '#554fcf', '#bd0000', '#750000', '#ff7214', 'Demo Address', '2022-11-17 05:31:18'),
(31, 'Demo Name', 'Demo Last Name', 1111111111, 1111111111, 'admin@gmail.com', 'google.com', 'linkedin.com', 'youtube.com', 'Demo Division', 'Demo Job Profile', 'Asset Business Card-13.jpg', 'Asset Business Card-12.jpg', '#681d1d', '#ffffff', '#d42b2b', '#a80000', 'Demo Address', '2022-11-17 07:25:55'),
(32, 'Demo Name', 'Demo Last Name', 1111111111, 1111111111, 'admin@gmail.com', 'google.com', 'linkedin.com', 'youtube.com', 'Demo Division', 'Demo Job Profile', 'Asset Business Card-20.jpg', 'Asset Business Card-12.jpg', '#ff0000', '#4e0909', '#912222', '#6a1616', 'Demo', '2022-11-17 07:34:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`,`email`),
  ADD UNIQUE KEY `no` (`id`,`email`);

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card_details`
--
ALTER TABLE `card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
