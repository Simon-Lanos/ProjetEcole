<?php
if (isset($_GET['scr'])) {
    $script = $_GET['scr'];
} else {
    $script = 'game';
}
?>

<h1><?= strtoupper($script); ?> lol</h1>
<script src="./assets/js/<?= $script . '.js' ?>"></script>
<?php
if ($_GET['scr'] === 'game') {
    echo('
        <canvas id="gc" width="400" height="400"></canvas>
    ');
}

if ($_GET['scr'] === 'script') {
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
}
