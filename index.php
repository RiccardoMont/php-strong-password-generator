<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
</head>

<body>
    <form action="password.php" method="$_GET">
        <label for="lunghezza">Quanti caratteri dovrà essere lunga la tua password?</label>
        <input type="text" id="lunghezza" name="lunghezza">
        <br>
        <span>Desideri che i caratteri possano ripetersi?</span>
        <br>
        <label for="repeat">Sì</label>
        <input type="radio" name="repeat" id="repeat" value="repeat">
        <label for="no-repeat">No</label>
        <input type="radio" name="repeat" id="no-repeat" value="no-repeat">
        <br>
        <span> Che tipologia di caratteri vuoi?</span>
        <br>
        <label for="Lettere">Lettere</label>
        <input type="checkbox" name="Lettere" id="Lettere" value="Lettere">
        <label for="Numeri">Numeri</label>
        <input type="checkbox" name="Numeri" id="Numeri" value="Numeri">
        <label for="Specials">Caratteri speciali</label>
        <input type="checkbox" name="Specials" id="Specials" value="Specials">
        <br>
        <input type="submit">
    </form>

</body>

</html>