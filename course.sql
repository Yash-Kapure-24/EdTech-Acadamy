-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 11:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'programming language'),
(2, 'library '),
(3, 'general course');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`firstname`, `lastname`, `email`, `number`, `message`) VALUES
('mahendra', 'nagpure', 'nagpuremahendra391@gmail.com', 2147483647, 'dsojfj'),
('mahendra', 'lkfmdk', 'mahendra@gmail.com', 1111111111, 'kfjlkdhfdhjfk');

-- --------------------------------------------------------

--
-- Table structure for table `main-admin-panel`
--

CREATE TABLE `main-admin-panel` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main-admin-panel`
--

INSERT INTO `main-admin-panel` (`username`, `password`) VALUES
('admin', 'course@123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardholder name` text NOT NULL,
  `card number` int(10) NOT NULL,
  `expiry_month` int(225) NOT NULL,
  `cvc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardholder name`, `card number`, `expiry_month`, `cvc`) VALUES
('', 0, 0, 111),
('', 0, 0, 202),
('', 0, 0, 111),
('', 0, 0, 111),
('', 0, 0, 101),
('mahendra nagpure', 1111111111, 0, 111),
('mahendra nagpure', 1111111111, 0, 111),
('majendlkfjldk', 1111111111, 0, 111),
('mahendra nagpure', 1111111111, 0, 111),
('mahendra nagpure', 1111111111, 0, 121),
('yash kapure', 1111111111, 0, 101),
('', 0, 0, 0),
('', 0, 0, 0),
('mahendra nagpure', 1111111111, 2002, 202);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_image`, `price`, `category_id`, `uploaded_date`) VALUES
(0, 'php', 'jflkdlk', './uploads/download.jfif', 500, 1, '2024-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `resisteration`
--

CREATE TABLE `resisteration` (
  `firstname` char(255) NOT NULL,
  `lastname` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resisteration`
--

INSERT INTO `resisteration` (`firstname`, `lastname`, `email`, `phone`) VALUES
('yash', 'bhavsar', 'bhavsar@gmail.com', 'bhavsar'),
('yash', 'kapure', 'kapure@gmail.com', '$2y$10$Ktj'),
('mahendra', 'nagpure', 'nagpuremahendra391@gmail.com', '$2y$10$H1y'),
('yogesh', 'kotakar', 'yogesh@gmail.com', 'yogesh'),
('vinit', 'jadhav', 'vinit@gmail.com', 'vinit'),
('yash', 'bhavsar', 'yashb@gmai.com', 'yash@123'),
('Yash', 'Kapure', 'yashk123@gmail.com', 'yash@123');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`firstname`, `lastname`, `email`, `password`) VALUES
('', '', '', ''),
('mahendra', 'nagpure', 'mahendranagpure909@gmail.com', 'M@hendr@143'),
('yash', 'kapure', 'yash@gmail.com', 'chutput'),
('yogesh', 'kotakar', 'yogesh@gmail.com', 'yogesh'),
('vinit ', 'jadhav', 'vinit@gmail.com', 'vinit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `registered_at` date NOT NULL DEFAULT current_timestamp(),
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `contact_no`, `registered_at`, `isAdmin`, `user_address`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$j9OXXIYS0CG5AYuks62YMeDvuIpo2hZEN4CqfJfujt1yPMnoUq5C6', '9810283472', '2022-04-10', 1, 'newroad'),
(2, 'Test ', 'Firstuser', 'test@gmail.com', '$2y$10$DJOdhZy1InHTKQO6whfyJexVTZCDTlmIYGCXQiPTv7l82AdC9bWHO', '980098322', '2022-04-10', 0, 'matepani-12');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `name` varchar(250) NOT NULL,
  `size` int(250) NOT NULL,
  `video` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`name`, `size`, `video`) VALUES
('download.jfif', 0, ''),
('download.jfif', 5330, ''),
('download.jfif', 5330, ''),
('', 5330, ''),
('download.jfif', 5330, ''),
('download.jfif', 5330, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
