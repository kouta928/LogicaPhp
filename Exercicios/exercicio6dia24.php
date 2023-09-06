<?php
/*6. Fazer um programa para ler 5 valores e, em seguida, mostrar todos os valores lidos marcando o maior, menor e o médio com os simbolos
> maior
< menor
~ médio
*/
$valores =[];

for ($i=0; $i < 5; $i++) { 
    $valor = readline("Digite o valor " . ($i + 1) . ":");
    array_push($valores, $valor);
}

$media = array_sum($valores) / count($valores);
echo "O maior valor é: " . max($valores) ."> \n";
echo "O menor valor é: " . min($valores) ."< \n";
echo "O valor médio é: " . ($media) . "~ \n" ;
?>

