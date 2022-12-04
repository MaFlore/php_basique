<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     try{
        $base=new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8','root', '');
    }
    catch(Exception $e){
        die('Erreur connexion non reussi'.$e->getMessage());
    }

    $idEtudiant=$_GET['idEtudiant'];

    $etudiant=$base->prepare('DELETE FROM etudiant WHERE idEtudiant=:idEtudiant');
    $etudiant->execute([':idEtudiant'=> $idEtudiant]);

    header('Location: /FICHIERPHP/exo/ACCEUIL.php');?>
</body>
</html>