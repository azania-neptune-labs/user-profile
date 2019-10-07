<?php 
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "bestsofar");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']); 
$number = mysqli_real_escape_string($link, $_REQUEST['phone_number']);
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);



// Attempt insert query execution
$sql = "INSERT INTO login (firstName, lastName, email, contact, username, password) VALUES ( '$first_name', '$last_name', '$email', '$number', '$username', '$password')";
if(mysqli_query($link, $sql)){
    echo "User added successfully.";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
}

// Close connection
mysqli_close($link);
?>