-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: MVC_lesson
-- ------------------------------------------------------
-- Server version	8.0.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `text` text,
  `category_id` int(11) DEFAULT NULL,
  `time` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,'Article 1','Text 1',1,NULL),(2,'Article 2','Text 2',2,NULL),(3,'Article 3','Text 3',3,NULL),(7,'Article 7','Text 7',1,NULL),(10,'Uuuup1','Succesful',1,NULL),(11,'Article 11','Text 11',1,NULL),(12,'Article 12','Text 12',1,NULL),(13,'Article 13','Text 13',1,NULL),(14,'Article 14','Text 14',1,NULL),(17,'awful','fawn',1,NULL),(18,'Test','Test',1,NULL),(20,'Article Ruslana','Ruslan',1,NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `password` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test','Nik','123321'),(2,'Nik','Test','$2y$10$NvFeRT9Oc8ErSHDbaY5yxO4pdY8VL7rIVX9z6atNGxkNsxN3gktW.'),(3,'','','$2y$10$8HClvgTU2qRbBoRGOpW9u.Wf0U/y4D7c.J6pW5id5itOFc8kWQhDW'),(4,'Dron','Dro','$2y$10$0ldcjKPAaAgnrx4bzySTdO3QlSHY5TeR6sFdp5qp9JZXog.LFCYb.'),(5,'Bron','Dro','$2y$10$qgSTaa745KXkI.Qx8EME0.dBi.StgJuBsSO0jGpCJJNgRza/j/Oz6'),(6,'Rus','Back','$2y$10$7q71KVt9JbXE4z/oNTg0euLdEAlXMwsrPWvoErVpM6dz6x5yNFWzu'),(7,'Rus1','vas','$2y$10$8OsZL9l25Y/v7UBzW5qPZOb4EnZFfcvh5BozzBMNfGYnTaAqog0bK'),(8,'Rus2','Rus','$2y$10$WncU3ibGw1p2AErbCRtTsuapEsoUEt5QeawyWfqu/Z3wAADFu6cD.'),(9,'Rus3','dasd','$2y$10$q.XvsVYPYhoaz/42m6gnGesFXReUA8bcqnLfyOUh9erRsagutGJ2O'),(10,'Vad','vad','$2y$10$2ce2tN1Pbzrh.ap4WD6.XOSvws1yQgMOwi.RyKS1k.H7VAHZ1JL/O'),(11,'Rus4','Rus','$2y$10$jUXaLrI9jaXyYhAxYuLzIemiStfKNy7E5EQraSjU14OKvrm3fEU8e'),(12,'Rus5','Rus','$2y$10$fkhOiWhvHeSCjLPChmH9D.mzKXdBfLt/CyxcKwOsCne.F349MQiQm'),(13,'Test2','Nik','$2y$10$Km8Qsz4/l7Nz8GGReASwb.oFQQxHTtBgJ52QY/o3Jmf2O0xzaOFgy'),(14,'Nik1','NikPi','$2y$10$vE6aRvTCnrr.EfZet.11lOysLlvbBMRlJ2Sti1qy0RvNAxEU3zmaG'),(15,'Nik3','Nik','$2y$10$7hygFCqv6FmTkXiEPRng7eJx82PJheJCSMPFcAdrZ4u1QOxldjj1W'),(16,'Picnic','Никита','$2y$10$wfA0JzMT/lUE0nPCrRov1uaQRLDntGaITOagjZMeD9I4U4VwaTBwq'),(17,'Drop','Box','$2y$10$WxucGSNwr6Kr5EWAxCPMtOXPoqKv0KbmSB0uzkyp.9ApMyvb/ElZm'),(18,'Admin','Admin','$2y$10$3g5Kz2yPznDVJuxiC8Roi.0iaNhDdZzxfufeAowOefw7wfV4rr1e6');
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

-- Dump completed on 2019-09-14 18:14:05
