<?php
$numero1;
$numeros1 =[];
$numero2;
$numeros2 =[];

for ($i = 0; $i < 10; $i++){
    $numero1 = readline("Digite o número ". ($i +1). "\n");
    array_push($numeros1, $numero1);
}
for ($i = 0; $i < 10; $i++){
    $numero2 = readline("Digite o número ". ($i +1). " da segunda coluna" . "\n");
    array_push($numeros2, $numero2);
}
;

foreach($numeros as $calc){
    echo "{$calc} X {$numero2} = ".($calc * $numero2)."\n";
}