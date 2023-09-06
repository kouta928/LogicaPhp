
<?php
/*6. Desenvolva um vetor que armazene os valores de referencia para as medidas polegadas, km, jardas e milha.
solicite um valor de medidas em centimetros para o usuário epercorra o array fazendo a conversão destas medidas.
ex
1m = 100cm (centimetros)
1m = 1000mm (milímetros)
*/

$medidas = [
   "pol" => 0.39,
   "km" => 0.0001,
   "jardas" => 0.0109361,
   "milhas" => 0.0000062137
];

$valor = readline("Digite um numero em centimetros: ");

foreach($medidas as $unid => $conversao){
     echo "{$valor} cm em {$unid} = ".($valor * $conversao)."\n";
}