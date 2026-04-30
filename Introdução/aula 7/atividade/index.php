<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produtos de Beleza 💄</h1>
    <table border=2>
        <tr>
            <th>Nome:</th>
            <th>Preço:</th>
        </tr>
        <?php
            $produtos=[
                ["nome"=>"Batom","preco"=>61],
                ["nome"=>"Pó Translúcido", "preco"=>36],
                ["nome"=> "Mascara de Cílios", "preco"=>57]
            ];
            foreach ($produtos as $p){
                echo "<tr><td>" . $p["nome"] . "<td>" . $p["preco"] . "</td></tr>";
            }   
        ?>
    </table>
</body>
</html>