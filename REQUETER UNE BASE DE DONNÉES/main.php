<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 23/11/2018
 * Time: 11:26
 */
function chargerClasse($classe)
{
    require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse');

$user = new Utilisateur();
$connexionBD = new  ConxBD();
$cnxBDD = $connexionBD->getConnxBD();
$users = $user->selectAll($cnxBDD);

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
  <table class="border table">
    <tr>
        <td><b>adresse</b></td>
        <td><b>prenom</b></td>
        <td><b>nom</b></td>
        <td><b>cin</b></td>
    </tr>
<?php
 echo 'order select';
foreach ($users as $u) { ?>
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