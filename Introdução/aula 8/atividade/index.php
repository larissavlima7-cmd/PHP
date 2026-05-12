<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Aba com o uso de Funções</h1>
    <?php
    //array para guardar as informações de vários produtos
    $produtos=[
            ["nome"=>"Batom","preco"=>61],
            ["nome"=>"Pó Translúcido", "preco"=>36],
            ["nome"=> "Mascara de Cílios", "preco"=>57]
        ];
    //variavel que guarda o nome da empresa
    $nomeEmpresa="BeautyMake";
    $anoatual= 2026;
    $anofundacao = 1976;
    
    //Função para exibir os produtos da empresa
    function visualizarProdutos($nomeEmpresa,$produtos){
        //exibe apenas a linha
        echo "Esses são os produtos da empresa: $nomeEmpresa<br>";
        //"puxa" as informações do array e exibe
        foreach ($produtos as $p){
            echo "<tr><td>" . $p["nome"] . ": " . "</td><td>" . $p["preco"] . " reais" . "</td></tr><br>";
        } 
    }
    //Retorno da função, aqui que faz com que ela execute
    visualizarProdutos($nomeEmpresa,$produtos);

    function anoMercado($anoatual,$anofundacao){
        $tempoMercado = $anoatual - $anofundacao;
        echo "<br>A empresa está presente no mercado há $tempoMercado anos!!";
    }

    anoMercado($anoatual,$anofundacao);

    ?>
</body>
</html>