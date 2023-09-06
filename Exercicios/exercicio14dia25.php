<?php
/* 14. Crie um algoritmo de mercado online onde você deverá cadastrar 10 itens com seus respectivos valores.
- realizar uma operação de compra onde o usuário realizará a compra de um item, buscando pelo nome, e se encontrado o item, adicionará ao carrinho.
no final mostre a compra com os itens adicionados somando o valor do pedido. */

$produtos = [];

for ($i=0; $i < 1; $i++) { 
    $produto = readline("Digite o nome do produto: ");
    $valorUnitario = readline("Digite o preço do produto: ");
    $quantidade = readline("Digite a quantidade: ");
    
    $produtos[] = [
        "produto" => $produto,
        "quantidade" => $quantidade,
        "valor" => $valorUnitario
    ];
}

$decisao = readline("Gostaria de efetuar uma compra? Digite sim ou não: ");

if($decisao = "sim" || $decisao = "Sim"){
    $escolha = readline("Digite qual item deseja comprar: ");
    $produtoEncontrado = null;

    foreach ($produtos as $produto) {
        if($produto["produto"] === $escolha){
            $produtoEncontrado = $produto;
            break;
        }
    }
    
    if($produtoEncontrado !== null){
        $qtdDesejada = readline("Digite a quantidade: ");
        if($qtdDesejada <= $produtoEncontrado["quantidade"]){
            $valorTotalCompra = $qtdDesejada * $produtoEncontrado["valor"];
            echo "Total a pagar: R$ " . number_format($valorTotalCompra,2);
        } else {
            echo "Desculpe, não temos a quantidade desejada em estoque.";
        }
    } else {
        echo "Desculpe, o produto não está disponível";
    }
} else {
    echo "Obrigado e volte sempre!";
} 




/* if ($a = "Sim") {
    $decisao = readline("Gostaria de efetuar uma compra? Digite Sim / Não :");
    $escolha = readline("Digite qual item deseja comprar: ");
    if(in_array("$escolha", $produtos)){
        $qnts = readline("Digite a quantidade: ");
    } else {
        echo "Desculpe, o produto está fora de estoque.";
    }

} elseif($a = "Não") {
    echo "Obrigado por usar nosso sistema!";
} */

/* foreach($produtos as $carrinho){
    echo "Produto: {$carrinho["produto"]}";
    echo "Valor unit: {$carrinho["valor"]}";
    echo "Quantidade: {$carrinho["quantidade"]}";
    echo "Total R$ ".($carrinho["valor"] * $carrinho["quantidade"])."\n";

}
 */
