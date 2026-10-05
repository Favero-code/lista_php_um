<?php

function verificarItens($lista, $itemProcurado){

    $produtoMaior = $lista[0];
    $produtoMenor = $lista[0];
    $totalValores = 0;
    $itemEncontrado = null;

    foreach($lista as $item){

        if ($item["preco"] > $produtoMaior["preco"]){
            $produtoMaior = $item;
        }

        if ($item["preco"] < $produtoMenor["preco"]){
            $produtoMenor = $item;
        }

        $totalValores += $item["preco"];

        if (strtolower($item["nome"]) == strtolower($itemProcurado)){
            $itemEncontrado = $item;
        }
    }

    $valorMedio = $totalValores / count($lista);

    return [
        "mais_caro" => $produtoMaior,
        "mais_barato" => $produtoMenor,
        "media_precos" => $valorMedio,
        "pesquisado" => $itemEncontrado
    ];
}

$listaCompras = [
    ["nome" => "Leite", "preco" => 5.50],
    ["nome" => "Pão", "preco" => 8.00],
    ["nome" => "Queijo", "preco" => 18.50],
    ["nome" => "Frango", "preco" => 25.00]
];

$resultadoFinal = verificarItens($listaCompras, "Queijo");

echo "Produto mais caro: " . $resultadoFinal["mais_caro"]["nome"] . " - R$ " . $resultadoFinal["mais_caro"]["preco"] . "<br>";
echo "Produto mais barato: " . $resultadoFinal["mais_barato"]["nome"] . " - R$ " . $resultadoFinal["mais_barato"]["preco"] . "<br>";
echo "Média dos preços: R$ " . number_format($resultadoFinal["media_precos"], 2, ",", ".") . "<br>";

if ($resultadoFinal["pesquisado"]){
    echo "Produto pesquisado encontrado: " . $resultadoFinal["pesquisado"]["nome"] . " - R$ " . $resultadoFinal["pesquisado"]["preco"] . "<br>";
} else {
    echo "Produto pesquisado não encontrado.<br>";
}

?>