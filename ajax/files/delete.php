<?php
include_once('connection.php');
$id=$_GET['id'];
$delete="DELETE FROM person WHERE id='$id'";

mysqli_query($connect,$delete);
$message = 'Fail to delete';
if(mysqli_affected_rows($connect) > 0){
   $message = 'Client deleted successfully';
}
echo json_encode($message);
?>