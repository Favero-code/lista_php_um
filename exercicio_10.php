<?php


function calcularMedia($notas){

            $maiorNota = max($notas);
            $menorNota = min($notas);

            $media = array_sum($notas) / count ($notas);

            if ($media >= 7){
            $situacao = "Aprovado";
            }elseif ($media >= 5 ){
            $situacao = "Recuperaçao";
            } else {
            $situacao = "Reprovado";
            }
        
        
        return[
        "maior_nota" = > $maiorNota,
        "menor_nota" = > $menorNota,
        "media" = > $media,
        "situação" = > $situacao
        ] ; 
    }

    $notas_usuario = [6.5 ,7.0, 8.9, 10.0];
    $resultado = calcularMedia($notas_usuario);


            echo "Notas: " . implode(", ", $notas_usuario) . "<br>";
            echo "Maior nota: " . $resultado["maior_nota"] . "<br>";
            echo "Menor nota: " . $resultado["menor_nota"] . "<br>";
            echo "Média: " . $resultado["media"] . "<br>";
            echo "Situação final: " . $resultado["situacao"] . "<br>";

?>