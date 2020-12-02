-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bd_centrocomputo
CREATE DATABASE IF NOT EXISTS `bd_centrocomputo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_centrocomputo`;

-- Dumping structure for table bd_centrocomputo.tbtecnico
CREATE TABLE IF NOT EXISTS `tbtecnico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `antecedentes` varchar(5) NOT NULL,
  `disponibilidad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Nombre` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table bd_centrocomputo.tbtecnico: ~0 rows (approximately)
/*!40000 ALTER TABLE `tbtecnico` DISABLE KEYS */;
INSERT INTO `tbtecnico` (`id`, `Nombre`, `correo`, `telefono`, `especialidad`, `antecedentes`, `disponibilidad`) VALUES
	(0, 'Lehi Hernandez', 'lehi11@gmail.com', '6566566509', 'Programacion', 'No', 'Otros');
/*!40000 ALTER TABLE `tbtecnico` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
