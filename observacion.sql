-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2020 a las 23:40:01
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `observacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `Id` int(11) NOT NULL,
  `id_consulta` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`Id`, `id_consulta`, `Fecha`) VALUES
(14, 3, '2020-04-24'),
(52, 2, '2020-04-24'),
(58, 1, '2020-04-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `nombre`, `email`, `password`, `nivel`) VALUES
(1, 'administrador ', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(3, 'usuario 1', 'usuario1@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(7, 'riwaldo', 'usuario4@gmail.com ', '202cb962ac59075b964b07152d234b70', 1),
(8, 'jersians', 'usuario19@gmail.com ', '202cb962ac59075b964b07152d234b70', 1),
(9, 'riwas', 'redx@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(19, 'Juan Sánchez ', 'juanmsg34@outlook.es', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensionados`
--

CREATE TABLE `pensionados` (
  `idobs` int(11) NOT NULL,
  `idpensionado` int(11) DEFAULT NULL,
  `codpensionado` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `codmatri` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `altura` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `ancho` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `volumen` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `tipaq` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `concepto` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `obs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla matricula observacion';

--
-- Volcado de datos para la tabla `pensionados`
--

INSERT INTO `pensionados` (`idobs`, `idpensionado`, `codpensionado`, `codmatri`, `altura`, `ancho`, `volumen`, `tipaq`, `concepto`, `fecha`, `obs`) VALUES
(1, 2147483647, '222222222222222222', '42128306141AAGEJE151018', '50', '50', '50', '50', '50', '2018-10-15', 'ASADFSADFA'),
(9, 2147483647, '32456786', '343453', '50', '50', '50', '50', '50', '2018-10-15', 'PAGO ADELANTADO UNA CUOTA'),
(10, 2343, '54678909', '454646', '50', '50', '50', '50', '50', '2018-10-16', 'SE HARA ENTREGA DE DIPLOMA DE HONOR'),
(11, 4323, '23126578', '65676', '50', '50', '50', '50', '50', '2018-10-16', 'LLEGO TARDE A SU ASIGNATURA DE COMPUTACION'),
(15, 2147483647, '44444444444', '3333333333', '3333333333', '3333333333', '333333333', 'Rigido', 'Msj y Paq', '2020-01-03', '444444444444444'),
(16, 2147483647, '555555555555555', '555555555555', '55555555555555', '5555555555555', '5555555555', 'Fragil', 'mensajeria', '2020-01-03', '555555555555555555'),
(17, 2147483647, '33333333333333', '33333333333333', '33333333333', '3333333333333', '3333333333', 'Fragil', 'mensajeria', '2020-01-03', '33333333333333333'),
(18, 2147483647, '', '', '', '', '', 'Fragil', 'mensajeria', '2020-01-03', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios_consulta`
--

CREATE TABLE `precios_consulta` (
  `id_consulta` int(11) NOT NULL,
  `tipo_consulta` text NOT NULL,
  `Costo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `precios_consulta`
--

INSERT INTO `precios_consulta` (`id_consulta`, `tipo_consulta`, `Costo`) VALUES
(1, 'niño', 25),
(2, 'adolecente', 40),
(3, 'adulto y adulto mayor', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `qr` varchar(100) NOT NULL,
  `precio` decimal(7,0) NOT NULL,
  `stock` text NOT NULL,
  `totalconsulta` double NOT NULL,
  `totalmedicina` double NOT NULL,
  `total` double NOT NULL,
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `foto`, `qr`, `precio`, `stock`, `totalconsulta`, `totalmedicina`, `total`, `estado`) VALUES
(182, 'Bart Simpson', ' Usted Tiene:  gripe.- Es una enfermedad aguda, febril y contagiosa causada por virus. A diferencia de un resfriado, la gripe es una enfermedad que puede tener una evoluci�n grave. La gripe estacional puede producir epidemias, que se concentran en un momento determinado en ciertos lugares.1 ?-', 'Bart_Simpson.jpg', 'qr_182.png', '10', 'Oseltamivir - CAPSULA - Cada capsula contiene: Oseltamivir 75mg. Envase con 20 capsulas. Via de administracios oral - Adultos y ni�os mayores de 12 a�os: 75mg cada 12 horas, durante 5 dias.1 ?- ', 25, 319, 344, 1),
(186, 'Juan Topo', ' Usted Tiene:  colera.- Es una enfermedad infecto-contagiosa intstinal aguda, provocada por los serotipos 01 0139 de la bacteria Vibrio cholerae, que produce una dearrea secretoria caracterizada por deposiciones semejantes al agua de arroz, con un marcado olor a pesacado, una elevada cantidad de sodio, bicarbonato y potasio, y una escasa cantidad de proteinas.1 ?-', '43057-m.jpg', 'qr_186.png', '98', 'Doxiciclina - C�PSULA O TABLETA - Cada c�psula o tableta contiene:Hiclato de doxiciclina equivalente a 100 mg de doxicilina. Envase con 10 c�psulas o tabletas. V�a de administraci�n y Dosis: Oral - Adultos: el primer d�a 100 mg cada 12 horas y continuar con 100 mg/d�a, cada 12 � 24 horas Ni�os mayores de 10 a�os: 4 mg/kg de peso corporal/d�a, administrar cada 12 horas el primer d�a. Despu�s 2.2 mg/kg de peso corporal/d�a, dividida cada 12 horas.1 ?- ', 50, 86, 136, 1),
(188, 'Jordi Rosado', ' Usted Tiene:  coronavirus.- Se trata de un virus de transmicion persona a persona o por tocar superficies donde el infectado haya tosido o estornudado. El coronavirus SARS-Cov-2 es un virus que apareci� en China. Despu�s se extendi� a todos los continentes del mundo provocando una pandemia. Actualmente Europa y Am�rica son los m�s afectados. Este nuevo virus, provoca la enfermedad conocida con el nombre de COVID-19.1 ?-', 'Jordi Rosado.jpg', 'qr_188.png', '59', 'Se recomienda reposo absoluto y que el sistema inmunologico consiga vencer el virus al rededor de 14 dias que es lo que dura en desarrollarse el virus. Se recomienda quedarse en casa para evitar su transmision. Actualmente no hay cura para esta enfermedad. Se puede tomar Paracetamol - TABLETA - Cada tableta contiene: Paracetamol 500mg. Envase con 10 tabletas. Via de Adeministracion: Oral Adultos: 250-500 mg cada 4 � 6 horas. Ni�os: De 10 a 30 mg/kg de peso corporal, cada 4 � 6 horas. Esto solamente es para atenuar la fiebre si los sintomas se complican y tiene dificultad para respirar acudir de inmediato al hospital 1 ?- ', 40, 22, 62, 1),
(189, 'iCarly', ' Usted Tiene:  gastritis.- Es la inflamaci�n de la mucosa g�strica, que en la gastroacopia se ve enrojecida, presentadose en forma de manchas rojisas, las cuales representan irritaci�n o hemorragias subepiteliales. Sin embargo, el diagn�stico preciso se obtiene por exploraci�n endosc�pica. En esta se apreciar� si es solo una parte del est�mago la que est� afectada o toda la esfera g�strica.1 ?-', 'icarly.jpg', 'qr_189.png', '15', 'Ranitidina GRAGEA O TABLETA - Cada gragea o tableta contiene: Clorhidrato de ranitidina equivalente a 150 mg de ranitidina.Envase con 20 grageas o tabletas. Via de administracion oral - Adultos:150 mg a 300 mg por v�a oral cada 12 a 24 horas. Ni�os: 2 a 4 mg/kg /d�a, cada 12 horas.1 ?- ', 30, 18, 48, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `productos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pensionados`
--
ALTER TABLE `pensionados`
  ADD PRIMARY KEY (`idobs`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id` (`productos_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pensionados`
--
ALTER TABLE `pensionados`
  MODIFY `idobs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD CONSTRAINT `promociones_ibfk_1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
