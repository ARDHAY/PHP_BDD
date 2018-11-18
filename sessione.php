<?php
session_start();

$tit=isset($_GET['titre']) ? $_GET['titre'] : NULL;
$not=isset($_GET['note']) ? $_GET['note'] : NULL;

if( isset($tit)) {
    if (isset($_SESSION['listeNotes'][$tit])) {
        $_SESSION['error'] = "note existant impossible de l'ajouter";

    } else {
        $_SESSION['listeNotes'][$tit] = $not;
        $_SESSION['succes'] = "note " . $_SESSION['listeNotes'][$tit] . " ajouté avec succés";
    }
}

if (!isset($_SESSION['listeNotes'])){
    ?>
    <div class="alert alert-danger">Liste Vide</div>
    <?php
} else {
    ?>
    <?php if (isset($_SESSION['error'])) {
        ?>
        <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
        <?php
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['succes'])) {
        ?>
        <div class="alert alert-success"><?= $_SESSION['succes'] ?></div>
        <?php
        unset($_SESSION['succes']);
    }


} ?>
