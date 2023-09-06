<?php

$contasCorrentes = [
    "123.456.789-10" => [
        'titular' => 'Maria',
        'saldo' => 1000
    ],
    "123.456.789-20" => [
        'titular' => 'João',
        'saldo' => 200
    ],
    "123.456.789-30" => [
        'titular' => 'Carlos',
        'saldo' => 350
    ]
]; 

$ctcorrente = readline("Qual o cpf da sua conta? \n");
$opcaoSaque = readline("Gostaria de efetuar um saque?\n ");

if($opcaoSaque == "sim" || $opcaoSaque == "Sim"){

    $saque = readline("Quanto gostaria de sacar? \n"); 

    if($saque <= $contasCorrentes["$ctcorrente"]["saldo"]){
        echo "Você sacou R$:$saque \n";
        $contasCorrentes["$ctcorrente"]["saldo"] -= $saque;;
    } elseif ($saque > $contasCorrentes["123.456.789-40"]["saldo"]){
        echo "Você não pode sacar este valor \n";
    } 
} 

$checarSaldo = readline("Checar saldo?(sim / não): \n");

if($checarSaldo == "sim" || $checarSaldo == "Sim"){
    echo "CPF: ". $ctcorrente . "\n";
    echo "Titular: ".$contasCorrentes["$ctcorrente"]['titular']."\n";
    echo "Saldo: R$".$contasCorrentes["$ctcorrente"]["saldo"]."\n";
} else {
    echo "Obrigado e volte sempre.";
}

/*     foreach ($contasCorrentes as $cpf => $conta) {
        echo "CPF: " . " ". $cpf . "\n";
        echo "Titular: " . $conta['titular'] . "\n";
        echo "Saldo disponível: " . $conta['saldo'] . "\n";
        echo "\n";
    }
 */
