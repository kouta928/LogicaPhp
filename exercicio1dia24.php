<?php
/*
1. Faça um programa que possua um vetor denominado vetorA que armazene 6 numeros inteiros. 
O programa deve executar os seguintes passos:
(a) Atribua os seguintes valores a esse vetor: 1, 0, 5, 2, 5, 7.
(b) Armazene em uma variavel inteira (simples) a soma entre os valores das posicões [0], [1] e [5] do vetor e mostre na tela esta soma.
(c) Modifique o vetor na posição 4, atribuindo a esta posição o valor 100.
(d) Mostre na tela cada valor do vetorA, um em cada linha.
*/

$vetorA = [1,0,5,2,5,7];
$soma = $vetorA[0] + $vetorA[1] + $vetorA[5];

echo "A soma das posições 0,1 e 5: $soma\n";
$vetorA[4] = 100;

foreach($vetorA as $vetor){
    echo "$vetor\n";
}

?>
1. Faça um programa que possua um vetor denominado vetorA que armazene 6 numeros inteiros. 
O programa deve executar os seguintes passos:
(a) Atribua os seguintes valores a esse vetor: 1, 0, 5, 2, 5, 7.
(b) Armazene em uma variavel inteira (simples) a soma entre os valores das posicões [0], [1] e [5] do vetor e mostre na tela esta soma.
(c) Modifique o vetor na posição 4, atribuindo a esta posição o valor 100.
(d) Mostre na tela cada valor do vetorA, um em cada linha.