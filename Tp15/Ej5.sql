DROP TABLE IF EXISTS peliculas;

CREATE TABLE peliculas (
    codigo INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(30) NOT NULL,
    actor VARCHAR(20),
    duracion INTEGER
);

INSERT INTO peliculas (titulo, actor, duracion) VALUES ('Mision imposible', 'Tom Cruise', 120);
INSERT INTO peliculas (titulo, actor, duracion) VALUES ('Harry Potter y la piedra filosofal', 'Daniel R.', 188);
INSERT INTO peliculas (titulo, actor, duracion) VALUES ('Harry Potter y la camara secreta', 'Daniel R.', 198);
INSERT INTO peliculas (titulo, actor, duracion) VALUES ('Mision imposible 2', 'Tom Cruise', 158);
INSERT INTO peliculas (titulo, actor, duracion) VALUES ('Titanic', 'L. Di Caprio', 220);
INSERT INTO peliculas (titulo, actor, duracion) VALUES ('Mujer bonita', 'R. Gere, J. Roberts', 200);

SELECT codigo, titulo, actor, duracion FROM peliculas;

INSERT INTO peliculas (codigo, titulo, actor, duracion) VALUES (NULL, 'Elsa y Fred', 'China Zorrilla', 98);

INSERT INTO peliculas (titulo, actor, duracion) VALUES (NULL, 'Mr. Johns', NULL);

INSERT INTO peliculas (titulo, actor, duracion) VALUES ('Mr. Johns', NULL, NULL);

INSERT INTO peliculas (codigo, titulo, actor, duracion) VALUES (8, '', '', 0);

UPDATE peliculas SET duracion = 120 WHERE duracion IS NULL;

UPDATE peliculas SET actor = 'Desconocido' WHERE actor IS NULL;

SELECT * FROM peliculas;

UPDATE peliculas SET actor = 'Desconocido' WHERE actor = '';

DELETE FROM peliculas WHERE titulo = '';
