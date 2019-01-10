<?php
include ('indexctrl.php');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>php part8 exe5</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet"/> 
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>EXERCICE 5 PARTIE 8</h1>
        <p class="text-muted">Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3.</p>
        <div class="jumbotron">
            <p>votre identifiant actuel est:   <?= (empty($_COOKIE ['login'])) ? '' : $_COOKIE ['login'] ?></p>  
            <p>  et votre mot de passe actuel est:  <?= (empty($_COOKIE ['password'])) ? '' : $_COOKIE ['password'] ?></p>
            <h1 class="display-3">veuillez modifier vos identifiants</h1>
            <div class="form">
                <form action="index.php" method="POST">
                    <label >Identifiant</label>
                    <input type="text" name="ident"  placeholder="Identifiant">
                    <label for="Password">Mot de passe</label>
                    <input type="password" name="password"  placeholder="Password">
                    <button type="submit" name="submit" class="btn btn-danger">VALIDER</button>
                </form>
                <?php
                if($isLoginOk && $isPasswordOk){
                ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p>votre nouvel identifiant est:   <?= (empty($_POST ['ident'])) ? '' : $_POST ['ident'] ?></p>  
                    <p>  et votre nouveau mot de passe est:  <?= (empty($_POST ['password'])) ? '' : $_POST ['password'] ?></p>
                </div>
                    <?php } ?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>