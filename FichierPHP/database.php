<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>
<center>
<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=casinow;','root','');
    echo "Connexion Réussie";
}catch(Exception $e)
{
    echo "Erreur";
}
?>
<table border="1">
    <th colspan="4">VOITURES</th>
    <tr>
        <th>Numero</th>
        <th>Marque</th>
        <th>Modele</th>
        <th>Volume max</th>
    </tr>

    <?php
        $reponse=$bdd->query("SELECT idMarque, marque, modele, volumeMax FROM typeCamion");
        while($element=$reponse->fetch()){

        
    ?>
    <tr>
        <td><?php echo $element['idMarque']?></td>
        <td><?php echo $element['marque']?></td>
        <td><?php echo $element['modele']?></td>
        <td><?php echo $element['volumeMax']?></td>
    </tr>
    <?php } ?>
</table>
</center>
</body>
</html>
