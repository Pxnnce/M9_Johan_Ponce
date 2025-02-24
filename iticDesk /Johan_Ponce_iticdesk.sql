-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 23-02-2025 a las 22:24:32
-- Versión del servidor: 8.0.40-0ubuntu0.24.04.1
-- Versión de PHP: 8.3.6


CREATE USER johan1 IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON *.* TO johan1;
FLUSH PRIVILEGES ;

CREATE DATABASE Johan_Ponce_iticdesk;
USE Johan_Ponce_iticdesk;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Johan_Ponce_iticdesk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidencies`
--

CREATE TABLE `incidencies` (
  `ref_incidencies` varchar(10) COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  `titol` varchar(100) COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  `descripcio` text COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  `data_creacio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estat` enum('Oberta','Gestió','Tancada','Reoberta') COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL DEFAULT 'Oberta',
  `prioritat` enum('Tipus I','Tipus II','Tipus III','Tipus IV') COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  `creada_per` varchar(255) COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `DNI` varchar(9) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Mail` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Rol` varchar(20) NOT NULL,
  `Contraseña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`DNI`, `Nombre`, `Apellido`, `Mail`, `Rol`, `Contraseña`) VALUES
('54134756O', 'Oscar', 'Mayer', 'osma@mail.com', 'Administrador ', 'osca123'),
('54178970P', 'Laura', 'Lopez', 'lalo@gmail.com', 'Profesor', 'lalo123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
