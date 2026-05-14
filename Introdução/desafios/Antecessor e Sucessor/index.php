<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <style>
        <?php
        require "style.css"
        ?>
    </style>
</head>
<body>
    <?php
    require "header.php";
    ?>
    <form method = "POST">
        <label>Número: </label>
        <input type="number" name="number" id="number" placeholder="escolha um número e digite aqui"><br>
        <button type="submit" class="btn">Descubra</button>
</form>

<div id="resp">
    <?php
    if(isset($_POST["number"])){
        $number=$_POST["number"];
        $ante=$number - 1;
        $suces=$number+1;
    
        echo "O seu número é: $number <br> O antecessor dele é: $ante <br> O sucessor dele é: $suces";
    };
    ?>
</div>
</body>
</html>