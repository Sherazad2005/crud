<?php
include '../bdd/Bdd.php';
include '../model/Matiere.php';

$user = new Matiere([
    "id_matiere" =>$_POST['id_matiere'],
    "forme_meplat" =>$_POST['forme_meplat'],
    "forme_rond" =>$_POST['forme_rond'],
    "longueur" =>$_POST['longueur'],
    "largeur" => $_POST['largeur'],
    "epaisseur" =>$_POST['epaisseur'],
    "diametre" => $_POST['diametre'],
    "nom_matiere" =>$_POST['nom_matiere'],

]);
$user->etatsDesStocks();

