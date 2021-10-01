-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 10:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athraw`
--

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `board_code` varchar(20) NOT NULL,
  `board_name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(20) DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_code` varchar(20) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `board_code` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fullname`, `email`, `subject`, `message`, `date`) VALUES
(1, 'Smrutikanta Rout', 'rsmrutikant8@gmail.com', 'testing', 'hello', '2021-05-17 21:06:04'),
(2, '', '', '', 'trial', '2021-05-17 21:17:14'),
(3, 'Disha chauhan', 'disha123@gmail.com', 'hiii this z testing', 'tfyugilknbjhvg', '2021-05-17 21:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE `role_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_code` varchar(20) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `dashboard` varchar(40) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` varchar(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_master`
--

INSERT INTO `role_master` (`id`, `role_code`, `role_name`, `dashboard`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'RLADMIN', 'Super Admin', '../ATHARW ADMIN/index.php', 1, 'Super Admin', '2021-09-27 10:51:49', NULL, NULL),
(3, 'RLSTU', 'Student', '../index.php', 1, 'Super Admin', '2021-09-27 10:53:16', NULL, NULL),
(2, 'RLTCHR', 'Teacher', '../index.php', 1, 'Super Admin', '2021-09-27 10:53:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `con_password` varchar(20) NOT NULL,
  `identification` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `role_code` varchar(20) NOT NULL,
  `token` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Inactive',
  `passreset` varchar(20) NOT NULL,
  `student_status` tinyint(1) NOT NULL DEFAULT 0,
  `teacher_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `first_name`, `last_name`, `contact`, `email`, `password`, `con_password`, `identification`, `qualification`, `role_code`, `token`, `status`, `passreset`, `student_status`, `teacher_status`) VALUES
(18, 'Bhagyashree', 'Patra', '8280371220', 'bhagyashreepatra004@gmail.com', '12345678', '12345678', 'UploadDocument\\id\\img2.jpg', 'UploadDocument\\qualification\\certificate(1).pdf', 'RLADMIN', '779c9c1ea515f97a2e713079e0ab8b', 'Active', '0', 0, 1),
(46, 'Bhagyashree', 'Patra', '9876543210', 'patrabhagyashree004@gmail.com', 'Teacher1678', 'Teacher1678', 'UploadDocument/id/WhatsApp Image 2021-09-24 at 9.52.48 PM.jpeg', 'UploadDocument/qualification/20191211_132917(1).jpg', 'RLTCHR', '634fc43910f350c799d2cbddf0ea35', 'Inactive', '', 0, 1),
(50, 'Bhagyashree', 'Patra', '7656787667', 'bhagyashreep0654@gmail.com', 'Teacher3506', 'Teacher3506', '../UploadDocument/id/WhatsApp Image 2021-09-24 at 9.52.48 PM.jpeg', '../UploadDocument/qualification/20191211_132917(1).jpg', 'RLTCHR', '1523355a23e609e3345486863f42aa', 'Active', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_code` varchar(30) NOT NULL,
  `sub_name` varchar(40) NOT NULL,
  `board_code` varchar(20) NOT NULL,
  `class_code` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` varchar(20) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`board_code`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_code`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `board_code` (`board_code`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_master`
--
ALTER TABLE `role_master`
  ADD PRIMARY KEY (`role_code`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_code` (`role_code`);

--
-- Indexes for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD PRIMARY KEY (`sub_code`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `board_code` (`board_code`),
  ADD KEY `class_code` (`class_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_master`
--
ALTER TABLE `role_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`board_code`) REFERENCES `board` (`board_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `signup`
--
ALTER TABLE `signup`
  ADD CONSTRAINT `signup_ibfk_1` FOREIGN KEY (`role_code`) REFERENCES `role_master` (`role_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD CONSTRAINT `subject_master_ibfk_1` FOREIGN KEY (`board_code`) REFERENCES `board` (`board_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subject_master_ibfk_2` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
