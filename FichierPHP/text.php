<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
    <style>
      :root{
        --scanner-color:yellow;}
        .scanner{
          width: 0;
          height: 0;
          margin-left: 50px;
          margin-top: 100px solid var(--scanner-color);
          border-left: 50px solid transparent;
          border-right: 50px solid transparent;
          border-radius: 50%;
          transform-origin: bottom center;
          animation: spin 2s linear infinite;
        }
        @keyframes spin{
          100%{-webkit-transform:rotate(360deg);}
        }
    </style>
</head>
<body>
<div class="scanner"></div>
<p>Bienvenue Monsieur <?php echo $_SESSION['nom'].' '.$_SESSION['prenom'];?></p>
<p>Votre email est : <?php echo $_SESSION['email'];?></p>
</body>
</html>