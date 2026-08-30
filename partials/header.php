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
            <div class="logo"> <img src="../assets/images/logo_teamup.png" alt="teamup"></div>
            <ul>
                <li> <a href="../index.php">Acceuil</a> </li>
                <li> <a href="../pages/dashboard.php">Dashboard</a> </li>
                <li> <a href="../pages/player_posts.php">Chercher un joueur</a> </li>
                <li> <a href="../pages/team_posts.php">Chercher une équipe</a> </li>

                <?php if (isset($_SESSION["role"])) { ?>  
                        <a href="../pages/logout.php">
                            <button type="submit" name="logout" id="logout">Se deconnecter</button>
                        </a>
                <?php }else{ ?>
                        <button> <a href="../pages/login.php">Se connecter</a> </button>
                        <button> <a href="../pages/register.php">S'inscrire</a> </button>
                <?php } ?>
            </ul>
        </div>
    </nav>

</body>
</html>



