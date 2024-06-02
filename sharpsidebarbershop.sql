-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 06:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharpsidebarbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `appeal`
--

CREATE TABLE `appeal` (
  `appeal_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `violation_description` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `appeal`
--

INSERT INTO `appeal` (`appeal_id`, `user_id`, `violation_description`, `is_read`, `date_added`) VALUES
(1, 2, 'Fake booking si *****. Di ako sinipot sa appointment date. ', 1, '2024-06-02 05:29:00'),
(2, 3, 'PANGIT GUPIT', 1, '2024-06-02 01:50:41'),
(3, 2, 'PANGIT NG GUPIT', 1, '2024-06-02 05:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_details`
--

CREATE TABLE `appointment_details` (
  `appointment_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `barber_id` bigint(11) NOT NULL,
  `status_id` int(11) DEFAULT 2,
  `appointment_deets` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL,
  `appointment_date_time` datetime NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `appointment_details`
--

INSERT INTO `appointment_details` (`appointment_id`, `user_id`, `barber_id`, `status_id`, `appointment_deets`, `total_price`, `appointment_date_time`, `date_added`) VALUES
(1, 4, 1, 1, 'Haircut - Price: 150.00\r\nBeard and Mustache Grooming - Price: 75.00\r\n', 225, '2024-06-08 09:45:00', '2024-06-02 01:26:48'),
(2, 4, 2, 2, 'Hair Tattoo - Price: 105.00\r\n', 105, '2024-06-09 08:45:00', '2024-06-01 19:42:06'),
(3, 5, 2, 2, 'Beard and Mustache Grooming - Price: 150.00\r\n', 150, '2024-06-09 08:00:00', '2024-06-01 19:43:05'),
(4, 4, 1, 2, 'Haircut - Price: 150.00\r\nBeard and Mustache Grooming - Price: 75.00\r\n', 225, '2024-06-29 21:20:00', '2024-06-02 01:19:14'),
(5, 4, 2, 1, 'Haircut - Price: 300.00\r\n', 300, '2024-06-03 13:40:00', '2024-06-02 01:30:12'),
(6, 4, 1, 1, 'Haircut - Price: 150.00\r\n', 150, '2024-06-03 08:30:00', '2024-06-02 05:23:43'),
(7, 4, 1, 5, 'Haircut - Price: 150.00\r\n', 150, '2024-06-01 15:50:00', '2024-06-02 09:41:38'),
(8, 4, 1, 5, 'Haircut - Price: 150.00\r\nBeard and Mustache Grooming - Price: 75.00\r\n', 225, '2024-06-01 18:10:00', '2024-06-02 10:11:59'),
(9, 4, 1, 5, 'Haircut - Price: 150.00\r\n', 150, '2024-06-01 18:23:00', '2024-06-02 10:22:54'),
(10, 4, 1, 5, 'Haircut - Price: 150.00\r\n', 150, '2024-06-02 20:35:00', '2024-06-02 12:35:05'),
(11, 4, 1, 5, 'Haircut - Price: 150.00\r\n', 150, '2024-05-31 10:38:00', '2024-06-02 14:37:44'),
(12, 4, 1, 5, 'Haircut - Price: 150.00\r\n', 150, '2024-05-31 10:41:00', '2024-06-02 14:42:08'),
(13, 4, 1, 5, 'Haircut - Price: 150.00\r\n', 150, '2024-05-31 13:45:00', '2024-06-02 15:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_status`
--

CREATE TABLE `appointment_status` (
  `status_id` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `appointment_status`
--

INSERT INTO `appointment_status` (`status_id`, `status`) VALUES
(1, 'Confirmed'),
(2, 'Pending\r\n'),
(3, 'Rejected'),
(4, 'Cancelled'),
(5, 'Expired');

-- --------------------------------------------------------

--
-- Table structure for table `barber`
--

CREATE TABLE `barber` (
  `barber_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `barber_type` enum('Junior','Senior','Specialist','') NOT NULL,
  `confirmed_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `barber`
--

INSERT INTO `barber` (`barber_id`, `user_id`, `barber_type`, `confirmed_date`) VALUES
(1, 2, 'Junior', '2024-06-01 19:32:39'),
(2, 3, 'Senior', '2024-06-01 19:32:44'),
(3, 6, 'Specialist', '2024-06-01 19:33:58'),
(4, 7, 'Senior', '2024-06-02 05:14:51'),
(5, 8, 'Specialist', '2024-06-02 10:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `feedback_description` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `feedback_description`, `is_read`, `date_added`) VALUES
(1, 4, 'Nice website!\r\n', 1, '2024-06-02 01:53:40'),
(2, 5, 'Talented barbers. Dito ko nakita barbero ko hanggang ngayon!', 0, '2024-06-01 13:45:20'),
(3, 2, 'Sulit ang subscription na binabayad, kasi you can connect to many customers around your area at sa mas malayo pa.', 0, '2024-06-01 19:48:00'),
(4, 4, 'GANDA GUPIT 10/10', 1, '2024-06-02 01:53:40'),
(5, 4, 'MAGANDA AT MALINIS ANG GUPIT', 1, '2024-06-02 05:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` bigint(11) NOT NULL,
  `barber_id` bigint(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `reference_no` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` int(15) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_confirmed` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `barber_id`, `account_name`, `reference_no`, `amount`, `email`, `contact_no`, `date_added`, `is_confirmed`) VALUES
(1, 1, 'Barber One', 'd46s53eg', 499, 'barber@gmail.com', 2147483647, '2024-06-01 19:43:57', 1),
(2, 2, 'Barber Two', 'asg346dfg', 499, 'barber2@gmail.com', 2147483647, '2024-06-01 19:41:36', 0),
(3, 2, 'barber two', 'skjr49jr94', 499, 'barber2@gmail.com', 2147483647, '2024-06-02 01:33:01', 1),
(4, 1, 'barber one', 'asd3463fgdf', 499, 'barber@gmail.com', 2147483647, '2024-06-02 05:25:42', 1),
(5, 1, 'Test Gcash account', 'jfi832ifj394', 499, 'barber2@gmail.com', 2147483647, '2024-06-02 14:18:12', 1),
(6, 1, 'Gcash Account test2', 'fa34td34', 499, 'barber2@gmail.com', 2147483647, '2024-06-02 14:21:26', 1),
(7, 1, 'barber june 02', 'dfjakow4f92rw', 499, 'barber2@gmail.com', 2147483647, '2024-06-02 14:40:51', 1),
(8, 1, 'barber bayad june 02', 'jaiweh824h5ik', 499, 'barber2@gmail.com', 2147483647, '2024-06-02 14:44:39', 1),
(9, 1, 'Barber', 'fjasdkjuw73285', 499, 'barber2@gmail.com', 2147483647, '2024-06-02 15:48:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pricing_junior`
--

CREATE TABLE `pricing_junior` (
  `pricing_junior_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `pricing_junior`
--

INSERT INTO `pricing_junior` (`pricing_junior_id`, `service_id`, `price`, `date_added`) VALUES
(891, 82, 150.00, '2024-06-01 19:36:20'),
(892, 83, 75.00, '2024-06-01 19:36:22'),
(893, 84, 52.50, '2024-06-01 19:36:24'),
(894, 85, 45.00, '2024-06-02 01:24:11'),
(895, 86, 210.00, '2024-06-02 05:19:38'),
(896, 87, 15.00, '2024-06-02 10:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_senior`
--

CREATE TABLE `pricing_senior` (
  `pricing_senior_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `pricing_senior`
--

INSERT INTO `pricing_senior` (`pricing_senior_id`, `service_id`, `price`, `date_added`) VALUES
(888, 82, 300.00, '2024-06-01 19:36:14'),
(889, 83, 150.00, '2024-06-01 19:36:16'),
(890, 84, 105.00, '2024-06-01 19:36:18'),
(891, 85, 90.00, '2024-06-02 01:24:08'),
(892, 86, 420.00, '2024-06-02 05:19:35'),
(893, 87, 30.00, '2024-06-02 10:24:31');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_specialist`
--

CREATE TABLE `pricing_specialist` (
  `pricing_specialist_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `pricing_specialist`
--

INSERT INTO `pricing_specialist` (`pricing_specialist_id`, `service_id`, `price`, `date_added`) VALUES
(1000, 82, 400.00, '2024-06-02 05:18:07'),
(1001, 83, 250.00, '2024-06-01 19:36:11'),
(1002, 84, 175.00, '2024-06-01 19:36:13'),
(1003, 85, 150.00, '2024-06-02 01:24:05'),
(1004, 86, 700.00, '2024-06-02 05:19:23'),
(1005, 87, 50.00, '2024-06-02 10:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` bigint(11) NOT NULL,
  `user_id` bigint(11) NOT NULL,
  `barber_id` bigint(11) NOT NULL,
  `rating_desc` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` bigint(11) NOT NULL,
  `payment_id` bigint(11) NOT NULL,
  `sub_end` varchar(255) NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `payment_id`, `sub_end`, `is_read`, `date_added`) VALUES
(1, 1, '2024-06-01', 1, '2024-06-02 14:34:20'),
(2, 3, '2024-06-01', 1, '2024-06-02 14:46:13'),
(3, 4, 'July 27, 2024', 0, '2024-06-02 05:25:42'),
(4, 5, '2024-07-07', 0, '2024-06-02 14:18:12'),
(5, 6, '2024-07-07', 0, '2024-06-02 14:21:26'),
(6, 7, '2024-07-07', 0, '2024-06-02 14:40:51'),
(7, 8, '2024-06-01', 1, '2024-06-02 14:48:30'),
(8, 9, '2024-06-01', 1, '2024-06-02 15:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_description` varchar(100) NOT NULL,
  `price_cap` decimal(5,2) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_description`, `price_cap`, `date_added`) VALUES
(82, 'Haircut', 400.00, '2024-06-02 05:17:42'),
(83, 'Beard and Mustache Grooming', 250.00, '2024-06-01 19:35:50'),
(84, 'Hair Tattoo', 175.00, '2024-06-01 19:36:06'),
(85, 'hair color', 150.00, '2024-06-02 01:23:58'),
(86, 'dreads', 700.00, '2024-06-02 05:19:09'),
(87, 'Service test', 50.00, '2024-06-02 10:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_information`
--

CREATE TABLE `user_information` (
  `user_id` bigint(255) NOT NULL,
  `user_type` enum('Admin','Barber','Customer') NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `sex` enum('Male','Female') NOT NULL,
  `contact_number` bigint(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user_information`
--

INSERT INTO `user_information` (`user_id`, `user_type`, `status`, `fullname`, `username`, `password`, `age`, `sex`, `contact_number`, `email_address`, `address`, `date_added`) VALUES
(1, 'Admin', 1, 'admin 1', 'admin', 'admin', 21, 'Male', 9569333256, 'admin@gmail.com', 'bahay ni admin', '2024-06-01 19:25:50'),
(2, 'Barber', 3, 'barber one', 'barber', 'barber', 20, 'Male', 9999999999, 'barber@gmail.com', 'barber house', '2024-06-01 19:28:58'),
(3, 'Barber', 3, 'barber two', 'barber2', 'barber2', 20, 'Female', 9898989898, 'barber2@gmail.com', 'bahay ni barber 2', '2024-06-01 19:29:52'),
(4, 'Customer', 1, 'customer one', 'customer', 'customer', 21, 'Female', 6669996666, 'customer@gmail.com', 'bahay ni customer 1', '2024-06-01 19:30:59'),
(5, 'Customer', 1, 'customer2', 'customer2', 'customer2', 22, 'Male', 9876543212, 'customer2@gmail.com', 'bahay ni customer 2', '2024-06-01 19:31:57'),
(6, 'Barber', 2, 'barber3', 'barber3', 'barber3', 22, 'Female', 9112221111, 'barber3@gmail.com', 'bahay ni barber 3', '2024-06-01 19:33:43'),
(7, 'Barber', 2, 'barber4', 'barber4', 'barber4', 23, 'Male', 9445554444, 'barber4@gmail.com', 'sa kanila', '2024-06-01 19:34:52'),
(8, 'Barber', 2, 'Chano Marlon', 'barber5', 'barber5', 20, 'Male', 123456789, 'barber5@gmail.com', 'sugcad', '2024-06-02 01:07:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appeal`
--
ALTER TABLE `appeal`
  ADD PRIMARY KEY (`appeal_id`),
  ADD KEY `appeal_user_info` (`user_id`);

--
-- Indexes for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `appointment_user_information` (`user_id`),
  ADD KEY `appointment_barber` (`barber_id`),
  ADD KEY `appointment_status` (`status_id`);

--
-- Indexes for table `appointment_status`
--
ALTER TABLE `appointment_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `barber`
--
ALTER TABLE `barber`
  ADD PRIMARY KEY (`barber_id`),
  ADD KEY `barber_user_information` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `feedback_user_information` (`user_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_barber` (`barber_id`);

--
-- Indexes for table `pricing_junior`
--
ALTER TABLE `pricing_junior`
  ADD PRIMARY KEY (`pricing_junior_id`),
  ADD KEY `pricingjunior_services` (`service_id`);

--
-- Indexes for table `pricing_senior`
--
ALTER TABLE `pricing_senior`
  ADD PRIMARY KEY (`pricing_senior_id`),
  ADD KEY `pricingsenior_services` (`service_id`);

--
-- Indexes for table `pricing_specialist`
--
ALTER TABLE `pricing_specialist`
  ADD PRIMARY KEY (`pricing_specialist_id`),
  ADD KEY `pricing_services` (`service_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `rating_user_information` (`user_id`),
  ADD KEY `ratings_barber` (`barber_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `report_payment` (`payment_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user_information`
--
ALTER TABLE `user_information`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appeal`
--
ALTER TABLE `appeal`
  MODIFY `appeal_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment_details`
--
ALTER TABLE `appointment_details`
  MODIFY `appointment_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `appointment_status`
--
ALTER TABLE `appointment_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barber`
--
ALTER TABLE `barber`
  MODIFY `barber_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pricing_junior`
--
ALTER TABLE `pricing_junior`
  MODIFY `pricing_junior_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=897;

--
-- AUTO_INCREMENT for table `pricing_senior`
--
ALTER TABLE `pricing_senior`
  MODIFY `pricing_senior_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=894;

--
-- AUTO_INCREMENT for table `pricing_specialist`
--
ALTER TABLE `pricing_specialist`
  MODIFY `pricing_specialist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `user_information`
--
ALTER TABLE `user_information`
  MODIFY `user_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appeal`
--
ALTER TABLE `appeal`
  ADD CONSTRAINT `appeal_user_info` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`);

--
-- Constraints for table `appointment_details`
--
ALTER TABLE `appointment_details`
  ADD CONSTRAINT `appointment_barber` FOREIGN KEY (`barber_id`) REFERENCES `barber` (`barber_id`),
  ADD CONSTRAINT `appointment_status` FOREIGN KEY (`status_id`) REFERENCES `appointment_status` (`status_id`),
  ADD CONSTRAINT `appointment_user_information` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`);

--
-- Constraints for table `barber`
--
ALTER TABLE `barber`
  ADD CONSTRAINT `barber_user_information` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_information` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_barber` FOREIGN KEY (`barber_id`) REFERENCES `barber` (`barber_id`);

--
-- Constraints for table `pricing_junior`
--
ALTER TABLE `pricing_junior`
  ADD CONSTRAINT `pricingjunior_services` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `pricing_senior`
--
ALTER TABLE `pricing_senior`
  ADD CONSTRAINT `pricingsenior_services` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `pricing_specialist`
--
ALTER TABLE `pricing_specialist`
  ADD CONSTRAINT `pricing_services` FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `rating_user_information` FOREIGN KEY (`user_id`) REFERENCES `user_information` (`user_id`),
  ADD CONSTRAINT `ratings_barber` FOREIGN KEY (`barber_id`) REFERENCES `barber` (`barber_id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_payment` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
