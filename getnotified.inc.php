<?php

// get value of email on submit
  $email = $_POST['email'];

  //database details

  $dbhost = "http://db4free.net:3306";
  $dbusername = "designerfe";
  $dbpassword = "12345678";
  $tablename = "diggit";

  // Attempt a MySQL connection.
  $sqlconn = new mysqli($dbhost, $dbusername, $dbpassword, $tablename);

  // Check if connection was successful and return an error message if otherwise
  if($sqlconn === false){
    die("ERROR: Couldn't connect to database. " . $mysqli->connect_error);
  } else {

  // mySQL query execution to submit data
  $sql = "INSERT INTO notification (email) VALUES ('$email')";

  if($sqlconn->query($sql) === true){
   echo "Submission successful";
  } else{
   echo "ERROR: Could not execute $sql. " . $mysqli->error;
  }

  // Close the connection
  $sqlconn->close();
  }

?>
