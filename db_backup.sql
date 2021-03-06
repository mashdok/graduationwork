-- MariaDB dump 10.19  Distrib 10.5.10-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: c9
-- ------------------------------------------------------
-- Server version	10.5.10-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `cart_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sku_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distributors`
--

DROP TABLE IF EXISTS `distributors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `distributors` (
  `distributor_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `distributor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distributor_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku_id` int(11) NOT NULL,
  `sku_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`distributor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distributors`
--

LOCK TABLES `distributors` WRITE;
/*!40000 ALTER TABLE `distributors` DISABLE KEYS */;
/*!40000 ALTER TABLE `distributors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (5,'2014_10_12_000000_create_users_table',1),(6,'2014_10_12_100000_create_password_resets_table',1),(7,'2019_08_19_000000_create_failed_jobs_table',1),(8,'2019_12_14_000001_create_personal_access_tokens_table',1),(9,'sku_masters_table',2),(10,'distrobutors_table',3),(11,'carts_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sku_masters`
--

DROP TABLE IF EXISTS `sku_masters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sku_masters` (
  `sku_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sku_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku_subcategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distributor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sku_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sku_masters`
--

LOCK TABLES `sku_masters` WRITE;
/*!40000 ALTER TABLE `sku_masters` DISABLE KEYS */;
INSERT INTO `sku_masters` VALUES (1,'???????????????','????????????','????????????',1,1,'2022-04-13 21:51:56','2022-04-13 21:51:56'),(2,'????????????','????????????','??????????????????',1,1,'2022-04-21 00:54:29','2022-04-21 00:54:29'),(3,'???????????????','????????????','??????????????????????????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(4,'????????????','????????????','??????????????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(5,'????????????','????????????','??????????????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(6,'????????????','????????????','????????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(8,'?????????','???????????????','???????????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(9,'?????????','???????????????','???????????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(10,'?????????','???????????????','?????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(11,'?????????','???????????????','??????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(12,'??????','???????????????','???????????????',1,1,'2022-04-21 00:56:13','2022-04-22 00:56:13'),(13,'????????????','???????????????','????????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(14,'?????????','???????????????','????????????',1,1,'2022-04-21 00:56:13','2022-04-21 00:56:13'),(17,'????????????????????????????????????','???????????????','?????????????????????',1,1,'2022-04-21 00:54:29','2022-04-21 00:54:29'),(19,'??????','???????????????','?????????????????????',1,1,'2022-04-13 21:51:56','2022-04-13 21:51:56');
/*!40000 ALTER TABLE `sku_masters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'????????????','dokei@dokei',NULL,'$2y$10$VyeSSleH7LLO5HdWGvkqqu1HDhE1r4TSl8cvT/ZAeFv60WmJl4qFO',NULL,'2022-04-23 07:16:44','2022-04-23 07:16:44'),(2,'???????????????','mutou@mutou',NULL,'$2y$10$G6oqpufsCDQ4G.5ymlKCP.bRGRGgnXA/.CfKSGPTjufy/8q6bqtYG',NULL,'2022-04-23 16:02:10','2022-04-23 16:02:10'),(3,'??????????????????','yasuda@yasuda',NULL,'$2y$10$I4HWm05tndjdu8BShpVq/OxIDdKdngOXwEmrkvTxc2ZCWTWnCNlTW',NULL,'2022-04-23 16:11:34','2022-04-23 16:11:34'),(4,'????????????????????????','sato@sato',NULL,'$2y$10$Wx.CXQYSn9y9TtQCDUBexeQZR6HuCWywlfXCaAjTrCLdZ/a1FXxpC',NULL,'2022-04-23 17:51:04','2022-04-23 17:51:04'),(5,'name','sample@sample.com',NULL,'$2y$10$T9RGfEUziTl/mmJZqYuwrOc0fQfMw7qafa6YITA46OMNWtq8KDemG',NULL,'2022-04-23 17:54:02','2022-04-23 17:54:02');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-23 19:50:52
