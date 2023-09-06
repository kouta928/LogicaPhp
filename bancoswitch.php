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
        'saldo' => 850
    ]
]; 

require 'funcaobanco.php';

do {
    $ctcorrente = readline("Qual o CPF da sua conta? (ou 'sair' para encerrar)\n");
    if ($ctcorrente == 'sair') {
        break;
    }
    
    if (!isset($contasCorrentes[$ctcorrente])) {
        echo "CPF não encontrado\n";
        continue;
    }

    $decide = 1;
    while ($decide > 0) {
        $escolha = readline("Qual operação gostaria de fazer?\n1- Saque\n2- Depósito\n3- Extrato\n\nDigite o número: ");
        
        switch ($escolha) {
            case 1:
                $saque = readline("Quanto gostaria de sacar? \n"); 
                $contasCorrentes[$ctcorrente] = sacar($contasCorrentes[$ctcorrente], $saque);
                $decide = 0;
                break;
            
            case 2:
                $deposito = readline("Quanto gostaria de depositar? \n"); 
                $contasCorrentes[$ctcorrente] = deposito($contasCorrentes[$ctcorrente], $deposito);
                $decide = 0;
                break;

            case 3:
                echo "CPF: " . $ctcorrente . "\n";
                echo "Titular: " . $contasCorrentes[$ctcorrente]['titular'] . "\n";
                echo "Saldo: R$" . $contasCorrentes[$ctcorrente]["saldo"] . "\n";
                $decide = 0;
                break;             
               
            default:
                echo "Opção inválida. Tente novamente.\n";
                break;
        }
    }
} while (true);