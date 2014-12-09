/*
Navicat MySQL Data Transfer

Source Server         : hola
Source Server Version : 50529
Source Host           : 127.0.0.1:3306
Source Database       : gymnasio

Target Server Type    : MYSQL
Target Server Version : 50529
File Encoding         : 65001

Date: 2014-12-08 22:30:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for imagenes
-- ----------------------------
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `ID_Foto` int(11) NOT NULL AUTO_INCREMENT,
  `Img` varchar(200) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `ID_Tipo` int(11) NOT NULL,
  PRIMARY KEY (`ID_Foto`),
  KEY `ID_Tipo` (`ID_Tipo`),
  CONSTRAINT `ID_Tipo` FOREIGN KEY (`ID_Tipo`) REFERENCES `tipo_seccion` (`ID_Tipo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imagenes
-- ----------------------------

-- ----------------------------
-- Table structure for instalaciones
-- ----------------------------
DROP TABLE IF EXISTS `instalaciones`;
CREATE TABLE `instalaciones` (
  `ID_Instalacion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Img` varchar(200) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_Instalacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of instalaciones
-- ----------------------------

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `ID_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(120) NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Precio_Publico` decimal(10,0) NOT NULL,
  `Precio_Proveedor` decimal(10,0) NOT NULL,
  `Tamano` varchar(45) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Img` varchar(200) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_Producto`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('1', 'Carnetina', 'Adruplex', '1200', '700', '1Kg.', 'Oxido', 'Carnetina.png', 'La mejor marca en oxidos, tomar una capsula antes de hacer un entrenamiento reguroso');

-- ----------------------------
-- Table structure for promociones
-- ----------------------------
DROP TABLE IF EXISTS `promociones`;
CREATE TABLE `promociones` (
  `ID_Promocion` int(11) NOT NULL AUTO_INCREMENT,
  `Descuento` float NOT NULL,
  `Precio_Promocion` float NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  PRIMARY KEY (`ID_Promocion`),
  KEY `ID_Producto` (`ID_Producto`),
  CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`ID_Producto`) REFERENCES `productos` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of promociones
-- ----------------------------

-- ----------------------------
-- Table structure for rutinas
-- ----------------------------
DROP TABLE IF EXISTS `rutinas`;
CREATE TABLE `rutinas` (
  `ID_Rutina` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Categoria` varchar(45) NOT NULL,
  `Img` varchar(200) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  PRIMARY KEY (`ID_Rutina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of rutinas
-- ----------------------------

-- ----------------------------
-- Table structure for tipo_seccion
-- ----------------------------
DROP TABLE IF EXISTS `tipo_seccion`;
CREATE TABLE `tipo_seccion` (
  `ID_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Seccion` varchar(45) NOT NULL,
  `Categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_seccion
-- ----------------------------

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Nick` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Img` varchar(200) DEFAULT NULL,
  `Tipo_Usuario` varchar(45) NOT NULL,
  `Calle` varchar(45) NOT NULL,
  `Colonia` varchar(45) NOT NULL,
  `#_Casa` int(11) NOT NULL,
  `Municipio` varchar(45) NOT NULL,
  `Estado` varchar(45) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `CP` int(11) NOT NULL,
  `Email` varchar(45) NOT NULL,
  PRIMARY KEY (`ID_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('3', 'ROBERTO', 'PINEDA', 'nick', '*AE844B047E02E5FAD4AD353DD1E0D61CB7F89C8C', 'nick', '', '', '', '0', '', '', '0', '0', '');
INSERT INTO `usuario` VALUES ('4', 'ROBERTO Carlos', 'TABAREZ', 'car', '*5B88EAE2C3C04A26B371B27ABD59D3F055288E8E', 'car', '', '', '', '0', '', '', '0', '0', '');
INSERT INTO `usuario` VALUES ('5', 'Mario Mujercita', 'Perez', 'mama', '*09BAE5136AC8FEDC0428153B85589CF729E4ECC6', 'mama', '', '', '', '0', '', '', '0', '0', '');

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `ID_Ventas` int(11) NOT NULL AUTO_INCREMENT,
  `Cantidad` int(11) NOT NULL,
  `Costo_Total` float NOT NULL,
  `#_Cuenta` int(11) NOT NULL,
  `ID_Producto` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`ID_Ventas`),
  KEY `ID_Producto` (`ID_Producto`),
  KEY `ID_Usuario` (`ID_Usuario`),
  CONSTRAINT `ID_Producto` FOREIGN KEY (`ID_Producto`) REFERENCES `productos` (`ID_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ID_Usuario` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ventas
-- ----------------------------
