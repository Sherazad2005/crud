<?php

include '../bdd/Bdd.php';
include '../model/Utilisateur.php';

$user = new Utilisateur([
    "idutilisateur" =>$_POST['id_utilisateur'],
]);
$user->supprimer();




