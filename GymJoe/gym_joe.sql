/*
Navicat MySQL Data Transfer

Source Server         : hola
Source Server Version : 50529
Source Host           : 127.0.0.1:3306
Source Database       : gym_joe

Target Server Type    : MYSQL
Target Server Version : 50529
File Encoding         : 65001

Date: 2014-11-12 14:48:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for membresia
-- ----------------------------
DROP TABLE IF EXISTS `membresia`;
CREATE TABLE `membresia` (
  `ID_M` int(11) NOT NULL AUTO_INCREMENT,
  `Precio` float NOT NULL,
  `Descuento` float NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  PRIMARY KEY (`ID_M`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of membresia
-- ----------------------------

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `Folio_Productos` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Tipo` varchar(30) NOT NULL,
  `Contenido` varchar(30) NOT NULL,
  `Precio_P` float NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Img` varchar(200) NOT NULL,
  `Precio_C` float NOT NULL,
  PRIMARY KEY (`Folio_Productos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------

-- ----------------------------
-- Table structure for promociones
-- ----------------------------
DROP TABLE IF EXISTS `promociones`;
CREATE TABLE `promociones` (
  `Folio_Promociones` int(11) NOT NULL AUTO_INCREMENT,
  `Descuento` float NOT NULL,
  `Precio_Promocion` float NOT NULL,
  `Folio_Productos` int(11) NOT NULL,
  PRIMARY KEY (`Folio_Promociones`),
  KEY `Folio_Productos` (`Folio_Productos`),
  CONSTRAINT `Folio_Productos` FOREIGN KEY (`Folio_Productos`) REFERENCES `productos` (`Folio_Productos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promociones
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `ID_U` int(11) NOT NULL AUTO_INCREMENT,
  `Nick` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Tipo_Usuario` varchar(30) NOT NULL,
  `Img` varchar(200) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Calle` varchar(30) NOT NULL,
  `CP` int(11) NOT NULL,
  `Colonia` varchar(30) NOT NULL,
  `N_Casa` int(11) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ID_M` int(11) NOT NULL,
  PRIMARY KEY (`ID_U`),
  KEY `ID_M` (`ID_M`),
  CONSTRAINT `ID_M` FOREIGN KEY (`ID_M`) REFERENCES `membresia` (`ID_M`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `ID_V` int(11) NOT NULL AUTO_INCREMENT,
  `Cantidad` int(11) NOT NULL,
  `Costo_Total` float NOT NULL,
  `N_Cuenta` int(11) NOT NULL,
  `Folio_Productos` int(11) NOT NULL,
  `ID_U` int(11) NOT NULL,
  PRIMARY KEY (`ID_V`),
  KEY `Folio_Productos` (`Folio_Productos`),
  KEY `ID_U` (`ID_U`),
  CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`ID_U`) REFERENCES `usuarios` (`ID_U`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`Folio_Productos`) REFERENCES `productos` (`Folio_Productos`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ventas
-- ----------------------------
