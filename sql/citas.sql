-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2015 a las 18:03:42
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
`idalumno` int(11) NOT NULL,
  `nombre1` varchar(100) NOT NULL,
  `nombre2` varchar(100) NOT NULL,
  `apellido1` varchar(100) NOT NULL,
  `apellido2` varchar(100) NOT NULL,
  `convencional` varchar(50) NOT NULL,
  `movil` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anio_lectivo`
--

CREATE TABLE IF NOT EXISTS `anio_lectivo` (
`anio_lectivo_id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE IF NOT EXISTS `cita` (
`idcita` int(11) NOT NULL,
  `idRepresentante` int(11) NOT NULL,
  `idDocente` int(11) NOT NULL,
  `hora` varchar(6) NOT NULL,
  `dia` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idcita`, `idRepresentante`, `idDocente`, `hora`, `dia`) VALUES
(2, 1, 0, '10 AM', 'Miercoles'),
(3, 3, 1, '8 AM', 'Lunes'),
(4, 3, 2, '8 AM', 'Lunes'),
(5, 3, 1, '8 AM', 'Martes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE IF NOT EXISTS `docente` (
`iddocente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`iddocente`, `nombre`, `estado`) VALUES
(1, 'Anibal Saltos', '1'),
(2, 'Cristhian Brunis', '0'),
(3, 'Carlos Perez', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE IF NOT EXISTS `encuesta` (
`idencuesta` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`idencuesta`, `descripcion`, `estado`) VALUES
(1, 'Evaluacion Docentes', '1'),
(2, 'Evaluacion instalaciones', '0'),
(3, 'Test Estudiantes', '1'),
(4, 'PRUEBA 03/02/2015', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
`idinstitucion` int(10) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idinstitucion`, `descripcion`, `estado`) VALUES
(1, 'San Benildo', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE IF NOT EXISTS `pregunta` (
`idpregunta` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`idpregunta`, `descripcion`, `estado`) VALUES
(1, '¿Ayuda a su hijo para que tenga un buen rendimiento académico?', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE IF NOT EXISTS `representante` (
`idrepresentante` int(13) NOT NULL,
  `nombre1` varchar(20) NOT NULL,
  `nombre2` varchar(20) NOT NULL,
  `apellido1` varchar(20) NOT NULL,
  `apellido2` varchar(20) NOT NULL,
  `convencional` varchar(20) NOT NULL,
  `movil` varchar(20) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `representante`
--

INSERT INTO `representante` (`idrepresentante`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `convencional`, `movil`, `direccion`, `email`, `estado`, `usuario`, `password`) VALUES
(1, 'Maria', 'Jose', 'Sanclemente', 'Barreiro', '232425', '09821893287', 'Florida Norte', 'mjose@gmail.com', '1', '', ''),
(3, 'Kevin', 'Rafael', 'Burgos', 'Santacruz', '22388', '09818392287', 'Francisco Jacome', 'defonix0@gmail.com', '1', '', ''),
(4, 'Joel', 'Ricardo', 'Vaca', 'Collahuazo', '222333', '098765543', 'Alborada XI etapa, Torres de la Alborada, Bloque B', 'jowpris001@gmail.com', '1', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE IF NOT EXISTS `salon` (
`idsalon` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `estado` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`idsalon`, `descripcion`, `estado`) VALUES
(1, 'Aula 201-Audivisual', '1'),
(2, 'Aula 200-Laboratorio', '1'),
(3, 'Aula 202-Salon', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idusuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `idRepresentante` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `password`, `idRepresentante`) VALUES
(1, 'mjose', 'defonix12', 1),
(3, 'ksantacr', 'Defonimix1', 3),
(4, 'joel', '123', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
 ADD PRIMARY KEY (`idalumno`);

--
-- Indices de la tabla `anio_lectivo`
--
ALTER TABLE `anio_lectivo`
 ADD PRIMARY KEY (`anio_lectivo_id`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
 ADD PRIMARY KEY (`idcita`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
 ADD PRIMARY KEY (`iddocente`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
 ADD PRIMARY KEY (`idencuesta`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
 ADD PRIMARY KEY (`idinstitucion`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
 ADD PRIMARY KEY (`idpregunta`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
 ADD PRIMARY KEY (`idrepresentante`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
 ADD PRIMARY KEY (`idsalon`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
MODIFY `idalumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `anio_lectivo`
--
ALTER TABLE `anio_lectivo`
MODIFY `anio_lectivo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
MODIFY `idcita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
MODIFY `iddocente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
MODIFY `idencuesta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
MODIFY `idinstitucion` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
MODIFY `idpregunta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
MODIFY `idrepresentante` int(13) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
MODIFY `idsalon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
