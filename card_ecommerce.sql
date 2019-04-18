/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - card_ecommerce
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`card_ecommerce` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `card_ecommerce`;

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id_blogs` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL COMMENT 'admin user',
  `blog_post_text` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_blogs`),
  UNIQUE KEY `blog_tables_id_user_unique` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_categories`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id_items` int(11) NOT NULL AUTO_INCREMENT,
  `id_products` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL,
  `quantity_no` enum('100','250','300') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_items`),
  UNIQUE KEY `item_tables_id_product_unique` (`id_products`),
  UNIQUE KEY `item_tables_id_order_unique` (`id_orders`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL,
  `user_approval` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_in_progress` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_order_complete` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_address_books` int(11) DEFAULT NULL,
  `review_points` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_comment` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_orders`),
  UNIQUE KEY `order_tables_id_user_unique` (`id_users`),
  UNIQUE KEY `order_tables_id_address_book_unique` (`id_address_books`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL COMMENT 'admin user',
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_categories` int(11) DEFAULT NULL,
  `id_sub_categories` int(11) DEFAULT NULL,
  `quantity_no` enum('100','250','300') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` decimal(12,2) DEFAULT NULL,
  `discount_rate` decimal(12,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_products`),
  UNIQUE KEY `product_tables_id_user_unique` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `sub_categories` */

DROP TABLE IF EXISTS `sub_categories`;

CREATE TABLE `sub_categories` (
  `id_sub_categories` int(11) NOT NULL AUTO_INCREMENT,
  `id_categories` int(11) DEFAULT NULL,
  `sub_categories_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_categories_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_sub_categories`),
  UNIQUE KEY `sub_category_tables_id_category_unique` (`id_categories`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `user_address_books` */

DROP TABLE IF EXISTS `user_address_books`;

CREATE TABLE `user_address_books` (
  `id_address_books` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL COMMENT 'customer user',
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `set_default_address` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_address_books`),
  UNIQUE KEY `user_address_book_tables_id_user_unique` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `wish_lists` */

DROP TABLE IF EXISTS `wish_lists`;

CREATE TABLE `wish_lists` (
  `id_wish_lists` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) DEFAULT NULL COMMENT 'customer user',
  `id_products` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_wish_lists`),
  UNIQUE KEY `wish_list_tables_id_user_unique` (`id_users`),
  UNIQUE KEY `wish_list_tables_id_product_unique` (`id_products`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
