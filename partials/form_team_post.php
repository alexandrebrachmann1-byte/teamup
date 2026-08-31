<h4 class="form-title">Créez votre annonce d'équipe !</h4>
<div class="form-wrapper">
    <form method="POST" action="../traitements/traitement_team_post.php" class="form">

        <div class="form-group">
            <label for="team-name" class="form-label">Nom de l'équipe :</label>
            <input type="text" name="name" id="team-name" class="form-input" placeholder="Nom d'équipe" required>
        </div>

        <div class="form-group">
            <label class="form-label">Rang de l'équipe :</label>
            <div class="radio-group">
                <label class="radio-option"><input type="radio" name="rank" id="team-iron" value="iron" required> Fer</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-bronze" value="bronze" required> Bronze</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-silver" value="silver" required> Argent</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-gold" value="gold" required> Or</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-platinum" value="platinum" required> Platine</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-emerald" value="emerald" required> Emeraude</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-diamond" value="diamond" required> Diamant</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-master" value="master" required> Master</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-grandmaster" value="grandmaster" required> Grandmaster</label>
                <label class="radio-option"><input type="radio" name="rank" id="team-challenger" value="challenger" required> Challenger</label>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Rôle(s) recherché(s) :</label>
            <div class="checkbox-group">
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-top" value="top"> Top</label>
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-jungle" value="jungle"> Jungle</label>
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-mid" value="mid"> Mid</label>
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-adc" value="adc"> Adc</label>
                <label class="checkbox-option"><input type="checkbox" name="role[]" id="team-support" value="support"> Support</label>
            </div>
        </div>

        <div class="form-group">
            <label for="team-description" class="form-label">Description :</label>
            <textarea name="description" id="team-description" class="form-textarea" placeholder="Décrivez votre équipe..." required></textarea>
        </div>

        <div class="form-group">
            <label for="team-discord" class="form-label">Votre Discord :</label>
            <input type="text" name="discord" id="team-discord" class="form-input" placeholder="discord123" required>
        </div>

        <div class="form-group">
            <button type="submit" name="ok" class="btn btn-primary">
                Envoyer
            </button>
        </div>

    </form>
</div>