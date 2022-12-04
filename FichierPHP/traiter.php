<?php

session_start();

$_SESSION['nom']=$_POST['nom'];
$_SESSION['prenom']=$_POST['prenom'];
$_SESSION['email']=$_POST['email'];
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
<a href="text.php">Inscrivez-vous ici</a></p>
<center>
<table border="1">
		<tr><td>Attributs</td><td>Valeurs</td></tr>
		<tr><td>Nom</td><td><?php echo $_POST["nom"];?></td></tr>
        <tr><td>Prenom</td><td><?php echo $_POST["prenom"];?></td></tr>
		<tr><td>Email</td><td><?php echo $_POST["email"];?></td></tr>
</table>
</center>
    
</body>
</html>