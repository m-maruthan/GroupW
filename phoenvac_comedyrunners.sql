-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 19, 2017 at 04:05 PM
-- Server version: 5.6.30-76.3-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phoenvac_comedyrunners`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `event_start_date` date DEFAULT NULL,
  `event_start_time` varchar(255) DEFAULT NULL,
  `event_end_date` date DEFAULT NULL,
  `event_end_time` varchar(255) DEFAULT NULL,
  `event_description` text,
  `event_image` varchar(255) DEFAULT NULL,
  `organizer_name` varchar(255) DEFAULT NULL,
  `refund_policy` varchar(255) DEFAULT NULL,
  `ticket_release_date` date DEFAULT NULL,
  `ticket_release_time` varchar(255) DEFAULT NULL,
  `ticket_last_date` date DEFAULT NULL,
  `ticket_last_time` varchar(255) DEFAULT NULL,
  `privacy` varchar(255) DEFAULT NULL,
  `event_type` varchar(255) DEFAULT NULL,
  `event_topic` varchar(255) DEFAULT NULL,
  `remaning_ticket_show` varchar(255) DEFAULT NULL,
  `early_bird_ticket` varchar(255) DEFAULT NULL,
  `early_bird_seat` varchar(255) DEFAULT NULL,
  `early_bird_price` varchar(255) DEFAULT NULL,
  `vip_ticket` varchar(255) DEFAULT NULL,
  `vip_seat` varchar(255) DEFAULT NULL,
  `vip_price` varchar(255) DEFAULT NULL,
  `front_ticket` varchar(255) DEFAULT NULL,
  `front_seat` varchar(255) DEFAULT NULL,
  `front_price` varchar(255) DEFAULT NULL,
  `middle_ticket` varchar(255) DEFAULT NULL,
  `middle_seat` varchar(255) DEFAULT NULL,
  `middle_price` varchar(255) DEFAULT NULL,
  `back_ticket` varchar(255) DEFAULT NULL,
  `back_seat` varchar(255) DEFAULT NULL,
  `back_price` varchar(255) DEFAULT NULL,
  `status` varchar(55) NOT NULL DEFAULT '0',
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `user_id`, `event_title`, `location`, `event_start_date`, `event_start_time`, `event_end_date`, `event_end_time`, `event_description`, `event_image`, `organizer_name`, `refund_policy`, `ticket_release_date`, `ticket_release_time`, `ticket_last_date`, `ticket_last_time`, `privacy`, `event_type`, `event_topic`, `remaning_ticket_show`, `early_bird_ticket`, `early_bird_seat`, `early_bird_price`, `vip_ticket`, `vip_seat`, `vip_price`, `front_ticket`, `front_seat`, `front_price`, `middle_ticket`, `middle_seat`, `middle_price`, `back_ticket`, `back_seat`, `back_price`, `status`) VALUES
(1, '15', 'Russell Howard good news', 'London', '2017-12-05', '12:21', '2017-12-31', '12:12', 'King Hippo Comedy Show and Afterparty\r\nHave a laugh and a dance at this free comedy show in the East Village. For the \r\n', '5a391741b8c82com-img-1.jpg', 'Russell Howard ', '1 day: Attendees can refund up to 1 day before event.', '2017-12-22', '', '2017-12-24', '', 'Available', 'comedy', 'comedy', 'Privacy', 'Early Bird', '11', '11', 'VIP', '11', '11', 'Front', '11', '11', 'Middle', '11', '11', 'Back', '11', '11', '0'),
(2, '15', 'Jimmy Caar at the Appollo', 'London', '2017-12-14', '22:22', '2017-12-23', '22:22', 'Dancing With the Star Stuffs\r\nAli Levin and Alyssa Rossman-Rorman host this totally bananas dance competition..', '5a3917e8eeca8com-img-2.jpg', 'Jimmy Caar', '1 day: Attendees can refund up to 1 day before event.', '2017-12-14', '', '2017-12-24', '', 'Available', 'Comedy', 'Comedy', 'Privacy', 'Early Bird', '22', '22', 'VIP', '22', '22', 'Front', '22', '22', 'Middle', '22', '22', 'Back', '22', '22', '0'),
(3, '15', 'Dark Humor with Kevin Hart', 'London', '2017-12-23', '11:11', '2017-12-24', '11:11', 'King Hippo Comedy Show and Afterparty\r\nHave a laugh and a dance at this free comedy show in the East Village. \r\n\r\n', '5a3918a415814com-img-4.jpg', 'Russell Howard', '7 day: Attendees can refund up to 7 days before event.', '2017-12-15', '04:44', '2017-12-31', '04:44', 'Privacy', 'Comedy', 'Comedy', 'Privacy', 'Early Bird', '33', '11', 'VIP', '33', '11', 'Front', '33', '11', 'Middle', '33', '11', 'Back', '33', '11', '0'),
(4, '15', 'Lee evans comedy roadshow', 'London', '2017-12-05', '05:55', '2017-12-31', '05:55', 'Comedy at Stonewall\r\nThe lovely duo of Chrissie Mayr and Oscar Aydin host this monthly showcase of dope queer and queer-appealing', '5a3919da42684com-img-3.jpg', 'Lee evans', '7 day: Attendees can refund up to 7 days before event.', '2017-12-04', '04:44', '2017-12-31', '05:55', 'Available', 'Comedy', 'Comedy', 'Privacy', 'Early Bird', '55', '55', 'VIP', '55', '55', 'Front', '56', '56', 'Middle', '66', '66', 'Back', '77', '77', '0'),
(5, '15', 'Rave', 'London', '0000-00-00', '18:00', '0000-00-00', '22:00', 'hottest rave in London', '5a3925216d457EDMcrowd.jpg', 'Sarita', '1 day: Attendees can refund up to 1 day before event.', '0000-00-00', '12:00', '0000-00-00', '00:00', 'Available', 'Dancing', 'Comedy', 'Privacy', 'Early Bird', '100', '0.00', 'VIP', '20', '0.00', 'Null', '', '', 'Null', '', '', 'Null', '', '', '0'),
(6, '8', 'russell peters', 'wembley arena', '2017-12-23', '20:00', '2017-12-23', '23:00', 'Funniest India ', '5a392f4209135RussellPeters08TIFF.jpg', 'Sani', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', 'Early Bird', '50', '10.00', 'Null', '', '', 'Null', '', '', 'Null', '', '', 'Null', '', '', '0'),
(7, '8', 'micheal', 'westernise hall', '2017-12-27', '04:02', '2017-12-28', '05:03', 'laughs', '5a3930cad69a0', 'sani', '1 day: Attendees can refund up to 1 day before event.', '2017-12-19', '12:00', '2017-12-26', '12:00', 'Available', 'stand up', 'Comedy', 'Privacy', 'Early Bird', '100', '10.00', 'Null', '', '', 'Null', '', '', 'Null', '', '', 'Null', '', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Feedback_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Participant_ID` int(11) NOT NULL,
  `Rating` int(1) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Feedback_Date` date NOT NULL,
  `eventID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailno` varchar(255) NOT NULL,
  `phoneno` varchar(15) NOT NULL,
  PRIMARY KEY (`Feedback_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Participant_ID`, `Rating`, `Description`, `Feedback_Date`, `eventID`, `name`, `emailno`, `phoneno`) VALUES
(1, 15, 5, 'Thanks good event', '2017-12-19', 1, 'Sarita', 'sarita@gmail.com', '1918171615');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `tech` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fname`, `lname`, `tech`, `email`, `address`) VALUES
(147, 'Nilesh', 'Shirgave', 'wordpress', 'nilesh@domain.com', 'Kolhapur'),
(148, 'Sandip', 'Patil', '.net', 'sandip@domain.com', 'Kolhapur'),
(149, 'Amit', 'Patil', 'php', 'amit@domain.com', 'Karad');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE IF NOT EXISTS `payment_info` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `oderid` varchar(255) NOT NULL,
  `countrty` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `event_id` varchar(11) NOT NULL,
  `qty1` varchar(255) NOT NULL,
  `qty2` varchar(11) NOT NULL,
  `qty3` varchar(11) NOT NULL,
  `qty4` varchar(11) NOT NULL,
  `qty5` varchar(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `price1` varchar(11) NOT NULL,
  `price2` varchar(11) NOT NULL,
  `price3` varchar(11) NOT NULL,
  `price4` varchar(11) NOT NULL,
  `price5` varchar(11) NOT NULL,
  `ticket_typ1` varchar(255) NOT NULL,
  `ticket_typ2` varchar(255) NOT NULL,
  `ticket_typ3` varchar(255) NOT NULL,
  `ticket_typ4` varchar(255) NOT NULL,
  `ticket_typ5` varchar(255) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`pay_id`, `oderid`, `countrty`, `address`, `city`, `postal_code`, `mob`, `email`, `user_id`, `price`, `event_id`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `date`, `price1`, `price2`, `price3`, `price4`, `price5`, `ticket_typ1`, `ticket_typ2`, `ticket_typ3`, `ticket_typ4`, `ticket_typ5`) VALUES
(1, 'OR5a392cbfd780d', 'Select Country', 'yjyj', 'ytjytj', 'jj', '+44 37373737', 'sanijr@live.co.uk', '8', '22', '3', '2', '', '', '', '', '2017-12-19', '11', '11', '11', '11', '11', 'Early Bird', 'VIP', 'Front', 'Middle', 'Back'),
(2, 'OR5a393194b0fdc', 'Select Country', '123 hello road', 'london', 'fg6 f78', '1122334455', 'sarita@gmail.com', '15', '10', '7', '1', '', '', '', '', '2017-12-19', '10.00', '', '', '', '', 'Early Bird', '', '', '', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `Ticket_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ticket_Type` varchar(50) DEFAULT NULL,
  `Event_ID` int(11) DEFAULT NULL,
  `Customer_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Ticket_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
-- Table structure for table `users_cards`
--

CREATE TABLE IF NOT EXISTS `users_cards` (
  `cardid` int(11) NOT NULL AUTO_INCREMENT,
  `nameoncard` varchar(255) NOT NULL,
  `cardnumber` bigint(20) NOT NULL,
  `expirymonth` int(2) NOT NULL,
  `expiryyear` int(4) NOT NULL,
  `cardcvv` int(4) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`cardid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users_cards`
--

INSERT INTO `users_cards` (`cardid`, `nameoncard`, `cardnumber`, `expirymonth`, `expiryyear`, `cardcvv`, `users_id`) VALUES
(5, 'Vivek Kumar', 4242424242424141, 11, 2021, 222, 16),
(6, 'Sarita', 4242424242424242, 11, 2021, 123, 15),
(7, 'Pavan', 4242424242424242, 10, 2018, 333, 17);

-- --------------------------------------------------------

--
-- Table structure for table `users_register`
--

CREATE TABLE IF NOT EXISTS `users_register` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `status` int(55) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `users_register`
--

INSERT INTO `users_register` (`user_id`, `first_name`, `last_name`, `email`, `password`, `dob`, `contact`, `address1`, `address2`, `city`, `Country`, `postcode`, `status`) VALUES
(1, 'Pawan', 'yadav', 'pawanshrinkcomcs@gmail.com', '123', '1990/08/23', '1 11111111111111', '', '', '', '', '', 0),
(2, 'mohan', 'yadav', 'mohan@gmail.com', '12345', '2007-06-20', '3 9806573510', '', '', '', '', '', 0),
(3, 'aadi', 'joshi', 'aadi@gmail.com', '12345', '2017-12-12', '+44 1234123233', '', '', '', '', '', 0),
(4, 'Jay', 'Kayy', 'J.K@gmail.com', '123456789a', '12/03/94', '+44 75637294', '', '', '', '', '', 0),
(5, 'Jack', 'James', 'J.J@gmail.com', '123456789', '12/11/12', '+44 767839849', '', '', '', '', '', 0),
(6, 'srashti', 'gupta', 'srashtigupta@gmail.com', '12345@123', '1992-12-12', '+44 12345671', '', '', '', '', '', 0),
(7, 'zeeshan', 'janjooa', 'zeeshan_2@hotmail.co.uk', 'zeeshan', '1995-12-27', '+44 7784217511', '', '', '', '', '', 0),
(8, 'sani', 'Rob', 'sanijr@live.co.uk', '1509', '2016-03-18', '+44 37373737', '', '', '', '', '', 0),
(9, 'haridas', 'pramanik', 'puja@gmail.com', '123456', '2017-12-14', '+44 7687059173', '', '', '', '', '', 0),
(10, 'haridas', 'pramanik', 'haridaspramanik@gmail.com', '123', '2017-12-12', '+44 7687059173', '', '', '', '', '', 0),
(11, 'Hatty', 'Jo', 'H.J@hotmail.com', 'aaabbbccc', '09/02/1990', '+44 7925567428', '', '', '', '', '', 0),
(12, 'Saikat', 'Kundu', 'saikat@gmail.com', '123456', '2017-12-16', '+44 8745912345', '', '', '', '', '', 0),
(13, 'sunny', 'paji', 'sunnyji@gmail.com', '123456', '1992-02-23', '+44 9876543210', '', '', '', '', '', 0),
(14, 'Zeeshan ', 'Janjiia', 'zeeshan@hotmail.co.uk', 'zeeshan', '1994-12-16', '+44 07784217511', '', '', '', '', '', 0),
(15, 'Sarita', 'Mahar', 'sarita@gmail.com', 'sarita123', '2000-11-12', '1122334455', '', '', '', '', '', 0),
(16, 'Vivek', 'Kumar', 'vivek@gmail.com', 'vivek', '1918-11-08', '1 1 +44 11111111', 'New Delhi', 'delhi', 'delhi', 'INDIA', '110019', 0),
(17, 'Pavan', 'kumar', 'pavan@gmail.com', 'pavan', '2000-11-11', '1 +44 11111', 'Ald', 'NYN', 'ALD', 'INDIA', '110011', 0),
(18, 'sarita1', 'mahar', 'sarita1@gmail.com', 'sarita', '2017-12-21', '+44 88888888', '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
