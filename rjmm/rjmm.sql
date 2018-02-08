-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 06:22 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rjmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acct_id` decimal(5,0) NOT NULL,
  `bank_id` decimal(5,0) NOT NULL,
  `acct_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acct_id`, `bank_id`, `acct_name`) VALUES
('2880', '288', 'RAM-780'),
('2881', '288', 'RZA-781'),
('8960', '896', 'ABN-524'),
('10008', '1000', 'FZA-965'),
('16910', '1691', 'DYG-283');

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE `allowances` (
  `pg_id` decimal(5,0) NOT NULL,
  `over_time` decimal(5,0) NOT NULL,
  `houserent` decimal(5,0) NOT NULL,
  `fuel` decimal(5,0) NOT NULL,
  `medical` decimal(5,0) NOT NULL,
  `vehicle` decimal(5,0) NOT NULL,
  `utility` decimal(5,0) NOT NULL,
  `entertainment` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`pg_id`, `over_time`, `houserent`, `fuel`, `medical`, `vehicle`, `utility`, `entertainment`) VALUES
('3076', '200', '5000', '1000', '3200', '700', '2000', '400'),
('4058', '600', '4000', '5000', '6600', '600', '1000', '600'),
('5377', '900', '8000', '7000', '5200', '900', '8000', '800'),
('9086', '700', '7000', '2000', '4300', '750', '4000', '500');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `bank_id` decimal(5,0) NOT NULL,
  `bank_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`) VALUES
('288', 'UBL'),
('896', 'HBL'),
('1000', 'MCB'),
('1691', 'NBP');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE `deductions` (
  `ded_id` decimal(5,0) NOT NULL,
  `incometax` decimal(5,0) NOT NULL,
  `gpfund` decimal(5,0) NOT NULL,
  `pg_id` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deduction_leaves`
--

CREATE TABLE `deduction_leaves` (
  `ded_id` decimal(5,0) NOT NULL,
  `sick` decimal(5,0) NOT NULL,
  `casual` decimal(5,0) NOT NULL,
  `halftime` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dept_id` decimal(5,0) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dept_id`, `dept_name`) VALUES
('101', 'HR'),
('102', 'IT'),
('103', 'Finance'),
('104', 'Budget');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` decimal(5,0) NOT NULL,
  `dept_id` decimal(5,0) NOT NULL,
  `acct_id` decimal(5,0) NOT NULL,
  `payroll_id` decimal(5,0) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `DOB` datetime NOT NULL,
  `address` varchar(20) NOT NULL,
  `hire_date` datetime NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `dept_id`, `acct_id`, `payroll_id`, `emp_name`, `DOB`, `address`, `hire_date`, `designation`) VALUES
('2001', '101', '8960', '15016', 'Khalid Siddique Mali', '1990-07-11 00:00:00', 'Model Town Lahore', '2015-05-05 00:00:00', 'Clerk'),
('3001', '101', '16910', '10416', 'Nisar Ahmed', '1993-10-03 00:00:00', 'PECHS', '2015-12-01 00:00:00', 'Software Eng.'),
('4001', '102', '2880', '10106', 'Ashraf Ali Akbar', '1981-10-16 00:00:00', 'Kaloorkot District B', '2015-06-03 00:00:00', 'Director'),
('5001', '103', '10008', '18160', 'Mohayyuddin', '1997-12-20 00:00:00', 'Latifabad No.8 Hyder', '2015-08-12 00:00:00', 'Senior Consultant');

-- --------------------------------------------------------

--
-- Table structure for table `paygroup`
--

CREATE TABLE `paygroup` (
  `pg_id` decimal(5,0) NOT NULL,
  `pg_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paygroup`
--

INSERT INTO `paygroup` (`pg_id`, `pg_name`) VALUES
('3076', 'PG-004'),
('4058', 'PG-001'),
('4399', 'PG-015'),
('5377', 'PG-011'),
('9086', 'PG-007');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_id` decimal(5,0) NOT NULL,
  `payroll_name` varchar(20) NOT NULL,
  `pg_id` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `payroll_name`, `pg_id`) VALUES
('10106', 'JUL-97', '5377'),
('10416', 'JUN-07', '9086'),
('15016', 'FEB-87', '3076'),
('18160', 'APR-13', '4058');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acct_id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD KEY `pg_id` (`pg_id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `deductions`
--
ALTER TABLE `deductions`
  ADD PRIMARY KEY (`ded_id`),
  ADD KEY `pg_id` (`pg_id`);

--
-- Indexes for table `deduction_leaves`
--
ALTER TABLE `deduction_leaves`
  ADD KEY `ded_id` (`ded_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `dept_id` (`dept_id`,`acct_id`,`payroll_id`),
  ADD KEY `acct_id` (`acct_id`),
  ADD KEY `payroll_id` (`payroll_id`);

--
-- Indexes for table `paygroup`
--
ALTER TABLE `paygroup`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`),
  ADD KEY `pg_id` (`pg_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`bank_id`);

--
-- Constraints for table `allowances`
--
ALTER TABLE `allowances`
  ADD CONSTRAINT `allowances_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `paygroup` (`pg_id`);

--
-- Constraints for table `deductions`
--
ALTER TABLE `deductions`
  ADD CONSTRAINT `deductions_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `paygroup` (`pg_id`);

--
-- Constraints for table `deduction_leaves`
--
ALTER TABLE `deduction_leaves`
  ADD CONSTRAINT `deduction_leaves_ibfk_1` FOREIGN KEY (`ded_id`) REFERENCES `deductions` (`ded_id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`acct_id`) REFERENCES `accounts` (`acct_id`),
  ADD CONSTRAINT `employees_ibfk_3` FOREIGN KEY (`payroll_id`) REFERENCES `payroll` (`payroll_id`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_ibfk_1` FOREIGN KEY (`pg_id`) REFERENCES `paygroup` (`pg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
