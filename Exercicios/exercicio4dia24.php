<?php
/*4. faça um vetor que armazene numeros sequenciais entre 01 e 60
de posse do vetor execute um sorteio que deverá apresentar 6 posições sorteadas aleatoreamente. 
Dica: utilize a função rand(inicio, fim)
o resultado deverá ser apresentado como ex: 08 10 34 19 60 07
deverá ter um zero a esquerda para numeros menores que 10.*/

$vetorA = [];

for ($i=1; $i < 60; $i++) { 
    array_push($vetorA, $i);
}

$sorteados =[];
for ($i=0; $i < 6; $i++) { 
    $sorteio = rand(0,59);
    array_push($sorteados, $sorteio);
}

echo implode(" ", $sorteados);


//str_pad($i, 1, '0', STR_PAD_LEFT)

