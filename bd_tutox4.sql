-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 22:56:19
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
-- Base de datos: `bd_tutox4`
--
CREATE DATABASE IF NOT EXISTS `bd_tutox4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_tutox4`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_agregar_favorito`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_agregar_favorito` (IN `v_codcurso` INT, IN `v_email` VARCHAR(45), OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
insert into curso_matriculado
(id_cur,per_corr) 
values (v_codcurso,v_email);
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_CambiarContraseña`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CambiarContraseña` (IN `v_email` VARCHAR(50), IN `v_clave2` TEXT, OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
update usuario set clave=v_clave2
where per_corr=v_email ;
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_contraporToken`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_contraporToken` (IN `v_email` VARCHAR(50), IN `v_token` INT, IN `v_pass` TEXT, OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
update usuario  
INNER join token
on token.email=usuario.per_corr
SET usuario.clave=v_pass
where usuario.per_corr=v_email and token.num_token=v_token;
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_eliminar_curso_favorito`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_eliminar_curso_favorito` (IN `v_idcurso` INT, IN `v_email` VARCHAR(50))  BEGIN
DELETE FROM curso_matriculado WHERE id_cur=v_idcurso AND per_corr=v_email;
END$$

DROP PROCEDURE IF EXISTS `sp_EnviartokenCorr`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_EnviartokenCorr` (IN `v_email` VARCHAR(50))  BEGIN

select email v1,num_token v2
from token
where email=v_email;

END$$

DROP PROCEDURE IF EXISTS `sp_listar_accesos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_accesos` (IN `v_id_user` INT)  BEGIN
select p.idpagina v1 ,concat
(p.controlador,p.metodo) v2
from accesos a inner join paginas p 
on a.idpagina=p.idpagina
inner join persona_tipo t
on t.id_tip_per=a.id_tip_per
where a.id_tip_per=v_id_user;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_bd`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_bd` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=6;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_categoria`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_categoria` ()  BEGIN
SELECT id_cat_cur v1, nom_cat_cur v2
FROM curso_categoria;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_bd`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_bd` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=6 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_corel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_corel` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=12 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_excel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_excel` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=2 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_facebook`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_facebook` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=4 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_illustrator`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_illustrator` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=10 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_indesign`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_indesign` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=11 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_photoshop`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_photoshop` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=9 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_php`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_php` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=8 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_power`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_power` ()  NO SQL
begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=3 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_programacion`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_programacion` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=5 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_sql`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_sql` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=7 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_comentario_word`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_comentario_word` ()  begin 
select id_com v1,comentario v2,fec_com v3,id_cur v4,per_corr v5 from comentario c where id_cur=1 ORDER by fec_com DESC;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_corel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_corel` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=12;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_curso`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_curso` ()  BEGIN
select id_cur v1,nom_cur v2,ima_cur v3,bot_cur v4
from curso;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_curso2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_curso2` ()  NO SQL
BEGIN
select c.id_cur v1,c.nom_cur v2,c.ima_cur v3,ca.nom_cat_cur v4
from curso c 
INNER JOIN curso_categoria ca 
ON c.id_cat_cur=ca.id_cat_cur;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_cursoavanzados`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_cursoavanzados` ()  BEGIN
select id_cur v1, nom_cur v2, ima_cur v3,bot_cur v4
from curso WHERE id_cat_cur=1;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_cursobasico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_cursobasico` ()  BEGIN
select id_cur v1, nom_cur v2, ima_cur v3,bot_cur v4
from curso WHERE id_cat_cur=0;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_cursocombo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_cursocombo` ()  BEGIN
SELECT id_cur v1, nom_cur v2 
FROM curso;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_cursodiseño`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_cursodiseño` ()  BEGIN
select id_cur v1, nom_cur v2, ima_cur v3,bot_cur v4
from curso WHERE id_cat_cur=2;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_cursos_favoritos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_cursos_favoritos` (IN `v_email` VARCHAR(50))  BEGIN
select cm.id_destacado v1,
cm.id_cur v2,
cm.per_corr v3,
c.id_cur v4,
c.nom_cur v5,
c.ima_cur v6
,c.bot_cur v7,
c.descripcion v8
from curso_matriculado cm 
inner join curso c 
on c.id_cur=cm.id_cur 
WHERE cm.per_corr=v_email;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_destacado`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_destacado` ()  BEGIN
SELECT c.nom_cur v1, c.ima_cur v2, c.descripcion v3, count(m.id_cur) v4 
FROM curso_matriculado m 
INNER JOIN curso c 
ON m.id_cur=c.id_cur 
GROUP BY m.id_cur LIMIT 2;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_excel`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_excel` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=2;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_facebook`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_facebook` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=4;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_illustrator`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_illustrator` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=10;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_indesing`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_indesing` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=11;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_nuevo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_nuevo` ()  BEGIN
select nom_cur v1, ima_cur v2, descripcion v3, fecha v4 from curso order by fecha DESC LIMIT 2;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_photoshop`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_photoshop` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=9;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_php`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_php` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=8;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_power`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_power` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=3;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_programacion`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_programacion` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=5;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_sql`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_sql` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=7;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_tema`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_tema` ()  BEGIN
SELECT c.nom_cur v1, t.nom_tem v2,t.url v3,t.duracion v4
FROM tema t 
INNER JOIN curso c 
ON t.id_cur=c.id_cur;
END$$

DROP PROCEDURE IF EXISTS `sp_listar_word`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listar_word` ()  BEGIN
SELECT capitulo v1,nom_tem v2, duracion v3, url v4 
from tema WHERE id_cur=1;
END$$

DROP PROCEDURE IF EXISTS `sp_modificar_persona`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_modificar_persona` (IN `v_pDni` INT(11), IN `v_pNombre` VARCHAR(45), IN `v_pApellido` VARCHAR(50), IN `v_fechaNac` DATE, IN `v_pDireccion` VARCHAR(50), IN `v_pTelefono` CHAR(9), IN `v_pfoto` VARCHAR(200), OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
UPDATE persona
 SET per_nom=v_pNombre,
 	 per_ape=v_pApellido,
     per_fec_nac=v_fechaNac,
     per_dir=v_pDireccion,
     per_cel=v_pTelefono,
     foto=v_pfoto
    WHERE per_dni=v_pDni;
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_obtener_curso_favorito`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_obtener_curso_favorito` (IN `v_idcurso` INT)  BEGIN
select id_cur v1, nom_cur v2, ima_cur v3,bot_cur v4
from curso WHERE id_cur=v_idcurso;
END$$

DROP PROCEDURE IF EXISTS `sp_registar_tema`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registar_tema` (IN `v_cap` INT, IN `v_nom` VARCHAR(200), IN `v_url` VARCHAR(200), IN `v_dur` CHAR(10), IN `v_idcu` INT, OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
insert into tema
(capitulo,nom_tem,url,duracion,id_cur) 
values (v_cap,v_nom,v_url,v_dur,v_idcu);
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_registrar_Clave`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_Clave` (IN `v_pEmail` VARCHAR(50), IN `v_pclave` TEXT, OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
insert into usuario
(clave,per_corr) 
values (v_pclave,v_pEmail);
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_registrar_comentario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_comentario` (IN `v_pComentario` TEXT, IN `v_pFecha` TIMESTAMP, IN `v_pidCur` INT, IN `v_pIdCorreo` VARCHAR(50), OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
insert into comentario
(comentario,fec_com,id_cur,per_corr) 
values (v_pComentario,now(),v_pidCur,v_pIdCorreo);
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_registrar_curso`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_curso` (IN `v_nom` VARCHAR(50), IN `v_foto` VARCHAR(200), IN `v_boton` VARCHAR(200), IN `v_des` VARCHAR(200), IN `v_fecha` DATE, IN `v_idcur` INT, OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
insert into curso
(nom_cur,ima_cur,bot_cur,descripcion,fecha,id_cat_cur) 
values (v_nom,v_foto,v_boton,v_des,now(),v_idcur);
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_registrar_matricula_curso`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_matricula_curso` (IN `v_codcurso` INT, IN `v_email` VARCHAR(45), OUT `v_res` INT)  BEGIN
    DECLARE EXIT
HANDLER FOR SQLEXCEPTION
BEGIN
    ROLLBACK
        ;
    SET
        v_res = FALSE;
END;

start transaction;
insert into curso_matriculado
(id_cur,per_corr) 
values (v_codcurso,v_email);
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_registrar_persona`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_registrar_persona` (IN `v_pNombre` VARCHAR(45), IN `v_pApellido` VARCHAR(50), IN `v_pDni` CHAR(9), IN `v_pCorreo` VARCHAR(50), IN `v_fechaNac` DATE, IN `v_pSexo` TINYINT, IN `v_pDireccion` VARCHAR(50), IN `v_pTelefono` CHAR(9), IN `v_pcat` INT, OUT `v_res` INT)  BEGIN
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
(per_nom,per_ape,per_dni,per_corr,per_fec_nac,per_sex,per_dir,per_cel,id_tip_per) 
values (v_pNombre,v_pApellido,v_pDni,v_pCorreo,v_fechaNac,v_pSexo,v_pDireccion,v_pTelefono,v_pcat);
commit;
set v_res=true;
END$$

DROP PROCEDURE IF EXISTS `sp_reporte1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_reporte1` ()  BEGIN
select case when per_sex=0 then 'Masculino'
        else 'Femenino' end as v1,count(*) as v2 from persona
group by
case when per_sex=1 then 'Masculino'
        else 'Femenino' end;


END$$

DROP PROCEDURE IF EXISTS `sp_reporte2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_reporte2` ()  BEGIN
SELECT c.nom_cur v1 , count(t.nom_tem) v2
FROM curso c 
INNER JOIN tema t 
ON c.id_cur=t.id_cur 
GROUP by(c.nom_cur);
END$$

DROP PROCEDURE IF EXISTS `sp_validationUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_validationUser` (IN `v_user` VARCHAR(50), IN `v_clave` TEXT)  BEGIN
select p.per_nom v1,p.per_ape v2,p.per_dni v3,p.per_fec_nac v4,p.per_sex v5,p.per_cel v6
,p.id_tip_per v7,u.id_user v8,u.per_corr v9,u.clave v10,p.per_dir v11,p.foto v12
from persona p 
inner join usuario u
  	on u.per_corr=p.per_corr

where u.per_corr=v_user;
END$$

DROP PROCEDURE IF EXISTS `sp_validationUserToken`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_validationUserToken` (IN `v_user` VARCHAR(50))  BEGIN
select p.per_nom v1,p.per_ape v2,p.per_dni v3,p.per_fec_nac v4,p.per_sex v5,p.per_cel v6
,p.id_tip_per v7,u.id_user v8,u.per_corr v9,u.clave v10,t.num_token v11
from persona p 
inner join usuario u
  	on u.per_corr=p.per_corr
    inner join token t
    on t.email=u.per_corr
where u.per_corr=v_user;
END$$

DROP PROCEDURE IF EXISTS `token`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `token` (IN `v_email` VARCHAR(50))  BEGIN DECLARE tokenn int;
DELETE FROM token WHERE email=v_email ;
set tokenn=(select round( rand()*100000));
insert into token (email,num_token) values(v_email,tokenn);

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesos`
--

DROP TABLE IF EXISTS `accesos`;
CREATE TABLE IF NOT EXISTS `accesos` (
  `idaccesos` int(10) NOT NULL AUTO_INCREMENT,
  `idpagina` int(11) NOT NULL,
  `id_tip_per` int(11) NOT NULL,
  PRIMARY KEY (`idaccesos`),
  KEY `R15` (`idpagina`),
  KEY `R16` (`id_tip_per`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `accesos`
--

INSERT INTO `accesos` (`idaccesos`, `idpagina`, `id_tip_per`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 2),
(22, 22, 2),
(23, 23, 2),
(24, 24, 2),
(25, 25, 2),
(26, 26, 2),
(27, 27, 2),
(28, 28, 2),
(29, 29, 2),
(30, 30, 2),
(31, 31, 2),
(32, 32, 2),
(33, 33, 2),
(34, 34, 2),
(35, 35, 2),
(36, 36, 2),
(37, 37, 2),
(38, 38, 2),
(39, 39, 2),
(40, 40, 2),
(41, 41, 2),
(42, 42, 2),
(43, 43, 2),
(44, 44, 2),
(45, 45, 2),
(46, 46, 2),
(47, 47, 2),
(48, 48, 2),
(49, 49, 1),
(50, 50, 1),
(51, 51, 1),
(52, 52, 1),
(53, 53, 1),
(54, 54, 1),
(55, 1, 1),
(56, 2, 1),
(57, 3, 1),
(58, 4, 1),
(59, 5, 1),
(60, 6, 1),
(61, 7, 1),
(62, 8, 1),
(63, 9, 1),
(64, 10, 1),
(65, 11, 1),
(66, 12, 1),
(67, 13, 1),
(68, 14, 1),
(69, 15, 1),
(70, 16, 1),
(71, 17, 1),
(72, 18, 1),
(73, 19, 1),
(74, 20, 1),
(75, 21, 1),
(76, 22, 1),
(77, 23, 1),
(78, 24, 1),
(79, 25, 1),
(80, 26, 1),
(81, 27, 1),
(82, 28, 1),
(83, 29, 1),
(84, 30, 1),
(85, 31, 1),
(86, 32, 1),
(87, 33, 1),
(88, 34, 1),
(89, 35, 1),
(90, 36, 1),
(91, 37, 1),
(92, 38, 1),
(93, 39, 1),
(94, 40, 1),
(95, 41, 1),
(96, 42, 1),
(97, 43, 1),
(98, 44, 1),
(99, 45, 1),
(100, 46, 1),
(101, 47, 1),
(102, 48, 1),
(105, 56, 2),
(106, 57, 1),
(107, 58, 2),
(108, 59, 1),
(109, 56, 1),
(110, 57, 2),
(111, 58, 2),
(112, 59, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id_com` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` text DEFAULT NULL,
  `fec_com` timestamp NULL DEFAULT NULL,
  `id_cur` int(11) DEFAULT NULL,
  `per_corr` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_com`),
  UNIQUE KEY `XPKcomentario` (`id_com`),
  KEY `R_10` (`id_cur`),
  KEY `R_8` (`per_corr`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `id_cur` int(11) NOT NULL,
  `nom_cur` varchar(50) DEFAULT NULL,
  `ima_cur` varchar(200) DEFAULT NULL,
  `bot_cur` varchar(20) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_cat_cur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cur`),
  UNIQUE KEY `XPKcurso` (`id_cur`),
  KEY `R_5` (`id_cat_cur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_cur`, `nom_cur`, `ima_cur`, `bot_cur`, `descripcion`, `fecha`, `id_cat_cur`) VALUES
(1, 'Word', 'word-curso.jpg', 'Word', 'Programa informático orientado al procesamiento de textos.', '2020-10-21', 0),
(2, 'Excel', 'excel-curso.jpg', 'Excel', 'Permite combinar, comparar y analizar grandes volúmenes de datos.', '2020-10-21', 0),
(3, 'PowerPoint', 'powerpoint-curso.jpg', 'Power', 'Representación gráfica de la estructura de una empresa u organización.', '2020-10-21', 0),
(4, 'Facebook para Negocios', 'facebook-curso.jpg', 'Facebook', 'Permite comercializar tu negocio aportando a tus clientes potenciales un nuevo canal.', '2020-10-21', 0),
(5, 'Programación con Java', 'programacion-curso.jpg', 'Programacion', 'Permite crear programas que exhiban un comportamiento deseado, de un algoritmo en un determinado lenguaje para realizar un programa.', '2020-10-31', 1),
(6, 'Diseño de BD', 'bd-curso.jpg', 'BD', 'Permite obtener una implementación de una base de datos a partir de los requisitos iniciales de los usuarios del sistema de información.', '2020-10-31', 1),
(7, 'SQL Server', 'sql-curso.jpg', 'SQL', 'Microsoft SQL Server es un sistema de gestión de base de datos relacional, desarrollado por la empresa Microsoft.', '2020-10-26', 1),
(8, 'PHP', 'php-curso.jpg', 'PHP', 'PHP es un lenguaje de programación de uso general que se adapta especialmente al desarrollo web.', '2020-10-26', 1),
(9, 'Photoshop', 'photoshop-curso.jpg', 'Photoshop', 'Editor de fotografías, usado principalmente para el retoque de fotografías y gráficos', '2020-10-26', 2),
(10, 'Illustrator', 'illustrator-curso.jpg', 'Illustrator', 'Editor de gráficos vectoriales para la creación artística de dibujo y pintura para ilustración.', '2020-10-26', 2),
(11, 'InDesign', 'indesign-curso.jpg', 'InDesign', 'Adobe InDesign es una aplicación para la composición digital de páginas.', '2020-10-26', 2),
(12, 'CorelDraw', 'corel-curso.jpg', 'Corel', 'Es una aplicación informática de diseño gráfico vectorial.', '2020-10-26', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_categoria`
--

DROP TABLE IF EXISTS `curso_categoria`;
CREATE TABLE IF NOT EXISTS `curso_categoria` (
  `id_cat_cur` int(11) NOT NULL,
  `nom_cat_cur` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_cat_cur`),
  UNIQUE KEY `XPKcurso_categoria` (`id_cat_cur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso_categoria`
--

INSERT INTO `curso_categoria` (`id_cat_cur`, `nom_cat_cur`) VALUES
(0, 'Básico'),
(1, 'Avanzado'),
(2, 'Diseño Grafico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_matriculado`
--

DROP TABLE IF EXISTS `curso_matriculado`;
CREATE TABLE IF NOT EXISTS `curso_matriculado` (
  `id_destacado` int(11) NOT NULL AUTO_INCREMENT,
  `id_cur` int(11) DEFAULT NULL,
  `per_corr` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_destacado`),
  UNIQUE KEY `id_cur` (`id_cur`),
  KEY `R_7` (`id_cur`),
  KEY `R_6` (`per_corr`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `curso_matriculado`
--

INSERT INTO `curso_matriculado` (`id_destacado`, `id_cur`, `per_corr`) VALUES
(55, 12, 'leilacordova6@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_curso_matriculado`
--

DROP TABLE IF EXISTS `detalle_curso_matriculado`;
CREATE TABLE IF NOT EXISTS `detalle_curso_matriculado` (
  `id_destacado` int(11) NOT NULL,
  `estado_curso` char(18) DEFAULT NULL,
  `nota` char(18) DEFAULT NULL,
  `id_detalle_curso_matriculado` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_curso_matriculado`),
  UNIQUE KEY `XPKdetalle_curso_matriculado` (`id_detalle_curso_matriculado`),
  KEY `R_17` (`id_destacado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginas`
--

DROP TABLE IF EXISTS `paginas`;
CREATE TABLE IF NOT EXISTS `paginas` (
  `idpagina` int(10) NOT NULL AUTO_INCREMENT,
  `controlador` varchar(250) NOT NULL,
  `metodo` varchar(250) NOT NULL,
  PRIMARY KEY (`idpagina`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paginas`
--

INSERT INTO `paginas` (`idpagina`, `controlador`, `metodo`) VALUES
(1, 'word', 'index'),
(2, 'word', 'doList'),
(3, 'word', 'doList2'),
(4, 'word', 'doSave'),
(5, 'excel', 'index'),
(6, 'excel', 'doList'),
(7, 'excel', 'doList2'),
(8, 'excel', 'doSave'),
(9, 'power', 'index'),
(10, 'power', 'doList'),
(11, 'power', 'doList2'),
(12, 'power', 'doSave'),
(13, 'facebook', 'index'),
(14, 'facebook', 'doList'),
(15, 'facebook', 'doList2'),
(16, 'facebook', 'doSave'),
(17, 'programacion', 'index'),
(18, 'programacion', 'doList'),
(19, 'programacion', 'doList2'),
(20, 'programacion', 'doSave'),
(21, 'corel', 'index'),
(22, 'corel', 'doList'),
(23, 'corel', 'doList2'),
(24, 'corel', 'doSave'),
(25, 'illustrator', 'index'),
(26, 'illustrator', 'doList'),
(27, 'illustrator', 'doList2'),
(28, 'illustrator', 'doSave'),
(29, 'indesign', 'index'),
(30, 'indesign', 'doList'),
(31, 'indesign', 'doList2'),
(32, 'indesign', 'doSave'),
(33, 'php', 'index'),
(34, 'php', 'doList'),
(35, 'php', 'doList2'),
(36, 'php', 'doSave'),
(37, 'sql', 'index'),
(38, 'sql', 'doList'),
(39, 'sql', 'doList2'),
(40, 'sql', 'doSave'),
(41, 'photoshop', 'index'),
(42, 'photoshop', 'doList'),
(43, 'photoshop', 'doList2'),
(44, 'photoshop', 'doSave'),
(45, 'bd', 'index'),
(46, 'bd', 'doList'),
(47, 'bd', 'doList2'),
(48, 'bd', 'doSave'),
(49, 'ingresarcurso', 'index'),
(50, 'ingresarcurso', 'doList'),
(51, 'ingresarcurso', 'doSave'),
(52, 'ingresartema', 'index'),
(53, 'ingresartema', 'doList'),
(54, 'ingresartema', 'doSave'),
(56, 'CursoFavorito', 'obtenerDatoCurso'),
(57, 'CursoFavorito', 'obtenerCursoFavorito'),
(58, 'CursoFavorito', 'EliminarCurso'),
(59, 'CursoFavorito', 'doSaveRegistrarMatriculaCurso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `per_nom` varchar(45) DEFAULT NULL,
  `per_ape` varchar(50) DEFAULT NULL,
  `per_dni` char(8) DEFAULT NULL,
  `per_corr` varchar(50) NOT NULL,
  `per_fec_nac` date DEFAULT NULL,
  `per_sex` tinyint(1) DEFAULT NULL,
  `per_dir` varchar(20) DEFAULT NULL,
  `per_cel` varchar(20) DEFAULT NULL,
  `id_tip_per` int(11) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`per_corr`),
  UNIQUE KEY `XPKpersona` (`per_corr`),
  KEY `R_18` (`id_tip_per`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`per_nom`, `per_ape`, `per_dni`, `per_corr`, `per_fec_nac`, `per_sex`, `per_dir`, `per_cel`, `id_tip_per`, `foto`) VALUES
('Leila', 'Cordova', '73755441', 'leilacordova6@gmail.com', '1999-01-27', 0, 'Jr.Manuel Pineda', '943514137', 1, NULL),
('angel', 'arenas', '48365667', 'marenas.28@gmail.com', '2020-12-23', 1, 'jr san francisco 160', '992820065', 2, NULL),
('Diana', 'Ortiz', '09614063', 'ortizlunad24@gmail.com', '2020-12-24', 0, 'Manuel Pineda 403', '923233314', 2, NULL),
('miguel', 'arenas', '48365666', 'roxylarospar@gmail.com', '2020-12-11', 1, 'jr san francisco 162', '992820062', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_tipo`
--

DROP TABLE IF EXISTS `persona_tipo`;
CREATE TABLE IF NOT EXISTS `persona_tipo` (
  `id_tip_per` int(11) NOT NULL,
  `nom_tip_per` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tip_per`),
  UNIQUE KEY `XPKpersona_tipo` (`id_tip_per`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona_tipo`
--

INSERT INTO `persona_tipo` (`id_tip_per`, `nom_tip_per`) VALUES
(1, 'Colaborador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

DROP TABLE IF EXISTS `tema`;
CREATE TABLE IF NOT EXISTS `tema` (
  `id_tem` int(11) NOT NULL,
  `capitulo` int(11) DEFAULT NULL,
  `nom_tem` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `duracion` char(10) DEFAULT NULL,
  `id_cur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tem`),
  UNIQUE KEY `XPKtema` (`id_tem`),
  KEY `R_11` (`id_cur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id_tem`, `capitulo`, `nom_tem`, `url`, `duracion`, `id_cur`) VALUES
(1, 0, 'Introducción para principiantes', 'https://www.youtube.com/embed/pbvwCTld8BA', '10:38', 1),
(2, 1, 'Carta Sencilla (Formal)', 'https://www.youtube.com/embed/EdoQhbRWCbo', '15:10', 1),
(3, 2, 'Viñetas, sangrías y tabulación de datos', 'https://www.youtube.com/embed/_WyWbh5wQDo', '12:39', 1),
(4, 3, 'Insertar imágenes', 'https://www.youtube.com/embed/furLE2g8jZc', '12:10', 1),
(5, 4, 'Insertar columnas', 'https://www.youtube.com/embed/DB1CzpT4Qtg', '07:25', 1),
(6, 5, 'Tablas y sus estilos', 'https://www.youtube.com/embed/Qngv4AOAjS0', '11:32', 1),
(7, 6, 'Cuadros de textos y WordArt', 'https://www.youtube.com/embed/VPyAxNgCF3Y', '08:04', 1),
(8, 7, 'Combinar correspondencia', 'https://www.youtube.com/embed/B1vfwuQdqGo', '20:02', 1),
(9, 8, 'Enumerar paginas en \"pie de página\"', 'https://www.youtube.com/embed/2wNnB3SndW0', '06:50', 1),
(10, 9, 'Tablas de contenidos', 'https://www.youtube.com/embed/g6zaadbD-0M', '06:29', 1),
(11, 10, 'Función Rand y Lorem Ipsum', 'https://www.youtube.com/embed/vsDopFpEYPI', '03:15', 1),
(12, 11, 'Mapas conceptuales (SmartArt)', 'https://www.youtube.com/embed/ff2OebYLm00', '09:09', 1),
(13, 12, 'Guardar paginas en documentos individuales (separar correspondencias)', 'https://www.youtube.com/embed/7Tj-BoKLPTY', '04:11', 1),
(14, 13, 'Ajustar valores  predeterminados', 'https://www.youtube.com/embed/dMG3pNq1_C4', '04:17', 1),
(15, 0, 'Introducción para principiantes', 'https://www.youtube.com/embed/yKWFMgurUnU', '12:22', 2),
(16, 1, 'Formulas y Autorellenos', 'https://www.youtube.com/embed/47nJsZ97sz0', '16:23', 2),
(17, 2, 'Gráficos', 'https://www.youtube.com/embed/BER2KhixV0Y', '12:20', 2),
(18, 3, 'Función SI', 'https://www.youtube.com/embed/GafEekpQu1M', '12:34', 2),
(19, 4, 'Función SI - Anidada', 'https://www.youtube.com/embed/78kuqNn2fzM', '06:31', 2),
(20, 5, 'Función SI - Y - O', 'https://www.youtube.com/embed/_Sl2QmSmvuk', '07:38', 2),
(21, 6, 'Función SI (Y-O) ANIDADA', 'https://www.youtube.com/embed/pu2N8hbY7O4', '11:36', 2),
(22, 7, 'Funciones Básicas', 'https://www.youtube.com/embed/lWS9fMw1KWQ', '11:40', 2),
(23, 8, 'Función BuscarV (Llamado de Datos)', 'https://www.youtube.com/embed/09d5OQ9yDXw', '14:28', 2),
(24, 9, 'Formato Condicional', 'https://www.youtube.com/embed/_2Mg5vBSM4U', '08:50', 2),
(25, 10, 'Validación de Datos', 'https://www.youtube.com/embed/I0kYLaPNgRo', '13:05', 2),
(26, 11, 'Filtros y Tablas dinámicas', 'https://www.youtube.com/embed/AIipB0FFw7Y', '15:01', 2),
(27, 12, 'Seguridad en Excel - Libros, Hojas y Celdas', 'https://www.youtube.com/embed/GmjJB8rOGsc', '11:54', 2),
(28, 13, 'Funciones Sumar.Si y Promedio.Si (Condicionales)', 'https://www.youtube.com/embed/Wi86aPrar1Y', '07:03', 2),
(29, 14, 'Consolidar datos o unir diferentes libros y hojas en Excel', 'https://www.youtube.com/embed/UPx7DB_F1lo', '10:27', 2),
(30, 15, 'Crear Tablas Automáticamente en Excel', 'https://www.youtube.com/embed/AnOzUdlmQa0', '06:01', 2),
(31, 16, 'Filtro Avanzado con Muchos Criterios', 'https://www.youtube.com/embed/djY65FogQ4U', '05:59', 2),
(32, 17, 'Sumar.Si y Contar.Si con Varios Criterios', 'https://www.youtube.com/embed/saIFcp7HVrA', '06:14', 2),
(33, 0, 'Introducción para principiantes', 'https://www.youtube.com/embed/pDfZOFtdF-A', '04:41', 3),
(34, 1, 'Creando Diapositiva Sencilla', 'https://www.youtube.com/embed/zSlphB24lVU', '06:42', 3),
(35, 2, 'Álbum de Fotos e Hipervínculos', 'https://www.youtube.com/embed/OVBpCNYyD5c', '13:28', 3),
(36, 3, 'Insertar Videos online y offline', 'https://www.youtube.com/embed/PEyp3k8TM4s', '08:17', 3),
(37, 4, 'Creando Animaciones', 'https://www.youtube.com/embed/dYYFOifmcSo', '14:35', 3),
(38, 5, 'Gráficos de Excel en PowerPoint', 'https://www.youtube.com/embed/802Ozxa9vRc', '06:31', 3),
(39, 1, 'Qué es una FAN PAGE y para que sirve', 'https://www.youtube.com/embed/AuMKOE5kODI', '16:32', 4),
(40, 2, 'Cómo CREAR una Fan Page', 'https://www.youtube.com/embed/bDm-DzFLtvA', '26:51', 4),
(41, 3, 'Cómo configurar MENSAJES en fan page', 'https://www.youtube.com/embed/kU4NYrrYb2I', '10:23', 4),
(42, 4, 'Trucos para FAN PAGE', 'https://www.youtube.com/embed/p6iP6zuXYcU', '08:31', 4),
(43, 5, 'Cómo pone un administrador en una página de Facebook', 'https://www.youtube.com/embed/oFNCaveJ1uM', '05:32', 4),
(44, 6, 'Cómo subir publicaciones a Fan Page', 'https://www.youtube.com/embed/-YwjP2qnyAQ', '08:17', 4),
(45, 7, 'Como crear un grupo de Facebook', 'https://www.youtube.com/embed/nIUSQAxLrRY', '20:50', 4),
(46, 8, 'Como vincular Instagram con Facebook', 'https://www.youtube.com/embed/qvxoD-sqr_M', '06:07', 4),
(47, 9, 'Formato Condicional', 'https://www.youtube.com/embed/_A34UK6ES2s', '08:15', 4),
(48, 1, 'Presentación', 'https://www.youtube.com/embed/SNlDPxqjI2Y', '05:09', 5),
(49, 2, 'Hola Mundo', 'https://www.youtube.com/embed/fLUxNpj2g_Q', '14:14', 5),
(50, 3, 'Estructura de un Programa', 'https://www.youtube.com/embed/5ceeKuKAOfc', '16:05', 5),
(51, 4, 'Variables y Tipos de Datos', 'https://www.youtube.com/embed/edOvmNW_V9w', '27:21', 5),
(52, 5, 'Clase Math', 'https://www.youtube.com/embed/C8FIXMRtFKo', '11:02', 5),
(53, 6, 'Operadores Aritméticos', 'https://www.youtube.com/embed/_TfpkRrFvX8', '19:54', 5),
(54, 7, 'Operadores de Comparación', 'https://www.youtube.com/embed/dtcNuob2BQA', '21:25', 5),
(55, 0, 'Presentación', 'https://www.youtube.com/embed/yKWFMgurUnU', '02:22', 6),
(56, 1, 'EL DATO', 'https://www.youtube.com/embed/mEeWiNwa_PI', '03:26', 6),
(57, 2, 'BASE DE DATOS', 'https://www.youtube.com/embed/eirNt2d9z6E', '03:56', 6),
(58, 3, 'CONCEPTOS FUNDAMENTALES', 'https://www.youtube.com/embed/VQsP56hXvWw', '02:21', 6),
(59, 4, 'DIAGRAMAS ENTIDAD RELACION', 'https://www.youtube.com/embed/LBy1-kCvH88', '02:50', 6),
(60, 5, 'LLAVE PRIMARIA', 'https://www.youtube.com/embed/hiDeX4fxo0Q', '11:32', 6),
(61, 6, 'MODELO ENTIDAD RELACION', 'https://www.youtube.com/embed/gSTVskqmy2A', '03:33', 6),
(62, 7, 'CARDINALIDAD', 'https://www.youtube.com/embed/6H4DOhY2Vso', '06:13', 6),
(63, 8, 'EJERCICIOS DE BD', 'https://www.youtube.com/embed/gARerN6Bdds', '09:17', 6),
(64, 9, 'Diseño de base de datos', 'https://www.youtube.com/embed/nGAJEKY4Z_0', '10:58', 6),
(65, 10, 'Normalización', 'https://www.youtube.com/embed/MCak5PcSswo', '04:52', 6),
(66, 11, 'PRIMERA FORMA NORMAL', 'https://www.youtube.com/embed/_0NLr1ib0XY', '06:20', 6),
(67, 12, 'SEGUNDA FORMA NORMAL', 'https://www.youtube.com/embed/AelRCcCc8qg', '05:48', 6),
(68, 13, 'TERCERA FORMA NORMAL', 'https://www.youtube.com/embed/_0OyBCLq-kM', '07:20', 6),
(69, 14, 'MODELO de DISEÑO I', 'embed-responsive-item\" src=\"https://www.youtube.com/embed/h43DkwnUKhQ', '07:32', 6),
(70, 15, 'MODELO de DISEÑO II', 'https://www.youtube.com/embed/3a8PGM2UXIk', '05:23', 6),
(71, 1, 'Introducción', 'https://www.youtube.com/embed/bW-NYf606fM', '4:45', 7),
(72, 2, 'Instalar SQL server', 'https://www.youtube.com/embed/udpvZv_C7js', '05:29', 7),
(73, 3, 'CREACION Y ELIMINACION DE UNA BD', 'https://www.youtube.com/embed/HEkfvk2PBCs', '03:01', 7),
(74, 4, 'TIPOS DE DATOS', 'https://www.youtube.com/embed/7gh5MtqkIiU', '02:48', 7),
(75, 5, 'Creación y eliminación de tablas', 'https://www.youtube.com/embed/UblULDVT2Fs', '04:26', 7),
(76, 6, 'Inserción de datos (INSERT)', 'https://www.youtube.com/embed/FlkFuNc9psM', '05:19', 7),
(77, 7, 'CONSULTAS', 'https://www.youtube.com/embed/IDljsF3AT2Q', '02:53', 7),
(78, 8, 'WHERE', 'https://www.youtube.com/embed/W0n64vnpPwc', '03:53', 7),
(79, 9, 'Operadores Relacionales', 'https://www.youtube.com/embed/d36BhUrhPt4', '03:47', 7),
(80, 10, 'Elimininación de registros (DELETE, DROP, TRUNCATE)', 'https://www.youtube.com/embed/l9Ijy1g5Doc', '07:17', 7),
(81, 11, 'UPDATE', 'https://www.youtube.com/embed/MCak5PcSswo', '04:02', 7),
(82, 12, 'identity parte 1', 'https://www.youtube.com/embed/7xMtbeLf-DA', '07:29', 7),
(83, 13, 'identity parte 2', 'https://www.youtube.com/embed/pLE663Cg5-Y', '14:55', 7),
(84, 14, 'Operadores aritmeticos', 'https://www.youtube.com/embed/W3LBpUyTJ9Y', '08:01', 7),
(85, 15, 'Funciones de Agregado', 'https://www.youtube.com/embed/iAcv1jxEuGs', '09:02', 7),
(86, 16, 'Concatenacion & Alias', 'https://www.youtube.com/embed/sjZJhj7xSaw', '05:52', 7),
(87, 17, 'Funciones de manejo de cadenas parte 1', 'https://www.youtube.com/embed/plJ5eZOiBTY', '07:08', 7),
(88, 18, 'Funciones de manejo de cadenas parte 2', 'https://www.youtube.com/embed/_ajYVqI6XzQ', '08:42', 7),
(89, 19, 'Order by', 'https://www.youtube.com/embed/FZe2BT3GFF8', '05:16', 7),
(90, 20, 'Operadores lógicos nor and or', 'https://www.youtube.com/embed/brBIaGk5X_A', '10:27', 7),
(91, 21, 'Is null - between', 'https://www.youtube.com/embed/Po0d7ediuic', '06:11', 7),
(92, 22, 'Like not like', 'https://www.youtube.com/embed/B2lVZOuj4ME', '09:58', 7),
(93, 23, 'Count', 'https://www.youtube.com/embed/fTXiRZV8Imk', '06:29', 7),
(94, 24, 'Sum - Avg', 'https://www.youtube.com/embed/U4538uTXx9w', '08:01', 7),
(95, 25, 'Min - Max', 'https://www.youtube.com/embed/lSQTzhMzdkQ', '07:37', 7),
(96, 26, 'Having', 'https://www.youtube.com/embed/RPiJk40Nubw', '07:77', 7),
(97, 27, 'Compute', 'https://www.youtube.com/embed/FYfbiUK_anA', '06:09', 7),
(98, 28, 'Distinct', 'https://www.youtube.com/embed/nfYShbs1v_M', '07:35', 7),
(99, 29, 'Top', 'https://www.youtube.com/embed/kcluqgjiSxQ', '03:57', 7),
(100, 30, 'Respaldo y Restauracion de Bases de Datos', 'https://www.youtube.com/embed/ve6dGwYycHc', '08:06', 7),
(101, 31, 'Join', 'https://www.youtube.com/embed/NL7eBil5Yak', '03:51', 7),
(102, 32, 'Inner Join', 'https://www.youtube.com/embed/mjE1PWXm8QA', '08:21', 7),
(103, 33, 'Join Left', 'https://www.youtube.com/embed/pjduEQj9-6c', '05:20', 7),
(104, 34, 'Right Join', 'https://www.youtube.com/embed/fsO2mjTNzVM', '05:20', 7),
(105, 35, 'Join and Group by', 'https://www.youtube.com/embed/ySm_OLlXW1s', '03:42', 7),
(106, 36, 'Join and Update and Delete', 'https://www.youtube.com/embed/nXmsP-YKnfo', '03:21', 7),
(107, 37, 'Alter Table', 'https://www.youtube.com/embed/66-bp845khc', '02:28', 7),
(108, 38, 'Campos calculados', 'https://www.youtube.com/embed/IY3_VP45XHk', '03:02', 7),
(109, 39, 'Subconsultas', 'https://www.youtube.com/embed/olQp_75IVAc', '02:40', 7),
(110, 40, 'Subconsultas con in & not in', 'https://www.youtube.com/embed/yAZuBYJCwio', '05:25', 7),
(111, 41, 'Subconsultas con any & all', 'https://www.youtube.com/embed/yLv1wPpWEGc', '06:15', 7),
(112, 42, 'Subconsultas Update & Delate', 'https://www.youtube.com/embed/_VwTwrVfXc0', '05:23', 7),
(113, 43, 'Subconsultas con insert', 'https://www.youtube.com/embed/IXmsQsvMJJs', '02:44', 7),
(114, 44, 'Comando GO', 'https://www.youtube.com/embed/EzIxFj16m54', '02:05', 7),
(115, 45, 'Vistas', 'https://www.youtube.com/embed/Ppxv02m-yBQ', '04:32', 7),
(116, 46, 'Cifrado de Vistas', 'https://www.youtube.com/embed/R4C-VZ5ZT0w', '03:37', 7),
(117, 47, 'Eliminar Vistas', 'https://www.youtube.com/embed/YAqscPnzrKM', '02:54', 7),
(118, 48, 'Update & Delate con Vistas', 'https://www.youtube.com/embed/Sq1O1BwSn1g', '02:54', 7),
(119, 49, 'Sentencia Witch Check Option en Vistas', 'https://www.youtube.com/embed/qg4Clxz5LE0', '04:04', 7),
(120, 50, 'Presentamos la Continuación del Curso', 'https://www.youtube.com/embed/wDnxBabypbA', '05:04', 7),
(121, 51, 'Vistas Modificadas', 'https://www.youtube.com/embed/mDJ-uEXEtR4', '03:00', 7),
(122, 52, 'Lenguaje de Control de Flujo [CASE]', 'https://www.youtube.com/embed/anaEKG-1-_A', '05:57', 7),
(123, 53, 'Lenguaje de Control de Flujo [IF]', 'https://www.youtube.com/embed/JZIEevYaY0s', '04:29', 7),
(124, 54, 'Variables', 'https://www.youtube.com/embed/HuND7jGWJQ4', '06:16', 7),
(125, 55, 'Procedimientos Almacenados', 'https://www.youtube.com/embed/HuND7jGWJQ4', '06:16', 7),
(126, 56, 'Procedimientos Almacenados Creacion y Ejecucion', 'https://www.youtube.com/embed/nx3y3VAEFjU', '07:41', 7),
(127, 57, 'Procedimientos Almacenados Eliminación', 'https://www.youtube.com/embed/Ey3fOvvzeJ0', '03:41', 7),
(128, 58, 'Procedimientos Almacenados Parametros Entrada', 'https://www.youtube.com/embed/RpkbICe0QqM', '03:41', 7),
(129, 59, 'Procedimientos Almacenados Parametros Salida', 'https://www.youtube.com/embed/prTs_Diz6xk', '06:00', 7),
(130, 60, 'Procedimientos Almacenados-Return', 'https://www.youtube.com/embed/prTs_Diz6xk', '04:00', 7),
(131, 61, 'Procedimientos Almacenados Info', 'https://www.youtube.com/embed/7qOdCjqJuH0', '05:14', 7),
(132, 62, 'Procedimientos Almacenados Encrypt', 'https://www.youtube.com/embed/fNDlfQQ1oJk', '05:14', 7),
(133, 63, 'Procedimientos Almacenados Anidación', 'https://www.youtube.com/embed/IQyKfS5FU6w', '05:48', 7),
(134, 64, 'Triggers', 'https://www.youtube.com/embed/VNtmaJ2rJ3M', '05:07', 7),
(135, 65, 'Triggers Insert', 'https://www.youtube.com/embed/htvovP5AaTc', '04:38', 7),
(136, 66, 'Triggers Update', 'https://www.youtube.com/embed/FUFiHvMpFsY', '01:56', 7),
(137, 67, 'Triggers Delete', 'https://www.youtube.com/embed/o8N5jUCq_C8', '03:56', 7),
(138, 68, 'Triggers Habilitar - Deshabilitar', 'https://www.youtube.com/embed/kxgsBHMjSgE', '03:23', 7),
(139, 0, 'Introducción', 'https://www.youtube.com/embed/Q21XLsP2bsY', '06:59', 8),
(140, 1, 'Crear Variables', 'https://www.youtube.com/embed/loodw03MtPU', '07:01', 8),
(141, 2, 'Función IF - ELSE', 'https://www.youtube.com/embed/Rl1Eth_jqto', '07:16', 8),
(142, 3, 'Ciclo FOR', 'https://www.youtube.com/embed/RyM39rIIvwY', '07:44', 8),
(143, 4, 'Enviar y Recibir datos con GET y POST', 'https://www.youtube.com/embed/oP8AUuV-6PM', '12:36', 8),
(144, 5, 'Switch Case y POST en la misma Pagina', 'https://www.youtube.com/embed/yOX8_xtFWd4', '16:50', 8),
(145, 6, 'Funciones en PHP', 'https://www.youtube.com/embed/2HBb_Ar_VDg', '12:39', 8),
(146, 7, 'Insertar datos en base de datos (MySQLi)', 'https://www.youtube.com/embed/OsWBMmbPEig', '17:37', 8),
(147, 8, 'Consultar Datos en MYSQL con PHP (MySQLi)', 'https://www.youtube.com/embed/OsWBMmbPEig', '14:29', 8),
(148, 9, 'Variables Globales e Iniciar sesión (Login)', 'https://www.youtube.com/embed/NRB7Eppn8kc', '14:43', 8),
(149, 10, 'Consultar, Insertar, Actualizar y Eliminar en MYSQL', 'https://www.youtube.com/embed/hXgmuKgNkb0', '21:09', 8),
(150, 11, 'Sublime Text + FTP, Editar página subida a internet', 'https://www.youtube.com/embed/7xMtbeLf-DA', '06:36', 8),
(151, 12, 'Ajax - Ejemplo básico y consultar datos a MySQL sin recargar página', 'https://www.youtube.com/embed/pLE663Cg5-Y', '17:40', 8),
(152, 0, 'Introducción', 'https://www.youtube.com/embed/4-VMuLs99Ss', '11:42', 9),
(153, 1, 'Tapon de Clonar y Parche', 'https://www.youtube.com/embed/Y9yKFzACEHg', '14:23', 9),
(154, 2, 'Lazos y Tono/Saturación', 'https://www.youtube.com/embed/HVBg6Fn2Rc0', '21:46', 9),
(155, 3, 'Pincel y Manejo de Capas', 'https://www.youtube.com/embed/sAbERrDojDg', '11:32', 9),
(156, 4, 'Aumentar Cola y Senos (Licuar)', 'https://www.youtube.com/embed/us1lxLrI3T8', '12:56', 9),
(157, 5, 'Firmamento con Estrellas', 'https://www.youtube.com/embed/-YyNVv4n99E', '12:25', 9),
(158, 6, 'Efecto Babosos', 'https://www.youtube.com/embed/cuovazDv9Vs', '05:44', 9),
(159, 7, 'Efecto Eclipse', 'https://www.youtube.com/embed/3fMU7zlNmM8', '07:42', 9),
(160, 8, 'Lazo Magnetico y Poligonal', 'https://www.youtube.com/embed/8xgfhw1VDxc', '14:42', 9),
(161, 9, 'Perfeccionar Borde', 'https://www.youtube.com/embed/5ZFcOZdXEcU', '10:21', 9),
(162, 10, 'Editar imagenes al mismo tiempo (automatizar)', 'https://www.youtube.com/embed/B3QWy0q2CI8', '06:48', 9),
(163, 10, 'Editar imagenes al mismo tiempo (automatizar)', 'https://www.youtube.com/embed/B3QWy0q2CI8', '06:48', 9),
(164, 11, 'Descargar y Modificar MockUps', 'https://www.youtube.com/embed/TgOawoDO_jc', '06:33', 9),
(165, 12, 'Herramienta Pluma', 'https://www.youtube.com/embed/pLE663Cg5-Y', '12:31', 9),
(166, 13, 'Herramienta Pincel', 'https://www.youtube.com/embed/JM_uHY9vg3Q', '13:57', 9),
(167, 14, 'Tipos de Máscaras', 'https://www.youtube.com/embed/0-kqpGMPiHM', '18:50', 9),
(168, 15, 'Estilos Automáticos', 'https://www.youtube.com/embed/3nHpY91TjSM', '07:04', 9),
(169, 16, 'Que es RGB - CMYK y cuando usarlos', 'https://www.youtube.com/embed/Rd6HYvVgSXA', '05:01', 9),
(170, 0, 'Introducción : Menú Archivo y Movimientos Básicos', 'https://www.youtube.com/embed/x2KT6A7XfR4', '13:53', 10),
(171, 1, 'Color, selección directa, capas y alinear', 'https://www.youtube.com/embed/DadE2EAwkg8', '31:24', 10),
(172, 2, 'Como usar Herramienta Pluma', 'https://www.youtube.com/embed/_FSoRU7Luos', '14:06', 10),
(173, 3, 'Buscatrazos y Creador de Formas', 'https://www.youtube.com/embed/Wy-wG06ObBo', '06:56', 10),
(174, 4, 'Degradado y Panel Muestras', 'https://www.youtube.com/embed/olHbrQtpVUs', '18:21', 10),
(175, 5, 'Texto y Máscara de Recorte', 'https://www.youtube.com/embed/jjvByKS-vnk', '16:44', 10),
(176, 6, 'Como vectorizar una imagen - Practica', 'https://www.youtube.com/embed/xFSzEXghPjs', '21:24', 10),
(177, 7, 'Como vectorizar una imagen - Practica', 'https://www.youtube.com/embed/leQnl37TlsM', '41:22', 10),
(178, 8, 'Efectos Básico', 'https://www.youtube.com/embed/u2DbuKdVD3A', '08:28', 10),
(179, 9, 'Pincel y Panel Apariencia', 'https://www.youtube.com/embed/A4uNC-WJwvQ', '13:43', 10),
(180, 10, 'Crear objetos en 3D', 'https://www.youtube.com/embed/QU5hlS-I3jQ', '06:48', 10),
(181, 11, 'Calco de Imagen', 'https://www.youtube.com/embed/QU5hlS-I3jQ', '06:48', 10),
(182, 12, '¿Cómo usar la herramienta malla?', 'https://www.youtube.com/embed/Clo_PSi-j5g', '29:47', 10),
(183, 13, 'Trucos de Color', 'https://www.youtube.com/embed/zpcS1kj-FTQ', '10:48', 10),
(184, 14, 'Opciones recomendadas de exportación', 'https://www.youtube.com/embed/IlfgoEIObwI', '07:48', 10),
(185, 0, 'Interfaz', 'https://www.youtube.com/embed/8I57LQwOaMg', '13:05', 11),
(186, 1, 'Marcos (frames)', 'https://www.youtube.com/embed/Udzr1Px5HUY', '17:13', 11),
(187, 2, 'Texto', 'https://www.youtube.com/embed/kLVpkogl1aE', '15:31', 11),
(188, 3, 'Edición', 'https://www.youtube.com/embed/t61igypyQd4', '15:08', 11),
(189, 4, 'Exportar, Recortar e Intersección', 'https://www.youtube.com/embed/YSOxbF4c58c', '14:56', 11),
(190, 0, 'Introducción', 'https://www.youtube.com/embed/6uHRKhSa6Cw', '13:30', 12),
(191, 1, 'Que es RGB - CMYK y cuando usarlos', 'https://www.youtube.com/embed/Rd6HYvVgSXA', '05:01', 12),
(192, 2, 'Círculos y Contornos', 'https://www.youtube.com/embed/jTUGHG7gTyc', '16:07', 12),
(193, 3, 'Herramientas Bezier y Forma (Pluma)', 'https://www.youtube.com/embed/rQ9Oey5zjmM', '15:22', 12),
(194, 4, 'Soldar, Recortar e Intersección', 'https://www.youtube.com/embed/by09mpXB5zY', '13:27', 12),
(195, 5, 'Transparencias y Degradados', 'https://www.youtube.com/embed/c-FRaP12jHk', '11:07', 12),
(196, 6, 'PowerClip o Máscaras', 'https://www.youtube.com/embed/rkJT8jjPZo8', '09:39', 12),
(197, 7, 'Rompecabezas (PowerClip)', 'https://www.youtube.com/embed/tn2Yb94kKaM', '06:28', 12),
(198, 8, 'Fusión de Impresión', 'https://www.youtube.com/embed/r3rGkRrjnTU', '07:07', 12),
(199, 9, 'Vectorización Automática y por colores', 'https://www.youtube.com/embed/PBNMj8p-_po', '13:51', 12),
(200, 10, 'Esquina Doblada en CorelDraw (1 Minuto)', 'https://www.youtube.com/embed/nyKFITOpOaA', '00:58', 12),
(201, 11, 'Como hacer fotos Polaroid (Instantáneas)', 'https://www.youtube.com/embed/vAOm8eT3-AY', '06:01', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `id_token` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `num_token` int(11) NOT NULL,
  PRIMARY KEY (`id_token`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `token`
--

INSERT INTO `token` (`id_token`, `email`, `num_token`) VALUES
(13, 'leilacordova6@gmail.com', 99910),
(28, 'ortizlunad24@gmail.com', 36004);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `clave` text CHARACTER SET latin1 DEFAULT NULL,
  `per_corr` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `R_15` (`per_corr`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `clave`, `per_corr`) VALUES
(1, '$2y$10$ZHhIE9kdJeOzxNlqV1TmveyTH3cRMLMb5oK6PkEn4J3rQ3VTFQoIq', 'roxylarospar@gmail.com'),
(3, '$2y$10$ffWbNanh6LL/uNjwuGEXweo.dd4.RZEUzSU8/Of7IhQIVGXljiK9a', 'marenas.28@gmail.com'),
(6, '$2y$10$zFmCyTuJVrFgvFmIuNZBiO5uh9BoH3IvOix1ecKOmQbVpTbg1FZoe', 'leilacordova6@gmail.com'),
(8, '$2y$10$ZHhIE9kdJeOzxNlqV1TmveyTH3cRMLMb5oK6PkEn4J3rQ3VTFQoIq', 'roxylarospar@gmail.com'),
(10, '$2y$10$qsHIlaFy61/2f/IysH22Ne9nKvraiESnf8OLBLj9jnG1YwKkTRrDy', 'ortizlunad24@gmail.com');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesos`
--
ALTER TABLE `accesos`
  ADD CONSTRAINT `R15` FOREIGN KEY (`idpagina`) REFERENCES `paginas` (`idpagina`),
  ADD CONSTRAINT `R16` FOREIGN KEY (`id_tip_per`) REFERENCES `persona_tipo` (`id_tip_per`);

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `R_10` FOREIGN KEY (`id_cur`) REFERENCES `curso` (`id_cur`),
  ADD CONSTRAINT `R_8` FOREIGN KEY (`per_corr`) REFERENCES `persona` (`per_corr`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `R_5` FOREIGN KEY (`id_cat_cur`) REFERENCES `curso_categoria` (`id_cat_cur`);

--
-- Filtros para la tabla `curso_matriculado`
--
ALTER TABLE `curso_matriculado`
  ADD CONSTRAINT `R_6` FOREIGN KEY (`per_corr`) REFERENCES `persona` (`per_corr`),
  ADD CONSTRAINT `R_7` FOREIGN KEY (`id_cur`) REFERENCES `curso` (`id_cur`);

--
-- Filtros para la tabla `detalle_curso_matriculado`
--
ALTER TABLE `detalle_curso_matriculado`
  ADD CONSTRAINT `detalle_curso_matriculado_ibfk_1` FOREIGN KEY (`id_destacado`) REFERENCES `curso_matriculado` (`id_destacado`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `R_18` FOREIGN KEY (`id_tip_per`) REFERENCES `persona_tipo` (`id_tip_per`);

--
-- Filtros para la tabla `tema`
--
ALTER TABLE `tema`
  ADD CONSTRAINT `R_11` FOREIGN KEY (`id_cur`) REFERENCES `curso` (`id_cur`);

--
-- Filtros para la tabla `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `token_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`per_corr`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`per_corr`) REFERENCES `persona` (`per_corr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
