-- --------------------------------------------------------
-- Host:                         192.168.0.114
-- Versión del servidor:         8.0.26-0ubuntu0.20.04.3 - (Ubuntu)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para systemlf
CREATE DATABASE IF NOT EXISTS `systemlf` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `systemlf`;

-- Volcando estructura para tabla systemlf.categoria
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla systemlf.categoria: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`idCategoria`, `categoria`) VALUES
	(1, 'Computadoras'),
	(2, 'Telefonos'),
	(3, 'Impresoras');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

-- Volcando estructura para tabla systemlf.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `idCliente` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` double DEFAULT NULL,
  `sueldo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `estado` tinyint(1) DEFAULT '1',
  `clasificacion` enum('A','B','C') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'C',
  `fechaRegistro` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla systemlf.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para procedimiento systemlf.ModificarProductos
DELIMITER //
CREATE PROCEDURE `ModificarProductos`(in codigo int,in nombre varchar(50),in categoria int,in precio decimal(10,2),in existencia int)
BEGIN

UPDATE `systemlf`.`productos`
SET
`NombreProducto` = nombre,
`IdCategoria` = categoria,
`Existencia` = existencia,
`Precio` = precio
WHERE `idProducto` = codigo;

END//
DELIMITER ;

-- Volcando estructura para tabla systemlf.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `idProducto` int NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(50) DEFAULT NULL,
  `IdCategoria` int DEFAULT NULL,
  `Existencia` int DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`idProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla systemlf.productos: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`idProducto`, `NombreProducto`, `IdCategoria`, `Existencia`, `Precio`) VALUES
	(1, 'Computadora Dell', 1, 302, 20000.00),
	(2, 'IPhone X ', 2, 20, 10500.00),
	(4, 'Toshiba', 1, 34, 25000.00),
	(6, 'Mac ', 1, 205, 32000.00),
	(19, 'Hp NoteBook', 1, 33, 14500.00),
	(20, 'Mac 2.55', 1, 205, 32000.00),
	(21, 'Mac 362.5', 1, 12, 23000.00),
	(26, 'Impresora Dell', 1, 33, 5000.00);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla systemlf.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `iduser` int DEFAULT NULL,
  `usuario` varchar(59) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `contrasenia` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla systemlf.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`iduser`, `usuario`, `contrasenia`) VALUES
	(1, 'luis', 'luis1234');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
