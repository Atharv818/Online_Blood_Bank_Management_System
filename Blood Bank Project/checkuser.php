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

$query = "SELECT * FROM members WHERE email = '$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_row >= 1){
    if(password_verify($password, $row['password'])){
        $_SESSION['login'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];

        echo 'true';
    }
    else{
        echo 'false';
    }
}
else{
    echo 'false';
}


?>