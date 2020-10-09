<?php

$varijabla=[];

var_dump($varijabla);
echo "<br>";

//isset funkcija koja proverava da li je varijabla setovana ili nije
if(isset($varijabla)){
    echo"<h2>Setovano!!!</h2>";
} else{
    echo"<h2>Nije Setovano!!!</h2>";
}

// empty funkcija koja proverava da li varijabla ima nesto u sebi
echo "<hr>";

$varijabla2=[];

var_dump($varijabla2);
echo "<br>";

if(empty($varijabla2))
{
    echo "<h2>Empty</h2>";
} 
else{
    echo "<h2>Not Empty</h2>";
}