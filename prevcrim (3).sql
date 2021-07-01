-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2021 a las 04:51:21
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prevcrim`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantidad_sectores`
--

CREATE TABLE `cantidad_sectores` (
  `id_cantidad_sectores` int(11) NOT NULL,
  `id_sector` int(11) NOT NULL,
  `id_institucion` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cantidad_sectores`
--

INSERT INTO `cantidad_sectores` (`id_cantidad_sectores`, `id_sector`, `id_institucion`) VALUES
(324432433, 212, 2020),
(324432435, 212, 2021),
(324432436, 213, 2021);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

CREATE TABLE `comuna` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`id`, `nombre`) VALUES
(400, 'pedro aguirre cerda'),
(401, 'la florida'),
(402, 'la dehesa '),
(404, 'la granja'),
(405, 'renca'),
(407, 'pudahuel'),
(408, 'lo barnechea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `delincuente`
--

CREATE TABLE `delincuente` (
  `id` int(11) NOT NULL,
  `rut` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `apodo` varchar(255) NOT NULL,
  `domicilio` int(11) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `estado` varchar(1) NOT NULL,
  `nombre_institucion_usuario` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `delincuente`
--

INSERT INTO `delincuente` (`id`, `rut`, `nombres`, `apellidos`, `apodo`, `domicilio`, `telefono`, `celular`, `email`, `fecha_nacimiento`, `estado`, `nombre_institucion_usuario`, `foto`) VALUES
(1234, '2384683463-3', 'sebastian andres', 'jorquera paredes', 'cara cortada', 404, '2243434343', '934353443', 'cara@gmail.com', '2021-05-18', 'p', 2021, '../img/ladron3.jpg'),
(1323, '19420189-3', 'pedro jose', 'sanchez gutierrez', 'el torta', 400, '222937776213', '937776213', 'jpabloperaltacasanova@gmail.com', '1994-04-12', 'l', 2020, '../img/ladron4.jpg'),
(3232, '38481264-1', 'daniel esteban', 'sandoval ramirez', 'el torta', 405, '223234353553', '9343434343', 'eltorta@gmail.com', '1995-05-15', 'l', 2021, '../img/ladron5.jpg'),
(32133, '9471614-3', 'felipe andres ', 'flores gutierres', 'huaquipan', 400, '22923456432', '923456343', 'elmail@hotmail.com', '1997-04-13', 'p', 2021, '../img/ladron6.jpg'),
(231232, '20345234-2', 'rodrigo alonso', 'silva gutierrez', 'el palta', 400, '2245654434343', '43553543545', 'elpalta@gmail.com', '1998-04-13', 'p', 2021, '../img/ladron7.jpg'),
(234343, '7428768326-3', 'Juan', 'Peralta', 'elpalta', 404, '23343434', '9564565656', 'jpabloperaltacasanova@gmail.com', '1997-05-08', 'p', 2021, '../img/ladron8.jpg'),
(3231232, '343243243-1', 'pedro jacob', 'caceres gutierres ', 'el barata', 404, '2323232423', '93434343434', 'elbarata@gmail.com', '1997-05-15', 'p', 2021, '../img/ladron9.jpg'),
(3231233, '2878237283-1', 'dante  joaquin  ', 'lopez lopez', 'cara he laucha', 404, '222434343', '92492323232', 'carahelaucha@gmail.com', '1996-09-18', 'l', 80811, '../img/ladron10.jpg'),
(3231234, '193234324-4', 'rodolfo alexis', 'contreras saldivar', 'el chaleco lopez', 405, '223545656', '9434343433', 'chaleco@gmail.com', '1986-10-26', 'l', 2021, '../img/ladron2.jpg'),
(3231235, '327428743-3', 'sergio andres', 'aguero del castillo', 'kun aguero', 400, '835943597454', '39473297349', 'kun@gmail.com', '2021-05-05', 'p', 2021, '../img/ladron11.jpeg'),
(3231236, '733279437-1', 'lionel jose', 'perez perez', 'la pulga ', 404, '224354544', '93343434', 'lapulga@gmail.com', '1993-05-28', 'p', 2021, '../img/ladron12.jpg'),
(3231250, '9598435984', 'alfonso javier  ', 'peres rosales', 'pepe', 400, '2243435535', '943294834', 'elpepe@gmail.com', '1993-03-19', 'a', 2021, '../img/ladron1.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id` varchar(1) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id`, `nombre`) VALUES
('a', 'orden de arresto'),
('l', 'libre'),
('p', 'preso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `codigo` int(11) NOT NULL,
  `nombre_ins` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`codigo`, `nombre_ins`) VALUES
(2020, 'pdi'),
(2021, 'carabineros'),
(80811, 'Seguridad OS10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevo_delito_delincuente`
--

CREATE TABLE `nuevo_delito_delincuente` (
  `id_delito` int(11) NOT NULL,
  `id_delincuente` int(11) NOT NULL,
  `tipo_delito` int(11) NOT NULL,
  `sector` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `direccion_delito` varchar(255) NOT NULL,
  `fecha_delito` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuevo_delito_delincuente`
--

INSERT INTO `nuevo_delito_delincuente` (`id_delito`, `id_delincuente`, `tipo_delito`, `sector`, `descripcion`, `direccion_delito`, `fecha_delito`) VALUES
(3042, 231232, 41, 216, 'robo con violencia en los estacionamientos del mall plaza vespucio', 'av.vicuña mackena', '2021-05-17'),
(343243, 1323, 41, 212, 'se realizo un robo a mano armada en la zona centro ', 'las palmeras', '2021-04-12'),
(4434243, 1323, 40, 212, 'portonazo en zona sur', 'las rosas', '2018-02-11'),
(4434244, 1323, 40, 214, 'asalto afuera del metro', 'calle don pepe 233', '2021-05-18'),
(4434246, 3231232, 42, 212, 'se robo un chicle', 'el arbusto 323', '2021-05-11'),
(4434247, 1234, 41, 212, 'hizo un robo y le pego entero fuerte', 'la calle #3949', '2021-03-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `id_parentesco` int(11) NOT NULL,
  `nombre_parentesco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`id_parentesco`, `nombre_parentesco`) VALUES
(1002, 'hermanos'),
(1004, 'madre'),
(10001, 'primos'),
(10003, 'padre'),
(10004, 'sobrino'),
(10005, 'sobrina'),
(10006, 'abuelo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parientes`
--

CREATE TABLE `parientes` (
  `id_pariente` int(11) NOT NULL,
  `id_delincuente` int(11) NOT NULL,
  `id_parentesco` int(11) NOT NULL,
  `id_delincuente2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parientes`
--

INSERT INTO `parientes` (`id_pariente`, `id_delincuente`, `id_parentesco`, `id_delincuente2`) VALUES
(555, 32133, 10001, 1323),
(556, 32133, 1002, 231232);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `nombre`, `descripcion`) VALUES
(1, 'administrador_principal', 'insertar listar actualizar eliminar'),
(2, 'administrador_de_zona_pdi', 'crear usuarios crear sectores obtencion de reportes'),
(3, 'administrador_zona_carabineros', 'crear usuarios crear sectores obtencion de reportes'),
(4, 'administrador_zona_os10', 'crear usuarios crear sectores obtencion de reportes'),
(5, 'usuario_carabineros', 'permiso usuario carabineros \r\n'),
(6, 'usuario_pdi', 'permisos para administrar la institucion de carabineros'),
(7, 'usuario_os10', 'permisos para administrar la institucion de os10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `id_comuna` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`id`, `id_comuna`, `nombre`) VALUES
(212, 400, 'zona centro del bosque'),
(213, 401, 'Santiago Centro'),
(214, 402, 'metro vicente valdez'),
(215, 401, 'parque o\'higgins'),
(216, 402, 'Mall plaza vespucio\r\n'),
(217, 400, 'plaza puente alto'),
(218, 401, 'hospital la Florida'),
(219, 404, 'metro la granja'),
(220, 405, 'cerro renca'),
(221, 402, 'plaza cuica catchai'),
(222, 400, 'la plazita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_delito`
--

CREATE TABLE `tipo_delito` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_delito`
--

INSERT INTO `tipo_delito` (`id`, `nombre`) VALUES
(40, 'robo con intimidacion'),
(41, 'robo con violencia'),
(42, 'robo con arma blanca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `nombre_institucion` int(11) NOT NULL,
  `fecha_habilitacion` date NOT NULL,
  `permisos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `rut`, `pass`, `nombres`, `apellidos`, `nombre_institucion`, `fecha_habilitacion`, `permisos`) VALUES
(808, '19420189-3', 'juan123', 'juan pablo', 'peralta casanova', 2020, '2021-04-06', 1),
(843, '18941181-2', 'juanperalta', 'daniel pedro', 'cavieres sepulveda', 2021, '2021-04-28', 2),
(844, '20434344-3', 'jotap', 'daniel esteban', 'manriquez perez', 2020, '2021-04-29', 3),
(845, '23243232-3', 'juantopo', 'juan topo ', 'reineta viera', 2021, '2021-04-29', 3),
(846, '20202202-2', 'juan123', 'dante alenxander ', 'roblete leal', 80811, '2021-05-11', 4),
(847, '30303303-3', 'juan123', 'juan gabriel ', 'sepulveda lopez', 2020, '2021-05-08', 5),
(849, '22222222-2', '$2y$10$JMtc5kKSpfkb2M3rzD5NXeaIZBDEVd3Y9Iyyr1p37KCTz9RVgS.fy', 'juan pedro', 'cavieres riffo', 2020, '2021-05-27', 6),
(850, '194201879-', '$2y$10$sBL2pNM7/RyO5kJzHOEKc.3uHE8cp/14zGJ.2zdNh3918risQJNyG', 'juan gabriel', 'lopez  barrera', 2020, '2021-05-09', 2),
(852, '2222222-2', '$2y$10$S3/aRtdRiWmI2bPbZTL8euxW2PB4Wt1CRM67fjwxtgJ6lLuw.3uRm', 'juan pedro', 'sanchez saavedra', 2020, '2021-05-09', 7),
(853, '83298743-3', '$2y$10$eUW5nTRPgyfUCBdp9jE3suyNqKWGB7K7X.HSnsO9cvn2y4bA6tQdK', 'dssddsds dsdsdd', ' sddsd  sdsd', 2020, '2021-05-09', 1),
(854, '434343434-', '$2y$10$yGKSyc59VRUKLtPm97QPb.GRamGLJbukQn2er2SSIFN40yznlZbsG', 'juan pablo ', 'peralta casanova', 2020, '2021-05-10', 1),
(855, '198393284-', '$2y$10$zzArZd0T8i6yD1TRWp3GKuaI9Gx1D.k03FNuTFqshi9JcJrzgruLK', 'eladmin', 'toooto', 2021, '2021-05-29', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cantidad_sectores`
--
ALTER TABLE `cantidad_sectores`
  ADD PRIMARY KEY (`id_cantidad_sectores`),
  ADD KEY `id_sector` (`id_sector`),
  ADD KEY `id_institucion` (`id_institucion`);

--
-- Indices de la tabla `comuna`
--
ALTER TABLE `comuna`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `delincuente`
--
ALTER TABLE `delincuente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estado` (`estado`),
  ADD KEY `nombre_institucion_usuario` (`nombre_institucion_usuario`),
  ADD KEY `domicilio` (`domicilio`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `nuevo_delito_delincuente`
--
ALTER TABLE `nuevo_delito_delincuente`
  ADD PRIMARY KEY (`id_delito`),
  ADD KEY `sector` (`sector`),
  ADD KEY `tipo_delito` (`tipo_delito`),
  ADD KEY `id_delincuente` (`id_delincuente`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`id_parentesco`);

--
-- Indices de la tabla `parientes`
--
ALTER TABLE `parientes`
  ADD PRIMARY KEY (`id_pariente`),
  ADD KEY `id_del` (`id_delincuente`),
  ADD KEY `id_deli` (`id_delincuente2`),
  ADD KEY `id_parentesco` (`id_parentesco`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comuna` (`id_comuna`);

--
-- Indices de la tabla `tipo_delito`
--
ALTER TABLE `tipo_delito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `constraint_unique_name` (`rut`),
  ADD KEY `nombre_institucion` (`nombre_institucion`),
  ADD KEY `permisos` (`permisos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cantidad_sectores`
--
ALTER TABLE `cantidad_sectores`
  MODIFY `id_cantidad_sectores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324432437;

--
-- AUTO_INCREMENT de la tabla `comuna`
--
ALTER TABLE `comuna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT de la tabla `delincuente`
--
ALTER TABLE `delincuente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3231254;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80813;

--
-- AUTO_INCREMENT de la tabla `nuevo_delito_delincuente`
--
ALTER TABLE `nuevo_delito_delincuente`
  MODIFY `id_delito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4434249;

--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `id_parentesco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- AUTO_INCREMENT de la tabla `parientes`
--
ALTER TABLE `parientes`
  MODIFY `id_pariente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT de la tabla `tipo_delito`
--
ALTER TABLE `tipo_delito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=858;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cantidad_sectores`
--
ALTER TABLE `cantidad_sectores`
  ADD CONSTRAINT `cantidad_sectores_ibfk_1` FOREIGN KEY (`id_sector`) REFERENCES `sector` (`id`),
  ADD CONSTRAINT `cantidad_sectores_ibfk_2` FOREIGN KEY (`id_institucion`) REFERENCES `institucion` (`codigo`);

--
-- Filtros para la tabla `delincuente`
--
ALTER TABLE `delincuente`
  ADD CONSTRAINT `delincuente_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estado` (`id`),
  ADD CONSTRAINT `delincuente_ibfk_3` FOREIGN KEY (`nombre_institucion_usuario`) REFERENCES `usuario` (`nombre_institucion`),
  ADD CONSTRAINT `delincuente_ibfk_4` FOREIGN KEY (`domicilio`) REFERENCES `comuna` (`id`);

--
-- Filtros para la tabla `nuevo_delito_delincuente`
--
ALTER TABLE `nuevo_delito_delincuente`
  ADD CONSTRAINT `id_delincuente` FOREIGN KEY (`id_delincuente`) REFERENCES `delincuente` (`id`),
  ADD CONSTRAINT `nuevo_delito_delincuente_ibfk_3` FOREIGN KEY (`sector`) REFERENCES `sector` (`id`),
  ADD CONSTRAINT `nuevo_delito_delincuente_ibfk_4` FOREIGN KEY (`tipo_delito`) REFERENCES `tipo_delito` (`id`);

--
-- Filtros para la tabla `parientes`
--
ALTER TABLE `parientes`
  ADD CONSTRAINT `id_del` FOREIGN KEY (`id_delincuente`) REFERENCES `delincuente` (`id`),
  ADD CONSTRAINT `id_deli` FOREIGN KEY (`id_delincuente2`) REFERENCES `delincuente` (`id`),
  ADD CONSTRAINT `id_parentesco` FOREIGN KEY (`id_parentesco`) REFERENCES `parentesco` (`id_parentesco`);

--
-- Filtros para la tabla `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `sector_ibfk_1` FOREIGN KEY (`id_comuna`) REFERENCES `comuna` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`nombre_institucion`) REFERENCES `institucion` (`codigo`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`permisos`) REFERENCES `permisos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
