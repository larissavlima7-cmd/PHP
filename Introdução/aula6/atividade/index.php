<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookEnterprise</title>
</head>
<body>
    <?php
    //variaveis
        $Vendas = 0;
        $MetaVenda = 25;
    //while para o controle de vendas
        while($Vendas<$MetaVenda){
            $AtingirMeta=$MetaVenda-$Vendas;
            echo "Essa é a venda de número " . $Vendas . ", faltam apenas " . $AtingirMeta . " para atingir a meta.";
        }
    //if para controle de meta atingida
        if($Vendas>=25){
            echo "Parabéns, a empresa atingiu a meta e os funcionários serão bonificados.";
        }
        else{
            echo "Continuem as vendas!";
        }
    ?>
</body>
</html>