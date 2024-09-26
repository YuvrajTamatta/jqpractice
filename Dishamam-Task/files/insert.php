<?php 
include_once('connection.php');

$type=$_REQUEST['type'];

if($type=='contact'){
  if(!empty($_POST)){
    $company=$_POST['customer'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
      $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $primary_contact=(isset($_POST['primary_contact'])) ? "1" : "0";  

    $insert="INSERT INTO `contact`(`company`, `first_name`, `last_name`, `email`, `phone`, `password`, `primary_contact`) VALUES ('$company','$first_name','$last_name','$email','$phone','$password','$primary_contact')";

    $execute=mysqli_query($connect, $insert);

    if($execute){
     echo json_encode("Data Inserted");
    } 
  }

}
if($type=='customer'){
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
     echo json_encode("Data Inserted");
    } 
  }


}





   


?>