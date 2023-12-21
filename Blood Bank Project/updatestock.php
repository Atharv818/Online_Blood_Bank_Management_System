<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bloodbank";

$mysqli = new mysqli($servername,$username,$password,$db);

if($mysqli->connect_error){
    die("Connection Failed " . $mysqli->connect_error);
}

$stock_id = $_GET["stock_id"];

$sql = "SELECT * FROM stock WHERE stock_id='$stock_id'";
$result = $mysqli->query($sql);

if($result->num_rows > 0){
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $stock_id = $row["stock_id"];
        $bloodgroup = $row["bloodgroup"];
        $stock = $row["stock"];
    }

} else{
    echo "0 results";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid">
            <div class="row justify-content-center">
            
                <div class="col-lg-6" style="align-items: center;">
                        <hr>
                        <h1 class="intro-text text-center">Update BloodBank Stock</h1>
                        <hr>
                        <form action="updatestockm.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="bloodgroup">Blood Group</label>
                                </div>
                                <div class="form-group col-md-6">
                                <input id="bloodgroup" name="bloodgroup"  class="form-control" value="<?php echo $bloodgroup; ?>">
                                
                                </div>
                                
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="stock">stock</label>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $stock; ?>">
                                </div>
                            </div>
                            <input type="submit" value="Update" >

                            <input type="hidden" name="stock_id" id="stock_id" value="<?php echo $stock_id ?>"> 
                        </form>
                </div>
           
            </div>
    </div> 
    <?php require_once "footer.php"?>
</body>
</html>