<?php

function codificarTexto($mensagem, $passos){
    return aplicarCifra($mensagem, $passos);
}

function decodificarTexto($mensagemCodificada, $passos){
    return aplicarCifra($mensagemCodificada, -$passos);
}

function aplicarCifra($mensagem, $passos){

    $textoFinal = "";

    for ($contador = 0; $contador < strlen($mensagem); $contador++){

        $letra = $mensagem[$contador];

        if (ctype_upper($letra)){

            $numeroLetra = (ord($letra) - ord('A') + $passos) % 26;
            $numeroLetra = ($numeroLetra + 26) % 26;

            $textoFinal .= chr($numeroLetra + ord('A'));

        } elseif (ctype_lower($letra)){

            $numeroLetra = (ord($letra) - ord('a') + $passos) % 26;
            $numeroLetra = ($numeroLetra + 26) % 26;

            $textoFinal .= chr($numeroLetra + ord('a'));

        } else {
            $textoFinal .= $letra;
        }
    }

    return $textoFinal;
}

$fraseOriginal = "Amanhã será um dia melhor";
$quantidadePassos = 4;

echo "Mensagem original: $fraseOriginal <br>";

$textoCodificado = codificarTexto($fraseOriginal, $quantidadePassos);
echo "Mensagem criptografada: $textoCodificado <br>";

$textoRecuperado = decodificarTexto($textoCodificado, $quantidadePassos);
echo "Mensagem descriptografada: $textoRecuperado <br>";

?>