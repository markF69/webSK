<?php

//iterativno faktorijel
$fakt=1;
    function faktIterativna($n){
        $fakt=1;
        for($i=1; $i<=$n; $i++)
        {
            $fakt*=$i;
        }
        return $fakt;
    }
    echo "faktorijel:".faktIterativna(5);
    echo "<br>".$fakt;

    //rekurzija
    echo "<hr>";
    function faktRekurzija($n){
        //izlazak iz funkcije
        if($n == 1)
        return 1;

        return $n * faktRekurzija($n-1);
    }

    echo faktRekurzija(6);

    //python tutor prebacujemo ovaj func faktRekurzija u javascript kod da bi mogli da vidimo visualno sta se izvrsava u funkciji