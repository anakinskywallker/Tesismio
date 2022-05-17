-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2019 a las 01:44:27
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panaderia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `FACTURAS_ID` int(11) NOT NULL,
  `INSUMO_ID` int(11) NOT NULL,
  `COMPRAS_ID` int(11) NOT NULL,
  `COM_CANTIDAD` int(11) DEFAULT NULL,
  `COM_FECHA` timestamp NULL DEFAULT NULL,
  `COM_VALOR` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `FACTURAS_ID` int(11) NOT NULL,
  `PERSONAL_ID` int(11) NOT NULL,
  `OBSERVACION_` varchar(50) DEFAULT NULL,
  `FAC_FECHA` timestamp NULL DEFAULT NULL,
  `FAC_VALOR` float DEFAULT NULL,
  `FAC_VALORTIPO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `INSUMO_ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `CANTIDAD` float DEFAULT NULL,
  `IN_FOTO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`INSUMO_ID`, `NOMBRE`, `TIPO`, `CANTIDAD`, `IN_FOTO`) VALUES
(1, 'FARALLONES', 1, 2000, ''),
(2, 'ALMIDON', 1, 2000, ''),
(3, 'FECULA', 1, 2000, ''),
(4, 'COLMAIZ', 1, 2000, ''),
(9, 'CONTENEDOR POSTRE', 3, 2000, ''),
(10, 'CAPUSILLO #5', 3, 2000, ''),
(11, 'PREMEZCLA INTEGRAL', 1, 2000, ''),
(12, 'SATIN PUDIN', 1, 2000, ''),
(13, 'POLVO HORNEAR', 1, 2000, ''),
(14, 'AZUCAR GRANEL', 1, 2000, ''),
(15, 'AZUCAR SOBRES', 1, 2000, ''),
(16, 'AZUCAR POLVO', 1, 2000, ''),
(17, 'ANTIMOHO', 1, 2000, ''),
(18, 'HY VOL RUCH', 1, 2000, ''),
(19, 'CPT', 1, 2000, ''),
(20, 'LECHE POLVO', 1, 2000, ''),
(21, 'GELHADAS', 1, 2000, ''),
(22, 'PROMASA', 1, 2000, ''),
(23, 'SAL', 1, 2000, ''),
(24, 'COCO DULCE', 1, 2000, ''),
(25, 'COCO SIMPLE', 1, 2000, ''),
(26, 'GELHADA SIN SABOR', 1, 2000, ''),
(27, 'COLORES PUROS', 2, 2000, ''),
(28, 'COLOR AEROGRAFO', 2, 2000, ''),
(29, 'HUEVOS', 2, 2000, ''),
(30, 'MANTEQUILLA P PAN', 2, 2000, ''),
(31, 'MANTEQ P ESP', 2, 2000, ''),
(32, 'ESCENCIAS', 2, 2000, ''),
(33, 'ESCENCIA LEVAPAPAN', 2, 2000, ''),
(34, 'COLOR PAN', 2, 2000, ''),
(35, 'LEVADURA', 2, 2000, ''),
(36, 'HOJA IDRE', 2, 2000, ''),
(37, 'CERNIDO	NUEZ', 2, 2000, ''),
(38, 'FRUTA CRISTALIZADA', 2, 2000, ''),
(39, 'CHOCOL SEMIAMARGO', 2, 2000, ''),
(40, 'PAPEL COMESTIBLE', 2, 2000, ''),
(41, 'GRAJEAS	MANI', 2, 2000, ''),
(42, 'RON', 2, 2000, ''),
(43, 'COCOA', 2, 2000, ''),
(44, 'TINTA IMPRESORA', 2, 2000, ''),
(45, 'GLUCOSA	GLISERINA', 2, 2000, ''),
(46, 'UVAS PASAS', 2, 2000, ''),
(47, 'GLASEADOS PUROS', 2, 2000, ''),
(48, 'GLASEADOS AGUADOS', 2, 2000, ''),
(49, 'RELLENOS', 2, 2000, ''),
(50, 'ACEITE COCINA', 2, 2000, ''),
(51, 'ACEITE FINO', 2, 2000, ''),
(52, 'AREQUIPE ARBOLITO', 2, 2000, ''),
(53, 'AREQUIPE OTRO', 2, 2000, ''),
(54, 'UVAS PASAS ENVIADAS', 2, 2000, ''),
(55, 'CEREZAS', 2, 2000, ''),
(56, 'LECHE CONDENSADA', 2, 2000, ''),
(57, 'VINO', 2, 2000, ''),
(58, 'TRUFEX', 2, 2000, ''),
(59, 'PASTILLAJE', 2, 2000, ''),
(60, 'APERITIVO', 2, 2000, ''),
(61, 'AROMATICA', 2, 2000, ''),
(62, 'MILO', 2, 2000, ''),
(63, 'MALTEADA', 2, 2000, ''),
(64, 'CAFÉ INSTANTANEO', 2, 2000, ''),
(65, 'CAFÉ PARA COLAR', 2, 2000, ''),
(66, 'BOLSAS- DESECHABLES', 3, 2000, ''),
(67, 'CONTENDOR POSTRE', 3, 2000, ''),
(68, 'CONTENEDOR TRIANGULO', 3, 2000, ''),
(69, 'CONT CUADRADO', 3, 2000, ''),
(70, 'CAPUSILLO #5', 3, 2000, ''),
(71, 'CAPUSILLO #3', 3, 2000, ''),
(72, 'BASE #40', 3, 2000, ''),
(73, 'B #35', 3, 2000, ''),
(74, 'B #30', 3, 2000, ''),
(75, 'B #26', 3, 2000, ''),
(76, 'B #22', 3, 2000, ''),
(77, 'CAJA #35', 3, 2000, ''),
(78, 'C #32', 3, 2000, ''),
(79, 'C#26', 3, 2000, ''),
(80, 'C#22', 3, 2000, ''),
(81, 'BOLSA T 40', 3, 2000, ''),
(82, 'B T 30', 3, 2000, ''),
(83, 'B T 25', 3, 2000, ''),
(84, 'B T 15', 3, 2000, ''),
(85, 'BOLSA 2K', 3, 2000, ''),
(86, 'BOLSA PAPEL', 3, 2000, ''),
(87, 'B 3 K', 3, 2000, ''),
(88, 'B 1 K', 3, 2000, ''),
(89, 'B 1LB', 3, 2000, ''),
(90, 'CERVILLETAS', 3, 2000, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manejo_insumos`
--

CREATE TABLE `manejo_insumos` (
  `INSUMO_ID` int(11) NOT NULL,
  `PRO_ID` int(11) NOT NULL,
  `CANTIDAD` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `PERSONAL_ID` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDOS` varchar(50) DEFAULT NULL,
  `CEDULA` varchar(13) DEFAULT NULL,
  `CELULAR` varchar(13) DEFAULT NULL,
  `SALARIO` float DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `FOTO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`PERSONAL_ID`, `NOMBRE`, `APELLIDOS`, `CEDULA`, `CELULAR`, `SALARIO`, `TIPO`, `FOTO`) VALUES
(1, 'Andres Rodrigo', 'Lopez Realpe', '1088974334', '3137209982', 1500000, 1, ''),
(2, 'JORGE ARMANDO', 'MUNOZ ORDONEZ', '1088974444', '3154320347', 200000, 2, ''),
(3, 'JUAN JOSE', 'PAREDES ROSER', '99999', '3175704054', 200000, 3, ''),
(4, 'SANTIAGO', 'YEPES', '199999', '3008687230', 200000, 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `PERSONAL_ID` int(11) NOT NULL,
  `PRO_ID` int(11) NOT NULL,
  `PRODUCCION_ID` int(11) NOT NULL,
  `FECHA` timestamp NULL DEFAULT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `OBSERVACION_` varchar(50) DEFAULT NULL,
  `CANTIDAD` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `PRO_ID` int(11) NOT NULL,
  `PRO_COSTO` float DEFAULT NULL,
  `PRO_VENTA` float DEFAULT NULL,
  `PRO_NOMBRE` varchar(25) DEFAULT NULL,
  `PRO_TIPO` int(11) DEFAULT NULL,
  `PRO_CLASE` int(11) DEFAULT NULL,
  `PRO_CANTIDAD` char(10) NOT NULL,
  `PRO_FOTO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`PRO_ID`, `PRO_COSTO`, `PRO_VENTA`, `PRO_NOMBRE`, `PRO_TIPO`, `PRO_CLASE`, `PRO_CANTIDAD`, `PRO_FOTO`) VALUES
(1, 100, 200, 'Tostadas', 6, 1, '10', ''),
(2, 500, 1000, 'Integral p', 6, 1, '12', ''),
(3, 150, 300, 'Pan Integral', 6, 1, '10', 'imag/panintegral.jpg'),
(4, 100, 200, 'Pan Coco', 6, 1, '25', 'imag/pancoco.jpg'),
(5, 100, 200, 'Pan Basa ', 6, 1, '30', ''),
(6, 100, 200, 'Pan Cebra ', 6, 1, '40', ''),
(7, 100, 200, 'Pan Caracol', 6, 1, '50', ''),
(8, 100, 200, 'Galleta de', 6, 1, '0', ''),
(9, 100, 200, 'Pan Bocadi', 6, 1, '0', ''),
(10, 100, 200, 'Pan Suizo', 6, 1, '0', ''),
(12, 100, 200, 'Chiritas', 6, 1, '0', ''),
(13, 100, 200, 'Pan Mantequilla', 6, 1, '0', ''),
(14, 100, 200, 'Pan Huevo', 6, 1, '0', ''),
(15, 100, 200, 'Pan Agridulce', 6, 1, '0', ''),
(16, 100, 200, 'Pan Aliñado', 6, 1, '0', ''),
(17, 100, 200, 'Pan Queso', 6, 1, '0', ''),
(18, 500, 1000, 'Pan Crema', 5, 1, '0', ''),
(19, 500, 1000, 'Pan Gallet', 5, 1, '0', ''),
(20, 500, 1000, 'Pan Grande', 5, 1, '0', ''),
(21, 1000, 2000, 'Pan Grande', 5, 1, '0', ''),
(22, 2000, 3000, 'Pan Grande', 5, 1, '0', ''),
(23, 1000, 2000, 'Pan Molde', 5, 1, '0', ''),
(24, 500, 1000, 'Rosca de 1', 5, 1, '0', ''),
(25, 100, 200, 'Besito Peq', 4, 1, '10', ''),
(26, 100, 200, 'Almojabana', 4, 1, '10', 'imag/almojabana.jpg'),
(27, 500, 1000, 'Buñuelo', 4, 1, '12', 'imag/bueñuelos.jpg'),
(28, 150, 300, 'Pan de Bono', 4, 1, '10', 'imag/pandebono.jpg'),
(29, 100, 200, 'Dalitroque Paquete', 4, 1, '25', ''),
(30, 100, 200, 'Dalitroque Unidad ', 4, 1, '30', ''),
(36, 100, 200, 'Roscon Paquete', 3, 1, '10', ''),
(37, 500, 1000, 'Roscon Unidad', 3, 1, '12', ''),
(38, 150, 300, 'Dona Chocolate', 3, 1, '10', ''),
(39, 100, 200, 'Trufa', 3, 1, '25', ''),
(40, 100, 200, 'Chicharron', 3, 1, '30', ''),
(41, 100, 200, 'Torta Porcion', 3, 1, '10', ''),
(42, 500, 1000, 'Suspiro', 3, 1, '12', ''),
(43, 150, 300, 'Porcion Ponque', 3, 1, '10', ''),
(44, 100, 200, 'Quebradizos', 3, 1, '25', ''),
(45, 100, 200, 'Milojas', 3, 1, '30', ''),
(46, 100, 200, 'Dañuelos', 3, 1, '30', ''),
(47, 100, 200, 'Hawaino', 3, 1, '10', ''),
(48, 500, 1000, 'Pera', 3, 1, '12', ''),
(49, 150, 300, 'Denes', 3, 1, '10', ''),
(50, 100, 200, 'Galleta', 3, 1, '25', ''),
(51, 100, 200, 'Repolla', 3, 1, '25', ''),
(52, 100, 200, 'Cafe Negro', 2, 1, '10', 'imag/cafenegro.jpg'),
(53, 500, 1000, 'Cafe Leche', 2, 1, '12', 'imag/cafeconleche.jpg'),
(54, 150, 300, 'Chocolate', 2, 1, '10', 'imag/chocolate.jpg'),
(55, 100, 200, 'Milo Pequeño', 2, 1, '25', ''),
(56, 100, 200, 'Aromatica', 2, 1, '30', ''),
(57, 100, 200, 'Milo Frio', 2, 1, '10', ''),
(58, 500, 1000, 'Avena Grande', 2, 1, '12', ''),
(59, 150, 300, 'Avena Pequeña', 2, 1, '10', ''),
(60, 100, 200, 'Kumis Grande', 2, 1, '25', ''),
(61, 100, 200, 'Kumis Pequño', 2, 1, '30', ''),
(62, 100, 200, 'Maltead', 2, 1, '30', ''),
(63, 100, 200, 'Completo Ranchero', 2, 1, '10', 'imag/huevoranchero.jpg'),
(64, 500, 1000, 'Completo Perico', 2, 1, '12', 'imag/huevoperico.jpg'),
(65, 150, 300, 'Completo Cacerola', 2, 1, '10', 'imag/huevofrito.jpg'),
(66, 100, 200, 'Completo Rebuelto', 2, 1, '25', 'imag/huevosrevueltos.jpg'),
(67, 100, 200, 'Cacerola mas Pan', 2, 1, '30', ''),
(68, 100, 200, 'Revulto mas Pan', 2, 1, '10', ''),
(69, 500, 1000, 'Ranchero mas Pan', 2, 1, '12', ''),
(70, 150, 300, 'Perico mas Pan', 2, 1, '10', ''),
(71, 100, 200, 'Almuerzo Unidad', 2, 1, '25', ''),
(72, 100, 200, 'Tiquetera', 2, 1, '30', ''),
(73, 100, 200, 'Completo Ranchero', 1, 1, '10', ''),
(74, 500, 1000, 'Completo Perico', 1, 1, '12', ''),
(75, 150, 300, 'Completo Cacerola', 1, 1, '10', ''),
(76, 100, 200, 'Comp Rebuelto', 1, 1, '25', ''),
(77, 100, 200, 'Cacerola mas Pan', 1, 1, '30', ''),
(78, 100, 200, 'Revulto mas Pan', 1, 1, '10', ''),
(79, 500, 1000, 'Ranchero mas Pan', 1, 1, '12', ''),
(80, 150, 300, 'Perico mas Pan', 1, 1, '10', ''),
(81, 100, 200, 'Almuerzo Unidad', 1, 1, '25', ''),
(82, 100, 200, 'Tiquetera', 1, 1, '30', ''),
(83, 1000, 1300, 'Pony', 1, 2, '10', 'imag/pony.jpg'),
(84, 100, 200, 'Bon Yourt', 2, 2, '10', ''),
(85, 500, 1000, 'Avena vaso', 2, 2, '12', ''),
(86, 150, 300, 'Boggy Premio', 2, 2, '10', ''),
(87, 100, 200, 'Galleta', 2, 2, '25', ''),
(88, 100, 200, 'Nectar', 2, 2, '25', ''),
(89, 100, 200, 'Leche Purace', 2, 2, '25', ''),
(90, 100, 200, 'Yogurt Bolsa', 3, 2, '10', ''),
(91, 500, 1000, 'Bon Yourt', 3, 2, '12', ''),
(92, 150, 300, 'Kumis Bolsa', 3, 2, '10', ''),
(93, 100, 200, 'Yogurt Vaso', 3, 2, '25', ''),
(94, 100, 200, 'Leche 1.1', 4, 2, '10', ''),
(95, 500, 1000, 'Crema de Leche 900', 4, 2, '12', ''),
(96, 150, 300, 'Leche Deslactosada', 4, 2, '10', ''),
(97, 100, 200, 'Crema de leche 450', 4, 2, '25', ''),
(98, 100, 200, 'Crema de leche 200', 4, 2, '25', ''),
(99, 100, 200, 'Volcan', 5, 2, '10', ''),
(100, 500, 1000, 'Nuemero', 5, 2, '12', ''),
(101, 150, 300, 'Broma', 5, 2, '10', ''),
(102, 100, 200, 'Infantil', 5, 2, '25', ''),
(103, 100, 200, '9 ONZ', 6, 2, '10', ''),
(104, 500, 1000, '7 ONZ', 6, 2, '12', ''),
(105, 150, 300, '8 ONZ Espuma', 6, 2, '10', ''),
(106, 100, 200, '3 Litros', 7, 2, '10', ''),
(107, 500, 1000, '1.5 litros', 7, 2, '12', ''),
(108, 150, 300, 'Agua Brisa Mini', 7, 2, '10', ''),
(109, 100, 200, 'Agua Brisa', 7, 2, '25', ''),
(110, 100, 200, 'Agua 6 litros', 7, 2, '25', ''),
(111, 100, 200, 'Gaseosa', 7, 2, '25', 'imag/cocacola.jpg'),
(112, 100, 200, 'Power', 7, 2, '25', ''),
(113, 100, 200, 'Agua Bolsa', 7, 2, '25', ''),
(114, 100, 200, 'Jugo', 7, 2, '25', ''),
(115, 100, 200, '3 Litros', 8, 2, '10', ''),
(116, 500, 1000, 'Hit Peti', 8, 2, '12', ''),
(117, 150, 300, 'Hit Vidrio', 8, 2, '10', ''),
(118, 100, 200, 'Gatorade', 8, 2, '25', ''),
(119, 100, 200, 'H2O', 8, 2, '25', ''),
(120, 100, 200, 'Agua Cristal', 8, 2, '25', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `VENTAS_ID` int(10) NOT NULL,
  `PRO_ID` int(11) NOT NULL,
  `FACTURAS_ID` int(11) NOT NULL,
  `VEN_CANTIDAD` int(11) DEFAULT NULL,
  `VEN_FECHA` timestamp NULL DEFAULT NULL,
  `VEN_VALOR` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`COMPRAS_ID`),
  ADD UNIQUE KEY `COMPRAS_PK` (`COMPRAS_ID`),
  ADD KEY `RELATIONSHIP_8_FK` (`FACTURAS_ID`),
  ADD KEY `RELATIONSHIP_9_FK` (`INSUMO_ID`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`FACTURAS_ID`),
  ADD UNIQUE KEY `FACTURAS_PK` (`FACTURAS_ID`),
  ADD KEY `RELATIONSHIP_2_FK` (`PERSONAL_ID`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`INSUMO_ID`),
  ADD UNIQUE KEY `INSUMOS_PK` (`INSUMO_ID`);

--
-- Indices de la tabla `manejo_insumos`
--
ALTER TABLE `manejo_insumos`
  ADD PRIMARY KEY (`INSUMO_ID`,`PRO_ID`),
  ADD UNIQUE KEY `RELATIONSHIP_6_PK` (`INSUMO_ID`,`PRO_ID`),
  ADD KEY `RELATIONSHIP_6_FK` (`INSUMO_ID`),
  ADD KEY `RELATIONSHIP_10_FK` (`PRO_ID`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`PERSONAL_ID`),
  ADD UNIQUE KEY `PERSONAL_PK` (`PERSONAL_ID`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`PRODUCCION_ID`),
  ADD KEY `RELATIONSHIP_4_FK` (`PERSONAL_ID`),
  ADD KEY `RELATIONSHIP_5_FK` (`PRO_ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`PRO_ID`),
  ADD UNIQUE KEY `PRODUCTOS_PK` (`PRO_ID`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`VENTAS_ID`),
  ADD UNIQUE KEY `VENTAS_PK` (`VENTAS_ID`),
  ADD KEY `RELATIONSHIP_3_FK` (`PRO_ID`),
  ADD KEY `RELATIONSHIP_7_FK` (`FACTURAS_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `COMPRAS_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `FACTURAS_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `INSUMO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `PERSONAL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `PRODUCCION_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `VENTAS_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `FK_COMPRAS_RELATIONS_FACTURAS` FOREIGN KEY (`FACTURAS_ID`) REFERENCES `facturas` (`FACTURAS_ID`),
  ADD CONSTRAINT `FK_COMPRAS_RELATIONS_INSUMOS` FOREIGN KEY (`INSUMO_ID`) REFERENCES `insumos` (`INSUMO_ID`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `FK_FACTURAS_RELATIONS_PERSONAL` FOREIGN KEY (`PERSONAL_ID`) REFERENCES `personal` (`PERSONAL_ID`);

--
-- Filtros para la tabla `manejo_insumos`
--
ALTER TABLE `manejo_insumos`
  ADD CONSTRAINT `FK_MANEJO_I_RELATIONS_INSUMOS` FOREIGN KEY (`INSUMO_ID`) REFERENCES `insumos` (`INSUMO_ID`),
  ADD CONSTRAINT `FK_MANEJO_I_RELATIONS_PRODUCTO` FOREIGN KEY (`PRO_ID`) REFERENCES `productos` (`PRO_ID`);

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `FK_PRODUCCI_RELATIONS_PERSONAL` FOREIGN KEY (`PERSONAL_ID`) REFERENCES `personal` (`PERSONAL_ID`),
  ADD CONSTRAINT `FK_PRODUCCI_RELATIONS_PRODUCTO` FOREIGN KEY (`PRO_ID`) REFERENCES `productos` (`PRO_ID`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `FK_VENTAS_RELATIONS_FACTURAS` FOREIGN KEY (`FACTURAS_ID`) REFERENCES `facturas` (`FACTURAS_ID`),
  ADD CONSTRAINT `FK_VENTAS_RELATIONS_PRODUCTO` FOREIGN KEY (`PRO_ID`) REFERENCES `productos` (`PRO_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
