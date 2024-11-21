<?php
    // Sprawdzenie, czy ciasteczko 'moje' jest ustawione
    if (!isset($_COOKIE['moje'])) 
    {
        // Ustawienie ciasteczka 'moje' z wartością 'ciacho1'
        setcookie('moje', 'ciacho1');
        $info="Witamy na stronie";
    }
    else
    {
        // Ciasteczko jest już ustawione, pobranie jego wartości
        $info="Witamy ponownie. (" . $_COOKIE['moje'].")";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciasteczka</title>
</head>
<body>
    <?php
        // Wyświetlenie informacji o ciasteczku
        echo $info;
        ?>
</body>
</html>