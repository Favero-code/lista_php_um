<?php

function  calcularDesconto($Valor) {

if ($Valor> 1000){
    $desconto = 0.30;
} elseif ($Valor >500){
    $desconto = 0.20;
}elseif ($Valor > 100){
    $desconto = 0.20;
}else {
    $desconto = 0;
}

$valor_desconto = $Valor * $desconto;
$valor_final = $Valor - $valor_desconto;

    return [
    "Valor_original" => $Valor,
    "Desconto" => $valor_desconto,
    "Valor_final" => $valor_final
    ];

}

$valor_usuario = 670;
$resultado = calcularDesconto($valor_usuario);

echo "Valor original: R$ " . number_format($resultado["Valor_original"], 2, ",", ".") . "<br>";
echo "Desconto aplicado: R$ " . number_format($resultado["Desconto"], 2, ",", ".") . "<br>";
echo "Valor final: R$ " . number_format($resultado["Valor_final"], 2, ",", ".") . "<br>";


?>