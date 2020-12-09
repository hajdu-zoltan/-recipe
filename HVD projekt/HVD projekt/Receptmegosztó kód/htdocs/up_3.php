<?php
if(isset($_POST["submit1"])) {
    $errors =array();
    $van =true;


    if(empty($_POST['lepes'])){
        $van =false;
          array_push($errors, "Tölsd ki a lépés mezőt!");
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
        

        $db = new mysqli('localhost','root','','receptdatabase');
      
      $adat= mysqli_real_escape_string($db , $_POST['lepes']);
      $receptid= $szam;
      $sql = "INSERT INTO lepesek(id,receptid,adat)
      VALUES (null,'{$szam}', '{$adat}')";
      $db ->query($sql);
    
     
      $_SESSION ['sz']=$_SESSION['sz']+1;
      
 
      }else{
        header("location: ../upload_3.php");
        $_SESSION ['szam']=$szam-1;
      }
    
}
if(isset($_POST["submitnext"])) {
  header("location: ../index.php");
  $_SESSION ['sz']=1;
}
