-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 09:49 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loaning_act`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `user_id` int(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`user_id`, `email_address`, `password`, `date_created`) VALUES
(1, 'ralphvincent@yahoo.com', '123', '2022-05-07 17:02:09'),
(2, 'charlesvincent@yahoo.com', '123', '2022-05-07 17:03:13'),
(3, 'richard.ramos@yahoo.com', '123', '2022-05-07 17:12:07'),
(4, 'lexilore@gmail.com', '123456', '2022-05-08 05:52:26');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_birth` date NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_no` int(11) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `father_no` int(11) NOT NULL,
  `spouse_name` varchar(255) NOT NULL,
  `spouse_no` int(11) NOT NULL,
  `company_affiliated` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_no` int(11) NOT NULL,
  `company_position` varchar(255) NOT NULL,
  `company_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `lname`, `fname`, `mname`, `category`, `permanent_address`, `email`, `date_birth`, `mobile_no`, `id_number`, `mother_name`, `mother_no`, `father_name`, `father_no`, `spouse_name`, `spouse_no`, `company_affiliated`, `company_address`, `company_no`, `company_position`, `company_status`) VALUES
(6, 'Ramos', 'richard', 'sadsads', 'sps', 'hanggan 1 Calauan Laguna', 'richard.ramos@yahoo.com', '1222-02-08', 98765, 123, 'sadadadasdada', 123124, 'qweqeqewq', 123123, 'asdasdasdasdsa', 12345, 'dsadadasd', 'asdasdsadasd', 12345, 'manager', 'manager'),
(11, 'pagcaliwagan', 'charles vincent', 'solis', 'atm', 'hanggan 1 Calauan Laguna', 'charlespagcaliwagan@yahoo.com', '2001-11-08', 9475632, 881, 'edna pagcaliwagan', 947563219, 'ariel pagcaliwagan', 2147483647, 'ralph vincent pagcaliwagan', 94534212, 'samsan tech', 'calauan laguna', 987654321, 'manager wasss', 'magssss');

-- --------------------------------------------------------

--
-- Table structure for table `loan_info`
--

CREATE TABLE `loan_info` (
  `loan_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `loan_account` varchar(255) NOT NULL,
  `loan_payment` int(255) NOT NULL,
  `loan_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `t_number` int(11) NOT NULL,
  `educational` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `user_status` varchar(100) NOT NULL,
  `position` enum('admin','branch manager','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `Lastname`, `mid_name`, `p_address`, `birthday`, `t_number`, `educational`, `age`, `gender`, `civil_status`, `user_status`, `position`) VALUES
(1, 'ralphvincent', '', '', '', NULL, 0, '', 0, '', '', 'Approved', 'admin'),
(2, 'charlesvincent', 'pagcaliwagan', 'solis', 'calauan laguna', '2001-11-08', 986543, 'information technology', 21, 'Male', 'single', 'Rejected', 'admin'),
(3, 'richard ', 'Ramos', 'wick', 'calauan laguna', '1111-02-01', 986543, 'information technology', 21, 'Male', 'single', 'Approved', 'branch manager'),
(4, 'lexi', 'loree', 'P', 'santa cruz laguna', '1998-05-31', 2147483647, 'college degree', 24, 'female', 'single', 'Approved', 'branch manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `loan_info`
--
ALTER TABLE `loan_info`
  ADD PRIMARY KEY (`loan_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `loan_info`
--
ALTER TABLE `loan_info`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan_info`
--
ALTER TABLE `loan_info`
  ADD CONSTRAINT `loan_info_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `account` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
