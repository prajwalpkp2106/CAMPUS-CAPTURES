<?php
$server="localhost";
$username="root";
$password="";
$database="campus_captures";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
     die("error". mysqli_connect_error() );
}
?>