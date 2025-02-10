CREATE DATABASE  IF NOT EXISTS `crud` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `crud`;
 SET NAMES utf8 ;


DROP TABLE IF EXISTS `usuarios`;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(80) NOT NULL,
  `senha` varchar(60) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


LOCK TABLES `usuarios` WRITE;
INSERT INTO `usuarios` VALUES (1,'da','ad@a'),(2,'da','ad@a');
UNLOCK TABLES;

