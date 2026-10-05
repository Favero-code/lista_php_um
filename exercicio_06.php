<?php

function transformarTemperatura($valor, $escalaInicial, $escalaFinal)
{
    switch ($escalaInicial) {

        case "celsius":
            $celsiusAtual = $valor;
            break;

        case "fahrenheit":
            $celsiusAtual = ($valor - 32) * 5 / 9;
            break;

        case "kelvin":
            $celsiusAtual = $valor - 273.15;
            break;

        default:
            return "Escala de origem inválida!";
    }

    switch ($escalaFinal) {

        case "celsius":
            $temperaturaFinal = $celsiusAtual;
            break;

        case "fahrenheit":
            $temperaturaFinal = ($celsiusAtual * 9 / 5) + 32;
            break;

        case "kelvin":
            $temperaturaFinal = $celsiusAtual + 273.15;
            break;

        default:
            return "Escala de destino inválida!";
    }

    return $temperaturaFinal;
}

$temperatura = 450;
$escalaOrigem = "kelvin";
$escalaDestino = "celsius";

echo "$temperatura graus $escalaOrigem convertido vira ";
echo transformarTemperatura($temperatura, $escalaOrigem, $escalaDestino);
echo " graus $escalaDestino <br>";

?>