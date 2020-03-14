<?php
require "config.php";
if(isset($_POST["btnSubmit"])){
    if(isset($_POST["txtName"]) and isset($_POST["txtEmail"]) and isset($_POST["txtPhone"]) and isset($_POST["txtMsg"])){
        if(!empty($_POST["txtName"]) and !empty($_POST["txtEmail"]) and !empty($_POST["txtPhone"]) and !empty($_POST["txtMsg"])){
            $nom=strip_tags($_POST["txtName"]);
            $email=strip_tags($_POST["txtEmail"]);
            $phone=strip_tags($_POST["txtPhone"]);
            $message=strip_tags($_POST["txtMsg"]);
            $commandea="INSERT INTO `contact`(`nom`, `email`, `message`, `telephone`) VALUES ('$nom','$email','$message','$phone')";
            mysqli_query($con ,$commandea) or die(mysqli_error($con));
            header("Location:success_contact.php");
        }
        else{
            header("Location:contact_error.php");
        }
    }
}





?>