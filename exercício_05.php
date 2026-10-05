<?php

    function analisarTexto($texto){
    preg_match_all('/[aeiou]/i', $texto, $matches);
    

    preg_match_all('/[^aeiou0-9\s]/i', $texto, $consoantes);
    
    
    
    return[ 
        "Consoantes" => count($consoantes[0]),
        "Vogais" =>count($matches[0])
     ];

    }

    $texto = "Vamo trabalhar ou volta";
    $quantidadePalavras = str_word_count($texto);
    $quantidadeCaracteres = mb_strlen($texto, 'UTF-8');
    $quantidade = analisarTexto($texto);

  
    
    echo "FRASE: " .$texto. "<br>";
    echo "Quantidade de PALAVRAS: $quantidadePalavras <br>";
    echo " Quantidade de CARACTERES: $quantidadeCaracteres <br>";
    echo "Quantidade de VOGAIS:" . $quantidade["Vogais"] . "<br>";
    echo "Quantidade de CONSOANTES:" . $quantidade["Consoantes"] . "<br>";

?>

