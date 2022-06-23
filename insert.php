        <?php
// to get values from login.php
    $username = $_POST['name'];
    $password = $_POST['pass'];
    $mail = $_POST['student mail'];

    //to prevent mysql injection
    $username = stripslashes($username);
    $mail = stripslashes($mail);
    $password = stripslashes($password);
$username = mysqli_real_escape_string($username);
$mail = mysqli_real_escape_string($mail);


    // connect to server and select database
    mysqli_connect("localhost","root","");
"");
 
    //query the database user for user 
mysqli_query("select * from users where username = '$username' and email = $email and password = $password")
         or die("Failed to query database".mysql_error());
$row = mysqli_fetch_array($result);
if ($row['username']== $username && $row['pass'] == $password && $row['email'] == $email ){
    echo "Login successful welcome ";

} else {
 echo "Login not succesful";
}

        ?>