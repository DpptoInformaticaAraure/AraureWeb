-- MySQL dump 10.13  Distrib 5.5.62, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: sistema
-- ------------------------------------------------------
-- Server version	5.5.62-0+deb8u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `equipos`
--

DROP TABLE IF EXISTS `equipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipos` (
  `codigo` int(50) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `sistema` varchar(200) NOT NULL,
  `siap` varchar(200) NOT NULL,
  `falla` varchar(200) NOT NULL,
  `traido` varchar(200) NOT NULL,
  `recibido` varchar(200) NOT NULL,
  `reparado` varchar(200) NOT NULL,
  `entregado` varchar(200) NOT NULL,
  `entrada` date NOT NULL,
  `salida` date NOT NULL,
  `observacion` varchar(500) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipos`
--

LOCK TABLES `equipos` WRITE;
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` VALUES (7,'hacienda','escritorio','canaima 4','si','no','jose','jose','','','2019-02-18','0000-00-00','equipo con bajo rendimiento'),(9,'operaciones','escritorio','windows 7','no','ninguna','jose','jose','','','2019-02-18','0000-00-00',''),(16,'personal','escritorio','canaima 4','si','daÃ±o de gnome','benavides','benavides','benavides','benavides','2019-03-07','2019-03-13','instalacion de canaima 5'),(17,'personal','escritorio','windows 7','no','mantenimiento','jose','jose','jose','jose','2019-03-13','2019-03-13',''),(18,'administracion','escritorio','canaima 4','si','filtros secos','jose','jose','','','2019-03-22','0000-00-00','');
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `impresoras`
--

DROP TABLE IF EXISTS `impresoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `impresoras` (
  `codigo` int(50) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `enciende` varchar(200) NOT NULL,
  `cable_c` varchar(200) NOT NULL,
  `cable_usb` varchar(200) NOT NULL,
  `toner` varchar(200) NOT NULL,
  `falla` varchar(200) NOT NULL,
  `traido` varchar(200) NOT NULL,
  `recibido` varchar(200) NOT NULL,
  `reparado` varchar(200) NOT NULL,
  `entregado` varchar(200) NOT NULL,
  `entrada` date NOT NULL,
  `salida` date NOT NULL,
  `observacion` varchar(800) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `impresoras`
--

LOCK TABLES `impresoras` WRITE;
/*!40000 ALTER TABLE `impresoras` DISABLE KEYS */;
INSERT INTO `impresoras` VALUES (2,'catastro','multifuncional','canon','si','si','no','si','falta controlador','cesar','cesar','benavides','cesar','2019-03-15','2019-03-19','');
/*!40000 ALTER TABLE `impresoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ip`
--

DROP TABLE IF EXISTS `ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ip` (
  `ip` varchar(200) NOT NULL,
  `departamento` varchar(200) NOT NULL,
  `equipo` varchar(200) NOT NULL,
  `sistema` varchar(200) NOT NULL,
  `siap` varchar(100) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `observacion` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ip`
--

LOCK TABLES `ip` WRITE;
/*!40000 ALTER TABLE `ip` DISABLE KEYS */;
INSERT INTO `ip` VALUES ('192.168.0.239','informatica','informaticajef','canaima 5','si','jose luis melendez','infar2015','infar2015'),('192.168.0.141','catastro','catastro31','canaima 5','si','eloisa','123456','123456'),('192.168.0.139','catastro','catastro2','canaima 5','si','catastro2','no',''),('192.168.0.142','catastro','vit','canaima 5','si','jefa 2','123456','infar2015'),('192.168.0.143','catastro','vit','canaima 5','si','carmen','123456','123456'),('192.168.0.236','personal','personaljef','canaima 5','si','ivonne','123456789','infar2015'),('192.168.0.205','seramat','hacienda88','canaima 4','si','mireya','123456','123456'),('192.168.0.109','seramat','vit','canaima 4','si','mireya','123456','infar2015'),('192.168.0.119','seramat','root','canaima 5','si','impresora','123456','infar2015'),('192.168.0.117','seramat','vit','canaima 5','si','sulay','123456','infar2015'),('192.168.0.111','seramat','root','canaima 5','si','otilia','123456','infar2015'),('192.168.0.208','seramat','vit','canaima 5','si','carmen a','123456','infar2015'),('192.168.0.112','seramat','vit','canaima 5','si','jefe edgar','123456','infar2015'),('192.168.0.163','seramat','dirhacienda','canaima 5','si','oscar','123456','123456'),('192.168.0.121','seramat','seramat','canaima 5','si','juan','123456','123456'),('192.168.0.120','seramat','vit','canaima 5','si','barbara','123456','infar2015'),('192.168.0.144','personal','personal3','canaima 5','si','yenny','123456','123456'),('192.168.0.146','personal','personal4','canaima 5','si','keila','123456','123456'),('192.168.0.155','personal','vit','canaima 5','si','yuli','123456','infar2015'),('192.168.0.156','personal','personal6','canaima 5','si','irma','123456','123456'),('192.168.0.138','catastro','catastro11','canaima 5','si','suri','123456','123456'),('192.168.0.245','catastro','catastro','xubuntu','si','yezenia','0000000','00000000'),('192.168.0.125','presupuesto','vit','canaima 5','si','aroraima','123456','infar2015'),('192.168.0.134','presupuesto','presupuesto','canaima 5','si','moraima','123456','123456'),('192.168.0.132','presupuesto','presupuesto3','canaima 5','si','ramona','123456','123456'),('192.168.0.129','tesoreria','tesoreria','canaima 5','si','nadie','123456','123456'),('192.168.0.133','contabilidad','vit','canaima 5','si','danelis','123456','infar2015'),('192.168.0.207','tesoreria','vit','canaima 5','si','yeire','123456','infar2015'),('192.168.0.149','contabilidad','alcaldia','canaima 5','si','danelis','123456','123456'),('192.168.0.150','contabilidad','contabilida6','canaima 5','si','danelis','123456','123456'),('192.168.0.203','tesoreria','tesoreria4','canaima 5','si','danelis','123456','123456'),('192.168.0.126','compras','compra2','canaima 5','si','yudy','123456','123456'),('192.168.0.218','compras','compras','canaima 5','si','marcos','123456','123456'),('192.168.0.135','administracion','admin','canaima 5','si','luz delis','123456','123456'),('192.168.0.183','administracion','tesoreria4','canaima 5','si','maria','123456','123456'),('192.168.0.174','administracion','vit','canaima 5','si','deris','123456','infar2015'),('192.168.0.246','tesoreria','vit','canaima 5','si','morela','123456','123456'),('192.168.0.199','bienes','bienes','canaima 5','si','octavio','123456','123456'),('192.168.0.104','administracion','vit','canaima 5','si','ingrid','123456','infar2015'),('192.168.0.65','direccion general','vit','canaima 5','si','zerpa','123456','123456'),('192.168.0.020','sygreca','dario','canaima 5','si','dario','0000000','000000'),('192.168.0.240','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.116','personal','vit','canaima 5','si','yenny','123456','infar2015'),('192.168.0.118','en uso','en uso','canaima 5','no','libre','libre','libre'),('192.168.0.123','compras','compras03','canaima 5','si','nose','123456','123456'),('192.168.0.137','direccion superior','vit','canaima 5','si','nose','123456','123456'),('192.168.0.140','seramat','vit','canaima 4','si','otilia','123456','infar2015'),('192.168.0.145','informatica','informatica','canaima 5','si','informatica','123456','123456'),('192.168.0.154','seramat','vit','canaima 5','si','n','123456','infar2015'),('192.168.0.242','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.128','informatica','informatica01','windows 7','no','cesar','libre','libre'),('192.168.0.151','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.152','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.204','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.231','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.131','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.130','seramat','impresora','canaima 5','no','impresora','impresora','impresora'),('192.168.0.148','sindicatura','vit','canaima 5','no','vit','123456','infar2015'),('192.168.0.110','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.122','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.147','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.107','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.106','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.114','seramat','vit','canaima 4','si','esp zerpa','123456','infar2015'),('192.168.0.113','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.115','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.124','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.127','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.100','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.136','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.153','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.162','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.169','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.187','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.189','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.229','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.157','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.158','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.159','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.160','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.161','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.164','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.165','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.166','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.167','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.168','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.170','informatica','telefono','canaima 5','no','willian','no','no'),('192.168.0.171','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.172','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.173','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.175','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.176','catastro','catastrodir','canaima 5','si','jefa catastro','123456','123456'),('192.168.0.177','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.178','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.179','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.180','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.181','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.182','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.184','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.185','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.186','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.188','en uso','en uso','canaima 5','no','en uso','en uso','en uso'),('192.168.0.190','personal','maria','windows 10','no','maria','nose','nose'),('192.168.0.191','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.192','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.193','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.194','en uso','en uso','canaima 5','no','en uso','en uso','en uso'),('192.168.0.195','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.196','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.197','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.198','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.200','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.201','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.202','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.206','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.215','personal','biometrico','canaima 5','no','capta huella','libre','libre'),('192.168.0.230','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.241','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.238','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.209','informatica','informaticaluis','canaima 5','si','cesar','infar2015','infar2015'),('192.168.0.210','despacho','biometrico','windows 7','no','capta huella','libre','libre'),('192.198.0.244','libre','libre','canaima 5','no','libre','libre','libre'),('192.168.0.105','ingenieria','INGENIERIA2','windows 7','no','ingenieria','libre','libre'),('192.168.0.103','ingenieria','ingenieria2','windows 7','no','laptop','25791565','25791565'),('192.168.0.108','auditoria','administracio','canaima 4','si','crisnory','123456','123456');
/*!40000 ALTER TABLE `ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user` varchar(200) NOT NULL,
  `passadmin` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (2,'cesar','63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1','63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1'),(3,'root','2e08705154f3f20694db8c5e2787412450ed1af6','2e08705154f3f20694db8c5e2787412450ed1af6'),(4,'carmen','63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1','63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1'),(5,'otro','d7db444854aecb87d72786f7ef778970ec71e0b9','67a74306b06d0c01624fe0d0249a570f4d093747');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monitores`
--

DROP TABLE IF EXISTS `monitores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monitores` (
  `codigo` int(50) NOT NULL AUTO_INCREMENT,
  `departamento` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `enciende` varchar(200) NOT NULL,
  `cable_c` varchar(200) NOT NULL,
  `cable_vga` varchar(200) NOT NULL,
  `falla` varchar(200) NOT NULL,
  `traido` varchar(200) NOT NULL,
  `recibido` varchar(200) NOT NULL,
  `reparado` varchar(200) NOT NULL,
  `entregado` varchar(200) NOT NULL,
  `entrada` date NOT NULL,
  `salida` date NOT NULL,
  `observacion` varchar(800) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monitores`
--

LOCK TABLES `monitores` WRITE;
/*!40000 ALTER TABLE `monitores` DISABLE KEYS */;
INSERT INTO `monitores` VALUES (1,'catastro','lcd','aoc','si','no','si','distorcion imagen','benavides','benavides','benavides','cesar','2019-02-25','2019-02-26','');
/*!40000 ALTER TABLE `monitores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte`
--

DROP TABLE IF EXISTS `reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte` (
  `fecha` date NOT NULL,
  `reporte` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
INSERT INTO `reporte` VALUES ('2019-02-17','1 este es el primer reporte e dia\r\n2 se reparo una laptop y se le instalo un antivirus'),('2019-02-17','fdjggfgflkjggklglgkgÃ±ldgkdÃ±lgkdgÃ±lkgdkcsglÃ±dsgkdslÃ±gkdÃ±ldkgdsÃ±lgkgÃ±dslgkdgÃ±lgkdÃ±lgdkgÃ±l'),('2019-04-12','deb http://http.debian.net/debian jessie main contrib non-free \r\ndeb-src http://http.debian.net/debian jessie main contrib non-free\r\ndeb http://http.debian.net/debian jessie-updates main contrib non-free\r\ndeb-src http://http.debian.net/debian jessie-updates main contrib non-free \r\ndeb http://security.debian.org/ jessie/updates main contrib non-free \r\ndeb-src http://security.debian.org/ jessie/updates main contrib non-free');
/*!40000 ALTER TABLE `reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `repositorios`
--

DROP TABLE IF EXISTS `repositorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `repositorios` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `repositorios` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `repositorios`
--

LOCK TABLES `repositorios` WRITE;
/*!40000 ALTER TABLE `repositorios` DISABLE KEYS */;
INSERT INTO `repositorios` VALUES (2,'para programar encendido y apagado pc','\r\n1 comando para ver si tiene hora programada:\r\n\r\ndate --date \"@$(cat /sys/class/rtc/rtc0/wakealarm)\"\r\n\r\n2 comando para borrar la hora programada\r\n\r\nsudo sh -c \"echo 0  > /sys/class/rtc/rtc0/wakealarm\"\r\n\r\n3 comando para programar la hora de encendido\r\n\r\nsudo sh -c \"echo `date \'+%s\' -d \'tomorrow 6:45\'` > /sys/class/rtc/rtc0/wakealarm\"\r\n\r\n4 comando para apagar\r\n\r\nshutdown now = apagar ahora\r\nshutdown 23:55 = apagar a 5 para las 12am\r\nshutdown -C = para cancelar el apagado\r\n'),(4,'debian jessie 1','###DEBIAN JESSIE ESTABLE###\r\n## Repositorio Oficial\r\n    deb http://http.us.debian.org/debian/ jessie main contrib non-free\r\n    deb-src http://http.us.debian.org/debian/ jessie main contrib non-free\r\n\r\n## Repositorio de Seguridad\r\n    deb http://security.debian.org/ jessie/updates main contrib non-free\r\n    deb-src http://security.debian.org/ jessie/updates main contrib non-free\r\n\r\n## Repositorio Multimedia\r\n    # aptitude install deb-multimedia-keyring\r\n#    deb http://www.deb-multimedia.org testing main non-free\r\n    deb http://www.deb-multimedia.org jessie main non-free\r\n    deb-src http://www.deb-multimedia.org jessie main non-free'),(5,'package control.py',' import urllib.request,os,hashlib; h = \'6f4c264a24d933ce70df5dedcf1dcaee\' + \'ebe013ee18cced0ef93d5f746d80ef60\'; pf = \'Package Control.sublime-package\'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( \'http://packagecontrol.io/\' + pf.replace(\' \', \'%20\')).read(); dh = hashlib.sha256(by).hexdigest(); print(\'Error validating download (got %s instead of %s), please try manual install\' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), \'wb\' ).write(by) '),(6,'licencia sublime text 3 ','----- BEGIN LICENSE -----\r\nsgbteam\r\nSingle User License\r\nEA7E-1153259\r\n8891CBB9 F1513E4F 1A3405C1 A865D53F\r\n115F202E 7B91AB2D 0D2A40ED 352B269B\r\n76E84F0B CD69BFC7 59F2DFEF E267328F\r\n215652A3 E88F9D8F 4C38E3BA 5B2DAAE4\r\n969624E7 DC9CD4D5 717FB40C 1B9738CF\r\n20B3C4F1 E917B5B3 87C38D9C ACCE7DD8\r\n5F7EF854 86B9743C FADC04AA FB0DA5C0\r\nF913BE58 42FEA319 F954EFDD AE881E0B\r\n------ END LICENSE --'),(7,'debian jessie 2','# jessie-oficiales\r\ndeb http://mirrors.kernel.org/debian/ jessie main contrib non-free\r\ndeb-src http://mirrors.kernel.org/debian/ jessie main contrib non-free\r\n\r\n# jessie-actualizaciones-seguridad\r\ndeb http://security.debian.org/ jessie/updates main contrib non-free\r\ndeb-src http://security.debian.org/ jessie/updates main contrib non-free\r\n\r\n# jessie-actualizaciones-sistema\r\ndeb http://mirrors.kernel.org/debian/ jessie-updates main contrib non-free\r\ndeb-src http://mirrors.kernel.org/debian/ jessie-updates main contrib non-free\r\ndeb http://mirrors.kernel.org/debian jessie-proposed-updates main contrib non-free\r\ndeb-src http://mirrors.kernel.org/debian jessie-proposed-updates main contrib non-free\r\n\r\n# jessie-backports\r\ndeb http://mirrors.kernel.org/debian/ jessie-backports main contrib non-free\r\ndeb-src http://mirrors.kernel.org/debian/ jessie-backports main contrib non-free\r\n\r\n# deb-multimedia\r\n# apt-get install deb-multimedia-keyring\r\n#deb http://www.deb-multimedia.org jessie main non-free'),(10,'hosts','127.0.0.1       www.facebook.com\r\n127.0.0.1       www.mercadolibre.com\r\n127.0.0.1       www.mercadolibre.com.ve\r\n127.0.0.1       www.youtube.com\r\n127.0.0.1       www.twitter.com\r\n127.0.0.1       www.amazon.com\r\n127.0.0.1       www.es-es.facebook.com\r\n127.0.0.1       www.es-la.facebook.com\r\n127.0.0.1       www.youporn.com\r\n127.0.0.1       www.redtube.com\r\n127.0.0.1       www.es-es.facebook.com\r\n127.0.0.1       www.es.yahoo.com\r\n127.0.0.1       www.myspace.com\r\n127.0.0.1       www.latino.myspace.com\r\n127.0.0.1       www.dolartoday.com\r\n127.0.0.1       www.instagram.com\r\n127.0.0.1       www.humanatic.com\r\n127.0.0.1       es-la.facebook.com\r\n\r\n0.0.0.0       www.facebook.com.       \r\n0.0.0.0       www.mercadolibre.com\r\n0.0.0.0       www.mercadolibre.com.ve\r\n0.0.0.0        www.youtube.com\r\n0.0.0.0       www.twitter.com\r\n0.0.0.0       www.amazon.com\r\n0.0.0.0       www.es-la.facebook.com\r\n0.0.0.0       www.youporn.com\r\n0.0.0.0       www.redtube.com\r\n0.0.0.0       www.es-es.facebook.com\r\n0.0.0.0       www.es.yahoo.com.\r\n0.0.0.0       www.myspace.com\r\n0.0.0.0       www.latino.myspace.com\r\n0.0.0.0      www.dolartoday.com\r\n0.0.0.0      www.instagram.com\r\n0.0.0.0      www.mercadolibre.com');
/*!40000 ALTER TABLE `repositorios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-24 15:17:03
