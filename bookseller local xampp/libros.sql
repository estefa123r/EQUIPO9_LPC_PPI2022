-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2022 a las 21:18:45
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `ano` int(11) NOT NULL,
  `editorial` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombre`, `autor`, `genero`, `descripcion`, `imagen`, `ano`, `editorial`, `precio`) VALUES
(6, 'ciencia ficcion ecuatoriona', 'Isaac Asimov', 'Ciencia Ficion', 'empieza con una breve discusión sobre la obra de carácter político-utópico del padre Vicente Solano, pasando luego por los cuentos de Juan León Mera y de Juan Montalvo, entre otros.', '1668352710_ciencia de ficcion ecuatoriana.jfif', 2018, ' El Fakir', 5000),
(7, 'el nombre del viento', 'Patrick Rothfuss', 'Literatura Fantastica', 'La novela cuenta la historia de Kvothe, un personaje legendario que, tras años de retiro, accede a contar a un cronista los verdaderos motivos por los que se convirtió en leyenda. ', '1668353117_el nombre del viento.jfif', 2007, 'Plaza & Janés', 5000),
(8, 'la tercera vida despues de la vida', 'Raymond A. Moody', 'Ciencia Ficion', 'una serie de relatos de personas que superaron la muerte clínica, y que, durante un tiempo estuvieron técnicamente muertas para los médicos, y que luego volvieron a la vida.', '1668353616_la tercera vida despues de la vida.jfif', 1975, 'Edaf, S.L', 5000),
(10, 'las vidas dentro de tu cabeza', 'Suzzane O Sullivan', 'Alta Fantasia', 'nos conduce a través del fascinante mundo de las enfermedades psicosomáticas: por el camino nos cruzaremos con pacientes como Pauline, enferma a lo largo de toda su vida adulta; Camilla, una abogada de éxito que padece ataques en apariencia.', '1668354663_las vidas dentro de tu cabeza.png', 2016, 'Ariel', 5000),
(11, 'the arrival', 'Ted Chiang', 'Ciencia Ficion', 'El libro se trata de una llegada, sí, y en muchos sentidos a un nuevo mundo, a una nueva vida, a una nueva versión de vos mismo; es también una llegada al conocimiento y a una identidad que se renueva y se afirma en lo que ya era, todo en una única pincelada, que nos lleva inevitablemente a un final, sencillo pero...', '1668355668_the arrival.jfif', 1998, 'Arthur A. Levine Books', 5000),
(12, 'la maquina del tiempo ', ' William Heinemann', 'Ciencia', 'Un científico inventa una máquina para viajar a través del tiempo. En un viaje experimental llega al año 802.701 y encuentra la tierra habitada por los Eloi, pacíficos y ociosos. El Viajero del Tiempo deduce que están tan avanzados que unas máquinas deben de trabajar por ellos.', '1668356086_la maquina del tiempo.jfif', 1895, ' Heinemann', 5000),
(13, 'la ciudad y la ciudad', 'china Mieville', 'Literatura Fantastica', 'investiga el asesinato de Mahalia Geary, una estudiante extranjera que apareció muerta y con la cara desfigurada en una calle de Besźel.', '1668356285_la ciudad y la ciudad.jfif', 2009, 'La Factoría de Ideas', 5000),
(14, 'cronicas marciales ', 'Ray Bradbury', 'Ciencia Ficion', 'es un conjunto de relatos que narra de modo fragmentario diversos episodios relacionados con la conquista y colonización de Marte por los habitantes del planeta Tierra y las diferentes reacciones de los marcianos ante ellos. ', '1668356544_cronicas marciales.jfif', 1950, 'minotauro', 5000),
(15, 'un mundo inmortal', 'Jorge Luis Borges', 'Alta Fantasia', 'relata que, huyendo de unos sediciosos, Rufo se pierde en el desierto y se encuentra con un jinete moribundo que buscaba “el río secreto que purifica de la muerte a los hombres”. Tras la muerte del jinete, el soldado decide buscar esas aguas que dan la inmortalidad.', '1668356788_un mundo inmortal.jfif', 1947, 'españa', 5000),
(16, 'hacia las estrellas ', 'Álex Riveiro.', 'Alta Fantasia', 'plantea una ucronía en la que un meteorito arrasa Washington D. C. en 1952, años antes de la fundación de la NASA, que quedará borrada de la historia. La catástrofe es inmediata, y su efecto a largo plazo podría ser la extinción de la vida en la Tierra en cuestión de décadas.', '1668356948_hacia las extrellas.jfif', 2019, 'españa', 5000),
(17, 'A traves de mi ventana ', 'Ariana Godoy', 'Alta Fantasia', 'Raquel siempre ha estado enamorada de su atractivo y misterioso vecino, Ares. Todos los días ella lo espía por la ventana, pues, aunque desea hablar con él, esto nunca ha sido posible; sin embargo, las circunstancias están a punto de cambiar.', '1668357484_a traves de mi ventana.jpg', 2019, 'Veronica callon', 5000),
(18, 'Alicia paisa de las maravillas ', 'Lewis Carroll', 'Novela', 'cuenta cómo una niña llamada Alicia cae por un agujero, encontrándose en un mundo peculiar y extraño, poblado por humanos y criaturas antropomórficas. El libro juega con la lógica, dando a la novela gran popularidad tanto en niños como en adultos.', '1668358105_alicia en el pais de las maravillas.jpg', 1865, 'Macmillan Publishers', 5000),
(19, 'A(traves)ando galicia', 'Fran Zabaleta', 'Drama', 'habla y opina sin disimulo de la Galicia que va encontrándose, unas veces utópica y otras calamitosas, pero siempre con la pasión del que está enamorado de su tierra y le desea lo mejor. Una lectura muy recomendable para conocer mejor Galicia.', '1668358341_a ( traves) ando galicia.jfif', 2021, 'Los Libros del Salvaje', 5000),
(20, 'A Teaspoon of Earth and Sea', 'Dina Nayeri', 'Alta Fantasia', 'es una novela mágica sobre una mujer joven iraní levanta el duelo por su poderosa imaginación y amor por la cultura occidental.', '1668358445_a teaspoon earth and sea.jpg', 2013, 'Blackstone Audio, Inc.', 5000),
(21, 'Almendra ', 'Won-pyung sohn', 'Ciencia Ficion', 'es una historia sobre crecer, descubrirse a uno mismo y aceptar que la ayuda no siempre viene por donde la esperamos. Yunjae tiene dieciséis años, está en la edad de las emociones desbordadas, el amor y la rabia.', '1668358817_almendra.jpg', 2017, 'temas de hoy ', 5000),
(22, 'Asuntos de horno', 'José de la Cuadra', 'Infantin', 'desde sus costumbres y los abusos de los que son víctimas, hasta sus deseos, sus temores y sus sueños frustrados.', '1668359047_Asuntos de horno.jpg', 1932, 'Talleres de la Sociedad Filantrópica de Guayaquil.', 5000),
(23, 'Dracula ', ' Bram Stoker', 'Terror', 'El joven abogado británico Jonathan Harker viaja a Transilvania para negociar en nombre de un bufete de abogados de Londres con un conde que está interesado en adquirir una propiedad en Inglaterra.', '1668360148_dracula.jfif', 1897, 'miguel angel ', 5000),
(24, 'Atlantis proytecto', 'Mateos Carreira', 'Aventura', 'pretende facilitar al docente la aplicación en el aula de los contenidos y las dinámicas que se desarrollan en los manuales', '1668360333_atlantis proyecto tarsis.jpg', 2015, 'miguel angel', 5000),
(25, 'atrapados ', 'Oliver Jeffers', 'Comedia', 'Todo empieza cuando la cometa de Floyd queda atrapada en un árbol. Floyd prueba de tirar y sacudirla, pero no hay manera de que se desenganche. Entonces decide lanzar su zapato preferido para hacerla caer, pero también se queda atrapado.', '1668360454_atrapados.jfif', 2012, 'FONDO DE CULTURA ECONÓMICA (FCE)', 5000),
(26, 'cada historia cuenta ', 'Paola herrera', 'Novela', 'trata de un libro solidario donde parte de los beneficios obtenidos por su venta irán destinados a la Fundación AINDACE, cuya misión fundamental es ayudar a personas con daño cerebral a través de la financiación de proyectos de investigación.', '1668360723_cada historia cuenta.jfif', 2020, 'Kurere', 5000),
(27, 'calvino ', 'Italo calvino', 'Novela', 'Las ciudades invisibles se presentan como una serie de relatos de viaje que Marco Polo hace a Kublai Kan, emperador de los tártaros... A este emperador melancólico que ha comprendido que su ilimitado poder poco cuenta en un mundo que marcha hacia la ruina, un viajero imaginario le habla de ciudades...', '1668360895_calvino.jpeg', 1951, 'literatura reformada ', 5000),
(28, 'Frankenstein', ' Mary Shelley', 'Terror', 'un estudiante de medicina en Ingolstadt, obsesionado por conocer \"los secretos del cielo y la tierra\". En su afán por desentrañar \"la misteriosa alma del hombre\", Víctor crea un cuerpo a partir de la unión de distintas partes de cadáveres diseccionados.', '1668361898_frankenstein.jfif', 1818, 'Lackington, Hughes, Harding, Mavor & Jones, Gradifco', 5000),
(29, 'candido ', 'voltaire ', 'Novela', 'Una novela de aprendizaje sobre un optimista que cree a pies juntillas que el mundo es un paraíso, aunque la realidad se encarga de negarlo.', '1668362202_candido.jpg', 1759, 'UNIVERSIDAD VERACRUZANA', 5000),
(30, 'caroline y la puerta secreta ', 'Neil Gaiman', 'Alta Fantasia', 'Coraline se da cuenta de que, tras los espejos, hay otros niños que han caído en la trampa. Son como almas perdidas, y ahora ella es su única esperanza de salvación. Pero para rescatarlos tendrá también que recuperar a sus verdaderos padres, y cumplir así el desafío que le permitirá volver a su vida anterior.', '1668362400_caroline.jpg', 2002, 'Neil Gaiman', 5000),
(31, 'pideme lo que quieras ', 'Megan Maxwell', 'Alta Fantasia', 'Tras la muerte de su padre, el prestigioso empresario alemán Eric Zimmerman decide viajar a España para supervisar las delegaciones de la empresa Müller. En la oficina central de Madrid conoce a Judith, una joven ingeniosa y simpática de la que se encapricha de inmediato.', '1668363509_pideme lo que quieras.jpg', 2012, 'ensencial ', 5000),
(32, 'dejame verte ', 'elena garcia ', 'literatura erotica', 'La autoestima de Ruth roza niveles mínimos después de la dura traición de dos personas a las que quería. Creyendo que la ayudaría a valorarse más a sí misma, empieza a probar nuevas experiencias de la mano de un misterioso cibernauta que le propone sexo on line sin compromiso.\r\n', '1668366340_dejame verte.jpg', 2021, 'esencia', 5000),
(33, 'Corrupt-audiobook', 'Penelope Douglas ', 'literatura erotica', 'Erika: Su nombre es Michael Crist. El hermano mayor de mi novio es como esa película de miedo que te asomas por la mano para ver. Es guapo, fuerte y completamente aterrador. La estrella del equipo de baloncesto de su universidad y ahora convertido en profesional, está más preocupado por la suciedad de su zapato que por mí.', '1668366549_corrut.jpg', 2016, 'Tantor Audio', 5000),
(34, 'Game for tonight', 'Karen Erickson', 'Alta Fantasia', 'Después de todo, el jugador de fútbol profesional Flynn Foley es su cliente. Pero algo acerca de este atleta pulcro y deliciosamente atractivo hace que Aubrey imagine todo tipo de fantasías clasificadas como X.', '1668366737_game for.jpg', 2014, 'CreateSpace Independent Publishing Platform', 5000),
(35, 'Cincuenta sombras de grey', 'E. L. James', 'Alta Fantasia', 'narra la historia de Anastasia «Ana» Steele, una joven estudiante, que cursa la carrera de Literatura en la Universidad de Washington, y que vive con su mejor amiga, Katherine «Kate» Kavanagh, quien escribe para el periódico estudiantil de su universidad.', '1668366906_50 sombras.jpg', 2011, 'Grijalbo', 5000),
(36, '365 dias ', 'Blanka Lipinska.', 'Drama', 'Un mundo donde no existen los límites ni la clemencia. Tiene 365 días para enamorarse de el. Massimo Toricelli es el capo de una familia de la mafia siciliana. Oscuro, peligroso y tremendamente atractivo, busca obsesionado desde hace años a una mujer que se le apareció en una visión cuando estuvo a punto de morir.', '1668367209_365 dias.png', 2020, 'Grijalbo ', 5000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
