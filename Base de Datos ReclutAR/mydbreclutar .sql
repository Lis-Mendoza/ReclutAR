-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2020 a las 01:49:48
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydbreclutar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanias`
--

CREATE TABLE `campanias` (
  `id_campanias` int(11) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `campanias`
--

INSERT INTO `campanias` (`id_campanias`, `fecha_inicio`, `fecha_fin`, `descripcion`) VALUES
(1, '2020-04-01', '2020-06-01', 'Campaña 1'),
(2, '2020-06-01', '2020-08-01', 'campaña 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campania_producto`
--

CREATE TABLE `campania_producto` (
  `id_campania` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

CREATE TABLE `categoria_producto` (
  `id_categoria` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incorporaciones`
--

CREATE TABLE `incorporaciones` (
  `id_incorporaciones` int(11) NOT NULL,
  `id_revendedores` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `estado` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `incorporaciones`
--

INSERT INTO `incorporaciones` (`id_incorporaciones`, `id_revendedores`, `fecha_ingreso`, `fecha_baja`, `estado`) VALUES
(5, 35, '2020-04-01', '2020-06-01', ''),
(8, 18, '2020-03-01', '2020-05-01', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_producto_orden`
--

CREATE TABLE `linea_producto_orden` (
  `id_producto` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_producto_pedido`
--

CREATE TABLE `linea_producto_pedido` (
  `id_productos` int(11) NOT NULL,
  `id_pedidos` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `id_negocio` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `foto` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `e-mail` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_campanias` int(11) NOT NULL,
  `telefonos` int(20) NOT NULL,
  `bonificaciones` int(11) NOT NULL,
  `porcentaje_revendedor` int(11) NOT NULL,
  `rubro` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id_ordenes` int(11) NOT NULL,
  `id_revendedor` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_bin NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `fecha_vencimiento` date NOT NULL,
  `fecha_de_solicitud` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedidos` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_bin NOT NULL,
  `estado` varchar(60) COLLATE utf8_bin NOT NULL,
  `fecha_entrega` date NOT NULL,
  `id_revendedores` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedidos`, `descripcion`, `estado`, `fecha_entrega`, `id_revendedores`, `fecha_creacion`) VALUES
(1, 'pedido agostini', '1', '2020-05-01', 5, '2020-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_productos` int(11) NOT NULL,
  `descripcion` varchar(60) COLLATE utf8_bin NOT NULL,
  `foto` varchar(250) COLLATE utf8_bin NOT NULL,
  `precio` int(11) NOT NULL,
  `priorizacion` tinyint(4) NOT NULL,
  `valor_porcentaje_ganancia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_productos`, `descripcion`, `foto`, `precio`, `priorizacion`, `valor_porcentaje_ganancia`) VALUES
(1, 'labial', 'x', 250, 1, 0),
(2, 'locion', 'x', 300, 0, 0),
(3, 'perfume elegance', 'x', 700, 1, 0),
(4, 'rimel negro', 'x', 350, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revendedores`
--

CREATE TABLE `revendedores` (
  `id_revendedor` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `apellido` varchar(45) COLLATE utf8_bin NOT NULL,
  `dni` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `e_mail` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `foto` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `telefono` int(20) NOT NULL,
  `direccion` varchar(39) COLLATE utf8_bin DEFAULT NULL,
  `estado` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `revendedores`
--

INSERT INTO `revendedores` (`id_revendedor`, `nombre`, `apellido`, `dni`, `fecha_nacimiento`, `e_mail`, `foto`, `telefono`, `direccion`, `estado`) VALUES
(2, 'martin', 'lugani', 2222222, '1979-12-12', 'sadsa', 'asdasd', 0, 'sadsad', '0'),
(3, 'lis ', 'mendoza', 33333333, '1992-08-09', 'sajdhsa', 'sadsad', 0, 'jdfksdhfkjhdsfjkh', '0'),
(4, 'Fatima', 'Cross', 15224352, '0000-00-00', 'mi.eleifend.egestas@cursusluctus.ca', 'ITY52HSW1LE', 1, 'P.O. Box 694, 940 Semper Rd.', '0'),
(5, 'Clarke', 'Benton', 32404975, '0000-00-00', 'netus@accumsanlaoreet.edu', 'MFL57XKF5TM', 8, '197-4532 Penatibus St.', '0'),
(6, 'Zachary', 'Frost', 41477647, '0000-00-00', 'quis.arcu@luctusfelis.net', 'COP08SPY5TE', 7, '850-4055 Placerat, Road', '0'),
(7, 'Sara', 'Henson', 13583509, '0000-00-00', 'Sed.molestie@libero.net', 'STN41KHE0GZ', 3, '1694 Justo Avenue', '0'),
(8, 'Brett', 'Decker', 20467347, '0000-00-00', 'lobortis.quam.a@luctus.net', 'SPY60ZHW3FE', 7, 'Ap #321-3848 Ultrices. St.', '0'),
(9, 'Zena', 'Shannon', 15149924, '0000-00-00', 'urna@erat.edu', 'EXG72WUZ1MO', 3, 'P.O. Box 828, 3929 Nulla Rd.', '0'),
(10, 'Rhoda', 'Ferrell', 17245202, '0000-00-00', 'quis@hymenaeosMaurisut.ca', 'UZG31SIH5PO', 3, 'P.O. Box 739, 1825 A Road', '0'),
(11, 'John', 'Hardin', 5248152, '0000-00-00', 'dapibus.rutrum@ac.edu', 'VKS00ATE5UZ', 8, '5504 Vitae St.', '0'),
(12, 'Caleb', 'Nieves', 13363592, '0000-00-00', 'Morbi@Donecvitae.net', 'EGP77GCI8MQ', 6, 'Ap #182-4318 Purus. Ave', '0'),
(13, 'Lucius', 'Mcclain', 34554592, '0000-00-00', 'est@at.com', 'ZES53QQT6SX', 7, '590-709 Tincidunt Rd.', '0'),
(14, 'Molly', 'Bruce', 14704830, '0000-00-00', 'dolor@Donecnon.com', 'SND98MXW7UV', 2, 'Ap #523-2505 Maecenas Av.', '0'),
(15, 'Tatiana', 'Anderson', 49632305, '0000-00-00', 'malesuada@nisiAeneaneget.edu', 'GCO81ELK9GT', 3, 'Ap #413-6110 Facilisis St.', '0'),
(16, 'Wade', 'George', 22688996, '0000-00-00', 'faucibus.Morbi@semperNamtempor.co.uk', 'GKJ03HCE9HF', 2, '3552 Sed Ave', '0'),
(17, 'Remedios', 'Fuller', 27964733, '0000-00-00', 'dolor.Donec@aliquetliberoInteger.edu', 'IOM61WJG0DK', 2, 'P.O. Box 523, 2031 Scelerisque Rd.', '0'),
(18, 'Allegra', 'Hendricks', 41623701, '0000-00-00', 'montes.nascetur@necorciDonec.co.uk', 'DFT77JBB5PD', 3, '2497 Turpis. Street', '0'),
(19, 'Griffin', 'Hays', 15175557, '0000-00-00', 'vehicula.Pellentesque@etmagna.net', 'LQZ59ICE3VY', 5, 'Ap #342-9011 Consectetuer, St.', '0'),
(20, 'Isaiah', 'Morrow', 14512430, '0000-00-00', 'scelerisque.sed@orci.edu', 'ZFA49INK5GJ', 2, '4378 Lectus. Avenue', '0'),
(21, 'Haviva', 'Franks', 16011389, '0000-00-00', 'at.auctor.ullamcorper@montesnascetur.org', 'LYX19SIE4IY', 9, '4289 Ac Rd.', '0'),
(22, 'Armand', 'Monroe', 11614466, '0000-00-00', 'dapibus@atarcuVestibulum.edu', 'DOE95VLJ7IF', 5, 'Ap #102-6534 Metus Road', '0'),
(23, 'Branden', 'Phelps', 23250073, '0000-00-00', 'commodo.auctor.velit@sociisnatoque.com', 'VDT88QUU8VT', 7, 'P.O. Box 847, 8171 Pede Av.', '0'),
(24, 'Erin', 'Gates', 46552414, '0000-00-00', 'tincidunt.Donec.vitae@nuncidenim.edu', 'QJH56HLA1EE', 9, 'Ap #981-2587 Mi Rd.', '0'),
(25, 'Sara', 'Deleon', 6974070, '0000-00-00', 'amet.consectetuer@nibhQuisque.ca', 'HPM65ESD8VH', 9, '3836 Donec St.', '0'),
(26, 'Keane', 'Cunningham', 8966108, '0000-00-00', 'in.tempus.eu@nullaIntegerurna.org', 'WIN01BYD7GX', 7, 'Ap #941-4348 Blandit Street', '0'),
(27, 'Wing', 'Moore', 32279652, '0000-00-00', 'Cras.vulputate@adipiscingligulaAenean.co.uk', 'UWD57BWZ4JZ', 6, 'P.O. Box 317, 1211 Vulputate, Rd.', '0'),
(28, 'Ronan', 'Howe', 48393067, '0000-00-00', 'Morbi@aliquetProinvelit.ca', 'NOE23RKZ3NE', 3, 'P.O. Box 396, 2480 Sed Rd.', '0'),
(29, 'Shad', 'Humphrey', 7535606, '0000-00-00', 'risus@vitaesemper.ca', 'QSY25MVL3FU', 2, 'Ap #576-6940 Egestas Avenue', '0'),
(30, 'Kieran', 'Dunn', 42847058, '0000-00-00', 'non@nunc.edu', 'BMI75DQC2ZZ', 6, 'P.O. Box 239, 3085 A, Rd.', '0'),
(31, 'Cally', 'Cohen', 16966764, '0000-00-00', 'ut@duinec.edu', 'VIW08NZH5RR', 4, 'Ap #428-6185 Mollis Avenue', '0'),
(32, 'Leandra', 'Mcdaniel', 9348591, '0000-00-00', 'lorem.ac@nec.edu', 'PSF73QQR0IH', 3, '728-7789 Tortor Avenue', '0'),
(33, 'Risa', 'Sparks', 11252839, '0000-00-00', 'luctus@quamelementum.ca', 'ECH77JSN3HG', 3, '739-5344 Auctor, Street', '0'),
(34, 'Jaime', 'Lowe', 37588170, '0000-00-00', 'cursus.non.egestas@Loremipsumdolor.edu', 'WLX56LNO5RQ', 1, '2017 Ultricies Street', '0'),
(35, 'Allen', 'Talley', 44602618, '0000-00-00', 'lectus@Etiamligulatortor.ca', 'EMM74YNR1CB', 9, '3658 Tempus Street', '0'),
(36, 'Lillian', 'Watson', 6006076, '0000-00-00', 'et.netus.et@lacusAliquam.org', 'XWE32OVM2MH', 4, 'P.O. Box 263, 6771 Etiam Avenue', '0'),
(37, 'Maite', 'Santos', 7550983, '0000-00-00', 'nibh.enim@aliquam.edu', 'GLO16ALX1WR', 3, 'P.O. Box 475, 2401 Nec Rd.', '0'),
(38, 'Sasha', 'Sears', 32938379, '0000-00-00', 'luctus.et@vehicularisus.edu', 'YHY10YWY3WH', 7, '847-2923 Rutrum Avenue', '0'),
(39, 'Haley', 'Adkins', 38850826, '0000-00-00', 'erat@aliquamadipiscinglacus.org', 'OVL20HEK3TX', 4, '8081 Rutrum Rd.', '0'),
(40, 'Julian', 'Schwartz', 40204476, '0000-00-00', 'eu.arcu@maurisa.edu', 'AFB65JSS8FX', 9, 'Ap #559-838 Sapien Avenue', '0'),
(41, 'Louis', 'Mckay', 27082211, '0000-00-00', 'lacus.varius.et@a.net', 'VIH75VLO1XR', 6, '1757 Aptent St.', '0'),
(42, 'Aspen', 'Gross', 48096327, '0000-00-00', 'Fusce@ornareIn.ca', 'BAU80YXJ3QU', 5, 'Ap #796-5745 Cursus Av.', '0'),
(43, 'Sydney', 'Parrish', 31282771, '0000-00-00', 'In@at.ca', 'LRT09UHF3EO', 5, 'P.O. Box 846, 286 Id, Road', '0'),
(44, 'Lane', 'Todd', 23854782, '0000-00-00', 'Vestibulum@Fusce.ca', 'LAV62ZPE9AE', 8, 'Ap #148-2287 At St.', '0'),
(45, 'Kasimir', 'Marshall', 20327270, '0000-00-00', 'tempor@nullaIntegerurna.com', 'GKS00NIP9WC', 6, 'P.O. Box 740, 6990 Fermentum Street', '0'),
(46, 'Blair', 'William', 12831256, '0000-00-00', 'sit@sed.net', 'AXO51GDS1QZ', 4, '506-7139 Sit Street', '0'),
(47, 'Neil', 'Cardenas', 9876219, '0000-00-00', 'Aliquam.auctor@rutrummagna.org', 'PTU03UPT2JZ', 2, '368-8794 Venenatis Rd.', '0'),
(48, 'Adrienne', 'Ross', 40152962, '0000-00-00', 'viverra.Maecenas.iaculis@feugiatnec.com', 'ETX73JIZ5GT', 3, 'Ap #917-8665 Aliquet St.', '0'),
(49, 'Carol', 'Lewis', 27529135, '0000-00-00', 'volutpat.nunc.sit@in.edu', 'RLK19DWG7FF', 5, 'Ap #414-1693 Est. Ave', '0'),
(50, 'Adena', 'Mccullough', 36939945, '0000-00-00', 'erat@nonummy.co.uk', 'JVM20LRA8RN', 1, 'P.O. Box 543, 1449 Mollis Street', '0'),
(51, 'Gareth', 'Riley', 37945914, '0000-00-00', 'tristique.neque@euismod.com', 'HTN51OJP1LD', 4, '8049 Ut Ave', '0'),
(52, 'Ora', 'Carson', 43872315, '0000-00-00', 'at.augue.id@Cum.com', 'HXW73SLF1MI', 3, '142-5191 Sed Ave', '0'),
(53, 'Judah', 'Flowers', 31838846, '0000-00-00', 'justo.Proin@purusDuiselementum.ca', 'UQK81WBX2CP', 1, 'Ap #281-7215 Porttitor Rd.', '0'),
(54, 'Christen', 'Gallegos', 14836557, '0000-00-00', 'Suspendisse.aliquet.sem@nonummy.ca', 'OJI92IJT5LI', 3, 'P.O. Box 801, 6293 Sapien, Street', '0'),
(55, 'Castor', 'Henry', 9603796, '0000-00-00', 'Pellentesque@tempusloremfringilla.net', 'OIN89KSG4VU', 7, '3228 Id Street', '0'),
(56, 'Chaim', 'Lara', 50903371, '0000-00-00', 'ad@nec.net', 'EVQ32BRA5RW', 8, 'Ap #180-2358 Pellentesque Avenue', '0'),
(57, 'Orlando', 'Cummings', 39255672, '0000-00-00', 'velit@diamDuis.co.uk', 'OSU30PEO3WT', 5, 'Ap #917-665 Vitae St.', '0'),
(58, 'Hedy', 'Glenn', 15024301, '0000-00-00', 'faucibus@in.ca', 'APJ05DAC7FY', 3, 'P.O. Box 486, 5701 Metus. St.', '0'),
(59, 'Julie', 'Carlson', 50260546, '0000-00-00', 'molestie.tellus@nulla.edu', 'GNQ07XAO5FS', 1, '1737 Pede, Rd.', '0'),
(60, 'Tashya', 'Preston', 41548219, '0000-00-00', 'libero@eu.com', 'PBV10ZAZ2YI', 2, '922-6823 Sed St.', '0'),
(61, 'Rae', 'Fields', 43952804, '0000-00-00', 'placerat.Cras.dictum@diamlorem.org', 'POL68ERG8XE', 9, '743-438 Et Ave', '0'),
(62, 'Gareth', 'Maddox', 35233940, '0000-00-00', 'diam@ipsumCurabitur.edu', 'XNC89RCE1NR', 7, '1446 Sed Av.', '0'),
(63, 'Garrison', 'Fitzgerald', 26787227, '0000-00-00', 'Quisque.fringilla@nonummyultriciesornare.co.u', 'UMO40BGL6UO', 1, '224-9231 Ridiculus Street', '0'),
(64, 'Leonard', 'Roach', 8919340, '0000-00-00', 'pede.ultrices.a@iaculisquis.co.uk', 'JMY06EQF7IW', 5, 'P.O. Box 828, 2909 Sit Rd.', '0'),
(65, 'Olympia', 'Hardin', 39054240, '0000-00-00', 'vestibulum.lorem.sit@variusorci.net', 'JAT64DMU1WE', 6, '557-9488 Senectus Av.', '0'),
(66, 'Wesley', 'Bradford', 24993042, '0000-00-00', 'morbi@Quisque.co.uk', 'RHB22RTS6YE', 5, 'P.O. Box 959, 5639 Quisque Street', '0'),
(67, 'Shelly', 'Rose', 10600575, '0000-00-00', 'fermentum@nisi.co.uk', 'JYC02KEF6NZ', 3, 'Ap #101-8165 Lacus. Ave', '0'),
(68, 'Willa', 'Anthony', 44033291, '0000-00-00', 'tellus@odioapurus.edu', 'ZJB43LRV4AY', 1, '699-9865 Pellentesque Road', '0'),
(69, 'Claire', 'Goodwin', 40019683, '0000-00-00', 'Suspendisse.sed.dolor@maurisipsumporta.com', 'OOE65PRF7MS', 3, '391-6521 Gravida. Ave', '0'),
(70, 'Akeem', 'Ashley', 26094942, '0000-00-00', 'dictum.augue@vulputate.co.uk', 'OCW90DVX6SG', 2, '427-622 Fringilla. Rd.', '0'),
(71, 'Lance', 'Park', 34858147, '0000-00-00', 'eu.tempor.erat@pedenonummyut.net', 'VGY81QGB5KF', 2, 'Ap #363-4542 Mollis. Rd.', '0'),
(72, 'Lynn', 'Weiss', 32296698, '0000-00-00', 'eget.metus.In@Duismienim.edu', 'UHF61MBV9AO', 1, '636-4244 Faucibus Street', '0'),
(73, 'Hadley', 'Molina', 34314846, '0000-00-00', 'tincidunt@lobortisultrices.org', 'VDQ78BHK0AB', 4, 'Ap #870-2141 Ullamcorper Ave', '0'),
(74, 'Blossom', 'Gregory', 39441454, '0000-00-00', 'Mauris.eu.turpis@utmi.edu', 'JNO21FJH1KZ', 7, '7679 Laoreet Road', '0'),
(75, 'Xander', 'Winters', 32188176, '0000-00-00', 'elementum@Cum.net', 'FPZ04MOL4WX', 8, 'Ap #513-9262 Justo Road', '0'),
(76, 'Lee', 'Scott', 14355633, '0000-00-00', 'Suspendisse.commodo@mollis.ca', 'IHO11AGL9GZ', 4, 'P.O. Box 598, 4942 Vulputate, Rd.', '0'),
(77, 'Selma', 'Bradley', 5361249, '0000-00-00', 'nulla.Cras@Suspendisse.co.uk', 'PIA34KTJ4JS', 7, 'P.O. Box 160, 8962 Et St.', '0'),
(78, 'Teagan', 'Abbott', 13759877, '0000-00-00', 'rhoncus.id.mollis@Nunclaoreet.ca', 'GQL81MNB0LN', 1, '518-3088 Lacinia Road', '0'),
(79, 'Jack', 'Bryant', 15963732, '0000-00-00', 'in.dolor.Fusce@anteipsumprimis.org', 'LUU37IMS7DX', 2, '612-1744 Mi Road', '0'),
(80, 'Violet', 'Dudley', 16632994, '0000-00-00', 'lorem@odioEtiam.org', 'JLG08XLG0NU', 6, '535-670 Bibendum Av.', '0'),
(81, 'Shelly', 'Cain', 46657719, '0000-00-00', 'accumsan.laoreet@eu.ca', 'VFM38QAX9KK', 2, '228-2126 Morbi Av.', '0'),
(82, 'Daphne', 'Forbes', 8000373, '0000-00-00', 'non@aliquet.ca', 'FQE79TYS9IM', 2, 'P.O. Box 647, 3413 Tristique St.', '0'),
(83, 'Camille', 'Mckinney', 31158551, '0000-00-00', 'sagittis.Duis.gravida@tortorIntegeraliquam.ne', 'BXE82IFK2HN', 3, '704-8849 Leo. St.', '0'),
(84, 'Flavia', 'Rodgers', 48228848, '0000-00-00', 'Quisque.ornare.tortor@Crasvulputatevelit.co.u', 'EZL02KPI8HJ', 5, '190-7513 Non, Rd.', '0'),
(85, 'Lucius', 'Ramsey', 30774887, '0000-00-00', 'felis.orci@Phasellus.org', 'RHI21VRY8DP', 6, '3613 Non, Avenue', '0'),
(86, 'Leilani', 'Raymond', 31911112, '0000-00-00', 'Pellentesque.habitant.morbi@auctorquis.edu', 'IAP41JOV1ZA', 7, 'P.O. Box 864, 276 Placerat, Rd.', '0'),
(87, 'Zachery', 'Ayala', 39485818, '0000-00-00', 'hendrerit.a@aliquetmolestietellus.edu', 'NEV06YSP6IY', 3, '696-1925 Tellus St.', '0'),
(88, 'Emily', 'Young', 31462765, '0000-00-00', 'at.arcu@insodales.org', 'QIL67DTQ0CT', 1, 'P.O. Box 679, 1331 Pellentesque. Ave', '0'),
(89, 'Xantha', 'Finley', 31250257, '0000-00-00', 'Integer@lacus.edu', 'VDM15RMS0SZ', 2, 'P.O. Box 426, 531 Vivamus Street', '0'),
(90, 'Brody', 'Curry', 45647276, '0000-00-00', 'Donec.at@pellentesqueSed.net', 'VOV60OBV4SH', 7, '3173 Ligula. Ave', '0'),
(91, 'Lael', 'Mayo', 25008141, '0000-00-00', 'consequat@leo.com', 'GWL09ISK6RC', 5, 'Ap #897-6579 Sit Rd.', '0'),
(92, 'Beatrice', 'Valdez', 15436044, '0000-00-00', 'magna@orci.ca', 'BVZ06TEE0AV', 2, '625-882 Enim St.', '0'),
(93, 'Isaiah', 'Clarke', 7156646, '0000-00-00', 'eget.dictum@fermentumarcu.co.uk', 'PLH43HIY0JH', 7, '197-4618 Diam. Rd.', '0'),
(94, 'Yen', 'Zimmerman', 29555810, '0000-00-00', 'dictum.mi@antedictumcursus.ca', 'AQA04XJN0HT', 8, '124-5763 Sem, Rd.', '0'),
(95, 'Hedy', 'Burris', 12188591, '0000-00-00', 'sed.tortor@risusMorbi.co.uk', 'QMG85ZFW3DN', 8, 'P.O. Box 512, 2795 Nullam Avenue', '0'),
(96, 'Daniel', 'Kidd', 16358001, '0000-00-00', 'ullamcorper.eu@Vestibulumaccumsan.org', 'KNH62SVV3NR', 3, 'P.O. Box 595, 4671 Erat. Avenue', '0'),
(97, 'Isaiah', 'Ware', 26687231, '0000-00-00', 'orci.adipiscing@tortordictumeu.edu', 'KME08NXR8VJ', 4, '158-8740 Faucibus Av.', '0'),
(98, 'Genevieve', 'Knowles', 9931522, '0000-00-00', 'sed.dictum.eleifend@rhoncusDonec.co.uk', 'YWV14PDK0IB', 2, '2895 Tincidunt Av.', '0'),
(99, 'Urielle', 'Randolph', 27661437, '0000-00-00', 'gravida@non.co.uk', 'EEF38BZE6IV', 8, '5381 Massa. Avenue', '0'),
(100, 'Stacy', 'Lynch', 40979059, '0000-00-00', 'vestibulum.nec@pellentesque.com', 'WHY13CSB9OW', 3, '161-2405 Penatibus Rd.', '0'),
(101, 'McKenzie', 'Lancaster', 9767625, '0000-00-00', 'a.scelerisque.sed@risusIn.net', 'JYX14DRT2YR', 6, 'P.O. Box 526, 7095 Aliquam Road', '0'),
(102, 'Quon', 'Baird', 8831501, '0000-00-00', 'Suspendisse.eleifend.Cras@molestiesodales.ca', 'ATU61WSM6ZJ', 9, 'P.O. Box 157, 983 Arcu Rd.', '0'),
(103, 'Fatima', 'Shepard', 31934408, '0000-00-00', 'quis.diam@telluseuaugue.ca', 'IMV42PLJ5EZ', 7, 'Ap #683-6096 Ipsum Avenue', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `descripcion` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_roles`, `descripcion`) VALUES
(1, 'Usuario'),
(2, 'revendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `minimo` int(11) NOT NULL,
  `fecha_de_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_stock`, `cantidad`, `minimo`, `fecha_de_compra`) VALUES
(1, 100, 20, '2020-05-12'),
(2, 150, 20, '2020-05-15'),
(3, 100, 10, '2020-05-26'),
(4, 150, 20, '2020-05-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_cuenta` int(11) NOT NULL,
  `usuario` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_roles` int(11) NOT NULL,
  `id_negocio` int(11) DEFAULT NULL,
  `id_revendedor` int(11) DEFAULT NULL,
  `contrasenia` varchar(45) COLLATE utf8_bin NOT NULL,
  `pregunta_secreta` varchar(60) COLLATE utf8_bin NOT NULL,
  `respuesta_secreta` varchar(60) COLLATE utf8_bin NOT NULL,
  `fecha_alta` date NOT NULL,
  `estado` varchar(20) COLLATE utf8_bin NOT NULL,
  `intentos_sesión` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_cuenta`, `usuario`, `id_roles`, `id_negocio`, `id_revendedor`, `contrasenia`, `pregunta_secreta`, `respuesta_secreta`, `fecha_alta`, `estado`, `intentos_sesión`) VALUES
(3, 'lis', 1, NULL, NULL, 'lola', 'bruno', 'kiko', '2020-06-02', 'activo', 0),
(4, 'martintejerina', 1, NULL, NULL, 'tejerina', '¿Cuan es tu color preferido?', 'azul', '2020-06-17', 'activo', 0),
(5, 'fernando', 1, NULL, NULL, '1234', '¿cual es tu color preferido?', 'verde', '2020-06-10', 'activo', 0),
(6, 'gonzalo', 1, NULL, NULL, '1234', '¿cual es tu color preferido?', 'negro', '2020-06-18', 'activo', 0),
(13, 'mabel', 2, NULL, NULL, 'mendoza', '¿cual es tu color preferido?', 'amarillo', '2020-06-11', 'activo', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campanias`
--
ALTER TABLE `campanias`
  ADD PRIMARY KEY (`id_campanias`);

--
-- Indices de la tabla `campania_producto`
--
ALTER TABLE `campania_producto`
  ADD PRIMARY KEY (`id_campania`,`id_producto`),
  ADD KEY `producto_campania_producto` (`id_producto`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD KEY `producto_categoria_producto` (`id_producto`),
  ADD KEY `categoria_categoria_producto` (`id_categoria`);

--
-- Indices de la tabla `incorporaciones`
--
ALTER TABLE `incorporaciones`
  ADD PRIMARY KEY (`id_incorporaciones`,`id_revendedores`),
  ADD KEY `revendedor_incorporporador` (`id_revendedores`);

--
-- Indices de la tabla `linea_producto_orden`
--
ALTER TABLE `linea_producto_orden`
  ADD PRIMARY KEY (`id_producto`,`id_orden`),
  ADD KEY `orden_linea` (`id_orden`);

--
-- Indices de la tabla `linea_producto_pedido`
--
ALTER TABLE `linea_producto_pedido`
  ADD KEY `pedido_linea_pedido` (`id_pedidos`),
  ADD KEY `producto_linea_pedido` (`id_productos`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`id_negocio`),
  ADD KEY `campania_negocio` (`id_campanias`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id_ordenes`),
  ADD KEY `revendedor_ordenes` (`id_revendedor`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedidos`),
  ADD KEY `revendedor_pedidos` (`id_revendedores`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_productos`);

--
-- Indices de la tabla `revendedores`
--
ALTER TABLE `revendedores`
  ADD PRIMARY KEY (`id_revendedor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_cuenta`,`usuario`),
  ADD KEY `rol_usuario` (`id_roles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campanias`
--
ALTER TABLE `campanias`
  MODIFY `id_campanias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `id_negocio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id_ordenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_productos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `revendedores`
--
ALTER TABLE `revendedores`
  MODIFY `id_revendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campania_producto`
--
ALTER TABLE `campania_producto`
  ADD CONSTRAINT `campania_campania_producto` FOREIGN KEY (`id_campania`) REFERENCES `campanias` (`id_campanias`),
  ADD CONSTRAINT `producto_campania_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD CONSTRAINT `categoria_categoria_producto` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `producto_categoria_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `incorporaciones`
--
ALTER TABLE `incorporaciones`
  ADD CONSTRAINT `revendedor_incorporado` FOREIGN KEY (`id_incorporaciones`) REFERENCES `revendedores` (`id_revendedor`),
  ADD CONSTRAINT `revendedor_incorporporador` FOREIGN KEY (`id_revendedores`) REFERENCES `revendedores` (`id_revendedor`);

--
-- Filtros para la tabla `linea_producto_orden`
--
ALTER TABLE `linea_producto_orden`
  ADD CONSTRAINT `orden_linea` FOREIGN KEY (`id_orden`) REFERENCES `ordenes` (`id_ordenes`),
  ADD CONSTRAINT `producto_linea` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `linea_producto_pedido`
--
ALTER TABLE `linea_producto_pedido`
  ADD CONSTRAINT `pedido_linea_pedido` FOREIGN KEY (`id_pedidos`) REFERENCES `pedidos` (`id_pedidos`),
  ADD CONSTRAINT `producto_linea_pedido` FOREIGN KEY (`id_productos`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD CONSTRAINT `campania_negocio` FOREIGN KEY (`id_campanias`) REFERENCES `campanias` (`id_campanias`);

--
-- Filtros para la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD CONSTRAINT `revendedor_ordenes` FOREIGN KEY (`id_revendedor`) REFERENCES `revendedores` (`id_revendedor`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `revendedor_pedidos` FOREIGN KEY (`id_revendedores`) REFERENCES `revendedores` (`id_revendedor`);

--
-- Filtros para la tabla `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `producto_stock` FOREIGN KEY (`id_stock`) REFERENCES `productos` (`id_productos`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `rol_usuario` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
