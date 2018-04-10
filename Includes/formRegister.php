<form method="post" action="#">
    <fieldset>
        <div>
            <label for="name">Nom : </label>
            <input type="text" name="name" value="<?php $name?>"/>
        </div>
        <div>
            <label for="firstName">Prénom : </label>
            <input type="text" name="firstName" value="<?php $firstName?>"/>
        </div>
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
            <input type="submit" value="Envoyer" name="formRegister" />
        </div>
    </fieldset>
</form>