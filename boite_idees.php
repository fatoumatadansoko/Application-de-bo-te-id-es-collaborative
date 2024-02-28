<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos_idées</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h2> Voici la liste de tous les idées reçues </h2> 
   <div class="ajout_idee">
   <a href="idees.php">Ajoutez mon idée</a>
   </div>
   
<?php while ($row = $requette->fetch(PDO::fetch_ASSOC)) :?>
    <?php 
 <?php endwhile ?>   
   <div class="categorie">
   <h4>Catégorie1</h4>
   <h4>Catégorie2</h4>
   <h4>Catégorie3</h4>
   <h4>Catégorie4</h4>
   </div>
</body>
</html>