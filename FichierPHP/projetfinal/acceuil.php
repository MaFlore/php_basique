
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Acceuil</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>
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
    <ul class="nav navbar-nav navbar-right">
      
      <li class="active" style="font-family: 'Times New Roman';"><a><span class="glyphicon glyphicon-log-in">  </span>  Bienvenue Admin : <?php session_start(); echo $_SESSION['username']; ?></a></li>
      <li style="font-family: 'Times New Roman';"><a href="../signup.php"><span class="glyphicon glyphicon-user"> </span>  Sign Up</a></li>
    </ul>
  </div>
</nav>
<div class="scanner"></div>
<h2 class="clas1" style="background:whitesmoke;">BIENVENUE DANS NOTRE AGENCE DE LOCATION ET DE RESERVATION DE VOITURE</h2>

<footer class="text-center text-white fixed-bottom">
  <div class="text-center p-3" style="margin-top: 600px;font-size:21px; font-family:'Times New Roman';background:whitesmoke">
    © 2021 Copyright - MaFloreAuthentique - Votre Satisfation - Notre Desir...
  </div>
</footer>
</body>
</html>