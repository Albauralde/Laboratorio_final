-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2023 a las 14:02:57
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
-- Base de datos: `cursosql`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `nombre` varchar(20) NOT NULL,
  `primer_apellido` varchar(20) NOT NULL,
  `segundo_apellido` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `_login` varchar(20) NOT NULL,
  `_password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`nombre`, `primer_apellido`, `segundo_apellido`, `email`, `_login`, `_password`) VALUES
('Alba', 'Fernandez', 'Lopez', 'albafernandezlopez@gmail.com', 'albafernandezlopez', 'bytfv'),
('Dani', 'Lopez', 'Lopez', 'danilopezlopez@gmail.com', 'danilopezlopez', '876gi'),
('Fran', 'Garcia', 'Perez', 'frangarciaperez@gmail.com', 'frangarciaperez', '65e6rft'),
('Jaime', 'Garcia', 'Garcia', 'jaimegarciagarcia@gmail.com', 'jaimegarciagarcia', '76fgtu'),
('Jose', 'Sanz', 'Ruiz', 'josesanzruiz@gmail.com', 'josesanzruiz', '7g75nu'),
('Laura', 'Casas', 'Casas', 'lauracasascasas@gmail.com', 'lauracasascasas', '1223ert'),
('Marta', 'Pozo', 'Pozo', 'martapozopozo@gmail.com', 'martapozopozo', 'ytuvy'),
('Raquel', 'Diaz', 'Diaz', 'raqueldiazdiaz@gmail.com', 'raqueldiazdiaz', '5678fthh'),
('Sara', 'Cruces', 'Cruces', 'saracrucescruces@gmail.com', 'saracrucescruces', '867yg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`,`_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
