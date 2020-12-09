<?php
include_once 'header.php';
require_once 'includes/functions.inc.php';
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
include_once 'header.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "receptdatabase";
$kategoria = $_GET['id'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT id, cim, kategoria, adatok, kepid,active FROM receptek WHERE kategoria ='$kategoria' AND active=1 ";
$result = mysqli_query($conn, $sql);
echo '<div class =row>';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="column ">';
        echo '<img src="uploads/' . $row['kepid'] . '" />';
        echo '<h2>';
        echo $row['cim'];
        echo '</h2>';
        echo '<div class="gomb">';
        echo '<tr>

                            <td><a id="as" href="vallasztottrecept.php?id=' . $row['id'] . '"><h2>Megtekintés</h2></a></td>
                        </tr>';
        echo '</div>';
        echo '</div>';
    }
}
echo '</div>';


?>