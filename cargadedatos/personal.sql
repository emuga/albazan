-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2018 a las 01:16:08
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
`id` int(11) NOT NULL COMMENT 'Llave Primaria',
  `nombre_personal` varchar(255) NOT NULL COMMENT 'Nombre de Personal',
  `salario_personal` double NOT NULL COMMENT 'Salario personal',
  `edad_personal` int(11) NOT NULL COMMENT 'Edad Empleado'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='Tabla Personal';

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre_personal`, `salario_personal`, `edad_personal`) VALUES
(1, 'Carlos Butters', 8000, 32),
(2, 'Luis Castro', 12000, 43),
(3, 'Marcos Cuneo', 6000, 35),
(4, 'Kelly Valdivia', 5600, 22),
(5, 'Mario Bonneti', 7500, 33),
(6, 'William Soto', 3500, 25),
(7, 'Hector Carrillo', 6300, 28),
(8, 'Luisa Collasos', 4500, 31),
(9, 'Michael Yuri', 9200, 39),
(10, 'Sofia Frisa', 3800, 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Llave Primaria',AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
