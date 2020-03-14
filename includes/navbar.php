

<?php include "config.php"?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index_page.php"><img src="images/logo.png"  width="70px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="index_page.php">acceuil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">article <span class="sr-only">(current)</span></a>
      </li>
      <?php if(!isset($_SESSION["id_utilisateur"])):?>
      <li class="nav-item">
        <a class="nav-link" href="login.php" >se connecter/s'inscire</a>
      </li>
      <?php endif; ?>
      <?php if(isset($_SESSION["id_utilisateur"])):?>
      <li class="nav-item">
        <a class="nav-link" href="includes/profile.php" >profil</a>
      </li>
      <?php
      endif;
      ?>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">contacter l'auteur du blog</a>
      </li>
      <li class="nav-item">
      <?php 
        if(isset($_SESSION["id_utilisateur"]) and isset($_SESSION["is_auth"])):
          $id_utilisateur=$_SESSION["id_utilisateur"];
          $tab="SELECT *  FROM utilisateur WHERE is_deleted=0 AND id_utilisateur=$id_utilisateur";
   $result=$con->query($tab);
   if($result->num_rows>0):
        $rows=$result->fetch_assoc();
          if($rows["is_auth"]==0):?>
        <a class="nav-link" href="contact.php" >vous n'avez pas l'acces encore a ajouter un post contacter l'admin</a>
      </li>
        <?php
        endif;
      endif;
    endif;
        if(  isset($_SESSION["id_utilisateur"]) and isset($_SESSION["is_auth"])):
          $id_utilisateur=$_SESSION["id_utilisateur"];
          $tab="SELECT *  FROM utilisateur WHERE is_deleted=0 AND id_utilisateur=$id_utilisateur";
 
   $result=$con->query($tab);
   if($result->num_rows>0):
        $rows=$result->fetch_assoc();
          if($rows["is_auth"]==1):
        ?>
        <li class="nav-item">
        <a class="nav-link" href="includes/add_post.php" >ajouter un post</a>
      </li>
        <?php endif;
        endif;
      endif;
         ?>
    </ul>
    <?php if(isset($_SESSION["id_utilisateur"])):?>
    <form  action="includes/logout_inc.php" method="post">
  <div class="form-group">
    <br>
  <button type="submit"  name="logout-submit" class="btn btn-default">se déconnecter</button>
</form>
<?php
endif;
?>
  </div>

</nav>
