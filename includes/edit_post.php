<?php       include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editer le post</title>
    <?php include "head_sections2.php";
    if(!isset($_SESSION["id_utilisateur"]) and !isset($_SESSION["is_auth"])){
        header("Location:../index.php");
    }
    else{
      $id_utilisateur=$_SESSION["id_utilisateur"];   
      $taba="SELECT *  FROM utilisateur WHERE is_deleted=0 AND id_utilisateur=$id_utilisateur LIMIT 1";
      $resulta=$con->query($taba);
      $rowsa=$resulta->fetch_assoc();
      if($rowsa["is_auth"]==0){
        header("Location:error_permission.php");
      }
      
    
    }   
    ?>
</head>
<body>


<header>
    <?php include "navbar2.php"?>
</header>
<div class="container align">
		<header class="blog-header py-3">
			<div class="row justify-content-center">
				<span class="m-title"><img src="../images/editer.png"></span>
			</div>
		</header>
      </div>
      <?php
            $id_article=$_GET["id_article"];
             $tab="SELECT *  FROM article WHERE is_deleted=0 AND id_article=$id_article";
             $result=$con->query($tab);
              if($result->num_rows>0):
                   while($rows=$result->fetch_assoc()):
      ?>


	<main role="main" class="container">
		<div class="row">
			<div class="col-md-12 blog-main">			
				<form  method="POST"  action="edit_post_inc.php?id_article=<?php echo $id_article ?>" enctype="multipart/form-data"  style="margin-top: 10px;">
					<div class="form-group">
						<label for="title">titre</label>
						<input name="titre" type="text" class="form-control" value="<?php echo $rows['titre']?>" required>
					</div>
					<div class="form-group">
						<label for="title">description</label>
						<input name="description" type="text" class="form-control"   value="<?php echo $rows['description']?>" required>
					</div>
					<div class="form-group">
						<label for="detail">texte de l'article</label>
						<textarea name="details" class="form-control" rows="3"   required> <?php echo $rows['texte']?></textarea>
					</div>
					
					<div class="form-group">
						<label for="detail">ajouter une image</label>
						<input name="file"  type="file" class="form-control" rows="3" required>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="addButton">EDITER LE POST</button>
				</form>
			</div>
		</div><!-- /.row -->
	</main><!-- /.container -->
                   <?php endwhile;
                   endif;?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
      </script>
</body>
</html>