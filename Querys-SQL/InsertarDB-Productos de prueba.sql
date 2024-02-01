-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: paginadproductos
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Dumping data for table `precio`
--

LOCK TABLES `precio` WRITE;
/*!40000 ALTER TABLE `precio` DISABLE KEYS */;
INSERT INTO `precio` VALUES (4,NULL,NULL,40.00,80.00),(5,20.00,18.00,NULL,NULL),(6,50.00,25.00,NULL,NULL),(7,40.00,NULL,NULL,NULL),(8,NULL,NULL,120.00,280.00),(9,23.99,NULL,NULL,NULL),(10,29.99,NULL,NULL,NULL),(11,NULL,NULL,320.20,875.65),(12,319.99,315.99,NULL,NULL),(13,40.00,25.50,NULL,NULL),(14,400.00,350.25,NULL,NULL),(15,NULL,NULL,0.99,6.99);
/*!40000 ALTER TABLE `precio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (4,'Fancy Product',NULL,'https://dummyimage.com/450x300/dee2e6/6c757d.jpg'),(5,'Special Item',5,'https://dummyimage.com/450x300/dee2e6/6c757d.jpg'),(6,'Sale Item',NULL,'https://dummyimage.com/450x300/dee2e6/6c757d.jpg'),(7,'Popular Item',4,'https://dummyimage.com/450x300/dee2e6/6c757d.jpg'),(8,'Fancy Product',NULL,'https://dummyimage.com/450x300/dee2e6/6c757d.jpg'),(9,'Producto Piolin',5,'https://w0.peakpx.com/wallpaper/278/612/HD-wallpaper-pepe-on-laptop-working-pepe-funny-cool.jpg'),(10,'Peluche Renekton',5,'https://www.lolfanstore.com/cdn/shop/products/Sfd725cddf3134974ac96839b28aa8a9ev.jpg'),(11,'Reloj',3,'https://twobrokewatchsnobs.com/wp-content/uploads/2023/09/rolex-submariner-feature-1.jpg'),(12,'Laptop Apple Amd',1,'https://rymportatiles.com.pe/cdn/shop/files/MacBook-Air-A2681-6397.jpg'),(13,'TRIPODE',3,'https://plazavea.vteximg.com.br/arquivos/ids/26848685-512-512/null.jpg'),(14,'Maquina de Vibraciones',4,'https://oechsle.vteximg.com.br/arquivos/ids/9164870/imageUrl_1.jpg'),(15,'Web Template',3,'https://freebiesbug.com/wp-content/uploads/2023/02/maxon-free-psd-template.jpg');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-31 21:10:16
