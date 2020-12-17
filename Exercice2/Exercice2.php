<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['firstName'] = 'Florian';
$_SESSION['lastName'] = 'Laronde';
$_SESSION['age'] = 22;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Partie 8 - Variables superglobales, sessions et cookies </title>
    </head>
    <body>
    <h1> Exercice 2 Partie 8 </h1>
    <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions.
        Ces variables auront été définies directement dans le code. 
        Il faudra afficher le contenu de ces variables sur la deuxième page.</p>

        <a href="suite.php">Lien</a>
    
    </body>
</html>