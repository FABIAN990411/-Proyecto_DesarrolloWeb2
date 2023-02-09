-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2022 a las 01:13:42
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `foto` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `clave`, `nombre`, `apellido`, `foto`, `rol`) VALUES
(1, 'admin', 'Admin1234', 'fabian', 'avila', 'Vistas/img/Usuarios/A-416.png', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `id_consultorio` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `nyaP` text NOT NULL,
  `documento` text NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `id_doctor`, `id_consultorio`, `id_paciente`, `nyaP`, `documento`, `inicio`, `fin`, `observaciones`) VALUES
(80, 32, 16, 0, 'Ronal Mercado Sotelo', '1006505815', '2022-12-13 08:00:00', '2022-12-13 09:00:00', ''),
(81, 32, 16, 66, 'Ronal Mercado Sotelo', '1001002003', '2022-12-14 08:00:00', '2022-12-14 09:00:00', ''),
(82, 33, 16, 66, 'Ronal Mercado Sotelo', '1001002003', '2022-12-13 12:00:00', '2022-12-13 13:00:00', ''),
(83, 32, 16, 69, 'Mario corena', '1089098', '2022-12-15 09:00:00', '2022-12-15 10:00:00', ''),
(84, 32, 16, 69, 'Mario corena', '1089098', '2022-12-13 10:00:00', '2022-12-13 11:00:00', ''),
(85, 32, 16, 66, 'Ronal Mercado Sotelo', '1001002003', '2022-12-13 09:00:00', '2022-12-13 10:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `consultorios`
--

INSERT INTO `consultorios` (`id`, `nombre`) VALUES
(16, 'Neumología'),
(18, 'Cardiología'),
(19, ' Odontología');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `id` int(11) NOT NULL,
  `id_consultorio` int(11) NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `foto` text NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `sexo` text NOT NULL,
  `horarioE` time NOT NULL,
  `horarioS` time NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`id`, `id_consultorio`, `apellido`, `nombre`, `foto`, `usuario`, `clave`, `sexo`, `horarioE`, `horarioS`, `rol`) VALUES
(32, 16, 'Mercado Sotelo', 'Jose Luis', '', 'jose', 'Jose1234', 'Masculino', '08:00:00', '12:00:00', 'Doctor'),
(33, 16, 'Ramos Oviedo', 'Elia Rosa', '', 'elia', 'Elia1234', 'Femenino', '12:00:00', '18:00:00', 'Doctor'),
(37, 19, 'perez', 'katyder', '', 'katider', 'Katider1234', 'Femenino', '00:00:00', '00:00:00', 'Doctor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `intro` text NOT NULL,
  `horaE` time NOT NULL,
  `horaS` time NOT NULL,
  `telefono` text NOT NULL,
  `correo` text NOT NULL,
  `direccion` text NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `intro`, `horaE`, `horaS`, `telefono`, `correo`, `direccion`, `logo`, `favicon`) VALUES
(1, 'Bienvenido Infomormacion Curar', '08:00:00', '19:00:00', '6047587436', 'CurarIPSSAS@gmail.com', 'CARRERA 12 13 21 BRR CENTRO ', 'Vistas/img/logo.jpeg', 'Vistas/img/favicon.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `apellido` text NOT NULL,
  `nombre` text NOT NULL,
  `documento` int(11) NOT NULL,
  `foto` text NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `apellido`, `nombre`, `documento`, `foto`, `usuario`, `clave`, `rol`) VALUES
(66, 'Mercado Sotelo', 'Ronal mercado', 1001002003, 'Vistas/img/Pacientes/Paciente231.png', 'ronal', 'Ronal1234', 'Paciente'),
(68, 'Mendoza', 'Yair', 1008009, '', 'Yair', 'Yair1234', 'Paciente'),
(69, 'corena', 'Mario', 1089098, '', 'mario', 'Mario1234', 'Paciente'),
(70, 'mercado', 'camilo', 1090909, '', 'camil', 'FAFAFF', 'Paciente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretarias`
--

CREATE TABLE `secretarias` (
  `id` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `clave` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `foto` text NOT NULL,
  `rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `secretarias`
--

INSERT INTO `secretarias` (`id`, `usuario`, `clave`, `nombre`, `apellido`, `foto`, `rol`) VALUES
(1, 'keila', 'Keila1234', 'Keila Andres', 'Avila Guerra', '', 'Secretaria');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `documento` (`documento`);

--
-- Indices de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `secretarias`
--
ALTER TABLE `secretarias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
