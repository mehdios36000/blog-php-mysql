<?php 
    require "config.php";
    session_start();
    $id_utilisateur=$_SESSION["id_utilisateur"];
    $date=date("Y-m-d H:i:s");
    $sqlcommande="UPDATE `utilisateur` SET is_deleted=1,delete_date='$date' WHERE id_utilisateur='$id_utilisateur'";
    $sqlcommandea="UPDATE `article` SET is_deleted=1 WHERE id_utilisateur='$id_utilisateur'";
    mysqli_query($con,$sqlcommandea);
    mysqli_query($con,$sqlcommande);
    session_destroy();
    header("Location:../index.php");




?>