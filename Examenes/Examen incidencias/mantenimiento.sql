-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2021 a las 21:40:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mantenimiento`
--
CREATE DATABASE IF NOT EXISTS `mantenimiento` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `mantenimiento`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencia`
--

CREATE TABLE `incidencia` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `profesor` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `estado` varchar(10) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `admin` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `incidencia`
--

INSERT INTO `incidencia` (`id`, `descripcion`, `profesor`, `fecha`, `estado`, `admin`) VALUES
(1, 'El ordenador no arranca, la pantalla se queda en negro', 'Pepe', '2021-11-28', 'PENDIENTE', NULL),
(2, 'La pizarra digital del aula 9 no tiene sonido', 'Ana', '2021-10-12', 'PENDIENTE', NULL),
(3, 'No puedo abrir determinadas páginas de google', 'Matilde', '2021-11-22', 'PENDIENTE', NULL),
(4, 'El ordenador de dirección va muy lento y se queda bloqueado', 'Gines', '2021-12-04', 'PENDIENTE', NULL),
(5, 'El ordenador de la sala de profesores no detecta ninguna impresora', 'Juan', '2021-12-08', 'PENDIENTE', NULL),
(6, 'No hay conexión a internet en el pc del profesor', 'Matilde', '2021-12-03', 'PENDIENTE', NULL),
(7, 'No puedo instalar el libro digital de inglés, sin privilegios', 'Ana', '2021-11-22', 'PENDIENTE', NULL),
(8, 'Habría que cambiar el teclado en el aula de dibujo, fallan algunas teclas', 'Pepe', '2021-12-06', 'PENDIENTE', NULL),
(9, 'La imagen se reproduce en el monitor pero el proyector no muestra nada', 'Pepe', '2021-11-30', 'PENDIENTE', NULL),
(10, 'Algunas páginas web no se abren porque lo impide el cortafuegos', 'Juan', '2021-12-08', 'PENDIENTE', NULL),
(11, 'Debe contener algún virus, porque el funcionamiento en general es tremendamente lento', 'Gines', '2021-11-28', 'PENDIENTE', NULL);

-- --------------------------------------------------------

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `incidencia`
--
ALTER TABLE `incidencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
