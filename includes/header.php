<header>
    <div class="nav-head-triangle">
    <ul class="nav">
        <li  class="nav-head"><a href="./index.php?page=home">Accueil</a></li>
        <li  class="nav-head"><a href="./index.php?page=register">Inscrition</a></li>
        <li  class="nav-head"><a href="./index.php?page=login">Login</a></li>
        <li  class="nav-head"><a href="./index.php?page=articles">Articles</a></li>
        <li  class="nav-head"><a href="./index.php?page=exp">Exemple</a></li>
        <li  class="nav-head"><a href="./index.php?page=game">Game</a></li>
    </ul>
    </div>
    <?php
    if (isset($_SESSION['user'])) {

        $nom = $_SESSION['user']['firstName'];

        echo "<p>Bonjour " . $nom . " !</p>";
        echo "<form method='post' action='#'><input type='submit' value='LogOut' name='logOut'/></form>";

        if (isset($_POST['logOut'])) {
            unset($_SESSION['user']);
            echo 'Vous êtes actuellement déconectés';
        }
    }
    else {
        echo '<a href="./index.php?page=login">Login</a>';
    }
    ?>

</header>