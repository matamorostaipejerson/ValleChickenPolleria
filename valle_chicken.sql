-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2023 a las 23:11:10
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `valle_chicken`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedidos` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_comida` varchar(255) NOT NULL,
  `precio_comida` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fecha_pedido` date NOT NULL,
  `direccion_entrega` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedidos`, `id_usuario`, `nombre_comida`, `precio_comida`, `cantidad`, `nombre_cliente`, `telefono`, `email`, `fecha_pedido`, `direccion_entrega`) VALUES
(4, 1, 'Lomo Saltado', 13.00, 1, 'Jerson', '232323', 'mendez.1234.juan.1234@gmail.com', '2023-08-23', 'desdsd'),
(5, 1, 'Filete de pechuga 300 gr.', 15.00, 1, 'Jerson', '913671577', 'jersonmatamorostaipe@gmail.com', '2023-08-01', 'jr. daniel Hernandez'),
(6, 1, 'Coca Cola 1 1/2 lt', 8.00, 1, 'Jerson', '913671577', 'mendez.1234.juan.1234@gmail.com', '2023-08-02', 'jr. daniel Hernandez'),
(7, 1, '¼ de pollo', 11.00, 4, 'Yonatan', '913671577', 'yona@gmail.com', '2023-08-02', 'pampas-DH'),
(8, 2, 'Parrilla de pechuga', 17.00, 5, 'Juan', '998961792', 'chibolo@gmail', '2023-08-12', 'av. jr sicra'),
(9, 2, 'Arroz chaufa de pollo', 10.00, 2, 'Juan', '998961792', 'chibolo@gmail', '2023-08-10', 'av. jr sicra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reservas` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `cantidad_personas` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `piso_deseado` varchar(10) NOT NULL,
  `mesa_reservada` varchar(20) NOT NULL,
  `fecha_reserva` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reservas`, `id_usuario`, `cantidad_personas`, `nombre`, `telefono`, `email`, `piso_deseado`, `mesa_reservada`, `fecha_reserva`) VALUES
(1, 1, 5, 'jerson', '913671577', 'jersonmatamorostaipe@gmail.com', 'piso2', 'mesa3', '2023-08-10'),
(2, 1, 5, 'jerson', '99999999', 'russ@gmail.com', 'piso1', 'mesa1', '2023-08-23'),
(3, 2, 3, 'Chibolo', '998961792', 'chibolo@gmail', 'piso1', 'mesa2', '2023-08-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(1, 'matamoros', 'matamoros@gmail.com', 'matamoros', 'd38c1bda1cc59c77eb351d181adb82700d8b51863e58947a27e2d961072d257a7b2ac091d5ef5065076206dd4dd4fe3b1d039ef99c75c1c95d1fbfaebc202290'),
(2, 'CHIBOLO', 'chibolo@gmail.com', 'chibolo', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedidos`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reservas`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reservas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
