-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 08:19 AM
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
-- Database: `task_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CNM` int(11) DEFAULT NULL,
  `CNAME` varchar(255) DEFAULT NULL,
  `CITY` varchar(255) DEFAULT NULL,
  `RATING` int(11) DEFAULT NULL,
  `SNO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CNM`, `CNAME`, `CITY`, `RATING`, `SNO`) VALUES
(201, 'HOFFMAN', 'LONDON', 100, 1001),
(202, 'GIOVANNE', 'ROME', 200, 1003),
(203, 'LIU', 'SANJOSE', 300, 1002),
(204, 'GRASS', 'BARCELONA', 100, 1002),
(206, 'CLEMENS', 'LONDON', 300, 1007),
(207, 'PEREIRA', 'ROME', 100, 1004);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EM_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `SALARY` int(11) DEFAULT NULL,
  `JOINING_DATE` date DEFAULT NULL,
  `DEPARTMENT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EM_ID`, `FIRST_NAME`, `LAST_NAME`, `SALARY`, `JOINING_DATE`, `DEPARTMENT`) VALUES
(1, 'JOHN', 'ABRAHAM', 1000000, '2013-01-01', 'BANKING'),
(2, 'MICHAEL', 'CLERK', 800000, '2013-01-01', 'INSURANCE'),
(3, 'ROY', 'THOMAS', 700000, '2013-02-01', 'BANKING'),
(4, 'TOM', 'JOSE', 600000, '2013-02-01', 'INSURANCE'),
(5, 'JERRY', 'PINTO', 650000, '2013-01-01', 'INSURANCE'),
(6, 'PHILIP', 'MATHEW', 750000, '2013-01-01', 'SERVICES'),
(7, 'TESTNAME1', '123', 650000, '2013-01-01', 'SERVICES'),
(8, 'TESTNAME2', 'LNAME%', 600000, '2013-02-01', 'INSURANCE');

-- --------------------------------------------------------

--
-- Table structure for table `incentives`
--

CREATE TABLE `incentives` (
  `insentive_id` int(11) NOT NULL,
  `EMPLOYEE_REF_ID` int(11) DEFAULT NULL,
  `INCENTIVE_DATE` date DEFAULT NULL,
  `INCENTIVE_AMT` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incentives`
--

INSERT INTO `incentives` (`insentive_id`, `EMPLOYEE_REF_ID`, `INCENTIVE_DATE`, `INCENTIVE_AMT`) VALUES
(1, 1, '2013-02-01', '5000'),
(2, 2, '2013-02-01', '3000'),
(3, 3, '2013-02-01', '4000'),
(4, 1, '2013-01-01', '4500'),
(5, 2, '2013-01-01', '3500');

-- --------------------------------------------------------

--
-- Stand-in structure for view `multiview`
-- (See below for the actual view)
--
CREATE TABLE `multiview` (
`FIRST_NAME` varchar(255)
,`LAST_NAME` varchar(255)
,`SALARY` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `order_1`
--

CREATE TABLE `order_1` (
  `ONM` int(11) DEFAULT NULL,
  `AMT` float DEFAULT NULL,
  `ODE` date DEFAULT NULL,
  `CNM` int(11) DEFAULT NULL,
  `SNO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_1`
--

INSERT INTO `order_1` (`ONM`, `AMT`, `ODE`, `CNM`, `SNO`) VALUES
(3001, 18.69, '1994-10-03', 201, 1007),
(3002, 1900.1, '1994-10-03', 207, 1004),
(3003, 767.19, '1994-10-03', 201, 1001),
(3005, 3005, '1994-10-03', 203, 1002),
(3006, 3006, '1994-10-04', 201, 1007),
(3007, 3007, '1994-10-05', 204, 1002),
(3008, 3008, '1994-10-05', 206, 1001),
(3009, 3009, '1994-10-04', 202, 1003),
(3010, 3010, '1994-10-06', 204, 1002),
(3011, 3011, '1994-10-06', 206, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `sales_person`
--

CREATE TABLE `sales_person` (
  `SNO` int(11) DEFAULT NULL,
  `SNAME` varchar(255) DEFAULT NULL,
  `CITY` varchar(255) DEFAULT NULL,
  `COMM` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_person`
--

INSERT INTO `sales_person` (`SNO`, `SNAME`, `CITY`, `COMM`) VALUES
(1001, 'PEEL', 'LONDON', 0.12),
(1002, 'SERRES', 'SANJOSE', 0.13),
(1003, 'AXELROD', 'NEWYORK', 0.1),
(1004, 'MOTIKA', 'LONDON', 0.11),
(1007, 'RAFKIN', 'BARCELONA', 0.15);

-- --------------------------------------------------------

--
-- Structure for view `multiview`
--
DROP TABLE IF EXISTS `multiview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `multiview`  AS SELECT `employee`.`FIRST_NAME` AS `FIRST_NAME`, `employee`.`LAST_NAME` AS `LAST_NAME`, `employee`.`SALARY` AS `SALARY` FROM `employee``employee`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EM_ID`);

--
-- Indexes for table `incentives`
--
ALTER TABLE `incentives`
  ADD PRIMARY KEY (`insentive_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `incentives`
--
ALTER TABLE `incentives`
  MODIFY `insentive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
