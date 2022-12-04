<?php
try{
    $bdd = new PDO('mysql:host=localhost; dbname=projetfinal;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
$idLocation=$_GET['idLocation'];

$reponse=$bdd->prepare('SELECT *  FROM laucation WHERE idLocation=:idLocation');
$reponse->execute([':idLocation'=> $idLocation]);
$input= $reponse->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Modifier location</title>
    <link rel="stylesheet" href="style3.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Modifier location</h1>
        <hr>
        <form method="post" action="louermodifier_bd.php?idLocation=<?= $input->idLocation?>">
            <label for="client">Client</label>
            <input type="text" name="client" value="<?= $input->client?>"/>
            <label for="tarif">Tarif</label>
            <input type="text" name="tarif" value="<?= $input->tarif?>"/>
            <label for="utilisation">Utilisation</label>
            <input type="text" name="utilisation" value="<?= $input->utilisation?>"/>
            <label for="numSerie">Numero serie</label>
            <input type="text" name="numSerie" value="<?= $input->numSerie?>"/>
            <label for="dateLocation">Date location</label>
            <input type="date" name="dateLocation" value="<?= $input->dateLocation?>"/>
            <label for="nombreJour">Nombre de jour</label>
            <input type="number" name="nombreJour" value="<?= $input->nombreJour?>"/>
            <label for="etat">Etat</label>
            <input type="text" name="etat" value="<?= $input->etat?>"/>
            <label for="facture">Facture TTC</label>
            <input type="number" name="facture" value="<?= $input->facture?>"/>
    
            <input style="width: 315px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Update" value="Update"/>
        </form>
    </div>

    <p><a href="liste_location.php">Revenir en arrière</a></p>
</body>
</html>