-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-07-2022 a las 17:21:23
-- Versión del servidor: 5.7.38-log-cll-lve
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `colmextu_qrtutores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alm`
--

CREATE TABLE `alm` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `grado` int(5) NOT NULL,
  `grupo` varchar(3) NOT NULL,
  `ciclo` varchar(9) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alm`
--

INSERT INTO `alm` (`id`, `nombre`, `matricula`, `correo`, `grado`, `grupo`, `ciclo`, `foto`, `nivel`) VALUES
(23, 'REGINA ANGELIQUE LIRA OLACO', 'K21222', 'REGINA.LIRA.OLACO@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/alumnos/preescolar/1/A/K21222-REGINA-ANGELIQUE-LIRA-OLACO.jpg', 'preescolar'),
(24, 'AARON VARGAS RAMIREZ', 'K212224', 'AARON.VARGAS.RAMIREZ@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212224-AARON-VARGAS-RAMIREZ.jpg', 'preescolar'),
(25, 'BRAULIO VARGAS SOTO', 'K212225', 'BRAULIO.VARGAS.SOTO@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212225-BRAULIO-VARGAS-SOTO.jpg', 'preescolar'),
(26, 'CESAR ALONSO CRUZ SANCHEZ', 'K21228', 'CESAR.CRUZ.SANCHEZ@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K21228-CESAR-ALONSO-CRUZ-SANCHEZ.jpg', 'preescolar'),
(27, 'RICARDO CASTRO CERON', 'K21226', 'RICARDO.CASTRO.CERON@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K21226-RICARDO-CASTRO-CERON.jpg', 'preescolar'),
(28, 'VALENTINA LUNA DELGADILLO', 'K212216', 'VALENTINA.LUNA.DELGADILLO@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212216-VALENTINA-LUNA-DELGADILLO.jpg', 'preescolar'),
(29, 'ALANNAH GARCIA OVIEDO', 'K212231', 'ALANNAH.GARCIA.OVIEDO@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212231-ALANNAH-GARCIA-OVIEDO.jpg', 'preescolar'),
(30, 'EMILIO VEGA REYES', 'K212248', 'EMILIO.VEGA.REYES@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212248-EMILIO-VEGA-REYES.jpg', 'preescolar'),
(32, 'LUIS FERNANDO PEREZ SOLIS', 'K212244', 'LUIS.PEREZ.SOLIS@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212244-LUIS-FERNANDO-PEREZ-SOLIS.jpg', 'preescolar'),
(33, 'JOSE RAUL MARQUEZ GOMEZ', 'K212236', 'JOSE.MARQUEZ.GOMEZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212236-JOSE-RAUL-MARQUEZ-GOMEZ.jpg', 'preescolar'),
(34, 'NADIA RENATA MELENDEZ SANCHEZ', 'K212238', 'NADIA.MELENDEZ.SANCHEZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212238-NADIA-RENATA-MELENDEZ-SANCHEZ.jpg', 'preescolar'),
(35, 'ARIADNA GARCIA GARCIA', 'K212271', 'ARIADNA.GARCIA.GARCIA@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(36, 'VICTORIA SARAHI MORENO CUEVAS', 'K212240', 'VICTORIA.MORENO.CUEVAS@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212240-VICTORIA-SARAHI-MORENO-CUEVAS.jpg', 'preescolar'),
(37, 'CARLOS LEONARDO TELLEZ MUNOZ', 'K212247', 'CARLOS.TELLEZ.MUNOZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(38, 'SOFIA GONZALEZ CRUZ', 'K212232', 'SOFIA.GONZALEZ.CRUZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212232-SOFIA-GONZALEZ-CRUZ.jpg', 'preescolar'),
(39, 'CESAR FLOR HERNANDEZ', 'K212228', 'CESAR.FLOR.HERNANDEZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212228-CESAR-FLOR-HERNANDEZ.jpg', 'preescolar'),
(40, 'FRIDA FLORES OLVERA', 'K212229', 'FRIDA.FLORES.OLVERA@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212229-FRIDA-FLORES-OLVERA.jpg', 'preescolar'),
(41, 'LEONELA RAMIREZ FLORES', 'K212245', 'LEONELA.RAMIREZ.FLORES@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212245-LEONELA-RAMIREZ-FLORES.jpg', 'preescolar'),
(42, 'SANTIAGO CARREON RODRIGUEZ', 'K212226', 'SANTIAGO.CARREON.RODRIGUEZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212226-SANTIAGO-CARREON-RODRIGUEZ.jpg', 'preescolar'),
(43, 'ANA REGINA MENDEZ LUGO', 'K212219', 'ANA.MENDEZ.LUGO@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212219-ANA-REGINA-MENDEZ-LUGO.jpg', 'preescolar'),
(44, 'EYDAN EMMANUEL AVEDANO SOSA', 'K21225', 'EYDAN.AVENDANO.SOSA@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K21225-EYDAN-EMMANUEL-AVEDANO-SOSA.jpg', 'preescolar'),
(45, 'LEONARDO LOPEZ HERNANDEZ', 'K212215', 'LEONARDO.LOPEZ.HERNANDEZ@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212215-LEONARDO-LOPEZ-HERNANDEZ.jpg', 'preescolar'),
(46, 'MATIAS IVAN QUINTERO MUNOZ', 'K212221', 'MATIAS.QUINTERO.MUNOZ@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212221-MATIAS-IVAN-QUINTERO-MUNOZ.jpg', 'preescolar'),
(47, 'VICTOR NOE MENDEZ GALINDO', 'K212218', 'VICTOR.MENDEZ.GALINDO@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212218-VICTOR-NOE-MENDEZ-GALINDO.jpg', 'preescolar'),
(48, 'DANIELA GISELLE MARROQUIN AGUIRRE', 'K212237', 'DANIELA.MARROQUIN.AGUIRRE@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212237-DANIELA-GISELLE-MARROQUIN-AGUIRRE.jpg', 'preescolar'),
(49, 'TADEO OZIEL OCAMPO GARRIDO', 'K212241', 'TADEO.OCAMPO.GARRIDO@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212241-TADEO-OZIEL-OCAMPO-GARRIDO.jpg', 'preescolar'),
(50, 'SANTIAGO PEREZ PEREZ', 'K212243', 'SANTIAGO.PEREZ.PEREZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212243-SANTIAGO-PEREZ-PEREZ.jpg', 'preescolar'),
(52, 'PAULA LUCIANA VILLA FLORES', 'K212272', 'PAULA.VILLA.FLORES@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/alumnos/preescolar/1/A/K212272-PAULA-LUCIANA-VILLA-FLORES.jpg', 'preescolar'),
(53, 'MILA SOFIA RAYON MARTINEZ', 'K21223', 'MILA.RAYON.MARTINEZ@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(54, 'JACOB MARTINEZ ALMANZA', 'K212273', 'JACOB.MARTINEZ.ALMANZA@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/alumnos/preescolar/1/A/K212273-JACOB-MARTINEZ-ALMANZA.jpg', 'preescolar'),
(55, 'BRUNO ARROYO ARROYO', 'K21221', 'BRUNO.ARROYO.ARROYO@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/alumnos/preescolar/1/A/K21221-BRUNO-ARROYO-ARROYO.jpg', 'preescolar'),
(56, 'LUZ SAMARA VALLEJO GARCIA', 'K21224', 'LUZ.VALLEJO.GARCIA@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/alumnos/preescolar/1/A/K21224-LUZ-SAMARA-VALLEJO-GARCIA.jpg', 'preescolar'),
(57, 'ANA PAULA HERNANDEZ TOLENTINO', 'K212233 ', 'ANA.HERNANDEZ.TOLENTINO@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212233 -ANA-PAULA-HERNANDEZ-TOLENTINO.jpg', 'preescolar'),
(58, 'SAMUEL GARCIA RIOS', 'K212212', 'SAMUEL.GARCIA.RIOS@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212212-SAMUEL-GARCIA-RIOS.jpg', 'preescolar'),
(59, 'MARIA JOSE HERNANDEZ GARCIA', 'K212214', 'MARIA.HERNANDEZ.GARCIA@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212214-MARIA-JOSE-HERNANDEZ-GARCIA.jpg', 'preescolar'),
(60, 'CARLOS ALEJANDRO HERRERA ARROYO', 'K212234', 'CARLOS.HERRERA.ARROYO@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212234-CARLOS-ALEJANDRO-HERRERA-ARROYO.jpg', 'preescolar'),
(61, 'SANTIAGO EMMANUEL MALDONADO ORTEGA', 'K212217', 'SANTIAGO.MALDONADO.ORTEGA@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212217-SANTIAGO-EMMANUEL-MALDONADO-ORTEGA.jpg', 'preescolar'),
(62, 'AILYN VERA DANIELS', 'K212249', 'AILYN.VERA.DANIELS@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212249-AILYN-VERA-DANIELS.jpg', 'preescolar'),
(63, 'ANGEL MATEO CORTES ISLAS', 'K21227', 'ANGEL.CORTES.ISLAS@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K21227-ANGEL-MATEO-CORTES-ISLAS.jpg', 'preescolar'),
(64, 'MIGUEL ANGEL SALAZAR HERNANDEZ', 'K212270', 'MIGUEL.SALAZAR.HERNANDEZ@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(65, 'AARON GAEL GARRIDO MORALES', 'K212213', 'AARON.GARRIDO.MORALES@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K212213-AARON-GAEL-GARRIDO-MORALES.jpg', 'preescolar'),
(66, 'DULCE ARANZA CRUZ VARELA', 'K21229', 'DULCE.CRUZ.VARELA@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/alumnos/preescolar/2/A/K21229-DULCE-ARANZA-CRUZ-VARELA.jpg', 'preescolar'),
(70, 'GENESIS DIAZ VELAZQUEZ', 'K212227', 'GENESIS.DIAZ.VELAZQUEZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212227-GENESIS-DIAZ-VELAZQUEZ.jpg', 'preescolar'),
(72, 'CARLOS MATEO MONROY CERVANTES', 'K212239', 'CARLOS.MONROY.CERVANTES@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212239-CARLOS-MATEO-MONROY-CERVANTES.jpg', 'preescolar'),
(73, 'HIRAM EDREI RIVERA ZOYATE', 'K212246', 'HIRAM.RIVERA.ZOYATE@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212246-HIRAM-EDREI-RIVERA-ZOYATE.jpg', 'preescolar'),
(74, 'FRICEL YATZURI HUERTA TOLENTINO', 'K212235', 'FRICEL.HUERTA.TOLENTINO@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/alumnos/preescolar/3/A/K212235-FRICEL-YATZURI-HUERTA-TOLENTINO.jpg', 'preescolar'),
(75, 'MIA ISABELA GARCIA YANEZ', 'K212274', 'MIA.GARCIA.YANEZ@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(76, 'JAVIER ALEXANDER GARCIA ISLAS', 'K212230', 'JAVIER.GARCIA.ISLAS@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(77, 'MIA GISELLE GRESS CADENANEZ', 'K212275', 'MIA.GRESS.CADENANEZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(348, 'SARAH NICOLE SALDIERNA PADILLA', 'K212279', 'SARAH.SALDIERNA.PADILLA@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(357, 'LUIS ARTURO VARGAS MUNOZ', 'K212276', 'LUIS.VARGAS.MUNOZ@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(358, 'JORGE ANTONIO VARGAS MUNOZ', 'K212277', 'JORGE.VARGAS.MUNOZ@COLMEXTUL.EDU.MX', 3, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(380, 'JADEL ELEAZAR REYES LUQUENO', 'K212278', 'JADEL.REYES.LUQUENO@COLMEXTUL.EDU.MX', 2, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(396, 'MIA ISABELLA PEREZ PEREZ', 'K212280', 'MIA.PEREZ.PEREZ@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(399, 'MARC ANDRE LOPEZ WINFIELD', 'K212281', 'ANDRE.LOPEZ.WINFIELD@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(400, 'HUGO LOPEZ VIDAL', 'K212282', 'HUGO.LOPEZ.VIDAL@COLMEXTUL.EDU.MX', 1, 'A', '2021-2022', 'images/default/user.jpg', 'preescolar'),
(406, 'FULANITO ALGO', '123456789', 'FULANITO@COLMEXTUL.EDU.MX', 1, 'B', '2021-2022', 'images/default/user.jpg', 'preescolar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `papas`
--

CREATE TABLE `papas` (
  `id` int(10) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(50) NOT NULL,
  `nombre3` varchar(50) NOT NULL,
  `foto1` varchar(100) NOT NULL,
  `foto2` varchar(100) NOT NULL,
  `foto3` varchar(100) NOT NULL,
  `qr1` varchar(100) NOT NULL,
  `qr2` varchar(100) NOT NULL,
  `qr3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `papas`
--

INSERT INTO `papas` (`id`, `matricula`, `nombre1`, `nombre2`, `nombre3`, `foto1`, `foto2`, `foto3`, `qr1`, `qr2`, `qr3`) VALUES
(3, 'K21222', 'OLACO GARCIA ANGELICA', 'LIRA GARCIA LUIS', 'LIRA CANALES LUIS ALBERTO', 'images/tutores/preescolar/1/A/K21222-OLACO-GARCIA-ANGELICA.jpg', 'images/tutores/preescolar/1/A/K21222-LIRA-GARCIA-LUIS.jpg', 'images/tutores/preescolar/1/A/K21222-LIRA-CANALES-LUIS-ALBERTO.jpg', 'images/qr/preescolar/1/A/OLACO-GARCIA-ANGELICA-K21222.png', 'images/qr/preescolar/1/A/LIRA-GARCIA-LUIS-K21222.png', 'images/qr/preescolar/1/A/LIRA-CANALES-LUIS-ALBERTO-K21222.png'),
(4, 'K212224', 'VARGAS RAMIREZ ANETT', 'RAMIREZ SANCHEZ BEATRIZ CATALINA', 'VARGAS RAMIREZ AGUSTIN', 'images/tutores/preescolar/2/A/K212224-VARGAS-RAMIREZ-ANETT.jpg', 'images/tutores/preescolar/2/A/K212224-RAMIREZ-SANCHEZ-BEATRIZ-CATALINA.jpg', 'images/tutores/preescolar/2/A/K212224-VARGAS-RAMIREZ-AGUSTIN.jpg', 'images/qr/preescolar/2/A/VARGAS-RAMIREZ-ANETT-K212224.png', 'images/qr/preescolar/2/A/RAMIREZ-SANCHEZ-BEATRIZ-CATALINA-K212224.png', 'images/qr/preescolar/2/A/VARGAS-RAMIREZ-AGUSTIN-K212224.png'),
(5, 'K212225', 'SOTO VARGAS NANCY', 'VARGAS BANOS BERNABE', 'SOTO VARGAS NAYELI', 'images/tutores/preescolar/2/A/K212225-SOTO-VARGAS-NANCY.jpg', 'images/tutores/preescolar/2/A/K212225-VARGAS-BANOS-BERNABE.jpg', 'images/tutores/preescolar/2/A/K212225-SOTO-VARGAS-NAYELI.jpg', 'images/qr/preescolar/2/A/SOTO-VARGAS-NANCY-K212225.png', 'images/qr/preescolar/2/A/VARGAS-BANOS-BERNABE-K212225.png', 'images/qr/preescolar/2/A/SOTO-VARGAS-NAYELI-K212225.png'),
(6, 'K21228', 'SANCHEZ GARCIA YANETT', 'SANCHEZ GODINEZ MAXIMINO APOLINAR', '', 'images/tutores/preescolar/2/A/K21228-SANCHEZ-GARCIA-YANETT.jpg', 'images/tutores/preescolar/2/A/K21228-SANCHEZ-GODINEZ-MAXIMINO-APOLINAR.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/SANCHEZ-GARCIA-YANETT-K21228.png', 'images/qr/preescolar/2/A/SANCHEZ-GODINEZ-MAXIMINO-APOLINAR-K21228.png', 'images/qr/preescolar/2/A/-K21228.png'),
(7, 'K21226', 'CERON PEREZ ZURI NALLELY', 'CASTRO MIMILA RICARDO', 'CERON PEREZ ESVEYDI', 'images/tutores/preescolar/2/A/K21226-CERON-PEREZ-ZURI-NALLELY.jpg', 'images/tutores/preescolar/2/A/K21226-CASTRO-MIMILA-RICARDO.jpg', 'images/tutores/preescolar/2/A/K21226-CERON-PEREZ-ESVEYDI.jpg', 'images/qr/preescolar/2/A/CERON-PEREZ-ZURI-NALLELY-K21226.png', 'images/qr/preescolar/2/A/CASTRO-MIMILA-RICARDO-K21226.png', 'images/qr/preescolar/2/A/CERON-PEREZ-ESVEYDI-K21226.png'),
(8, 'K212216', 'DELGADILLO HERNANDEZ DIANA AZUCENA', '', '', 'images/tutores/preescolar/2/A/K212216-DELGADILLO-HERNANDEZ-DIANA-AZUCENA.jpg', 'images/default/user.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/DELGADILLO-HERNANDEZ-DIANA-AZUCENA-K212216.png', 'images/qr/preescolar/2/A/-K212216.png', 'images/qr/preescolar/2/A/-K212216.png'),
(9, 'K212231', 'OVIEDO AYALA MAGALY JOANNA', 'AYALA LIEVANO VICTORIA', 'OVIEDO AYALA SUSANA JUANA MARIA', 'images/tutores/preescolar/3/A/K212231-OVIEDO-AYALA-MAGALY-JOANNA.jpg', 'images/tutores/preescolar/3/A/K212231-AYALA-LIEVANO-VICTORIA.jpg', 'images/tutores/preescolar/3/A/K212231-OVIEDO-AYALA-SUSANA-JUANA-MARIA.jpg', 'images/qr/preescolar/3/A/OVIEDO-AYALA-MAGALY-JOANNA-K212231.png', 'images/qr/preescolar/3/A/AYALA-LIEVANO-VICTORIA-K212231.png', 'images/qr/preescolar/3/A/OVIEDO-AYALA-SUSANA-JUANA-MARIA-K212231.png'),
(10, 'K212248', 'REYES RODRIGUEZ NYDIA EDITH', 'VEGA SANCHEZ VICENTE', 'JUAREZ CADENA JOAQUIN', 'images/tutores/preescolar/3/A/K212248-REYES-RODRIGUEZ-NYDIA-EDITH.jpg', 'images/tutores/preescolar/3/A/K212248-VEGA-SANCHEZ-VICENTE.jpg', 'images/tutores/preescolar/3/A/K212248-JUAREZ-CADENA-JOAQUIN.jpg', 'images/qr/preescolar/3/A/REYES-RODRIGUEZ-NYDIA-EDITH-K212248.png', 'images/qr/preescolar/3/A/VEGA-SANCHEZ-VICENTE-K212248.png', 'images/qr/preescolar/3/A/JUAREZ-CADENA-JOAQUIN-K212248.png'),
(12, 'K212244', 'SOLIS VARGAS BEATRIZ', 'SOLIS VARGAS FLOR SELENE', 'VARGAS CAMACHO GUADALUPE', 'images/tutores/preescolar/3/A/K212244-SOLIS-VARGAS-BEATRIZ.jpg', 'images/tutores/preescolar/3/A/K212244-SOLIS-VARGAS-FLOR-SELENE.jpg', 'images/tutores/preescolar/3/A/K212244-VARGAS-CAMACHO-GUADALUPE.jpg', 'images/qr/preescolar/3/A/SOLIS-VARGAS-BEATRIZ-K212244.png', 'images/qr/preescolar/3/A/SOLIS-VARGAS-FLOR-SELENE-K212244.png', 'images/qr/preescolar/3/A/VARGAS-CAMACHO-GUADALUPE-K212244.png'),
(13, 'K212236', 'GOMEZ DIAZ SOFIA', 'MARQUEZ LEON LUIS', 'LEON PLATA ADRIANA LETICIA', 'images/tutores/preescolar/3/A/K212236-GOMEZ-DIAZ-SOFIA.jpg', 'images/tutores/preescolar/3/A/K212236-MARQUEZ-LEON-LUIS.jpg', 'images/tutores/preescolar/3/A/K212236-LEON-PLATA-ADRIANA-LETICIA.jpg', 'images/qr/preescolar/3/A/GOMEZ-DIAZ-SOFIA-K212236.png', 'images/qr/preescolar/3/A/MARQUEZ-LEON-LUIS-K212236.png', 'images/qr/preescolar/3/A/LEON-PLATA-ADRIANA-LETICIA-K212236.png'),
(14, 'K212238', 'SANCHEZ BOLANOS KARINA ABRIL', 'BOLANOS RANGEL ROSA MARIA', 'SANCHEZ ROJAS LUIS EDMUNDO', 'images/tutores/preescolar/3/A/K212238-SANCHEZ-BOLANOS-KARINA-ABRIL.jpg', 'images/tutores/preescolar/3/A/K212238-BOLANOS-RANGEL-ROSA-MARIA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/SANCHEZ-BOLANOS-KARINA-ABRIL-K212238.png', 'images/qr/preescolar/3/A/BOLANOS-RANGEL-ROSA-MARIA-K212238.png', 'images/qr/preescolar/3/A/SANCHEZ-ROJAS-LUIS-EDMUNDO-K212238.png'),
(15, 'K212271', 'GARCIA GOMEZ JANET', 'HERNANDEZ ORTIZ ANDREA', '', 'images/tutores/preescolar/3/A/K212271-GARCIA-GARCIA-JANET.jpg', 'images/tutores/preescolar/3/A/K212271-HERNANDEZ-ORTIZ-ANDREA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/GARCIA-GOMEZ-JANET-K212271.png', 'images/qr/preescolar/3/A/HERNANDEZ-ORTIZ-ANDREA-K212271.png', 'images/qr/preescolar/3/A/-K212271.png'),
(16, 'K212240', 'CUEVAS MORALES MARIA ISABEL', 'MORALES GOMEZ MELANIA', 'CUEVAS MORALES JAQUELINE IBALU', 'images/tutores/preescolar/3/A/K212240-CUEVAS-MORALES-MARIA-ISABEL.jpg', 'images/tutores/preescolar/3/A/K212240-MORALES-GOMEZ-MELANIA.jpg', 'images/tutores/preescolar/3/A/K212240-CUEVAS-MORALES-JAQUELINE-IBALU.jpg', 'images/qr/preescolar/3/A/CUEVAS-MORALES-MARIA-ISABEL-K212240.png', 'images/qr/preescolar/3/A/MORALES-GOMEZ-MELANIA-K212240.png', 'images/qr/preescolar/3/A/CUEVAS-MORALES-JAQUELINE-IBALU-K212240.png'),
(17, 'K212247', 'MUNOZ DIAZ DANIELA', 'MUNOZ ISLAS ALBERTO', 'MUNOZ DIAZ VALERIA', 'images/tutores/preescolar/3/A/K212247-MUNOZ-DIAZ-DANIELA.jpg', 'images/tutores/preescolar/3/A/K212247-MUNOZ-ISLAS-ALBERTO.jpg', 'images/tutores/preescolar/3/A/K212247-MUNOZ-DIAZ-VALERIA.jpg', 'images/qr/preescolar/3/A/MUNOZ-DIAZ-DANIELA-K212247.png', 'images/qr/preescolar/3/A/MUNOZ-ISLAS-ALBERTO-K212247.png', 'images/qr/preescolar/3/A/MUNOZ-DIAZ-VALERIA-K212247.png'),
(18, 'K212232', 'CRUZ CURIEL KENIA FABIOLA', 'CURIEL VARGAS ZORAIDA', 'MANCILLA MORALES SEBASTIAN', 'images/tutores/preescolar/3/A/K212232-CRUZ-CURIEL-KENIA-FABIOLA.jpg', 'images/tutores/preescolar/3/A/K212232-CURIEL-VARGAS-ZENAIDA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/CRUZ-CURIEL-KENIA-FABIOLA-K212232.png', 'images/qr/preescolar/3/A/CURIEL-VARGAS-ZORAIDA-K212232.png', 'images/qr/preescolar/3/A/MANCILLA-MORALES-SEBASTIAN-K212232.png'),
(19, 'K212228', 'HERNANDEZ NEDZELSKY REYNA JANELLI', 'FLOR MONTER CESAR', 'NEDZELSKY DEL ANGEL ROSA MARIA', 'images/tutores/preescolar/3/A/K212228-HERNANDEZ-NEDZELSKY-REYNA-JANELLI.jpg', 'images/tutores/preescolar/3/A/K212228-FLOR-MONTER-CESAR.jpg', 'images/tutores/preescolar/3/A/K212228-NEDZELSKY-DEL-ANGEL-ROSA-MARIA.jpg', 'images/qr/preescolar/3/A/HERNANDEZ-NEDZELSKY-REYNA-JANELLI-K212228.png', 'images/qr/preescolar/3/A/FLOR-MONTER-CESAR-K212228.png', 'images/qr/preescolar/3/A/NEDZELSKY-DEL-ANGEL-ROSA-MARIA-K212228.png'),
(20, 'K212229', 'FLORES ALFARO GERMAN', 'OLVERA VARGAS TANIA', 'VARGAS MUNOZ IRENE', 'images/tutores/preescolar/3/A/K212229-FLORES-ALFARO-GERMAN.jpg', 'images/tutores/preescolar/3/A/K212229-OLVERA-VARGAS-TANIA.jpg', 'images/tutores/preescolar/3/A/K212229-VARGAS-MUNOZ-IRENE.jpg', 'images/qr/preescolar/3/A/FLORES-ALFARO-GERMAN-K212229.png', 'images/qr/preescolar/3/A/OLVERA-VARGAS-TANIA-K212229.png', 'images/qr/preescolar/3/A/VARGAS-MUNOZ-IRENE-K212229.png'),
(21, 'K212245', 'FLORES GARCIA NOHEMI', 'RAMIREZ HERNANDEZ JACIEL', 'RAMIREZ HERNANDEZ MA OFELIA', 'images/tutores/preescolar/3/A/K212245-FLORES-GARCIA-NOHEMI.jpg', 'images/tutores/preescolar/3/A/K212245-RAMIREZ-HERNANDEZ-JACIEL.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/FLORES-GARCIA-NOHEMI-K212245.png', 'images/qr/preescolar/3/A/RAMIREZ-HERNANDEZ-JACIEL-K212245.png', 'images/qr/preescolar/3/A/RAMIREZ-HERNANDEZ-MA-OFELIA-K212245.png'),
(22, 'K212226', 'RODRIGUEZ RUEDA ALEJANDRA', 'CARREON CAJERO VICTOR MARTIN', 'CARREON LUNA MARTIN', 'images/tutores/preescolar/3/A/K212226-RODRIGUEZ-RUEDA-ALEJANDRA.jpg', 'images/tutores/preescolar/3/A/K212226-CARREON-CAJERO-VICTOR-MARTIN.jpg', 'images/tutores/preescolar/3/A/K212226-CARREON-LUNA-MARTIN.jpg', 'images/qr/preescolar/3/A/RODRIGUEZ-RUEDA-ALEJANDRA-K212226.png', 'images/qr/preescolar/3/A/CARREON-CAJERO-VICTOR-MARTIN-K212226.png', 'images/qr/preescolar/3/A/CARREON-LUNA-MARTIN-K212226.png'),
(23, 'K212219', 'MENDEZ BONILLA JHOSMAR JESUS', 'LUGO DOMINGUEZ ANA PATRICIA', '', 'images/tutores/preescolar/2/A/K212219-MENDEZ-BONILLA-JHOSMAR-JESUS.jpg', 'images/tutores/preescolar/2/A/K212219-LUGO-DOMINGUEZ-ANA-PATRICIA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/MENDEZ-BONILLA-JHOSMAR-JESUS-K212219.png', 'images/qr/preescolar/2/A/LUGO-DOMINGUEZ-ANA-PATRICIA-K212219.png', 'images/qr/preescolar/2/A/-K212219.png'),
(24, 'K21225', 'AVENDANO SOSA LINDA', 'MIMILA ISLAS ANTHONY', 'CONSUELO SOSA AMPUDIA HERLINDA', 'images/tutores/preescolar/2/A/K21225-AVENDANO-SOSA-LINDA.jpg', 'images/tutores/preescolar/2/A/K21225-MIMILA-ISLAS-ANTHONY.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/AVENDANO-SOSA-LINDA-K21225.png', 'images/qr/preescolar/2/A/MIMILA-ISLAS-ANTHONY-K21225.png', 'images/qr/preescolar/2/A/CONSUELO-SOSA-AMPUDIA-HERLINDA-K21225.png'),
(25, 'K212215', 'HERNANDEZ VAZQUEZ LESLY STEFANY', 'VAZQUEZ MESA MARIA DE LA LUZ', '', 'images/tutores/preescolar/2/A/K212215-HERNANDEZ-VAZQUEZ-LESLY-STEFANY.jpg', 'images/tutores/preescolar/2/A/K212215-VAZQUEZ-MESA-MARIA-DE-LA-LUZ.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/HERNANDEZ-VAZQUEZ-LESLY-STEFANY-K212215.png', 'images/qr/preescolar/2/A/VAZQUEZ-MESA-MARIA-DE-LA-LUZ-K212215.png', 'images/qr/preescolar/2/A/-K212215.png'),
(26, 'K212221', 'MUNOZ CORDERO LAURA NALLELY', 'MUNOZ CORDERO DIANA MAIHTE', 'CORDERO GONZALEZ ROSA MARIA', 'images/tutores/preescolar/2/A/K212221-MUNOZ-CORDERO-LAURA-NALLELY.jpg', 'images/tutores/preescolar/2/A/K212221-MUNOZ-CORDERO-DIANA-MAIHTE.jpg', 'images/tutores/preescolar/2/A/K212221-CORDERO-GONZALEZ-ROSA-MARIA.jpg', 'images/qr/preescolar/2/A/MUNOZ-CORDERO-LAURA-NALLELY-K212221.png', 'images/qr/preescolar/2/A/MUNOZ-CORDERO-DIANA-MAIHTE-K212221.png', 'images/qr/preescolar/2/A/CORDERO-GONZALEZ-ROSA-MARIA-K212221.png'),
(27, 'K212218', 'GALINDO GOMES LORENA', 'MENDEZ GALINDO ALEJANDRA', 'MENDEZ GALINDO ALIZEE FERNANDA', 'images/tutores/preescolar/2/A/K212218-GALINDO-GOMES-LORENA.jpg', 'images/tutores/preescolar/2/A/K212218-MENDEZ-GALINDO-ALEJANDRA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/GALINDO-GOMES-LORENA-K212218.png', 'images/qr/preescolar/2/A/MENDEZ-GALINDO-ALEJANDRA-K212218.png', 'images/qr/preescolar/2/A/MENDEZ-GALINDO-ALIZEE-FERNANDA-K212218.png'),
(28, 'K212237', 'AGUIRRE URANGA GEMMA ESMERALDA', 'URANGA GONZALEZ ROSA', 'MARROQUIN HERNANDEZ TOMAS EDUARDO', 'images/tutores/preescolar/3/A/K212237-AGUIRRE-URANGA-GEMMA-ESMERALDA.jpg', 'images/tutores/preescolar/3/A/K212237-URANGA-GONZALEZ-ROSA.jpg', 'images/tutores/preescolar/3/A/K212237-MARROQUIN-HERNANDEZ-TOMAS-EDUARDO.jpg', 'images/qr/preescolar/3/A/AGUIRRE-URANGA-GEMMA-ESMERALDA-K212237.png', 'images/qr/preescolar/3/A/URANGA-GONZALEZ-ROSA-K212237.png', 'images/qr/preescolar/3/A/MARROQUIN-HERNANDEZ-TOMAS-EDUARDO-K212237.png'),
(29, 'K212241', 'GARRIDO HERNANDEZ YESENIA', 'OCAMPO ORTIZ OSWALDO DANIEL', '', 'images/tutores/preescolar/3/A/K212241-GARRIDO-HERNANDEZ-YESENIA.jpg', 'images/tutores/preescolar/3/A/K212241-OCAMPO-ORTIZ-OSWALDO-DANIEL.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/GARRIDO-HERNANDEZ-YESENIA-K212241.png', 'images/qr/preescolar/3/A/OCAMPO-ORTIZ-OSWALDO-DANIEL-K212241.png', 'images/qr/preescolar/3/A/-K212241.png'),
(30, 'K212243', 'PEREZ AGUILAR YOSSELINE ROCIO', 'PEREZ GARRIDO VICTOR HUGO ', 'PEREZ GARRIDO ANA BELEN', 'images/tutores/preescolar/3/A/K212243-PEREZ-AGUILAR-YOSSELINE-ROCIO.jpg', 'images/tutores/preescolar/3/A/K212243-PEREZ-GARRIDO-VICTOR-HUGO-.jpg', 'images/tutores/preescolar/3/A/K212243-PEREZ-GARRIDO-ANA-BELEN.jpg', 'images/qr/preescolar/3/A/PEREZ-AGUILAR-YOSSELINE-ROCIO-K212243.png', 'images/qr/preescolar/3/A/PEREZ-GARRIDO-VICTOR-HUGO--K212243.png', 'images/qr/preescolar/3/A/PEREZ-GARRIDO-ANA-BELEN-K212243.png'),
(32, 'K212272', 'FLORES GOMEZ LUZ MARIA', 'FLORES RAMIREZ ROBERTO CRUZ', 'VILLA REYNA JOSE FERNANDO', 'images/tutores/preescolar/1/A/K212272-FLORES-GOMEZ-LUZ-MARIA-.jpg', 'images/tutores/preescolar/1/A/K212272-FLORES-RAMIREZ-ROBERTO-CRUZ.jpg', 'images/tutores/preescolar/1/A/K212272-VILLA-REYNA-JOSE-FERNANDO.jpeg', 'images/qr/preescolar/1/A/FLORES-GOMEZ-LUZ-MARIA-K212272.png', 'images/qr/preescolar/1/A/FLORES-RAMIREZ-ROBERTO-CRUZ-K212272.png', 'images/qr/preescolar/1/A/VILLA-REYNA-JOSE-FERNANDO-K212272.png'),
(33, 'K21223', 'MARTINEZ ESQUIVEL MARIA GUADALUPE', 'RAYON PERALTA GAMALIEL', 'ESQUIVEL RODRIGUEZ ESTELA', 'images/tutores/preescolar/1/A/K21223-MARTINEZ-ESQUIVEL-MARIA-GUADALUPE.jpg', 'images/tutores/preescolar/1/A/K21223-RAYON-PERALTA-GAMALIEL.jpg', 'images/tutores/preescolar/1/A/K21223-ESQUIVEL-RODRIGUEZ-ESTELA.jpg', 'images/qr/preescolar/1/A/MARTINEZ-ESQUIVEL-MARIA-GUADALUPE-K21223.png', 'images/qr/preescolar/1/A/RAYON-PERALTA-GAMALIEL-K21223.png', 'images/qr/preescolar/1/A/ESQUIVEL-RODRIGUEZ-ESTELA-K21223.png'),
(34, 'K212273', 'COLIN MARTINEZ MA EUGENIA', 'ALMANZA SIERRA CESAR ENRIQUE', '', 'images/tutores/preescolar/1/A/K212273-COLIN-MARTINEZ-MA-EUGENIA.jpg', 'images/tutores/preescolar/1/A/K212273-ALMANZA-SIERRA-CESAR-ENRIQUE.jpg', 'images/default/user.jpg', 'images/qr/preescolar/1/A/COLIN-MARTINEZ-MA-EUGENIA-K212273.png', 'images/qr/preescolar/1/A/ALMANZA-SIERRA-CESAR-ENRIQUE-K212273.png', 'images/qr/preescolar/1/A/-K212273.png'),
(35, 'K21221', 'ARROYO LEYVA MARIBEL', 'ARROYO LEYVA SARA EDITH', 'ARROYO SALINAS EDGAR ALONSO', 'images/tutores/preescolar/1/A/K21221-ARROYO-LEYVA-MARIBEL.jpg', 'images/tutores/preescolar/1/A/K21221-ARROYO-LEYVA-SARA-EDITH.jpg', 'images/default/user.jpg', 'images/qr/preescolar/1/A/ARROYO-LEYVA-MARIBEL-K21221.png', 'images/qr/preescolar/1/A/ARROYO-LEYVA-SARA-EDITH-K21221.png', 'images/qr/preescolar/1/A/ARROYO-SALINAS-EDGAR-ALONSO-K21221.png'),
(36, 'K21224', 'VALLEJO GARCIA YADIRA', 'GARCIA SANTOS MARIA ELENA', '', 'images/tutores/preescolar/1/A/K21224-VALLEJO-GARCIA-YADIRA.jpg', 'images/tutores/preescolar/1/A/K21224-GARCIA-SANTOS-MARIA-ELENA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/1/A/VALLEJO-GARCIA-YADIRA-K21224.png', 'images/qr/preescolar/1/A/GARCIA-SANTOS-MARIA-ELENA-K21224.png', 'images/qr/preescolar/1/A/-K21224.png'),
(37, 'K212233 ', 'TOLENTINO CRUZ MARIA GRISELL', 'CRUZ MARTINEZ CELIA MARIA DEL CARMEN', 'TOLENTINO CRUZ MAURICIO FERMIN', 'images/tutores/preescolar/3/A/K212233 -TOLENTINO-CRUZ-MARIA-GRISELL.jpg', 'images/tutores/preescolar/3/A/K212233 -CRUZ-MARTINEZ-CELIA-MARIA-DEL-CARMEN.jpg', 'images/tutores/preescolar/3/A/K212233 -TOLENTINO-CRUZ-MAURICIO-FERMIN.jpg', 'images/qr/preescolar/3/A/TOLENTINO-CRUZ-MARIA-GRISELL-K212233 .png', 'images/qr/preescolar/3/A/CRUZ-MARTINEZ-CELIA-MARIA-DEL-CARMEN-K212233 .png', 'images/qr/preescolar/3/A/TOLENTINO-CRUZ-MAURICIO-FERMIN-K212233 .png'),
(38, 'K212212', 'GARCIA RIOS FABIOLA', 'RIOS MALDONADO EUFROCINA', '', 'images/tutores/preescolar/2/A/K212212-GARCIA-RIOS-FABIOLA.jpg', 'images/tutores/preescolar/2/A/K212212-RIOS-MALDONADO-EUFROCINA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/GARCIA-RIOS-FABIOLA-K212212.png', 'images/qr/preescolar/2/A/RIOS-MALDONADO-EUFROCINA-K212212.png', 'images/qr/preescolar/2/A/-K212212.png'),
(39, 'K212214', 'HURTADO VERA CECILIA', 'HERNANDEZ VERA VICTOR IVAN', '', 'images/tutores/preescolar/2/A/K212214-HURTADO-VERA-CECILIA.jpg', 'images/tutores/preescolar/2/A/K212214-HERNANDEZ-VERA-VICTOR-IVAN.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/HURTADO-VERA-CECILIA-K212214.png', 'images/qr/preescolar/2/A/HERNANDEZ-VERA-VICTOR-IVAN-K212214.png', 'images/qr/preescolar/2/A/-K212214.png'),
(40, 'K212234', 'ARROYO ORTEGA BEATRIZ ADRIANA', 'HERRERA MARTINEZ JUAN CARLOS', '', 'images/tutores/preescolar/3/A/K212234-ARROYO-ORTEGA-BEATRIZ-ADRIANA.jpg', 'images/tutores/preescolar/3/A/K212234-HERRERA-MARTINEZ-JUAN-CARLOS.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/ARROYO-ORTEGA-BEATRIZ-ADRIANA-K212234.png', 'images/qr/preescolar/3/A/HERRERA-MARTINEZ-JUAN-CARLOS-K212234.png', 'images/qr/preescolar/3/A/-K212234.png'),
(41, 'K212217', 'MALDONADO ORTEGA OLGA', 'MALDONADO ORTEGA MARIA ESTHELA', '', 'images/tutores/preescolar/2/A/K212217-MALDONADO-ORTEGA-OLGA.jpg', 'images/tutores/preescolar/2/A/K212217-MALDONADO-ORTEGA-MARIA-ESTHELA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/MALDONADO-ORTEGA-OLGA-K212217.png', 'images/qr/preescolar/2/A/MALDONADO-ORTEGA-MARIA-ESTHELA-K212217.png', 'images/qr/preescolar/2/A/-K212217.png'),
(42, 'K212249', 'DANIELS ANDRADE LAURA BELINDA', 'DANIELS ANDRADE MAYRA', 'VERA LICONA RICARDO', 'images/tutores/preescolar/3/A/K212249-DANIELS-ANDRADE-LAURA-BELINDA.jpg', 'images/tutores/preescolar/3/A/K212249-DANIELS-ANDRADE-MAYRA.jpg', 'images/tutores/preescolar/3/A/K212249-VERA-LICONA-RICARDO.jpg', 'images/qr/preescolar/3/A/DANIELS-ANDRADE-LAURA-BELINDA-K212249.png', 'images/qr/preescolar/3/A/DANIELS-ANDRADE-MAYRA-K212249.png', 'images/qr/preescolar/3/A/VERA-LICONA-RICARDO-K212249.png'),
(43, 'K21227', 'ISLAS ESPINOSA GABRIELA', 'ISLAS HERNANDEZ ROMAN', 'ESPINOSA AGUILAR GABRIELA', 'images/tutores/preescolar/2/A/K21227-ISLAS-ESPINOSA-GABRIELA.jpg', 'images/tutores/preescolar/2/A/K21227-ISLAS-HERNANDEZ-ROMAN.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/ISLAS-ESPINOSA-GABRIELA-K21227.png', 'images/qr/preescolar/2/A/ISLAS-HERNANDEZ-ROMAN-K21227.png', 'images/qr/preescolar/2/A/ESPINOSA-AGUILAR-GABRIELA-K21227.png'),
(44, 'K212270', 'HERNANDEZ MARTINEZ OLIVIA', 'SALAZAR SANTOS SINUE MIGUEL', '', 'images/tutores/preescolar/2/A/K212270-HERNANDEZ-MARTINEZ-OLIVIA.jpg', 'images/default/user.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/HERNANDEZ-MARTINEZ-OLIVIA-K212270.png', 'images/qr/preescolar/2/A/SALAZAR-SANTOS-SINUE-MIGUEL-K212270.png', 'images/qr/preescolar/2/A/-K212270.png'),
(45, 'K212213', 'GARRIDO LAZCANO OMAR', 'MORALES FERNANDEZ ANA LAURA', 'LAZCANO HERNANDEZ LILIA', 'images/tutores/preescolar/2/A/K212213-GARRIDO-LAZCANO-OMAR.jpg', 'images/default/user.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/GARRIDO-LAZCANO-OMAR-K212213.png', 'images/qr/preescolar/2/A/MORALES-FERNANDEZ-ANA-LAURA-K212213.png', 'images/qr/preescolar/2/A/LAZCANO-HERNANDEZ-LILIA-K212213.png'),
(46, 'K21229', 'VARELA MUNOZ DULCE CAROLINA', '', '', 'images/tutores/preescolar/2/A/K21229-VARELA-MUNOZ-DULCE-CAROLINA.jpg', 'images/default/user.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/VARELA-MUNOZ-DULCE-CAROLINA-K21229.png', 'images/qr/preescolar/2/A/-K21229.png', 'images/qr/preescolar/2/A/-K21229.png'),
(50, 'K212227', 'VELAZQUEZ FERNANDEZ VERONICA', 'DIAZ LOZADA OFIR', '', 'images/tutores/preescolar/3/A/K212227-VELAZQUEZ-FERNANDEZ-VERONICA.jpg', 'images/tutores/preescolar/3/A/K212227-DIAZ-LOZADA-OFIR.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/VELAZQUEZ-FERNANDEZ-VERONICA-K212227.png', 'images/qr/preescolar/3/A/DIAZ-LOZADA-OFIR-K212227.png', 'images/qr/preescolar/3/A/-K212227.png'),
(52, 'K212239', 'CERVANTES MIMILA BRESMILIM', 'CERVANTES MIMILA SOURY', 'MIMILA ELIZALDE NICOLASA CONSUELO', 'images/tutores/preescolar/3/A/K212239-CERVANTES-MIMILA-BRESMILIM.jpg', 'images/tutores/preescolar/3/A/K212239-CERVANTES-MIMILA-SOURY.jpg', 'images/tutores/preescolar/3/A/K212239-MIMILA-ELIZALDE-NICOLASA-CONSUELO.jpg', 'images/qr/preescolar/3/A/CERVANTES-MIMILA-BRESMILIM-K212239.png', 'images/qr/preescolar/3/A/CERVANTES-MIMILA-SOURY-K212239.png', 'images/qr/preescolar/3/A/MIMILA-ELIZALDE-NICOLASA-CONSUELO-K212239.png'),
(53, 'K212246', 'ZOYATE RAMOS LESLIE BERELY', 'RIVERA PEREZ JOAQUIN', 'RAMOS GOMEZ ANDREA', 'images/tutores/preescolar/3/A/K212246-ZOYATE-RAMOS-LESLIE-BERELY.jpg', 'images/tutores/preescolar/3/A/K212246-RIVERA-PEREZ-JOAQUIN.jpg', 'images/tutores/preescolar/3/A/K212246-RAMOS-GOMEZ-ANDREA.jpg', 'images/qr/preescolar/3/A/ZOYATE-RAMOS-LESLIE-BERELY-K212246.png', 'images/qr/preescolar/3/A/RIVERA-PEREZ-JOAQUIN-K212246.png', 'images/qr/preescolar/3/A/RAMOS-GOMEZ-ANDREA-K212246.png'),
(54, 'K212235', 'HUERTA RAMIREZ AMERICA ITZEL', 'TOLENTINO SAN JUAN MIREYA', '', 'images/tutores/preescolar/3/A/K212235-HUERTA-RAMIREZ-AMERICA-ITZEL.jpg', 'images/tutores/preescolar/3/A/K212235-TOLENTINO-SAN-JUAN-MIREYA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/HUERTA-RAMIREZ-AMERICA-ITZEL-K212235.png', 'images/qr/preescolar/3/A/TOLENTINO-SAN-JUAN-MIREYA-K212235.png', 'images/qr/preescolar/3/A/-K212235.png'),
(55, 'K212274', 'GARCIA GALLEGOS URIEL OBED', 'YANEZ HERNANDEZ VIRIDIANA', 'YANEZ MEJIA SALVADOR', 'images/tutores/preescolar/2/A/K212274-GARCIA-GALLEGOS-URIEL-OBED.jpg', 'images/tutores/preescolar/2/A/K212274-YANEZ-HERNANDEZ-VIRIDIANA.jpg', 'images/tutores/preescolar/2/A/K212274-YANEZ-MEJIA-SALVADOR.jpg', 'images/qr/preescolar/2/A/GARCIA-GALLEGOS-URIEL-OBED-K212274.png', 'images/qr/preescolar/2/A/YANEZ-HERNANDEZ-VIRIDIANA-K212274.png', 'images/qr/preescolar/2/A/YANEZ-MEJIA-SALVADOR-K212274.png'),
(56, 'K212230', 'ISLAS MELO MARIA DE LOS ANGELES', 'TREJO DE ITA ADELA', '', 'images/tutores/preescolar/3/A/K212230-ISLAS-MELO-MARIA-DE-LOS-ANGELES.jpg', 'images/tutores/preescolar/3/A/K212230-TREJO-DE-ITA-ADELA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/3/A/ISLAS-MELO-MARIA-DE-LOS-ANGELES-K212230.png', 'images/qr/preescolar/3/A/TREJO-DE-ITA-ADELA-K212230.png', 'images/qr/preescolar/3/A/-K212230.png'),
(57, 'K212275', 'MEJIA GARCIA MARIA DE LOURDES', 'CADENANEZ MEJIA MARED MICHELLE', 'DELGADILLO REYES JORGE LUIS', 'images/tutores/preescolar/3/A/K212275-MEJIA-GARCIA-MARIA-DE-LOURDES.jpg', 'images/tutores/preescolar/3/A/K212275-CADENANEZ-MEJIA-MARED-MICHELLE.jpg', 'images/tutores/preescolar/3/A/K212275-DELGADILLO-REYES-JORGE-LUIS.jpg', 'images/qr/preescolar/3/A/MEJIA-GARCIA-MARIA-DE-LOURDES-K212275.png', 'images/qr/preescolar/3/A/CADENANEZ-MEJIA-MARED-MICHELLE-K212275.png', 'images/qr/preescolar/3/A/DELGADILLO-REYES-JORGE-LUIS-K212275.png'),
(323, 'K212279', 'SALDIERNA GAYOSSO MIGUEL ANGEL', 'PADILLA ROLDAN RENATA ISABEL', 'ROLDAN ALARCON MONICA', 'images/tutores/preescolar/1/A/K212279-SALDIERNA-GALLOYOSSO-MIGUEL-ANGEL.jpg', 'images/tutores/preescolar/1/A/K212279-PADILLA-ROLDAN-RENATA-ISABEL.jpg', 'images/tutores/preescolar/1/A/K212279-ROLDAN-ALARCON-MONICA.jpg', 'images/qr/preescolar/1/A/SALDIERNA-GAYOSSO-MIGUEL-ANGEL-K212279.png', 'images/qr/preescolar/1/A/PADILLA-ROLDAN-RENATA-ISABEL-K212279.png', 'images/qr/preescolar/1/A/ROLDAN-ALARCON-MONICA-K212279.png'),
(332, 'K212276', 'MUNOZ ARROYO INDALECIO BENITO', 'MUNOZ GONZALEZ LAURA BELEN', 'VARGAS GRANILLO MARIO GUILLERMO', 'images/tutores/preescolar/2/A/K212276-MUNOZ-ARROYO-INDALECIO-BENITO.jpg', 'images/tutores/preescolar/2/A/K212276-MUNOZ-GONZALEZ-LAURA-BELEN.jpg', 'images/tutores/preescolar/2/A/K212276-VARGAS-GRANILLO-MARIO-GUILLERMO.jpg', 'images/qr/preescolar/2/A/MUNOZ-ARROYO-INDALECIO-BENITO-K212276.png', 'images/qr/preescolar/2/A/MUNOZ-GONZALEZ-LAURA-BELEN-K212276.png', 'images/qr/preescolar/2/A/VARGAS-GRANILLO-MARIO-GUILLERMO-K212276.png'),
(333, 'K212277', 'MUNOZ ARROYO INDALECIO BENITO', 'MUNOZ GONZALEZ LAURA BELEN', 'VARGAS GRANILLO MARIO GUILLERMO', 'images/tutores/preescolar/3/A/K212277-MUNOZ-ARROYO-INDALECIO-BENITO.jpg', 'images/tutores/preescolar/3/A/K212277-MUNOZ-GONZALEZ-LAURA-BELEN.jpg', 'images/tutores/preescolar/3/A/K212277-VARGAS-GRANILLO-MARIO-GUILLERMO.jpg', 'images/qr/preescolar/3/A/MUNOZ-ARROYO-INDALECIO-BENITO-K212277.png', 'images/qr/preescolar/3/A/MUNOZ-GONZALEZ-LAURA-BELEN-K212277.png', 'images/qr/preescolar/3/A/VARGAS-GRANILLO-MARIO-GUILLERMO-K212277.png'),
(354, 'K212278', 'LUQUENO MUNOZ ELIZABETH', 'MUNOZ GARRIDO MARIA EUGENIA', '', 'images/tutores/preescolar/2/A/K212278-LUQUENO-MUNOZ-ELIZABETH.jpg', 'images/tutores/preescolar/2/A/K212278-MUNOZ-GARRIDO-MARIA-EUGENIA.jpg', 'images/default/user.jpg', 'images/qr/preescolar/2/A/LUQUENO-MUNOZ-ELIZABETH-K212278.png', 'images/qr/preescolar/2/A/MUNOZ-GARRIDO-MARIA-EUGENIA-K212278.png', 'images/qr/preescolar/2/A/-K212278.png'),
(369, 'K212280', 'PEREZ AGUILAR YOSSELINE ROCIO', 'PEREZ GARRIDO VICTOR HUGO', 'PEREZ GARRIDO ANA BELEN', 'images/tutores/preescolar/1/A/K212280-PEREZ-AGUILAR-YOSSELINE-ROCIO.jpg', 'images/tutores/preescolar/1/A/K212280-PEREZ-GARRIDO-VICTOR-HUGO.jpg', 'images/tutores/preescolar/1/A/K212280-PEREZ-GARRIDO-ANA-BELEN.jpg', 'images/qr/preescolar/1/A/PEREZ-AGUILAR-YOSSELINE-ROCIO-K212280.png', 'images/qr/preescolar/1/A/PEREZ-GARRIDO-VICTOR-HUGO-K212280.png', 'images/qr/preescolar/1/A/PEREZ-GARRIDO-ANA-BELEN-K212280.png'),
(372, 'K212281', 'WINFIELD VARGAS RAYKA ANAI', 'LOPEZ PEREZ MARCO ANTONIO', 'VIDAL GARCIA ESTEFANIA', 'images/tutores/preescolar/1/A/K212281-WINFIELD-VARGAS-RAYKA-ANAI.jpg', 'images/tutores/preescolar/1/A/K212281-LOPEZ-PEREZ-MARCO-ANTONIO.jpg', 'images/tutores/preescolar/1/A/K212281-VIDAL-GARCIA-ESTEFANIA.jpg', 'images/qr/preescolar/1/A/WINFIELD-VARGAS-RAYKA-ANAI-K212281.png', 'images/qr/preescolar/1/A/LOPEZ-PEREZ-MARCO-ANTONIO-K212281.png', 'images/qr/preescolar/1/A/VIDAL-GARCIA-ESTEFANIA-K212281.png'),
(373, 'K212282', 'VIDAL GARCIA ESTEFANIA', 'LOPEZ PEREZ VICTOR HUGO', 'WINFIELD VARGAS RAYKA ANAI', 'images/tutores/preescolar/1/A/K212282-VIDAL-GARCIA-ESTEFANIA.jpg', 'images/tutores/preescolar/1/A/K212282-LOPEZ-PEREZ-VICTOR-HUGO.jpg', 'images/tutores/preescolar/1/A/K212282-WINFIELD-VARGAS-RAYKA-ANAI.jpg', 'images/qr/preescolar/1/A/VIDAL-GARCIA-ESTEFANIA-K212282.png', 'images/qr/preescolar/1/A/LOPEZ-PEREZ-VICTOR-HUGO-K212282.png', 'images/qr/preescolar/1/A/WINFIELD-VARGAS-RAYKA-ANAI-K212282.png'),
(378, '123456789', 'FULANITO DE TAL', 'FULANITA', '', 'images/default/user.jpg', 'images/default/user.jpg', 'images/default/user.jpg', 'images/qr/preescolar/1/B/FULANITO-DE-TAL-123456789.png', 'images/qr/preescolar/1/B/FULANITA-123456789.png', 'images/qr/preescolar/1/B/-123456789.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retiroalm`
--

CREATE TABLE `retiroalm` (
  `id` int(50) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `tutor` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_retiro` date NOT NULL,
  `hora` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `retiroalm`
--

INSERT INTO `retiroalm` (`id`, `matricula`, `tutor`, `fecha`, `fecha_retiro`, `hora`) VALUES
(6712, 'K212228', 'FLOR MONTER CESAR', '2022-07-14', '2022-07-14', '01:34:52 pm'),
(6713, 'K212244', 'SOLIS VARGAS BEATRIZ', '2022-07-14', '2022-07-14', '01:38:13 pm'),
(6714, 'K212273', 'COLIN MARTINEZ MA EUGENIA', '2022-07-14', '2022-07-14', '01:41:31 pm'),
(6715, 'K212272', 'FLORES GOMEZ LUZ MARIA', '2022-07-14', '2022-07-14', '01:44:38 pm'),
(6716, 'K212217', 'MALDONADO ORTEGA OLGA', '2022-07-14', '2022-07-14', '01:46:50 pm'),
(6717, 'K212248', 'REYES RODRIGUEZ NYDIA EDITH', '2022-07-14', '2022-07-14', '01:47:03 pm'),
(6718, 'K212237', 'AGUIRRE URANGA GEMMA ESMERALDA', '2022-07-14', '2022-07-14', '01:47:14 pm'),
(6719, 'K21223', 'MARTINEZ ESQUIVEL MARIA GUADALUPE', '2022-07-14', '2022-07-14', '01:47:48 pm'),
(6720, 'K212240', 'CUEVAS MORALES MARIA ISABEL', '2022-07-14', '2022-07-14', '01:49:02 pm'),
(6721, 'K212238', 'BOLANOS RANGEL ROSA MARIA', '2022-07-14', '2022-07-14', '01:50:01 pm'),
(6722, 'K212249', 'DANIELS ANDRADE LAURA BELINDA', '2022-07-14', '2022-07-14', '01:51:29 pm'),
(6723, 'K212241', 'GARRIDO HERNANDEZ YESENIA', '2022-07-14', '2022-07-14', '01:52:14 pm'),
(6724, 'K21228', 'SANCHEZ GARCIA YANETT', '2022-07-14', '2022-07-14', '01:53:06 pm'),
(6725, 'K212224', 'VARGAS RAMIREZ AGUSTIN', '2022-07-14', '2022-07-14', '01:53:41 pm'),
(6726, 'K212275', 'MEJIA GARCIA MARIA DE LOURDES', '2022-07-14', '2022-07-14', '01:55:05 pm'),
(6727, 'K21226', 'CERON PEREZ ZURI NALLELY', '2022-07-14', '2022-07-14', '01:55:23 pm'),
(6728, 'K212281', 'WINFIELD VARGAS RAYKA ANAI', '2022-07-14', '2022-07-14', '01:57:22 pm'),
(6729, 'K212270', 'SALAZAR SANTOS SINUE MIGUEL', '2022-07-14', '2022-07-14', '01:58:00 pm'),
(6730, 'K212235', 'TOLENTINO SAN JUAN MIREYA', '2022-07-14', '2022-07-14', '02:04:59 pm'),
(6731, 'K212226', 'CARREON CAJERO VICTOR MARTIN', '2022-07-14', '2022-07-14', '02:05:25 pm'),
(6732, 'K21227', 'ISLAS HERNANDEZ ROMAN', '2022-07-14', '2022-07-14', '02:05:41 pm'),
(6733, 'K21222', 'OLACO GARCIA ANGELICA', '2022-07-14', '2022-07-14', '02:05:53 pm'),
(6734, 'K21225', 'AVENDANO SOSA LINDA', '2022-07-14', '2022-07-14', '02:06:13 pm'),
(6735, 'K212247', 'MUNOZ DIAZ DANIELA', '2022-07-14', '2022-07-14', '02:07:48 pm'),
(6736, 'K212236', 'GOMEZ DIAZ SOFIA', '2022-07-14', '2022-07-14', '02:12:02 pm'),
(6737, 'K212234', 'HERRERA MARTINEZ JUAN CARLOS', '2022-07-14', '2022-07-14', '02:15:54 pm'),
(6738, 'K212244', 'SOLIS VARGAS BEATRIZ', '2022-07-15', '2022-07-15', '01:38:38 pm'),
(6739, 'K212248', 'VEGA SANCHEZ VICENTE', '2022-07-15', '2022-07-15', '01:38:49 pm'),
(6740, 'P2122183', 'CUEVAS MORALES MARIA ISABEL', '2022-07-15', '2022-07-15', '01:39:15 pm'),
(6741, 'K212224', 'VARGAS RAMIREZ AGUSTIN', '2022-07-15', '2022-07-15', '01:40:30 pm'),
(6742, 'K212233 ', 'CRUZ MARTINEZ CELIA MARIA DEL CARMEN', '2022-07-15', '2022-07-15', '01:41:10 pm'),
(6743, 'K212217', 'MALDONADO ORTEGA OLGA', '2022-07-15', '2022-07-15', '01:41:25 pm'),
(6744, 'K212213', 'GARRIDO LAZCANO OMAR', '2022-07-15', '2022-07-15', '01:43:41 pm'),
(6745, 'K212241', 'GARRIDO HERNANDEZ YESENIA', '2022-07-15', '2022-07-15', '01:45:45 pm'),
(6746, 'K212272', 'FLORES GOMEZ LUZ MARIA', '2022-07-15', '2022-07-15', '01:47:09 pm'),
(6747, 'K212249', 'DANIELS ANDRADE LAURA BELINDA', '2022-07-15', '2022-07-15', '01:47:42 pm'),
(6748, 'K212229', 'OLVERA VARGAS TANIA', '2022-07-15', '2022-07-15', '01:49:45 pm'),
(6749, 'K212281', 'WINFIELD VARGAS RAYKA ANAI', '2022-07-15', '2022-07-15', '01:51:23 pm'),
(6750, 'K212277', 'MUNOZ GONZALEZ LAURA BELEN', '2022-07-15', '2022-07-15', '01:51:35 pm'),
(6751, 'K212231', 'AYALA LIEVANO VICTORIA', '2022-07-15', '2022-07-15', '01:52:05 pm'),
(6752, 'K212273', 'COLIN MARTINEZ MA EUGENIA', '2022-07-15', '2022-07-15', '01:52:53 pm'),
(6753, 'K21222', 'OLACO GARCIA ANGELICA', '2022-07-15', '2022-07-15', '01:53:37 pm'),
(6754, 'K212234', 'HERRERA MARTINEZ JUAN CARLOS', '2022-07-15', '2022-07-15', '01:55:38 pm'),
(6755, 'K212226', 'RODRIGUEZ RUEDA ALEJANDRA', '2022-07-15', '2022-07-15', '01:56:18 pm'),
(6756, 'K212275', 'MEJIA GARCIA MARIA DE LOURDES', '2022-07-15', '2022-07-15', '01:56:27 pm'),
(6757, 'K21228', 'SANCHEZ GARCIA YANETT', '2022-07-15', '2022-07-15', '01:56:54 pm'),
(6758, 'K21225', 'AVENDANO SOSA LINDA', '2022-07-15', '2022-07-15', '01:57:16 pm'),
(6759, 'K212235', 'HUERTA RAMIREZ AMERICA ITZEL', '2022-07-15', '2022-07-15', '01:57:39 pm'),
(6760, 'K212236', 'GOMEZ DIAZ SOFIA', '2022-07-15', '2022-07-15', '01:57:54 pm'),
(6761, 'K212214', 'HURTADO VERA CECILIA', '2022-07-15', '2022-07-15', '01:58:09 pm'),
(6762, 'K212237', 'AGUIRRE URANGA GEMMA ESMERALDA', '2022-07-15', '2022-07-15', '01:59:43 pm'),
(6763, 'K212247', 'MUNOZ DIAZ DANIELA', '2022-07-15', '2022-07-15', '02:01:52 pm'),
(6764, 'K21227', 'ISLAS ESPINOSA GABRIELA', '2022-07-15', '2022-07-15', '02:05:20 pm'),
(6765, 'K21226', 'CERON PEREZ ZURI NALLELY', '2022-07-15', '2022-07-15', '02:06:08 pm'),
(6766, 'K212279', 'SALDIERNA GAYOSSO MIGUEL ANGEL', '2022-07-15', '2022-07-15', '02:06:18 pm'),
(6767, 'K212270', 'HERNANDEZ MARTINEZ OLIVIA', '2022-07-15', '2022-07-15', '02:08:07 pm'),
(6768, 'K212227', 'VELAZQUEZ FERNANDEZ VERONICA', '2022-07-18', '2022-07-18', '01:37:33 pm'),
(6769, 'K212272', 'FLORES GOMEZ LUZ MARIA', '2022-07-18', '2022-07-18', '01:38:03 pm'),
(6770, 'K212274', 'YANEZ HERNANDEZ VIRIDIANA', '2022-07-18', '2022-07-18', '01:38:19 pm'),
(6771, 'K212281', 'WINFIELD VARGAS RAYKA ANAI', '2022-07-18', '2022-07-18', '01:38:42 pm'),
(6772, 'K212271', 'GARCIA GOMEZ JANET', '2022-07-18', '2022-07-18', '01:40:54 pm'),
(6773, 'K212217', 'MALDONADO ORTEGA MARIA ESTHELA', '2022-07-18', '2022-07-18', '01:42:12 pm'),
(6774, 'K21224', 'VALLEJO GARCIA YADIRA', '2022-07-18', '2022-07-18', '01:44:05 pm'),
(6775, 'K21223', 'MARTINEZ ESQUIVEL MARIA GUADALUPE', '2022-07-18', '2022-07-18', '01:45:13 pm'),
(6776, 'K212233 ', 'CRUZ MARTINEZ CELIA MARIA DEL CARMEN', '2022-07-18', '2022-07-18', '01:45:56 pm'),
(6777, 'K21228', 'SANCHEZ GARCIA YANETT', '2022-07-18', '2022-07-18', '01:46:08 pm'),
(6778, 'K21227', 'ISLAS HERNANDEZ ROMAN', '2022-07-18', '2022-07-18', '01:46:19 pm'),
(6779, 'K212277', 'MUNOZ GONZALEZ LAURA BELEN', '2022-07-18', '2022-07-18', '01:46:35 pm'),
(6780, 'K212243', 'PEREZ GARRIDO VICTOR HUGO ', '2022-07-18', '2022-07-18', '01:50:05 pm'),
(6781, 'K212240', 'CUEVAS MORALES MARIA ISABEL', '2022-07-18', '2022-07-18', '01:50:14 pm'),
(6782, 'K212249', 'DANIELS ANDRADE LAURA BELINDA', '2022-07-18', '2022-07-18', '01:50:24 pm'),
(6783, 'K212241', 'GARRIDO HERNANDEZ YESENIA', '2022-07-18', '2022-07-18', '01:50:32 pm'),
(6784, 'K212279', 'SALDIERNA GAYOSSO MIGUEL ANGEL', '2022-07-18', '2022-07-18', '01:51:25 pm'),
(6785, 'K212224', 'VARGAS RAMIREZ AGUSTIN', '2022-07-18', '2022-07-18', '01:51:57 pm'),
(6786, 'K212273', 'COLIN MARTINEZ MA EUGENIA', '2022-07-18', '2022-07-18', '01:54:46 pm'),
(6787, 'K212236', 'GOMEZ DIAZ SOFIA', '2022-07-18', '2022-07-18', '01:54:59 pm'),
(6788, 'K212231', 'OVIEDO AYALA MAGALY JOANNA', '2022-07-18', '2022-07-18', '01:56:43 pm'),
(6789, 'K21222', 'OLACO GARCIA ANGELICA', '2022-07-18', '2022-07-18', '01:58:08 pm'),
(6790, 'K21226', 'CERON PEREZ ZURI NALLELY', '2022-07-18', '2022-07-18', '01:58:18 pm'),
(6791, 'K212237', 'AGUIRRE URANGA GEMMA ESMERALDA', '2022-07-18', '2022-07-18', '01:59:02 pm'),
(6792, 'K212282', 'VIDAL GARCIA ESTEFANIA', '2022-07-18', '2022-07-18', '02:01:44 pm'),
(6793, 'K212247', 'MUNOZ DIAZ DANIELA', '2022-07-18', '2022-07-18', '02:02:34 pm'),
(6794, 'K212217', 'MALDONADO ORTEGA MARIA ESTHELA', '2022-07-19', '2022-07-19', '01:37:04 pm'),
(6795, 'K212248', 'REYES RODRIGUEZ NYDIA EDITH', '2022-07-19', '2022-07-19', '01:37:29 pm'),
(6796, 'K212244', 'SOLIS VARGAS BEATRIZ', '2022-07-19', '2022-07-19', '01:37:44 pm'),
(6797, 'K212281', 'WINFIELD VARGAS RAYKA ANAI', '2022-07-19', '2022-07-19', '01:41:43 pm'),
(6798, 'K21223', 'MARTINEZ ESQUIVEL MARIA GUADALUPE', '2022-07-19', '2022-07-19', '01:45:19 pm'),
(6799, 'K212276', 'MUNOZ GONZALEZ LAURA BELEN', '2022-07-19', '2022-07-19', '01:45:47 pm'),
(6800, 'K212277', 'MUNOZ GONZALEZ LAURA BELEN', '2022-07-19', '2022-07-19', '01:46:12 pm'),
(6801, 'K212278', 'LUQUENO MUNOZ ELIZABETH', '2022-07-19', '2022-07-19', '01:46:36 pm'),
(6802, 'K212274', 'YANEZ HERNANDEZ VIRIDIANA', '2022-07-19', '2022-07-19', '01:47:00 pm'),
(6803, 'K212233 ', 'TOLENTINO CRUZ MARIA GRISELL', '2022-07-19', '2022-07-19', '01:47:29 pm'),
(6804, 'K212224', 'RAMIREZ SANCHEZ BEATRIZ CATALINA', '2022-07-19', '2022-07-19', '01:50:49 pm'),
(6805, 'K212228', 'FLOR MONTER CESAR', '2022-07-19', '2022-07-19', '01:51:20 pm'),
(6806, 'K21227', 'ISLAS ESPINOSA GABRIELA', '2022-07-19', '2022-07-19', '01:51:39 pm'),
(6807, 'K212236', 'GOMEZ DIAZ SOFIA', '2022-07-19', '2022-07-19', '01:51:48 pm'),
(6808, 'K21228', 'SANCHEZ GARCIA YANETT', '2022-07-19', '2022-07-19', '01:51:58 pm'),
(6809, 'K212240', 'CUEVAS MORALES MARIA ISABEL', '2022-07-19', '2022-07-19', '01:52:22 pm'),
(6810, 'K212231', 'OVIEDO AYALA MAGALY JOANNA', '2022-07-19', '2022-07-19', '01:52:29 pm'),
(6811, 'K212237', 'AGUIRRE URANGA GEMMA ESMERALDA', '2022-07-19', '2022-07-19', '01:52:45 pm'),
(6812, 'K21222', 'OLACO GARCIA ANGELICA', '2022-07-19', '2022-07-19', '01:53:52 pm'),
(6813, 'K212273', 'COLIN MARTINEZ MA EUGENIA', '2022-07-19', '2022-07-19', '01:54:58 pm'),
(6814, 'K212249', 'DANIELS ANDRADE LAURA BELINDA', '2022-07-19', '2022-07-19', '01:56:07 pm'),
(6815, 'K212282', 'VIDAL GARCIA ESTEFANIA', '2022-07-19', '2022-07-19', '01:56:21 pm'),
(6816, 'K21224', 'GARCIA SANTOS MARIA ELENA', '2022-07-19', '2022-07-19', '01:56:49 pm'),
(6817, 'K212229', 'OLVERA VARGAS TANIA', '2022-07-19', '2022-07-19', '01:58:04 pm'),
(6818, 'K212226', 'CARREON CAJERO VICTOR MARTIN', '2022-07-19', '2022-07-19', '01:58:48 pm'),
(6819, 'K212279', 'SALDIERNA GAYOSSO MIGUEL ANGEL', '2022-07-19', '2022-07-19', '01:59:14 pm'),
(6820, 'K212241', 'GARRIDO HERNANDEZ YESENIA', '2022-07-19', '2022-07-19', '02:00:13 pm'),
(6821, 'K212235', 'HUERTA RAMIREZ AMERICA ITZEL', '2022-07-19', '2022-07-19', '02:03:05 pm'),
(6822, 'K212243', 'PEREZ GARRIDO VICTOR HUGO ', '2022-07-19', '2022-07-19', '02:29:53 pm'),
(6823, 'K212233 ', 'TOLENTINO CRUZ MARIA GRISELL', '2022-07-20', '2022-07-20', '12:30:28 pm'),
(6824, 'K212246', 'ZOYATE RAMOS LESLIE BERELY', '2022-07-20', '2022-07-20', '12:52:23 pm'),
(6825, 'K212278', 'MUNOZ GARRIDO MARIA EUGENIA', '2022-07-20', '2022-07-20', '01:36:06 pm'),
(6826, 'K212227', 'VELAZQUEZ FERNANDEZ VERONICA', '2022-07-20', '2022-07-20', '01:39:01 pm'),
(6827, 'K212279', 'PADILLA ROLDAN RENATA ISABEL', '2022-07-20', '2022-07-20', '01:39:21 pm'),
(6828, 'K212244', 'SOLIS VARGAS BEATRIZ', '2022-07-20', '2022-07-20', '01:39:33 pm'),
(6829, 'K212248', 'REYES RODRIGUEZ NYDIA EDITH', '2022-07-20', '2022-07-20', '01:39:45 pm'),
(6830, 'K212271', 'GARCIA GOMEZ JANET', '2022-07-20', '2022-07-20', '01:39:55 pm'),
(6831, 'K212243', 'PEREZ AGUILAR YOSSELINE ROCIO', '2022-07-20', '2022-07-20', '01:40:30 pm'),
(6832, 'K212228', 'FLOR MONTER CESAR', '2022-07-20', '2022-07-20', '01:41:01 pm'),
(6833, 'K212274', 'YANEZ HERNANDEZ VIRIDIANA', '2022-07-20', '2022-07-20', '01:41:33 pm'),
(6834, 'K212275', 'CADENANEZ MEJIA MARED MICHELLE', '2022-07-20', '2022-07-20', '01:42:11 pm'),
(6835, 'K21227', 'ISLAS HERNANDEZ ROMAN', '2022-07-20', '2022-07-20', '01:42:29 pm'),
(6836, 'K21224', 'VALLEJO GARCIA YADIRA', '2022-07-20', '2022-07-20', '01:42:53 pm'),
(6837, 'K212217', 'MALDONADO ORTEGA MARIA ESTHELA', '2022-07-20', '2022-07-20', '01:44:19 pm'),
(6838, 'K212281', 'WINFIELD VARGAS RAYKA ANAI', '2022-07-20', '2022-07-20', '01:45:28 pm'),
(6839, 'K212240', 'CUEVAS MORALES MARIA ISABEL', '2022-07-20', '2022-07-20', '01:48:52 pm'),
(6840, 'K21226', 'CERON PEREZ ZURI NALLELY', '2022-07-20', '2022-07-20', '01:49:05 pm'),
(6841, 'K212282', 'VIDAL GARCIA ESTEFANIA', '2022-07-20', '2022-07-20', '01:50:41 pm'),
(6842, 'K21228', 'SANCHEZ GARCIA YANETT', '2022-07-20', '2022-07-20', '01:50:52 pm'),
(6843, 'K212234', 'HERRERA MARTINEZ JUAN CARLOS', '2022-07-20', '2022-07-20', '01:51:23 pm'),
(6844, 'K212231', 'OVIEDO AYALA MAGALY JOANNA', '2022-07-20', '2022-07-20', '01:51:34 pm'),
(6845, 'K212224', 'VARGAS RAMIREZ AGUSTIN', '2022-07-20', '2022-07-20', '01:53:09 pm'),
(6846, 'K212236', 'GOMEZ DIAZ SOFIA', '2022-07-20', '2022-07-20', '01:55:39 pm'),
(6847, 'K212241', 'GARRIDO HERNANDEZ YESENIA', '2022-07-20', '2022-07-20', '01:55:49 pm'),
(6848, 'K212235', 'HUERTA RAMIREZ AMERICA ITZEL', '2022-07-20', '2022-07-20', '01:55:58 pm'),
(6849, 'K212237', 'AGUIRRE URANGA GEMMA ESMERALDA', '2022-07-20', '2022-07-20', '01:56:13 pm'),
(6850, 'K212273', 'COLIN MARTINEZ MA EUGENIA', '2022-07-20', '2022-07-20', '01:56:57 pm'),
(6851, 'K212249', 'DANIELS ANDRADE LAURA BELINDA', '2022-07-20', '2022-07-20', '01:57:36 pm'),
(6852, 'K21222', 'OLACO GARCIA ANGELICA', '2022-07-20', '2022-07-20', '01:58:32 pm'),
(6853, 'K212270', 'HERNANDEZ MARTINEZ OLIVIA', '2022-07-20', '2022-07-20', '01:59:37 pm'),
(6854, 'K212229', 'OLVERA VARGAS TANIA', '2022-07-20', '2022-07-20', '02:00:28 pm'),
(6855, 'K212277', 'MUNOZ GONZALEZ LAURA BELEN', '2022-07-20', '2022-07-20', '02:02:25 pm'),
(6856, 'K212276', 'MUNOZ GONZALEZ LAURA BELEN', '2022-07-20', '2022-07-20', '02:02:36 pm'),
(6857, 'K212213', 'GARRIDO LAZCANO OMAR', '2022-07-20', '2022-07-20', '02:05:04 pm'),
(6858, 'K212226', 'CARREON LUNA MARTIN', '2022-07-20', '2022-07-20', '02:14:27 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(1000) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL,
  `foto` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblusuarios`
--

INSERT INTO `tblusuarios` (`id`, `nombre`, `correo`, `password`, `foto`) VALUES
(27, 'ADMIN', 'ADMIN@ADMIN.COM', '$2y$12$zJa4o6TNM7nSVMmwtebu1OHTBSe6i/gOexp6kGaBy9/DYDTt55MwO', 'images/default/user.jpg'),
(28, 'MIGUEL CRUZ GAMA', 'CONTROLESCOLAR@COLMEXTUL.EDU.MX', '$2y$12$sxX5trOmg.7heYBXfyyU/Op62wiWRlHkceJKXyw8psqpFuIGvvnKe', 'images/default/user.jpg'),
(29, 'JOSE ALFREDO HERNANDEZ BATALLA', 'SOPORTE@COLMEXTUL.EDU.MX', '$2y$12$NFobtkQhNLn49dXveX5oHefkwtesvdG5iwrO/VqXjjvTdNFKm8OkO', 'images/default/user.jpg'),
(30, 'GUSTAVO CUEVAS PALAFOX', 'ADMINISTRADORTI2@COLMEXTUL.EDU.MX', '$2y$12$k0nA4AsMglK5z4.tsMXZU.6gqisgH00drao.q6/H1mVSifMZeS9Hi', 'images/default/user.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alm`
--
ALTER TABLE `alm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Indices de la tabla `papas`
--
ALTER TABLE `papas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Indices de la tabla `retiroalm`
--
ALTER TABLE `retiroalm`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alm`
--
ALTER TABLE `alm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=410;

--
-- AUTO_INCREMENT de la tabla `papas`
--
ALTER TABLE `papas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT de la tabla `retiroalm`
--
ALTER TABLE `retiroalm`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6859;

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
