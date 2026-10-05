<?php 

function organizarPessoas($lista){

    $nomes = explode(",", $lista);
    $nomes = array_map("trim", $nomes);
    sort($nomes);

    return $nomes;
}

$listaPessoas = "Carlos, Beatriz, Lucas, Mariana";

echo "Lista original: $listaPessoas <br>";

$pessoasOrdenadas = organizarPessoas($listaPessoas);

echo "Lista organizada: <br>";

foreach ($pessoasOrdenadas as $pessoa){
    echo " - $pessoa <br>";
}

?>