# Host: localhost  (Version: 5.6.21)
# Date: 2021-10-04 03:24:16
# Generator: MySQL-Front 5.3  (Build 5.15)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "docente"
#

DROP TABLE IF EXISTS `docente`;
CREATE TABLE `docente` (
  `ci` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "docente"
#


#
# Structure for table "notas"
#

DROP TABLE IF EXISTS `notas`;
CREATE TABLE `notas` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) DEFAULT NULL,
  `sigla` varchar(25) DEFAULT NULL,
  `nota1` int(11) DEFAULT NULL,
  `nota2` int(11) DEFAULT NULL,
  `nota3` int(11) DEFAULT NULL,
  `notafinal` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

#
# Data for table "notas"
#

INSERT INTO `notas` VALUES (1,11,'INF - 111',90,80,100,90),(2,11,'INF - 121',88,70,99,85),(3,33,'INF - 131',78,89,68,78),(4,44,'INF - 144',88,60,90,79),(5,55,'INF - 113',89,90,70,83),(6,66,'INF - 112',78,98,100,92);

#
# Structure for table "persona"
#

DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `ci` varchar(11) NOT NULL DEFAULT '',
  `nombre` varchar(255) DEFAULT NULL,
  `fechanac` varchar(255) DEFAULT NULL,
  `departamento` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "persona"
#

INSERT INTO `persona` VALUES ('10','Sofia Chavez','13 de febrero de 1999','01'),('11','Laura Alarcon','23 de julio de 2003','01'),('22','Fernan Sanchez','10 de febrero 2000','02'),('33','Ivan Condoretti','27 de febrero de 1988','01'),('44','Paola Alarcon','07 de Octubre de 1995','02'),('55','Nicol Tiñini','08 de Noviembre de 1996','03'),('66','Daniel Fernandes ','28 de Enero de 1994','03'),('88','Maria Paz','11 de Mayo de 2000','03');

#
# Structure for table "usuario"
#

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `ci` varchar(11) NOT NULL DEFAULT '',
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nivel` int(1) DEFAULT NULL,
  PRIMARY KEY (`ci`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "usuario"
#

INSERT INTO `usuario` VALUES ('11','laura','laura',2),('22','fernanda','fernanda',1);
