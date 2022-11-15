-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 07:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_doctor`
--

CREATE TABLE `bloodbank_doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_firstname` varchar(255) NOT NULL,
  `doctor_lastname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank_doctor`
--

INSERT INTO `bloodbank_doctor` (`doctor_id`, `doctor_firstname`, `doctor_lastname`, `city`, `appointment_date`) VALUES
(1, 'suresh', 'patel', 'rajkot', '2022-11-05'),
(2, 'hitesh', '', '', '0000-00-00'),
(3, 'sagar', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_donor`
--

CREATE TABLE `bloodbank_donor` (
  `donor_id` int(11) NOT NULL,
  `donor_firstname` varchar(255) NOT NULL,
  `donor_lastname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank_donor`
--

INSERT INTO `bloodbank_donor` (`donor_id`, `donor_firstname`, `donor_lastname`, `mobile`, `city`, `state`) VALUES
(1, 'ramesh', 'patel', '98789 76543', 'surat', 'gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_servant`
--

CREATE TABLE `bloodbank_servant` (
  `servant_id` int(11) NOT NULL,
  `servant_name` varchar(255) NOT NULL,
  `servant_mobile` varchar(255) NOT NULL,
  `servant_dept` varchar(255) NOT NULL,
  `servant_sallary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank_servant`
--

INSERT INTO `bloodbank_servant` (`servant_id`, `servant_name`, `servant_mobile`, `servant_dept`, `servant_sallary`) VALUES
(1, 'rajesh', '98789 23234', 'dental', '15000'),
(2, 'suryakumar', '98907 12670', 'MD', '22000'),
(4, 'umesh', '76564 12390', 'MD', '25000'),
(5, 'hitesh', '98980 45672', 'dental', '27000');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank_user`
--

CREATE TABLE `bloodbank_user` (
  `user_id` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_pswd` varchar(255) DEFAULT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `state_name` varchar(255) DEFAULT NULL,
  `country_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank_user`
--

INSERT INTO `bloodbank_user` (`user_id`, `password`, `confirm_pswd`, `city_name`, `state_name`, `country_name`) VALUES
(1, 'ram213', 'ram123', 'rajkot', 'gujarat', 'india'),
(2, 'k156', 'k156', 'lucknow', 'uttar pradesh', 'india');

-- --------------------------------------------------------

--
-- Stand-in structure for view `multiview_servant`
-- (See below for the actual view)
--
CREATE TABLE `multiview_servant` (
`servant_id` int(11)
,`servant_name` varchar(255)
,`servant_mobile` varchar(255)
,`servant_sallary` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `servant_city`
--

CREATE TABLE `servant_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servant_city`
--

INSERT INTO `servant_city` (`city_id`, `city_name`, `country_id`, `state_id`) VALUES
(1, 'rajkot', 1, 1),
(2, 'southwales', 2, 2),
(3, 'lucknow', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `servant_country`
--

CREATE TABLE `servant_country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servant_country`
--

INSERT INTO `servant_country` (`country_id`, `country_name`) VALUES
(1, 'india'),
(2, 'uk'),
(3, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `servant_state`
--

CREATE TABLE `servant_state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servant_state`
--

INSERT INTO `servant_state` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'gujarat', 1),
(2, 'london', 2),
(3, 'uttarpradesh', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_doctor`
-- (See below for the actual view)
--
CREATE TABLE `view_doctor` (
`doctor_id` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_donor`
-- (See below for the actual view)
--
CREATE TABLE `view_donor` (
`donor_firstname` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `multiview_servant`
--
DROP TABLE IF EXISTS `multiview_servant`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `multiview_servant`  AS SELECT `bloodbank_servant`.`servant_id` AS `servant_id`, `bloodbank_servant`.`servant_name` AS `servant_name`, `bloodbank_servant`.`servant_mobile` AS `servant_mobile`, `bloodbank_servant`.`servant_sallary` AS `servant_sallary` FROM `bloodbank_servant``bloodbank_servant`  ;

-- --------------------------------------------------------

--
-- Structure for view `view_doctor`
--
DROP TABLE IF EXISTS `view_doctor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_doctor`  AS SELECT `bloodbank_doctor`.`doctor_id` AS `doctor_id` FROM `bloodbank_doctor` WHERE `bloodbank_doctor`.`doctor_id` = 11  ;

-- --------------------------------------------------------

--
-- Structure for view `view_donor`
--
DROP TABLE IF EXISTS `view_donor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_donor`  AS SELECT `bloodbank_donor`.`donor_firstname` AS `donor_firstname` FROM `bloodbank_donor` WHERE `bloodbank_donor`.`donor_firstname` = 'ramesh''ramesh'  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank_doctor`
--
ALTER TABLE `bloodbank_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `bloodbank_donor`
--
ALTER TABLE `bloodbank_donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `bloodbank_servant`
--
ALTER TABLE `bloodbank_servant`
  ADD PRIMARY KEY (`servant_id`),
  ADD UNIQUE KEY `servant_mobile` (`servant_mobile`),
  ADD KEY `servant_index` (`servant_id`,`servant_name`,`servant_mobile`,`servant_dept`);

--
-- Indexes for table `bloodbank_user`
--
ALTER TABLE `bloodbank_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `servant_city`
--
ALTER TABLE `servant_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `servant_country`
--
ALTER TABLE `servant_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `servant_state`
--
ALTER TABLE `servant_state`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbank_doctor`
--
ALTER TABLE `bloodbank_doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bloodbank_donor`
--
ALTER TABLE `bloodbank_donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloodbank_servant`
--
ALTER TABLE `bloodbank_servant`
  MODIFY `servant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bloodbank_user`
--
ALTER TABLE `bloodbank_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `servant_city`
--
ALTER TABLE `servant_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servant_country`
--
ALTER TABLE `servant_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servant_state`
--
ALTER TABLE `servant_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
