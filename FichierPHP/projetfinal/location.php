<?php
    $nom = $_GET['nomClient'];
    $prenom = $_GET['prenomClient'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Location</title>
    <link rel="stylesheet" href="style3.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Enregistrer location</h1>
        <hr>
        <form method="post" action="locationRegister_bd.php">
            <label for="client">Client</label>
            <input type="text" name="client" value="<?=$_GET['nomClient'].' '.$_GET['prenomClient']?>"/>
            <label for="tarif">Tarif</label>
            <input type="text" name="tarif"/>
            <label for="utilisation">Utilisation</label>
            <input type="text" name="utilisation"/>
            <label for="numSerie">Numero serie</label>
            <input type="text" name="numSerie"/>
            <label for="dateLocation">Date location</label>
            <input type="date" name="dateLocation"/>
            <label for="nombreJour">Nombre de jour</label>
            <input type="number" name="nombreJour"/>
            <label for="etat">Etat</label>
            <input type="text" name="etat"/>
            <label for="facture">Facture TTC</label>
            <input type="number" name="facture"/>
    
            <input style="width: 315px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Louer" value="Louer"/>
        </form>
    </div>

    <p><a href="liste_client.php">Revenir en arrière</a></p>
</body>
</html>