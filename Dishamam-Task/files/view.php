<?php
include_once('connection.php');

$view="SELECT company FROM `customer`";

$execute=mysqli_query($connect,$view);

$data=mysqli_fetch_all($execute,MYSQLI_ASSOC);

json_encode($data);
?>