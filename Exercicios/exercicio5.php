<?php
$produtos = [];
$produtos;
$valorUnitario;
$quantidade = 0;
$valorTotal = 0;

for($i = 0; $i < 3; $i++){

    $produto = readline("Nome do produto: ");
    $valorUnitario = readline("Valor: ");
    $quantidade = ("Quantidade: ");

    array_push($produtos, [
        "produto" => $produto,
        "quantidade" => $quantidade,
        "valor" => $valorUnitario
    ]);
}

//listar produtos do vetor

foreach($produtos as $carrinho){
    echo "Produto: {$carrinho["produto"]}";
    echo "Valor Unit.: {$carrinho["valor"]}";
    echo "Quantidade: {$carrinho["quantidade"]}";
    echo "Total R$ ".($carrinho["valor"] * $carrinho["quantidade"])." \n";
}