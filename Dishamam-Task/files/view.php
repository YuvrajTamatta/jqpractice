<?php
include_once('connection.php');
$type=$_REQUEST['type'];

if($type=='customer'){

$view="SELECT * FROM `customer`";

$execute=mysqli_query($connect,$view);

$data=mysqli_fetch_all($execute,MYSQLI_ASSOC);

echo json_encode($data);
}

if($type=='contact'){

$view="SELECT * FROM `contact`";

$execute=mysqli_query($connect,$view);

$data=mysqli_fetch_all($execute,MYSQLI_ASSOC);

echo json_encode($data);
}


if($type=='display'){
    $res = $con->select('contact');
    echo json_encode($res);
}

if($type=='joindata'){
    $qeury="SELECT customer.id, contact.company,contact.first_name, contact.last_name, contact.email, contact.phone, customer.created_at FROM contact INNER JOIN customer ON contact.company=customer.company";
    $exec=mysqli_query($con->db,$qeury);
    $joindata=mysqli_fetch_all($exec, MYSQLI_ASSOC);
    echo json_encode($joindata);
}




?>