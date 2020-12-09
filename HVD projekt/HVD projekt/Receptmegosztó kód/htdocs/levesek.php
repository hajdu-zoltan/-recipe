<?php
include_once 'header.php';

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "receptdatabase";
                    $kategoria="1";

                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                        }
                    $sql = "SELECT id, cim, kategoria, adatok, kepid FROM receptek WHERE kategoria ='$kategoria'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="foetel-recept">';
                            echo '<img src="uploads/'.$row['kepid'].'" />';
                            echo '<h2>';
                            echo $row['cim'];
                            echo '</h2>';
                            $receptid=$row['id'];
                            $sql1 = "SELECT id, receptid, neve, mennyisege, mertekegysege FROM hozzavalok WHERE receptid ='$receptid'";
                            $result1 = mysqli_query($conn, $sql1);
                            if (mysqli_num_rows($result1) > 0) {
                                while($row1 = mysqli_fetch_assoc($result1)) {
                                    echo $row1['neve']. " ".$row1['mennyisege']." ".$row1['mertekegysege'].".";
                            }
                            echo '</div>';
                        }
                    }
                }
