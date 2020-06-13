-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.20 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5992
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for multiuser
CREATE DATABASE IF NOT EXISTS `multiuser` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `multiuser`;

-- Dumping structure for table multiuser.tb_group
CREATE TABLE IF NOT EXISTS `tb_group` (
  `idgroup` int NOT NULL AUTO_INCREMENT,
  `namagroup` varchar(50) DEFAULT NULL,
  `pagedefault` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idgroup`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table multiuser.tb_group: ~2 rows (approximately)
DELETE FROM `tb_group`;
/*!40000 ALTER TABLE `tb_group` DISABLE KEYS */;
INSERT INTO `tb_group` (`idgroup`, `namagroup`, `pagedefault`) VALUES
	(1, 'group 1', 'group1'),
	(2, 'group 2', 'group2');
/*!40000 ALTER TABLE `tb_group` ENABLE KEYS */;

-- Dumping structure for table multiuser.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `iduser` int NOT NULL AUTO_INCREMENT,
  `username` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `idgroup` int NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table multiuser.tb_user: ~4 rows (approximately)
DELETE FROM `tb_user`;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` (`iduser`, `username`, `password`, `idgroup`) VALUES
	(1, 'user1', '1234', 1),
	(2, 'user2', '1234', 2),
	(3, 'user3', '1234', 2),
	(4, 'user4', '1234', 1);
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
