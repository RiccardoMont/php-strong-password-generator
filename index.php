<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Genera una password sicura</h1>
    <form action="password.php" method="$_GET">
        <label for="lunghezza">Quanti caratteri dovrà essere lunga la tua password?</label>
        <input type="text" id="lunghezza" name="lunghezza">
        <span>Desideri che i caratteri possano ripetersi?</span>
        <div id="ripetizioni">
            <label for="repeat">Sì</label>
            <input type="radio" name="repeat" id="repeat" value="repeat">
            <label for="no-repeat">No</label>
            <input type="radio" name="repeat" id="no-repeat" value="no-repeat">
        </div>
        <span> Che tipologia di caratteri vuoi?</span>
        <div id="caratteri">
            <label for="Lettere">Lettere</label>
            <input type="checkbox" name="Lettere" id="Lettere" value="Lettere">
            <label for="Numeri">Numeri</label>
            <input type="checkbox" name="Numeri" id="Numeri" value="Numeri">
            <label for="Specials">Caratteri speciali</label>
            <input type="checkbox" name="Specials" id="Specials" value="Specials">
        </div>
        <input type="submit">
    </form>
</body>
</html>