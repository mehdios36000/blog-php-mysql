<?php session_start();
if(!isset($_SESSION["id_utilisateur"])){
	header("Location:../login.php");
}	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" type="text/css">

</head>
<body>
    <header>
   <?php require "navbar2.php" ?>
</header>
<main>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				<?php
				$id_utilisateur=$_SESSION["id_utilisateur"]	;
				 $tab="SELECT *  FROM utilisateur WHERE is_deleted=0 AND id_utilisateur=$id_utilisateur";
  include "config.php";
   $result=$con->query($tab);
   $rows=$rows=$result->fetch_assoc();
   if($result->num_rows>0):?>
					<img src="uploads/profiles/<?php echo $rows['pname'];?>" class="img-responsive" alt="">
				</div>
   <?php endif;?>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                        <?php echo $_SESSION['nom_utilisateur'] ."&nbsp;".$_SESSION["prenom_utilisateur"];?>
					</div>
					<div class="profile-usertitle-job">
						<?php
							if($_SESSION["sexe"]=="homme"){
								echo "bloggeur";
							}
							else{
								echo "blogeuse";
							}

?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<a href="../contact.php" class="btn btn-success btn-sm">message</a>
					<a  href="deleteconf.php" class="btn btn-danger btn-sm">supprimer votre compte</a>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="account_setting.php">
							<i class="glyphicon glyphicon-user"></i>
							parametre de compte </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			   
           <div class="portlet light bordered">
                                                 <div>
                                                    <h4 class="profile-desc-title">a propos de <?php echo  $_SESSION['nom_utilisateur'] ."&nbsp;".$_SESSION["prenom_utilisateur"];?></h4>
                                                    <span class="profile-desc-text"> <?php echo $_SESSION["description"];?></span>
                                               
                                              
</div></div>                   
                                           
        
        
			</div>
		</div>
		<div class="col-md-9">	
		<div class="profile-content">

			<?php 
			include "../includes/config.php";
			  $id_utilisateur=$_SESSION["id_utilisateur"]	;
			  $tab="SELECT `id_utilisateur`, `titre`, `texte`, `title_file`, `pname`, `date`, `description`, `id_article`, `is_deleted` FROM `article` WHERE id_utilisateur=$id_utilisateur and is_deleted=0 ";
			  $result=$con->query($tab);
			if($result->num_rows>0):
				 while($rows=$result->fetch_assoc()):
				  
				?>
			<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title"><?php echo $rows["titre"];?></h5>
    <p class="card-text"><?php echo $rows["description"];?></p>
	<a href="edit_post.php?id_article=<?php echo $rows['id_article']?>" class="btn btn-primary">editer</a>
	<a href="delete_post.php?id_article=<?php echo $rows['id_article']?>" class="btn btn-primary">suprimmer</a>
  </div>
  <div class="card-footer text-muted">
    <?php echo $rows["date"];?>
  </div>
</div>
           
	


				 <?php endwhile;
				 endif;?>
				 </div>
</div>

</main>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>