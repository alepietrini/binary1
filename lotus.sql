/*
Navicat MySQL Data Transfer

Source Server         : apietrini
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : lotus

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-11-23 12:01:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_funcionalidad
-- ----------------------------
DROP TABLE IF EXISTS `admin_funcionalidad`;
CREATE TABLE `admin_funcionalidad` (
  `id_funcionalidad` int(11) NOT NULL AUTO_INCREMENT,
  `funcionalidad` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  PRIMARY KEY (`id_funcionalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_funcionalidad
-- ----------------------------
INSERT INTO `admin_funcionalidad` VALUES ('1', 'Creación de Lideres', 'index.php/cliente/registroLider/mostrarFormularioRegistroLider');
INSERT INTO `admin_funcionalidad` VALUES ('2', 'Creación de Asesores', 'index.php/cliente/registroAsesor/mostrarFormularioRegistroAsesor');

-- ----------------------------
-- Table structure for admin_modulo
-- ----------------------------
DROP TABLE IF EXISTS `admin_modulo`;
CREATE TABLE `admin_modulo` (
  `id_modulo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_modulo` varchar(255) NOT NULL,
  `icono` varchar(255) NOT NULL,
  PRIMARY KEY (`id_modulo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_modulo
-- ----------------------------
INSERT INTO `admin_modulo` VALUES ('1', 'CLIENTES', 'glyphicon glyphicon-user');
INSERT INTO `admin_modulo` VALUES ('2', 'PEDIDOS', 'glyphicon glyphicon-shopping-cart');
INSERT INTO `admin_modulo` VALUES ('3', 'LIDERES', 'glyphicon glyphicon-user');
INSERT INTO `admin_modulo` VALUES ('4', 'REPORTES', 'glyphicon glyphicon-stats');
INSERT INTO `admin_modulo` VALUES ('5', 'ADMINISTRACION', 'glyphicon glyphicon-user');

-- ----------------------------
-- Table structure for admin_rol
-- ----------------------------
DROP TABLE IF EXISTS `admin_rol`;
CREATE TABLE `admin_rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(255) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_rol
-- ----------------------------
INSERT INTO `admin_rol` VALUES ('1', 'LIDER 1');
INSERT INTO `admin_rol` VALUES ('2', 'VENDEDOR');
INSERT INTO `admin_rol` VALUES ('3', 'LIDER');

-- ----------------------------
-- Table structure for admin_rol_modulo_funcionalidad
-- ----------------------------
DROP TABLE IF EXISTS `admin_rol_modulo_funcionalidad`;
CREATE TABLE `admin_rol_modulo_funcionalidad` (
  `id_rol_modulo_funcionalidad` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_rol` int(11) NOT NULL,
  `fk_id_modulo` int(11) NOT NULL,
  `fk_id_funcionalidad` int(11) NOT NULL,
  PRIMARY KEY (`id_rol_modulo_funcionalidad`),
  KEY `fk_id_rol_rolModulo` (`fk_id_rol`),
  KEY `fk_id_modulo_rolModulo` (`fk_id_modulo`),
  KEY `fk_id_funcionalidad_rolModulo` (`fk_id_funcionalidad`),
  CONSTRAINT `fk_id_funcionalidad_rolModulo` FOREIGN KEY (`fk_id_funcionalidad`) REFERENCES `admin_funcionalidad` (`id_funcionalidad`),
  CONSTRAINT `fk_id_modulo_rolModulo` FOREIGN KEY (`fk_id_modulo`) REFERENCES `admin_modulo` (`id_modulo`),
  CONSTRAINT `fk_id_rol_rolModulo` FOREIGN KEY (`fk_id_rol`) REFERENCES `admin_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_rol_modulo_funcionalidad
-- ----------------------------
INSERT INTO `admin_rol_modulo_funcionalidad` VALUES ('1', '1', '1', '1');
INSERT INTO `admin_rol_modulo_funcionalidad` VALUES ('2', '1', '1', '2');
INSERT INTO `admin_rol_modulo_funcionalidad` VALUES ('3', '1', '2', '1');
INSERT INTO `admin_rol_modulo_funcionalidad` VALUES ('4', '1', '3', '1');
INSERT INTO `admin_rol_modulo_funcionalidad` VALUES ('5', '1', '5', '1');

-- ----------------------------
-- Table structure for admin_usuario
-- ----------------------------
DROP TABLE IF EXISTS `admin_usuario`;
CREATE TABLE `admin_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `clave` varchar(255) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `nro_documento` varchar(255) NOT NULL,
  `estado_habilitacion` varchar(1) NOT NULL COMMENT '1: Habilitado\r\n2: Deshabilitado',
  `fk_id_cliente` int(11) NOT NULL,
  `fk_id_rol` int(11) NOT NULL COMMENT '1: SUPER ADMIN\r\n2: VENDEDOR',
  PRIMARY KEY (`id_usuario`),
  KEY `fk_id_cliente_usuario` (`fk_id_cliente`),
  KEY `fk_id_rol_usuario` (`fk_id_rol`),
  CONSTRAINT `fk_id_cliente_usuario` FOREIGN KEY (`fk_id_cliente`) REFERENCES `tab_cliente` (`id_cliente`),
  CONSTRAINT `fk_id_rol_usuario` FOREIGN KEY (`fk_id_rol`) REFERENCES `admin_rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin_usuario
-- ----------------------------
INSERT INTO `admin_usuario` VALUES ('6', 'admin', '74a9a9960c1c45602edaeef45d212a61', 'Administrador Lotus', '9999999999', '1', '16', '1');
INSERT INTO `admin_usuario` VALUES ('7', '1669613915', '453fba309f006fced574815a64e3bb0c', 'prueba18 prueba18 prueba18 prueba18', '1669613915', '1', '35', '2');
INSERT INTO `admin_usuario` VALUES ('8', '1669613916', '6c94bcd6600c37f0d8a67ef1836d4e97', 'prueba19 prueba19 prueba19 prueba19', '1669613916', '1', '36', '2');
INSERT INTO `admin_usuario` VALUES ('9', '1669613917', 'a066b48680d0f510f368eecb1b37c893', 'prueba20 prueba20 prueba20 prueba20', '1669613917', '1', '37', '2');
INSERT INTO `admin_usuario` VALUES ('12', '1669613925', 'd998e795fa7902aed6df97c90a78be35', 'prueba25 prueba25 prueba25 prueba25', '1669613925', '1', '43', '2');
INSERT INTO `admin_usuario` VALUES ('13', '1669613926', '0ff99ba07e5acda21e74c6c07a4b7491', 'prueba26 prueba26 prueba26 prueba26', '1669613926', '1', '44', '2');
INSERT INTO `admin_usuario` VALUES ('14', '1669613927', 'b29d5e5bc45e63ad67eff5aaeeda3cc6', 'prueba27 prueba27 prueba27 prueba27', '1669613927', '1', '45', '2');
INSERT INTO `admin_usuario` VALUES ('15', '1669613935', '035f5af572228ad7d14298f11a94faa2', 'prueba35 prueba35 prueba35 prueba35', '1669613935', '1', '51', '2');
INSERT INTO `admin_usuario` VALUES ('16', '1669613936', 'e32733f6fc30ee64492211667758cea1', 'prueba36 prueba36 prueba36 prueba36', '1669613936', '1', '52', '2');
INSERT INTO `admin_usuario` VALUES ('17', '1669613937', '2ecd922bffaac31fff5b822e93174b68', 'prueba37 prueba37 prueba37 prueba37', '1669613937', '1', '53', '2');
INSERT INTO `admin_usuario` VALUES ('18', '6666666', 'd5ee2eedfcf7adc285db4967bd86910d', 'prueba38 prueba38 prueba38 prueba38', '6666666', '1', '54', '2');
INSERT INTO `admin_usuario` VALUES ('19', '1713647269', '32d2cbf6a2d5073785d706eda422d09b', 'sfrawerf seferf sefewf sefewrf', '1713647269', '1', '60', '2');
INSERT INTO `admin_usuario` VALUES ('20', '1724544141', '85a42c68a1735af7a5c7040c8f867f0c', 'prueba51 prueba51 prueba51 prueba51', '1724544141', '1', '61', '2');
INSERT INTO `admin_usuario` VALUES ('21', '1728682608', '5fa55f9e6f3c856417fd279e4607f974', 'prueba53 prueba53 prueba53 prueba53', '1728682608', '1', '64', '2');
INSERT INTO `admin_usuario` VALUES ('22', '1726449513', '35105b81bb34b6e959d292119dfdc810', 'prueba54 prueba54 prueba54 prueba54', '1726449513', '1', '65', '2');
INSERT INTO `admin_usuario` VALUES ('23', '1726095688', '97eb414addf6af6b78666097b1c56747', 'ASESOR1 ASESOR1 ASESOR1 ASESOR1', '1726095688', '1', '79', '2');
INSERT INTO `admin_usuario` VALUES ('24', '1312994997', '60abec421ce3ba528dcd4953e82c5b28', 'ASESOR2 ASESOR2 ASESOR2 ASESOR2', '1312994997', '1', '80', '2');
INSERT INTO `admin_usuario` VALUES ('25', '1750343111', 'f88816153ea1241378e1025c17093c9b', 'ASESOR3 ASESOR3 ASESOR3 ASESOR3', '1750343111', '1', '81', '2');
INSERT INTO `admin_usuario` VALUES ('26', '1726189762', '638d43ddcfef9b90abd88f9af77c9ec8', 'ASESOR4 ASESOR4 ASESOR4 ASESOR4', '1726189762', '1', '82', '2');

-- ----------------------------
-- Table structure for tab_canton
-- ----------------------------
DROP TABLE IF EXISTS `tab_canton`;
CREATE TABLE `tab_canton` (
  `id_canton` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_canton` varchar(255) NOT NULL,
  `fk_id_provincia_canton` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_canton`),
  KEY `fk_id_provincia_canton` (`fk_id_provincia_canton`),
  CONSTRAINT `fk_id_provincia_canton` FOREIGN KEY (`fk_id_provincia_canton`) REFERENCES `tab_provincia` (`id_provincia`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_canton
-- ----------------------------
INSERT INTO `tab_canton` VALUES ('1', 'CAMILO PONCE ENRIQUEZ', '1');
INSERT INTO `tab_canton` VALUES ('2', 'CHORDELEG', '1');
INSERT INTO `tab_canton` VALUES ('3', 'CUENCA', '1');
INSERT INTO `tab_canton` VALUES ('4', 'EL PAN', '1');
INSERT INTO `tab_canton` VALUES ('5', 'GIRON', '1');
INSERT INTO `tab_canton` VALUES ('6', 'GUACHAPALA', '1');
INSERT INTO `tab_canton` VALUES ('7', 'GUALACEO', '1');
INSERT INTO `tab_canton` VALUES ('8', 'NABON', '1');
INSERT INTO `tab_canton` VALUES ('9', 'OÑA', '1');
INSERT INTO `tab_canton` VALUES ('10', 'PAUTE', '1');
INSERT INTO `tab_canton` VALUES ('11', 'PUCARA', '1');
INSERT INTO `tab_canton` VALUES ('12', 'SAN FERNANDO', '1');
INSERT INTO `tab_canton` VALUES ('13', 'SANTA ISABEL', '1');
INSERT INTO `tab_canton` VALUES ('14', 'SEVILLA DE ORO', '1');
INSERT INTO `tab_canton` VALUES ('15', 'SIGSIG', '1');
INSERT INTO `tab_canton` VALUES ('16', 'CALUMA', '2');
INSERT INTO `tab_canton` VALUES ('17', 'CHILLANES', '2');
INSERT INTO `tab_canton` VALUES ('18', 'CHIMBO', '2');
INSERT INTO `tab_canton` VALUES ('19', 'ECHEANDIA', '2');
INSERT INTO `tab_canton` VALUES ('20', 'GUARANDA', '2');
INSERT INTO `tab_canton` VALUES ('21', 'LAS NAVES', '2');
INSERT INTO `tab_canton` VALUES ('22', 'SAN MIGUEL', '2');
INSERT INTO `tab_canton` VALUES ('23', 'AZOGUES', '3');
INSERT INTO `tab_canton` VALUES ('24', 'BIBLIAN', '3');
INSERT INTO `tab_canton` VALUES ('25', 'CAÑAR', '3');
INSERT INTO `tab_canton` VALUES ('26', 'DELEG', '3');
INSERT INTO `tab_canton` VALUES ('27', 'EL TAMBO', '3');
INSERT INTO `tab_canton` VALUES ('28', 'LA TRONCAL', '3');
INSERT INTO `tab_canton` VALUES ('29', 'SUSCAL', '3');
INSERT INTO `tab_canton` VALUES ('30', 'BOLIVAR', '4');
INSERT INTO `tab_canton` VALUES ('31', 'ESPEJO', '4');
INSERT INTO `tab_canton` VALUES ('32', 'MIRA', '4');
INSERT INTO `tab_canton` VALUES ('33', 'MONTUFAR', '4');
INSERT INTO `tab_canton` VALUES ('34', 'SAN PEDRO DE HUACA', '4');
INSERT INTO `tab_canton` VALUES ('35', 'TULCAN', '4');
INSERT INTO `tab_canton` VALUES ('36', 'ALAUSI', '5');
INSERT INTO `tab_canton` VALUES ('37', 'CHAMBO', '5');
INSERT INTO `tab_canton` VALUES ('38', 'CHUNCHI', '5');
INSERT INTO `tab_canton` VALUES ('39', 'COLTA', '5');
INSERT INTO `tab_canton` VALUES ('40', 'CUMANDA', '5');
INSERT INTO `tab_canton` VALUES ('41', 'GUAMOTE', '5');
INSERT INTO `tab_canton` VALUES ('42', 'GUANO', '5');
INSERT INTO `tab_canton` VALUES ('43', 'PALLATANGA', '5');
INSERT INTO `tab_canton` VALUES ('44', 'PENIPE', '5');
INSERT INTO `tab_canton` VALUES ('45', 'RIOBAMBA', '5');
INSERT INTO `tab_canton` VALUES ('46', 'LA MANA', '6');
INSERT INTO `tab_canton` VALUES ('47', 'LATACUNGA', '6');
INSERT INTO `tab_canton` VALUES ('48', 'PANGUA', '6');
INSERT INTO `tab_canton` VALUES ('49', 'PUJILI', '6');
INSERT INTO `tab_canton` VALUES ('50', 'SALCEDO', '6');
INSERT INTO `tab_canton` VALUES ('51', 'SAQUISILI', '6');
INSERT INTO `tab_canton` VALUES ('52', 'SIGCHOS', '6');
INSERT INTO `tab_canton` VALUES ('53', 'ARENILLAS', '7');
INSERT INTO `tab_canton` VALUES ('54', 'ATAHUALPA', '7');
INSERT INTO `tab_canton` VALUES ('55', 'BALSAS', '7');
INSERT INTO `tab_canton` VALUES ('56', 'CHILLA', '7');
INSERT INTO `tab_canton` VALUES ('57', 'EL GUABO', '7');
INSERT INTO `tab_canton` VALUES ('58', 'HUAQUILLAS', '7');
INSERT INTO `tab_canton` VALUES ('59', 'LAS LAJAS', '7');
INSERT INTO `tab_canton` VALUES ('60', 'MACHALA', '7');
INSERT INTO `tab_canton` VALUES ('61', 'MARCABELI', '7');
INSERT INTO `tab_canton` VALUES ('62', 'PASAJE', '7');
INSERT INTO `tab_canton` VALUES ('63', 'PIÑAS', '7');
INSERT INTO `tab_canton` VALUES ('64', 'PORTOVELO', '7');
INSERT INTO `tab_canton` VALUES ('65', 'SANTA ROSA', '7');
INSERT INTO `tab_canton` VALUES ('66', 'ZARUMA', '7');
INSERT INTO `tab_canton` VALUES ('67', 'ATACAMES', '8');
INSERT INTO `tab_canton` VALUES ('68', 'ELOY ALFARO', '8');
INSERT INTO `tab_canton` VALUES ('69', 'ESMERALDAS', '8');
INSERT INTO `tab_canton` VALUES ('70', 'LA CONCORDIA', '8');
INSERT INTO `tab_canton` VALUES ('71', 'MUISNE', '8');
INSERT INTO `tab_canton` VALUES ('72', 'QUININDE', '8');
INSERT INTO `tab_canton` VALUES ('73', 'RIOVERDE', '8');
INSERT INTO `tab_canton` VALUES ('74', 'SAN LORENZO', '8');
INSERT INTO `tab_canton` VALUES ('75', 'ISABELA', '9');
INSERT INTO `tab_canton` VALUES ('76', 'SAN CRISTOBAL', '9');
INSERT INTO `tab_canton` VALUES ('77', 'SANTA CRUZ', '9');
INSERT INTO `tab_canton` VALUES ('78', 'ALFREDO BAQUERIZO MORENO (JUJAN)', '10');
INSERT INTO `tab_canton` VALUES ('79', 'BALAO', '10');
INSERT INTO `tab_canton` VALUES ('80', 'BALZAR', '10');
INSERT INTO `tab_canton` VALUES ('81', 'COLIMES', '10');
INSERT INTO `tab_canton` VALUES ('82', 'CORONEL MARCELINO MARIDUEÑA', '10');
INSERT INTO `tab_canton` VALUES ('83', 'DAULE', '10');
INSERT INTO `tab_canton` VALUES ('84', 'DURAN', '10');
INSERT INTO `tab_canton` VALUES ('85', 'EL EMPALME', '10');
INSERT INTO `tab_canton` VALUES ('86', 'EL TRIUNFO', '10');
INSERT INTO `tab_canton` VALUES ('87', 'GENERAL ANTONIO ELIZALDE (BUCAY)', '10');
INSERT INTO `tab_canton` VALUES ('88', 'GUAYAQUIL', '10');
INSERT INTO `tab_canton` VALUES ('89', 'ISIDRO AYORA', '10');
INSERT INTO `tab_canton` VALUES ('90', 'LOMAS DE SARGENTILLO', '10');
INSERT INTO `tab_canton` VALUES ('91', 'MILAGRO', '10');
INSERT INTO `tab_canton` VALUES ('92', 'NARANJAL', '10');
INSERT INTO `tab_canton` VALUES ('93', 'NARANJITO', '10');
INSERT INTO `tab_canton` VALUES ('94', 'NOBOL', '10');
INSERT INTO `tab_canton` VALUES ('95', 'PALESTINA', '10');
INSERT INTO `tab_canton` VALUES ('96', 'PEDRO CARBO', '10');
INSERT INTO `tab_canton` VALUES ('97', 'PLAYAS', '10');
INSERT INTO `tab_canton` VALUES ('98', 'SALITRE (URBINA JADO)', '10');
INSERT INTO `tab_canton` VALUES ('99', 'SAMBORONDON', '10');
INSERT INTO `tab_canton` VALUES ('100', 'SAN JACINTO DE YAGUACHI', '10');
INSERT INTO `tab_canton` VALUES ('101', 'SANTA LUCIA', '10');
INSERT INTO `tab_canton` VALUES ('102', 'SIMON BOLIVAR', '10');
INSERT INTO `tab_canton` VALUES ('103', 'ANTONIO ANTE', '11');
INSERT INTO `tab_canton` VALUES ('104', 'COTACACHI', '11');
INSERT INTO `tab_canton` VALUES ('105', 'IBARRA', '11');
INSERT INTO `tab_canton` VALUES ('106', 'OTAVALO', '11');
INSERT INTO `tab_canton` VALUES ('107', 'PIMAMPIRO', '11');
INSERT INTO `tab_canton` VALUES ('108', 'SAN MIGUEL DE URCUQUI', '11');
INSERT INTO `tab_canton` VALUES ('109', 'CALVAS', '12');
INSERT INTO `tab_canton` VALUES ('110', 'CATAMAYO', '12');
INSERT INTO `tab_canton` VALUES ('111', 'CELICA', '12');
INSERT INTO `tab_canton` VALUES ('112', 'CHAGUARPAMBA', '12');
INSERT INTO `tab_canton` VALUES ('113', 'ESPINDOLA', '12');
INSERT INTO `tab_canton` VALUES ('114', 'GONZANAMA', '12');
INSERT INTO `tab_canton` VALUES ('115', 'LOJA', '12');
INSERT INTO `tab_canton` VALUES ('116', 'MACARA', '12');
INSERT INTO `tab_canton` VALUES ('117', 'OLMEDO', '12');
INSERT INTO `tab_canton` VALUES ('118', 'PALTAS', '12');
INSERT INTO `tab_canton` VALUES ('119', 'PINDAL', '12');
INSERT INTO `tab_canton` VALUES ('120', 'PUYANGO', '12');
INSERT INTO `tab_canton` VALUES ('121', 'QUILANGA', '12');
INSERT INTO `tab_canton` VALUES ('122', 'SARAGURO', '12');
INSERT INTO `tab_canton` VALUES ('123', 'SOZORANGA', '12');
INSERT INTO `tab_canton` VALUES ('124', 'ZAPOTILLO', '12');
INSERT INTO `tab_canton` VALUES ('125', 'BABA', '13');
INSERT INTO `tab_canton` VALUES ('126', 'BABAHOYO', '13');
INSERT INTO `tab_canton` VALUES ('127', 'BUENA FE', '13');
INSERT INTO `tab_canton` VALUES ('128', 'MOCACHE', '13');
INSERT INTO `tab_canton` VALUES ('129', 'MONTALVO', '13');
INSERT INTO `tab_canton` VALUES ('130', 'PALENQUE', '13');
INSERT INTO `tab_canton` VALUES ('131', 'PUEBLOVIEJO', '13');
INSERT INTO `tab_canton` VALUES ('132', 'QUEVEDO', '13');
INSERT INTO `tab_canton` VALUES ('133', 'QUINSALOMA', '13');
INSERT INTO `tab_canton` VALUES ('134', 'URDANETA', '13');
INSERT INTO `tab_canton` VALUES ('135', 'VALENCIA', '13');
INSERT INTO `tab_canton` VALUES ('136', 'VENTANAS', '13');
INSERT INTO `tab_canton` VALUES ('137', 'VINCES', '13');
INSERT INTO `tab_canton` VALUES ('138', '24 DE MAYO', '14');
INSERT INTO `tab_canton` VALUES ('139', 'BOLIVAR', '14');
INSERT INTO `tab_canton` VALUES ('140', 'CHONE', '14');
INSERT INTO `tab_canton` VALUES ('141', 'EL CARMEN', '14');
INSERT INTO `tab_canton` VALUES ('142', 'FLAVIO ALFARO', '14');
INSERT INTO `tab_canton` VALUES ('143', 'JAMA', '14');
INSERT INTO `tab_canton` VALUES ('144', 'JARAMIJO', '14');
INSERT INTO `tab_canton` VALUES ('145', 'JIPIJAPA', '14');
INSERT INTO `tab_canton` VALUES ('146', 'JUNIN', '14');
INSERT INTO `tab_canton` VALUES ('147', 'MANTA', '14');
INSERT INTO `tab_canton` VALUES ('148', 'MONTECRISTI', '14');
INSERT INTO `tab_canton` VALUES ('149', 'OLMEDO', '14');
INSERT INTO `tab_canton` VALUES ('150', 'PAJAN', '14');
INSERT INTO `tab_canton` VALUES ('151', 'PEDERNALES', '14');
INSERT INTO `tab_canton` VALUES ('152', 'PICHINCHA', '14');
INSERT INTO `tab_canton` VALUES ('153', 'PORTOVIEJO', '14');
INSERT INTO `tab_canton` VALUES ('154', 'PUERTO LOPEZ', '14');
INSERT INTO `tab_canton` VALUES ('155', 'ROCAFUERTE', '14');
INSERT INTO `tab_canton` VALUES ('156', 'SAN VICENTE', '14');
INSERT INTO `tab_canton` VALUES ('157', 'SANTA ANA', '14');
INSERT INTO `tab_canton` VALUES ('158', 'SUCRE', '14');
INSERT INTO `tab_canton` VALUES ('159', 'TOSAGUA', '14');
INSERT INTO `tab_canton` VALUES ('160', 'GUALAQUIZA', '15');
INSERT INTO `tab_canton` VALUES ('161', 'HUAMBOYA', '15');
INSERT INTO `tab_canton` VALUES ('162', 'LIMON INDANZA', '15');
INSERT INTO `tab_canton` VALUES ('163', 'LOGROÑO', '15');
INSERT INTO `tab_canton` VALUES ('164', 'MORONA', '15');
INSERT INTO `tab_canton` VALUES ('165', 'PABLO SEXTO', '15');
INSERT INTO `tab_canton` VALUES ('166', 'PALORA', '15');
INSERT INTO `tab_canton` VALUES ('167', 'SAN JUAN BOSCO', '15');
INSERT INTO `tab_canton` VALUES ('168', 'SANTIAGO', '15');
INSERT INTO `tab_canton` VALUES ('169', 'SUCUA', '15');
INSERT INTO `tab_canton` VALUES ('170', 'TAISHA', '15');
INSERT INTO `tab_canton` VALUES ('171', 'TIWINTZA', '15');
INSERT INTO `tab_canton` VALUES ('172', 'ARCHIDONA', '16');
INSERT INTO `tab_canton` VALUES ('173', 'CARLOS JULIO AROSEMENA TOLA', '16');
INSERT INTO `tab_canton` VALUES ('174', 'EL CHACO', '16');
INSERT INTO `tab_canton` VALUES ('175', 'QUIJOS', '16');
INSERT INTO `tab_canton` VALUES ('176', 'TENA', '16');
INSERT INTO `tab_canton` VALUES ('177', 'AGUARICO', '17');
INSERT INTO `tab_canton` VALUES ('178', 'LA JOYA DE LOS SACHAS', '17');
INSERT INTO `tab_canton` VALUES ('179', 'LORETO', '17');
INSERT INTO `tab_canton` VALUES ('180', 'ORELLANA', '17');
INSERT INTO `tab_canton` VALUES ('181', 'ARAJUNO', '18');
INSERT INTO `tab_canton` VALUES ('182', 'MERA', '18');
INSERT INTO `tab_canton` VALUES ('183', 'PASTAZA', '18');
INSERT INTO `tab_canton` VALUES ('184', 'SANTA CLARA', '18');
INSERT INTO `tab_canton` VALUES ('185', 'CAYAMBE', '19');
INSERT INTO `tab_canton` VALUES ('186', 'MEJIA', '19');
INSERT INTO `tab_canton` VALUES ('187', 'PEDRO MONCAYO', '19');
INSERT INTO `tab_canton` VALUES ('188', 'PEDRO VICENTE MALDONADO', '19');
INSERT INTO `tab_canton` VALUES ('189', 'PUERTO QUITO', '19');
INSERT INTO `tab_canton` VALUES ('190', 'QUITO', '19');
INSERT INTO `tab_canton` VALUES ('191', 'RUMIÑAHUI', '19');
INSERT INTO `tab_canton` VALUES ('192', 'SAN MIGUEL DE LOS BANCOS', '19');
INSERT INTO `tab_canton` VALUES ('193', 'LA LIBERTAD', '20');
INSERT INTO `tab_canton` VALUES ('194', 'SALINAS', '20');
INSERT INTO `tab_canton` VALUES ('195', 'SANTA ELENA', '20');
INSERT INTO `tab_canton` VALUES ('196', 'SANTO DOMINGO', '21');
INSERT INTO `tab_canton` VALUES ('197', 'CASCALES', '22');
INSERT INTO `tab_canton` VALUES ('198', 'CUYABENO', '22');
INSERT INTO `tab_canton` VALUES ('199', 'GONZALO PIZARRO', '22');
INSERT INTO `tab_canton` VALUES ('200', 'LAGO AGRIO', '22');
INSERT INTO `tab_canton` VALUES ('201', 'PUTUMAYO', '22');
INSERT INTO `tab_canton` VALUES ('202', 'SHUSHUFINDI', '22');
INSERT INTO `tab_canton` VALUES ('203', 'SUCUMBIOS', '22');
INSERT INTO `tab_canton` VALUES ('204', 'AMBATO', '23');
INSERT INTO `tab_canton` VALUES ('205', 'BAÑOS DE AGUA SANTA', '23');
INSERT INTO `tab_canton` VALUES ('206', 'CEVALLOS', '23');
INSERT INTO `tab_canton` VALUES ('207', 'MOCHA', '23');
INSERT INTO `tab_canton` VALUES ('208', 'PATATE', '23');
INSERT INTO `tab_canton` VALUES ('209', 'QUERO', '23');
INSERT INTO `tab_canton` VALUES ('210', 'SAN PEDRO DE PELILEO', '23');
INSERT INTO `tab_canton` VALUES ('211', 'SANTIAGO DE PILLARO', '23');
INSERT INTO `tab_canton` VALUES ('212', 'TISALEO', '23');
INSERT INTO `tab_canton` VALUES ('213', 'CENTINELA DEL CONDOR', '24');
INSERT INTO `tab_canton` VALUES ('214', 'CHINCHIPE', '24');
INSERT INTO `tab_canton` VALUES ('215', 'EL PANGUI', '24');
INSERT INTO `tab_canton` VALUES ('216', 'NANGARITZA', '24');
INSERT INTO `tab_canton` VALUES ('217', 'PALANDA', '24');
INSERT INTO `tab_canton` VALUES ('218', 'PAQUISHA', '24');
INSERT INTO `tab_canton` VALUES ('219', 'YACUAMBI', '24');
INSERT INTO `tab_canton` VALUES ('220', 'YANTZAZA', '24');
INSERT INTO `tab_canton` VALUES ('221', 'ZAMORA', '24');
INSERT INTO `tab_canton` VALUES ('222', 'SAN JUAN DE PASTO', '25');
INSERT INTO `tab_canton` VALUES ('224', 'IPIALES', '25');
INSERT INTO `tab_canton` VALUES ('225', 'NEIVA', '26');
INSERT INTO `tab_canton` VALUES ('229', 'PALMIRA VALLE', '35');
INSERT INTO `tab_canton` VALUES ('230', 'BOGOTÁ', '36');
INSERT INTO `tab_canton` VALUES ('231', 'STO DGO DE LOS CLDS', '19');
INSERT INTO `tab_canton` VALUES ('232', 'CAYAMBE JUAN MONTALVO', '19');
INSERT INTO `tab_canton` VALUES ('233', 'GONZALES SUAREZ', '19');
INSERT INTO `tab_canton` VALUES ('234', 'SAN FRANCISCO', '8');
INSERT INTO `tab_canton` VALUES ('235', 'VALLE', '35');
INSERT INTO `tab_canton` VALUES ('236', 'TARMA', '37');
INSERT INTO `tab_canton` VALUES ('237', 'CORDOBA', '25');
INSERT INTO `tab_canton` VALUES ('238', 'TABACUNDO', null);
INSERT INTO `tab_canton` VALUES ('239', 'CARPUELA', '4');

-- ----------------------------
-- Table structure for tab_cliente
-- ----------------------------
DROP TABLE IF EXISTS `tab_cliente`;
CREATE TABLE `tab_cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `primer_nombre` varchar(255) NOT NULL,
  `segundo_nombre` varchar(255) DEFAULT NULL,
  `apellido_paterno` varchar(255) NOT NULL,
  `apellido_materno` varchar(255) DEFAULT NULL,
  `nro_documento` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `tlf_fijo` varchar(11) DEFAULT NULL,
  `tlf_celular` varchar(12) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tipoContacto` varchar(1) DEFAULT NULL,
  `fecha_ingreso` date NOT NULL,
  `super_lider` varchar(1) NOT NULL,
  `fk_id_provincia` int(11) NOT NULL,
  `fk_id_canton` int(11) NOT NULL,
  `fk_id_referido` int(11) DEFAULT NULL,
  `fk_id_rol` int(11) NOT NULL,
  `fk_id_lider` int(11) DEFAULT NULL,
  `fk_id_tipoDocumento` int(11) NOT NULL,
  PRIMARY KEY (`id_cliente`,`nro_documento`),
  KEY `fk_id_provincia_cliente` (`fk_id_provincia`),
  KEY `fk_id_rol_cliente` (`fk_id_rol`),
  KEY `fk_id_canton_cliente` (`fk_id_canton`),
  KEY `fk_vendedor_cliente` (`fk_id_referido`),
  KEY `fk_id_lider_cliente` (`fk_id_lider`),
  KEY `fk_id_tipoDocumento` (`fk_id_tipoDocumento`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `fk_id_canton_cliente` FOREIGN KEY (`fk_id_canton`) REFERENCES `tab_canton` (`id_canton`),
  CONSTRAINT `fk_id_lider_cliente` FOREIGN KEY (`fk_id_lider`) REFERENCES `tab_cliente` (`id_cliente`),
  CONSTRAINT `fk_id_provincia_cliente` FOREIGN KEY (`fk_id_provincia`) REFERENCES `tab_provincia` (`id_provincia`),
  CONSTRAINT `fk_id_rol_cliente` FOREIGN KEY (`fk_id_rol`) REFERENCES `admin_rol` (`id_rol`),
  CONSTRAINT `fk_vendedor_cliente` FOREIGN KEY (`fk_id_referido`) REFERENCES `tab_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_cliente
-- ----------------------------
INSERT INTO `tab_cliente` VALUES ('16', 'Administrador', null, 'Lotus', null, '9999999999', '1984-01-30', null, '9999999999', 'Av. Atahualpa', 'admin@admin.com', '1', '2016-11-15', 'S', '1', '1', null, '1', null, '1');
INSERT INTO `tab_cliente` VALUES ('17', 'prueba1', 'prueba1', 'prueba1', 'prueba1', '0000000000', '2016-11-01', '999999999', '9999999999', 'aaa', 'a@a.com', '1', '2016-11-16', 'N', '1', '1', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('18', 'prueba2', 'prueba2', 'prueba2', 'prueba2', '8888888888', '2016-11-02', '000000000', '0000000000', 'dd', 'd@a.com', '1', '2016-11-16', 'N', '1', '1', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('19', 'a', 'a', 'a', 'a', '5555555555', '2016-11-09', '666666666', '6666666666', 'fb', '', '', '2016-11-16', 'N', '3', '24', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('20', 'prueba3', 'prueba3', 'prueba3', 'prueba3', '1668613900', '1990-02-14', null, '9999999999', 'Av. Gonzalo serrano', '', '', '2016-11-16', 'N', '15', '160', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('21', 'prueba4', 'prueba4', 'prueba4', 'prueba4', '1669613901', '1984-01-30', null, '6666666666', 'Av. Atahualpa', 'a@a.com', '1', '2016-11-16', 'N', '1', '1', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('22', 'prueba5', 'prueba5', 'prueba5', 'prueba5', '1669613902', '1984-01-30', null, '8888888888', 'aaa', 'a@a.com', '1', '2016-11-16', 'N', '1', '2', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('23', 'prueba6', 'prueba6', 'prueba6', 'prueba6', '1669613903', '1984-01-30', null, '6666666666', 'Av. 10 de Agosto', 'a@a.com', '1', '2016-11-16', 'N', '1', '1', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('24', 'prueba7', 'prueba7', 'prueba7', 'prueba7', '1669613904', '1984-01-30', null, '8888888888', 'El inca', '', '1', '2016-11-16', 'N', '19', '185', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('25', 'prueba8', 'prueba8', 'prueba8', 'prueba8', '1669613905', '1984-01-30', null, '9999999999', 'Av. 6 de Diciembre', '', '1', '2016-11-16', 'N', '19', '185', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('26', 'prueba9', 'prueba9', 'prueba9', 'prueba9', '1669613906', '1984-01-30', null, '9999999999', 'Av. 6 de Diciembre', '', '1', '2016-11-16', 'N', '19', '192', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('27', 'prueba10', 'prueba10', 'prueba10', 'prueba10', '1669613907', '1984-01-30', null, '9999999999', 'Av atahualpa', '', '1', '2016-11-16', 'N', '18', '181', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('28', 'prueba11', 'prueba11', 'prueba11', 'prueba11', '1669613908', '1984-01-30', '888888888', '8888888888', 'Av. atahualpa', '', '1', '2016-11-16', 'N', '19', '186', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('29', 'prueba12', 'prueba12', 'prueba12', 'prueba12', '1669613909', '1984-01-30', null, '9999999999', 'Av. atahualpa', '', '1', '2016-11-16', 'N', '19', '185', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('30', 'prueba13', 'prueba13', 'prueba13', 'prueba13', '1669613910', '1984-01-30', null, '9999999999', 'Av. atahualpa', '', '1', '2016-11-16', 'N', '18', '181', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('31', 'prueba14', 'prueba14', 'prueba14', 'prueba14', '1669613911', '1984-01-30', null, '8888888888', 'Av. atahualpa', '', '1', '2016-11-16', 'N', '19', '185', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('32', 'prueba15', 'prueba15', 'prueba15', 'prueba15', '1669613912', '1984-01-30', null, '9999999999', 'Av .atahualpa', '', '', '2016-11-16', 'N', '19', '185', null, '2', null, '1');
INSERT INTO `tab_cliente` VALUES ('33', 'prueba16', 'prueba16', 'prueba16', 'prueba16', '1669613913', '1984-01-10', '000000000', '0000000000', 'av. atahualpa', '', '', '2016-11-16', 'N', '18', '181', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('34', 'prueba17', 'prueba17', 'prueba17', 'prueba17', '1669613914', '1993-12-28', null, '0000000000', 'Av. atahualpa', '', '2', '2016-11-16', 'N', '1', '1', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('35', 'prueba18', 'prueba18', 'prueba18', 'prueba18', '1669613915', '1984-02-29', null, '9999999999', 'av. atahualpa', '', '2', '2016-11-16', 'N', '19', '186', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('36', 'prueba19', 'prueba19', 'prueba19', 'prueba19', '1669613916', '1995-07-13', null, '9999999999', 'Av.atahualpa', '', '2', '2016-11-16', 'N', '1', '2', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('37', 'prueba20', 'prueba20', 'prueba20', 'prueba20', '1669613917', '1994-06-15', null, '9999999999', 'av 6 de diciembre', '', '2', '2016-11-16', 'N', '18', '181', null, '2', '16', '2');
INSERT INTO `tab_cliente` VALUES ('39', 'prueba21', 'prueba21', 'preuab21', 'prueba21', '1669613918', '1965-11-18', null, '9999999999', 'av. atahualpa', null, '2', '2016-11-17', 'N', '18', '181', null, '3', null, '1');
INSERT INTO `tab_cliente` VALUES ('40', 'prueba22', 'prueba22', 'prueba22', 'prueba22', '1669613919', '1994-06-07', null, '9999999999', 'av.atahualpa', '', '2', '2016-11-17', 'N', '1', '1', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('41', 'prueba23', 'prueba23', 'prueba23', 'prueba23', '1669613920', '1984-06-13', null, '9999999999', 'av. atahualpa', '', '', '2016-11-17', 'N', '1', '1', '39', '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('42', 'prueba24', 'prueba24', 'prueba24', 'prueba24', '1669613921', '1984-06-06', null, '9999999999', 'av.atahualpa', '', '2', '2016-11-17', 'N', '1', '1', '31', '2', '16', '2');
INSERT INTO `tab_cliente` VALUES ('43', 'prueba25', 'prueba25', 'prueba25', 'prueba25', '1669613925', '1984-06-06', null, '9999999999', 'av. atahualpa', '', '2', '2016-11-17', 'N', '1', '2', '31', '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('44', 'prueba26', 'prueba26', 'prueba26', 'prueba26', '1669613926', '1984-03-15', null, '9999999999', 'av. atahualpa', '', '2', '2016-11-17', 'N', '2', '1', null, '2', '16', '3');
INSERT INTO `tab_cliente` VALUES ('45', 'prueba27', 'prueba27', 'prueba27', 'prueba27', '1669613927', '1994-06-08', null, '9999999999', 'av.atahualpa', '', '2', '2016-11-17', 'N', '1', '1', null, '2', '39', '1');
INSERT INTO `tab_cliente` VALUES ('46', 'prueba28', 'prueba28', 'prueba28', 'prueba28', '1669613928', '1994-11-02', null, '9999999999', 'av. atahualpa', 'a@a.com', null, '2016-11-17', 'N', '1', '1', null, '3', '16', '1');
INSERT INTO `tab_cliente` VALUES ('47', 'prueba29', 'prueba29', 'prueba29', 'prueba29', '1669613929', '1990-06-06', null, '9999999999', 'av 6 de diciembre', 'a@a.com', null, '2016-11-17', 'N', '1', '2', null, '3', '16', '2');
INSERT INTO `tab_cliente` VALUES ('48', 'prueba32', 'prueba32', 'prueba32', 'prueba32', '1669613932', '1990-10-25', null, '9999999999', 'av.atahualpa', 'a@a.com', null, '2016-11-17', 'N', '1', '2', null, '3', '16', '1');
INSERT INTO `tab_cliente` VALUES ('49', 'prueba34', 'prueba34', 'PRUEBA34', 'PRUEBA34', '1669613934', '2016-11-23', null, '7777777777', 'aaa', 'a@a.com', null, '2016-11-17', 'N', '1', '2', '31', '3', '39', '3');
INSERT INTO `tab_cliente` VALUES ('51', 'prueba35', 'prueba35', 'prueba35', 'prueba35', '1669613935', '1980-02-06', '02-333-0285', '09-9856-837', 'av.atahualpa', '', '2', '2016-11-18', 'N', '1', '2', null, '2', '16', '0');
INSERT INTO `tab_cliente` VALUES ('52', 'prueba36', 'prueba36', 'prueba36', 'prueba36', '1669613936', '1990-01-30', '00-000-0000', '00-0000-000', 'av. athaualpa', '', '2', '2016-11-18', 'N', '2', '16', null, '2', '16', '0');
INSERT INTO `tab_cliente` VALUES ('53', 'prueba37', 'prueba37', 'prueba37', 'prueba37', '1669613937', '1990-01-31', '00-000-0000', '00-0000-000', 'adsdf', '', '2', '2016-11-18', 'N', '1', '2', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('54', 'prueba38', 'prueba38', 'prueba38', 'prueba38', '6666666', '1994-02-09', '00-000-0000', '00-0000-000', 'fgbfg31', 'a@a.com', '', '2016-11-18', 'N', '1', '1', '31', '2', '39', '2');
INSERT INTO `tab_cliente` VALUES ('55', 'PRUEBA39', 'PRUEBA39', 'PRUEBA39', 'PRUEBA39', '8888888888888888', '1985-07-19', '00-000-0000', '00-0000-000', 'EFEWFR', 's@a.com', null, '2016-11-18', 'N', '5', '38', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('56', 'PRUEBA40', 'PRUEBA40', 'PRUEBA40', 'PRUEBA40', '2', '1994-06-23', '00-000-0000', '00-0000-000', 'EESRF', 'a@a.com', null, '2016-11-18', 'N', '3', '23', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('57', 'PRUEBA41', 'PRUEBA41', 'PRUEBA41', 'PRUWBA41', '1', '1990-06-27', '00-000-0000', '00-0000-000', 'DFSEF', 'v@m.com', null, '2016-11-18', 'N', '3', '24', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('58', 'PRUEBA42', 'PRUEBA42', 'PRUEBA42', 'PRUEBA42', '2', '1990-06-28', '00-000-0000', '00-0000-000', 'FSDF', 's@a.com', null, '2016-11-18', 'N', '6', '49', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('59', 'PRUEBA43', 'PRUEBA43', 'PRUEBA43', 'PRUEBA43', '1', '1990-06-29', '00-000-0000', '00-0000-000', 'DFVDGF', 's@d.com', null, '2016-11-18', 'N', '4', '32', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('60', 'sfrawerf', 'seferf', 'sefewf', 'sefewrf', '1713647269', '2016-11-23', '00-000-0000', '00-0000-000', 'fghjtyj', '', '2', '2016-11-21', 'N', '17', '177', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('61', 'prueba51', 'prueba51', 'prueba51', 'prueba51', '1724544141', '1994-06-08', '00-000-0000', '00-0000-0000', 'vfsdf', '', '2', '2016-11-21', 'N', '1', '5', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('63', 'prueba52', 'prueba52', 'prueba52', 'prueba52', '1725375073', '1991-03-06', '00-000-0000', '00-0000-0000', 'fgdg', 'aa@aa.com', '1', '2016-11-21', 'N', '10', '83', '61', '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('64', 'prueba53', 'prueba53', 'prueba53', 'prueba53', '1728682608', '1990-06-12', '00-000-0000', '00-0000-0000', 'edfawer', '', '2', '2016-11-21', 'N', '4', '34', '61', '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('65', 'prueba54', 'prueba54', 'prueba54', 'prueba54', '1726449513', '1990-02-07', '00-000-0000', '00-0000-0000', 'fdgdxr', '', '2', '2016-11-21', 'N', '7', '57', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('66', 'PRUEBA54', 'PRUEBA54', 'PRUEBA54', 'PRUEBA54', '1', '1990-07-19', '00-000-0000', '00-0000-0000', 'DFZSDF', 's@a.com', null, '2016-11-22', 'N', '3', '23', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('67', 'DFDFG', 'RDGREG', 'RGDRG', 'RGR', '1', '1991-07-26', '00-000-0000', '00-0000-0000', 'RTESRT', 's@a.com', null, '2016-11-22', 'N', '2', '18', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('68', 'GDSRG', 'DRGSDRG', 'DRGDRG', 'DRGDRG', '1', '1990-06-14', '00-000-0000', '00-0000-0000', 'FRGDSRG', 's@a.com', null, '2016-11-22', 'N', '2', '18', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('69', 'RF', '', 'EWR', '', '1', '1995-07-07', '00-000-0000', '00-0000-0000', 'RTERT', 's@a.com', null, '2016-11-22', 'N', '6', '50', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('70', 'EFRE', 'EWR', 'EWR', '', '1', '1980-10-22', '00-000-0000', '00-0000-0000', 'SDFSE', 's@a.com', null, '2016-11-22', 'N', '1', '1', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('71', 'DFGDFG', '', 'DFGDF', '', '1', '1990-06-13', '00-000-0000', '00-0000-0000', 'DRGDR', 's@a.com', null, '2016-11-22', 'N', '1', '1', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('72', 'PRUEBA55', 'PRUEBA55', 'PRUEBA55', 'PRUEBA55', '1', '1990-06-21', '00-000-0000', '00-0000-0000', 'CDVFDS', 's@a.com', null, '2016-11-22', 'N', '1', '1', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('73', 'ESRTF', '', 'EWR', '', '1', '1990-02-08', '00-000-0000', '00-0000-0000', 'SRT', 's@a.com', null, '2016-11-22', 'N', '3', '23', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('74', 'PRUEBA55', 'PRUEBA55', 'PRUEBA55', 'PRUEBA55', '1751241447', '1980-06-26', '00-000-0000', '00-0000-0000', 'FDG', 's@a.com', null, '2016-11-22', 'N', '2', '16', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('75', 'LIDER1', 'LIDER1', 'LIDER1', 'LIDER1', '1753125911', '1990-06-21', '00-000-0000', '00-0000-0000', 'AAAA', 's@a.com', null, '2016-11-23', 'N', '1', '3', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('76', 'FDWEF', '', 'EWFEWF', '', '1725411522', '1994-06-23', '00-000-0000', '00-0000-0000', 'ESFWEF', 's@a.com', null, '2016-11-23', 'N', '2', '16', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('77', 'LIDER1', 'LIDER1', 'LIDER1', 'LIDER1', '1750384735', '1990-02-21', '00-000-0000', '00-0000-0000', 'DAED', 's@a.com', null, '2016-11-23', 'N', '1', '1', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('78', 'LIDER2', 'LIDER2', 'LIDER2', 'LIDER2', '1727521989', '1980-06-25', '00-000-0000', '00-0000-0000', 'EFSRF', 's@a.com', null, '2016-11-23', 'N', '1', '1', null, '3', '16', '0');
INSERT INTO `tab_cliente` VALUES ('79', 'ASESOR1', 'ASESOR1', 'ASESOR1', 'ASESOR1', '1726095688', '1990-01-31', '00-000-0000', '00-0000-0000', 'ASESOR1', 'a@a.com', '1', '2016-11-23', 'N', '5', '37', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('80', 'ASESOR2', 'ASESOR2', 'ASESOR2', 'ASESOR2', '1312994997', '1988-12-27', '00-000-0000', '00-0000-0000', 'ASESOR2', 'a@a.com', '2', '2016-11-23', 'N', '3', '23', '79', '2', '78', '1');
INSERT INTO `tab_cliente` VALUES ('81', 'ASESOR3', 'ASESOR3', 'ASESOR3', 'ASESOR3', '1750343111', '1997-01-01', '00-000-0000', '00-0000-0000', 'ASESOR3', '', '2', '2016-11-23', 'N', '1', '1', null, '2', '16', '1');
INSERT INTO `tab_cliente` VALUES ('82', 'ASESOR4', 'ASESOR4', 'ASESOR4', 'ASESOR4', '1726189762', '1990-06-21', '00-000-0000', '00-0000-0000', 'ASESOR4', '', '2', '2016-11-23', 'N', '1', '1', null, '2', '16', '1');

-- ----------------------------
-- Table structure for tab_lider
-- ----------------------------
DROP TABLE IF EXISTS `tab_lider`;
CREATE TABLE `tab_lider` (
  `id_lider` int(11) NOT NULL AUTO_INCREMENT,
  `id_nivel_lider` int(11) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_lider`),
  KEY `fk_id_cliente_lider` (`fk_id_cliente`),
  KEY `fk_id_nivelLider_lider` (`id_nivel_lider`),
  CONSTRAINT `fk_id_cliente_lider` FOREIGN KEY (`fk_id_cliente`) REFERENCES `tab_cliente` (`id_cliente`),
  CONSTRAINT `fk_id_nivelLider_lider` FOREIGN KEY (`id_nivel_lider`) REFERENCES `tab_nivel_lider` (`id_nivel_lider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_lider
-- ----------------------------

-- ----------------------------
-- Table structure for tab_lider_generacion
-- ----------------------------
DROP TABLE IF EXISTS `tab_lider_generacion`;
CREATE TABLE `tab_lider_generacion` (
  `id_lider_generacion` int(11) NOT NULL AUTO_INCREMENT,
  `lider_1G` int(11) DEFAULT NULL COMMENT 'Lider de primera generacion',
  `lider_2G` int(11) DEFAULT NULL COMMENT 'Lider de 2da Generacion',
  `lider_3G` int(11) DEFAULT NULL COMMENT 'Lider 3era Generacion',
  `lider_4G` int(11) DEFAULT NULL COMMENT 'Lider de 4ta Generacion',
  `lider_5G` int(11) DEFAULT NULL COMMENT 'Lider de 5ta Generacion',
  `id_cliente_lider` int(11) NOT NULL,
  PRIMARY KEY (`id_lider_generacion`),
  KEY `fk_lider_1G` (`lider_1G`),
  KEY `fk_lider_2G` (`lider_2G`),
  KEY `fk_lider_3G` (`lider_3G`),
  KEY `fk_lider_4G` (`lider_4G`),
  KEY `fk_lider_5G` (`lider_5G`),
  CONSTRAINT `fk_lider_1G` FOREIGN KEY (`lider_1G`) REFERENCES `tab_cliente` (`id_cliente`),
  CONSTRAINT `fk_lider_2G` FOREIGN KEY (`lider_2G`) REFERENCES `tab_cliente` (`id_cliente`),
  CONSTRAINT `fk_lider_3G` FOREIGN KEY (`lider_3G`) REFERENCES `tab_cliente` (`id_cliente`),
  CONSTRAINT `fk_lider_4G` FOREIGN KEY (`lider_4G`) REFERENCES `tab_cliente` (`id_cliente`),
  CONSTRAINT `fk_lider_5G` FOREIGN KEY (`lider_5G`) REFERENCES `tab_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_lider_generacion
-- ----------------------------
INSERT INTO `tab_lider_generacion` VALUES ('1', '16', null, null, null, null, '0');
INSERT INTO `tab_lider_generacion` VALUES ('2', '16', null, null, null, null, '0');
INSERT INTO `tab_lider_generacion` VALUES ('3', '16', null, null, null, null, '0');
INSERT INTO `tab_lider_generacion` VALUES ('4', '16', null, null, null, null, '0');
INSERT INTO `tab_lider_generacion` VALUES ('5', '16', null, null, null, null, '0');
INSERT INTO `tab_lider_generacion` VALUES ('6', '16', null, null, null, null, '0');
INSERT INTO `tab_lider_generacion` VALUES ('10', '16', null, null, null, null, '77');
INSERT INTO `tab_lider_generacion` VALUES ('11', '16', null, null, null, null, '78');

-- ----------------------------
-- Table structure for tab_nivel_lider
-- ----------------------------
DROP TABLE IF EXISTS `tab_nivel_lider`;
CREATE TABLE `tab_nivel_lider` (
  `id_nivel_lider` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_nivel_lider` varchar(255) NOT NULL,
  PRIMARY KEY (`id_nivel_lider`),
  KEY `fk_id_cliente_nivelLider` (`nombre_nivel_lider`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_nivel_lider
-- ----------------------------

-- ----------------------------
-- Table structure for tab_nivel_prospecto
-- ----------------------------
DROP TABLE IF EXISTS `tab_nivel_prospecto`;
CREATE TABLE `tab_nivel_prospecto` (
  `id_nivel_prospecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_nivel_prospecto` varchar(255) NOT NULL,
  `fk_id_prospecto` int(11) NOT NULL,
  PRIMARY KEY (`id_nivel_prospecto`),
  KEY `fk_id_prospecto_nivelProspecto` (`fk_id_prospecto`),
  CONSTRAINT `fk_id_prospecto_nivelProspecto` FOREIGN KEY (`fk_id_prospecto`) REFERENCES `tab_prospecto` (`id_prospecto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_nivel_prospecto
-- ----------------------------

-- ----------------------------
-- Table structure for tab_pedido
-- ----------------------------
DROP TABLE IF EXISTS `tab_pedido`;
CREATE TABLE `tab_pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `monto_real` decimal(11,2) NOT NULL,
  `monto_cliente` decimal(11,2) NOT NULL,
  `cantidad_pedido` int(11) NOT NULL,
  `ganancia_comision` decimal(11,2) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `fk_id_referido` int(11) NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `fk_id_cliente_pedido` (`fk_id_cliente`),
  KEY `id_referido` (`fk_id_referido`),
  CONSTRAINT `fk_id_cliente_pedido` FOREIGN KEY (`fk_id_cliente`) REFERENCES `tab_cliente` (`id_cliente`),
  CONSTRAINT `fk_id_referido_pedido` FOREIGN KEY (`fk_id_referido`) REFERENCES `tab_referido` (`id_referido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_pedido
-- ----------------------------

-- ----------------------------
-- Table structure for tab_prospecto
-- ----------------------------
DROP TABLE IF EXISTS `tab_prospecto`;
CREATE TABLE `tab_prospecto` (
  `id_prospecto` int(11) NOT NULL AUTO_INCREMENT,
  `estado_prospecto` varchar(1) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_prospecto`),
  KEY `fk_id_cliente_prospecto` (`fk_id_cliente`),
  CONSTRAINT `fk_id_cliente_prospecto` FOREIGN KEY (`fk_id_cliente`) REFERENCES `tab_cliente` (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_prospecto
-- ----------------------------

-- ----------------------------
-- Table structure for tab_provincia
-- ----------------------------
DROP TABLE IF EXISTS `tab_provincia`;
CREATE TABLE `tab_provincia` (
  `id_provincia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_provincia` varchar(255) NOT NULL,
  PRIMARY KEY (`id_provincia`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_provincia
-- ----------------------------
INSERT INTO `tab_provincia` VALUES ('1', 'AZUAY');
INSERT INTO `tab_provincia` VALUES ('2', 'BOLIVAR');
INSERT INTO `tab_provincia` VALUES ('3', 'CAÑAR');
INSERT INTO `tab_provincia` VALUES ('4', 'CARCHI');
INSERT INTO `tab_provincia` VALUES ('5', 'CHIMBORAZO');
INSERT INTO `tab_provincia` VALUES ('6', 'COTOPAXI');
INSERT INTO `tab_provincia` VALUES ('7', 'EL ORO');
INSERT INTO `tab_provincia` VALUES ('8', 'ESMERALDAS');
INSERT INTO `tab_provincia` VALUES ('9', 'GALAPAGOS');
INSERT INTO `tab_provincia` VALUES ('10', 'GUAYAS');
INSERT INTO `tab_provincia` VALUES ('11', 'IMBABURA');
INSERT INTO `tab_provincia` VALUES ('12', 'LOJA');
INSERT INTO `tab_provincia` VALUES ('13', 'LOS RIOS');
INSERT INTO `tab_provincia` VALUES ('14', 'MANABI');
INSERT INTO `tab_provincia` VALUES ('15', 'MORONA SANTIAGO');
INSERT INTO `tab_provincia` VALUES ('16', 'NAPO');
INSERT INTO `tab_provincia` VALUES ('17', 'ORELLANA');
INSERT INTO `tab_provincia` VALUES ('18', 'PASTAZA');
INSERT INTO `tab_provincia` VALUES ('19', 'PICHINCHA');
INSERT INTO `tab_provincia` VALUES ('20', 'SANTA ELENA');
INSERT INTO `tab_provincia` VALUES ('21', 'STO .DOMINGO DE LOS TSACHILAS');
INSERT INTO `tab_provincia` VALUES ('22', 'SUCUMBIOS');
INSERT INTO `tab_provincia` VALUES ('23', 'TUNGURAHUA');
INSERT INTO `tab_provincia` VALUES ('24', 'ZAMORA CHINCHIPE');
INSERT INTO `tab_provincia` VALUES ('25', 'NARIÑO');
INSERT INTO `tab_provincia` VALUES ('26', 'HUILA');
INSERT INTO `tab_provincia` VALUES ('28', 'VALENCIA');
INSERT INTO `tab_provincia` VALUES ('30', 'ALMERIA');
INSERT INTO `tab_provincia` VALUES ('31', 'TORONTO');
INSERT INTO `tab_provincia` VALUES ('32', 'BARCELONA');
INSERT INTO `tab_provincia` VALUES ('33', 'ZAPOTILLO');
INSERT INTO `tab_provincia` VALUES ('34', 'MADRID');
INSERT INTO `tab_provincia` VALUES ('35', 'VALLE DEL CAUCA');
INSERT INTO `tab_provincia` VALUES ('36', 'BOGOTÁ');
INSERT INTO `tab_provincia` VALUES ('37', 'JUNIN');
INSERT INTO `tab_provincia` VALUES ('38', 'CALI');
INSERT INTO `tab_provincia` VALUES ('39', 'LIMA');

-- ----------------------------
-- Table structure for tab_rango
-- ----------------------------
DROP TABLE IF EXISTS `tab_rango`;
CREATE TABLE `tab_rango` (
  `id_rango` int(11) NOT NULL AUTO_INCREMENT,
  `rango_inicial` decimal(11,2) NOT NULL,
  `rango_final` decimal(11,2) NOT NULL,
  PRIMARY KEY (`id_rango`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_rango
-- ----------------------------

-- ----------------------------
-- Table structure for tab_rango_prospecto
-- ----------------------------
DROP TABLE IF EXISTS `tab_rango_prospecto`;
CREATE TABLE `tab_rango_prospecto` (
  `id_rango_prospecto` int(11) NOT NULL AUTO_INCREMENT,
  `fk_id_prospecto` int(11) NOT NULL,
  `fk_id_rango` int(11) NOT NULL,
  `fk_id_pedidos` int(11) NOT NULL,
  PRIMARY KEY (`id_rango_prospecto`),
  KEY `fk_id_prospecto_rangoProspecto` (`fk_id_prospecto`),
  KEY `fk_id_rango_rangoProspecto` (`fk_id_rango`),
  KEY `fk_id_pedido_rangoProspecto` (`fk_id_pedidos`),
  CONSTRAINT `fk_id_pedido_rangoProspecto` FOREIGN KEY (`fk_id_pedidos`) REFERENCES `tab_pedido` (`id_pedido`),
  CONSTRAINT `fk_id_prospecto_rangoProspecto` FOREIGN KEY (`fk_id_prospecto`) REFERENCES `tab_prospecto` (`id_prospecto`),
  CONSTRAINT `fk_id_rango_rangoProspecto` FOREIGN KEY (`fk_id_rango`) REFERENCES `tab_rango` (`id_rango`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_rango_prospecto
-- ----------------------------

-- ----------------------------
-- Table structure for tab_referido
-- ----------------------------
DROP TABLE IF EXISTS `tab_referido`;
CREATE TABLE `tab_referido` (
  `id_referido` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_ingreso` date NOT NULL,
  `nro_documento` varchar(255) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  PRIMARY KEY (`id_referido`),
  KEY `fk_id_cliente_referido` (`fk_id_cliente`),
  CONSTRAINT `fk_id_cliente_referido` FOREIGN KEY (`fk_id_cliente`) REFERENCES `tab_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_referido
-- ----------------------------
INSERT INTO `tab_referido` VALUES ('1', '2016-11-16', '1669613903', '23');
INSERT INTO `tab_referido` VALUES ('2', '2016-11-16', '1669613904', '24');
INSERT INTO `tab_referido` VALUES ('3', '2016-11-16', '1669613905', '25');
INSERT INTO `tab_referido` VALUES ('4', '2016-11-16', '1669613906', '26');
INSERT INTO `tab_referido` VALUES ('5', '2016-11-16', '1669613907', '27');
INSERT INTO `tab_referido` VALUES ('6', '2016-11-16', '1669613908', '28');
INSERT INTO `tab_referido` VALUES ('7', '2016-11-16', '1669613909', '29');
INSERT INTO `tab_referido` VALUES ('8', '2016-11-16', '1669613910', '30');
INSERT INTO `tab_referido` VALUES ('9', '2016-11-16', '1669613911', '31');
INSERT INTO `tab_referido` VALUES ('10', '2016-11-16', '1669613912', '32');
INSERT INTO `tab_referido` VALUES ('11', '2016-11-16', '1669613913', '33');
INSERT INTO `tab_referido` VALUES ('12', '2016-11-16', '1669613914', '34');
INSERT INTO `tab_referido` VALUES ('13', '2016-11-16', '1669613915', '35');
INSERT INTO `tab_referido` VALUES ('14', '2016-11-16', '1669613916', '36');
INSERT INTO `tab_referido` VALUES ('15', '2016-11-16', '1669613917', '37');
INSERT INTO `tab_referido` VALUES ('17', '2016-11-17', '1669613920', '39');
INSERT INTO `tab_referido` VALUES ('18', '2016-11-17', '1669613921', '31');
INSERT INTO `tab_referido` VALUES ('19', '2016-11-17', '1669613925', '31');
INSERT INTO `tab_referido` VALUES ('21', '2016-11-17', '1669613934', '31');
INSERT INTO `tab_referido` VALUES ('22', '2016-11-18', '6666666', '31');
INSERT INTO `tab_referido` VALUES ('24', '2016-11-21', '1728682608', '61');
INSERT INTO `tab_referido` VALUES ('25', '2016-11-23', '1312994997', '79');

-- ----------------------------
-- Table structure for tab_tipo_documento
-- ----------------------------
DROP TABLE IF EXISTS `tab_tipo_documento`;
CREATE TABLE `tab_tipo_documento` (
  `id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_documento` varchar(3) NOT NULL,
  `nombre_tipo_documento` varchar(15) NOT NULL,
  PRIMARY KEY (`id_tipo_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_tipo_documento
-- ----------------------------
INSERT INTO `tab_tipo_documento` VALUES ('1', 'C', 'CÉDULA');
INSERT INTO `tab_tipo_documento` VALUES ('2', 'P', 'PASAPORTE');
INSERT INTO `tab_tipo_documento` VALUES ('3', 'R', 'REFUGIADO');
INSERT INTO `tab_tipo_documento` VALUES ('4', 'RUC', 'RUC');
