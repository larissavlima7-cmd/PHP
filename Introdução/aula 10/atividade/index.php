<?php
require_once "index1.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <style>
    body.claro {
        background-color: #ffffff;
        color: #000000;
    }
    body.escuro {
        background-color: #121212;
        color: #ffffff;
    }
    h1{
        background-color: #6b6868;
        border-radius: 12px;
        padding: 10px;
    }
</style>
</head>
<body class="<?php echo $tema_salvo; ?>">
    <form method="POST">
    <label>Modo: </label>
    <input type="radio" id="claro" name="modo" value="claro" onchange="this.form.submit()" <?php if($tema_salvo == 'claro') echo 'checked'; ?>>
    <label for="claro">Claro</label>
    <input type="radio" id="escuro" name="modo" value="escuro" onchange="this.form.submit()" <?php if($tema_salvo == 'escuro') echo 'checked'; ?>>
    <label for="escuro">Escuro</label>
    </form>
<?php
require "header.php";


echo "O produto favorito até o momento é: " . $_SESSION["produtoFavorito"];

require "footer.php";

?>
    
</body>
</html>
