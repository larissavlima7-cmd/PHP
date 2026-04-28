<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Decisões baseadas nos dados da empresa </h1>
    <?php
        //variaveis
        $tempoEmpresa = 39;
        $funcionarios = 94;

        //Decisões com base na quantidade de funcionários
        if($funcionarios<=20){
            echo "A empresa é de pequeno porte.";
        }
        elseif($funcionarios<60){
            echo "A empresa é de médio porte.";
        }
        else{
            echo "A empresa é de grande porte.";
        }

        //Decisões com base no tempo da empresa
        if($tempoEmpresa<5){
            echo " A Empresa está iniciando.";
        }
        else{
            echo " A empresa está consolidada.";
        }
    ?>

        
</body>
</html>