<?php
// Initialise session
session_start();

if(isset($_SESSION['login'])){

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        <li class="nav-item active">
            <a class="nav-link" href="adminhome.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="deletea.php">Delete Records</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="updatea.php">Update Information</a>
            </li>
            <a class="nav-link" href="adminstock.php">Review Stocks</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="requests.php">Requests</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="adminlogout.php">Logout</a>
            </li>
        </ul>
        </form>
    </div>
</nav>


<div class="container-fluid" >
    <div class="row justify-content-center" style="margin-top:20px">
        
        
        
        <div class="card mycards col-md-3 text-dark bg-light mb-3" style="max-width: 18rem;margin:10px">
            <div class="card-header">Delete Records</div>
            <div class="card-body">
                <p class="card-text">Review and Delete Specific Donor's Data</p>
                <a href="deletea.php" class="btn btn-danger">Delete</a>
            </div>
        </div>

        <div class="card mycards col-md-3 text-dark bg-light mb-3" style="max-width: 18rem; margin:10px">
            <div class="card-header">Update Records</div>
            <div class="card-body">
                <p class="card-text">Review and Update Specific Donor's Data</p>
                <a href="updatea.php" class="btn btn-primary">Update</a>
            </div>
        </div>

        <div class="card mycards col-md-3 text-dark bg-light mb-3" style="max-width: 18rem;margin:10px">
            <div class="card-header">Review Stocks</div>
            <div class="card-body">
                <p class="card-text">Review and Update BloodBank's Stock </p>
                <a href="adminstock.php" class="btn btn-primary">Review</a>
            </div>
        </div>

        <div class="card mycards col-md-3 text-dark bg-light mb-3" style="max-width: 18rem;margin:10px">
            <div class="card-header">Requests</div>
            <div class="card-body">
                <p class="card-text">View Requests to the Bloodbank</p>
                <a href="requests.php" class="btn btn-info">Requests</a>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php"?>


</body>
</html>
<?php
}
else{
    header("location:adminlogin.php");
}
?>