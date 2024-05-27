-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 05:37 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(78) NOT NULL,
  `product_price` varchar(59) NOT NULL,
  `product_description` text NOT NULL,
  `product_category` varchar(85) NOT NULL,
  `product_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_description`, `product_category`, `product_image`) VALUES
(55, 'Chini', '45', 'fdsgfdsgdfsg', ' Grocerry', 'mountainpic.jpg'),
(56, 'Chini', '45', 'fdsgfdsgdfsg', ' Grocerry', 'mountainpic.jpg'),
(59, 'Chini', '34', 'sdkjfaljhakjfhajskhfjahdkjhfakjdshsfkjdhfaskjdfhkjashfakjdhfskjdfashdfkjashf kjahdakj hkjdah dkjh fkjahs kjfadh kjfh kdh kjdkja hdkj hashf dasfkjd hadh kjdhfakjdfh as hfjahfk hakjfhasdkj hfdsa hkjdfsh kjadhskjahdfkj dhfasfhdfsakj', ' Grocerry', 'mountainpic.jpg'),
(60, 'Chini', '453', 'fdsgfdsgdfsg', ' Grocerry', 'mountainpic.jpg'),
(61, 'Chini', '212', 'fdsgfdsgdfsg', ' Grocerry', 'mountainpic.jpg'),
(62, 'Chini', '342', 'fdsgfdsgdfsg', ' Grocerry', 'mountainpic.jpg'),
(63, 'Chini', '34', 'fdsgfdsgdfsg', ' Grocerry', '626720705214mountainpic.jpg'),
(64, 'Chini', '43', 'fdsgfdsgdfsg', ' fsdgdfsgdfsg', '583386653696mountainpic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(52) NOT NULL,
  `user_name` varchar(78) NOT NULL,
  `user_gender` varchar(74) NOT NULL,
  `user_phone_no` varchar(65) NOT NULL,
  `user_email` varchar(85) NOT NULL,
  `user_password` varchar(96) NOT NULL,
  `user_role` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `user_name`, `user_gender`, `user_phone_no`, `user_email`, `user_password`, `user_role`) VALUES
(39, 'ayesha', 'female', '9855222', 'ash12345@gmail.com', '12345', 'user'),
(41, 'Ayesha', 'Male', '0887655433', 'Ayesha@gmail.com', '123', 'admin'),
(42, 'arisha', 'male', '9855222', 'ha@gmail.com', '12', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_email_2` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(52) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
