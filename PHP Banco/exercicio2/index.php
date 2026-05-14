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
    <input type="number" id="salario">
    <input type="range" id="reajuste">
    <button type="submit" class="btn">Calcular Reajuste</button>
</form>
    <?php
    if(isset($_POST["salario"], $POST["reajuste"])){
        $salario=$_POST["salario"];
        $reajuste=$POST["reajuste"];
    }

    ?>
</body>
</html>