<?php 
    require "../includes/config.php";
    $id_utilisateur=$_GET["id"];
    $date=date("Y-m-d H:i:s");
    $sqlcommande="UPDATE `utilisateur` SET is_deleted=1,delete_date='$date' WHERE id_utilisateur='$id_utilisateur'";
    $sqlcommandea="UPDATE `article` SET is_deleted=1 WHERE id_utilisateur='$id_utilisateur'";
    mysqli_query($con,$sqlcommandea);
    mysqli_query($con,$sqlcommande);
    header("Location:dashboard.php");





?>