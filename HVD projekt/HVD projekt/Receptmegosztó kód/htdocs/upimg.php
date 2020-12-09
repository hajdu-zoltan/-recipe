<?php
session_start();
?>
<?php
if (isset($_POST["submit"])) {


  $errors = array();
  $van = true;
  $temp = explode(".", $_FILES["image"]["name"]);
  $extension = end($temp);
  if (empty($_POST['cim'])) {
    $van = false;
    array_push($errors, "A cím mező üres!");
  }
  if (empty($_POST['kategoria'])) {
    $van = false;
    array_push($errors, "Vállasz egy kategoriát");
  }
  if (file_exists("uploads/" . $_FILES['image']['name'])) {
    $van = false;
    array_push($errors, "Ilyen nevű file már létezik!");
  }

  $filename = $_FILES["image"]["name"];
  $file_basename = substr($filename, 0, strripos($filename, '.'));
  $file_ext = substr($filename, strripos($filename, '.'));
  $filesize = $_FILES["image"]["size"];
  $allowed_file_types = array('.PNG', '.jpg', '.gif', '.jpng');

  if (in_array($file_ext, $allowed_file_types) && ($filesize < 2000000)) {




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
    $szam = 0;
    if (mysqli_num_rows($result) > 0) {

      while ($row = mysqli_fetch_assoc($result)) {
        $szam = $row["id"] + 1;
      }
    } else {
      echo "0 results";
    }
    echo $szam;
    mysqli_close($conn);





    $file_basename = $szam;
    $newfilename = $file_basename . $file_ext;
    echo $newfilename;
    if (file_exists("upload/" . $newfilename)) {

      array_push($errors, "You have already uploaded this file.");
    } else {
      move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $newfilename);
      array_push($errors, "File uploaded successfully.");
    }
  } elseif (empty($file_basename)) {

    array_push($errors, "Please select a file to upload.");
  } elseif ($filesize > 20000000) {

    array_push($errors, "The file you are trying to upload is too large.");
  } else {

    unlink($_FILES["imge"]["tmp_name"]);
  }
  header("location: ../upload.php");
}
if ($van) {
  $uid = $_SESSION["userid"];
  $db = new mysqli('localhost', 'root', '', 'receptdatabase');

  $cim = mysqli_real_escape_string($db, $_POST['cim']);
  $kategoria = mysqli_real_escape_string($db, $_POST['kategoria']);
  $adatok = mysqli_real_escape_string($db, $_POST['adatok']);
  $kepid = $newfilename;
  $active = 0;
  $sql = "INSERT INTO receptek(id,cim, kategoria, adatok,kepid,usersid,active)
VALUES (null,'{$cim}', '{$kategoria}', '{$adatok}','{$kepid}',{$uid},{$active})";
  $db->query($sql);
  header("location: ../upload_2.php");
}
?>