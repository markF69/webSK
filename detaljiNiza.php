<?php

    //preuzimanje svih vrednosti i brojanje

    $ocene = [
        'web'=>[
            'test'=>[2,5],
            'projekat'=>[2,5,5,5,5,5],
            'usmeno'=>[4,4,3]
        ],
        
        'engleski' =>[
            'usmeno' =>[
                'prevod'=>[1,4],
                'komunikacija'=>[3,2,3]
            ]
            ],
            
            'pismeni' =>[
                'prvi'=>2,
                'drugi'=>5
            ],
            
            'prg'=>[2,5,3,4]
        ];

        function detaljiNiza($niz){
            //definisanje promenjljivih
            global $brEL; //brojac elemenata
            global $vrednosti; //niz vrednosti

            //proverava da li je parametar koje je prosledjen niz ili ne
            if(!is_array($niz)){
                die("Greska: Prosledjeni podatak nije niz");
            }

            //prolazak kroz niz
            foreach($niz as $clan){
                if(is_array($clan)){
                    detaljiNiza($clan);
                }
                else{
                    $brEL++;
                    $vrednosti[]=$clan;
                }
            }

            return array('brEL'=> $brEL, 'vrednosti'=>$vrednosti);
        }
    $rez = detaljiNiza($ocene);
    echo "<pre>";
    var_dump($rez);
    echo "</pre>";

    // racunanje prosecne ocene
    $ukOcene = 0;
    $brojOcena = $rez['brEl'];
    echo $brojOcena;

    for($i=0;$i<$brojOcena;$i++){
        $ukOcene += $rez['vrednosti'][$i];
    }

    $prosek = $ukOcene/$brojOcena;
    echo "<br>Prosek:".$prosek;

    switch(round($prosek)){
        case 1: echo"<h2>Nedovoljan</h2>"; break;
        case 2: echo"<h2>Dovoljan</h2>"; break;
        case 3: echo"<h2>Dobar</h2>"; break;
        case 4: echo"<h2>Vrlo dobar</h2>"; break;
        case 4: echo"<h2>Odlican</h2>"; break;
        default: echo"<h1>Greska: Prosek ne postoji!</h1>";break;
        
    }
