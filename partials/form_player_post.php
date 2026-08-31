<?php 
require_once "../data/champions.php";
?>

<h4 class="form-title">Créez votre annonce de joueur !</h4>
<div class="form-wrapper">
    <form method="POST" action="../traitements/traitement_player_post.php" class="form">
        
        <div class="form-group">
            <label for="username" class="form-label">Nom d'utilisateur Riot :</label>
            <input type="text" name="username" id="username" class="form-input" placeholder="NomUtilisateur#euw" required>
        </div>

        <div class="form-group">
            <label class="form-label">Votre rang :</label>
            <div class="radio-group">
                <label class="radio-option"><input type="radio" name="rank" id="iron" value="iron" required> Fer</label>
                <label class="radio-option"><input type="radio" name="rank" id="bronze" value="bronze" required> Bronze</label>
                <label class="radio-option"><input type="radio" name="rank" id="silver" value="silver" required> Argent</label>
                <label class="radio-option"><input type="radio" name="rank" id="gold" value="gold" required> Or</label>
                <label class="radio-option"><input type="radio" name="rank" id="platinum" value="platinum" required> Platine</label>
                <label class="radio-option"><input type="radio" name="rank" id="emerald" value="emerald" required> Emeraude</label>
                <label class="radio-option"><input type="radio" name="rank" id="diamond" value="diamond" required> Diamant</label>
                <label class="radio-option"><input type="radio" name="rank" id="master" value="master" required> Master</label>
                <label class="radio-option"><input type="radio" name="rank" id="grandmaster" value="grandmaster" required> Grandmaster</label>
                <label class="radio-option"><input type="radio" name="rank" id="challenger" value="challenger" required> Challenger</label>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Votre rôle :</label>
            <div class="checkbox-group">
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="top" value="top"> Top</label>
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="jungle" value="jungle"> Jungle</label>
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="mid" value="mid"> Mid</label>
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="adc" value="adc"> Adc</label>
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="support" value="support"> Support</label>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Vos champions :</label>
            <div class="champion-grid">
                <?php foreach($champions as $champion): ?>
                    <label class="champion-option">
                        <input type="checkbox" name="champion[]" id="<?php echo "$champion"; ?>" value="<?php echo "$champion"; ?>">
                        <?php echo "$champion"; ?>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="form-label">Description :</label>
            <textarea name="description" id="description" class="form-textarea" placeholder="Décrivez-vous..." required></textarea>
        </div>

        <div class="form-group">
            <label for="discord" class="form-label">Votre Discord :</label>
            <input type="text" name="discord" id="discord" class="form-input" placeholder="discord123" required>
        </div>

        <div class="form-group">
            <button type="submit" name="ok" class="btn btn-primary">
                Envoyer
            </button>
        </div>

    </form>
</div>