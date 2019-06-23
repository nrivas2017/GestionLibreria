-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-06-2019 a las 01:18:29
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aplicacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `rut` varchar(30) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `rut`, `nombre`) VALUES
(1, '16108750-5', 'Javier'),
(2, '8529180-7', 'Luis'),
(3, '21202327-2', 'Nicol'),
(4, '14313282-k', 'Eduardo'),
(5, '19778321-4', 'Edith'),
(6, '17238792-6', 'Nicolas'),
(7, '16582081-9', 'Daniel'),
(8, '13349305-0', 'Esteban'),
(9, '23567283-9', 'Andrea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id_factura`, `id_producto`, `cantidad`, `precio`) VALUES
(2, 2, 2, 1164),
(2, 1, 1, 1209),
(3, 2, 2, 1164);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_proveedor`
--

CREATE TABLE `detalle_proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `id_cliente`, `fecha`, `hora`) VALUES
(1, 1, '2019-06-23', '18:12:31'),
(2, 1, '2019-06-23', '18:12:31'),
(3, 3, '2019-06-24', '18:25:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `precio_unitario` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio_unitario`, `stock`) VALUES
(1, 'Corrector', 1209, 74),
(2, 'Goma Pequeña', 1164, 61),
(3, 'Goma Grande', 1724, 99),
(4, 'Libro escolar', 1599, 27),
(5, 'Resma Officio', 351, 96),
(6, 'Resma Carta', 227, 97),
(7, 'Sacapuntas', 269, 0),
(8, 'Goma eva', 1265, 80),
(9, 'Blog', 1518, 99),
(10, 'Lapices de colores', 1171, 43),
(11, 'Perforadora PequeÃ±a', 330, 30),
(12, 'Silicona Liquida', 680, 27),
(13, 'Pegamento Barra', 637, 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `telefono`) VALUES
(2, 'artel', '56223901500'),
(3, 'Jamila', '56975908794'),
(4, 'Comercial RedOffice', '452910300');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_factura` (`id_factura`);

--
-- Indices de la tabla `detalle_proveedor`
--
ALTER TABLE `detalle_proveedor`
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `detalle_ibfk_2` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id_factura`);

--
-- Filtros para la tabla `detalle_proveedor`
--
ALTER TABLE `detalle_proveedor`
  ADD CONSTRAINT `detalle_proveedor_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`),
  ADD CONSTRAINT `detalle_proveedor_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
