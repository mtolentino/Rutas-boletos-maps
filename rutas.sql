-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-06-2013 a las 13:42:56
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rutas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

CREATE TABLE IF NOT EXISTS `chofer` (
  `idchofer` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `nac` varchar(100) NOT NULL,
  `domi` text NOT NULL,
  `tel` int(11) NOT NULL,
  `corrida` varchar(100) NOT NULL,
  `horario` varchar(25) NOT NULL,
  `dias` varchar(15) NOT NULL,
  UNIQUE KEY `idchofer` (`idchofer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `chofer`
--

INSERT INTO `chofer` (`idchofer`, `nombre`, `nac`, `domi`, `tel`, `corrida`, `horario`, `dias`) VALUES
(9, 'JUAN PEREZ PEREZ', '1970-09-12', 'calle rotarios 512 col.doctores', 481397865, 'Santa Rosa-Hospital', '07:00-14:00', 'MI,\r\n	jue'),
(13, 'ANTONIO LOPEZ', '1970-03-01', 'CALLE SERDAN 456 ZONA CENTRO CD VALLES SLP', 2147483647, 'Santa Rosa-Hospital', '14:00-22:30', 'MA,MI,\r\n	jue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutapuntos`
--

CREATE TABLE IF NOT EXISTS `rutapuntos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `punto` varchar(100) NOT NULL,
  `idruta` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Volcado de datos para la tabla `rutapuntos`
--

INSERT INTO `rutapuntos` (`id`, `punto`, `idruta`) VALUES
(2, 'SANTA ROSA1', 'Santa Rosa-Hospital'),
(3, 'PRADERAS DEL RIO', 'Santa Rosa-Hospital'),
(4, 'TELLEZ', 'Santa Rosa-Hospital'),
(5, 'LA LONJA', 'Santa Rosa-Hospital'),
(6, 'GLORIETA P. ANTONIO', 'Santa Rosa-Hospital'),
(7, 'COCA COLA', 'Santa Rosa-Hospital'),
(8, 'HOT.QUINTAMAR', 'Santa Rosa-Hospital'),
(9, 'IMSS', 'Santa Rosa-Hospital'),
(10, 'SOLOLLANTAS', 'Santa Rosa-Hospital'),
(11, 'MMSINEMAS', 'Santa Rosa-Hospital'),
(12, 'SUPER ZAA!!', 'Santa Rosa-Hospital'),
(13, 'AGENCIA FORD', 'Santa Rosa-Hospital'),
(14, 'CONSTRURAMA', 'Santa Rosa-Hospital'),
(15, 'SUZUKY', 'Santa Rosa-Hospital'),
(16, 'GLOR. HIDALGO', 'Santa Rosa-Hospital'),
(17, 'SEC. #2', 'Santa Rosa-Hospital'),
(18, 'CENT. CAMIONERA', 'Santa Rosa-Hospital'),
(19, 'SORIANA CENTRAL', 'Santa Rosa-Hospital'),
(20, 'HOSPITAL', 'Santa Rosa-Hospital'),
(21, 'ECO CHICA', 'Pas-Tec'),
(22, 'CRUZ ROJA Z.C', 'Pas-Tec'),
(24, 'C.MATAMOROS', 'Pas-Tec'),
(25, 'AV.PASR', 'Pas-Tec'),
(26, 'GLORIETA PASR', 'Pas-Tec'),
(27, '7 MARES', 'Pas-Tec'),
(28, 'LA LONJA', 'Pas-Tec'),
(29, 'COL. FCO. VILLA', 'Pas-Tec'),
(30, 'U. DEPORTIVA', 'Pas-Tec'),
(31, 'COL.MUJERES', 'Pas-Tec'),
(32, 'TECNOLOGICO', 'Pas-Tec'),
(33, 'ECO CHICA', 'Valle Alto-Tec'),
(35, 'P. ALONSO', 'Valle Alto-Tec'),
(36, 'GLOR. HIDALGO', 'Valle Alto-Tec'),
(37, 'OFFICE DEPOT', 'Valle Alto-Tec'),
(38, 'TELMEX', 'Valle Alto-Tec'),
(39, 'CASA TOTAL', 'Valle Alto-Tec'),
(40, 'AHORRERA', 'Valle Alto-Tec'),
(41, 'MOTOLINIA', 'Valle Alto-Tec'),
(42, 'IMSS', 'Valle Alto-Tec'),
(43, 'VALLEALTO', 'Valle Alto-Tec'),
(44, '18 MARZO', 'Valle Alto-Tec'),
(45, 'AMPL. MARQUEZ', 'Valle Alto-Tec'),
(46, 'ENT. LAZARO', 'Valle Alto-Tec'),
(47, 'VISTA HERMOSA', 'Consuelo-V.Alto'),
(48, 'TECNOLOGICO', 'Valle Alto-Tec'),
(49, 'ECO CHICA', 'Consuelo-V.Alto'),
(50, 'P. ALONSO', 'Consuelo-V.Alto'),
(51, 'GLOR. HIDALGO', 'Consuelo-V.Alto'),
(52, 'OFFICE DEPOT', 'Consuelo-V.Alto'),
(53, 'TELMEX', 'Consuelo-V.Alto'),
(54, 'CASA TOTAL', 'Consuelo-V.Alto'),
(55, 'AHORRERA', 'Consuelo-V.Alto'),
(56, 'MOTOLINIA', 'Consuelo-V.Alto'),
(57, 'IMSS', 'Consuelo-V.Alto'),
(58, 'VALLE ALTO', 'Consuelo-V.Alto'),
(59, 'ENT. LAZARO', 'Consuelo-V.Alto'),
(60, 'COBACH 06', 'Consuelo-V.Alto'),
(61, 'COL.V.HERMOSA', 'Consuelo-V.Alto'),
(62, 'COL. DEL SOL', 'Consuelo-V.Alto'),
(63, 'CONSUELO', 'Consuelo-V.Alto'),
(66, '', ''),
(67, '', ''),
(68, '', ''),
(69, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE IF NOT EXISTS `rutas` (
  `idruta` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ruta` varchar(20) NOT NULL,
  `mapa` text NOT NULL,
  UNIQUE KEY `idruta` (`idruta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`idruta`, `ruta`, `mapa`) VALUES
(1, 'Santa Rosa-Hospital', 'https://maps.google.com/maps/ms?msa=0&msid=216752450003649883134.0004dd540656f2c38b60d&ie=UTF8&t=h&ll=21.981241,-99.028402&spn=0.066479,0.067635&output=embed'),
(2, 'Pas-Tec', 'https://maps.google.com.mx/maps/ms?msa=0&amp;msid=216752450003649883134.0004dd48b4d2ae6e01dee&amp;ie=UTF8&amp;t=h&amp;ll=22.00286,-99.026738&amp;spn=0.037581,0.020728&amp;output=embed'),
(3, 'Valle Alto-Tec', 'https://maps.google.com.mx/maps/ms?msa=0&amp;msid=216752450003649883134.0004dd594f42ea8753dd6&amp;ie=UTF8&amp;ll=22.003061,-99.026728&amp;spn=0.038019,0.026372&amp;t=h&amp;output=embed'),
(5, 'Consuelo-V.Alto', 'https://maps.google.com.mx/maps/ms?msa=0&amp;msid=216752450003649883134.0004dd594f42ea8753dd6&amp;ie=UTF8&amp;ll=22.002712,-99.022211&amp;spn=0.038019,0.026372&amp;t=m&amp;output=embed');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutauser`
--

CREATE TABLE IF NOT EXISTS `rutauser` (
  `ruta` varchar(100) NOT NULL,
  `boleto` varchar(30) NOT NULL,
  `no` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `rutauser`
--

INSERT INTO `rutauser` (`ruta`, `boleto`, `no`, `user`, `dia`, `id`) VALUES
('Santa Rosa-Hospital', '472051ad28676083b', 1, 'ARTURO TORRES COTO FERMAN', '2013-06-13', 1),
('Santa Rosa-Hospital', '306051ade98b249f1', 1, 'ARTURO TORRES COTO FERMAN', '2013-06-12', 2),
('Pas-Tec', '306051adea1f4bc6a', 2, 'isacar itiel', '2013-06-05', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `nick` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fechana` varchar(20) NOT NULL,
  `reg` varchar(20) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `nick`, `password`, `fechana`, `reg`) VALUES
(1, 'admin', 'admin', 'admin', '', ''),
(3, 'JUAN ARTURO GOMEZ GONZALEZ', 'juan', 'juan', '1980-10-10', '06.01.13'),
(4, 'ARTURO TORRES COTO FERMAN', 'arturo', 'arturo', '1990-02-16', '06.01.13'),
(5, 'isacar itiel', 'isacar', 'isacar', '1991-03-10', '06.04.13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
