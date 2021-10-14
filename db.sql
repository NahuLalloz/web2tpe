-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2021 a las 16:24:31
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(240) NOT NULL,
  `precio` int(11) NOT NULL,
  `caracteristicas` varchar(240) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id_producto`, `nombre`, `precio`, `caracteristicas`,`stock`,`id_categoria`) VALUES
(1, 'Celular Android 10', '24000', Android 10 pantalla IPS, 6, 2),
(2, 'Celular Android 9.1', '14000', Android 9 camara 13mpx, 10, 3),
(3, 'Iphone X', '100000', Pantalla OLED de 5.8, 1, 4),
(4, 'Iphone 6 plus', '40000', Resolución de 1920 x 1080 pixeles a 401 ppi, 0, 5)


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Marca`
--

CREATE TABLE `Marca` (
  `id_marca` int(11) NOT NULL,
  `color` varchar(240) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Marca`
--

INSERT INTO `kit` (`id_marca`, `color`) VALUES
(1, 'Negro' ),
(10, 'Rose Gold'),
(2, 'Blanco' ),
(10, 'Gris')


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(240) NOT NULL,
  `contraseña` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_usuario`, `email`, `contraseña`) VALUES
(1, 'enri@gmail.com', '$NUe74ttumbQSvN7ygdghknrJNedcG8RSYjZnRZ67T1qSH1kWDJpR806jmeGT9En0R85wMD28Ketgde5X'),
(2, 'ernesto@gmail.com', '$y5ZMmHJX3cpWp5Vmqw2NkTfg55nFCa6VdBNCT757nAg4tj1karaZNT6zQjhCwRxqAxqVu2dAV5UEZfNe'),
(3, 'ramon@hotmail.com', '$9Mx2j9p3ZUTbFsZSFvbsPYEvPXP6awYSxN3SuTUt3gzSCfPhFbTuCtgBnCFrxYEnpxJreVxsmwwv9pQx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gabinete`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `kit`
--
ALTER TABLE `Marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD KEY `fk_celulares` (`id_marca`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gabinete`
--
ALTER TABLE `Producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `kit`
--
ALTER TABLE `Marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `kit`
--
ALTER TABLE `Marca`
  ADD CONSTRAINT `marca_mbfk_1` FOREIGN KEY (`id_marca`) REFERENCES `Producto` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;