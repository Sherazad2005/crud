<?php
    if (array_key_exists("erreur",$_GET)){
        echo "if y a une erreur.";
        if ($_GET["erreur"] == 0){
            echo "indentifiant deja utilisé";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un profil</title>
</head>
<body>
<form action="../src/controleur/TraitementSuppr.php" method="post">
    Voulez-vous supprimer réellement le compte d'id <?=$_GET["id_utilisateur"]?> ?<br>
    <input type="hidden" name="id_utilisateur" value="<?=$_GET["id_utilisateur"]?>"/><br>

    <input type="submit" name="ins" value="Confirmer"/><br> <a href="accueilid.php">Retour</a>

</form>

</body>
</html>