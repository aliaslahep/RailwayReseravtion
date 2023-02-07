-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 05:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railwayproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `adhaarNo` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `trainNo` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `Age` int(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobileNo` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`adhaarNo`, `email`, `trainNo`, `name`, `Age`, `sex`, `address`, `mobileNo`) VALUES
(238441, 'ali aslah', 12003, 'ijefii', 20, 'male', 'aidhvwbivni', 230948074),
(120012343467, 'thanu@gmail.com', 12001, 'Ali Aslah', 20, 'male', 'kannamanagalam', 77261839103),
(120023845927, 'ammar', 12002, 'ammar', 20, 'male', 'mannapatta', 9892347652);

-- --------------------------------------------------------

--
-- Table structure for table `train_list`
--

CREATE TABLE `train_list` (
  `trainNo` int(6) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Origin` varchar(20) NOT NULL,
  `Destination` varchar(20) NOT NULL,
  `Departure` varchar(10) NOT NULL,
  `travelTime` varchar(10) NOT NULL,
  `Mon` varchar(2) NOT NULL,
  `Tue` varchar(2) NOT NULL,
  `Wed` varchar(2) NOT NULL,
  `Thu` varchar(2) NOT NULL,
  `Fri` varchar(2) NOT NULL,
  `Sat` varchar(2) NOT NULL,
  `Sun` varchar(2) NOT NULL,
  `1A` int(11) NOT NULL,
  `2A` int(11) NOT NULL,
  `3A` int(11) NOT NULL,
  `SL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_list`
--

INSERT INTO `train_list` (`trainNo`, `Name`, `Origin`, `Destination`, `Departure`, `travelTime`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `Sat`, `Sun`, `1A`, `2A`, `3A`, `SL`) VALUES
(12001, 'SHATABDI EXP', 'TIRUVANTHAPURAM', 'KASARGOD', '06:25', '5:30', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 2500, 1000, 500, 250),
(12002, 'RAJDHANI EXPRESS', 'MUMBAI', 'HYDERABAD', '9:55', '08:25', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2500, 1000, 500, 250),
(12003, 'GUJARAT EXPRESS', 'COIMBATURE', 'KOLKATA', '10:35', '66:25', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2500, 1000, 500, 250),
(12004, 'CHENNAI EXPRESS', 'TIRUVANTHAPURAM', 'CHENNAI', '20:05', '5:00', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y', 2500, 1000, 500, 250),
(12005, 'NZM DURONTO', 'TIRUVANTHAPURAM', 'NEW DELHI', '01:20', '36:15', 'N', 'N', 'Y', 'N', 'N', 'N', 'Y', 2500, 1000, 500, 250),
(12006, 'GOA EXPRESS', 'TIRUVANTHAPURAM', 'GOA', '1:35', '08:35', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 2500, 1000, 500, 250),
(12007, 'RAJDHANI EXPRESS', 'TIRUVANTHAPURAM', 'KASARGOD', '16:10', '06:50', 'N', 'N', 'Y', 'Y', 'Y', 'N', 'Y', 200, 500, 300, 600);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `email`, `password`, `gender`, `marital`, `dob`, `mobile`) VALUES
('ali aslah', 'ali@gmail.com', 'aliaslahep', 'male', 'unmarried', '2004-07-31', 7736673500),
('ammar', 'ammar@gmail.com', 'ammar1234', 'male', 'unmarried', '2004-07-31', 9180201200),
('fidha', 'fidha@gmail.com', 'fidha@123', 'female', 'unmarried', '2004-09-25', 7736673500),
('Ihjas', 'ihjas@gmail.com', 'ihjas@123', 'male', 'married', '2000-09-25', 9895673491),
('thanveer', 'thanu@gmail.com', 'thanvi@123', 'male', 'married', '2004-09-25', 7726183910);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`adhaarNo`),
  ADD KEY `trainNo` (`trainNo`);

--
-- Indexes for table `train_list`
--
ALTER TABLE `train_list`
  ADD PRIMARY KEY (`trainNo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`trainNo`) REFERENCES `train_list` (`trainNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
