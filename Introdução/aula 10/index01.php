<?php
session_start();
$_SESSION["usuario"] = "Maria";
echo "Usuário armazenado na sessão<br>";

var_dump($_SESSION);
echo"</pre>";
?>