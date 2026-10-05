<?php

function verificarNumero($valor){

    if($valor % 2 == 0){
        $tipo = "par";
    }else {
        $tipo = "ímpar";
    }

    $numeroPrimo = true;

    if ($valor < 2){
        $numeroPrimo = false;
    } else {
        for ($contador = 2; $contador < $valor; $contador++){
            if ($valor % $contador == 0){
                $numeroPrimo = false;
                break;
            }
        }
    }

    $totalDivisores = 0;

    for ($contador = 1; $contador < $valor; $contador++){
        if ($valor % $contador == 0){
            $totalDivisores += $contador;
        }
    }

    $numeroPerfeito = ($totalDivisores == $valor && $valor > 0);

    return [
        "paridade" => $tipo,
        "primo" => $numeroPrimo ? "Sim" : "Não",
        "perfeito" => $numeroPerfeito ? "Sim" : "Não"
    ];
}

$valorEscolhido = 15;

$analise = verificarNumero($valorEscolhido);

echo "Número analisado: $valorEscolhido<br>";
echo "Paridade: " . $analise["paridade"] . "<br>";
echo "É primo? " . $analise["primo"] . "<br>";
echo "É perfeito? " . $analise["perfeito"] . "<br>";

?>