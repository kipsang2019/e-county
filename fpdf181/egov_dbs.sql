-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 08:12 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `egov_dbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'County', 'e259920f656708374774e1eac4b16d568be98a83');

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `citizens_id` int(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `id_no` int(10) NOT NULL,
  `Phone_number` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sub_county` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `account_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`citizens_id`, `first_name`, `last_name`, `id_no`, `Phone_number`, `email`, `sub_county`, `username`, `password`, `account_status`) VALUES
(1, 'Kipsang', 'Moses', 34774747, '795447474', 'sang@gmail.com', 'Saboti', 'sang', '83a046ffa06d5c37860bca369940cd73', 'Active'),
(3, 'Kim', 'Juma', 32114154, '711474414', 'jumakim@gmail.com', 'Cherengani', 'juma', 'e013f182f6792b7a6988a76b3ffb0da6a4b7d88b', 'Active'),
(4, 'Becky', 'Chero', 24774744, '711415114', 'cherobecky@gmail.com', 'Kwanza', 'chero', '044e643375a824f5e368670296fff7be6014157e', 'Active'),
(5, 'Maina', 'Kimani', 35447455, '714554711', 'kimanimaina2019@gmail.com', 'Endebes', 'kimani', '34432e2c925c34baee9fef88cf2403e1f9ebf99e', 'Active'),
(6, 'deno', 'kirui', 37137456, '707210620', 'deno@gmail.com', 'Saboti', 'denoki', 'bb3d8e712d9e7ad4af08d4a38f3f52d9683d58eb', 'Active'),
(11, 'sharon', 'chemai', 37426012, '740084977', 'sharonchemai2019@gmail.com', 'Saboti', 'sharon', '4e49d854c9bffb0a64257124971234c44952926c', 'Active'),
(12, 'Musa', 'Geofrey', 32554144, '+254726935394', 'musageofrey2015@gmail.com', 'Kiminini', 'musa', 'c50c4e0f7fa846d2ee63e4451ad16116de567d1f', 'Active'),
(13, 'Kipsang', 'Moses', 33735050, '+254700740099', 'kimtaim75@gmail.com', 'Saboti', 'moses', '76c580f0e3e4c9061b71a0636aee421ebf678b6e', 'Active'),
(14, 'Luke', 'Kimtai', 35224145, '+254714035107', 'lukekim@gmail.com', 'Cherengani', 'luke', '6b3799be4300e44489a08090123f3842e6419da5', 'Active'),
(15, 'BENJAMIN', 'MASAI', 35007460, '+254707269920', 'benjaminkwemoi96@gmail.com', 'Saboti', 'Masai', '3a59a6cfa06a61d48e4d04a5949835ff3d180718', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `county_projects`
--

CREATE TABLE `county_projects` (
  `id` int(20) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `project_type` varchar(100) NOT NULL,
  `contractor` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `project_location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cost` int(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `county_projects`
--

INSERT INTO `county_projects` (`id`, `project_name`, `project_type`, `contractor`, `address`, `town`, `project_location`, `description`, `cost`, `date`, `status`) VALUES
(2, 'Dam', 'New', 'XYZ Company Limited', 'P.O. Box. 45', 'Kitale', 'Kiminini', 'The county will begin the project early next month. this is after we received funding from the national government. the project is expected to be completed within a period of one year.', 20000000, '2019-06-17 18:34:04', 'Completed'),
(3, 'Public toilets', 'New', 'Ujenzi Bora Ltd', 'P.O. Box 3001', 'Nairobi', 'Kinyoro', 'county government in collaboration with central government has decided to initiate the construction of new toilets in Kinyoro market. The project comes after frequent complains from the citizens who are concerned with health. this project will begin soon just after receiving funds from the central government.', 500000, '2019-05-24 00:00:00', 'On the process'),
(4, 'Street lighting', 'New', 'Angaza Company Ltd', 'P.O. Box 54114', 'Nairobi', 'Birunda and saboti market', 'The county is finally going to implement the project in the next three moths. the first installation will begin in Birunda then saboti market will be next. the project is expected to be completed within a period of two moths ', 1000000, '2019-06-20 21:14:13', 'On the process'),
(5, 'Road', 'New project', 'Kundan', 'P.O. Box 214', 'Nairobi', 'Kitale-Matunda road', 'Due to public demand the county government is planning to repair the road to reduce the chances of road accidents . this project will be launched in three months time', 6000000, '2019-06-20 20:38:13', 'Completed'),
(6, 'Tuyokoony project', 'New', 'Ujenzi Limited', 'P.O. Box 1002', 'Nairobi', 'Kitalale', 'The project is expected to start in three months time. It will be able to host more than 100,000 spectetors at a time ', 5000000, '2019-06-20 21:24:23', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `county_updates`
--

CREATE TABLE `county_updates` (
  `id` int(20) NOT NULL,
  `updates` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `county_updates`
--

INSERT INTO `county_updates` (`id`, `updates`, `date`) VALUES
(2, 'You are advised to report to county hall next week for the discussion of new budget', '2019-05-22 17:12:42'),
(4, 'New cancer screening center project is on the way. We need your views on the exact location of the project ', '2019-05-22 17:32:54'),
(5, 'We received 2.5 B from the national government yesterday', '2019-05-22 17:34:25'),
(10, 'County gvt is planning to build a new bridge next year', '2019-05-24 04:46:11'),
(11, 'We received new ambulence last week. ', '2019-05-27 23:55:57'),
(12, 'We have heard all your complaints. County will work on the m soon', '2019-05-31 19:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `id` int(20) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `u_id` int(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`id`, `job_title`, `course`, `institution`, `u_id`, `date`, `status`) VALUES
(2, 'IT', 'IT', 'TUK', 4, '2019-05-14 06:21:26', 'Wait for interview'),
(3, 'Procurement officer', 'Bcom', 'UON', 3, '2019-05-19 07:18:21', 'Wait for interview'),
(7, 'HR Officer', 'HR', 'TUK', 4, '2019-05-21 12:48:09', 'It seems you have applied twice'),
(8, 'accountant', 'bcom', 'uon', 6, '2019-05-23 12:30:20', 'Wait for interview'),
(9, 'accountant', 'bcom', 'uon', 12, '2019-05-31 21:20:28', 'Wait for interview'),
(10, 'ICT officer', 'IT', 'TUK', 13, '2019-06-01 09:30:20', 'Wait for interview'),
(11, 'accountant', 'bcom', 'NTTI', 14, '2019-06-03 19:27:29', 'It seems you have applied twice'),
(12, 'Procurement officer', 'Bcom', 'UON', 13, '2019-06-17 19:11:38', 'Wait for interview'),
(13, 'supplies manager', 'B-com (logistics and supply chain management)', 'THE TECHNICAL UNIVERSITY OF KENYA', 15, '2019-06-20 13:03:22', 'Wait for interview');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `u_id` int(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `msg`, `u_id`, `date`) VALUES
(5, 'hello county\r\n', 1, '2019-05-25 19:43:56'),
(7, 'What is happening next week? I am eager to know the progress. we were promised that by next week we will see some progress. We hope our county will address all the issues that are affecting us as far as county government is concerned', 4, '2019-05-27 19:25:36'),
(9, 'This is kipsang from one of the sub-county', 3, '2019-05-29 02:53:00'),
(11, 'Im New in this forum what is happening here ', 13, '2019-06-01 14:20:52'),
(12, 'hello county. when will you start implementing your promises', 12, '2019-06-05 08:50:19'),
(13, 'hi county, I think I suggested my projects 3 moths ago. Nothing has been done until now. Is there any hopes?', 3, '2019-06-21 12:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `permits`
--

CREATE TABLE `permits` (
  `id` int(20) NOT NULL,
  `business_name` varchar(200) NOT NULL,
  `business_type` varchar(200) NOT NULL,
  `box_no` varchar(200) NOT NULL,
  `town` varchar(200) NOT NULL,
  `land_zone` varchar(200) NOT NULL,
  `activity_code` varchar(200) NOT NULL,
  `premise_area` varchar(200) NOT NULL,
  `no_of_employees` int(10) NOT NULL,
  `u_id` int(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permits`
--

INSERT INTO `permits` (`id`, `business_name`, `business_type`, `box_no`, `town`, `land_zone`, `activity_code`, `premise_area`, `no_of_employees`, `u_id`, `status`) VALUES
(1, 'Uzuri hotel', 'Sole proprietorship', 'P.O. Box 52428', 'Kitale', '5884', '141', 'Kipsongo', 25, 4, 'Declined'),
(2, 'Digitech solutions center', 'Electronics shop', 'P.O. Box 254', 'Kitale', '45', '2475', 'Suam Kitale town', 200, 3, 'To be considered'),
(3, 'sandem', 'partnership', '72', 'bomet', 'saboti', '0226', 'saboti', 25, 6, 'Renew'),
(4, 'Security company Ltd', 'Sole proprietorship', 'P.O. Box 52428', 'Nairobi', '584', '255', 'Mlolongo Face 3', 1000, 12, 'Wait for approval'),
(5, 'Honeybunch  ', 'co-operative', '17', 'Kitale', '08567', 'Selling of natural honey ', 'saboti market', 250, 15, 'Wait for approval');

-- --------------------------------------------------------

--
-- Table structure for table `project_suggestion`
--

CREATE TABLE `project_suggestion` (
  `id` int(20) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `u_id` int(20) NOT NULL,
  `status` varchar(255) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_suggestion`
--

INSERT INTO `project_suggestion` (`id`, `project_name`, `location`, `descr`, `u_id`, `status`, `reason`, `date`) VALUES
(3, 'Road', 'Kitale-matunda', 'The road is muddy', 1, 'On the progress', 'there is no enough funds', '2019-05-22 16:12:03'),
(4, 'Road', 'Kitale-matunda', '', 3, 'Declined', 'the county does not have enough funds for this project', '2019-06-20 21:09:09'),
(5, 'Public toilets', 'Matunda', 'The town has a large population', 4, 'On the progress', '', '2019-05-21 12:57:36'),
(6, 'By-pass', 'Kiminini road', 'there is more congestion', 5, 'On the progress', 'It will comense once we receive funds from the national government', '2019-05-22 16:04:58'),
(7, 'ECDE classes', 'Tuyookoony primary school', 'kids are still learning under the tree', 13, 'Under consideration', '', '2019-06-01 20:40:27'),
(8, 'Bridge', 'kiminini', 'there is no good bridge. the existing one is in bad conditions ', 12, 'Under consideration', '', '2019-06-15 11:27:19'),
(9, 'County athletics field', 'Endebes grounds', 'there are many young people who are talented but there is no place to expose their talent. so I humbly request our county government to consider my suggestion', 11, 'Under consideration', '', '2019-06-26 00:21:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
  ADD PRIMARY KEY (`citizens_id`);

--
-- Indexes for table `county_projects`
--
ALTER TABLE `county_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `county_updates`
--
ALTER TABLE `county_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `permits`
--
ALTER TABLE `permits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `project_suggestion`
--
ALTER TABLE `project_suggestion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `citizens_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `county_projects`
--
ALTER TABLE `county_projects`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `county_updates`
--
ALTER TABLE `county_updates`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permits`
--
ALTER TABLE `permits`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_suggestion`
--
ALTER TABLE `project_suggestion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `citizens` (`citizens_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `citizens` (`citizens_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permits`
--
ALTER TABLE `permits`
  ADD CONSTRAINT `permits_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `citizens` (`citizens_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_suggestion`
--
ALTER TABLE `project_suggestion`
  ADD CONSTRAINT `project_suggestion_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `citizens` (`citizens_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
