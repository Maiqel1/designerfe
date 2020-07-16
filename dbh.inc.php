<?php

$Servername = "http://db4free.net:3306";
$dbUsername = "designerfe";
$dbPassword = "12345678";
$dbName = "stage7";

  $conn = mysqli_connect($Servername, $dbUsername, $dbPassword, $dbName);
  //$conn = new_msqli("localhost", "id14345990_designerfe", "Mo0?i^Hc4uU&nWc@", "id14345990_stage7");

  /*mysqli_select_db($conn, "db name") or die("no db found");

  if(isset($_POST['submit'])){
    $email = $_POST['email'];

    $query = "INSERT INTO diggit (email) VALUES('$email')";h2
    if(mysqli_query($conn, $query)){
      //echo "<h1>SUCCESS<h1>";
      header("location: success.html");
    } else {
      // echo "<h1>FAILED<h1>";
      header("location: failed.html");
    }
  }*/
 ?>
