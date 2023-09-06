<?php
/*
2.Leia um vetor de 10 posições. 
Conte e escreva quantos valores pares ele possui. */

$valores = [];

for ($i=0; $i < 100; $i++) { 
    $valor = $i+1;
    array_push($valores, $valor);
}

foreach($valores as $num){
    if ($num % 2 != 0){
        echo $num . ", ";
    }
}

/* 
ou

for ($i=0; $i < 100; $i++) { 
    if($i % 2 != 0){
        echo $i . "\n";
    }
} */