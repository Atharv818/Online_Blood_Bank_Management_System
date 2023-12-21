<?php

session_start();

if(isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
}
else{
    header("location:adminlogin.php");
}

?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "bloodbank";

$mysqli = new mysqli($servername,$username,$password,$db);

if($mysqli->connect_error){
    die("Connection Failed " . $mysqli->connect_error);
}

$sql = "SELECT donor_id, donor_name, mobile_no, bloodgroup,age,gender, address, city FROM donors";
$result = $mysqli->query($sql);

?>
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<nav class="navbar mynavbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">BloodBank Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav mr-auto"  >
    </ul>
        <form class="form-inline my-2 my-lg-0"><ul class="navbar-nav mr-auto"  >
        <li class="nav-item">
            <a class="nav-link" href="adminhome.php">Home</a>
            </li>
            <li class="nav-item activate">
            <a class="nav-link active" href="deletea.php">Delete Records</a>
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

<div class="container">
    <div class="row justify-content-center">
        <h1>Delete Donor's Records</h1>
    </div>
    <div class="row table-responsive">
        <table border='1' class="table table-hover"  cellspacing="2" cellpadding="2" >
                <?php
                    if($result->num_rows>0){

                        echo "<thead>
                        <tr>
                        <th>Donor's ID</th>
                        <th>Donor's Name</th>
                        <th>Mobile Number</th>
                        <th>Blood Group </th>
                        <th>Donor's Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>City</th>
                        </tr>
                        </thead>";
                        while($row = $result->fetch_assoc()){
                ?>  
                <tr>
                    <td><?php echo $row["donor_id"]; ?></td>
                    <td><?php echo $row["donor_name"]; ?></td>
                    <td><?php echo $row["mobile_no"]; ?></td>
                    <td><?php echo $row["bloodgroup"]; ?></td>
                    <td><?php echo $row["age"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td><?php echo $row["city"]; ?></td>
                    <td><a class="btn btn-danger rounded-pill" href="delusera.php?donor_id=<?php echo $row["donor_id"] ?>">Delete</a></td>
                </tr>
                
                <?php	
                } 
                ?>
        </table>
    </div>

    <?php require_once "footer.php"?>
</div>

<?php
    } else{
        echo "0 Results";
    }

$mysqli->close();
?>

