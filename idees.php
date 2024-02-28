<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajoutez vos idées</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="idee">
        <img src="img/idees.jpg" alt="">
    </div>

    <form action="traitement.php" method="POST"><br>
        Numéro du projet*:<br> <input type="int" name="nom" required> <br>
        Titre*: <input type="text" name="titre" required> <br>
        Catégorie*: <input type="text" name="categorie" required> <br>
        Description*: <input type="text" name="text" required> <br>
        Date de création*:<br> <input type="date" name="date" required> <br>
        Statut*: <input type="text" name="text" required> <br>
        <input type="submit">

    </form>

</body>
</html>