<?php

include '../bdd/Bdd.php';
include '../model/Utilisateur.php';

$user = new Utilisateur([
    "id_utilisateur" =>$_POST['id_utilisateur'],
    "nom" =>$_POST['nom'],
    "prenom" =>$_POST['prenom'],
    "fonction" =>$_POST['fonction'],
    "mdp" => $_POST['mdp'],
    "indentifiant" =>$_POST['indentifiant'],
]);
$user->editer();




