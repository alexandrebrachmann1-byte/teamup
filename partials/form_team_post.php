<?php 
require_once "../data/champions.php";
?>

<h4>Créez votre annonce d'équipe !</h4>
<div>
    <form method="POST" action="../traitements/traitement_team_post.php">
        <div>
            <label for="name">Nom de l'équipe :</label>
            <input type="text" name="name" id="name" placeholder="Nom d'équipe" required>
        </div>
        <div>
            <label for="rank">Rang de l'équipe :</label>
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
            <label for="role">Rôle(s) recherché(s) :</label>
            <input type="checkbox" name="role[]" id="top" value="top"> Top
            <input type="checkbox" name="role[]" id="jungle" value="jungle"> Jungle
            <input type="checkbox" name="role[]" id="mid" value="mid"> Mid
            <input type="checkbox" name="role[]" id="adc" value="adc"> Adc
            <input type="checkbox" name="role[]" id="support" value="support"> Support
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