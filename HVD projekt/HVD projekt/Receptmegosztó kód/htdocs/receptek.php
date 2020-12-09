<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "receptdatabase";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, cim, kategoria, adatok FROM receptek";
$result = mysqli_query($conn, $sql);
$szam=0;
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
  $szam=$row["id"];

}
} else {
  echo "0 results";
}
echo $szam;
mysqli_close($conn);
