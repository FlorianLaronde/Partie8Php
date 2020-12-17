<?php
    session_start();
    // Création des cookies
    setcookie('loginCookie', $_POST['login'], time() +5000);
    setcookie('passwordCookie', $_POST['password'], time() +5000);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Partie 8 - Variables superglobales, sessions et cookies</title>
</head>
<body>
<h1> Exercice 3 et 4 Partie 8 </h1>
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. A la validation du formulaire, stocker
    les informations dans un cookie. Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiche.</p>

    <p> <a href="suite.php">Back</a> </p>

    
    <p>
            Votre identifiant est bien le : <strong> <?php echo $_COOKIE['loginCookie']; ?> </strong> <br/>
        et votre mot de passe correspond bien à : <strong>  <?php echo $_COOKIE['passwordCookie'];  ?> </strong>
    </p>
    
</body>
</html>