-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2023 a las 05:10:18
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mariscal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id_carac` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `id_fases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fases`
--

CREATE TABLE `fases` (
  `id_fases` int(11) NOT NULL,
  `nombre_fases` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fases`
--

INSERT INTO `fases` (`id_fases`, `nombre_fases`, `estado`) VALUES
(1, 'huevecillo', 1),
(2, 'larva', 1),
(3, 'gusano', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_plaga`
--

CREATE TABLE `imagenes_plaga` (
  `id_ima` int(11) NOT NULL,
  `imagenes` int(11) NOT NULL,
  `id_produc` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plaga`
--

CREATE TABLE `plaga` (
  `id_plaga` int(11) NOT NULL,
  `nombre_plaga` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id_produc` int(11) NOT NULL,
  `nombre_produc` varchar(20) NOT NULL,
  `inicio_produc` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion_plaga`
--

CREATE TABLE `produccion_plaga` (
  `id_produc_plaga` int(11) NOT NULL,
  `id_produc` int(11) NOT NULL,
  `id_fases` int(11) NOT NULL,
  `id_plaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendaciones`
--

CREATE TABLE `recomendaciones` (
  `id_reco` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `id_fases` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `recomendaciones`
--

INSERT INTO `recomendaciones` (`id_reco`, `descripcion`, `id_fases`) VALUES
(1, 'aplocar este tratamiento', 1),
(2, 'aplicar este tratamiento', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nombre_usu` varchar(20) NOT NULL,
  `cedula_usu` int(11) NOT NULL,
  `telefono_usu` int(11) NOT NULL,
  `correo_usu` varchar(50) NOT NULL,
  `dirección` varchar(20) NOT NULL,
  `fecha_na_usu` date NOT NULL,
  `contra_usu` varchar(20) NOT NULL,
  `admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre_usu`, `cedula_usu`, `telefono_usu`, `correo_usu`, `dirección`, `fecha_na_usu`, `contra_usu`, `admin`) VALUES
(1, 'humilde', 953505450, 960293500, 'alexiq175@gmail.com', '', '2001-05-10', '12345', 1),
(2, 'gloria', 931508204, 969141776, 'gloria@gmail.com', '', '1997-01-16', '54321', 1),
(3, 'allan', 685909890, 987673444, 'allan@gmail.com', '', '2007-05-03', '12345', 0),
(4, 'isabel', 867898899, 987678766, 'isabelgar@gmail.com', '', '1990-07-12', '12345', 0),
(5, 'adolfo', 856342567, 967889009, 'adolfoquiroz@gmail.com', '', '1998-12-25', '12345', 0),
(6, 'damaris', 789789090, 987665466, 'damaris1207@gmail.com', '', '1999-01-17', '12345', 0),
(7, 'yepi', 987898788, 954311123, 'yepi@outlook.es', '', '2000-02-08', '12345', 0),
(8, 'isaac', 987881123, 998903561, 'isaac@hotmail.com', '', '2003-06-08', '12345', 0),
(9, 'mabel', 967890123, 998876423, 'mabel@gmail.com', '', '2000-02-08', '12345', 0),
(10, 'britany', 768989766, 989731234, 'bryta@gamil.com', '', '1990-07-12', '123456', 0),
(11, 'manuel', 876121211, 982334566, 'manuelbone@gmail.com', '', '1988-02-08', '12345', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id_carac`),
  ADD UNIQUE KEY `id_fases` (`id_fases`);

--
-- Indices de la tabla `fases`
--
ALTER TABLE `fases`
  ADD PRIMARY KEY (`id_fases`);

--
-- Indices de la tabla `imagenes_plaga`
--
ALTER TABLE `imagenes_plaga`
  ADD PRIMARY KEY (`id_ima`),
  ADD UNIQUE KEY `id_produc` (`id_produc`),
  ADD UNIQUE KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `plaga`
--
ALTER TABLE `plaga`
  ADD PRIMARY KEY (`id_plaga`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`id_produc`),
  ADD UNIQUE KEY `id_usu` (`id_usu`);

--
-- Indices de la tabla `produccion_plaga`
--
ALTER TABLE `produccion_plaga`
  ADD PRIMARY KEY (`id_produc_plaga`),
  ADD UNIQUE KEY `id_produc` (`id_produc`),
  ADD UNIQUE KEY `id_fases` (`id_fases`),
  ADD UNIQUE KEY `id_plaga` (`id_plaga`);

--
-- Indices de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD PRIMARY KEY (`id_reco`),
  ADD UNIQUE KEY `id_fases` (`id_fases`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id_carac` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fases`
--
ALTER TABLE `fases`
  MODIFY `id_fases` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes_plaga`
--
ALTER TABLE `imagenes_plaga`
  MODIFY `id_ima` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plaga`
--
ALTER TABLE `plaga`
  MODIFY `id_plaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id_produc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `produccion_plaga`
--
ALTER TABLE `produccion_plaga`
  MODIFY `id_produc_plaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  MODIFY `id_reco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD CONSTRAINT `caracteristicas_ibfk_1` FOREIGN KEY (`id_fases`) REFERENCES `fases` (`id_fases`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes_plaga`
--
ALTER TABLE `imagenes_plaga`
  ADD CONSTRAINT `imagenes_plaga_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imagenes_plaga_ibfk_2` FOREIGN KEY (`id_produc`) REFERENCES `produccion` (`id_produc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `produccion_ibfk_1` FOREIGN KEY (`id_usu`) REFERENCES `usuario` (`id_usu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `produccion_plaga`
--
ALTER TABLE `produccion_plaga`
  ADD CONSTRAINT `produccion_plaga_ibfk_2` FOREIGN KEY (`id_produc`) REFERENCES `produccion` (`id_produc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produccion_plaga_ibfk_3` FOREIGN KEY (`id_fases`) REFERENCES `fases` (`id_fases`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produccion_plaga_ibfk_4` FOREIGN KEY (`id_plaga`) REFERENCES `plaga` (`id_plaga`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD CONSTRAINT `recomendaciones_ibfk_1` FOREIGN KEY (`id_fases`) REFERENCES `fases` (`id_fases`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
