<?php
/* 1. faça um algoritmo que leia um numero (alto) e depois imprima no console cada número até o intervalo informado dizendo se é par ou impar
 */

$n = readline("Digite um número maior que 15: ");

for ($i=1; $i < $n; $i++) { 
    echo $i + 1 . ", ";
    $numero = $i + 1;
    if($numero % 2 == 0){
        echo "Par ,";
    } else {
        echo "Impar ,";
    }
}
