<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
<div>
    <form method="POST" action="../traitements/traitement_login.php">
        <div>
            <label for="mail">Adresse mail</label>
            <input type="email" name="mail" id="mail" placeholder="exemple@gmail.com" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">
            Se connecter
        </button>
    </form>
</div>

</body>
</html>-