-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2020 a las 18:06:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tutox`
--
CREATE DATABASE IF NOT EXISTS `bd_tutox` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_tutox`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_persona` ()  BEGIN
select idPersona v1,pers_dni v2,pers_nombre v3,pers_apellido v4,pers_correo v5,pers_fechaNac v6,pers_sexo v7,pers_direccion v8,pers_telefono v9,
case pers_sexo when  0 then 'Femenino' when  1 then 'Masculino'  end v10
from persona ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_persona` (IN `v_pDni` CHAR(8), IN `v_pNombre` VARCHAR(45), IN `v_pApellido` VARCHAR(45), IN `v_pCorreo` VARCHAR(45), IN `v_fechaNac` DATE, IN `v_pSexo` SMALLINT, IN `v_pDireccion` VARCHAR(45), IN `v_pTelefono` CHAR(9), OUT `v_res` BOOL)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
insert into persona
(pers_dni,pers_nombre,pers_apellido,pers_correo,pers_fechaNac,pers_sexo,pers_direccion,pers_telefono) 
values (v_pDni,v_pNombre,v_pApellido,v_pCorreo,v_fechaNac,v_pSexo,v_pDireccion,v_pTelefono);
commit;
set v_res=true;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `usuario` char(10) NOT NULL,
  `contraseña` char(15) NOT NULL,
  `idPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `pers_dni` char(8) NOT NULL,
  `pers_nombre` varchar(45) NOT NULL,
  `pers_apellido` varchar(45) NOT NULL,
  `pers_correo` varchar(45) NOT NULL,
  `pers_fechaNac` date NOT NULL,
  `pers_sexo` smallint(9) NOT NULL,
  `pers_direccion` varchar(45) NOT NULL,
  `pers_telefono` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idPersona`, `pers_dni`, `pers_nombre`, `pers_apellido`, `pers_correo`, `pers_fechaNac`, `pers_sexo`, `pers_direccion`, `pers_telefono`) VALUES
(7, '48365666', 'Miguel', 'Arenas', 'jjacinto_chicogym@hotmail.com', '2020-10-20', 1, 'sanjose', '992820062'),
(8, '73755441', 'leila cecilia', 'cordova ortiz', 'leila.cordova.6@gmail.com', '1999-01-27', 0, 'manuel pineda', '943514137'),
(9, '09614063', 'Diana', 'Ortiz', 'dortizluna24@gmail.com', '1984-02-24', 0, 'Manuel Pineda', '923331413');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`),
  ADD UNIQUE KEY `u_usuario` (`usuario`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`),
  ADD UNIQUE KEY `u_correo` (`pers_correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
