<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookEnterprise</title>
</head>
<body>
    <h1> Dados da Empresa </h1>
    <?php
        $anoAbertura = 1987;
        $anoatual = 2026;

        $tempoEmpresa = $anoatual - $anoAbertura;

        echo "A empresa foi fundada em " . $anoAbertura . ", esse ano ela completa " . $tempoEmpresa . " anos de mercado.";
    ?>
</body>
</html>