<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação dos Produtos</title>
    <style>
       body{
            background-color: #b466a1;
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
            padding: 20px;
        }

        form{
            background-color: rgba(255, 255, 255, 0.2);
            padding: 30px;
            border-radius: 20px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: none;
            margin: 10px 0;
            box-sizing: border-box;
        }

        .btn{
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #7d3c6d;
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 20px;
        }

        
        #resp{
            margin-top: 25px;
            padding: 20px;
            border-radius: 15px;
            background-color: #e7a7cf;
            color: #4b2341;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
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

        <!-- Botão de enviar -->
        <button type="submit" class="btn">Enviar Avaliação</button>
        <br><hr>       
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