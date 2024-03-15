<?php

include '../src/bdd/Bdd.php';
$bdd = new Bdd();
$req = $bdd->getBdd()->prepare('SELECT * FROM `matiere` ');
$req->execute(array());
$res = $req->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Etat des stocks</title>
</head>
<body>
<a href="../src/controleur/TraitementEtatStock.php">Deconnexion</a>
<table>
    <tr>
        <th>nom matiere</th>
        <th>id</th>
        <th>forme_meplat</th>
        <th>forme_rond</th>
        <th>longueur</th>
        <th>largeur</th>
        <th>epaisseur</th>
        <th>diametre</th>

    </tr>
    <?php
    foreach ($res as $user){
        ?>
        <tr>
            <td><?=$user["nom_matiere"]?></td>
            <td><?=$user["id_matiere"] ?></td>
            <td><?=$user["forme_meplat"] ?></td>
            <td><?=$user["forme_rond"]?></td>
            <td><?=$user["longueur"]?></td>
            <td><?=$user["largeur"] ?></td>
            <td><?=$user["epaisseur"] ?></td>
            <td><?=$user["diametre"]?></td>
            <td><a href="edition.php?id_user=<?=$user["id_matiere"]?>">Editer</a>
                / <a href="supprimer.php?id_user=<?=$user["id_matiere"]?>">Supprimer</a></td>
        </tr>

        <?php
    }
    ?>
</table>
</body>
</html>

