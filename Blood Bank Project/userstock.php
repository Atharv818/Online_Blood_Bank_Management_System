<?php

session_start();

if(isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bloodbank";

$mysqli = new mysqli($servername,$username,$password,$db);

if($mysqli->connect_error){
    die("Connection Failed ". $mysqli->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBank - Stocks</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Script-->
    <script type="text/javascript">
        $(document).ready(function () {

            $("#request").click(function () {
                
                name = $("#name").val();
                bloodgroup = $("#bloodgroup").val();
                mobile_no = $("#mobile_no").val();
                
                $.ajax({
                    type: "POST",
                    url: "makereq.php",
                    data: "name=" + name + "&bloodgroup=" + bloodgroup + "&mobile_no=" + mobile_no,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> <strong>Request</strong> Sent. </div>');

                            window.location.href = "userdashboard.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Request</strong> Not Sent </div>');                    

                        } else if (html == 'name') {
                            $("#add_err2").html('<div class="alert alert-danger">  <strong> Name</strong> is required.  </div>');
                                                
                        } else if (html == 'bg') {
                            $("#add_err2").html('<div class="alert alert-danger"> <strong>Blood Group </strong> is required. </div>');

                        } else if (html == 'mob') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Mobile Number </strong> is required.  </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> <strong>Error</strong> processing request. Please try again.  </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>

</head>
<body>
<nav class="navbar mynavbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">BloodBank Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav mr-auto"  >
    </ul>
        <form class="form-inline my-2 my-lg-0"><ul class="navbar-nav mr-auto"  >
            <li class="nav-item ">
            <a class="nav-link" href="userdashboard.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="aboutus.php">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="ourmembers.php">Our Members</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="joinus.php">Join Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="userstock.php">Make Request</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        </form>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-12 order-sm-2">
            <?php
                $query = "SELECT * FROM stock";
                $result = $mysqli->query($query);
                echo "<div class='table-responsive'>";
                echo "<table class='table table-hover' border='1'>
                    <thead>
                        <tr>
                        <th scope='col'> Blood Group </th>
                        <th scope='col'> Stock </th>
                        <tr>
                    </thead>";

                if($result->num_rows > 0){
                    echo "<tbody>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row['bloodgroup'] . "</td>";
                        echo "<td>" . $row['stock'] . "</td>";
                        echo "</tr>";
                    }
                    echo "<tbody";
                }
                echo "</table>";
                echo "</div>";
            ?>  
        </div>
        <div class="col order-sm-12">
            <hr>
            <h1 class="intro-text text-center">Request Form</h1>
            <div id="add_err2"></div>
            <hr>
            <form role="form" method="post" >
                <div class="row">
                    <div class="form-group col-lg-12">
                        <label class="lb">Name</label>
                        <input type="text" id="name" name="name" maxlength="30" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="lb">Blood Group</label>
                        <select id="bloodgroup" name="bloodgroup"  class="form-control">
                            <option selected>Choose...</option>
                            <option value="A positive">A+</option>
                            <option value="A negative">A-</option>
                            <option value="B positive">B+</option>
                            <option value="B negative">B-</option>
                            <option value="O positive">O+</option>
                            <option value="O negative">O-</option>
                            <option value="AB positive">AB+</option>
                            <option value="AB negative">AB-</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-12">
                        <label class="lb">Mobile Number</label>
                        <input type="text" id="mobile_no" name="mobile_no" maxlength="25" class="form-control" >
                    </div>
                    <div class="form-group col-lg-12">
                        <button type="submit" class="btn btn-primary" id="request">Make Request</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once "footer.php"?>
</body>

<?php
}
else{
    header("location:index.php");
}


?>

