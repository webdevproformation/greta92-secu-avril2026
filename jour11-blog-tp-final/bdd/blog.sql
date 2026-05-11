-- MySQL dump 10.13  Distrib 9.3.0, for Linux (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	9.3.0

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
-- Current Database: `blog`
--

/*!40000 DROP DATABASE IF EXISTS `blog`*/;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `blog`;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `contenu` text COLLATE utf8mb4_general_ci,
  `dt_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'bonjour les amis modifié','les données viennent de la table article','2024-01-29 15:53:31',NULL),(2,'mon premier article via un formulaire','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet mauris dapibus neque efficitur bibendum ac nec neque. Mauris aliquet tincidunt odio a dictum. Aenean congue pharetra auctor. Ut nec augue quis mauris finibus gravida eu a elit. Morbi accumsan, nisi eu dapibus vulputate, neque elit sollicitudin tortor, vitae tempor leo turpis sit amet purus. Nam suscipit tellus leo, in egestas arcu pulvinar eget. Curabitur dapibus tempus rutrum. Curabitur pharetra cursus nisi, et commodo nunc euismod eget. Sed vitae justo ac lacus bibendum aliquam vitae ut turpis. Suspendisse eu neque massa. Aliquam lacinia quam leo. Integer sed ipsum gravida, fringilla quam vitae, cursus velit. Vestibulum varius lorem arcu, at malesuada lacus vehicula et. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras id mattis metus, eget tincidunt libero. Quisque commodo sodales metus, sit amet fermentum diam aliquam a. ','2024-02-01 10:16:34','https://placehold.co/600x400'),(3,'bonjour','lorem ipsum','2024-02-01 11:02:06','https://placehold.co/600x400'),(4,'deuxieme article','Maecenas ut nibh quam. Aenean arcu mauris, pellentesque in porta in, semper id massa. Integer faucibus nisl nisi, in viverra nisl aliquam in. Suspendisse risus dolor, molestie nec rhoncus scelerisque, venenatis nec turpis. Nullam at odio cursus eros auctor sagittis eget quis augue. Proin velit ante, tincidunt id eros vitae, fringilla pellentesque orci. Fusce facilisis est vel mi pulvinar placerat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec a ex lectus. Morbi bibendum sagittis mauris, a laoreet diam elementum vel. Integer maximus pulvinar turpis. Quisque at augue vel ipsum efficitur bibendum. Etiam rutrum massa at nisi varius, nec molestie ante imperdiet. Nam eu erat id ipsum dignissim egestas sit amet at mi. ','2024-02-01 11:31:01','https://placehold.co/600x400'),(5,'bonjour les amis','Donec at malesuada nunc. Phasellus sollicitudin auctor mauris quis tempor. Etiam non nisl nulla. Phasellus sagittis interdum urna sit amet porta. Nam at quam sed dolor efficitur luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ullamcorper, lorem sit amet venenatis tincidunt, libero mauris luctus lectus, at dignissim metus ex in lacus. Cras at vestibulum nisl, id pellentesque leo. Suspendisse in viverra enim, sit amet molestie dolor. ','2024-02-01 11:43:27',NULL),(6,'encore un article','depuis le back office','2024-02-04 20:22:46',NULL),(7,'<h3>coucou</h3>','<p>les amis</p>','2024-02-05 08:15:14',NULL);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dt_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (6,'m@y.fr','$2y$10$rsKi9sNbrZi0dTsKPDbIJuUlzqYWHYxcTk4G/7x.b05SO7.tAU7su','admin','2026-05-09 14:26:39');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
