<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Register Client</title>
    <link rel="stylesheet" href="style1.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Enregistrer un client</h1>
        <hr>
        <form method="post" action="clientajout_bd.php">
            <label for="nomClient">Nom</label>
            <input type="text" name="nomClient" placeholder="MA04"/>
            <label for="prenomClient">Prenom</label>
            <input type="text" name="prenomClient" placeholder="Flore500"/>
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse"/>
            <label for="ville">Ville</label>
            <input type="text" name="ville"/>
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone"/>
            <label for="numPermis">Numero permis</label>
            <input type="text" name="numPermis"/>
            <label for="numCNI">Numero carte d'identite</label>
            <input type="text" name="numCNI"/>
            <label for="mail">Email</label>
            <input type="email" name="mail" placeholder="@gmail.com"/>

            <input style="width: 315px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Enregistrer" value="Enregistrer"/>
        </form>
    </div>

    <p><a href="liste_client.php">Revenir en arrière</a></p>
</body>
</html>