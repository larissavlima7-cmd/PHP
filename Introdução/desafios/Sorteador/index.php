<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Número</title>
    <style>
        <?php
            require "style.css";
        ?>
    </style>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <form>
        <button type="submit" class="btn">Sortear</button>
    </form>
    <div id="resp">
    <?php
    // Variaveis
    $quantSortear=6;//quantidade que precisa ser sorteado
    $quantsorteados=0;//quantidade que foi sorteada
    $sorteados=[];//aray para guardar os seis números sorteados

    // Usando o while, para que enquanto a quantidade que foi sorteada não atingir a quantodade que precisa ser sorteado
    while($quantsorteados<$quantSortear){
        //comando para realizar o sorteio
        $sorteio=mt_rand(1,60);
        //adiciona os números sorteados ao array
        if(!in_array($sorteio, $sorteados)){
            $sorteados[]=$sorteio;
        }
        //conforme for rodando, vai aumentando a quantidade de números que foi sorteado
        $quantsorteados++;
    }
    // Saida, visualização dos números
        echo "<strong>Números Sorteados:</strong> <br>";
        echo implode (" - ", $sorteados);
    ?>
    </div>
    
</body>
</html>