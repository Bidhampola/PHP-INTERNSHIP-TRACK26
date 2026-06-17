<?php

require_once 'db.php';   // include  include_once  require require_once

$id = $_GET['id'];
//getting submmited data from the form
$fn = $_POST['fname'];
$ln = $_POST['lname'];
$email = $_POST['email'];
$stack = $_POST['stack'];

//update the information
$sql = "UPDATE intern set first_name = '$fn' , last_name = '$ln' , email = '$email' , programming_stack = '$stack' WHERE id =' $id'";

$result = mysqli_query($conn, $sql);

if($result){
    echo "updated successfully";
}
else{
    echo "failed to update";
}



