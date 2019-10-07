<?php 
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "bestsofar");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//if(isset($_POST['myFile'])){
	//$i = $_POST['meal_preference'];
//}


// Escape user inputs for security
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$surname = mysqli_real_escape_string($link, $_REQUEST['surname']); //phone_number 
$contactNumber = mysqli_real_escape_string($link, $_REQUEST['contactNumber']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);



// Attempt insert query execution
$sql = "INSERT INTO userprofile (email, name, surname, contactNumber, address, password) VALUES ( '$email', '$name', '$surname', '$contactNumber', '$address', '$password')";
if(mysqli_query($link, $sql)){
    echo "User added successfully.";
	//echo $i; 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>