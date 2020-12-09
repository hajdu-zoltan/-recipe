<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="hu" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Recept</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav>
        <div class="wrapper">
            <a href="index.php"><img src="img/logo.png" alt="Logo"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php

                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Profil</a></li>";
                    echo "<li><a href='upload.php'>ÚJ Recept</a></li>";
                    echo "<li><a href='logout.php'>Kijelentkezés</a></li>";
                } else {

                    echo "<li><a href='signup.php'>Regisztráció</a></li>";
                    echo "<li><a href='login.php'>Bejelentkezés</a></li>";
                }

                if ($_SESSION["useruid"] == "Admin") {
                    echo "<li><a href='admin.php'>Admin</a></li>";
                }
                ?>
            </ul>
        </div>
    </nav>