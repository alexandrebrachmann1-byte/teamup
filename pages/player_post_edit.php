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

                $playerPost = get_player_post_by_id($_GET["id"]);
                $playerPost = $playerPost[0];

                if ($playerPost["user_id"] !== $_SESSION["user_id"]) {
                    header("Location: /teamup/pages/dashboard.php");
                }

            ?>
                <h4 class="form-title">Modifier votre annonce !</h4>
                    <div class="form-wrapper">
                        <form method="POST" action="../traitements/traitement_edit_player_post.php" class="form">
                            
                            <div class="form-group">
                                <label for="username" class="form-label">Nom d'utilisateur Riot :</label>
                                <input type="text" name="username" id="username" class="form-input" value="<?= $playerPost["riot_username"]; ?>" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Votre rang :</label>
                                <div class="radio-group">
                                    <label class="radio-option"><input type="radio" name="rank" id="iron" value="iron" required <?php if(strpos($playerPost["rank"], "iron")!== false){ ?> checked <?php } ?>> Fer</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="bronze" value="bronze" required <?php if(strpos($playerPost["rank"], "bronze")!== false){ ?> checked <?php } ?>> Bronze</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="silver" value="silver" required <?php if(strpos($playerPost["rank"], "silver")!== false){ ?> checked <?php } ?>> Argent</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="gold" value="gold" required <?php if(strpos($playerPost["rank"], "gold")!== false){ ?> checked <?php } ?>> Or</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="platinum" value="platinum" required <?php if(strpos($playerPost["rank"], "platinum")!== false){ ?> checked <?php } ?>> Platine</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="emerald" value="emerald" required <?php if(strpos($playerPost["rank"], "emerald")!== false){ ?> checked <?php } ?>> Emeraude</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="diamond" value="diamond" required <?php if(strpos($playerPost["rank"], "diamond")!== false){ ?> checked <?php } ?>> Diamant</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="master" value="master" required <?php if(strpos($playerPost["rank"], "master")!== false){ ?> checked <?php } ?>> Master</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="grandmaster" value="grandmaster" required <?php if(strpos($playerPost["rank"], "grandmaster")!== false){ ?> checked <?php } ?>> Grandmaster</label>
                                    <label class="radio-option"><input type="radio" name="rank" id="challenger" value="challenger" required <?php if(strpos($playerPost["rank"], "challenger")!== false){ ?> checked <?php } ?>> Challenger</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Votre rôle :</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="top" value="top" <?php if(strpos($playerPost["role"], "top")!== false){ ?> checked <?php } ?>> Top</label>
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="jungle" value="jungle" <?php if(strpos($playerPost["role"], "jungle")!== false){ ?> checked <?php } ?>> Jungle</label>
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="mid" value="mid" <?php if(strpos($playerPost["role"], "mid")!== false){ ?> checked <?php } ?>> Mid</label>
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="adc" value="adc" <?php if(strpos($playerPost["role"], "adc")!== false){ ?> checked <?php } ?>> Adc</label>
                                    <label class="checkbox-option"><input type="checkbox" name="role[]" id="support" value="support" <?php if(strpos($playerPost["role"], "support")!== false){ ?> checked <?php } ?>> Support</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Vos champions :</label>
                                <div class="champion-grid">
                                    <?php foreach($champions as $champion): ?>
                                            <label class="champion-option">
                                                <input type="checkbox" name="champion[]" id="<?php echo "$champion"; ?>" value="<?php echo "$champion"; ?>" <?php if(strpos($playerPost["champion"], $champion)!== false){ ?> checked <?php } ?>>
                                                <?php echo "$champion"; ?>
                                            </label>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="description" class="form-label">Description :</label>
                                <textarea name="description" id="description" class="form-textarea" required><?= $playerPost["description"]; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="discord" class="form-label">Votre Discord :</label>
                                <input type="text" name="discord" id="discord" class="form-input" value="<?= $playerPost["discord"]; ?>" required>
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