<?php
session_start();
require "config.php";
if(isset($_POST["submit"])){
    if(isset($_POST["email"])and isset($_POST["password"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["ville"]) and isset($_POST["age"]) and isset($_POST["description"]) and isset($_POST["sexe"])){
        if(!empty($_POST["email"]) and !empty($_POST["password"]) and !empty($_POST["nom"]) and !empty($_POST["prenom"]) and !empty($_POST["ville"]) and !empty($_POST["age"]) and !empty($_POST["description"]) and  !empty($_POST["sexe"])){
            $nom=strip_tags($_POST["nom"]);
            $prenom=strip_tags($_POST["prenom"]);
            $email=strip_tags($_POST["email"]);
            $password=$_POST["password"];
            $password=password_hash($password,PASSWORD_DEFAULT);
            $age=strip_tags($_POST["age"]);
            $ville=strip_tags($_POST["ville"]);
            $date=date("Y-m-d H:i:s");
            $description=strip_tags($_POST["description"]);
            $sexe=$_POST["sexe"];
            $id_utilisateur=$_SESSION["id_utilisateur"];

            if($sexe=="homme" or $sexe=="femme"){
                #retrieve file title
        $file = $_FILES["file"]["name"];

        #file name with a random number so that similar dont get replaced
         $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

        #temporary file name to store file
        $tname = $_FILES["file"]["tmp_name"];

         #upload directory path
    $uploads_dir = 'uploads/profiles';
        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);
            $commande="UPDATE `utilisateur` SET `nom_utilisateur`='$nom',`prenom_utilisateur`='$prenom',`age`='$age',`ville`='$ville',`email`='$email',`password`='$password',`date_updated`='$date',`description_de_profil`='$description',`sexe`='$sexe',`pname`='$pname',`title_file`='$file' WHERE id_utilisateur=$id_utilisateur";
            mysqli_query($con ,$commande) or die(mysqli_error($con));
            header("Location:edit_success.php");
            }
            else{
                header("location:error_edit_sexe.php");
            }

        }

        }

    }

?>
