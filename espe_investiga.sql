-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2020 a las 01:09:15
-- Versión del servidor: 10.4.6-MariaDB
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
-- Base de datos: `espe_investiga`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `ID_CARRERA` int(11) NOT NULL,
  `CARRERA` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`ID_CARRERA`, `CARRERA`) VALUES
(1, 'Biotecnología'),
(2, 'ITIN'),
(3, 'Agropecuaria'),
(4, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_admi`
--

CREATE TABLE `datos_admi` (
  `ID_ADMIN` int(11) NOT NULL,
  `NOMBRE_ADMIN` varchar(40) NOT NULL,
  `CEDULA_ADMIN` varchar(10) NOT NULL,
  `USUARIO_ADMIN` varchar(20) NOT NULL,
  `CONTRASENIA_ADMIN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_admi`
--

INSERT INTO `datos_admi` (`ID_ADMIN`, `NOMBRE_ADMIN`, `CEDULA_ADMIN`, `USUARIO_ADMIN`, `CONTRASENIA_ADMIN`) VALUES
(1, 'Jordy Quinatoa', '2300318074', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponente_charla`
--

CREATE TABLE `ponente_charla` (
  `ID_CHARLA` int(11) NOT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `NOMBRE_CHARLA` varchar(20) NOT NULL,
  `APELLIDO_CHARLA` varchar(20) NOT NULL,
  `CEDULA_CHARLA` varchar(10) NOT NULL,
  `SALA_CHARLA` varchar(250) DEFAULT NULL,
  `CORREOPER_CHARLA` varchar(30) NOT NULL,
  `CORREOINS_CHARLA` varchar(30) NOT NULL,
  `TITULO_CHARLA` varchar(100) NOT NULL,
  `RESUMEN_CHARLA` varchar(300) NOT NULL,
  `FECHAPRE_CHARLA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ponente_charla`
--

INSERT INTO `ponente_charla` (`ID_CHARLA`, `ID_CARRERA`, `NOMBRE_CHARLA`, `APELLIDO_CHARLA`, `CEDULA_CHARLA`, `SALA_CHARLA`, `CORREOPER_CHARLA`, `CORREOINS_CHARLA`, `TITULO_CHARLA`, `RESUMEN_CHARLA`, `FECHAPRE_CHARLA`) VALUES
(1, 2, 'Daniel', 'Nuñez', '2300121239', 'https://meet.google.com/eix-rztw-nkt', 'adnunez@hotmail.com', 'adnunes@espe.edu.ec', 'Agrotics y Agricultura 4.0', 'Las denominadas AgroTIC son “aquella oferta tecnológica o segmento vertical de aplicaciones informáticas, electrónicas y de comunicación orientado a administrar, almacenar, transmitir y hacer interactuar la información generada a todo nivel por la actividad del sector y su escenario territorial, en ', '2020-09-16 09:00:00'),
(2, 2, 'Hector', 'Revelo', '1724232287', 'https://meet.google.com/lookup/hjiroiwzms?authuser=0&hs=179', 'hmrevelo@gmail.com', 'hmrevelo@espe.edu.ec', 'Ciencia abierta como catalizador de la transformacion digital.', 'Para asegurar que la ciencia beneficia realmente a las personas y al planeta y no deja a nadie atrás, es necesario transformar todo el proceso científico. La ciencia abierta es un movimiento que pretende hacer la ciencia más abierta, accesible, eficiente, democrática y transparente. ', '2020-09-18 09:00:00'),
(3, 4, 'David', 'Rivas', '1724346287', 'https://meet.google.com/lookup/bj3cwtqpyd?authuser=0&hs=179', 'davrivas@outlook.com', 'darivas@espe.edu.ec', 'Análisis de los datos estadísticos, Expectativas y experiencias.', 'La estadística es básicamente una ciencia que implica la recopilación de datos, la interpretación de datos y, finalmente, la validación de datos. El análisis de datos estadístico es un procedimiento para realizar diversas operaciones estadísticas.Es un tipo de investigación cuantitativa que busca cu', '2020-09-18 09:30:00'),
(4, 2, 'Daniel', 'Nuñez', '1429582749', 'https://meet.google.com/eix-rztw-nkt', 'adnunez@hotmail.com', 'adnunes@espe.edu.ec', 'Agricultura 4.0 aplicada al campo con tecnología.', 'La agricultura 4.0  se basa en la recopilación y análisis de datos sobre el campo con el objetivo de mejorar la calidad de los cultivos y reducir las consecuencias en el medio ambiente. Esto es posible con el uso de las nuevas tecnologías. Los drones (y otros robots), sensores, software, etc. son ca', '2020-09-17 10:00:00'),
(5, 3, 'Juan', 'Yanez', '2300128418', NULL, 'juanpa@hotmail.com', 'jjyanez@espe.edu.ec', 'Estudio de las plantes oxinuras', 'Este es un resumen en el que se detalla el estudio de una clase de plantas que se basan en el compuesto de proteinas', NULL),
(6, 2, 'Felipe', 'Crespo', '1710001842', NULL, 'crespo@hotmail.com', 'felipecrespo@espe.edu.ec', 'Realidad Aumentada', 'Este es un mensaje de la realidad aumentada.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponente_ponencia`
--

CREATE TABLE `ponente_ponencia` (
  `ID_PONENCIA` int(11) NOT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `NOMBRE_PONENCIA` varchar(20) NOT NULL,
  `APELLIDO_PONENCIA` varchar(20) NOT NULL,
  `CEDULA_PONENCIA` varchar(10) NOT NULL,
  `CURSO_PONENCIA` varchar(20) NOT NULL,
  `CORREOPER_PONENCIA` varchar(30) NOT NULL,
  `CORREOINS_PONENCIA` varchar(30) NOT NULL,
  `LINK_PONENCIA` varchar(200) NOT NULL,
  `TITULO_PONENCIA` varchar(150) NOT NULL,
  `RESUMEN_PONENCIA` varchar(300) NOT NULL,
  `FECHAPRE_PONENCIA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ponente_ponencia`
--

INSERT INTO `ponente_ponencia` (`ID_PONENCIA`, `ID_CARRERA`, `NOMBRE_PONENCIA`, `APELLIDO_PONENCIA`, `CEDULA_PONENCIA`, `CURSO_PONENCIA`, `CORREOPER_PONENCIA`, `CORREOINS_PONENCIA`, `LINK_PONENCIA`, `TITULO_PONENCIA`, `RESUMEN_PONENCIA`, `FECHAPRE_PONENCIA`) VALUES
(1, 2, 'Jordy', 'Quinatoa', '1732423234', 'Quinto', 'jordicito@gmail.com', 'jjquinatoa2@espe.edu.ec', 'https://meet.google.com/yfu-xnue-axj', 'Sistema clinico para las zonas rurales de Santo Do', 'Los sistemas de información hospitalaria o sistemas de información en salud (siglas: SIH, o HIS en inglés), en algunos países son denominados \"expediente electrónico\", pese a que este último es sólo la parte clínica del proceso. Llevar un control de todos los servicios prestados a los pacientes.', '2020-09-16 09:15:20'),
(2, 1, 'Nicole', 'Andrade', '2309234571', 'Septimo', 'nico97andrade@hotmail.com', 'ncandrade@espe.edu.ec', 'https://meet.google.com/yfu-xnue-axj', 'Analisis fotogénico en las Canabbis ', 'La fotosíntesis o función clorofílica es la conversión de materia inorgánica a materia orgánica gracias a la energía que aporta la luz. En este proceso la energía lumínica se transforma en energía química estable, siendo el NADPH y el ATP las primeras moléculas en la que queda almacenada esta energí', '2020-09-17 10:00:00'),
(4, 2, 'Julio', 'Villares', '2309234475', 'Quinto', 'julio97villa@hotmail.com', 'jjvillares@espe.edu.ec', 'https://meet.google.com/yfu-xnue-axj', 'Realidad virtual aplicada a la matematicas ', 'La realidad virtual es un mundo abstracto generado por un ordenador, en donde el usuario tiene la sensación de estar en un entorno diferente. No obstante, el término realidad virtual también puede aplicarse a otros ámbitos como, por ejemplo, la educación. En este contexto se implementó el software d', '2020-09-16 09:00:00'),
(5, 2, 'Jennifer', 'Sanchez', '2309234475', 'Cuarto', 'lajenni@hotmail.com', 'lajenni97@espe.edu.ec', 'https://meet.google.com/yfu-xnue-axj', 'Realidad virtual aplicada a la matematicas ', 'La realidad virtual es un mundo abstracto generado por un ordenador, en donde el usuario tiene la sensación de estar en un entorno diferente. No obstante, el término realidad virtual también puede aplicarse a otros ámbitos como, por ejemplo, la educación. En este contexto se implementó el software d', '2020-09-16 09:20:00'),
(6, 3, 'Byron', 'Romero', '1717687637', 'Octavo', 'byronromero@gmail.com', 'baromero@espe.edu.ec', 'https://meet.google.com/yfu-xnue-axj', 'Análisis del ganado vacuno en la ESPE sede Santo Domingo de los Colorados', 'Los ganaderos de Santo Domingo y de varias provincias del país asisten a esta casa abierta en la que también participa el Banco Nacional de Fomento. Ellos otorgarán préstamos a los ganaderos con un plazo de seis años con dos años de gracia a un interés del 10%. Arteaga dijo que un técnico de Agrocal', '2020-09-16 09:14:00'),
(7, 2, 'Milena', 'Arteaga', '2300314562', 'Primero', 'milena98@gmail.com', 'marteaga@espe.edu.ec', '', 'TICs en la gestión vial', 'El uso de la tecnologías para la gestión vial ha mejorado notablemente la forma de movilizarse de los conductores ', NULL),
(8, 2, 'Milena', 'Arteaga', '2300314562', 'Primero', 'milena98@gmail.com', 'marteaga@espe.edu.ec', '', 'TICs en la gestión vial', 'El uso de la tecnologías para la gestión vial ha mejorado notablemente la forma de movilizarse de los conductores ', NULL),
(9, 2, 'asda', 'fasfasf', '124124', 'asdas', 'asfda@gamil.com', 'sdasd@espe.edu.ec', '', 'asdasf', 'asdafasfafs', NULL),
(10, 2, 'Dayana', 'Alcivar', '2391043122', 'Sexto', 'alcivar@gmail.com', 'aalcivar@espe.edu.ec', '', 'Proyecto', 'Este es una resumen de un proyecto', NULL),
(11, 1, 'Adriana', 'Caiza', '1710023002', 'Quinto', 'adriana@gmail.com', 'adriana@espe.edu.ec', '', 'ClonaciÃ³n de la cÃ©lula eucariota', 'La fecundaciÃ³n intracelular se produce en la reproducciÃ³n asexual de la cÃ©lula.', NULL),
(12, 2, 'Diana', 'Lopez', '2300312341', 'Quinto', 'diana@gmail.com', 'diana@espe.edu.ec', '', 'TICS en la educaciÃ³n', 'La TI en la eduaciÃ³n', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ponente_poster`
--

CREATE TABLE `ponente_poster` (
  `ID_POSTER` int(11) NOT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `NOMBRE_POSTER` varchar(20) NOT NULL,
  `APELLIDO_POSTER` varchar(20) NOT NULL,
  `CEDULA_POSTER` varchar(10) NOT NULL,
  `CURSO_POSTER` varchar(20) NOT NULL,
  `CORREOPER_POSTER` varchar(30) NOT NULL,
  `CORREOINS_POSTER` varchar(30) NOT NULL,
  `TITULO_POSTER` varchar(100) NOT NULL,
  `RESUMEN_POSTER` varchar(300) NOT NULL,
  `FECHAPRE_POSTER` datetime DEFAULT NULL,
  `LINK_POSTER` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ponente_poster`
--

INSERT INTO `ponente_poster` (`ID_POSTER`, `ID_CARRERA`, `NOMBRE_POSTER`, `APELLIDO_POSTER`, `CEDULA_POSTER`, `CURSO_POSTER`, `CORREOPER_POSTER`, `CORREOINS_POSTER`, `TITULO_POSTER`, `RESUMEN_POSTER`, `FECHAPRE_POSTER`, `LINK_POSTER`) VALUES
(1, 2, 'Alexis', 'Sanchez', '2300318382', 'Primera', 'alexis@gmail.com', 'asanchez@espe.edu.ec', 'Realidad Aumentada', 'Este es un resumen de Realidad Aumentada', NULL, 'https://drive.google.com/file/d/1x9oMXgSZynWmYKBqvB-00R76E6WUza7P/view'),
(2, 2, 'Lisbeth', 'Caiza', '2300316328', 'Quinto', 'lisbethcaiza@gmail.com', 'lacaiza@espe.edu.ec', 'Realidad aumentada en la quÃ­mica', 'La quÃ­mica es una rama difÃ­cil de comprender', NULL, 'https://i.pinimg.com/originals/e5/8e/86/e58e86f93f84d0d61e7ab45552e6c8a3.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publico`
--

CREATE TABLE `publico` (
  `ID_PUBLICO` int(11) NOT NULL,
  `ID_CARRERA` int(11) DEFAULT NULL,
  `NOMBRE_PUBLICO` varchar(30) NOT NULL,
  `APELLIDO_PUBLICO` varchar(30) NOT NULL,
  `TELEFONO_PUBLICO` varchar(10) NOT NULL,
  `CORREO_PUBLICO` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publico`
--

INSERT INTO `publico` (`ID_PUBLICO`, `ID_CARRERA`, `NOMBRE_PUBLICO`, `APELLIDO_PUBLICO`, `TELEFONO_PUBLICO`, `CORREO_PUBLICO`) VALUES
(1, 3, 'Jordy', 'Quinatoa', '0988988201', 'quinatoajordy@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`ID_CARRERA`);

--
-- Indices de la tabla `datos_admi`
--
ALTER TABLE `datos_admi`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indices de la tabla `ponente_charla`
--
ALTER TABLE `ponente_charla`
  ADD PRIMARY KEY (`ID_CHARLA`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_CARRERA`);

--
-- Indices de la tabla `ponente_ponencia`
--
ALTER TABLE `ponente_ponencia`
  ADD PRIMARY KEY (`ID_PONENCIA`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_CARRERA`);

--
-- Indices de la tabla `ponente_poster`
--
ALTER TABLE `ponente_poster`
  ADD PRIMARY KEY (`ID_POSTER`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_CARRERA`);

--
-- Indices de la tabla `publico`
--
ALTER TABLE `publico`
  ADD PRIMARY KEY (`ID_PUBLICO`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_CARRERA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_admi`
--
ALTER TABLE `datos_admi`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ponente_charla`
--
ALTER TABLE `ponente_charla`
  MODIFY `ID_CHARLA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ponente_ponencia`
--
ALTER TABLE `ponente_ponencia`
  MODIFY `ID_PONENCIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ponente_poster`
--
ALTER TABLE `ponente_poster`
  MODIFY `ID_POSTER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `publico`
--
ALTER TABLE `publico`
  MODIFY `ID_PUBLICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ponente_charla`
--
ALTER TABLE `ponente_charla`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carrera` (`ID_CARRERA`);

--
-- Filtros para la tabla `ponente_ponencia`
--
ALTER TABLE `ponente_ponencia`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carrera` (`ID_CARRERA`);

--
-- Filtros para la tabla `ponente_poster`
--
ALTER TABLE `ponente_poster`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carrera` (`ID_CARRERA`);

--
-- Filtros para la tabla `publico`
--
ALTER TABLE `publico`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_CARRERA`) REFERENCES `carrera` (`ID_CARRERA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
