<?php 
include "config.php";
session_start();
if(isset($_POST["titre"]) and isset($_POST["details"]) and isset($_FILES["file"])){
    if(!empty($_POST["titre"]) and !empty($_POST["details"]) and !empty($_FILES["file"]["name"])){
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
        $requette="INSERT INTO `article`(`id_utilisateur`, `titre`, `texte`, `date`, `description`,`title_file`,`pname` ) VALUES ('$id','$title','$details','$date','$description','$file','$pname')";
        mysqli_query($con,$requette) or die(mysqli_error($con));
        header("Location:addedpost.php");
      
    }   
    }
    else{
        header("Location:error_post.php");
    }






?>