
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
 
</head>
<body>
<center>
<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=projet;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
?>
    <h1>LES INFORMATIONS SUR LES VOYAGEURS</h1>
    <a href="formulaire_ajout.php">Ajouter</a>
    <hr>
    <table border="2px">
        <tr>
            <th style="color: azure;">Numero Voyageur</th>
            <th style="color: azure;">Nom</th>
            <th >Prenom</th>
            <th style="color: azure;">Numero Vol</th>
            <th style="color: azure;">Nombre bagage</th>
            <th style="color: azure;">Actions</th>
        </tr>

   <?php
        $reponse=$bdd->query("SELECT * FROM Voyageur");
        
        while($element=$reponse->fetch()){

        
    ?>
    <tr>
        <td style="color: azure;"><?php echo $element['idVoyageur']?></td>
        <td style="color: azure;"><?php echo $element['nom']?></td>
        <td style="font-weight: bold;"><?php echo $element['prenom']?></td>
        <td style="color: azure;"><?php echo $element['numVol']?></td>
        <td style="color: azure;"><?php echo $element['nombreBagage']?></td>
        <td style="color: azure;"><a href="modifier.php?idVoyageur=<?= $element['idVoyageur']?>">Modifier</a>
        <a href="../controllers/supprimer.php?idVoyageur=<?= $element['idVoyageur']?>">Supprimer</a>
        <a href="ajoutAvion.php?idVoyageur=<?= $element['idVoyageur']?>">Prendre Avion</a></td>
    </tr>
    <?php } ?>
    </table>
    <h1>LES AVIONS PRISES PAR LES VOYAGEURS</h1>
    <hr>
    <table border="2px">
        <tr>
            <th style="color: azure;">Numero Avion</th>
            <th style="color: azure;">Numero Voyageur</th>
            <th >Nom Avion</th>
            <th style="color: azure;">Nombre Voyageur</th>
            <th style="color: azure;">Actions</th>
        </tr>

   <?php
        $requete=$bdd->query("SELECT * FROM Avion");
        
        while($element=$requete->fetch()){

        
    ?>
    <tr>
        <td style="color: azure;"><?php echo $element['idAvion']?></td>
        <td style="color: azure;"><?php echo $element['idVoyageur']?></td>
        <td style="font-weight: bold;"><?php echo $element['nomAvion']?></td>
        <td style="color: azure;"><?php echo $element['nombreVoyageur']?></td>
        <td><a href="../controllers/delAvion.php?idAvion=<?= $element['idAvion']?>">Supprimer</a></td>
    </tr>
    <?php } ?>
    </table>

</center>
</body>
</html>