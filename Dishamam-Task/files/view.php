<?php

use Kint\Parser\JsonPlugin;

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

if($type=='project'){
    $qeury=" SELECT project.project_name, project.customer, project.start_date, project.end_date, customer.created_at,
    CASE
        WHEN customer.created_at IS NULL THEN '- - -'
        ELSE customer.created_at END AS Created_At
     FROM project LEFT JOIN  customer ON project.id=customer.id";
    $exec=mysqli_query($con->db,$qeury);
    $projecdata=mysqli_fetch_all($exec,MYSQLI_ASSOC);
    echo json_encode($projecdata);
}


?>