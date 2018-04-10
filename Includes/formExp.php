<form method="post" action="#" id="formulaire">
    <h1>Information personnel</h1>
    <fieldset>
        <div class="align">
            <label for="name">Prénom : </label>
            <input type="text" name="name" value="<?php $name ?>"  required/>
        </div>
        <div class="align">
            <label for="firstName">Nom : </label>
            <input type="text" name="firstName" value="<?php $firstName ?>" required/>
        </div>
        <div>
            <label for="birthdate">Date de naissance : </label>
            <input type="date" name="firstName" value=""/>
        </div>
        <div>
            <label for="sexe">Sexe : </label>
            <label>Homme</label><input type="radio" name="sexe" value="homme" checked  required/>
            <label>Femme</label><input type="radio" name="sexe" value="femme"/>
        </div>
    </fieldset>
    <h1>Coordonnées</h1>
    <fieldset>
        <div>
            <label for="adresse">Adresse : </label>
            <input type="text" name="adresse" value=""/>
        </div>
        <div class="align">
            <label for="zip-code">Code postal : </label>
            <input type="number" name="zip-code" value="" required/>
        </div>
        <div class="align">
            <label for="city">Ville : </label>
            <input type="text" name="city" value="" required/>
        </div>
        <div>
            <label for="phone">Tel</label>
            <input type="tel" name="phone" value=""/>
        </div>
        <div>
            <label for="mail">e-mail : </label>
            <input type="text" name="mail" value="<?php $mail ?>" required/>
        </div>
        <div class="align">
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" value="<?php $password ?>" required/>
        </div>
        <div class="align">
            <label for="conf-password">Confirmer mot de passe : </label>
            <input type="password" name="conf-password" value="<?php $password ?>" required/>
        </div>
    </fieldset>
    <h1>Information complémentaire</h1>
    <fieldset>
        <div>
            <label for="avatar">Votre avatar : </label>
            <input type="file" name="avatar" value=""/>
        </div>
        <div>
            <label for="pro">Situation pro : </label>
            <select name="pro">
                <option value="chomeur">chômeur</option>
                <option value="pute" selected>pute</option>
                <option value="etudiant">étudiant</option>
            </select>
        </div>
        <div class="align">
            <label for="hobbies">Hobbies : </label>

            <ul>
                <li><input type="checkbox" name="hobbies" value="les chats"/><label for="hobbies">Les chats</label></li>
                <li><input type="checkbox" name="hobbies" value=" les licornes"/><label for="hobbies">Les licornes</label></li>
                <li><input type="checkbox" name="hobbies" value="les dauphin"/><label for="hobbies">Les dauphin</label></li>
                <li><input type="checkbox" name="hobbies" value="Symphony"/><label for="hobbies">Symphony</label></li>
            </ul>
        </div>
    </fieldset>
    <div>
        <input type="reset" value="Effacer"/>
        <input type="submit" value="Envoyer" name="formRegister"/>
    </div>
</form>
