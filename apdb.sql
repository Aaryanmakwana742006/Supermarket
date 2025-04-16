-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2025 at 01:16 PM
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
-- Database: `apdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `product_id`, `product_qty`, `user_id`) VALUES
(35, 4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Food'),
(2, 'Clothing'),
(3, 'Gromming'),
(4, 'Health'),
(5, 'Toys'),
(8, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_qty`, `product_price`) VALUES
(1, 2, 1, 1, 13500),
(3, 3, 7, 1, 2999);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_master`
--

CREATE TABLE `tbl_order_master` (
  `order_id` int(11) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_name` varchar(50) NOT NULL,
  `shipping_mobile` bigint(20) NOT NULL,
  `shipping_address` varchar(250) NOT NULL,
  `payment_mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order_master`
--

INSERT INTO `tbl_order_master` (`order_id`, `order_date`, `order_status`, `user_id`, `shipping_name`, `shipping_mobile`, `shipping_address`, `payment_mode`) VALUES
(1, '30-09-24', 'confirm', 1, 'aaryan', 1234567890, 'ahmedabad', 'Online'),
(2, '30-09-24', 'confirm', 1, 'aaryan', 1234567890, 'fdsfds', 'Cash'),
(3, '15-04-25', 'connfirm', 1, 'Aaryan', 7984568912, 'aczsvs', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_details` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_price`, `category_id`, `product_image`, `product_details`, `user_id`) VALUES
(1, 'Phone', '13500', 159, 'XiaomiRedmiNote11Pro.jpeg', 'Redmi Note 11 Pro (Star Blue, 8GB RAM, 128GB Storage)| 67W Turbo Charge | 120Hz Super AMOLED Display | Charger Included | Get 2 Months of YouTube Premium Free!', 0),
(2, 'Fan', '30000', 536, 'images.jpeg', 'Palm Springs Rattan (122 cm Span, Black Metal Body, Processed Dry Palm Tree Leaves) Ceiling Fan', 0),
(3, 'TV', '55000', 562, '31aDWE4msZL._AC_UF1000,1000_QL80_.jpg', 'Me TV 24″ inch HD LED TV', 0),
(4, 'Laptop', '71999', 456, '61+r3+JstZL._AC_UF1000,1000_QL80_.jpg', 'Newest Flagship HP 14 HD Thin & Light Laptop Computer PC- 14\" Micro-Edge Display 10th Gen Intel Quad-Core i5-1035G1 32GB RAM 256GB PCIe SSD + 16GB Optane BT USB Type-C WiFi HDMI Webcam Win 10 -Gold', 0),
(5, 'CPU', '120000', 486, 'C P U.jpg', 'CHIPTRONEX Z810 Micro ATX Gaming Cabinet Tempered Glass, Acrylic USB 3.0 Gaming Case, Computer Case, Cabinet for PC, PC Cabinet, RGB Light, MATX MITX Motherboard Support Case Without SMPS (Black)', 0),
(6, 'Moniter', '30000', 753, 'Moniter.jpg', 'KOORUI 24 inch Curved Full HD VA Panel Gaming Monitor (24N5C)  (Response Time: 1 ms, 60 Hz Refresh Rate)', 0),
(7, 'Mouse', '2999', 951, 'Mouse.webp', 'ENTWINO Mouse, Laptop Mouse, Computer Mouse, Wired USB Mouse, 6 buttons Optical Mouse With RGB Lights Wired Optical Mouse  (USB 2.0, Black)', 0),
(8, 'Keyboard', '4999', 852, 'Keyboard.jpg', 'TANIX Large Print Computer Keyboard Wired USB Keyboard Big Print Letter with Yellow Keys High Contrast Yellow Keyboard Makes Type Easy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Aaryan ', 'aaryan@gmail.com', '123456'),
(2, 'abc', 'abc@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_order_master`
--
ALTER TABLE `tbl_order_master`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order_master`
--
ALTER TABLE `tbl_order_master`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
