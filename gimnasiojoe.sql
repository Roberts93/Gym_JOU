/*
Navicat MySQL Data Transfer

Source Server         : diseno
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : gym

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-12-10 12:14:31
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
  `Seccion` varchar(200) DEFAULT NULL,
  `Categoria` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_Foto`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of imagenes
-- ----------------------------
INSERT INTO `imagenes` VALUES ('1', 'banner.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('2', '0.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('3', 'productosbanner.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('4', 'productosbanner.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('5', 'productosbanner.png', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('6', 'productosbanner.png', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('7', 'productosbanner.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('8', 'productosbanner.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('9', 'rutinasbanner.jpg', '', 'rutinas', 'banner');
INSERT INTO `imagenes` VALUES ('10', 'instalacionesbanner.jpg', '', 'instalaciones', 'banner');
INSERT INTO `imagenes` VALUES ('11', 'instalacionescarrusel1.jpg', '', 'instalaciones', 'carrusel1');
INSERT INTO `imagenes` VALUES ('12', 'instalacionescarrusel2.jpg', '', 'instalaciones', 'carrusel2');
INSERT INTO `imagenes` VALUES ('13', 'instalacionescarrusel3.jpg', '', 'instalaciones', 'carrusel3');
INSERT INTO `imagenes` VALUES ('14', 'instalacionescarrusel4.jpg', '', 'instalaciones', 'carrusel4');
INSERT INTO `imagenes` VALUES ('15', 'instalacionescarrusel5.jpg', '', 'instalaciones', 'carrusel5');
INSERT INTO `imagenes` VALUES ('16', 'instalacionescarrusel6.jpg', '', 'instalaciones', 'carrusel6');
INSERT INTO `imagenes` VALUES ('17', 'instalacionescarrusel7.jpg', '', 'instalaciones', 'carrusel7');
INSERT INTO `imagenes` VALUES ('18', 'instalacionescarrusel8.jpg', '', 'instalaciones', 'carrusel8');
INSERT INTO `imagenes` VALUES ('19', 'instalacionescarrusel1.jpg', '', 'instalaciones', 'carrusel1');
INSERT INTO `imagenes` VALUES ('20', 'productosbanner.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('21', 'productosbanner.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('22', 'productosbanner.jpg', '', 'productos', 'banner');
INSERT INTO `imagenes` VALUES ('23', 'iniciocarrusel1.png', '', 'inicio', 'carrusel1');
INSERT INTO `imagenes` VALUES ('24', 'iniciocarrusel2.png', '', 'inicio', 'carrusel2');
INSERT INTO `imagenes` VALUES ('25', 'iniciocarrusel3.png', '', 'inicio', 'carrusel3');
INSERT INTO `imagenes` VALUES ('26', 'iniciocarrusel4.png', '', 'inicio', 'carrusel4');
INSERT INTO `imagenes` VALUES ('27', 'iniciocarrusel5.png', '', 'inicio', 'carrusel5');
INSERT INTO `imagenes` VALUES ('28', 'iniciocarrusel5.png', '', 'inicio', 'carrusel5');
INSERT INTO `imagenes` VALUES ('29', 'iniciocarrusel6.png', '', 'inicio', 'carrusel6');
INSERT INTO `imagenes` VALUES ('30', 'iniciocarrusel7.png', '', 'inicio', 'carrusel7');
INSERT INTO `imagenes` VALUES ('31', 'iniciocuerpo.png', '', 'inicio', 'cuerpo');
INSERT INTO `imagenes` VALUES ('32', 'promocionescarrusel1.jpg', '', 'promociones', 'carrusel1');
INSERT INTO `imagenes` VALUES ('33', 'promocionescarrusel2.jpg', '', 'promociones', 'carrusel2');
INSERT INTO `imagenes` VALUES ('34', 'promocionescarrusel3.jpg', '', 'promociones', 'carrusel3');
INSERT INTO `imagenes` VALUES ('35', 'promocionescarrusel4.jpg', '', 'promociones', 'carrusel4');
INSERT INTO `imagenes` VALUES ('36', 'promocionescarrusel5.jpg', '', 'promociones', 'carrusel5');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES ('8', 'adruplina', 'adruplex', '1000', '800', '1 Kg', 'Aumenta Masa', 'adruplina.png', 'algo');
INSERT INTO `productos` VALUES ('9', 'artemina', 'Artuit', '1000', '800', '1 KG.', 'Oxido Nitrico', 'artemina.jpg', 'algo');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('9', 'Mario', 'Zavaleta', 'art92', '*5252F46E7339F2E7DD4DB6FC52214A19F2CA3681', 'art92.jpg', '2', 'emiliano', 'costita', '22343', 'Altamirano', 'Guerrero', '2147483647', '40660', 'art92@gmail.com');
INSERT INTO `usuario` VALUES ('10', 'Mario', 'Zavaleta', 'art92', 'art92', 'art92.jpg', '1', 'sdafa', 'sadfaf', '123', 'sdafa', 'asdfafa', '123551', '1234', 'sadfafa@hotmail.com');
INSERT INTO `usuario` VALUES ('11', 'Mario', 'Zavaleta', 'art92', 'art92', 'art92.jpg', '1', 'sdafa', 'sadfaf', '123', 'sdafa', 'asdfafa', '123551', '1234', 'sadfafa@hotmail.com');

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
