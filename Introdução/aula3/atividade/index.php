<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookEnterprise</title>
</head>
<body>
    //começando a página com o nome da empresa
    <h1>BookEnterprise</h1>
    <?php
        //variaveis com as informações sobre o livro
        $nomeLivro = "A Seleção";
        $autorLivro = "Kiera Cass";
        $genero = "Romance";
        $anoPublicacao = 2012;
        $preco = 43.85;
        $disponivel = true;

        //exibição das variaveis
        echo "O livro " . $nomeLivro . " escrito por " . $autorLivro . " do gênero " . $genero . " e lançado no ano de " . $anoPublicacao . ", com a situção de disponível " . $disponivel . " está a venda no valor de " . $preco . "."
    ?>

</body>
</html>