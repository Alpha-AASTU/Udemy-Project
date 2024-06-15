-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 06:10 PM
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
-- Database: `udemy_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `descriptions` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `levels` varchar(100) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `user_id`, `title`, `descriptions`, `category`, `levels`, `currency`, `price`) VALUES
(12, 4, 'Maths', 'new', 'development', 'beginner', 'USD', 0),
(13, 4, 'Physics', 'new', 'development', 'beginner', 'USD', 0),
(14, 4, 'Biology', 'jhfffhhfh', 'development', 'beginner', 'USD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `course_resource`
--

CREATE TABLE `course_resource` (
  `resrc_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `images` varchar(2000) NOT NULL,
  `video` varchar(2000) NOT NULL,
  `files` varchar(2000) NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_resource`
--

INSERT INTO `course_resource` (`resrc_id`, `course_id`, `images`, `video`, `files`, `rating`) VALUES
(3, 12, '../BackEnd/uploads/images/task.png', '../BackEnd/uploads/videos/6981614-hd_1920_1080_30fps.mp4', '../BackEnd/uploads/files/SRE_Alpha_Final.pdf', 0),
(4, 13, '../BackEnd/uploads/images/task.png', '../BackEnd/uploads/videos/6981614-hd_1920_1080_30fps.mp4', '../BackEnd/uploads/files/SRE_Alpha_Final.pdf', 0),
(5, 14, '../BackEnd/uploads/images/Task3.jpg', '../BackEnd/uploads/videos/6981614-hd_1920_1080_30fps.mp4', '../BackEnd/uploads/files/SRE_Alpha_Final.pdf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `transaction_ref` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Mahider Jemere', 'mahiderjemere12@gmail.com', '$2y$10$Red4ZyfASG46drFesuf0nOGRUIRwfuHYdJIv1b2L7a3iu3RCaGY6i'),
(2, 'Mahider Jemere', 'something@gmail.com', '$2y$10$f142QfHqaPlOz3Km919/AODCpuftvLWeQHZ0g8J9qvjg2QkTGKit6'),
(3, 'user2', 'rewr22@gmail.com', '$2y$10$2OmjIGwklh5Q2nAvqohJcO/xdCwd/px.TVtaj2u9bwMNYxiqrLZIC'),
(4, 'YE yize gilgel', 'mahmah@gmail.com', '$2y$10$bPbMsm4Rtht3i23iWu9cWuSBBHrJI96BHVxaLOch9GwWYUbzJmN12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `course_resource`
--
ALTER TABLE `course_resource`
  ADD PRIMARY KEY (`resrc_id`),
  ADD KEY `fk_course_id` (`course_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
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
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course_resource`
--
ALTER TABLE `course_resource`
  MODIFY `resrc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_resource`
--
ALTER TABLE `course_resource`
  ADD CONSTRAINT `fk_course_id` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
