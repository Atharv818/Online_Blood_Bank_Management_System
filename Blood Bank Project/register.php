<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBank - Registration </title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Script-->
    <script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {
                
                fname = $("#fname").val();
                lname = $("#lname").val();
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> <strong>Donors Registration Successful</strong> processed. </div>');

                            window.location.href = "userdashboard.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Email Address</strong> already in system. </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger">  <strong>First Name</strong> is required.  </div>');
                                                
                        } else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> <strong>Last Name</strong> is required. </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Email Address</strong> is required.  </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> <strong>Email Address</strong> format is not valid.  </div>');
                                                
                        } else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> <strong>Password</strong> must be at least 4 characters . </div>');

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

    <style>
        .back-image{
            background-image: url('img/background1.jpeg');
            background-size: cover;
        }
    </style>

</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top p-md-3">
        <a class="navbar-brand" href="#">BloodBank Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav mr-auto"  >
        </ul>
            <form class="form-inline my-2 my-lg-0"><ul class="navbar-nav mr-auto"  >
            <li class="nav-item">
                <a class="nav-link mnav" href="index.php">User Login</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link mnav" href="register.php">User Registration</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link mnav" href="adminlogin.php">Admin Login</a>
                </li>
            </ul>
            </form>
        </div>
    </nav>


    <div class="container-fluid back-image w-100 vh-100 d-flex justify-content-center">

        <div class="container-fluid" style="padding-top: 80px; height: 100vh;">
            <div class="row">
                <div class="col-lg-6 order-sm-12" >
                <div>
                        <hr>
                        <h1 class="titles intro-text text-center">Registration form
                        </h1>
                        <div id="add_err2"></div>
                        <hr>
                        <form role="form" method="post" >
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="lb">First Name</label>
                                    <input type="text" id="fname" name="fname" maxlength="25" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="lb">Last Name</label>
                                    <input type="text" id="lname" name="lname" maxlength="25" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="lb">Email Address</label>
                                    <input type="email" id="email" name="email" maxlength="25" class="form-control" required>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-lg-12">
                                    <label class="lb">Password</label>
                                    <input type="password" id="password" name="password" maxlength="25" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn btn-primary" id="register">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 order-sm-2"  style="align-items: center;">
                </div>
            </div>
        </div>   

    </div>

 


<!-- Footer -->
<footer class="page-footer fixed-bottom  font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2021 Copyright:
  <a href="#"> bloodbankmanagement.com</a>
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>