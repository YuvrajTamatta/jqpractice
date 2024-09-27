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
    $company=$_POST['companys'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $insert="INSERT INTO customer(`company`, `phone`, `city`, `state`) VALUES ('$company','$phone','$city','$state')";
    $execute=mysqli_query($connect, $insert);
    if($execute){
     echo json_encode("Data Inserted");
    } 
  }
}

if($type=='project'){
  $project=$_POST['project'];
  $customer=$_POST['customer'];
  $startd=$_POST['start_date'];
  $endd=$_POST['end_date'];

  $inser="INSERT INTO `project`( `project_name`, `customer`, `start_date`, `end_date`) VALUES ('$project','$customer','$startd','$endd')";

  $execute=mysqli_query($con->db,$inser);

  if ($execute) {
    echo json_encode("Data Inserted");
  }
}


if($type=='joindata'){
  if (!empty($_POST)) {
    $id = $_POST['id'];

    $project=$_POST['project'];
    $customer=$_POST['customer'];
    $startd=$_POST['start_date'];
    $endd=$_POST['end_date'];

    if (!empty($id)) {
        $querys = "UPDATE `project` SET `project_name`='$project',`customer`='$customer',`start_date`='$startd',`end_date`='$endd' WHERE $id";
        if (mysqli_query($connect, $querys)) {
            echo "Data Updated";
        }
    } else {
      $inser="INSERT INTO `project`( `project_name`, `customer`, `start_date`, `end_date`) VALUES ('$project','$customer','$startd','$endd')";

      $execute=mysqli_query($con->db,$inser);
    
      if ($execute) {
        echo json_encode("Data Inserted");
      }
    }
}

}





   


?>