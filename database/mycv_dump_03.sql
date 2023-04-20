-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: mycv
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `features` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `features_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `features`
--

LOCK TABLES `features` WRITE;
/*!40000 ALTER TABLE `features` DISABLE KEYS */;
INSERT INTO `features` VALUES (1,'MVC framework','MVC pattern in frameworks'),(2,'Import/Export Excel/XML/CSV','Import/Export procedures in different formats:  Excel, XML, CSV'),(3,'PDF generation','generation of the PDF document  from application data');
/*!40000 ALTER TABLE `features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idea_to_idea`
--

DROP TABLE IF EXISTS `idea_to_idea`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `idea_to_idea` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pidea_id` bigint unsigned NOT NULL,
  `cidea_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pideas_to_idea_fk` (`pidea_id`),
  KEY `cideas_to_idea_fk` (`cidea_id`),
  CONSTRAINT `cideas_to_idea_fk` FOREIGN KEY (`cidea_id`) REFERENCES `ideas` (`id`),
  CONSTRAINT `pideas_to_idea_fk` FOREIGN KEY (`pidea_id`) REFERENCES `ideas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idea_to_idea`
--

LOCK TABLES `idea_to_idea` WRITE;
/*!40000 ALTER TABLE `idea_to_idea` DISABLE KEYS */;
INSERT INTO `idea_to_idea` VALUES (1,'pic',17,36,NULL,NULL),(2,'pic',19,37,NULL,NULL),(3,'pic',18,38,NULL,NULL),(4,'pic',20,39,NULL,NULL),(5,'pic',21,40,NULL,NULL),(6,'pic',22,41,NULL,NULL),(7,'pic',23,42,NULL,NULL),(8,'pic',24,43,NULL,NULL),(9,'pic',25,44,NULL,NULL),(10,'pic',26,78,NULL,NULL),(11,'pic',27,79,NULL,NULL),(12,'pic',28,80,NULL,NULL),(41,'short',1,74,NULL,NULL),(42,'short',2,75,NULL,NULL),(43,'short',3,76,NULL,NULL),(44,'short',4,63,NULL,NULL),(45,'short',5,64,NULL,NULL),(46,'short',6,77,NULL,NULL),(47,'short',8,68,NULL,NULL),(48,'short',9,67,NULL,NULL),(49,'short',10,66,NULL,NULL),(50,'short',11,65,NULL,NULL),(51,'short',12,69,NULL,NULL),(52,'short',13,70,NULL,NULL),(53,'short',14,72,NULL,NULL),(54,'short',15,71,NULL,NULL),(55,'short',16,73,NULL,NULL),(56,'short',17,48,NULL,NULL),(57,'short',18,49,NULL,NULL),(58,'short',19,50,NULL,NULL),(59,'short',20,51,NULL,NULL),(60,'short',21,52,NULL,NULL),(61,'short',22,53,NULL,NULL),(62,'short',23,54,NULL,NULL),(63,'short',24,55,NULL,NULL),(64,'short',25,56,NULL,NULL),(65,'short',26,57,NULL,NULL),(66,'short',27,58,NULL,NULL),(67,'short',28,59,NULL,NULL),(68,'short',29,60,NULL,NULL),(69,'short',30,61,NULL,NULL),(70,'short',35,62,NULL,NULL);
/*!40000 ALTER TABLE `idea_to_idea` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ideas`
--

DROP TABLE IF EXISTS `ideas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ideas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ideas_to_topic_fk` (`topic_id`),
  CONSTRAINT `ideas_to_topic_fk` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ideas`
--

LOCK TABLES `ideas` WRITE;
/*!40000 ALTER TABLE `ideas` DISABLE KEYS */;
INSERT INTO `ideas` VALUES (1,'Visual C++ , MFC','Visual C++ , MFC',15,NULL,NULL),(2,'gcc, qcc, multithreaded, programming, IPC','gcc, qcc, multithreaded, programming, IPC',15,NULL,NULL),(3,'Photon App Builder','Photon App Builder',15,NULL,NULL),(4,'Visual Basic and VBA','Visual Basic and VBA',12,NULL,NULL),(5,'WSH, JS, VBScript','WSH, JS, VBScript',12,NULL,NULL),(6,'Assembler to Intel 8086/88','Assembler to Intel 8086/88',15,NULL,NULL),(7,'dBase, Fox Base','dBase, Fox Base',13,NULL,NULL),(8,'MS Access','MS Access',13,NULL,NULL),(9,'SQL Server','SQL Server',13,NULL,NULL),(10,'PostgreSQL','PostgreSQL',13,NULL,NULL),(11,'MySQL','MySQL',13,NULL,NULL),(12,'MS - DOS','MS - DOS',14,NULL,NULL),(13,'UNIX AIX, UNIX V, X - Window','UNIX AIX, UNIX V, X - Window',14,NULL,NULL),(14,'Windows ','Windows ',14,NULL,NULL),(15,'LINUX','LINUX, Bash script',14,NULL,NULL),(16,'QNX / Neutrino, Photon                             ','QNX / Neutrino, Photon                             ',14,NULL,NULL),(17,'HTML, HTML 5','I have pretty extensive programmer experience. Started in 1995 when I was in USA at the student exchange program in the University of Alabama.There I got acquainted with the WWW and took my first classes and first practice in web programming.',10,NULL,'2023-04-05 11:29:14'),(18,'CSS, CSS3','I have substantive makeup experience. Great deal of recent advances in layout technique like <ul> <li>SVG</li><li>flexbox</li><li>canvas</li><li>css-animation</li></ul></p><p>I  use responsive design for my frontend development.</p>',10,NULL,'2023-04-05 12:55:28'),(19,'JavaScript, Typescript','JavaScript, Typescript',10,NULL,NULL),(20,'PHP','PHP',10,NULL,NULL),(21,'JQuery, Ajax, JQuery UI','JQuery, Ajax, JQuery UI',10,NULL,NULL),(22,'Google API, Yandex API','Google API, Yandex API',10,NULL,NULL),(23,'Yii Framework, Yii 2','Yii Framework, Yii 2',10,NULL,NULL),(24,'Laravel','Laravel',10,NULL,NULL),(25,'Codeigniter','Codeigniter',10,NULL,NULL),(26,'Bootstrap framework','Bootstrap framework',10,NULL,NULL),(27,'CMS: Joomla, Wordpress','CMS: Joomla, Wordpress',10,NULL,NULL),(28,'Outsystems Platform','Outsystems Platform',10,NULL,NULL),(29,'Git DVCS','Git DVCS',11,NULL,NULL),(30,'JIRA, Rally, Trello, Redmine','JIRA, Rally, Trello, Redmine product management tools',11,NULL,'2023-04-04 18:02:35'),(31,'Salesforce, Post Affiliate Pro','Salesforce, Post Affiliate Pro commersial web applications',11,NULL,'2023-04-04 18:02:53'),(32,'requirements=suit','looking through the list of the requirements and skills you expect from the applicants I see that entirely suit for your needs.',20,'2023-04-05 10:28:12','2023-04-05 10:32:07'),(33,'when=immediately','I can start to work on the project immediately and be engaged in the work on it as mush as it is needed to meet your expectations.',20,'2023-04-05 10:31:57','2023-04-05 10:31:57'),(34,'hope','Hope that my skills be useful for development of your product.',20,'2023-04-05 10:33:20','2023-04-05 10:33:20'),(35,'Docker','Docker, Docker-compose',11,NULL,NULL),(36,'HTML','fa fa-html5',25,'2023-04-06 04:18:09','2023-04-06 04:18:09'),(37,'JS','fa fab fa-js-square',25,'2023-04-06 04:35:01','2023-04-06 07:45:45'),(38,'CSS','fa fa-css3',25,'2023-04-06 04:35:55','2023-04-06 04:35:55'),(39,'PHP','fa fab fa-php',25,'2023-04-06 07:48:50','2023-04-06 07:48:50'),(40,'jQuery','jquery.png',25,'2023-04-06 08:46:14','2023-04-06 08:54:10'),(41,'Google API','fa fab fa-google-plus-g',25,'2023-04-06 09:05:02','2023-04-06 09:05:02'),(42,'Yii','yii.png',25,'2023-04-06 09:10:16','2023-04-06 09:10:56'),(43,'Laravel','fa fab fa-laravel',25,'2023-04-06 09:10:16','2023-04-06 09:10:16'),(44,'Codeigniter','codeig.png',25,'2023-04-06 09:15:46','2023-04-06 09:15:46'),(45,'flex tutorial','https://tproger.ru/translations/how-css-flexbox-works/',27,'2023-04-06 09:27:23','2023-04-06 09:27:23'),(46,'individual','individual projects',28,'2023-04-06 12:58:59','2023-04-06 12:58:59'),(47,'team','team projects',28,'2023-04-06 12:59:16','2023-04-06 12:59:16'),(48,'HTML','HTML',29,'2023-04-09 03:01:10','2023-04-09 03:01:10'),(49,'CSS','CSS',29,'2023-04-09 03:01:26','2023-04-09 03:01:26'),(50,'JS','JavaScript',29,'2023-04-09 03:01:47','2023-04-09 03:01:47'),(51,'PHP','PHP',29,'2023-04-09 03:02:12','2023-04-09 03:02:12'),(52,'jQuery','JQuery, Ajax, JQuery UI',29,'2023-04-09 03:02:40','2023-04-09 03:02:40'),(53,'Google API','Google API, Yandex API',29,'2023-04-09 03:03:13','2023-04-09 03:03:13'),(54,'Yii','Yii Framework, Yii 2',29,'2023-04-09 03:03:44','2023-04-09 03:03:44'),(55,'Laravel','Laravel',29,'2023-04-09 03:04:11','2023-04-09 03:04:11'),(56,'Codeigniter','Codeigniter',29,'2023-04-09 03:04:28','2023-04-09 03:04:28'),(57,'Bootstrap','Bootstrap framework',29,'2023-04-09 03:04:51','2023-04-09 03:04:51'),(58,'Joomla','CMS: Joomla, Wordpress',29,'2023-04-09 03:05:22','2023-04-09 03:05:22'),(59,'Outsystems','Outsystems Platform',29,'2023-04-09 03:05:58','2023-04-09 03:05:58'),(60,'Git','Git DVCS',29,'2023-04-09 03:06:41','2023-04-09 03:06:41'),(61,'JIRA','JIRA, Rally, Trello, Redmine',29,'2023-04-09 03:07:25','2023-04-09 03:07:25'),(62,'Docker','Docker',29,'2023-04-09 03:07:53','2023-04-09 03:07:53'),(63,'Visual Basic','Visual Basic and VBA',29,'2023-04-09 03:09:32','2023-04-09 03:09:32'),(64,'VBScript','VBScript',29,'2023-04-09 03:10:00','2023-04-09 03:10:00'),(65,'MySQL','MySQL',29,'2023-04-09 03:10:51','2023-04-09 03:10:51'),(66,'PostgreSQL','PostgreSQL',29,'2023-04-09 03:11:39','2023-04-09 03:11:39'),(67,'SQL Server','SQL Server',29,'2023-04-09 03:11:53','2023-04-09 03:11:53'),(68,'MS Access','MS Access',29,'2023-04-09 03:12:21','2023-04-09 03:12:21'),(69,'DOS','MS - DOS',29,'2023-04-09 03:13:02','2023-04-09 03:13:02'),(70,'UNIX','UNIX AIX, UNIX V, X - Window',29,'2023-04-09 03:13:27','2023-04-09 03:13:27'),(71,'LINUX','LINUX',29,'2023-04-09 03:13:52','2023-04-09 03:13:52'),(72,'Windows','Windows',29,'2023-04-09 03:14:12','2023-04-09 03:14:12'),(73,'QNX','QNX / Neutrino, Photon',29,'2023-04-09 03:14:38','2023-04-09 03:14:38'),(74,'C++','Visual C++ , MFC',29,'2023-04-09 03:15:16','2023-04-09 03:15:16'),(75,'gcc, qcc','gcc, qcc',29,'2023-04-09 03:15:48','2023-04-09 03:15:48'),(76,'Photon','Photon App Builder',29,'2023-04-09 03:16:20','2023-04-09 03:16:20'),(77,'Assembler','Assembler to Intel 8086/88',29,'2023-04-09 03:16:46','2023-04-09 03:16:46'),(78,'bootstrap.svg','bootstrap.svg',25,'2023-04-10 03:55:23','2023-04-10 03:55:23'),(79,'Joomla','fa fab fa-joomla',25,'2023-04-10 03:58:18','2023-04-10 04:00:28'),(80,'outsystems','outsystems.png',25,'2023-04-10 04:00:12','2023-04-10 04:00:12'),(81,'web','Web technology',30,'2023-04-10 04:24:57','2023-04-10 04:24:57'),(82,'desktop','Desktop office software',30,'2023-04-10 04:25:20','2023-04-10 04:25:20'),(83,'emded','Embedded system and equipment control',30,'2023-04-10 04:25:48','2023-04-10 04:25:48'),(84,'name','The Invento Labs',33,'2023-04-12 07:09:37','2023-04-12 07:10:29'),(85,'link','https://invento-labs.com/',33,'2023-04-12 07:10:06','2023-04-12 07:10:06'),(86,'location','Hungary',33,'2023-04-12 07:11:02','2023-04-12 07:11:02'),(87,'name','real-estate agency GCN',35,'2023-04-12 07:15:24','2023-04-12 07:16:22'),(88,'link','http://gcn-spb.ru/',35,'2023-04-12 07:15:42','2023-04-12 07:18:08'),(89,'location','St. Petersburg, Russia',35,'2023-04-12 07:16:01','2023-04-12 07:18:24'),(90,'name','Service Central',36,'2023-04-12 07:36:17','2023-04-12 07:36:17'),(91,'link','https://servicecentral.com/',36,'2023-04-12 07:36:37','2023-04-12 07:36:37'),(92,'location','Tulsa, USA',36,'2023-04-12 07:37:02','2023-04-12 07:37:02'),(93,'name','Nash.travel',37,'2023-04-12 07:39:31','2023-04-12 07:39:31'),(94,'link','https://nash.travel/',37,'2023-04-12 07:40:02','2023-04-12 07:40:02'),(95,'location','St. Petersburg, Russia',37,'2023-04-12 07:40:27','2023-04-12 07:40:27'),(96,'Repair service software building','Software to Authorize, Perform, and Track Services on Any Product',38,'2023-04-12 07:45:05','2023-04-12 07:45:05'),(97,'Real estate agency','Real estate agency',38,'2023-04-12 07:45:37','2023-04-12 07:45:37'),(98,'Web application building','Web application building',38,'2023-04-12 07:54:27','2023-04-12 07:54:27'),(99,'On-line hotel booking and property enting aggregate application','On-line hotel booking and property renting aggregate web application startup',38,'2023-04-12 07:56:58','2023-04-13 03:51:25'),(100,'Web-based local tourist industry information system','Web-based local tourist industry information system',38,'2023-04-12 07:59:07','2023-04-12 07:59:07'),(101,'name','Motu',39,'2023-04-12 08:00:40','2023-04-12 08:00:40'),(102,'location','St. Petersburg, Russia',39,'2023-04-12 08:01:23','2023-04-12 08:01:23'),(103,'name','Academsnab',40,'2023-04-12 08:02:44','2023-04-12 08:02:44'),(104,'link','https://academs.ru/',40,'2023-04-12 08:04:50','2023-04-12 08:04:50'),(105,'location','St. Petersburg, Russia',40,'2023-04-12 08:06:40','2023-04-12 08:06:40'),(106,'Hygiene product supplier','Hygiene product supplier',38,'2023-04-12 08:07:56','2023-04-13 03:44:11'),(107,'type','Web-based application for on-line psychological help.',41,'2023-04-12 09:10:24','2023-04-12 09:10:24'),(108,'name','Pinga',41,'2023-04-12 09:10:36','2023-04-12 09:10:36'),(109,'position','senior backend developer in PHP 8  and Yii 2 project',42,'2023-04-12 09:15:54','2023-04-12 09:15:54'),(110,'link','https://pinga.app/',41,'2023-04-12 09:17:27','2023-04-12 09:17:27'),(111,'Web-based aggregate information system for tourist industry','Web-based aggregate information system for tourist industry',38,'2023-04-13 03:36:54','2023-04-13 03:36:54'),(112,'Cable components and equipment manufacturer','Cable components and equipment manufacturer',38,'2023-04-13 03:43:44','2023-04-13 03:43:57'),(113,'On-line QR code  marketplace application','On-line QR code  marketplace application',38,'2023-04-13 03:48:42','2023-04-13 03:48:42'),(114,'Affiliate network web application startup','Affiliate network web application startup',38,'2023-04-13 04:50:39','2023-04-13 04:50:39'),(115,'Security equipment distribution','Security equipment distribution',38,'2023-04-13 04:52:32','2023-04-13 04:52:32'),(116,'Automobile tire distributor','Automobile tire distributor',38,'2023-04-13 05:10:15','2023-04-13 05:10:15'),(117,'Advertising Agency','Advertising Agency',38,'2023-04-13 05:13:48','2023-04-13 05:13:48'),(118,'Orthopedic and medical product distribution','Orthopedic and medical product distribution',38,'2023-04-13 05:16:12','2023-04-13 05:16:12'),(119,'Plumbing fixture retailer','Plumbing fixture retailer',38,'2023-04-13 15:02:49','2023-04-13 15:02:49'),(120,'Individual housing construction','Individual housing construction',38,'2023-04-13 19:13:28','2023-04-13 19:13:28'),(121,'Meat products distribution','Meat products distribution',38,'2023-04-13 19:15:05','2023-04-13 19:15:05'),(122,'Canned fish factory','Canned fish factory',38,'2023-04-13 19:16:43','2023-04-13 19:16:43'),(123,'Aviation control system engineering, construction and deployment','Aviation control system engineering, construction and deployment',38,'2023-04-13 19:19:03','2023-04-13 19:19:03'),(124,'Shipping company','Shipping company',38,'2023-04-13 19:20:47','2023-04-13 19:20:47'),(125,'Ferrous and non-ferrous metals supplier','Ferrous and non-ferrous metals supplier',38,'2023-04-13 19:24:31','2023-04-13 19:24:56'),(126,'MVC framework','MVC principle in frameworks ',45,NULL,NULL),(127,'Import/Export Excel/XML/CSV','Import/Export procedures in different formats:  Excel, XML, CSV',45,NULL,NULL),(128,'PDF generation','PDF file generation from HTML markup',45,NULL,NULL),(129,'Shopping Cart for online ordering','Shopping Cart for web shop: unauthorized → cookies, authorized → db',45,NULL,NULL),(130,'email sending','Utilize email sending from application automatic message creation and dispatch ',45,NULL,NULL),(131,'CRUD with filtering, sorting, pagination','',45,NULL,NULL),(132,'QR code generation','',45,NULL,NULL),(133,'Customer registration and access contol','',45,NULL,NULL),(134,'Composer implementation','',45,NULL,NULL),(135,'RESTful API','',45,NULL,NULL),(136,'Google and Yandex map API','',45,NULL,NULL),(137,'Automated application deployment','',45,NULL,NULL),(138,'Google and Facebook SSO','',45,NULL,NULL),(139,'multi-thread programming','multi-thread programming',47,'2023-04-14 09:25:43','2023-04-14 09:26:00'),(140,'interprocess messaging','interprocess messaging',47,'2023-04-14 09:26:37','2023-04-14 09:26:37'),(141,'resource managers and software interrupt handlers','resource managers and software interrupt handlers',47,'2023-04-14 09:27:00','2023-04-14 09:27:00'),(142,'features','tasks performed',41,'2023-04-14 09:43:55','2023-04-14 09:43:55');
/*!40000 ALTER TABLE `ideas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English','en-En'),(2,'Russian','ru-Ru'),(3,'Deutch','de-DE'),(4,'Hindi','hi');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',2),(5,'2023_02_27_212416_create_features_table',2),(6,'2023_02_28_213628_create_topics_table',3),(7,'2023_02_28_213731_create_ideas_table',3),(8,'2023_03_03_204253_create_publishes_table',3),(9,'2023_03_03_204325_create_sketches_table',4),(10,'2023_03_03_212656_create_languages_table',4),(11,'2023_03_03_212825_create_txts_table',5),(12,'2023_03_11_174012_create_projects_table',5),(13,'2023_03_11_174108_create_project_to_ideas_table',6),(14,'2023_03_12_201542_create_forigrn_key_for_project_to_ideas',6),(15,'2023_03_23_093534_create_forigrn_key_for_idea_to_topic',6),(16,'2023_03_24_123437_rename_column_to_topics_parent',6),(21,'2023_04_05_210550_create_create_table_idea_to_ideas_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `project_to_ideas`
--

DROP TABLE IF EXISTS `project_to_ideas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project_to_ideas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `project_id` bigint unsigned NOT NULL,
  `idea_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_to_ideas_project_id_fk` (`project_id`),
  KEY `iproject_to_ideas_dea_id_fk` (`idea_id`),
  CONSTRAINT `iproject_to_ideas_dea_id_fk` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`),
  CONSTRAINT `project_to_ideas_project_id_fk` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=336 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_to_ideas`
--

LOCK TABLES `project_to_ideas` WRITE;
/*!40000 ALTER TABLE `project_to_ideas` DISABLE KEYS */;
INSERT INTO `project_to_ideas` VALUES (1,1,19,NULL,NULL),(2,1,20,NULL,NULL),(3,1,23,NULL,NULL),(4,1,29,NULL,NULL),(5,1,30,NULL,NULL),(6,1,35,NULL,NULL),(7,1,11,NULL,NULL),(8,2,11,NULL,NULL),(9,2,17,NULL,NULL),(10,2,18,NULL,NULL),(11,2,19,NULL,NULL),(12,2,20,NULL,NULL),(13,2,21,NULL,NULL),(14,2,23,NULL,NULL),(15,2,24,NULL,NULL),(16,2,26,NULL,NULL),(17,2,29,NULL,NULL),(18,2,35,NULL,NULL),(19,3,11,NULL,NULL),(20,3,15,NULL,NULL),(21,1,15,NULL,NULL),(22,2,15,NULL,NULL),(23,3,17,NULL,NULL),(24,3,18,NULL,NULL),(25,3,19,NULL,NULL),(26,3,20,NULL,NULL),(27,3,21,NULL,NULL),(28,3,23,NULL,NULL),(29,3,29,NULL,NULL),(30,3,30,NULL,NULL),(31,3,35,NULL,NULL),(32,4,11,NULL,NULL),(33,4,15,NULL,NULL),(34,4,17,NULL,NULL),(35,4,18,NULL,NULL),(36,4,19,NULL,NULL),(37,4,20,NULL,NULL),(38,4,21,NULL,NULL),(39,4,23,NULL,NULL),(40,4,29,NULL,NULL),(41,4,30,NULL,NULL),(42,4,35,NULL,NULL),(43,5,28,NULL,NULL),(44,5,11,NULL,NULL),(45,5,9,NULL,NULL),(46,5,17,NULL,NULL),(47,5,18,NULL,NULL),(48,5,19,NULL,NULL),(49,5,21,NULL,NULL),(50,5,30,NULL,NULL),(51,6,11,NULL,NULL),(52,6,17,NULL,NULL),(53,6,18,NULL,NULL),(54,6,19,NULL,NULL),(55,6,20,NULL,NULL),(56,6,21,NULL,NULL),(57,6,23,NULL,NULL),(58,7,11,NULL,NULL),(59,7,17,NULL,NULL),(60,7,18,NULL,NULL),(61,7,19,NULL,NULL),(62,7,20,NULL,NULL),(63,7,21,NULL,NULL),(64,7,22,NULL,NULL),(65,7,23,NULL,NULL),(66,7,26,NULL,NULL),(67,7,29,NULL,NULL),(68,8,11,NULL,NULL),(69,8,17,NULL,NULL),(70,8,18,NULL,NULL),(71,8,19,NULL,NULL),(72,8,20,NULL,NULL),(73,8,25,NULL,NULL),(74,8,29,NULL,NULL),(75,9,11,NULL,NULL),(76,9,17,NULL,NULL),(77,9,18,NULL,NULL),(78,9,19,NULL,NULL),(79,9,20,NULL,NULL),(80,9,21,NULL,NULL),(81,9,23,NULL,NULL),(82,9,26,NULL,NULL),(83,10,11,NULL,NULL),(84,10,17,NULL,NULL),(85,10,18,NULL,NULL),(86,10,19,NULL,NULL),(87,10,20,NULL,NULL),(88,10,21,NULL,NULL),(89,10,23,NULL,NULL),(90,5,31,NULL,NULL),(91,11,31,NULL,NULL),(92,11,11,NULL,NULL),(93,11,17,NULL,NULL),(94,11,18,NULL,NULL),(95,11,19,NULL,NULL),(96,11,20,NULL,NULL),(97,11,21,NULL,NULL),(98,11,23,NULL,NULL),(109,12,26,NULL,NULL),(110,13,22,NULL,NULL),(111,1,47,NULL,NULL),(112,2,46,NULL,NULL),(113,3,47,NULL,NULL),(114,4,47,NULL,NULL),(115,5,47,NULL,NULL),(117,7,46,NULL,NULL),(118,8,47,NULL,NULL),(119,9,46,NULL,NULL),(120,10,46,NULL,NULL),(121,11,46,NULL,NULL),(122,12,46,NULL,NULL),(123,13,46,NULL,NULL),(124,14,46,NULL,NULL),(125,15,46,NULL,NULL),(126,16,46,NULL,NULL),(127,17,46,NULL,NULL),(128,18,46,NULL,NULL),(129,19,46,NULL,NULL),(130,20,46,NULL,NULL),(131,21,47,NULL,NULL),(132,22,46,NULL,NULL),(133,23,47,NULL,NULL),(134,24,47,NULL,NULL),(135,25,47,NULL,NULL),(136,26,46,NULL,NULL),(137,27,46,NULL,NULL),(170,6,46,NULL,NULL),(192,5,10,NULL,NULL),(193,9,27,NULL,NULL),(194,10,27,NULL,NULL),(195,13,15,NULL,NULL),(196,8,14,NULL,NULL),(197,6,14,NULL,NULL),(198,7,14,NULL,NULL),(199,12,17,NULL,NULL),(200,12,18,NULL,NULL),(201,12,19,NULL,NULL),(202,12,21,NULL,NULL),(203,12,26,NULL,NULL),(204,13,17,NULL,NULL),(205,13,18,NULL,NULL),(206,13,19,NULL,NULL),(207,13,20,NULL,NULL),(208,13,21,NULL,NULL),(209,13,23,NULL,NULL),(210,13,26,NULL,NULL),(211,13,11,NULL,NULL),(212,14,17,NULL,NULL),(213,14,18,NULL,NULL),(214,14,19,NULL,NULL),(215,14,20,NULL,NULL),(216,14,21,NULL,NULL),(217,14,22,NULL,NULL),(218,14,26,NULL,NULL),(219,14,27,NULL,NULL),(220,15,4,NULL,NULL),(221,15,5,NULL,NULL),(222,15,8,NULL,NULL),(223,15,9,NULL,NULL),(224,15,14,NULL,NULL),(225,16,4,NULL,NULL),(226,16,5,NULL,NULL),(227,16,8,NULL,NULL),(228,16,9,NULL,NULL),(229,16,14,NULL,NULL),(230,17,4,NULL,NULL),(231,17,5,NULL,NULL),(232,17,8,NULL,NULL),(233,20,14,NULL,NULL),(234,17,14,NULL,NULL),(235,18,4,NULL,NULL),(236,18,5,NULL,NULL),(237,18,8,NULL,NULL),(238,20,4,NULL,NULL),(239,18,14,NULL,NULL),(240,19,4,NULL,NULL),(241,19,5,NULL,NULL),(242,19,8,NULL,NULL),(243,19,9,NULL,NULL),(244,19,14,NULL,NULL),(245,20,5,NULL,NULL),(246,20,8,NULL,NULL),(247,21,4,NULL,NULL),(248,21,5,NULL,NULL),(249,21,8,NULL,NULL),(250,21,9,NULL,NULL),(251,21,14,NULL,NULL),(252,27,17,NULL,NULL),(253,22,5,NULL,NULL),(254,22,8,NULL,NULL),(255,22,9,NULL,NULL),(256,22,14,NULL,NULL),(257,27,18,NULL,NULL),(258,27,14,NULL,NULL),(259,27,4,NULL,NULL),(260,23,1,NULL,NULL),(261,23,2,NULL,NULL),(262,23,3,NULL,NULL),(263,23,5,NULL,NULL),(264,23,6,NULL,NULL),(265,23,7,NULL,NULL),(266,23,10,NULL,NULL),(267,23,13,NULL,NULL),(268,27,13,NULL,NULL),(269,23,12,NULL,NULL),(270,24,5,NULL,NULL),(271,24,4,NULL,NULL),(272,24,14,NULL,NULL),(273,24,8,NULL,NULL),(274,26,5,NULL,NULL),(275,26,4,NULL,NULL),(276,26,14,NULL,NULL),(277,26,8,NULL,NULL),(278,25,5,NULL,NULL),(279,25,4,NULL,NULL),(280,25,14,NULL,NULL),(281,25,8,NULL,NULL),(282,1,81,NULL,NULL),(283,2,81,NULL,NULL),(284,3,81,NULL,NULL),(285,4,81,NULL,NULL),(286,5,81,NULL,NULL),(287,6,81,NULL,NULL),(288,7,81,NULL,NULL),(289,8,81,NULL,NULL),(290,9,81,NULL,NULL),(291,10,81,NULL,NULL),(292,11,81,NULL,NULL),(293,12,81,NULL,NULL),(294,13,81,NULL,NULL),(295,14,81,NULL,NULL),(296,15,82,NULL,NULL),(297,16,82,NULL,NULL),(298,17,82,NULL,NULL),(299,18,82,NULL,NULL),(300,19,82,NULL,NULL),(301,20,82,NULL,NULL),(302,21,82,NULL,NULL),(303,22,82,NULL,NULL),(304,23,83,NULL,NULL),(305,24,82,NULL,NULL),(306,25,82,NULL,NULL),(307,26,82,NULL,NULL),(308,27,82,NULL,NULL),(309,28,81,NULL,NULL),(310,28,11,NULL,NULL),(311,28,17,NULL,NULL),(312,28,18,NULL,NULL),(313,28,19,NULL,NULL),(314,28,20,NULL,NULL),(315,28,21,NULL,NULL),(316,28,23,NULL,NULL),(317,28,24,NULL,NULL),(318,28,26,NULL,NULL),(319,28,29,NULL,NULL),(320,28,35,NULL,NULL),(321,28,15,NULL,NULL),(322,28,46,NULL,NULL),(323,29,81,NULL,NULL),(324,29,11,NULL,NULL),(325,29,18,NULL,NULL),(326,29,17,NULL,NULL),(327,29,19,NULL,NULL),(328,29,20,NULL,NULL),(329,29,21,NULL,NULL),(330,29,23,NULL,NULL),(331,29,24,NULL,NULL),(332,29,26,NULL,NULL),(333,29,29,NULL,NULL),(334,29,15,NULL,NULL),(335,29,46,NULL,NULL);
/*!40000 ALTER TABLE `project_to_ideas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` int unsigned NOT NULL COMMENT 'start month from December 1989',
  `finish` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Invento Labs',396,398,NULL,NULL),(2,'GCN real-estate agency',386,395,NULL,NULL),(3,'Service Central',365,390,NULL,NULL),(4,'Nash. travel',359,364,NULL,NULL),(5,'Outsystems',317,357,NULL,NULL),(6,'Academsnab web integreation',357,359,NULL,NULL),(7,'http://cherrytours.de/',310,316,NULL,NULL),(8,'http://www.tourradar.com/',306,309,NULL,NULL),(9,'Termofit Web-based app',293,316,NULL,NULL),(10,'2dmart web portal',291,300,NULL,NULL),(11,'redcrosspartners',286,289,NULL,NULL),(12,'Sentum security',269,270,NULL,NULL),(13,'Elvis web app',274,294,NULL,NULL),(14,'Ecoten',267,274,NULL,NULL),(15,'Termofit accounting',185,268,NULL,NULL),(16,'Elvis desktop',213,289,NULL,NULL),(17,'Maine OPT',253,281,NULL,NULL),(18,'Canadian House',250,269,NULL,NULL),(19,'Maxuma Veterinary',246,255,NULL,NULL),(20,'Maxuma logistics',243,248,NULL,NULL),(21,'Ust-Luga process control',197,217,NULL,NULL),(22,'Elvis ERP',164,236,NULL,NULL),(23,'ATIS',141,170,NULL,NULL),(24,'Petrostroykomplekt',124,136,NULL,NULL),(25,'Gorislavtsev and Company',112,117,NULL,NULL),(26,'Termofit production',117,125,NULL,NULL),(27,'Various small project',93,112,NULL,NULL),(28,'GCN, mail lists',398,400,NULL,NULL),(29,'Motu',380,382,NULL,NULL);
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publishes`
--

DROP TABLE IF EXISTS `publishes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publishes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publishes`
--

LOCK TABLES `publishes` WRITE;
/*!40000 ALTER TABLE `publishes` DISABLE KEYS */;
/*!40000 ALTER TABLE `publishes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sketches`
--

DROP TABLE IF EXISTS `sketches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sketches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `publish_id` bigint unsigned NOT NULL,
  `idea_id` bigint unsigned NOT NULL,
  `ord` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sketches`
--

LOCK TABLES `sketches` WRITE;
/*!40000 ALTER TABLE `sketches` DISABLE KEYS */;
/*!40000 ALTER TABLE `sketches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `topics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topic_id_idx` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (1,'technology','technology',NULL,NULL,NULL),(2,'phrase','phrase to address',NULL,NULL,NULL),(3,'upwork','upwork address phrase',2,NULL,NULL),(4,'getmatch','org title',2,NULL,NULL),(5,'vacancy','vacancy name',4,NULL,NULL),(6,'laravel','laravel tutorial',NULL,NULL,NULL),(7,'relations','model relations',6,NULL,NULL),(8,'hasMany','model::class, foreginKey,localKey',7,NULL,NULL),(9,'belongsTo','model::class, foreginKey,localKey',7,NULL,NULL),(10,'web','Internet and World Wide Web',1,'2023-04-04 17:41:34','2023-04-04 17:41:34'),(11,'Project Management','Project Management tools',1,'2023-04-04 17:42:07','2023-04-04 17:42:07'),(12,'Programming languages','Programming languages for Desktop applications',1,'2023-04-04 17:43:16','2023-04-04 17:44:00'),(13,'Database management','Database management systems:',1,'2023-04-04 17:44:35','2023-04-04 17:44:35'),(14,'Operating Systems and Shells','Operating Systems and Shells',1,'2023-04-04 17:45:19','2023-04-04 17:45:19'),(15,'Programming for embedded systems','Programming for embedded systems',1,'2023-04-04 17:46:53','2023-04-04 17:46:53'),(16,'proposals','proposal for bid',3,'2023-04-05 09:24:36','2023-04-05 09:24:52'),(17,'proposal Yii','For Yii projects',16,'2023-04-05 09:25:17','2023-04-05 09:25:17'),(18,'proposal Laravel','for Laravel project',16,'2023-04-05 09:25:41','2023-04-05 09:25:41'),(19,'proposal PHP','for PHP projects',16,'2023-04-05 09:26:04','2023-04-05 09:26:04'),(20,'enter','general entry words',16,'2023-04-05 10:27:41','2023-04-05 10:27:41'),(21,'projects','data on projects',NULL,'2023-04-06 04:07:58','2023-04-06 04:07:58'),(22,'Individual projects','My individual projects',21,'2023-04-06 04:09:03','2023-04-06 04:09:03'),(23,'Team corporate projects','Сorporate projects where I was employed as a part of team',21,'2023-04-06 04:11:20','2023-04-06 04:11:20'),(24,'pictures','pictures and symbols',NULL,'2023-04-06 04:16:02','2023-04-06 04:16:02'),(25,'technologies','technology symbols',24,'2023-04-06 04:17:07','2023-04-06 04:17:07'),(26,'bookmarks','web bookmarks',NULL,'2023-04-06 09:26:23','2023-04-06 09:26:23'),(27,'web','web design and programming',26,'2023-04-06 09:26:58','2023-04-06 09:26:58'),(28,'Project type','project types for selection',21,'2023-04-06 12:58:14','2023-04-06 12:58:14'),(29,'shorts','shorts for technologies',NULL,'2023-04-09 03:00:42','2023-04-09 03:00:42'),(30,'technology','types of the technology',21,'2023-04-10 04:24:33','2023-04-10 04:24:33'),(31,'clients','my clients',NULL,'2023-04-12 07:05:05','2023-04-12 07:05:05'),(33,'The Invento Labs','The Invento Labs (Hungary)',31,'2023-04-12 07:09:15','2023-04-12 07:09:15'),(35,'GCN','GCN agency',31,'2023-04-12 07:14:32','2023-04-12 07:14:32'),(36,'Service Central','Service Central(Tulsa, USA) https://servicecentral.com/',31,'2023-04-12 07:35:45','2023-04-12 07:35:45'),(37,'Nash.travel','Nash. travel (Россия): https://nash.travel/(St. Petersburg, Russia)',31,'2023-04-12 07:38:49','2023-04-12 07:38:49'),(38,'industries','industries for businesses',NULL,'2023-04-12 07:42:43','2023-04-12 07:42:43'),(39,'Motu','Motu startup',31,'2023-04-12 08:00:22','2023-04-12 08:00:22'),(40,'Academsnab','Academsnab (St. Petersburg, Russia)',31,'2023-04-12 08:02:23','2023-04-12 08:02:23'),(41,'Pinga','Web-based application for on-line psychological help.',22,'2023-04-12 09:09:51','2023-04-12 09:09:51'),(42,'job responsibilities','job responsibilities',41,'2023-04-12 09:13:25','2023-04-12 09:13:25'),(43,'features','technological features to implement',NULL,'2023-04-14 06:56:53','2023-04-14 06:56:53'),(45,'web','web application features',43,'2023-04-14 06:58:00','2023-04-14 06:58:00'),(46,'desktop','office desktop applications',43,'2023-04-14 09:20:54','2023-04-14 09:23:34'),(47,'emded','embedded systems features',43,'2023-04-14 09:20:54','2023-04-14 09:20:54');
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `txts`
--

DROP TABLE IF EXISTS `txts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `txts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `idea_id` bigint unsigned NOT NULL,
  `language_id` bigint unsigned NOT NULL,
  `txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `txts`
--

LOCK TABLES `txts` WRITE;
/*!40000 ALTER TABLE `txts` DISABLE KEYS */;
INSERT INTO `txts` VALUES (1,17,1,'I have pretty extensive programmer experience. In 1995 I was in USA as an exchange student in the University of Alabama. There I got acquainted with the WWW and started my practice in web programming. Since that time I improve my web page composing skills and follow all new tendencies in web design.',NULL,NULL),(2,17,2,'У меня довольно большой опыт программиста. В 1995 году я был в США по обмену в Университете Алабамы. Там я познакомился с WWW и начал свою практику веб-программирования. С тех пор я совершенствую свои навыки создания веб-страниц и слежу за всеми новыми тенденциями в веб-дизайне.',NULL,NULL),(4,20,1,'<p>I started in 2008 with the PHP 5.6 version for small dynamic web-site construction\nIn 2013 the necessity in more robust instrument brought up the need for PHP framework utilizing.</p>\n<p>Yii and later Yii2 frameworks became my major platform for production development\nLater I learned and built some individual projects on Laravel PHP framework.</p>\n<p>In my practice I usually follow the SOLID principles of development with the use of design patterns</p>\n<p>Recently I took part in the projects on PHP 8 with the implementation of technologies like Memcached, Redis, ElasticSearch</p>',NULL,NULL),(5,18,1,'I have substantive makeup experience. Great deal of recent advances in layout technique like <ul class=\"w3-ul  w3-card-4 w3-margin-bottom\"><li>SVG</li><li>flexbox</li><li>canvas</li><li>css-animation</li></ul></p><p>I  use responsive design for my frontend development.</p>',NULL,NULL),(6,24,1,'For last 2 years I extensively use Laravel as my preferable framework.\nI was impressed by the invincible advance of this system. How quickly it came by the leading role in the PHP technological industry.\nI like to employ the most auspicious technologies that this network provide. Often incorporate Laravel elements in the other technological environments.\n',NULL,NULL),(7,1,1,'<p>C ++ V 6.0 C, with the use of MFC. The complete Object Architecture was built for the multilevel integrated application.</p><p> For the purpose of the multitasking environment and multiple process coordination we used:<ul class=\"w3-ul  w3-card-4 w3-margin-bottom\"><li> multi-threaded programming,</li><li>interprocess messaging</li><li>the own resource managers</li><li>software interrupt handlers</li>',NULL,NULL);
/*!40000 ALTER TABLE `txts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2023-04-16  8:13:30
