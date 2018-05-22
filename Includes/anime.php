<h1>Anime</h1>

<form method="post" action="#">
    <button id="hide" onclick="hide()">Ajonuter un animé</button>
    <fieldset id="field">
        <div>
            <label for="nameJp">Nom orginale : </label>
            <input type="text" name="mail" value="<?php $nameJp?>"/>
        </div>
        <div>
            <label for="nameEn">Nom traduit : </label>
            <input type="text" name="text" value="<?php $nameEn?>"/>
        </div>
        <div>
            <label for="text">Épisode : </label>
            <input type="text" name="text" value="<?php $episode?>"/>
        </div>
        <div>
            <label for="text">État : </label>
            <input type="radio" id="etat1"
            name="etat" value="<?php $etat?>" checked>
            <label for="etat1">Non visionné</label>

            <input type="radio" id="etat2"
            name="etat" value="<?php $etat?>">
            <label for="etat2">En cours de visionnage</label>

            <input type="radio" id="etat3"
            name="etat" value="<?php $etat?>">
            <label for="etat3">Visionné</label>
        </div>
        <div>
            <label for="text">Commentaire : </label>
            <input type="text" name="text" value="<?php $comment?>"/>
        </div>
        <div>
            <input type="reset" value="Effacer"/>
            <input type="submit" value="Envoyer" name="formLogin" />
        </div>
    </fieldset>
</form>

<script>
    function hide() {
        var fieldset = document.getElementById("field");
        //var button = document.getElementById("hide");
        if (fieldset.style.display === "none") {
            fieldset.style.display = "block";
        } else {
            fieldset.style.display = "none";
        }
    }
</script>