-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
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

-- Data exporting was unselected.

-- Dumping structure for table sc_fs.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `user_id` int(10) unsigned zerofill NOT NULL,
  `product_id` int(10) unsigned zerofill NOT NULL,
  `qty` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `FK__user` (`user_id`),
  KEY `FK_cart_product` (`product_id`),
  CONSTRAINT `FK__user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `FK_cart_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table sc_fs.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table sc_fs.order
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned zerofill NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Paid','Cancelled') NOT NULL DEFAULT 'Paid',
  `total` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`),
  KEY `FK_order_user` (`user_id`),
  CONSTRAINT `FK_order_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table sc_fs.order_item
CREATE TABLE IF NOT EXISTS `order_item` (
  `order_id` int(10) unsigned zerofill NOT NULL,
  `product_id` int(10) unsigned zerofill NOT NULL,
  `item_price` float unsigned NOT NULL DEFAULT '0',
  `item_qty` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `FK_order_item_order` (`order_id`),
  KEY `FK_order_item_product` (`product_id`),
  CONSTRAINT `FK_order_item_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  CONSTRAINT `FK_order_item_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table sc_fs.product
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `vendor_id` int(10) unsigned zerofill NOT NULL,
  `description` text,
  `price` float unsigned NOT NULL DEFAULT '0',
  `category_id` int(10) unsigned zerofill NOT NULL,
  `status` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`),
  KEY `FK_product_category` (`category_id`),
  KEY `FK_product_vendor` (`vendor_id`),
  CONSTRAINT `FK_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  CONSTRAINT `FK_product_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table sc_fs.product_image
CREATE TABLE IF NOT EXISTS `product_image` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned zerofill NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`image_id`,`product_id`),
  KEY `FK_product_image_product` (`product_id`),
  CONSTRAINT `FK_product_image_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table sc_fs.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `isAdmin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for table sc_fs.vendor
CREATE TABLE IF NOT EXISTS `vendor` (
  `vendor_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.

-- Dumping structure for view sc_fs.cart_product
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `cart_product` (
	`product_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`category_name` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`vendor_name` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`image_url` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`user_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`qty` INT(10) UNSIGNED NOT NULL,
	`product_name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`vendor_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`description` TEXT NULL COLLATE 'utf8_general_ci',
	`price` FLOAT UNSIGNED NOT NULL,
	`category_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`sum_row` DOUBLE NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view sc_fs.cart_product_sum
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `cart_product_sum` (
	`user_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`product_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`category_name` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`vendor_name` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`image_url` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`qty` INT(10) UNSIGNED NOT NULL,
	`product_name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`vendor_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`description` TEXT NULL COLLATE 'utf8_general_ci',
	`price` FLOAT UNSIGNED NOT NULL,
	`category_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`sum_row` DOUBLE NOT NULL,
	`sum_total` DOUBLE NULL
) ENGINE=MyISAM;

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
	`vendor_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`description` TEXT NULL COLLATE 'utf8_general_ci',
	`price` FLOAT UNSIGNED NOT NULL,
	`category_id` INT(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view sc_fs.product_view
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `product_view` (
	`status` INT(3) NOT NULL,
	`product_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`vendor_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`category_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`product_name` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`description` TEXT NULL COLLATE 'utf8_general_ci',
	`price` FLOAT UNSIGNED NOT NULL,
	`category_name` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`vendor_name` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci',
	`image_id` INT(10) NOT NULL,
	`image_url` VARCHAR(255) NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for view sc_fs.sum_by_user_id
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `sum_by_user_id` (
	`user_id` INT(10) UNSIGNED ZEROFILL NOT NULL,
	`sum_total` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sc_fs.cart_product
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `cart_product`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `cart_product` AS SELECT `cart`.`product_id` AS `product_id`, `product_view`.`category_name` AS `category_name`, `product_view`.`vendor_name` AS `vendor_name`, `product_view`.`image_url` AS `image_url`, `cart`.`user_id` AS `user_id`, `cart`.`qty` AS `qty`, `product_view`.`product_name` AS `product_name`, `product_view`.`vendor_id` AS `vendor_id`, `product_view`.`description` AS `description`, `product_view`.`price` AS `price`, `product_view`.`category_id` AS `category_id`, `product_view`.`price`* `cart`.`qty` AS `sum_row` FROM (`cart` join `product_view` on(`cart`.`product_id` = `product_view`.`product_id`)) ;

-- Dumping structure for view sc_fs.cart_product_sum
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `cart_product_sum`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `cart_product_sum` AS SELECT `cart_product`.`user_id` AS `user_id`, `cart_product`.`product_id` AS `product_id`, `cart_product`.`category_name` AS `category_name`, `cart_product`.`vendor_name` AS `vendor_name`, `cart_product`.`image_url` AS `image_url`, `cart_product`.`qty` AS `qty`, `cart_product`.`product_name` AS `product_name`, `cart_product`.`vendor_id` AS `vendor_id`, `cart_product`.`description` AS `description`, `cart_product`.`price` AS `price`, `cart_product`.`category_id` AS `category_id`, `cart_product`.`sum_row` AS `sum_row`, `sum_by_user_id`.`sum_total` AS `sum_total` FROM (`cart_product` join `sum_by_user_id` on(`cart_product`.`user_id` = `sum_by_user_id`.`user_id`)) ;

-- Dumping structure for view sc_fs.order_view_his
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `order_view_his`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `order_view_his` AS SELECT `order_item`.`product_id` AS `product_id`, `order`.`order_id` AS `order_id`, `order`.`user_id` AS `user_id`, `order`.`order_date` AS `order_date`, `order`.`status` AS `status`, `order_item`.`item_price` AS `item_price`, `order_item`.`item_qty` AS `item_qty`, `product`.`product_name` AS `product_name`, `product`.`vendor_id` AS `vendor_id`, `product`.`description` AS `description`, `product`.`price` AS `price`, `product`.`category_id` AS `category_id` FROM ((`order` join `order_item` on(`order`.`order_id` = `order_item`.`order_id`)) join `product` on(`order_item`.`product_id` = `product`.`product_id`)) ;

-- Dumping structure for view sc_fs.product_view
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `product_view`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `product_view` AS SELECT `product`.`status`,`product`.`product_id` AS `product_id`, `product`.`vendor_id` AS `vendor_id`, `product`.`category_id` AS `category_id`, `product`.`product_name` AS `product_name`, `product`.`description` AS `description`, `product`.`price` AS `price`, `category`.`category_name` AS `category_name`, `vendor`.`vendor_name` AS `vendor_name`, `product_image`.`image_id` AS `image_id`, `product_image`.`image_url` AS `image_url` FROM (((`product` join `category` on(`product`.`category_id` = `category`.`category_id`)) join `vendor` on(`product`.`vendor_id` = `vendor`.`vendor_id`)) join `product_image` on(`product`.`product_id` = `product_image`.`product_id`)) WHERE `product_image`.`image_id` = 1 ;

-- Dumping structure for view sc_fs.sum_by_user_id
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `sum_by_user_id`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `sum_by_user_id` AS SELECT `cart_product`.`user_id` AS `user_id`, sum(`cart_product`.`sum_row`) AS `sum_total` FROM `cart_product` GROUP BY `cart_product`.`user_id` ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
