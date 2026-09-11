<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>
    <?php require_once "../partials/header.php"; ?>

    <div class="page-content">
        <div class="auth-wrapper">
            <div class="auth-layout">

                <div class="auth-side">
                    <h2 class="auth-side-title">Rejoins la communauté</h2>
                    <p class="auth-side-text">
                        Crée ton compte pour publier tes annonces, trouver ton duo
                        et te faire remarquer par d'autres équipes.
                    </p>
                    <ul class="auth-side-list">
                        <li>Inscription gratuite et rapide</li>
                        <li>Gère tes annonces depuis ton dashboard</li>
                        <li>Rejoins des centaines de joueurs actifs</li>
                    </ul>
                </div>

                <div class="form-wrapper">
                    <h4 class="form-title">S'inscrire</h4>

                    <form method="POST" action="../traitements/traitement_register.php" class="form">
                        <div class="form-group">
                            <label for="username" class="form-label">Nom d'utilisateur</label>
                            <input type="text" name="username" id="username" class="form-input" placeholder="Nom d'utilisateur" required>
                        </div>

                        <div class="form-group">
                            <label for="mail" class="form-label">Adresse mail</label>
                            <input type="email" name="mail" id="mail" class="form-input" placeholder="exemple@gmail.com" required>
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password" id="password" class="form-input" required>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            S'inscrire
                        </button>
                    </form>

                    <p class="auth-switch">
                        Déjà un compte ?
                        <a href="/teamup/pages/login.php">Connecte-toi</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</body>
</html>