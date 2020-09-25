<?php
//oblasti vazenja promenjljivih
// globani, localni, staticki

//globalni opseg
$a = 1; //globalna varijabil

function nekaFunkcija(){
    global $a; //pokazuje na globalnu varijablu $a
    $a = 11;
    echo $a; //lokalno $a
}


echo "<br>".$a."<br>";
nekaFunkcija();

// GLOBALS

function saberi(){
    $a = 2;
    $b = 10;
    global $z; 
    $z = $a+$b;
    $GLOBALS['rez'] = $a + $b;
    echo $GLOBALS['rez'];
}

echo "<br>";
saberi();
echo "<br>rez = $rez";
echo "<br>z = $z";

//staticki opseg
echo"<hr>";
function brojPoseta(){
    static $i = 1;
    echo $i."<br>";
    $i++;
}

brojPoseta();
brojPoseta();
brojPoseta();
brojPoseta();