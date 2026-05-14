<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <style>
        /* Chamando o arquivo css para estilizar a página */
        <?php
        require "style.css"
        ?>
    </style>
</head>
<body>
    <!-- Colocando o cabeçalho da página "puxando" de outro arquivo -->
    <?php
    require "header.php";
    ?>
    <!-- Colocando a caixa de texto para receber o número que o usuário digitar -->
    <form method = "POST">
        <label>Número: </label>
        <input type="number" name="number" id="number" placeholder="escolha um número e digite aqui"><br>
        <!-- Botão para enviar o número -->
        <button type="submit" class="btn">Descubra</button>
</form>

<div id="resp">
    <?php
    // if isset para não aparecer o erro antes de digitar o número
    if(isset($_POST["number"])){
        // variaveis 
        $number=$_POST["number"];
        $ante=$number - 1;
        $suces=$number+1;

        // Visualização para o usuário do número antecessor e número sucessor
        echo "O seu número é: $number <br> O antecessor dele é: $ante <br> O sucessor dele é: $suces";
    };
    ?>
</div>
</body>
</html>