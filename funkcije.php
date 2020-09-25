<?php
//funkcija

function kub($a){
    //$a = 2;
    $k = $a**3;
    echo $k;
}

kub(3);

echo "<hr>";

function stepen($broj, $stepen=2){
    $rez = $broj**$stepen;
    return $rez;
}
$rez = stepen(2,10);
echo $rez;
var_dump($rez);