-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 07:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Digvijay Kuwar', 'digvijay1234@gmail.com', 49850),
(2, 'Harish Bhamre', 'hari123@gmail.com', 69600),
(3, 'Prasad pendhare', 'prasad245@gmail.com', 78001),
(4, 'Divya lohar', 'divi11@gmail.com', 90286),
(5, 'Chetan girase', 'chetan12@gmail.com', 24000),
(6, 'Bharti patil', 'bhartaa28@gmail.com', 94864),
(7, 'Aditya falke', 'adifalke@gmail.com', 100000),
(8, 'Jayesh sonar', 'jaysonar@gmail.com', 48400),
(9, 'Mayuri Mahajan', 'mayuri26@gmail.com', 60000),
(10, 'Anjali Valvi', 'anjali65@gmail.com', 54999);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trans_id`, `sender`, `receiver`, `balance`) VALUES
(1, 'Digvijay', 'Divya', 4000),
(2, 'Chetan', 'Harish', 2000),
(3, 'Jayesh', 'prasad', 5000),
(4, 'Jayesh', 'Bharti', 3000),
(5, 'Anjali', 'Prasad', 2000),
(6, 'Mayuri', 'Harish', 1000),
(7, 'Digvijay', 'Chetan', 7000),
(8, 'Aditya', 'Anjali', 6000),
(9, 'Bharti patil', 'Digvijay Kuwar', 34),
(10, 'Harish Bhamre', 'Chetan girase', 10000),
(11, 'Digvijay Kuwar', 'Divya lohar', 136),
(12, 'Prasad pendhare', 'Anjali Valvi', 9999),
(13, 'Chetan girase', 'Bharti patil', 85000),
(14, 'Harish Bhamre', 'Jayesh sonar', 400),
(15, 'Digvijay Kuwar', 'Divya lohar', 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
