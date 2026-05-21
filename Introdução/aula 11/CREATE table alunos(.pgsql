CREATE table alunos(
    id SERIAL PRIMARY KEY,
    nome TEXT NOT NULL,
    sobrenome TEXT NOT NULL,
    data_nascimento DATE,
    turma TEXT NOT NULL,
    ativo BOOLEAN NOT NULL DEFAULT TRUE
)

INSERT INTO alunos(
    nome,
    sobrenome,
    data_nascimento,
    turma)
    VALUES(
        'Larissa',
        'Vieira',
        '2008-09-22',
        'I2D35A'
    )

SELECT * from alunos