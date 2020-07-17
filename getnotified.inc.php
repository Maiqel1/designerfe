<?php

include 'dbh.inc.php';

$email = trim($_POST['email']);  

$email = stripslashes($email);

$email = htmlspecialchars($email); // to remove special characters

$result = mysqli_num_rows(mysqli_query($conn, "SELECT 1 FROM diggit2 WHERE email = '$email';"));

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Check if email is valid
{
    $signal = 'bad';
    $message = 'Please enter a valid email';
} elseif ($result > 0) // Check if email exists already
{
    $signal = 'bad';
    $message = 'Email already exists';
} else { // All is good.. Lets save the email
    $sql = "INSERT INTO diggit2 (email) VALUES ('$email')";
    
    if (mysqli_query($conn, $sql)) {
        $signal = 'ok';
        $message = 'Email registered successfully';
    } else {
        $signal = 'bad';
        $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn); // Close connection

$data = array(
    'signal' => $signal,
    'msg' => $message
);

// Return data
echo json_encode($data);
