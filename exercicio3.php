
<?php

$numero;
$numeros =[];

for ($i = 0; $i < 10; $i++){
    //solicitar numero
    $numero = readline("Digite um número: ");
    //armazenar numero no vetor
    array_push($numeros, $numero);
}

$calculo = readline("Informe um número para o calculo: ");

foreach($numeros as $calc){
    //executar o calculo ao percorrer o array
    echo "{$calc} X {$calculo} = ".($calc * $calculo)."\n";
}

/*
<?php
$numeros = [];

for ($i = 0; $i < 10; $i++) {
    echo "Digite um número" . ($i + 1) . ": ";
    $digitado = readline();
    $numeros[] = (float) $digitado; 
}

$resultado = 1;

foreach ($numeros as $numero) {
    $resultado *= $numero;
}

echo "Resultado da multiplicação de todos os números: " . $resultado;

*/
