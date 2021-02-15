-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sc_fs
CREATE DATABASE IF NOT EXISTS `sc_fs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sc_fs`;

-- Dumping structure for table sc_fs.banner
CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned zerofill DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `is_active` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`banner_id`),
  KEY `FK_banner_product` (`product_id`),
  CONSTRAINT `FK_banner_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table sc_fs.banner: ~9 rows (approximately)
DELETE FROM `banner`;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;

-- Dumping structure for table sc_fs.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` int(10) unsigned zerofill NOT NULL,
  `product_id` int(10) unsigned zerofill NOT NULL,
  `qty` int(10) unsigned NOT NULL DEFAULT 0,
  KEY `FK__user` (`user_id`),
  KEY `FK_cart_product` (`product_id`),
  CONSTRAINT `FK__user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `FK_cart_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sc_fs.cart: ~4 rows (approximately)
DELETE FROM `cart`;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` (`user_id`, `product_id`, `qty`) VALUES
	(0000000002, 0000000001, 3),
	(0000000002, 0000000004, 9),
	(0000000002, 0000000002, 1),
	(0000000002, 0000000003, 1);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping structure for view sc_fs.cart_product
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `cart_product` (
	`product_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`user_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`qty` INT(10) UNSIGNED NOT NULL,
	`product_name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`vendor` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`description` TEXT NULL COLLATE 'utf8_general_ci',
	`price` FLOAT UNSIGNED NOT NULL,
	`img` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`category_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`sum_row` DOUBLE NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view sc_fs.cart_product_sum
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `cart_product_sum` (
	`user_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`product_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`qty` INT(10) UNSIGNED NOT NULL,
	`product_name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`vendor` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`description` TEXT NULL COLLATE 'utf8_general_ci',
	`price` FLOAT UNSIGNED NOT NULL,
	`img` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`category_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`sum_row` DOUBLE NOT NULL,
	`sum_total` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for table sc_fs.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table sc_fs.category: ~3 rows (approximately)
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`category_id`, `category_name`) VALUES
	(0000000001, 'Electronics'),
	(0000000002, 'Clothes'),
	(0000000003, 'Food and Drinks');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table sc_fs.order
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned zerofill NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('Paid','Cancelled') NOT NULL DEFAULT 'Paid',
  `total` float unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`order_id`),
  KEY `FK_order_user` (`user_id`),
  CONSTRAINT `FK_order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table sc_fs.order: ~15 rows (approximately)
DELETE FROM `order`;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table sc_fs.order_item
CREATE TABLE IF NOT EXISTS `order_item` (
  `order_id` int(10) unsigned zerofill NOT NULL,
  `product_id` int(10) unsigned zerofill NOT NULL,
  `item_price` float unsigned NOT NULL DEFAULT 0,
  `item_qty` int(10) unsigned NOT NULL DEFAULT 0,
  KEY `FK_order_item_order` (`order_id`),
  KEY `FK_order_item_product` (`product_id`),
  CONSTRAINT `FK_order_item_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  CONSTRAINT `FK_order_item_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sc_fs.order_item: ~23 rows (approximately)
DELETE FROM `order_item`;
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;

-- Dumping structure for view sc_fs.order_view_his
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `order_view_his` (
	`product_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`order_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`user_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`order_date` DATETIME NOT NULL,
	`status` ENUM('Paid','Cancelled') NOT NULL COLLATE 'utf8_general_ci',
	`item_price` FLOAT UNSIGNED NOT NULL,
	`item_qty` INT(10) UNSIGNED NOT NULL,
	`product_name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`vendor` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`description` TEXT NULL COLLATE 'utf8_general_ci',
	`price` FLOAT UNSIGNED NOT NULL,
	`img` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`category_id` INT(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for table sc_fs.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `vendor` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` float unsigned NOT NULL DEFAULT 0,
  `img` varchar(255) NOT NULL,
  `category_id` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `FK_product_category` (`category_id`),
  CONSTRAINT `FK_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table sc_fs.product: ~6 rows (approximately)
DELETE FROM `product`;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`product_id`, `product_name`, `vendor`, `description`, `price`, `img`, `category_id`) VALUES
	(0000000001, 'T-shirt', 'xie lhin', 'Pink T-shirt', 160, 'https://image.goxip.com/WqX2-V2Ha-rmc1Olxxc55Xzvveg=/fit-in/400x400/filters:fill(white):format(jpeg):quality(80)/https:%2F%2Fthewebster.us%2Fmedia%2Fcatalog%2Fproduct%2F2%2F1%2F2178342470293744173-1.jpg', 0000000002),
	(0000000002, 'ESP8266 module', 'sally', 'ESP8366 module WiFi for Arduino', 30, 'https://nettigo.eu/system/images/2121/original.jpg?1490345692', 0000000001),
	(0000000003, 'Energy Drinks', 'kenshin', 'Lemon flavor energy drinks', 15, 'https://www.gnc.com/dw/image/v2/BBLB_PRD/on/demandware.static/-/Sites-master-catalog-gnc/default/dwbff8d0c3/hi-res/503319_web_Reign_Dreamsicle_12x16oz_12_Pack%20with%20Can.jpg?sw=2000&sh=2000&sm=fit', 0000000003),
	(0000000004, 'Milk', 'DisMilk', 'Plain flavor milk', 200, 'https://cf.shopee.co.th/file/c98236464441c1950e6a9a53012c4b21', 0000000003),
	(0000000005, 'Notebook', 'Fujitsu', 'CPU Core i5 Notebook', 20000, 'https://www.fujitsu.com/th/en/imagesgig5/u759-400x400_tcm111-4369866_tcm111-2750237-32.jpg', 0000000001),
	(0000000006, 'Skinny Fit Jeans', 'UNQ', 'Men EZY Ultra Stretch Colour Skinny Fit Jeans', 700, 'https://d29c1z66frfv6c.cloudfront.net/pub/media/catalog/product/large/aa98e6f037b0d26b3cc63e56b298e4ff6750afd0_xxl-1.jpg', 0000000002);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table sc_fs.product_image
CREATE TABLE IF NOT EXISTS `product_image` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned zerofill NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `FK_product_image_product` (`product_id`),
  CONSTRAINT `FK_product_image_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Dumping data for table sc_fs.product_image: ~18 rows (approximately)
DELETE FROM `product_image`;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;

-- Dumping structure for view sc_fs.sum_by_user_id
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `sum_by_user_id` (
	`user_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`sum_total` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for table sc_fs.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `isAdmin` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table sc_fs.user: ~5 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `mobile`, `password`, `address`, `isAdmin`) VALUES
	(0000000001, 'wendy', 'lee', 'lee_wendy@mmail.com', '0628885643', 'lml', 'Unit 14\r\n3 Edgar Buildings\r\nGeorge Street\r\nBath\r\nEngland\r\nBA1 2FJ\r\n', b'0'),
	(0000000002, 'tina', 'grey', 'tinaaa@amail.com', '0994038264', 'tina_g', 'Department 98\r\n44-46 Morningside Road\r\nEdinburgh\r\nScotland\r\nEH10 4BF', b'0'),
	(0000000003, 'cinzano', 'rosso', 'ros50@cmail.com', '0867643256', 'cinzanooo', 'Office 33\r\n27 Colmore Row\r\nBirmingham\r\nEngland\r\nB3 2EW', b'0'),
	(0000000004, 'john', 'fey', 'john_fc@gmail.com', '0236573923', '12345', 'JESSIE SANTANA\r\n4325 W PALM BEACH RD RM 419\r\nSAN FRANCISCO CA 94116', b'0'),
	(0000000005, 'michael', 'chess', 'm_michael@gmail.com', '0124572888', 'chess', '1771/1 Pattanakarn Road, Suan Luang, Bangkok 10250', b'0'),
	(0000000006, 'Admin', 'Tester', 'fightza5555@gmail.com', '0991479924', '$2y$15$6lsG9rV2gtkNK9nnjK6UouZApGTUDmKYtDShpzoMQ1Jb1m0i8bQWW', 'Tester', b'0');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping structure for view sc_fs.cart_product
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `cart_product`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `cart_product` AS SELECT `cart`.`product_id` AS `product_id`, `cart`.`user_id` AS `user_id`, `cart`.`qty` AS `qty`, `product`.`product_name` AS `product_name`, `product`.`vendor` AS `vendor`, `product`.`description` AS `description`, `product`.`price` AS `price`, `product`.`img` AS `img`, `product`.`category_id` AS `category_id`, `product`.`price`* `cart`.`qty` AS `sum_row` FROM (`cart` join `product` on(`cart`.`product_id` = `product`.`product_id`)) ;

-- Dumping structure for view sc_fs.cart_product_sum
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `cart_product_sum`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `cart_product_sum` AS SELECT `cart_product`.`user_id` AS `user_id`, `cart_product`.`product_id` AS `product_id`, `cart_product`.`qty` AS `qty`, `cart_product`.`product_name` AS `product_name`, `cart_product`.`vendor` AS `vendor`, `cart_product`.`description` AS `description`, `cart_product`.`price` AS `price`, `cart_product`.`img` AS `img`, `cart_product`.`category_id` AS `category_id`, `cart_product`.`sum_row` AS `sum_row`, `sum_by_user_id`.`sum_total` AS `sum_total` FROM (`cart_product` join `sum_by_user_id` on(`cart_product`.`user_id` = `sum_by_user_id`.`user_id`)) ;

-- Dumping structure for view sc_fs.order_view_his
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `order_view_his`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `order_view_his` AS SELECT `order_item`.`product_id` AS `product_id`, `order`.`order_id` AS `order_id`, `order`.`user_id` AS `user_id`, `order`.`order_date` AS `order_date`, `order`.`status` AS `status`, `order_item`.`item_price` AS `item_price`, `order_item`.`item_qty` AS `item_qty`, `product`.`product_name` AS `product_name`, `product`.`vendor` AS `vendor`, `product`.`description` AS `description`, `product`.`price` AS `price`, `product`.`img` AS `img`, `product`.`category_id` AS `category_id` FROM ((`order` join `order_item` on(`order`.`order_id` = `order_item`.`order_id`)) join `product` on(`order_item`.`product_id` = `product`.`product_id`)) ;

-- Dumping structure for view sc_fs.sum_by_user_id
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `sum_by_user_id`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `sum_by_user_id` AS SELECT `cart_product`.`user_id` AS `user_id`, sum(`cart_product`.`sum_row`) AS `sum_total` FROM `cart_product` GROUP BY `cart_product`.`user_id` ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
