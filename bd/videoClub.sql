-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para videoclub
CREATE DATABASE IF NOT EXISTS `videoclub` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `videoclub`;

-- Volcando estructura para tabla videoclub.alquiler
CREATE TABLE IF NOT EXISTS `alquiler` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` int unsigned NOT NULL,
  `id_peliculas` int unsigned NOT NULL,
  `valor_total` int DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_alquiler_cliente` (`id_cliente`),
  KEY `FK_alquiler_pelicula` (`id_peliculas`),
  CONSTRAINT `FK_alquiler_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_alquiler_pelicula` FOREIGN KEY (`id_peliculas`) REFERENCES `pelicula` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla videoclub.alquiler: ~0 rows (aproximadamente)
INSERT INTO `alquiler` (`id`, `id_cliente`, `id_peliculas`, `valor_total`, `fecha_inicio`, `fecha_fin`, `created_at`, `updated_at`) VALUES
	(16, 3, 6, 200000, '2023-05-04', '2023-05-06', '2023-05-04 20:28:37', '2023-05-04 20:28:37');

-- Volcando estructura para tabla videoclub.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cedula` int DEFAULT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla videoclub.cliente: ~1 rows (aproximadamente)
INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `telefono`, `created_at`, `updated_at`) VALUES
	(3, 'santiago', 'Ortiz', 1097407656, 'sortizs@uqvirtual.edu.co', 3205225368, '2023-05-04 19:55:56', '2023-05-04 19:56:52');

-- Volcando estructura para tabla videoclub.pelicula
CREATE TABLE IF NOT EXISTS `pelicula` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `precio_unitario` int DEFAULT NULL,
  `tipo` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `fecha_estreno` date DEFAULT NULL,
  `imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla videoclub.pelicula: ~3 rows (aproximadamente)
INSERT INTO `pelicula` (`id`, `nombre`, `sinopsis`, `precio_unitario`, `tipo`, `genero`, `fecha_estreno`, `imagen`, `created_at`, `updated_at`) VALUES
	(6, 'Peter Pan y Wendy', 'Peter Pan y Wendy Wendy Darling una jovencita sin deseos de ir al internado, conoce a Peter Pan, un chico que se niega a crecer. Junto con sus hermanos y la pequeña hada, Tinkerbell, viaja con Peter al mágico mundo de Nunca Jamás.', 100000, '1', 'Fantasia', '2023-04-20', '1683152173_Peter_Pan_y_Wendy.jpg', '2023-05-04 03:16:13', '2023-05-04 03:16:13'),
	(8, 'Scream 6', 'Scream 6 Sam, Tara, Mindy y Chad quieren tener una vida completamente normal, por ello, después de la masacre final de Ghostface en Woodsboro, deciden mudarse a Nueva York.', 200000, '2', 'Terror', '2023-03-08', '1683173466_Scream 6.jpg', '2023-05-04 09:11:06', '2023-05-04 09:11:06'),
	(9, 'Ant-Man and the Wasp: Quantumania', 'Ant-Man and the Wasp: Quantumania Los superhéroes Scott Lang y Hope van Dyne regresan para continuar sus aventuras como Ant-Man y Wasp. Con los padres de Hope, Hank Pym y Janet van Dyne, y con la hija de Scott, Cassie Lang.', 300000, '3', 'Accion', '2023-02-15', '1683174157_AntMan.jpg', '2023-05-04 09:22:37', '2023-05-04 09:22:37');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
