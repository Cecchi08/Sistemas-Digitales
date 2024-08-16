DROP TABLE IF EXISTS articulos;

CREATE TABLE articulos (
    codigo INTEGER,
    nombre VARCHAR(20),
    descripcion VARCHAR(30),
    precio FLOAT,
    cantidad INTEGER
);

DESCRIBE articulos;

INSERT INTO articulos (codigo, nombre, descripcion, precio, cantidad) VALUES
(1, 'impresora', 'Epson Stylus C45', 400.80, 20),
(2, 'impresora', 'Epson Stylus C85', 500.30, 30),
(3, 'monitor', 'Samsung 14"', 800.10, 10),
(4, 'teclado', 'Ingles Biswal', 100.50, 50),
(5, 'teclado', 'Español Biswal', 90.50, 90);

UPDATE articulos
SET precio = 400
WHERE descripcion = 'Epson Stylus C45';

UPDATE articulos
SET cantidad = 100
WHERE nombre = 'teclado';

UPDATE articulos
SET cantidad = 50, precio = 5550
WHERE codigo = 2;

UPDATE articulos
SET cantidad = 100
WHERE cantidad = 1000;
