<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST"){
         $valor = $_POST["valor"] ?? 0;
    $inicio = date("m-d-Y", strtotime("-7 days"));
    $fim = date("m-d-Y");

    $inicio = date("m-d-Y", strtotime("-7 days"));
    $final = date("m-d-Y");

    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=100&$format=json&$select=cotacaoCompra';

    $dados = json_decode(file_put_contents($url), true);

    $dolar = $dados['value'][0]['cotacaoCompra'];
    $result = $valor / $dolar;

    echo "<h2>Resultado da Conversão: </h2>";
    $padrao_brasil = numfmt_create("pt_BR",NumberFormatter::CURRENCY);
    $padrao_us = numfmt_create("en_US",NumberFormatter::CURRENCY);

    echo "<p>Valor em Reais (R$): " . numfmt_format_currency($padrao_brasil, $valor, "BRL") . " </p>";

    echo "<p><strong>Valor em Dólares (US$): " . numfmt_format_currency($padrao_us, $result, "USD") . "</strong></p>";
     }
     else {
        echo "Por favor, envie um valor usando o formulário";
     }
    ?>
     <button onclick="window.location.href='index.php'">Volta ao formulario</button>
</body>
</html>