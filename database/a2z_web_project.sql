-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2025 at 03:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2z_web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `a_id` int(11) NOT NULL,
  `a_title` text NOT NULL,
  `a_desc` text NOT NULL,
  `a_smallimg` text NOT NULL,
  `a_bigimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`a_id`, `a_title`, `a_desc`, `a_smallimg`, `a_bigimg`) VALUES
(1, 'We Help Students To Pass Test & Get A License On The First Try', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet  Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '4390about.jpg', '1503about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_list`
--

CREATE TABLE `appointment_list` (
  `a_id` int(11) NOT NULL,
  `a_name` text NOT NULL,
  `a_gmail` text NOT NULL,
  `a_course` text NOT NULL,
  `a_cartype` text NOT NULL,
  `a_message` text NOT NULL,
  `adate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_list`
--

INSERT INTO `appointment_list` (`a_id`, `a_name`, `a_gmail`, `a_course`, `a_cartype`, `a_message`, `adate`) VALUES
(2, 'Akshay', 'Akshay', 'Full stak', 'swift', 'i want the car', '2024-09-23'),
(3, 'lucky', 'lucky', 'React Developer', 'Scorpio ', 'i love This Car', '2024-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `aw_details`
--

CREATE TABLE `aw_details` (
  `aw_id` int(11) NOT NULL,
  `aw_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aw_details`
--

INSERT INTO `aw_details` (`aw_id`, `aw_title`) VALUES
(1, 'Fully Licensed'),
(2, 'Online Tracking'),
(3, 'Afordable Fee'),
(4, 'Best Trainers');

-- --------------------------------------------------------

--
-- Table structure for table `client_say`
--

CREATE TABLE `client_say` (
  `cs_id` int(11) NOT NULL,
  `client_name` text NOT NULL,
  `client_Position` text NOT NULL,
  `client_message` text NOT NULL,
  `client_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_say`
--

INSERT INTO `client_say` (`cs_id`, `client_name`, `client_Position`, `client_message`, `client_img`) VALUES
(2, 'Mr.Jon', 'Client', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, optio? Maiores molestias animi exercitationem odit. Quos facilis quo modi magnam tenetur cum corporis nisi, pariatur, libero, excepturi voluptatum distinctio rerum!\r\n', '8663client.jpg'),
(3, 'Mr.Don', 'Client', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, optio? Maiores molestias animi exercitationem odit. Quos facilis quo modi magnam tenetur cum corporis nisi, pariatur, libero, excepturi voluptatum distinctio rerum!\r\n', '3738client.jpg'),
(4, 'Mis.Emily', 'Client', '    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis quisquam minima dolore illo qui officiis commodi inventore, voluptatibus quidem dolores excepturi optio eius beatae sit autem nesciunt cum earum corrupti?\r\n', '3587client.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_data`
--

CREATE TABLE `contact_data` (
  `c_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_data`
--

INSERT INTO `contact_data` (`c_id`, `name`, `email`, `subject`, `message`, `cdate`) VALUES
(3, 'vikas', 'vikas@gmail.com', 'Java Developer', 'None', '2024-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `c_id` int(11) NOT NULL,
  `c_address` text NOT NULL,
  `c_timing` text NOT NULL,
  `c_mobile` varchar(10) NOT NULL,
  `f_link` text NOT NULL,
  `i_link` text NOT NULL,
  `t_link` text NOT NULL,
  `y_link` text NOT NULL,
  `c_email` text NOT NULL,
  `c_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`c_id`, `c_address`, `c_timing`, `c_mobile`, `f_link`, `i_link`, `t_link`, `y_link`, `c_email`, `c_map`) VALUES
(1, ' 123 Street, New York, USA', 'Mon - Fri : 09.00 AM - 09.00 PM', '0123456789', '#', '#', '#', '#', 'info@example.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120638.06829022359!2d74.66009830965174!3d19.11030399271976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb05d46788921%3A0x6677e92c1a5181b6!2sAhmednagar%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1726911337687!5m2!1sen!2sin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `c_title` text NOT NULL,
  `c_desc` text NOT NULL,
  `c_price` text NOT NULL,
  `c_type` text NOT NULL,
  `c_duration` text NOT NULL,
  `c_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_title`, `c_desc`, `c_price`, `c_type`, `c_duration`, `c_img`) VALUES
(3, 'Automatic Car Lessons', 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos', '$100', 'Beginner', '3 Week', '2488courses.jpg'),
(4, 'Highway Driving Lesson', 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos', '$200', 'Beginner', '3 Week', '4258courses.jpg'),
(5, 'Automatic Car Lessons', 'Tempor erat elitr rebum at clita dolor diam ipsum sit diam amet diam et eos', '$300', 'Beginner', '3 Week', '2205courses.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `f_id` int(11) NOT NULL,
  `f_title` text NOT NULL,
  `f_desc` text NOT NULL,
  `f_smallimg` text NOT NULL,
  `f_bigimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`f_id`, `f_title`, `f_desc`, `f_smallimg`, `f_bigimg`) VALUES
(1, 'Best Driving Training Agency In Your City ', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '9109features.jpg', '9450features.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'Lucky', 'luckybpawar117@gmail.com', '8605606934', 'Pune', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_img` text NOT NULL,
  `slider_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_img`, `slider_title`) VALUES
(2, '2951slider.jpg', 'Learn To Drive With Confidence'),
(3, '9999slider.jpg', 'Safe Driving Is Our Top Priority');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `team_name` text NOT NULL,
  `team_Position` text NOT NULL,
  `f_link` text NOT NULL,
  `t_link` text NOT NULL,
  `i_link` text NOT NULL,
  `team_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `team_Position`, `f_link`, `t_link`, `i_link`, `team_img`) VALUES
(7, 'Jon', 'Trainer', '#', '#', '#', '2403team.jpg'),
(8, 'Emily', 'Trainer', '#', '#', '#', '8569team.jpg'),
(9, 'Don', 'Trainer', '#', '#', '#', '5874team.jpg'),
(10, 'Sham', 'Trainer', '#', '#', '#', '5417team.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose`
--

CREATE TABLE `why_choose` (
  `fw_id` int(11) NOT NULL,
  `fw_title` text NOT NULL,
  `fw_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_choose`
--

INSERT INTO `why_choose` (`fw_id`, `fw_title`, `fw_desc`) VALUES
(6, 'Fully Licensed', 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos'),
(7, 'Online Tracking', 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos'),
(8, 'Afordable Fee', 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos'),
(9, 'Best Trainers', 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos');

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `wu_id` int(11) NOT NULL,
  `wu_title` text NOT NULL,
  `wu_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`wu_id`, `wu_title`, `wu_desc`) VALUES
(4, 'Easy Driving Learn', 'Clita erat ipsum lorem sit sed stet duo justo erat amet'),
(5, 'National Instructor', 'Clita erat ipsum lorem sit sed stet duo justo erat amet'),
(7, 'Get licence', 'Clita erat ipsum lorem sit sed stet duo justo erat amet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `appointment_list`
--
ALTER TABLE `appointment_list`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `aw_details`
--
ALTER TABLE `aw_details`
  ADD PRIMARY KEY (`aw_id`);

--
-- Indexes for table `client_say`
--
ALTER TABLE `client_say`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `contact_data`
--
ALTER TABLE `contact_data`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `why_choose`
--
ALTER TABLE `why_choose`
  ADD PRIMARY KEY (`fw_id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`wu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_list`
--
ALTER TABLE `appointment_list`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aw_details`
--
ALTER TABLE `aw_details`
  MODIFY `aw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_say`
--
ALTER TABLE `client_say`
  MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_data`
--
ALTER TABLE `contact_data`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `why_choose`
--
ALTER TABLE `why_choose`
  MODIFY `fw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `wu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
