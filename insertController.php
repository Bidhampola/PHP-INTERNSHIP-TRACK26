<?php

$fname = $_POST ["fname"];
$lname = $_POST['lname'];
$email = $_POST['email'];
$stack = $_POST['stack'];

include "db.php";



$sql = "INSERT INTO intern (first_name, last_name, email, programming_stack) VALUES ('$fname', '$lname', '$email', '$stack')";

if(mysqli_query($conn, $sql)){
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



