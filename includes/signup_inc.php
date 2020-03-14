<?php
include "config.php";
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
            $sexe=strip_tags($_POST["sexe"]);
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
            $select="SELECT `email` FROM `utilisateur` WHERE email='$email'";
                $result=mysqli_query($con,$select);    
                if(mysqli_num_rows ( $result )>0){
                    header("Location:email_error.php");
                }
                else{
                $commande="INSERT INTO `utilisateur` ( `nom_utilisateur`, `prenom_utilisateur`, `age`, `ville`, `email`, `password`, `date_creation`, `date_updated`, `delete_date`,`description_de_profil`,`sexe`,`title_file`,`pname`) VALUES ( '$nom', '$prenom', '$age', '$ville', '$email', '$password', '$date', NULL, NULL,'$description','$sexe','$file','$pname');";
                mysqli_query($con ,$commande) or die(mysqli_error($con));
                header("Location:../success.php");
            }
              
            


        }
        else{
          header("Location:../register.php");
          exit();
        }

    }
    
}
else{
    header("Location:error.php");
    exit();
}

?>