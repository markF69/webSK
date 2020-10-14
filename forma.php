<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method='POST'>
    <input type="number" name="nBroj" id="" placeholder="Unesite broj">
    <fieldset>
        <legend>
            Pol:
            Muski:<input type="radio" name="nPol" id="iMuski" value="Muski"><br>
            Zenski:<input type="radio" name="nPol" id="iZenski" value="Zenski"><br>

        </legend>
    </fieldset>
    <input type="submit" value="OK">
</form>

    <p>
        <?php 
            echo $_REQUEST['nBroj']??"";
        // podaci sa klijentske strane obrada i filtriranje
        ?>
    </p>
</body>
</html>