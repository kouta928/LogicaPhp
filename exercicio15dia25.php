<?php
/* 15. Crie um programa onde você irá cadastrar os seus familiares com nome e idade de cada um, considere cadastrar crianças, jovens, adultos e idosos.
Você precisará identificar o valor a ser pago por um plano de saúde dada a idade do familiar. Considere que todos pagam R$ 100 no plano, mais um adicional conforme a seguinte tabela: 
> crianças com menos de 10 anos pagam + R$80; 
> conveniados com idade entre 10 e 30 anos pagam + R$50; 
> conveniados com idade entre 40 e 60 anos pagam + R$ 95;
> conveniados com mais de 60 anos pagam + R$130.
 */

$cadastro =[];
$taxa = 100;

for ($i=0; $i < 3; $i++) { 
    $paciente = readline("Digite o nome do paciente: ");
    $idade = readline("Digite a idade do paciente: ");
    $cadastro[] =[
        "paciente" => $paciente,
        "idade" => $idade
    ];
}

foreach($cadastro as $paciente){
    if($paciente["idade"] <= 10){
        echo "O preço da mensalidade para crianças com menos de 10 anos será de R$".$taxa + 80;
    } elseif ($paciente["idade"] > 10 && $paciente["idade"] < 40){
        echo "O preço da mensalidade para pacientes de 10 a 30 será de R$".$taxa + 50;
    } elseif ($paciente["idade"] >= 40 && $paciente["idade"] < 60){
        echo "O preço da mensalidade para adultos de 40 a 60 anos será de R$".$taxa + 95;
    } elseif ($paciente["idade"] >= 60){ 
        echo "O preço da mensalidade para idosos será de R$".$taxa + 130;
    }
}


