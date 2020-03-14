<?php

 include "../includes/config.php";

?>


<?php
if(isset($_POST["submit"])){
  $email=strip_tags($_POST["email"]);
  $password=$_POST["password"];
  if(empty($_POST["email"]) or empty($_POST["password"])){
    header("Location:error.php?error=emptyfields");
    exit();
  }
  else{
      $sql="SELECT * FROM utilisateur WHERE  email='$email' and is_deleted=0 and is_admin=1";
      $result=$con->query($sql);
      if($result-> num_rows > 0){
        $rows = $result-> fetch_assoc();
        if($rows["is_deleted"]==0){
          if(password_verify($password,$rows["password"])){
            session_start();
            $_SESSION["email"]=$rows["email"];
            $_SESSION["id_utilisateura"]=$rows["id_utilisateur"];
            $_SESSION["age"]=$rows["age"];
            $_SESSION["password"]=$rows["password"];
            $_SESSION["nom_utilisateur"]=$rows["nom_utilisateur"];
            $_SESSION["prenom_utilisateur"]=$rows["prenom_utilisateur"];
            $_SESSION["date_creation"]=$rows["date_creation"];
            $_SESSION["ville"]=$rows["ville"];
            $_SESSION["description"]=$rows["description_de_profil"];
            $_SESSION["sexe"]=$rows["sexe"];
            $_SESSION["is_auth"]=$rows["is_auth"];
            $_SESSION["pname"]=$rows["pname"];
            header("Location:dashboard.php");
        }
        else{
            header("Location:error.php?error=nouser");
            exit();
        }
     
      }
      else{
        header("Location:error.php?error=nouser");
        exit();
      }

      
  }  
  else{
    header("Location:error.php?error=nouser");
    exit();
  }
}
}

?>