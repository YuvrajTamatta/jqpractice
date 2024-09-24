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
        echo "Data inserted";
    }
 

 
  }

?>