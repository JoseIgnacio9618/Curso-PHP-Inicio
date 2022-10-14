-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2022 a las 11:59:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Foto nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_slovenian_ci NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id`, `Nombre`, `Categoria`, `Foto nombre`, `Precio`) VALUES
(1, 'Batman Zombie', 'Juguete', 'juguete01.jpg', 15),
(2, 'Capitán América', 'Juguete', 'juguete02.jpg', 20),
(3, 'Thanos', 'Juguete', 'juguete03.jpg', 50),
(4, 'Mysterio', 'Juguete', 'juguete04.jpg', 20),
(5, 'Shazam', 'Juguete', 'juguete05.jpg', 30),
(6, 'Stich', 'Juguete', 'juguete06.jpg', 5),
(7, 'El principito', 'Libro', 'libro01.jpg', 15),
(8, 'El arte de amar', 'Libro', 'libro02.jpg', 20),
(9, 'Juego de tronos', 'Libro', 'libro03.jpg', 35),
(10, 'Cien años de soledad', 'Libro', 'libro04.jpg', 20),
(11, 'Becoming', 'Libro', 'libro05.jpg', 100),
(12, 'Eres un chingon', 'Libro', 'libro06.jpg', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
