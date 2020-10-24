-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2020 a las 05:44:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reclutar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanias`
--

CREATE TABLE `campanias` (
  `id` int(11) NOT NULL,
  `duracion` varchar(20) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `campanias`
--

INSERT INTO `campanias` (`id`, `duracion`, `fecha_inicio`, `fecha_fin`) VALUES
(1, 'Mensual', '2020-10-12', '2020-11-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `rubro` varchar(80) DEFAULT NULL,
  `e_mail` varchar(100) DEFAULT NULL,
  `domicilio` varchar(110) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `duracion` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `minimo` int(20) NOT NULL,
  `porcentaje_revendedor` varchar(20) NOT NULL,
  `bonificaciones` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- Error leyendo datos de la tabla reclutar.negocio: #1064 - Algo está equivocado en su sintax cerca 'FROM `reclutar`.`negocio`' en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Revendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `dni` int(18) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `domicilio` varchar(110) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `fecha_alta` date NOT NULL,
  `contrasenia` varchar(60) NOT NULL,
  `pregunta_secreta` varchar(60) NOT NULL,
  `respuesta_secreta` varchar(60) NOT NULL,
  `referente` varchar(80) DEFAULT NULL,
  `bonificacion` tinyint(4) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `estado` tinyint(4) NOT NULL,
  `id_negocio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `e_mail`, `nombre`, `apellido`, `dni`, `fecha_nacimiento`, `domicilio`, `telefono`, `fecha_alta`, `contrasenia`, `pregunta_secreta`, `respuesta_secreta`, `referente`, `bonificacion`, `id_rol`, `fecha_baja`, `estado`, `id_negocio`) VALUES
(1, 'lis.mendoza.cc@gmail.com', 'Lis', 'Mendoza', 36874627, '1992-08-09', 'Saraza 4323', '1157020698', '2020-10-12', 'lola', '¿cual es tu color preferido?', 'verde', NULL, 0, 1, NULL, 1, 0),
(2, 'lis.bruno.29.3.2015@gmail.com', 'lola', 'mendoza', 36874888, '2020-02-18', 'rivadavia 1767', '1157020444', '2020-10-11', 'lola', 'development', 'azul', NULL, 0, 1, NULL, 1, 0),
(3, 'lolaloca@gmail.com', 'lola', 'famosa', 36874899, '2020-02-04', 'rivadavia 1788', '1157020499', '2020-10-11', 'lola', 'development', 'rojo', NULL, 0, 2, NULL, 1, 2),
(4, 'georg@gmail.com', 'jor', 'matero', 36876545, '2020-02-18', 'rivadavia 1666', '115702089', '2020-10-11', 'lola', 'development', 'negro', NULL, 0, 1, NULL, 1, 0),
(5, 'bosterosputos@gmail.com', 'boca', 'pecho frio', 36876767, '2020-02-05', 'boca 1666', '115702878', '2020-10-11', 'lola', 'design', 'dina', NULL, 0, 1, NULL, 1, 0),
(8, 'leo@gmail.com', 'lelo', 'lela', 76767676, '2020-10-15', 'rivadavia 1666', '1138717109', '2020-10-11', 'lola', 'development', 'rosa', NULL, 0, 2, NULL, 1, 2),
(9, 'gogogo@gmail.com', 'gogogo', 'lalala', 76767676, '2020-10-15', 'rivadavia 1666', '1138717109', '2020-10-11', 'lola', 'development', 'naranja', NULL, 0, 1, NULL, 1, 0),
(10, 'juan@gmail.com', 'juan jose', 'mendoza', 76767687, '2020-10-21', 'rivadavia 3333', '07373773', '2020-10-11', 'lola', '¿Cúal es el nombre de tu primer mascota?', 'vitamina', NULL, 0, 1, NULL, 1, 0),
(11, 'nana@gmail.com', 'fran', 'fain', 87464747, '2020-10-20', 'fonruge 9999', '1157020499', '2020-10-11', 'lola', '', 'rosa', NULL, 0, 1, NULL, 1, NULL),
(12, 'neona@gmail.com', 'noelia', 'mendoza', 34867848, '2020-10-28', 'rivadavia 1767', '0303456', '2020-10-11', 'lola', '', 'blanco', NULL, 0, 1, NULL, 1, NULL),
(13, 'pancho@gmail.com', 'pancho', 'pansa', 36874888, '2020-10-23', 'rivadavia 1333', '1138717104', '2020-10-11', 'lola', '¿Cúal es tu color favorito?', 'marron', NULL, 0, 1, NULL, 1, NULL),
(14, 'pimpon@gmail.com', 'pipo', 'popo', 36874627, '2020-10-08', '', '', '2020-10-11', 'lola', '¿Cúal es tu color favorito?', 'marron ', '3', 0, 2, NULL, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campanias`
--
ALTER TABLE `campanias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rol_usuario` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campanias`
--
ALTER TABLE `campanias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `rol_usuario` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
