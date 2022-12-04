<?php
include_once('Crud_voyageur.class.php');
$a = new Crud_voyageur();
$idVoyageur=$_GET['idVoyageur'];
try{
    $bdd = new PDO('mysql:host=localhost; dbname=projet;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
$reponse=$bdd->prepare('SELECT *  FROM voyageur WHERE idVoyageur=:idVoyageur');
$reponse->execute([':idVoyageur'=> $idVoyageur]);
$vol = $reponse->fetch(PDO::FETCH_OBJ);
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
            <label for="nombreBagage">Nombre Bagage</label>
            <input type="number" name="nombreBagage" value="<?= $vol->nombreBagage?>"/>

            <input style="width: 320px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Modifier" value="Modifier">
            <?php 
    

                if (isset($_POST['Modifier'])) {
                    $idVoyageur=$_GET['idVoyageur'];
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $numVol = $_POST['numVol'];
                    $nombreBagage = $_POST['nombreBagage'];

                    $a->update('voyageur',['nom'=>$nom,'prenom'=>$prenom,'numVol'=>$numVol,'nombreBagage'=>$nombreBagage,'idVoyageur'=>$idVoyageur],"idVoyageur='$idVoyageur'");
                    if ($a == true) {
                        header('Location: /FICHIERPHP/Coding/acceuil.php');
                    }
                }
            ?>
        </form>
    </div>
</body>
</html>