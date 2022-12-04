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

if (isset($_POST['Ajouter'])){
    $nom=$_POST['use_name'];
    $prenom=$_POST['user_surname'];
    $age=$_POST['user_age'];
    $sexe=$_POST['sexe'];
    $mail=$_POST['user_mail'];
    $password=$_POST['user_password'];
    $contact=$_POST['user_contact'];

    $etudiant=$base->prepare('INSERT INTO etudiant(Nom, Prenom, Age, sexe, email, mot_de_passe, Contact) VALUES(:use_name, :user_surname, :user_age,:sexe, :user_mail,:user_password,:user_contact)');
    if($etudiant->execute(array(
        'use_name'=>$nom,
        'user_surname'=>$prenom,
        'user_age'=>$age,
        'sexe'=>$sexe,
        'user_mail'=>$mail,
        'user_password'=>$password,
        'user_contact'=> $contact,
        ))){
    header('Location: /FICHIERPHP/exo/ACCEUIL.php');
    }
}
            ?>
</body>
</html>