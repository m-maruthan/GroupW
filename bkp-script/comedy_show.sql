-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 04:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comedy_show`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(255) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `event_start_date` date NOT NULL,
  `event_start_time` varchar(255) NOT NULL,
  `event_end_date` date NOT NULL,
  `event_end_time` varchar(255) NOT NULL,
  `event_description` text NOT NULL,
  `event_image` varchar(255) NOT NULL,
  `organizer_name` varchar(255) NOT NULL,
  `refund_policy` varchar(255) NOT NULL,
  `ticket_release_date` date NOT NULL,
  `ticket_release_time` varchar(255) NOT NULL,
  `ticket_last_date` date NOT NULL,
  `ticket_last_time` varchar(255) NOT NULL,
  `privacy` varchar(255) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `event_topic` varchar(255) NOT NULL,
  `remaning_ticket_show` varchar(255) NOT NULL,
  `early_bird_ticket` varchar(255) NOT NULL,
  `early_bird_seat` varchar(255) NOT NULL,
  `early_bird_price` varchar(255) NOT NULL,
  `vip_ticket` varchar(255) NOT NULL,
  `vip_seat` varchar(255) NOT NULL,
  `vip_price` varchar(255) NOT NULL,
  `front_ticket` varchar(255) NOT NULL,
  `front_seat` varchar(255) NOT NULL,
  `front_price` varchar(255) NOT NULL,
  `middle_ticket` varchar(255) NOT NULL,
  `middle_seat` varchar(255) NOT NULL,
  `middle_price` varchar(255) NOT NULL,
  `back_ticket` varchar(255) NOT NULL,
  `back_seat` varchar(255) NOT NULL,
  `back_price` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `Ticket_ID` int(11) NOT NULL DEFAULT '0',
  `Ticket_Type` varchar(50) DEFAULT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `Customer_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`Ticket_ID`, `Ticket_Type`, `Event_ID`, `Customer_ID`) VALUES
(1, 'Standard', 300, 10),
(2, 'Standard', 300, 10),
(3, 'VIP', 300, 5),
(4, 'VIP', 300, 5),
(5, 'Standard', 300, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users_register`
--

CREATE TABLE `users_register` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` int(55) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `users_register`
--
ALTER TABLE `users_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_register`
--
ALTER TABLE `users_register`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
