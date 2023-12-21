-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 29, 2021 at 07:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `fname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `fname`, `lname`, `email`, `password`) VALUES
(2, 'Kiran', 'Bendkoli', 'admin@gmail.com', '*84264A42FDD7C74B53A8916545B428BBC3A24997'),
(3, 'Kiran', 'Bendkoli', 'admin@admin.com', '*01A6717B58FF5C7EAFFF6CB7C96F7428EA65FE4C');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodgroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donor_id`, `donor_name`, `mobile_no`, `bloodgroup`, `age`, `gender`, `city`, `address`) VALUES
(6, 'Akshay Patil', '1234567789', 'A positive', '22', 'Male', 'Nashik', 'Panchavati'),
(7, 'Aniket Pathare', '2334423443', 'A negative', '23', 'Male', 'Nashik', 'Sanjiv Nagar'),
(8, 'Smriti Tambe', '1234512345', 'O negative', '25', 'Female', 'Pune', 'Anandwadi'),
(9, 'Sushrut Sagar', '1231231235', 'O negative', '35', 'Male', 'Pune', 'Agar'),
(10, 'Anvi Kshirsagar', '2345612345', 'AB negative', '22', 'Female', 'Mumbai', 'Andheri'),
(11, 'Avinash Dhikale', '2342342345', 'AB negative', '32', 'Male', 'Nashik', 'Panchavati'),
(12, 'Nitin Upadhey', '2345623465', 'O positive', '25', 'Male', 'Nashik', 'dwaraka'),
(14, 'Manish Rathe', '8888812345', 'A positive', '23', 'Male', 'Mumbai', 'Andheri'),
(16, 'Anushka Sabnis', '2342341234', 'A negative', '39', 'Female', 'Pune', 'Anandwadi'),
(20, 'Umesh Chahar', '1234512312', 'O negative', '23', 'Male', 'Mumbai', 'andheri east\r\n'),
(21, 'Abhishek Sharma', '1111111111', 'B positive', '23', 'Male', 'Nashik', 'Satpur'),
(23, 'Samarth Gandhi', '2223334441', 'O negative', '35', 'Male', 'Pune', 'Anandwadi'),
(24, 'Aniket Pawar', '1234457890', 'A negative', '27', 'Male', 'Nashik', 'Chunchale Satpur');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(15) NOT NULL,
  `fname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Akshay', 'Andhare', 'ak@gmail.com', '$2y$12$hGzphuxggCEjjIVO7RJjFO73GNp5z3DvZ5GVExaNEu9.BA/us06TW'),
(2, 'Aniket', 'Pathare', 'ani@gmail.com', '$2y$12$v6OEM7gsATeJnnfPNhNVjuwrLXdAB9LOrttjrrEhm90G.pv5bUYCa'),
(3, 'Kiran', 'Bendkoli', 'kiranbendkoli24@gmail.com', '$2y$12$dhugXNDHe8dJ.nQsYTk8AOQe/Boze0vvVAo1ws6RZyO6u3P/rS3by'),
(4, 'Vishal', 'Shrivastav', 'vishal123@gmail.com', '$2y$12$nvozpiqr0A1.cqKQSZpec.ETmJTg05G0E3i6AiBYT6VvYzBYXB7Dq'),
(5, 'Smriti', 'Tambe', 'smriti41@gmail.com', '$2y$12$dPEfzS/VrOHs/Jt7xVqZeeydF2jnpiTIH2nZ36JZm05pWhkI.7mC.'),
(6, 'Aniket', 'Paawar', 'aniket@gmail.com', '$2y$12$iE8GalKxw14esRQolbKtD.ihogXyQG7vb9QZJumQJ77JMQoGR9zd.');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloodgroup` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `name`, `bloodgroup`, `mobile_no`) VALUES
(3, 'Kiran', 'A positive', 1234567890),
(4, 'Kiran', 'O negative', 1234567890),
(6, 'Aniket Pawar', 'AB positive', 1234456789);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `bloodgroup` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `bloodgroup`, `stock`) VALUES
(1, 'A +ve', 30),
(2, 'A -ve', 30),
(4, 'B +ve', 49),
(5, 'B -ve', 35),
(6, 'AB +ve', 23),
(7, 'AB -ve', 40),
(8, 'O +ve', 20),
(9, 'O -ve', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
