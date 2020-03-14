<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      include "head_sections2.php"
    ?>
    <title>supprimer</title>
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
        <p class="alert alert-dark" role="alert">confirmer pour supprimer votre compte</p>
    </div>
    <div class="row justify-content-center">
        <a href="delete.php" class="btn btn-primary btn-sm">confirmer</a>&nbsp;
        <a href="profile.php" class="btn btn-primary btn-sm">annuler</a>
   </div>
    </section>

    </article>
    </main>
</body>
</html>