<?php


$con = mysqli_connect('localhost','root','','blog');
if($con->connect_error) {
    die("Connected to".$con-> connect_error);
}

?>
