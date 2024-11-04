<?php 

$connect = mysqli_connect("localhost", "root", "", "crud");

if(!$connect){
    die("Connect Failed");
}

$name = '';
$class  = '';
$department = '';

?>