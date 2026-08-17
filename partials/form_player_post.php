<?php 
require_once "../data/champions.php";
?>

<h4>Créez votre annonce</h4>
<div>
    <form method="POST" action="../traitements/traitement_player_post.php">
        <div>
            <label for="username">Nom d'utilisateur Riot :</label>
            <input type="text" name="username" id="username" placeholder="NomUtilisateur#euw" required>
        </div>
        <div>
            <label for="rank">Votre rang :</label>
            <input type="radio" name="rank" id="iron" value="iron" required> Fer
            <input type="radio" name="rank" id="bronze" value="bronze" required> Bronze
            <input type="radio" name="rank" id="silver" value="silver" required> Argent
            <input type="radio" name="rank" id="gold" value="gold" required> Or
            <input type="radio" name="rank" id="platinum" value="platinum" required> Platine
            <input type="radio" name="rank" id="emerald" value="emerald" required> Emeraude
            <input type="radio" name="rank" id="diamond" value="diamond" required> Diamant
            <input type="radio" name="rank" id="master" value="master" required> Master
            <input type="radio" name="rank" id="grandmaster" value="grandmaster" required> Grandmaster
            <input type="radio" name="rank" id="challenger" value="challenger" required> Challenger
        </div>
        <div>
            <label for="role">Votre role :</label>
            <input type="checkbox" name="role[]" id="top" value="top"> Top
            <input type="checkbox" name="role[]" id="jungle" value="jungle"> Jungle
            <input type="checkbox" name="role[]" id="mid" value="mid"> Mid
            <input type="checkbox" name="role[]" id="adc" value="adc"> Adc
            <input type="checkbox" name="role[]" id="support" value="support"> Support
        </div>
        <div>
            <label for="champion">Vos champions :</label>
                <?php foreach($champions as $champion): ?>
                    <input type="checkbox" name="champion[]" id="<?php echo "$champion"; ?>" value="<?php echo "$champion"; ?>"> 
                        <?php echo "$champion"; ?>
                <?php endforeach; ?>
        </div>
        <div>
            <label for="description">Description :</label>
            <textarea name="description" id="description" placeholder="Décrivez-vous..." required></textarea>
        </div>
        <div>
            <label for="discord">Votre Discord :</label>
            <input type="text" name="discord" id="discord" placeholder="discord123" required>
        </div>
        <div>
            <button type="submit" name="ok">
                Envoyer
            </button>
        </div>
    </form>
</div>