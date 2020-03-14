<?php 
require "config.php";
session_start();
$id_article=$_GET["id_article"];
$id_utilisateur=$_SESSION["id_utilisateur"];
$sqlcommande="UPDATE `article` SET is_deleted=1 WHERE id_utilisateur='$id_utilisateur' AND id_article=$id_article ";
mysqli_query($con,$sqlcommande);
header("Location:profile.php");
?>