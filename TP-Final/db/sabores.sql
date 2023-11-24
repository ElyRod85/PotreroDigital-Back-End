-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 02:39:30
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
-- Base de datos: `heladeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sabores`
--

CREATE TABLE `sabores` (
  `id` int(3) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `precio` int(255) NOT NULL,
  `foto` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sabores`
--

INSERT INTO `sabores` (`id`, `nombre`, `categoria`, `descripcion`, `precio`, `foto`) VALUES
(1, 'Chocolate', 'Chocolates', 'Crema helada de chocolate.', 2, './imgs/choco-Chocolate.png'),
(2, 'Chocolate blanco', 'Chocolates', 'Crema helada sabor a chocolate blanco.', 2, './imgs/choco-ChocolateBlanco.png'),
(3, 'Chocolate con almendras', 'Chocolates', 'Crema helada de chocolate con almendras.', 2, './imgs/choco-ChocolateConAlmendras.png'),
(4, 'Chocolate Roger', 'Chocolates', 'Crema helada sabor a chocolate con avellanas.', 2, './imgs/choco-ChocolateRoger.png'),
(5, 'Chocolate suizo', 'Chocolates', 'Crema helada de chocolate con dulce de leche.', 2, './imgs/choco-ChocoSuizo.webp'),
(6, 'Dulce de leche', 'Dulces de leche', 'Fruto noble el dulce de leche.', 2, './imgs/DDL-DDL.png'),
(7, 'Dulce de leche granizado', 'Dulces de leche', 'Crema helada de dulce de leche con chocolate.', 2, './imgs/DDL-DDLGranizado.png'),
(8, 'Dulce de leche con nueces', 'Dulces de leche', 'Crema helada de dulce de leche con nueces.', 2, './imgs/DDL-DDLNuez.png'),
(9, 'Banana con dulce de leche', 'Dulces de leche', 'Crema helada sabor a banana con dulce de leche.', 2, './imgs/DDL-BananaDDL.png'),
(10, 'Flan con dulce de leche', 'Dulces de leche', 'Crema helada sabor a flan de vainilla con dulce de leche.', 2, './imgs/DDL-FlanDDL.png'),
(11, 'Super dulce de leche', 'Dulces de leche', '¿Sabés qué le falta a tu dulce de leche? ¡MÁS dulce de leche!', 2, './imgs/DDL-SuperDDL.png'),
(12, 'Menta granizada', 'Incomibles', '¿Alguna vez te preguntaste cómo sería el helado de dentífrico? ¡Nosotros tampoco! Esta opción es ideal para los fans de las empanadas de soja en frasco.', 2, './imgs/terrible-MentaGranizada.png'),
(13, 'Limón con menta y jengibre', 'Incomibles', '¿Y si hacemos un sabor más incomible que el de la menta granizada, le agregamos un kilo de azúcar y vemos qué sale? ¡Contanos qué te parece!', 2, './imgs/terrible-LimonMentaJengibre.png'),
(14, 'Crema del cielo', 'Cremas', 'Crema helada sabor a vainilla con colorante celeste. ¡El favorito de los niños!', 2, './imgs/cream-CremaCielo.png'),
(15, 'Chantilly', 'Cremas', 'Crema helada sabor a chantilly.', 2, './imgs/cream-Chantilly.png'),
(16, 'Café', 'Cremas', '¡Porque a veces hace mucho calor para tomar infusiones y vos necesitás tu dosis de cafeína!', 2, './imgs/cream-Cafe.webp'),
(17, 'Cookies', 'Cremas', 'Crema helada sabor a chantilly con dulce de leche repostero y trozos de galleta dulce.', 2, './imgs/cream-Cookies.png'),
(18, 'Cookies con crema', 'Cremas', 'Crema helada sabor a chantilly con trozos de galleta dulce.', 2, './imgs/cream-cookies-and-cream.webp'),
(19, 'Crema Crunch', 'Cremas', 'Crema helada con sabor a chocolate con maní crocante y chocolate granizado.', 2, './imgs/cream-Crema-Crunch.webp'),
(20, 'Crema rusa', 'Cremas', 'Crema helada sabor a nuez con nueces.', 2, './imgs/cream-CremaRusa.png'),
(21, 'Granizado', 'Cremas', 'Crema helada sabor a chantilly con chocolate.', 2, './imgs/cream-Granizado.png'),
(22, 'Mantecol', 'Cremas', 'Crema helada de pasta de maní.', 2, './imgs/cream-Mantecol.png'),
(23, 'Tiramisú', 'Cremas', 'Crema helada sabor a vainilla, pionono con vino Masala, cacao amargo, café y queso crema.', 2, './imgs/cream-tiramisu.webp'),
(24, 'Tramontana', 'Cremas', 'Crema helada sabor a chantilly con dulce de leche y galletas dulces bañadas en chocolate.', 2, './imgs/cream-Tramontana.png'),
(25, 'Vainilla', 'Cremas', 'El sabor más menospreciado de todos. Un comodín que queda bien con cualquier cosa.', 2, './imgs/cream-Vainilla.png'),
(26, 'Vainitella', 'Cremas', 'Crema helada sabor a vainilla con pasta de avellanas.', 2, './imgs/cream-Vainitella.png'),
(27, 'Ananá', 'Frutales (agua)', 'Helado de agua sabor a ananá.', 2, './imgs/fruit-Anana.png'),
(28, 'Frambuesa', 'Frutales (agua)', 'Helado de agua sabor frambuesa.', 2, './imgs/fruit-frambuesa-agua.webp'),
(29, 'Frutilla', 'Frutales (agua)', 'Helado de agua sabor frutilla.', 2, './imgs/fruit-Frutilla.png'),
(30, 'Limón', 'Frutales (agua)', 'Helado de agua sabor limón.', 2, './imgs/fruit-Limon.png'),
(31, 'Mango', 'Frutales (agua)', 'Helado de agua de mango.', 2, './imgs/fruit-mango.webp'),
(32, 'Mango y naranja', 'Frutales (agua)', 'Helado de agua sabor a mango y naranja.', 2, './imgs/fruit-NaranjaMango.png'),
(33, 'Maracuyá', 'Frutales (agua)', 'Helado de agua sabor a maracuyá.', 2, './imgs/fruit-Maracuya.png'),
(34, 'Arándanos', 'Frutales (crema)', 'Crema helada sabor chantilly con arándanos.', 2, './imgs/fruit-Arandanos.png'),
(35, 'Bananita Dolce', 'Frutales (crema)', 'Crema helada sabor a banana con chocolate.', 2, './imgs/fruit-BananitaDolce.png'),
(36, 'Frambuesa', 'Frutales (crema)', 'Crema helada sabor frambuesa.', 2, './imgs/fruit-Frambuesa-crema.webp'),
(37, 'Cerezas.', 'Frutales (crema)', 'Crema helada de cerezas.', 2, './imgs/fruit-Cerezas.png'),
(38, 'Crema de Frutilla', 'Frutales (crema)', 'Crema helada de frutilla.', 2, './imgs/fruit-FrutillaCrema.png'),
(39, 'Frutilla nevada', 'Frutales (crema)', 'Crema helada sabor a chantilly con pulpa de frutillas.', 2, './imgs/fruit-FrutillaNevada.png'),
(40, 'Cheesecake de frutilla', 'Frutales (crema)', '¡Nuestro mejor helado de frutilla!', 2, './imgs/fruit-frutilla-cheesecake.webp'),
(41, 'Mango y frambuesas', 'Frutales (crema)', 'Crema helada de mango y frambuesas.', 2, './imgs/fruit-mango-frambuesas.webp'),
(42, 'Mascarpone con frutos del bosque', 'Frutales (crema)', 'Crema helada de mascarpone con pulpa de frutillas, frambuesas, grosellas coloradas, cassis y moras.', 2, './imgs/fruit-MascarponeFrutosBosque.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sabores`
--
ALTER TABLE `sabores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sabores`
--
ALTER TABLE `sabores`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
