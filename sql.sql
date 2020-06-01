-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-06-2020 a las 15:15:02
-- Versión del servidor: 5.7.26
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
CREATE TABLE IF NOT EXISTS `tbl_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id`, `nombre_categoria`) VALUES
(1, 'Bebidas sin Alcohol'),
(2, 'Panaderia y Confiteria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_producto`
--

DROP TABLE IF EXISTS `tbl_producto`;
CREATE TABLE IF NOT EXISTS `tbl_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text,
  `descripcion` text,
  `precio` text,
  `imagen` text,
  `codigo` text,
  `stock` text,
  `categoria_id` int(11) DEFAULT NULL,
  `destacado_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_producto`
--

INSERT INTO `tbl_producto` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `codigo`, `stock`, `categoria_id`, `destacado_id`) VALUES
(112, 'Yogurt Entero La Pradera', NULL, '20000', '337885-86857607_2852817844809379_3924299897389449216_o.jpg', '00025', NULL, NULL, NULL),
(113, 'Yogurt Entero La Pradera', NULL, '20000', '7a0898-86857607_2852817844809379_3924299897389449216_o.jpg', '00025', NULL, NULL, NULL),
(114, 'Supermercado Stock', NULL, '48001', 'e962b5-0.jpg', '00025', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text,
  `password` text,
  `nombre` text,
  `imagen` text,
  `admin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `email`, `password`, `nombre`, `imagen`, `admin`) VALUES
(1, 'armoanet@gmail.com', '88329b8692b8a8a26e0a9a37421b3bd644024cfbf20f928e37510b43b7684b07', 'Edgardo Armoa', 'edgardo.jpg', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
