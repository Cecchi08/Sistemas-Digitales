DROP TABLE IF EXISTS alumnos;

CREATE TABLE alumnos (
    legajo VARCHAR(4) NOT NULL,
    documento VARCHAR(8) NOT NULL,
    apellido VARCHAR(30),
    nombre VARCHAR(30),
    domicilio VARCHAR(30),
    PRIMARY KEY (legajo)
);

INSERT INTO alumnos (legajo, documento, apellido, nombre, domicilio) VALUES
('A233', '22345345', 'Perez', 'Mariana', 'Colon 234'),
('A567', '23545345', 'Morales', 'Marcos', 'Avellaneda 348'),
('B654', '24356345', 'Gonzalez', 'Analia', 'Caseros 444'),
('A642', '20254125', 'Torres', 'Ramiro', 'Dinamarca 209'),
('B509', '20445778', 'Miranda', 'Carmen', 'Uspallata 999'),
('C777', '28111444', 'Figueroa', 'Natalia', 'Sarmiento 856');

SELECT * FROM alumnos;

('D890', '21457896', 'Perez', 'Mariana', 'Las Heras 123'),
('E123', '26547896', 'Torres', 'Ramiro', 'Belgrano 456');

INSERT INTO alumnos (legajo, documento, apellido, nombre, domicilio) VALUES
('A233', '29999999', 'Gomez', 'Julian', 'San Martin 101');
