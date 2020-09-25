<?php declare (strict_types = 1);

//definisanje tipova podataka parametara i povratnog tipa funkcije u striktnom modu
function sabiranje(int $a, int $b):string{
    $rez = $a + $b;
    return(string)$rez; //ili $rez.""
}
echo sabiranje(9, 10);
