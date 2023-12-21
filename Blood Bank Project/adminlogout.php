<?php
session_start();

unset($_SESSION['alogin']);
unset($_SESSION['fname']);
unset($_SESSION['lname']);

header("location:adminlogin.php?logout=true");

?>
