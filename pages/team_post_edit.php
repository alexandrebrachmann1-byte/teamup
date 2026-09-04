<?php
session_start();
require_once "../functions/posts.php";
require_once "../data/champions.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une annonce</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>
    <?php require_once "../partials/header.php"; ?>
        <div class="page-content">
            <?php
                if (!isset($_SESSION["user_id"])) {
                header("Location: /teamup/pages/login.php");
                exit;
                }

                if (!isset($_GET["id"])) {
                    header("Location: /teamup/pages/dashboard.php");
                    exit;
                }

                $teamPost = get_team_post_by_id($_GET["id"]);
                $teamPost = $teamPost[0];

                if ($teamPost["user_id"] !== $_SESSION["user_id"]) {
                    header("Location: /teamup/pages/dashboard.php");
                }

            ?>
                <h4 class="form-title">Modifier votre annonce d'équipe !</h4>
                    <div class="form-wrapper">
                        <form method="POST" action="../traitements/traitement_team_post_edit.php?id=<?php echo $teamPost["id"]; ?>" class="form">

                            <div class="form-group">
                                <label for="team-name" class="form-label">Nom de l'équipe :</label>
                                <input type="text" name="name" id="team-name" class="form-input" value="<?= $teamPost["name"]; ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Rang de l'équipe :</label>
                                <div class="radio-group">
                                    <label class="radio-option"><input type="radio" name="rank" id="team-iron" value="iron" required <?php if(strpos($teamPost["rank"], "iron")!== false){ ?> checked <?php } ?>> Fer</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-bronze" value="bronze" required <?php if(strpos($teamPost["rank"], "bronze")!== false){ ?> checked <?php } ?>> Bronze</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-silver" value="silver" required <?php if(strpos($teamPost["rank"], "silver")!== false){ ?> checked <?php } ?>> Argent</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-gold" value="gold" required <?php if(strpos($teamPost["rank"], "gold")!== false){ ?> checked <?php } ?>> Or</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-platinum" value="platinum" required <?php if(strpos($teamPost["rank"], "platinum")!== false){ ?> checked <?php } ?>> Platine</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-emerald" value="emerald" required <?php if(strpos($teamPost["rank"], "emerald")!== false){ ?> checked <?php } ?>> Emeraude</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-diamond" value="diamond" required <?php if(strpos($teamPost["rank"], "diamond")!== false){ ?> checked <?php } ?>> Diamant</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-master" value="master" required <?php if(strpos($teamPost["rank"], "master")!== false){ ?> checked <?php } ?>> Master</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-grandmaster" value="grandmaster" required <?php if(strpos($teamPost["rank"], "grandmaster")!== false){ ?> checked <?php } ?>> Grandmaster</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="team-challenger" value="challenger" required <?php if(strpos($teamPost["rank"], "challenger")!== false){ ?> checked <?php } ?>> Challenger</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Rôle(s) recherché(s) :</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-top" value="top" <?php if(strpos($teamPost["role"], "top")!== false){ ?> checked <?php } ?>> Top</label>
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-jungle" value="jungle" <?php if(strpos($teamPost["role"], "jungle")!== false){ ?> checked <?php } ?>> Jungle</label>
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-mid" value="mid" <?php if(strpos($teamPost["role"], "mid")!== false){ ?> checked <?php } ?>> Mid</label>
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-adc" value="adc" <?php if(strpos($teamPost["role"], "adc")!== false){ ?> checked <?php } ?>> Adc</label>
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-support" value="support" <?php if(strpos($teamPost["role"], "support")!== false){ ?> checked <?php } ?>> Support</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="team-description" class="form-label">Description :</label>
                                <textarea name="description" id="team-description" class="form-textarea" required><?= $teamPost["description"]; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="team-discord" class="form-label">Votre Discord :</label>
                                <input type="text" name="discord" id="team-discord" class="form-input" value="<?= $teamPost["discord"]; ?>" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="ok" class="btn btn-primary">
                                    Envoyer
                                </button>
                            </div>

                        </form>
                    </div>
        </div>
</body> 
</html>