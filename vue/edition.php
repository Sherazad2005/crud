<?php
include '../src/bdd/Bdd.php';

$bdd = new bdd();
$req = $bdd->getBdd()->prepare('SELECT * FROM `utilisateur` WHERE id_utilisateur=:id_utilisateur');
$req->execute(array(
    "id_utilisateur" =>$_POST["id_utilisateur"] ?? 0
));
$res = $req->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Edition d'un profil</title>
</head>
<body>
<form action="../src/controleur/TraitementEdit.php" method="post">

    Nom :
    <input type="text" name="nom" value="<?=$res["nom"]?>"/><br>

    Prenom :
    <input type="text" name="prenom" value="<?=$res["prenom"]?>"/><br>

    
    <label for="fonction-select">fonction:</label>
    <select name="fonction" id="fonction-select" value="<?=$res["fonction"]?>"/>
        <option value="">--Fonction-</option>
        <option value="Professeur">Professeur</option>
        <option value="Contabilite">Contabilite</option>
        <option value="Autre">Autre</option>

    </select>

    Id utilisateur:

    <input type="number" name="id_utilisateur" value="<?=$res["id_utilisateur"]?>"/><br>

    Mot de passe:
    <input type="text" name="mdp" value="<?=$res["mdp"]?>"/><br>

    <input type="submit" name="ins"/><br>
</form>

</body>
</html>