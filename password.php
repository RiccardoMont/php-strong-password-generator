<?php

include __DIR__ . '/functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecco la tua password</title>
</head>

<body>
    <?php if (isset($_GET['lunghezza']) && $_GET['lunghezza'] > 0 && $_GET['lunghezza'] < 101) : ?>
        <span>Eccoti una password sicura: <br><?php pswGenerator($_GET['lunghezza']);
                                                echo $_SESSION['randomPass'] ?></span>
    <?php elseif (isset($_GET['lunghezza'])) : ?>
        <span>La lunghezza deve'essere di minimo 1 carattere e massimo 100</span>
    <?php endif; ?>
</body>
</html>