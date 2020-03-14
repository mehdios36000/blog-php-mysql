<?php require "../includes/config.php";
session_start();
if(!isset($_SESSION["id_utilisateura"])){
header("Location:login.php");

}
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
  <a href="logout.php" class="btn btn-success" ><i class="fas fa-plus"></i> se deconnecter</a>

</header>

<!---->
<main>
<div class="container my-5">
       <div class="card-body text-center">
    <h4 class="card-title">utilisateur de blog</h4>
  </div>
    <div class="card">
        <button id="add__new__list" type="button" class="btn btn-success position-absolute" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i> ajouter un nouveau utilisateur</button>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom utilisateur</th>
                <th scope="col">editer/supprimmer</th>
                <th scope="col">compte suprimmer le:</th>
              </tr>
            </thead>
            <tbody>
            <?php 
        $tab="SELECT *  FROM utilisateur ";
         $result=$con->query($tab);
         if($result->num_rows>0):
              while($rows=$result->fetch_assoc()):
      


?>
              <tr>
                <th scope="row"><?php echo  $rows["id_utilisateur"]?></th>
                    <td><?php echo  $rows["nom_utilisateur"] ."&nbsp;".$rows["prenom_utilisateur"]?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="edit.php?id=<?php echo $rows["id_utilisateur"] ?>"><i class="far fa-edit"></i> editer</a>
                    <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $rows["id_utilisateur"] ?>"><i class="fas fa-trash-alt"></i> suprimmer</a>    
                </td>
                <td><?php echo $rows["delete_date"] ?></td>
              </tr>
             
            </tbody>
         
              <?php endwhile;
              endif;?>
               </table>
    </div>
    <!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="card-body text-center">
            <h4 class="card-title">nouveau utilisateur</h4>
          </div>
            <div class=" card col-8 offset-2 my-2 p-3">
          <form method="post" action="add_user.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="listname">nom </label>
              <input type="text" name="nom" class="form-control"  id="listname" required>
              </div>
            <div class="form-group">
              <label for="listname">prenom </label>
              <input type="text"  name="prenom" class="form-control"  id="listname" required>
              </div>
            <div class="form-group">
              <label for="listname">age</label>
              <input type="text" name="age" class="form-control"  id="listname" required>
              </div>
            <div class="form-group">
              <label for="listname">ville  </label>
              <input type="text" name="ville" class="form-control"  id="listname" required>
              </div>
            <div class="form-group">
              <label for="listname">description de profil </label>
              <input type="text" name="description" class="form-control"  id="listname" required>
              </div>
            <div class="form-group">
              <label for="listname">sexe</label>
              <input type="text"  name="sexe" class="form-control"  id="listname" required>
              </div>
            <div class="form-group">
              <label for="listname">adresse email</label>
              <input type="email" name="email" class="form-control"  id="listname" required>
              </div>
            <div class="form-group">
              <label for="listname">mot de passe</label>
              <input type="password" name="password" class="form-control"  id="listname" required>
              </div>
            <div class="form-group">
              <label for="listname">photo de profile</label>
              <input type="file" name="file" class="form-control"  id="listname" required>
              </div>
              
           <div class="form-group text-center">
             <button type="submit" name="submit" class="btn btn-block btn-primary">ajouter l'utilisateur</button>
          </div>
        </form>
    </div>
    </div>
  </div>
</div>
</div>
</main>
<!---->

<!---->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
