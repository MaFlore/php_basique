<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>formulaire_ajout</title>
    <link rel="stylesheet" href="style1.css">
    
 
</head>
<body>

    <div class="signup-box">
        <h1>Ajout film</h1>
        <hr>
        <form method="post" action="">
            <label for="titre">Titre Film</label>
            <input type="text" name="titre" placeholder="Entrez le titre du film"/>
            <label for="auteur">Auteur Film</label>
            <input type="text" name="auteur" placeholder="Entrez l'auteur du film"/>
            <label for="producteur">Producteur Film</label>
            <input type="ntext" name="producteur"/>
            <label for="nombeBagage">Description Film</label>
            <input type="textarea" name="description"/>

            <input style="width: 320px; height: 35px; margin-top: 20px; border: none; background-color: #49c1a2; color: white; font-size: 18px;" type="submit" name="Ajouter" value="Ajouter"/>
        </form>
    </div>
</body>
</html>