-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2018 a las 02:50:12
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mesero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida`
--

CREATE TABLE `bebida` (
  `bebida_id` int(11) NOT NULL,
  `nombre_be` varchar(100) DEFAULT NULL,
  `precio_be` float(8,0) DEFAULT NULL,
  `descripcion_be` varchar(200) DEFAULT NULL,
  `id_restaurante` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bebida`
--

INSERT INTO `bebida` (`bebida_id`, `nombre_be`, `precio_be`, `descripcion_be`, `id_restaurante`) VALUES
(1, 'Coca Cola', 4, 'Coca Cola Vidrio', 1),
(2, 'Sabor Uva', 7, 'Fanta Uva 120 onz', 1),
(3, 'Naranja Nat', 6, 'Fresco de Naranja ', 1),
(4, 'Coca Cola 120', 7, 'Coca Cola 120 onz', 1),
(6, 'Sabor Naranja', 7, 'Fanta Naranja 120 onz', 1),
(7, 'Jamaica Nat', 6, 'Fresco de Rosa Jamaica', 1),
(8, 'Horchata Nat', 6, 'Fresco Horchata', 1),
(9, 'Naranjada con soda', 5, 'Naranjada con soda', 1),
(10, 'Limonada con soda', 5, 'Limonada con soda', 1),
(11, 'Cafe', 12, 'Cafe ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebida_pedido`
--

CREATE TABLE `bebida_pedido` (
  `bebida_pedido_id` int(10) NOT NULL,
  `cliente` int(10) NOT NULL,
  `fecha_pedido` text NOT NULL,
  `cantidad` int(10) NOT NULL,
  `total` float NOT NULL,
  `atendido` int(5) NOT NULL,
  `arriba` int(10) NOT NULL,
  `abajo` int(10) NOT NULL,
  `bebida_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bebida_pedido`
--

INSERT INTO `bebida_pedido` (`bebida_pedido_id`, `cliente`, `fecha_pedido`, `cantidad`, `total`, `atendido`, `arriba`, `abajo`, `bebida_id`) VALUES
(19, 13, '2018-10-16', 1, 6, 1, 1, 0, 7),
(20, 27, '2018-10-16', 1, 7, 1, 1, 0, 4),
(21, 28, '2018-10-17', 1, 4, 1, 1, 0, 1),
(22, 28, '2018-10-17', 1, 6, 1, 0, 1, 7),
(23, 28, '2018-10-17', 1, 6, 1, 1, 0, 8),
(24, 28, '2018-10-17', 1, 5, 1, 1, 0, 9),
(25, 13, '2018-10-17', 1, 7, 1, 1, 0, 4),
(26, 13, '2018-10-18', 2, 14, 1, 1, 0, 4),
(27, 13, '2018-10-18', 1, 6, 1, 1, 0, 8),
(28, 13, '2018-10-18', 1, 5, 1, 1, 0, 9),
(29, 29, '2018-10-19', 1, 6, 1, 1, 0, 7),
(30, 30, '2018-10-19', 1, 4, 1, 1, 0, 1),
(31, 13, '2018-10-20', 1, 12, 1, 1, 0, 11),
(32, 33, '2018-10-30', 1, 7, 1, 1, 0, 4),
(33, 33, '2018-10-30', 1, 7, 1, 1, 0, 4),
(34, 35, '2018-10-31', 1, 4, 1, 1, 0, 1),
(35, 13, '2018-11-03', 1, 7, 1, 1, 0, 4),
(36, 37, '2018-11-06', 1, 7, 1, 1, 0, 4),
(37, 36, '2018-11-06', 1, 12, 1, 1, 0, 11),
(38, 40, '2018-11-08', 1, 4, 1, 1, 0, 1),
(39, 13, '2018-11-08', 1, 6, 1, 1, 0, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `password`) VALUES
(15, 'maria jose', 'maria'),
(13, 'ronald', 'Elquesea'),
(14, 'carlos', '123'),
(16, 'jorge', '1234'),
(17, 'mendez', 'maria'),
(18, 'kevin', '1234'),
(19, 'cristh victoria', '123'),
(20, 'meme', 'meme'),
(21, 'auron', '123'),
(31, 'admin', 'admin'),
(23, 'kevin', '123'),
(25, 'chef', 'chef123'),
(26, 'cajero', 'cajero123'),
(27, 'dennis', '123'),
(28, 'victor', '123'),
(29, 'vilma', 'vilma123'),
(30, 'daniel', 'daniel123'),
(32, 'maria', 'maria'),
(33, 'pete', 'pete'),
(34, 'ronaldkjkjk', 'ronald'),
(35, 'manuel', 'manuel123'),
(36, 'me', 'me'),
(37, 'Ne', 'ne'),
(38, 'pc', 'pc'),
(39, 'Cel', 'Cel'),
(40, 'reyes', 'reyes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato`
--

CREATE TABLE `plato` (
  `plato_id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ingredientes` varchar(200) DEFAULT NULL,
  `tiempo` varchar(100) DEFAULT NULL,
  `precio` float(8,0) DEFAULT NULL,
  `decripcion` varchar(200) DEFAULT NULL,
  `oferta` varchar(100) DEFAULT NULL,
  `fecha_oferta` text,
  `id_restaurante` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plato`
--

INSERT INTO `plato` (`plato_id`, `nombre`, `ingredientes`, `tiempo`, `precio`, `decripcion`, `oferta`, `fecha_oferta`, `id_restaurante`) VALUES
(1, 'sandwitch campero', 'carne-huevo-pan-medallones-salsa', 'Desayuno', 30, 'menu sandwitch campero desayuno', 'sin oferta', 'xxx', 1),
(2, 'sandwitch de carne', 'carne de res y pan ', 'Desayuno', 30, 'sandwitch con pan integral con carne de res', 'no hay ', 'xx', 1),
(3, 'sandwitch de jamon y queso', 'jamon-queso-y pan', 'Desayuno', 35, 'jamon con quese derretido', 'no xD', 'xxx', 1),
(4, 'tradicional chapin', 'huevo, frijoles, chirmol, tortillas', 'Cena', 38, 'cena tradicional chapina', 'no aplica', NULL, 1),
(5, 'Hot cakes', 'Harina, mantequilla, leche', 'Desayuno', 18, 'Hot Cakes', 'No aplica', NULL, 1),
(6, 'Avena con frutas', 'avena, frutas', 'Desayuno', 24, 'Avena con frutas', 'No aplica', NULL, 1),
(7, 'Menu tipico', 'huevo, frijol', 'Desayuno', 35, 'Menu tipico (Frijol, huevos, platano)', 'No aplica', NULL, 1),
(8, 'Churrasco', 'carne asada, papas, guacamole', 'Almuerzo', 38, 'churrasco', 'No aplica', NULL, 1),
(9, 'Pizza personal', 'variados', 'Almuerzo', 45, 'Pizza personal (peperonee, jamon, queso)', 'No aplica', NULL, 1),
(10, 'Hamburguesa clasica', 'carne, lechuga, salsa', 'Almuerzo', 25, 'Hamburguesa clasica', 'No aplica', NULL, 1),
(11, 'Lassagna', 'quesos, pasta', 'Almuerzo', 45, 'Lassagna (Bolognesa o de pollo)', 'No aplica', NULL, 1),
(12, 'Combo Piezas de pollo', 'pollo ', 'Almuerzo', 48, '6 piezas pollo (cuadril, ala, pechuga)', 'No aplica', NULL, 1),
(13, 'Tacos mexicanos', 'Carne, salsa, chile', 'Cena', 13, 'Tacos mexicanos', 'No aplica', NULL, 1),
(14, 'Brochetas de pavo y verduras', 'carne de pavo, verduras', 'Cena', 55, 'Brochetas de pavo y verduras', 'No aplica', NULL, 1),
(15, 'Hot Dogs', 'Salchicha, salsa, mayonesa, chile', 'Cena', 12, 'Hot Dogs ', 'No aplica', NULL, 1),
(16, 'Macarrones', 'Pasta, queso', 'Cena', 34, 'Macarrones con queso', 'No aplica', NULL, 1),
(17, 'Arroz chino', 'Arroz, salsa soya, salsa inglesa', 'Almuerzo', 34, 'Arroz chino', 'No aplica', NULL, 1),
(18, 'Pollo Agridulce', 'Pollo, salsa agridulce, chile dulce', 'Cena', 30, 'Pollo Agridulce', 'No aplica', NULL, 1),
(19, 'Sopa de pollo y maiz', 'Pollo, maiz, ajo, jengibre', 'Desayuno', 24, 'Sopa de pollo y maiz', 'No aplica', NULL, 1),
(20, 'Ensalada de repollo', 'Repollo, vinagre', 'Desayuno', 20, 'Ensalada de repollo', 'No aplica', NULL, 1),
(21, 'Pollo en salsa de Limon', 'pechuga de pollo, maizena, huevo', 'Cena', 28, 'Pollo en salsa de Limon', 'No aplica', NULL, 1),
(22, 'Albondigas Chinas', 'Albondigas, aceite de oliva, jamon cocido', 'Almuerzo', 23, 'Albondigas Chinas', 'No aplica', NULL, 1),
(23, 'Menu de Quesadillas', 'Huevos, cilantro, cebolla roja', 'Cena', 16, '3 Quesadillas', 'No aplica', NULL, 1),
(24, 'Ensalada Griega', 'pepino, tomates, aceitunas, Queso feta', 'Almuerzo', 58, 'Ensalada Griega', 'No aplica', NULL, 1),
(25, 'Crema de papa al Horno', 'Tocino, Margarina, trigo, crema', 'Desayuno', 30, 'Crema de papa al Horno', 'No aplica', NULL, 1),
(26, 'Wrap de Jamon', 'Jamon, lechuga, mayonesa, tortillas de harina', 'Desayuno', 44, 'Wrap de Jamon', 'No aplica', NULL, 1),
(27, 'Pasta Florentina', 'espagueti, queso parmesano, almendras, pimienta molida', 'Almuerzo', 55, 'Pasta Florentina', 'No aplica', NULL, 1),
(28, 'Sopa de tortilla', 'Ajo, pollo, verduras, oregano', 'Cena', 30, 'Sopa de tortilla', 'No aplica', NULL, 1),
(29, 'Pechuga de pavo', 'Pechuga de pavo, berenjenas, tomate', 'Almuerzo', 35, 'Pechuga de pavo', 'No aplica', NULL, 1),
(30, 'Carnitas de pescado', 'Filete de pescado, jugo de limon, harina', 'Cena', 34, 'Carnitas de pescado', 'No aplica', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plato_pedido`
--

CREATE TABLE `plato_pedido` (
  `plato_pedido_id` int(10) NOT NULL,
  `fecha_pedido` text NOT NULL,
  `cliente` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `tiempo` varchar(50) NOT NULL,
  `total` float NOT NULL,
  `atendido` int(5) NOT NULL,
  `arriba` int(10) NOT NULL,
  `abajo` int(10) NOT NULL,
  `plato_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plato_pedido`
--

INSERT INTO `plato_pedido` (`plato_pedido_id`, `fecha_pedido`, `cliente`, `cantidad`, `tiempo`, `total`, `atendido`, `arriba`, `abajo`, `plato_id`) VALUES
(48, '2018-10-16', 13, 1, 'Cena', 38, 1, 1, 0, 4),
(49, '2018-10-16', 13, 1, 'Cena', 12, 1, 1, 0, 15),
(50, '2018-10-16', 27, 1, 'Almuerzo', 45, 1, 0, 1, 9),
(51, '2018-10-16', 27, 1, 'Almuerzo', 25, 1, 1, 0, 10),
(52, '2018-10-17', 27, 1, 'Cena', 38, 1, 1, 0, 4),
(53, '2018-10-17', 27, 1, 'Cena', 13, 1, 0, 1, 13),
(54, '2018-10-17', 27, 1, 'Cena', 55, 1, 1, 0, 14),
(55, '2018-10-17', 27, 1, 'Cena', 38, 1, 0, 1, 4),
(56, '2018-10-17', 27, 1, 'Cena', 38, 1, 0, 1, 4),
(57, '2018-10-17', 27, 1, 'Cena', 13, 1, 1, 0, 13),
(58, '2018-10-17', 27, 1, 'Cena', 13, 1, 1, 0, 13),
(59, '2018-10-17', 27, 1, 'Cena', 13, 1, 1, 0, 13),
(60, '2018-10-17', 27, 1, 'Cena', 30, 1, 1, 0, 18),
(61, '2018-10-17', 27, 1, 'Cena', 55, 1, 1, 0, 14),
(62, '2018-10-17', 27, 1, 'Cena', 30, 1, 1, 0, 18),
(63, '2018-10-17', 27, 1, 'Cena', 30, 1, 0, 1, 28),
(64, '2018-10-17', 27, 1, 'Cena', 30, 1, 1, 0, 28),
(65, '2018-10-17', 27, 1, 'Cena', 30, 1, 1, 0, 28),
(66, '2018-10-17', 27, 1, 'Cena', 30, 1, 0, 1, 28),
(67, '2018-10-17', 28, 1, 'Cena', 38, 1, 1, 0, 4),
(68, '2018-10-17', 28, 1, 'Cena', 13, 1, 1, 0, 13),
(69, '2018-10-17', 28, 1, 'Cena', 30, 1, 1, 0, 18),
(70, '2018-10-17', 28, 1, 'Cena', 12, 1, 0, 1, 15),
(71, '2018-10-18', 13, 2, 'Cena', 24, 1, 1, 0, 15),
(72, '2018-10-18', 13, 1, 'Cena', 13, 1, 1, 0, 13),
(73, '2018-10-18', 13, 1, 'Cena', 30, 1, 0, 1, 28),
(74, '2018-10-18', 13, 1, 'Cena', 34, 1, 1, 0, 30),
(75, '2018-10-18', 13, 1, 'Cena', 16, 1, 1, 0, 23),
(76, '2018-10-19', 29, 1, 'Cena', 38, 1, 1, 0, 4),
(77, '2018-10-19', 29, 1, 'Cena', 13, 1, 1, 0, 13),
(78, '2018-10-19', 29, 1, 'Cena', 55, 1, 1, 0, 14),
(79, '2018-10-19', 30, 1, 'Cena', 12, 1, 1, 0, 15),
(80, '2018-10-19', 30, 1, 'Cena', 55, 1, 1, 0, 14),
(81, '2018-10-19', 30, 1, 'Cena', 34, 1, 1, 0, 16),
(82, '2018-10-19', 30, 1, 'Cena', 55, 1, 0, 1, 14),
(83, '2018-10-20', 13, 1, 'Desayuno', 18, 1, 1, 0, 5),
(84, '2018-10-20', 13, 1, 'Desayuno', 30, 1, 0, 1, 2),
(85, '2018-10-28', 13, 1, 'Cena', 28, 1, 1, 0, 21),
(86, '2018-10-29', 13, 1, 'Almuerzo', 25, 1, 1, 0, 10),
(87, '2018-10-30', 33, 1, 'Cena', 38, 1, 1, 0, 4),
(88, '2018-10-30', 33, 1, 'Cena', 30, 1, 1, 0, 28),
(89, '2018-10-30', 33, 1, 'Cena', 12, 1, 1, 0, 15),
(90, '2018-10-30', 33, 1, 'Cena', 12, 1, 0, 1, 15),
(91, '2018-10-30', 33, 1, 'Desayuno', 30, 1, 1, 0, 1),
(92, '2018-10-30', 33, 1, 'Desayuno', 30, 1, 1, 0, 1),
(93, '2018-10-31', 35, 1, 'Desayuno', 30, 1, 1, 0, 2),
(94, '2018-10-31', 35, 1, 'Desayuno', 30, 1, 0, 1, 2),
(95, '2018-11-06', 37, 1, 'Cena', 34, 1, 1, 0, 30),
(96, '2018-11-06', 36, 1, 'Cena', 13, 1, 1, 0, 13),
(97, '2018-11-06', 37, 1, 'Cena', 12, 1, 1, 0, 15),
(98, '2018-11-06', 36, 1, 'Cena', 28, 1, 1, 0, 21),
(99, '2018-11-06', 37, 1, 'Cena', 30, 1, 1, 0, 18),
(100, '2018-11-08', 40, 1, 'Almuerzo', 45, 1, 1, 0, 9),
(101, '2018-11-08', 40, 1, 'Almuerzo', 25, 1, 1, 0, 10),
(102, '2018-11-08', 13, 1, 'Cena', 34, 0, 0, 0, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postre`
--

CREATE TABLE `postre` (
  `id_postre` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ingrediente` varchar(300) DEFAULT NULL,
  `precio` float(8,0) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `id_restaurante` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postre`
--

INSERT INTO `postre` (`id_postre`, `nombre`, `ingrediente`, `precio`, `descripcion`, `id_restaurante`) VALUES
(1, 'pastel de choclocate', 'choclate y leche de coco', 15, 'pastel de chocolate hecho con leche', 1),
(2, 'pastel de fresa', 'fresas y crema', 10, 'pastel de fresa y crema', 1),
(3, 'Torta de Manzana', 'Manzanas', 25, 'Torta de Manzana', 1),
(4, 'Flan', 'Vainilla, huevos', 8, 'Flan ', 1),
(5, 'Pastel de tres leches', 'leche, huevos, vainilla', 30, 'pastel de tres leches', 1),
(6, 'pastel tres leches ind', 'leche, huevos, vainilla', 10, 'pastel tres leches individual', 1),
(7, 'crepa de banano', 'banano', 15, 'crepa de banano', 1),
(8, 'crepa de fresa', 'fresa', 15, 'crepa de fresa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postre_pedido`
--

CREATE TABLE `postre_pedido` (
  `postre_pedido_id` int(10) NOT NULL,
  `cliente` int(10) NOT NULL,
  `fecha_pedido` text NOT NULL,
  `cantidad` int(10) NOT NULL,
  `total` float NOT NULL,
  `atendido` int(5) NOT NULL,
  `arriba` int(10) NOT NULL,
  `abajo` int(10) NOT NULL,
  `id_postre` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `postre_pedido`
--

INSERT INTO `postre_pedido` (`postre_pedido_id`, `cliente`, `fecha_pedido`, `cantidad`, `total`, `atendido`, `arriba`, `abajo`, `id_postre`) VALUES
(15, 13, '2018-10-16', 1, 8, 1, 1, 0, 4),
(16, 28, '2018-10-17', 1, 15, 1, 1, 0, 1),
(17, 28, '2018-10-17', 1, 10, 1, 1, 0, 2),
(18, 28, '2018-10-17', 1, 25, 1, 0, 1, 3),
(19, 28, '2018-10-17', 1, 30, 1, 1, 0, 5),
(20, 13, '2018-10-18', 1, 30, 1, 1, 0, 5),
(21, 13, '2018-10-18', 1, 8, 1, 1, 0, 4),
(22, 13, '2018-10-18', 1, 15, 1, 0, 1, 7),
(23, 13, '2018-10-18', 1, 15, 1, 0, 1, 8),
(24, 13, '2018-10-18', 1, 25, 1, 1, 0, 3),
(25, 33, '2018-10-30', 1, 15, 1, 1, 0, 1),
(26, 33, '2018-10-30', 1, 15, 1, 1, 0, 1),
(27, 35, '2018-10-31', 1, 25, 1, 1, 0, 3),
(28, 37, '2018-11-06', 1, 30, 1, 1, 0, 5),
(29, 36, '2018-11-06', 1, 15, 1, 1, 0, 7),
(30, 40, '2018-11-08', 1, 15, 1, 1, 0, 1),
(31, 40, '2018-11-08', 1, 15, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurante`
--

CREATE TABLE `restaurante` (
  `id_restaurante` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `ciudad` varchar(10) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restaurante`
--

INSERT INTO `restaurante` (`id_restaurante`, `nombre`, `ciudad`, `telefono`, `facebook`, `twitter`) VALUES
(1, 'Pollo Campero', 'Guatemala', 79413234, 'https://www.facebook.com/PolloCamperoGuatemala/', 'xxx');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebida`
--
ALTER TABLE `bebida`
  ADD PRIMARY KEY (`bebida_id`),
  ADD KEY `Refrestaurante12` (`id_restaurante`);

--
-- Indices de la tabla `bebida_pedido`
--
ALTER TABLE `bebida_pedido`
  ADD PRIMARY KEY (`bebida_pedido_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plato`
--
ALTER TABLE `plato`
  ADD PRIMARY KEY (`plato_id`),
  ADD KEY `Refrestaurante13` (`id_restaurante`);

--
-- Indices de la tabla `plato_pedido`
--
ALTER TABLE `plato_pedido`
  ADD PRIMARY KEY (`plato_pedido_id`);

--
-- Indices de la tabla `postre`
--
ALTER TABLE `postre`
  ADD PRIMARY KEY (`id_postre`),
  ADD KEY `Refrestaurante17` (`id_restaurante`);

--
-- Indices de la tabla `postre_pedido`
--
ALTER TABLE `postre_pedido`
  ADD PRIMARY KEY (`postre_pedido_id`);

--
-- Indices de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`id_restaurante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebida`
--
ALTER TABLE `bebida`
  MODIFY `bebida_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `bebida_pedido`
--
ALTER TABLE `bebida_pedido`
  MODIFY `bebida_pedido_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `plato`
--
ALTER TABLE `plato`
  MODIFY `plato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `plato_pedido`
--
ALTER TABLE `plato_pedido`
  MODIFY `plato_pedido_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `postre`
--
ALTER TABLE `postre`
  MODIFY `id_postre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `postre_pedido`
--
ALTER TABLE `postre_pedido`
  MODIFY `postre_pedido_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `id_restaurante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
