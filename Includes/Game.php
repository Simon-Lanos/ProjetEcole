<h1>Game lol</h1>
<!--<script src="./assets/js/game.js" type="text/javascript"></script>-->
<!--<canvas id="gc" width="400" height="400"></canvas>-->
<!--<div>
    <script
            src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
            crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('body').html('Hello world');
        document.getElementsByTagName('body')
    </script>
</div>-->
<script src="./assets/js/script.js" type="text/javascript"></script>

<form action="#" method="post" id="form-interer">
    <div>
        <label for="ammount">Montant emprunté : </label>
        <input type="number" name="ammount">
        <span>€</span>
    </div>
    <div>
        <label for="duration">Durée de l'emprunté : </label>
        <input type="text" name="duration">
    </div>
    <div>
        <label for="taux">Taux D'intérêt : </label>
        <input type="text" name="taux">
    </div>
    <div>
        <input type="button" onclick="calculerInterer()">
    </div>
</form>