<?php


function sacar($conta, $valorSaque)
{
    
    if($valorSaque > $conta["saldo"]){
        echo "Você não pode sacar este valor \n";

    } elseif ($valorSaque <= $conta["saldo"]){
        echo "Você sacou R$:$valorSaque \n";
       $conta["saldo"] -= $valorSaque;;
    } 
    return $conta;
}

function deposito($conta, $valorDeposito)
{
    
    if($valorDeposito == 0){
        echo "Você não pode depositar este valor \n";

    } else{
        echo "Você depositou R$:$valorDeposito \n";
       $conta["saldo"] += $valorDeposito;;
    } 
    return $conta;
}