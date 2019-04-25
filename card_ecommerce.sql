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
  `blog_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_post_text` varchar(3000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blog_others` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_blogs`),
  UNIQUE KEY `blog_tables_id_user_unique` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `blogs` */

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

/*Data for the table `categories` */

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

/*Data for the table `items` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2016_06_01_000001_create_oauth_auth_codes_table',1),
(2,'2016_06_01_000002_create_oauth_access_tokens_table',1),
(3,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),
(4,'2016_06_01_000004_create_oauth_clients_table',1),
(5,'2016_06_01_000005_create_oauth_personal_access_clients_table',1);

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values 
('0f0de59f7cff729bf3fa89e1d9404df9a4d3e9e6b47d7e10173ee7c916982b808736203ee182518d',1,1,'TutsForWeb','[]',0,'2019-04-25 12:23:42','2019-04-25 12:23:42','2020-04-25 12:23:42'),
('25b4cbb1c1fae8dbf398352336a4858a2391be2806395337df86bf096be23b615ec0f6756ec8f15f',1,1,'TutsForWeb','[]',0,'2019-04-25 12:18:28','2019-04-25 12:18:28','2020-04-25 12:18:28'),
('301eb178f6230c8d031790e727b0345ec5ca34cfa5380fe94ca1863fdd34bf40730fbf3028b3cc4e',1,1,'TutsForWeb','[]',0,'2019-04-25 12:28:03','2019-04-25 12:28:03','2020-04-25 12:28:03'),
('41be7ad91d50f654db3bfd5f4a0e78e49530a776d823eb01bd1a111d482ef703c08358d369c62fba',1,1,'TutsForWeb','[]',0,'2019-04-25 12:30:04','2019-04-25 12:30:04','2020-04-25 12:30:04'),
('4ee36518323a91262a121ecb020b61230378d90b73fe2ef49d57c7846eef70ae2d3797236aa39492',1,1,'TutsForWeb','[]',0,'2019-04-25 12:20:33','2019-04-25 12:20:33','2020-04-25 12:20:33'),
('5812da1d1bd5d863dc5e18e2822bc8e443c5483fceb701f6900d350742b50aba5f2cebec400e1bb3',1,1,'TutsForWeb','[]',0,'2019-04-25 11:48:31','2019-04-25 11:48:31','2020-04-25 11:48:31'),
('7323f082945f5921e1287ab24e69aebd2aaba2f31311dc99bb46e2f7c10e89cb779663994380179f',1,1,'TutsForWeb','[]',0,'2019-04-25 12:15:37','2019-04-25 12:15:37','2020-04-25 12:15:37'),
('9fd4de51d02aac3264acff0d95c9beaeb284fe33502034103f9aafb922dc25dcbbe6fd33c8fff530',1,1,'TutsForWeb','[]',0,'2019-04-25 12:05:38','2019-04-25 12:05:38','2020-04-25 12:05:38'),
('da713b82039863abfea00f2e2148487e9215fc2ce43da78ce1c8aeb7a8a0963a4bd7eab4a8dd4875',1,1,'TutsForWeb','[]',0,'2019-04-25 11:49:41','2019-04-25 11:49:41','2020-04-25 11:49:41');

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

insert  into `oauth_clients`(`id`,`user_id`,`name`,`secret`,`redirect`,`personal_access_client`,`password_client`,`revoked`,`created_at`,`updated_at`) values 
(1,NULL,'Laravel Personal Access Client','lhWDZPZhqoR5HLWW8PY69wf7MRe6IRJiqfhfgXAy','http://localhost',1,0,0,'2019-04-25 09:17:23','2019-04-25 09:17:23'),
(2,NULL,'Laravel Password Grant Client','V7SCwEoCBdZ5r1SqiQ6I9EjUtsSmUZY8Z0eu3sjp','http://localhost',0,1,0,'2019-04-25 09:17:23','2019-04-25 09:17:23');

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

insert  into `oauth_personal_access_clients`(`id`,`client_id`,`created_at`,`updated_at`) values 
(1,1,'2019-04-25 09:17:23','2019-04-25 09:17:23');

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

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

/*Data for the table `orders` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

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

/*Data for the table `products` */

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

/*Data for the table `sub_categories` */

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

/*Data for the table `user_address_books` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_users` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user_roles` int(3) NOT NULL COMMENT 'admin=1 and user/customer=0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id_users`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`id_user_roles`,`created_at`,`updated_at`) values 
(1,'Tanvir Ahamed','tanvira1993@gmail.com',NULL,'$2y$10$8wDjCp4RB.C2QJOlr.1rSesrO2Y9MkMV8p4diYaKrQ1VYt7Py/dGu',NULL,0,NULL,NULL),
(2,'tan','t@gmail.com',NULL,'$2y$10$wOf3fppa4dZPJF9Jce6Lo.soMlMugxhRIwJYNGvYLEHepKY0pp4MG',NULL,0,NULL,NULL);

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

/*Data for the table `wish_lists` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
