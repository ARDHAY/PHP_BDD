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
$conexionBd = new connexionBDD;
$conexion = $conexionBd->getConnxBD();
$cin = isset($_GET['cin']) ? $_GET['cin'] : NULL;
$requete= "select *from utilisateur WHERE cin = :cin ";
$reponse = $conexion->prepare($requete);
$reponse->execute(array(
       'cin'=>$cin
));

$user = $reponse->fetch(PDO::FETCH_OBJ);
//$user->upDate($conexion);

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
<form action="maj.php" method="post" enctype="multipart/form-data" name="recap" class="bg-info text-white"
      style="width: 180px">


            <input type="text" name ='Adress1'value="<?= $user->Adresse?>">
            <input type="text" name="preno1" value="<?= $user->prenom ?>">
            <input type="text" name="no1" value="<?= $user->nom ?>">
            <input type="text" name="ci1" hidden value="<?= $user->cin ?>">
            <input type="submit" value="badel">

</form>
</body>
</html>
