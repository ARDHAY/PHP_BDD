<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 26/11/2018
 * Time: 16:34
 */
include 'Utilisateur.php';
include 'connexionBDD.php';
$cin = isset($_POST['ci1']) ? $_POST['ci1'] : NULL;
$nom =isset($_POST['no1']) ? $_POST['no1'] : NULL;
$prenom = isset($_POST['preno1']) ? $_POST['preno1'] : NULL;
$Adresse = isset($_POST['Adress1']) ? $_POST['Adress1'] : NULL;
$utilisateur = new Utilisateur();
$conexionBd = new connexionBDD;
$conexion = $conexionBd->getConnxBD();
$utilisateur->upDate($conexion,$Adresse,$prenom,$nom,$cin);
header('Location: main.html');
