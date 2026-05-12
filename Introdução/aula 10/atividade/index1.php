<?php
session_start();
$_SESSION["produtoFavorito"]="Batom💄";
// var_dump($_SESSION);

// cookies
if (isset($_POST['modo'])) {
    $tema_salvo = $_POST['modo'];
    setcookie("modo", $tema_salvo, time() + 3600);
}else{
    $tema_salvo = "escuro";
    setcookie("modo", "escuro", time() + 3600);
}

// echo "Preferências Salvas!";

// var_dump($_COOKIE);
?>



