-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-06-2024 a las 14:30:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia_colon`
--
DROP DATABASE IF EXISTS `farmacia_colon`;
CREATE DATABASE IF NOT EXISTS `farmacia_colon` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `farmacia_colon`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `codigoProducto` int(11) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `precioProducto` float(9,2) UNSIGNED DEFAULT NULL,
  `cantidadProducto` smallint(5) DEFAULT NULL,
  `fotoProducto` varchar(100) DEFAULT NULL,
  `descripcionProducto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigoProducto`, `nombreProducto`, `precioProducto`, `cantidadProducto`, `fotoProducto`, `descripcionProducto`) VALUES
(10, 'Cetaphil gel', 12000.00, 3, '1719311850.png', 'Gel limpiador pieles sensibles'),
(11, 'Colgate', 5800.00, 3, '1719312284.png', 'Colgate Total 12 Limpieza Completa x 140 g'),
(12, 'Curitas', 6930.00, 11, '1719312293.png', 'Apósitos Adhesivos Curitas Aqua Protect XXL x 5 un'),
(13, 'Bolsa agua caliente', 5341.00, 2, '1719312091.png', 'Bolsa de Agua Caliente x 1,75 l');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigoProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigoProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
