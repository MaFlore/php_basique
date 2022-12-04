<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Enregistrement Article</title>
    <link rel="stylesheet" href="">
    
 
</head>
<body>
    <div>
        <h1 style="text-align: center;"><U>Enregistrement article</U></h1>
        <form method="post" action="enregistrementArticle.php">
            <label for="categorie">Catégorie :</label>
            <select name="categorie">
                <option value="Biscuits">Biscuits</option>
                <option value="Fruits">Fruits</option>
                <option value="Legumes">Légumes</option>
                <option value="Tubercules">Tubercules</option>
                <option value="Condiments">Condiments</option>
            </select>
            <br>
            <br>
            <label for="libelle">Libellé :</label>
            <input type="text" name="libelle" value="Mangue"/>
            <br>
            <br>
            <label for="prix">Prix :</label>
            <input type="number" name="prix"/>
            <br>

            <input style=" margin-top: 20px; border: none; background-color: Black; color: white; font-size: 18px;" type="submit" name="Enregistrer" value="Enregistrer"/>
        </form>
    </div>
</body>
</html>