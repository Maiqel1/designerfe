<?php

$servername = "db4free.net:3306";
$username = "designerfe";
$password = "12345678";

// Connect to database
$conn = mysqli_connect($servername, $username, $password, 'stage7');

//Check connection
if (!$conn) {
    $data = array(
        'signal' => 'bad',
        'msg' => "Connection failed:".mysqli_connect_error()
    );
    
    die(json_encode($data));
}

?>
