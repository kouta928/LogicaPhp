<?php
/*
2.Leia um vetor de 10 posições. 
Conte e escreva quantos valores pares ele possui. */
$vetorA =[];

for ($i=0; $i < 10 ; $i++) { 
    $vetorA[$i] = rand(10, 100);
}

$contador = 0;

foreach($vetorA as $vetor){
    if($vetor % 2 == 0){
    $contador++;
}
}

print_r($vetorA);
echo "A quantidade de valores pares: $contador\n";