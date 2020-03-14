<?php

include "includes/config.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 

    include "includes/head_sections.php";
?>
<title>page d'acceuil</title>
</head>
<body>
 <header>
 <nav>
 <?php
  include "includes/navbar.php";
?>
</nav>
 </header>  
 <br><br><br><br> 
 <main>
<div class="row justify-content-center">
    <div class="col-md-9 main">
    <div class="row row-cols-3">
 <?php  $tab="SELECT *  FROM article WHERE is_deleted=0";
  include "includes/config.php";
   $result=$con->query($tab);
   if($result->num_rows>0):
        while($rows=$result->fetch_assoc()):

       ?>
    
  <div class="card card-style" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title"><?php echo $rows["titre"] ?></h5>
    <p class="card-text"><?php echo $rows["description"]?></p>
    <a href="post/post.php?id=<?php echo $rows["id_article"] ?>" class="btn btn-primary">lire la suite</a>
  </div>
</div>
    <?php
    endwhile;
   endif;?>
   </div>
</div>  
</div>
 
  
  
 </main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>