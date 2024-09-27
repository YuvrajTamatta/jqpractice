<?php
include_once("connection.php");
$type=$_REQUEST['type'];
$id=$_REQUEST['id'];

if ($type=='contact') {
    
    $delete= $con->delete('contact',"id='$id'");

    $execute=mysqli_query($con->db, $delete);

    echo json_encode("Data deleted");

    }

?>