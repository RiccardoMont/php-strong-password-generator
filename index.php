<?php

include __DIR__ . '/functions.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
</head>

<body>
    <form action="index.php" method="$_GET">
        <label for="lunghezza">Quanti caratteri dovrà essere lunga la tua password?</label>
        <input type="text" id="lunghezza" name="lunghezza">
        <input type="submit">
    </form>

    <?php if (isset($_GET['lunghezza']) && $_GET['lunghezza'] > 0 && $_GET['lunghezza'] < 101) : ?>
        <span>Eccoti una password sicura: <?php echo pswGenerator($_GET['lunghezza']) ?></span>

    <?php elseif (isset($_GET['lunghezza'])) : ?>
        <span>La lunghezza deve'essere di minimo 1 carattere e massimo 100</span>
    <?php endif; ?>


</body>

</html>