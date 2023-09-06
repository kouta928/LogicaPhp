<?php
$vetores1=[1,2,3,4,5,6,7,8,9,10];
$vetores2=[2,4,6,8,10,12,14,16,18,20];

$intersec[] = array_intersect($vetores1, $vetores2);

print_r($intersec);