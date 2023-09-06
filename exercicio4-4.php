<?php
/* 2. Faça um programa, utilizando do while, que permita o usuário fazer contas de adição enquanto quiser. */

do{
    $numero1 = readline("Digite o primeiro número a ser somado: \n");
    $numero2 = readline("Digite o segundo número a ser somado: \n");

    $soma = $numero1 + $numero2;

    echo "A soma de {$numero1} + {$numero2} = {$soma}\n";

    $decisao = readline("Gostaria de continuar a somar? sim / não: \n");

} while ($decisao == "sim" || $decisao == "Sim");

echo "Obrigado por usar nosso programa!";