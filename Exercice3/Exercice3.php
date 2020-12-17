<?php
    session_start();

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
    les informations dans un cookie.</p>
    <!-- Formulaire -->
    <form action="suite.php" method='POST'>
        <fieldset>

        <label for="login">Identifant :</label>
        <input name='login' type="text" required autofocus placeholder='Pseudo'>

        <br>

        <label for="password">Mot de passe :</label>
        <input name='password' type="text" required placeholder='**********'>

        <br>

        <input type="submit">
        </fieldset>
    </form>
    <p> <a href="suite.php">Lien</a> </p>

    <?php
        if ( !empty($_POST['login']) && !empty($_POST['password'])) {
            echo 'Bienvenue sur notre site !';
        } else {
            echo 'Identifiant ou mot de passe invalide';
        }
    
    ?>
    
</body>
</html>