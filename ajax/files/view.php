<?php
include("connection.php");
$queru="SELECT * FROM person";
$execute=mysqli_query($connect,$queru);
$row=mysqli_fetch_all($execute, MYSQLI_ASSOC);

echo json_encode($row);


?>