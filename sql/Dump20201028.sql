CREATE DATABASE  IF NOT EXISTS `fsgames` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `fsgames`;
-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: fsgames
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `mensagem` text DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (4,'André Marques','meu@email.com','11999999999','Este texto tem como finalidade testar a integração do formulário com o Banco de Dados.','2020-10-27 22:10:43'),(5,'Victor Pereira','victor@pereira.com.br','11959595959','Texto para inserir no banco de dados.','2020-10-27 22:13:17'),(6,'João Antonio de Moura Silva Sauro','joao_antonio@silvasauro.com.br','1191234567','Este cadastro é para testar a integridade do número de contato com int e varchar','2020-10-27 22:22:02'),(7,'Jéssica Maria Carmem Aparecida','jessica_maria123@email.com.br','1122222222','Site muito bom e com os melhores produtos do de games já comprei 20 Playstations e recomendo!','2020-10-27 22:50:59'),(8,'Ester','esterzinhababy@hsuai.com','11988495439','te amo','2020-10-27 22:56:55');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(60) DEFAULT NULL,
  `produto` varchar(300) DEFAULT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `preco_venda` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'playstation5','Console Sony PlayStation 5',4999.00,4499.00,'img/img-produto/console-sony-playstation-5.jpg'),(2,'xboxOne','Console Xbox One S 1TB Branco',2555.00,2299.00,'img/img-produto/console-xbox-one-s-1tb-branco.jpg'),(3,'nintendoSwitch','Console Nintendo Switch 32Gb Neon Gray',4889.00,3749.00,'img/img-produto/console-nintendo-switch-32gb-neon-gray.jpg'),(4,'playstation5','Jogo Marvel´s Spider-Man: Miles Morales Playstation 5',249.00,219.00,'img/img-produto/game-marvel-s-spider-man-miles-morales-ps5.jpg'),(5,'playstation5','Jogo Demon´s Soul´s Playstation 5',349.00,307.90,'img/img-produto/game-demon-s-soul-s-ps5.jpg'),(6,'xboxOne','Jogo Red Dead Redemption 2 Xbox One',149.00,129.00,'img/img-produto/Game-Red-Dead-Redemption-2-Xbox-One.jpg'),(7,'xboxOne','Jogo Tom Clancy´s Ghost Recon Wildlands Xbox One',199.00,119.00,'img/img-produto/game-tom-clancy-s-ghost-recon-wildlands-xbox-one.jpg'),(8,'nintendoSwitch','Jogo Super Mario Odyssey Nintendo Switch',339.00,319.00,'img/img-produto/Super-Mario-Odyssey-Nintendo-Switch.jpg'),(9,'pcGamer','Computador Gamer Skul Intel Core i9-9900KF, 16GB, 1TB, RTX 2060 Super 8GB, Linux',13684.00,11919.00,'img/img-produto/computador-gamer-skul-intel-core-i9-9900kf-16gb-1tb-rtx-2060-super-8gb-linux-g9900kfw2t4801.jpg'),(10,'pcGamer','Computador Gamer 3Green Intel Core i5-9400F, 8GB, Geforce GTX 1660 6GB, Linux',5263.00,4999.00,'img/img-produto/computador-gamer-3green-intel-core-i5-9400f-8gb-geforce-gtx-1660-6gb-linux-25888.jpg'),(11,'acessorios','Mouse Gamer Razer Lancehead Sem Fio 16.000 DPI',981.00,833.00,'img/img-produto/Mouse-Gamer-Raze- Lancehead-Sem-Fio-16.000-DPI.jpg'),(12,'acessorios','Teclado Óptico Mecânico Gamer Razer Huntsman, Switch Razer Purple',1841.00,1564.00,'img/img-produto/Teclado-optico-Mecanico-Game- Razer-Huntsman-Switch-Razer-Purple.jpg');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-28  7:18:19
