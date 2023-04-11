-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2023 a las 20:53:37
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica_3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `Id_lugar` int(11) NOT NULL,
  `nombre_lugar` varchar(55) NOT NULL,
  `descripcion` text NOT NULL,
  `telefono_lugar` varchar(55) NOT NULL,
  `email_lugar` varchar(55) NOT NULL,
  `Facebook` varchar(55) NOT NULL,
  `horario` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lugar`
--

INSERT INTO `lugar` (`Id_lugar`, `nombre_lugar`, `descripcion`, `telefono_lugar`, `email_lugar`, `Facebook`, `horario`) VALUES
(1, 'Tepito', 'peligroso', '5528903541', 'tepito_tepicare@gmail.com', '', '7:00 A.M. - 7:00 P.M'),
(2, 'Tepito', 'peligroso', '5528903541', 'tepito_tepicare@gmail.com', 'Tepito', '7:00 A.M. - 7:00 P.M'),
(3, 'Tepito', 'peligroso', '5528903541', 'tepito_tepicare@gmail.com', 'Tepito', '7:00 A.M. - 7:00 P.M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantel`
--

CREATE TABLE `plantel` (
  `Id_plantel` int(11) NOT NULL,
  `nombre_plantel` varchar(55) NOT NULL,
  `clave_plantel` varchar(55) NOT NULL,
  `direccion_plantel` varchar(55) NOT NULL,
  `telefono_plantel` varchar(55) NOT NULL,
  `responsable` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `plantel`
--

INSERT INTO `plantel` (`Id_plantel`, `nombre_plantel`, `clave_plantel`, `direccion_plantel`, `telefono_plantel`, `responsable`) VALUES
(1, 'conalep', 'con4l3p', 'naucalpan', '5567830978', 'director'),
(2, 'conalep', 'con4l3p', 'naucalpan', '5567830978', 'director');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellidos` varchar(55) NOT NULL,
  `direccion` varchar(55) NOT NULL,
  `telefono` varchar(55) NOT NULL,
  `fecha_nac` date NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usuario`, `nombre`, `apellidos`, `direccion`, `telefono`, `fecha_nac`, `email`) VALUES
(1, 'Daniel', 'Leon Alvarez', 'nose88', '55-98-86-56-34', '05-11-04', 'dani07@gmail.com'),
(2, 'Miguel', 'Hernandez Jacinto', 'micasa', '55-09-67-54-10', '06-10-04', 'migue@hotmail.com'),
(3, 'Hugo', 'Narvaez Martinez', 'notengo', '55-78-32-65-09', '28-06-05', 'hugo@hotmail.com'),
(4, 'Diego', 'Gonzalez Ruiz', 'La calle de abajo', '55-60-90-90-90', '09-12_05', 'diego@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`Id_lugar`);

--
-- Indices de la tabla `plantel`
--
ALTER TABLE `plantel`
  ADD PRIMARY KEY (`Id_plantel`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `Id_lugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `plantel`
--
ALTER TABLE `plantel`
  MODIFY `Id_plantel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `usuario`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
