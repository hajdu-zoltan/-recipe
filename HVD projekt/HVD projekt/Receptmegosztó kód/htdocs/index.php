<?php
include_once 'header.php';
require_once 'includes/functions.inc.php';
?>
<div class="wrapper">
    <section class="index-intro">
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<p>Üdvözlünk " . $_SESSION["useruid"] . " !</p>";
        }
        ?>
        <h1>Receptmegosztó</h1>
        <p>Üdvözlünk az oldalon !</p>
    </section>
    <div class="hero-image">
        <section class="index-categories">
            <section class="index-categories">
                <h2 class="text4">Kategóriák</h2>
                <div class="index-categories-list">
                    <div class="index-categorias-div">
                        <a href="recept.php?id=4">
                            <img src="img/eloetel.png" width="300px" height="168px">

                            <h3>Előételek</h3>

                        </a>
                    </div>
                    <div class="index-categorias-div">
                        <a href="recept.php?id=1">
                            <img src="img/leves.jpg" width="300px" height="168px">
                            <h3>Levesek</h3>
                        </a>
                    </div>
                    <div class="index-categorias-div">
                        <a href="recept.php?id=2">
                            <img src="img/foetel.png" width="300px" height="168px">
                            <h3>Főételek</h3>
                        </a>
                    </div>

            </section>
            <section class="index-categories">
                <div class="index-categories-list">
                    <div class="index-categorias-div">
                        <a href="recept.php?id=3">
                            <img src="img/desszert.jpg" width="300px" height="168px">
                            <h3>Desszertek</h3>
                        </a>
                    </div>
                    <div class="index-categorias-div">
                        <a href="recept.php?id=6">
                            <img src="img/szosz.png" width="300px" height="168px">
                            <h3>Szószok</h3>
                        </a>
                    </div>
                    <div class="index-categorias-div">
                        <a href="recept.php?id=7">
                            <img src="img/salata.png" width="300px" height="168px">
                            <h3>Saláták</h3>
                        </a>
                    </div>
                    <div class="index-categorias-div">
                        <div class="gomb">

                            <a href="recept.php?id=5">
                        </div>
                        <img src="img/italok.png" width="300px" height="168px">
                        <h3>Italok</h3>
                        </a>
                    </div>
                </div>
            </section>
    </div>
</div>
<?php
include_once 'footer.php';
?>