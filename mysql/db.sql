-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: hotel
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.21.10.3

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
-- Table structure for table `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `candidatos` (
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `CFP` varchar(14) DEFAULT NULL,
  `Curriculo` varchar(20) NOT NULL,
  `id_candidato` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_candidato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidatos`
--

LOCK TABLES `candidatos` WRITE;
/*!40000 ALTER TABLE `candidatos` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `candidatos_emprego`
--

DROP TABLE IF EXISTS `candidatos_emprego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `candidatos_emprego` (
  `id_candidato` int NOT NULL,
  `id_emprego` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidatos_emprego`
--

LOCK TABLES `candidatos_emprego` WRITE;
/*!40000 ALTER TABLE `candidatos_emprego` DISABLE KEYS */;
/*!40000 ALTER TABLE `candidatos_emprego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empregos_hotel`
--

DROP TABLE IF EXISTS `empregos_hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empregos_hotel` (
  `nome_emprego` varchar(40) NOT NULL,
  `id_emprego` smallint NOT NULL AUTO_INCREMENT,
  `sal??rio` float NOT NULL,
  PRIMARY KEY (`id_emprego`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empregos_hotel`
--

LOCK TABLES `empregos_hotel` WRITE;
/*!40000 ALTER TABLE `empregos_hotel` DISABLE KEYS */;
/*!40000 ALTER TABLE `empregos_hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionarios` (
  `nome` varchar(35) NOT NULL,
  `sobrenone` varchar(35) NOT NULL,
  `CPF` tinytext,
  `contato_telefone` varchar(13) DEFAULT NULL,
  `contato_email` varchar(255) DEFAULT NULL,
  `horario_entrada` time NOT NULL,
  `horario_saida` time NOT NULL,
  `id_funcionario` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios_emprego`
--

DROP TABLE IF EXISTS `funcionarios_emprego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionarios_emprego` (
  `id_funcionario` int NOT NULL,
  `id_emprego` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios_emprego`
--

LOCK TABLES `funcionarios_emprego` WRITE;
/*!40000 ALTER TABLE `funcionarios_emprego` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios_emprego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospedes`
--

DROP TABLE IF EXISTS `hospedes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospedes` (
  `nome` varchar(35) NOT NULL,
  `sobrenome` varchar(35) NOT NULL,
  `nascimento` date NOT NULL,
  `saldo` float NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `CPF` varchar(14) DEFAULT NULL,
  `id_pessoa` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospedes`
--

LOCK TABLES `hospedes` WRITE;
/*!40000 ALTER TABLE `hospedes` DISABLE KEYS */;
INSERT INTO `hospedes` VALUES ('weslley','borges','1800-05-20',8001,'weslleyborges34@gmail.com','7cef99583b2a7965f540d811c392cdad','',1),('dsadsa','dsadas','2022-04-06',2,'weslleyborges10@hotmail.com','202cb962ac59075b964b07152d234b70','',2),('MISLLEY','AAAA','2022-04-06',2312320000000,'213213@asd','202cb962ac59075b964b07152d234b70','asdadasd',3);
/*!40000 ALTER TABLE `hospedes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_quartos`
--

DROP TABLE IF EXISTS `hotel_quartos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hotel_quartos` (
  `n??mero_quarto` mediumint NOT NULL AUTO_INCREMENT,
  `ocupado` enum('s','n') NOT NULL,
  `valor` float NOT NULL,
  `nivel` enum('1','2','3') NOT NULL,
  `hospede_atual` int DEFAULT '0',
  PRIMARY KEY (`n??mero_quarto`),
  KEY `hotel_quartos_hospede_atual_hospedes_id_pessoa` (`hospede_atual`),
  CONSTRAINT `hotel_quartos_hospede_atual_hospedes_id_pessoa` FOREIGN KEY (`hospede_atual`) REFERENCES `hospedes` (`id_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_quartos`
--

LOCK TABLES `hotel_quartos` WRITE;
/*!40000 ALTER TABLE `hotel_quartos` DISABLE KEYS */;
INSERT INTO `hotel_quartos` VALUES (1,'n',150,'1',0),(2,'n',150,'1',0),(3,'n',150,'1',0),(4,'n',150,'1',0),(5,'n',150,'1',0),(6,'n',150,'1',0),(7,'n',150,'1',0),(8,'n',150,'1',0),(9,'n',150,'1',0),(10,'n',150,'1',0),(11,'n',250,'2',0),(12,'n',250,'2',0),(13,'n',250,'2',0),(14,'n',250,'2',0),(15,'n',250,'2',0),(16,'n',250,'2',0),(17,'n',250,'2',0),(18,'n',250,'2',0),(19,'n',250,'2',0),(20,'n',250,'2',0),(21,'n',450,'3',0),(22,'n',450,'3',0),(23,'n',450,'3',0),(24,'n',450,'3',0),(25,'n',450,'3',0),(26,'n',450,'3',0),(27,'n',450,'3',0),(28,'n',450,'3',0),(29,'n',450,'3',0),(30,'n',450,'3',0);
/*!40000 ALTER TABLE `hotel_quartos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista_espera`
--

DROP TABLE IF EXISTS `lista_espera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lista_espera` (
  `pessoa_no_aguardo` int NOT NULL,
  `quarto_reservado` mediumint NOT NULL,
  `hor??rio_reserva` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista_espera`
--

LOCK TABLES `lista_espera` WRITE;
/*!40000 ALTER TABLE `lista_espera` DISABLE KEYS */;
/*!40000 ALTER TABLE `lista_espera` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-26  9:51:02
