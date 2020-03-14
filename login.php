  <!DOCTYPE html>
  <html lang="en">

  <head>
    <?php

     include "includes/head_sections.php";
     if(isset($_SESSION["id_utilisateur"])){
       header("Location:index.php");
     }
?>
    <title>se connecter</title>
  </head>

  <body>
    <header>
      <nav>
        <?php 

 include  "includes/navbar.php";


?>
      </nav>

    </header>
    <div class="row justify-content-center align">

      <main>
      <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/lock-4441691_960_720.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="includes/login_inc.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="adresse email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="mot de passe">
      <input type="submit" name="submit" class="fadeIn fourth" value="se connecter">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="register.php">inscrivez vous?</a>
    </div>

  </div>
</div>


      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
      <script src="js/animation.js"></script>
  </body>

  </html>