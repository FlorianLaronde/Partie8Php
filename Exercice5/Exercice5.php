<?php
    session_start();
    // Création des cookies
    setcookie('loginCookie', 'changeLogin', time() +5000);
    setcookie('passwordCookie', 'changePassword', time() +5000);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Partie 8 - Variables superglobales, sessions et cookies</title>
</head>
<body>
<h1> Exercice 5  Partie 8 </h1>
    <p>Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>

    <p> <a href="suite.php">Back</a> </p>

    
    <p>
            Votre identifiant est bien le : <strong> <?php echo $_COOKIE['loginCookie']; ?> </strong> <br/>
        et votre mot de passe correspond bien à : <strong>  <?php echo $_COOKIE['passwordCookie'];  ?> </strong>
    </p>
    
</body>
</html>