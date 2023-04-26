-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 12:23 PM
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
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `height` int(100) NOT NULL,
  `weight` int(100) NOT NULL,
  `allergy` varchar(1000) NOT NULL,
  `conditions` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `age`, `gender`, `height`, `weight`, `allergy`, `conditions`) VALUES
(1, 'youssef', 'youssef@example.com', '5d41402abc4b2a76b9719d911017c592', 18, 'male', 191, 88, 'Hay Fever', 'Asthma'),
(5, 'James', 'james@email.com', '42f749ade7f9e195bf475f37a44cafcb', 999999, 'male', -1, 12345, 'Hay Fever', 'Hello it is me dillion lang'),
(6, 'stantheman', 'stansmith73@outlook.com', 'c2c7b9f76241a477849684d6072b62c4', 42, 'male', 61, 230, 'Hay Fever', 'yes'),
(7, 'test5000', 'test5000@gmail.com', '2e408ac2e4058c88b023f75f0e5bc1aa', 18, 'male', 181, 80, 'None', ''),
(8, 'youssef', 'youssef@yous.com', '1f3870be274f6c49b3e31a0c6728957f', 18, 'male', 191, 88, 'Hay Fever', 'Asthma'),
(9, 'Josh', 'JHutchinson4@student.strode-college.ac.uk', 'df17c0a35e3c277550b7dc18e1c315c6', 0, '', 0, 0, '', ''),
(10, 'test1', 'test@example.com', '098f6bcd4621d373cade4e832627b4f6', 0, '', 0, 0, '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
