<?php

    $a = 1;
    $b = $a++; #ispisuje 1 1 a ako je ++$a ispisuje 2 2 posto ++ pre dodaje 1 na vrednost a ++ posle samo ostane 1 i ispisuje je

    echo $b;
    echo $b;

    echo "<hr>";
    
    $a = true;
    $b = false;
    $c = $a || $b;
    $d = $a && $b;
    $f = (!$a && $b) || ($a && !$b);
    $g = !$a;

    echo " a = ", $a, "<br />";
    echo " b = ", $b, "<br />";
    echo " c = ", $c , "<br />";
    echo " d = ", $d, "<br />";
    echo " f = ", $f, "<br />";
    echo " g = ", $g;

    var_dump($f);

    //operatori poredjenja
    echo "<h1>Neki kurac</h1>";
    $a = 1;
    $b = 1;
    $c = $a > $b;
    var_dump($c);

    if($a != $b){
        echo "T";
    }
    else
    {
        echo "N";
    }
    //ternarni operator ?

    ($a == $b)? $c = 10:$c = 0;
    echo "<br>$c";

    $a = 0;
    $b = 1;
    $c = $a??$b; //ako vrednost za a ne postoji onda ispise b za rezultat od c
//referentni operator dodele i necega
    $b = 10;
    $a = &$b;

    echo "<br> a=$a b=$b";
    $b = "string";
    echo "<br>a=$a b=$b";
