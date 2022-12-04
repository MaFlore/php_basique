<?php
include_once('../controllers/ajoutVoyageur_bd.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Formulaire_ajout</title>
    <link rel="stylesheet" href="style1.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Ajouter des données</h1>
        <hr>
        <form method="post" action="">
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="MA04"/>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" placeholder="Flore500"/>
            <label for="numVol">Numero Vol</label>
            <input type="number" name="numVol"/>
            <label for="nombreBagage">Nombre Bagage</label>
            <input type="number" name="nombreBagage"/>
            <input style="width: 320px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Ajouter" value="Ajouter"/>


      
        </form>
    </div>
</body>
</html>