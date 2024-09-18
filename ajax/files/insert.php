<?php
include("connection.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

$query="INSERT INTO person( `name`, `email`, `password`) VALUES ('$name','$email','$password')";

if(mysqli_query($connect,$query)){
    echo "Data inserted";
}
}
?>