<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "wanderly_db";

$conn = mysqli_connect($host,$user,$password,$dbname);

if(!$conn){
    die("Connection Failed");
}

?>