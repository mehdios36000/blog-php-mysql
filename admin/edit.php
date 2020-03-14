<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account settings</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">



</head>

<body>
  <main>
    <div class="container">
      <h1>Edit Profile</h1>
      <hr>
      <div class="row">
        <!-- left column -->
        <div class="col-md-3">
          <div class="text-center">
            <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
            <h6>Upload a different photo...</h6>

          </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">

          <h3>information personnel</h3>
          <?php
        $id=$_GET["id"];
$tab="SELECT *  FROM utilisateur where id_utilisateur= $id " ;
include "../includes/config.php";
 $result=$con->query($tab);
 if($result->num_rows>0):
      $rows=$result->fetch_assoc()

?>

          <form class="form-horizontal" method="post" enctype="multipart/form-data" action="changes_inc.php?id=<?php echo $_GET["id"] ?>">
            <div class="form-group">
              <label class="col-lg-3 control-label">nom</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="nom" value="<?php echo $rows["nom_utilisateur"]?>"
                  required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">prenom</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="prenom" value="<?php echo $rows["prenom_utilisateur"]?>"
                  required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">age</label>
              <div class="col-lg-8">
                <input class="form-control" type="text" name="age" value="<?php echo $rows["age"]?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Email:</label>
              <div class="col-lg-8">
                <input class="form-control" type="email" name="email" value="<?php echo $rows["email"]?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">description de profil</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="description"
                  value="<?php echo $rows["description_de_profil"]?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">ville</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="ville" value="<?php echo $rows["ville"]?>" required>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">sexe</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="sexe" value="<?php echo $rows["sexe"]?>" required>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">administrateur</label>
                <div class="col-md-8">
                  <select  class="form-control form-control-lg" name="admin">
                    <option value="1">oui</option>
                    <option value="0">non</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">restore account</label>
                <div class="col-md-8">
                  <select  class="form-control form-control-lg" name="restore">
                    <option value="1">oui</option>
                    <option value="0">non</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">permission de poster</label>
                <div class="col-md-8">
                  <select class="form-control form-control-lg" name="permission">
                    <option value="1">oui</option>
                    <option value="0">non</option>
                  </select>
                </div>
              </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <input type="submit" class="btn btn-primary" name="submit" value="Save Changes">
                  <input type="file" name="file" class="form-control" required>
                  <span></span>
                </div>
              </div>
          </form>
          <?php endif;?>
          <a href="dashboard.php" class="btn btn-primary">annuler</a>
        </div>
      </div>
    </div>
    <hr>




  </main>





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
