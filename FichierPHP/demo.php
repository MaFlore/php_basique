<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>
<body>
<?php
$nom =['DOTSE','KLUTSE','TEH','ADI','SOBO','GUENOU','TOGBE']

?>
<?php

$nrg['nom']='Nom';
$nrg['prenom']='Prénom';
$nrg['age']='Age';
$nrg['fillier']='Filière';
$nrg['telephone']='Téléphone';


?>
  <table border='1'>

        <?php
        
            echo'<tr>
            <th>'.$nrg['nom'].'</th> <th>'.$nrg['prenom'].'</th> <th>'.$nrg['age'].'</th> <th>'.$nrg['fillier'].'</th> <th>'.$nrg['telephone'].'</th> 
            </tr>';
            ?>
            
            <?php


    
             foreach($nom as $cle => $valeur){
                
               echo '<tr><td>'.$valeur.'</td> <td><input type="text"></td> <td><input type="number"></td> <td><input type="text"></td> <td><input type=""></td> </tr>';
             }

            ?>
  </table>
  <br />
  <?php
  $jour = date("d");
  $mois = date("m");
  $annee = date("Y");

  $heure = date("H");
  $minute = date("i");
  
  echo 'Hello MAFLORE Authentic ! La date de Today est le : '.$jour.'-'.$mois.'-'.$annee.' '.'et il est '.$heure.'h'.$minute;
  ?>
<

</body>
</html>

