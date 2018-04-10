<form method="post" action="#">
    <fieldset>
        <div>
            <label for="mail">e-mail : </label>
            <input type="text" name="mail" value="<?php $mail?>"/>
        </div>
        <div>
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" value="<?php $password?>"/>
        </div>
        <div>
            <input type="reset" value="Effacer"/>
            <input type="submit" value="Envoyer" name="formLogin" />
        </div>
    </fieldset>
</form>