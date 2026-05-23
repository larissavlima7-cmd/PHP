# Autoavaliação

## 1. Entendo onde os dados ficam armazenados?
Sim, os dados dos bancos ficam armazenados em arquivos e esses arquivos são salvos fisicamente em discos HDDs e SSDs.


## 2. Sei a diferença entre INSERT e SELECT?
Sim, a diferença entre o insert e o select são as funções que eles tem. O INSERT serve para inserir informações a tabela, adicionando novas linhas. Já o SELECT serve para visualizar a tabela que construímos.


## 3. Consigo explicar a estrutura da tabela?
Sim, as tabelas são estruturadas em linhas e colunas. As  colunas vão nos ajudar a identificar o tipo de dado que se trata(Nome, Cpf, Email...),elas vão ser os atributos/campos. Já as linhas vão ser as informações sobre atributo (Larissa, XXX.XXX.XXX-XX, larissa@email.com). Além disso, é necessário existir um identificador primário(ID) para que não haja confusão se duas pessoas tiverem o mesmo nome, pois cada linha será diferente uma da outra.

# Explicando o Dump
#### Primeiro criei a tabela com o comando CREATE e coloquei os atributos que vão conter nas colunas.
--- 
    CREATE table livros(
        id SERIAL PRIMARY KEY,-(identificador primário)
        nome TEXT NOT NULL,-(o titulo do livro, não aceita valores nulos)
        autor TEXT NOT NULL,-(o autor do livro, não aceita valores nulos)
        data_dev DATE, -(data de devolução do livro)
        disponivel BOOLEAN NOT NULL DEFAULT TRUE (Se não for preenchido, o valor fica verdadeiro)
    )
---
#### Inseri as informações na tabela com o comando INSERT, coloquei os dados de cada livro na ordem em que a tabela está estruturada.
---
    INSERT INTO livros(nome, autor, data_dev)VALUES(
        'O Quinze',
        'Rachel de Queiroz',
        '2026-05-25'
    ), ('Mesa para um', 'Beth OLeary', '2026-05-25');


    INSERT INTO livros(nome, autor, data_dev)VALUES(
        'Maxton Hall',
        'Mona Kasten',
        '2026-05-26'
    );
---
#### Usei o SELECT para visualizar a tabela.
---
    SELECT * FROM livros;
---
#### E deletei um livro da tabela com o comando DELETE. Com ele eliminei todas as informações do livro que estava na linha, informei o ID para ele eliminar exatamente o que eu queria.
---
    DELETE from livros where id=1;
---
