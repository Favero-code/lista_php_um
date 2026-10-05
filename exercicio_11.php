<?php

function analisarFrase($frase){

    $textoGrande = strtoupper($frase);
    $textoPequeno = strtolower($frase);

    $textoFormatado = ucwords(strtolower($frase));
    $totalCaracteres = strlen($frase);

    return [
        "maiusculo" => $textoGrande,
        "minusculo" => $textoPequeno,
        "capitalizado" => $textoFormatado,
        "quantidade" => $totalCaracteres
    ];
}

$fraseUsuario = "Olá, meu nome é Gabriel";
$resultadoFinal = analisarFrase($fraseUsuario);

echo "Texto original: $fraseUsuario <br>";
echo "Maiúsculo: " . $resultadoFinal["maiusculo"] . "<br>";
echo "Minúsculo: " . $resultadoFinal["minusculo"] . "<br>";
echo "Capitalizado: " . $resultadoFinal["capitalizado"] . "<br>";
echo "Quantidade de caracteres: " . $resultadoFinal["quantidade"] . "<br>";

?>