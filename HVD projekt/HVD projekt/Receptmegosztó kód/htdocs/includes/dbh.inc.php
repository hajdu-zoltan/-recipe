<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassoword = "";
$dbName = "receptdatabase";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassoword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
