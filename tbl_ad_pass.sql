-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3309
-- Tiempo de generación: 22-09-2024 a las 10:57:52
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_curso_php_joystick`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ad_pass`
--

CREATE TABLE `tbl_ad_pass` (
  `ID` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_account` varchar(255) NOT NULL,
  `user_acc_pas` varchar(255) NOT NULL,
  `depto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tbl_ad_pass`
--

INSERT INTO `tbl_ad_pass` (`ID`, `user_name`, `user_account`, `user_acc_pas`, `depto`) VALUES
(2, 'Alicia Castro', 'alicia', '', ''),
(3, 'Amelia Santillan', 'asantillan', 'D1rAdmi*', 'Arrendadora'),
(4, 'Auditor Interno', 'auditor', '4udit0r$', 'Administración'),
(5, 'Auxiliar Auditoria Interna', 'auxaudi', 'Auxaud1$', 'Administración'),
(6, 'Auxiliar Nominas', 'auxnom', '4uxNomi$', 'Administración'),
(7, 'Aide Zamora', 'azamora', 'T3$orer4', 'Administración'),
(8, 'Francisco Morales', 'ccontador', 'C0n+ad0r', 'Administración'),
(9, 'Nomina TyAcueducto', 'cnomina', 'N0mAcu3$', 'Nóminas'),
(10, 'Consulta Seminuevos', 'consemi', '', 'Seminuevos'),
(11, 'Cordinador Beneficios OZ', 'corbenoz', '', 'Administración'),
(12, 'Cordinador Recursos Humanos', 'corrh', 'C0orR3c*', 'Administración'),
(13, 'Cordinador Seguridad Higiene', 'corseg', 'C0orseh*', 'Seguridad e Higiene'),
(14, 'Reclutamiento Corp', 'crechum', 'R3c!ut14', 'Administración'),
(15, 'Auditoria Deloitte', 'deloitte', 'Aud1t0r*', 'Administración'),
(16, 'Diana Ramirez', 'dramirez', 'D1anara*', 'Ventas'),
(17, 'Lic.Ezbaide Baruqui', 'ebaruqui', 'Pr3$iden', 'Administración'),
(18, 'Elizabeth Jimenez', 'ejimenez', 'Adm1nRH*', 'Administración'),
(19, 'Usuario Externo Temporal', 'externo', '', 'Ventas'),
(20, 'Fabian Mora', 'fmora', 'Gt3fina$', 'Administración'),
(21, 'Usuario Giro', 'giro', 'G1rouse$', 'Administración'),
(22, 'Gabriela Palafox', 'gpalafox', '', 'Nóminas'),
(23, 'Gerente Antencion Clientes', 'gteatc', 'Gt3atec*', 'Servicio'),
(24, 'Gerente de Credito', 'gtecred', '', 'Administración'),
(25, 'Gte Mercadotecnia', 'gtemkt', 'G3nMerc+', 'Mercadotecnia'),
(26, 'Irma Chavez Sanchez', 'ichavez', '', 'Administración'),
(27, 'Ignacio Silva Rodriguez', 'isilva', '', 'Administración'),
(28, 'Javier Arellano', 'jarellano', 'C0orR3c*', 'Administración'),
(29, 'Jesus Torres', 'jjtorres', 'D1rmarc*', 'Administración'),
(30, 'Jose Luis Garcia (Kaizen)', 'jlgarcia', '', 'Servicio'),
(31, 'Jose Palacios', 'jpalacios', 'Gt3cred$', 'Administración'),
(32, 'Gte. Jurídico', 'juridico', 'Jur!diC0', 'Administración'),
(33, 'Karen Camarena', 'kcamarena', 'N0mkarc$', 'Nóminas'),
(34, 'Karla Picchio', 'kpicchio', 'N0mkarp$', 'Nóminas'),
(35, 'Leonardo Apolinar', 'lapolinar', 'L3onard*', 'Ventas'),
(36, 'Manuel Cruz', 'mcruz', '', 'Administración'),
(37, 'Martha Garibay', 'mgaribay', 'Adm1nH&P', 'Servicio'),
(38, 'Octavio Lopez', 'olopez', '$IStem20', 'Sistemas'),
(39, 'Abogado Junior', 'ozabogadojr', 'Ab0gado#', 'Administración'),
(40, 'Administrador RH', 'ozadminrh', 'Adm1nrh*', 'Administración'),
(41, 'Oz Community Manager', 'ozcomman', 'C0mMang#', 'Mercadotecnia'),
(42, 'Contador General Corporativo', 'ozcongen', 'C0ntg3n$', 'Administración'),
(43, 'Coordinador de Compras', 'ozcorcom', 'C0ocomp*', 'Administración'),
(44, 'Coordinador Ventas Digitales', 'ozcorvendig', 'C0ordvd$', 'Ventas'),
(45, 'Oz Enfermeria', 'ozenfermera', 'Enf3rm3*', 'Seguridad e Higiene'),
(46, 'Practicante Oz', 'practicante', 'Pr4ct$0Z', 'Administración'),
(47, 'Asistente Presidencia OZ', 'presidencia', 'As1stpr*', 'Administración'),
(48, 'pruebas', 'pruebas', 'Pru3bas#', 'Administración'),
(49, 'Cordinador Seguridad Patrimonial', 'segpat', 'C0osegp$', 'Seguridad e Higiene'),
(50, 'Analista de Calidad Acue', 'taacalidad', '', 'Servicio'),
(51, 'Accesorios Refacciones', 'taaccref', 'R3f14*', 'Refacciones'),
(52, 'Administracion Ventas', 'taadminven', '', 'Administración'),
(53, 'Asesor Laminado', 'taaselam', 'As3shyp*', 'Servicio'),
(54, 'Asesor Seminuevos', 'taasesem', 'V3nsemi*', 'Seminuevos'),
(55, 'Asesor de Servicio', 'taaseser', '$er14*', 'Servicio'),
(56, 'Asesor Ventas Nuevos', 'taaseven', 'V3nnvos*', 'Ventas'),
(57, 'Auxiliar Arrendadora', 'TAAUXARR', '4uxArr3+', 'Administración'),
(58, 'Auxiliar Compras', 'taauxcom', '4uxC0mp+', 'Administración'),
(59, 'Axiliar Compras', 'taauxcomp', '4uxC0mp+', 'Administración'),
(60, 'Auxiliar Contable Acueducto', 'taauxcon', '4uxCont$', 'Administración'),
(61, 'Auxiliar CxC Acue', 'taauxcxc', '4uxCxxC$', 'Administración'),
(62, 'Auxiliar CXP', 'taauxcxp', '4uxCxxP$', 'Administración'),
(63, 'Auxiliar Seguros', 'taauxseg', 'Aux$3gur', 'Administración'),
(64, 'Auxiliar Tesoreria', 'taauxtes', 'AuxT3so*', 'Administración'),
(65, 'Cajero Mantutino', 'tacaj01', 'CajAc3$1', 'Tesorería'),
(66, 'Cajero Vespertino', 'tacaj02', 'CajAcu*2', 'Tesorería'),
(67, 'Ejecutivo CDN', 'tacdn', 'C1t14*', 'Servicio'),
(68, 'Citas Acueducto', 'tacit01', 'C1t14*', 'Servicio'),
(69, 'Citas Acueducto02', 'tacit02', 'C1t14*', 'Servicio'),
(70, 'Cliente Consentido TyAcueducto', 'tacliecon', '', 'Mercadotecnia'),
(71, 'Conmutador', 'taconmu', 'C0nmuta#', 'Ventas'),
(72, 'Coord. Tesoreria', 'tacoordtes', 'T3$orer4', 'Tesorería'),
(73, 'Belen Castillo', 'tacorcxc', 'C0orCxC$', 'Administración'),
(74, 'Cordinador Refacciones', 'tacordref', 'C0R3f14*', 'Refacciones'),
(75, 'Cordinador HYP', 'tacorhyp', 'C0orhyp*', 'Servicio'),
(76, 'Intercambios TyAcueducto', 'tacorinter', 'Int3rca$', 'Ventas'),
(77, 'Cordinador Taller Acue', 'tacortal', 'C0talle*', 'Servicio'),
(78, 'Guillermo Valadez', 'tacortec', '', 'Servicio'),
(79, 'Cordinador de Ventas', 'tacorven', 'C00rven$', 'Ventas'),
(80, 'Cordinador Ventas Moviles', 'tacorvenm', 'C00rvm*', 'Ventas'),
(81, 'Cordinador CXP', 'tacxp', 'C0orCxP$', 'Administración'),
(82, 'Financiamiento TyAcueducto', 'tafinan', 'F1nanci*', 'Ventas'),
(83, 'Cordinador Garantias', 'tagarantias', 'C0orgar$', 'Servicio'),
(84, 'Andres Apis', 'tagtecom', '', 'Ventas'),
(85, 'Gerente Financiamiento Acue', 'tagtefin', 'Gt3F1na*', 'Ventas'),
(86, 'Gerente General TyAcueducto', 'tagtegral', 'G3nGr#l$', 'Ventas'),
(87, 'Gerente de Posventa', 'tagtepos', 'P0s14*', 'Servicio'),
(88, 'Gerente Seminuevos Acue', 'tagtesem', 'Gt3semi*', 'Seminuevos'),
(89, 'Gerente de Servicio', 'tagteser', 'Gt3serv*', 'Servicio'),
(90, 'Gerente de Ventas Acueducto', 'tagteven', 'Gt3ven2*', 'Ventas'),
(91, 'Jefe LyP', 'tajeflyp', 'J3fehyp$', 'Servicio'),
(92, 'Tesorieria TyAcueducto', 'tajeftes', '', 'Tesorería'),
(93, 'Kaizen HyP', 'takaihyp', 'HyPK4!zn', 'Servicio'),
(94, 'Promotor Kaizen', 'takaizen', 'Ka1zen1*', 'Servicio'),
(95, 'Mdt TyAcueducto', 'tamdt', 'Mdtacu3*', 'Servicio'),
(96, 'Mesa de Control TyAcueducto', 'tamescon', 'M3sacon$', 'Ventas'),
(97, 'Cuentas por Pagar', 'tapagos', 'Pag0s1$*', 'Tesorería'),
(98, 'Usuario Previas Acueducto', 'taprevias', 'Pr3vias$', 'Ventas'),
(99, 'Proveedores TyAcueducto', 'taproveedor', '', 'Administración'),
(100, 'Usuario Refacciones', 'tarefac', 'R3f14*', 'Refacciones'),
(101, 'Digitalizacion Acueducto', 'tascan', 'D1gital$', 'Ventas'),
(102, 'Seguridad Patrimonial', 'tasegpat', '', 'Administración'),
(103, 'Cordinador de Seguros', 'taseguro', 'S3guros*', 'Ventas'),
(104, 'Tarficador Acueducto', 'tatarificador', 'T4rific#', 'Administración'),
(105, 'Tecnico Taller Acueducto', 'tatectaller', 'T4l14*', 'Servicio'),
(106, 'Tesoreria DVR', 'tatesdvr', 'Dvrt3so$', 'Administración'),
(107, 'Carlos Navarrete', 'tatrainer', 'Tra1ner*', 'Ventas'),
(108, 'Ventas Digitales', 'tavendig', 'As3vend*', 'Ventas'),
(109, 'Web Master Acueducto', 'tawebmaster', '', 'Mercadotecnia'),
(110, 'Gerente Seminuevos', 'tcadmsem', 'Gt3semi*', 'Seminuevos'),
(111, 'Proveedores TyCountry', 'tcproveedor', '', 'Administración'),
(112, 'Tecnico LyP', 'teclyp', 'Techyp1$', 'Servicio'),
(113, 'vascor', 'vascor', 'V4scor*$', 'Servicio'),
(114, 'Lic.Yveth Garcia', 'ygarcia', 'D1rdeso$', 'Administración'),
(115, 'Zaira Velazquez', 'zvelazquez', 'F1scal1$', 'Administración'),
(116, 'Asesor de Ventas Moviles', 'taaseven', 'V3nmov*', 'Ventas'),
(117, 'Coordinador Corporativo', 'ozcorcorpdo', 'C0rdc0Do', 'Administración'),
(119, 'Asesor de Ventas Moviles', 'taaseven', 'V3nmov*', 'Ventas'),
(120, 'Coordinador Corporativo', 'ozcorcorpdo', 'C0rdc0Do', 'Administración'),
(122, 'Asesor de Ventas Moviles', 'taaseven', 'V3nmov*', 'Ventas'),
(123, 'Coordinador Corporativo', 'ozcorcorpdo', 'C0rdc0Do', 'Administración'),
(125, 'Asesor de Ventas Moviles', 'taaseven', 'V3nmov*', 'Ventas'),
(126, 'Coordinador Corporativo', 'ozcorcorpdo', 'C0rdc0Do', 'Administración'),
(127, 'Alipio Gömez', 'agomez', 'C0ntado$', 'Arrendadora');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_ad_pass`
--
ALTER TABLE `tbl_ad_pass`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ad_pass`
--
ALTER TABLE `tbl_ad_pass`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
