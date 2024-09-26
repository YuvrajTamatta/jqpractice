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




?>