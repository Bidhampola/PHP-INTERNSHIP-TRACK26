<?php

include "db.php";

//get query params

$id = $_GET['id'];

$sql = "DELETE FROM intern where id = $id";
$result = mysqli_query($conn, $sql);

if($result){
    //deleted
    echo "Deleted successfully";
}
