<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBank - Home</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $("#login").click(function () {

                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "checkuser.php",
                    data: "email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> <strong>Authenticated</strong></div>');

                            window.location.href = "userdashboard.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"><strong>Authentication</strong> failed </div>');                    

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> <strong>Error</strong> processing request. Please try again. </div>');
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
    <a class="navbar-brand" href="index.php">BloodBank Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav mr-auto"  >
    </ul>
        <form class="form-inline my-2 my-lg-0"><ul class="navbar-nav mr-auto"  >
            <li class="nav-item active">
            <a class="nav-link mnav" href="index.php">User Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link mnav" href="register.php">User Registration</a>
            </li>
            <li class="nav-item">
            <a class="nav-link mnav" href="adminlogin.php">Admin Login</a>
            </li>
        </ul>
        </form>
    </div>
    </nav>

    <div class="back-image w-100 vh-100 d-flex justify-content-center">

            <!--Main Body -->
        <div class="container-fluid" style="padding-top: 80px; height: 100vh;">
            <div class="row">
                <div class="col-lg-6 order-sm-12" >
                    <hr>
                    <h1 class="titles" style="text-align:center;">User Login Form</h1>
                    <hr>
                    <div id="add_err2"></div>
                    <form role="form" method="POST">
                        <div class="form-group">
                            <label for="email" class="lb">Email Address</label>
                            <input type="email" class="form-control" id="email"> 
                        </div>
                        <div class="form-group">
                            <label for="password" class="lb">Password</label>
                            <input type="password" class="form-control" id="password"> 
                        </div>
                        <button type="submit" class="btn btn-primary" id="login">login</button>
                    </form>
                    <div class="form-group col-lg-12">
                        <a href="register.php"><button type="submit" class="btn btn-default">Not a Member? Register here</button></a>
                    </div>
                </div>
                <div class="col-lg-6"  style="align-items: center;">
                        
                </div>
            </div>
        </div>    


    </div>




    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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