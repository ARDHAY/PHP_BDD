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
$user->addUser($conexion );
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container">

<form action="add.php" method="post" enctype="multipart/form-data" name="recap"   style="width: 180px">
    CIN: <input type="number" name="cin" required class="form-control"><br>
    Nom: <input type="text" name="nom" required class="form-control"><br>
    Prenom: <input type="text" name="prenom" required class="form-control"><br>
    adresse: : <input type="text" name="adresse" required class="form-control"><br>
    <input type="submit" name="env" value="envoyez">

</form>
</body>
</html>

