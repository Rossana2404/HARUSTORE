-- Active: 1696451898451@@127.0.0.1@3306@db_harustore
use db_harustore

CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY,
    nombre VARCHAR(45),
    apellido VARCHAR(45),
    direccion VARCHAR(255),
    correo VARCHAR(45),
    contrasena VARCHAR(45),
    telefono BIGINT(12),
    fecha_nacimiento DATE
);

CREATE TABLE categorias (
    id_categoria INT PRIMARY KEY,
    nombre_categoria VARCHAR(50),
    id_subcategoria INT,
    nombre_subcategoria VARCHAR(50)
);
CREATE TABLE MASCOTAS (
    id_mascota INT(5) PRIMARY KEY,
    nombre VARCHAR(100),
    edad INT(2),
    descripcion VARCHAR(150),
    imagen BLOB,
    tipo_mascota ENUM('Perro', 'Gato', 'Adopción')
);

CREATE TABLE PRODUCTO (
    idprod INT(5) PRIMARY KEY,
    nombre VARCHAR(45),
    descripcion VARCHAR(150),
    foto BLOB,
    valor INT(6),
    codigo INT(8),
    dimensiones INT(20),
    oferta INT(6),
    promocion VARCHAR(150),
    talla INT(20),
    color VARCHAR(45),
    exis_venta VARCHAR(45),
    exis_bodega VARCHAR(45)
    );

CREATE TABLE USUARIO (
        rut INT(10) PRIMARY KEY,
    nombre VARCHAR(45),
    apellido VARCHAR(45),
    correo VARCHAR(45),
    contrasena VARCHAR(45),
    tipo_permiso VARCHAR(45)
);


  
  


