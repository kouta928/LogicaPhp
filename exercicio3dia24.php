<?php
/*
2.Leia um vetor de 10 posições. 
Conte e escreva quantos valores pares ele possui. 
*/

$vetorA = [];

for($i = 0; $i < 10; $i++){
    $numero = readline("Digite um número: ");
    array_push($vetorA, $numero);  
 }
echo "O maior valor digitado é: " . max($vetorA) ."\n";
echo "O menor valor digitado é: " . min($vetorA) ."\n";