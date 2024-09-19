<?php
include("connection.php");
if (!isset($_GET['id'])) {
    $queru = "SELECT * FROM person";
    $execute = mysqli_query($connect, $queru);
    $row = mysqli_fetch_all($execute, MYSQLI_ASSOC);
}else{
    $queru = "SELECT * FROM person WHERE id='".$_GET['id']."'";
    $execute = mysqli_query($connect, $queru);
    $row = mysqli_fetch_assoc($execute);
}
echo json_encode($row);

