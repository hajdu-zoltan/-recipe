<?php
session_start();
if(isset($_POST["submit"])) {
    $errors =array();
    $van =true;


    if(empty($_POST['hozzavalonev'])){
        $van =false;
          array_push($errors, "Tölsd ki a hozzávalók mezőt!");
      }
      if(empty($_POST['mennyisege'])){
        $van =false;
          array_push($errors, "Tölsd ki a mennyiség mezőt!");
      }
      if(empty($_POST['kategoria'])){
        $van =false;
          array_push($errors, "Adj meg egy kategoriát!");
      }
      if($van){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "receptdatabase";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
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

        $db = new mysqli('localhost','root','','receptdatabase');
      
      $hozzavalonev= mysqli_real_escape_string($db , $_POST['hozzavalonev']);
      $mennyisege = mysqli_real_escape_string($db , $_POST['mennyisege']);
      $kategoria= mysqli_real_escape_string($db , $_POST['kategoria']);
      $receptid= $szam;
      $sql = "INSERT INTO hozzavalok(id,receptid,neve, mennyisege, mertekegysege)
      VALUES (null,'{$szam}', '{$hozzavalonev}', '{$mennyisege}', '{$kategoria}')";
      $db ->query($sql);
    
        session_start();
        $szam=$_SESSION['szam'];
        $_SESSION ['szam']=$szam;
      
        header("location: ../upload_2.php");
      }else{
        header("location: ../upload_2.php");
        $_SESSION ['szam']=$szam-1;
      }
    
}
else{
    header("location: ../upload_3.php");
}
