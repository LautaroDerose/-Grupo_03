-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2020 a las 01:10:12
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idCarrito` int(11) NOT NULL,
  `Usuarios_idUsuario` int(11) NOT NULL,
  `Productos_idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idContacto` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `idPregunta` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `pregunta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`idPregunta`, `titulo`, `pregunta`) VALUES
(3, 'devolucion', 'como realizar una devolucion'),
(4, 'Metodos de pago', 'Cuales son los medios de pago con lo que se puede realizar una compra ? '),
(5, 'Productos vencidos', 'Que hacer si el producto recibido ya esta vencido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `precio` int(11) DEFAULT NULL,
  `descripcion` tinytext DEFAULT NULL,
  `valoracion` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `precio`, `descripcion`, `valoracion`) VALUES
(12, 'Dulce de leche Vacalin', 180, 'Dulce de leche repostero por 1kg. marca Vacalin. Ideal para tortas y masas finas. Producto sin TACC.', '5'),
(13, 'Chocolate Alpino', 160, 'Chocolate Alpino por 500 grs. Para moldear.\r\nDe sabores: chocolate con leche, blanco, semi amargo, frutilla, banana, menta, dulce de leche, naranja. ', '5'),
(14, 'Crema chantilly Ledevit', 170, 'Crema chantilly liquida 500 cc. \r\nCrema para relleno y cobertura.\r\nLista para batir.\r\nVainilla, chocolate, frutilla.', '5'),
(15, 'Pasta Ballina', 130, 'Pasta para cubrir torta de 500 grs. \r\nDe colores: Blanco, negro, rojo, verde, celeste, amarillo.\r\nDe sabores: Dulce de leche o chocolate.\r\nProducto sin TACC. ', '5'),
(16, 'Azucar Impalpable ', 110, 'Azucar impalpable marca Talco por 1kg.', '5'),
(17, 'Colorante en pasta', 90, 'Colorante marca Fleibor por 15grs.\r\nColores a elecccion: Amarillo, Naranja, Rojo, Azul, Negro, Plateado y mas!..', '5'),
(18, 'Premezcla Horneable', 150, 'Premezcla Horneable de 470 grs. marca Ledevit. De sabor vainilla y chocolate. Para prepara Brownies, cupcakes y budines.\r\nProducto sin TACC.', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `apellido`, `email`, `password`) VALUES
(4, 'admin', 'admin', 'admin@admin.com', '$2y$10$ttO1mduG/9bgPGt0vXG2e.OuWdYS5o5O2Wdpl9PheNitM3nQvc9vW'),
(5, 'juan francisco', 'mannino sanchez', 'juanfa@juanfa.com', '$2y$10$y64PUUpu9dfWjZIURDhbAupq5Gj7jDHt/0CDmLdIsA6/s6Ovboiuu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idCarrito`),
  ADD KEY `fk_Usuarios_has_Productos_Productos1_idx` (`Productos_idProducto`),
  ADD KEY `fk_Usuarios_has_Productos_Usuarios_idx` (`Usuarios_idUsuario`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idCarrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fk_Usuarios_has_Productos_Productos1` FOREIGN KEY (`Productos_idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuarios_has_Productos_Usuarios` FOREIGN KEY (`Usuarios_idUsuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
