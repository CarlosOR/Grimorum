-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2019 a las 01:08:07
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `espacios`
--
CREATE DATABASE IF NOT EXISTS `espacios` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `espacios`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacio`
--

CREATE TABLE `espacio` (
  `ID_ESPACIO` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `tamano` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `ID` int(11) DEFAULT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`ID`, `NOMBRE`) VALUES
(1001, 'Zully');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo`
--

CREATE TABLE `tiempo` (
  `ID_TIEMPO` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiempo`
--

INSERT INTO `tiempo` (`ID_TIEMPO`, `NOMBRE`) VALUES
(1, 'Completo (8 Horas)'),
(2, 'Medio Tiempo (4 Horas)'),
(3, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempo_espacio`
--

CREATE TABLE `tiempo_espacio` (
  `ID_TIEMPO` int(11) DEFAULT NULL,
  `ID_ESPACIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_espacio`
--

CREATE TABLE `tipo_espacio` (
  `ID_TP_ESPACIO` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_espacio`
--

INSERT INTO `tipo_espacio` (`ID_TP_ESPACIO`, `NOMBRE`) VALUES
(1, 'Local Comercial'),
(2, 'Consultorio'),
(3, 'Espacio en una Empresa'),
(4, 'Bodega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tp_espacio_espacio`
--

CREATE TABLE `tp_espacio_espacio` (
  `ID_TP_ESPACIO` int(11) DEFAULT NULL,
  `ID_ESPACIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `TELEFONO` varchar(15) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `TELEFONO`, `PASSWORD`) VALUES
(123, 'Fabian', 'Pineda', '1234567', '123'),
(321, 'Laura', 'Rodriguez', '1234567', '123'),
(341, 'Carlos', 'Olarte', '1234567', '123'),
(567, 'Kelly', 'Camargo', '1234567', '123'),
(987, 'Camilo', 'Rueda', '1234567', '123'),
(1001, 'Zully', 'Calderon', '1234567', '123'),
(1023, 'Angie', 'Rojas', '1234567', '123'),
(1234, 'Leonel', 'Ariaz', '1234567', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `espacio`
--
ALTER TABLE `espacio`
  ADD PRIMARY KEY (`ID_ESPACIO`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Indices de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  ADD PRIMARY KEY (`ID_TIEMPO`);

--
-- Indices de la tabla `tiempo_espacio`
--
ALTER TABLE `tiempo_espacio`
  ADD KEY `ID_TIEMPO` (`ID_TIEMPO`),
  ADD KEY `ID_ESPACIO` (`ID_ESPACIO`);

--
-- Indices de la tabla `tipo_espacio`
--
ALTER TABLE `tipo_espacio`
  ADD PRIMARY KEY (`ID_TP_ESPACIO`);

--
-- Indices de la tabla `tp_espacio_espacio`
--
ALTER TABLE `tp_espacio_espacio`
  ADD KEY `ID_TP_ESPACIO` (`ID_TP_ESPACIO`),
  ADD KEY `ID_ESPACIO` (`ID_ESPACIO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tiempo`
--
ALTER TABLE `tiempo`
  MODIFY `ID_TIEMPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_espacio`
--
ALTER TABLE `tipo_espacio`
  MODIFY `ID_TP_ESPACIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `espacio`
--
ALTER TABLE `espacio`
  ADD CONSTRAINT `espacio_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuario` (`ID_USUARIO`);

--
-- Filtros para la tabla `tiempo_espacio`
--
ALTER TABLE `tiempo_espacio`
  ADD CONSTRAINT `tiempo_espacio_ibfk_1` FOREIGN KEY (`ID_TIEMPO`) REFERENCES `tiempo` (`ID_TIEMPO`),
  ADD CONSTRAINT `tiempo_espacio_ibfk_2` FOREIGN KEY (`ID_ESPACIO`) REFERENCES `espacio` (`ID_ESPACIO`);

--
-- Filtros para la tabla `tp_espacio_espacio`
--
ALTER TABLE `tp_espacio_espacio`
  ADD CONSTRAINT `tp_espacio_espacio_ibfk_1` FOREIGN KEY (`ID_TP_ESPACIO`) REFERENCES `tipo_espacio` (`ID_TP_ESPACIO`),
  ADD CONSTRAINT `tp_espacio_espacio_ibfk_2` FOREIGN KEY (`ID_ESPACIO`) REFERENCES `espacio` (`ID_ESPACIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
