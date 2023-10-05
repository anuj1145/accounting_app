-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 05:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `cos_id` int(10) NOT NULL,
  `cos_name` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `village` text NOT NULL,
  `p_status` text NOT NULL,
  `cos_address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`cos_id`, `cos_name`, `mobile`, `village`, `p_status`, `cos_address`, `date`) VALUES
(42, 'AnujK', '9898889899', 'Dehradun', '', 'Madhur Vihar', '2023-10-05 06:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `entery`
--

CREATE TABLE `entery` (
  `entery_id` int(50) NOT NULL,
  `cos_id` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `item` varchar(45) NOT NULL,
  `item_desc` varchar(45) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `entery`
--

INSERT INTO `entery` (`entery_id`, `cos_id`, `date`, `item`, `item_desc`, `price`) VALUES
(43, 42, '2023-10-05 12:23:00', 'pen', 'Ball pen', 20),
(44, 42, '2023-10-05 12:33:48', 'Duster', 'Dust remover', 60),
(45, 47, '2023-10-05 13:23:50', 'notebook', 'for writing', 56),
(50, 42, '2023-10-05 13:50:02', 'printer', 'for printing', 40000),
(51, 42, '2023-10-05 13:52:12', 'mouse', 'for pc', 150),
(52, 42, '2023-10-05 13:53:45', 'keyboard', 'for writing', 1200),
(53, 42, '2023-10-05 13:54:40', 'pencil', 'for writing', 20);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(30) NOT NULL,
  `cust_id` int(30) NOT NULL,
  `quantity` int(40) NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `pro_price` varchar(30) NOT NULL,
  `pro_desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cust_id`, `quantity`, `pro_name`, `pro_price`, `pro_desc`) VALUES
(24, 42, 2, 'pen', '20', 'Ball pen'),
(25, 42, 3, 'Duster', '60', 'Dust remover'),
(26, 47, 4, 'notebook', '56', 'for writing'),
(31, 42, 2, 'printer', '40000', 'for printing'),
(32, 42, 1, 'mouse', '150', 'for pc'),
(33, 42, 2, 'keyboard', '1200', 'for writing'),
(34, 42, 5, 'pencil', '20', 'for writing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `city` text NOT NULL,
  `p_status` text NOT NULL,
  `user_address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `mobile`, `city`, `p_status`, `user_address`, `date`) VALUES
(18, 'AnujK', '75656565656', 'Dun', '', 'madhur vihar', '2023-10-04 13:32:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`cos_id`);

--
-- Indexes for table `entery`
--
ALTER TABLE `entery`
  ADD PRIMARY KEY (`entery_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `cos_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `entery`
--
ALTER TABLE `entery`
  MODIFY `entery_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
