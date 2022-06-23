-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 17:36:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `carritovc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `prodId` int(11) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `userId`, `prodId`, `quantity`) VALUES
(57, 2, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `stock`) VALUES
(1, 'Maserati', 'Spyder', 7450, 'http://dummyimage.com/358x464.png/cc0000/ffffff', 3),
(2, 'Fiat', 'Nuova 500', 12916, 'http://dummyimage.com/444x402.png/dddddd/000000', 1),
(4, 'Porsche', '968', 6046, 'http://dummyimage.com/326x470.png/ff4444/ffffff', 4),
(5, 'Subaru', 'XT', 9747, 'http://dummyimage.com/435x390.png/cc0000/ffffff', 1),
(6, 'Suzuki', 'XL-7', 11432, 'http://dummyimage.com/444x376.png/dddddd/000000', 9),
(7, 'Cadillac', 'CTS-V', 12301, 'http://dummyimage.com/375x364.png/5fa2dd/ffffff', 4),
(8, 'BMW', 'Z4 M', 8471, 'http://dummyimage.com/337x458.png/dddddd/000000', 10),
(9, 'Dodge', 'Ram Van B250', 13943, 'http://dummyimage.com/367x491.png/ff4444/ffffff', 6),
(10, 'Chrysler', 'LeBaron', 14241, 'http://dummyimage.com/406x325.png/cc0000/ffffff', 2),
(11, 'Chevrolet', 'Camaro', 10378, 'http://dummyimage.com/389x313.png/cc0000/ffffff', 3),
(12, 'BMW', '5 Series', 6074, 'http://dummyimage.com/497x454.png/dddddd/000000', 6),
(13, 'Dodge', 'Stratus', 6171, 'http://dummyimage.com/393x341.png/dddddd/000000', 8),
(14, 'Chevrolet', 'Impala', 12483, 'http://dummyimage.com/468x412.png/cc0000/ffffff', 6),
(15, 'Maserati', 'Gran Sport', 16536, 'http://dummyimage.com/476x345.png/cc0000/ffffff', 2),
(16, 'Alfa Romeo', '164', 10110, 'http://dummyimage.com/348x471.png/dddddd/000000', 10),
(17, 'BMW', 'M3', 7988, 'http://dummyimage.com/430x379.png/5fa2dd/ffffff', 0),
(18, 'BMW', '650', 7975, 'http://dummyimage.com/493x387.png/5fa2dd/ffffff', 10),
(19, 'Acura', 'RSX', 10158, 'http://dummyimage.com/362x403.png/5fa2dd/ffffff', 5),
(20, 'Mercedes-Benz', 'SLK-Class', 9202, 'http://dummyimage.com/459x420.png/ff4444/ffffff', 1),
(21, 'Chevrolet', 'Corvette', 6060, 'http://dummyimage.com/475x490.png/5fa2dd/ffffff', 4),
(22, 'Pontiac', 'Sunbird', 15877, 'http://dummyimage.com/315x472.png/ff4444/ffffff', 5),
(23, 'Ford', 'F-Series', 7042, 'http://dummyimage.com/406x308.png/cc0000/ffffff', 8),
(24, 'Cadillac', 'Allante', 8682, 'http://dummyimage.com/434x434.png/cc0000/ffffff', 1),
(25, 'Kia', 'Sorento', 13002, 'http://dummyimage.com/353x480.png/ff4444/ffffff', 10),
(26, 'Honda', 'del Sol', 5910, 'http://dummyimage.com/352x447.png/5fa2dd/ffffff', 9),
(27, 'Mitsubishi', 'Raider', 10237, 'http://dummyimage.com/302x455.png/dddddd/000000', 1),
(28, 'Ford', 'F350', 16794, 'http://dummyimage.com/423x377.png/dddddd/000000', 2),
(29, 'Nissan', 'Altima', 16779, 'http://dummyimage.com/498x344.png/cc0000/ffffff', 7),
(30, 'Mitsubishi', 'Montero', 15717, 'http://dummyimage.com/306x447.png/dddddd/000000', 9),
(31, 'Nissan', 'Altima', 10011, 'http://dummyimage.com/309x344.png/dddddd/000000', 8),
(32, 'Ford', 'E250', 17373, 'http://dummyimage.com/416x330.png/cc0000/ffffff', 1),
(33, 'Scion', 'xB', 16676, 'http://dummyimage.com/442x330.png/5fa2dd/ffffff', 3),
(34, 'Honda', 'Insight', 6631, 'http://dummyimage.com/372x498.png/cc0000/ffffff', 10),
(35, 'Honda', 'Insight', 12945, 'http://dummyimage.com/335x477.png/ff4444/ffffff', 2),
(36, 'Chevrolet', 'Suburban 1500', 17387, 'http://dummyimage.com/311x331.png/cc0000/ffffff', 8),
(37, 'Ford', 'Explorer', 17366, 'http://dummyimage.com/385x455.png/5fa2dd/ffffff', 8),
(38, 'Ford', 'Fiesta', 7417, 'http://dummyimage.com/484x448.png/ff4444/ffffff', 4),
(39, 'Chevrolet', 'Cobalt', 5381, 'http://dummyimage.com/497x370.png/cc0000/ffffff', 6),
(40, 'Acura', 'TL', 17489, 'http://dummyimage.com/344x361.png/dddddd/000000', 1),
(41, 'Jeep', 'Liberty', 5285, 'http://dummyimage.com/447x340.png/cc0000/ffffff', 3),
(42, 'Jaguar', 'XK Series', 12896, 'http://dummyimage.com/476x343.png/5fa2dd/ffffff', 4),
(43, 'Honda', 'Insight', 17472, 'http://dummyimage.com/484x398.png/cc0000/ffffff', 10),
(44, 'Plymouth', 'Voyager', 6990, 'http://dummyimage.com/362x491.png/ff4444/ffffff', 3),
(45, 'Ford', 'Thunderbird', 18237, 'http://dummyimage.com/468x432.png/5fa2dd/ffffff', 4),
(46, 'Hummer', 'H2', 5904, 'http://dummyimage.com/315x443.png/dddddd/000000', 5),
(47, 'GMC', 'Jimmy', 5366, 'http://dummyimage.com/480x363.png/cc0000/ffffff', 6),
(48, 'Volkswagen', 'rio', 18734, 'http://dummyimage.com/330x357.png/ff4444/ffffff', 9),
(49, 'Lexus', 'SC', 6446, 'http://dummyimage.com/454x466.png/cc0000/ffffff', 1),
(50, 'Dodge', 'Daytona', 10772, 'http://dummyimage.com/427x302.png/5fa2dd/ffffff', 8),
(70, 'prueba', 'prueba', 15000, '../Views/images/ffffff2.png', 8),
(71, 'prueba', 'prueba3', 12000, '../Views/images/ffffff2.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nick` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surnames` varchar(50) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nick`, `name`, `surnames`, `email`, `image`, `password`, `type`) VALUES
(1, 'user', 'username', 'usersurname', '', NULL, '1234', 'user'),
(2, 'admin', 'admin', 'admin', '', NULL, '1234', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_ibfk_2` (`userId`),
  ADD KEY `prodId` (`prodId`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`prodId`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
