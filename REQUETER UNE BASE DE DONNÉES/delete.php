<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 23/11/2018
 * Time: 22:05
 */
//require_once 'connexionPDD.php';
require_once  'connexionBDD.php';
require 'Utilisateur.php';
$user=new Utilisateur();
$conexion = new connexionBDD;
$conexion = $conexion->getConnxBD();
$requete = "select *from utilisateur ";
$reponse = $conexion->query($requete);
$utilisateurs = $reponse->fetchAll(PDO::FETCH_OBJ);
$user->delete($conexion );

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container">
<table class="border table">
    <tr>
        <td>adresse</td>
        <td>prenom</td>
        <td>nom</td>
        <td>cin</td>
        <td>delete</td>

    </tr>
    <?php
    echo '<h3>order select </h3>';
    foreach ($utilisateurs as $user) { ?>
        <tr>
            <td> <?= $user->Adresse ?> </td>
            <td><?= $user->prenom ?></td>
            <td><?= $user->nom ?></td>
            <td><?= $user->cin ?></td>
            <td>
                <a href="delete.php?cin=<?= $user->cin ?>" class="btn-danger"> delete</a>
            </td>

            </td>
        </tr>
    <?php }
    $conexion = null;

    ?>
</table>
<hr>
<hr>
<hr>
</body>
</html>
