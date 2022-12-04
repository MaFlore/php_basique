<?php
try{
    $bdd = new PDO('mysql:host=localhost; dbname=projetfinal;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
$idClient=$_GET['idClient'];

$reponse=$bdd->prepare('SELECT *  FROM client WHERE idClient=:idClient');
$reponse->execute([':idClient'=> $idClient]);
$input= $reponse->fetch(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Register Client</title>
    <link rel="stylesheet" href="style1.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Modifier un client</h1>
        <hr>
        <form method="post" action="clientmodifier_bd.php?idClient=<?= $input->idClient;?>">
            <label for="nomClient">Nom</label>
            <input type="text" name="nomClient" value="<?= $input->nomClient;?>"/>
            <label for="prenomClient">Prenom</label>
            <input type="text" name="prenomClient" value="<?= $input->prenomClient;?>"/>
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" value="<?= $input->adresse;?>"/>
            <label for="ville">Ville</label>
            <input type="text" name="ville" value="<?= $input->ville;?>"/>
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" value="<?= $input->telephone;?>"/>
            <label for="numPermis">Numero permis</label>
            <input type="text" name="numPermis" value="<?= $input->numPermis;?>"/>
            <label for="numCNI">Numero carte d'identite</label>
            <input type="text" name="numCNI" value="<?= $input->numCNI;?>"/>
            <label for="mail">Email</label>
            <input type="email" name="mail" value="<?= $input->mail;?>"/>

            <input style="width: 315px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Modifier" value="Modifier"/>
        </form>
    </div>

    <p><a href="liste_client.php">Revenir en arrière</a></p>
</body>
</html>