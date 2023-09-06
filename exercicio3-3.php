<?php
/* 1. faça um programa que leia um numero e vá realizando soma dos valores já digitados até que o total chegue em 1000
exemplo:

digitado: 10 
10 + 0 = 10

digitado: 15
10 + 15 = 25

e assim por diante..


 */
$total = 0;

while ($total < 1000) {
    echo "Digite um número: ";
    $numero = readline();

    $total += $numero;

    echo "$numero + " . ($total - $numero) . " = $total\n";
}