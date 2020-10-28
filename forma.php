<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="number" name="nBroj" placeholder="Unesite kolicinu">

    <fieldset>
        <legend>Hrana:</legend>
        <label for="iPizza">Pizza</label>
        <input type="checkbox" name="nHrana[]" id="iPizza" value="Pizza">

        <label for="iSendvic">Sednvic</label>
        <input type="checkbox" name="nHrana[]" id="iSendvic" value="Sendvic">

        <label for="iPljeskavica">Pljeskavica</label>
        <input type="checkbox" name="nHrana[]" id="iPljeskavica" value="Pljeskavica">

        <label for="iPalacinka">Palacinka</label>
        <input type="checkbox" name="nHrana[]" id="iPalacinka" value="Palacinka">
    </fieldset>

    <fieldset>
        <legend>Podaci</legend>
        <label for="iIme">Ime:</label>
        <input type="text" name="nIme" id="iIme" pattern="A-Za-z" required><br>
        <label for="iPrezime">Prezime:</label>
        <input type="text" name="nPrezime" id="iPrezime" required><br>
        <label for="iEmail">Email:</label>
        <input type="email" name="nEmail" id="iEmail" required><br>
        <label for="iBrTel">BrTel:</label>
        <input type="tel" name="nBrTel" id="iBrTel" required><br><br>
        <textarea name="nAdresa" id="iAdresa" cols="30" rows="10" placeholder="Unesite adresu!"></textarea>
    </fieldset>

    <fieldset>
        <legend>Pol:</legend>
        <label for="iMuski">Muski:</label><input type="radio" name="nPol" id="iMuski" value="Muski"><br>
        <label for="iZenski">Zenski:</label><input type="radio" name="nPol" id="iZenski" value="Zenski"><br>
    </fieldset>
<br> 
    <select name="nPlacanje" id="iPlacanje">
        <option value="Kartica">Kartica</option>
        <option value="Gotovina" selected >Gotovina</option>
        <option value="Cekovi">Cekovi</option>
        <option value="Kripto valutom">Kripto valutom</option>
    </select>

<br><br>
    <input type="submit" value="OK">
</form>

<p>
    <?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        $kolicinaPizza = $_REQUEST['nBrojPizza']??0;
        $pol = $_REQUEST['nPol']??"";
        $ime = $_REQUEST['nIme']??"";
        $prezime = $_REQUEST['nPrezime']??"";
        $email = $_REQUEST['nEmail']??"";
        $adresa = $_REQUEST['nAdresa']??"";
        $brTel = $_REQUEST['nBrTel']??"";
        $opPlacanja = $_REQUEST['nPlacanje']??"";
        
        // preuzimanje podataka za hranu ???
        //echo $_REQUEST['nHrana']??"";

        echo "<br>";
        $hrana = $_REQUEST['nHrana']??"";
        //var_dump($hrana);

        echo "<ol>";
        foreach($hrana as $value)
            echo "<li>$value</li>";

        echo "<ol>";
        // ovde fali jos <ol>

        

    }



    ?>
</p>
</body>
</html>
