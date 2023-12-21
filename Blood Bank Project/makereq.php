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

$name = mysqli_real_escape_string($mysqli, $_POST['name']);
$bloodgroup = mysqli_real_escape_string($mysqli, $_POST['bloodgroup']);
$mobile_no = mysqli_real_escape_string($mysqli, $_POST['mobile_no']);

if(strlen($name)<2){
    echo 'name';
} elseif (strlen($bloodgroup)<=3){
    echo 'bg';
} elseif (strlen($mobile_no)<10){
    echo 'mob';
} else {
    $query = "INSERT INTO request(name, bloodgroup, mobile_no) VALUES ('$name','$bloodgroup','$mobile_no')";
    $insert_row = $mysqli->query($query);
    if($insert_row){
        echo "true";
    } 
    else{
        echo "false";
    }  
}


$mysqli->close();
?>