<?php
include "config.php";
session_start();
if(isset($_POST["titre"]) and isset($_POST["details"]) and isset($_FILES["file"])){
    if(!empty($_POST["titre"]) and !empty($_POST["details"]) and !empty($_FILES["file"]["name"])){
            $id_article=$_GET["id_article"];
            $title=strip_tags($_POST["titre"]);
            $details=strip_tags($_POST["details"]);
            $id=$_SESSION["id_utilisateur"];
            $date=date("Y-m-d H:i:s");
            $description=strip_tags($_POST["description"]);
        #retrieve file title
        $file = $_FILES["file"]["name"];
      
        #file name with a random number so that similar dont get replaced
         $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
      
        #temporary file name to store file
        $tname = $_FILES["file"]["tmp_name"];
        
         #upload directory path
    $uploads_dir = 'uploads';
        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);
      
        #sql query to insert into database
        $requette="UPDATE `article` SET `id_utilisateur`='$id',`titre`='$title',`texte`='$details',`title_file`='$file',`pname`='$pname',`date`='$date',`description`='$description' WHERE id_article=$id_article";
        mysqli_query($con,$requette) or die(mysqli_error($con));
      
            header("Location:edit_success.php");
    }   
    }
    else{
        header("Location:error_edit.php");
    }






?>




?>