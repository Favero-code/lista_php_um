<?php

function calcularEstatisticas($lista){

    $total = array_sum($lista);
    $quantidadeItens = count($lista);
    $valorMedio = $total / $quantidadeItens;
    $maiorNumero = max($lista);
    $menorNumero = min($lista);

    $listaOrdenada = $lista;
    sort($listaOrdenada);

    $meio = floor($quantidadeItens / 2);

    if ($quantidadeItens % 2 == 0){
        $valorMediano = ($listaOrdenada[$meio - 1] + $listaOrdenada[$meio]) / 2;
    } else {
        $valorMediano = $listaOrdenada[$meio];
    }

    $totalPares = 0;
    $totalImpares = 0;

    foreach($lista as $valor){
        if ($valor % 2 == 0){
            $totalPares++;
        } else {
            $totalImpares++;
        }
    }

    return [
        "soma" => $total,
        "media" => $valorMedio,
        "maior" => $maiorNumero,
        "menor" => $menorNumero,
        "mediana" => $valorMediano,
        "pares" => $totalPares,
        "impares" => $totalImpares
    ];
}

$valores = [21, 6, 17, 10, 4, 35];

$dados = calcularEstatisticas($valores);

echo "Números: " . implode(", ", $valores) . "<br>";
echo "Soma: " . $dados["soma"] . "<br>";
echo "Média: " . $dados["media"] . "<br>";
echo "Maior valor: " . $dados["maior"] . "<br>";
echo "Menor valor: " . $dados["menor"] . "<br>";
echo "Mediana: " . $dados["mediana"] . "<br>";
echo "Quantidade de pares: " . $dados["pares"] . "<br>";
echo "Quantidade de ímpares: " . $dados["impares"] . "<br>";

?>