-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2022 at 03:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniliaregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_details`
--

CREATE TABLE `address_details` (
  `address_id` int(11) NOT NULL,
  `home_district` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `traditional_authority` varchar(255) NOT NULL,
  `cell_phone` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `postal_address` varchar(255) NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address_details`
--

INSERT INTO `address_details` (`address_id`, `home_district`, `village`, `traditional_authority`, `cell_phone`, `email_address`, `postal_address`, `reg_number`, `created_at`) VALUES
(5, 'Lilongwe', 'Kawale', 'Gondwe Retunza', '0880209723', 'ptckbyamasu@gmail.com', 'P.o.Box 87687 Dzalenyama Rooad, Lilongwe 3, Malawi', 'CEN/01/02/19', '2022-04-23 09:08:05'),
(6, 'Lilongwe', 'Kawale', 'Gondwe Retunza', '0880209723', 'precious@gmail.com', 'P.o.Box 87687 Dzalenyama Rooad, Lilongwe 3, Malawi', 'CEN/01/02/21', '2022-04-23 09:16:26'),
(7, 'Lilongwe', 'Kawale', 'Gondwe Retunza', '0880209723', 'mikemankenda10@gmail.com', 'P.o.Box 87687 Dzalenyama Rooad, Lilongwe 3, Malawi', 'CEN/01/02/22', '2022-04-23 12:00:37'),
(8, 'Lilongwe', 'Kawale', 'Gondwe Retunza', '0995678987', 'june@gmail.co', 'P.o.Box 5638 Rumphi', 'CEN/02/46/200', '2022-04-23 13:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `courses_to_be_take`
--

CREATE TABLE `courses_to_be_take` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `hours_per_week` varchar(255) NOT NULL,
  `additional_info` text NOT NULL,
  `student_reg_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses_to_be_take`
--

INSERT INTO `courses_to_be_take` (`course_id`, `course_code`, `course_name`, `hours_per_week`, `additional_info`, `student_reg_number`, `created_at`) VALUES
(4, 'CEN3601', 'Object Oriented Analysis and Design', '4', 'No I do not have', 'CEN/01/02/19', '2022-04-23 09:08:05'),
(5, 'CEN3601', 'Object Oriented Analysis and Design', '5', 'No I do not have', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(6, 'CEN3601', 'Abstract Algebra', '3', 'No I do not have', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(7, 'CEN3601', 'Web Application', '4', 'No I do not have', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(8, 'CEN3601', 'Object Oriented Analysis and Design', '5', 'No I do not', 'CEN/01/02/22', '2022-04-23 12:00:37'),
(9, 'CEN3602', 'Web Application', '5', 'No I do not', 'CEN/01/02/22', '2022-04-23 12:00:37'),
(10, 'CEN3603', 'Applied Analog', '2', 'No I do not', 'CEN/01/02/22', '2022-04-23 12:00:37'),
(11, 'CEN3604', 'Object Oriented Analysis and Design', '4', 'No i do not have', 'CEN/02/46/200', '2022-04-23 13:02:21'),
(12, 'CEN3602', 'Web Apps', '14', 'No i do not have', 'CEN/02/46/200', '2022-04-23 13:02:21'),
(13, 'CEN3603', 'Analog Electronics', '8', 'No i do not have', 'CEN/02/46/200', '2022-04-23 13:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `declaration`
--

CREATE TABLE `declaration` (
  `declaration_id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `declaration`
--

INSERT INTO `declaration` (`declaration_id`, `value`, `student_id`, `created_at`) VALUES
(7, '', 'CEN/01/02/19', '2022-04-23 09:08:05'),
(8, '', 'CEN/01/02/19', '2022-04-23 09:08:05'),
(9, '', 'CEN/01/02/19', '2022-04-23 09:08:05'),
(10, '', 'CEN/01/02/19', '2022-04-23 09:08:05'),
(11, '', 'CEN/01/02/19', '2022-04-23 09:08:06'),
(12, '', 'CEN/01/02/19', '2022-04-23 09:08:06'),
(13, '', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(14, '', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(15, '', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(16, '', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(17, '', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(18, '', 'CEN/01/02/21', '2022-04-23 09:16:28'),
(19, '', 'CEN/01/02/22', '2022-04-23 12:00:37'),
(20, '', 'CEN/01/02/22', '2022-04-23 12:00:37'),
(21, '', 'CEN/01/02/22', '2022-04-23 12:00:38'),
(22, '', 'CEN/01/02/22', '2022-04-23 12:00:38'),
(23, '', 'CEN/01/02/22', '2022-04-23 12:00:38'),
(24, '', 'CEN/01/02/22', '2022-04-23 12:00:38'),
(25, '', 'CEN/02/46/200', '2022-04-23 13:02:21'),
(26, '', 'CEN/02/46/200', '2022-04-23 13:02:21'),
(27, '', 'CEN/02/46/200', '2022-04-23 13:02:21'),
(28, '', 'CEN/02/46/200', '2022-04-23 13:02:21'),
(29, '', 'CEN/02/46/200', '2022-04-23 13:02:21'),
(30, '', 'CEN/02/46/200', '2022-04-23 13:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `merital_status`
--

CREATE TABLE `merital_status` (
  `merital_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `spouse_home` varchar(255) NOT NULL,
  `spouse_village` varchar(255) NOT NULL,
  `spouse_traditional_authority` varchar(255) NOT NULL,
  `spouse_cell_phone` varchar(255) NOT NULL,
  `spouse_email` varchar(255) NOT NULL,
  `spouse_lastname` varchar(255) NOT NULL,
  `spouse_firstname` varchar(255) NOT NULL,
  `spouse_middlename` varchar(255) NOT NULL,
  `spouse_postal_address` varchar(255) NOT NULL,
  `student_reg_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merital_status`
--

INSERT INTO `merital_status` (`merital_id`, `status`, `spouse_home`, `spouse_village`, `spouse_traditional_authority`, `spouse_cell_phone`, `spouse_email`, `spouse_lastname`, `spouse_firstname`, `spouse_middlename`, `spouse_postal_address`, `student_reg_number`, `created_at`) VALUES
(7, 'Married', 'Dowa', 'Nkhotankhota', 'Kambilambya Gondwe', '0880209723', 'mikemankenda10@gmail.com', 'Tisunge', 'Gondwe', 'Levodo', 'P.o.Box 85823 Dzalanyama Road, Lilongwe 3, Malawi', 'CEN/01/02/19', '2022-04-23 09:08:05'),
(8, 'Married', 'Dowa', 'Nkhotankhota', 'Kambilambya Gondwe', '+265996668139', 'adaicircle@gmail.com', 'Patrick Paul', 'BYAMASU', '', 'P.o.Box 87687 Dzalenyama Rooad, Lilongwe 3, Malawi', 'CEN/01/02/21', '2022-04-23 09:16:26'),
(9, 'Married', 'Dowa', 'Nkhotankhota', 'Kambilambya Gondwe', '0880209723', 'mikemankenda10@gmail.com', 'Paul', 'BYAMASU', 'Patrick', 'P.o.Box 87687 Dzalenyama Rooad, Lilongwe 3, Malawi', 'CEN/01/02/22', '2022-04-23 12:00:37'),
(10, 'Married', 'Dowa', 'Nkhotankhota', 'Kambilambya Gondwe', '+265996668139', 'mirriam@gmail.com', 'Mirriam', 'Gondwe', '', 'P.o.Box 7683 Mzuzu', 'CEN/02/46/200', '2022-04-23 13:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `qualification_details`
--

CREATE TABLE `qualification_details` (
  `qualification_id` int(11) NOT NULL,
  `highest_qualification` varchar(255) NOT NULL,
  `secondary_school` varchar(255) NOT NULL,
  `year_obtained` date NOT NULL,
  `secondary_school_district` varchar(255) NOT NULL,
  `secondary_school_country` varchar(255) NOT NULL,
  `program_of_study` varchar(255) NOT NULL,
  `entry_type` varchar(255) NOT NULL,
  `entry_level` varchar(255) NOT NULL,
  `admission_date` date NOT NULL,
  `first_registration_date` date NOT NULL,
  `completion_date` date NOT NULL,
  `student_reg_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification_details`
--

INSERT INTO `qualification_details` (`qualification_id`, `highest_qualification`, `secondary_school`, `year_obtained`, `secondary_school_district`, `secondary_school_country`, `program_of_study`, `entry_type`, `entry_level`, `admission_date`, `first_registration_date`, `completion_date`, `student_reg_number`, `created_at`) VALUES
(2, 'MSCE', 'ITIP Olive', '2022-04-01', 'Uvira', 'DRC', 'BEd.CEN', 'Internal', 'First Year', '2022-03-31', '2022-04-27', '2022-04-08', 'CEN/01/02/19', '2022-04-23 09:08:05'),
(3, 'MSCE', 'ITIP Olive', '2022-04-05', 'Chiweta', 'Malawi', 'BEd.Hum', 'Internal', 'Second year', '2022-04-11', '2022-04-04', '2022-04-28', 'CEN/01/02/21', '2022-04-23 09:16:27'),
(4, 'Diplome', 'ITIP Olive', '2022-03-30', 'Uvira', 'DRC', 'BEd.CEN', 'Internal', 'First Year', '2022-05-04', '2022-04-14', '2022-05-07', 'CEN/01/02/22', '2022-04-23 12:00:37'),
(5, 'MSCE', 'ITIP Olive', '2022-04-07', 'Mzuzu', 'Mzuzu CDSS', 'BEd.PH', 'Internal', 'Second year', '2022-04-06', '2022-03-28', '2022-04-30', 'CEN/02/46/200', '2022-04-23 13:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_information`
--

CREATE TABLE `sponsor_information` (
  `sponsor_id` int(11) NOT NULL,
  `sponsor_name` varchar(255) NOT NULL,
  `sponsor_occupation` varchar(255) NOT NULL,
  `sponsor_cell_phone` varchar(255) NOT NULL,
  `sponsor_email_address` varchar(255) NOT NULL,
  `sponsor_postal_address` varchar(255) NOT NULL,
  `student_reg_number` varchar(255) NOT NULL,
  `created-at` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsor_information`
--

INSERT INTO `sponsor_information` (`sponsor_id`, `sponsor_name`, `sponsor_occupation`, `sponsor_cell_phone`, `sponsor_email_address`, `sponsor_postal_address`, `student_reg_number`, `created-at`) VALUES
(2, 'JRS', 'Humanitarian Organization', '+265996668149', '', 'P.o.Box 868643 Dzalanyama Road, Lilongwe 3 Malawi', 'CEN/01/02/19', 2147483647),
(3, 'JRS', 'Humanitarian Organization', '+10996668139', 'country.office@jrs.net', 'P.o.Box 87687 Dzalenyama Rooad, Lilongwe 3, Malawi', 'CEN/01/02/21', 2147483647),
(4, 'JRS', 'Humanitarian Organization', '+10996668139', 'billypaul@gmail.com', 'P.o.Box 87687 Dzalenyama Rooad, Lilongwe 3, Malawi', 'CEN/01/02/22', 2147483647),
(5, 'Malawi Government', 'Government', '+10996668139', 'malawo.governement@gmail.com', 'P.o.Box 80802 Lilongwe', 'CEN/02/46/200', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `hostelname` varchar(255) NOT NULL,
  `reg_number` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `semester_number` int(255) NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `title`, `firstname`, `middle_name`, `lastname`, `nationality`, `hostelname`, `reg_number`, `national_id`, `semester_number`, `room_number`, `birthdate`, `gender`, `created_at`) VALUES
(9, 'Mr', 'Byamasu', 'Patrick', 'Paul', 'Congolese', 'Chiswankhata', 'CEN/01/02/19', '970480528', 2, '45', '2022-03-29', 'Male', '2022-04-23 09:08:05'),
(12, 'Mr', 'June', 'May', 'May', 'England', 'Chiswankhata', 'CEN/02/46/200', '663874', 4, '56', '2022-04-19', 'Male', '2022-04-23 13:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `reg_num` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `reg_num`, `username`, `password`, `account_type`, `created_at`) VALUES
(24, 'CEN/01/02/19', 'Patrick Paul', 'f87567f2159b425795ebb7ba9bc406ec', 'Student', '2022-04-12 20:07:18'),
(26, 'BGLAWS-6973197', 'Donald Phiri', 'd6460d863cc7403c4d48eb8682d87784', 'Admin', '2022-04-23 08:51:57'),
(27, 'CEN/01/02/22', 'Don Nshombo', 'b70e7b267b0652ee4030c4043cba7cf7', 'Student', '2022-04-23 09:40:56'),
(31, 'CEN/02/46/200', 'June May', '11501255f17710952e79563ddc090a4d', 'Student', '2022-04-23 12:56:33'),
(32, 'ICT/01/502/19', 'Timothy Chiwa', 'e4fa457d9cb4fac729a9b984f4885787', 'Student', '2022-04-23 13:12:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_details`
--
ALTER TABLE `address_details`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `courses_to_be_take`
--
ALTER TABLE `courses_to_be_take`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `declaration`
--
ALTER TABLE `declaration`
  ADD PRIMARY KEY (`declaration_id`);

--
-- Indexes for table `merital_status`
--
ALTER TABLE `merital_status`
  ADD PRIMARY KEY (`merital_id`);

--
-- Indexes for table `qualification_details`
--
ALTER TABLE `qualification_details`
  ADD PRIMARY KEY (`qualification_id`);

--
-- Indexes for table `sponsor_information`
--
ALTER TABLE `sponsor_information`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `reg_num` (`reg_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_details`
--
ALTER TABLE `address_details`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses_to_be_take`
--
ALTER TABLE `courses_to_be_take`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `declaration`
--
ALTER TABLE `declaration`
  MODIFY `declaration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `merital_status`
--
ALTER TABLE `merital_status`
  MODIFY `merital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `qualification_details`
--
ALTER TABLE `qualification_details`
  MODIFY `qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sponsor_information`
--
ALTER TABLE `sponsor_information`
  MODIFY `sponsor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
