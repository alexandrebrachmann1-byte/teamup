<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
</head>
<body>
    
<div>  
    <form method="POST" action="traitement_register.php">
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" placeholder="Nom d'utilisateur" require>
        </div>
        <div>
            <label for="mail">Adresse mail</label>
            <input type="email" name="mail" id="mail" placeholder="exemple@gmail.com" require>
        </div>
        <div>  
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" require>
        </div>
        <button type="submit">
            S'inscrire
        </button>
    </form>
</div>



</body>
</html>