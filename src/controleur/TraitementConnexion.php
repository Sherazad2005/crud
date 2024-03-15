<?php

include '../bdd/Bdd.php';
include '../model/Utilisateur.php';

$user = new Utilisateur([
    "nom" =>$_POST['nom'],
    "mdp" =>$_POST['mdp'],
]);
$user->connexion();

