<?php

$notas=[]; 

    $nota = readline("Digite as notas do aluno a serem calculadas, seperadas por virgula: ");
    array_push($notas, $nota);

$media = array_sum($notas) / count($notas);


if($media >= 7){
    $situação = "Aprovado.";
} else{
    $situação = "Reprovado";
}

echo "As notas foram: " . implode($notas) . "\n";
echo "A média foi de: " . $media . "\n";
echo "O aluno está: " . $situação."\n";
