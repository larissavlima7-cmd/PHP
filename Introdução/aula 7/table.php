<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nome:</th>
            <th>Cargo:</th>
            <th>Salario:</th>
        </tr>
    <?php
        $funcionarios = [
            ["nome" => "Ana", "cargo" => "Analista", "salario" => 3500],
            ["nome" => "Carlos", "cargo" => "Desenvolvedor", "salario" => 54984],
            ["nome" => "Mariana", "cargo" => "Gerente", "salario" => 3877]
        ];
    
        foreach ($funcionarios as $f) {
            echo "<tr><td>" . $f["nome"] . "</td><td>" . $f["cargo"] . "</td><td>" . $f["salario"] . "</td></tr>";
        }
    ?>
    </table>
</body>
</html>