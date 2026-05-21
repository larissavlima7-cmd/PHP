CREATE table livros(
    id SERIAL PRIMARY KEY,
    nome TEXT NOT NULL,
    autor TEXT NOT NULL,
    data_dev DATE,
    disponivel BOOLEAN NOT NULL DEFAULT TRUE
)

INSERT INTO livros(nome, autor, data_dev)VALUES(
    'O Quinze',
    'Rachel de Queiroz',
    '2026-05-25'
), ('Mesa para um', 'Beth OLeary', '2026-05-25');

SELECT * FROM livros;

INSERT INTO livros(nome, autor, data_dev)VALUES(
    'Maxton Hall',
    'Mona Kasten',
    '2026-05-26'
);

SELECT * FROM livros;

DELETE from livros where id=1;

SELECT * FROM livros;