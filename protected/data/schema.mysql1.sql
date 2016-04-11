-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2016 a las 20:42:06
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sapch`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas_salidas`
--

CREATE TABLE IF NOT EXISTS `entradas_salidas` (
  `id` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `hr_entrada` time NOT NULL,
  `hr_salida` time DEFAULT NULL,
  `id_usuario` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas_salidas`
--

INSERT INTO `entradas_salidas` (`id`, `fecha`, `hr_entrada`, `hr_salida`, `id_usuario`) VALUES
(1, '2016-02-21', '14:00:00', '20:59:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` bigint(20) NOT NULL,
  `log` text NOT NULL,
  `id_usuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE IF NOT EXISTS `ninos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `genero` char(1) NOT NULL,
  `id_villa` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`id`, `nombre`, `genero`, `id_villa`) VALUES
(1, 'Juan', 'M', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos_salidas`
--

CREATE TABLE IF NOT EXISTS `ninos_salidas` (
  `id` bigint(20) NOT NULL,
  `id_nino` bigint(20) NOT NULL,
  `id_salida` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ninos_salidas`
--

INSERT INTO `ninos_salidas` (`id`, `id_nino`, `id_salida`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_externo`
--

CREATE TABLE IF NOT EXISTS `personal_externo` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `empresa` varchar(120) NOT NULL,
  `genero` char(1) NOT NULL,
  `id_tipo_pe` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal_externo`
--

INSERT INTO `personal_externo` (`id`, `nombre`, `empresa`, `genero`, `id_tipo_pe`) VALUES
(1, 'Joaquin Estrada Perez', 'ninguna', 'M', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE IF NOT EXISTS `salidas` (
  `id` bigint(20) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `hr_salida` time NOT NULL,
  `hr_regreso` time DEFAULT NULL,
  `motivo` text NOT NULL,
  `lugar` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`id`, `fecha_inicio`, `fecha_fin`, `hr_salida`, `hr_regreso`, `motivo`, `lugar`) VALUES
(1, '2016-02-20', '2016-02-20', '02:44:00', '00:00:00', 'zbzbzcbxczb', 'bdzfbzdfb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_personal_externo`
--

CREATE TABLE IF NOT EXISTS `tipo_personal_externo` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_personal_externo`
--

INSERT INTO `tipo_personal_externo` (`id`, `nombre`) VALUES
(1, 'Familiar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `tipo_usuario` varchar(2) NOT NULL,
  `num_empleado` int(8) NOT NULL,
  `genero` char(1) NOT NULL,
  `contrasena` varchar(120) NOT NULL,
  `id_area` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `tipo_usuario`, `num_empleado`, `genero`, `contrasena`, `id_area`) VALUES
(1, 'Palmira Lopez', 'A', 1, 'F', 'palmira', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `villas`
--

CREATE TABLE IF NOT EXISTS `villas` (
  `id` bigint(20) NOT NULL,
  `numero` int(2) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `villas`
--

INSERT INTO `villas` (`id`, `numero`, `nombre`) VALUES
(1, 1, 'Villa de los sueños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
  `id` bigint(20) NOT NULL,
  `hr_entrada` time NOT NULL,
  `hr_salida` time DEFAULT NULL,
  `motivo` text NOT NULL,
  `fecha` date NOT NULL,
  `agendada` tinyint(1) NOT NULL,
  `id_pe` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `visitas`
--

INSERT INTO `visitas` (`id`, `hr_entrada`, `hr_salida`, `motivo`, `fecha`, `agendada`, `id_pe`) VALUES
(1, '02:00:00', '02:00:00', 'hbhjbjhbjbhj', '2016-02-21', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entradas_salidas`
--
ALTER TABLE `entradas_salidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_villa` (`id_villa`) USING BTREE;

--
-- Indices de la tabla `ninos_salidas`
--
ALTER TABLE `ninos_salidas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_niño` (`id_nino`) USING BTREE,
  ADD KEY `id_salida` (`id_salida`) USING BTREE;

--
-- Indices de la tabla `personal_externo`
--
ALTER TABLE `personal_externo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo_pe` (`id_tipo_pe`) USING BTREE;

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_personal_externo`
--
ALTER TABLE `tipo_personal_externo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `villas`
--
ALTER TABLE `villas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pe` (`id_pe`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entradas_salidas`
--
ALTER TABLE `entradas_salidas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ninos_salidas`
--
ALTER TABLE `ninos_salidas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `personal_externo`
--

-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_personal_externo`
--
ALTER TABLE `tipo_personal_externo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `villas`
--

-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas_salidas`
--
ALTER TABLE `entradas_salidas`
  ADD CONSTRAINT `entradas_salidas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `ninos`
--


--
-- Filtros para la tabla `ninos_salidas`
--

--
-- Filtros para la tabla `personal_externo`
--
ALTER TABLE `personal_externo`
  ADD CONSTRAINT `personal_externo_ibfk_1` FOREIGN KEY (`id_tipo_pe`) REFERENCES `tipo_personal_externo` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `visitas`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
