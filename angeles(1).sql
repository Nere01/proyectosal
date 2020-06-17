-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-06-2020 a las 21:42:33
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `angeles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

DROP TABLE IF EXISTS `autos`;
CREATE TABLE IF NOT EXISTS `autos` (
  `idauto` int(11) NOT NULL AUTO_INCREMENT,
  `clase` varchar(225) NOT NULL,
  `nomeclatura` varchar(225) NOT NULL,
  `ejes` float NOT NULL,
  `llantas` float NOT NULL,
  PRIMARY KEY (`idauto`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`idauto`, `clase`, `nomeclatura`, `ejes`, `llantas`) VALUES
(1, 'Autobus', 'B', 2, 6),
(2, 'Autobus', 'B', 3, 10),
(6, 'Camion Unitario', 'c2', 2, 6),
(5, 'Autobus', 'B4', 4, 10),
(7, 'Camion Unitario', 'c3', 3, 8),
(8, 'Camion Unitario', 'c2-R2', 4, 14),
(9, 'Camion Unitario', 'c3-R2', 5, 18),
(10, 'Camion Unitario', 'c2-R3', 5, 18),
(11, 'Camion Unitario', 'c3-R3', 6, 22),
(12, 'Camion ARTICULADO', 'T2-S1', 3, 10),
(13, 'Camion ARTICULADO', 'T2-S2', 4, 14),
(14, 'Camion ARTICULADO', 'T2-S3', 5, 18),
(15, 'Camion ARTICULADO', 'T3-S1', 4, 14),
(16, 'Camion ARTICULADO', 'T3-S2', 5, 18),
(17, 'Camion ARTICULADO', 'T3-S3', 5, 22),
(18, 'TRACTOCAMION DIBLEMENTE ARTICULADO', 'T2-S1-R2', 5, 18),
(19, 'TRACTOCAMION DIBLEMENTE ARTICULADO', 'T2-S2-R2', 6, 22),
(20, 'TRACTOCAMION DIBLEMENTE ARTICULADO', 'T2-S1-R3', 6, 22),
(22, 'Spark', 'S', 2, 4),
(24, 'Spark', 'A', 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga`
--

DROP TABLE IF EXISTS `carga`;
CREATE TABLE IF NOT EXISTS `carga` (
  `idcarga` int(11) NOT NULL AUTO_INCREMENT,
  `transportista` varchar(225) COLLATE utf8_latvian_ci NOT NULL,
  `empresa` varchar(225) COLLATE utf8_latvian_ci NOT NULL,
  `carga` varchar(225) COLLATE utf8_latvian_ci NOT NULL,
  `fecha` date NOT NULL,
  `aceptado` varchar(225) COLLATE utf8_latvian_ci NOT NULL,
  `terminado` varchar(225) COLLATE utf8_latvian_ci NOT NULL,
  `estado` varchar(225) COLLATE utf8_latvian_ci NOT NULL,
  `teltrans` varchar(225) COLLATE utf8_latvian_ci NOT NULL,
  `telempresa` varchar(225) COLLATE utf8_latvian_ci NOT NULL,
  `idtransportista` int(11) NOT NULL,
  `idempresa` int(11) NOT NULL,
  `coche` varchar(225) COLLATE utf8_latvian_ci DEFAULT NULL,
  PRIMARY KEY (`idcarga`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_latvian_ci;

--
-- Volcado de datos para la tabla `carga`
--

INSERT INTO `carga` (`idcarga`, `transportista`, `empresa`, `carga`, `fecha`, `aceptado`, `terminado`, `estado`, `teltrans`, `telempresa`, `idtransportista`, `idempresa`, `coche`) VALUES
(1, '', 'ads', 'ads', '2020-05-25', '2', '0', 'adad', '', 'saddsa', 0, 15, ''),
(2, 'Luis Alonso', 'nere', 'dsffsd', '2020-05-25', '2', '0', 'cihuas', '', '6251245', 3, 53, 'tracto'),
(3, '', 'nere', 'sddsa', '2020-05-25', '2', '0', 'cihuas', '', '6251245', 0, 53, ''),
(4, 'Denisse', 'nere', 'sdsd', '2020-05-25', '2', '1', 'cihuas', '', '6251245', 52, 53, 'troca'),
(5, '', 'nere', '', '2020-05-25', '2', '0', 'cihuas', '', '6251245', 0, 53, ''),
(6, 'Denisse', 'asdasd', 'carga', '2020-05-27', '2', '1', 'chihuas', '', 'empresa', 52, 12, ''),
(7, '', 'nere', 'sdaasd', '2020-05-27', '2', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(8, '', 'nere', 'medicina', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(9, '', 'nere', 'asddas', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(10, '', 'nere', 'carga loca', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(11, '', 'nere', 'dasdsa', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(12, '', 'nere', 'sdf', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(13, '', 'nere', 'sdfsdf', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(14, '', '12', '12', '2020-05-27', '0', '0', '12', '', '12', 0, 12, NULL),
(15, 'No asignao', 'empresa', 'carga', '2020-05-27', '0', '0', 'carga', '', '6666', 0, 12, 'dsadqw'),
(16, 'No asignao', 'empresa', 'carga', '2020-05-27', '0', '0', 'carga', '', '6666', 0, 12, 'dsadqw'),
(17, 'No asignao', 'empresa', 'carga', '2020-05-27', '0', '0', 'carga', '', '6666', 0, 12, 'dsadqw'),
(18, 'No asignao', 'empresa', 'carga', '2020-05-27', '0', '0', 'carga', '', '6666', 0, 12, 'dsadqw'),
(19, 'No asignao', 'empresa', 'carga', '2020-05-27', '0', '0', 'carga', '', '6666', 0, 12, 'dsadqw'),
(21, '', 'nere', 'ssa', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(22, '', 'nere', 'carguitaaa', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, NULL),
(23, '', 'nere', 'cargabuena', '2020-05-27', '0', '0', 'cihuas', '', '6251245', 0, 53, 'c3-R2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

DROP TABLE IF EXISTS `contrato`;
CREATE TABLE IF NOT EXISTS `contrato` (
  `idcontrato` int(11) NOT NULL AUTO_INCREMENT,
  `arquitecto` varchar(220) NOT NULL,
  `info` text NOT NULL,
  `encargado` varchar(220) NOT NULL,
  `terminado` int(11) DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `dinero` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`idcontrato`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`idcontrato`, `arquitecto`, `info`, `encargado`, `terminado`, `fecha`, `dinero`) VALUES
(1, 'Lalo', 'muchas casas', 'Alonso', 1, NULL, NULL),
(2, 'MELON', 'infor', 'nere', NULL, '2020-06-14', NULL),
(3, 'lol', 'casas', 'nere', NULL, '2020-06-14', '12321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `idempleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(220) NOT NULL,
  `edad` varchar(220) NOT NULL,
  `nacimiento` date NOT NULL,
  `contrato` int(11) DEFAULT '0',
  `pagado` int(11) DEFAULT '0',
  PRIMARY KEY (`idempleado`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idempleado`, `nombre`, `edad`, `nacimiento`, `contrato`, `pagado`) VALUES
(1, 'lalo', '22', '2020-06-01', 2, 1),
(3, 'Alonso', '23', '1996-05-01', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
CREATE TABLE IF NOT EXISTS `solicitud` (
  `IDSolicitud` int(11) NOT NULL AUTO_INCREMENT,
  `Solicitante` varchar(30) NOT NULL,
  `Adestino` varchar(30) NOT NULL,
  `Aorigen` varchar(30) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL,
  `Prioridad` varchar(30) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Estado` varchar(30) DEFAULT 'En Proceso',
  `PrioVerdadera` varchar(11) DEFAULT 'Cambiar',
  `Respuesta` text,
  `Visto` varchar(11) DEFAULT 'NO',
  `Activo` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`IDSolicitud`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`IDSolicitud`, `Solicitante`, `Adestino`, `Aorigen`, `Titulo`, `Descripcion`, `Prioridad`, `Fecha`, `Estado`, `PrioVerdadera`, `Respuesta`, `Visto`, `Activo`) VALUES
(64, 'Alonso', 'Enfermeria', 'Sistemas', 'asddsa', 'dasasdasd', 'Media', '2019-11-28 00:14:13', 'En Proceso', 'Cambiar', NULL, 'Visto', 1),
(63, 'Alonso', 'Sistemas', 'Sistemas', 'Cosasaa', 'dadas', 'Baja', '2019-11-25 21:12:07', 'En Proceso', '', NULL, 'Visto', 1),
(62, 'Alonso', 'Sistemas', 'Sistemas', 'Cosasaa', '1234', 'Alta', '2019-11-25 21:03:55', 'Terminado', 'Mediana', '', 'Visto', 1),
(65, 'Alonso', 'Sistemas', 'Sistemas', 'dasffd', 'dfdf', 'Media', '2019-11-28 00:22:02', 'En Proceso', '', NULL, 'Visto', 0),
(66, 'Martin', 'Enfermeria', 'Enfermeria', 'dasdas', 'adads', 'Media', '2019-11-28 21:49:00', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(67, 'Martin', 'Enfermeria', 'Enfermeria', 'ddf', 'lkjkl', 'Media', '2019-11-28 21:51:02', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(68, 'Carlos', 'Sistemas', '', 'sddsa', 'dssd', 'Baja', '2019-12-03 08:06:21', 'En Proceso', 'Cambiar', NULL, 'Visto', 1),
(69, 'Alonso', 'Enfermeria', 'Sistemas', '1234', 'se requiere algo', '', '2019-12-04 14:57:27', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(70, 'Alonso', 'Sistemas', 'Sistemas', 'Enfermedad', 'kjadshklajds', 'Baja', '2019-12-04 14:58:22', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(71, 'Alonso', 'dd', 'Sistemas', 'sdds', 'lksdjsdj', 'Baja', '2019-12-04 14:59:41', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(72, 'Alonso', 'ddfsfd', 'Sistemas', 'dsfsdf', 'fddsfdsf', 'Media', '2019-12-04 15:00:02', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(73, 'Alonso', 'RAUL', 'Sistemas', 'RAUL', 'RAUL', 'Alta', '2019-12-04 15:04:08', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(74, 'Martin', 'jhg', 'Enfermeria', 'jhb', 'ngv', 'Media', '2019-12-04 15:09:25', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(75, 'Carlos', 'kjh', '', 'jh', 'hgf', 'Media', '2019-12-04 15:10:00', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(76, 'Carlos', 'jhg', '', 'jhg', 'hjghj', 'Baja', '2019-12-04 15:11:14', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(77, 'Alonso', 'lkkj', 'Sistemas', 'kuh', 'kuhjgjh', 'Media', '2019-12-04 15:18:54', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(78, 'Martin', 'LKAS', 'Enfermeria', 'AKSD', 'ASDDAS', 'Media', '2019-12-04 15:23:23', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(79, 'Martin', 'dasasd', 'Enfermeria', 'asdasd', 'ddasasd', '', '2019-12-04 15:24:35', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(80, 'Martin', 'Enfermeria', 'Enfermeria', 'adsioasd', 'asdasd', 'Media', '2019-12-04 15:24:55', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(81, 'Martin', 'Sistemas', 'Enfermeria', 'sdada', 'dasdsa', 'Media', '2019-12-04 15:25:24', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(82, 'Martin', 'Conta', 'Enfermeria', 'conta', 'asdads', 'Alta', '2019-12-04 18:16:19', 'En Proceso', 'Cambiar', NULL, 'NO', 1),
(83, 'Alonso', 'sdadas', 'Sistemas', 'asdasd', 'adads', 'Alta', '2019-12-04 19:07:01', 'En Proceso', 'Cambiar', NULL, 'NO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

DROP TABLE IF EXISTS `transporte`;
CREATE TABLE IF NOT EXISTS `transporte` (
  `IDtransporte` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(225) COLLATE latin1_spanish_ci NOT NULL,
  `postal` varchar(225) COLLATE latin1_spanish_ci NOT NULL,
  `estado` varchar(225) COLLATE latin1_spanish_ci NOT NULL,
  `ciudad` varchar(225) COLLATE latin1_spanish_ci NOT NULL,
  `coche` varchar(225) COLLATE latin1_spanish_ci NOT NULL,
  `comentario` text COLLATE latin1_spanish_ci NOT NULL,
  `aceptado` int(11) NOT NULL,
  `empresa` varchar(225) COLLATE latin1_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `idtransportista` int(11) NOT NULL,
  PRIMARY KEY (`IDtransporte`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `transporte`
--

INSERT INTO `transporte` (`IDtransporte`, `nombre`, `postal`, `estado`, `ciudad`, `coche`, `comentario`, `aceptado`, `empresa`, `fecha`, `idtransportista`) VALUES
(1, 'Alons', 'sdds', 'sd', 'sd', 'sd', 'ssd', 1, '0', '2020-05-24', 0),
(2, 'trans50 sdasda', 'adsdas', 'adsdas', 'asddsa', 'troca', 'hola', 1, '0', '2020-05-24', 0),
(3, 'trans50 sdasda', 'adsdas', 'adsdas', 'asddsa', 'troca', '', 1, '0', '2020-05-24', 0),
(4, 'Denisse Martienz Chavez', '1234', 'Chihuas', 'Cuauh', 'troca', 'simon', 1, '0', '2020-05-25', 52),
(6, 'Denisse', '', '', '', 'carro', '', 1, '0', '2020-05-26', 52),
(8, 'irma.rojero', '31510', 'Chihuas', 'Cuauh', 'c2', '', 1, '0', '2020-05-27', 54),
(10, 'Denisse', '1234', 'Chihuas', 'Cuauh', 'T3-S2', 'sdasd', 1, '0', '2020-05-27', 52),
(11, 'Denisse', '1234', 'Chihuas', 'Cuauh', 'c3-R2', 'asd', 1, '0', '2020-05-27', 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IDUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Pass` varchar(30) NOT NULL,
  `Departamento` varchar(30) DEFAULT NULL,
  `Tipo` int(30) DEFAULT NULL,
  `Estado` varchar(30) DEFAULT 'Activo',
  `materno` varchar(225) NOT NULL,
  `paterno` varchar(225) NOT NULL,
  `postal` varchar(225) NOT NULL,
  `estadoi` varchar(225) NOT NULL,
  `ciudad` varchar(225) NOT NULL,
  `direccion` varchar(225) NOT NULL,
  `rfc` varchar(225) NOT NULL,
  `telefono` varchar(225) NOT NULL,
  `correo` varchar(225) NOT NULL,
  `licencia` varchar(225) DEFAULT NULL,
  `vencimiento` date DEFAULT NULL,
  PRIMARY KEY (`IDUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDUsuario`, `Nombre`, `Pass`, `Departamento`, `Tipo`, `Estado`, `materno`, `paterno`, `postal`, `estadoi`, `ciudad`, `direccion`, `rfc`, `telefono`, `correo`, `licencia`, `vencimiento`) VALUES
(44, 'Alonso', '1234', 'Sistemas', 1, 'Activo', '0', '0', '0', '0', '0', '0', '', '', '', NULL, NULL),
(33, 'Martin', '1234', 'Enfermeria', 2, 'Activo', '0', '0', '0', '0', '0', '0', '', '', '', NULL, NULL),
(34, 'Carlos', '1234', NULL, 3, 'Activo', '0', '0', '0', '0', '0', '0', '', '', '', NULL, NULL),
(45, 'Yo', '12', NULL, 1, 'Inactivo', '0', '0', '0', '0', '0', '0', '', '', '', NULL, NULL),
(46, 'cdas', '1223', NULL, 2, 'Activo', '0', '0', '0', '0', '0', '0', '', '', '', NULL, NULL),
(47, 'loco', '1234', NULL, 2, 'Activo', '0', '0', '0', '0', '0', '0', '', '', '', NULL, NULL),
(48, 'De', '123', '', 2, 'Activo', '0', '0', '0', '0', '0', '0', '', '', '', NULL, NULL),
(49, 'asddas', 'adsd', '1', 3, 'Activo', '1', '1', 'dasdas', 'dsada', 'adsdas', 'adsdas', 'asddas', 'asddas', 'asddas', NULL, NULL),
(50, 'trans', '123', '', 2, 'Activo', 'sdasda', 'adsdas', 'adsdas', 'asddsa', 'dasdas', 'asddas', '1', '1', '1', NULL, NULL),
(51, 'Alonso', '1234', '', 2, 'Activo', 'Gonzalez', 'Bustillos', 'cOLINAS', 'Puert', 'Cuauh', 'SDADSA', '1', '1', '1', NULL, NULL),
(52, 'Denisse', '123', '', 2, 'Activo', 'Chavez', 'Martienz', '1234', 'Chihuas', 'Cuauh', 'ads', '1', '1231213132', '132312', '132321', '2020-05-29'),
(53, 'nere', '1234', '1', 3, 'Activo', '1', '1', 'asddsa12', 'cihuas', 'Cuauh', 'asd', 'ASDASD', '6251245', 'nere@ad', NULL, NULL),
(54, 'irma.rojero', 'Irmarojero23.', '', 2, 'Activo', 'Gonzalez', 'rojero', '31510', 'Chihuas', 'Cuauh', 'presa las lajas #1618', '1', '1', '1', NULL, NULL),
(55, 'miguel2110', 'mike2110', '1', 3, 'Activo', '1', '1', '31500', 'chihuahua', 'Cuauhtemoc', 'zona centro', 'eamm981021pa6', '6251640309', 'miguelrojo1@hotmail.com', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
