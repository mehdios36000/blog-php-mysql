<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <?php require "includes/head_sections4.php";?>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

 <?php
 include "includes/navbar.php"; 
 ?>
  <header>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="images/achievement-confident-free-freedom-6945.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/close-up-of-hand-over-white-background-316465.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/text-on-shelf-256417.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Bienvenue dans le blog Partageons nos experiences de reussites </h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Partager vos experiences de reussite</h4>
          <div class="card-body">
            <p class="card-text">partager vos experiences de reussites afin de permettre a d'autre de profiter d'arriver a l'excellences</p>
          </div>
          <?php if(!isset($_SESSION["id_utilisateur"])):?>
          <div class="card-footer">
            <a href="register.php" class="btn btn-primary">Inscrivez Vous!!!</a>
          </div>
          <?php endif;?>
          <?php if(isset($_SESSION["id_utilisateur"])):
            $id_utilisateur=$_SESSION["id_utilisateur"];
            $tab="SELECT *  FROM utilisateur WHERE is_deleted=0 AND id_utilisateur=$id_utilisateur";
     $result=$con->query($tab);
     if($result->num_rows>0):
          $rows=$result->fetch_assoc();
            if($rows["is_auth"]==1):?>
          <div class="card-footer">
            <a href="includes/add_post.php" class="btn btn-primary">ajouter un post</a>
          </div>
          <?php endif;
          endif;
        endif;?>
          <?php if(isset($_SESSION["is_auth"])):
            $id_utilisateur=$_SESSION["id_utilisateur"];
            $tab="SELECT *  FROM utilisateur WHERE is_deleted=0 AND id_utilisateur=$id_utilisateur";
     $result=$con->query($tab);
     if($result->num_rows>0):
          $rows=$result->fetch_assoc();
            if($rows["is_auth"]==0):
            ?>
            <div class="card-footer">
            <a href="contact.php" class="btn btn-primary">vous n'avez pas l'acces a ajouter de post contacter l'admin </a>
          </div>
            <?php endif;
            endif;
          endif;?>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">commencez maintenant </h4>
          <div class="card-body">
          <?php if(!isset($_SESSION["id_utilisateur"])):?>
            <p class="card-text">inscrivez vous vite!!!</p>
          </div>
          <?php endif; ?> 
          <?php if(isset($_SESSION["id_utilisateur"])):?>
            <p class="card-text">Lire les articles!!!</p>
          </div>
          <?php endif; ?> 
          <?php if(!isset($_SESSION["id_utilisateur"])):?>
          <div class="card-footer">
            <a href="register.php " class="btn btn-primary">Inscrivez Vous!!!</a>
          </div>
          <?php endif; ?> 
          <?php if(isset($_SESSION["id_utilisateur"])):?>
          <div class="card-footer">
            <a href="index.php" class="btn btn-primary">allez a la page d'article</a>
          </div>
          <?php endif;?>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">contactez l'admin</h4>
          <div class="card-body">
            <p class="card-text">en cas de probleme au sein du site web contactez l'admin</p>
          </div>
          <div class="card-footer">
            <a href="contact.php" class="btn btn-primary">contactez l'admin</a>
          </div>
        </div>
      </div>
    </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    

    


 

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
</body>
</html>