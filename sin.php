<?php
//including msql database connection

include 'process.php';
if ($conn->connect_error){
    echo "connection not established";
} else {
    echo "connection is established";
}

$id = 0;
//input variables
//declare variables to store input
$username = "";
$email = "";
$pass = "";

//isset to check if submit button has been clicked

if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $email = $_POST['mail'];
    $pass = $_POST['pass'];
    # code...capture user information
}



?>