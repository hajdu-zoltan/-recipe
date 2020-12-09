<?php
session_start();
$acid=$_SESSION['activeid'];
echo $acid;
$servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "receptdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["submit"])) {


            $sql = "UPDATE receptek SET active=1 WHERE id=$acid";

            if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            } else {
            echo "Error updating record: " . $conn->error;
            }
            header("location: ../admin.php");
         }
else{
    $ids=3;
    $sql = "UPDATE receptek SET active=2 WHERE id=$acid";
    echo "Szopd ki";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
        }
        header("location: ../admin.php");
}
