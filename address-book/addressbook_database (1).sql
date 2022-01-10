-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 10:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `C_id` int(50) NOT NULL,
  `C_productid` int(11) NOT NULL,
  `C_userid` int(11) NOT NULL,
  `C_productCategory` varchar(100) NOT NULL,
  `C_productname` varchar(200) NOT NULL,
  `C_productprice` int(200) NOT NULL,
  `C_productimg` varchar(200) NOT NULL,
  `C_productsubcat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `f_mail` varchar(200) NOT NULL,
  `f_gender` varchar(50) NOT NULL,
  `f_message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_name`, `f_mail`, `f_gender`, `f_message`) VALUES
(2, 'Muhammad Hunain', 'hunain@gmail.com', 'Male', 'Your Website is best');

-- --------------------------------------------------------

--
-- Table structure for table `liked_items`
--

CREATE TABLE `liked_items` (
  `L_id` int(50) NOT NULL,
  `L_productid` int(11) NOT NULL,
  `L_userid` int(11) NOT NULL,
  `L_productCategory` varchar(200) NOT NULL,
  `L_productname` varchar(200) NOT NULL,
  `L_productprice` int(11) NOT NULL,
  `L_productimg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liked_items`
--

INSERT INTO `liked_items` (`L_id`, `L_productid`, `L_userid`, `L_productCategory`, `L_productname`, `L_productprice`, `L_productimg`) VALUES
(1, 9, 4, 'jewellery', 'Daimond Ring', 5000, 'images/pdt5.jpg'),
(2, 16, 4, 'jewellery', 'Gold Ring', 150000, 'images/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `O_id` int(50) NOT NULL,
  `O_userid` int(50) NOT NULL,
  `O_productid` int(50) NOT NULL,
  `O_pcat` varchar(200) NOT NULL,
  `O_pprice` int(50) NOT NULL,
  `O_pname` varchar(50) NOT NULL,
  `O_pimg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`O_id`, `O_userid`, `O_productid`, `O_pcat`, `O_pprice`, `O_pname`, `O_pimg`) VALUES
(1, 4, 9, 'jewellery', 5000, 'Daimond Ring', 'images/pdt5.jpg'),
(4, 4, 9, 'jewellery', 5000, 'Daimond Ring', 'images/pdt5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_id` int(50) NOT NULL,
  `P_imgpath` varchar(500) NOT NULL,
  `P_mainCategory` varchar(100) NOT NULL,
  `P_subCategory` varchar(100) NOT NULL,
  `P_productName` varchar(200) NOT NULL,
  `P_price` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_id`, `P_imgpath`, `P_mainCategory`, `P_subCategory`, `P_productName`, `P_price`) VALUES
(17, 'images/bnp.jpg', 'cosmetics', 'Nail Paints', 'Blue Nail Paint', 750);

-- --------------------------------------------------------

--
-- Table structure for table `products_main_category`
--

CREATE TABLE `products_main_category` (
  `pm_id` int(50) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_main_category`
--

INSERT INTO `products_main_category` (`pm_id`, `categoryName`) VALUES
(2, 'cosmetics'),
(1, 'jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `products_sub_category`
--

CREATE TABLE `products_sub_category` (
  `ps_id` int(50) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `mcat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_sub_category`
--

INSERT INTO `products_sub_category` (`ps_id`, `categoryName`, `mcat`) VALUES
(1, 'Lipstick', 'cosmetics'),
(2, 'Foundations', 'cosmetics'),
(3, 'Nail Paints', 'cosmetics'),
(4, 'Eye Liner', 'cosmetics'),
(7, 'Ring', 'jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(50) NOT NULL,
  `U_Name` varchar(50) NOT NULL,
  `U_Email` varchar(100) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `U_Name`, `U_Email`, `Password`) VALUES
(4, 'aaman', 'aaman@gmail.com', '2e20c0856732b77d655d1599934073668e2b11c4'),
(6, 'Muhammad Hunain', 'hunain@gmail.com', '7612a700d6f4ce1bccb59d3eb93c6804b4752a30');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ui_id` int(50) NOT NULL,
  `ui_userid` int(50) NOT NULL,
  `ui_name` varchar(200) NOT NULL,
  `ui_address` varchar(200) NOT NULL,
  `ui_email` varchar(200) NOT NULL,
  `ui_work_phone` varchar(200) NOT NULL,
  `ui_cellnum` varchar(200) NOT NULL,
  `ui_dateofbirth` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ui_id`, `ui_userid`, `ui_name`, `ui_address`, `ui_email`, `ui_work_phone`, `ui_cellnum`, `ui_dateofbirth`) VALUES
(2, 6, 'Muhammad Hunain', 'ls 34', 'hunain@gmail.com', '03417936285', '03659854789', '2021-01-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`C_id`),
  ADD KEY `FK_PersonOrder` (`C_productid`),
  ADD KEY `FK_userorderid` (`C_userid`),
  ADD KEY `FK_ordercat` (`C_productCategory`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `liked_items`
--
ALTER TABLE `liked_items`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`O_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_id`),
  ADD UNIQUE KEY `P_imgpath` (`P_imgpath`);

--
-- Indexes for table `products_main_category`
--
ALTER TABLE `products_main_category`
  ADD PRIMARY KEY (`pm_id`),
  ADD UNIQUE KEY `uc` (`categoryName`);

--
-- Indexes for table `products_sub_category`
--
ALTER TABLE `products_sub_category`
  ADD PRIMARY KEY (`ps_id`),
  ADD UNIQUE KEY `uc` (`categoryName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `email_unique` (`U_Email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ui_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `C_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `liked_items`
--
ALTER TABLE `liked_items`
  MODIFY `L_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `O_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products_main_category`
--
ALTER TABLE `products_main_category`
  MODIFY `pm_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products_sub_category`
--
ALTER TABLE `products_sub_category`
  MODIFY `ps_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ui_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`C_productid`) REFERENCES `products` (`P_id`),
  ADD CONSTRAINT `FK_userorderid` FOREIGN KEY (`C_userid`) REFERENCES `users` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
