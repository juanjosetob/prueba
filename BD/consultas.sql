

-- Base de datos creada, con su respectiva tabla

CREATE DATABASE prueba_tecnica;

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    numero_documento VARCHAR(15) NOT NULL,
    primer_nombre VARCHAR(20) NOT NULL,
    segundo_nombre VARCHAR(20),
    primer_apellido VARCHAR(15) NOT NULL,
    segundo_apellido VARCHAR(15),
    telefono INT(10),
    correo VARCHAR(40),
    direccion VARCHAR(80) NOT NULL,
    edad INT NOT NULL,
    genero VARCHAR(2) NOT NULL
);

CREATE TABLE administrador(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL
    )

-- 10 Inserciones aleatorias para realizar las consultas

INSERT INTO usuarios (numero_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, telefono, correo, direccion, edad, genero)
VALUES ('1234567890', 'Juan', '', 'Pérez', '', '1234567890', 'juan.perez@gmail.com', 'Calle 123, Ciudad', 30, 'M'),
('6546567893', 'Ana', '', 'Rodrigez', '', '5498655487', 'ana.rodriguez@gmail.com', 'Calle 23#43,Medellin', 10, 'F'),
('1234789227', 'Pedro', '', 'Hernandez', '', '6587874543', 'predro.hernandez@gmail.com', 'Calle 65-23,Envigado', 20, 'M'),
('1215686786', 'Jilieta', '', 'Tobon', '', '2454888651', 'julieta.tobon@gmail.com', 'Calle 556#445,Manisales', 20, 'F'),
('2782255635', 'Viky', '', 'Machado', '', '5484166484', 'viky.machado@gmail.com', 'Calle 56-77,Medellin', 16, 'F'),
('7852136489', 'Rodrigo', '', 'Peñaranda', '', '1575345684', 'rodrigo.peña@gmail.com', 'Carrera 45#2,Monteria', 18, 'M'),
('2178881153', 'Pedro', '', 'Taborda', '', '1235468978', 'pedro.taborda@gmail.com', 'Calle 677-34,Barranquilla', 45, 'M'),
('1597534562', 'Sara', '', 'Penagos', '', '2264454548', 'sara.penagos@gmail.com', 'Calle #55-78,Bogota', 12, 'F'),
('4567892134', 'Valentina', '', 'Gomez', '', '1245482155', 'valentina.gomez@gmail.com', 'Carrera 78-67,Boyaca
', 38, 'F'),
('7981324566', 'Fabio', '', 'Pérez', '', '1554884445', 'fabio.perez@gmail.com', 'Carrera #67-77,Rio negro', 20, 'M');


-- Consulta de todos los nombre completos

SELECT primer_nombre,segundo_nombre,primer_apellido,segundo_apellido FROM usuarios; 

-- Consulta de genero femenino

SELECT genero FROM usuarios WHERE genero = 'F'; 

-- Consulta de genero femenino

SELECT genero FROM usuarios WHERE genero = 'M'; 

-- Consulta a las personas mayores de edad

SELECT * FROM personas WHERE edad >= 18;

-- Consulta el promedio de edad

SELECT AVG(edad) as edad FROM clientes;










