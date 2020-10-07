<?php

$korisnik = ["user"=>"admin", "pass"=>"admin"];
//preuzimanje podataka sa klijentske strane pomocu POST metode

$user = $_POST["nUser"]??"Nepoznati korisnik";
$pass = $_POST["nPass"]??"";

if($user === $korisnik['user'] && $pass === $korisnik['pass']){
    echo "dobrodosli $user";
} else{
    echo "niste autorizovani za ovu stranicu";
}

echo "Dobrodosli $user";

