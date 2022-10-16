-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2022 a las 18:47:16
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_juegos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre`, `descripcion`) VALUES
(1, 'Simulación', 'Los videojuegos de simulación son videojuegos que intentan recrear situaciones de la vida real.'),
(2, 'Aventura', 'Son un género de videojuegos, caracterizados por la investigación, exploración, la solución de rompecabezas, la interacción con personajes del videojuego, y un enfoque en el relato en vez de desafíos basados en reflejos .'),
(3, 'Acción', 'Género que se caracteriza porque el jugador debe hacer uso de su velocidad, destreza en el control y tiempo de reacción para avanzar.'),
(4, 'Terror', 'Son juegos de suspenso diseñados para infundir miedo en quienes juegan. Algunos implican escapar o sobrevivir en circunstancias difíciles.'),
(15, 'Rol', 'Es un juego interpretativo-narrativo en el que los jugadores asumen el «rol» de personajes imaginarios a lo largo de una historia o trama en la que interpretan sus diálogos y describen sus acciones.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `id_juego` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`id_juego`, `nombre`, `descripcion`, `precio`, `id_genero`) VALUES
(1, 'Los Sims', 'Es un juego de simulación de vida interactivo para un solo jugador que te da el poder de crear y controlar tu propio personaje de Sims. Puede crear familias, construir viviendas y realizar diversas actividades del día a día como dormir, comer, trabajar, etc.', 1200, 1),
(2, 'Monkey Island', 'Narra la historia de cómo Guybrush Threepwood intenta convertirse en el pirata más temido del Caribe, enfrentándose al malvado pirata LeChuck y conquistando el corazón de la gobernadora de la isla Mêlée, Elaine Marley.', 600, 2),
(3, 'Five Nights at Freddy s', 'Videojuego de terror de supervivencia independiente de apuntar y hacer clic.', 600, 4),
(4, 'Tom Raider', 'Relata los intensos y conflictivos orígenes de Lara Croft y su transformación de joven asustadiza a endurecida superviviente.', 2000, 2),
(5, 'Elden Ring', 'La historia de Elden Ring es la del Sinluz, un exiliado que regresa a un marchito y enorme reino conocido como las Tierras Intermedias. Su propósito: reclamar el poder del Círculo de Elden. Una gesta que lo enfrentará a criaturas de pesadilla y un cruel destino.', 6500, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(1, 'user@gmail.com', '$2a$12$AIzIDXIEkSisNKy4qDSO3.a19yYeM9D2rsz1DYNBluJWH3giM5Cji'),
(4, 'aa@hoy.com', '$2y$10$bM.ijnnRTmbdroYmauXLaegbDWfpBvhAsu/GUY1/XiYb7Zys7StrK'),
(5, 'user1@gmail.com', '$2y$10$vgsB5ohmbbkrN3fNeNdHEumwWXm1RyaYy8VijCoQgq5eTI.Vp7joe'),
(6, 'maruja_997@outlook.com', '$2y$10$ckaJ3rLG./Sop/gUuTri1uu0IJ1uEvDTrv5LT8wBclvCVYAo6gT52'),
(8, 'user3@gmail.com', '$2y$10$Hfkz219wZVD1xIORIfPSP.FpEmzXfsn4znXs5SgT6xDmSJ2cJFUum'),
(9, 'user01@gmail.com', '$2y$10$yfO36uM4vvPsyjHH052Ur.VjWewNg/C0yBh3Q6NSAXJL3mlsMREKm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`id_juego`),
  ADD KEY `FK_id_genero` (`id_genero`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `juego_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
