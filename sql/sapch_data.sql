-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2016 a las 19:01:05
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

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

CREATE TABLE `areas` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `nombre`) VALUES
(1, 'Comedor'),
(2, 'Huerto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas_salidas`
--

CREATE TABLE `entradas_salidas` (
  `id` bigint(20) NOT NULL,
  `hr_entrada` date NOT NULL,
  `hr_salida` date DEFAULT NULL,
  `id_usuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entradas_salidas`
--

INSERT INTO `entradas_salidas` (`id`, `hr_entrada`, `hr_salida`, `id_usuario`) VALUES
(1, '0000-00-00', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) NOT NULL,
  `log` text NOT NULL,
  `id_usuario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE `ninos` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `num_villa` int(2) NOT NULL,
  `genero` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`id`, `nombre`, `num_villa`, `genero`) VALUES
(1, 'Pablo', 2, 'M'),
(2, 'lulu ', 15, 'F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos_salidas`
--

CREATE TABLE `ninos_salidas` (
  `id_nino` bigint(20) NOT NULL,
  `id_salida` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ninos_salidas`
--

INSERT INTO `ninos_salidas` (`id_nino`, `id_salida`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_externo`
--

CREATE TABLE `personal_externo` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `empresa` varchar(120) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `genero` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `id` bigint(20) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `hr_salida` date NOT NULL,
  `hr_regreso` date DEFAULT NULL,
  `motivo` text NOT NULL,
  `lugar` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salidas`
--

INSERT INTO `salidas` (`id`, `fecha_inicio`, `fecha_fin`, `hr_salida`, `hr_regreso`, `motivo`, `lugar`) VALUES
(1, '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'wdes', 'sa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `tipo_usuario` varchar(2) NOT NULL,
  `num_empleado` int(8) NOT NULL,
  `genero` char(1) NOT NULL,
  `contrasena` varchar(120) NOT NULL,
  `id_area` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `tipo_usuario`, `num_empleado`, `genero`, `contrasena`, `id_area`) VALUES
(2, 'Gerardo Ramirez Guadarrama', 'a', 192, 'M', '123456', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
  `id` bigint(20) NOT NULL,
  `hr_entrada` date NOT NULL,
  `hr_salida` date DEFAULT NULL,
  `motivo` text NOT NULL,
  `fecha` date NOT NULL,
  `id_pe` bigint(20) DEFAULT NULL,
  `id_nino` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ninos_salidas`
--
ALTER TABLE `ninos_salidas`
  ADD UNIQUE KEY `id_niño` (`id_nino`),
  ADD UNIQUE KEY `id_salida` (`id_salida`);

--
-- Indices de la tabla `personal_externo`
--
ALTER TABLE `personal_externo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_niño` (`id_nino`),
  ADD KEY `id_per` (`id_pe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `entradas_salidas`
--
ALTER TABLE `entradas_salidas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `personal_externo`
--
ALTER TABLE `personal_externo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `salidas`
--
ALTER TABLE `salidas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas_salidas`
--
ALTER TABLE `entradas_salidas`
  ADD CONSTRAINT `entradas_salidas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `ninos_salidas`
--
ALTER TABLE `ninos_salidas`
  ADD CONSTRAINT `ninos_salidas_ibfk_1` FOREIGN KEY (`id_nino`) REFERENCES `ninos` (`id`),
  ADD CONSTRAINT `ninos_salidas_ibfk_2` FOREIGN KEY (`id_salida`) REFERENCES `salidas` (`id`);

--
-- Filtros para la tabla `personal_externo`
--
ALTER TABLE `personal_externo`
  ADD CONSTRAINT `personal_externo_ibfk_1` FOREIGN KEY (`id`) REFERENCES `visitas` (`id_pe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id`);

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
  ADD CONSTRAINT `visitas_ibfk_1` FOREIGN KEY (`id_pe`) REFERENCES `personal_externo` (`id`),
  ADD CONSTRAINT `visitas_ibfk_2` FOREIGN KEY (`id_nino`) REFERENCES `ninos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
