-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2024 at 01:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(200) NOT NULL,
  `course_name` varchar(500) NOT NULL,
  `instractor_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `instractor_name`) VALUES
(2, 'english', 'sameh'),
(3, 'math', 'ragab'),
(5, 'web', 'hamda');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `course_name` varchar(500) NOT NULL,
  `instructor_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `course_name`, `instructor_name`) VALUES
(2, 'hossam', 'english', 'sameh'),
(7, 'ahmed', 'web', 'hamda'),
(2, 'hossam', 'math', 'ragab');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `parent_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `parent_id`) VALUES
(2, 'hossam', 'hossam@gmail.com', '$2y$10$qb.cX7hNOmANpee5zPvpv.3aob6zKF9nD.KmwGfvxCcb42Mbwu9rC', 'app/users/upload/875image.png', '2'),
(3, 'sameh', 'sameh@gmail.com', '$2y$10$tp3CWVo9hTZ6jAyWPL0F0eBDghS5so/DRfMiHrYUe9aHA/F4ev/rK', 'app/users/upload/37spidyyy.png', '3'),
(4, 'Mohamed Sayd', 'saydmohamed023@gmail.com', '$2y$10$WDEGS9ODO0Ol2LIO1y85K.3nTPgJseDh1cZ7u9tL9j5WZ4AxT6HY.', 'app/users/upload/521mohamed.jfif', '1'),
(5, 'ragab', 'ragab@gmail.com', '$2y$10$iIT/KAuSzoTghjk0NmLCvOTqsYmZWKOt.gNgYP4pO5SGb1pZsX1B2', 'app/users/upload/639Win3x_Black_Screen_of_Death.gif', '3'),
(6, 'hamda', 'hamda@gmail', '$2y$10$7ZGJoSXwLFb7xkres/NnQeuZ05qfK.76QyqCjq1Pk80LevslTsCBu', 'app/users/upload/225a426a9d54a95cbbe049b8daa6ff0379b.png', '3'),
(7, 'ahmed', 'ahmedd@gmailcom', '$2y$10$LPRDbC.xjIYEssXZfaRGmu5x2ppVE5ubxYYyehVS81RLTHrw2qcSa', 'app/users/upload/356a426a9d54a95cbbe049b8daa6ff0379b.png', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
