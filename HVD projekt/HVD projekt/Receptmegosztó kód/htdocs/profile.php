<?php
include_once 'header.php';
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/Style1.css">
</head>

<?php
$id = $_SESSION["userid"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "receptdatabase";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT usersID, usersName, usersEmail, usersUid, usersPwd FROM users WHERE UsersID =$id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="row">';
        echo '<div class="column1">';
        echo "Felhasználóneve: " . $row['usersName'];
        echo '<br>';
        echo "Emailcíme: " . $row['usersEmail'];
        echo '<br>';
        echo "Nickname: " . $row['usersUid'];
        echo '<br>';
        echo '</div>';
        echo '</div>';
    }
}
echo '<h1>';
echo "Receptei:";
echo '</h1>';
$darab = 1;
$sql = "SELECT id, cim, kategoria, adatok, kepid,usersid FROM receptek WHERE usersid ='$id'";
$result = mysqli_query($conn, $sql);
echo '<div class="row">';
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="column">';
        echo '<img src="uploads/' . $row['kepid'] . '" />';
        echo '<h2>';
        echo $row['cim'];
        echo '</h2>';
        echo '</div>';
        $darab++;
    }
}
echo '</div>';
?>