-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2023 a las 22:45:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chefcito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategPlatos` int(11) NOT NULL,
  `nombreCategorias` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategPlatos`, `nombreCategorias`) VALUES
(1, 'Entradas'),
(2, 'Plato Fuerte'),
(3, 'Bebida'),
(4, 'Postre'),
(5, 'Acompañamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `idIngredientes` int(5) NOT NULL,
  `nombreIngrediente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`idIngredientes`, `nombreIngrediente`) VALUES
(1, 'Arroz'),
(2, 'Azucar'),
(3, 'Sal'),
(4, 'Pimienta'),
(5, 'Aceite de oliva'),
(6, 'Vinagre'),
(7, 'Ajo'),
(8, 'Cebolla'),
(9, 'Pimiento'),
(10, 'Tomate'),
(11, 'Lechuga'),
(12, 'Pepino'),
(13, 'Zanahoria'),
(14, 'Papa'),
(15, 'Aguacate'),
(16, 'Limón'),
(17, 'Naranja'),
(18, 'Manzana'),
(19, 'Plátano'),
(20, 'Fresas'),
(21, 'Uvas'),
(22, 'Sandía'),
(23, 'Melón'),
(24, 'Piña'),
(25, 'Mango'),
(26, 'Pera'),
(27, 'Ciruela'),
(28, 'Durazno'),
(29, 'Kiwi'),
(30, 'Almendras'),
(31, 'Nueces'),
(32, 'Avellanas'),
(33, 'Cacahuetes'),
(34, 'Chia'),
(35, 'Linaza'),
(36, 'Huevo'),
(37, 'Leche'),
(38, 'Yogur'),
(39, 'Mantequilla'),
(40, 'Queso'),
(41, 'Jamón'),
(42, 'Salchicha'),
(43, 'Pollo'),
(44, 'Res'),
(45, 'Cerdo'),
(46, 'Pescado'),
(47, 'Camarones'),
(48, 'Langosta'),
(49, 'Calamar'),
(50, 'Pasta'),
(52, 'Pan'),
(53, 'Harina'),
(54, 'Azúcar'),
(55, 'Levadura'),
(56, 'Salsa de tomate'),
(57, 'Aceite vegetal'),
(58, 'Café'),
(59, 'Té'),
(60, 'Chocolate'),
(61, 'Miel'),
(62, 'Ketchup'),
(63, 'Mostaza'),
(64, 'Mayonesa'),
(65, 'Soya'),
(66, 'Salsa picante'),
(67, 'Avena'),
(68, 'Canela'),
(69, 'Clavo'),
(70, 'Nuez moscada'),
(71, 'Jengibre'),
(72, 'Vainilla'),
(73, 'Cúrcuma'),
(74, 'Orégano'),
(75, 'Tomillo'),
(76, 'Romero'),
(77, 'Albahaca'),
(78, 'Perejil'),
(79, 'Cilantro'),
(80, 'Menta'),
(81, 'Hinojo'),
(82, 'Laurel'),
(83, 'Estragón'),
(84, 'Hierbabuena'),
(85, 'Cebollín'),
(86, 'Salvia'),
(87, 'Melisa'),
(88, 'Eneldo'),
(89, 'Amapola'),
(90, 'Rábano'),
(91, 'Rúcula'),
(92, 'Espinacas'),
(93, 'Berros'),
(94, 'Col rizada'),
(95, 'Repollo'),
(96, 'Escarola'),
(97, 'Endivia'),
(98, 'Acelga'),
(99, 'Pimientos'),
(100, 'Champiñones'),
(101, 'Arroz'),
(102, 'Azucar'),
(103, 'Sal'),
(104, 'Pimienta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidoproducto`
--

CREATE TABLE `pedidoproducto` (
  `idPedidos` int(5) NOT NULL,
  `idPlatos` int(5) NOT NULL,
  `cantidadPedidosPlatos` int(11) NOT NULL,
  `precioUnitarioPedidoPlatos` float(10,2) NOT NULL,
  `subTotalPedidoPlatos` float(10,2) NOT NULL,
  `descuentoPedidoPlatos` float(10,2) NOT NULL,
  `ivaPedidoPlatos` float(10,2) NOT NULL,
  `totalPedidoPlatos` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedidos` int(5) NOT NULL,
  `numeroTelefono` varchar(20) NOT NULL,
  `fechaPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `valorPedido` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `idPlatos` int(5) NOT NULL,
  `nombrePlatos` varchar(45) NOT NULL,
  `entradPlatos` varchar(45) NOT NULL,
  `salidaPlatos` varchar(45) NOT NULL,
  `stockPtatos` int(11) NOT NULL,
  `valorPlatos` int(11) NOT NULL,
  `idCategPlatos` int(11) NOT NULL,
  `descripcionPlatos` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`idPlatos`, `nombrePlatos`, `entradPlatos`, `salidaPlatos`, `stockPtatos`, `valorPlatos`, `idCategPlatos`, `descripcionPlatos`) VALUES
(2, 'Plato Sopa de pollo', '', '', 0, 6000, 1, 'Varias piezas de pollo caparazones, pescuezo y si quieres, una pechuga. Todo sin piel. 6 a 8 tazas de agua 3 patatas medianas 1 zanahoria mediana 1 trozo de calabaza equivalente en tamaño a las patatas 1 cebollino 1 cebolla mediana 4 hojas de hierbabuena 1 guindilla opcional 1 pimiento mediano 1 tal'),
(3, 'Plato de Verduras', '', '', 0, 6000, 1, 'Cocina Casera 1 Calabacín pequeño 100 gr de calabaza 2 Zanahorias medianas 1 puñado de vainas picadas Varias hojas de espinacas 1/2 Cebolla 1 Guindilla picante  opcional 2 tallos de cebolla verde cebollino, verdeo 1 tallo mediano de apio con sus hojas Varias hojas de cilantro Varias hojas de perejil'),
(7, 'Paella de marisco', '', '', 0, 8500, 2, 'Calorías 340kcal 2 tazas de arroz 4 tazas de caldo de gambas ½ kg de calamares ½ kg de gambas frescas 1 puñado de conchas de mar almejas y mejillones 1 cebolla 1 tomate mediano ½ pimiento rojo 2 dientes de ajo ½ taza de guisantes 1 ramo de hojas de perejil fresco Aceite de oliva Sal Pimienta Coloran'),
(8, 'Crema de calabaza', '', '', 0, 6000, 1, 'Calorías 50kcal 1 litro de caldo de verduras 1 cebolla mediana 1/2 pimiento 1 tallo mediano de apio Algunas hojas de cilantro fresco 500 gr de calabaza Sal al gusto Pimienta al gusto'),
(9, 'Muslos de pollo al horno con patatas', '', '', 0, 9000, 2, 'Calorías 290kcal 2 muslos de pollo 2 patatas medianas 1/2 cebolla 1/2 pimiento rojo 1 cucharadita de estragón 1/2 cucharadita de comino molido Pimienta negra al gusto Sal al gusto Aceite de oliva'),
(10, 'Merluza al horno', '', '', 0, 10000, 2, 'Calorías 136kcal 1 kilo de lomos o filetes de merluza 1 cebolla blanca 1 pimiento opcional 2 dientes de ajo Aceite vegetal 1 vaso de vino blanco seco Sal al gusto Pimienta molida al gusto'),
(11, 'LAS COSTILLAS DE CERDO', '', '', 0, 8500, 2, 'Calorías 290kcal AutorDaniel 1 costillar de cerdo (12 costillas aproximadamente) 1 taza de salsa barbacoa, casera preferiblemente Sal Pimienta negra Pimienta blanca Pimienta de cayena en polvo Comino molido Romero Ajo en polvo Cebolla en polvo Azúcar morena'),
(12, 'Papas Rellenas', '', '', 0, 1500, 1, 'PAPA RELLENA'),
(13, 'Bloody Mary', '', '', 0, 15000, 3, 'Vodka 70 ml Zumo de tomate 210 ml Zumo de limón 15 ml Salsa Tabasco dos gotas Salsa Worcestershire tres gotas Pimienta negra molida Apio'),
(14, 'Negroni', '', '', 0, 12000, 3, '300 ml de Campari, 300 ml de vermú rojo, 300 ml de ginebra, naranja.'),
(15, 'Tom Collins', '', '', 0, 10000, 3, '50 ml de ginebra, 100 ml de zumo de limón, 100 ml de soda, 1 cucharada de azúcar, hielo.'),
(16, 'Clericot o clericó', '', '', 0, 8000, 3, '33cl de vino blanco espumoso, 1 melocotón, 2 ciruelas,1 limón, 5ml de crema de Cassis y hielo'),
(17, 'Rebujito', '', '', 0, 9000, 3, '75 ml de Vino Manzanilla, Fino, Montilla Moriles o similar, 500 ml de refresco de lima o gaseosa, 4 ramitas de Hierbabuena y Hielo abundante'),
(18, 'Agua de Valencia', '', '', 0, 6500, 3, 'Zumo de naranja, ginebra, vodka y champagne o cava.'),
(19, 'Sex on the beach', '', '', 0, 12000, 3, '45 ml de vodka, 15 ml de licor de melocotón, 15 ml de licor de frambuesa (opcional), 45 ml de arándanos rojos, 45 ml de zumo de naranja, naranja fresca para decorar.'),
(20, 'Café irlandés', '', '', 0, 15000, 3, '2-2,5 partes de whisky irlandés, 4 partes de café filtrado, 1-2 cucharadas, aproximadamente, de azúcar blanco o moreno, 50 ml, aproximadamente, de nata o crema batida, semimontada.'),
(21, 'Trufas de cava y frambuesa', '', '', 0, 10000, 4, 'Chocolate negro 70% de cacao 100 g Nata líquida 80 ml Cava 30 ml Azúcar glasé 25 g Mantequilla 5 g Frambuesas deshidratadas 25 g Cacao puro en polvo'),
(22, ' CREMA DE CHOCOLATE', '', '', 0, 8000, 4, '1 aguacate maduro 3-4 onzas de chocolate negro (más del 75% de cacao) 2 dátiles'),
(23, 'BATIDO DE VAINILLA Y MANZANA', '', '', 0, 10000, 4, '1 taza de bebida de soja ¼ de cucharadita de esencia de vainilla ½ manzana pelada Una pizca de canela en polvo'),
(24, 'FRESAS CON CHOCOLATE CRUJIENTE', '', '', 0, 5000, 4, '500 g de fresas o fresones 6-7 onzas de chocolate negro (más del 75% de cacao) Un puñado de frutos secos (por ejemplo almendras, nueces y avellanas)'),
(25, 'GALLETAS DE PLÁTANO, AVENA, CHOCOLATE Y AVELL', '', '', 0, 10000, 4, '1 taza de avena en copos 1 plátano mediano-grande, maduro 2-3 cucharadas de pepitas de chocolate puro 10-12 avellanas'),
(26, 'YOGUR PRIMAVERAL', '', '', 0, 5000, 4, '2 yogures de soja naturales 8-10 fresas 10-12 frambuesas 14-16 arándanos Un puñadito de almendras laminadas o tostadas'),
(27, 'TRUFITAS DE LIMÓN Y COCO', '', '', 0, 10000, 1, '1 taza de coco rallado el zumo y la ralladura de 1 limón ½ taza de almendras molidas (harina de almendras) 1 cucharada de mantequilla de cacahuete'),
(28, 'TARTA DE MANZANA', '', '', 0, 11000, 4, '1 lámina de hojaldre (que no lleve grasas animales) 2 manzanas rojas Canela al gusto La ralladura de ½ limón'),
(30, 'patatas fritas perfectas', '', '', 0, 5000, 5, '4 patatas medianas Aceite de oliva Sal'),
(31, 'Patatas asadas al horno', '', '', 0, 5000, 5, '600 g de patatas para guarnición 2-4 dientes de ajo 2 cucharadas de aceite de oliva virgen extra 1 vaso de vino blanco (150 ml) 1 cucharadita de sal 1 manojito de tomillo Pimienta negra'),
(8000, 'Plato Arroces con Pollo', '', '', 0, 7, 1, 'Calorías 300kcal 1 pollo mediano picado en trozos 2 tazas de arroz 4 tazas de caldo de pollo 1 tomate mediano 1/2 pimiento rojo 1 ají ó guindilla puede ser dulce o picante según tu antojo 1 puño pequeño de granos de maíz 1 trozo pequeño de chorizo calcula unos 2 cm de largo 1 cebolla mediana 2 dient');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platosingredientes`
--

CREATE TABLE `platosingredientes` (
  `idPlatos` int(5) NOT NULL,
  `idIngredientes` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidas`
--

CREATE TABLE `salidas` (
  `idSalidas` int(5) NOT NULL,
  `idPlatos` int(5) NOT NULL,
  `idVenta` int(20) NOT NULL,
  `fechaSalida` date NOT NULL,
  `horaSalida` time NOT NULL,
  `cantidadSalida` int(11) NOT NULL,
  `valorSalida` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexousuario`
--

CREATE TABLE `sexousuario` (
  `idSexoUsuario` int(5) NOT NULL,
  `nombreSexoUsuario` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `sexousuario`
--

INSERT INTO `sexousuario` (`idSexoUsuario`, `nombreSexoUsuario`) VALUES
(0, 'no_seleccionado'),
(1, 'mujer'),
(2, 'hombre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugerencia`
--

CREATE TABLE `sugerencia` (
  `idSugerencia` int(11) NOT NULL,
  `numeroTelefono` varchar(20) NOT NULL,
  `descripcionSugerencia` varchar(400) DEFAULT NULL,
  `valoracionSugerencia` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `sugerencia`
--

INSERT INTO `sugerencia` (`idSugerencia`, `numeroTelefono`, `descripcionSugerencia`, `valoracionSugerencia`) VALUES
(1, 12450216, 'holaaaa', 1200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(5) NOT NULL,
  `nombreTipoCliente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`idTipoUsuario`, `nombreTipoCliente`) VALUES
(1, 'cliente'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `numeroTelefono` varchar(20) NOT NULL,
  `nombreUsuario` varchar(20) NOT NULL,
  `apellidoUsuario` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `emailUsuario` varchar(60) NOT NULL,
  `idSexoUsuario` int(5) NOT NULL,
  `idTipoUsuario` int(5) NOT NULL,
  `contraseña` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`numeroTelefono`, `nombreUsuario`, `apellidoUsuario`, `direccion`, `emailUsuario`, `idSexoUsuario`, `idTipoUsuario`, `contraseña`) VALUES
(12450216, 'Juan Sebastian', 'Rodriguez Diaz', 'calle 131# 154c-36', 'sebachodiazp29@gmail.com', 2, 1, 'juan'),
(18746194, 'saigfaoiyf', 'saufusafgapf', 'sfsaufgsafuaf', 'asfgjbf@sañfaifb', 1, 1, '123'),
(520573252, 'asfasfsads', 'teewgwdgs', 'dsgsgsdg', 'sdgsdgdsgsd@sdgsdgdsgdsgegwg', 1, 1, '1234'),
(2147483647, 'fabian ', 'gomez', 'calle 42142141b 2414csf-21431', 'fabiaanashesexoanal@gmail.com', 1, 2, 'fabian');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(20) NOT NULL,
  `idPedidos` int(5) NOT NULL,
  `fechaVenta` date NOT NULL,
  `horaVentas` time NOT NULL,
  `subTotalVentas` float(12,2) NOT NULL,
  `ivaVentas` float(12,2) NOT NULL,
  `totalVentas` float(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategPlatos`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`idIngredientes`);

--
-- Indices de la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  ADD KEY `idPedidos_idx` (`idPedidos`),
  ADD KEY `idPlatos_idx` (`idPlatos`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedidos`),
  ADD KEY `numeroTelefono_idx` (`numeroTelefono`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`idPlatos`),
  ADD KEY `idCategPlatos_idx` (`idCategPlatos`);

--
-- Indices de la tabla `platosingredientes`
--
ALTER TABLE `platosingredientes`
  ADD KEY `idPlatos3_idx` (`idPlatos`),
  ADD KEY `idIngredientes_idx` (`idIngredientes`);

--
-- Indices de la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD PRIMARY KEY (`idSalidas`),
  ADD KEY `idPlatos2_idx` (`idPlatos`),
  ADD KEY `idVenta2_idx` (`idVenta`);

--
-- Indices de la tabla `sexousuario`
--
ALTER TABLE `sexousuario`
  ADD PRIMARY KEY (`idSexoUsuario`);

--
-- Indices de la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  ADD PRIMARY KEY (`idSugerencia`),
  ADD KEY `numeroTelefono_idx` (`numeroTelefono`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`numeroTelefono`),
  ADD KEY `idTipoUsuario_idx` (`idTipoUsuario`),
  ADD KEY `idSexoUsuario_idx` (`idSexoUsuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `idPedidos_idx` (`idPedidos`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidoproducto`
--
ALTER TABLE `pedidoproducto`
  ADD CONSTRAINT `idPedidos` FOREIGN KEY (`idPedidos`) REFERENCES `pedidos` (`idPedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idPlatos` FOREIGN KEY (`idPlatos`) REFERENCES `platos` (`idPlatos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `numeroTelefono` FOREIGN KEY (`numeroTelefono`) REFERENCES `usuarios` (`numeroTelefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `platos`
--
ALTER TABLE `platos`
  ADD CONSTRAINT `idCategPlatos` FOREIGN KEY (`idCategPlatos`) REFERENCES `categorias` (`idCategPlatos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `platosingredientes`
--
ALTER TABLE `platosingredientes`
  ADD CONSTRAINT `idIngredientes` FOREIGN KEY (`idIngredientes`) REFERENCES `ingredientes` (`idIngredientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idPlatos3` FOREIGN KEY (`idPlatos`) REFERENCES `platos` (`idPlatos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salidas`
--
ALTER TABLE `salidas`
  ADD CONSTRAINT `idPlatos2` FOREIGN KEY (`idPlatos`) REFERENCES `platos` (`idPlatos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idVenta2` FOREIGN KEY (`idVenta`) REFERENCES `ventas` (`idVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sugerencia`
--
ALTER TABLE `sugerencia`
  ADD CONSTRAINT `numeroTelefono1` FOREIGN KEY (`numeroTelefono`) REFERENCES `usuarios` (`numeroTelefono`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `idSexoUsuario` FOREIGN KEY (`idSexoUsuario`) REFERENCES `sexousuario` (`idSexoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idTipoUsuario` FOREIGN KEY (`idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `idPedidos2` FOREIGN KEY (`idPedidos`) REFERENCES `pedidos` (`idPedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
