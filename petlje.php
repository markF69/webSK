<?php

//kontrolna struktura if else
$vreme = Date('H');
echo $vreme;

if($vreme<=9){
    echo "<h1>Dobro jutro</h1>";
}
elseif($vreme>=19){
    echo "<h1>Dobro vece</h1>";
}
else{
    echo "<h1>Dobar dan</h1>";
}

//switch case
echo "<hr>";
$ocene = 2;
switch($ocene){
    default: echo'Nema ocena';break;
    case 1: echo'Kec bato';break;
    case 2: echo"Dvica";break;
    case 3: echo'Trica';break;
    case 4: echo'Cetri opa mali';break;
    case 5: echo'To mali petica';break;
}

//while
echo '<hr>';
$a = 5;
while ($a <= 10) {
    echo $a;
    $a++;
}

//do while
echo'<hr>';
$i = 1;
do {
    $i++;
    if($i%2==0) continue;
    echo $i;
    
} while ($i <= 10);

//for
for($i=0; $i<10; $i++)
{
    echo '<br>'.$i;
}

//foreach
echo '<hr>';
$niz=["mata"=>1,"srp"=>2,"prg"=>3,"web"=>4];
foreach($niz as $value)
{
    echo '<br>'.$value;
}

foreach($niz as $key => $value)
{
    echo "<br> $key = ".$value;
}