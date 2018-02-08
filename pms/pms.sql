-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 06:01 AM
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
-- Database: `pms`
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

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`ded_id`, `incometax`, `gpfund`, `pg_id`) VALUES
('834', '7000', '8000', '5377'),
('1379', '2000', '4000', '9086'),
('6809', '1000', '2000', '3076'),
('7320', '6000', '1000', '4058');

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

--
-- Dumping data for table `deduction_leaves`
--

INSERT INTO `deduction_leaves` (`ded_id`, `sick`, `casual`, `halftime`) VALUES
('834', '1', '2', '4'),
('1379', '3', '9', '5'),
('6809', '4', '5', '1'),
('7320', '3', '0', '4');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `org_id` decimal(5,0) NOT NULL,
  `dept_id` decimal(5,0) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=REDUNDANT;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`org_id`, `dept_id`, `dept_name`) VALUES
('1', '101', 'HR'),
('1', '102', 'IT'),
('2', '201', 'IT'),
('3', '301', 'Finance'),
('4', '401', 'Budget');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `dept_id` decimal(5,0) NOT NULL,
  `emp_id` decimal(5,0) NOT NULL,
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

INSERT INTO `employees` (`dept_id`, `emp_id`, `acct_id`, `payroll_id`, `emp_name`, `DOB`, `address`, `hire_date`, `designation`) VALUES
('101', '2001', '8960', '15016', 'Khalid Siddique Mali', '1990-07-11 00:00:00', 'Model Town Lahore', '2015-05-05 00:00:00', 'Clerk'),
('201', '3001', '16910', '10416', 'Nisar Ahmed', '1993-10-03 00:00:00', 'PECHS', '2015-12-01 00:00:00', 'Software Eng.'),
('301', '4001', '2880', '10106', 'Ashraf Ali Akbar', '1981-10-16 00:00:00', 'Kaloorkot District B', '2015-06-03 00:00:00', 'Director'),
('401', '5001', '10008', '18160', 'Mohayyuddin', '1997-12-20 00:00:00', 'Latifabad No.8 Hyder', '2015-08-12 00:00:00', 'Senior Consultant');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `org_id` decimal(5,0) NOT NULL,
  `org_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `org_name`) VALUES
('1', 'PMS Co.'),
('2', 'ABC Co.'),
('3', 'XYZ Co.'),
('4', 'RTJ Co.'),
('5', 'CSIT'),
('9', 'SCIT');

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
('4058', 'PG-001'),
('3076', 'PG-004'),
('9086', 'PG-007'),
('5377', 'PG-011'),
('4399', 'PG-015');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `pg_id` decimal(5,0) NOT NULL,
  `payroll_id` decimal(5,0) NOT NULL,
  `payroll_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`pg_id`, `payroll_id`, `payroll_name`) VALUES
('5377', '10106', 'JUL-97'),
('9086', '10416', 'JUN-07'),
('3076', '15016', 'FEB-87'),
('4058', '18160', 'APR-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acct_id`),
  ADD KEY `bank_id_2` (`bank_id`);

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD KEY `pg_id_2` (`pg_id`);

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
  ADD KEY `pg_id_2` (`pg_id`);

--
-- Indexes for table `deduction_leaves`
--
ALTER TABLE `deduction_leaves`
  ADD KEY `ded_id_2` (`ded_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dept_id`),
  ADD KEY `org_id_2` (`org_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `dept_id_2` (`dept_id`),
  ADD KEY `acct_id` (`acct_id`),
  ADD KEY `payroll_id` (`payroll_id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `paygroup`
--
ALTER TABLE `paygroup`
  ADD PRIMARY KEY (`pg_id`),
  ADD UNIQUE KEY `pg_name` (`pg_name`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`),
  ADD KEY `pg_id_2` (`pg_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `acct_bank_fk` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`bank_id`);

--
-- Constraints for table `allowances`
--
ALTER TABLE `allowances`
  ADD CONSTRAINT `allownces_pg_fk` FOREIGN KEY (`pg_id`) REFERENCES `paygroup` (`pg_id`);

--
-- Constraints for table `deductions`
--
ALTER TABLE `deductions`
  ADD CONSTRAINT `deduction_pg_fk` FOREIGN KEY (`pg_id`) REFERENCES `paygroup` (`pg_id`);

--
-- Constraints for table `deduction_leaves`
--
ALTER TABLE `deduction_leaves`
  ADD CONSTRAINT `dl_ded_fk` FOREIGN KEY (`ded_id`) REFERENCES `deductions` (`ded_id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `org_dept_fk` FOREIGN KEY (`org_id`) REFERENCES `organization` (`org_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `acct_emp_fk` FOREIGN KEY (`acct_id`) REFERENCES `accounts` (`acct_id`),
  ADD CONSTRAINT `dept_emp_fk` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`dept_id`),
  ADD CONSTRAINT `payroll_emp_fk` FOREIGN KEY (`payroll_id`) REFERENCES `payroll` (`payroll_id`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_pg_fk` FOREIGN KEY (`pg_id`) REFERENCES `paygroup` (`pg_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
