<?php
$valores =[];

for ($i=0; $i < 20; $i++) {
    $num[$i] = rand(1,20);
    $numero = array_unique($num);
}
print_r($num);
print_r($numero);

