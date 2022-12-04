<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=avion;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}

$numClient=$_GET['numClient'];

$reponse=$bdd->prepare('SELECT *  FROM voler WHERE numClient=:numClient');
$reponse->execute([':numClient'=> $numClient]);
$vol = $reponse->fetch(PDO::FETCH_OBJ);



if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['numVol']) && isset($_POST['nombeBagage'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $numVol=$_POST['numVol'];
    $nombeBagage=$_POST['nombeBagage'];

    $reponse=$bdd->prepare('UPDATE voler  SET nom=:nom, prenom=:prenom, numVol=:numVol, nombeBagage=:nombeBagage WHERE numClient=:numClient');
    if( $reponse->execute(array(
        'nom'=>$nom,
        'prenom'=>$prenom,
        'numVol'=>$numVol,
        'nombeBagage'=>$nombeBagage,
        'numClient'=>$numClient,
    ))){
        header('Location: /FICHIERPHP/projet/acceuil.php'); 
    }


}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>formulaire_ajout</title>
    <link rel="stylesheet" href="style1.css">
    
 
</head>
<body>


<div class="signup-box">
        <h1>Ajouter des données</h1>
        <hr>
        <form method="post">
            <label for="nom">Nom</label>
            <input type="text" name="nom" value="<?= $vol->nom;?>"/>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" value="<?= $vol->prenom;?>"/>
            <label for="numVol">Numero Vol</label>
            <input type="number" name="numVol" value="<?= $vol->numVol?>" />
            <label for="nombeBagage">Nombre Bagage</label>
            <input type="number" name="nombeBagage" value="<?= $vol->nombeBagage?>"/>

            <input style="width: 320px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Modifier" value="Modifier"/>
        </form>
    </div>
</body>
</html>