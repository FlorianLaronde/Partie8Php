<?php 
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $ipAddress = $_SERVER['SERVER_ADDR'];
    $serverName = $_SERVER['SERVER_NAME'];
?>

<!DOCTYPE html>
<html lang="fr">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 1 Partie 8</title>
        </head>

        <body>
            <p><?= $userAgent ?></p> 
            <p><?= $ipAddress ?> </p>
            <p><?= $serverName ?> </p>
        </body>
    </html>