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
    <?php require_once "../partials/header.php"; ?>

    <div class="page-content">
        <div class="auth-wrapper">
            <div class="auth-layout">

                <div class="auth-side">
                    <h2 class="auth-side-title">Ravi de te revoir</h2>
                    <p class="auth-side-text">
                        Connecte-toi pour gérer tes annonces, contacter d'autres joueurs
                        et suivre les équipes qui recherchent ton profil.
                    </p>
                    <ul class="auth-side-list">
                        <li>Publie une annonce en quelques clics</li>
                        <li>Filtre par rôle, rang et champions</li>
                        <li>Contacte directement sur Discord</li>
                    </ul>
                </div>

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

                    <p class="auth-switch">
                        Pas encore de compte ?
                        <a href="/teamup/pages/register.php">Inscris-toi</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>
</html>