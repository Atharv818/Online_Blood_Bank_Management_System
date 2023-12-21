<?php
// Initialise session
session_start();

if(isset($_SESSION['login'])){

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBank - User Dashboard</title>


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
    <div class="header">
        <div class="menu-bar">
            <nav class="navbar mynavbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#">BloodBank Management System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav mr-auto"  ></ul>
                    <form class="form-inline my-2 my-lg-0">
                        <ul class="navbar-nav mr-auto"  >
                            
                            <li class="nav-item active">
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
                            
                            <li class="nav-item">
                                <a class="nav-link" href="userstock.php">Make Request</a>
                            </li>
                            
                            <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        
                        </ul>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid">
        

        <div class="row justify-content-center">
        <img class="img-fluid" src="img/blood_home.jpg" alt=""srcset="">
        </div>

        <div class="row justify-content-center" style="margin-top:20px" >        
            <div class="col-sm-3 card " style="max-width: 18rem;margin:10px">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <p class="card-text">Search Donor's Records By their blood Groups</p>
                    <a class="btn btn-primary" href="searchbg.php">Search</a>
                </div>
            </div>
            
            <div class="col-sm-3 card " style="max-width: 18rem;margin:10px">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <p class="card-text">Search Donor's Records Which are near you</p>
                    <a class="btn btn-primary" href="searchcity.php">Search</a>
                </div>
            </div>

           <div class="col-sm-3 card " style="max-width: 18rem;margin:10px">
                <div class="card-header">Register</div>
                <div class="card-body">
                    <p class="card-text">Register Yourself as a member</p>
                    <a class="btn btn-primary" href="joinus.php">Join us</a>
                </div>
            </div>

            <div class="col-sm-3 card " style="max-width: 18rem;margin:10px">
                <div class="card-header">Request</div>
                <div class="card-body">
                    <p class="card-text">Request blood from bloodbank</p>
                    <a class="btn btn-primary" href="userstock.php">Request</a>
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
    header("location:index.php");
}
?>