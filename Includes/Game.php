<?php
if (isset($_GET['scr'])) {
    $script = $_GET['scr'];
} else {
    $script = 'game';
}
/*if ($script === 'sound') {
    echo('
        <script src="./node_modules/easeljs/lib/easeljs.js"></script>
    ');
}*/

?>

<p id="reponce"></p>

<h1><?= strtoupper($script); ?> lol</h1>
<script src="./assets/js/<?= $script . '.js' ?>"></script>
<?php
if ($script === 'game') {
    echo('
        <canvas id="gc" width="400" height="400"></canvas>
    ');
    exit();
}

if ($script === 'script') {
    echo('
        <form action="#" method="post" id="form-interer">
            <div>
                <label for="ammount">Montant emprunté : </label>
                <input type="number" name="ammount">
                <span>€</span>
            </div>
            <div>
                <label for="duration">Durée de l\'emprunté : </label>
                <input type="text" name="duration">
            </div>
            <div>
                <label for="taux">Taux d\'intérêt : </label>
                <input type="text" name="taux">
                <span>%</span>
            </div>
            <div>
                <input type="button" onclick="calculerInterer()">
            </div>
        </form>
    ');
    exit();
}

if ($script === 'storage') {
    echo('
        <form action="#" method="post" id="form">
            <div>
                <label for="lastName">Nom :</label>
                <input type="text" name="lastName">
            </div>
            <div>
                <label for="firstName">Prénom : </label>
                <input type="text" name="firstName">
            </div>
            <div>
                <label for="mail">Email : </label>
                <input type="email" name="mail">
            </div>
            <div>
                <label for="pwd">Mot de passe : </label>
                <input type="password" name="pwd">
            </div>
            <div>
                <input type="button" onclick="testStorage()">
            </div>
        </form>
    ');
    exit();
}

if ($script === 'sound') {
    echo ('
        <div>
            <canvas id="demoCanvas" width="500" height="300"></canvas>
        </div>'
    );

}
