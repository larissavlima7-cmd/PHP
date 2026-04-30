<?php
$funcionarios = [
    ["nome" => "Ana", "cargo" => "Analista"],
    ["nome" => "Carlos", "cargo" => "Desenvolvedor"],
    ["nome" => "Mariana", "cargo" => "Gerente"]
];

foreach ($funcionarios as $f){
    echo $f["nome"] . " - " . $f["cargo"] . "<br>";
}
?>