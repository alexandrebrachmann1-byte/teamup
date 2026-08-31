<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>

    <nav class="navbar">
        <div class="navdiv">
            <div class="logo">
                <img src="../assets/images/logo_teamup.png" alt="teamup">
            </div>
            <ul>
                <li><a href="/teamup/index.php">Acceuil</a></li>
                <li><a href="/teamup/pages/dashboard.php">Dashboard</a></li>
                <li><a href="/teamup/pages/player_posts.php">Chercher un joueur</a></li>
                <li><a href="/teamup/pages/team_posts.php">Chercher une équipe</a></li>

                <?php if (isset($_SESSION["role"])) { ?>
                    <li>
                        <a href="/teamup/pages/logout.php" id="logout" class="btn-nav">Se deconnecter</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="/teamup/pages/login.php" class="btn-nav">Se connecter</a>
                    </li>
                    <li>
                        <a href="/teamup/pages/register.php" class="btn-nav btn-nav-primary">S'inscrire</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>

</body>
</html>
