<?php

$host = "localhost";
$usernmame = "root";
$password = "brian";
$dbname = "internship062026";

$conn = mysqli_connect($host, $usernmame, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//proceed ...
