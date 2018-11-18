<?php
session_start();
if (isset($_GET['titre'])) {
    if (isset($_SESSION['listeNotes'][$_GET['titre']])) {
        unset($_SESSION['listeNotes'][$_GET['titre']]);
    }
}

header('location:noteSession.php');