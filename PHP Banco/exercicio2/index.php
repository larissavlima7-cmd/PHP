<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste</title>
    <style>
        <?php
            include "style.css";
        ?>
    </style>
</head>
<body>
    <?php
        include "header.php";
    ?>
    <form method="POST">
    <label>Salário: </label>
    <input type="number" id="salario" name="salario">
    <label>Reajuste: <span id="valor-tela">0</span>%</label>
    <input type="range" id="reajuste" name="reajuste" min="0" max="100" value="0" oninput= "document.getElementById('valor-tela').textContent = this.value">
    <button type="submit" class="btn">Calcular Reajuste</button>
</form>
    <div id="resp">
        <?php
        if(isset($_POST["salario"], $_POST["reajuste"])){
            $salario=$_POST["salario"];
            $reajuste=$_POST["reajuste"];

            $valor_aumento = $salario * ($reajuste / 100);
            $novo_salario = $salario + $valor_aumento;

            echo "<strong>O seu salário era de $salario reais.";
            echo "<br>O valor do seu reajuste é $reajuste %";
            echo "<br>Seu novo salário será $novo_salario reais.</strong>";
        }
        ?>

    </div>
</body>
</html>