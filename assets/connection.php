<?php
$server="localhost";
$username= "root";
$password= "";
$database= "course";

$con=mysqli_connect($server,$username,$password,$database);

if(!$con){
    echo "connection error";
}


?>