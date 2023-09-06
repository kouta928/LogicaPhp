<?php
/* 9. Escreva um programa que leia numeros inteiros no intervalo [0,50] e os armazene em um vetor com 10 posições. 
Preencha um segundo vetor apenas com os números impares do primeiro vetor. 
imprima o primeiro vetor 
imprima o segundo vetor
 */

 $vetor = [];

 for ($i=0; $i < 10 ; $i++) { 
    $n = rand(0,50);
    array_push($vetor, $n);
 }

 foreach($vetor as $vet){
    if($vet % 2 != 0){
        $impares[] = $vet;
    }
}

echo "Primeiro vetor: " . implode(", ", $vetor) . "\n";
echo "Segundo vetor: " . implode(", ", $impares) . "\n";
