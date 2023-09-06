
<?php
$vetor1 = [];
$vetor2 =[];
$numero;

for($i = 0; $i < 10; $i++){
   $numero = readline("Digite o número da primeira coluna: ");
   array_push($vetor1, $numero);  
}
for($i = 0; $i < 10; $i++){
   $numero = readline("Digite o número da segunda coluna: ");
   array_push($vetor2, $numero);  
}
//listar os dados multiplicados
//index => valor
foreach($vetor1 as $index => $multiplica){
    echo "{$multiplica} X {$vetor2[$index]} = ".($multiplica * $vetor2[$index])."\n";
}
