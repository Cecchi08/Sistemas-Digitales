DROP TABLE IF EXISTS medicamentos;

CREATE TABLE medicamentos (
    codigo INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre VARCHAR(20),
    laboratorio VARCHAR(20),
    precio FLOAT,
    cantidad INTEGER
);

INSERT INTO medicamentos (nombre, laboratorio, precio, cantidad) VALUES ('Sertal', 'Roche', 5.2, 100);
INSERT INTO medicamentos (nombre, laboratorio, precio, cantidad) VALUES ('Buscapina', 'Roche', 4.10, 200);
INSERT INTO medicamentos (nombre, laboratorio, precio, cantidad) VALUES ('Amoxidal 500', 'Bayer', 15.60, 100);

SELECT codigo, nombre, laboratorio, precio, cantidad FROM medicamentos;

INSERT INTO medicamentos (codigo, nombre, laboratorio, precio, cantidad) VALUES (1, 'Paracetamol 500', 'Bago', 1.90, 200);

INSERT INTO medicamentos (codigo, nombre, laboratorio, precio, cantidad) VALUES (12, 'Paracetamol 500', 'Bago', 1.90, 200);

INSERT INTO medicamentos (nombre, laboratorio, precio, cantidad) VALUES ('Bayaspirina', 'Bayer', 2.10, 150);
