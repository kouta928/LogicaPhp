<?php
/* 8. Faça um vetor com 50 posições onde cada posição deverá ser preenchido com o seguinte valor: ($i + 5 ∗ $i),
 sendo $i a posição do elemento no vetor. 
Em seguida imprima o vetor na tela
 */

 $vetor = [];

 for ($i=0; $i < 50; $i++) { 
    $valor = ($i + 5 * $i);
    $vetor[] = $valor;
 }

    echo implode(" ", $vetor);


