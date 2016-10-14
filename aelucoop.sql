-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2016 a las 13:09:25
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aelucoop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_libroreclamacion`
--

CREATE TABLE `wp_libroreclamacion` (
  `NROTRANSACCION` int(11) NOT NULL,
  `UNIQUEID` varchar(50) NOT NULL,
  `FECHA` date NOT NULL,
  `ORIGEN` int(3) NOT NULL DEFAULT '100',
  `APELLIDOS` varchar(50) NOT NULL,
  `NOMBRES` varchar(50) NOT NULL,
  `TIPODOCUMENTO` int(2) NOT NULL,
  `NUMERODOCUMENTO` varchar(20) NOT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `DISTRITO` varchar(50) NOT NULL,
  `PROVINCIA` varchar(50) NOT NULL,
  `TELEFONO` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TUTOR-NOMBRES` varchar(50) NOT NULL,
  `TUTOR-APELLIDOS` varchar(50) NOT NULL,
  `TUTOR-TIPODOCUMENTO` int(2) NOT NULL,
  `TUTOR-NUMERODOCUMENTO` varchar(20) NOT NULL,
  `TIPO` int(2) NOT NULL,
  `SERVICIO` int(2) NOT NULL,
  `DESCRIPCION` varchar(2000) NOT NULL,
  `FORMARESPUESTA` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wp_libroreclamacion`
--

INSERT INTO `wp_libroreclamacion` (`NROTRANSACCION`, `UNIQUEID`, `FECHA`, `ORIGEN`, `APELLIDOS`, `NOMBRES`, `TIPODOCUMENTO`, `NUMERODOCUMENTO`, `DIRECCION`, `DISTRITO`, `PROVINCIA`, `TELEFONO`, `EMAIL`, `TUTOR-NOMBRES`, `TUTOR-APELLIDOS`, `TUTOR-TIPODOCUMENTO`, `TUTOR-NUMERODOCUMENTO`, `TIPO`, `SERVICIO`, `DESCRIPCION`, `FORMARESPUESTA`) VALUES
(1, '', '2016-10-10', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(2, '', '2016-10-10', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(3, '', '2016-10-10', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(4, '', '2016-10-10', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOSSS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(5, '', '2016-10-10', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOSSS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(6, '', '2016-10-10', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOSSS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(7, '', '2016-10-10', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOSSS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(8, '', '2016-10-10', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOSSS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(9, '', '2016-10-11', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOSSS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(10, '', '2016-10-11', 100, 'APELLIDOS', 'NOMBRES', 1, '40290904', 'DIRECCION', 'DISTRITO', 'PROVINCIA', 'TELEFONO', 'EMAIL', 'TUTOR-NOMBRES', 'TUTOR-APELLIDOSSS', 1, '40290904', 1, 1, 'DESCRIPCION', 1),
(11, '', '2016-10-11', 100, 'bfg', 'fdbgf', 1, 'gbfg', 'bgbfg', 'bfgbfg', 'bfg', 'bgfbfgb', 'mcmollehuara@gmail.com', 'bfg', 'bgfb', 1, 'bfgb', 1, 1, 'bfgbgf', 1),
(12, '', '2016-10-11', 100, 'bfg', 'fdbgf', 1, 'gbfg', 'bgbfg', 'bfgbfg', 'bfg', 'bgfbfgb', 'mcmollehuara@gmail.com', '', '', 1, '', 1, 1, 'bfgbgf', 1),
(13, '', '2016-10-11', 100, 'csd', 'csdc', 1, 'csdcsd', 'dfvbdfv', 'dfvdfvdf', 'fvdfv', 'vdfvdf', 'mcmollehuara@gmail.com', 'cxv', 'xcvxcv', 1, 'xcvxcv', 1, 1, 'dsfgdfgsdfgsdfg', 1),
(14, '', '2016-10-11', 100, 'xasx', 'xasxas', 1, 'asx', 'xasxas', 'cdscsd', 'xasx', 'xasx', 'mcmollehuara@gmail.com', 'xasxasx', 'xasxas', 1, 'xaxasx', 1, 1, 'asxasxasx', 1),
(15, '', '2016-10-11', 100, 'xasx', 'xasxas', 1, 'asx', 'xasxas', 'cdscsd', 'xasx', 'xasx', 'mcmollehuara@gmail.com', 'xasxasx', 'xasxas', 1, 'xaxasx', 1, 1, 'asxasxasx', 1),
(16, '', '2016-10-12', 100, 'cdsc', 'csdcds', 1, 'cdscsdc', 'csdcsdcsd', 'cdscdsc', 'dscsdc', 'csdcds', 'mcmollehuara@gmail.com', 'csdc', 'sdcdsc', 1, 'csdcdsc', 1, 1, 'csdcsd', 1),
(17, '', '2016-10-12', 100, 'cdsc', 'csdcds', 1, 'cdscsdc', 'csdcsdcsd', 'cdscdsc', 'dscsdc', 'csdcds', 'mcmollehuara@gmail.com', 'csdc', 'sdcdsc', 1, 'csdcdsc', 1, 1, 'csdcsd', 1),
(18, '', '2016-10-12', 100, 'cdsc', 'csdcds', 1, 'cdscsdc', 'csdcsdcsd', 'cdscdsc', 'dscsdc', 'csdcds', 'mcmollehuara@gmail.com', 'csdc', 'sdcdsc', 1, 'csdcdsc', 1, 1, 'csdcsdsdcdssdcds', 1),
(19, '', '2016-10-12', 100, 'cdsc', 'csdcds', 1, 'cdscsdc', 'csdcsdcsd', 'cdscdsc', 'dscsdc', 'csdcds', 'mcmollehuara@gmail.com', 'csdc', 'sdcdsc', 1, 'csdcdsc', 1, 1, 'csdcsdsdcdssdcds', 1),
(20, '', '2016-10-12', 100, 'sdcas', 'dscsadc', 1, 'ccdscsd', 'csdcsd', 'csadcsad', 'sdcsd', 'csdcds', 'mcmollehuara@gmail.com', '', 'cdscsdc', 1, '', 1, 1, 'cdscsdcsdc', 1),
(21, '57ff2a2105e0a', '2016-10-13', 100, 'casdc', 'csadcs', 1, 'sadcsadcas', 'csdac', 'csadcsad', 'asdcasd', 'csdcsdcdcasd', 'condorisheryl@gmail.com', 'csadcsadc', '', 1, '', 1, 1, 'sadcsadc', 1),
(22, '57ff2a64c6e99', '2016-10-13', 100, 'casdc', 'csadcs', 1, 'sadcsadcas', 'csdac', 'csadcsad', 'asdcasd', 'csdcsdcdcasd', 'condorisheryl@gmail.com', 'csadcsadc', '', 1, '', 1, 1, 'sadcsadc', 1),
(23, '57ff2a892a74e', '2016-10-13', 100, 'casdc', 'csadcs', 1, 'sadcsadcas', 'csdac', 'csadcsad', 'asdcasd', 'csdcsdcdcasd', 'condorisheryl@gmail.com', 'csadcsadc', '', 1, '', 1, 1, 'sadcsadc', 1),
(24, '57ff2e0f70c3b', '2016-10-13', 100, 'cdsc', 'csdcds', 1, 'sdcsdcsd', 'csdcsd', 'csdc', 'csdcsdcsdc', 'cdscsdc', 'mcmollehuara@gmail.com', '', '', 1, '', 1, 1, 'csdcsdc', 1),
(25, '57ff2e2ac9c90', '2016-10-13', 100, 'cdsc', 'csdcds', 1, 'sdcsdcsd', 'csdcsd', 'csdc', 'csdcsdcsdc', 'cdscsdc', 'mcmollehuara@gmail.com', '', '', 1, '', 1, 1, 'csdcsdc', 1),
(26, '57ff2f13408cf', '2016-10-13', 100, 'cdsc', 'csdcsdc', 1, 'csdc', 'csdcsdcc', 'csdc', 'csdcsdc', 'csdcsdc', 'mcmollehuara@gmail.com', '', '', 1, '', 1, 1, 'cdscds', 1),
(27, '57ff2f655b846', '2016-10-13', 100, 'cdsc', 'csdcsdc', 1, 'csdc', 'csdcsdcc', 'csdc', 'csdcsdc', 'csdcsdc', 'mcmollehuara@gmail.com', '', '', 1, '', 1, 1, 'cdscds', 1),
(28, '57ff2fd2f4077', '2016-10-13', 100, 'cds', 'csdcsd', 1, 'cdscsd', 'sdcdsc', 'csdc', 'cdscsd', 'csdc', 'mcmollehuara@gmail.com', 'csdcsd', '', 1, 'cd', 1, 1, 'csdcsd', 1),
(29, '57ff30bfb193e', '2016-10-13', 100, 'cdscsdc', 'cdscsdc', 1, 'csdcdsc', 'sdcsdc', 'csadcsad', 'csdc', 'csdcsdc', 'condorisheryl@gmail.com', 'csd', 'cscd', 1, 'csdcsdc', 1, 1, 'cdscds', 1),
(30, '57ff31447bec9', '2016-10-13', 100, 'xcx', 'fgf', 1, 'xcxc', 'csdcsd', 'xcxcx', 'sdcsd', 'csdcds', 'mcmollehuara@gmail.com', 'xc', 'cdscsdc', 1, 'xc', 1, 1, 'xxcxc', 1),
(31, '57ff31bc55111', '2016-10-13', 100, 'csdcsdc', 'csdcsd', 1, 'csd', 'csdcsdcs', 'sdcsd', 'dcdscsd', 'csdc', 'condorisheryl@gmail.com', '', '', 1, '', 1, 1, 'csdcsdc', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wp_librorec_servicio`
--

CREATE TABLE `wp_librorec_servicio` (
  `TIPO` int(2) NOT NULL,
  `CODIGO` int(2) NOT NULL,
  `DESCRIPCION` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `wp_librorec_servicio`
--

INSERT INTO `wp_librorec_servicio` (`TIPO`, `CODIGO`, `DESCRIPCION`) VALUES
(1, 1, 'Queja'),
(2, 1, 'Reclamo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `wp_libroreclamacion`
--
ALTER TABLE `wp_libroreclamacion`
  ADD PRIMARY KEY (`NROTRANSACCION`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `wp_libroreclamacion`
--
ALTER TABLE `wp_libroreclamacion`
  MODIFY `NROTRANSACCION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
