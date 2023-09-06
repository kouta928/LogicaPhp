<?php
$carros = [
    [  //veiculo 0
        "modelo" => "Gol",
        "cor" => "Preto",
        "registro" => [
            "placa" => "ABC-123",
            "renavam" => "12345678901",
            "proprietario" => [
                [
                    "nome" => "José das Coves",
                    "CPF" => "111.456.789-00"
                ],
                [
                    "nome" => "Daniel Manenti",
                    "CPF" => "222.456.789-00"
                ],
            ]
        ]
    ],
    [  //veiculo 1
        "modelo" => "Fiesta",
        "cor" => "Verde",
        "registro" => [
            "placa" => "BCA-321",
            "renavam" => "11345678901",
            "proprietario" => [
                [
                    "nome" => "Maria das Coves",
                    "CPF" => "112.456.789-00"
                ],
                [
                    "nome" => "Selma Vish",
                    "CPF" => "223.456.789-00"
                ],
            ]
        ]
    ],
    [  //veiculo 2
        "modelo" => "Megane",
        "cor" => "Beje",
        "registro" => [
            "placa" => "BGF-587",
            "renavam" => "11145678901",
            "proprietario" => [
                [
                    "nome" => "João das Coves",
                    "CPF" => "113.456.789-00"
                ],
                [
                    "nome" => "Dani Ela",
                    "CPF" => "224.456.789-00"
                ],
            ]
        ]
    ],
];
$primeiroContador = 0;
$QuantPrimeiroArray = count($carros);

while($primeiroContador < $QuantPrimeiroArray){
    echo "Modelo: {$carros[$primeiroContador]["modelo"]} | ";
    echo "Cor: {$carros[$primeiroContador]["cor"]} | ";
    echo "Placa: {$carros[$primeiroContador]["registro"]["placa"]}";
    echo "Renavam: {$carros[$primeiroContador]["registro"]["renavam"]}";
    //inicio laço de repetição de proprietarios

    $segundoContador = 0;
    $quantSegundoArray = count($carros[$primeiroContador]["registro"]["proprietario"]);

    while($segundoContador < $quantSegundoArray){
        echo "Proprietario: {$carros[$primeiroContador]["registro"]["proprietario"][$segundoContador]["nome"]}";
        $segundoContador++;
    }

    //fim laço de proprietarios

    echo "\n";
    $primeiroContador++;
}

?>