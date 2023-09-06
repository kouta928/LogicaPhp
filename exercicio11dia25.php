<?php

$vetorfull = [];


for ($i=0; $i < 100; $i++) { 
    $valores1 = rand(1,100);
    array_push($vetorfull, $valores1);
}

foreach($vetorfull as $par){
    if($par % 2 == 0){
        $vetorpar[] = $par; 
    }
   
}

foreach($vetorfull as $impar){
    if($impar % 2 != 0){
        $vetorimpar[] = $impar;
    }
   
}

print_r($vetorpar);
print_r($vetorimpar);