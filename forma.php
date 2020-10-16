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
        <input type="checkbox" name="nHrana" id="iPizza" value="Pizza">

        <label for="iSendvic">Sendvic</label>
        <input type="checkbox" name="nHrana" id="iSendvic" value="Sendvic">

        <label for="iPljeskavica">Pljeskavica</label>
        <input type="checkbox" name="nHrana" id="iPljeskavica" value="Pljeskavica">
    </fieldset>

    <fieldset>
        <legend>Pol:</legend>
        Muski:<input type="radio" name="nPol" id="iMuski" value="Muski"><br>
        Zenski:<input type="radio" name="nPol" id="iZenski" value="Zenski"><br>
    </fieldset>
    <input type="submit" value="OK">
</form>

<p>
    <?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
        
        echo $_REQUEST['nBroj']??"";
        echo $_REQUEST['nPol']??"";
        echo $_REQUEST['nHrana']??"";
        
        /*
        if(isset($_POST['submit'])){

            if(!empty($_POST['nHrana']))
            {
           foreach($_POST['nHrana'] as $valuex)
           {
               echo "".$valuex;
           }
            
        }
        } */

    }



    ?>
</p>
</body>
</html>