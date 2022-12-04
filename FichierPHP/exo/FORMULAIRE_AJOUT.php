<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<form method='post' action="ENREGISTREMENT_bd.php">
    <p> <strong>AJOUTER UN ETUDIANT </strong></p>
    <div>
        <label for="name">Nom :</label>
        <input type="text" placeholder="Enter your name" id="name" name="use_name"required>
    </div>
    <div>
        <label for="surname">Prenom :</label>
        <input type="text" placeholder="Enter your surname" id="surname" name="user_surname"required>
    </div>
    <div>
    <label for="user_age">Age :</label><input type="number" placeholder="Enter your age" name="user_age" id="user_age" max="60" min="10" required/>
    </div>
    <p>votre sexe:</p>
    <div>
    <label for="case">Féminin</label><input type="radio" name="sexe" id="case" required value="Feminin"/><label for="case">Masculin</label><input type="radio" name="sexe" id="case" required value="Masculin">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" placeholder="Enter your e-mail" id="mail" name="user_mail"required>
    </div>
    <div>
        <label>Mot de passe</label>
        <input type="password" placeholder="Enter your password " name="user_password" required>
    </div>
    <div>
        <label>Contact</label>
        <input type="tel" placeholder="Enter your tel " name="user_contact" required>
    </div>
    <div class="button">
        <input type="submit" name="Ajouter" value="Ajouter">
    </div>
    </form>
</body>
</html>