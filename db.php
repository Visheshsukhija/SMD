<?php
$host="localhost";
$user="root";
$password="";
$database="smd_login";

$conn= new mysqli($host,$user,$password,$database);
if($conn->connect_error){
    die("connection Failed".$conn->connect_error);
}

?>