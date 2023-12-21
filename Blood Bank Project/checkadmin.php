<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";

// create connection
$mysqli = new mysqli($servername, $username, $password,$dbname);

if(!$mysqli){
	die("Connection  failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM admins WHERE email = '$email' AND password = PASSWORD('$password')";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_row >= 1){
    $_SESSION['login'] = $row['admin_id'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['lname'] = $row['lname'];

    echo 'true';
    
}
else{
    echo 'false';
}


?>