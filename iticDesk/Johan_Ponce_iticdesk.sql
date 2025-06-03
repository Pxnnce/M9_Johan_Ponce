-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/

CREATE USER IF NOT EXISTS `johan1` IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON *.* TO `johan1`;
FLUSH PRIVILEGES ;

CREATE DATABASE IF NOT EXISTS `Johan_Ponce_iticdesk` CHARACTER SET utf8mb4 COLLATE utf8mb4_de_pb_0900_ai_ci;
USE `Johan_Ponce_iticdesk`;

--
-- Estructura de tabla para la tabla `incidencies`
--
CREATE TABLE `incidencies` (
  `ref_incidencies` VARCHAR(10) COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  `titol` VARCHAR(100) COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  `descripcio` TEXT COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  `data_creacio` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estat` ENUM('Oberta','Gestió','Tancada','Reoberta') COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL DEFAULT 'Oberta',
  `prioritat` ENUM('Tipus I','Tipus II','Tipus III','Tipus IV') COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  `creada_per` VARCHAR(255) COLLATE utf8mb4_de_pb_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ref_incidencies`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci;

--
-- Estructura de tabla para la tabla `Usuarios`
--
CREATE TABLE `Usuarios` (
  `DNI` VARCHAR(9) NOT NULL,
  `Nombre` VARCHAR(20) NOT NULL,
  `Apellido` VARCHAR(20) NOT NULL,
  `Mail` VARCHAR(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Rol` VARCHAR(20) NOT NULL,
  `Contraseña` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_de_pb_0900_ai_ci;
