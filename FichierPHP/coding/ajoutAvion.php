<?php
include_once('Crud_avion.class.php');
$a = new Crud_avion();
try{
    $bdd = new PDO('mysql:host=localhost; dbname=projet;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}

$idVoyageur=$_GET['idVoyageur'];

$reponse=$bdd->prepare('SELECT *  FROM Voyageur WHERE idVoyageur=:idVoyageur');
$reponse->execute([':idVoyageur'=> $idVoyageur]);
$vol = $reponse->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Prise Avion</title>
    <link rel="stylesheet" href="style1.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Prise Avion</h1>
        <hr>
        <form method="post" action="">
            <label for="idVoyageur">Numero Voyageur</label>
            <input type="number" name="idVoyageur" value="<?= $vol->idVoyageur?>"/>
            <label for="nomAvion">Nom Avion</label>
            <input type="text" name="nomAvion"/>
            <label for="nombreVoyageur">Nombre Voyageur</label>
            <input type="number" name="nombreVoyageur"/>

            <input style="width: 320px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Prendre" value="Prendre"/>
            <?php 
            
            if (isset($_POST['Prendre'])) {
                $idVoyageur = $_POST['idVoyageur'];
                $nomAvion = $_POST['nomAvion'];
                $nombreVoyageur = $_POST['nombreVoyageur'];
        
    
                $a->insert('avion',['idVoyageur'=>$idVoyageur,'nomAvion'=>$nomAvion,'nombreVoyageur'=>$nombreVoyageur]);
                if ($a == true) {
                    header('Location: /FICHIERPHP/Coding/acceuil.php');
                }
            }
        ?>
        </form>
    </div>
</body>
</html>