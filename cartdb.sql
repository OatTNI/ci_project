-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 12:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `product_id` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `product_id`, `img`, `is_active`) VALUES
(0000000001, 0000000003, 'https://images.unsplash.com/photo-1560689189-65b6ed6228e7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80', 'Y'),
(0000000002, 0000000002, 'https://www.zerynth.com/wp-content/uploads/2019/04/Design-Bluetooth-BLE-Applications-in-Python-on-ESP32-using-Zerynth-banner.jpg', 'Y'),
(0000000003, 0000000004, 'https://images.unsplash.com/photo-1549203477-cba29f1a7c8f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=398&q=80', 'Y'),
(0000000004, 0000000005, 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80', 'Y'),
(0000000005, 0000000006, 'https://images.unsplash.com/photo-1603217192634-61068e4d4bf9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80', 'Y'),
(0000000006, 0000000001, 'https://images.unsplash.com/photo-1529635457390-aa69ba54d77d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80', 'Y'),
(0000000007, NULL, 'https://image.freepik.com/free-vector/buy-1-get-1-free-banner_105164-423.jpg', 'Y'),
(0000000008, NULL, 'https://www.setoffsoon.com/wp-content/uploads/2020/04/anello-1.png', 'Y'),
(0000000009, NULL, 'https://pbs.twimg.com/media/CBPyNoXVIAAoXoe.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `product_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `product_id`, `qty`) VALUES
(0000000002, 0000000001, 3),
(0000000002, 0000000004, 9),
(0000000002, 0000000002, 1),
(0000000002, 0000000003, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cart_product`
-- (See below for the actual view)
--
CREATE TABLE `cart_product` (
`product_id` int(10) unsigned zerofill
,`user_id` int(10) unsigned zerofill
,`qty` int(10) unsigned
,`product_name` varchar(50)
,`vendor_id` int(10) unsigned zerofill
,`description` text
,`price` float unsigned
,`category_id` int(10) unsigned zerofill
,`sum_row` double
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `cart_product_sum`
-- (See below for the actual view)
--
CREATE TABLE `cart_product_sum` (
`user_id` int(10) unsigned zerofill
,`product_id` int(10) unsigned zerofill
,`qty` int(10) unsigned
,`product_name` varchar(50)
,`vendor_id` int(10) unsigned zerofill
,`description` text
,`price` float unsigned
,`category_id` int(10) unsigned zerofill
,`sum_row` double
,`sum_total` double
);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(0000000001, 'Electronics'),
(0000000002, 'Clothes'),
(0000000003, 'Food and Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `user_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Paid','Cancelled') NOT NULL DEFAULT 'Paid',
  `total` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `order_date`, `status`, `total`) VALUES
(0000000001, 0000000001, '2021-01-06 18:49:11', 'Paid', 300),
(0000000002, 0000000001, '2021-01-06 18:58:38', 'Cancelled', 690),
(0000000003, 0000000002, '2021-01-08 10:40:45', 'Cancelled', 2960),
(0000000004, 0000000002, '2021-01-08 10:41:47', 'Paid', 23000),
(0000000005, 0000000002, '2021-01-08 15:02:27', 'Cancelled', 1840),
(0000000006, 0000000003, '2021-01-08 15:20:27', 'Cancelled', 920),
(0000000007, 0000000003, '2021-01-08 15:29:52', 'Paid', 160),
(0000000008, 0000000003, '2021-01-08 15:32:21', 'Cancelled', 860),
(0000000009, 0000000003, '2021-01-08 18:06:28', 'Cancelled', 160),
(0000000010, 0000000003, '2021-01-08 19:24:23', 'Paid', 21600),
(0000000011, 0000000003, '2021-01-08 20:24:10', 'Paid', 6000),
(0000000012, 0000000003, '2021-01-08 20:25:07', 'Cancelled', 15),
(0000000013, 0000000002, '2021-01-08 21:10:00', 'Paid', 56720),
(0000000014, 0000000002, '2021-01-09 11:38:47', 'Paid', 2000),
(0000000015, 0000000002, '2021-01-17 21:03:39', 'Paid', 160);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `product_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `item_price` float UNSIGNED NOT NULL DEFAULT 0,
  `item_qty` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_id`, `product_id`, `item_price`, `item_qty`) VALUES
(0000000001, 0000000001, 150, 2),
(0000000002, 0000000004, 200, 3),
(0000000002, 0000000003, 15, 6),
(0000000003, 0000000003, 20, 8),
(0000000003, 0000000006, 700, 4),
(0000000004, 0000000005, 23000, 1),
(0000000005, 0000000004, 230, 8),
(0000000006, 0000000001, 160, 1),
(0000000006, 0000000002, 30, 2),
(0000000006, 0000000006, 700, 1),
(0000000007, 0000000001, 160, 1),
(0000000008, 0000000001, 160, 1),
(0000000008, 0000000006, 700, 1),
(0000000009, 0000000001, 160, 1),
(0000000010, 0000000001, 160, 10),
(0000000010, 0000000005, 20000, 1),
(0000000011, 0000000004, 200, 30),
(0000000012, 0000000003, 15, 1),
(0000000013, 0000000002, 30, 24),
(0000000013, 0000000004, 200, 80),
(0000000013, 0000000005, 20000, 2),
(0000000014, 0000000004, 200, 10),
(0000000015, 0000000001, 160, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `order_view_his`
-- (See below for the actual view)
--
CREATE TABLE `order_view_his` (
`product_id` int(10) unsigned zerofill
,`order_id` int(10) unsigned zerofill
,`user_id` int(10) unsigned zerofill
,`order_date` datetime
,`status` enum('Paid','Cancelled')
,`item_price` float unsigned
,`item_qty` int(10) unsigned
,`product_name` varchar(50)
,`vendor_id` int(10) unsigned zerofill
,`description` text
,`price` float unsigned
,`category_id` int(10) unsigned zerofill
);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `vendor_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `description` text DEFAULT NULL,
  `price` float UNSIGNED NOT NULL DEFAULT 0,
  `category_id` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `vendor_id`, `description`, `price`, `category_id`) VALUES
(0000000001, 'T-shirt', 0000000001, 'Pink T-shirt', 160, 0000000002),
(0000000002, 'ESP8266 module', 0000000002, 'ESP8366 module WiFi for Arduino', 30, 0000000001),
(0000000003, 'Energy Drinks', 0000000003, 'Lemon flavor energy drinks', 15, 0000000003),
(0000000004, 'Milk', 0000000004, 'Plain flavor milk', 200, 0000000003),
(0000000005, 'Notebook', 0000000005, 'CPU Core i5 Notebook', 20000, 0000000001),
(0000000006, 'Skinny Fit Jeans', 0000000006, 'Men EZY Ultra Stretch Colour Skinny Fit Jeans', 700, 0000000002);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `image_id` int(10) NOT NULL,
  `product_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`image_id`, `product_id`, `image_url`) VALUES
(1, 0000000003, 'https://www.gnc.com/dw/image/v2/BBLB_PRD/on/demandware.static/-/Sites-master-catalog-gnc/default/dwbff8d0c3/hi-res/503319_web_Reign_Dreamsicle_12x16oz_12_Pack%20with%20Can.jpg?sw=2000&sh=2000&sm=fit'),
(2, 0000000003, 'https://store.bbcomcdn.com/images/store/skuimage/sku_SKU6120160/image_skuSKU6120160_largeImage_X_450_white.jpg'),
(3, 0000000003, 'https://images-na.ssl-images-amazon.com/images/I/81epoSNsWjL._SL1500_.jpg'),
(4, 0000000002, 'https://www.mouser.sg/images/espressifsystems/lrg/ESP32-DevKitC-VB_t.jpg'),
(5, 0000000002, 'https://th.cytron.io/image/catalog/products/NODEMCU-ESP32/NODEMCU-ESP32.jpg'),
(6, 0000000002, 'https://cu.lnwfile.com/z9jd50.jpg'),
(7, 0000000004, 'https://www.justforwomensite.com/wp-content/uploads/2015/07/%E0%B8%9C%E0%B8%A5%E0%B8%B4%E0%B8%95%E0%B8%A0%E0%B8%B1%E0%B8%93%E0%B8%91%E0%B9%8C%E0%B8%99%E0%B8%A1.jpg'),
(8, 0000000004, 'https://d12man5gwydfvl.cloudfront.net/wp-content/uploads/2019/06/shutterstock_568076731-copy.jpg'),
(9, 0000000004, 'https://thaiorchidcooking.com/wp-content/uploads/2019/11/93102_40000_artland-dairy-clear-milk-bottle-drinking-glass-set-of-8-1024x1024.jpg'),
(10, 0000000005, 'https://cf.shopee.co.th/file/216baf5503f14ec9ca48961a43d34d09'),
(11, 0000000005, 'https://media.bnn.in.th/media/195122426576/HP-Notebook-15S-DU2051TX-White-content1.jpg'),
(12, 0000000005, 'https://media.bnn.in.th/media/194441320954/HP-Notebook-15s-fq1000TU-ct-1.jpg'),
(13, 0000000006, 'https://anninc.scene7.com/is/image/LO/541323_6779?$pdp2x$'),
(14, 0000000006, 'https://backend.central.co.th/media/catalog/product/c/d/cds28563433-1.jpg'),
(15, 0000000006, 'https://img1.g-star.com/product/c_fill,f_auto,h_420,q_80/v1559732763/D06746-6553-A889-F01/g-star-raw-lynn-mid-waist-skinnyjeans-medium-blue-model-front.jpg'),
(16, 0000000001, 'https://lp2.hm.com/hmgoepprod?set=quality%5B79%5D%2Csource%5B%2F5e%2F43%2F5e435180810c3852260d5cd4705672e02cdfcf9f.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5Bmen_tshirtstanks_shortsleeve%5D%2Ctype%5BDESCRIPTIVESTILLLIFE%5D%2Cres%5Bm%5D%2Chmver%5B1%5D&call=url['),
(17, 0000000001, 'https://ae01.alicdn.com/kf/HTB1LiDrRFXXXXXHXpXXq6xXFXXXb/2019-Tshirt.jpg'),
(18, 0000000001, 'https://i2.wp.com/heartpunk.co/wp-content/uploads/2019/03/mockup-c9d660d0.jpg?fit=1000%2C1000&ssl=1');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sum_by_user_id`
-- (See below for the actual view)
--
CREATE TABLE `sum_by_user_id` (
`user_id` int(10) unsigned zerofill
,`sum_total` double
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `mobile`, `password`, `address`) VALUES
(0000000001, 'wendy', 'lee', 'lee_wendy@mmail.com', '0628885643', 'lml', 'Unit 14\r\n3 Edgar Buildings\r\nGeorge Street\r\nBath\r\nEngland\r\nBA1 2FJ\r\n'),
(0000000002, 'tina', 'grey', 'tinaaa@amail.com', '0994038264', 'tina_g', 'Department 98\r\n44-46 Morningside Road\r\nEdinburgh\r\nScotland\r\nEH10 4BF'),
(0000000003, 'cinzano', 'rosso', 'ros50@cmail.com', '0867643256', 'cinzanooo', 'Office 33\r\n27 Colmore Row\r\nBirmingham\r\nEngland\r\nB3 2EW'),
(0000000004, 'john', 'fey', 'john_fc@gmail.com', '0236573923', '12345', 'JESSIE SANTANA\r\n4325 W PALM BEACH RD RM 419\r\nSAN FRANCISCO CA 94116'),
(0000000005, 'michael', 'chess', 'm_michael@gmail.com', '0124572888', 'chess', '1771/1 Pattanakarn Road, Suan Luang, Bangkok 10250');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `vendor_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`) VALUES
(0000000001, 'xie lhin'),
(0000000002, 'sally'),
(0000000003, 'kenshin'),
(0000000004, 'DisMilk'),
(0000000005, 'Fujitsu'),
(0000000006, 'UNQ');

-- --------------------------------------------------------

--
-- Structure for view `cart_product`
--
DROP TABLE IF EXISTS `cart_product`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cart_product`  AS SELECT `cart`.`product_id` AS `product_id`, `cart`.`user_id` AS `user_id`, `cart`.`qty` AS `qty`, `product`.`product_name` AS `product_name`, `product`.`vendor_id` AS `vendor_id`, `product`.`description` AS `description`, `product`.`price` AS `price`, `product`.`category_id` AS `category_id`, `product`.`price`* `cart`.`qty` AS `sum_row` FROM (`cart` join `product` on(`cart`.`product_id` = `product`.`product_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `cart_product_sum`
--
DROP TABLE IF EXISTS `cart_product_sum`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cart_product_sum`  AS SELECT `cart_product`.`user_id` AS `user_id`, `cart_product`.`product_id` AS `product_id`, `cart_product`.`qty` AS `qty`, `cart_product`.`product_name` AS `product_name`, `cart_product`.`vendor_id` AS `vendor_id`, `cart_product`.`description` AS `description`, `cart_product`.`price` AS `price`, `cart_product`.`category_id` AS `category_id`, `cart_product`.`sum_row` AS `sum_row`, `sum_by_user_id`.`sum_total` AS `sum_total` FROM (`cart_product` join `sum_by_user_id` on(`cart_product`.`user_id` = `sum_by_user_id`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `order_view_his`
--
DROP TABLE IF EXISTS `order_view_his`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_view_his`  AS SELECT `order_item`.`product_id` AS `product_id`, `order`.`order_id` AS `order_id`, `order`.`user_id` AS `user_id`, `order`.`order_date` AS `order_date`, `order`.`status` AS `status`, `order_item`.`item_price` AS `item_price`, `order_item`.`item_qty` AS `item_qty`, `product`.`product_name` AS `product_name`, `product`.`vendor_id` AS `vendor_id`, `product`.`description` AS `description`, `product`.`price` AS `price`, `product`.`category_id` AS `category_id` FROM ((`order` join `order_item` on(`order`.`order_id` = `order_item`.`order_id`)) join `product` on(`order_item`.`product_id` = `product`.`product_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sum_by_user_id`
--
DROP TABLE IF EXISTS `sum_by_user_id`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sum_by_user_id`  AS SELECT `cart_product`.`user_id` AS `user_id`, sum(`cart_product`.`sum_row`) AS `sum_total` FROM `cart_product` GROUP BY `cart_product`.`user_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`),
  ADD KEY `FK_banner_product` (`product_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `FK__user` (`user_id`),
  ADD KEY `FK_cart_product` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `FK_order_user` (`user_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD KEY `FK_order_item_order` (`order_id`),
  ADD KEY `FK_order_item_product` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_product_category` (`category_id`),
  ADD KEY `FK_product_vendor` (`vendor_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `FK_product_image_product` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `FK_banner_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK__user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `FK_cart_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `FK_order_item_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `FK_order_item_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `FK_product_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `FK_product_image_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
