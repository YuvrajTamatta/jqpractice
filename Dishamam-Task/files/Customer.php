

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Page</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/custom.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">JQuery Task</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="Customer.php">Customer</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                    <a class="nav-link" href="#">Project</a>
                    <a class="nav-link" href="#">Counter</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <form method="post" class="d-flex flex-column gap-2" id="customerform">
            <center>
                <h3 class="my-3">Customer Registration</h3>
            </center>
            <label for="company" class="form-label">Company</label>
            <input type="text" class="form-control" name="company" id="company">

            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">

            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" name="city" id="city">

            <label for="state" class="form-label">State</label>
            <input type="text" class="form-control" name="state" id="state">

            <center> <input type="submit" name="submit" id="submit" class="btn btn-primary w-25 mt-3">
            </center>
        </form>
    </div>
</body>

</html>

<?php 
include_once('connection.php');
    if(!empty($_POST)){
    $company=$_POST['company'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $state=$_POST['state'];

    $insert="INSERT INTO customer(`company`, `phone`, `city`, `state`) VALUES ('$company','$phone',
    '$city','$state')";

    $execute=mysqli_query($connect, $insert);

    if($execute){
        $mess = "Data inserted";
    }
 

 
  }

?>