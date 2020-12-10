DROP DATABASE IF EXISTS trabajo_web_mvc;
CREATE DATABASE IF NOT EXISTS trabajo_web_mvc DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

CREATE TABLE cliente (
    codigo VARCHAR (11),
    nombre VARCHAR (50),
    apellido VARCHAR (50),
    telefono VARCHAR (12),
    direccion VARCHAR (100),
    PRIMARY KEY (codigo)
);

CREATE TABLE categoria (
    id SMALLINT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR (50),
    PRIMARY KEY (id)
);

CREATE TABLE producto (
    id INT UNSIGNED AUTO_INCREMENT,
    nombre VARCHAR (70),
    descripcion VARCHAR (150),
    precio FLOAT (10,2),
    cantidad MEDIUMINT UNSIGNED,
    id_categoria SMALLINT UNSIGNED,
    PRIMARY KEY (id),
    FOREIGN KEY (id_categoria) REFERENCES categoria (id)
);

CREATE TABLE item_venta (
    id INT UNSIGNED AUTO_INCREMENT,
    fecha DATE,
    codigo_cliente VARCHAR(11),
    total FLOAT(10, 2),
    PRIMARY KEY(id),
    FOREIGN KEY(codigo_cliente) REFERENCES cliente(codigo)
);

CREATE TABLE item_detalle_venta (
    id INT UNSIGNED AUTO_INCREMENT,
    id_factura INT UNSIGNED,
    id_producto INT UNSIGNED,
    cantidad MEDIUMINT UNSIGNED,
    precio_venta FLOAT(10,2),
    subtotal FLOAT(10,2),
    PRIMARY KEY(id),
    FOREIGN KEY(id_factura) REFERENCES item_venta(id),
    FOREIGN KEY(id_producto) REFERENCES producto(id)
);

CREATE TABLE detalle_tmp (
    id INT UNSIGNED AUTO_INCREMENT,
    id_factura INT UNSIGNED,
    id_producto INT UNSIGNED,
    cantidad MEDIUMINT UNSIGNED,
    precio_venta FLOAT(10,2),
    subtotal FLOAT(10,2),
    PRIMARY KEY(id),
    FOREIGN KEY(id_factura) REFERENCES item_venta(id),
    FOREIGN KEY(id_producto) REFERENCES producto(id)
);

INSERT INTO categoria (nombre) VALUES 
("Verduras"), ("Frutas"), ("Tuberculos"), ("Granos"), ("Harinas");