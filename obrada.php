<?php

//$podatak = $_POST['nUnos'];

if(!empty($_POST['nUnos']) || strlen($_POST['nUnos']>0)) // da nije prazno i da moze da se unese nula
{
    echo "OK";
}
else
{
    echo "Greska podatak ne postoji";
}
