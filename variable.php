<?php
        $varijabla = 'Neki string';
        $nova = 'Ucimo php';
        $broj = 2;
        $bool = true;

        $str = ' Pocinje tekst: '.$varijabla;

        var_dump($broj);
        echo'<hr>';
        echo $str;

        $web = [2,3,1,4,5,3]; //array
        echo '<br>',$web[2];

        #sizeof => count
        echo '<br>Broj elemenata niza je:'.sizeof($web);
        echo '<br>Poslednji element niza je:'.$web[count($web) - 1];

        #multidimenzijonalni nizovi
        $ocene = [

                [2,3,1,4,5,3],
                [2,3,5,5],
                [3,3,2,[1,2,3]]

        ];
               
        

        echo '<br>Ocena web:'.$ocene[0][2];
        echo '<br>Ocena web:'.$ocene[2][2];
        echo '<br>Ocean web-test:'.$ocene[2][3][1];

        $webocene = [

                'usmeni' => [5, 4, 3],
                'test' => ['js'=> 4, 'php' => 2, 'html' => 5],
                'projekat' => 4
        ];

        echo '<br>Ocena web-testa:'.$webocene['test']['php'];
        echo '<br>Ocena web-usmeni'.$webocene['usmeni'][2];

        #konstante
        define('PI', 3.1415);
        echo '<br>Konstanta PI je: '.PI,' ostatak cifara pronaci na webu';
        #referentni operator dodele &
        $a = 2;
        $b =&$a;
        echo "<br>";
        echo "a=$a b=$b";

        $a=5;
        echo "<br>";
        echo "a=$a b=$b";