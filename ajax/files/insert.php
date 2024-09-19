<?php
include("connection.php");
if (!empty($_POST)) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($id)) {
        $querys = "UPDATE `person` SET `name`='$name ',`email`='$email',`password`='$password ' WHERE id='$id'";
        if (mysqli_query($connect, $querys)) {
            echo "Data Updated";
        }
    } else {
        $query = "INSERT INTO person( `name`, `email`, `password`) VALUES ('$name','$email','$password')";

        if (mysqli_query($connect, $query)) {
            echo "Data inserted";
        }
    }
}
