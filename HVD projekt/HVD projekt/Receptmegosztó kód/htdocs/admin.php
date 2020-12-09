<?php
include_once 'header.php';
require_once 'includes/functions.inc.php';
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "receptdatabase";
$darab = 0;
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql20 = "SELECT id, cim, kategoria, adatok, kepid, active FROM receptek WHERE active =0";
$result20 = mysqli_query($conn, $sql20);
if (mysqli_num_rows($result20) > 0) {

    while ($row20 = mysqli_fetch_assoc($result20)) {
        $darab = $row20['id'];
    }
}
$sql = "SELECT id, cim, kategoria, adatok, kepid, active FROM receptek WHERE active =0 AND id=$darab";
$result = mysqli_query($conn, $sql);
echo '<div class="row">';
echo '   <form action="active.php" method="post" enctype="multipart/form-data">';
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo '<div class="ki_leiras">';
        echo '<img src="uploads/' . $row['kepid'] . '" />';
        echo '<h2>';
        echo $row['cim'];
        echo '</h2>';
        echo '<h3>';
        echo "Hozzávalók :";
        echo '</h3>';
        echo "<br>";
        $_SESSION['activeid'] = $row['id'];
        $receptid = $row['id'];
        $sql1 = "SELECT id, receptid, neve, mennyisege, mertekegysege FROM hozzavalok WHERE receptid ='$receptid'";
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) > 0) {
            while ($row1 = mysqli_fetch_assoc($result1)) {
                echo "- " . $row1['neve'] . " " . $row1['mennyisege'] . " " . $row1['mertekegysege'];
                echo '<br>';
            }
            echo "<br>";
            echo '<h3>';
            echo "Lépések :";
            echo '</h3>';
            $sql2 = "SELECT id, receptid, adat FROM lepesek WHERE receptid ='$receptid'";
            $result2 = mysqli_query($conn, $sql2);
            if (mysqli_num_rows($result2) > 0) {
                $lepes = 1;
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    echo '<br>';
                    echo $lepes . ". lépés: " . $row2['adat'];
                    echo '<br>';
                    $lepes++;
                }
            }
            echo '<br>';
            echo '<button type="submit" name="delete">Törlés</button>';
            echo '<button type="submit" name="submit">Aktiválás</button>';
        } else {
            echo '<button type="submit" name="delete">Törlés</button>';
            echo '</div>';
        }

        echo '</div>';
    }
}
?>