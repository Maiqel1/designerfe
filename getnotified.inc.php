<?php

include 'dbh.inc.php';

$result = mysqli_num_rows(mysqli_query($conn, "SELECT 1 FROM diggit2 WHERE email = '$email';"));

if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $signal = 'bad';
    $message = 'Please enter a valid email';
} elseif ($result > 0) 
{
    $signal = 'bad';
    $message = 'Email already exists';
} else { 
    $sql = "INSERT INTO diggit2 (email) VALUES ('$email')";
    
    if (mysqli_query($conn, $sql)) {
        $signal = 'ok';
         header("location: index.html");
}

mysqli_close($conn); 

$data = array(
    'signal' => $signal,
    'msg' => $message
);

// Return data
echo json_encode($data);
