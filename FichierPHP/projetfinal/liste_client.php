<html>
<head>
    <meta charset="utf-8"/>
    <title>Liste client</title>
    <link rel="stylesheet" href="style4.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bod" >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="acceuil.php" id="clas2">FLORE AUTHENTIQUE</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="acceuil.php" id="clas2"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="text-center"><a href="liste_client.php" id="class2" style="font-size: 20px; "><span class="glyphicon glyphicon-th-list"></span> Afficher la liste des clients</a></li>
      <li class="text-center"><a href="liste_location.php" id="class2" style="font-size: 20px; "><span class="glyphicon glyphicon-th-list"></span> Afficher la liste des locations</a>
      <li class="text-center"><a href="liste_reservation.php" id="class2" style="font-size: 20px; "><span class="glyphicon glyphicon-th-list"></span> Afficher la liste des réservations</a>

    </ul>
  </div>
</nav>
<center>
<?php

try{
    $bdd = new PDO('mysql:host=localhost; dbname=projetfinal;','root','');
    
}catch(Exception $e)
{
    echo "Erreur";
}
?>
<div class="text-center">
<a href="client_print.php" class="btn btn-primary">Imprimer la liste des clients</a>
</div>
<h2 class="clas1" style="font-size: 23px;"><u>LISTES DES CLIENTS</u></h2>
<a href="acceuil.php">Revenir en arrière</a>
<hr>
<a href="client_register.php" id="class2" style="font-size: 20px;"><span class="glyphicon glyphicon-edit"></span> Enregistrer un client</a>

<table border="1px" style="margin-top: 30;">
        <tr>
            <th >ID Client</th>
            <th style="text-align: center;">Nom</th>
            <th style="text-align: center;">Prenom</th>
            <th style="text-align: center;">Adresse</th>
            <th >Ville</th>
            <th >Telephone</th>
            <th >Numero permis</th>
            <th >Numero CNI</th>
            <th style="text-align: center;">Email</th>
            <th style="text-align: center;">Actions</th>
        </tr>
        <?php
        $reponse=$bdd->query("SELECT * FROM client");
        $odre=0;
        while($element=$reponse->fetch()){
          $odre+=1;
        
    ?>
    <tr>
        <td ><?php echo $odre?></td>
        <td ><?php echo $element['nomClient']?></td>
        <td ><?php echo $element['prenomClient']?></td>
        <td ><?php echo $element['adresse']?></td>
        <td ><?php echo $element['ville']?></td>
        <td ><?php echo $element['telephone']?></td>
        <td ><?php echo $element['numPermis']?></td>
        <td ><?php echo $element['numCNI']?></td>
        <td ><?php echo $element['mail']?></td>
        <td ><a href="client_modifier.php?idClient=<?= $element['idClient']?>">Modifier</a>
        <a href="clientSupprimer_bd.php?idClient=<?= $element['idClient']?>">Supprimer</a>
        <a href="location.php?nomClient=<?= $element['nomClient']?>&amp;prenomClient=<?= $element['prenomClient']?>">LouerVoiture</a>
        <a href="reservation.php?nomClient=<?= $element['nomClient']?>&amp;prenomClient=<?= $element['prenomClient']?>">RéserverVoiture</a></td>
    </tr>
    <?php } ?>
</table>
<hr>		
</center>

<footer class="text-center text-white fixed-bottom">
  <div class="text-center p-3" style="margin-top: 500; font-family:'Times New Roman'">
    © 2021 Copyright - MAFLOREAUTHENTIQUE
  </div>
</footer>
</body>
</html>