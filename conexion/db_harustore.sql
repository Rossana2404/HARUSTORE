


--
USE haru_db;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adopciones`
--

DROP TABLE IF EXISTS `adopciones`;
CREATE TABLE IF NOT EXISTS `adopciones` (
  `id_adopcion` int NOT NULL AUTO_INCREMENT,
  `nombre_mascota` varchar(50) NOT NULL,
  `edad` int NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `imagen` blob NOT NULL,
  `tipo_mascota` enum('Perro','Gato','Adoptado') NOT NULL,
  `nombre_persona` varchar(50) NOT NULL,
  `fecha_adopcion` date,
  PRIMARY KEY (`id_adopcion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `adopciones` (`nombre_mascota`, `edad`, `descripcion`, `imagen`, `tipo_mascota`, `nombre_persona`, `fecha_adopcion`) VALUES
('Max', 2, 'Un perro amigable', '', 'perro', 'Juan Pérez', '2023-01-15'),
('Luna', 1, 'Un gato juguetón', '', 'gato', 'María García', '2023-02-20'),
('Rex', 3, 'Un perro amigable', '', 'perro', 'Pedro Sánchez', '2023-03-10');



-------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

DROP TABLE IF EXISTS `banco`;
CREATE TABLE IF NOT EXISTS `banco` (
  `id_banco` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,  PRIMARY KEY (`id_banco`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`id_banco`, `nombre`) VALUES
(1, 'Banco de Chile'),
(2, 'Banco Santander Chile'),
(3, 'BancoEstado'),
(4, 'Banco Itaú Chile'),
(5, 'Banco BCI'),
(6, 'Banco BBVA Chile'),
(7, 'Banco Security'),
(8, 'Banco Falabella'),
(9, 'Banco Consorcio'),
(10, 'Banco Ripley'),
(11, 'Banco Scotiabank Chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

DROP TABLE IF EXISTS `bodega`;
CREATE TABLE IF NOT EXISTS `bodega` (
  `id_bodega` int NOT NULL AUTO_INCREMENT,
  `encargado` varchar(50) NOT NULL,
  `stock` int NOT NULL,
  PRIMARY KEY (`id_bodega`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `bodega`
--

INSERT INTO `bodega` (`id_bodega`, `encargado`, `stock`) VALUES
(1,  'Juan Pérez', 100),
(2,  'María Gómez', 75),
(3, 'Carlos Rodríguez', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boleta`
--

DROP TABLE IF EXISTS `boleta`;
CREATE TABLE IF NOT EXISTS `boleta` (
  `id_boleta` int NOT NULL AUTO_INCREMENT,
  `detalle` varchar(150) NOT NULL,
  `valor` INT (8) NOT NULL,
  PRIMARY KEY (`id_boleta`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `boleta`
--

INSERT INTO `boleta` (`id_boleta`, `detalle`, `valor`) VALUES
(1, 'Detalle 1', '100.000'),
(2, 'Detalle 2', '15.990'),
(3, 'Detalle 3', '200.250');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Inserta las categorías principales
INSERT INTO `categorias` (`nombre_categoria`) VALUES
('Perro'),
('Gato');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `rut` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `telefono` int NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `rut`, `nombre`, `apellido`, `correo`, `contraseña`, `telefono`, `fecha_nacimiento`, `direccion`) VALUES
(1, '17003023', 'Nicole', 'Mallea', 'nmallea@gmail.com', '1234', 1234567890, '2023-10-21', 'av.matta 125'),
(2, '12197045', 'Rossana', 'Mallea', 'admin@gmail.com', 'admin', 2147483647, '2023-10-21', 'martin de solis 789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunas`
--

DROP TABLE IF EXISTS `comunas`;
CREATE TABLE IF NOT EXISTS `comunas` (
  `id_comuna` int NOT NULL AUTO_INCREMENT,
  `nombre_comuna` varchar(50) NOT NULL,
  PRIMARY KEY (`id_comuna`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `comunas`
--

INSERT INTO `comunas` (`id_comuna`, `nombre_comuna`) VALUES
(1, 'Santiago'),
(2, 'Providencia'),
(3, 'Las Condes'),
(4, 'La Florida'),
(5, 'Maipú'),
(6, 'Ñuñoa'),
(7, 'Peñalolén'),
(8, 'La Reina'),
(9, 'Quilicura'),
(10, 'Independencia'),
(11, 'Pudahuel'),
(12, 'San Bernardo'),
(13, 'San Joaquín'),
(14, 'La Cisterna'),
(15, 'San Miguel'),
(16, 'La Granja'),
(17, 'Cerrillos'),
(18, 'Lo Prado'),
(19, 'Recoleta'),
(20, 'Macul'),
(21, 'San Ramón'),
(22, 'Vitacura'),
(23, 'Lo Barnechea'),
(24, 'Huechuraba'),
(25, 'Renca'),
(26, 'Puente Alto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `despacho`
--

DROP TABLE IF EXISTS `despacho`;
CREATE TABLE IF NOT EXISTS `despacho` (
  `id_despacho` int NOT NULL AUTO_INCREMENT,
  `origen` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `nombre_user` varchar(50) NOT NULL, 
   PRIMARY KEY (`id_despacho`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `despacho`
--

INSERT INTO `despacho` (`id_despacho`, `origen`, `destino`, `nombre_user`) VALUES
(1, 'Origen 1', 'Destino 1', 'Nicole Mallea'),
(2, 'Origen 2', 'Destino 2', 'Usuario 2'),
(3, 'Origen 3', 'Destino 3', 'Usuario 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_venta`
--

DROP TABLE IF EXISTS `det_venta`;
CREATE TABLE IF NOT EXISTS `det_venta` (
  `id_det_venta` int NOT NULL AUTO_INCREMENT,
  `det_produc` varchar(300) NOT NULL,
  PRIMARY KEY (`id_det_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `det_venta`
--

INSERT INTO `det_venta` (`id_det_venta`, `det_produc`) VALUES
(1, 'Detalle del Producto 1 para Venta'),
(2, 'Detalle del Producto 2 para Venta'),
(3, 'Detalle del Producto 3 para Venta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `id_factura` int NOT NULL AUTO_INCREMENT,
  `detalle` varchar(150) NOT NULL,
  `valor` varchar(150) NOT NULL,
  PRIMARY KEY (`id_factura`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `detalle`, `valor`) VALUES
(1, 'Detalle Factura 1', '150.00'),
(2, 'Detalle Factura 2', '200.50'),
(3, 'Detalle Factura 3', '300.25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

DROP TABLE IF EXISTS `marca`;
CREATE TABLE IF NOT EXISTS `marca` (
  `id_marca` int NOT NULL AUTO_INCREMENT,
  `nombre_marca` varchar(45) NOT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`) VALUES
(1, 'Marca de Alimentos para Perros'),
(2, 'Marca de Alimentos para Gatos'),
(3, 'Marca de Accesorios para Mascotas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

DROP TABLE IF EXISTS `mascotas`;
CREATE TABLE IF NOT EXISTS `mascotas` (
  `id_mascota` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,  `edad` int NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `imagen` blob NOT NULL,
  `tipo_mascota` enum('Perro','Gato','Adoptado') NOT NULL,
  PRIMARY KEY (`id_mascota`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id_mascota`, `nombre`, `edad`, `descripcion`, `imagen`, `tipo_mascota`) VALUES
(1, 'Rex', 3, 'Un perro amigable', 0x696d6167656e5f64655f7265785f626c6f62, 'Perro'),
(5, 'Lucky', 1, 'Mascota adoptada', 0x696d6167656e5f64655f6c75636b795f626c6f62, 'Adoptado'),
(6, 'Mittens', 2, 'Un gato juguetón', 0x696d6167656e5f64655f6d697474656e735f626c6f62, 'Gato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
CREATE TABLE IF NOT EXISTS `mensaje` (
  `id_chat` int NOT NULL AUTO_INCREMENT,
  `texto` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_chat`, `texto`) VALUES
(1, 'Mensaje 1'),
(2, 'Mensaje 2'),
(3, 'Mensaje 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_compra`
--

DROP TABLE IF EXISTS `orden_compra`;
CREATE TABLE IF NOT EXISTS `orden_compra` (
  `id_oc` int NOT NULL AUTO_INCREMENT,
  `nombre_produc` varchar(45) NOT NULL,
  `cantidad` int NOT NULL,
  `precio_unitario` int NOT NULL,
  `precio_total` int NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_oc`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `orden_compra`
--

INSERT INTO `orden_compra` (`id_oc`, `nombre_produc`, `cantidad`, `precio_unitario`, `precio_total`, `fecha`) VALUES
(1, 'Alimento para Perros Premium', 1, 20000, 20000, '2023-10-21'),
(2, 'Alimento para Gatos Nutrición Completa', 1, 15000, 15000, '2023-10-22'),
(3, 'Collar para Mascotas de Cuero', 3, 3000, 9000, '2023-10-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

DROP TABLE IF EXISTS `pago`;
CREATE TABLE IF NOT EXISTS `pago` (
  `id_pago` int NOT NULL AUTO_INCREMENT,
  `monto` int NOT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `monto`) VALUES
(1, 100),
(2, 200),
(3, 150);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idprod` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `foto` blob NOT NULL,
  `valor` int NOT NULL,
  `codigo` int NOT NULL,
  `dimensiones` int DEFAULT NULL,
  `oferta` int DEFAULT NULL,
  `promocion` varchar(150) DEFAULT NULL,
  `talla` int DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `exis_venta` varchar(45) NOT NULL,
  `exis_bodega` varchar(45) NOT NULL,
  PRIMARY KEY (`idprod`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idprod`, `nombre`, `descripcion`, `foto`, `valor`, `codigo`, `dimensiones`, `oferta`, `promocion`, `talla`, `color`, `exis_venta`, `exis_bodega`) VALUES
(1, 'Alimento para Perros Premium', 'Descripción del alimento para perros', '', 20, 12345678, NULL, NULL, NULL, NULL, NULL, 'Disponible', 'En stock'),
(2, 'Alimento para Perros Básico', 'Descripción del alimento para perros', '', 15, 87654321, NULL, NULL, NULL, NULL, NULL, 'Disponible', 'En stock'),
(3, 'Alimento para Gatos Nutrición Completa', 'Descripción del alimento para gatos', '', 18, 98765432, NULL, NULL, NULL, NULL, NULL, 'Disponible', 'En stock'),
(4, 'Alimento para Gatos Premium', 'Descripción del alimento para gatos', '', 22, 23456789, NULL, NULL, NULL, NULL, NULL, 'Disponible', 'En stock'),
(5, 'Collar para Mascotas de Cuero', 'Collar de cuero para mascotas', '', 30, 34567890, NULL, NULL, NULL, NULL, NULL, 'Disponible', 'En stock');



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_provee` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int NOT NULL,
  `rut_proveedor` int NOT NULL,
  `tipo_producto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_provee`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_provee`, `nombre`, `correo`, `direccion`, `telefono`, `rut_proveedor`, `tipo_producto`) VALUES
(1, 'Supplier Name', 'supplier@gmail.com', '123 Main Street, Santiago', 978652308, 77456238, 'Alimentos'),
(2, 'cat', 'cat@gmail.com', 'av españa 156', 7896325, 72896325, 'alimento para gato'),
(3, 'pet accesorios', 'pet@gmail.com', 'calle patronato 78', 869361789, 78623589, 'accesorios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

DROP TABLE IF EXISTS `raza`;
CREATE TABLE IF NOT EXISTS `raza` (
  `id_raza` int NOT NULL AUTO_INCREMENT,
  `nombre_raza` varchar(50) NOT NULL,  `descripcion` text,
  `tipo_mascota` varchar(50) NOT NULL,  PRIMARY KEY (`id_raza`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id_raza`, `nombre_raza`, `descripcion`, `tipo_mascota`) VALUES
(1, 'Labrador Retriever', 'Una raza de perro muy amigable y activa', 'Perro'),
(2, 'Siamés', 'Una raza de gato elegante y vocal', 'Gato'),
(3, 'Dóberman', 'Una raza de perro fuerte y protector', 'Perro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_productos`
--

DROP TABLE IF EXISTS `sub_productos`;
CREATE TABLE IF NOT EXISTS `sub_productos` (
  `id_subprod` int NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) NOT NULL,
  `categoria_id` int NOT NULL,
  PRIMARY KEY (`id_subprod`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
INSERT INTO `sub_productos` (`nombre_producto`, `categoria_id`) VALUES
( 'Comida Seca para Perros', 1),
( 'Comida Húmeda para Perros', 1),
( 'Snacks para Perros', 2),
( 'Higiene para Perros', 3),
( 'Artículos de Paseo para Perros', 4),
( 'Camas para Perros', 5),
( 'Platos para Perros', 6),
( 'Vestuario para Perros', 7),
( 'Transporte para Perros', 8),
( 'Comida Seca para Gatos', 1),
( 'Comida Húmeda para Gatos', 1),
( 'Snacks para Gatos', 2),
( 'Higiene para Gatos', 3),
( 'Artículos de Paseo para Gatos', 4),
( 'Camas para Gatos', 5),
( 'Platos para Gatos', 6),
( 'Vestuario para Gatos', 7),
( 'Transporte para Gatos', 8),
( 'Snacks para Perros', 1),
( 'Snacks para Gatos', 2);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

DROP TABLE IF EXISTS `tipo_pago`;
CREATE TABLE IF NOT EXISTS `tipo_pago` (
  `id_tip_pago` int NOT NULL AUTO_INCREMENT,
  `nombre_tipo` varchar(50) NOT NULL,  PRIMARY KEY (`id_tip_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Insertar tipos de pago para clientes
INSERT INTO `tipo_pago` (`nombre_tipo`) VALUES
('Tarjeta de Crédito'),
('Tarjeta de Débito'),
('PayPal'),
('Transferencia Bancaria');


-- Insertar tipos de pago para proveedores
INSERT INTO `tipo_pago` (`nombre_tipo`) VALUES
('Transferencia Bancaria'),
('Cheque'),
('Pago en Efectivo');

-- Insertar tipos de pago para tienda
INSERT INTO `tipo_pago` (`nombre_tipo`) VALUES
('Tarjeta de Crédito'),
('Tarjeta de Débito'),
('PayPal'),
('Transferencia Bancaria');
-- --------------------------------------------------------

--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
DROP TABLE IF EXISTS `usuarios_admin`

 CREATE TABLE IF NOT EXISTS `usuarios_admin` (
  `id_usuario_admin` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL, 
  `apelido` varchar(50) NOT NULL,
   `email` varchar(50) NOT NULL, 
  `password` varchar(30) NOT NULL, -- Puedes usar un hash de contraseña seguro
  PRIMARY KEY (`id_usuario_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios_admin` (`id_usuario_admin`, `nombre`, `apellido`, `email`, ``, `fechaCaptura`) VALUES
(1, 'Nicole', 'Mallea', 'nmallea@gmail.com', 'admin', '2023-10-21'),
(2, 'Rossana', 'Mallea', 'admin@gmail.com', 'admin', '2023-10-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
create table ventas(
				id_venta int not null,
				id_cliente int,
				id_producto int,
				id_usuario int,
				precio float,
				fechaCompra date
					);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
