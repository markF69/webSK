<?php

echo $_SERVER['PHP_SELF'];
echo'<br>';
//provera tipa zahteva od klijentske strane
if($_SERVER['REQUEST_METHOD']=="GET"){
    echo "Podaci nece biti obradjeni zbog pogresne metode";
    die("Greska!!!");
}



//$podatak = $_POST['nUnos'];

if(!empty($_POST['nUnos']) || strlen($_POST['nUnos']>0)) // da nije prazno i da moze da se unese nula
{
    echo "OK";
    $podatak = $_POST['nUnos'];
}
else
{
    echo "Greska podatak ne postoji";
}



//$_REQUEST - preuzimanje podataka (zahteva) sa klijentske strane

$unos = $_REQUEST['nUnos'];

echo "<hr>";
echo $unos;