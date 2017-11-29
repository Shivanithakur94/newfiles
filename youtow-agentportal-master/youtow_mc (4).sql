-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 03:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youtow_mc`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `owner_id`, `agent_id`, `status`) VALUES
(1, 1, 3, 1),
(2, 1, 4, 1),
(3, 1, 5, 1),
(4, 1, 0, 1),
(5, 1, 6, 1),
(6, 1, 7, 1),
(7, 1, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `invoice_date` int(11) NOT NULL,
  `invoice_amount` decimal(10,0) NOT NULL,
  `invoice_office_id` int(11) NOT NULL,
  `invoice_status` varchar(45) NOT NULL DEFAULT 'open',
  `invoice_paymentdate` datetime DEFAULT NULL,
  `invoice_paymentamount` decimal(10,0) DEFAULT NULL,
  `invoice_bankfee` decimal(10,0) DEFAULT NULL,
  `invoice_office_paymentmethod` varchar(45) DEFAULT NULL,
  `invoice_gateway_ref` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoices_items`
--

CREATE TABLE `invoices_items` (
  `inv_items_id` int(11) NOT NULL,
  `billing_id` int(11) DEFAULT NULL,
  `billing_amount` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `members_id` int(11) NOT NULL,
  `members_firstname` varchar(45) DEFAULT NULL,
  `members_lastname` varchar(45) DEFAULT NULL,
  `members_email` varchar(128) DEFAULT NULL,
  `members_address_street` varchar(64) DEFAULT NULL,
  `members_address_suite` varchar(45) DEFAULT NULL,
  `members_address_city` varchar(64) DEFAULT NULL,
  `members_address_state` varchar(45) DEFAULT NULL,
  `members_address_postalcode` varchar(45) DEFAULT NULL,
  `members_phone_mobile` varchar(45) DEFAULT NULL,
  `members_phone_other` varchar(45) DEFAULT NULL,
  `members_other_contact` varchar(128) DEFAULT NULL,
  `members_other_contact_phone` varchar(45) DEFAULT NULL,
  `members_other_contact_email` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`members_id`, `members_firstname`, `members_lastname`, `members_email`, `members_address_street`, `members_address_suite`, `members_address_city`, `members_address_state`, `members_address_postalcode`, `members_phone_mobile`, `members_phone_other`, `members_other_contact`, `members_other_contact_phone`, `members_other_contact_email`) VALUES
(1, 'Levar', '', 'levar.berry@edrivenvue.com', '', '', '', '', '', '15134031210', '', '', '', ''),
(2, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '', '', '', ''),
(3, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(4, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(5, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(6, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(7, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(8, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(9, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(10, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(11, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(12, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(13, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(14, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(15, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(16, 'Levar', 'Berry2', 'levar.berry@edrivenvue.com', '11635 Pippin RD', '', 'Cincinnati', 'OH', '45231', '15134031210', '15134031210', '', '', ''),
(17, 'Robert', 'Berry', 'levar.berry@edrivenent.com', '11635 Pippin RD', '', 'CINCINNATI', 'OH', '45231', '15133181360', '15133181360', '', '', ''),
(18, 'Robert', 'Berry', 'levar.berry@edrivenent.com', '11635 Pippin RD', '', 'CINCINNATI', 'OH', '45231', '15133181360', '15133181360', '', '', ''),
(19, 'Jenaro', 'Roberts', 'jenaro@thewinglab.com', '111 North Marietta Pkwy', 'b101', 'MARIETTA', 'GA', '30060', '7702311078', '7702311078', '', '', ''),
(20, 'Natasha', 'Arrington', 'natasha@youtow.us', '111 N Marietta Pkwy ', '', 'Marietta', 'GA', '30060', '6789076847', '6789076847', '', '', ''),
(21, 'manpreet', 'kaur', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(22, 'manpreet', 'kaur', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(23, 'manpreet', 'kaur', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(24, 'manpreet', 'kaur', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(25, 'ggjg', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'CO', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(26, 'ggjg', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(27, 'ggjg', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'CO', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(28, 'ggjg', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', 'rtfgyrt', '', 'yrtyr@defg.co'),
(29, 'ggjg', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(30, 'ggjg', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(31, 'ggjg', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'CO', '67876', '6786868688', '6786868688', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(32, 'kamal', 'kaur', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(33, 'shobit', 'kaur', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(34, 'shravnn', 'thakur', 'manpreetkaurmaan2@gmail.com', '#301', 'e-298', 'MOHALI', 'AL', '140308', '9418024365', '9418024365', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(35, 'ankush', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'CO', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(36, 'shamil', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'CO', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(37, 'pravan', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'CO', '67876', '6786868688', '6786868688', 'rtfgyrt', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(38, 'sahil', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'CO', '67876', '6786868688', '6786868688', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(39, 'happu', 'ghghgh', 'manpreetkaurmaan2@gmail.com', 'jhkhjkhkhj', '', '786788', 'AL', '67876', '6786868688', '6786868688', 'hgfjhfgjj', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(40, 'angad', 'thakur', 'angad@codenoma.net', '#301', 'e-298', 'MOHALI', 'AL', '140308', '9418024365', '9418024365', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com'),
(41, 'sssssssss', 'thakur', 'angad@codenoma.net', '#301', 'e-298', 'MOHALI', 'AL', '140308', '9418024365', '9418024365', '675868', '6786868688', 'manpreetkaurmaan2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `office_id` int(11) NOT NULL,
  `office_name` varchar(64) NOT NULL,
  `office_address` text NOT NULL,
  `office_website` varchar(255) NOT NULL,
  `office_phone` varchar(24) NOT NULL,
  `office_status` varchar(12) NOT NULL DEFAULT 'active',
  `office_hours` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`office_id`, `office_name`, `office_address`, `office_website`, `office_phone`, `office_status`, `office_hours`) VALUES
(1, ' eDriven VUE', '1234 Main Street\r\nRichmond VA 23145                                                                                                                                                                                                                                                                                                                                                                                                                                    ', 'http://www.edrivenvue.com', '987654324', 'active', 'M,W,F: 8am - 5pm T-Th: 2pm - 7pm');

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `policies_id` int(11) NOT NULL,
  `policies_member_id` int(11) NOT NULL,
  `policies_office_id` int(11) DEFAULT NULL,
  `policies_user_id` int(11) DEFAULT NULL,
  `policies_createdate` datetime DEFAULT NULL,
  `policies_startdate` date DEFAULT NULL,
  `policies_expirationdate` date DEFAULT NULL,
  `policies_yt_plan_id` int(11) DEFAULT NULL,
  `policies_balance` decimal(10,2) DEFAULT NULL,
  `policies_status` varchar(45) NOT NULL DEFAULT 'active',
  `policies_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`policies_id`, `policies_member_id`, `policies_office_id`, `policies_user_id`, `policies_createdate`, `policies_startdate`, `policies_expirationdate`, `policies_yt_plan_id`, `policies_balance`, `policies_status`, `policies_owner`) VALUES
(1, 11, 1, 1, '2017-10-15 21:17:43', '2017-10-15', '2015-02-10', 1, '12.95', 'Active', 1),
(2, 12, 1, 1, '2017-10-15 21:24:44', '2017-10-15', '2018-10-15', 1, '12.95', 'Active', 1),
(3, 13, 1, 1, '2017-10-15 21:24:58', '2017-10-15', '2018-10-15', 1, '12.95', 'Active', 1),
(4, 14, 1, 1, '2017-10-15 21:25:36', '2017-10-15', '2018-10-15', 1, '12.95', 'Active', 1),
(5, 15, 1, 1, '2017-10-15 21:26:02', '2017-10-15', '2018-10-15', 1, '12.95', 'Active', 1),
(6, 16, 1, 1, '2017-10-15 21:26:35', '2017-10-15', '2018-10-15', 1, '12.95', 'Active', 1),
(7, 17, 1, 1, '2017-10-15 21:28:29', '2017-10-15', '2018-10-15', 1, '12.95', 'Active', 1),
(8, 18, 1, 1, '2017-10-15 21:30:54', '2017-10-15', '2018-10-15', 1, '12.95', 'Active', 1),
(9, 19, 1, 1, '2017-11-10 21:08:23', '2017-11-10', '2018-11-10', 1, '12.95', 'Active', 1),
(10, 20, 1, 2, '2017-11-15 16:04:41', '2017-11-15', '2018-11-15', 1, '12.95', 'Active', 0),
(11, 21, 1, 1, '2017-11-20 16:20:25', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(12, 22, 1, 1, '2017-11-20 16:21:42', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(13, 23, 1, 1, '2017-11-20 16:50:32', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(14, 24, 1, 1, '2017-11-20 16:52:13', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(15, 25, 1, 1, '2017-11-20 16:56:55', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(16, 26, 1, 1, '2017-11-20 17:00:26', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(17, 27, 1, 1, '2017-11-20 17:02:16', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(18, 28, 1, 1, '2017-11-20 17:02:56', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(19, 29, 1, 1, '2017-11-20 17:04:06', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(20, 30, 1, 1, '2017-11-20 17:05:39', '2017-11-20', '2018-11-20', 1, '12.95', 'Active', 1),
(21, 32, 1, 1, '2017-11-20 18:56:58', '2017-11-20', '2017-11-20', 8, '49.95', 'Active', 1),
(22, 33, 1, 1, '2017-11-20 19:03:23', '2017-11-20', '2018-05-20', 1, '9.95', 'Active', 1),
(23, 34, 1, 2, '2017-11-21 09:57:35', '2017-11-21', '2018-05-21', 4, '39.95', 'Active', 0),
(24, 35, 1, 3, '2017-11-21 12:30:33', '2017-04-21', '2017-11-20', 3, '29.95', 'Active', 1),
(25, 36, 1, 3, '2017-11-21 13:31:37', '2017-11-21', '2018-11-21', 7, '39.95', 'Active', 1),
(26, 37, 1, 1, '2017-11-21 14:39:38', '2017-11-21', '2018-11-21', 7, '39.95', 'Active', 0),
(27, 38, 1, 1, '2017-11-21 14:40:42', '2017-11-21', '2018-11-21', 5, '19.95', 'Active', 0),
(28, 39, 1, 2, '2017-11-21 14:47:24', '2017-11-21', '2018-11-21', 5, '19.95', 'Active', 0),
(29, 40, 1, 1, '2017-11-22 12:17:22', '2017-11-22', '2018-11-22', 7, '39.95', 'Active', 0),
(30, 41, 1, 1, '2017-11-22 16:38:00', '2017-11-22', '2018-11-22', 8, '49.95', 'Active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `office_id` varchar(255) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_status` varchar(12) NOT NULL DEFAULT 'active',
  `user_phone` varchar(28) DEFAULT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_zip` varchar(255) NOT NULL,
  `user_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `office_id`, `user_name`, `user_password`, `user_email`, `user_status`, `user_phone`, `user_address`, `user_state`, `user_city`, `user_zip`, `user_register`) VALUES
(1, '1', 'Levar Berry', 'cc03e747a6afbbcbf8be7668acfebee5', 'levar.berry@edrivenvue.com', 'active', '6786868688', '', '', '', '6757', '2017-11-22'),
(2, '1', 'Natasha Arrington', 'cc03e747a6afbbcbf8be7668acfebee5', 'natasha@youtow.us', 'active', NULL, '', '', '', '', '2017-11-22'),
(3, '1', 'manpreet', '202cb962ac59075b964b07152d234b70', 'manpreet@codenomad.net', 'active', '6786868688', '', '', '', '', '2017-11-22'),
(4, '1', 'shivam', '202cb962ac59075b964b07152d234b70', 'shivam@codenomad.net', 'active', '6786868688', 'california', 'new york', 'Alabama', '67876', '0000-00-00'),
(5, '1', 'shobit', '202cb962ac59075b964b07152d234b70', 'sourav@codenoma.net', 'active', '6786868688', 'jhkhjkhkhj', '786788', 'AL', '67876', '0000-00-00'),
(6, '1', 'ggjg tedtrytr', '202cb962ac59075b964b07152d234b70', 'manprfgeet@codenomad.net', 'active', '6786868688', 'jhkhjkhkhj', '786788', 'CO', '67876', '0000-00-00'),
(7, '1', 'kamal', '202cb962ac59075b964b07152d234b70', 'fsfs@sdgdf.hj', 'active', '6786868688', 'jhkhjkhkhj', '786788', 'AL', '67876', '2017-11-22'),
(8, '1', 'shivam', '202cb962ac59075b964b07152d234b70', 'ds@rgdr.ghj', 'active', '6786868688', 'california', 'new york', 'Alabama', '67876', '2017-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `yt_plans`
--

CREATE TABLE `yt_plans` (
  `yt_plans_id` int(11) NOT NULL,
  `yt_plans_name` varchar(45) DEFAULT NULL,
  `yt_plans_description` varchar(45) DEFAULT NULL,
  `yt_plans_term` int(11) NOT NULL,
  `yt_plans_status` varchar(45) DEFAULT 'Active',
  `yt_plans_office_id` int(11) DEFAULT '0',
  `yt_plans_amount` decimal(10,2) DEFAULT NULL,
  `plans_ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yt_plans`
--

INSERT INTO `yt_plans` (`yt_plans_id`, `yt_plans_name`, `yt_plans_description`, `yt_plans_term`, `yt_plans_status`, `yt_plans_office_id`, `yt_plans_amount`, `plans_ids`) VALUES
(1, 'Plan A', 'This Plan is for Testing Purposes Only', 6, 'Active', 0, '9.95', 1),
(2, 'Plan B', 'Testing', 6, 'Active', 0, '19.95', 2),
(3, 'Plan C', 'testing', 6, 'Active', 0, '29.95', 3),
(4, 'Plan D', 'testing', 6, 'Active', 0, '39.95', 4),
(5, 'Plan A', 'testing', 12, 'Active', 0, '19.95', 1),
(6, 'Plan B', 'Testing', 12, 'Active', 0, '29.95', 2),
(7, 'Plan C', 'testing', 12, 'Active', 0, '39.95', 3),
(8, 'Plan D', 'Testing', 12, 'Active', 0, '49.95', 4);

-- --------------------------------------------------------

--
-- Table structure for table `yt_plans_description`
--

CREATE TABLE `yt_plans_description` (
  `id` int(11) NOT NULL,
  `yt_plan_id` int(11) NOT NULL,
  `yt_plan_title` varchar(255) NOT NULL,
  `yt_plan_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yt_plans_description`
--

INSERT INTO `yt_plans_description` (`id`, `yt_plan_id`, `yt_plan_title`, `yt_plan_description`) VALUES
(1, 1, 'Towing', 'Up to 10 miles at no out of pocket expense to you. Additional mileage is available and will be negotiated prior to sending out a service vehicle. Additional mileage is to be paid by You directly via the app.'),
(2, 1, 'Mechanical First Aid', 'Any minor adjustment that a dispatched service provider might perform to allow Your Covered vehicle to proceed safely under its own power.'),
(3, 1, 'Tire Service', 'Includes changing a flat tire with Your good spare.'),
(4, 1, 'Battery Service', 'Jumpstart or boost a dead battery.'),
(5, 1, 'Delivery Service', 'Including gas, water, oil or any supplies necessary to send Your Covered Vehicle on its way. You are responsible for the actual cost of fluid and/or supplies delivered.'),
(6, 1, 'Lockout Services\r\n', 'we will send a locksmith if you are accidentally locked out of Your Covered Vehicle. Access to passenger compartment only.'),
(7, 2, 'Towing', 'Up to 20 miles at no out of pocket expense to you. Additional mileage is available and will be negotiated prior to sending out a service vehicle. Additional mileage is to be paid by You via the YouTow App.'),
(8, 2, 'Mechanical First Aid', 'Any minor adjustment that a dispatched service provider might perform to allow Your Covered vehicle to proceed safely under its own power.'),
(9, 2, 'Tire Service\r\n', 'Includes changing a flat tire with Your good spare.'),
(10, 2, 'Battery Service', 'Jumpstart or boost a dead battery.'),
(11, 2, 'Delivery Service', 'Including gas, water, oil or any supplies necessary to send Your Covered Vehicle on its way. You are responsible for the actual cost of fluid and/or supplies delivered.'),
(12, 2, 'Lockout Services', 'We will send a locksmith if You are accidentally locked out of Your Covered Vehicle. Access to passenger compartment only.'),
(13, 3, 'Towing', 'Up to 30 miles at no out of pocket expense to you. Additional mileage is available and will be negotiated prior to sending out a service vehicle. Additional mileage is to be paid by You via the YouTow App.'),
(14, 3, 'Mechanical First Aid', 'Any minor adjustment that a dispatched service provider might perform to allow Your Covered vehicle to proceed safely under its own power.'),
(15, 3, 'Tire Service', 'Includes changing a flat tire with Your good spare.'),
(16, 3, 'Battery Service', 'Jumpstart or boost a dead battery.'),
(17, 3, 'Delivery Service', 'Including gas, water, oil or any supplies necessary to send Your Covered Vehicle on its way. You are responsible for the actual cost of fluid and/or supplies delivered.'),
(18, 3, 'Lockout Services', 'We will send a locksmith if You are accidentally locked out of Your Covered Vehicle. Access to passenger compartment only.'),
(19, 4, 'Towing', 'Up to 50 miles at no out of pocket expense to you. Additional mileage is available and will be negotiated prior to sending out a service vehicle. Additional mileage is to be paid by You via the YouTow App.'),
(20, 4, 'Mechanical First Aid', 'Any minor adjustment that a dispatched service provider might perform to allow Your Covered vehicle to proceed safely under its own power.'),
(21, 4, 'Tire Service', 'Includes changing a flat tire with Your good spare.'),
(22, 4, 'Battery Service\r\n', 'Jumpstart or boost a dead battery.'),
(23, 4, 'Delivery Service', 'Including gas, water, oil or any supplies necessary to send Your Covered Vehicle on its way. You are responsible for the actual cost of fluid and/or supplies delivered.'),
(24, 4, 'Lockout Services', 'We will send a locksmith if You are accidentally locked out of Your Covered Vehicle. Access to passenger compartment only.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `invoices_items`
--
ALTER TABLE `invoices_items`
  ADD PRIMARY KEY (`inv_items_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`members_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`policies_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `yt_plans`
--
ALTER TABLE `yt_plans`
  ADD PRIMARY KEY (`yt_plans_id`);

--
-- Indexes for table `yt_plans_description`
--
ALTER TABLE `yt_plans_description`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoices_items`
--
ALTER TABLE `invoices_items`
  MODIFY `inv_items_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `policies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `yt_plans`
--
ALTER TABLE `yt_plans`
  MODIFY `yt_plans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `yt_plans_description`
--
ALTER TABLE `yt_plans_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
