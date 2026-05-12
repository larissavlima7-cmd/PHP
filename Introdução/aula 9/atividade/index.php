<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação dos Produtos</title>
    <style>
        /* CONFIGURAÇÃO GERAL */
        body {
            background-color: #b466a1;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
            padding: 20px;
        }

        h1 { text-shadow: 2px 2px 4px rgba(0,0,0,0.2); }

        /* FORMULÁRIO */
        form {
            background-color: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 20px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        label { font-weight: bold; display: block; margin-top: 10px; }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        hr { border: 0; height: 1px; background: rgba(255,255,255,0.3); margin: 20px 0; }

        /* GRUPO DE PRODUTOS (RADIOS) */
        .radio-group { margin: 10px 0; }
        .radio-group label { display: inline-block; margin-right: 15px; font-weight: normal; cursor: pointer; }

        /* SISTEMA DE ESTRELAS */
        .rating-container {
            display: flex;
            flex-direction: row-reverse;
            justify-content: flex-end;
            gap: 5px;
        }

        .rating-container input { display: none; }

        .rating-container label {
            font-size: 2.5rem;
            color: #fce4ec; /* Estrela vazia */
            cursor: pointer;
            transition: color 0.2s, transform 0.2s;
            margin: 0;
        }

        .rating-container label::before { content: '\2605'; }

        /* Efeito de preenchimento e hover */
        .rating-container input:checked ~ label,
        .rating-container label:hover,
        .rating-container label:hover ~ label {
            color: #ffca08;
            transform: scale(1.1);
        }

        /* O BOTÃO (ESTILIZADO) */
        #btn {
            display: block;
            width: 100%;
            padding: 15px;
            margin-top: 25px;
            background-color: #7d3c6d; /* Roxo elegante */
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        #btn:hover {
            background-color: #5a2b4e;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        /* CAIXA DE RESPOSTA */
        #resp {
            margin-top: 30px;
            background-color: #e7a7cf;
            color: #4b2341;
            padding: 25px;
            border-radius: 15px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            animation: slideUp 0.4s ease-out;
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }


    </style>
</head>
<body>
    <h1>Feedback sobre os Produtos</h1>
    <!-- Iniciando o formulário com o método POST -->
    <form method="POST">
        <!-- Itens do formulário -->
        <label>Seu nome: </label>
        <input type="text" name="name" id="name">

        <label><br><hr>Email: </label>
        <input type="email" name="email" id="email" placeholder="Atente-se ao padrão: email@dominio.com">

        <label><br><hr>Produto a ser avaliado: </label>
        <!-- opções de qual produto vai ser avaliado, usando o radio -->
            <input type="radio" id="pó" name="produto" value="pó">
            <label for="pó">Pó Translúcido</label>

            <input type="radio" id="batom" name="produto" value="batom">
            <label for="batom">Batom</label>

             <input type="radio" id="rimel" name="produto" value="rimel">
            <label for="rimel">Máscara de Cílios </label>

        <!-- Avaliação usando as estrelas com a ajuda do checkbox -->
        <label><br><hr>Avaliação: </label>
        <div id="stars">
        <input type="checkbox" id="star1" name="star[]" value="1 Estrela">
        <input type="checkbox" id="star2" name="star[]" value="2 Estrelas">
        <input type="checkbox" id="star3" name="star[]" value="3 Estrelas">
        <input type="checkbox" id="star4" name="star[]" value="4 Estrelas">
        <input type="checkbox" id="star5" name="star[]" value="5 Estrelas">
        </div>
        <br><hr>

        <!-- Desrição sobre o produto -->
        <label>Escreva sua opinião sobre o produto: <br></label>
        <input type="text" placeholder="Digite sua opinião sobre o arquivo aqui" id="msg" name="msg">
        <br><hr><br>

        <div id="btn">
            <!-- Botão de enviar -->
            <input type="submit" id="btn" value="Enviar">
            <br><hr>
        </div>
        
    </form>
    <div id="resp">
    <?php
    if(isset($_POST["name"],$_POST["email"],$_POST["produto"],$_POST["star"],$_POST["msg"])){
        $nome = $_POST["name"];
        $email = $_POST["email"];
        $nomeProduto = $_POST["produto"];
        $star = $_POST["star"];
        $starExibido = count($star);
        $msg = $_POST["msg"];

        echo "Mensagem enviada com sucesso!<br><br>";
        echo "Nome informado: $nome<br>";
        echo "E-mail informado: $email <br>";
        echo "Produto escolhido: $nomeProduto <br>";
        echo "Avaliação: $starExibido Estrelas <br>";
        echo "Feedback sobre o produto: $msg <br>";
        }
    ?>
    </div>

</body>
</html>