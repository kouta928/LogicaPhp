<?php

require 'funcaobanco.php';

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
        'saldo' => 850
    ]
]; 

$ctcorrente = readline("Qual o cpf da sua conta? \n");
$opcaoSaque = readline("Gostaria de efetuar um saque?\n ");

if($opcaoSaque == "sim" || $opcaoSaque == "Sim"){

    $saque = readline("Quanto gostaria de sacar? \n"); 
    $contasCorrentes[$ctcorrente] = sacar($contasCorrentes[$ctcorrente],$saque);
} 

$opcaoDeposito = readline("Gostaria de efetuar um depósito?\n ");

if($opcaoDeposito == "sim" || $opcaoDeposito == "Sim"){

    $deposito = readline("Quanto gostaria de depositar? \n"); 
    $contasCorrentes[$ctcorrente] = deposito($contasCorrentes[$ctcorrente],$deposito);
} 

$checarSaldo = readline("Checar saldo?(sim / não): \n");

if($checarSaldo == "sim" || $checarSaldo == "Sim"){
    echo "CPF: ". $ctcorrente . "\n";
    echo "Titular: ".$contasCorrentes["$ctcorrente"]['titular']."\n";
    echo "Saldo: R$".$contasCorrentes["$ctcorrente"]["saldo"]."\n";
} else {
    echo "Obrigado e volte sempre.";
}