<?php

echo "Digite 10 números começando por \n ";
for ($i=0; $i < 10; $i++) { 
    $valor = readline("Número " . $i + 1 .": \n");

    if($valor % 2 == 0){
        $pares[] = $valor;
    } elseif($valor % 2 != 0) {
        $impares[] = $valor;
    }
}

echo "Os valores pares: " . implode(",",$pares) . "\n";
echo "A soma dos valores pares: " . array_sum($pares) . "\n";
echo "Os valores impares: " . implode(",",$impares) . "\n";
echo "A soma dos valores impares: " . array_sum($impares) . "\n";