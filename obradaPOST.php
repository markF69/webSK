<?php

$korisnik = [
   
    'admin'=>["user"=>"admin", "pass"=>"admin123"],
    'korisnik'=>["user"=>"korisnik", "pass"=>"korisnik123"]
];
//preuzimanje podataka sa klijentske strane pomocu POST metode

$user = $_POST["nUser"]??"Nepoznati korisnik";
$pass = $_POST["nPass"]??"";

if($user === $korisnik['admin']['user'] && $pass === $korisnik['admin']['pass']){
    echo "dobrodosli $user";
    //redirekcija na drugu stranu
    header('Location:admin.html');

} elseif(
    $user === $korisnik['korisnik']['user'] && $pass === $korisnik['korisnik']['pass']
){
    echo "Dobrodosli $usesr!";
    header('Location:korisnik.html');
}

else{
    echo "niste autorizovani za ovu stranicu";
    header("Location:page404.html");
}
