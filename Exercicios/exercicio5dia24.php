<?php
/* 5. Faça um programa para ler entre 3 e 5 notas de 5 alunos e armazene num vetor, 
calcule e imprima a media de cada aluno mostrando se está aprovado ou reprovado no seguinte modelo.

NOME: DIEGO | NOTAS: 8, 10, 7.5, 9 | MÉDIA: 8.6 | SITUAÇÃO: APROVADO
dica: utilize a função round(8.621, 2) para areedondar a média */

$alunos = [];
$aluno;
$notas;


for ($i=0; $i < 1; $i++) { 
    $aluno = readline("Informe o nome do aluno: ");
    $notas = readline("Informe as notas separadas por vírgula: ");

    $alunos[$i]["nome"] = $aluno;
    $alunos[$i]["notas"] = explode(",",$notas);
}
$mediaAluno = 0;
echo "-----------------------------Alunos---------------------------------\n";
foreach($alunos as $aluno){
    $notasAluno = implode(", ", $aluno['notas']);
    $mediaAluno = round(array_sum($aluno['notas']) / count($aluno['notas']), 2);
    $situacao = ($mediaAluno >= 7) ? 'APROVADO' : 'REPROVADO';
    echo "NOME: {$aluno['nome']} | NOTAS: {$notasAluno} | MÉDIA: {$mediaAluno} | SITUAÇÃO: {$situacao} \n";
}



?>



$alunos = [];

for ($i=0; $i < 1; $i++) { 
    
    echo "Digite o nome do aluno: ";
    $nome = readline();

    echo "Quantidade de notas para tirar a média, entre 3 e 5: ";
    $qtdNotas = readline();

    if($qtdNotas < 3 || $qtdNotas > 5){
        echo "Número inválido.";
    }

    for ($x=0; $x < $qtdNotas ; $x++) { 
        $notas[] = readline("Digite a nota " . ($x + 1) . "do aluno: ");
        
    }

    $notasSoma = array_sum($notas);
    $media = ($notasSoma / count($notas));

    $alunos = [
        "nome" => $nome,
        "notas" => $notas,
        "media" => $media
        
    ];
}

foreach($alunos as $aluno){

    echo "Nome: " . $aluno["nome"] . " | Notas: " . implode(", ", $aluno["notas"]) . " |  Média: " . $aluno["media"] . "\n";
    
}

outro

$alunos = [];

for ($i=0; $i < 1; $i++) { 
    
    echo "Digite o nome do aluno: ";
    $nome = readline();

    echo "Quantidade de notas para tirar a média, entre 3 e 5: ";
    $qtdNotas = readline();

    if($qtdNotas < 3 || $qtdNotas > 5){
        echo "Número inválido.";
    }

    for ($x=0; $x < $qtdNotas ; $x++) { 
        $notas[] = readline("Digite a nota " . ($x + 1) . "do aluno: ");
        
    }

    $notasSoma = array_sum($notas);
    $media = ($notasSoma / count($notas));

    $alunos = [
        "nome" => $nome,
        "notas" => $notas,
        "media" => $media
        
    ];
}

foreach($alunos as $aluno){

    echo "Nome: " . $aluno["nome"] . " | Notas: " . implode(", ", $aluno["notas"]) . " |  Média: " . $aluno["media"] . "\n";
    
}
