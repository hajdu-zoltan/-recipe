<?php
include_once 'header.php';
?>

<body>


    <div class="main">
        <h1 id="h1sing">
            Regisztráció</h1>
        <br>

        <form method="POST" action="includes/signup.inc.php">
            
            <h2 class="name">Felhasználónév:</h2>
                <input class="company" type="text" name="uid" placeholder="Felhasználónév...">
                <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "usernametaken") {
                        echo "<p id='p1'>A választott felhasználónév már foglalt, kérem válasszon egy másikat!</p>";
                    }
                }
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "invaliduid") {
                        echo "<p>Válassz egy megfelelő felhasználónevet!</p>";
                    }
                }
                ?>
            
            <h2 class="name">Jelszó :</h2>
            <input class="company" type="password" name="pwd" placeholder="Jelszó...">
            <h2 class="name">Jelszó ismétlés:</h2>
            <input class="company" type="password" name="pwdrepeat" placeholder="Jelszó ismétlése...">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>A jelszavak nem egyeznek meg, kérem próbálja újra!</p>";
                }
            }
            ?>
            <h2 class="name">Teljes név :</h2>
            <input class="company" type="text" name="name" placeholder="Teljes név...">
            <h2 class="name">
                E-mail cím :</h2>
            <input class="email" type="email" name="email" placeholder="E-mail cím...">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "invalidemail") {
                    echo "<p>Válassz egy megfelelő email címet!</p>";
                }
            }
            ?>

            <button class="submit" type="submit" name="submit">Regisztráció</button>
            <br>
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Töltsd ki az összes mezőt!</p>";
                }
            }
            ?>
        </form>
    </div>

    </div>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "none") {
            header("location: ../login.php");
        }
    }
    include_once 'footer.php';
    ?>

</body>