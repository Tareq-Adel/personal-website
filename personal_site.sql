-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 08:33 AM
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
-- Database: `personal_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(200) NOT NULL,
  `name` varchar(150) NOT NULL,
  `start_course` date NOT NULL,
  `end_course` date NOT NULL,
  `institution` varchar(150) NOT NULL,
  `attachment_file` text NOT NULL,
  `attachment_url` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `course_hours` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `start_course`, `end_course`, `institution`, `attachment_file`, `attachment_url`, `notes`, `course_hours`) VALUES
(21, 'Pre-programming', '2021-05-01', '2022-05-08', 'mohammed zaqout', 'IMG_6474dada38d496.64574708.jpg', '', 'Basic information about how computers and the Internet work, which is an introduction to the world of programming in a simple way.', '19'),
(22, 'Pre-programming', '2021-05-01', '2022-05-08', 'mohammed zaqout', 'IMG_6474dae998b4a8.39737127.jpg', '', 'Basic information about how computers and the Internet work, which is an introduction to the world of programming in a simple way.', '19'),
(23, 'Advanced microsoft Excel', '2022-05-11', '2023-05-11', 'ahmed jalal', 'IMG_6474db5e79ea88.80061659.jpg', '', 'This course deals with Matlab, which is the most popular programming language and environment that engineers rely on in many areas of calculations, data representation and complex mathematical equations.', '40'),
(24, 'The java learning Guids', '2021-01-29', '2021-12-29', 'aya adel', 'IMG_6474dc29957d88.60590463.jpg', '', 'This course demonstrates how to use XML to mark up data and information in your  various applications. An introduction to the use of Java in developing Android applications.', '70'),
(25, ' The c++ learning Guids', '2023-05-02', '2023-12-29', 'jalal abu jalal', 'IMG_6474dceb4f3a50.66736384.jpg', '', 'This course explains the basics of programming in a practical and simplified way, which any programmer needs to know using C and C++.', '16');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(10) NOT NULL,
  `category` varchar(150) NOT NULL,
  `title` varchar(100) NOT NULL,
  `start_month` date NOT NULL,
  `end_month` date NOT NULL,
  `institution` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `category`, `title`, `start_month`, `end_month`, `institution`, `description`) VALUES
(3, 'Pre-programming', 'Complete Python Developer', '2022-05-03', '2023-05-03', 'Challenge to change', 'I work in the programming language Python, which is a general and comprehensive language. I have a good software  foundation. I have good practice in data science, machine learning, and developing various AI techniques.'),
(4, 'Programming Basics', 'Full Stack Development', '2021-05-06', '2022-08-17', 'Gaza sky geeks', 'When I entered the university, I decided to develop myself, so I went to train as a front end and back end developer. Now I have good experience in this field and have learned many programming languages related to the field such as html, css, javascript and php.'),
(5, 'Pre-programming', 'C# programming for unity game development', '2023-05-05', '2023-10-03', 'Engineer School', 'I work on development games using the C# language through the unity engine, which is one of the most famous and simplest game engines that are suitable for beginners. I can do the right practices to build a complete game, and how to deal with different variables such as movements, gravity, player data and how to store it and other basic information.');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `name` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth` date NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `job` varchar(150) NOT NULL,
  `experience` int(11) NOT NULL,
  `personal_img` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`name`, `gender`, `birth`, `nationality`, `place_of_birth`, `job`, `experience`, `personal_img`) VALUES
('Tareq Adel Abu Hashish', 'male', '2002-03-19', 'Palestinian', 'Gaza', 'Software Engineer', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
