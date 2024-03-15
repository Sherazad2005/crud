
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
<form action="../src/controleur/TraitementIns.php" method="post">

    Nom :
    <input type="text" name="nom"/><br>

    Prenom :
    <input type="text" name="prenom"<br>


    <label for="fonction-select">fonction:</label>
    <select name="fonction" id="fonction-select">
        <option value="">--Fonction-</option>
        <option value="Professeur">Professeur</option>
        <option value="Contabilite">Contabilite</option>
        <option value="Autre">Autre</option>
    </select>


    Mots de passe:

    <input type="password" name="mdp"/><br>

    <input type="submit" name="ins"/><br>
</form>

</body>
</html>