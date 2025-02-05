<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$db = mysqli_connect($hostname,$username,$password,$dbname);

if($db->errno){
    echo "database error";
}