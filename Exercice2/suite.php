<?php

// On démarre la session AVANT d'écrire du code HTML
    session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Partie 8 - Variables superglobales, sessions et cookies </title>
</head>
<body>
    <h1> Exercice 2 Partie 8</h1>

    <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
        Ces variables auront été définies directement dans le code. 
        Il faudra afficher le contenu de ces variables sur la deuxième page.</p>

    <?php
         echo 'Bonjour, tu t\'appelles ' .  $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] . ' tu as ' . $_SESSION['age'] . ' ans' . '<br />';
    ?>
        <a href="Exercice2.php"> Back</a>
</body>
</html>