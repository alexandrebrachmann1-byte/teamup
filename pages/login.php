<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>

    <?php 
        require_once "../partials/header.php"; 
    ?>

    <div class="page-content">
        <div class="auth-wrapper">
            <div class="form-wrapper">
                <h4 class="form-title">Connexion</h4>

                <form method="POST" action="../traitements/traitement_login.php" class="form">
                    <div class="form-group">
                        <label for="mail" class="form-label">Adresse mail</label>
                        <input type="email" name="mail" id="mail" class="form-input" placeholder="exemple@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="password" id="password" class="form-input" required>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>