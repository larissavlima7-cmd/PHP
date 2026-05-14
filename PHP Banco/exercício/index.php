<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <style>
        /* importando o css do arquivo style */
        <?php
        require "style.css";
        ?>
    </style>
</head>
<body>
    <?php
    // "puxando" o cabeçalho do arquivo header
    include "header.php";
    ?>
    <!-- formulário para enviar o valor do salario -->
    <form method="POST">
        <label>Salário: </label>
        <input type="number" name="salario" id="salario" placeholder="Digite seu salário">
        <!-- botão para enviar -->
        <button type="submit" class="btn">Calcular</button>
    </form>
    <div id="resp">
    <?php
    //não mostra o erro inicial antes de digitar
        if(isset($_POST["salario"])){
            // variaveis
            $salario=$_POST["salario"];
            $salariomin=1621;
            $quantmin=floor($salario/$salariomin);
            $sobra=$salario%$salariomin;
        //saida, as visualizações do processamento
        echo"O salário mínimo é igual a: <strong>$salariomin</strong><br>";
        echo "O seu salário é: <strong>$salario</strong> <br>Ele equivale a <strong>$quantmin </strong> salários minímos <br> E sobra um total de:<strong> $sobra</strong>";
        }
    ?>
    </div>

    
</body>
</html>