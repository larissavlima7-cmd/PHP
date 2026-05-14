CREATE table usuarios(
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100)
);

INSERT INTO usuarios (nome, email) VALUES('Larissa', 'larissa.v.lima7@aluno.senai.br');

SELECT * FROM usuarios;

INSERT INTO usuarios (nome, email) VALUES('Maria', 'maria@email.com'),('carol', 'carol@email.com'),('davi','davibrennaa@email.com');

DELETE from usuarios where id=3;

INSERT INTO usuarios(nome,email) VALUES ('Carol', 'carol@email.com');

UPDATE usuarios SET email='mariacorrea@email.com' WHERE id=2;

SELECT * from usuarios ORDER BY id;

SELECT * from usuarios ORDER BY id DESC;

ALTER TABLE usuarios ADD COLUMN telefone;