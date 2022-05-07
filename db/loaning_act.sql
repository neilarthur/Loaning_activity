-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 04:57 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

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
(1, 'richard.ramos@yahoo.com', '123', '2022-05-03 08:19:56'),
(16, 'ralphvincent@yahoo.com', '123', '2022-05-03 09:39:56'),
(17, 'chadwick@yahoo.com', '12345', '2022-05-03 09:43:39'),
(18, 'richard.ramos@yahoo.com', '123', '2022-05-03 09:45:05'),
(19, 'chadwick@yahoo.com', '123', '2022-05-04 03:38:20'),
(20, 'neil.pornela@yahoo.com', '123', '2022-05-04 05:26:02');

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
(1, 'pagcaliwagan', 'ralph vincent', 'solis', '', 'hanggan 1 Calauan Laguna', 'ralphvincent.pagcaliwagan@yahoo.com', '0000-00-00', 98765, 123, 'edna pagcaliwagan', 12345, 'ariel pagcaliwagan', 12345, 'ralph vincent pagcaliwagan', 12345, 'dsadadasd', 'asdasdsadasd', 12345, '0', 'manager'),
(2, 'pagcaliwagan', 'ralph vincent', 'solis', '', 'hanggan 1 Calauan Laguna', 'ralphvincent.pagcaliwagan@yahoo.com', '2001-11-08', 98765, 123, 'edna pagcaliwagan', 12345, 'ariel pagcaliwagan', 12345, 'ralph vincent pagcaliwagan', 12345, 'dsadadasd', 'asdasdsadasd', 12345, '', 'manager'),
(3, 'pagcaliwagan', 'ralph vincent', 'solis', '', 'hanggan 1 Calauan Laguna', 'ralphvincent.pagcaliwagan@yahoo.com', '2001-11-08', 98765, 123, 'edna pagcaliwagan', 12345, 'ariel pagcaliwagan', 12345, 'ralph vincent pagcaliwagan', 12345, 'dsadadasd', 'asdasdsadasd', 12345, '', 'manager'),
(4, 'pagcaliwagan', 'ralph vincent', 'solis', '', 'hanggan 1 Calauan Laguna', 'ralphvincent.pagcaliwagan@yahoo.com', '2001-11-08', 98765, 123, 'edna pagcaliwagan', 12345, 'ariel pagcaliwagan', 12345, 'ralph vincent pagcaliwagan', 12345, 'dsadadasd', 'asdasdsadasd', 12345, '', 'manager'),
(5, 'Ramos', 'richard', 'sadsads', '', 'hanggan 1 Calauan Laguna', 'richard.ramos@yahoo.com', '1222-02-08', 98765, 123, 'sadadadasdada', 123124, 'qweqeqewq', 123123, 'asdasdasdasdsa', 12345, 'dsadadasd', 'asdasdsadasd', 12345, '', 'manager'),
(6, 'Ramos', 'richard', 'sadsads', '', 'hanggan 1 Calauan Laguna', 'richard.ramos@yahoo.com', '1222-02-08', 98765, 123, 'sadadadasdada', 123124, 'qweqeqewq', 123123, 'asdasdasdasdsa', 12345, 'dsadadasd', 'asdasdsadasd', 12345, 'manager', 'manager'),
(7, 'porn', 'Jireh', 'sadsads', 'atm', 'hanggan 1 Calauan Laguna', 'richard.ramos@yahoo.com', '2222-02-02', 98765, 123, 'adasdasdsad', 12345, 'sadasdasdasd', 1234, 'asdasdasdsadas', 12345, 'dsadadasd', 'asdasdsadasd', 12345, 'manager', 'manager'),
(8, 'porn', 'Jireh', 'sadsads', 'atm', 'hanggan 1 Calauan Laguna', 'richard.ramos@yahoo.com', '2222-02-02', 98765, 123, 'adasdasdsad', 12345, 'sadasdasdasd', 1234, 'asdasdasdsadas', 12345, 'dsadadasd', 'asdasdsadasd', 12345, 'manager', 'manager'),
(9, 'porn', 'Jireh', 'solis', 'sps', 'hanggan 1 Calauan Laguna', 'ralphvincent.pagcaliwagan@yahoo.com', '1111-01-01', 98765, 123, 'sdaddsadasdas', 12345, 'sadasdadsad', 123123, 'dadasdadsad', 1234, 'dsadadasd', 'asdasdsadasd', 12345, 'manager', 'manager'),
(10, 'pornela', 'neil arthur', 'saaa', 'atm', 'hanggan 1 Calauan Laguna', 'Neilarthur23@yahoo.com', '2001-01-01', 98765, 123, 'sadadadasdada', 123124, 'qweqeqewq', 12345, 'asdasdasdasdsa', 12345, 'dsadadasd', 'asdasdsadasd', 12345, 'manager', 'manager');

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
  `position` enum('admin','branch manager','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `position`) VALUES
(16, 'ralphvincent', 'admin'),
(17, 'chadwick balota', 'admin'),
(18, 'richard ramos', 'admin'),
(19, 'no name', 'branch manager'),
(20, 'neil pornela', 'staff');

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
