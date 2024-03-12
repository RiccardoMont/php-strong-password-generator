<?php

include __DIR__ . '/functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecco la tua password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
        <?php pswGenerator($_GET['lunghezza']); ?>
        <?php if (!empty($_SESSION['randomPass'])) : ?>
            <h3>Ecco la tua password:</h3>
            <span> <?php echo htmlentities($_SESSION['randomPass'], ENT_QUOTES) ?> </span>
        <?php else : ?>
            <span> <?php echo $_SESSION['errore'] ?></span>
        <?php endif; ?>
        
    
</body>
</html>