<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>note</title>
    <link rel="stylesheet" href="file.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="  mx-auto rad container   flex-container">
    <form action="sessione.php" method="get" class="   borderr form-control text-center bg-dark text-light">
        <label for="title">Nom</label>
        <input type="titre" id="title" required value="..." name="titre" class="form-control ">
        <label for="note"> Note</label>
        <input type="note" id="note" required value="..." name="note" class="form-control ">
        <input type="submit" value="enregistrez" name="enregistrez" class="btn btn-primary">
    </form>
</div>
<hr>
<h1>Liste des notes : </h1>
<div class="card-group" style="display:flex;flex-wrap:wrap;">
    <?php
    if (isset ($_SESSION['listeNotes'])) :
        foreach ($_SESSION['listeNotes'] as $titre => $contenu) : ?>
            <ul>
                <li>
                    <div class="p">
                        <a href="deleteTodo.php?titre=<?= $titre ?>" class="btn-warning" style="border-radius: 15px">delete</a>
                        <h4 class="text-info"><?php echo $titre; ?></h4>
                        <br>
                        <sapn><?php echo $contenu; ?></sapn>
                    </div>
                </li>
            </ul>
        <?php endforeach;
    else :
        echo 'liste encore vide';
    endif; ?>
</div>
</body>
</html>
