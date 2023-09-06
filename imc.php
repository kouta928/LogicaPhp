<?php

$peso = readline("Digite o peso(ex.: 75):Kg \n");
$altura = readline("Digite a altura(ex.: 1.75):Metros \n");
$altura2 = $altura * $altura;
$imc = $peso / $altura2;


echo "O IMC é de: " . $imc. "\n";
if($imc < 18.5){
    echo "Está abaixo";
} elseif($imc < 25){
    echo "Está dentro";
} else{
    echo "Está acima";
}
echo " do recomendado!";
