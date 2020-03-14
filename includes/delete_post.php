<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      include "head_sections2.php"
    ?>
    <title>confirm</title>
</head>
<body>
    <header>
        <nav>
            <?php
                require "navbar2.php"; 
            ?>
        </nav>

    </header>
    <br><br><br><br><br>
    <main>
    <article>
    <section>
    <div class="row justify-content-center">
        <p class="alert alert-dark" role="alert">Confirmez la supression</p>
    </div>
    <div class="row justify-content-center">
        <a href="delete_post_inc.php?id_article=<?php  echo  $_GET["id_article"] ?>" class="btn btn-primary">oui</a>&nbsp;
        <a href="profile.php" class="btn btn-primary">non</a>
   </div>
    </section>

    </article>
    </main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>