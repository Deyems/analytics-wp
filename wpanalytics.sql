-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2021 at 10:19 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpanalytics`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `created_at`, `last_login`) VALUES
(1, 'deyems@gmail.com', '$2y$10$bNrVXKe2XH6mYHjkphgkpe9st0oEt.EsZllXWtGrJNQ6rQNbBj.m.', 'deyems', '2020-12-09 12:22:07', '2021-02-16 08:06:04'),
(2, 'daram@gmail.com', '$2y$10$sXR70HELP/zbF9MveEEDtOY781h/VbOZscNq6E3GS0FUc0pJpR99W', 'daram', '2020-12-09 12:24:03', '2020-12-10 07:34:45'),
(3, 'sample@gmail.co.uk', '$2y$10$vUUqn1AUhoAaBwf3XSa/MOuXGkYRTXdCf350M3Mcwfd0yxxLGvXd.', NULL, '2020-12-09 18:39:30', NULL),
(4, 'arbitrary@gmail.com', '$2y$10$Rn8fEK8kaPtca6t.7bPzJO/4toXCLpeIcaBSZMpXqW/nKAWxuYp.6', 'arbitrary', '2020-12-10 12:22:30', '2020-12-10 11:22:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
