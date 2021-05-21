-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2021 a las 19:41:19
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `refugioanimal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoptantes`
--

CREATE TABLE `adoptantes` (
  `IdAdoptante` int(4) NOT NULL,
  `adoIdentificacion` int(12) NOT NULL,
  `adoNombres` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `adoApellidos` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `adoFechaNacimiento` date NOT NULL,
  `adoGenero` enum('Femenino','Masculino') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `adoTelefono` int(12) NOT NULL,
  `adoDireccion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `adoCorreo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `aniComAdoptado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animalesdecompania`
--

CREATE TABLE `animalesdecompania` (
  `idAnimaldeCompania` int(4) NOT NULL,
  `aniComCodigo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `aniComNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `aniComTipo` enum('Perruno','Gatuno') COLLATE utf8_spanish_ci NOT NULL,
  `aniComRaza` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `aniComColor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `aniComGenero` enum('Hembra','Macho') COLLATE utf8_spanish_ci NOT NULL,
  `aniComEdad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `aniComObservaciones` enum('ADOPTADO','PARA ADOPCION') COLLATE utf8_spanish_ci DEFAULT NULL,
  `nomAdoptante` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `idCargo` int(11) NOT NULL,
  `carNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `carSueldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `idConsultorio` int(11) NOT NULL,
  `conNumero` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `conEspecialidad` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` int(12) NOT NULL,
  `empIdentificacion` int(12) NOT NULL,
  `empNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `empFechaIngreso` date NOT NULL,
  `empCorreo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `empGenero` enum('Masculino','Femenino') COLLATE utf8_spanish_ci NOT NULL,
  `empCargo` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotosmascotas`
--

CREATE TABLE `fotosmascotas` (
  `codigo` int(11) NOT NULL,
  `idAnimaldeCompania` int(4) DEFAULT NULL,
  `aniComNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiasclinicas`
--

CREATE TABLE `historiasclinicas` (
  `numHistoria` int(11) NOT NULL,
  `idAnimaldeCompania` int(4) NOT NULL,
  `aniComNombre` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hisFechCreacion` date NOT NULL,
  `hisFechModificacion` date DEFAULT NULL,
  `hisObservaciones` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicosveterinarios`
--

CREATE TABLE `medicosveterinarios` (
  `idMedico` int(11) NOT NULL,
  `idConsultorio` int(4) NOT NULL,
  `medIdentificacion` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `medNombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medApellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medEspecialidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medTelefono` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `medCorreo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenestrabajo`
--

CREATE TABLE `ordenestrabajo` (
  `codigo` int(12) NOT NULL,
  `numeroConsecutivo` int(12) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tipoDocumento` enum('cedCiudadania','cedExtranjeria','Pasaporte') COLLATE utf8_spanish_ci NOT NULL,
  `numeroDocumento` int(12) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(12) NOT NULL,
  `servicio` enum('Mantenimiento','Reparacion','Actualizacion') COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `clase` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `procesador` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `teclado` enum('0','1','2','3','4','5') COLLATE utf8_spanish_ci NOT NULL,
  `placaBase` enum('0','1','2','3','4','5') COLLATE utf8_spanish_ci NOT NULL,
  `memoria` enum('0','1','2','3','4','5') COLLATE utf8_spanish_ci NOT NULL,
  `discoDuro` enum('0','1','2','3','4','5') COLLATE utf8_spanish_ci NOT NULL,
  `tarjetaRed` enum('0','1','2','3','4','5') COLLATE utf8_spanish_ci NOT NULL,
  `torre` enum('0','1','2','3','4','5') COLLATE utf8_spanish_ci NOT NULL,
  `audio` enum('0','1','2','3','45','') COLLATE utf8_spanish_ci NOT NULL,
  `monitor` enum('0','1','2','3','4','5') COLLATE utf8_spanish_ci NOT NULL,
  `tarjetaVideo` enum('0','1','2','3','4','5') COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `nombreTecnico` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tratamientos`
--

CREATE TABLE `tratamientos` (
  `idTratamiento` int(11) NOT NULL,
  `tratFecha` date NOT NULL,
  `tratHora` time NOT NULL,
  `idAnimaldeCompania` int(4) NOT NULL,
  `idMedico` int(4) NOT NULL,
  `medNombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `medApellidos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `aniComNombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `tratEstado` enum('Asignado','Atendido') COLLATE utf8_spanish_ci NOT NULL DEFAULT 'Asignado',
  `tratObservaciones` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `idEmpleado` int(12) NOT NULL,
  `usuNombres` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usuLogin` char(15) COLLATE utf8_spanish_ci NOT NULL,
  `usuPassword` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `usuEstado` enum('Activo','Inactivo') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `idEmpleado`, `usuNombres`, `usuLogin`, `usuPassword`, `usuEstado`) VALUES
(1, 0, '', 'RefugioAnimal', '53539ff56e9856c6d6bc7b3dceac5c60', 'Activo'),
(2, 0, '', 'Secretaria', '866146cbaa4347785e6305eb229aaeb5', 'Activo'),
(3, 0, '', 'Medveterinaria', 'c42530162f241468e9511eccde0f4653', 'Activo'),
(5, 0, '', 'Tecnico', 'd644160184a67275626a1094b3729814', 'Activo'),
(6, 0, '', 'Administrador', '2a2e9a58102784ca18e2605a4e727b5f', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitantes`
--

CREATE TABLE `visitantes` (
  `idVisitante` int(11) NOT NULL,
  `identificacion` int(12) NOT NULL,
  `nombres` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `claseVisita` enum('INFORMAL','CITA','INFORMACION','visitaINSTALACIONES','SUPERVISION') COLLATE utf8_spanish_ci NOT NULL,
  `dependencia` enum('RECEPCION','GERENCIA','ADMINISTRACION','CONTABILIDAD','areaVETERINARIA','areaLOGISTICA','areaMANTENIMIENTO','almacenPROVISIONES') COLLATE utf8_spanish_ci NOT NULL,
  `funcionario` enum('RECEPCIONISTA','SECRETARIA','GERENTE','ADMINISTRADOR','medVETERINARIO','jefeLOGISTICO','asesorADOPCIONES','CONTADOR','INSTALACIONES') COLLATE utf8_spanish_ci NOT NULL,
  `fechaIngreso` date NOT NULL,
  `hora` time NOT NULL,
  `horaSalida` time DEFAULT NULL,
  `observaciones` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='claseVisita';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adoptantes`
--
ALTER TABLE `adoptantes`
  ADD PRIMARY KEY (`IdAdoptante`),
  ADD UNIQUE KEY `fk_idAdoptante` (`aniComAdoptado`),
  ADD UNIQUE KEY `adoNombres` (`adoNombres`);

--
-- Indices de la tabla `animalesdecompania`
--
ALTER TABLE `animalesdecompania`
  ADD PRIMARY KEY (`idAnimaldeCompania`),
  ADD UNIQUE KEY `aniComCodigo` (`aniComCodigo`),
  ADD UNIQUE KEY `aniComNombre` (`aniComNombre`),
  ADD KEY `aniComCodigo_2` (`aniComCodigo`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`idCargo`),
  ADD UNIQUE KEY `carNombre` (`carNombre`),
  ADD KEY `carNombre_2` (`carNombre`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`idConsultorio`),
  ADD UNIQUE KEY `conNumero` (`conNumero`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD UNIQUE KEY `empIdentificacion` (`empIdentificacion`),
  ADD KEY `fk_cargo` (`empCargo`) USING BTREE;

--
-- Indices de la tabla `fotosmascotas`
--
ALTER TABLE `fotosmascotas`
  ADD PRIMARY KEY (`codigo`,`aniComNombre`);

--
-- Indices de la tabla `historiasclinicas`
--
ALTER TABLE `historiasclinicas`
  ADD PRIMARY KEY (`numHistoria`),
  ADD UNIQUE KEY `hisAniComNombre` (`aniComNombre`);

--
-- Indices de la tabla `medicosveterinarios`
--
ALTER TABLE `medicosveterinarios`
  ADD PRIMARY KEY (`idMedico`),
  ADD UNIQUE KEY `medIdentificacion` (`medIdentificacion`),
  ADD UNIQUE KEY `medEspecialidad` (`medEspecialidad`),
  ADD UNIQUE KEY `medNombres` (`medNombres`);

--
-- Indices de la tabla `ordenestrabajo`
--
ALTER TABLE `ordenestrabajo`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `numeroConsecutivo` (`numeroConsecutivo`);

--
-- Indices de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  ADD PRIMARY KEY (`idTratamiento`),
  ADD KEY `fk_animalesdeCompania` (`idAnimaldeCompania`),
  ADD KEY `fk_medicosveterinarios` (`idMedico`);

--
-- Indices de la tabla `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`idVisitante`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adoptantes`
--
ALTER TABLE `adoptantes`
  MODIFY `IdAdoptante` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `animalesdecompania`
--
ALTER TABLE `animalesdecompania`
  MODIFY `idAnimaldeCompania` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  MODIFY `idConsultorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `fotosmascotas`
--
ALTER TABLE `fotosmascotas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `historiasclinicas`
--
ALTER TABLE `historiasclinicas`
  MODIFY `numHistoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `medicosveterinarios`
--
ALTER TABLE `medicosveterinarios`
  MODIFY `idMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ordenestrabajo`
--
ALTER TABLE `ordenestrabajo`
  MODIFY `codigo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tratamientos`
--
ALTER TABLE `tratamientos`
  MODIFY `idTratamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `visitantes`
--
ALTER TABLE `visitantes`
  MODIFY `idVisitante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historiasclinicas`
--
ALTER TABLE `historiasclinicas`
  ADD CONSTRAINT `hisAniComNombre` FOREIGN KEY (`aniComNombre`) REFERENCES `animalesdecompania` (`aniComNombre`);

--
-- Filtros para la tabla `medicosveterinarios`
--
ALTER TABLE `medicosveterinarios`
  ADD CONSTRAINT `medicos_ib_2` FOREIGN KEY (`idMedico`) REFERENCES `consultorios` (`idConsultorio`),
  ADD CONSTRAINT `medicos_ibfk_1` FOREIGN KEY (`idMedico`) REFERENCES `consultorios` (`idConsultorio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
