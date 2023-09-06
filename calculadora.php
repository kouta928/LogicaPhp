<?php

function soma($numero1, $numero2){
    return $numero1 + $numero2;
}
function sub($numero1, $numero2){
    return $numero1 - $numero2;
}
function mult($numero1, $numero2){
    return $numero1 * $numero2;
}
function div($numero1, $numero2){
    return $numero1 / $numero2;
}

$numero1 = readline("Digite o primeiro número: ");
$numero2 = readline("Digite o segundo número: ");

$escolha = readline("Qual operação gostaria de fazer?\n1- Soma\n2- Subtração\n3- Multiplicação\n4- Divisão\n Digite o número: ");

switch ($escolha) {
    case 1:
        echo "Resultado: ".soma($numero1,$numero2);
        break;
    
    case 2:
        echo "Resultado: ".sub($numero1,$numero2);
        break;
    case 3:
        echo "Resultado: ".mult($numero1,$numero2);
        break;
    case 4:
        echo "Resultado: ".div($numero1,$numero2);
        break;
}
