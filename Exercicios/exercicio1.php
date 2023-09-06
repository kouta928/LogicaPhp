<?php

$mes = [
 1 => "Janeiro",
 2 => "Fevereiro",
 3 => "Março",
 4 => "Abril",
 5 => "Maio",
 6 => "Junho",
 7 => "Julho",
 8 => "Agosto",
 9 => "Setembro",
 10 => "Outubro",
 11 => "Novembro",
 12 => "Dezembro"
];

$numeroMes = readline ("Digite um número de 1 a 12\n");

if(array_key_exists($numeroMes,$mes)){
   $escolha = $mes[$numeroMes];
   echo "O mês que corresponde ao número é $escolha";
} else {
    echo "Número inválido.";
}

/*
<?php

$meses = [
1 => "Janeiro",
2 => "Fevereiro",
3 => "Março",
4 => "Abril",
5 => "Maio",
6 => "Junho",
7 => "Julho",
8 => "Agosto",
9 => "Setembro",
10 => "Outubro",
11 => "Novembro",
12 => "Dezembro"
];

$numero = readline("Digite um número entre 1 e 12: ");

if($numero > 0 && $numero < 13){
    echo $meses[$numero];
} else{
    echo "Número inválido.";
}
*/
