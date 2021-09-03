-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 08:53 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atharw`
--

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
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `con_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `contact`, `email`, `password`, `con_password`) VALUES
(1, 'Smrutikant', '214748', 'sm@gmail.com', 'sm@123', 'sm@123'),
(4, 'Smrutikanta Rout', '9114423998', 'smrutikantarout123@gmail.com', 'sm@321', 'sm@321'),
(5, 'Smrutikanta Rout', '8917216200', 'abc@123gmail.com', '1234567', '1234567'),
(6, 'patitapaban sahu', '9114423998', 'abc@123gmail.com', 'abc@321', 'abc@321'),
(8, 'santosh kumar sahoo', '126531287', 'abc@123gmail.com', '32145', '32145'),
(9, 'patitapaban sahu', '2316351237', 'guduipsar@gmail.com', '1234', '1234'),
(10, 'patitapaban sahu', '2316351237', 'guduipsar@gmail.com', '123456789', '123456789'),
(11, 'lipun', '9114423998', 'smrutikantarout123@gmail.com', 'sm321', 'sm321'),
(13, 'Snehasish', '8917213998', 'lipun123@gmail.com', 'snehasish123', 'snehasish123'),
(14, 'Subrat', '9876540893', 'abc@123gmail.com', 'abe01fec205935eb44f5', 'abe01fec205935eb44f5'),
(16, 'test', '1234567890', 'test@gmail.com', 'test', 'test'),
(18, 'Smrutikant', '8917216200', 'rsmrutikant8@gmail.com', 'Lipun@123', 'Lipun@123'),
(19, 'Shubham', '9178587486', 'shubhambytes@gmail.com', '6e052b7e74dd8ce6934b', '6e052b7e74dd8ce6934b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
