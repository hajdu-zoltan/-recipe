<?php
include_once 'header.php';
?>
<html>

<head>
</head>

<body>
    <section class="signup-form">
        <h1>3/3 Elkészítés:</h1>
        <div class="signup-form-form">

            <form action="upload_3.php" method="post" enctype="multipart/form-data">
                <?php
                include_once 'up_3.php';
                if (isset($_SESSION['sz']))
                    echo $_SESSION['sz'] . ". Lépés";
                $szam = $_SESSION['sz'];
                $_SESSION['sz'] = $szam;
                ?>
                <input class="text3" type="text" name="lepes" placeholder="pl kipakolás...">
                <button class="submit"type="submit" name="submit1">Hozzáadás</button>
                <button class="submit"type="submit" name="submitnext">Beküldés</button>

            </form>
        </div>
    </section>