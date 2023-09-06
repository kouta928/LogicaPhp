<?php

$risco = readline("Digite o nível do alerta, de 0 a 10: ");

if($risco <= 3 ){
  echo "O alerta de nível $risco é baixo.";
} elseif ($risco >= 4 && $risco <= 6){
  echo "O alerta de nível $risco é médio.";
} elseif($risco >= 7 && $risco <= 9){
  echo "O alerta de nível $risco é alto.";
}else 
  echo "O alerta de nível $risco é GRAVE.";
