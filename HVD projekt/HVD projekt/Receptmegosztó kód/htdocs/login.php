<?php
include_once 'header.php';
?>
<div>
</div>

<div class="main">

    <h1 id="h1sing">
        Bejelenkezés</h1>
    <br>
    <br>
    <br>

    <form method="POST" action="includes/login.inc.php">
        <div id="name">
            <input class="company" type="text" name="uid" placeholder="E-mail/Felhasználónév...">
            <br>
            <br>
            <input class="company" type="password" name="pwd" placeholder="Jelszó...">

        </div>
        <br>
        <br>
        <br>
        <button class="submit"type="submit" name="submit">Bejelentkezés</button>
    </form>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Töltsd ki az összes mezőt!</p>";
        } else if ($_GET["error"] == "wronglogin") {
            echo "<p>Hibás bejelentkezési információ!</p>";
        }
    }
    ?>
</div>


<?php
include_once 'footer.php';
?>