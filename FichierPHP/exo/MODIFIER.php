
<?php
 try{
    $base=new PDO('mysql:host=localhost;dbname=etudiant;charset=utf8','root', '');
}
catch(Exception $e){
    die('Erryeur connexion non reussi'.$e->getMessage());
}

$idEtudiant=$_GET['idEtudiant'];

$etudiant=$base->prepare('SELECT *  FROM etudiant WHERE idEtudiant=:idEtudiant');
$etudiant->execute([':idEtudiant'=> $idEtudiant]);
$etu= $etudiant->fetch(PDO::FETCH_OBJ);

if(isset($_POST['use_name']) && isset($_POST['user_surname']) && isset($_POST['user_age']) && isset($_POST['sexe']) && isset($_POST['user_mail']) && isset($_POST['user_password']) && isset($_POST['user_contact'])){
    $nom=$_POST['use_name'];
    $prenom=$_POST['user_surname'];
    $age=$_POST['user_age'];
    $sexe=$_POST['sexe'];
    $mail=$_POST['user_mail'];
    $password=$_POST['user_password'];
    $contact=$_POST['user_contact'];

    $etudiant=$base->prepare('UPDATE etudiant  SET Nom=:use_name, Prenom=:user_surname, Age=:user_age, sexe=:sexe, email=:user_mail, mot_de_passe=:user_password, Contact=:user_contact WHERE idEtudiant=:idEtudiant');
    if( $etudiant->execute(array(
        'use_name'=>$nom,
        'user_surname'=>$prenom,
        'user_age'=>$age,
        'sexe'=>$sexe,
        'user_mail'=>$mail,
        'user_password'=>$password,
        'user_contact'=>$contact,
        'idEtudiant'=>$idEtudiant,
    ))){
        header('Location: /FICHIERPHP/exo/ACCEUIL.php'); 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
     body{
            background-image: url('tissu.jpg');
        }
    
    form {
        /* Uniquement centrer le formulaire sur la page */
        margin: 0 auto;
        width: 400px;
        /* Encadré pour voir les limites du formulaire */
        padding: 1em;
        border: 1px solid black;
        border-radius: 2em;
        background-color:rgba(0,0,0,0.5);
        
    }

form div + div {
  margin-top: 1em;
}
label {
  /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
  display: inline-block;
  width: 90px;
  text-align: right;
  color:white;
}

input{
  /* Pour s'assurer que tous les champs texte ont la même police.
     Par défaut, les textarea ont une police monospace */
  font: 1em sans-serif;

  /* Pour que tous les champs texte aient la même dimension */
  width: 300px;
  box-sizing: border-box;

  border-radius: 2em;

  /* Pour harmoniser le look & feel des bordures des champs texte */
  border: 1px solid black;
}
input:focus{
  /* Pour souligner légèrement les éléments actifs */
  border-color: #000;
}


.button {
  /* Pour placer le bouton à la même position que les champs texte */
  padding-left: 90px; /* même taille que les étiquettes */
}

button {
  /* Cette marge supplémentaire représente grosso modo le même espace que celui
     entre les étiquettes et les champs texte */
  margin-left: .5em;
}
p{
    text-align:center;
    color:white;
}
</style>
<body>

<div class="signup-box">
<form method='post'>
    <p> <strong>MODIFIER UN ETUDIANT </strong></p>
    <div>
        <label for="name">Nom :</label>
        <input type="text"  id="name" name="use_name"required value="<?= $etu->Nom?>"/>
    </div>
    <div>
        <label for="surname">Prenom :</label>
        <input type="text"  id="surname" name="user_surname"required value="<?= $etu->Prenom?>"/>
    </div>
    <div>
    <label for="user_age">Age :</label><input type="number"  name="user_age" id="user_age" max="60" min="10" required value="<?= $etu->Age?>"/>
    </div>
    <p>votre sexe:</p>
    <div>
    <label for="case">Féminin</label><input type="radio" name="sexe" id="case" required value="Feminin"/><label for="case">Masculin</label><input type="radio" name="sexe" id="case" required value="Masculin"/>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail"required value="<?= $etu->email?>"/>
    </div>
    <div>
        <label>Mot de passe</label>
        <input type="password"  name="user_password" required value="<?= $etu->mot_de_passe?>"/>
    </div>
    <div>
        <label>Contact</label>
        <input type="tel"  name="user_contact" required value="<?= $etu->Contact?>">
    </div>
    <div class="button">
        <input type="submit" name="Modifier" value="Modifier">
    </div>
    </form>
    </div>
</body>
</html>