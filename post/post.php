<?php 
include "../includes/config.php";
if(!isset($_GET["id"])){
  header("Location:404.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>


  <title>Blog Post - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->

  <link href="css/blog-post.css" rel="stylesheet">
  <?php include "../includes/head_sections3.php";
 ?>

</head>

<body>
<header>
 <?php 
 include "../includes/navbar3.php";

 ?>
 </header>
 
 <main>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
        <?php
         include "../includes/config.php";
         $id_article=$_GET["id"];
         $tab="SELECT `id_utilisateur`, `titre`, `texte`, `title_file`, `pname`, `date`, `description`, `id_article`, `is_deleted` FROM `article` WHERE id_article=$id_article AND is_deleted=0 ";
         $result=$con->query($tab);
       if($result->num_rows>0):
            while($rows=$result->fetch_assoc()):
              $id_utilisateur=$rows["id_utilisateur"];
              $tab2="SELECT `id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur` FROM `utilisateur` WHERE id_utilisateur=$id_utilisateur";
              $res=mysqli_query($con,$tab2);
              $row=mysqli_fetch_array($res);
             
            ?>

        <!-- Title -->
        <h1 class="mt-4"><?php echo $rows["titre"] ?></h1>

        <!-- Author -->
        <p class="lead">
          par:
          <h1><?php echo $row["nom_utilisateur"]."&nbsp;". $row["prenom_utilisateur"];?></h1>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>  <?php echo $rows["date"];?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="../includes/uploads/<?php echo $rows['pname'] ?>" alt="">

        <hr>

        <!-- Post Content -->
        <p><?php echo $rows["texte"];?></p>

        <hr>


        

      </div>

    </div>

  </div>
  </main>
            <?php  endwhile;
            endif;
            if($result->num_rows==0){
              header("Location:404.php");
            }
            ?>
  



 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
