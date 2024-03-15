<?php

include '../bdd/Bdd.php';
include '../model/Utilisateur.php';

$user = new Utilisateur([
    "nom" =>$_POST['nom'],
    "prenom" =>$_POST['prenom'],
    "fonction" =>$_POST['fonction'],
    "mdp" =>$_POST['mdp'],
]);

$user->inscription();




