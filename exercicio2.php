<?php

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    echo "Digite uma sequencia de números, um a um " . ($i + 1) . ": ";
    $digitados = readline();
    $numeros[] = (float) $digitados;
}

$numerosContrario = array_reverse($numeros);
    echo "Ordem contrária: ";
foreach ($numerosContrario as $numeros) {
    echo $numeros . " ";
}


/*
<?php

$numero; //numero digitado

$numeros = []; //vetor de numeros

for($i = 0; $i < 10; $i++){
    //pedir numero para usuario
    $numero = readline("Informe um número: ");
    //lançar numero no vetor
    array_push($numeros, $numero);
}

print_r($numeros);

$novoArray = array_reverse($numeros);

print_r($novoArray);
*/