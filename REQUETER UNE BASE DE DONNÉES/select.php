<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 26/11/2018
 * Time: 09:56
 */

function chargerClasse($classe)
{
    require_once $classe . '.php';
}

spl_autoload_register('chargerClasse');

$user = new Utilisateur();
$connexionBD = new  connexionBDD();
$cnxBDD = $connexionBD->getConnxBD();
$users = $user->selectAll($cnxBDD);
//$user->addUser($cnxBDD);
//$user->delete($cnxBDD);

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="container ">
<form action="select.php" method="post" enctype="multipart/form-data" name="recap" class="bg-info text-white"
      style="width: 180px">
    CIN: <input type="number" name="cin" required class="form-control"><br>
    <input type="submit" name="env" value="envoyer">
</form>

<table class="table-dark table-striped">
    <tr>
        <td><b>adresse</b></td>
        <td><b>prenom</b></td>
        <td><b>nom</b></td>
        <td><b>cin</b></td>
        <?php
        echo 'order select';
        foreach ($users

        as $u) { ?>
    <tr>
        <td> <?= $u->Adresse ?> </td>
        <td><?= $u->prenom ?></td>
        <td><?= $u->nom ?></td>
        <td><?= $u->cin ?></td>

    </tr>

    <?php } ?>
</table>
</body>
</html>