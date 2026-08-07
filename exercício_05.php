<?php

function analisarTexto($texto){
    $quantidadePalavras = str_word_count($texto);
    $quantidadeCaracteres = strlen($texto);
    $textoinusculo = strtoupper($texto);
    $textoMinusculo = strtolower($texto);
    
    $quantidadeVogais =0;
    $quantidadeConsoantes =0;
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    
}

