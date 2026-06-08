-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: indo_gummi
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Rubber Parts','2026-06-01 02:30:00','2026-06-01 02:30:00'),(2,'Rubber Seal & Packing','2026-06-01 02:30:00','2026-06-01 02:30:00'),(3,'Rubber Hose & Bellow','2026-06-01 02:30:00','2026-06-01 02:30:00'),(4,'Rubber Roll & Support','2026-06-01 02:30:00','2026-06-01 02:30:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2026_05_18_091214_add_is_featured_to_products_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(180) NOT NULL,
  `description` text,
  `specification` text,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `fk_products_category` (`category_id`),
  CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,1,'Rubber O Ring','rubber-o-ring','Produk karet berbentuk cincin yang digunakan sebagai seal atau penyekat pada mesin dan sambungan pipa.','Material karet industri, ukuran dapat disesuaikan dengan kebutuhan klien.','products/aM4eaVKVnkWM1LAU2S1TlylgJpREPYekEkLf9WP5.jpg',1,'2026-05-18 01:06:01','2026-06-01 18:44:29'),(2,1,'Rubber Flexible Mounting','rubber-flexible-mounting','Komponen karet yang digunakan untuk meredam getaran pada mesin atau peralatan industri.','Material karet elastis, cocok untuk dudukan mesin dan peredam getaran.','products/1kbHnurGl857lnUKEfHs8OqgcPgYvfnKSe1Orurh.jpg',1,'2026-05-18 01:06:01','2026-06-01 19:53:03'),(3,1,'Rubber Diafram Membran','rubber-diafram-membran','Produk karet berbentuk membran yang digunakan pada sistem pompa, valve, atau alat industri lainnya.','Material karet fleksibel, bentuk dan ukuran menyesuaikan kebutuhan.','products/Qal009AleoV9yXC24aOxJqXYmVy7QEXMqj86fvyW.jpg',1,'2026-05-18 01:06:01','2026-06-01 02:28:05'),(4,2,'Rubber Packing Jet Dying','rubber-packing-jet-dying','Packing karet untuk kebutuhan mesin jet dying pada industri tekstil.','Material karet tahan tekanan dan suhu operasional mesin.','products/hnY6iUtw5tWINnjD7aCkgBP65oz7aMGGGjMhjG6B.png',0,'2026-05-18 01:06:01','2026-06-07 04:25:27'),(6,2,'Rubber Seal','rubber-seal','Seal karet untuk mencegah kebocoran pada sambungan, mesin, atau komponen industri.','Material karet industri, tersedia berbagai ukuran.','products/q3RN3IgKHpuwAgaJCu8mdbs1D6Q2s9AmUauJMOpO.jpg',0,'2026-05-18 01:06:01','2026-06-07 04:30:01'),(7,1,'Rubber Butterfly','rubber-butterfly','Komponen karet untuk kebutuhan butterfly valve atau sistem pengaturan aliran.','Bentuk dan ukuran dapat disesuaikan berdasarkan kebutuhan klien.','products/eORvZWycLt7KJVoaOEhnqFPvQFqcPC2Jbk9XYXQN.jpg',0,'2026-05-18 01:06:01','2026-06-07 05:25:59'),(9,1,'Rubber Rackel','rubber-rackel','Komponen karet yang biasa digunakan pada proses industri tertentu seperti printing atau produksi tekstil.','Material karet dengan tingkat kekerasan sesuai kebutuhan.','products/hZ53hpfWKXCHUMIQHrImURse7EgiKA9k8jjvhhUM.jpg',0,'2026-05-18 01:06:01','2026-06-07 05:27:46'),(10,1,'Rubber Nozzle','rubber-nozzle','Nozzle berbahan karet untuk kebutuhan mesin atau aliran fluida tertentu.','Bentuk, diameter, dan material dapat disesuaikan.','products/V5UFNyK4eDikpEOEAqwfTZleo0cNwrVwWZYGDDms.jpg',0,'2026-05-18 01:06:01','2026-06-07 05:27:08'),(11,2,'Packing Silicone Rubber','packing-silicone-rubber','Packing berbahan silicone rubber yang digunakan sebagai penyekat tahan panas dan fleksibel.','Material silicone rubber, cocok untuk kebutuhan sealing khusus.','products/r7O1R8IaK4JfmGjngQIYwlxQjmV9jfuszjLXSdJu.jpg',0,'2026-05-18 01:06:01','2026-06-01 18:45:42'),(12,1,'Karet Bola','karet-bola','Produk karet berbentuk bola untuk kebutuhan industri atau komponen mesin tertentu.','Diameter dan tingkat kekerasan dapat disesuaikan.','products/Pqds36VjMyTQLJ1LQbD34pNZtQ0XaKQcWrRqqkTk.jpg',0,'2026-05-18 01:06:01','2026-06-01 18:47:44'),(13,1,'Rubber Coupling','rubber-coupling','Komponen karet untuk sambungan coupling yang membantu meredam getaran dan menjaga fleksibilitas sambungan.','Material karet industri, ukuran mengikuti kebutuhan mesin.','products/6eoPk3cjkoBFEcP3WSvTJOz7YagOJYcQretSVIIb.jpg',0,'2026-05-18 01:06:01','2026-06-01 18:47:08'),(14,1,'Rubber Impeller','rubber-impeller','Impeller berbahan karet untuk kebutuhan pompa atau sistem aliran tertentu.','Bentuk dan ukuran menyesuaikan spesifikasi mesin.','products/wr06SFDnX9QBFRgFBdy4m9gu6a98AAomKqa0H9eF.jpg',0,'2026-05-18 01:06:01','2026-06-01 18:48:54'),(16,4,'Roll Guider','roll-guider','Komponen roll karet yang digunakan sebagai guider pada mesin industri.','Ukuran roll dan material dapat dibuat sesuai kebutuhan.','products/M1Z6q0TDFSuQw5yCcz3IgkCmSQGCouDysWo5vL9f.jpg',0,'2026-05-18 01:06:01','2026-06-01 17:10:57'),(17,1,'Rubber Mounting','rubber-mounting',NULL,NULL,'products/jcBNjluA9gJEcEI5yhbhzdTFMfqoyBmfYiogioUw.jpg',0,'2026-06-01 18:51:30','2026-06-01 18:51:30'),(18,1,'Rubber Coupling Ban Potong','rubber-coupling-ban-potong',NULL,NULL,'products/F68lM1g4zwT2A7xB8b1lawuv9Qam7bh3KG3PviQ8.jpg',0,'2026-06-01 18:52:31','2026-06-01 18:52:31');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_key` (`setting_key`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'whatsapp_number','62818427665'),(2,'company_name','Indo Gummi'),(3,'company_description','Produsen produk karet industri sesuai kebutuhan klien.'),(4,'company_address','Isi alamat Indo Gummi di sini'),(5,'company_email','email@indogummi.com');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@indogummi.com',NULL,'$2y$12$9X01N2goyG3pHIspFwmWW.U76syJ17A7lxe6hKBeeqMa.nnOkiPBS','3ht3coHyXTAXCHNFlvkn04fMzzVquCc3tZd0u60wJFd4ZnnkFEufRNdehDUN','2026-05-25 12:44:46','2026-05-25 12:44:46');
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

-- Dump completed on 2026-06-08  4:09:52
