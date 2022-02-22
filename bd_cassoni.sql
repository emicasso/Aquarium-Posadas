-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2021 a las 21:42:31
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cassoni`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_mensaje` int(11) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `mensaje` longtext NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_mensaje`, `apellido`, `nombre`, `mail`, `motivo`, `mensaje`, `estado`) VALUES
(1, 'perez', 'ign', 'cassoss@gmail.com', 'Pecera Personalizada', 'quiero una', 0),
(2, 'Caceres', 'Juan', 'juancito@gmail.com', 'Peces Enfermos', 'Necesito ayuda mis peces enfermaron', 0),
(3, 'Alvarez', 'pedro', 'pedrito@gmail.com', 'Presupuesto Pecera', 'Necesito contactarme para determinar un presupuesto', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_venta` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `detalle_cantidad` int(11) NOT NULL,
  `detalle_precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`id_venta`, `producto_id`, `detalle_cantidad`, `detalle_precio`) VALUES
(47, 7, 0, 0),
(48, 2, 1, 3560),
(50, 2, 1, 3560),
(55, 3, 1, 700),
(57, 6, 1, 120),
(58, 4, 1, 600),
(59, 11, 1, 213),
(60, 2, 1, 3560),
(61, 5, 1, 15998),
(62, 4, 1, 1700),
(63, 17, 1, 49818),
(64, 19, 1, 17666),
(65, 13, 1, 26928),
(65, 18, 1, 48300),
(65, 3, 1, 1200),
(65, 11, 2, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `perfil_descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `perfil_descripcion`) VALUES
(1, 'Administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `categoria`, `imagen`, `precio`, `descripcion`, `stock`, `estado`) VALUES
(1, 'DISCUS GRAN WILD TROPICAL 110GRS', 6, 'prod2.jpg', '2040', 'Alimento granulado. Spirulina, clorela, Ascophyllum nodosum y Laminaria digitata o Kelp.', 3, 1),
(2, 'FILTRO INTERNO ATMAN AT-2220F', 2, 'filtro.jpg', '3560', 'Atman AT-2220F', 22, 1),
(3, 'BETTA HALF MOON', 4, 'pez11.jpg', '1200', 'Luchador Importado.', 9, 1),
(4, 'BETTA CROWNTAIL', 4, 'p-2293-betta_crowntail_importado2.jpg', '1700', 'Luchador Importado.', 0, 1),
(5, 'FILTRO BOTELLÓN ATMAN AT-3336S', 1, 'prod1.jpg', '15998', '760Lts/h. Vaso 5Lts.', 10, 1),
(6, 'COMETA', 4, 'prod12.jpg', '400', 'Carassius auratus. Colores surtidos. 4 cms. Nacionales.', 19, 1),
(7, 'FILTRO CASCADA SEACHEM TIDAL 35', 2, 'prod14.jpg', '8243', 'Indicado para acuario hasta de 130 litros. Caudal regulable hasta 500/h. Volumen filtrante de 0,7 li', 11, 1),
(8, 'TROPICAL GOLDFISH COLOUR PELLET 90GRS', 6, 'prod3.jpg', '1330', 'Alimento granulado completo para Goldfish.', 12, 1),
(9, 'ANUBIA BARTERI VAR. NANA', 5, 'prod5.jpg', '900', 'Verde oscura. Rizoma con 5 hojas.', 213, 1),
(10, 'ROCA CYAN MULTILAYER', 1, 'acces9.jpg', '1938', 'MULTILAYER STONE Muy rugosa, con mucho detalle. Forma tipo acantilado.', 123, 1),
(11, 'HYGROPHILA COSTATA', 5, 'planta6.jpg', '200', 'Planta de tallo alta. Pot con 3 tallos. Hojas muy finas.', 120, 1),
(12, 'TROPICAL AXOLOTL STICKS 135GRS', 6, 'alimento3.jpg', '1670', 'Alimento completo para Axolotl. Sticks de fondo.', 1451, 1),
(13, 'FILTRO BOTELLÓN EHEIM ECCO PRO-200', 2, 'filtro2.jpg', '26928', 'Incluye materiales filtrantes. Excelente filtración y calidad. Para acuarios de 100 a 200lts.', 212, 1),
(14, 'LABEO BICOLOR', 4, 'pez7.jpg', '360', '4cm. Importado de singapur. Pez muy territorial', 1, 1),
(15, 'TROPICAL GUPPY 20GRS', 6, 'alimento5.jpg', '900', 'Alimento específico para Guppys. Dieta completa. Con sal marina.', 62, 1),
(16, 'SF BLOODWORMS 50G', 6, 'alimento.jpg', '3491', 'Producto natural liofilizado. Para peces omnívoros y carnivoros. Libre de parásitos y bacterias.', 100, 1),
(17, 'CHIHIROS LED RGB PLUS 90CM', 3, 'chihiros_rgb-a-plus4.jpg', '49818', 'Lámpara RGB con coloración completa. Excelente diseño. Sistema de montaje variable para diferentes t', 1, 1),
(18, 'CHIHIROS X-SERIES 100 LED', 3, 'x_series_led2.jpg', '48300', '50 watts de potencia real / 4200 lumen La mayor penetración en LED´s. Incluye soporte de aluminio.', 0, 1),
(19, 'LED FULL SPECTRO 100CM AQUALUMINA', 3, 'aqualumina_led_acuario2.jpg', '17666', '8700 Lm / 67w Difusor de acrílico. Cuerpo de aluminio anodizado. Garantía 12 meses.', 1, 1),
(20, 'CUBOS XPORT BIO 250ML BRIGHTWELL', 7, 'xport_bio250_brightwell.jpg', '1954', 'Medios biológicos ultra porosos con características de rendimiento superiores.', 10, 1),
(21, 'MICROBACTER LATTICE 4L BRIGHTWELL', 7, 'microbacter_lattice_brightwellXLarge.jpg', '8022', 'Medio de filtración de porosidad media alta para todo tipo de agua dulce. Tamaño de filtrante XL par', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_categoria`
--

CREATE TABLE `producto_categoria` (
  `categoria_id` int(11) NOT NULL,
  `categoria_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto_categoria`
--

INSERT INTO `producto_categoria` (`categoria_id`, `categoria_desc`) VALUES
(1, 'Accesorios y Mantenimiento'),
(2, 'Filtros'),
(3, 'Iluminacion'),
(4, 'Peces'),
(5, 'Plantas'),
(6, 'Insumos'),
(7, 'Material Filtrante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_persona`, `nombre`, `apellido`, `telefono`, `direccion`, `mail`, `password`, `perfil_id`, `estado`) VALUES
(1, 'emi', 'cass', 0, '', 'cassoe@gmail.com', 'MTIzNDU2Nzg=', 2, 1),
(2, 'emi', 'casso', 0, '', 'casson@gmail.com', 'MTIzNDU2Nzg=', 2, 1),
(3, 'emili', 'case', 0, '', 'esq@gmail.com', 'MTAyMDMwNDA=', 2, 1),
(4, 'Emiliano', 'Cassoni', 0, '', 'emi@gmail.com', 'MTAyMDMwNDA=', 1, 1),
(5, 'admin', 'admin', 0, '', 'soyadmin@gmail.com', 'MTIzNDU2Nzg=', 1, 1),
(6, 'Admin1', 'Admin1', 0, '', 'soyadmin1@gmail.com', 'MTIzNDU2Nzg=', 1, 1),
(7, 'cliente', 'cliente', 0, '', 'soycliente@gmail.com', 'MTIzNDU2Nzg=', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `venta_id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `venta_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`venta_id`, `id_cliente`, `venta_fecha`) VALUES
(47, 3, '2021-06-18'),
(48, 3, '2021-06-18'),
(49, 3, '2021-06-18'),
(50, 3, '2021-06-18'),
(51, 3, '2021-06-22'),
(52, 3, '2021-06-22'),
(53, 3, '2021-06-22'),
(54, 3, '2021-06-22'),
(55, 3, '2021-06-22'),
(56, 3, '2021-06-22'),
(57, 3, '2021-06-22'),
(58, 3, '2021-06-22'),
(59, 3, '2021-06-22'),
(60, 7, '2021-06-24'),
(61, 7, '2021-06-24'),
(62, 7, '2021-06-24'),
(63, 7, '0000-00-00'),
(64, 3, '2021-06-25'),
(65, 7, '2021-06-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `categoria` (`categoria`);

--
-- Indices de la tabla `producto_categoria`
--
ALTER TABLE `producto_categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`venta_id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `venta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`venta_id`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `producto_categoria` (`categoria_id`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id_perfil`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `registro` (`id_persona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
