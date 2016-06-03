/* Fase 1 */

CREATE DATABASE aula;

USE aula;

CREATE TABLE IF NOT EXISTS alunos (
  id int(11) NOT NULL AUTO_INCREMENT primary key,
  nome varchar(255),
  nota int(11)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='Tabela de Alunos';

INSERT INTO alunos (nome, nota) VALUES ('Jose', 7);
INSERT INTO alunos (nome, nota) VALUES ('Maria', 8);
INSERT INTO alunos (nome, nota) VALUES ('Pedro', 4);
INSERT INTO alunos (nome, nota) VALUES ('Antonio', 10);
INSERT INTO alunos (nome, nota) VALUES ('Marcela', 6);
INSERT INTO alunos (nome, nota) VALUES ('Justino', 8);
INSERT INTO alunos (nome, nota) VALUES ('Andressa', 5);
INSERT INTO alunos (nome, nota) VALUES ('Paula', 3);
INSERT INTO alunos (nome, nota) VALUES ('Priscila', 5);
INSERT INTO alunos (nome, nota) VALUES ('Mauro', 8);
INSERT INTO alunos (nome, nota) VALUES ('Jefferson', 9);
INSERT INTO alunos (nome, nota) VALUES ('Jamille', 4);
INSERT INTO alunos (nome, nota) VALUES ('Jorge', 5);
INSERT INTO alunos (nome, nota) VALUES ('Camila', 7);
INSERT INTO alunos (nome, nota) VALUES ('Katia', 8);
INSERT INTO alunos (nome, nota) VALUES ('Melisandra', 10);
INSERT INTO alunos (nome, nota) VALUES ('Deneres', 8);
INSERT INTO alunos (nome, nota) VALUES ('Tyrion', 10);
INSERT INTO alunos (nome, nota) VALUES ('Joao', 3);
INSERT INTO alunos (nome, nota) VALUES ('Sansa', 1);