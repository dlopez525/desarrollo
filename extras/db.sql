CREATE DATABASE delivery;
USE delivery;

CREATE TABLE tipo_usuario (
    id_tipoUsuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tipo_usuario VARCHAR(15) NOT NULL
)engine = InnoDB;

CREATE TABLE tipo_cuenta (
    id_tipoCuenta int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    tipo_cuenta VARCHAR(15) NOT NULL
) engine = InnoDB;

CREATE TABLE usuarios (
    id_usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(40) NOT NULL,
    password VARCHAR(25) NOT NULL,
    nombre VARCHAR(25) NOT NULL,
    apellido VARCHAR(25) NOT NULL,
    foto VARCHAR(20),
    cod_activacion VARCHAR(50),
    id_tipoUsuario int NOT NULL,
    id_tipoCuenta int NOT NULL,
    cuenta set('Disabled','Enabled') NOT NULL,
    FOREIGN KEY (id_tipoUsuario) REFERENCES tipo_usuario(id_tipoUsuario) ON UPDATE CASCADE ON DELETE NO ACTION,
    FOREIGN KEY (id_tipoCuenta) REFERENCES tipo_cuenta(id_tipoCuenta) ON UPDATE CASCADE ON DELETE NO ACTION
) engine = InnoDB;

CREATE TABLE productos (
    id_producto int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    producto VARCHAR(20) NOT NULL,
    categoria VARCHAR(20) NOT NULL,
    stock NUMERIC NOT NULL,
    precio DECIMAL(5,2) NOT NULL,
    imagen VARCHAR(20) NOT NULL
)engine = InnoDB;

CREATE TABLE detalle_pedido (
    id_detallePedido int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_producto int NOT NULL,
    id_usuario int NOT NULL,
    cantidad NUMERIC NOT NULL,
    fecha DATETIME NOT NULL,
    total DECIMAL(4,2) NOT NULL,
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto) ON UPDATE NO ACTION ON DELETE NO ACTION,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE NO ACTION ON DELETE NO ACTION
) engine = InnoDB;

CREATE TABLE menu (
    id_menu int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    menu VARCHAR(20) NULL,
    precio DECIMAL(5,2) NULL,
    imagen VARCHAR(20) NULL
) engine = InnoDB;

CREATE TABLE detalle_menu (
    id_detalleMenu int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_menu int NOT NULL,
    id_usuario int NOT NULL,
    fecha DATETIME NOT NULL,
    total DECIMAL(4,2) NOT NULL,
    FOREIGN KEY (id_menu) REFERENCES menu(id_menu) ON UPDATE NO ACTION ON DELETE NO ACTION,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario) ON UPDATE NO ACTION ON DELETE NO ACTION
);



INSERT INTO `tipo_usuario` (`id_tipoUsuario`, `tipo_usuario`) VALUES ('1', 'admin');
INSERT INTO `tipo_usuario` (`id_tipoUsuario`, `tipo_usuario`) VALUES ('2', 'usuario');

INSERT INTO `tipo_cuenta` (`id_tipoCuenta`, `tipo_cuenta`) VALUES ('1', 'normal');
INSERT INTO `tipo_cuenta` (`id_tipoCuenta`, `tipo_cuenta`) VALUES ('2', 'vip');