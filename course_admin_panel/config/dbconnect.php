<?php
$server="localhost";
$username= "root";
$password= "";
$database= "course";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
    echo "connection error";
}


?>