CREATE DATABASE cruddavid;

use cruddavid; 

CREATE TABLE artistas(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  genero VARCHAR (100) NOT NULL,
  descripcion text
);

INSERT INTO `artistas` ( `nombre`, `genero`, `descripcion`) VALUES ('NEFFEX', 'Hip hop, Rap', 'Proyecto musical estadounidense de Bryce Savage. tiene remixes y canciones originales caracterizadas por una mezcla de géneros electrónica y rap.'),
('Trap Nation','Trap','es un canal y sello discográfico en línea que se centra en la promoción y difusión de música trap, un género musical popular caracterizado por sus ritmos intensos y bajos prominentes.'),
('Anuel AA','	Reggaetón, trap, Latin urban','es un talentoso cantante y compositor puertorriqueño que ha dejado una marca significativa en la música urbana con su estilo distintivo y sus letras impactantes. Su capacidad para fusionar géneros y conectar con el público lo ha convertido en uno de los artistas más influyentes de la música latina en la actualidad.'),
('Mike Towers ','Reguetón, Trap','es un talentoso cantante y compositor puertorriqueño conocido por su estilo auténtico y letras impactantes. Su versatilidad junto con su habilidad para contar historias, lo han convertido en una figura relevante en la música urbana actual.'),
('Chencho Corleone','reggaetón,trap, urbana. ','Cantante, compositor y productor puertorriqueño, conocido por ser parte del dúo de reggaetón Plan B. Su estilo versátil y sus éxitos en la música urbana lo han posicionado como una figura destacada en la industria musical latina.');