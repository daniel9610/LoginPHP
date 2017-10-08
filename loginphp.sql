-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2017 a las 05:52:48
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loginphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes`
--

CREATE TABLE `bienes` (
  `id_bienes` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bienes`
--

INSERT INTO `bienes` (`id_bienes`, `descripcion`, `tipo`) VALUES
(0, 'asd', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `jefe_area` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `id_cotizacion` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_responsable` int(11) DEFAULT NULL,
  `id_solicitud` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion_bienes`
--

CREATE TABLE `cotizacion_bienes` (
  `cotizacion_id_cotizacion` int(11) NOT NULL,
  `bienes_id_bienes` int(11) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id_ingreso` int(11) NOT NULL,
  `fecha_ingreso` varchar(45) DEFAULT NULL,
  `id_orden_compra` int(11) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `valor_total` varchar(45) DEFAULT NULL,
  `id_bienes` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `codigo_unico` varchar(45) DEFAULT NULL,
  `id_bienes` int(11) DEFAULT NULL,
  `ubicacion` varchar(45) DEFAULT NULL,
  `fecha_ingreso` varchar(45) DEFAULT NULL,
  `id_responsable` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id_inventario`, `codigo_unico`, `id_bienes`, `ubicacion`, `fecha_ingreso`, `id_responsable`) VALUES
(0, '1', 1, 'bogota', '1/1/2017', 1234),
(1, '2', 34, 'bogota', '1/2/3', 23),
(4, '12', 45, 'bogota', '12/12/2013', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_compra`
--

CREATE TABLE `orden_compra` (
  `id_orden_compra` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_bienes` int(11) DEFAULT NULL,
  `aprovado` tinyint(1) DEFAULT NULL,
  `id_cotizacion` int(11) DEFAULT NULL,
  `id_responsable` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nro_orden` varchar(45) DEFAULT NULL,
  `ruc` int(11) DEFAULT NULL,
  `razon_social` varchar(255) DEFAULT NULL,
  `fecha_orden` datetime DEFAULT NULL,
  `monto_total` double DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nro_orden`, `ruc`, `razon_social`, `fecha_orden`, `monto_total`, `fecha_entrega`) VALUES
(0, '12', 0, 's', '2017-01-01 00:00:00', 12000, '2017-02-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE `responsable` (
  `id_responsable` int(11) NOT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `id_cargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `id_responsable` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud_bienes`
--

CREATE TABLE `solicitud_bienes` (
  `id_solicitud_bienes` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `id_solicitud` int(11) DEFAULT NULL,
  `id_bienes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `nombres` text COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` text COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `Genero` enum('male','female') COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `Rol` enum('Lectura','LYC','LCYEd','LCEdyE') COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'Lectura'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombres`, `apellidos`, `email`, `Genero`, `password`, `Rol`) VALUES
(21, 'daniel', 'jimenez', 'daniel9610@hotmail.com', 'male', '123', 'Lectura'),
(23, 'maria', '', 'dji@hotmail.com', 'female', 'asd', 'LCYEd'),
(24, 'asd', 'asd', 'dan@hotmail.com', 'male', 'asd', 'LCEdyE'),
(25, 'pepito', 'perez', '123@hotmail.com', 'male', '123', 'LCYEd'),
(26, '123', '123', '1234@hotmail.com', 'male', '123', 'LYC');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD PRIMARY KEY (`id_bienes`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`id_cotizacion`),
  ADD KEY `id_solicitud` (`id_solicitud`),
  ADD KEY `id_responsable` (`id_responsable`);

--
-- Indices de la tabla `cotizacion_bienes`
--
ALTER TABLE `cotizacion_bienes`
  ADD PRIMARY KEY (`cotizacion_id_cotizacion`),
  ADD KEY `bienes_id_bienes` (`bienes_id_bienes`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id_ingreso`),
  ADD KEY `id_orden_compra` (`id_orden_compra`),
  ADD KEY `id_bienes` (`id_bienes`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`),
  ADD KEY `id_bienes` (`id_bienes`),
  ADD KEY `id_responsable` (`id_responsable`);

--
-- Indices de la tabla `orden_compra`
--
ALTER TABLE `orden_compra`
  ADD PRIMARY KEY (`id_orden_compra`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_bienes` (`id_bienes`),
  ADD KEY `id_responsable` (`id_responsable`),
  ADD KEY `id_cotizacion` (`id_cotizacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
