<?php


$servername = "localhost";
$database = "example";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Connection field" . mysqli_connect_error());
}





