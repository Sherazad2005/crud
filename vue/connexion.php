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
    <title>Inscription</title>
</head>
<body>
<form action="../src/controleur/TraitementConnexion.php" method="post">


    indentifiant/nom :
    <input type="nom" name="nom"/><br>

    mdp :

    <input type="password" name="mdp"/><br>

    <input type="submit" name="ins"/><br>

</form>

</body>
</html>