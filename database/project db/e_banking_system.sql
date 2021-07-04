-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 03:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `banking_stuff`
--

CREATE TABLE `banking_stuff` (
  `id` int(32) NOT NULL,
  `salary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banking_stuff`
--

INSERT INTO `banking_stuff` (`id`, `salary`) VALUES
(1, '50000.00'),
(2, '30000.00');

-- --------------------------------------------------------

--
-- Table structure for table `blocked_clients`
--

CREATE TABLE `blocked_clients` (
  `id` int(10) NOT NULL,
  `account_balance` decimal(60,0) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `nid_varification` varchar(100) NOT NULL,
  `account_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bug_report`
--

CREATE TABLE `bug_report` (
  `id` int(11) NOT NULL,
  `bug_type` text NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bug_report`
--

INSERT INTO `bug_report` (`id`, `bug_type`, `description`) VALUES
(1, 'System', 'Making error in the transaction process several times');

-- --------------------------------------------------------

--
-- Table structure for table `client_table`
--

CREATE TABLE `client_table` (
  `id` int(20) NOT NULL,
  `account_balance` decimal(10,2) NOT NULL,
  `account_type` varchar(32) NOT NULL,
  `nid_varification` varchar(32) NOT NULL,
  `account_status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_table`
--

INSERT INTO `client_table` (`id`, `account_balance`, `account_type`, `nid_varification`, `account_status`) VALUES
(1, '20000.00', 'Deposit', '3131223', 'inactive'),
(2, '20000.00', 'Savings', '3131226', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `employee_reporting_info`
--

CREATE TABLE `employee_reporting_info` (
  `id` int(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `reporting_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_reporting_info`
--

INSERT INTO `employee_reporting_info` (`id`, `date`, `reporting_time`) VALUES
(1, '', '09:30 AM'),
(2, '', '09:32 AM');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `id` int(10) NOT NULL,
  `month` varchar(40) NOT NULL,
  `profit` int(20) NOT NULL,
  `loss` int(20) NOT NULL,
  `ultimate_profit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`id`, `month`, `profit`, `loss`, `ultimate_profit`) VALUES
(1, 'january', 80000, 60000, 20000),
(2, 'february', 80000, 20000, 60000),
(3, 'march', 50000, 40000, 10000),
(4, 'april', 140000, 8000, 132000);

-- --------------------------------------------------------

--
-- Table structure for table `hired_employee`
--

CREATE TABLE `hired_employee` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hired_employee`
--

INSERT INTO `hired_employee` (`id`, `name`, `designation`, `duration`) VALUES
(1, 'Rahul', 'Security Guard', '1 month'),
(2, 'setonom', 'Customer Care officer', '1 month');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `offer` varchar(30) NOT NULL,
  `rules` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(32) NOT NULL,
  `account_Status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='This table will be used for Login';

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`, `user_type`, `account_Status`) VALUES
(1, 'pranta2', '12345678', 'Bank manager', ''),
(1024, 'pranta21', '$2y$10$9YxkvJYspDWpSQhHyBkk5uZW5PHz/8yn2ZHtsQBQCpIQysRJcQuUm', 'bank_manager', 'active'),
(3, 'mahbub62', 'MHpranta2!', 'admin', 'active'),
(1025, 'pranta22', '$2y$10$oUJqA4kvl6M8K38GR/Cf6uWdtxZcS646aZw4LwPhfzgji/jeyM652', 'bank_manager', 'active'),
(1026, 'admin', '$2y$10$StC8n5Fnt.rKsCkgnmKHBuEvVHYE4MtBR4ZH1SlG0I2nL/XMwKQme', 'admin', 'pending'),
(1, 'Dip', '123456', 'meo', ''),
(2, 'abc', '@a123456', 'admin', ''),
(3, 'Rasidun', '123456', 'meo', '');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `meeting_type` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `venue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`id`, `meeting_type`, `title`, `date`, `time`, `venue`) VALUES
(1, 'Meeting', 'Introduction to Human Resource', '2021-07-05', '03:16', 'ICCB'),
(2, 'Seminar', 'Introduction to DataResource', '2021-07-05', '17:41', 'ICCB');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `money_exchange`
--

CREATE TABLE `money_exchange` (
  `id` int(30) NOT NULL,
  `exchange_from` decimal(10,2) NOT NULL,
  `exchange_amount` decimal(10,2) NOT NULL,
  `exchange_to` decimal(10,2) NOT NULL,
  `after_exchnage_amount` decimal(10,2) NOT NULL,
  `Date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bonus` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `name`, `bonus`, `description`) VALUES
(1, 'Dhaka Bank', '2%', 'Yes'),
(3, 'AB Bank', '5%', 'Yes'),
(5, 'Brac Bank', '1%', 'No'),
(6, 'XYZ Bank', '3%', 'No'),
(8, 'SBAC Bank', '6%', 'Yes'),
(10, 'Asian Bank', '3%', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `problem_review`
--

CREATE TABLE `problem_review` (
  `id` int(30) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `request_type` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_review`
--

INSERT INTO `problem_review` (`id`, `user_name`, `request_type`, `description`, `status`) VALUES
(6, 'Dip Ahmed', 'Taka To Rupee', 'Delayed', 'Pending'),
(13, 'Tamim Iqbal', 'Money Exchange', 'Taka to Dollar', 'Pending'),
(17, 'Virat Kahli', 'Money Exchange', 'Rupee to Taka', 'Rejected'),
(40, 'Abc', 'Dollar To Taka', 'Counting Mistake', 'Pending'),
(75, 'Shakib', 'Money Exchange', 'Rupee to Taka', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(30) NOT NULL,
  `fc` varchar(30) NOT NULL,
  `bc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `fc`, `bc`) VALUES
(1, '1 USD', '84.82 BDT'),
(2, '1 AUD', '63.87 BDT'),
(3, '1 Pound', '117.27 BDT'),
(5, '1 Rupee', '1.13 BDT');

-- --------------------------------------------------------

--
-- Table structure for table `report_to_manager`
--

CREATE TABLE `report_to_manager` (
  `id` int(10) NOT NULL,
  `date` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_to_manager`
--

INSERT INTO `report_to_manager` (`id`, `date`, `time`, `description`) VALUES
(1, '2 July , 2021', '09:05 pm', 'My confidential data was leaked. ');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(32) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `request_type` varchar(32) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_name`, `request_type`, `description`, `status`) VALUES
(1, 'pranta2', 'card', 'Need a credit card', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `requests_to_manager`
--

CREATE TABLE `requests_to_manager` (
  `id` int(20) NOT NULL,
  `request_id` int(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests_to_manager`
--

INSERT INTO `requests_to_manager` (`id`, `request_id`, `description`, `status`) VALUES
(1, 1, 'Application for a new card', 'completed'),
(2, 2, 'Request for financial aid', 'completed'),
(3, 3, 'request for a loan', 'completed'),
(1024, 4, 'Request to extend time to pay loan', 'incomplete'),
(2, 5, 'Loan to buy a new car', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(20) NOT NULL,
  `current_balance` decimal(10,2) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `credit_type` varchar(32) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `debit_type` varchar(32) NOT NULL,
  `transactions_date/time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `current_balance`, `credit`, `credit_type`, `debit`, `debit_type`, `transactions_date/time`) VALUES
(1, '20000.00', '10000.00', 'increase', '0.00', 'n/a', '01 Jul , 21 ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `address` varchar(32) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `profile_picture` text NOT NULL,
  `user_type` varchar(32) NOT NULL,
  `account_Status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `address`, `phone_number`, `profile_picture`, `user_type`, `account_Status`) VALUES
(1, 'pranta2', 'mh@gmail.com', 'dhaka', 234234, 'dd', 'Bank manager', ''),
(2, 'setonom2', 'sdfd@cas.com', 'Dhaka', 8801234, 'null', 'manager', ''),
(3, 'mahbub62', 'mh62@gmail.com', 'dhaka', 1234234234, 'null', 'admin', 'active'),
(1024, 'pranta21', 'mhpranta2@gmail.com', 'Munshiganj', 1996027211, 'null', 'bank_manager', 'active'),
(1025, 'pranta22', 'mhpranta21@gmail.com', 'dhaka', 1996027211, 'null', 'bank_manager', 'active'),
(1026, 'admin', 'mhpranta2@aiub.edu', 'dhaka', 1996027211, 'null', 'admin', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banking_stuff`
--
ALTER TABLE `banking_stuff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocked_clients`
--
ALTER TABLE `blocked_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bug_report`
--
ALTER TABLE `bug_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_table`
--
ALTER TABLE `client_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `employee_reporting_info`
--
ALTER TABLE `employee_reporting_info`
  ADD KEY `id` (`id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hired_employee`
--
ALTER TABLE `hired_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `id` (`id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_exchange`
--
ALTER TABLE `money_exchange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem_review`
--
ALTER TABLE `problem_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_to_manager`
--
ALTER TABLE `report_to_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `requests_to_manager`
--
ALTER TABLE `requests_to_manager`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocked_clients`
--
ALTER TABLE `blocked_clients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bug_report`
--
ALTER TABLE `bug_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hired_employee`
--
ALTER TABLE `hired_employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `money_exchange`
--
ALTER TABLE `money_exchange`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `problem_review`
--
ALTER TABLE `problem_review`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_to_manager`
--
ALTER TABLE `report_to_manager`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests_to_manager`
--
ALTER TABLE `requests_to_manager`
  MODIFY `request_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1027;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banking_stuff`
--
ALTER TABLE `banking_stuff`
  ADD CONSTRAINT `banking_stuff_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_table`
--
ALTER TABLE `client_table`
  ADD CONSTRAINT `client_table_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_reporting_info`
--
ALTER TABLE `employee_reporting_info`
  ADD CONSTRAINT `employee_reporting_info_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requests_to_manager`
--
ALTER TABLE `requests_to_manager`
  ADD CONSTRAINT `requests_to_manager_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
