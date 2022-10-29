-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2022 a las 04:34:08
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
-- Base de datos: `base_ssp_cera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iph`
--

CREATE TABLE `iph` (
  `FolioIPH` int(11) NOT NULL,
  `Fecha` date NOT NULL COMMENT 'SECCION 1.- Fecha Puesta a Disposicion',
  `HoraPuesta` time NOT NULL COMMENT 'SECCION 1.- Hora de la Puesta 24 hrs',
  `ApellidoPaterno` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'ANEXO A.2 Apellido Paterno del Detenido',
  `ApellidoMaterno` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'ANEXO A.2 Apellido Materno del Detenido',
  `Nombres` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'ANEXO A.2 Nombres del Detenido',
  `Alias` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'ANEXO A.2',
  `Nacionalidad` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'ANEXO A.2',
  `FechaNacimiento` date NOT NULL COMMENT 'ANEXO A.2 Fecha Nacimiento del Detenido',
  `Sexo` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'ANEXO A.2 Sexo del Detenido',
  `Ocupacion` text COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` mediumint(9) NOT NULL COMMENT 'Telefono del Detenido',
  `Domicilio` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'ANEXO A.2 Domicilio del Detenido',
  `Hechos` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'SECCION 4.- Hechos de la Falta Cometida',
  `1erApellido Respondiente` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'APARTADO 1.2 Nombre del Oficial que realiza la Detencion',
  `2doApellido Respondiente` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'APARTADO 1.2',
  `Nombres Respondiente` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'APARTADO 1.2',
  `NumerodeUnidad` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Numero de Unidad que Entrega Detenido',
  `Autoridad` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'APARTADO 1.2 Autoridad que lleva a Barandilla',
  `Narrativa Hechos` text COLLATE utf8_spanish_ci NOT NULL,
  `FechaDetencion` date NOT NULL COMMENT 'APARTADO A.1 - Fecha de la Detencion',
  `Hora Detencion` time NOT NULL COMMENT 'APARTADO A.1 - Hora de la Detencion',
  `RND` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'APARTADO A - Numero de Detencion (RND)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `iph`
--

INSERT INTO `iph` (`FolioIPH`, `Fecha`, `HoraPuesta`, `ApellidoPaterno`, `ApellidoMaterno`, `Nombres`, `Alias`, `Nacionalidad`, `FechaNacimiento`, `Sexo`, `Ocupacion`, `Telefono`, `Domicilio`, `Hechos`, `1erApellido Respondiente`, `2doApellido Respondiente`, `Nombres Respondiente`, `NumerodeUnidad`, `Autoridad`, `Narrativa Hechos`, `FechaDetencion`, `Hora Detencion`, `RND`) VALUES
(1, '2022-10-27', '17:00:00', 'LOMAS', 'DEL VALLE', 'SAUL', 'NULL', 'NULL', '1984-07-05', 'Hombre', 'SOLDADOR', 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MT-300', 'Policia Municipal', 'NULL', '0000-00-00', '00:00:00', 'NULL'),
(2, '2022-10-27', '19:00:00', 'ROSAS', 'MELCACHO', 'MARIANA', 'NULL', 'NULL', '1987-06-05', 'Mujer', 'EMPLEADA DOMESTICA', 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MT-34', 'Policia Mando Unico', 'NULL', '0000-00-00', '00:00:00', 'NULL'),
(3, '2022-10-27', '19:00:00', 'RAMONES', 'PANTROS', 'LUIS', 'NULL', 'NULL', '1983-11-05', 'Hombre', 'SOLDADOR', 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MW-333', 'Guardia Nacional', 'NULL', '0000-00-00', '00:00:00', 'NULL'),
(4, '2022-10-27', '02:00:00', 'LOPEZ', 'LOPEZ', 'AMANDITITITA', 'NULL', 'NULL', '2003-08-05', 'Mujer', 'EN LA CALLE', 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MR-22', 'Policia Federal Ministerial', 'NULL', '0000-00-00', '00:00:00', 'NULL'),
(5, '2022-10-27', '02:00:00', 'LOMAS', 'TAURINAS', 'RAUL', 'NULL', 'NULL', '1999-09-16', 'Hombre', 'MILITAR', 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'ME-33', 'Policia Municipal', 'NULL', '0000-00-00', '00:00:00', 'NULL'),
(6, '2022-10-27', '14:30:00', 'MARTINEZ', 'MARTINEZ', 'LUIS MARIO', 'NULL', 'NULL', '2000-07-07', 'Hombre', 'CARPINTERO', 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MR-34', 'Policia Mando Unico', 'NULL', '0000-00-00', '00:00:00', 'NULL'),
(7, '2022-10-27', '02:30:00', 'ALTOZANO', 'ALTONANO', 'CARLOS', 'NULL', 'NULL', '1985-06-15', 'Hombre', 'NO DIJO', 0, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'MW-303', 'Guardia Nacional', 'NULL', '0000-00-00', '00:00:00', 'NULL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preiph`
--

CREATE TABLE `preiph` (
  `FolioIPH` int(11) NOT NULL,
  `FechaIngresoResguardo` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Pre-IPH',
  `Turno` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH',
  `ApellidoPaterno` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH Apellido Paterno',
  `ApellidoMaterno` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH Apellido Materno',
  `Nombres` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH Nombres',
  `Sexo` text COLLATE utf8_spanish_ci NOT NULL,
  `FechaNacimiento` date NOT NULL COMMENT 'Pre-IPH Fecha de Nacimiento',
  `Edad` int(3) NOT NULL COMMENT 'Pre-IPH. SE CALCULA segun Fecha de Nacimiento.',
  `LugardeNacimiento` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH Lugar de Nacimiento',
  `Ocupacion` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH Ocupacion',
  `HoraEntrada` time NOT NULL DEFAULT current_timestamp() COMMENT 'Pre-IPH Hora de Entrada a Barandilla',
  `NumUnidad` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH Numero de Unidad',
  `Autoridad` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH Autoridad',
  `FaltaAdministrativa` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH',
  `CertificacionMedica` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH',
  `NombreElementoSolicitaCertificacion` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Pre-IPH'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `preiph`
--

INSERT INTO `preiph` (`FolioIPH`, `FechaIngresoResguardo`, `Turno`, `ApellidoPaterno`, `ApellidoMaterno`, `Nombres`, `Sexo`, `FechaNacimiento`, `Edad`, `LugardeNacimiento`, `Ocupacion`, `HoraEntrada`, `NumUnidad`, `Autoridad`, `FaltaAdministrativa`, `CertificacionMedica`, `NombreElementoSolicitaCertificacion`) VALUES
(1, '2022-10-28 02:01:12', 'A', 'LOMAS', 'DEL VALLE', 'SAUL', 'Hombre', '1984-07-05', 38, 'MORELIA', 'SOLDADOR', '17:00:00', 'MT-300', 'Policia Municipal', 'ESCANDALO EN LA VIA PUBLICA EN EL CENTRO DE MORELIA', 'Certificacion para Fiscalia', 'RAUL LOMAS TAURINAS'),
(2, '2022-10-28 02:02:17', 'C', 'ROSAS', 'MELCACHO', 'MARIANA', 'Mujer', '1987-06-05', 35, 'EL HABILLAL', 'EMPLEADA DOMESTICA', '19:00:00', 'MT-34', 'Policia Mando Unico', 'TOMAR EN LA VIA PUBLICA EN EL CENTRO DE MORELIA', '', ''),
(3, '2022-10-28 02:08:39', 'B', 'RAMONES', 'PANTROS', 'LUIS', 'Hombre', '1983-11-05', 38, 'MORELIA', 'SOLDADOR', '19:00:00', 'MW-333', 'Guardia Nacional', 'ESCANDALO EN LA VIA PUBLICA', '', ''),
(4, '2022-10-28 02:10:47', 'A', 'LOPEZ', 'LOPEZ', 'AMANDITITITA', 'Mujer', '2003-08-05', 19, 'MORELIA', 'EN LA CALLE', '02:00:00', 'MR-22', 'Policia Federal Ministerial', 'ROBO A MANO ARMADA.', '', ''),
(5, '2022-10-28 02:12:40', 'C', 'LOMAS', 'TAURINAS', 'RAUL', 'Hombre', '1999-09-16', 23, 'LAZARO CARDENAS', 'MILITAR', '02:00:00', 'ME-33', 'Policia Municipal', 'NINGUNA FALTA', 'Certificacion para Fiscalia', 'PEDRO PICA PIEDRA'),
(6, '2022-10-28 02:16:40', 'B', 'MARTINEZ', 'MARTINEZ', 'LUIS MARIO', 'Hombre', '2000-07-07', 22, 'MUGRELIA', 'CARPINTERO', '14:30:00', 'MR-34', 'Policia Mando Unico', 'NO SE QUE PONER', '', ''),
(7, '2022-10-28 02:25:25', 'B', 'ALTOZANO', 'ALTONANO', 'CARLOS', 'Hombre', '1985-06-15', 37, 'NO SE CUAL', 'NO DIJO', '02:30:00', 'MW-303', 'Guardia Nacional', 'QUISO ROBAR EN LA CALLE', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Modo Dios'),
(2, 'PreIPH'),
(3, 'Doctor'),
(4, 'IPH'),
(5, 'Tamizaje'),
(6, 'DBPI'),
(7, 'Juez'),
(8, 'Servicio a la Comunidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `rol_id`) VALUES
(1, 'Chupusa', 'acceso', 1),
(2, 'PreIPH', 'preiph', 2),
(3, 'Doctor', 'doctor', 3),
(4, 'IPH', 'iph', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `iph`
--
ALTER TABLE `iph`
  ADD KEY `FolioIPH` (`FolioIPH`);

--
-- Indices de la tabla `preiph`
--
ALTER TABLE `preiph`
  ADD PRIMARY KEY (`FolioIPH`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preiph`
--
ALTER TABLE `preiph`
  MODIFY `FolioIPH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `iph`
--
ALTER TABLE `iph`
  ADD CONSTRAINT `FolioIPH` FOREIGN KEY (`FolioIPH`) REFERENCES `preiph` (`FolioIPH`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_SSP` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
