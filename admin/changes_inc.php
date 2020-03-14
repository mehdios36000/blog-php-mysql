<?php
require "../includes/config.php";
if(isset($_POST["submit"])){
            $nom=strip_tags($_POST["nom"]);
            $prenom=strip_tags($_POST["prenom"]);
            $email=strip_tags($_POST["email"]);
            $age=strip_tags($_POST["age"]);
            $ville=strip_tags($_POST["ville"]);
            $date=date("Y-m-d H:i:s");
            $description=strip_tags($_POST["description"]);
            $sexe=$_POST["sexe"];
            $id_utilisateur=$_GET["id"];
            $is_admin=$_POST["admin"];
            $is_deleted=$_POST["restore"];
            $is_auth=$_POST["permission"];
            if($sexe=="homme" or $sexe=="femme"){
                #retrieve file title
        $file = $_FILES["file"]["name"];

        #file name with a random number so that similar dont get replaced
         $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

        #temporary file name to store file
        $tname = $_FILES["file"]["tmp_name"];

         #upload directory path
    $uploads_dir = '../includes/uploads/profiles';
        #TO move the uploaded file to specific location
        move_uploaded_file($tname, $uploads_dir.'/'.$pname);
            $commande="UPDATE `utilisateur` SET `nom_utilisateur`='$nom',`prenom_utilisateur`='$prenom',`age`='$age',`ville`='$ville',`email`='$email',`date_updated`='$date',`description_de_profil`='$description',`sexe`='$sexe',`pname`='$pname',`title_file`='$file',`is_auth`=  $is_auth,`is_admin`=  $is_admin ,is_deleted=$is_deleted WHERE id_utilisateur=$id_utilisateur";
            mysqli_query($con ,$commande) or die(mysqli_error($con));
            header("Location:edit_success.php");
            }
            else{
                header("location:error_edit_sexe.php");
            }





    }

?>
