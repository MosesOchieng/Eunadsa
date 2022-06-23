<?php
header("Location:dash.php");
exit();
?>
 
<?php
$server_name = 'localhost';
$user_name = "root";
$password = "12";
$database = "eunasda";

//create connection

$conn = mysqli_connect($server_name, $user_name, $password, $database);

//check connection
if(!$conn){
    echo 'Connection Failed';
}
else{
    echo "Database connection successful";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['passkey'];
}
//variables to be INSERTED

$sql ="INSERT * INTO 'table'('username','email','passkey') VALUES('$name, $email, $pass')";
$result = mysqli_query($conn,$sql);
//while($row = mysqli_fetch_assoc($result)){

//}
//adding a new trip to the table
if($result){
    echo "The record has been inserted successfully";
}else{
    echo "The record received an error";
}

?>

